<?php
require_once './Authentication/auth/googleinit.php';
require_once './Authentication/auth/fbook.php';
?>

<!-- code BELOW this line -->

<p>Auth Modal</p> <!-- delete this -->

<!-- code ABOVE this line -->

<!-- Javascript from here on... -->
  <script>
  function statusChangeCallback(response) {
    if (response.status === 'connected') {
    // Logged into your app and Facebook.
    testAPI(response.authResponse.accessToken);
    console.log(response);
    }
  }

  function checkLoginState() {
    FB.getLoginStatus(function(response) {
      statusChangeCallback(response);
    });
  }

  window.fbAsyncInit = function() {
    FB.init({
      appId      : '325441314824736',
      cookie     : true,  // enable cookies to allow the server to access
                   // the session
      xfbml      : true,  // parse social plugins on this page
      version    : 'v2.8' // use graph api version 2.8
    });

    FB.getLoginStatus(function(response) {
      statusChangeCallback(response);
    });

  };

  // Load the SDK asynchronously
  (function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.2&appId=1121854304666542&autoLogAppEvents=1';
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));

  // Here we run a very simple test of the Graph API after login is
  // successful.  See statusChangeCallback() for when this call is made.
  function testAPI(accessToken) {
    console.log('Fetching your information.... ');
    FB.api(`/me`, function(response) {
      validateUser(response.id,accessToken);
    });

    function validateUser(userid,accessToken){
      FB.api(`/me?fields=first_name,last_name,picture,email`,
      function (response) {
        if (response && !response.error) {
          console.log(response,userid,accessToken);
          // const firstname = response.first_name
          //const lastname = response.last_name
          //const id = response.id
          //const access_token = accessToken
        }
      });
    }
  }
</script>
