<?php namespace EliseOntwerpt\Brouwerbouwer\Components;

use Lang;
use Redirect;
use BackendAuth;
use Cms\Classes\Page;
use Cms\Classes\ComponentBase;
use October\Rain\Database\Model;
use October\Rain\Database\Collection;
use EliseOntwerpt\Brouwerbouwer\Models\ListOfHops as Hopslist;



class Hops extends \Cms\Classes\ComponentBase
{
    public function componentDetails()
    {
        return [
            'name' => 'eliseontwerpt.brouwerbouwer::lang.component.hops.name',
            'description' => 'eliseontwerpt.brouwerbouwer::lang.component.hops.description'
        ];
    }

    public function defineProperties()
    {
        return [
            'sorting' => [
                'title' => 'Sort on',
                'type' => 'dropdown',
                'default' => 'variety',
                
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
        return [    'alpha_min'=> 'Alpha acids(%)',
                    'id'=>'Id', 
                    'purpose'=>'purpose', 
                    'variety' => 'Name',
                    'origin' => 'Country',
                ];
    }

    public function getDirectionOptions()
    {
        return [    'asc'=> 'Ascending',
                    'desc'=>'Descending'
                ];
    }

    public function getHopslistOptions()    
    {
        return Page::sortBy('baseFileName')->lists('baseFileName', 'baseFileName');
    }

    // This array becomes available on the page as {{ component.recipes }}
    public function listOfHops()
    {
        if ($this->property('numberofitems') == 0){
            $noi = Hopslist::count();

        } else {
            $noi = $this->property('numberofitems');

        }

        if ($this->param('sorteer') && !$this->param('filteren')){
            return Hopslist::orderBy($this->param('sorteer'))->paginate($noi); 
        }
        elseif($this->param('sorteer') && $this->param('filteren')){
            return Hopslist::Where($this->param('sorteer'), $this->param('filteren'))->orderBy($this->param('sorteer')."_id")->paginate($noi);
        }
        
        return Hopslist::orderBy($this->property('sorting'), $this->property('direction'))->paginate($noi);
    }

    public function variety()
    {
        $postId = $this->param('id');
        $val = 'id';
        if (is_numeric($postId) == false){
            $val = 'variety';   
        } 
        return Hopslist::where($val, $postId )->orderBy($this->property('sorting'))->get();
    }

}

