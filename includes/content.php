<?php
   include '../crud/conection.php';

   $students=$conn->prepare('SELECT COUNT(*) as number  FROM student');
   $students->execute();
   $nStudents= $students->fetch(PDO::FETCH_ASSOC);
   $coursees=$conn->prepare('SELECT COUNT(*) as numberc  FROM courses');
   $coursees->execute();
   $nCourses= $coursees->fetch(PDO::FETCH_ASSOC);
   $payment=$conn->prepare('SELECT SUM(amount_paid) as totalP FROM payment');
   $payment->execute();
   $tpayment= $payment->fetch(PDO::FETCH_ASSOC);


   
?>

<div class="row mt-2">
                    <div class="col-sm-6 col-md-3">
                        <div class="card" style="font-size: 1.5rem; background-color: #F0F9FF
                        ; color: #74C1ED;">
                            <div class="card-body">
                                <i class="fas fa-graduation-cap fa-lg"></i>
                                <p class="text-muted fa-sm">Students</p>
                                <p class="fa-sm d-flex justify-content-end text-dark fw-bolder">
                                    <?php
                                        echo $nStudents ['number'];
                                    
                                    ?>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="card" style="font-size: 1.5rem; background-color: #FEF6FB
                        ; color: #EE95C5;">
                            <div class="card-body">
                                <i class="far fa-bookmark fa-lg"></i>
                                <p class="text-muted fa-sm">Course</p>
                                <p class="fa-sm d-flex justify-content-end text-dark fw-bolder">
                                <?php  
                                        echo $nCourses ['numberc'];
                                    
                                    ?>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="card" style="font-size: 1.5rem; background-color: #FEFBEC
                        ; color: #00C1FE;">
                            <div class="card-body">
                                <i class="fas fa-dollar-sign fa-lg"></i>
                                <p class="text-muted fa-sm">Payements</p>
                                <p class="fa-sm d-flex justify-content-end text-dark fw-bolder">
                                <?php  
                                        echo $tpayment ['totalP'];
                                    
                                    ?>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="card  body-colo " style="font-size: 1.5rem;
                        ; color: #fff;">
                            <div class="card-body">
                                <i class="far fa-user fa-lg"></i>
                                <p class="text-muted fa-sm">Users</p>
                                <p class="fa-sm d-flex justify-content-end text-dark fw-bolder">
                                    3
                                </p>
                            </div>
                        </div>
                    </div>

                </div>

