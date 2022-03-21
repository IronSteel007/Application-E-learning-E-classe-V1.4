

<div id="mySidenav" class="left sidenav">
                <div class="p-3 mt-2">
                    <h1 class="h3 e-c">E_Classes</h1>
                    <a href="javascript:void(0)" id="closebtn_" class="closebtn">&times;</a>
                </div>
                <div class="d-flex flex-column align-items-center mt-3">
                    <img class="rounded-circle avatar " src="../assets/img/avatar.jpeg" alt="avatar image" width="100" height="100">
                    <p class="mt-5 fa-lg">
                        <?php echo $_SESSION['utilisateur_name'] ?>
                    </p>
                    <p class="text-primary">
                        Admin
                    </p>
                </div>
                <nav class="d-flex justify-content-center align-content-center">
                    <ul class="nav flex-column mt-3 navul">
                        <li class="nav-item cool-w mt-4">
                            <a class="nav-link active btn text-center " href="home.php"><i class="fas fa-home text-dark col-2 "></i>Home</a>
                        </li>
                        <li class="nav-item cool-w mt-2">
                            <a class="nav-link active btn text-center " href="courses.php"><i class="far fa-bookmark text-dark col-2"></i>Course</a>
                        </li>
                        <li class="nav-item cool-w mt-2">
                            <a class="nav-link active btn text-center" href="student.php"><i class="fas fa-graduation-cap text-dark col-2"></i>Students</a>
                        </li>
                        <li class="nav-item cool-w mt-2">
                            <a class="nav-link active btn text-center" href="payment.php"><i class="fas fa-dollar-sign text-dark col-2"></i>Payment</a>
                        </li>
                        <li class="nav-item cool-w mt-2">
                            <a class="nav-link active btn text-center" href="#"><i class="fas fa-chart-line text-dark col-2"></i>Report</a>
                        </li>
                        <li class="nav-item cool-w mt-2">
                            <a class="nav-link active btn text-center" href="#"><i class="fas fa-cogs text-dark col-2"></i>Settings</a>
                        </li>
                    </ul>
                </nav>
                <div class="d-flex justify-content-center  mt-5">
                    <a href="deconnexion.php"" class="btn nav-link btn marg-t">Logout <i class="fas fa-sign-out-alt text-dark"></i></a>
                </div>
            </div>
