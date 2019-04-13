<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="favicon.png" type="image/x-icon">
    <title>New Post</title>

  <!-- Include external CSS. -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.25.0/codemirror.min.css">
 
  <!-- Include Editor style. -->
  <link href="https://cdn.jsdelivr.net/npm/froala-editor@2.5.1/css/froala_editor.pkgd.min.css" rel="stylesheet" type="text/css" />
  <link href="https://cdn.jsdelivr.net/npm/froala-editor@2.5.1/css/froala_style.min.css" rel="stylesheet" type="text/css" />
    <!-- main page styling  toggle light and dark css here-->
    <!-- it is important the css is positioned here-->
  <link rel="stylesheet" href="./assets/css/editor.css">
</head>
 
<body>
  <!-- Include external JS libs. -->
  <script type="text/javascript" src="assets/js/jquery-331.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.25.0/codemirror.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.25.0/mode/xml/xml.min.js"></script>
 
  <!-- Include Editor JS files. -->
  <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/froala-editor@2.5.1/js/froala_editor.pkgd.min.js"></script>
  <div class="main-content">
    <form method = "POST" action = "my_draft.php" enctype="multipart/form-data">
      <input name="title" class="post-title" type="text" placeholder="post title">
      <div id="froala-editor" name="body"></div>
      <div class="image-upload" style="float:left; margin: 10px 0 0 0;">
        <label for="file-input">
          <svg style="width:50px; height:50px;" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px" viewBox="0 0 60 46" style="enable-background:new 0 0 60 46;" xml:space="preserve" width="512" height="512">
            <g id="_x33_-Picture">
              <path d="M53.335,46H6.725c-3.691,0-6.695-3.003-6.695-6.695V6.695C0.03,3.004,3.033,0,6.725,0h46.61   c3.692,0,6.695,3.003,6.695,6.695v32.61C60.03,42.997,57.027,46,53.335,46z M6.725,2C4.137,2,2.03,4.106,2.03,6.695v32.61   C2.03,41.894,4.136,44,6.725,44h46.61c2.589,0,4.695-2.106,4.695-4.695V6.695C58.03,4.106,55.924,2,53.335,2L6.725,2L6.725,2z"/>
              <path d="M39.03,22c-3.308,0-6-2.691-6-6s2.692-6,6-6c3.309,0,6,2.691,6,6S42.338,22,39.03,22z M39.03,12c-2.206,0-4,1.794-4,4   s1.794,4,4,4s4-1.794,4-4S41.235,12,39.03,12z"/>
              <path d="M53.335,46H30.474c-0.394,0-0.751-0.231-0.912-0.59s-0.097-0.78,0.165-1.074l15.556-17.5c0.379-0.427,1.115-0.427,1.495,0   l12.521,14.086c0.259,0.292,0.325,0.708,0.168,1.066C58.4,44.425,55.993,46,53.335,46z M32.701,44h20.634   c1.654,0,3.17-0.871,4.013-2.262L46.03,29.005L32.701,44z"/>
              <path d="M30.474,46H6.724c-3.691,0-6.695-3.003-6.695-6.695v-6.18c0-0.245,0.09-0.481,0.253-0.665l17-19.125   c0.379-0.427,1.115-0.427,1.495,0l20,22.5c0.337,0.379,0.337,0.95,0,1.329l-7.556,8.5C31.032,45.878,30.76,46,30.474,46z    M2.03,33.505v5.8C2.03,41.894,4.136,44,6.725,44h23.301l6.667-7.5L18.03,15.505L2.03,33.505z"/>
            </g>
          </svg>
        </label>
        <input id="file-input" type="file" name="image" style="visibility:hidden; width:0; height:0;" />
      </div>
        <div class="action-btns">
          <a href="draft.php" style="text-decoration:none; color:#fff;"><button class="cancel-btn" type="cancel">Cancel</a>
          <button class="submit-btn" type="submit">Publish</button>
        </div>

      <hr>

      <div id="preview">

      </div>
    </form>

  </div>


 
  <!-- Initialize the editor. -->
  <script>
    window.onload = function (){
      $(function() {
        $('div#froala-editor').froalaEditor({
          // Set the file upload URL.
          imageUploadURL: '/upload_image.php',
          imageUploadParams: {
            id: 'my_editor'
          }
        }).on('froalaEditor.contentChanged', function (e, editor) {
          // live preview feature
          $('#preview').html(editor.html.get());
        })
      })
    }
  </script>
</body>
</html>
