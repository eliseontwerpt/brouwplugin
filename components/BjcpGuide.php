<?php namespace Hjp\Brouwerbouwer\Components;

use Db;
use Lang;
use Redirect;
use BackendAuth;
use Cms\Classes\Page;
use Cms\Classes\ComponentBase;
use October\Rain\Database\Model;
use October\Rain\Database\Collection;
use Hjp\Brouwerbouwer\Models\BjcpStyleGuide as StyleGuide;
use Hjp\Brouwerbouwer\Classes\ComponentClass as ComClass;

class BjcpGuide extends \Cms\Classes\ComponentBase
{
    public function componentDetails()
    {
        return [
            'name' => 'hjp.brouwerbouwer::lang.component.styles.name',
            'description' => 'hjp.brouwerbouwer::lang.component.styles.description'
        ];
    }

    public function defineProperties()
    {
        return [
            'sorting' => [
                'title' => 'Sort on',
                'type' => 'dropdown',
                'default' => 'id',
                
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
                'default' => 50,
                'validationPattern' => '^[0-9]+$',
                'validationMessage' => 'The Number of items property can contain only numeric symbols'
            ]
        ];
    }

    public function getSortingOptions()
    {
        return [    'styles'=> 'Style',
                    'bjcp_categories_id'=>'Bjcp categorie', 
                    'style_family_id'=>'Style Family', 
                    'style_history_id' => 'Style History',
                    'origin' => 'Country',
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
    public function beerstyles()
    {
        if ($this->property('numberofitems') == 0){
            $noi = Hopslist::count();

        } else {
            $noi = $this->property('numberofitems');

        }
               
        if ($this->param('sorteer') && !$this->param('filteren'))
            {
                return StyleGuide::orderBy($this->param('sorteer')."_id")->paginate($noi);
        }
        elseif($this->param('sorteer') && $this->param('filteren')){
            return StyleGuide::Where($this->param('sorteer')."_id", $this->param('filteren'))->orderBy($this->param('sorteer')."_id")->paginate($noi);
        }
        return StyleGuide::orderBy($this->property('sorting'))->paginate($noi);        
    }

    public function beerstyle()
    {
        $postId = $this->param('id');
        return StyleGuide::where('id', $postId )->orderBy($this->property('sorting'))->get();
    }
}
