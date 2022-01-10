<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
    <title>AprilScheduler</title>

    <!-- CSS  -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    <script src="https://kit.fontawesome.com/c1a26a6b8a.js" crossorigin="anonymous"></script>
</head>

<body>
<nav class="orange darken-1" role="navigation">
    <div class="nav-wrapper container">
        <a id="logo-container" href="index.php" class="brand-logo header-font">AprilScheduler</a>
        <ul class="right hide-on-med-and-down">
            <li><a href="#">Navbar Link</a></li>
        </ul>

        <!-- This is for mobile support -->
        <ul name="nav-mobile" id="nav-mobile" class="sidenav">
            <li><a href="#">Navbar Link</a></li>
        </ul>
        <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
    </div>
</nav>
<main>
    <div class="container">
        <section>
            <form action="processSignup.php?" method="POST">
                <div class="row">
                    <form class="col s12">
                        <div class="row">
                            <div class="input-field col s6">
                                <input name="first_name" id="first_name" type="text" class="validate" required>
                                <label for="first_name">First Name</label>
                            </div>
                            <div class="input-field col s6">
                                <input name="last_name" id="last_name" type="text" class="validate" required>
                                <label for="last_name">Last Name</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s6">
                                <input name="email" id="email" type="email" class="validate" required>
                                <label for="email">Email</label>
                            </div>

                            <!-- take out username-->
                            <div class="input-field col s6">
                                <input name="phone_number" id="phone_number" type="tel" class="validate" required>
                                <label for="phone_number">Phone Number</label>
                            </div>
                        </div>

                        <div class="row">
                            <div class="input-field col s6">
                                <input name="password" id="password" type="password" class="validate" required>
                                <label for="password">Password</label>
                            </div>
                            <div class="input-field col s6">
                                <input name="confirmPassword" id="confirmPassword" type="password" class="validate" required>
                                <label for="password">Confirm password</label>
                            </div>
                        </div>
                        <div class="row">
                            <button class="btn waves-effect waves-light" type="submit" name="action">
                                Submit<i class="material-icons right">send</i>
                            </button>
                        </div>
                      <div class="row">
                        <div class="center-align">
                          <text style="font-size: 2em; padding: 2em">Or</text>
                        </div>
                      </div>
                      <div class="row">
                        <div class="center-align">
                          <a href="login.html" id="download-button" class="btn-large waves-effect waves-light orange hoverable">
                            Log In
                          </a>
                        </div>
                      </div>
                    </form>
                </div>
            </form>
        </section>
    </div>
    </div>
</main>
<footer class="page-footer orange">
    <div class="container">
        <div class="row">
            <div class="col l6 s12">
                <h5 class="white-text">April Institute</h5>
                <p class="grey-text text-lighten-4">We are a team of college students working on this project like it's
                    our full time job. Any amount would help support and continue development on this project and is
                    greatly appreciated.</p>


            </div>
            <div class="col l3 s12">
                <h5 class="white-text">Connect</h5>
                <ul>
                    <li><a class="white-text" href="https://twitter.com/aprilinstitute"><i
                            class="fab fa-twitter"></i></a></li>
                    <li><a class="white-text"
                           href="https://www.facebook.com/Dr-Ogrenir-April-Institute-1685046748462019/"><i
                            class="fab fa-facebook-f"></i></a></li>
                    <li><a class="white-text" href="https://www.instagram.com/aprilinstitute/"><i
                            class="fab fa-instagram"></i></a></li>
                </ul>
            </div>
        </div>
    </div>

    <div class="footer-copyright">
        <div class="container">
            Made by <a class="orange-text text-lighten-3" href="http://materializecss.com">Materialize</a>
        </div>
    </div>
</footer>

</body>
<!--  Scripts-->
<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="js/materialize.js"></script>
<script src="js/init.js"></script>


</html>