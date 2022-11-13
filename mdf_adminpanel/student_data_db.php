<?php

    class Customers
    {
        private $servername = "localhost";
        private $username   = "root";
        private $password   = "";
        private $database   = "mdf";
        public  $con;


        // Database Connection 
        public function __construct()
        {
            $this->con = new mysqli($this->servername, $this->username,$this->password,$this->database);
            if(mysqli_connect_error()) {
             trigger_error("Failed to connect to MySQL: " . mysqli_connect_error());
            }else{
            return $this->con;
            }
        }

        // Insert customer data into customer table
        public function insertData($post)
        {
            $student_name = $this->con->real_escape_string($_POST['student_name']);
            $father_name = $this->con->real_escape_string($_POST['father_name']);
            $dob = $this->con->real_escape_string($_POST['dob']);
            $phone_no = $this->con->real_escape_string($_POST['phone_no']);
            $gender = $this->con->real_escape_string($_POST['gender']);
            
            $query="INSERT INTO student_detail(student_name,father_name,dob,phone_no,gender) VALUES('$student_name','$father_name','$dob','$phone_no','$gender')";
            $sql = $this->con->query($query);
            if ($sql==true) {
                header("Location:student_data.php?msg1=insert");
            }else{
                echo "Data not inserted!";
            }
        }

        // Fetch customer records for show listing
        public function displayData()
        {
            $query = "SELECT * FROM student_detail";
            $result = $this->con->query($query);
        if ($result->num_rows > 0) {
            $data = array();
            while ($row = $result->fetch_assoc()) {
                   $data[] = $row;
            }
             return $data;
            }else{
             echo "No found records";
            }
        }

        // Fetch single data for edit from customer table
        public function displyaRecordById($id)
        {
            $query = "SELECT * FROM student_detail WHERE student_id= '$id'";
            $result = $this->con->query($query);
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            return $row;
            }else{
            echo "Record not found";
            }
        }

        // Update customer data into customer table
        public function updateRecord($postData)
        {
            $student_name = $this->con->real_escape_string($_POST['student_name']);
            $father_name = $this->con->real_escape_string($_POST['father_name']);
            $dob = $this->con->real_escape_string($_POST['dob']);
            $phone_no = $this->con->real_escape_string($_POST['phone_no']);
            $gender = $this->con->real_escape_string($_POST['gender']);
            $id = $this->con->real_escape_string($_REQUEST['student_id']);
        if (!empty($id) && !empty($postData)) {
            $query = "UPDATE student_detail SET student_name = '$student_name', father_name = '$father_name', dob = '$dob', phone_no = '$phone_no', gender = '$gender' WHERE student_id = '$id'";
            $sql = $this->con->query($query);
            if ($sql==true) {
                header("Location:student_data.php?msg2=update");
            }else{
                echo "Data not update successfully";
            }
            }
            
        }


        // Delete customer data from customer table
        public function deleteRecord($id)
        {
            $query = "DELETE FROM student_detail WHERE student_id = '$id'";
            $sql = $this->con->query($query);
        if ($sql==true) {
            header("student_data.php?msg3=delete");
        }else{
            echo "Record does not delete try again";
            }
        }

    }
?>