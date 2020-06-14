<?php
/* Database credentials. MySQL server with default setting.
(user 'root' with no password) This is PDO code.*/
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'name');

//Connect to MySQL Database
try{
  $pdo = new PDO("mysql:host=" . DB_SERVER . ";dbname=" . DB_NAME,
  DB_USERNAME, DB_PASSWORD);
  //Set the PDO error mode to Exception
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    die("ERROR: Could not connect. " . $e->getMessage());
}

?>
