<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Post page</title>
</head>

<body>
    <h1> Add Post</h1>
    <main>

        <form method="post" action="post.php" enctype="multipart/form-data">
            <label for="Title"></label>
            <input type="text" placeholder="Post Title" name="title" required>
            </br>
            <label for="Author"></label>
            <input type="text" placeholder="Author" name="author" required>
            </br>
            <label for="Post"></label>
            <textarea name="post"></textarea>
            </br>
            <input type="submit" class="button" name="submit">

        </form>

    </main>
    <script src="https://cloud.tinymce.com/5/tinymce.min.js?apiKey=yf2ew3qagtmjjleadr668l8choppcsnxno3lflkpbi98hj4t"></script>
    <script>
        tinymce.init({
            selector: 'textarea',
            plugins: 'image link lists checklist media code',
            toolbar: 'link image media undo redo code',
            toolbar_drawer: 'sliding',
            menubar: "insert",
            images_upload_url: 'imageProcessor.php',
            images_upload_credentials: true
            // images_upload_handler: function(blobInfo, success, failure) {
            //     success('http://co.co')
            // //     var xhr, formData;
            //     xhr = new XMLHttpRequest();
            //     xhr.withCredentials = false;
            //     xhr.open('POST', 'imageProcessor.php');
            //     xhr.onload = function() {
            //         var json;

            //         if (xhr.status != 200) {
            //             failure('HTTP Error: ' + xhr.status);
            //             return;
            //         }
            //         json = JSON.parse(xhr.responseText);

            //         if (!json || typeof json.location != 'string') {
            //             failure('Invalid JSON: ' + xhr.responseText);
            //             return;
            //         }
            //         success(json.location);
            //     };
            //     formData = new FormData();
            //     formData.append('file', blobInfo.blob(), fileName(blobInfo));
            //     xhr.send(formData);
            // }
        });
    </script>
</body>

</html>