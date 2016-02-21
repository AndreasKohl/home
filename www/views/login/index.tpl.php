

	<div class="container login">	        
      <form action="index.php" method="post" class="form-signin" role="form">
            <h4 class="login-title">switch it</h4><br>
      		<b><?php echo $err; ?></b>	  
	        <input type="text" name="username" class="form-control" placeholder="<?php echo LOGIN_user;?>"  autofocus>
	        <input type="password" name="password" class="form-control" placeholder="<?php echo LOGIN_pass;?>" >	       
	        <button class="btn btn-lg btn-primary btn-block" type="submit"><span class="fa fa-sign-in"></span> <span class="btn-label"><?php echo LOGIN_signin;?></span></button>
      </form>
    </div>
