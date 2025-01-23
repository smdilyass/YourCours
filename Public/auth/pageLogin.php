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
    <form action="/Youdemy/public/loginToForm.php" method="post" class="continer ">
        <h1 class="loginTitle">Login</h1>

        <section class="userName">
            <!--email-->
            <input type="email" name="email" placeholder="email" required />
            <i class="fa-solid fa-envelope"></i>
        </section>

        <section class="userName">
            <!--First name-->
            <input type="text" name="FirstName" placeholder="First Name" required />
            <i class="fa-regular fa-user"></i>
        </section>

        <section class="userName">
            <!--Last name-->
            <input type="text" name="LastName" placeholder="Last Name" required />
            <i class="fa-solid fa-user"></i>
        </section>

        <!-- <section class="password">
            !--password--
            <input type="password" name="userPassword" placeholder="password" required />
            <i class="fa-solid fa-lock"></i>
        </section> -->

        <section class="remmeberForget">
                <input type="radio" id="Etudiant" name="role" value="Etudiant"/>
                <label for="Etudiant">Etudiant</label> <br>

                <input type="radio" id="Enseignant" name="role" value="Enseignant"/>
                <label for="Enseignant">Enseignant</label>

                <input type="radio" id="Administrateur" name="role" value="Administrateur"/>
                <label for="Administrateur">Administrateur</label>
        </section>

        
        <button class="login-button" type="submit">submit</button>

        <h5>Don't have an acont ? <a href="pageRegister.php" class="Register">Register</a></h5>

        <?php
        if(isset($_GET['name'])){
            $check=$_GET['name'];
            if($check=='false'){
                echo '<div class="alert alert-danger" role="alert">
                        Email Or Name is false 
                        </div>';
            }
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