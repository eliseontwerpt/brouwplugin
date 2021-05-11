<?php namespace EliseOntwerpt\Brouwerbouwer\Models;
use Db;
use Model;

/**
 * Model
 */
class BjcpStyleGuide extends Model
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
    public $table = 'eliseontwerpt_brouwerbouwer_bjcp_sub_categories';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
    
    public $hasMany =[ 
        'values' => [
            'EliseOntwerpt\Brouwerbouwer\Models\BjcpValues',            
            'key' => 'sub_categorie_id',
            'otherKey'=>'sub_categories_id'
        ]
    ];
    
}
