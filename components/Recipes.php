<?php namespace Hjp\Brouwerbouwer\Components;

use Lang;
use Redirect;
use BackendAuth;
use Cms\Classes\Page;
use Cms\Classes\ComponentBase;
use October\Rain\Database\Model;
use October\Rain\Database\Collection;
use Hjp\Brouwerbouwer\Models\Recipes as BrewRecipes;


class Recipes extends \Cms\Classes\ComponentBase
{
    public function componentDetails()
    {
        return [
            'name' => 'hjp.brouwerbouwer::lang.component.recipes.name',
            'description' => 'hjp.brouwerbouwer::lang.component.recipes.description'
        ];
    }

    public function defineProperties()
    {
        return [            
            'sorting' => [
                'title' => 'Sort on',
                'type' => 'dropdown',                
                'default' => 'name',
            ],            
            'direction' => [
                'title' => 'Direction',
                'type'  => 'dropdown',
                'default' => 'asc'
            ],
            'numberofitems' => [
                'title' => 'Number of items',
                'description' => 'The most amount of todo items allowed [ 0 = all items ]',
                'type' => 'string',
                'default' => 30,
                'validationPattern' => '^[0-9]+$',
                'validationMessage' => 'The Number of items property can contain only numeric symbols'
            ]
        ];
    }

    public function getSortingOptions()
    {
        return ['id'=>'Id', 'bjcp_id'=>'Style', 'name' => 'Name'];
    }

    public function getDirectionOptions()
    {
        return [    'asc'=> 'Ascending',
                    'desc'=>'Descending'
                ];
    }
    public function getRecipePageOptions()    
    {
        return Page::sortBy('baseFileName')->lists('baseFileName', 'baseFileName');
    }

    // This array becomes available on the page as {{ component.recipes }}
    public function recipes()
    {
        if ($this->property('numberofitems') == 0){
            $noi = Hopslist::count();

        } else {
            $noi = $this->property('numberofitems');

        }
        return BrewRecipes::orderBy($this->property('sorting'), $this->property('direction'))->paginate($noi);
    }

    public function recipe()
    {
        $recipeId = $this->param('id');
        return BrewRecipes::where('id', $recipeId )->orderBy('id', 'desc')->get();
    }

}