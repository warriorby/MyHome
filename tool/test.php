<?php
/**
 * Created by PhpStorm.
 * User: EI
 * Date: 14-12-12
 * Time: 下午5:34
 */
require "../include/func.php";

$timestamp = getMilliSecond();
echo $timestamp;
echo "<br/>";

printf("%05d",42);
echo "<br/>";
printf("%05d",42);
echo "<br/>";
for($d=7;$d>=1;$d--){
    echo $d;
    echo "<br/>";
}
