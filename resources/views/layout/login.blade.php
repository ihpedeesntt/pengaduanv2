<!doctype html>
<html lang="en" class="fullscreen-bg">

<head>
	<title>Login Admin Whistleblowing</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<!-- VENDOR CSS -->
	<link rel="stylesheet" href="/klorofil/assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="/klorofil/assets/vendor/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="/klorofil/assets/vendor/linearicons/style.css">
	<!-- MAIN CSS -->
	<link rel="stylesheet" href="/klorofil/assets/css/main.css">
	<!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
	<link rel="stylesheet" href="/klorofil/assets/css/demo.css">
	<!-- GOOGLE FONTS -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
	<!-- ICONS -->
	<link rel="apple-touch-icon" sizes="76x76" href="/klorofil/assets/img/apple-icon.png">
	<link rel="icon" type="image/png" sizes="96x96" href="/klorofil/assets/img/favicon.png">
</head>

<body>
	<!-- WRAPPER -->
	<div id="wrapper">
		<div class="vertical-align-wrap">
			<div class="vertical-align-middle">
				<div class="auth-box ">
					<div class="left">
						<div class="content">
							
								<div class="logo text-center"><img src="/klorofil/assets/img/peluit.png" width="180" alt="Klorofil Logo"></div>
								
						
								@if(session('msg'))
									<div class="alert alert-danger alert-dismissible" role="alert">
									{{session('msg')}}
								</div>
								@endif
							<form class="form-auth-small" method="POST" action="postlogin">
							@csrf
								<div class="form-group">
									<label for="signin-email" class="control-label sr-only">Username</label>
									<input  class="form-control" id="nama_user" type="text" name="nama_user"   placeholder="Username">
									
								</div>
								
								<div class="form-group">
									<label for="signin-password" class="control-label sr-only">Password</label>
									<input  class="form-control" id="password" type="password"  name="password"  placeholder="Password" >
									
								</div>
								<button type="submit" class="btn btn-primary btn-lg btn-block">
                                    {{ __('Login') }}
                                </button>
								
							</form>
						</div>
					</div>
					<div class="right">
						<div class="overlay"></div>
						<div class="content text">
							<h1 class="heading"><i>Whistleblowing System</i> BPS Provinsi NTT</h1>
							<p>by Seksi IPD BPS Provinsi NTT</p>
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
	</div>
	<!-- END WRAPPER -->
</body>

</html>
