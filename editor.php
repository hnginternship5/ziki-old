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
    <form>
      <input class="post-title" type="text" placeholder="post title">
      <div id="froala-editor" name="content"></div>
        <div class="action-btns">
          <button class="cancel-btn" type="cancel">Cancel</button>
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
