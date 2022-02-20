<?php

namespace EliseOntwerpt\Brouwerbouwer\Models;

use Model;

/**
 * Model
 */
class BjcpStyleGuide extends Model
{
    use \October\Rain\Database\Traits\Validation;

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
            'otherKey'=>'categorie_id'
        ]
    ];

}
