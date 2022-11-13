
<?php
include 'db.php';

if (isset($_POST['done'])){

$task_title=$_POST['task_title'];
$task_number=$_POST['task_number'];
$task_detail=$_POST['task_detail'];
$task_date=$_POST['task_date'];
$file=$_FILES['task_file'];

$filename=$file['name'];
$filepath=$file['tmp_name'];
$fileerror=$file['error'];
if($fileerror==0){
$destfile='uploads/'.$filename;
move_uploaded_file($filepath, $destfile);

$query="INSERT INTO `stududent_task`(`task_title`, `task_number`, `task_detail`, `task_date`, `task_file`) VALUES ('$task_title','$task_number','$task_detail','$task_date','$destfile')";

$fire=mysqli_query($con,$query);
if($fire){
echo"<h3>Data Enter Successfully</h3>";
   }
else{
    echo"<h3>Data Insertion Failed</h3>";
}

}
}

?>

</html>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}

label {
  padding: 12px 12px 12px 0;
  display: inline-block;
}

input[type=submit] {
  background-color: #04AA6D;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: right;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}

.col-25 {
  float: left;
  width: 25%;
  margin-top: 6px;
}

.col-75 {
  float: left;
  width: 75%;
  margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .col-25, .col-75, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}
</style>
</head>
<body>

<h2 style="text-align: center;">Enter Task Details</h2>


<div class="container">
  <form action="" method="post" enctype="multipart/form-data">
    <div class="row">
      <div class="col-25">
        <label for="">Task Title</label>
      </div>
      <div class="col-75">
        <input type="text" id="" name="task_title" placeholder="Task Title.." required>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="">Task Nnumber</label>
      </div>
      <div class="col-75">
        <input type="text" id="" name="task_number" placeholder="Task Number.." required>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="">Task Detail</label>
      </div>
      <div class="col-75">
        <input type="text" id="" name="task_detail" placeholder="Task Detail.." required>
      </div>
    </div>
        <div class="row">
      <div class="col-25">
        <label for="">Task Date</label>
      </div>
      <div class="col-75">
        <input type="date" id="" name="task_date" placeholder="Task Date.." required>
      </div>
    </div>
        <div class="row">
      <div class="col-25">
        <label for="">Upload Task File</label>
      </div>
      <div class="col-75">
        <input type="file" id="" name="task_file" placeholder="Task File..">
      </div>
    </div>

    <div class="row">
      <input type="submit" name="done" value="Submit">
    </div>
  </form>
</div>

</body>
</html>
