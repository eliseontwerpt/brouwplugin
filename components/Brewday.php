<?php

declare(strict_types = 1);

namespace EliseOntwerpt\Brouwerbouwer\Components;

use Cms\Classes\CodeBase;
use Cms\Classes\Page;
use EliseOntwerpt\Brouwerbouwer\Models\Brewday as BrewdayModel;
use October\Rain\Database\Collection;

class Brewday extends AbstractComponent
{
    protected const NUMBER_OF_COLUMNS = 2;
    protected const SORT_DEFAULT = 'id';
//    protected const SORTING_OPTIONS = [];

    protected $properties = [];
    protected string $model;

    public function __construct(CodeBase $cmsObject = null, $properties = [])
    {
        parent::__construct($cmsObject, $properties);
        $this->properties = $properties;
        $this->model = BrewdayModel::class;
    }

    public function componentDetails()
    {
        return [
            'name' => 'eliseontwerpt.brouwerbouwer::lang.component.brewday.name',
            'description' => 'eliseontwerpt.brouwerbouwer::lang.component.brewday.description'
        ];
    }

    public function getBrewDayOptions(): Page
    {
        return Page::sortBy('baseFileName')->lists('baseFileName', 'baseFileName');
    }

    public function brewDays(): Collection
    {
        return $this->getModelData();
    }

    public function singleDay(): Collection
    {
        return $this->getSingleItem();
    }
}
