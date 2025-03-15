<?php
session_start();
require_once 'setting.php';

$conn = mysqli_connect($host, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$error = "";

// Initialize login attempts and lockout time if not set
if (!isset($_SESSION['login_attempts'])) {
    $_SESSION['login_attempts'] = 0;
}
if (!isset($_SESSION['lockout_time'])) {
    $_SESSION['lockout_time'] = 0;
}

// Check if user is currently locked out
if (time() < $_SESSION['lockout_time']) {
    $remaining = $_SESSION['lockout_time'] - time();
    $error = "Too many failed attempts. Please wait {$remaining} seconds before trying again.";
} else {
    // Reset login attempts if lockout expired
    if ($_SESSION['lockout_time'] > 0 && time() >= $_SESSION['lockout_time']) {
        $_SESSION['login_attempts'] = 0;
        $_SESSION['lockout_time'] = 0;
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = $_POST['username'];
        $password = $_POST['password'];

        // Query to check credentials (modify based on your database)
        $sql = "SELECT * FROM users WHERE username='$username' AND password='$password'"; 
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            $_SESSION['logged_in'] = true;
            $_SESSION['username'] = $username;

            // Reset login attempts and lockout on success
            $_SESSION['login_attempts'] = 0;
            $_SESSION['lockout_time'] = 0;

            // Redirect to manage.php after login
            header("Location: manage.php");
            exit();
        } else {
            // Increment failed attempts
            $_SESSION['login_attempts']++;

            if ($_SESSION['login_attempts'] >= 3) {
                $_SESSION['lockout_time'] = time() + 15; // Lock for 15 seconds
                $error = "Too many failed attempts. Please wait 15 seconds before trying again.";
            } else {
                $remaining_attempts = 3 - $_SESSION['login_attempts'];
                $error = "Invalid username or password. You have $remaining_attempts attempt(s) left.";
            }
        }
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="./styles.css/styles.css">
    <link rel="stylesheet" href="./styles.css/style5.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playwrite+AU+SA:wght@100..400&display=swap" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
<?php
  include_once("header.inc");
?>
<div class="middle">
<div class="login-container">
    <h2>Login</h2>
    <form method="POST">
        <label>Username:</label>
        <input type="text" name="username" required>
        <label>Password:</label>
        <input type="password" name="password" required>
        <button type="submit" <?php if (time() < $_SESSION['lockout_time']) echo "disabled"; ?>>Login</button>
    </form>
    <?php if ($error) echo "<p style='color:red;'>$error</p>"; ?>
</div>
</div>
    <script src="./script/script.js"></script>
</body>
</html>
