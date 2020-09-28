<?php
include'head.php';

$precio_base = $_REQUEST['precio_base'];

$var1 = $_REQUEST['Motor'];

$var2 = $_REQUEST['Modelo'];  

$var3 = $_REQUEST['color'];

$var_complementos = 0;

if(isset($_REQUEST['Llantas']))
    $var_complementos+= $_REQUEST['Llantas'];

if(isset($_REQUEST['Climatización']))
    $var_complementos+= $_REQUEST['Climatización'];

if(isset($_REQUEST['GPS']))
    $var_complementos+= $_REQUEST['GPS'];

if(isset($_REQUEST['DVD']))
    $var_complementos+= $_REQUEST['DVD'];

$precio_total = $precio_base + $var1 + $var2 + $var3 + $var_complementos;
echo 'El precio final es: '.$precio_total;

include 'pie.php';

