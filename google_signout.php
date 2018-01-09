<?php
    session_start();
    unset($_SESSION["google"]);
    header("Location:index.php");
?>