<?php
//We start a session on every single page.
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="style.css">
    <title>Optika</title>
</head>


<!--Navigation bar-->
<nav class="navbar navbar-default navbar-fixed-top">

        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>

            <img src="logo.png" >
            <a class="navbar-brand" href="index.php"></a>
          </div>

          <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav navbar-right">
              <li><a href="index.php">HOME</a></li>

              <?php
            if(isset($_SESSION["useruid"])){
                echo "<li><a href='includes/logout.inc.php'>LOG OUT</a></li>";
                echo "<li><a href='#Contact_Page'>CONTACT</a></li>"; 
                
            }else{
                echo "<li><a href='login.php'>LOG IN</a></li>";
                echo "<li><a href='signup.php'>SIGN UP</a></li> ";       
                echo "<li><a href='#Contact_Page'>CONTACT</a></li>"; 
            }
            ?>
              <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">PRODUCTS
                  <span class="caret"></span>
                </a>
                <ul class="dropdown-menu">
                    <li><a href="products.php">VIEW ALL</a></li>
                    <li><a href="sunglasses.php">SUNGLASSES</a></li>
                    <li><a href="eyeglasses.php">EYEGLASSES</a></li>
                    <li><a href="contactlenses.php">CONTACT LENSES</a></li>
                </ul>
              </li>

 
          </div>
        </div>
      </nav>