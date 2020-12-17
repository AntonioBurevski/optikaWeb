<?php
include "header.php";
include "includes/class-autoload.inc.php";
include "includes/modifyEyeglasses.inc.php";
include "classes/productscontr.class.php";

?>


<body>    
    
<?php
require_once "includes/editEyeglassesProcess.inc.php";
?>
<br>
<br>
<br>
<br>
<br>



<?php
$productsObj = new ProductsView();
$productsObj->showEyeglasses();
?>



<div class="modify-form-form" style="position: relative; bottom: 380px; left: 1250px; ">
<form action="includes/modifyEyeglasses.inc.php" method="post">
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <input type="text" name="productId" placeholder="Product Id" value="<?php echo $productId; ?>" readonly>
            <br>
            <br>
            <input type="text" name="productManufacturer" placeholder="Manufacturer" value="<?php echo $productManufacturer; ?>">
            <br>
            <br>
            <input type="text" name="productMark" placeholder="Product Mark" value="<?php echo $productMark; ?>">
            <br>
            <br>
            <input type="text" name="productPrice" placeholder="Product Price" value="<?php echo $productPrice; ?>">
            <br>
            <br>
            <input type="text" name="productType" placeholder="Product Type" value="<?php echo $productType; ?>">
            <br>
            <br>
            <input type="text" name="frameColor" placeholder="Frame Color" value="<?php echo $frameColor; ?>">
            <br>
            <br>
            <input type="text" name="frameMater" placeholder="Frame Material" value="<?php echo $frameMater; ?>">
            <br>
            <br>
            <input type="text" name="photoGrey" placeholder="Photo Grey" value="<?php echo $photoGrey; ?>">
            <br>
            <br>
            <input type="text" name="gender" placeholder="Gender" value="<?php echo $gender; ?>">
            <br>
            <br>
            <input type="text" name="size" placeholder="Size" value="<?php echo $size; ?>">
            <br>
            <br>
            <button type="submit" name="submit" onclick="">MODIFY</button>
            <br>
            <br>
            <input type="button" value="Go back!" onclick="history.back()">
</form>



</body>

<?php
        ini_set('error_reporting', E_ALL & ~E_NOTICE & ~E_WARNING);
        ini_set('display_errors', 1);     // 0 = hide errors; 1 = display errors
?>

<?php
include "footer.php";
?>


        