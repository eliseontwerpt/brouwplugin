<?php namespace Eliseontwerpt\Brouwerbouwer\Classes;

use Db;
use Eliseontwerpt\Brouwerbouwer\Classes\Calculations;
use Eliseontwerpt\Brouwerbouwer\Models\Recipes;



class Maltsprocessor {

    private $model;

    public function __construct(Recipes $model){        
        $this->model = $model;
        $this->volume = $this->model->flameout_volume();       
    }

    /**
     *  Calculates de Mass in grams 
     *  Massa (gr) = liter * plato / ((brouwzaalrendement * 100) * perc_extractie) * perc_ingredient * 1000
     *  return massa (gr)
     */
    public function get_malt_mass($perc, $extract){        
        $correctiefactor = ($this->get_correction_factor($extract) * $perc/100) + ($perc/100) ;      
        $value = (($this->model->flameout_volume() )* Calculations::SpecifGravity2pPlato($this->model->og) / ($this->model->gear->efficiency * ($extract/100) ) * ($correctiefactor) * 1000)  ;
        return round($value);
    }
    
    public function calculate_ebc(){
        $value = 0;        
        foreach ($this->model->malts as $malt) {
            try {
                $value += (4.236 * ($malt->massa / 1000) * $malt->malt_list->ebc) / $this->volume ;            
            } catch(exception $e){
                $value = 0;
            }   
        }
        return round(2.9353 * pow($value , 0.69));
    }

    private function get_correction_factor($e){
        $total = 0.0000;
        $value = 0.0000;
        $e = floatval($e);     
        foreach ($this->model->malts as $malt) {
            $total += ($malt->malt_list->extraction * $malt->percentage)/100;
        }        
        return ($e - $total)/100;    
    }

    public function getTotalMaltPercentage(){
        $value = 0;
        return Calculations::mathAddingUp($this->model->malts, 'percentage');
    }

    public function mash_loss(){
        $value = 0;     
        return Calculations::mathAddingUp($this->model->malts, 'massa');        
    }
    private function handle_error(){
        return 0;

    }
}