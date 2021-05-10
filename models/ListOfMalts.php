<?php namespace Eliseontwerpt\Brouwerbouwer\Models;

use Model;

/**
 * Model
 */
class ListOfMalts extends Model
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
    public $table = 'eliseontwerpt_brouwerbouwer_malt_adjunct_list';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    public function getYieldAttribute($value){
        $value = 1 + (round(46 * ($this->extraction/100))/1000);
        return $value;
    }
}
