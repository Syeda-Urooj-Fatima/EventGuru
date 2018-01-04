<?php
  
  if($_SERVER["REQUEST_METHOD"]=="POST")
  {
    $username=$_POST["log-username"];
    $password=$_POST["log-password"];
    echo $username;
    echo $password;
  }
?>