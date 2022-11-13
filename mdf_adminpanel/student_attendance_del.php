<?php
include 'db.php';

$id=$_GET['student_attendance_id'];

$q="DELETE FROM `student_attendance` WHERE student_attendance_id =$id";

mysqli_query($con,$q);
header("location:student_attendance.php");

?>