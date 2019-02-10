<?php
/*
Author: Ali Azhari

file: signup_view.php
*/
 ?>

<div class="container signup">

  <div class="row">
    <div class="col-lg-6  first-col">

        <h2 class="h2-login">Create an account</h2>
        <br>
        <form class="form-horizontal" action="/action_page.php">
          <div class="form-group">
            <label class="control-label col-sm-4" for="firstname">First name:</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" id="firstname" placeholder="" name="firstname">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-4" for="lastname">Last name:</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" id="lastname" placeholder="" name="lastname">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-4" for="email">Email:</label>
            <div class="col-sm-8">
              <input type="email" class="form-control" id="email" placeholder="" name="email">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-4" for="pwd">Password: </label>
            <div class="col-sm-8">
              <input type="password" class="form-control" id="pwd" placeholder="" name="pwd">
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
              <div class="checkbox">
                <label><input type="checkbox" name="remember"> Remember me</label>
              </div>
              <div class="forgot-password">
                <a href="password.php" class="" role="button">Forgot your password?</a>
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">

              <button type="submit" class="btn btn-default login-btn">Submit</button>
            </div>
          </div>
        </form>
      </div>


    <div class="col-lg-6">

        <h2 class="h2-login">Returning customer</h2>
        <br>
        <a href="signup.php" class="btn signup-btn" role="button">CREATE ACCOUNT</a>
      </div>
</div>

</div>
