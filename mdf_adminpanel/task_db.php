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
            $task_title = $this->con->real_escape_string($_POST['task_title']);
            $task_number = $this->con->real_escape_string($_POST['task_number']);
            $task_detail = $this->con->real_escape_string($_POST['task_detail']);
            $task_date = $this->con->real_escape_string($_POST['task_date']);
            $task_file = $this->con->real_escape_string($_POST['task_file']);
            
            $query="INSERT INTO stududent_task(task_title,task_number,task_detail,task_date,task_file) VALUES('$task_title','$task_number','$task_detail','$task_date','$task_file')";
            $sql = $this->con->query($query);
            if ($sql==true) {
                header("Location:task_detail.php?msg1=insert");
            }else{
                echo "Data not inserted!";
            }
        }

        // Fetch customer records for show listing
        public function displayData()
        {
            $query = "SELECT * FROM stududent_task";
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
            $query = "SELECT * FROM stududent_task WHERE student_task_id = '$id'";
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
            $task_title = $this->con->real_escape_string($_POST['task_title']);
            $task_number = $this->con->real_escape_string($_POST['task_number']);
            $task_detail = $this->con->real_escape_string($_POST['task_detail']);
            $task_date = $this->con->real_escape_string($_POST['task_date']);
            $task_file = $this->con->real_escape_string($_POST['task_file']);
            $id = $this->con->real_escape_string($_REQUEST['student_task_id']);
        if (!empty($id) && !empty($postData)) {
            $query = "UPDATE stududent_task SET task_title ='$task_title', task_number ='$task_number', task_detail ='$task_detail', task_date ='$task_date', task_file ='$task_file' WHERE student_task_id = '$id'";
            $sql = $this->con->query($query);
            if ($sql==true) {
                header("Location:task_detail.php?msg2=update");
            }else{
                echo "Data not update successfully";
            }
            }
            
        }


        // Delete customer data from customer table
        public function deleteRecord($id)
        {
            $query = "DELETE FROM stududent_task WHERE student_task_id = '$id'";
            $sql = $this->con->query($query);
        if ($sql==true) {
            header("Location:task_detail.php?msg3=delete");
        }else{
            echo "Record does not delete try again";
            }
        }

    }
?>