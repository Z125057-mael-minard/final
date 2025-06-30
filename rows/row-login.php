<div class="container">
  <div class="container-fluid">
    <h2 class="title-header">Login</h2>
    <form action="php_scripts/login_user.php" method="post">
      <!-- Email input -->
      <div data-mdb-input-init class="form-outline mb-4">
        <input type="email" id="form-email" class="form-control" name="email" placeholder="Email"/>
      </div>

      <!-- Password input -->
      <div data-mdb-input-init class="form-outline mb-4">
          <input type="password" id="form-password" class="form-control" name="password" placeholder="Password"/>
      </div>

      <!-- Submit button -->
      <button type="submit" data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-block mb-4">Sign in</button>
    </form>
    <div id="login-error-text">
      <?php

      if (isset($_SESSION['login_error'])) {
        echo '<div class="alert alert-danger">' . htmlspecialchars($_SESSION['login_error']) . '</div>';
        unset($_SESSION['login_error']);
      }
      ?>
    </div>

      <!-- Register buttons -->
      <div class="text-center">
        <p>Don't have an account? <a href="register.php">Register</a></p>
      </div>
  </div>
</div>
