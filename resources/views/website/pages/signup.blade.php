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
              <a href="{{ URL::to('/') }}"><img src="{{ asset('website/img/logos/logo4.png') }}" style="width: 32px;height: 32px;margin-bottom: 15px;" alt=""><span> Food For Foodie</span></a>
              </div>
              <div class="login-form">
                <h4>Sign Up</h4>
              <form class="form form-login" method="post" action="{{ URL::to('store') }}" onsubmit="return user_validation()">
                    {{ csrf_field() }}

                    <div class="form-group">
                        <label>Select your user type</label>
                        <select id="signup-user" class="form-control" name="user">
                            <option value=""><---Select User Type---></option>
                            <option value="foodie">Foodie</option>
                            <option value="restaurant">Restaurant</option>
                        </select>
                        <span id="user" style="color: red; font-weight: bold; font-style: oblique;"></span>
                        <span class="error">{{ $errors->first('user') }}</span>
                    </div>

                    <div class="form-group">
                      <label>Name</label>
                      <input type="text" id="signup-name" name="name" class="form-control" value="{{ old('name') }}" placeholder="Name">
                      <span id="name" style="color: red; font-weight: bold; font-style: oblique;"></span>
                      <span class="error">{{ $errors->first('name') }}</span>
                    </div>

                    <div class="form-group">
                      <label>Email address</label>
                      <input type="text" id="signup-email" name="email" class="form-control" value="{{ old('email') }}" placeholder="Email">
                      <span id="email" style="color: red; font-weight: bold; font-style: oblique;"></span>
                      <span class="error">{{ $errors->first('email') }}</span>
                    </div>

                    <div class="form-group">
                      <label>Address</label>
                      <input type="text" id="signup-address" name="address" class="form-control" value="{{ old('address') }}" placeholder="Address">
                      <span id="address" style="color: red; font-weight: bold; font-style: oblique;"></span>
                      <span class="error">{{ $errors->first('address') }}</span>
                    </div>

                    <div class="form-group">
                      <label>Phone Number</label>
                      <input type="tel" id="signup-contact" name="contact" class="form-control" value="{{ old('contact') }}" placeholder="Phone Number">
                      <span id="contact" style="color: red; font-weight: bold; font-style: oblique;"></span>
                      <span class="error">{{ $errors->first('contact') }}</span>
                    </div>

                    <div class="form-group">
                      <label>Password</label>
                      <input type="password" id="signup-password" name="password" class="form-control" placeholder="Password">
                      <span id="password" style="color: red; font-weight: bold; font-style: oblique;"></span>
                      <span class="error">{{ $errors->first('password') }}</span>
                    </div>

                    <div class="form-group">
                      <label>Repeat Password</label>
                      <input type="password" id="signup-repeat-password" name="confirm_password" class="form-control" placeholder="Confirm Password">
                      <span id="repeat-password" style="color: red; font-weight: bold; font-style: oblique;"></span>
                      <span class="error">{{ $errors->first('confirm_password') }}</span>
                    </div>

                  <button type="submit" class="btn btn-primary btn-flat m-b-30 m-t-30">Sign in</button>

                  <div class="register-link m-t-15 text-center">
                    <p>Already have an account ? <a href="{{ URL::to('login') }}"> Sign In Here</a></p>
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
            var user = document.getElementById('signup-user');
            var strUser = user.options[user.selectedIndex].value;
            var strUser1 = user.options[user.selectedIndex].text;

            var name = document.getElementById('signup-name').value;

            var email = document.getElementById('signup-email').value;
            var atposition=email.indexOf("@");  
            var dotposition=email.lastIndexOf(".");
            
            var address = document.getElementById('signup-address').value;

            var contact = document.getElementById('signup-contact').value;
            var password = document.getElementById('signup-password').value;
            var repeat_password = document.getElementById('signup-repeat-password').value;

            // user-type
            if(strUser=="")
            {
                document.getElementById('user').innerHTML="** Please select your user type";
                return false;
            }

            // name
            if(name=="")
            {
                document.getElementById('name').innerHTML="** Please enter your name";
                return false;
            }

            // email
            if(email=="")
            {
                document.getElementById('email').innerHTML="** Please enter your email address";
                return false;
            }
            
            // address
            if(address=="")
            {
                document.getElementById('address').innerHTML="** Please enter your address";
                return false;
            }
            
            if (atposition<1 || dotposition<atposition+2 || dotposition+2>=email.length)
            {  
                document.getElementById('email').innerHTML="** Please enter a valid email address";
                return false;  
            }  

            // contact
            if(contact=="")
            {
                document.getElementById('contact').innerHTML="** Please enter your Phone Number";
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

            // Repeat_Password
            if(repeat_password=="")
            {
                document.getElementById('repeat-password').innerHTML="** Please repeat your password to confirm";
                return false;
            }

            // repeat_password checking
            if (password!=repeat_password) {
                document.getElementById('repeat-password').innerHTML="** Password doesn't match";
                return false;
            }
        }


    </script>

</body>
</html>
