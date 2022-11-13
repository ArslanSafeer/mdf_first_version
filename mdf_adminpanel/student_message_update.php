<?php
  
  // Include database file
  include 'student_message_db.php';

  $customerObj = new Customers();

  // Edit customer record
  if(isset($_REQUEST['quick_message_id']) && !empty($_REQUEST['quick_message_id'])) {
    $editId = $_REQUEST['quick_message_id'];
    $customer = $customerObj->displyaRecordById($editId);
  }

  // Update Record in customer table
  if(isset($_POST['done'])) {
    $customerObj->updateRecord($_POST);
  }  
    
?>
<h2>
    <a href="student_message.php" class="btn btn-primary" style="float:center;">Back..</a>
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
  <label><b>Email:</b></label>
<input type="text" name="email" value="<?php echo $customer['email']; ?>" placeholder="Email...." class="form-control" required="required"><br>
<label><b>Phone Number :</b></label>
<input type="text" name="phone_number" value="<?php echo $customer['phone_number']; ?>" placeholder="Phone Number...." class="form-control" required="required"><br>
<label><b>Student Quick Message:</b></label>
<input type="text" name="student_quick_message" value="<?php echo $customer['student_quick_message']; ?>" placeholder="Student Quick Message...." class="form-control" required="required"><br>
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