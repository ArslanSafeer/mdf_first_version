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
            $course_name = $this->con->real_escape_string($_POST['course_name']);
            $course_detail = $this->con->real_escape_string($_POST['course_detail']);
            $course_duration = $this->con->real_escape_string($_POST['course_duration']);
            
            $query="INSERT INTO course_table(course_name,course_detail,course_duration) VALUES('$course_name','$course_detail','$course_duration')";
            $sql = $this->con->query($query);
            if ($sql==true) {
                header("Location:tables.php?msg1=insert");
            }else{
                echo "Data not inserted!";
            }
        }

        // Fetch customer records for show listing
        public function displayData()
        {
            $query = "SELECT * FROM course_table";
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
            $query = "SELECT * FROM course_table WHERE course_id= '$id'";
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
            $course_name = $this->con->real_escape_string($_POST['course_name']);
            $course_detail = $this->con->real_escape_string($_POST['course_detail']);
            $course_duration = $this->con->real_escape_string($_POST['course_duration']);
            $id = $this->con->real_escape_string($_REQUEST['course_id']);
        if (!empty($id) && !empty($postData)) {
            $query = "UPDATE course_table SET course_name = '$course_name', course_detail = '$course_detail', course_duration = '$course_duration' WHERE course_id = '$id'";
            $sql = $this->con->query($query);
            if ($sql==true) {
                header("Location:tables.php?msg2=update");
            }else{
                echo "Data not update successfully";
            }
            }
            
        }


        // Delete customer data from customer table
        public function deleteRecord($id)
        {
            $query = "DELETE FROM course_table WHERE course_id = '$id'";
            $sql = $this->con->query($query);
        if ($sql==true) {
            header("Location:tables.php?msg3=delete");
        }else{
            echo "Record does not delete try again";
            }
        }

    }
?>