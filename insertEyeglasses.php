<?php
include_once "header.php";
include "includes/class-autoload.inc.php";
include "classes/productscontr.class.php";
?>

<section class="add-form">

    <div class="add-form-form">
    <form action="includes/insertEyeglasses.inc.php" method="post" enctype="multipart/form-data">
        
        <br>
        <br>
        <br>
        <br>
        <input type="text" name="frameColor" placeholder="Frame Color">
        <br>
        <br>
        <input type="text" name="frameMater" placeholder="Frame Material">
        <br>
        <br>
        <input type="text" name="photoGrey" placeholder="Photo Grey">
        <br>
        <br>
        <input type="text" name="gender" placeholder="Gender">
        <br>
        <br>
        <input type="text" name="size" placeholder="Size">
        <br>
        <br>
        <input type="file" name="image">
        <br>
        <br>
        <button type="submit" name="submit" onclick="">ADD</button>
        <br>
        <br>
        <input type="button" value="Go back!" onclick="history.back()">
        <?php
        
        ini_set('error_reporting', E_ALL & ~E_NOTICE & ~E_WARNING);
        ini_set('display_errors', 1);     // 0 = hide errors; 1 = display errors

        if(isset($_GET["error"])){
            if($_GET["error"] == "emptyinput"){
                echo "<p> Fill in all of the fields!</p>";
            } 

        }
        
        
        
        ?>

        </form>

        </div>

<?php
include_once "footer.php";
?>
