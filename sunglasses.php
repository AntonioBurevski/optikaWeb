<?php
include_once "header.php";
include "includes/class-autoload.inc.php";
include "includes/modifySunglasses.inc.php";
include "includes/sunglasses.inc.php";

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
$productsObj->showSunglassesToUser();
?>