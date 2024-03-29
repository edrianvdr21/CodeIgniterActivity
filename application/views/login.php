<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Simple Registration Form</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
	<div class="col-lg-4 offset-lg-4">
		<h1>Login Form</h1>
		<form method="post" action="<?=base_url()?>main/login">
			<div class="mb-3">
			    <label class="form-label">Username</label>
			    <input type="text" class="form-control" name="username">
			</div>
			<div class="mb-3">
			    <label class="form-label">Password</label>
			    <input type="password" class="form-control" name="password">
			</div>
		  	<input type="submit" class="btn btn-primary" value="Login">
		  	<a href="<?=base_url()?>main/register">Register Account</a>
		</form>
	</div>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>