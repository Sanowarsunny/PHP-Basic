<!DOCTYPE html>
<html>
<head>
  <title>Login Page</title>
  <link rel="stylesheet" href="../css/login.css">
</head>
<body>
  <div class="login-container">
    
    <h1>Login</h1>
    <?php if (isset($error)): ?>
        <p style="color: red;"><?php echo $error; ?></p>
    <?php endif; ?>
    <form action="../controller/login_c.php" method="post">
        <input type="email" name="email" placeholder="Email" required>
        <input type="password" name="password" placeholder="Password" required> 
        <button type="submit" name="login">Login</button>
    </form>
  </div>
</body>
</html>
