
<div class="container">
    <div class="container-fluid">
    <?php
    $user = null;
    if ($_SESSION["logged_in"]){
      $stmt = $db->prepare("SELECT * FROM sessions WHERE session_token = ?");
      $stmt->execute(array($_SESSION["session_token"]));
      $current_session = $stmt->fetch();
      $stmt = $db->prepare("SELECT * FROM users WHERE user_id = ?");
      $stmt->execute(array($current_session['user_id']));
      $user = $stmt->fetch();
      echo '<div class="user-account-info">User name: ' . htmlspecialchars($user['user_name']) . '</div>';
      echo '<div class="user-account-info">User email: ' . htmlspecialchars($user['user_email']) . '</div>';
    }
    else{
      echo '<div class="alert alert-danger">Not logged in</div>';
    }
    ?>
    </div>
</div>
