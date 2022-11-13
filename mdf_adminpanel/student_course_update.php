<?php

include "db.php";

if (isset($_POST['done'])){

$id=$_GET['course_id'];
$course_name=$_POST['course_name'];
$course_detail=$_POST['course_detail'];
$course_duration=$_POST['course_duration'];
$q="UPDATE `course_table` SET course_name='$course_name',course_detail='$course_detail', course_duration='$course_duration' WHERE course_id=$id";

$query=mysqli_query($conn,$q);
header("location:tables.php");

}


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Update Course Data</h2>
  <!-- Trigger the modal with a button -->
  <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Update record</button>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
         
        </div>
        <div class="modal-body">
          <form method="post" action="" enctype="multipart/form-data"><br>
<div class="card">
<div class="card-header bg-dark">
    <h1 class="text-white text-center text-warning">Enter detail</h1>
</div><br>

<div class="form-group">
  <label><b>Choose course:</b></label>
    <select name="course_name" class="form-control" required="required">
    <option value="">Select</option>
    <option value="PHP">PHP</option>
    <option value=".NET">.NET</option>
    <option value="JAVA">JAVA</option>
    <option value="JAVA">Object oriented</option>
    <option value="JAVASCRIPT">JAVASCRIPT</option>
    <option value="Graphic Designing">Graphic Designing</option>
    <option value="Web Designing">Web Designing</option>
    <option value="Seo">Seo</option>
    <option value="Digital Marketing">Digital Marketing</option>
  </select></div>
<label><b>Course Detail:</b></label>
<input type="text" name="course_detail" placeholder="Course Detail.." class="form-control" required="required"><br>
<label><b>Course Duration:</b></label>
<input type="text" name="course_duration" placeholder="Course Duration.." class="form-control" required="required"><br>
<button class="btn btn-success" type="submit" name="done">Submit</button><br>


</form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  
</div>

</body>
</html>