<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Bootstrap-Style-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <!--Fontawesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"/>
    <!--GlobalCSS-->
    <link rel="stylesheet" href="../styles/Global.css">
    <!--Home-Module-CSS-->
    <link rel="stylesheet" href="../styles/Home.module.css">
    <!--FAVICON-->
    <link rel="icon" href="../img/favicon.png">
    <!--Website-Title-->
    <title>DiaryMe | Register</title>
</head>
<body>
    <!--HEADER-->
    <header>
        <nav class="navbar navbar-expand-lg fixed-top bg-light py-4">
            <div class="container mx-auto">
                <div class="nav-brand">
                    <a href="../index.php" class="navbar-brand">Diary<span>Me.</span></a>
                </div>
                <div class="hamburger">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#thisNav" aria-controls="thisNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </div>
                <div class="collapse navbar-collapse" id="thisNav">
                    <ul class="navbar-nav ms-auto mb-5 mb-lg-0 
                    d-flex d-lg-block justify-content-center align-items-center gap-2 gap-lg-0">
                        <a href="login.php"><button class="secondary-btn mt-5 mt-lg-0">Login</button></a>
                        <a href="register.php"><button class="primary-btn">Create an Account</button></a>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <!--Main-Section-->
    <main class="page">
        <section class="register">
            <div class="container">
                <div class="register-wrapper">
                    <div class="register-header">
                        <span class="ms-3">Register</span>
                    </div>
                    <div class="register-inputs d-flex flex-column gap-3">
                        <div class="input">
                            <label for="fullname" class="form-label">Fullname:</label>
                            <input type="text" class="form-control" name="fullname" 
                            id="fullname" placeholder="Enter Fullname">
                        </div>
                        <div class="input">
                            <label for="email" class="form-label">Email:</label>
                            <input type="email" class="form-control" name="email" 
                            id="email" placeholder="Enter E-mail">
                        </div>
                        <div class="input">
                            <label for="password" class="form-label">Password:</label>
                            <input type="password" class="form-control" name="password" 
                            id="password" placeholder="Enter Password">
                        </div>
                        <div class="input">
                            <label for="confirmpassword" class="form-label">Confirm Password:</label>
                            <input type="password" class="form-control" name="confirmpassword" 
                            id="confirmpassword" placeholder="Confirm Password">
                        </div>
                        <button class="primary-btn primary-sub-btn mt-3" id="btn-register">
                            Register
                        </button>
                        <p class="text-center">
                            Already have an account?
                            <a href="login.php">Login</a>
                        </p>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <!--Footer-Section-->
    <footer class="footer bg-white">
        <div class="container mx-auto border-top">
            <div class="footer-wrapper d-flex justify-content-between mt-4">
                <div class="footer-left">
                    <p>© Created by <a href=#>Ariel Batoon</a></p>
                </div>
                <div class="footer-right d-flex gap-2">
                    <a href=#><i class="fa-brands fa-square-facebook"></i></a>
                    <a href=#><i class="fa-brands fa-square-instagram"></i></a>
                    <a href=#><i class="fa-brands fa-square-github"></i></a>
                </div>
            </div>
        </div>
    </footer>
    <!-- SCRIPT -->
    <!--JQUERY-->
    <script src="../js/jquery.js"></script>
    <!--BootstrapJS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
    <!--Register-->
    <script src="../js/register.js"></script>
    <!--CustomJS-->
    <script src="../js/app.js"></script>
</body>
</html>