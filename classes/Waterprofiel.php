<?php namespace EliseOntwerpt\Brouwerbouwer\Classes;

use DB;
use Calculations;
use EliseOntwerpt\Brouwerbouwer\Models\Recipes;

class Waterprofiel{

    public $elements = [
        'Cl'  => [
            'mm' => 35.453, 'name' => 'chloride'
            ] ,
        'SO4' => [
            'mm' =>96.06,'name' => 'sulfate'
            ] ,
        'Ca'  => [
            'mm' => 40.078,'name' => 'calcium'
            ] ,
        'K'  => [
            'mm' =>39.0983,'name' => 'kalium'
            ] ,
        'HCO3' => [
            'mm' =>61.0168,'name' => 'bicarbonate'
            ] ,
        'Na' => [
            'mm' =>22.989769,'name' => 'natrium'
            ] ,
    ];
    
    private $cation;
    private $anion;
    private $volume = 0.0000;
    private $model;

    public function __construct(Recipes $model){        
        $this->model = $model;
        $this->volume = $this->model->flameout_volume();       
    }

    public function getMolElement($var1 , $var2){     
        
        if (isset($this->model->waterprofile) AND isset($this->model->gear->waterprofile)){
            $this->cation = $var1; // Ca
            $this->anion  = $var2; // SO4

            return $this->step2() ;
        }        
    }

    private function get_ppm($ion, $profile){        
        $i = $this->elements[$ion]['name'];
        return round($profile->$i, 5); 
    }

    private function get_molmassa($ion){
        return $this->elements[$ion]['mm'] ;
    }
 
    private function step1(){
       $value = (($this->get_ppm($this->anion,  $this->model->waterprofile) - $this->get_ppm($this->anion,  $this->model->gear->waterprofile)) * ($this->volume ) /1000 ) ;
            
       return Round($value,8);
    }

    private function step2(){
        $value = (($this->step1($this->anion) / $this->get_molmassa($this->anion)) * $this->get_molmassa($this->cation)) + $this->step1();
        return $value ;
    }
}
