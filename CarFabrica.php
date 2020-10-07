<?php 

include __DIR__ . '/AClass.php';
include __DIR__ . '/IParams.php';

class CarFabrica extends AClass implements IParams
{
    public $color, $form;

     public static $cntU = 0;
   
    public function __construct($model, $type)
    {
       // parent::__construct($model, $type);
      

      $this->car = new AClass($model, $type);

       ++self::$cntU;
    }

    public function  model_type()
    {
       return get_object_vars($this->car);
    }

    public function getColor($color){return $color;}

    public function getForm($form ){return $form;}
    
    
}
