<?php

declare(strict_types = 1);

namespace EliseOntwerpt\Brouwerbouwer\Components;

use Cms\Classes\CodeBase;
use Cms\Classes\Page;
use EliseOntwerpt\Brouwerbouwer\Models\Recipes as RecipesModel;
use October\Rain\Database\Collection;

class Recipes extends AbstractComponent
{

    protected const NUMBER_OF_COLUMNS = 3;
    protected const SORT_DEFAULT = 'id';
    protected const SORTING_OPTIONS = [
        'id'=>'Id',
        'bjcp_id'=>'Style',
        'name' => 'Name'
    ];

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

    public function recipes(): Collection
    {
        return $this->getModelData();
    }

    public function recipe(): Collection
    {
        return $this->getSingleItem();
    }


    public function bugu(): float
    {
        /** @var RecipesModel $recipe */
        $recipe = $this->getSingleItem()->first();
        return (float)$recipe->og;
    }

}
