<?php $is_itinerary = false;?>
<?php include('_head.php'); ?>

<div class="row" >
  
    <main class="main--login main container-fluid" >

      <div class="row" >
        <div class="col-sm-10 col-sm-offset-1 col-md-6 col-md-offset-3">

          <img class="login__logo" src="img/overseas-medical-med.png" alt="Overseas Medical Logo">

          <div class="panel--login panel-default panel">
            <div class="panel-body">
              <ul class="navtabs--lg nav-tabs nav row" role="tablist">
                <li class="active col-xs-12 col-sm-6" role="presentation"><a href="#login" data-toggle="tab">Login to Account</a>
                  <span class="navtabs__or small--upper">or</span></li>
                <li class="col-xs-12 col-sm-6" role="presentation"><a href="#account" data-toggle="tab">Create Agency Account</a></li>
              </ul>
              <div class="tab-content">
                <div id="login" class="tab-pane active">
                  <div class="form-group">
                    <label for="login__user" class="control-label small--upper">Email Address</label>
                    <input id="login__user" type="text" class="input--underline form-control" placeholder="Email Address">
                  </div>
                  <div class="form-group">
                    <label for="login__pass" class="control-label small--upper">Password</label>
                    <input id="login__pass" type="password" class="input--underline form-control" placeholder="Enter Password">
                  </div>
                  <div class="row">
                    <div class="col-sm-6 checkbox">
                      <label><input type="checkbox"> Remember Me</label>
                    </div>
                    <div class="col-sm-6 text-center">
                      <a href="index.php" class="btn-warning btn-md btn-block btn">Login</a>
                      <a href="#" class="btn-link btn small">Forgot Password?</a>
                    </div>
                  </div>
                </div>
                <div id="account" class="tab-pane">
                  <fieldset class="account__collapse collapse in">
                    <legend>Agency Information</legend>
                    <div class="form-group">
                      <label for="agency__name" class="control-label small--upper">Agency Name</label>
                      <input id="agency__name" type="text" class="input--underline form-control" placeholder="Agency Name…">
                    </div>
                    <div class="form-group">
                      <label for="agency__owner" class="control-label small--upper">Agency Owner</label>
                      <input id="agency__owner" type="text" class="input--underline form-control" placeholder="Agency Owner…">
                    </div>
                    <div class="form-group">
                      <label for="agency__address" class="control-label small--upper">Agency Address</label>
                      <input id="agency__address" type="text" class="input--underline form-control" placeholder="Agency Address…">
                    </div>
                    <div class="form-group row">
                      <div class="col-sm-6">
                        <label for="agency__city" class="control-label small--upper">City</label>
                        <input id="agency__city" type="text" class="input--underline form-control" placeholder="City">
                      </div>
                      <div class="col-sm-3">
                        <label for="agency__state" class="control-label small--upper">State/Province</label>
                        <select name="" id="agency__state" class="input--select form-control">
                          <option value="">AA</option>
                        </select>
                      </div>
                      <div class="col-sm-3">
                        <label for="agency__postal" class="control-label small--upper">Postal Code</label>
                        <input id="agency__postal" type="text" class="input--underline form-control" placeholder="ZIP…">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="agency__country" class="control-label small--upper">Country</label>
                      <input id="agency__country" type="text" class="input--underline form-control" placeholder="Country">
                    </div>
                    <div class="form-group">
                      <label for="agency__tel" class="control-label small--upper">Telephone</label>
                      <input id="agency__tel" type="tel" class="input--underline form-control" placeholder="Telephone">
                    </div>
                    <div class="form-group">
                      <label for="agency__www" class="control-label small--upper">Website</label>
                      <input id="agency__www" type="text" class="input--underline form-control" placeholder="www.">
                    </div>
                    <div class="row">
                      <div class="col-sm-6 text--xs--center">
                        <button type="button" class="btn-link btn-md btn">clear fields</button>
                      </div>
                      <div class="col-sm-6">
                        <a href="#" class="btn-warning btn-md btn-block btn" data-toggle="collapse" data-target=".account__collapse">Next Step</a>
                      </div>
                    </div>
                  </fieldset>
                  <fieldset class="account__collapse collapse">
                    <legend>Login Information</legend>
                    <div class="form-group">
                      <label for="login__fname" class="control-label small--upper">First Name</label>
                      <input id="login__fname" type="text" class="input--underline form-control" placeholder="First Name">
                    </div>
                    <div class="form-group">
                      <label for="login__lname" class="control-label small--upper">Last Name</label>
                      <input id="login__lname" type="text" class="input--underline form-control" placeholder="Last Name">
                    </div>
                    <div class="form-group">
                      <label for="login__email" class="control-label small--upper">Email</label>
                      <input id="login__email" type="text" class="input--underline form-control" placeholder="Email">
                    </div>
                    <div class="form-group">
                      <label for="login__user" class="control-label small--upper">Username</label>
                      <input id="login__user" type="text" class="input--underline form-control" placeholder="Username">
                    </div>
                    <div class="form-group">
                      <label for="login__pass" class="control-label small--upper">Password</label>
                      <input id="login__pass" type="text" class="input--underline form-control" placeholder="Enter Password">
                    </div>
                    <div class="form-group">
                      <label for="login__pass2" class="control-label small--upper">Re-Enter Password</label>
                      <input id="login__pass2" type="text" class="input--underline form-control" placeholder="Re-Enter Password">
                    </div>
                    <div class="form-group">
                      <div class="checkbox"><label><input type="checkbox"> Send me exclusive offers and travel information</label></div>
                      <div class="checkbox"><label><input type="checkbox"> I have read and accepted the <a href="#">terms &amp; conditions</a></label></div>
                    </div>
                    <div class="row">
                      <div class="col-sm-6 text--xs--center">
                        <button type="button" class="btn-link btn-md btn" data-toggle="collapse" data-target=".account__collapse"><span class="ion-ios-arrow-back"></span> previous step</button>
                      </div>
                      <div class="col-sm-6">
                        <a href="#" class="btn-warning btn-md btn-block btn">Finish &amp; Create Account</a>
                      </div>
                    </div>
                  </fieldset>

                </div>
              </div>
            </div>
          </div>

        </div>
      </div>

    </main>
</div>

<?php include('_footer.php'); ?>
