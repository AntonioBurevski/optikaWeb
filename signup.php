<?php
include_once "header.php";
?>

<link rel="stylesheet" href="styleLR.css">

<br>
<br>
<br>



<section class="signup-form">

<div class="container">
    <section class="login-form">				
        <div id="container_demo">
        <div id="wrapper">

        <form action="includes/signup.inc.php" method="post">
        <h1> Sign up </h1>

            <p> 
                <input type="text" name="name" placeholder="Name">
            </p>

            <p> 
               <input type="text" name="email" placeholder="Email">
            </p>

            <p> 
                <input type="text" name="uid" placeholder="Username">
            </p>

            <p> 
                <input type="password" name="pwd" placeholder="Password">
            </p>

            <p> 
                <input type="password" name="pwdrepeat" placeholder="Repeat Password">
            </p>

            <p class="signin button"> 
				<input type="submit" value="Sign up" name="submit"/> 
            </p>
            
            <p class="change_link">  
				Already a member ?
				<a href="login.php" class="to_register"> Log in </a>
			</p>
    </form>
</div>
</div>
</div>


    

    <?php
    
    if(isset($_GET["error"])){
        if($_GET["error"] == "emptyinput"){
            echo '<p style="text-align:center;color:red;"> Fill in all of the fields!</p>';
        } 
    
    else if ($_GET["error"] == "invaliduid"){
        echo '<p style="text-align:center;color:red;"> Choose a proper username!</p>';
    }else if ($_GET["error"] == "invalidemail"){
        echo '<p style="text-align:center;color:red;"> Choose a proper email!</p>';
    }else if ($_GET["error"] == "pwdsnotequal"){
        echo "<p style='text-align:center;color:red;'> Passwords do not match!</p>";
    }else if ($_GET["error"] == "stmtfailed"){
        echo "<p style='text-align:center;color:red;'> Something went wrong!</p>";
    }else if ($_GET["error"] == "usernametaken"){
        echo "<p style='text-align:center;color:red;'> Username already taken!</p>";
    }else if ($_GET["error"] == "none"){
        echo "<p style='text-align:center;color:green;'> <strong> You have signed up! </strong> </p>";
    }
    }

?>

</section>



