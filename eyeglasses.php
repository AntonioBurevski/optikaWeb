<?php
include_once "header.php";
?>


<?php
include_once "header.php";
include "includes/class-autoload.inc.php";
include "includes/modifyEyeglasses.inc.php";
include "includes/eyeglasses.inc.php";

?>

<br>

<br>
<br>
<br>
<br>
<br>
<br>

<?php
$productsObj = new ProductsView();
$productsObj->showEyeglassesToUser();
?>