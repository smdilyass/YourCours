<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles.css">
    <title>YourCours - Online Learning Platform</title>
</head>
<body style="background-image: url(https://www.walnutpublication.com/blog/wp-content/uploads/2024/03/creative-composition-world-book-day-1024x683.jpg) ;">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">YourCours</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="home.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#signup" id="signupLink">Register</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#login" id="loginLink">Login</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container mt-5">
        <h1 class="text-center">Welcome to YourCours</h1>
        <p class="text-center">Revolutionizing education with personalized learning.</p>

        <div id="signup" class="mt-5">
            <h2>Register</h2>
            <form id="registerForm" action="register.php" method="POST">
    <div class="form-group">
        <label for="nom">Nom</label>
        <input type="text" class="form-control" id="nom" name="nom" required>
    </div>
    <div class="form-group">
        <label for="prenom">Prénom</label>
        <input type="text" class="form-control" id="prenom" name="prenom" required>
    </div>
    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" class="form-control" id="email" name="email" required>
    </div>
    <div class="form-group">
        <label for="signupPassword">Password</label>
        <input type="password" class="form-control" id="signupPassword" name="signupPassword" required>
    </div>
    <div class="form-group">
        <label for="role">Role</label>
        <select class="form-control" id="role" name="role" required>
            <option value="" disabled selected>Select your role</option>
            <option value="etudiant">Etudiant</option>
            <option value="enseignant">Enseignant</option>
        </select>
    </div>
    <button type="submit" class="btn btn-primary">Register</button>
</form>
        </div>

        <div id="login" class="mt-5" style="display: none;">
        <h2>Login</h2>
        <form id="loginForm" action="login.php" method="POST">
            <div class="form-group">
                <label for="loginEmail">Email</label>
                <input type="email" class="form-control" id="loginEmail" name="loginEmail" required>
            </div>
            <div class="form-group">
                <label for="loginPassword">Password</label>
                <input type="password" class="form-control" id="loginPassword" name="loginPassword" required>
            </div>
            <button type="submit" class="btn btn-primary">Login</button>
        </form>
    </div>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        // Toggle between Signup and Login forms
        document.getElementById('signupLink').addEventListener('click', function() {
            document.getElementById('signup').style.display = 'block';
            document.getElementById('login').style.display = 'none';
        });

        document.getElementById('loginLink').addEventListener('click', function() {
            document.getElementById('signup').style.display = 'none';
            document.getElementById('login').style.display = 'block';
        });

        // Signup Form  
        document.getElementById('signupForm').addEventListener('submit', function(e) {
            e.preventDefault();
            const nom = document.getElementById('nom').value;
            const prenom = document.getElementById('prenom').value;
            const email = document.getElementById('email').value;
            const password = document.getElementById('signupPassword').value;
            const role = document.getElementById('role').value;

            fetch('http://localhost/yourcours/signup.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                },
                body: JSON.stringify({ nom, prenom, email, password, role }),
            })
            .then(response => response.json())
            .then(data => {
                alert(data.message);
            })
            .catch(error => {
                console.error('Error:', error);
            });
        });

        // Login Form Submission
        document.getElementById('loginForm').addEventListener('submit', function(e) {
            e.preventDefault();
            const username = document.getElementById('loginUsername').value;
            const password = document.getElementById('loginPassword').value;

            fetch('http://localhost/yourcours/login.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                },
                body: JSON.stringify({ username, password }),
            })
            .then(response => response.json())
            .then(data => {
                alert(data.message);
            })
            .catch(error => {
                 console.error('Error:', error);
            });
        });
    </script>
</body>
</html>
