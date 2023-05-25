<?php
session_start();

// Validate login credentials (you should perform proper validation and authentication here)
if ($_POST['contents'] === 'root') {
    $_SESSION['logged_in'] = true;
    header("Location: main.php"); // Redirect to the second page
    exit();
} else {
    echo '<script>window.history.go(-2);</script>';
    exit;
}
?>
