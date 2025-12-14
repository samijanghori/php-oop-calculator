<?php
declare(strict_types=1);
include "class_autoload.inc.php";

$typeoperator = $_POST['oper'];
$firstnumber = $_POST['num1'];
$secondnumber = $_POST['num2'];

$object = new calc($typeoperator,(int)$firstnumber,(int)$secondnumber);
try{
    echo $object->calculator();
}catch(TypeError $e){
    echo "Error!".$e->getMessage();
}
