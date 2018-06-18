<div class="col-lg-6">
  <h1>Settings</h1>
  <fieldset>
    <legend>Change Password</legend>
    <form action="settings.php" method="post" id="change-password">
      <div class="form-group">
        <label for="old_password">Current Password:</label>
        <input class="form-control" type="password" name="oldpassword" id="old-password" required>
      </div>
      <div class="form-group">
        <label for="new_password">New Password:</label>
        <input class="form-control" type="password" name="newpassword" id="new-password" required>
      </div>
      <div class="form-group">
        <label for="confirm_password">Confirm New Password:</label>
        <input class="form-control" type="password" name="confirmpassword" id="confirm-password" required>
      </div>
      <input class="btn btn-default" type="submit" id="Submit" value="Change my password">
    </form>
  </fieldset>
  <p><?= $message ?></p>
  <br>
  <fieldset>
    <legend>Change Theme</legend>
  </fieldset>
</div>
