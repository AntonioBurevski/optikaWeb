<?php
//IF this is set inside the code
if(isset($_POST["submit"])){

        $productManufacturer = $_POST['productManufacturer'];
        $productMark = $_POST['productMark'];
        $productPrice = $_POST['productPrice'];
        $selectedProduct = $_POST['selectName'];


        require_once 'dbh.inc.php';
        require_once '../classes/dbh.class.php';
        require_once 'functions.inc.php';

        if(invalidInputProductInsert($productManufacturer, $productMark, $productPrice) !== false){
            header("location: ../adminpage.php?error=emptyinput");
            //Exit() is to stop the script from running
            exit();
        }
        
        if(productExists($conn, $productMark) !== false){
            header("location: ../adminpage.php?error=productexists");
            //Exit() is to stop the script from running
            exit();
        }

        //echo "Product Manufacturer: " . $productManufacturer;
        //echo "Product MArk: " . $productMark;
        //echo "Product Price: " . $productPrice;
        //echo "Selected product: " . $selectedProduct;

        createProduct($productManufacturer, $productMark, $productPrice, $selectedProduct);
}