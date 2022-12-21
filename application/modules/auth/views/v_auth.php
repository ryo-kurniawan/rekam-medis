<!doctype html>
<html lang="en">
  <head>
  	<title>Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="<?= base_url(); ?>assets/login/css/style.css">

	</head>
	<body>
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-12 col-lg-10">
					<div class="wrap d-md-flex">
						<div class="img" style="background-image: url(<?= base_url(); ?>assets/login/images/bg-1.jpg);">
			      </div>
						<div class="login-wrap p-4">
			      	<div class="d-flex">
			      		<div class="w-100">
			      			<h3 class="mb-4">Selamat Datang</h3>
			      		</div>
			      	</div>
							<form action="<?= base_url(); ?>auth/login" method="post">
			      		<div class="form-group mb-3">
			      			<label class="label" for="username">Username</label>
			      			<input type="text" class="form-control" name="username" placeholder="Username" required>
			      		</div>
		            <div class="form-group mb-3">
		            	<label class="label" for="password">Password</label>
		              <input type="password" class="form-control" name="password" placeholder="Password" required>
		            </div>
		            <div class="form-group">
		            	<button type="submit" class="form-control btn btn-primary rounded submit px-3" value="Login">Log In</button>
		            </div>
		          </form>
		        </div>
		      </div>
				</div>
			</div>
		</div>
	</section>

	<script src="<?= base_url(); ?>assets/login/js/jquery.min.js"></script>
  <script src="<?= base_url(); ?>assets/login/js/popper.js"></script>
  <script src="<?= base_url(); ?>assets/login/js/bootstrap.min.js"></script>
  <script src="<?= base_url(); ?>assets/login/js/main.js"></script>

	</body>
</html>

