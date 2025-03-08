<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Creating Web Applications Lab 10">
    <meta name="keywords" content="PHP, MySql">
    <title>Retrieving records to HTML</title>
</head>

<body>
    <h1>Creating Web Applications - Lab9</h1>

    <?php
    require_once "db_setting.php";

    echo "<table border='1'>";
    echo "<tr><th>car_id</th><th>make</th><th>model</th><th>price</th><th>year</th></tr>";


    $conn = mysqli_connect($host, $username, $password, $database);
    if ($conn) {
        $query = "SELECT * FROM cars";
        $result = mysqli_query($conn, $query);
        if ($result) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>" . $row['car_id'] . "</td>";
                echo "<td>" . $row['make'] . "</td>";
                echo "<td>" . $row['model'] . "</td>";
                echo "<td>" . $row['price'] . "</td>";
                echo "<td>" . $row['yom'] . "</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='5'>There are no cars to display.</td></tr>";
        }
        echo "</table>";
        mysqli_close($conn);

    } else
        echo "<p>unable to connect</p>"
            ?>