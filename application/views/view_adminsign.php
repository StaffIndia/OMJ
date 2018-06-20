<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href=""><b>Admin&nbsp;</b>OMJ</a>
  </div>
  <!-- /.login-logo -->
  <div class="adminlogniarea login-box-body">
    <p class="login-box-msg">Log in to Admin Panel</p>
       <?php  
							
								$msg=$this->session->flashdata('admin_message_login');
								
								if(!empty($msg)){
								echo  $msg;
								}
							?>

    <form method="post">
      <div class="form-group has-feedback">
        <input type="text" class="form-control" placeholder="Username" name="un"  value="<?=set_value('un');?>">
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
        <div class="error"><?= form_error('un');?></div>  
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" placeholder="Password" name="pass" value="<?=set_value('pass')?>">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
        <div class="error"><?=form_error('pass');?></div>  
      </div>
      <div class="row">
        <div class="col-xs-8">
         
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Log In</button>
        </div>
        <!-- /.col -->
      </div>
    </form>

  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->
