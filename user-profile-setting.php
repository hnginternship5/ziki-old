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
    <main class="motuns-main-container">
        <section class="motuns-side-bar">
            <h3>
                Homepage
            </h3>
            <ul>
                <li class="list-1">
                    Profile
                </li>
                <li>
                    Themes
                </li>
            </ul>
        </section>
        <section class="motuns-content-container">
            <h2>
                Settings
            </h2>
            <div class="d-flx">
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
                <div class="d-grid">
                    <img src="/assets/img/avatar-2.jpeg" alt="" class="avatar">
                    <button class="upcase">
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
            <div class="d-flx">
                <span class="co-red">
                    Delete my account
                </span>
                <button  class="capitalize">
                    Save changes
                </button>
            </div>
        </section>
    </main>
</body>
</html>
