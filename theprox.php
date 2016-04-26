<?php
/**
 * Created by PhpStorm.
 * User: Isaacs
 * Date: 26/04/2016
 * Time: 20:45
 */
$url = $_GET['url'];
foreach($_GET as $key => $value){
    echo $key . " : " . $value . "<br />\r\n";
}
//$json = file_get_contents($url);
//echo $json;