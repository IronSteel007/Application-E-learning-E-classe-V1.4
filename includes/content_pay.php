<?php
    include '../crud/conection.php';

    function select(){
        global $conn;
    
        if($conn){
            $query='SELECT *FROM payment';
            $statement = $conn -> prepare($query);
    
            $statement-> execute();
    
            return $statement->fetchAll();
        }
    }
    $tabb=[];
    $tabb=select();
    ?>

    <div class="row mt-5 flex-row">
        <div class="title col-lg-4 col-md-6 col-sm-12">
            <p class="h2">Payements list</p>
        </div>
        <div class="d-flex gap-2 align-items-center justify-content-end col-lg-8 col-md-6 col-sm-12">
            <div style="font-size: 1.5rem;">
                <i class="fas fa-sort text-primary"></i>
            </div>
        </div>
        <hr>
    </div>
    <div class="row mt-5 px-5">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Payment Shedule</th>
                    <th scope="col">Bill Number</th>
                    <th scope="col">Amount Paid</th>
                    <th scope="col">Balance Amount</th>
                    <th scope="col">Date</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
           


                        <tr>

                        <?php foreach ($tabb as $tabb) :?>  

                        <td><?php echo $tabb["name"]?></td>
                        <td><?php echo $tabb['payment_shedule']?></td>
                        <td><?php echo $tabb['bill_number']?></td>
                        <td><?php echo $tabb['amount_paid']?></td>
                        <td><?php echo $tabb['balance_amount']?></td>
                        <td><?php echo $tabb['Date']?></td>
                        <td><i class="far fa-eye text-primary"></i></td>
                        </tr>
                        <?php endforeach?>

            </tbody>
        </table>
    </div>