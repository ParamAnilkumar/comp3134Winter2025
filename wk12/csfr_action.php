<?php
session_start();

// Get session token
$session_token = $_SESSION['confirmation'] ?? '';

// Get posted token and credentials
$form_token = $_POST['confirmation'] ?? '';
$username = $_POST['username'] ?? '';
$password = $_POST['password'] ?? '';

if ($session_token && $form_token && $session_token === $form_token) {
    if ($username === 'host' && $password === 'pass') {
        echo "<div style='color: green;'>Login Successful (Token Verified)</div>";
    } else {
        echo "<div style='color: red;'>Invalid Credentials (Token Verified)</div>";
    }
} else {
    echo "<div style='color: red;'>CSRF Token Mismatch. Potential Attack Blocked.</div>";
}
?>