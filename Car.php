<style>

p, h3, h2, h1 {
    font-size: 25px;
    margin: 20px 0
}

h4 {
     font-size: 22px;
}
.container{
    width: 80%;
    margin: 100px auto
}
.block {
    width: 49.5%;
    margin: 0 0;
    display: inline-block;

}
</style>
<?php 

include __DIR__ . '/models/CarModel.php';

$params = (new CarModel())->getParams();
$countcars = (new CarModel())->showCounCars();
$color = (new CarModel())->color();
$form = (new CarModel())->form();

?>


<div class="container"> 
<div class="block"> 
<?php 
foreach ($params as $k => $v) {
   ?> <h3> <?php
     foreach ($arr[$k] = $v as $s) {
         echo  strtoupper($s) . PHP_EOL; 
     }
}

?>
</h3><br>
<h4><?php  echo "Цвет: " . $color ?> </h4>
<h4><?php  echo "Тип кузова: " . $form ?> </h4>
<hr>

<h3><?php  echo "Всего автомобилей: " . $countcars  . " шт."?> </h3>


</div><!-- end block-->

<div class="block line" style="width: 2px;
    background-color: black;
    height: 550px;
    padding: 20px 0;">  

</div><!-- end block-->

<div class="block">  

</div><!-- end block-->



</div><!-- end container-->
