<?php
session_start();
require_once 'setting.php';

$conn = mysqli_connect($host, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Query to check credentials (modify based on your database)
    $sql = "SELECT * FROM users WHERE username='$username' AND password='$password'"; 
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $_SESSION['logged_in'] = true;
        $_SESSION['username'] = $username;

        // Redirect to manage.php after login
        header("Location: manage.php");
        exit();
    } else {
        $error = "Invalid username or password.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
</head>
<body>
    <h2>Login</h2>
    <form method="POST">
        <label>Username:</label>
        <input type="text" name="username" required>
        <br>
        <label>Password:</label>
        <input type="password" name="password" required>
        <br>
        <button type="submit">Login</button>
    </form>
    <?php if ($error) echo "<p style='color:red;'>$error</p>"; ?>
</body>
</html>
