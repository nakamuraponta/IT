<?php 

session_start();
session_destroy();
header('location:01 index.php');

?>