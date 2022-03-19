<?php namespace EliseOntwerpt\Brouwerbouwer\Models;

use Model;
use EliseOntwerpt\Brouwerbouwer\Classes\HopProcessor;

/**
 * Model
 */
class Hops extends Model
{
    use \October\Rain\Database\Traits\Validation;

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
            ListOfHops::class,
            'key' => 'hop_list_id',
            'otherKey'=>'id'
        ],
    ];

    public $hasOne =[
        'recipe' => [
            Recipes::class,
            'key' => 'id',
            'otherKey'=>'recipe_id'
        ],
    ];

    /**
 * FIELD.YAML attributes
 */

    public function getGramsAttribute($value){
        $value = 0;

        if ($this->recipe !== null){

            $hopProcessor = new Hopprocessor(
                $this->alpha ,
                $this->recipe->flameout_volume(),
                $this->recipe->og,
                $this->ibu,
                $this->time
            );
            return round($hopProcessor->getGrams());

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
