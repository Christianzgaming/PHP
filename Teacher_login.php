<?php
// Check if form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get the form data
    $Teacher_id = $_POST['Teacher_id'];
    $Password = $_POST['Password'];

    // For demo purposes, hard-code the valid Teacher ID and Password
    // In a real scenario, you should validate against a database
    $valid_teacher_id = 'T12345'; // Example Teacher ID
    $valid_password = 'teacherpass'; // Example password

    // Check if the login credentials are correct
    if ($Teacher_id == $valid_teacher_id && $Password == $valid_password) {
        // Redirect to the teacher portal or dashboard page
        header("Location: https://itfa.edu.ph/teacherportal/index.php");
        exit(); // Make sure to stop further script execution
    } else {
        // Handle incorrect login
        $error_message = "Invalid Employee ID or Password. Please try again.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Teacher Login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: gray;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
        }
        footer {
            margin-top: auto;
            padding: 1px;
            background-color: #f2f2f2;
            text-align: center;
            width: 100%;
        }
        .container {
            max-width: 500px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-top: 100px;
        }
        .container h2, h1 {
            text-align: center;
            margin-bottom: 20px;
        }
        .form-group {
            margin-bottom: 30px;
        }
        .form-group label {
            display: block;
            margin-bottom: 5px;
        }
        .input {
            width: 90%;
            padding: 8px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }
        .form-group .btn {
            display: block;
            width: 40%;
            padding: 10px;
            background-color: #055584;
            color: #fff;
            border: none;
            border-radius: 3px;
            cursor: pointer;
            text-align: center;
            transition: background-color 0.3s ease;
        }
        .form-group .btn:hover {
            background-color: #023a4d;
        }
        /* Input focus styles */
        .input:focus {
            outline: none;
            border-color: #055584;
            box-shadow: 0 0 5px rgba(0, 85, 132, 0.3);
        }
        .menu-item {
            position: absolute;
            top: 14px;
            left: 15px;
            color: #ccc;
        }
        .error-message {
            color: red;
            text-align: center;
            margin-bottom: 20px;
        }
    </style>
</head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<body>

<script>
    function redirectToPMS() {
        window.location.href = 'https://itfa.edu.ph/studentportal/index.php';
    }
</script>

<div class="menu">
    <div class="menu-item">
        <a onclick="redirectToPMS()">
            <i class="fas fa-home-alt"></i>
        </a>
    </div>
</div>

<div class="container">
    <h1>TEACHER LOGIN</h1>
    <h2>Login</h2>

    <!-- Show error message if credentials are incorrect -->
    <?php if (isset($error_message)): ?>
        <div class="error-message"><?php echo $error_message; ?></div>
    <?php endif; ?>

    <form action="" method="post">
        <div class="form-group">
            <i class="fas fa-user"></i>
            <label for="Teacher_id">Employee ID:</label>
            <input type="text" id="Teacher_id" name="Teacher_id" required class="input">
        </div>
        <div class="form-group">
            <i class="fas fa-lock"></i>
            <label for="Password">Password:</label>
            <input type="password" id="Password" name="Password" required class="input">
        </div>
        <div class="form-group">
            <input type="submit" class="btn" value="Login">
        </div>
    </form>
</div>

<footer>
    <p>&copy; 2024 IBN TAIMIYAH FOUNDATION ACADEMY, Inc. All rights reserved.</p>
</footer>

</body>
</html>
