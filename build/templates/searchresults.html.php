<div class="show-products clearfix">
  <h2>Results for <?= $_GET["search"] ?></h2>
  <div class="search-products">
    <?php 
      if (empty($rows)) {
        echo "<p class='no-results'>We couldn't find a match for ".'<b>&quot;'.$_GET["search"].'&quot;</b>.'."</p><br><p class='no-results'>Please try less specific search terms or check the spelling.</p>";
      }
    ?>
    <?php foreach ($rows as $row): 
      $photoPath = "images/products/" . $row["item_photo"];     
      $productName = $row["item_name"];   
      $salePrice = sprintf("%1.2f", $row["item_saleprice"]); 
      $productId = $row["item_id"]; 
      $unitPrice = sprintf("%1.2f", $row["item_price"]);   
    ?> 
    <div class="item">
      <a href="viewitem.php?id=<?= $productId ?>" class="product-link clearfix">
        <figure class="items">
          <div class="item-image">
            <img src="<?= $photoPath ?>" alt="<?= $productName ?>">
          </div>
          <figcaption>
            <div class="finalprice">
              <span class="price">&#36;<?= $salePrice ?></span>
              <?php 
                if ($unitPrice != $salePrice) {
                  echo "<b class='orignial'>&#36;$unitPrice</b>";
                } 
              ?>  
            </div>
            <p>
              <?= $productName ?>
            </p>
          </figcaption>
        </figure>
      </a>
      <div class="addtocart">
        <a href="cart.php" class="">
          Add to Cart
        </a>
      </div>
    </div>
    <?php endforeach;?> 
  </div> 
</div>