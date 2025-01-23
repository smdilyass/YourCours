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
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $email = $_POST['email'];
    $password = password_hash($_POST['signupPassword'], PASSWORD_DEFAULT); // Hash the password
    $role = $_POST['role'];

    // Insert data into the database
    $sql = "INSERT INTO users (nom, prenom, email, password, role) VALUES ('$nom', '$prenom', '$email', '$password', '$role')";

    if ($conn->query($sql) === TRUE) {
        echo '<div style="padding: 20px; margin: 20px 0; border: 2px solid green; background-color: #d4edda; color: green; text-align: center; font-size: 1.5em;">
                        New record created successfully
                        <br><br>
                        <a href="index.php" style="display: inline-block; padding: 10px 20px; margin-top: 10px; border: none; background-color: green; color: white; text-decoration: none; font-size: 1em;">Go to Login</a>
                    </div>';
    } else {
        echo '<div style="padding: 10px; margin: 10px 0; border: 1px solid red; background-color: #f8d7da; color: red;">Error: ' . $sql . '<br>' . $conn->error . '</div>';
    }


    $conn->close();
}
?>
