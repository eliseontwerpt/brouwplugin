<?php namespace Eliseontwerpt\Brouwerbouwer\Models;

use Model;

/**
 * Model
 */
class WaterProfiles extends Model
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
    public $table = 'Eliseontwerpt_brouwerbouwer_waterprofiles';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}
