<?php
include: 'includes/config.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <title>Login system</title>
</head>
<body>
    <form action="includes/login.inc.php" method="post">
        <input type="text" name="email" placeholder="Uername/Email">
        <input type="text" name="pwd" placeholder="Password">
        <input type="submit" name="submit" value="Log in">
    </form>
    <p>Register here <a href="signup.php">Sign Up</a></p>

</body>
</html>
