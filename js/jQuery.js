$(document).ready(function() {

  $('header nav form button').click(function() {
    $('header .signUp').slideToggle(400);
  });

$username = $("header nav form input:text").focusout(function() {
   $username = $(this);
});
$password = $("header nav form input:password").focusout(function() {
   $password = $(this);
});
$("header nav form").submit(function() {
  if ($username.val() == 0 && $password.val() == 0) {
     $username.css('box-shadow', 'inset 0 0 4px 0 red');
     $password.css('box-shadow', 'inset 0 0 4px 0 red');
     return false;
  }else if ($username.val() == 0) {
    $username.css('box-shadow', 'inset 0 0 4px 0 red');
    $password.css('box-shadow', 'none');
    return false;
  }else if ($password.val() == 0) {
    $username.css('box-shadow', 'none');
    $password.css('box-shadow', 'inset 0 0 4px 0 red');
    return false;
  }
});

});
