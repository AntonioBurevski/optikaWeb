<?php
include "functions.class.php";
class SunglassesContr  extends Functions{
    public function createSunglasses($lensTechnology, $lensColor, $frameColor, $frameMaterial, $polarized, $gender, $size, $image){
        $this->setSunglassesStmt($lensTechnology, $lensColor, $frameColor, $frameMaterial, $polarized, $gender, $size, $image);
    }
}
class ProductsContr  extends Functions{
    public function createProduct($productManufacturer, $productMark, $productPrice, $selectedProduct){
        $this->setProductsStmt($productManufacturer, $productMark, $productPrice, $selectedProduct);
    }
}
class ProductDeleteContr extends Functions{
    public function removeProduct($productId){
        $this->deleteProduct($productId);
    }
}

class ModifySugglassesContr extends Functions{
    public function modSunglasses($productId ,$lensTechnology, $lensColor, $frameColor, $frameMaterial, $polarized, $gender, $size, $productManufacturer, $productMark, $productPrice, $productType){

        $this->modifySunglasses($productId ,$lensTechnology, $lensColor, $frameColor, $frameMaterial, $polarized, $gender, $size, $productManufacturer, $productMark, $productPrice, $productType);

    }
}

class EyeglassesContr  extends Functions{
    public function createEyeglasses($frameColor, $frameMater, $photoGrey, $gender, $size, $image){
        $this->setEyeglassesStmt($frameColor, $frameMater, $photoGrey, $gender, $size, $image);
    }
}

class EyeglassesRemoveContr extends Functions{
    public function removeEyeglasses($productId){
        $this->deleteEyeglasses($productId);
    }
}

class ModifyEyeglassesContr extends Functions{
    public function modEyeglasses($productId ,$frameColor, $frameMater, $photoGrey, $gender,  $size, $productManufacturer, $productMark, $productPrice, $productType){
        $this->modifyEyeglasses($productId ,$frameColor, $frameMater, $photoGrey, $gender,  $size, $productManufacturer, $productMark, $productPrice, $productType);

    }
}