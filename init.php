<?php
require "classes/classDB.php";

define("CONFIG_LIVE", "1"); // 0: Test environment || 1: Live environment

if(CONFIG_LIVE == 0){
    $DB_SERVER = "localhost";
    $DB_NAME = "MusicDatabase";
    $DB_USER = "root";
    $DB_PASS = "";
}else{
    $DB_SERVER = "mysql108.unoeuro.com";
    $DB_NAME = "gubby_dk_db";
    $DB_USER = "S398566";
    $DB_PASS = "Gubby2863";
}

$db = new db($DB_SERVER, $DB_NAME, $DB_USER, $DB_PASS);