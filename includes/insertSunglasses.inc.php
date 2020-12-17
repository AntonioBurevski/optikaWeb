<?php
//IF this is set inside the code
if(isset($_POST["submit"])){

        $lensTechnology = $_POST['lensTechnology'];
        $lensColor = $_POST['lensColor'];
        $frameColor = $_POST['frameColor'];
        $frameMaterial = $_POST['frameMaterial'];
        $polarized = $_POST['polarized'];
        $gender = $_POST['gender'];
        $size = $_POST['size'];
        $image = addslashes(file_get_contents($_FILES['image']['tmp_name']));


        require_once 'dbh.inc.php';
        require_once '../classes/dbh.class.php';
        require_once 'functions.inc.php';

        if(invalidSunglassesInput($lensTechnology, $lensColor, $frameColor, $frameMaterial, $polarized, $gender, $size) !== false){
            header("location: ../insertSunglasses.php?error=emptyinput");
            //Exit() is to stop the script from running
            exit();
        }
        
        createNewSunglasses($lensTechnology, $lensColor, $frameColor, $frameMaterial, $polarized, $gender, $size, $image);

}