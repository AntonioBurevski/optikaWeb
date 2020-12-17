<?php

$mysqli = new mysqli('localhost', 'root', '', 'loginSystem') or die(mysqli_error($mysqli));

if(isset($_GET['eyeglasses'])){
     $productId = $_GET['eyeglasses'];

    require_once 'dbh.inc.php';
    require_once 'classes/dbh.class.php';
    require_once 'functions.inc.php';

    $result = $mysqli->query("SELECT * FROM eyeglasses AS E
    INNER JOIN products AS P
    ON E.eyeglassesId = P.productId
    WHERE eyeglassesId=$productId AND productId=$productId")  or die(mysqli_error($mysqli));

   $row = $result->fetch_array();
   $frameColor = $row['frameColor'];
   $frameMaterial = $row['frameMater'];
   $photoGrey = $row['photoGrey'];
   $gender = $row['gender'];
   $size = $row['size'];

?>
     <div id="id01" class="modal">
  
        <form class="modal-content animate" >
          
      
          <div class="container">
            <label for="frameColor">Frame Color &nbsp; <?php echo $frameColor; ?></label>

            <br>
      
            <label for="frameMaterial">Frame Material &nbsp; <?php echo $frameMaterial; ?></label>

            <br> 

            <label for="photoGrey">Photo Grey &nbsp; <?php echo $photoGrey; ?></label>

            <br> 

            <label for="gender"> Gender &nbsp; <?php echo $gender; ?></label>

            <br> 

            <label for="size"> Size &nbsp;&nbsp;&nbsp; <?php echo $size; ?></label>

            <br> 
            <br>
            <br>
            
           
          </div>
        </form>
        
      </div>
      <?php
}