
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/styles.css">
    <title>Login system</title>
</head>
<body>
    <section class="signup-form">
        <h2>Sign Up</h2>
        <form action="includes/signup.inc.php" method="POST">
            <input type="text" name="name" placeholder="Full name">
            <input type="text" name="email" placeholder="Email">
            <input type="text" name="uid" placeholder="Username">
            <input type="password" name="pwd" placeholder="Password">
            <input type="password" name="reapeatPwd" placeholder="Confirm password">
            <button type="submit" name="submit">Sign Up</button>
        </form>
        <p>Have an account? <a href="login.php">Log In</a></p>
    </section>
</body>
</html>