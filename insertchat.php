<?php

  require_once("../students/dbconfig.php");
  session_start();
 
  $userid = $_SESSION['userData']['id'];
  $id = $_POST['id'];
  $message = $_POST['value'];
  $data = date('Y-m-d H:i:s');
  if($userid < $id)
  {
  $table_name = "chat_".$userid.$id;
  }
  else
  {
  $table_name = "chat_".$id.$userid;
  }
  $sql = "INSERT INTO ".$table_name." (`id`, `userid`, `message`, `date`) VALUES (NULL, '$userid', '$message', '$data')";
  $res = $ob->conn->query($sql);
  $count = $res->rowCount();
  echo $count;
  

 ?>