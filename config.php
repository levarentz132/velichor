<?php
// Define the base path of your project
define('BASE_PATH', __DIR__);
define('AUTH_USERNAME', 'admin'); // Set your username
define('AUTH_PASSWORD', '123'); // Set your password
// Start session for user authentication
session_start();

/**
 * Check if the user is logged in.
 *
 * @return bool
 */
function isLoggedIn() {
    return isset($_SESSION['user_id']);
}

/**
 * Restrict access to the page if the user is not logged in.
 */
function requireLogin() {
    if (!isLoggedIn()) {
        header('Location: /admin/login.php'); // Redirect to login page
        exit;
    }
}
?>
