<?php
    include '../crud/conection.php';


function create($name,$email,$phone,$enroll_number,$date_of_admission){
    global $conn;
    if($conn){
        $query= "INSERT INTO student(name,email,phone,enroll_number,date_of_admission) values(:name,:email,:phone,:enroll_number,:date_of_admission)";
        $statement=$conn->prepare($query);

    $statement->execute([

            ':name'=>$name,
            ':email'=>$email,
            ':phone'=>$phone,
            ':enroll_number'=>$enroll_number,
            ':date_of_admission'=>$date_of_admission,
            ]);
    }
}


?>