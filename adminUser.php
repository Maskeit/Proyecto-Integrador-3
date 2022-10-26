<?php session_start(); 
if(isset($_SESSION['adminUser'])){
    require 'vistas/adminUser.view.php';
} else {
    header('Location: rscAdmin/loginAdmin.php');
    die();
}
?>
