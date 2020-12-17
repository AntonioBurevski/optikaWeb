<?php
include_once "header.php";
?>


<link rel="stylesheet" href="styleLR.css">

<br>
<br>
<br>
       
<section class="login-form">

<div class="container">
    <section class="login-form">				
        <div id="container_demo">
            <div id="wrapper">
                 
                <form action="includes/login.inc.php" method="post"> 
                    <h1>Log in</h1> 
           
                        <p> 
                            <input id="username" name="uid" required="required" type="text" placeholder="Username/Email"/>
                        </p>

                        <p>          
                            <input id="password" name="pwd" required="required" type="password" placeholder="Password" /> 
                        </p>
                               
                        <p class="login button"> 
                            <input type="submit" value="Login" name="submit" /> 
                        </p>
                        
                        <p class="change_link">
							Not a member yet ?
							<a href="signup.php" class="to_register">Sign up</a>
						</p>
                </form>
            </div>
        </div>
</div>

    <?php
    
    if(isset($_GET["error"])){
        if($_GET["error"] == "emptyinput"){
            echo "<p style='text-align:center;color:red;'> <strong> Fill in all of the fields! </strong> </p>";
        } 
    
    else if ($_GET["error"] == "wronglogin"){
        echo "<p style='text-align:center;color:red;'> <strong> Incorrect login information! </strong> </p>";
    }
    }

?>
</section>

