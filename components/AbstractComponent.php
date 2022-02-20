<?php

declare(strict_types = 1);

namespace EliseOntwerpt\Brouwerbouwer\Components;

use Cms\Classes\CodeBase;
use Cms\Classes\ComponentBase;
use JetBrains\PhpStorm\ArrayShape;
use October\Rain\Database\Collection;

abstract class AbstractComponent extends ComponentBase
{

    protected const NUMBER_OF_COLUMNS = 1;
    protected const SORT_DEFAULT = 'id';
    protected const SORTING_OPTIONS = [
        'id'=>'Id',
    ];

    protected $properties = [];
    protected string $model;

    public function __construct(CodeBase $cmsObject = null, $properties = [])
    {
        parent::__construct($cmsObject, $properties);
        $this->properties = $properties;
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
                'type' => 'dropdown',
                'default' => static::SORT_DEFAULT,
            ],
            'direction' => [
                'title' => 'Direction',
                'type'  => 'dropdown',
                'default' => 'asc'
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

    public function getSortingOptions(): array {
        return static::SORTING_OPTIONS;
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
        $sortingOrientation = $this->property('sorting');

        if ($numberOfItems === null || $numberOfItems <= 0) {
            $numberOfItems = $this->model::count();
        }

        if ($sortOn === null) {
            return $this->model::orderBy($sortingOrientation)->get();
        }

        if ($filter === null) {
            return $this->model::orderBy($sortOn)->get();
        }

        $result = $this->model::Where($sortOn, $filter)
            ->orderBy($sortingOrientation)
            ->get();

        if ($result === null) {
            return $this->model::orderBy($sortingOrientation)->get();
        }

        return $result;
    }

    public function getSingleItem(): Collection
    {
        return $this->model::where('id', $this->param('id') )->orderBy($this->property('sorting'))->get();
    }

    public function getFilterFields(): array
    {
        $keys = array_keys($this->model::all()->find(1)->getAttributes());
        $values = array_map('ucfirst', $keys);
        $combinedValues = array_combine($keys, preg_replace('/_/', ' ', $values));

        return array_slice($combinedValues, 0, self::NUMBER_OF_COLUMNS);
    }
}
