<?php namespace Hjp\Brouwerbouwer\Classes;

use Hjp\Brouwerbouwer\Models\Hops;

class Hopprocessor {

    public function __Get($name){
        try {
            return $this->$name();
        }
            catch (Throwable $t){
                return 0;
        }        
    }    

    public function set_val($arr){      
        try {
            foreach ($arr as $keys => $val){
                if ($val == 0){
                    $val += 1;
                }
                $this->$keys = $val;
            }
        } catch (Throwable $t) {
            $this->$keys = 0;
        }
    }

    private function grams(){    
        return ($this->volume * $this->C() * $this->ibu) / ( $this->U() * ($this->alfaacid / 100) * 1000) ;
    }

    private function ibu(){
        return $this->mgAlphAcids() * $this->U() ;
    }

    private function C(){
        if ($this->og > 1.050){
            return  (($this->og - 1.050) / 2 ) + 1 ;
        } else{
            return 1;
        }
    }
    
    /** Bigness Factor */
    private function fG(){
        return 1.65 * pow(0.000125,  ($this->og - 1));
    }

    /** Boil time factor */
    private function fT(){
        if ($this->time <= 0){
            $this->time = 1;
        }
        return (1 - exp(-0.04 * ($this->time))) / 4.15 ;
    }

    /** Alpha Acid Utilization */
    private function U(){
        return $this->fG() * $this->fT() ;
    }
    /** Alpha-acid per mg/liter. */
    private function mgAlphAcids(){
        return (($this->grams) / $this->volume ) * $this->alfaacid ;
    }
}
