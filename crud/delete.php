<?php
   include 'conection.php';
  $id = $_GET['id'];
        global $conn;
        
        if($conn){
            $query="DELETE FROM student where id=$id";
            $statement=$conn->prepare($query);

            $statement ->execute();
    
            header('location:../view/student.php');
        }

?>