<?php namespace Hjp\Brouwerbouwer\Classes;

class Calculations {
    
    public static function mathAddingUp($obj , $var){
        $value = 0;     
        foreach ($obj as $tmp) {
            $value += $tmp->$var;
        }       
        return $value;
    }
        
    /**
     * Calculates sugar gravity in degrees Plato from Specific Gravity.
     * 
     * Specific Gravity = 1+ (plato / (258.6 – ( (plato/258.2) *227.1) ) )
     * Plato = (-1 * 616.868) + (1111.14 * sg) – (630.272 * sg^2) + (135.997 * sg^3)
     */
    public static function SpecifGravity2pPlato($sg){   
        $value = (-1 * 616.868) + (1111.14 * $sg) - (630.272 * pow($sg, 2)) + 135.997 * pow($sg, 3);
        return round($value);    
    }
}