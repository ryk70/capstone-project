<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
    <title>AprilScheduler</title>

    <!-- CSSS -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="../css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    <link href="../css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    <script src="https://kit.fontawesome.com/c1a26a6b8a.js" crossorigin="anonymous"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var elems = document.querySelectorAll('.datepicker');
            var instances = M.Datepicker.init(elems, {
                format: 'mm-dd-yyyy',
                autoClose: true
            });
        });

        document.addEventListener('DOMContentLoaded', function () {
            var elems = document.querySelectorAll('.timepicker');
            var instances = M.Timepicker.init(elems, {
                defaultTime: 'now', // Set default time: 'now', '1:30AM', '16:30'
                twelveHour: true, // Use AM/PM or 24-hour format
                autoClose: false, // automatic close timepicker
            });
        });
    </script>
</head>

<body>
<nav class="orange darken-1" role="navigation">
    <div class="nav-wrapper container">
        <a id="logo-container" href="../index.html" class="brand-logo header-font">AprilScheduler</a>
        <ul class="right hide-on-med-and-down">
            <li><a href="#">Navbar Link</a></li>
        </ul>

        <!-- This is for mobile support -->
        <ul id="nav-mobile" class="sidenav">
            <li><a href="#">Navbar Link</a></li>
        </ul>
        <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
    </div>
</nav>
<main>
    <div class="container myElement">
        <div class="row">
            <h2>Schedule as guest</h2>
        </div>
        <form class="col s12">
            <div class="row">
                <div class="input-field col s4">
                    <input type="text" class="datepicker no-autoinit" name="date" id="date" placeholder="Please enter the date of the appointment" required>
                    <label style="font-size: 1.3em" for="date">Date</label>
                </div>

                <div class="input-field col s4">
                    <input type="text" class="timepicker no-autoinit" name="time" id="time" placeholder="Please enter the time of the appointment" required>
                    <label style="font-size: 1.3em" for="time">Time</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s4">
                    <input type="text" class="validate" name="lastName" id="lastName" placeholder="Please enter your last name" required>
                    <label style="font-size: 1.3em" for="lastName">Last Name</label>
                </div>
                <div class="input-field col s4">
                    <input type="text" class="validate" name="firstName" id="firstName" placeholder="Please enter your first name" required>
                    <label style="font-size: 1.3em" for="lastName">First Name</label>
                </div>
                <text style="font-size: 2em; padding: 2em">Or</text>
                <a href="login.html" id="download-button" class="btn-large waves-effect waves-light orange hoverable">Log In</a>
            </div>
            <div class="row">
                <div class="input-field col s4">
                    <input type="tel" class="validate" name="phone" id="phone" pattern="^[\+]?[(]?[0-9]{3}[)]?[-\s\.]?[0-9]{3}[-\s\.]?[0-9]{4,6}$" required>
                    <label for="phone">Telephone</label>
                </div>
            </div>
            <div class="row">
                <a href="payment_guest.html" id="download-button" class="btn-large waves-effect waves-light hoverable">
                    Schedule and Pay
                    <i class="material-icons right">send</i></a>
            </div>
        </form>
    </div>
</main>
<footer class="page-footer orange">
    <div class="container">
        <div class="row">
            <div class="col l6 s12">
                <h5 class="white-text">April Institute</h5>
                <p class="grey-text text-lighten-4">Welcome to April Institute's scheduler!</p>


            </div>
            <div class="col l3 s12">
                <h5 class="white-text">Connect</h5>
                <ul>
                    <li><a class="white-text" href="https://twitter.com/aprilinstitute"><i class="fab fa-twitter"></i></a></li>
                    <li><a class="white-text" href="https://www.facebook.com/Dr-Ogrenir-April-Institute-1685046748462019/"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a class="white-text" href="https://www.instagram.com/aprilinstitute.drburcinogrenir/"><i class="fab fa-instagram"></i></a></li>
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
<script src="../js/materialize.js"></script>
<script src="../js/init.js"></script>


</html>