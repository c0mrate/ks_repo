<?php
session_start();

// Validate login credentials (you should perform proper validation and authentication here)
if ($_POST['contents'] === 'login') {
    $_SESSION['logged_in'] = true;
    header("Location: password.php"); // Redirect to the second page
    exit();
} else {
    echo '<script>window.history.go(-1);</script>';
    exit;
}
?>
