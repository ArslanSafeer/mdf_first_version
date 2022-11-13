<?php
include 'db.php';

$id=$_GET['student_id'];

$q="DELETE FROM `student_detail` WHERE student_id =$id";

mysqli_query($conn,$q);
header("location:student_data.php");

?>