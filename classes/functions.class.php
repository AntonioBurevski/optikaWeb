<?php
class Functions extends Dbh{
    
        //This is the model

protected function setSunglassesStmt($lensTechnology, $lensColor, $frameColor, $frameMaterial, $polarized, $gender, $size, $image){
           
            $sql = "INSERT INTO sunglasses(lensTechnology, lensColor, 
            frameColor, frameMaterial, polarized, gender, size, sunglassesPicture) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
            $stmt = $this->connect()->prepare($sql);
            $stmt->execute([$lensTechnology, $lensColor, $frameColor, 
            $frameMaterial, $polarized, $gender, $size, $image]);
            
            $sql2 = "UPDATE sunglasses SET sunglassesId = (SELECT MAX(productId) FROM products) WHERE sunglassesId = 0 ";

            $stmt2 = $this->connect()->prepare($sql2);
            $stmt2->execute([]);



            //VALUE(sunglassesId = 0)????
}

protected function setProductsStmt($productManufacturer, $productMark, $productPrice, $selectedProduct){
           
        $sql = "INSERT INTO products(productManufacturer, productMark, 
        productPrice, productType) VALUES (?, ?, ?, ?)";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$productManufacturer, $productMark, $productPrice, $selectedProduct]);

}

protected function getProducts(){

        $sql = "SELECT * FROM products AS P INNER JOIN sunglasses AS S
        ON P.productId=S.sunglassesId
        WHERE productType='sunglasses'";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute();

        //Take all the information from the database and insert it in an array
        $results = $stmt->fetchAll();
        return $results;
}


protected function deleteProduct($productId){
        $sql = "DELETE FROM products WHERE productId=$productId";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$productId]);

        $sql2 = "DELETE FROM sunglasses WHERE sunglassesId=$productId";
        $stmt2 = $this->connect()->prepare($sql2);
        $stmt2->execute([$productId]);


}

protected function modifySunglasses($productId ,$lensTechnology, $lensColor, $frameColor, $frameMaterial, $polarized, $gender, $size, $productManufacturer, $productMark, $productPrice, $productType){


        $sql = "UPDATE sunglasses SET lensTechnology='$lensTechnology', 
        lensColor='$lensColor', frameColor='$frameColor', frameMaterial='$frameMaterial', polarized='$polarized',
        gender='$gender', size=$size WHERE sunglassesId=$productId";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$lensTechnology, $lensColor, $frameColor, $frameMaterial, $polarized, $gender, $size]);


        $sql2 = "UPDATE products SET productManufacturer='$productManufacturer', productMark='$productMark',
        productPrice=$productPrice, productType='$productType' WHERE productId=$productId";
        $stmt2 = $this->connect()->prepare($sql2);
        $stmt2->execute([$productManufacturer, $productMark, $productPrice, $productType]);
}

protected function setEyeglassesStmt($frameColor, $frameMater, $photoGrey, $gender, $size, $image){

        $sql = "INSERT INTO eyeglasses(frameColor, frameMater, 
        photoGrey, gender, size, eyeglassesPicture) VALUES (?, ?, ?, ?, ?, ?)";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$frameColor, $frameMater, $photoGrey, $gender, $size, $image]);

        $sql2 = "UPDATE eyeglasses SET eyeglassesId = (SELECT MAX(productId) FROM products) WHERE eyeglassesId = 0 ";

        $stmt2 = $this->connect()->prepare($sql2);
        $stmt2->execute([]);


}

protected function deleteEyeglasses($productId){
        
        $sql = "DELETE FROM products WHERE productId=$productId";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$productId]);

        $sql2 = "DELETE FROM eyeglasses WHERE eyeglassesId=$productId";
        $stmt2 = $this->connect()->prepare($sql2);
        $stmt2->execute([$productId]);
}

protected function modifyEyeglasses($productId ,$frameColor, $frameMater, $photoGrey, $gender,  $size, $productManufacturer, $productMark, $productPrice, $productType){

        $sql = "UPDATE eyeglasses SET frameColor='$frameColor', 
        frameMater='$frameMater', photoGrey='$photoGrey', photoGrey='$photoGrey', gender='$gender',
        size=$size WHERE eyeglassesId=$productId";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$lensTechnology, $lensColor, $frameColor, $frameMaterial, $polarized, $gender, $size]);


        $sql2 = "UPDATE products SET productManufacturer='$productManufacturer', productMark='$productMark',
        productPrice=$productPrice, productType='$productType' WHERE productId=$productId";
        $stmt2 = $this->connect()->prepare($sql2);
        $stmt2->execute([$productManufacturer, $productMark, $productPrice, $productType]);

}


protected function getEyeglasses(){

        $sql = "SELECT * FROM products AS P INNER JOIN eyeglasses AS E
        ON P.productId=E.eyeglassesId
        WHERE productType='eyeglasses'";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute();

        //Take all the information from the database and insert it in an array
        $results = $stmt->fetchAll();
        return $results;
}
}


