<?php

include "db.php";

if (isset($_POST['done'])){

$id=$_GET['student_attendance_id'];
$student_id=$_POST['student_id'];
$student_atendence=$_POST['student_atendence'];
$attendance_date=$_POST['attendance_date'];
$q="UPDATE `student_attendance` SET student_id='$student_id',student_atendence='$student_atendence', attendance_date='$attendance_date' WHERE student_attendance_id=$id";

$query=mysqli_query($con,$q);
header("location:student_attendance.php");

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
  <label for=""><b>Select Student Name:</b></label>
    <select name="student_id" class="form-control">
     <option value="">--Choose--</option>
<?php

$q="SELECT student_id, student_name,father_name,dob,phone_no,gender FROM student_detail";

$query=mysqli_query($con,$q);
while($res=mysqli_fetch_array ($query)) {
         $student_id = $res['student_id'];
        $student_name = $res['student_name'];
        $father_name = $res['father_name'];
        $dob = $res['dob'];
        $phone_no = $res['phone_no'];
        $gender = $res['gender'];
  
?>

      <option value="<?php echo $student_id; ?>"><?php echo $student_name; ?></option>
<?php }?>    
    </select>

<div class="form-group">
  <label><b>Student Attendance:</b></label>
  <select name="student_atendence" class="form-control" required="required">
    <option value="">Select</option>
    <option value="present">present</option>
    <option value="absent">absent</option>
  </select></div>
<label><b>Attendance date:</b></label>
<input type="date" name="attendance_date" placeholder="" class="form-control" required="required"><br>
<label><b>Course Duration:</b></label>
<input type="text" name="course_duration" placeholder="Course Duration...." class="form-control" required="required"><br>
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