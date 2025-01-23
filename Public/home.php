<?php include 'navbar.php'; ?>
<?php
session_start();
if (!isset($_SESSION['role'])) {
    header("Location: index.php");
    exit();
}

$role = $_SESSION['role'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to yourCours</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            /* margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh; */
            background-image: url('https://foodtank.com/wp-content/uploads/2021/07/alfons-morales-YLSwjSy7stw-unsplash-1024x614.jpg');
            background-size: cover;
            background-position: center;
        }
        .container {
            text-align: center;
            background-color: rgba(0, 0, 0, 0.7);
            padding: 50px;
            border-radius: 10px;
            color: #fff;
        }
        .container h1 {
            font-size: 3em;
            margin-bottom: 20px;
        }
        .container p {
            font-size: 1.2em;
            margin-bottom: 30px;
        }
        .container a {
            display: inline-block;
            padding: 10px 20px;
            margin-top: 10px;
            border-radius: 20px;
            border: none;
            background-color: blue;
            color: white;
            text-decoration: none;
            font-size: 1em;
        }
        .container a:hover {
            background-color: darkblue;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Welcome to yourCours</h1>
        <p>You have successfully logged in</p>
            <a href="index.php">View Courses</a>
       
    </div>
</body>
</html>