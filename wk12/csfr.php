  GNU nano 6.2                                           csfr.php                                                    
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username == "host" && $password == "pass") {
        $message = "Login Successful!";
    } else {
        $message = "Login Failed!";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>CSRF Attack Demo</title>
</head>
<body>
    <h2>Login</h2>
    <form method="POST">
        <input type="text" name="username" placeholder="Username" required>
        <input type="password" name="password" placeholder="Password" required>
        <button type="submit">Login</button>
    </form>
    <?php if(isset($message)) { echo "<p>$message</p>"; } ?>
</body>
</html>