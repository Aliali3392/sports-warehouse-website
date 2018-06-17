<div class="wrapper clearfix">
  <div class="login-wrapper">
    <div class="new-account-box">
      <form action="changePassword.php" method="post" id="change-password">
        <div class="login-row">
          <label for="old_password">Current password</label>
          <input type="password" name="old_password" id="old-password" required>
        </div>
        <div class="login-row">
          <label for="new_password">New password</label>
          <input type="password" name="new_password" id="new-password" required>
        </div>
        <div class="login-row">
          <label for="confirm_password">Re-enter new password</label>
          <input type="password" name="confirm_password" id="confirm-password" required>
        </div>
        <input type="submit" id="Submit" value="Change my password">
      </form>
      <p><?= $message ?></p>
      </div>
  </div>
</div>
