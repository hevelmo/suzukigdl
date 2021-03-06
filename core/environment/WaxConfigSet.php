<?php

/*
    WaxConfigSet

    Type: configuration
    Object: Configuration variables
    Update: 21 Jun 2016
    Author: A Guerrero
*/

$devServerList = array("127.0.0.1","::1","192.168.0.102","localhost");
$folderDev = "suzukigdl";

if(!in_array($_SERVER['SERVER_NAME'], $devServerList)){
    $urlHost  = isset($_SERVER['HTTPS']) ? 'http://' : 'http://';
    $urlHost .= $_SERVER['SERVER_NAME'] . '/';
    $urlHost = str_replace ( "https" , "http" , $urlHost );
    define("_HOST", $urlHost);
    define("_MAX", "http://clicktolead.com.mx/api/v1/remote/action");
    //define("_ROOTAPI", "http://medigraf.com.mx/jaguar/");
} else {
    $urlHost  = isset($_SERVER['HTTPS']) ? 'https://' : 'http://';
    $urlHost .= $_SERVER['SERVER_NAME'] . '/' . $folderDev.'/';
    define("_HOST", $urlHost);
    define("_MAX", "http://localhost/maxleads/api/v1/remote/action");
    //define("_ROOTAPI", "http://localhost/jaguar/");
}

define("_LOGIN", "{$urlHost}login/");
define("_ADMIN", "{$urlHost}admin/");
define("_SITIO", "{$urlHost}sitio/");
define("_INVENTARIOS", "{$urlHost}sitio/inventarios/");

?>
