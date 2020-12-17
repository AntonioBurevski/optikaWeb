<?php

       $lensTechnology = '';
       $lensColor = '';
       $frameColor = '';
       $frameMaterial = '';
       $polarized = '';
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

   $result = $mysqli->query("SELECT * FROM sunglasses AS S
   INNER JOIN products AS P
   ON S.sunglassesId = P.productId
   WHERE sunglassesId=$productId AND productId=$productId")  or die(mysqli_error($mysqli));

  // if(sizeof($result)==1){
       $row = $result->fetch_array();
       $lensTechnology = $row['lensTechnology'];
       $lensColor = $row['lensColor'];
       $frameColor = $row['frameColor'];
       $frameMaterial = $row['frameMaterial'];
       $polarized = $row['polarized'];
       $gender = $row['gender'];
       $size = $row['size'];
       $productManufacturer = $row['productManufacturer'];
       $productMark = $row['productMark'];
       $productPrice = $row['productPrice'];
       $productType = $row['productType'];
       $productId = $row['productId'];
  // }

}

