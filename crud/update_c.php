<?php
    include 'conection.php';
    $id=$_GET ['id'];
        if(isset($_POST['save'])) {
        global $conn;
        if($conn){
            $query=("UPDATE courses set name_c=:name,type_c=:type,price_c=:price,time_c=:time WHERE id_c=$id");
            // $query ->bindParam(1,name_img);
            // $query ->bindParam(2,type_img);
            // $query ->bindParam(3,data_img);
            // 'name_img'=> $_FILES['img']['name'],
            // ':type_img'=> $_FILES['img']['type'],
            // ':data_img'=> file_get_contents($_FILES['img']['tmp_name']),
            $statement=$conn->prepare($query);
            $statement->bindValue(':id_c', $id, PDO::PARAM_INT);
            $statement ->execute([

                ':name'=>$_POST['name_c'],
                ':type'=>$_POST['type_c'],
                ':price'=>$_POST['price_c'],
                ':time'=>$_POST['time_c'],

            ]);
            
                header('location:../view/courses.php');
            }
        }
?>
<?php
    include '../includes/header.php';
    // include 'conection.php';
    $cour_c = $conn -> prepare("SELECT * FROM courses WHERE id_c=$id");
    $cour_c->bindValue(':id_c', $id, PDO::PARAM_INT);
    $cour_c->execute();
    $cour=$cour_c->fetch(PDO::FETCH_ASSOC);
?>

<div class="d-flex vh-100 justify-content-center align-items-center body-colo">
        <div class="container-fluid divcont">
            
                <div class="d-flex justify-content-center">
                    <div class="col-md-4 shadow rounded-3 col-sm-12 p-4 bg-light bor-red">
                        <div class="text-center">
                        <form class="form-group " method="POST" enctype="multipart/form-data">
                            <h1>UPDATE COURSE</h1>
                            <div>
                            
                            <div class="form-group">
                                <label for="name" class="form-label">Name</label>
                                <input class="form-control" type="text" name="name_c" id="name" value="<?php echo $cour['name_c']?>">
                            </div>
                            <div class="form-group">
                                <label for="email" class="form-label">Email</label>
                                <input class="form-control" type="email" name="type_c" id="email" value="<?php echo $cour['type_c']?>">
                            </div>
                            <div class="form-group">
                                <label for="phone" class="form-label">Phone</label>
                                <input class="form-control" type="text" name="price_c" id="phone" value="<?php echo $cour['price_c']?>">
                            </div>
                            <div class="form-group">
                                <label for="number" class="form-label">Number</label>
                                <input class="form-control" type="number" name="time_c" id="number" value="<?php echo $cour['time_c']?>">
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