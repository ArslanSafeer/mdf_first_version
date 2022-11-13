<?php

include "db.php";

if (isset($_POST['done'])){

$id=$_GET['student_enrolment_id'];
$student_id=$_POST['student_id'];
$course_id=$_POST['course_id'];
$student_atendance=$_POST['student_atendance'];
$q="UPDATE `student_enrolment` SET student_id='$student_id',course_id='$course_id', student_atendance='$student_atendance' WHERE student_enrolment_id=$id";

$query=mysqli_query($con,$q);
header("location:student_enrollment.php");

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
    <select name="student_id" class="form-control" required>
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

    <label for=""><b>Select Course:</b></label>
    <select name="course_id" class="form-control" required>
     <option value="">--Choose--</option>
<?php

$q="SELECT course_id, course_name,course_detail,course_duration FROM course_table";

$query=mysqli_query($con,$q);
while($res=mysqli_fetch_array ($query)) {
         $course_id = $res['course_id'];
        $course_name = $res['course_name'];
        $course_detail = $res['course_detail'];
        $course_duration = $res['course_duration'];
  
?>

      <option value="<?php echo $course_id; ?>"><?php echo $course_name; ?></option>
<?php }?>    
    </select>

    <label for=""><b>Select Attendance:</b></label>
    <select name="student_atendance" class="form-control" required>
     <option value="">--Choose--</option>
<?php

$q="SELECT student_attendance_id,student_id,student_atendence,attendance_date FROM student_attendance";

$query=mysqli_query($con,$q);
while($res=mysqli_fetch_array ($query)) {
        $student_attendance_id = $res['student_attendance_id'];
        $student_id1 = $res['student_id'];
        $student_atendance = $res['student_atendence'];
        $attendance_date = $res['attendance_date'];
  
?>

      <option value="<?php echo $student_atendance;?>"><?php echo $student_atendance;?></option>
<?php }?>    
    </select><br>
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