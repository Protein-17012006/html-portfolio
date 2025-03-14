<?php
$host = "localhost";
$username = "root"; 
$password = "";
$database = "hoang_db"; 

$conn = mysqli_connect($host, $username, $password, $database);


if ($conn) {
    echo "<p>connect successfully</p>";
    mysqli_close($conn);
}
else{
    echo "<p>connection failed</p>";
}
?>