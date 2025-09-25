<!DOCTYPE html>
<html lang="en">




<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Full stack website with login and Registration</title>
    <link rel="stylesheet" href="css.css">
    <link href='https://cdn.boxicons.com/fonts/basic/boxicons.min.css' rel='stylesheet'>
</head>

<body>

    <header>
        <a href="#" class="logo">LOGO</a>
        <nav>
            <a href="#">Home</a>
            <a href="#">About us</a>
            <a href="#">Collection</a>
            <a href="#">Contact</a>
        </nav>
        <div class="user-auth">
            <button type="button" class="loogin"> Login </button>
        </div>
    </header>




    <section>
        <h1>Hello Guys Welcome</h1>
    </section>

    <div class="auth-modal">

        <button type="button" class="close-btn-modal"> <i class='bx  bxs-x'></i> </button>


        <div class="form-box login">

            <h2>Login</h2>
            <form action="auth_process.php" method="POST">
                <div class="input-box">
                    <input type="email" name="email" placeholder="email" required>
                    <i class='bx  bxs-envelope'></i>
                </div>
                <div class="input-box">
                    <input type="password" name="password" placeholder="password" required>
                    <i class='bx  bxs-lock'></i>
                </div>
                <button type="submit" name="login-btn" class="btn">Login</button>

                <p>Don't have an account? <a href="#" class="register-link">Register</a> </p>
            </form>
        </div>





        <div class="form-box register">

            <h2>Register</h2>
            <form action="auth_process.php" method="POST">
                <div class="input-box">
                    <input type="text" name="name" placeholder="Name" required>
                    <i class='bx  bxs-user'></i>
                </div>

                <div class="input-box">
                    <input type="email" name="email" placeholder="email" required>
                    <i class='bx  bxs-envelope'></i>
                </div>

                <div class="input-box">
                    <input type="password" name="password" placeholder="password" required>
                    <i class='bx  bxs-lock'></i>
                </div>
                <button type="submit" name="register_btn" class="btn">Register</button>

                <p>Already have an account? <a href="#" class="login-link">Login</a> </p>
            </form>
        </div>
    </div>


    <script src="script.js">

    </script>
</body>

</html>