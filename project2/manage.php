<?php
session_start(); // Start session

// Check if user is logged in

if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
    echo "<script>
            alert('Please login your administrated account before accessing this page');
            window.location.href = 'login.php';
          </script>";
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
    <meta charset="UTF-8">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playwrite+AU+SA:wght@100..400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./styles.css/styles.css">
    <link rel="stylesheet" href="./styles.css/style5.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Manage Applications</title>
</head>
<body>

<?php
  include_once("header.inc");
?>

<div class="top-bar-16">
    <form method="GET" class="searching-16">
        <input type="text"  name="search" placeholder="Search by Job Reference or Name">
        <button type="submit">Search</button>
    </form>

    <form method="GET" class="firstname">
        <input type="text" name="first_name" placeholder="Search by First Name">
        <input type="text" name="last_name" placeholder="Search by Last Name">
        <button type="submit" name="name_search_submit">Search by Name</button>
    </form>

    <form method="POST" class="delete" action="delete_all_eois.php">
        <input type="text" name="job_reference_number" placeholder="Enter Job Reference to Delete All">
        <button type="submit" onclick="return confirm('Are you sure you want to delete all EOIs for this job reference?');">Delete All</button>
    </form>
</div>
    

    <table class="manage-table">
        <tr>
            <th>ID</th>
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
            while ($row = $result->fetch_assoc()) { ?>
                    <tr>
                        <td><?=$row['id']?></td>
                        <td><?=$row['job_reference_number']?></td>
                        <td><?=$row['first_name'].''. $row['last_name']?></td>
                        <td><?=$row['date_of_birth']?></td>
                        <td><?=$row['gender']?></td>
                        <td><?=$row['street_address']?></td>
                        <td><?=$row['suburb']?></td>
                        <td><?=$row['state']?></td>
                        <td><?=$row['postcode']?></td>
                        <td><?=$row['email_address']?></td>
                        <td><?=$row['phone_number']?></td>
                        <td><?=$row['skills']?></td>
                        <td><?=$row['other_skills']?></td>
                        <td>
                            <form action='update_status.php' class="form-update" method='post'>
                                <input type='hidden' name='id' value='<?= $row['id'] ?>'>
                                <select name='status'> 
                                    <option value='New' <?= $row['status'] == 'New' ? 'selected' : '' ?>>New</option>
                                    <option value='Current' <?= $row['status'] == 'Current' ? 'selected' : '' ?> >Current</option>
                                    <option value='Final' <?= $row['status'] == 'Final' ? 'selected' : '' ?> >Final</option>
                                </select>
                                <button type='submit'>Update</button>
                            </form>
                        </td>
                        <td>
                            <form action='delete_eoi.php' method='post' class="form-delete" onsubmit="return confirm('Are you sure you want to delete this EOI?');">
                                <input type='hidden' name='id' value='<?= $row['id']?>' >
                                <button type='submit'>Delete</button>
                            </form>
                        </td>
                    </tr>
                    <?php
            }
        } else {
            echo "<tr><td colspan='14'>No applications found.</td></tr>";
        }
        ?>
    </table>

    <div class="exit-sign" onclick="navigateTo('logout.php')">
        <i class='bx bx-log-out link-icon'></i>
    </div>
    <script src="./script/script.js"></script>

</body>
</html>

<?php
$conn->close();
?>
