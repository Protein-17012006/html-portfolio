<?php
require_once 'setting.php';
$conn = mysqli_connect($host, $username, $password, $database);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $status = $_POST['status'];

    $sql = "UPDATE EOI SET status = ? WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("si", $status, $id);

    if ($stmt->execute()) {
        echo "<script>alert('Status updated successfully!'); window.location.href='manage.php';</script>";
    } else {
        echo "Error updating record: " . $conn->error;
    }

    $stmt->close();
}
$conn->close();
?>
