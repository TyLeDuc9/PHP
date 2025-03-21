<?php include 'app/views/shares/header.php'; ?>

            <form action="/account/checklogin" method="post">
              <div class="mb-md-5 mt-md-4 pb-5">
                <h2 class="fw-bold mb-2 text-uppercase text-center">Login</h2>
                <p class="text-white-50 mb-5">Please enter your login and password!</p>

                <div class="form-outline form-white mb-4">
                  <label class="form-label" for="typeEmailX">UserName</label>
                  <input type="text" name="username" class="form-control form-control-lg" placeholder="Username"/>
                </div>

                <div class="form-outline form-white mb-4">
                <label class="form-label" for="typePasswordX">Password</label>
                  <input type="password" name="password" class="form-control form-control-lg" placeholder="Password" />
                </div>

                <p class="small mb-5 pb-lg-2">
                  <a class="text-white-50" href="#!">Forgot password?</a>
                </p>

                <button class="btn btn-danger" type="submit">Login</button>

                <div class="d-flex justify-content-center text-center mt-4 pt-1">
                  <a href="#!" class="text-white"><i class="fab fa-facebook-f fa-lg"></i></a>
                  <a href="#!" class="text-white"><i class="fab fa-twitter fa-lg mx-4 px-2"></i></a>
                  <a href="#!" class="text-white"><i class="fab fa-google fa-lg"></i></a>
                </div>
              </div>

              <div>
                <p class="mb-0 text-center">Don't have an account? <a href="/account/register" class="fw-bold text-danger">Sign Up</a></p>
              </div>
            </form>
          

<?php include 'app/views/shares/footer.php'; ?>
