<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name= viewport content= width=device-width initial-scale=1.0>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
  	<link rel="stylesheet" type="text/css" href="../assets/admin/css/login.css">
	<title>Đăng nhập</title>
</head>
<body>
<div class="row">
	<div class="login col-10 col-offset-1 col-sm-8 col-sm-offset-2 col-lg-4 col-lg-offset-4">
		<div class="login-panel panel panel-default">
			<div class="panel-heading">Đăng nhập</div>
				<div class="panel-body">
					<form role="form" method="post" action="index.php?controller=login&action=Login">
						<fieldset>
							<div class="form-group">
								<input class="form-control" placeholder="E-mail" name="email" type="email" autofocus>
							</div>
							<div class="form-group">
								<input class="form-control" placeholder="Mật khẩu" name="password" type="password" value="">
							</div>
							<div class="checkbox">
								<label>
									<input name="remember" type="checkbox" value="Remember Me">&nbsp;Nhớ tài khoản
								</label>
							</div>
							<button type="submit" class="btn btn-primary">Đăng nhập</button>
						</fieldset>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
</body>
</html>