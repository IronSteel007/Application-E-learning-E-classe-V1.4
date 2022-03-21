<?php
session_start();
if(isset($_SESSION['utilisateur_email'])){
?>

<?php
    include '../crud/conection.php';


function create($name,$type,$price,$time){
    global $conn;
    if($conn){
        $query= "INSERT INTO courses(name_c,type_c,price_c,time_c) values(:name,:type,:price,:time)";
        $statement=$conn->prepare($query);

    $statement->execute([

            ':name'=>$name,
            ':type'=>$type,
            ':price'=>$price,
            ':time'=>$time,
            ]);
    }
}

    if(isset($_POST['name_c']) && isset($_POST['type_c']) && isset($_POST['price_c']) && isset($_POST['time_c'])){
    if(!empty($_POST['name_c']) && !empty($_POST['type_c']) && !empty($_POST['price_c']) && !empty($_POST['time_c'])){
            create($_POST['name_c'],$_POST['type_c'],$_POST['price_c'],$_POST['time_c']);
            header('location:courses.php');
        }
      }
?>


<?php
    include '../includes/header.php';
?>

    <div class="d-flex vh-100 justify-content-center align-items-center body-colo">
        <div class="container-fluid divcont">
                <div class="d-flex justify-content-center">
                    <div class="col-md-4 shadow rounded-3 col-sm-12 p-4 bg-light bor-red">
                        <div class="text-start">
                            <h2 class="border-start e-c">
                                E-Classe
                            </h2>
                        </div>
                        <div class="text-center">
                            <h4 class="text-uppercase">add a new course </h4>
                        </div>



                        <div class="text-center">
                            <form action="" method="POST">
                                <div class="form-control d-flex justify-content-end bor-red bg-light shadow rounded-3 ">
                                <div class="row">
                                <div class="form-group mt-4">
                                    <input placeholder="username" type="text" name="name_c" required>
                                </div>
                                <div class="form-group mt-4">
                                    <input placeholder="type" type="text" name="type_c" required>
                                </div>
                                <div class="form-group mt-4">
                                    <input placeholder="price" type="text" name="price_c" required>
                                </div>
                                <div class="form-group mt-4">
                                    <input placeholder="time" type="number" name="time_c" required>
                                </div>
                                <div class="form-group mt-4">
                                    <button class="btn btn-primary" type="Submit" name="insert">insert</button>
                                </div>
                                </div>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
        </div>
    </div>


<?php
    include '../includes/footer.php';
?>

<?php
    }
    else{
        header('location:../index.php');
    }
?>