<?php

require_once 'db_setting.php';
$conn = @mysqli_connect($host,$username,$password,$database);

if ($conn) {
    $make = mysqli_real_escape_string($conn, $_POST["carmake"]);
    $model = mysqli_real_escape_string($conn, $_POST["carmodel"]);
    $price = mysqli_real_escape_string($conn, $_POST["price"]);
    $yom = mysqli_real_escape_string($conn, $_POST["yom"]);


   $query = "insert into cars (make,model,price,yom) values ('$make','$model','$price','$yom')";
   $result = mysqli_query($conn,$query);

if(!$result) {
        echo "<p class=\"wrong\">something is wrong with  ", $query,"</p>";
   } else {
        echo "<p class=\"ok\">successfully added a new car </p>";
   }
   mysqli_close($conn);
}
?>