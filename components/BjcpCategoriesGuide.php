<?php

declare(strict_types = 1);

namespace EliseOntwerpt\Brouwerbouwer\Components;

use Cms\Classes\CodeBase;
use Cms\Classes\Page;
use EliseOntwerpt\Brouwerbouwer\Models\BjcpCategoriesGuide as BjcpCategoriesGuideModel;
use October\Rain\Database\Collection;

class BjcpCategoriesGuide extends AbstractComponent
{
    protected const NUMBER_OF_COLUMNS = 2;
    protected const SORT_DEFAULT = 'id';

    protected $properties = [];
    protected string $model;

    public function __construct(CodeBase $cmsObject = null, $properties = [])
    {
        parent::__construct($cmsObject, $properties);
        $this->properties = $properties;
        $this->model = BjcpCategoriesGuideModel::class;
    }

    public function componentDetails()
    {
        return [
            'name' => 'Bjcp Categories',
            'description' => 'eliseontwerpt.brouwerbouwer::lang.component.styles.description'
        ];
    }

    public function getBjcpStyleGuidePageOptions()
    {
        return Page::sortBy('baseFileName')->lists('baseFileName', 'baseFileName');
    }

    public function beercategories(): Collection
    {
        return $this->getModelData();

    }

    public function beercategory(): Collection
    {
        return $this->getSingleItem();
    }
}

