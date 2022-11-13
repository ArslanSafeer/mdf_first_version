
<div class="container" style="background-color: green; margin-top: 10px;">
<h1 style="text-align: center; color: red;">PHP</h1>
<details style="color:white;">
 
  <p>PHP (Hypertext Preprocessor) is known as a general-purpose scripting language that can be used to develop dynamic and interactive websites. It was among the first server-side languages that could be embedded into HTML, making it easier to add functionality to web pages without needing to call external files for data. PHP is a server side scripting language that is embedded in HTML. It is used to manage dynamic content, databases, session tracking, even build entire e-commerce sites. It is integrated with a number of popular databases, including MySQL, PostgreSQL, Oracle, Sybase, Informix, and Microsoft SQL Server.</p>
</details>
</div>



<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Apply for this course</h2>
  <!-- Trigger the modal with a button -->
  <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Apply Now</button>

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

<label><b>Course Name:</b></label>
<input type="text" name="course_name" placeholder="Full Name.." class="form-control" required="required"><br>
<label><b>Course Detail:</b></label>
<input type="text" name="course_detail" placeholder="Address.." class="form-control" required="required"><br>
<label><b>Course Duration:</b></label>
<input type="text" name="course_duration" placeholder="Phone No.." class="form-control" required="required"><br>
<div class="form-group">
  <label><b>Choose Course:</b></label>
  <select name="country" class="form-control" required="required">
    <option value="php">php</option>
    <option value=".net">.net</option>
    <option value="java">java</option>
    <option value="javascript">javascript</option>
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