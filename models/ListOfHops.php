<?php namespace Eliseontwerpt\Brouwerbouwer\Models;

use Model;
use Db;
/**
 * Model
 */
class ListOfHops extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;
    protected $jsonable = ['substitutions'];

    /**
     * @var string The database table used by the model.
     */
    public $table = 'Eliseontwerpt_brouwerbouwer_hop_adjunct_list';


    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    public function getDropdownOptions($fieldName, $value, $formData)
    {
    if ($fieldName == 'substitute') {
        /**
        *  Fill the datafield 'substitute' with hops from the list. The same name will be ignored. 
        */        
        $list = ['' => '--empty--'];
        $all = ListOfHops::all();
        foreach( $all as $one){
            if ($this->id != $one->id){ 
                $list += [ $one->id => $one->name ];
            }           
        }
        
        return $list;
    }
    else {
        return ['' => '-- none --'];
    }
}
    public function getSubstitutionsOptions(){
        $value = Db::table($this->table)->lists('variety', 'id');
        return (array)$value;
    }
}
