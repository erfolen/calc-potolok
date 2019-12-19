<?php
$sqlMat='SELECT name FROM materia';
if(!$resultMat=mysqli_query($link,$sqlMat))
    return false;
$items=mysqli_fetch_all($resultMat,MYSQLI_ASSOC);
if($items===false)
    echo 'Произошла ошибка';
$sqlLamp = 'SELECT name FROM lampa';
if (!$resultLamp = mysqli_query($link, $sqlLamp))
    return false;
$itLamp = mysqli_fetch_all($resultLamp, MYSQLI_ASSOC);
if ($itLamp === false)
    echo 'Произошла ошибка';