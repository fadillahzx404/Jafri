<main class="d-flex align-items-center min-vh-100 py-3 py-md-0">
    <div class="container">
      <div class="row justify-content-center">
      <div class="col-md-9">
      <div class="card login-card">
        <div class="row no-gutters">
          <div class="col-5">
            <img src="<?php echo base_url()?>/assets/bootstrap/image/Logo_baru.jpg" alt="registration" class="img-fluid rounded">
          </div>
          <div class="col-6">
            <div class="card-body">
              <div class="brand-wrapper">
                <img src="<?php echo base_url()?>/assets/bootstrap/image/logojafri.png" alt="logo" class="logo">
                <b style="color:black">Jafri<b>
              </div>
              <p class="login-card-description">Silakan Untuk Registrasi Akun Kamu</p>
              <form action="<?php site_url('home/index.php') ?>">
                  <div class="form-group">
                    <label for="email" class="sr-only">Email</label>
                    <input type="email" name="email" id="email" class="form-control" placeholder="Email address">
                  </div>
                  <div class="form-group mb-4">
                    <label for="password" class="sr-only">Password</label>
                    <input type="password" name="password" id="password" class="form-control" placeholder="***********">
                  </div>
                  <input name="login" id="login" class="btn btn-primary mb-4" type="button" value="Login">
                </form>
                <a href="#!" class="forgot-password-link">Forgot password?</a>
                <p class="login-card-footer-text">Don't have an account? <a href="<? site_url('home/index.php')?> class="text-reset">Register here</a></p>
            </div>
          </div>
        </div>
      </div>
      </div>
      </div>
    </div>
  </main>

