<?php

$dbhost ="localhost";
$dbUsername = "root";
$dbPwd="";
$dbName="register";


$db= new mysqli($dbhost, $dbUsername, $dbPwd, $dbName);

if($db->connect_error){
    die("Connection failed:" . $db->connect_error);
}

?>