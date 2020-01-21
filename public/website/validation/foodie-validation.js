function validation()
{
  var name = document.getElementById('signup-name').value;
  var number = document.getElementById('signup-phone-number').value;
  var email = document.getElementById('signup-email').value;
  var address = document.getElementById('signup-address').value;
  var password = document.getElementById('signup-password').value;
  var repeat_password = document.getElementById('signup-repeat_password').value;

  // name
  if(name=="")
  {
    document.getElementById('name').innerHTML="** Please enter your name";
    return false;
  }


  // number
  if(number=="")
  {
    document.getElementById('number').innerHTML="** Please enter your contact number";
    return false;
  }


  // email
  if(email=="")
  {
    document.getElementById('email').innerHTML="** Please enter your email id";
    return false;
  }


  // address
  if(address=="")
  {
    document.getElementById('address').innerHTML="** Please enter your address";
    return false;
  }


  // password
  if(password=="")
  {
    document.getElementById('password').innerHTML="** Please enter your password";
    return false;
  }
  if (password.length<5) {
    document.getElementById('password').innerHTML="** Your password is too short.Input at-least 5 characters";
    return false;
  }


  // Repeat_Password
  if(repeat_password=="")
  {
    document.getElementById('repeat_password').innerHTML="** Please repeat your password to confirm";
    return false;
  }

  // repeat_password checking
  if (password!=repeat_password) {
    document.getElementById('repeat_password').innerHTML="** Password doesn't match";
    return false;
  }
}
