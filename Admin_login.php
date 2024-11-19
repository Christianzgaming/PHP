<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    // Process form (e.g., check credentials, login, etc.)
    // For example:
    // if ($username == 'admin' && $password == 'password123') {
    //     echo "Login successful";
    // } else {
    //     echo "Invalid username or password";
    // }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ITFA STUDENT PORTAL</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <div class="loginBox">
        <img src="assets/img/itfalogo.png" class="logo">
        <h2>ITFA Student Portal</h2>
        <form action="" method="post">
            <p>Username:</p>
            <input type="text" name="username" placeholder="Enter Username" required>
            <p>Password:</p>
            <input type="password" name="password" placeholder="*****" required>
            <input type="submit" name="submit" value="Sign In">
        </form>
    </div>
</body>
</html>
