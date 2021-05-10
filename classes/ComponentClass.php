<?php namespace Hjp\Brouwerbouwer\Classes;

Class componentClass {

    private $model; 
    public function __construct($arr){
        foreach( $arr as $K => $V){
            $this->$K = $V;
        }
    }
    
    public function __set($name , $val){
        if (is_callable(array('componentClass', $name), false) ){          
            $this->$name();           
        }
        else {
            $this->$name = $val;
        }
    }
    
    public function __get($name){
        if (is_callable(array('componentClass', $name), false) ){
            return $this->$name();
        }
    }

    private function getmodeldata(){ 
        var_dump($model);
        if ($this->col && !$this->val)
        {
            return $this->model::orderBy($this->col)->get();
        }
        elseif($this->col && $this->val){
            return $this->model::Where($this->col, $this->val)->orderBy($this->col)->get();
        }
        return $this->model::orderBy('id')->get();
    }

}