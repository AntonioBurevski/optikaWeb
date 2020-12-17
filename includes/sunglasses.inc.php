<?php

$mysqli = new mysqli('localhost', 'root', '', 'loginSystem') or die(mysqli_error($mysqli));

if(isset($_GET['sunglasses'])){
     $productId = $_GET['sunglasses'];

    require_once 'dbh.inc.php';
    require_once 'classes/dbh.class.php';
    require_once 'functions.inc.php';

    $result = $mysqli->query("SELECT * FROM sunglasses AS S
    INNER JOIN products AS P
    ON S.sunglassesId = P.productId
    WHERE sunglassesId=$productId AND productId=$productId")  or die(mysqli_error($mysqli));

   $row = $result->fetch_array();
   $lensTechnology = $row['lensTechnology'];
   $lensColor = $row['lensColor'];
   $frameColor = $row['frameColor'];
   $frameMaterial = $row['frameMaterial'];
   $polarized = $row['polarized'];
   $gender = $row['gender'];
   $size = $row['size'];
?>
     <div id="id01" class="modal">
  
        <form class="modal-content animate" >
          
      
          <div class="container">
            <label for="lensTechnology"><b>Lens Technology</b> &nbsp; <?php echo $lensTechnology ?></label>
            <br>
            <br> 
            <label for="lensColor"><b>Lens Color</b> &nbsp; <?php echo $lensColor ?></label>

            
            <br>
            <br>
            <label for="frameColor"><b>Frame Color</b> &nbsp; <?php echo $frameColor ?></label>

            <br> 
            <br>
            <label for="frameMaterial"><b>Frame Material</b> &nbsp; <?php echo $frameMaterial ?></label>

            <br> 
            <br>
            <label for="polarized"><b>Polarized</b> &nbsp; <?php echo $polarized ?></label>

            <br> 
            <br>
            <label for="gender"><b>Gender</b> &nbsp; <?php echo $gender ?></label>

            <br> 
            <br>
            <label for="size"><b>Size</b> &nbsp; <?php echo $size ?></label>

            <br> 
            <br>
            
           
          </div>
        </form>
        
      </div>
      <?php
}