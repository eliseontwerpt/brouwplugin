<?php

declare(strict_types = 1);

namespace EliseOntwerpt\Brouwerbouwer\Components;

use Cms\Classes\CodeBase;
use Cms\Classes\ComponentBase;
use EliseOntwerpt\Brouwerbouwer\Services\SortingParserService;
use JetBrains\PhpStorm\ArrayShape;
use October\Rain\Database\Collection;

abstract class AbstractComponent extends ComponentBase
{

    protected const NUMBER_OF_COLUMNS = 1;
    protected const SORT_DEFAULT = 'id';
    protected const ACCEPTED_FIELDTYPES = ['integer', 'double', 'string'];

    protected $properties = [];
    protected string $model;

    /**
     * @var SortingParserService
     */
    protected SortingParserService $sortingParser;

    public function __construct(CodeBase $cmsObject = null, $properties = [])
    {
        parent::__construct($cmsObject, $properties);
        $this->properties = $properties;
        $this->sortingParser = new SortingParserService();
    }

    /**
     * @inheritDoc
     */
    public function componentDetails()
    {
        return [
            'name' => 'eliseontwerpt.brouwerbouwer::lang.component.abstract.name',
            'description' => 'eliseontwerpt.brouwerbouwer::lang.component.abstract.description'
        ];
    }

    public function defineProperties(): array
    {
        return [
            'sorting' => [
                'title' => 'Sort on',
                'type' => 'set',
                'default' => static::SORT_DEFAULT,
            ],
            'direction' => [
                'title' => 'Direction',
                'type'  => 'dropdown',
                'default' => 'Ascending'
            ],
            'numberOfItems' => [
                'title' => 'Number of items',
                'description' => 'The most amount of todo items allowed [ 0 = all items ]',
                'type' => 'string',
                'default' => 50,
                'validationPattern' => '^[0-9]+$',
                'validationMessage' => 'The Number of items property can contain only numeric symbols'
            ],
        ];
    }

    public function getSortingOptions(): array
    {
        $sortingData = $this->sortingParser->getSortingOptions($this->model);

        $values = array_map('ucfirst', $sortingData);
        return array_combine($sortingData, preg_replace('/_/', ' ', $values));
    }

    #[ArrayShape(['asc' => "string", 'desc' => "string"])] public function getDirectionOptions(): array
    {
        return [
            'asc'=> 'Ascending',
            'desc'=>'Descending'
        ];
    }

    public function getModelData(): Collection
    {
        $sortOn = $this->param('sorteer');
        $filter = $this->param('filteren');
        $numberOfItems = $this->property('numberOfItems');

        if ($numberOfItems === null || $numberOfItems <= 0) {
            $numberOfItems = $this->model::count();
        }

        if ($sortOn === null) {

            $a = $this->model::orderBy('id')->get();
            return $this->model::orderBy('id')->get();
        }

        if (str_contains($sortOn, '.')) {
            $splitRelationField = explode('.' ,$sortOn);
            $relation = $splitRelationField[0];
            $field = $splitRelationField[1];
            return $this->sortCollectionOnRelation($relation, $field);
        }

        if ($filter === null) {
            return $this->model::orderBy($sortOn)->get();
        }

        $result = $this->model::Where($sortOn, $filter)
            ->orderBy($sortOn)
            ->get();

        if ($result === null) {
            return $this->model::orderBy('id')->get();
        }

        return $result;
    }

    public function getSingleItem(): Collection
    {
        return $this->model::where('id', $this->param('id') )->get();
    }

    public function getSortingFields(): array
    {
        $filterList = $this->property('sorting');
        if ($filterList === null || !is_array($filterList)) {
            return [];
        }
        $filterLabels = array_map('ucfirst', $filterList);
        return array_combine($filterList, preg_replace('/_/', ' ', $filterLabels));
    }

    protected function sortCollectionOnRelation(string $relation, string $fieldName): Collection
    {
        $collection = $this->model::all();
        $sortedRelations = $collection->pluck($relation)->sortBy($fieldName)->all();
        $pluckedCollection = new Collection();
        foreach($sortedRelations as $index1 => $model1) {
            $model = $collection[$index1];
            $pluckedCollection->add($model);
        }
        return $pluckedCollection;
    }

    public function getCategoryFields(): array
    {
        $sortingField = $this->getParamField();
        if ($sortingField === null) {
            return [];
        }
        $models = $this->model::all();
        $values = [];
        foreach($models as $model){
            $field = $sortingField['field'];
            if (array_key_exists('relation', $sortingField)){
                $relation = lcfirst($sortingField['relation']);
                if ($model->$relation !== null) {
                    $fieldValue = $model->$relation->getAttribute($field);
                    if (in_array(gettype($fieldValue), self::ACCEPTED_FIELDTYPES )) {
                        $values[$model->id] = $fieldValue;
                    }
                }
                continue;
            }
            $fieldValue = $model->$field;
            if (in_array(gettype($fieldValue), self::ACCEPTED_FIELDTYPES )) {
                $values[$model->id] = $fieldValue;
            }
        }

        return $values;
    }

    protected function getParamField(): ?array
    {
        $value = $this->param('sorteer');
        if ($value === null) {
            return null;
        }

        $values = [
            'field' => $value,
        ];
        if (str_contains($value, '.')) {
            $splitValue = explode('.' ,$value);
            $values = [
                'relation' => $splitValue[0],
                'field' => $splitValue[1],
            ];
        }

        return $values;
    }
}
