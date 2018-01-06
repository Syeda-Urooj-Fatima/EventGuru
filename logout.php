<?php
 session_start();
 if (!isset($_SESSION['userinfo'])) {
  header("Location: index.php");
 }
 
 if (isset($_GET['logout'])) {
  unset($_SESSION['user']);
  session_unset();
  session_destroy();
  header("Location: index.php" );
  exit;
 }
 
 //trim();strip_tags();htmlspecialchars();filter_var($email,FILTER_VALIDATE_EMAIL);hash('sha256', $pass);$_SERVER['PHP_SELF'];preg_match("/^[a-zA-Z ]+$/",$name);$_GET['logout'])