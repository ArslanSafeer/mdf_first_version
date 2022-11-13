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
            $email = $this->con->real_escape_string($_POST['email']);
            $phone_number = $this->con->real_escape_string($_POST['phone_number']);
            $student_quick_message = $this->con->real_escape_string($_POST['student_quick_message']);            
            $query="INSERT INTO quick_message(email,phone_number,student_quick_message) VALUES('$email','$phone_number','$student_quick_message')";
            $sql = $this->con->query($query);
            if ($sql==true) {
                header("Location:student_message.php?msg1=insert");
            }else{
                echo "Data not inserted!";
            }
        }

        // Fetch customer records for show listing
        public function displayData()
        {
            $query = "SELECT * FROM quick_message";
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
            $query = "SELECT * FROM quick_message WHERE quick_message_id = '$id'";
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
            $email = $this->con->real_escape_string($_POST['email']);
            $phone_number = $this->con->real_escape_string($_POST['phone_number']);
            $student_quick_message = $this->con->real_escape_string($_POST['student_quick_message']);
            $id = $this->con->real_escape_string($_REQUEST['quick_message_id']);
        if (!empty($id) && !empty($postData)) {
            $query = "UPDATE quick_message SET email = '$email', phone_number = '$phone_number', student_quick_message = '$student_quick_message' WHERE quick_message_id = '$id'";
            $sql = $this->con->query($query);
            if ($sql==true) {
                header("Location:student_message.php?msg2=update");
            }else{
                echo "Data not update successfully";
            }
            }
            
        }


        // Delete customer data from customer table
        public function deleteRecord($id)
        {
            $query = "DELETE FROM quick_message WHERE quick_message_id = '$id'";
            $sql = $this->con->query($query);
        if ($sql==true) {
            header("student_message.php?msg3=delete");
        }else{
            echo "Record does not delete try again";
            }
        }

    }
?>