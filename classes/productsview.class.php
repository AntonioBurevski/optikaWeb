
<?php




class ProductsView extends Functions{
    public function showProducts(){
        $results = $this->getProducts();

        foreach($results as $product){
                echo  "Product Id: " . "<strong>" . $product['productId'] . "</strong>" . " Manufacturer: " . "<strong>" . $product['productManufacturer'] . "</strong>" .
                " Product Mark: " . "<strong>" . $product['productMark'] . "</strong>" . " Product Price: " . "<strong>" . $product['productPrice'] . "</strong>" .
                " Product Type: " . "<strong>" . $product['productType'] . "</strong>" . "&nbsp;&nbsp;"; 
?>                
                <a  href='modifySunglasses.php?edit=<?php echo $product['productId'];?>'>EDIT</a> 
                <a  href='modifySunglasses.php?delete=<?php echo $product['productId'];?>'>DELETE</a> 
<?php                
                echo "<br><br>";
            }

    }


    public function showEyeglasses(){
        $results = $this->getEyeglasses();
        
        foreach($results as $product){
                echo  "Product Id: " . "<strong>" . $product['productId'] . "</strong>" . " Manufacturer: " . "<strong>" . $product['productManufacturer'] . "</strong>" .
                " Product Mark: " . "<strong>" . $product['productMark'] . "</strong>" . " Product Price: " . "<strong>" . $product['productPrice'] . "</strong>" .
                " Product Type: " . "<strong>" . $product['productType'] . "</strong>" . "&nbsp;&nbsp;"; 
?>              
            
                <a  href='modifyEyeglasses.php?edit=<?php echo $product['productId'];?>'>EDIT</a> 
                <a  href='modifyEyeglasses.php?delete=<?php echo $product['productId'];?>'>DELETE</a> 
               
<?php                
                echo "<br><br>";
            }

    }


    
    public function showSunglassesToUser(){
        $results = $this->getProducts();

        foreach($results as $product){
            echo '<div class="container">' . '<div class="col-sm-12">' . '<div class="hotdeal">'  .  '<div class="col-sm-8">' . '<img src="data:image/jpeg;base64, ' . base64_encode( $product['sunglassesPicture'] ) . ' "/>' . '</div>' . "<br>". "<br>". "<br>" . " Manufacturer: " . "<strong>" . $product['productManufacturer'] . "</strong>" .
            "<br>" . " Mark: " . "<strong>" . $product['productMark'] . "</strong>" . "<br>" . " Price: " . "<strong>" . $product['productPrice'] . "</strong>" .
            "<br>" . " Type: " . "<strong>" . $product['productType'] . "</strong>" . "<br>" . '</div>' . '</div>' . '</div>'; 
?>                
                <br>
                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                
                <a  href='sunglasses.php?expand=<?php echo $product['productId'];?>'>VIEW</a>
                <button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">CLICK</button>
<?php                
                echo "<br><br>";
            }

    }

  
public function showProductsToUser(){
    $resultsSunglasses = $this->getProducts();
    $resultsEyeglasses = $this->getEyeglasses();

    foreach($resultsSunglasses as $product){
            echo '<div class="container">' . '<div class="col-sm-12">' . '<div class="hotdeal">'  .  '<div class="col-sm-8">' . '<img src="data:image/jpeg;base64, ' . base64_encode( $product['sunglassesPicture'] ) . ' "/>' . '</div>' . "<br>". "<br>". "<br>" . " Manufacturer: " . "<strong>" . $product['productManufacturer'] . "</strong>" .
            "<br>" . " Mark: " . "<strong>" . $product['productMark'] . "</strong>" . "<br>" . " Price: " . "<strong>" . $product['productPrice'] . "</strong>" .
            "<br>" . " Type: " . "<strong>" . $product['productType'] . "</strong>" . "<br>" . '</div>' . '</div>' . '</div>'; 
?>                
           <br>
                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
            
           <a  href='products.php?sunglasses=<?php echo $product['productId'];?>'>VIEW</a>
            <button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">CLICK</button>
<?php                
           
        }

        foreach($resultsEyeglasses as $product){
            echo '<div class="container">' . '<div class="col-sm-12">' . '<div class="hotdeal">'  .  '<div class="col-sm-8">' . '<img src="data:image/jpeg;base64,' . base64_encode( $product['eyeglassesPicture'] ).'"/>' . '</div>' . "<br>" . "<br>" . "<br>" . " Manufacturer: " . "<strong>" . $product['productManufacturer'] . "</strong>" .
            "<br>" . " Mark: " . "<strong>" . $product['productMark'] . "</strong>" . "<br>" . " Price: " . "<strong>" . $product['productPrice'] . "</strong>" .
            "<br>" . " Type: " . "<strong>" . $product['productType'] . "</strong>" . '</div>' . '</div>' . '</div>'; 
?>                
            <br>
                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
            <a  href='products.php?eyeglasses=<?php echo $product['productId'];?>'>VIEW</a>
            <button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">CLICK</button>
<?php     
        echo "<br><br>";           
            
        }

}

public function showEyeglassesToUser(){
    $resultsEyeglasses = $this->getEyeglasses();

    foreach($resultsEyeglasses as $product){
        echo '<div class="container">' . '<div class="col-sm-12">' . '<div class="hotdeal">'  .  '<div class="col-sm-8">' . '<img src="data:image/jpeg;base64,' . base64_encode( $product['eyeglassesPicture'] ).'"/>' . '</div>' . "<br>" . "<br>" . "<br>" . " Manufacturer: " . "<strong>" . $product['productManufacturer'] . "</strong>" .
            "<br>" . " Mark: " . "<strong>" . $product['productMark'] . "</strong>" . "<br>" . " Price: " . "<strong>" . $product['productPrice'] . "</strong>" .
            "<br>" . " Type: " . "<strong>" . $product['productType'] . "</strong>" . '</div>' . '</div>' . '</div>'; 
?>                
        <br>
        &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
        
        <a  href='eyeglasses.php?eyeglasses=<?php echo $product['productId'];?>'>VIEW</a>
        <button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">CLICK</button>
<?php                
        echo "<br><br>";
    }
}
}


?>
<script src="script.js"></script>

