<?php
/**
 * Created by PhpStorm.
 * User: Isaacs
 * Date: 26/04/2016
 * Time: 20:45
 */
$url = $_GET['url'];
$parameters ="";
foreach($_GET as $key => $value){
    if($key != "url") {
        $parameters = $parameters."&".$key."=".$value;
    }
}
$parameters = substr($parameters, 1);
$finalurl = $url."?".$parameters;
//echo $finalurl;
$json = file_get_contents($url);
echo $json;