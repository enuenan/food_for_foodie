function res_validation()
{
  var restaurant_name = document.getElementById('signup-restaurant-name').value;
  var restaurant_address = document.getElementById('signup-restaurant-address').value;
  var owner = document.getElementById('signup-Owner').value;
  var number = document.getElementById('signup-res_number').value;
  var email = document.getElementById('signup-res_email').value;
  var password = document.getElementById('signup-res_password').value;
  var repeat_password = document.getElementById('signup-res_repeat_password').value;

  // restaurant_name
  if(restaurant_name=="")
  {
    document.getElementById('restaurant-name').innerHTML="** Please enter your restaurant name";
    return false;
  }

  // restaurant_address
  if(restaurant_address=="")
  {
    document.getElementById('restaurant-address').innerHTML="** Please enter your restaurant address";
    return false;
  }

  // Owner
  if(owner=="")
  {
    document.getElementById('owner-name').innerHTML="** Please enter your address";
    return false;
  }


  // number
  if(number=="")
  {
    document.getElementById('phone-number').innerHTML="** Please enter your contact number";
    return false;
  }


  // email
  if(email=="")
  {
    document.getElementById('restaurant-email').innerHTML="** Please enter your email id";
    return false;
  }

  
  // password
  if(password=="")
  {
    document.getElementById('res_password').innerHTML="** Please enter your password";
    return false;
  }
  if (password.length<5) {
    document.getElementById('res_password').innerHTML="** Your password is too short.Input at-least 5 characters";
    return false;
  }


  // Repeat_Password
  if(repeat_password=="")
  {
    document.getElementById('res_repeat_password').innerHTML="** Please repeat your password to confirm";
    return false;
  }

  // repeat_password checking
  if (password!=repeat_password) {
    document.getElementById('res_repeat_password').innerHTML="** Password doesn't match";
    return false;
  }
}
