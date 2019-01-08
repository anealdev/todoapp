<?php
require_once('DB.php');
$dsn = DB::getConnection();
if($_SERVER['REQUEST_METHOD'] == 'POST'){
  header('Content-Type: application/json');
  $array = [];
  $task = $_POST['task'];
  
  $addTask = $dsn->prepare("INSERT INTO tasks(task) VALUES(:task)");
  $addTask->bindParam(':task', $task, PDO::PARAM_STR);
  $addTask->execute();
  $array['task'] = $task;
  echo json_encode($array, JSON_PRETTY_PRINT);
  exit;
}else{
  exit('Invalid URL');
}

 ?>
