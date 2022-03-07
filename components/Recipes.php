<?php

declare(strict_types = 1);

namespace EliseOntwerpt\Brouwerbouwer\Components;

use Cms\Classes\CodeBase;
use Cms\Classes\Page;
use EliseOntwerpt\Brouwerbouwer\Models\Recipes as RecipesModel;
use EliseOntwerpt\Brouwerbouwer\Services\SortingParserService;

class Recipes extends AbstractComponent
{

    protected const NUMBER_OF_COLUMNS = 16;
    protected const SORT_DEFAULT = 'id';

    protected $properties = [];
    protected string $model;

    public function __construct(CodeBase $cmsObject = null, $properties = [])
    {
        parent::__construct($cmsObject, $properties);
        $this->properties = $properties;
        $this->model = RecipesModel::class;
    }

    public function componentDetails(): array
    {
        return [
            'name' => 'Recipes',
            'description' => 'eliseontwerpt.brouwerbouwer::lang.component.recipes.description'
        ];
    }

    public function getRecipesPageOptions(): Page
    {
        return Page::sortBy('baseFileName')->lists('baseFileName', 'baseFileName');
    }
}
