<?php 
session_start();
if(isset($_SESSION['utilisateur_email'])){
?>
<?php
    include '../includes/header.php';
?>
    <div class="container-fluid sm">
        <div class="d-flex vh-100 ">
            <?php
                include '../includes/asidebar.php';
            ?>
            <div id="main" class="right w-100">
                <?php
                    include '../includes/navbar.php';
                ?>

                <?php
                    include '../includes/content.php';
                ?>
            </div>
        </div>
    </div>

<?php
    include '../includes/footer.php';
?>
<?php
    }
    else{
        header('location:../index.php');
    }
?>