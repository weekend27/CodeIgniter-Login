<!DOCTYPE html>
<html>
<head>
	<title>CI Login System</title>
</head>
<body>

	<h1>Login</h1>

	<?php echo validation_errors(); ?>

	<?php echo form_open('LoginController/checkLogin');?>

	Username: <br/>
	<input type="text" name="username"/><br/>

	Password: <br/>
	<input type="text" name="password"/><br/>

	<input type="submit" value="Login" name="submit"/>

	</form>


</body>
</html>