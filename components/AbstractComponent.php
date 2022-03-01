<?php

declare(strict_types = 1);

namespace EliseOntwerpt\Brouwerbouwer\Components;

use Cms\Classes\CodeBase;
use Cms\Classes\ComponentBase;
use EliseOntwerpt\Brouwerbouwer\Services\RelationParserService;
use JetBrains\PhpStorm\ArrayShape;
use October\Rain\Database\Collection;

abstract class AbstractComponent extends ComponentBase
{

    protected const NUMBER_OF_COLUMNS = 1;
    protected const SORT_DEFAULT = 'id';

    protected $properties = [];
    protected string $model;
    /**
     * @var RelationParserService
     */
    protected RelationParserService $relationParser;

    public function __construct(CodeBase $cmsObject = null, $properties = [], )
    {
        parent::__construct($cmsObject, $properties);
        $this->properties = $properties;
        $this->relationParser = new RelationParserService();
        $this->model = '';
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
        $relationData = $this->relationParser->getSortingOptions($this->model);

        $values = array_map('ucfirst', $relationData);
        $combinedValues = array_combine($relationData, preg_replace('/_/', ' ', $values));

        return $combinedValues;
    }

    #[ArrayShape(['asc' => "string", 'desc' => "string"])] public function getDirectionOptions(): array
    {
        return [
            'asc'=> 'Ascending',
            'desc'=>'Descending'
        ];
    }

    protected function getModelData(): Collection
    {
        $sortOn = $this->param('sorteer');
        $filter = $this->param('filteren');
        $numberOfItems = $this->property('numberOfItems');

        if ($numberOfItems === null || $numberOfItems <= 0) {
            $numberOfItems = $this->model::count();
        }

        if ($sortOn === null) {
            return $this->model::orderBy('id')->get();
        }

        if (str_contains($sortOn, '.')) {
            $splitRelationField = explode('.' ,$sortOn);
            $relation = $splitRelationField[0];
            $field = $splitRelationField[1];
            $collection = $this->model::all();
            return $collection;
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
    function getRelationElement($a, $b){

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

    protected function getModelDataWithRelationSorting(string $relationField): Collection
    {
        $splitRelationField = explode('.' ,$relationField);
        $relation = $splitRelationField[0];
        $field = $splitRelationField[1];
        $models = $this->model::all();
        $model = $models[1];
        return $model->$relation()->orderBy($field, 'asc')->get();
    }

}
