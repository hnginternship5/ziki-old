<?php
require_once './Authentication/auth/googleinit.php';
require_once './Authentication/auth/fbook.php';
?>
    <!-- Button trigger modal -->
    <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
      Launch demo modal
    </button>
     -->
    <!-- Modal -->
    <div class="modal fade bd-example-modal-lg" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <!-- Modal header -->
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle"></h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>

          <!-- Modal Body here -->
          <div class="modal-body">
            <main class="">
              <div class="">
                  <div class="auth-content">
                      <h1>Hello!</h1>
                      <p>Access is just one click away</p>

                      <div class="auth-btns">
                          <a href="<?php echo $glogin_url;?>">
                          <button class="auth-google-btn">
                              <svg width="14" height="15" viewBox="0 0 14 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                  <g clip-path="url(#clip0)">
                                  <path d="M3.1027 9.06465L2.61538 11.0138L0.834231 11.0542C0.30193 9.99638 0 8.78609 0 7.49996C0 6.25628 0.282297 5.08347 0.782688 4.05078H0.78307L2.36879 4.36227L3.06343 6.05105C2.91804 6.50519 2.8388 6.99269 2.8388 7.49996C2.83886 8.05051 2.93193 8.578 3.1027 9.06465Z" fill="#FBBB00"/>
                                  <path d="M13.8776 6.09888C13.958 6.55257 13.9999 7.02111 13.9999 7.49997C13.9999 8.03692 13.9472 8.56069 13.8468 9.06592C13.5061 10.7851 12.6157 12.2864 11.3822 13.3487L11.3819 13.3483L9.38457 13.2391L9.10189 11.3485C9.92034 10.8342 10.56 10.0294 10.8969 9.06592H7.15381V6.09888H10.9515H13.8776Z" fill="#518EF8"/>
                                  <path d="M11.3822 13.3483C10.1826 14.3814 8.65908 15 7.00024 15C4.33447 15 2.01679 13.4036 0.834473 11.0542L3.10294 9.0647C3.69408 10.7551 5.21601 11.9584 7.00024 11.9584C7.76715 11.9584 8.48564 11.7363 9.10216 11.3485L11.3822 13.3483Z" fill="#28B446"/>
                                  <path d="M11.4681 1.72664L9.20041 3.71578C8.56234 3.28846 7.80809 3.0416 7.00003 3.0416C5.17541 3.0416 3.62502 4.30011 3.06348 6.05109L0.783098 4.05082H0.782715C1.94772 1.64423 4.29464 0 7.00003 0C8.69849 0 10.2558 0.648223 11.4681 1.72664Z" fill="#F14336"/>
                                  </g>
                                  <defs>
                                  <clipPath id="clip0">
                                  <rect width="14" height="15" fill="white"/>
                                  </clipPath>
                                  </defs>
                              </svg>
                              Google
                          </button>
                          </a>

                          <p class="auth-demarcation-or">or</p>

                          <a class="f" href="<?php echo $login_url;?>">
                          <button class="auth-facebook-btn">
                              <svg width="6" height="12" viewBox="0 0 6 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                  <path d="M0.191598 6.3912H1.49358V11.8065C1.49358 11.9134 1.57932 12 1.68516 12H3.89272C3.99855 12 4.0843 11.9134 4.0843 11.8065V6.41672H5.58105C5.67837 6.41672 5.76026 6.34294 5.77138 6.24527L5.9987 4.25166C6.00494 4.19681 5.98775 4.14188 5.95142 4.10072C5.91507 4.05954 5.86303 4.03596 5.80842 4.03596H4.08439V2.78625C4.08439 2.40954 4.28515 2.2185 4.6812 2.2185C4.73764 2.2185 5.80842 2.2185 5.80842 2.2185C5.91426 2.2185 6 2.13183 6 2.02495V0.194977C6 0.0880547 5.91426 0.00142969 5.80842 0.00142969H4.25492C4.24397 0.000890625 4.21964 0 4.18377 0C3.91423 0 2.9773 0.0534609 2.23719 0.741328C1.41716 1.50361 1.53116 2.41629 1.5584 2.57454V4.03591H0.191575C0.0857425 4.03591 0 4.12254 0 4.22946V6.19763C2.31987e-05 6.30452 0.0857656 6.3912 0.191598 6.3912Z" fill="white"/>
                              </svg>
                               Facebook
                          </button>
                          </a>
                          <p class="auth-demarcation-or">or</p>
<a href="login.php">Log in Locally</a>
                      </div>
                  </div>
              </div>
            </main>
          </div>

          <!-- Modal Footer -->
          <div class="modal-footer">
            <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button> -->
          </div>
        </div>
      </div>
    </div>


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
