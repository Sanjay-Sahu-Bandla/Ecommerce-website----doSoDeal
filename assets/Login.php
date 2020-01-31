    <!-- Login Modal -->
    <div class="modal fade" id="LoginModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Log in !</h5>
                    <button id="loginClose" type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body">
                    <form action="Database/operations.php"method="post">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email address</label>
                            <input type="email" name="login-email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" name="login-password" class="form-control" id="exampleInputPassword1">
                        </div>
                        <button type="submit" class="btn btn-primary" style="background: #17a2b8; border:none;">Submit</button>
                        <div class="form-group text-right mb-0">
                            <button onclick="createAccount()" type="button" class="bg-white btn btn-light" for="exampleCheck1" style="font-size: 12px; color: #17a2b8 ;">Create new account !</button>
                        </div>
                    </form>
                </div>

                <!-- <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <a href="facebook.php" class="btn btn-primary" onclick="FB()" style="background: #17a2b8; border:none;">Continue</a>
                </div> -->
            </div>
        </div>
    </div>

    <!-- Create Account Modal -->

    <button id="signUp" class="d-none btn btn-sm btn-light" data-toggle="modal" data-target="#createAccountModel" style="border-top-right-radius: 4px;border-bottom-right-radius: 4px;">createAccountModel</button>

    <div class="modal fade" id="createAccountModel" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Sign Up !</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body">

                    <form id="signUpFom" action="Database/operations.php" method="post" onsubmit="return validate()">

                        <input type="hidden" name="id" value="<?php echo uniqid(); ?>">

                        <div class="form-row">
                        <div class="form-group col-md-6">
                          <label for="inputEmail4" class="">First name</label>
                          <small class='d-inline form-text text-danger'>*</small>
                          <input type="text" class="form-control" name="firstName" required id="inputEmail4">
                      </div>
                      <div class="form-group col-md-6">
                          <label for="lastName">Last name</label>
                          <small class='d-inline form-text text-danger'>*</small>
                          <input type="text" name="lastName" required class="form-control" id="lastName">
                      </div>
                    </div>
                  <div class="form-group">
                    <label for="inputEmail4">Email</label>
                    <small class='d-inline form-text text-danger'>*</small>
                    <input type="email" class="form-control" name="mail" required id="inputEmail4">
                </div>
                      <div class="form-row">
                      <div class="form-group col-md-6">
                          <label for="inputPassword1">Password</label>
                          <small class='d-inline form-text text-danger'>*</small>
                          <input type="password" name="password" required class="form-control" id="inputPassword1" minlength="4">
                      </div>
                        <div class="form-group col-md-6">
                          <label for="inputPassword2">Confirm Password</label>
                          <small class='d-inline form-text text-danger'>*</small>
                        <input type="password" name="repeat-password" required class="form-control" id="inputPassword2" minlength="4">
                      </div>
                  </div>
                <div class="form-group">
                    <label for="inputAddress">Address</label>
                    <input type="text" name="address" class="form-control" id="inputAddress" placeholder="Apartment, studio, or floor">
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                      <label for="inputCity">City</label>
                      <input type="text" class="form-control" id="inputCity" name="city">
                  </div>
                  <div class="form-group col-md-4">
                      <label for="inputState">State</label>
                      <select id="inputState" class="form-control" name="state">
                        <option selected>Choose...</option>
                        <option >Telangana</option>
                        <option >Maharashtra</option>
                        <option >Delhi</option>
                        <option>Karnataka</option>
                    </select>
                </div>
                <div class="form-group col-md-2">
                  <label for="inputZip">Pincode</label>
                  <input type="text" class="form-control" id="inputZip" name="pincode">
              </div>
          </div>
          <div class="text-right">              
              <button onclick="signUp()" type="submit" class="text-right btn btn-primary" style="background: #17a2b8; border:none;">Sign Up</button>
          </div>
      </form>
  </div>
</div>
</div>
</div>