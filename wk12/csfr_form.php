  GNU nano 6.2                                        csfr_form.php                                                  
<?php
session_start();
// Generate and store random token
$token = bin2hex(random_bytes(16));
$_SESSION['confirmation'] = $token;
?>

<!DOCTYPE html>
<html>
<head>
    <title>CSRF Protected Form</title>
</head>
<body>
    <h2>Secure Login Form</h2>
    <form action="csfr_action.php" method="POST">
        <label>Username: </label><input type="text" name="username"><br><br>
        <label>Password: </label><input type="password" name="password"><br><br>
        <!-- Hidden CSRF Token Field -->
        <input type="hidden" name="confirmation" value="<?php echo $token; ?>">
        <input type="submit" value="Login">
    </form>
</body>
</html>