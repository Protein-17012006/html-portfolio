<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Confirmation</title>
</head>

<body>
    <h1>Rohirrim Tour Booking Confirmation</h1>

    <?php
    function sanitise_input($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    ?>

    <?php
    $firstname = sanitise_input($_POST["firstname"]);
    $lastname = sanitise_input($_POST["lastname"]);
    $species = isset($_POST["species"]) ? sanitise_input($_POST["species"]) : "Unknown species";
    $age = sanitise_input($_POST["age"]);
    $food = sanitise_input($_POST["food"]);
    $partySize = sanitise_input($_POST["partySize"]);

    if (isset($_POST["firstname"])) {
        $firstname = $_POST["firstname"];
    } else {
        header("location: register.html");
    }

    if (isset($_POST["lastname"]))
        $lastname = $_POST["lastname"];

    if (isset($_POST["age"]))
        $age = $_POST["age"];

    if (isset($_POST["food"]))
        $food = $_POST["food"];

    if (isset($_POST["partySize"]))
        $partySize = $_POST["partySize"];

    if (isset($_POST["species"])) {
        $species = $_POST["species"];
    } else {
        $species = "Unknown species";
    }

    $tours = [];
    if (isset($_POST["1day"]))
        $tours[] = "One-day tour";
    if (isset($_POST["4day"]))
        $tours[] = "Four-day tour";
    if (isset($_POST["10day"]))
        $tours[] = "Ten-day tour";

    $tour = implode(", ", array_slice($tours, 0, -1));
    if (count($tours) > 1) {
        $tour .= " and " . end($tours);
    } else {
        $tour = implode("", $tours);
    }

    $errMsg3 = "";
    if ($partySize == "") {
        $errMsg3 .= "<p> You must enter the number of travellers. </p>";
    } else if (!is_numeric($partySize)) {
        $errMsg3 .= "<p> The number of travellers must be a number. </p>";
    } else if ($partySize < 1 || $partySize > 100) {
        $errMsg3 .= "<p> The number of travellers must be between 1 and 100. </p>";
    }
    $errMsg = "";
    if ($firstname == "") {
        $errMsg .= "<p> You must enter your first name. </p>";
    } else if (!preg_match("/^[a-zA-Z]+$/", $firstname)) {
        $errMsg .= "<p> Only alpha letters allowed in your first name. </p>";
    }
    $errMsg1 = "";
    if ($lastname == "") {
        $errMsg1 .= "<p> You must enter your last name. </p>";
    } else if (!preg_match("/^[a-zA-Z]+$/", $lastname)) {
        $errMsg1 .= "<p> Only alpha letters or a hyphen allowed in your last name. </p>";
    }

    $errMsg2 = "";
    if ($age == "") {
        $errMsg2 .= "<p> You must enter your age. </p>";
    } else if (!is_numeric($age)) {
        $errMsg2 .= "<p> Your age must be a number. </p>";
    } else if ($age < 18 || $age > 10000) {
        $errMsg2 .= "<p> Your age must be between 18 and 10,000. </p>";
    }



    if ($errMsg != "") {
        echo "<p>$errMsg<p>";
    } else if ($errMsg1 != "") {
        echo "<p>$errMsg1<p>";
    } else if ($errMsg2 != "") {
        echo "<p>$errMsg2<p>";
    } else if ($errMsg3 != "") {
        echo "<p>$errMsg3<p>";
    } else {
        echo "<p>Welcome $firstname $lastname ! <br/>
    You are now booked on the $tour <br/> 
    Species: $species <br/>
    Age: $age <br/>
    Meal Preference: $food <br/>
    Number of travellers: $partySize</p>";
    }
    ?>
</body>

</html>