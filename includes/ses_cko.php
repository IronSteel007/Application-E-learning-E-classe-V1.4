<?php
session_start();
$email = $_POST['email'];
$password = $_POST['pass'];

if (empty($email)) {
    header('location:../index.php?error=Enter Your Email PLZ');
} else if (empty($password)) {
    header('location:../index.php?error=Enter Your Password PLZ');
}

else {
    include('../crud/conection.php');
    $users = $conn->prepare("SELECT * FROM comptes WHERE email_user='$email'");
    $users->execute();
    $user = $users->fetch();
    $password = $_POST['pass'];
    $user_name = $user['name_user'];
    $user_email = $user['email_user'];
    $user_password = $user['pass_user'];
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    header('location:../index.php?error=invalid format email');
    }

    else if ($email === $user_email && $password === $user_password){
     $_SESSION['utilisateur_name'] =  $user_name;
     $_SESSION['utilisateur_email'] = $user_email;
     $_SESSION['utilisateur_password'] = $user_password;
     if(isset($_POST['check'])){
        setcookie('user',$user_email,time()+(24*3600),"/");
        setcookie('user_pass',$user_password,time()+(24*3600),"/");
    }
    header('location:../view/home.php');

     }
    else {
        header('location:../index.php?error=password or email is incorrect');
    }
}
