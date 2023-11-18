<?php 
global $connection;
$serverName = 'localhost';
$userName = 'root';
$password = '';
$databasesName = 'ecommercedb';
$connection = new mysqli($serverName,$userName,$password,$databasesName);
?>
