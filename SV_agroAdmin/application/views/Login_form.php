<!DOCTYPE html>
<html lang="en">
<head>
   <style>
    .login-box{
               box-shadow: rgb(38, 57, 77) 0px 20px 30px -10px;
  }
  </style>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>SV Agro Solutions | Admin Login</title>
<?php include('public/header.php');?>
<body class="hold-transition login-page">
<div class="login-box">
  
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <div class="login-logo">
    <img src="<?php echo base_url().'upload/logo/SV-Circle.png';?>" alt="Logo" width="50%" height="40%">
    </a>
  </div>
  <h6 style="text-align:center">Sign In To Start Your Session</h6>

               <?php if($this->session->flashdata('error')){?>

              <div class="bg-danger" style="width: 100%;padding:7px;">             
                <center><p><?php  $this->session->flashdata('error'); ?></p></center>
              </div> 

             <?php } ?>
        

            <?php if ($this->session->flashdata('error')) { ?><!---stataus flahdata-->
                <div class="bg-danger" style="width: 100%;">
                  <center><b>
                      <p><?= $this->session->flashdata('error'); ?></p>
                    </b></center>
                </div>
              <?php } ?>

     
      <br>
      <form action="<?php echo base_url().'AdminData/verify_admin'; ?>" method="POST" class="form" id="form">
        <div class="input-group mb-3">
          <input type="email" class="form-control" id="email" name="admin_email" placeholder="Enter email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <p><?php echo form_error('admin_email'); ?><p>
        <div class="input-group mb-3">
          <input type="password" class="form-control" id="password" name="admin_pwd" placeholder="Enter password">
           <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <p><?php echo form_error('admin_pwd'); ?><p>
        <div class="row">
          <div class="col-12">
            <div class="icheck-primary">
              <input type="checkbox" id="remember">
              <label for="remember">
                Remember Me
              </label>
            </div>
          </div>
          </div>
          <center><button type="submit" class="btn btn-primary" name="ragister">SIGN IN</button></center>
          <!-- /.col -->
         
          <!-- /.col -->
      
      </form>

     
      <!-- /.social-auth-links -->

    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->
<?php include('public/script.php');?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
 <script type="text/javascript">
  $(document).ready(function(){
    $('#success-alert').fadeIn().delay(1000).fadeOut();
    $('#danger-alert').fadeIn().delay(1000).fadeOut();
  });
 </script>
<!-- jQuery -->

<!-- Bootstrap 4 -->

<!-- AdminLTE App -->

</body>
</html>
