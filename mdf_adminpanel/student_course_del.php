
<?php
include('db.php');
class StudentController
{
    public function __construct()
    {
        $db = new DatabaseConnection;
        $this->conn = $db->conn;
    }

    public function delete($course_id)
    {
    	
        $student_id = mysqli_real_escape_string($this->conn,$course_id);
        $studentDeleteQuery = "DELETE FROM course_table WHERE course_id='$student_id'";
        $result = $this->conn->query($studentDeleteQuery);
        if($result){
            return true;
        }else{
            return false;
        }
    }
}
?>