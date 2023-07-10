<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP test</title>
</head>
<body>
    <section>
        <div class="sign">
            <h4>Sign up</h4>
            <form action="includes/signup.inc.php" method="post">
                <input type="text" name="uid" placeholder="Username">
                <input type="password" name="pwd" placeholder="Password">
                <input type="password" name="pwdrepeat" placeholder="Repeat Password">
                <input type="text" name="email" placeholder="E-Mail">
                <br>
                <button type="submit" name="submit">Sign up</button>
            </form>
        </div>
        <div class="sign">
            <h4>Login</h4>
            <form action="includes/login.inc.php" method="post">
                <input type="text" name="uid" placeholder="Username">
                <input type="password" name="pwd" placeholder="Password">
                <br>
                <button type="submit" name="submit">Login</button>
            </form>
        </div>
    </section>
</body>
</html>