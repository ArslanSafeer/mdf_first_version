<?php
include 'db.php';

if (isset($_POST['done'])){
$file='';
$file_tmp='';
$location='upload/';
$data="";
foreach ($_FILES ['images']['name']as $key=>$val) {
	
$file=$_FILES ['images']['name'][$key];
$file_tmp=$_FILES ['images']['tmp_name'][$key];
move_uploaded_file($file_tmp, $location.$file);
$data.=$file."";
	}
	$query="INSERT INTO `hello`(`images`) VALUES ('$data')";
	$fire=mysqli_query($con,$query);
	if($fire){
echo"insert";
	}else{
echo"not insert";
	}
}


?>

<form method="post" enctype="multipart/form-data">
<div class="card">
<div class="card-header py-3">
                            <h3 class="m-0 font-weight-bold text-primary"><b>Enter Hotels Information</b></h3>
                        </div>

<label><b>Upload Hotel Image</b></label>
    <input type="file" name="images[]" multiple required><br>



<button type="submit" name="done" value="submit" class="btn btn-success">Submit</button><br>

</div>
</form>

















