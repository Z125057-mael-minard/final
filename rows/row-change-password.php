<div class="container">
  <div class="container-fluid">
    <h2 class="title-header">Change password</h2>
    <form action="php_scripts/change_password.php" method="post">
      <!-- Password input -->
      <div data-mdb-input-init class="form-outline mb-4">
        <input type="password" id="form-password-old" class="form-control" name="password-old" placeholder="Old Password"/>
      </div>

      <!-- Password input -->
      <div data-mdb-input-init class="form-outline mb-4">
          <input type="password" id="form-password-new" class="form-control" name="password-new" placeholder="New Password"/>
      </div>

      <!-- Submit button -->
      <button type="submit" data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-block mb-4">Change</button>
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
