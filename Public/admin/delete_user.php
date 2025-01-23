<?php

if (isset($_POST['delete'])) {
    $userId = $_POST['user_id'];

    // Database connection
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "yourCours";
    $conn = new mysqli('localhost', 'username', 'password', 'yourCours');

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // SQL to check if user exists
    $checkSql = "SELECT id FROM users WHERE id = ?";
    $checkStmt = $conn->prepare($checkSql);
    $checkStmt->bind_param("i", $userId);
    $checkStmt->execute();
    $checkStmt->store_result();

    if ($checkStmt->num_rows > 0) {
        // User exists, proceed to delete
        $deleteSql = "DELETE FROM users WHERE id = ?";
        $deleteStmt = $conn->prepare($deleteSql);
        $deleteStmt->bind_param("i", $userId);

        if ($deleteStmt->execute()) {
            echo "User deleted successfully.";
        } else {
            echo "Error deleting user: " . $conn->error;
        }

        $deleteStmt->close();
    } else {
        echo "User not found.";
    }

    $checkStmt->close();
    $conn->close();
}
?>

<form method="post" action="">
    <input type="hidden" name="user_id" value="<?php echo $userId; ?>">
    <button type="submit" name="delete">Delete User</button>
</form>