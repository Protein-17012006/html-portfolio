<?php
require_once 'setting.php';
$conn = mysqli_connect($host, $username, $password, $database);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!empty($_POST['job_reference_number'])) {
        $job_reference_number = $conn->real_escape_string($_POST['job_reference_number']);

        // Delete all EOIs for the given job reference
        $sql = "DELETE FROM EOI WHERE job_reference_number = '$job_reference_number'";

        if ($conn->query($sql) === TRUE) {
            echo "All EOIs for job reference '$job_reference_number' have been deleted.";
        } else {
            echo "Error deleting EOIs: " . $conn->error;
        }
    }
}
$conn->close();
header("Location: delete_all.html");
exit();
?>
