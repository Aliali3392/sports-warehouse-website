<div class="show-item clearfix">
	<?php foreach ($rows as $row): 
		$photoPath = "images/products/" . $row["item_photo"];     
		$productName = $row["item_name"];   
		$salePrice = sprintf("%1.2f", $row["item_saleprice"]); 
        $unitPrice = sprintf("%1.2f", $row["item_price"]);
        $productDescription =   $row["item_description"];
        $productId = $row["item_id"];
		?> 
	<h1><?= $productName ?></h1>
    <div class="item-pic">
	   <img src="<?= $photoPath ?>" alt="<?= $productName ?>">
    </div>
	<div class="item-info">
		<?php 
		if ($unitPrice != $salePrice) {
		 	echo "<h2>Original Price:</h2>";
		 	echo "<p class='price line-through'>&#36;$unitPrice</p>";
		 } 
		?>			
		<h2>Sale Price:</h2>
		<p class="price">&#36;<?= $salePrice ?></p>
		<h2>Product description:</h2>
		<p><?= $productDescription ?></p>
	</div>
	<div class='add-to-cart-form'>
        <label for="number">Quantity:</label>
        <input type='number' class='form-control m-b-10px cart-quantity' id="number" value='1' min='1' />
        <div class="add-btn">
            <a href="cart.php" class="">
                <i class="fas fa-shopping-cart white"></i>
                Add to Cart
            </a>
        </div>
    </div>
	<?php endforeach;?> 
</div>
