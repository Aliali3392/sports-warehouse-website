<div class="col-lg-6">
  <h1>Modify category</h1>
  <form action="modifyCategory.php" method="post">
    <fieldset>
      <legend>Insert category</legend>
    <div class="form-group">
      <label for="CategoryName">Category Name:</label>
      <input class="form-control" type="text" name="CategoryName" id="CategoryName" required>
    </div>
    <input class="insert btn btn-default" type="submit" name="submit" value="Insert">
    </fieldset>
  </form>
  <br/>
  <fieldset>
    <legend>Delete category</legend>
    <table>
      <tr>
        <th>Category Name</th>
        <th>Edit</th>
      </tr>
      <?php foreach ($categoryRows as $row):
        $categoryName = $row["category_name"];
        $categoryId = $row["category_id"];
      ?>
      <tr>
        <td><?= $categoryName ?></td>
        <td><a class="delete btn btn-default" href="modifyCategory.php?id=<?= $categoryId ?>">Delete</a></td>
      </tr>
      <?php endforeach; ?>
    </table>
  </fieldset>
  <p><?= $message ?></p>
</div>
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/deleteConfirm.js"></script>
