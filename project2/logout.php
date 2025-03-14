<?php
session_start();
session_destroy(); // Clear all session data
header("Location: already_logout.html"); // Redirect to login page
exit();

?>