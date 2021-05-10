<?php namespace Eliseontwerpt\Brouwerbouwer\Models;

use Model;

/**
 * Model
 */
class MashScheme extends Model
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
    public $table = 'eliseontwerpt_brouwerbouwer_mash_scheme';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    public $hasOne =[ 
        'recipe' => [
            'Eliseontwerpt\Brouwerbouwer\Models\Recipes',            
            'key' => 'id',
            'otherKey'=>'recipe_id'
        ],
    ];
   
}
