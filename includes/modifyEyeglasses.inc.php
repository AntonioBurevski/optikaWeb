<?php
if(isset($_GET['delete'])){
    $productId = $_GET['delete'];

    require_once 'dbh.inc.php';
    require_once 'classes/dbh.class.php';
    require_once 'functions.inc.php';

    deleteEyeglasses($productId);

}else if(isset($_POST['submit'])){

    $frameColor = $_POST['frameColor'];
    $frameMater = $_POST['frameMater'];
    $photoGrey = $_POST['photoGrey'];
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

    updateEyeglasses($productId ,$frameColor, $frameMater, $photoGrey, $gender,  $size, $productManufacturer, $productMark, $productPrice, $productType);

}