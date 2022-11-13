<?php

include "db.php";

if (isset($_POST['done'])){

$id=$_GET['student_id'];
$student_name=$_POST['student_name'];
$father_name=$_POST['father_name'];
$dob=$_POST['dob'];
$phone_no=$_POST['phone_no'];
$gender=$_POST['gender'];
$q="UPDATE `student_detail` SET student_name='$student_name',father_name='$father_name', dob='$dob', phone_no='$phone_no', gender='$gender' WHERE student_id=$id";

$query=mysqli_query($con,$q);
header("location:student_data.php");

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
  <h2>Update Student Data</h2>
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
  <label><b>Student Name:</b></label>
<input type="text" name="student_name" placeholder="Student Name...." class="form-control" required="required"><br>
<label><b>Father Name:</b></label>
<input type="text" name="father_name" placeholder="Father Name...." class="form-control" required="required"><br>
<label><b>DOB:</b></label>
<input type="date" name="dob" placeholder="DOB...." class="form-control" required="required"><br>
<label><b>Phone no:</b></label>
<input type="text" name="phone_no" placeholder="Phone no...." class="form-control" required="required"><br>
<div class="form-group">
  <label><b>Select Gender:</b></label>
  <select name="gender" class="form-control" required="required">
    <option value="">Select</option>
    <option value="Male">Male</option>
    <option value="Female">Female</option>
  </select></div>
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