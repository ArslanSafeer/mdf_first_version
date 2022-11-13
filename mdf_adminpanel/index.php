<?php
session_start();

if(!isset($_SESSION['mdf'])){
header('location:login.php');
}
?>

<?php

 include('header.php');
 include('side_bar.php');
 ?>

<?php
include('dashboard.php');
?>

 <?php include('footer.php'); ?>