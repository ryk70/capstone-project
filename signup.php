<?php $title="Signup"; include("template/base_header.php"); ?>
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
                                <label for="confirmPassword">Confirm password</label>
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
                          <a href="login.php" id="download-button" class="btn-large waves-effect waves-light orange hoverable">
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
<?php include("template/base_footer.php"); ?>