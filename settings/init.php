<?php
require "classes/classDB.php";

define("CONFIG_LIVE", "0"); // 0: Test environment || 1: Live environment

if(CONFIG_LIVE == 0){
    $DB_SERVER = "localhost";
    $DB_NAME = "MusicDatabase";
    $DB_USER = "root";
    $DB_PASS = "";
}else{
    $DB_SERVER = "mysql108.unoeuro.com";
    $DB_NAME = "gubby_dk_db";
    $DB_USER = "gubby_dk";
    $DB_PASS = "6ph4t5H9Bgfe";
}

$db = new db($DB_SERVER, $DB_NAME, $DB_USER, $DB_PASS);