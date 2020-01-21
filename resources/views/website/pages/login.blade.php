<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Food For Foodie</title>

    <link rel="icon" type="image/png" href="website/img/logos/titlelogo2.png">

	<!-- Styles -->
    <link href="{{ asset('website/LOGIN/assets/css/lib/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('website/LOGIN/assets/css/lib/themify-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('website/LOGIN/assets/css/lib/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('website/LOGIN/assets/css/lib/unix.css') }}" rel="stylesheet">
    <link href="{{ asset('website/LOGIN/assets/css/style.css') }}" rel="stylesheet">

    <style type="text/css">
        .error {
            color: #FF0000;
            font-weight: bolder;
        }
    </style>
</head>

<body class="bg-primary">

    <div class="unix-login">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-lg-offset-3">
					<div class="login-content">
						<div class="login-logo">
							<a href="{{ URL::to('/') }}"><span>Food For Foodie</span></a>
						</div>
						<div class="login-form">
							<h4>Sign Up</h4>
							<form class="form form-login" method="post" action="{{ URL::to('loginstore') }}" onsubmit="return user_validation()">
                                {{ csrf_field() }}

								<div class="form-group">
									<label>Email address</label>
									<input type="email" id="login-email" name="email" class="form-control" value="{{ old('email') }}" placeholder="Email">
                                    <span id="email" style="color: red; font-weight: bold; font-style: oblique;"></span>
                                    <span class="error">{{ $errors->first('email') }}</span>
								</div>

								<div class="form-group">
									<label>Password</label>
									<input type="password" id="login-password" name="password" class="form-control" placeholder="Password">
                                    <span id="password" style="color: red; font-weight: bold; font-style: oblique;"></span>
                                    <span class="error">{{ $errors->first('password') }}</span>
								</div>

								<button type="submit" class="btn btn-primary btn-flat m-b-30 m-t-30">Sign in</button>

								<div class="register-link m-t-15 text-center">
									<p>Don't have account ? <a href="{{ URL::to('signup') }}"> Sign Up Here</a></p>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

    <script type="text/javascript">
        function user_validation()
        {
            var email = document.getElementById('login-email').value;
            var password = document.getElementById('login-password').value;

            // name
            if(email=="")
            {
                document.getElementById('email').innerHTML="** Please enter your registered email";
                return false;
            }

            // password
            if(password=="")
            {
                document.getElementById('password').innerHTML="** Please enter your password";
                return false;
            }

            if (password.length<8) 
            {
                document.getElementById('password').innerHTML="** Your password is too short.Input at-least 8 characters";
                return false;
            }
        }

    </script>

</body>


</html>
