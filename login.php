<html>
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel = "icon" href = "img/pics.webp" type = "image/x-icon"> 

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        
        <link rel="stylesheet" href="fontawesome/css/fontawesome.min.css" >
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="fontawesome/css/brands.css" >
        <link rel="stylesheet" href="fontawesome/css/solid.css" >
        <link rel="stylesheet" href="style.css">
        <title>timetable</title>
        
    </head>
    <body>
        <div class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="navbar-header">
                <a class="navbar-brand" href="login.php">
                    <img src="img/pic.jpg" width="10%" height="10%" alt="" loading="lazy"> timetable
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
               <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item active">
                            <a class="nav-link" href="home.php">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about.php">ABOUT US</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="faculty.php">FACULTY</a>
                        </li>
                        <li class="nav-item">
                            <a href="subject.php" class="nav-link">SUBJECT</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="timetable.php" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                TIMETABLE
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item" href="daily.php">Daily</a>
                                <a class="dropdown-item" href="weekly.php">Weekly</a>
                                <a class="dropdown-item" href="monthly.php">Monthly</a>
                                <a class="dropdown-item" href="yearly.php">Yearly</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a href="login.php" class="nav-link">LOGIN</a>
                        </li>
                        <li class="nav-item">
                           <a href="contact.php" class="nav-link">CONTACT US</a>
                        </li>
                    </ul>
                    <form class="form-inline d-flex justify-content-center md-form form-sm mt-0">
                        <i class="fas fa-search" aria-hidden="true"></i>
                        <input class="form-control form-control-sm ml-3 w-75" type="text" placeholder="Search" aria-label="Search">
                    </form>
                </div>
            </div>
        </div>
        
       <div class="container" id="container">
            <div class="form-container sign-up-container">       
                <form action="post">
                    <h1>Create Account</h1>
                    <div class="social-container">
                        <a href="login.php" class="social"><i class="fab fa-facebook-f"></i></a>
                        <a href="login.php" class="social"><i class="fab fa-google-plus-g"></i></a>
                        <a href="login.php" class="social"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                    <span>or use your email for registration</span>
                    <input type="text" placeholder="Name" name="full_name">
                    <input type="email" placeholder="Email" name="email">
                    <input type="password" placeholder="Password" name="password">
                    <button type="submit" class="btn btn-default">Sign Up</button>
                </form>
            </div>
            <div class="form-container sign-in-container">       
                <form action="post">
                    <h1>Sign in</h1>
                    <div class="social-container">
                        <a href="login.php" class="social"><i class="fab fa-facebook-f"></i></a>
                        <a href="login.php" class="social"><i class="fab fa-google-plus-g"></i></a>
                        <a href="login.php" class="social"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                    <span>or use your account</span>
                    <input type="email" placeholder="Email" name="email">
                    <input type="password" placeholder="Password" name="password">
                    <button type="submit" class="btn btn-default">Sign In</button>
                </form>
            </div>
            <div class="overlay-container">
                <div class="overlay">
                    <div class="overlay-panel overlay-left">
                        <h1>Welcome Back!</h1>
                        <p>To keep connected with us please login with your personal info</p>
                        <button class="ghost" id="signIn">Sign In</button>
                    </div>
                    <div class="overlay-panel overlay-right">
                        <h1>Hello, Friend!</h1>
                        <p>Enter your personal details and start the journey with us</p>
                        <button class="ghost" id="signUp">Sign Up</button>
                    </div>
                </div>
            </div>
        </div> 
        <script src="js/main.js"></script>

        
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="js/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="js/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    </body>
</html>