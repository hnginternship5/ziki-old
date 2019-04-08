<?php
require_once 'Authentication/auth/googleinit.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up / Sign In</title>
    <link rel="shortcut icon" href="favicon.png" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Hind:400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/base.css">
</head>
<body>

    <!-- <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.2&appId=325441314824736&autoLogAppEvents=1"></script>
     -->
    <main class="fega-main-container">
        <div class="fega-content-container">
            <h1>Hello!</h1>
            <p>Access is just one click away</p>

            <div class="auth-btns">
                <button class="google-btn">
                    <svg width="14" height="15" viewBox="0 0 14 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0)">
                            <path d="M3.1027 9.06465L2.61538 11.0138L0.834231 11.0542C0.30193 9.99638 0 8.78609 0 7.49996C0 6.25628 0.282297 5.08347 0.782688 4.05078H0.78307L2.36879 4.36227L3.06343 6.05105C2.91804 6.50519 2.8388 6.99269 2.8388 7.49996C2.83886 8.05051 2.93193 8.578 3.1027 9.06465Z" fill="#FBBB00" />
                            <path d="M13.8776 6.09888C13.958 6.55257 13.9999 7.02111 13.9999 7.49997C13.9999 8.03692 13.9472 8.56069 13.8468 9.06592C13.5061 10.7851 12.6157 12.2864 11.3822 13.3487L11.3819 13.3483L9.38457 13.2391L9.10189 11.3485C9.92034 10.8342 10.56 10.0294 10.8969 9.06592H7.15381V6.09888H10.9515H13.8776Z" fill="#518EF8" />
                            <path d="M11.3822 13.3483C10.1826 14.3814 8.65908 15 7.00024 15C4.33447 15 2.01679 13.4036 0.834473 11.0542L3.10294 9.0647C3.69408 10.7551 5.21601 11.9584 7.00024 11.9584C7.76715 11.9584 8.48564 11.7363 9.10216 11.3485L11.3822 13.3483Z" fill="#28B446" />
                            <path d="M11.4681 1.72664L9.20041 3.71578C8.56234 3.28846 7.80809 3.0416 7.00003 3.0416C5.17541 3.0416 3.62502 4.30011 3.06348 6.05109L0.783098 4.05082H0.782715C1.94772 1.64423 4.29464 0 7.00003 0C8.69849 0 10.2558 0.648223 11.4681 1.72664Z" fill="#F14336" />
                        </g>
                        <defs>
                            <clipPath id="clip0">
                                <rect width="14" height="15" fill="white" />
                            </clipPath>
                        </defs>
                    </svg>

                    <span><a href="<?php echo $glogin_url;?>">Google</a></span>
                    
                    
                </button>

                <p class="demarcation-or">or</p>
                <div class="fb-login-button" data-size="large" data-button-type="continue_with" data-auto-logout-link="false" data-use-continue-as="true"></div>
            </div>
        </div>
    </main>


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

   }
);
}
 }
</script>
</body>

</html>