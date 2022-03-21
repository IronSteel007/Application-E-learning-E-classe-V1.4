<?php
    include '../crud/conection.php';

    function select(){
        global $conn;
    
        if($conn){
            $query='SELECT *FROM courses';
            $statement = $conn -> prepare($query);
    
            $statement-> execute();
    
            return $statement->fetchAll();
        }
    }
    $cour=[];
    $cour=select();
    
    ?>
    


<div class="row mt-5 flex-row">
        <div class="title col-lg-4 col-md-6 col-sm-12">
            <h2>Courses List</h2>
        </div>
        <div class="d-flex gap-2 align-items-center justify-content-end col-lg-8 col-md-6 col-sm-12">
            <div style="font-size: 1.5rem;">
                <i class="fas fa-sort text-primary"></i>
            </div>
            <div>
                <a href="../view/form_cours.php" class="btn btn-primary text-uppercase">add new course</a>
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
                    <th scope="col">type</th>
                    <th scope="col">price</th>
                    <th scope="col">time</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody class="flex-column gap-2">
                
                
            
                <tr class="mt-2">
            <?php foreach ($cour as $cour) :?> 
             

                <th scope="row">
                    <img src="../assets/img/profile.png" alt="Pro-img" width="65" height="55">
                </th>
                
                <td class="align-middle"><?php echo $cour["name_c"]?></td>
                <td class="align-middle"><?php echo $cour["type_c"]?></td>
                <td class="align-middle"><?php echo $cour["price_c"]?></td>
                <td class="align-middle"><?php echo $cour["time_c"]?></td>
                <td class="text-primary align-middle">
                    <a href="../crud/update_c.php?id=<?php echo $cour['id_c']?> class=""><i class="fas fa-pen pe-3 btn btn-info"></i></a>
                    <a href="../crud/delete_c.php?id=<?php echo $cour['id_c']?> class=""><i class="fas fa-trash btn btn-danger"></i></a>
                </td>
                </tr>
                <?php endforeach?>

            </tbody>
        </table>
    </div>