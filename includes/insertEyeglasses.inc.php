<?php
//IF this is set inside the code
if(isset($_POST["submit"])){

        $frameColor = $_POST['frameColor'];
        $frameMater = $_POST['frameMater'];
        $photoGrey = $_POST['photoGrey'];
        $gender = $_POST['gender'];
        $size = $_POST['size'];
        $image = file_get_contents($_FILES['image']['tmp_name']);

        require_once 'dbh.inc.php';
        require_once '../classes/dbh.class.php';
        require_once 'functions.inc.php';

        if(invalidEyeglassesinput($frameColor, $frameMater, $photoGrey, $gender, $size) !== false){
            header("location: ../insertEyeglasses.php?error=emptyinput");
            //Exit() is to stop the script from running
            exit();
        }
        

        createNewEyeglasses($frameColor, $frameMater, $photoGrey, $gender, $size, $image);
}