<?php

declare(strict_types = 1);

namespace EliseOntwerpt\Brouwerbouwer\Components;

use Cms\Classes\CodeBase;
use Cms\Classes\Page;
use EliseOntwerpt\Brouwerbouwer\Models\ListOfHops as ListOfHopsModel;
use October\Rain\Database\Collection;

class ListOfHops extends AbstractComponent
{

    protected const NUMBER_OF_COLUMNS = 1;
    protected const SORT_DEFAULT = 'variety';

    protected $properties = [];
    protected string $model;

    public function __construct(CodeBase $cmsObject = null, $properties = [])
    {
        parent::__construct($cmsObject, $properties);
        $this->properties = $properties;
        $this->model = ListOfHopsModel::class;
    }

    public function componentDetails(): array
    {
        return [
            'name' => 'Hops',
            'description' => 'eliseontwerpt.brouwerbouwer::lang.component.listofhops.description'
        ];
    }

    public function getListOfHopsOptions(): Page
    {
        return Page::sortBy('baseFileName')->lists('baseFileName', 'baseFileName');
    }

    public function hops(): Collection
    {
        return $this->getModelData();;
    }

    public function variety(): Collection
    {
        $postId = $this->param('id');
        $val = 'id';
        if (is_numeric($postId) === false){
            $val = 'variety';
        }
        return $this->getSingleItem();
    }
}

