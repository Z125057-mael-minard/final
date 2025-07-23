<div class="container">
  <div class="container-fluid">
    <h2 class="title-header">Change password</h2>
    <form action="php_scripts/change_password.php" method="post">
        <div id="account_info_container" class="account_info_container">
            <!-- Password input -->
            <div data-mdb-input-init class="form-outline mb-4">
                <input type="password" id="form-password-old" class="form-control" name="password-old" placeholder="Old Password"/>
            </div>

            <!-- Password input -->
            <div data-mdb-input-init class="form-outline mb-4">
                <input type="password" id="form-password-new" class="form-control" name="password-new" placeholder="New Password"/>
            </div>
        </div>
        <div class="account_buttons_container row">
            <!-- Submit button -->
            <button id="account_change_yes" type="submit" data-mdb-button-init data-mdb-ripple-init class="col-auto button_with_background">Change</button>
            <div class="col d-flex justify-content-end">
                <a href="account.php" class="account_cancel_changes">
                    Cancel
                </a>
            </div>
        </div>
    </form>
    <div id="change-error-text">
      <?php
      if (isset($_SESSION['change_error'])) {
        echo '<div class="alert alert-danger">' . htmlspecialchars($_SESSION['change_error']) . '</div>';
        unset($_SESSION['change_error']);
      }
      ?>
    </div>
  </div>
</div>
