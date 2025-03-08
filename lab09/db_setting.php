<?php
$host = "feenix-mariadb.swin.edu.au";
$username = "s105710430"; 
$password = "061206";
$database = "s105710430_db"; 

$conn = mysqli_connect($host, $username, $password, $database);


if ($conn) {
    echo "<p>connect successfully</p>";
    mysqli_close($conn);
}
else{
    echo "<p>connection failed</p>";
}
?>