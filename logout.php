<?php
session_start();
session_unset();  // Remove all session variables
session_destroy();  // Destroy the session
header("Location: items.php");  // Redirect to the homepage after logging out
exit();
?>
