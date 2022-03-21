<?php
   include 'conection.php';
   if(isset($_GET['id']) && !empty($_GET['id']))
   {
  $id = $_GET['id'];
        global $conn;
        
        if($conn){
            $query="DELETE FROM `courses` where `id_c`=:id";
            $statement=$conn->prepare($query);
            $statement->bindValue(':id', $id, PDO::PARAM_INT);
            $statement ->execute();
    
            header('location:../view/courses.php');
        }
    }

?>
