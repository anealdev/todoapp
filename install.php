<?php

$db_user = "spider";
$db_pass = "daredevil";
$db_name = "todo";
$db_host = "localhost";
$db_charset = "utf8mb4";

$dsn = "mysql:host=$db_host;dbname=$db_name;charset=$db_charset"; //data source name
$options = array(
  PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, // throws an exception error
  PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ, //returns an anonymous object with property names that correspond to the column names returned in your result set
  PDO::ATTR_EMULATE_PREPARES  => false, // try to use native prepared statements
);

$db = new PDO($dsn, $db_user, $db_pass, $options);
echo "Connected successfully";

// create database tables

$db->query("CREATE TABLE IF NOT EXISTS tasks(
  ID INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  task VARCHAR(255) NOT NULL
)");


?>
