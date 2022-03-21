
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="keywords" content="Bootstrap 5 , W3C , PHP, js, json, Sidebar, Header, Footer, Font Awesome, Github   " />
    <meta name="description" content="otre équipe de désigne vient de terminer la maquette de l'application E-Classe. En tant que développeur polyvalent, votre mission est d'intégrer la maquette avec un framework CSS de votre choix ainsi d'appliquer le principe **DRY **via le language PHP. Vous devez, donc, répondre aux histoires suivants :" />
    <meta name="author" content="IronSteel007" />
    <link rel="icon" href="assets/img/icone.ico" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="./assets/css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

    <title>E-Classe | Sign-in</title>
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
                            <a href = "signup.php"class="btn btn-success text-center mt-2 w-10 ">
                                    Sign-up
                                </a>
                        </div>
                        <div class="text-center">
                            <h4 class="text-uppercase">Sign In</h4>
                            <p class="h6">
                                Enter your credentials to access your account
                            </p>
                    <?php if (isset($_GET['error'])){
                           ?>
                        </div>
                        <div class="alert alert-danger" >
                          <?php echo $_GET['error']; ?>
                        </div>
                    <?php }; ?>
                        <form action="./includes/ses_cko.php" method="POST">
                            <div class="p-4">
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" id="email" class="form-control" name="email" placeholder="Enter your email" value="<?php if(isset($_COOKIE['user'])) {echo $_COOKIE['user'];}?>">
                                </div>
                                <div class="mb-3">
                                    <label for="password" class="form-label">Password</label>
                                    <input type="password" id="password" class="form-control" name="pass" placeholder="Enter your password" value="<?php if(isset($_COOKIE['user_pass'])) {echo $_COOKIE['user_pass'];} ?>">
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="check" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        Remember Me
                                    </label>
                                </div>
                                <button class="btn btn-primary text-center mt-2 w-100 botn-pri" type="submit">
                                    Sign-In
                                </button>
                                <p class="text-center mt-2 text-muted">
                                    Forgot your password?
                                    <a href="#">Reset password</a>
                                </p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>