  <div class="container">

      <style>
          .disable {
              disabled: true;
          }
      </style>

      <div class="card o-hidden border-0 shadow-lg my-5 col-lg-7 mx-auto">
          <div class="card-body p-0">
              <div class="row">
                  <div class="col-lg">
                      <div class="p-5">
                          <div class="text-center">
                              <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                          </div>
                          <form class="user">
                              <div class="form-group row">
                                  <div class="col-sm-6 mb-3 mb-sm-0">
                                      <input type="text" class="form-control form-control-user" id="exampleFirstName" placeholder="First Name">
                                  </div>
                                  <div class="col-sm-6">
                                      <input type="text" class="form-control form-control-user" id="exampleLastName" placeholder="Last Name">
                                  </div>
                              </div>
                              <div class="form-group">
                                  <input type="email" class="form-control form-control-user" id="exampleInputEmail" placeholder="Email Address">
                              </div>
                              <div class="form-group row">
                                  <div class="col-sm-6 mb-3 mb-sm-0">
                                      <input type="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password">
                                  </div>
                                  <div class="col-sm-6">
                                      <input type="password" class="form-control form-control-user" id="exampleRepeatPassword" placeholder="Repeat Password">
                                  </div>
                              </div>
                              <div class="form-group row">
                                  <div class="col-sm-6 mb-3 mb-sm-0">
                                      <input type="text" class="form-control form-control-user" id="capt" placeholder="Captcha">
                                  </div>
                                  <div class="col-sm-6">
                                      <input type="text" class="form-control form-control-user" id="exampleRepeatPassword" value="<?= random_string() ?>"readonly>
                                  </div>
                              </div>
                              <button type="button" id="btn_login" class="btn btn-primary btn-user btn-block disable">
                                  Register Account
                              </button>
                          </form>
                          <hr>
                          <div class="text-center">
                              <a class="small" href="forgot-password.html">Forgot Password?</a>
                          </div>
                          <div class="text-center">
                              <a class="small" href="<?= base_url('auth'); ?>">Already have an account? Login!</a>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>

  </div>

  <script>
      document.getElementById("btn_login").disable = true;

      function myFunction() {
          var element = document.getElementById("btn_login");
          element.classList.add("mystyle");
      }
  </script>