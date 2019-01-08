<?php

class DB{

  protected static $dsn;

  private function __construct(){
    require_once 'login.php';
//DATABASE CONNECTION

try {
    self::$dsn = new PDO('mysql:charset=utf8mb4;host=localhost;port=3306;dbname=todo', $username, $password);
    self::$dsn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
    self::$dsn->setAttribute( PDO::ATTR_PERSISTENT, false);
    //echo "Connected successfully";
}catch(PDOException $e){
    echo "Could not connect to database."; exit;
  }
}

public static function getConnection(){ // use :: to access static function
  if(!self::$dsn) {
    new DB();
  }
  return self::$dsn;
}
}
?>
