<?php namespace Eliseontwerpt\Brouwerbouwer\Models;
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
    public $table = 'eliseontwerpt_brouwerbouwer_bjcp_guide';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
    
    public $belongsTo =[ 
        'style_family' => [
            'Eliseontwerpt\Brouwerbouwer\Models\BjcpValues',            
            'key' => 'style_family_id',
            'otherKey'=>'id',
            'conditions' => 'subcategories = "style_family"',
        ],
        'style_history' => [
            'Eliseontwerpt\Brouwerbouwer\Models\BjcpValues',            
            'key' => 'style_history_id',
            'otherKey'=>'id',
            'conditions' => 'subcategories = "style_history"',
        ],
        'categories' => [
            'Eliseontwerpt\Brouwerbouwer\Models\BjcpValues',            
            'key' => 'categories_id',
            'otherKey'=>'id',
            'conditions' => 'subcategories = "categories"',
        ],
        'origin' => [
            'Eliseontwerpt\Brouwerbouwer\Models\BjcpValues',            
            'key' => 'origin_id',
            'otherKey'=>'id',
            'conditions' => 'subcategories = "origin"',
        ],
    ];
    
}
