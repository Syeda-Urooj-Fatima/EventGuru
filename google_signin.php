<?php
    session_start();
    $_SESSION["google"]=true;
    $_SESSION["google_user"]=$_GET["name"];
    header("Location:index.php");
?>