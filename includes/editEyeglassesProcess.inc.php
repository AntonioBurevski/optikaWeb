<?php


       $frameColor = '';
       $frameMater = '';
       $photoGrey = '';
       $gender = '';
       $size = '';
       $productManufacturer = '';
       $productMark = '';
       $productPrice = '';
       $productType = '';
       $productId = '';

$mysqli = new mysqli('localhost', 'root', '', 'loginSystem') or die(mysqli_error($mysqli));

if(isset($_GET['edit'])){
    $productId = $_GET['edit'];

   $result = $mysqli->query("SELECT * FROM eyeglasses AS E
   INNER JOIN products AS P
   ON E.eyeglassesId = P.productId
   WHERE eyeglassesId=$productId AND productId=$productId")  or die(mysqli_error($mysqli));

  // if(sizeof($result)==1){
       $row = $result->fetch_array();
       $frameColor = $row['frameColor'];
       $frameMater = $row['frameMater'];
       $photoGrey = $row['photoGrey'];
       $gender = $row['gender'];
       $size = $row['size'];
       $productManufacturer = $row['productManufacturer'];
       $productMark = $row['productMark'];
       $productPrice = $row['productPrice'];
       $productType = $row['productType'];
       $productId = $row['productId'];
  // }

}


