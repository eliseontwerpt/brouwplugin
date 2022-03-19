<?php namespace EliseOntwerpt\Brouwerbouwer\Models;

use Model;
use Db;
use EliseOntwerpt\Brouwerbouwer\Classes\Waterprofiel;
use EliseOntwerpt\Brouwerbouwer\Classes\Calculations;
use EliseOntwerpt\Brouwerbouwer\Classes\Maltsprocessor;

class Recipes extends Model
{
    use \October\Rain\Database\Traits\Validation;

    public $timestamps = false;
    /**
     * @var string The database table used by the model.
     */
    public $table = 'eliseontwerpt_brouwerbouwer_recipes';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    public $hasMany =[
        'malts' => [
            Malts::class,
            'key'=>'recipe_id'
        ],
        'listOfHops' => [
            Hops::class,
            'key' => 'recipe_id'
        ],
        'mashScheme' =>[
            MashScheme::class,
            'key' => 'recipe_id'
        ],
    ];

    public $belongsTo =[
        'gear' => [
            Gear::class
        ],
        'bjcp' => [
            BjcpStyleGuide::class,
            'key' => 'bjcp_id',
            'otherKey'=>'id'
        ],
        'waterProfiles' => [
            WaterProfiles::class,
            'key' => 'waterProfiles_id',
            'otherKey'=>'id'
        ],
    ];

/**
 * FIELD.YAML attributes
 */

    public function getPlatoAttribute($value): float
    {
        return Calculations::SpecifGravity2pPlato($this->og);
    }

    public function getTotalPercentageAttribute($value){
        return $this->gettotalpercentage();
    }

    public function getIBUAttribute($value): int
    {
        $value = 0;
        if ($this->hops === null) {
            return $value;
        }
        foreach ($this->hops as $hop) {
            $value += $hop->ibu;
        }
        return $value;
    }

    public function getEBCAttribute($value): int
    {

        $mp = new Maltsprocessor($this);
        return $mp->calculate_ebc();
    }

    public function getmashwaterAttribute($value){
        $value = 0;
        $value = $this->calculate_mash_water();
        return $value;
    }

    public function getspargewaterAttribute($value){
        $value = 0;
        $value = $this->calculate_sparge_water();
        return $value;

    }

    public function getSgBoilAttribute($value){
        $value = 0;
        if ($this->spargewater + $this->mashwater >0 ){
            $sparge = ($this->og -1) / ($this->spargewater + $this->mashwater - ($this->mash_loss()/1000));
            $value = ($sparge * $this->flameout_volume()) +1;
        }
        return round($value, 3) ;
    }

    public function getSgMashAttribute($value){
        $value = 0;
        if ($this->mashwater > 0 ){
            $mash = ($this->og -1) / $this->mashwater;
            $value = ($mash * $this->flameout_volume()) +1;
        }
        return round($value, 3) ;
    }

    public function getCalciumSulfaatAttribute($value){
        return round($this->waterprofile("Ca", "SO4"), 2) ;
    }

    public function getKaliumChlorideAttribute($value){
        return round($this->waterprofile("K", "Cl"), 2) ;
    }

    public function getBakingSodaAttribute($value){
        return round($this->waterprofile("Na", "HCO3"), 2) ;
    }

    public function gettotalpercentage(){
        $value = 0;
        $value = Calculations::mathAddingUp($this->malts, 'percentage');
        return $value;
    }

    public function getSumAttribute($value){
        return $this->spargewater + $this->mashwater;
    }

    public function get_waterprofiel(){
        if (isset($this->waterProfiles) == true) {
            return $this->waterProfiles;
        }
    }

    public function get_waterprofiel_gear(){
        if (isset($this->gear->waterProfiles) == true) {
            return $this->gear->waterProfiles;
        }
    }

    private function waterProfiles($var1, $var2){
        if (isset($this->waterProfiles) == true) {
            $calc = new Waterprofiel($this);
            return $calc->getMolElement($var1, $var2);
        }
        return 0;
    }
    /**
     * BREWING CALCULATIONS
     */
    public function rgb($palette = null){
        if (isset($this->ebc)==true){
            if (Db::table('eliseontwerpt_brouwerbouwer_color_palette')->where('ebc', $this->ebc)->exists()){
                $palette = Db::table('eliseontwerpt_brouwerbouwer_color_palette')->where('ebc', $this->ebc)->first();
            }
            else {
                $palette = Db::table('eliseontwerpt_brouwerbouwer_color_palette')->where('ebc', 59)->first();
            }
            return $palette;
        }

    }



    public function mash_loss(){
        $value = 0;
        foreach ($this->malts as $malt) {
            $value += $malt->massa;
        }
        return $value;
    }

    public function get_correction_factor($e){
        $total = 0.0000;
        $value = 0.0000;
        $e = floatval($e);
        foreach ($this->malts as $malt) {
            $total += ($malt->malt_list->extraction * $malt->percentage)/100;
        }
        return ($e - $total)/100;

    }
    public function calculate_mash_water(){
        $value = 0;
        $value = ($this->mash_loss() / 1000) * $this->mash_ratio;
        return round($value,2);
    }

    public function calculate_sparge_water(){
        $value = 0;
        $value =  ($this->flameout_volume() - $this->mash_water) + $this->total_volume_loss();
        return round($value,2);
    }

    public function flameout_volume(){
        if (isset($this->gear)) {
           return $this->volume + ($this->gear->tubeloss /1000);
        }
        else{
            return $this->volume + 0.5;
        }
    }

    public function total_volume_loss(){
        if (isset($this->gear)) {
            return (($this->gear->evaporation * $this->boil_time) + $this->mash_loss()) /1000;
        }
        else{
            return 0;
        }
    }
}

