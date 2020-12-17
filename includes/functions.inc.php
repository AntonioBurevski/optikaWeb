<?php

//FUNCTIONS FOR USER SIGN UP

function emptyInputSignup($name, $email, $username, $pwd, $pwdRepeat) {
    $result;

    if(empty($name) || empty($email) || empty($username) || empty($pwd) || empty($pwdRepeat) ){
        $result = true;
    }else{
        $result = false;
    }
    return $result;
}


function invalidUid($username){
    $result;

    //preg_match is a function to see if a string matches the conditions
    if(!preg_match("/^[a-zA-Z0-9]*$/", $username)){
        $result = true;
    }else{
        $result = false;
    }
    return $result;
}

function invalidEmail($email){
    $result;

    //filter_var and FILETR_VALIDATE_EMAIL built in function inside PHP if the first parameter is an email
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $result = true;
    }else{
        $result = false;
    }
    return $result;
}

function pwdMatch($pwd, $pwdRepeat){
    $result;

    if($pwd !== $pwdRepeat){
        $result = true;
    }else{
        $result = false;
    }
    return $result;
}

//If username or email we submitted exists in the database
function uidExists($conn, $username, $email){
    $sql = "SELECT * FROM users WHERE usersUid = ? OR usersEmail = ?;";
    //Initialize a new prepared statement passing in the connection:
    $stmt = mysqli_stmt_init($conn);

    //Checking if the prepared statement fails (STMT MATCHES THE SQL???)
    if(!mysqli_stmt_prepare($stmt, $sql)){
        header("location: ../signup.php?error=statementfailed");
        //Exit() is to stop the script from running
        exit();
    }
    
    //Built in function "ss"(we are submitting 2 strings email and username and statement($stmt))
    mysqli_stmt_bind_param($stmt, "ss", $username, $email);

    //Execute the statement
    mysqli_stmt_execute($stmt);

    //The final prepared data
    $resultData=mysqli_stmt_get_result($stmt);

    //Checking if there is a result from this particular statement, fetching the data as an associative 
    //array which is an array with the columns set to their names 
    //IF we get some data from the database return true, else false
    if($row = mysqli_fetch_assoc($resultData)){
        return $row;
    }else{
        $result = false;
        return $result;
    }

    //Close the statement
    mysqli_stmt_close($stmt);

}

function createUser($conn, $name, $email, $username, $pwd){
    $sql = "INSERT INTO users (usersName, usersEmail, usersUid, usersPwd) VALUES (?, ?, ?, ?);";
    //Initialize a new prepared statement passing in the connection:
    $stmt = mysqli_stmt_init($conn);

    //Checking if the prepared statement fails (STMT MATCHES THE SQL???)
    if(!mysqli_stmt_prepare($stmt, $sql)){
        header("location: ../signup.php?error=statementfailed");
        //Exit() is to stop the script from running
        exit();
    }

    //Hashing the password(disclosing the password and making it secure)
    $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);
    
    //Built in function "ssss"(we are submitting 4 strings, email and username, password(THE HASHED VERSION)
    // and name and statement($stmt))
    mysqli_stmt_bind_param($stmt, "ssss", $name, $email, $username, $hashedPwd);

    //Execute the statement
    mysqli_stmt_execute($stmt);
   
    //Close the statement
    mysqli_stmt_close($stmt);

    //PASS THE USER AFTER A SUCCESSFULL LOGIN
    header("location:  ../signup.php?error=none");
    exit();

}

function emptyInputLogin($username, $pwd) {
    $result;

    if(empty($username) || empty($pwd)){
        $result = true;
    }else{
        $result = false;
    }
    return $result;
}

function loginUser($conn, $username, $pwd){
    $uidExists = uidExists($conn, $username, $username);

    if($uidExists === false){
        //Create an error and send him to the location with the given url
        header("location: ../login.php?error=wronglogin");
        exit();
    }

    $pwdHashed = $uidExists["usersPwd"];
    $checkPwd = password_verify($pwd, $pwdHashed);

    if($checkPwd === false){
        header("location: ../login.php?error=wronglogin");
        exit();
    }else if($checkPwd === true){
        //Start a new sesson
        session_start();
        $_SESSION["userid"] =  $uidExists["usersId"];
        $_SESSION["useruid"] =  $uidExists["usersUid"];
        //Send user to the front page or any given destination:
        header("location: ../index.php?error=loginSuccessful");
        exit();
    }
}


//FUNCTIONS FOR PRODUCTS



function invalidInputProductInsert($productManufacturer, $productMark, $productPrice){

    if(empty($productManufacturer) || empty($productMark) || empty($productPrice)){
        $result = true;
    }else{
        $result = false;
    }
    return $result;

}

function productExists($conn, $productMark){
    $sql = "SELECT * FROM products WHERE productMark = ?;";
    //Initialize a new prepared statement passing in the connection:
    $stmt = mysqli_stmt_init($conn);

    //Checking if the prepared statement fails (STMT MATCHES THE SQL???)
    if(!mysqli_stmt_prepare($stmt, $sql)){
        header("location: ../signup.php?error=statementfailed");
        //Exit() is to stop the script from running
        exit();
    }
    
    //Built in function "ss"(we are submitting 2 strings email and username and statement($stmt))
    mysqli_stmt_bind_param($stmt, "s", $productMark);

    //Execute the statement
    mysqli_stmt_execute($stmt);

    //The final prepared data
    $resultData=mysqli_stmt_get_result($stmt);

    //Checking if there is a result from this particular statement, fetching the data as an associative 
    //array which is an array with the columns set to their names 
    //IF we get some data from the database return true, else false
    if($row = mysqli_fetch_assoc($resultData)){
        return $row;
    }else{
        $result = false;
        return $result;
    }

    //Close the statement
    mysqli_stmt_close($stmt);

}


function createProduct($productManufacturer, $productMark, $productPrice, $selectedProduct){
                

                //$productManufacturer = $_POST['productManufacturer'];
                //$productMark = $_POST['productMark'];
                //$productPrice = $_POST['productPrice'];
                //$selectedProduct = $_POST['selectName'];

                include_once "../classes/productscontr.class.php";
                $newProduct = new ProductsContr();
                $newProduct->createProduct($productManufacturer, $productMark, $productPrice, $selectedProduct);

            //PASS THE USER AFTER A SUCCESSFULL LOGIN

            if($selectedProduct == 'sunglasses'){
            header("location: ../insertSunglasses.php?error=insertProductSuccessful");
            exit();
        }
            if($selectedProduct == 'eyeglasses'){
            header("location: ../insertEyeglasses.php?error=insertProductSuccessful");
            exit();
        }
      //      if($selectedProduct == 'sunglasses'){
      //      header("location: ../insertSunglasses.php?error=insertProductSuccessful");
      //      exit();
      //  }
}

function invalidSunglassesInput($lensTechnology, $lensColor, $frameColor, $polarized, $gender, $frameMaterial, $size){
    $result;

    if(empty($lensTechnology) || empty($lensColor) || empty($frameColor) || empty($frameMaterial) || empty($polarized) || empty($gender) || empty($size)){
        $result = true;
    }else{
        $result = false;
    }
    return $result;
}

function createNewSunglasses($lensTechnology, $lensColor, $frameColor, $polarized, $gender, $frameMaterial, $size, $image){
        
        $lensTechnology = $_POST['lensTechnology'];
        $lensColor = $_POST['lensColor'];
        $frameColor = $_POST['frameColor'];
        $frameMaterial = $_POST['frameMaterial'];
        $polarized = $_POST['polarized'];
        $gender = $_POST['gender'];
        $size = $_POST['size'];
        $image = file_get_contents($_FILES['image']['tmp_name']);

    
        include_once "../classes/productscontr.class.php";
        $newSunglasses = new SunglassesContr();
        $newSunglasses->createSunglasses($lensTechnology, $lensColor, $frameColor, $frameMaterial, $polarized, $gender, $size, $image);

        header("location: ../insertSunglasses.php?error=insertProductSuccessful");
        exit();
}

function deleteProduct($productId){
    $productId=$_GET['delete'];

    include_once "classes/productscontr.class.php";
    $deleteProduct = new ProductDeleteContr();
    $deleteProduct->removeProduct($productId);

    header("location: modifySunglasses.php?=recordDeletedSuccessfully");
    //$_SESSION['message']="Record has been deleted!";
    //$_SESSION['msg_type']="danger";
    
    exit();
}

function updateSunglasses($productId ,$lensTechnology, $lensColor, $frameColor, $frameMaterial, $polarized, $gender, $size, $productManufacturer, $productMark, $productPrice, $productType){

    $productId = $_POST['productId'];
    $productManufacturer = $_POST['productManufacturer'];
    $productMark = $_POST['productMark'];
    $productPrice = $_POST['productPrice'];
    $productType = $_POST['productType'];
    $lensTechnology = $_POST['lensTechnology'];
    $lensColor = $_POST['lensColor'];
    $frameColor = $_POST['frameColor'];
    $frameMaterial = $_POST['frameMaterial'];
    $polarized = $_POST['polarized'];
    $gender = $_POST['gender'];
    $size = $_POST['size'];

    

    include_once "../classes/productscontr.class.php";
    $modSunglassesobj = new ModifySugglassesContr();
    $modSunglassesobj->modSunglasses($productId ,$lensTechnology, $lensColor, $frameColor, $frameMaterial, $polarized, $gender, $size, $productManufacturer, $productMark, $productPrice, $productType);

    header("location: ../modifySunglasses.php?error=modifySunglassesSuccessful");
    exit();


}


function invalidEyeglassesinput($frameColor, $frameMater, $photoGrey, $gender, $size){
    $result;

    if(empty($frameColor) || empty($frameMater) || empty($photoGrey) || empty($gender) || empty($size)){
        $result = true;
    }else{
        $result = false;
    }
    return $result;
}


function createNewEyeglasses($frameColor, $frameMater, $photoGrey, $gender, $size, $image){



    
        include_once "../classes/productscontr.class.php";
        $newEyeglasses = new EyeglassesContr();
        $newEyeglasses->createEyeglasses($frameColor, $frameMater, $photoGrey, $gender, $size, $image);

        header("location: ../insertEyeglasses.php?error=InsertEyeglassesSuccessfull");
        exit();

}


function deleteEyeglasses($productId){

    $productId=$_GET['delete'];

    include_once "classes/productscontr.class.php";
    $deleteEyeglasses = new EyeglassesRemoveContr();
    $deleteEyeglasses->removeEyeglasses($productId);

    header("location: modifyEyeglasses.php?=recordDeletedSuccessfully");
    //$_SESSION['message']="Record has been deleted!";
    //$_SESSION['msg_type']="danger";
    
    exit();

}

function updateEyeglasses($productId ,$frameColor, $frameMater, $photoGrey, $gender,  $size, $productManufacturer, $productMark, $productPrice, $productType){


    $frameColor = $_POST['frameColor'];
    $frameMater = $_POST['frameMater'];
    $photoGrey = $_POST['photoGrey'];
    $gender = $_POST['gender'];
    $size = $_POST['size'];
    $productManufacturer = $_POST['productManufacturer'];
    $productMark = $_POST['productMark'];
    $productPrice = $_POST['productPrice'];
    $productType = $_POST['productType'];
    $productId = $_POST['productId'];

    include_once "../classes/productscontr.class.php";
    $modEyeglassesobj = new ModifyEyeglassesContr();
    $modEyeglassesobj->modEyeglasses($productId ,$frameColor, $frameMater, $photoGrey, $gender,  $size, $productManufacturer, $productMark, $productPrice, $productType);

    header("location: ../modifyEyeglasses.php?error=modifyEyeglassesSuccessfull");
    exit();

}
