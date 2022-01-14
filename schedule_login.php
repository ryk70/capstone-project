<?php $title="Schedule"; include("template/base_header.php") ?>
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
    <div class="container myElement">
        <form class="col s12">
            <div class="row">
                <div class="col">
                     <h1 class="header header-font">Schedule an appointment</h1>
                </div>
            </div>
               
            <div class="row">
                <div class="input-field col s4">
                    <input type="text" class="datepicker no-autoinit" name="date" id="date" placeholder="Please enter the date of the appointment" required>
                    <label style="font-size: 1.3em" for="date">Date</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s4">
                    <input type="text" class="timepicker no-autoinit" name="time" id="time" placeholder="Please enter the time of the appointment" required>
                    <label style="font-size: 1.3em" for="time">Time</label>
                </div>
            </div>
            <div class="row">
                <div class="col s4">
                    <a class="btn-large waves-effect waves-light" href="payment_login.html">
                        Schedule and Pay <i class="material-icons right">send</i>
                    </a>
                </div>
            </div>
        </form>
<?php include("template/base_footer.php") ?>