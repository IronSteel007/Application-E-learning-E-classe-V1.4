<?php
    include 'conection.php';
    $id=$_GET ['id'];
        if(isset($_POST['save'])) {
        global $conn;
        if($conn){
            $query=("UPDATE student set name=:name,email=:email,phone=:phone,enroll_number=:enroll_number,date_of_admission=:date_of_admission WHERE id=$id");

            $statement=$conn->prepare($query);
            $statement ->execute([

                ':name'=>$_POST['name'],
                ':email'=>$_POST['email'],
                ':phone'=>$_POST['phone'],
                ':enroll_number'=>$_POST['enroll_number'],
                ':date_of_admission'=>$_POST['date_of_admission'],
                
            ]);
                header('location:../view/student.php');
            }
            
        }
?>

<?php
    include '../includes/header.php';
    // include 'conection.php';
    $stud = $conn -> prepare("SELECT * FROM student WHERE id=$id");
    $stud ->execute();
    $tabb=$stud->fetch(PDO::FETCH_ASSOC);
?>

    <div class="d-flex vh-100 justify-content-center align-items-center body-colo">
        <div class="container-fluid divcont">
            
                <div class="d-flex justify-content-center">
                    <div class="col-md-4 shadow rounded-3 col-sm-12 p-4 bg-light bor-red">
                        <div class="text-center">
                        <form class="form-group " method="POST" enctype="multipart/form-data">
                            <h1>UPDATE STUDENTS</h1>
                            <div>
                            <div class="form-group">
                                <label for="img" class="form-label">Image</label>
                                <input class="form-control" type="file" name="img" id="img" >
                            </div>
                            <div class="form-group">
                                <label for="name" class="form-label">Name</label>
                                <input class="form-control" type="text" name="name" id="name" value="<?php echo $tabb['name']?>">
                            </div>
                            <div class="form-group">
                                <label for="email" class="form-label">Email</label>
                                <input class="form-control" type="email" name="email" id="email" value="<?php echo $tabb['email']?>">
                            </div>
                            <div class="form-group">
                                <label for="phone" class="form-label">Phone</label>
                                <input class="form-control" type="text" name="phone" id="phone" value="<?php echo $tabb['phone']?>">
                            </div>
                            <div class="form-group">
                                <label for="number" class="form-label">Number</label>
                                <input class="form-control" type="number" name="enroll_number" id="number" value="<?php echo $tabb['enroll_number']?>">
                            </div>
                            <div class="form-group">
                                <label for="date" class="form-label">Date</label>
                                <input class="form-control" type="date" name="date_of_admission" id="date" value="<?php echo $tabb['date_of_admission'] ?>" >
                            </div>
                            <input type="submit" value="Save" name="save">
                        </form>
                        </div>
                    </div>
                </div>
        </div>
    </div>


<?php
    include '../includes/footer.php';
?>