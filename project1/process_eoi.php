<?php


require_once 'setting.php';

$conn = mysqli_connect($host, $username, $password, $database);

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate if required fields are set
    // Sanitize input
    $jobnumber = $conn->real_escape_string($_POST['jobnumber']);
    $firstname = $conn->real_escape_string($_POST['firstname']);
    $lastname = $conn->real_escape_string($_POST['lastname']);
    $date_of_birth = $_POST['date'];
    $gender = $_POST['sex'];
    $street_address = $conn->real_escape_string($_POST['address']);
    $suburb = $conn->real_escape_string($_POST['town']);
    $state = $_POST['state'];
    $postcode = $_POST['postcode'];
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $phone = $_POST['phone'];
    $other_skills = isset($_POST['otherskills']) ? $conn->real_escape_string($_POST['otherskills']) : "";

    //$skills = [];

    // Check if each skill checkbox is selected
    //if (isset($_POST["management"]))
    //    $skills[] = "management";
    //if (isset($_POST["technology"]))
    //    $skills[] = "technology";
    //if (isset($_POST["collaboration"]))
    //    $skills[] = "collaboration";
    //if (isset($_POST["time-management"]))
    //    $skills[] = "time-management";
    //if (isset($_POST["project-management"]))
    //    $skills[] = "project-management";
    //if (isset($_POST["critical-thinking"]))
    //    $skills[] = "critical-thinking";
    //if (isset($_POST["adaptation"]))
    //    $skills[] = "adaptation";
    //if (isset($_POST["creativity"]))
    //    $skills[] = "creativity";
    //if (isset($_POST["problem-solving"]))
    //    $skills[] = "problem-solving";
    //if (isset($_POST["communication"]))
    //    $skills[] = "communication";

    // Format as "A, B, C and D"
    //if (count($skills) > 1) {
    //    $last_skill = array_pop($skills);
    //    $skills_string = implode(", ", $skills) . " and " . $last_skill;
    //} else {
    //    $skills_string = implode("", $skills);
    //}

    // Escape for database
    //$skills_string = mysqli_real_escape_string($conn, $skills_string);


    // Insert into database
    $sql = "INSERT INTO EOI (job_reference_number, first_name, last_name, date_of_birth, gender, 
                street_address, suburb, state, postcode, email_address, phone_number, other_skills) 
                VALUES ('$jobnumber', '$firstname', '$lastname', '$date_of_birth', '$gender', '$street_address', 
                '$suburb', '$state', '$postcode', '$email', '$phone', '$other_skills')";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Application submitted successfully!'); window.location.href='manage.php';</script>";
    } else {
        echo "Error: " . $conn->error;
    }


}

$conn->close();
?>