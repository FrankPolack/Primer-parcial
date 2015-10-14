<?php
session_start();

$_SESSION['dni']=null;

session_destroy();

header("location:index.php");

?>