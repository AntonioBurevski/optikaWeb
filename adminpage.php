<?php
include_once "header.php";
include "includes/class-autoload.inc.php";
include "classes/productscontr.class.php";
?>

<head>

<script>
       /* function openModifySunglasses(){
            window.open("modifySunglasses.php" ,"_blank");
        }

        function openModifyEyeglasses(){

        }

        function openModifyContact_lens(){

        }*/

</script>


<script>
        function getSelectedValue(){
        var e = document.getElementById("selectID");
        var selectedProduct = e.value;

        switch(selectedProduct){
        case("sunglasses"):

            window.open("modifySunglasses.php" ,"_blank");

        break;
        case("eyeglasses"):

             window.open("modifyEyeglasses.php", "_blank");

        break;
        case("contact_lens"):

            // window.open("insertSunglasses.php", '_blank');

        break;

    }
}
        </script>

</head>


<body>
    

<section class="add-form" style="text-align:center;">

    <div class="add-form-form">
    <form action="includes/adminpage.inc.php" method="post" >
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
    
        <input type="text" name="productManufacturer" placeholder="Product Manufacturer">
        <br>
        <br>
        <input type="text" name="productMark" placeholder="Product Mark">
        <br>
        <br>
        <input type="text" name="productPrice" placeholder="Product Price">
        <br>
        <br>
        <SELECT id="selectID" name="selectName">
            
            <OPTION Value="-1">--- Select ---</OPTION>
            <OPTION Value="sunglasses">Sunglasses</OPTION>
            <OPTION Value="eyeglasses">Eyeglasses</OPTION>
            <OPTION Value="contact_lens">Contact Lens</OPTION>

        </SELECT>
        <br>
        <br>
        

        <button type="submit" name="submit" onclick="">ADD</button>
        &nbsp;&nbsp;
        <button onclick="getSelectedValue()">MODIFY</button>
        <br>
        <br>
        
        
    <?php
    //TRY onclick="$('getSelectedValue();')" with AJAX
        ini_set('error_reporting', E_ALL & ~E_NOTICE & ~E_WARNING);
        ini_set('display_errors', 1);     // 0 = hide errors; 1 = display errors

        if(isset($_GET["error"])){
            if($_GET["error"] == "emptyinput"){
                echo "<p> Fill in all of the fields!</p>";
            } 
            else if($_GET["error"] == "productexists"){
                echo "<p> Product already exists!</p>";
            } 

            
        }
    ?>
        
        <br>
        <br>
        <br>
        <br>
        <!--<button type="" name="" onclick="openModifySunglasses()">SUNGLASSES</button>
        <br>
        <br>
        <button type="" name="" onclick="">EYEGLASSES</button>
        <br>
        <br>
        <button type="" name="" onclick="">CONTACT LENS</button>
        <br>
        <br>-->

        

        </form>

        </div>

     


        </body>


       

