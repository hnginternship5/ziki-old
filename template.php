<!-- mylo carson 2019-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog Task</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="assets/css/template.css">
</head>
<body class="">
    <div class="container-fluid">
      <!-- Leave this button here. It will be removed later -->
      <div><button class="toggle-theme">Click me to toggle theme</button></div>

      <!-- Between this comment line and the one below, add your code -->
      <h1>Heading</h1>
      <p>Content</p>
      <!-- Between this comment line and the one above, add your code -->
    </div>

    <script>
    // DON'T REMOVE THE 2 LINES OF CODE BELOW
    const toggleThemeBtn = document.querySelector('.toggle-theme');
    toggleThemeBtn.addEventListener('click', e => document.querySelector('body').classList.toggle('dark'));
    // DON'T REMOVE THE 2 LINES OF CODE ABOVE
    </script>
</body>
</html>
