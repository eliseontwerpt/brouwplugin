<?php namespace EliseOntwerpt\Brouwerbouwer\Models;

use Model;

/**
 * Model
 */
class BjcpCategoriesGuide extends Model
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
    public $table = 'eliseontwerpt_brouwerbouwer_bjcp_categories';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    public $hasMany =[
        'bjcpStyleGuide' => [
            BjcpStyleGuide::class,
            'key' => 'sub_categorie_id',
            'otherKey'=>'categorie_id'
        ]
    ];
}
