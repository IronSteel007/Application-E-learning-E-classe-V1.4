<?php
    include '../crud/select.php';
    $tabb=[];
    $tabb=select();

?>
    <div class="row mt-5 flex-row">
        <div class="title col-lg-4 col-md-6 col-sm-12">
            <h2>Students List</h2>
        </div>
        <div class="d-flex gap-2 align-items-center justify-content-end col-lg-8 col-md-6 col-sm-12">
            <div style="font-size: 1.5rem;">
                <i class="fas fa-sort text-primary"></i>
            </div>
            <div>
                <a href="../view/form.php" class="btn btn-primary text-uppercase">add new student</a>
            </div>
        </div>
        <hr>
    </div>
    <div class="row mt-5 px-5">
        <table class="table">
            <thead>
                <tr class="">
                    <th scope="col"></th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Enroll number</th>
                    <th scope="col">Date of admission</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody class="flex-column gap-2">
                <tr class="mt-2">


               <?php
                    $students=$conn->prepare('SELECT COUNT(*) as number  FROM student');
                    $students->execute();
                    $nStudents= $students->fetch(PDO::FETCH_ASSOC);
                     if  ($nStudents ['number'] > 0 ) :  ?>
                      <?php foreach ($tabb as $tabb) :?>

                                    <th scope="row">
                                    <img src="../assets/img/profile.png" alt="Pro-img" width="65" height="55">
                                    </th>
                                    <td class="align-middle"><?php echo $tabb["name"]?></td>
                                    <td class="align-middle"><?php echo $tabb["email"]?></td>
                                    <td class="align-middle"><?php echo $tabb["phone"]?></td>
                                    <td class="align-middle"><?php echo $tabb["enroll_number"]?></td>
                                    <td class="align-middle"><?php echo $tabb["date_of_admission"]?></td>
                                    <td class="text-primary align-middle">
                                        <a href="../crud/update.php?id=<?php echo $tabb['id']?>" class=""><i class="fas fa-pen pe-3 btn btn-info "></i></a>
                                    <a href="../crud/delete.php?id=<?php echo $tabb['id']?>" class=""><i class="fas fa-trash btn btn-danger"></i></a>
                                    </td>
                                    </tr>
                                    
                    <?php endforeach ?>
                    <?php else  :  echo "no student subscribed yet"; ?>
                    <?php endif ?>
                    <!-- <?php print_r($nStudents);  ?> -->
                    
            </tbody>
        </table>
    </div>
