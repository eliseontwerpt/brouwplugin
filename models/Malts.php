<?php namespace Hjp\Brouwerbouwer\Models;

use Model;
use Flash;
use Hjp\Brouwerbouwer\Classes\Maltsprocessor;
//use Hjp\Brouwerbouwer\Models\Recipes;
/**
 * Model
 */
class Malts extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */

    public $timestamps = false;

    /**
     * @var string The database table used by the model.
     */
    public $table = 'hjp_brouwerbouwer_malts';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    public $belongsTo =[ 
        'malt_list' => [
            'Hjp\Brouwerbouwer\Models\ListOfMalts',            
            'key' => 'malt_list_id',
            'otherKey'=>'id'
        ]
    ];

    public $hasOne =[ 
        'recipe' => [
            'Hjp\Brouwerbouwer\Models\Recipes',            
            'key' => 'id',
            'otherKey'=>'recipe_id'
        ],
        'brewday' => [
                'Hjp\Brouwerbouwer\Models\Brewday',            
                'key' => 'recipe_id',
                'otherKey'=>'recipe_id'
        ],
    ];
    
    private function set_calculations(){
        if (is_null($this->recipe) === false){
            $this->calculations = new Maltsprocessor($this->recipe);
        }
    }
/**
*   FIELD.YAML attributes
*/
    public function getMassaAttribute($value){
        return $this->get_mass();
    }

    public function getTotalPercentageAttribute($value){        
        return $this->get_total_percentage();        
    }

    public function getPercentageWeightAttribute($value){ 
        
        if (is_null($this->recipe) === false AND is_null($this->malt_list) === false ) { 
            return $this->massa / $this->recipe->mash_loss() *100;
        }
                
    }
    
/**
*   Functions
*/    
    private function get_mass(){
        $this->set_calculations();
        if (is_null($this->malt_list) === false){            
            return $this->calculations->get_malt_mass($this->percentage, $this->malt_list->extraction);
        }
    }
    private function get_total_percentage(){
        $this->set_calculations();
        return $this->calculations->getTotalMaltPercentage();
    }
}
