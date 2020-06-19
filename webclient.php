<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Test FB Login</title>
  <script>
    window.fbAsyncInit = function() {
      FB.init({
        appId      : '794926124245896',
        cookie     : true,
        xfbml      : true,
        version    : '7.0'
      });
        
      FB.AppEvents.logPageView();   
        
    };

    (function(d, s, id){
       var js, fjs = d.getElementsByTagName(s)[0];
       if (d.getElementById(id)) {return;}
       js = d.createElement(s); js.id = id;
       js.src = "https://connect.facebook.net/en_US/sdk.js";
       fjs.parentNode.insertBefore(js, fjs);
     }(document, 'script', 'facebook-jssdk'));

    function checkLoginState() {
      FB.getLoginStatus(function(response) {
        statusChangeCallback(response);
      });
    }
  </script>
</head>
<body>
  <fb:login-button 
    scope="public_profile,email"
    onlogin="checkLoginState();">
  </fb:login-button>
</body>
</html>