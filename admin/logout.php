<?php
require_once 'config.php';

// Clear session and redirect to the login page
session_unset();
session_destroy();
header('Location: /login.php');
exit;
