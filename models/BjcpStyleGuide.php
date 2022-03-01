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

    public $hasOne =[
        'bjcpCategoriesGuide' => [
            'EliseOntwerpt\Brouwerbouwer\Models\BjcpCategoriesGuide',
            'key' => 'categorie_id',
            'otherKey'=>'sub_categorie_id'
        ]
    ];

    public $attachMany = [
        'photos' => 'System\Models\File'
    ];

}
