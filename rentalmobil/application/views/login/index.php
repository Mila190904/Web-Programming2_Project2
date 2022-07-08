<div class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="#" style="color: black;" ><b>LOGIN</b></a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
    <?php echo form_open("login/auth") ?>
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Masukkan Username" name="username">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Masukkan Password" name="password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="remember">
              <label for="remember">
                Remember Me
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-success btn-block">Sign In</button>
            <?php echo form_close() ?>
          </div>
          <!-- /.col -->
        </div>
        

      <div class="social-auth-links text-center mb-3">
        <p>- OR -</p>
        <a href="https://web.facebook.com/?_rdc=1&_rdr" class="btn btn-block btn-primary">
          <i class="fab fa-facebook mr-2"></i>  Sign in using Facebook
        </a>
        <a href="https://accounts.google.com/signin/v2/identifier?hl=ID&flowName=GlifWebSignIn&flowEntry=ServiceLogin" class="btn btn-block btn-danger">
          <i class="fab fa-google-plus mr-2"></i> Sign in using Google+
        </a>
      </div>
      <!-- /.social-auth-links -->

      <p class="mb-1">
        <a href="#">Lupa Akun?</a>
      </p>
      <p class="mb-0">
        <a href="<?php echo base_url('index.php/users/form')?>" class="text-center">Registrasi User</a>
      </p>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->
</div>