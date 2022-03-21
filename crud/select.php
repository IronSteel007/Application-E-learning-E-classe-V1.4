<?php
    include 'conection.php';

    function select(){
        global $conn;
    
        if($conn){
            $query='SELECT *FROM student';
            $statement = $conn -> prepare($query);
    
            $statement-> execute();
    
            return $statement->fetchAll();
        }
    }
    ?>