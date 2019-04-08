<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="favicon.png" type="image/x-icon">
  <!-- internal styling just in case this page will be imported as a module -->
  <style>
    *{
      box-sizing: border-box;
    }
    body{
      margin: 0;
      padding: 0;
      font-size: 1.5rem;
    }
    .main-content{
      width: 85%;
      margin: auto;
    }
    .submit-btn{
      cursor: pointer;
      color: #ffffff;
      background: #3667E7;
      border: 1px solid #3667E7;
      padding: 0.8rem 1rem;
      border-radius: 4px;
      font-size: 1.2rem;
      margin-left: 10px;
      margin-top: 20px;
    }
    .cancel-btn{
      cursor: pointer;
      color: #F14336;
      background: transparent;
      border: 1px solid #F14336;
      padding: 0.8rem 1rem;
      border-radius: 4px;
      font-size: 1.2rem;
      margin-top: 20px;
    }
    .action-btns{
      display: flex;
      justify-content: flex-end;
    }
    /* toggle dark mode class for body with JS */
    .dark{
      color: #ffffff;
      background: #04274C
    }

  </style>
  <!-- Include external CSS. -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.25.0/codemirror.min.css">
 
  <!-- Include Editor style. -->
  <link href="https://cdn.jsdelivr.net/npm/froala-editor@2.5.1/css/froala_editor.pkgd.min.css" rel="stylesheet" type="text/css" />
  <link href="https://cdn.jsdelivr.net/npm/froala-editor@2.5.1/css/froala_style.min.css" rel="stylesheet" type="text/css" />
</head>
 
<body class="">
  <!-- Include external JS libs. -->
  <script type="text/javascript" src="assets/js/jquery-331.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.25.0/codemirror.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.25.0/mode/xml/xml.min.js"></script>
 
  <!-- Include Editor JS files. -->
  <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/froala-editor@2.5.1/js/froala_editor.pkgd.min.js"></script>
  <div class="main-content">
    <h2>New Post</h2>
    <form>
      <textarea id="froala-editor" name="content"></textarea>
        <div class="action-btns">
          <button class="cancel-btn" type="cancel">Cancel</button>
          <button class="submit-btn" type="submit">Publish</button>
        </div>
      <br>

      <hr>

      <div id="preview">

      </div>
    </form>

  </div>


 
  <!-- Initialize the editor. -->
  <script>
    window.onload = function (){
      $(function() {
        $('#froala-editor').froalaEditor({
          // Set the file upload URL.
          imageUploadURL: '/upload_image.php',
          imageUploadParams: {
            id: 'my_editor'
          }
        }).on('froalaEditor.contentChanged', function (e, editor) {
          $('#preview').html(editor.html.get());
        })
      })
    }
  </script>
</body>
</html>
