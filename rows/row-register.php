<div class="container">
  <div class="container-fluid">
    <h2 class="title-header">Register</h2>
    <form action="php_scripts/register_user.php" method="post">

      <!-- Name input -->
      <div data-mdb-input-init class="form-outline mb-4">
        <input type="text" id="form-name" class="form-control" name="name" placeholder="Name"/>
      </div>

      <!-- Email input -->
      <div data-mdb-input-init class="form-outline mb-4">
        <input type="email" id="form-email" class="form-control" name="email" placeholder="Email"/>
      </div>

      <!-- Password input -->
      <div data-mdb-input-init class="form-outline mb-4">
        <input type="password" id="form-password" class="form-control" name="password" placeholder="Password"/>
      </div>

      <!-- Confirm Password input -->
      <div data-mdb-input-init class="form-outline mb-4">
        <input type="password" id="form-password-confirm" class="form-control" name="password_confirm" placeholder="Confirm password"/>
      </div>

      <!-- Submit button -->
      <button type="submit" data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-block mb-4">Sign in</button>
    </form>
    <div id="register-error-text">
      <?php
      if (isset($_SESSION['register_error'])) {
        echo '<div class="alert alert-danger">' . htmlspecialchars($_SESSION['register_error']) . '</div>';
        unset($_SESSION['register_error']);
      }
      ?>
    </div>

      <!-- Register buttons -->
      <div class="text-center">
        <p>Already have an account? <a href="login.php">Login</a></p>
      </div>
  </div>
</div>
