<?php namespace EliseOntwerpt\Brouwerbouwer\Models;

use Model;
use EliseOntwerpt\Brouwerbouwer\Classes\Hopprocessor;

/**
 * Model
 */
class Hops extends Model
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
    public $table = 'eliseontwerpt_brouwerbouwer_hops';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    public $belongsTo =[ 
        'hop_list' => [
            'EliseOntwerpt\Brouwerbouwer\Models\ListOfHops',            
            'key' => 'hop_list_id',
            'otherKey'=>'id'
        ],
    ];

    public $hasOne =[ 
        'recipe' => [
            'Eliseontwerpt\Brouwerbouwer\Models\Recipes',            
            'key' => 'id',
            'otherKey'=>'recipe_id'
        ],
    ];

    /**
 * FIELD.YAML attributes
 */

    public function getGramsAttribute($value){
        $value = 0;
        
        if (is_null($this->recipe) === false){

            $calculations = new Hopprocessor;
            $calculations->set_val(
                array(  'alfaacid' => $this->alpha ,
                        'volume' => $this->recipe->flameout_volume() , 
                        'og' => $this->recipe->og,
                        'ibu' => $this->ibu,
                        'time' => $this->time )
                );            
            return round($calculations->grams);
            
        }     
    }

    public function filterFields($fields, $context = null)
    {
        if ($this->dryhop == true) {
            //$fields->grams->disabled = false;
            $fields->ibu->disabled = true;
        }
        elseif ($this->dryhop == false) {
           // $fields->grams->disabled = true;
            $fields->ibu->disabled = false;
        }
        else {
            //$fields->grams->disabled = true;
            $fields->ibu->disabled = false;
        }
    } 
}
