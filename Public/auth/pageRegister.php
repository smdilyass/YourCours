<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/stylelogin.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
    <link rel="stylesheet" href="css/stylelogin.css" />
    <!-- font awsem  -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" />


    <title>Login</title>
</head>

<body>
    <form action="../registerToForm.php" method="post" class="container ">
        <h1 class="loginTitle">Register</h1>

        <section class="userName">
            <!--email-->
            <input type="email" name="email" placeholder="email" required />
            <i class="fa-solid fa-envelope"></i>
        </section>

        <section class="userName">
            <!--First name-->
            <input type="text" name="FirstName" placeholder="First Name" required />
            <i class="fa-regular fa-user"></i>

            <!--Last name-->
            <input type="text" name="LastName" placeholder="Last Name" required />
        </section>

        <section class="remmeberForget">
            <div>
                <input type="radio" id="Etudiant" name="role" value="Etudiant"/>
                <label for="Etudiant">Etudiant</label>
            </div>
            <div>
                <input type="radio" id="Enseignant" name="role" value="Enseignant"/>
                <label for="Enseignant">Enseignant</label>
            </div>
        </section>

        <button name = "submit" class="login-button" type="submit">submit</button>

        <?php 
            if(isset($_GET['email']))
            {
                if($_GET['email'] == 'existe'){
                echo '<div class="alert alert-danger" role="alert">
                        Email existe
                        </div>';}
            }
        ?>
        

    </form>

    

    <!-- script  -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <script src="js/script.js"></script>
</body>
</html>