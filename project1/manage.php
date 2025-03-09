<?php
session_start(); // Start session

// Check if user is logged in
if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
    // Redirect to login page if not logged in
    header("Location: login.php");
    exit();
}

require_once 'setting.php';
$conn = mysqli_connect($host, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle search
$searchQuery = "";
if (!empty($_GET['search'])) {
    $search = $conn->real_escape_string($_GET['search']);
    $searchQuery = "WHERE job_reference_number LIKE '%$search%' OR first_name LIKE '%$search%' OR last_name LIKE '%$search%'";
}

// Handle search by first name, last name, or both
if (isset($_GET['name_search_submit'])) {
    $firstName = isset($_GET['first_name']) ? $conn->real_escape_string($_GET['first_name']) : "";
    $lastName = isset($_GET['last_name']) ? $conn->real_escape_string($_GET['last_name']) : "";

    if (!empty($firstName) && !empty($lastName)) {
        $searchQuery = "WHERE first_name LIKE '%$firstName%' AND last_name LIKE '%$lastName%'";
    } elseif (!empty($firstName)) {
        $searchQuery = "WHERE first_name LIKE '%$firstName%'";
    } elseif (!empty($lastName)) {
        $searchQuery = "WHERE last_name LIKE '%$lastName%'";
    }
}

// Retrieve EOIs
$sql = "SELECT * FROM EOI $searchQuery";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Applications</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h1>Submitted Applications</h1>

    <!-- Search Form -->
    <form method="GET">
        <input type="text" name="search" placeholder="Search by Job Reference or Name">
        <button type="submit">Search</button>
    </form>

    <form method="GET">
        <input type="text" name="first_name" placeholder="Search by First Name">
        <input type="text" name="last_name" placeholder="Search by Last Name">
        <button type="submit" name="name_search_submit">Search by Name</button>
    </form>

    <!-- Delete all EOIs for a given job reference -->
    <form method="POST" action="delete_all_eois.php">
        <input type="text" name="job_reference" placeholder="Enter Job Reference to Delete All">
        <button type="submit" onclick="return confirm('Are you sure you want to delete all EOIs for this job reference?');">Delete All</button>
    </form>


    <table>
        <tr>
            <th>Job Reference</th>
            <th>Name</th>
            <th>Date of Birth</th>
            <th>Gender</th>
            <th>Address</th>
            <th>Suburb</th>
            <th>State</th>
            <th>Postcode</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Skills</th>
            <th>Other Skills</th>
            <th>Status</th>
            <th>Actions</th>
        </tr>
        <?php
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td>{$row['job_reference_number']}</td>
                        <td>{$row['first_name']} {$row['last_name']}</td>
                        <td>{$row['date_of_birth']}</td>
                        <td>{$row['gender']}</td>
                        <td>{$row['street_address']}</td>
                        <td>{$row['suburb']}</td>
                        <td>{$row['state']}</td>
                        <td>{$row['postcode']}</td>
                        <td>{$row['email_address']}</td>
                        <td>{$row['phone_number']}</td>
                        <td>{$row['skills']}</td>
                        <td>{$row['other_skills']}</td>
                        <td>
                            <form action='update_status.php' method='post'>
                                <input type='hidden' name='id' value='{$row['id']}'>
                                <select name='status'>
                                    <option value='New' " . ($row['status'] == 'New' ? 'selected' : '') . ">New</option>
                                    <option value='Under Review' " . ($row['status'] == 'Under Review' ? 'selected' : '') . ">Under Review</option>
                                    <option value='Finalized' " . ($row['status'] == 'Finalized' ? 'selected' : '') . ">Finalized</option>
                                    <option value='Rejected' " . ($row['status'] == 'Rejected' ? 'selected' : '') . ">Rejected</option>
                                </select>
                                <button type='submit'>Update</button>
                            </form>
                        </td>
                        <td>
                            <form action='delete_eoi.php' method='post' onsubmit=\"return confirm('Are you sure you want to delete this EOI?');\">
                                <input type='hidden' name='id' value='{$row['id']}'>
                                <button type='submit'>Delete</button>
                            </form>
                        </td>
                    </tr>";
            }
        } else {
            echo "<tr><td colspan='14'>No applications found.</td></tr>";
        }
        ?>
    </table>
</body>
</html>

<?php
$conn->close();
?>
