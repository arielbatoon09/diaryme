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
    <link rel="stylesheet" href="styles/Global.css">
    <!--Home-Module-CSS-->
    <link rel="stylesheet" href="styles/Home.module.css">
    <!--FAVICON-->
    <link rel="icon" href="img/favicon.png">
    <!--Website-Title-->
    <title>DiaryMe | Personal Diary</title>
</head>
<body>
    <!--HEADER-->
    <header>
        <nav class="navbar navbar-expand-lg bg-light fixed-top py-4">
            <div class="container mx-auto">
                <div class="nav-brand">
                    <a href="index.php" class="navbar-brand">Diary<span>Me.</span></a>
                </div>
                <div class="hamburger">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#thisNav" aria-controls="thisNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </div>
                <div class="collapse navbar-collapse" id="thisNav">
                    <ul class="navbar-nav ms-auto mb-5 mb-lg-0 
                    d-flex d-lg-block justify-content-center align-items-center gap-2 gap-lg-0">
                        <a href="pages/login.php"><button class="secondary-btn mt-5 mt-lg-0">Login</button></a>
                        <a href="pages/register.php"><button class="primary-btn">Create an Account</button></a>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <!--Main-Section-->
    <main class="page">
        <section class="body">
            <div class="container mx-auto">
                <div class="body-wrapper d-flex flex-column align-items-center">
                    <div class="body-description text-center d-flex flex-column align-items-center">
                        <h2>Write What You Feel</h2>
                        <h3>A Digital Diary</h3>
                        <p class="col-12 col-lg-5">Create your own personal diary and write everything what you feel.
                            DiaryMe is supported with encryption for your own privacy when writing 
                            your own diary content.
                        </p>
                    </div>
                    <div class="body-cta d-flex flex-column align-items-center">
                        <a href="pages/register.php"><button class="primary-btn">
                            Create an Account</button></a>
                        <a href="pages/login.php"><button class="secondary-btn">
                            Already have an account? Login</button></a>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <!--Footer-Section-->
    <footer class="footer bg-white fixed-bottom">
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
    <script src="js/jquery.js"></script>
    <!--BootstrapJS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
    <!--CustomJS-->
    <script src="js/app.js"></script>
</body>
</html>