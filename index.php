<?php

include 'weather.php';
include 'translate.php';

if (isset($_GET['weather']))
{
    $var = (new weather()) -> get();
}

if (isset($_GET['translate']))
{
    $var = (new translate()) -> get();
}

?>
