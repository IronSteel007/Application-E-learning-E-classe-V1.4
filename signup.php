<?php
include 'crud/conection.php';
$servername = "localhost";
$username = "root";
$password = "";
$conn = new PDO("mysql:host=$servername;dbname=e_class_db", $username, $password);

if($conn){
    echo 'work';
}
function create($name_user,$email_user,$pass_user){
    global $conn;
    if($conn){
        $query= "INSERT INTO comptes(name_user,email_user,pass_user) values(:name_user,:email_user,:pass_user)";
        $statement=$conn->prepare($query);

    $statement->execute([
            ':name_user'=>$name_user,
            ':email_user'=>$email_user,
            ':pass_user'=>$pass_user,
            ]);
    }
}

           


    if(isset($_POST['name_user']) && isset($_POST['email_user']) && isset($_POST['password'])){
    
        create($_POST['name_user'],$_POST['email_user'],$_POST['password']);
        header('Location:index.php');
    }
    ?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name_user="keywords" content="Bootstrap 5 , W3C , PHP, js, json, Sidebar, Header, Footer, Font Awesome, Github   " />
    <meta name_user="description" content="notre equipe de désigne vient de terminer la maquette de l'application E-Classe. En tant que développeur polyvalent, votre mission est d'intégrer la maquette avec un framework CSS de votre choix ainsi d'appliquer le principe **DRY **via le language PHP. Vous devez, donc, répondre aux histoires suivants :" />
    <meta name="author" content="IronSteel007" />
    <link rel="icon" href="assets/img/icone.ico" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="./assets/css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

    <title>E-Classe | Sign-up</title>
</head>

<body class="body-colo">
<main class="d-flex vh-100 justify-content-center align-items-center ">
        <div class="container-fluid divcont">
            <div class="">
                <div class="d-flex justify-content-center">
                    <div class="col-md-4 shadow rounded-3 col-sm-12 p-4 bg-light bor-red">
                        <div class="text-start d-flex justify-content-between">
                            <h2 class="border-start e-c">
                                E-Classe
                            </h2>
                            <a href = "index.php"class="btn btn-success text-center mt-2 w-10 ">
                                    Sign-in
                                </a>
                        </div>
                        <div class="text-center">
                            <h4 class="text-uppercase">Sign Up</h4>
                            <p class="h6">
                                Create a new account
                            </p>
                        </div>
                        <form action="" method="POST">
                            <div class="p-4">
                            <div class="mb-3 position-relative">
                                    <label for="user" class="form-label">name</label>
                                    <input type="text" class="form-control" placeholder="Enter your User Name" name="name_user" id="name" onkeyup="validationName()">
                                    <i class="fa fa-exclamation-circle fs-5" id="excN" style="display : none;"></i>
                                    <small id="errorNp" class="text-danger"></small>
                                </div>
                                <div class="mb-3 position-relative ">
                                    <label for="email" class="form-label">email</label>
                                    <input type="email" class="form-control shadow-none" placeholder="Enter your email" name="email_user" id="email" onkeyup="validationEmail()">
                                    <i class="fa fa-exclamation-circle fs-5" id="exc" style="display : none;"></i>
                                    <small id="error" class="text-danger"></small>
                                </div>
                                <div class="mb-3 position-relative">
                                    <label for="password" class="form-label">password</label>
                                    <input type="password" class="form-control" placeholder="Enter your password" name="password" id="password" onkeyup="validationPassword()">
                                    <i class="fa fa-exclamation-circle fs-5" id="excP" style="display : none;"></i>
                                    <small id="errorPss" class="text-danger"></small>
                                </div>
                                <div class="mb-3 position-relative">
                                    <label for="password" class="form-label">confirm Password</label>
                                    <input type="password" class="form-control" placeholder="Confirm your Password" name="pass_confirmation"value="" id="cPassword" onkeyup="validationCPassword()">
                                    <i class="fa fa-exclamation-circle fs-5" id="excCP" style="display : none;"></i>
                                    <small id="errorCPss" class="text-danger"></small>
                                </div>
                                <button class="btn btn-primary text-center mt-2 w-100 btn-pri" type="submit" name="insert" id="submit">
                                    Sign-Up
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/auth.js"></script>
    
</body>

</html>