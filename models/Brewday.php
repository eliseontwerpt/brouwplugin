<?php namespace EliseOntwerpt\Brouwerbouwer\Models;

use Model;
use Recipe;

/**
 * Model
 */
class Brewday extends Model
{
    use \October\Rain\Database\Traits\Validation;
    

    /**
     * @var string The database table used by the model.
     */
    public $table = 'elisontwerpt_brouwerbouwer_brewday';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    public $belongsTo =[ 
        'recipe' => [
            'EliseOntwerpt\Brouwerbouwer\Models\Recipes',            
            'key' => 'recipe_id',
            'otherKey'=>'id'
        ],
    ];

    public $attachMany = [
        'photos' => 'System\Models\File'
    ];

    public function getogrecipeAttribute($value){
        if (isset($this->recipe)){
            $value = $this->recipe->og;    
        }
        return $value;
    }

    public function getogmashrecipeAttribute($value){
        if (isset($this->recipe)){
            $value = $this->recipe->sgmash;    
        }
        return $value;
    }

    public function getBeerCategoryAttribute($value){
        if (isset($this->recipe)){
            $value = $this->recipe->bjcp->styles;    
        }
        return $value;
        
    }
    
    public function getDateBrewdayAttribute($value){
        if (isset($value)== false){
            $value = date('Y-m-d');
        }
        return $value;        
    }

    public function getCalciumSulfaatAttribute($value){
        if (isset($this->recipe->waterprofile) == true) {
            $value = $this->recipe->calciumsulfaat;
           
        }
        return round($value, 2) . " gr" ;
    }
    
    public function getKaliumChlorideAttribute($value){
        if (isset($this->recipe->waterprofile) == true) {
            $value = $this->recipe->kaliumchloride ;
        } 
        return round($value, 2) . " gr" ;  
    }
    
    public function getBakingSodaAttribute($value){
        if (isset($this->recipe->waterprofile) == true) {
            $value = $this->recipe->bakingsoda;
         
        }
        return round($value, 2) . " gr" ;
    }

}
