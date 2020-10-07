<?php 

include __DIR__ . '/../CarFabrica.php';


class CarModel
{
 
    public function getParams()
    {
        $arr = [];
        $params1 = (new CarFabrica('Renault LOGAN', 'Life +'))->model_type();
        $params2 = (new CarFabrica('Volkswagen', 'Tiguan R'))->model_type();
        $params3 = (new CarFabrica('Mercedes-Benz', 'G-Class 63 AMG'))->model_type();
        $params4 = (new CarFabrica('FORD FOCUS', 'SE 2016'))->model_type();
        $params5 = (new CarFabrica('VOLKSWAGEN PASSAT ', 'S 2015'))->model_type();
        $params6 = (new CarFabrica('FORD FUSION ', 'TITANIUM 2013'))->model_type();
        $params7 = (new CarFabrica('FORD FOCUS', 'SE 2016'))->model_type();
        $arr = [$params1, $params2, $params3, $params4, $params5, $params6, $params7];

        return $arr;
    }

    public function showCounCars()
    {
        return CarFabrica::$cntU;
    }

    public function color()
    {
       return (new CarFabrica('',''))->getColor('Black');
    }

    public function form()
    {
       return (new CarFabrica('',''))->getForm('Sedan');
    }

 
}




