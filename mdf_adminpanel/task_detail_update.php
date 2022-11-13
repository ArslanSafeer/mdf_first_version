<?php
  
  // Include database file
  include 'task_db.php';

  $customerObj = new Customers();

  // Edit customer record
  if(isset($_REQUEST['student_task_id']) && !empty($_REQUEST['student_task_id'])) {
    $editId = $_REQUEST['student_task_id'];
    $customer = $customerObj->displyaRecordById($editId);
  }

  // Update Record in customer table
  if(isset($_POST['done'])) {
    $customerObj->updateRecord($_POST);
  }  
    
?>
<h2>
    <a href="task_detail.php" class="btn btn-primary" style="float:center;">Back</a>
  </h2>
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
  <h2>Update task Detail</h2>
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
  <label><b>Task Title:</b></label>
<input type="text" name="task_title" value="<?php echo $customer['task_title']; ?>" placeholder="Task Title...." class="form-control" required="required"><br>
<label><b>Task Number:</b></label>
<input type="text" name="task_number" value="<?php echo $customer['task_number']; ?>" placeholder="Task Number...." class="form-control" required="required"><br>
<label><b>Task Detail:</b></label>
<input type="text" name="task_detail" value="<?php echo $customer['task_detail']; ?>" placeholder="Task Detail...." class="form-control" required="required"><br>
<label><b>Task Date:</b></label>
<input type="date" name="task_date" value="<?php echo $customer['task_date']; ?>" placeholder="Task Date...." class="form-control" required="required"><br>
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