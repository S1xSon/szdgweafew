<!DOCTYPE html>
<html>
  <head>
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="style.css">
  </head>
  <body>
    <div class="login-page">
      <div class="form">
        <h2>Admin Login</h2>
        <form class="login-form">
          <input type="text" placeholder="Username"/>
          <input type="password" placeholder="Password"/>
          <button>Log in</button>
          <p class="message"><a href="password.php">Lost your password?</a></p>
          <p class="message"><a href="#">Update Security</a></p>
        </form>
      </div>
    </div>
  </body>
</html>

<?php

$valid_passwords = array ("mario" => "carbonell");
$valid_users = array_keys($valid_passwords);

$user = $_SERVER['PHP_AUTH_USER'];
$pass = $_SERVER['PHP_AUTH_PW'];

$validated = (in_array($user, $valid_users)) && ($pass == $valid_passwords[$user]);

if (!$validated) {
    header('WWW-Authenticate: Basic realm="My Realm"');
    header('HTTP/1.0 401 Unauthorized');
    die ("Not authorized");
}

echo "<p>Welcome $user.</p>";
echo "<p>Congratulation, you are into the system.</p>";

?>