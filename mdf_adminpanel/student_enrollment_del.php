<?php
include 'db.php';

$id=$_GET['student_enrolment_id'];

$q="DELETE FROM `student_enrolment` WHERE student_enrolment_id=$id";

mysqli_query($conn,$q);
header("location:student_enrollment.php");

?>