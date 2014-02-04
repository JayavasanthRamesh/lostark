<html lang="en">
<title> Lost Ark </title>

<link rel="stylesheet" href="/thelostark/assets/css/bootstrap.css">
<body>
	<br><br><br><br><br>
	<div class="row">&nbsp;
	</div>
	<br><br><br>
	<div class="col-lg-3 col-lg-offset-1">
	<?php echo form_open('lostark/login')?>
	<form class="bs-example form-horizontal" method="post">
	<div class="well">
                <fieldset>
                  <legend>Login</legend>
                  <div class="form-group">
                  	<div class="col-lg-8 col-lg-offset-1">

					<label for="inputEmail" class="col-lg-8 control-label">Register No</label>
						 <input type="text" class="form-control" name="regno">
					
					<label for="inputEmail" class="col-lg-8 control-label"> Password </label>
						<input type="password" class="form-control" name="password">

					<div class="checkbox">
						<label><input type="checkbox" name="remember"> Remember Me </label>
					</div>

					<input type="submit" class="btn btn-primary" value="login">
					</div>
				</div>
				</fieldset>
	</div>
	</form>
</div>
<div class="col-lg-6">
<div class="col-lg-7"></div>
<div class="col-lg-8 col-lg-offset-5">
<div class="well">
<?php echo form_open('lostark/register')?>
<form class="bs-example form-horizontal" method="post">
	<fieldset>    
    <legend>Register</legend>
	<label for="inputEmail" class="col-lg-2 control-label">Name</label><input type="text" class="form-control" name="name" required autofocus>
	<label for="inputEmail" class="col-lg-2 control-label">Password </label> <input type="text" class="form-control" name="password" required>
	
	<label  class="col-lg-2 control-label">RegisterNo</label><input type="text"  class="form-control" title="Only for second years and firstyears" pattern="201(2|3)[0-9]{6}" name="regno" required>
	<br/>
	<input type="submit" class="btn btn-primary" value="Register">
	</fieldset>
	</div>
</form>
</div>
</div>
</body>
</html>