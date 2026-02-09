<?php declare(strict_types = 1);
session_start();
require_once '_require/Database.class.php';
require_once '_require/User.class.php';

$configFilePath = "$_SERVER[DOCUMENT_ROOT]/../configuration/posterconfig.json";

if(is_dir("$_SERVER[DOCUMENT_ROOT]/../configuration/") === FALSE){
        mkdir("$_SERVER[DOCUMENT_ROOT]/../configuration/");
        $configFiles = file_get_contents("configuration/posterconfig.json");
        file_put_contents($configFilePath, $configFiles);
        $_config = file_get_contents($configFilePath);
} else {
    $_config = file_get_contents($configFilePath);
}
function getConfig($key, $default = false){
    global $_config;
    $value = json_decode($_config, true);
    if(!empty($value[$key])){   
        return $value[$key];
    } else {
        return $default;
    }
}