<?php
// logout.php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Saare session variables ko un-set karo
$_SESSION = array();

// Session ko destroy karo
if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(session_name(), '', time() - 42000,
        $params["path"], $params["domain"],
        $params["secure"], $params["httponly"]
    );
}

session_destroy();

// Wapas home page par bhej do
header("Location: views/index.php"); // Ya index.php jahan bhi bhejna ho
exit;
?>