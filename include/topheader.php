<?php

include 'include/connection.php';
include 'include/functions.php'; 
ob_start();
session_start();
if(empty($_SESSION['email'])){
    header('location: sign/signin.php');
  }
?>