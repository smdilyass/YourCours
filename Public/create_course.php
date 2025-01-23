<?php
session_start();
if (!isset($_SESSION['role']) || $_SESSION['role'] != 'enseignant') {
    header("Location: index.php");
    exit();
}

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
$message = '';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $course_name = $_POST['course_name'];
    $course_description = $_POST['course_description'];

    // Insert course into the database
    $sql = "INSERT INTO courses (course_name, course_description) VALUES ('$course_name', '$course_description')";

    if ($conn->query($sql) === TRUE) {
        $message = '<div style="padding: 20px; margin: 20px 0; border: 2px solid green; background-color: #d4edda; color: green; text-align: center; font-size: 1.5em;">
                        Course created successfully
                    </div>';
    } else {
        $message = '<div style="padding: 20px; margin: 20px 0; border: 2px solid red; background-color: #f8d7da; color: red; text-align: center; font-size: 1.5em;">
                        Error: ' . $sql . '<br>' . $conn->error . '
                    </div>';
    }

    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Course</title>
</head>
<body style = "background-image: url('https://foodtank.com/wp-content/uploads/2021/07/alfons-morales-YLSwjSy7stw-unsplash-1024x614.jpg');">
    <?php include 'navbar.php'; ?>
    <h1>Create a New Course</h1>
    <?php echo $message; ?>
    <form action="create_course.php" method="POST">
        <div class="form-group">
            <label for="course_name">Course Name</label>
            <input type="text" class="form-control" id="course_name" name="course_name" required>
        </div>
        <div class="form-group">
            <label for="course_description">Course Description</label>
            <textarea class="form-control" id="course_description" name="course_description" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Create Course</button>
    </form>
</body>
</html>