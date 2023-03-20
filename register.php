<?php
require_once 'db.php';

if (isset($_POST['register'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $query = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password')";
    if ($conn->query($query) === TRUE) {
        header("Location: login.php");
    } else {
        $error = "Error: " . $query . "<br>" . $conn->error;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Register-WaterMan</title>
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Rubik:400,700'>
    <link rel="stylesheet" href="css/mobile.css">
</head>
<body>
    <div class="register-form">
        <form method="POST" action="">
            <h1>Register</h1>
            <div class="content">
                <?php if (isset($error)) echo "<p style='color: red;'>$error</p>"; ?>
                <div class="input-field">
                    <input type="text" name="username" placeholder="Name" autocomplete="nope" required>
                </div>
                <div class="input-field">
                    <input type="email" name="email" placeholder="Email" autocomplete="nope" required>
                </div>
                <div class="input-field">
                    <input type="password" name="password" placeholder="Password" autocomplete="new-password" required>
                </div>
                <a href="login.php" class="link">Already Have an Account?</a>
            </div>
            <div class="action">
                <button type="submit" name="register" id="submit-div">Submit</button>
            </div>
        </form>
    </div>
    <script src="js/script.js"></script>
</body>
</html>
