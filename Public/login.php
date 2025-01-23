<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "yourCours";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['loginEmail'];
    $password = $_POST['loginPassword'];

    // Check if user exists in the database
    $sql = "SELECT * FROM users WHERE email = '$email'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // User exists, verify password
        $row = $result->fetch_assoc();
        if (password_verify($password, $row['password'])) {
            // Password is correct, redirect to a new page with the user's role
            session_start();
            $_SESSION['role'] = $row['role'];
            header("Location: welcome.php");
            exit();
        } else {
            // Password is incorrect
            echo '<div style="padding: 20px; margin: 20px 0; border: 2px solid red; background-color: #f8d7da; color: red; text-align: center; font-size: 1.5em;">
                                Incorrect password
                                <br><br>';
            include 'navbar.php';
            echo '<br><br>
                                <a href="index.php" style="display: inline-block; padding: 10px 20px; margin-top: 10px; border: none; background-color: red; color: white; text-decoration: none; font-size: 1em;">Back to Login</a>
                              </div>';
        }
    } else {
        // User does not exist
        echo '<div style="padding: 20px; margin: 20px 0; border: 2px solid red; background-color: #f8d7da; color: red; text-align: center; font-size: 1.5em;">
                User does not exist
                <br><br>';
                 include 'navbar.php';
                 echo '<br><br>
                <a href="index.php" style="display: inline-block; padding: 10px 20px; margin-top: 10px; border: none; background-color: red; color: white; text-decoration: none; font-size: 1em;">Back to Login</a>
              </div>';
    }

    $conn->close();
}
?>