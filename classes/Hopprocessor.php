<?php namespace EliseOntwerpt\Brouwerbouwer\Classes;

use Eliseontwerpt\Brouwerbouwer\Models\Hops;

class Hopprocessor {

    protected float $alfaAcid;
    protected float $volume;
    protected float $og;
    protected int $ibu;
    protected int $time;

    /**
     * @param float $alfaAcid
     * @param float $volume
     * @param float $og
     * @param int $ibu
     * @param int $time
     */
    public function __construct(float $alfaAcid, float $volume, float $og, int $ibu, int $time)
    {
        $this->alfaAcid = $alfaAcid;
        $this->volume = $volume;
        $this->og = $og;
        $this->ibu = $ibu;
        $this->time = $time;
    }


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
        return ($this->volume * $this->C() * $this->ibu) / ( $this->U() * ($this->alfaAcid / 100) * 1000) ;
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
