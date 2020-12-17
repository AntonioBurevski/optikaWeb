<?php
if(isset($_GET['delete'])){
    $productId = $_GET['delete'];

    require_once 'dbh.inc.php';
    require_once 'classes/dbh.class.php';
    require_once 'functions.inc.php';

    deleteProduct($productId);

}else if(isset($_POST['submit'])){

    $lensTechnology = $_POST['lensTechnology'];
    $lensColor = $_POST['lensColor'];
    $frameColor = $_POST['frameColor'];
    $frameMaterial = $_POST['frameMaterial'];
    $polarized = $_POST['polarized'];
    $gender = $_POST['gender'];
    $size = $_POST['size'];
    $productManufacturer = $_POST['productManufacturer'];
    $productMark = $_POST['productMark'];
    $productPrice = $_POST['productPrice'];
    $productType = $_POST['productType'];
    $productId = $_POST['productId'];


    require_once 'dbh.inc.php';
    require_once '../classes/dbh.class.php';
    require_once 'functions.inc.php';

    updateSunglasses($productId ,$lensTechnology, $lensColor, $frameColor, $frameMaterial, $polarized, $gender, $size, $productManufacturer, $productMark, $productPrice, $productType);

}