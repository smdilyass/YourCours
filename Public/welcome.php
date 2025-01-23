<?php
session_start();
if (!isset($_SESSION['role'])) {
    header("Location: index.php");
    exit();
}

$role = $_SESSION['role'];

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

// Fetch courses if the user is an etudiant
$courses = [];
if ($role == 'etudiant') {
    $sql = "SELECT * FROM courses";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $courses[] = $row;
        }
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <style>
        body {
            background-image: url('https://foodtank.com/wp-content/uploads/2021/07/alfons-morales-YLSwjSy7stw-unsplash-1024x614.jpg');
            background-size: cover;
            color: aliceblue;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        .container {
            padding: 20px;
            background-color: rgba(0, 0, 0, 0.5);
            border-radius: 10px;
            max-width: 800px;
            margin: 50px auto;
            text-align: center;
        }
        h1, h2 {
            margin: 0 0 20px;
        }
        p {
            margin: 10px 0;
        }
        .button {
            padding: 10px 20px;
            margin-top: 10px;
            border-radius: 20px;
            border: none;
            background-color: blue;
            color: white;
            text-decoration: none;
            font-size: 1em;
            cursor: pointer;
        }
        .course-list {
            list-style-type: none;
            padding: 0;
        }
        .course-item {
            margin-bottom: 20px;
            padding: 10px;
            background-color: rgba(255, 255, 255, 0.8);
            border-radius: 10px;
            color: #333;
        }
        .course-item h3 {
            margin: 0;
        }
        .course-item p {
            margin: 5px 0 0;
            color: #666;
        }
    </style>
</head>
<body>
    <?php include 'navbar.php'; ?>    
    <div class="container">
        <h1>Welcome to yourCours</h1>
        <p>You have successfully logged in</p>

        <?php if ($role == 'enseignant'): ?>
            <button class="button" onclick="location.href='create_course.php'">Create Course</button>
        <?php elseif ($role == 'etudiant'): ?>
            <h2>Available Courses</h2>
            <ul class="course-list">
                <?php foreach ($courses as $course): ?>
                    <li class="course-item">
                        <h3><?php echo htmlspecialchars($course['course_name']); ?></h3>
                        <p><?php echo htmlspecialchars($course['course_description']); ?></p>
                    </li>
                <?php endforeach; ?>
            </ul>
        <?php endif; ?>
    </div>
</body>
</html>
