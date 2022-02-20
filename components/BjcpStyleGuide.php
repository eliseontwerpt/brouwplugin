<?php

declare(strict_types = 1);

namespace EliseOntwerpt\Brouwerbouwer\Components;

use Cms\Classes\CodeBase;
use Cms\Classes\Page;
use EliseOntwerpt\Brouwerbouwer\Models\BjcpStyleGuide as BjcpStyleGuideModel;
use October\Rain\Database\Collection;

class BjcpStyleGuide extends AbstractComponent
{
    protected const NUMBER_OF_COLUMNS = 16;
    protected const SORT_DEFAULT = 'id';
    protected const SORTING_OPTIONS = [
        'name'=> 'Style',
        'categorie_id'=>'Bjcp categorie'
    ];

    protected $properties = [];
    protected string $model;

    public function __construct(CodeBase $cmsObject = null, $properties = [])
    {
        parent::__construct($cmsObject, $properties);
        $this->properties = $properties;
        $this->model = BjcpStyleGuideModel::class;
    }

    public function componentDetails()
    {
        return [
            'name' => 'eliseontwerpt.brouwerbouwer::lang.component.styles.name',
            'description' => 'eliseontwerpt.brouwerbouwer::lang.component.styles.description'
        ];
    }

    public function getSortingOptions(): array
    {
        return [
            'name'=> 'Style',
            'categorie_id'=>'Bjcp categorie',
        ];
    }

    public function getBjcpStyleGuidePageOptions()
    {
        return Page::sortBy('baseFileName')->lists('baseFileName', 'baseFileName');
    }

    public function beerStyles(): Collection
    {
        return $this->getModelData();

    }

    public function beerstyle(): Collection
    {
        return $this->getSingleItem();
    }
}
