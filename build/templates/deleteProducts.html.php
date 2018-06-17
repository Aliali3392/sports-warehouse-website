<div class="col-lg-6">
  <h1>Delete product</h1>
  <p><?= $message ?></p>
  <?php foreach ($productRows as $row):
    //set up the generic image file
    $photoPath = "images/products/image-unavailable.png";
    //check if the image file exists
    if (file_exists("images/products/".$row["item_photo"]) && strlen($row["item_photo"]) > 0) {
      $photoPath = "images/products/" .$row["item_photo"];
      $photoToDelete = $row["item_photo"];
    } else {
      $photoToDelete = "none";
    }
    $productId = $row["item_id"];
    $productName = $row["item_name"];
    $description = $row["item_description"];
  ?>

  <div class="well" id="emp<?= $productId ?>">
    <img class="thumbnail img-responsive" src="<?= $photoPath ?>" alt="Photo of employee">
    <h3><?= $productName ?></h3>
    <p><?= $description ?></p>
    <p><a class="delete btn btn-default" href="deleteProduct.php?id=<?= $productId ?>&photo=<?= $photoToDelete
    ?>">Delete Product</a></p>
  </div>
  <?php endforeach; ?>
</div>
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/deleteConfirm.js"></script>
