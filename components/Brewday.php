<?php namespace Hjp\Brouwerbouwer\Components;

use Lang;
use Redirect;
use BackendAuth;
use Cms\Classes\Page;
use Cms\Classes\ComponentBase;
use October\Rain\Database\Model;
use October\Rain\Database\Collection;
use Hjp\Brouwerbouwer\Models\Brewday as Brew;


class Brewday extends \Cms\Classes\ComponentBase
{
    public function componentDetails()
    {
        return [
            'name' => 'hjp.brouwerbouwer::lang.component.brewday.name',
            'description' => 'hjp.brouwerbouwer::lang.component.brewday.description'
        ];
    }

    public function defineProperties()
    {
        return [
            'sorting' => [
                'title' => 'Sort on',
                'type' => 'dropdown',
                'default' => 'date',
                
            ],
            'direction' => [
                'title' => 'Direction',
                'type'  => 'dropdown',
                'default' => 'desc'
            ],
            'numberofitems' => [
                'title' => 'Number of items',
                'description' => 'The most amount of todo items allowed',
                'type' => 'string',
                'default' => 0,
                'validationPattern' => '^[0-9]+$',
                'validationMessage' => 'The Number of items property can contain only numeric symbols'
            ]
        ];
    }

    public function getSortingOptions()
    {
        return [    'date_brewday'=> 'Date',
                    'date_bottle'=>'Bottle Date', 
                    'score'=>'Score'
                ];
    }
    public function getDirectionOptions()
    {
        return [    'asc'=> 'Ascending',
                    'desc'=>'Descending'
                ];
    }

    public function getBjcpStyleGuideOptions()    
    {
        return Page::sortBy('baseFileName')->lists('baseFileName', 'baseFileName');
    }

    // This array becomes available on the page as {{ component.recipes }}
    public function alldays()
    {
        return Brew::orderBy($this->property('sorting'), $this->property('direction'))->Paginate($this->property('numberofitems'));
    }

    public function day()
    {
        $postId = $this->param('id');
        return Brew::where('id', $postId )->orderBy('id', $this->property('direction'))->get();
    }
}

