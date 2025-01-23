<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navigation Bar</title>
    <style>
        .navbar {
            background-color: #333;
            overflow: hidden;
            position: fixed;
            top: 0;
            width: 100%;
            z-index: 1000;
        }
        .navbar a {
            float: left;
            display: block;
            color: #f2f2f2;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }
        .navbar a:hover {
            background-color: #ddd;
            color: black;
        }
        body {
            margin-top: 50px; /* Adjust this value based on the height of your navbar */
        }
    </style>
</head>
<body>
    <div class="navbar">
        <a href="home.php">Home</a>
        <a href="welcome.php">Dashboard</a>
        <?php if (isset($_SESSION['role']) && $_SESSION['role'] == 'enseignant'): ?>
            <a href="create_course.php">Create Course</a>
        <?php endif; ?>
        <a href="index.php">Logout</a>
    </div>
</body>
</html>