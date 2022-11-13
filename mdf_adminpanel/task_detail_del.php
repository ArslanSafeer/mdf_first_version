<?php
include 'db.php';

$id=$_GET['student_task_id'];

$q="DELETE FROM `stududent_task` WHERE 	student_task_id =$id";

mysqli_query($con,$q);
header("location:task_detail.php");

?>