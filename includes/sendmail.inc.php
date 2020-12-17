<?php
if(isset($_POST['sendmail'])){

    $name = $_POST['name'];
    $email = $_POST['email'];
    $comments = $_POST['comments'];


    mail("aleksandar.yanev@yahoo.com", $name, $comments);
}