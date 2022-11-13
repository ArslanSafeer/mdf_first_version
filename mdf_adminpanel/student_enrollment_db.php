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
            $student_id = $this->con->real_escape_string($_POST['student_id']);
            $course_id = $this->con->real_escape_string($_POST['course_id']);
            $student_atendance = $this->con->real_escape_string($_POST['student_atendance']);            
            $query="INSERT INTO student_enrolment(student_id,course_id,student_atendance) VALUES('$student_id','$course_id','$student_atendance')";
            $sql = $this->con->query($query);
            if ($sql==true) {
                header("Location:student_enrollment.php?msg1=insert");
            }else{
                echo "Data not inserted!";
            }
        }

        // Fetch customer records for show listing
        public function displayData()
        {
            $query = "SELECT * FROM student_enrolment";
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
            $query = "SELECT * FROM student_enrolment WHERE student_enrolment_id= '$id'";
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
            $student_id = $this->con->real_escape_string($_POST['student_id']);
            $course_id = $this->con->real_escape_string($_POST['course_id']);
            $student_atendance = $this->con->real_escape_string($_POST['student_atendance']);
            $id = $this->con->real_escape_string($_REQUEST['student_enrolment_id']);
        if (!empty($id) && !empty($postData)) {
            $query = "UPDATE student_enrolment SET student_id = '$student_id', course_id = '$course_id', student_atendance = '$student_atendance' WHERE student_enrolment_id = '$id'";
            $sql = $this->con->query($query);
            if ($sql==true) {
                header("Location:student_enrollment.php?msg2=update");
            }else{
                echo "Data not update successfully";
            }
            }
            
        }


        // Delete customer data from customer table
        public function deleteRecord($id)
        {
            $query = "DELETE FROM student_enrolment WHERE student_enrolment_id = '$id'";
            $sql = $this->con->query($query);
        if ($sql==true) {
            header("student_enrollment.php?msg3=delete");
        }else{
            echo "Record does not delete try again";
            }
        }

    }
?>