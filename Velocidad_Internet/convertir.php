<?php
include'head.php';

if (isset($_REQUEST['n_megabit'])) #isset quiere decir que "si existe".
{
    $convertido = $_REQUEST['n_megabit'];
    $megabyte = $convertido*0.1311;
    echo 'Megabytes: '.$megabyte;
}
else
{
    echo 'ERROR no has introducido ninguna variable.';
}

include 'pie.php';

