<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Admin Login</title>
		<meta name="description" content="description">
		<meta name="author" content="Evgeniya">
		<meta name="keyword" content="keywords">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="<?php echo base_url().'assets/devo/plugins/bootstrap/bootstrap.css'?>" rel="stylesheet" type="text/css" />
		<link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet" type="text/css" />
		<link href="http://fonts.googleapis.com/css?family=Righteous" rel="stylesheet" type="text/css" />
		<link href="<?php echo base_url().'assets/devo/css/style.css'?>" rel="stylesheet" type="text/css" />
		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
				<script src="http://getbootstrap.com/docs-assets/js/html5shiv.js"></script>
				<script src="http://getbootstrap.com/docs-assets/js/respond.min.js"></script>
		<![endif]-->
	</head>
<body>
	<div class="container-fluid">
		<div id="page-login" class="row">
			<div class="col-xs-12 col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3">
				<form action="<?php echo base_url().'Login_admin/cek_login'?>" method="post">
					<div class="box">
						<div class="box-content">
							<div class="text-center">
								<h3 class="page-header">Yummy Admin Login</h3>
							</div>
							<div class="form-group">
								<label class="control-label">Username</label>
								<input type="text" class="form-control" name="username" />
							</div>
							<div class="form-group">
								<label class="control-label">Password</label>
								<input type="password" class="form-control" name="password" />
							</div>
							<div class="text-center">
								<input type="submit" class="btn btn-primary" value="Sign in" />
							</div>
							<div class="text-center">
								<a href="<?php echo base_url()?>">Kembali ke Home</a>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</body>
</html>
