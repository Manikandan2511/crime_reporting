<?php
// Start a session
session_start();

// Check if user is already logged in
if (isset($_SESSION['user_id'])) {
    // Redirect to logged-in page
    header("Location: logge     d-in.php");
    exit();
}

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get the input from the form
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Perform authentication (you may replace this with your own logic)
    if ($username == 'admin' && $password == 'password123') {
        // Authentication successful, set session variables
        $_SESSION['user_id'] = 1;
        $_SESSION['username'] = $username;

        // Redirect to logged-in page
        header("Location: logged-in.php");
        exit();
    } else {
        // Authentication failed, display error message
        $error = "Invalid username or password";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
    <h1>Login</h1>
    <?php if (isset($error)): ?>
        <p><?php echo $error; ?></p>
    <?php endif; ?>
    <form method="post" action="login.php">
        <label for="username">Username:</label>
        <input type="text" name="username" id="username">
        <br>
        <label for="password">Password:</label>
        <input type="password" name="password" id="password">
        <br>
        <input type="submit" value="Login"  >
        <a href="index.html">ngijeno</a>
    </form>
</body>
</html>