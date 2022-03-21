<?php
    include '../crud/conection.php';

    require '../crud/insert.php';



    if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['phone']) && isset($_POST['enroll_number']) && isset($_POST['date_of_admission'])){
    if(!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['phone']) && !empty($_POST['enroll_number']) && !empty($_POST['date_of_admission'])){
            create($_POST['name'],$_POST['email'],$_POST['phone'],$_POST['enroll_number'],$_POST['date_of_admission']);
            header('location:student.php');
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
                            <h4 class="text-uppercase">add a new learner </h4>
                        </div>
                        <div class="text-center">
                            <form action="" method="POST">
                                <div class="form-control d-flex justify-content-end bor-red bg-light shadow rounded-3 ">
                                <div class="row">
                                <div class="form-group mt-4">
                                    <input placeholder="username" type="text" name="name" required>
                                </div>
                                <div class="form-group mt-4">
                                    <input placeholder="Email" type="text" name="email" required>
                                </div>
                                <div class="form-group mt-4">
                                    <input placeholder="Phone" type="text" name="phone" required>
                                </div>
                                <div class="form-group mt-4">
                                    <input placeholder="Date_of_Admission" type="date" name="date_of_admission" required>
                                </div>
                                <div class="form-group mt-4">
                                    <input placeholder="enroll_number" type="text" name="enroll_number" required>
                                </div>
                                <div class="form-group mt-4">
                                    <button class="btn btn-primary" type="Submit" name="insert">Add learner</button>
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