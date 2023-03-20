<?php
session_start();
require_once 'database\database.php';

if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = "SELECT * FROM users WHERE email='$email'";
    $result = $conn->query($query);
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        if (password_verify($password, $row['password'])) {
            $_SESSION['username'] = $row['username'];
            header("Location: index.php");
        } else {
            $error = "Invalid password";
        }
    } else {
        $error = "Invalid email";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login-WaterMan</title>
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Rubik:400,700'>
    <link rel="stylesheet" href="css/mobile.css">
</head>
<body>
    <div class="login-form">
        <form method="POST" action="">
            <h1>Login</h1>
            <div class="content">
                <?php if (isset($error)) echo "<p style='color: red;'>$error</p>"; ?>
                <div class="input-field">
                    <input type="email" name="email" placeholder="Email" autocomplete="nope" required>
                </div>
                <div class="input-field">
                    <input type="password" name="password" placeholder="Password" autocomplete="new-password" required>
                </div>
                <a href="#" class="link">Forgot Your Password?</a>
            </div>
            <div class="action">
                <div id="register-div"><a href="register.php">Register</a></div>
                <div type="submit" name="login" id="signIn-div">Sign in</div>
            </div>
        </form>
    </div>
    <script src="js/script.js"></script>
</body>
</html>
