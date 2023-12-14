<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve the form data
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Save the user data to the database or perform other necessary actions
    // You can add database connection and insert code here

    // Redirect to the login page after successful signup
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Sign Up</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="container">
        <div id="signup-form">
            <h2>Sign Up</h2>

            <form method="POST" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
                <input type="text" name="username" placeholder="Username" required>
                <input type="password" name="password" placeholder="Password" required>
                <input type="submit" value="Sign Up">
            </form>
        </div>
    </div>
</body>
</html>