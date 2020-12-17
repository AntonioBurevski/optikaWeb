<?php
include "header.php";
include "includes/class-autoload.inc.php";
include "includes/modifySunglasses.inc.php";
include "classes/productscontr.class.php";

?>


<body>    
    
<?php
require_once "includes/editProcess.inc.php";
?>
<br>
<br>
<br>
<br>
<br>



<?php
$productsObj = new ProductsView();
$productsObj->showProducts();
?>



<div class="modify-form-form" style="position: relative; bottom: 380px; left: 1250px; ">
<form action="includes/modifySunglasses.inc.php" method="post" >
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
            <input type="text" name="lensTechnology" id="lensTechnology" placeholder="Lens Technology" value="<?php echo $lensTechnology; ?>">
            <br>
            <br>
            <input type="text" name="lensColor" placeholder="Lens Color" value="<?php echo $lensColor; ?>">
            <br>
            <br>
            <input type="text" name="frameColor" placeholder="Frame Color" value="<?php echo $frameColor; ?>">
            <br>
            <br>
            <input type="text" name="frameMaterial" placeholder="Frame Material" value="<?php echo $frameMaterial; ?>">
            <br>
            <br>
            <input type="text" name="polarized" placeholder="Polarized" value="<?php echo $polarized; ?>">
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


        