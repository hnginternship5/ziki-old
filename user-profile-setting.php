<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="theme-color" content="#ffffff">
    <title>Profile Setting</title>
    <link rel="shortcut icon" href="favicon.png" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Hind:400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/profile-user-setting.css">
</head>
<body>
    <main class="motuns-main-containe">
        <section class="motuns-side-ba">
            <h3>
                Homepage
            </h3>
            <ul>
                <li class="list">
                    Profile
                </li>
                <li>
                    Themes
                </li>
            </ul>
        </section>
        <section class="motuns-content-containe">
            <h2>
                Settings
            </h2>
            <div class="d-fl">
                <form action="/action_page.php">
                    First name:<br>
                    <input type="text" name="firstname" value="Dragon">
                    <br>
                    Last name:<br>
                    <input type="text" name="lastname" value="Blade">
                    <br>
                    Email Address:<br>
                    <input type="text" name="firstname">
                    <br>
                    Change passord:<br>
                    <input type="text" name="lastname">
                    
                </form> 
                <div class="d-grd">
                    <img src="/assets/img/avatar-2.jpeg" alt="" class="avatar">
                    <button class="up-case">
                        update
                    </button>
                    <p>
                        Language
                        <span class="en">
                            en
                        </span>
                    </p>
                </div>
            </div>
            <div class="d-fl">
                <span class="co.red">
                    Delete my account
                </span>
                <button  class="capital">
                    Save changes
                </button>
            </div>
        </section>
    </main>
</body>
</html>
