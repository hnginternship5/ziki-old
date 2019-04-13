<!-- mylo carson 2019-->
<?php
require_once "config.php";
include 'includes/config.php';
//Print_r($_SESSION);
extract($_SESSION);
if (!isset($_SESSION['name'])) {
      header("Location: {$site_url}");
}
        ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Drafts</title>
    <link rel="shortcut icon" href="favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="assets/css/draft_light.css">
    <!-- Markdown cdn link -->
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.css">
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/medium-editor@latest/dist/css/medium-editor.min.css" type="text/css" media="screen" charset="utf-8">
    <link rel="stylesheet" href="assets/css/theme1.css">
</head>
<body>
    <div class="container-fluid">
        <div class="row">

            <div class="col-md-3 d-flex flex-column align-items-center profile-section">
                <div class="profile-draft">
                    <h1 class="profile-draft">Drafts</h1>
                    <a href ="editor.php"><button type="button" class="btn btn-post">New Draft</button></a>
                </div>
                <div>
                    <h3 class="profile-tag">Tags</h3>

                    <ul class="menu-wrapper d-flex flex-column">
                        <button type="button" class="btn btn-tag">Javascript</button>
                        <button type="button" class="btn btn-tag">Tech</button>
                        <button type="button" class="btn btn-tag">Hotels</button>
                    </ul>
                </div>

            </div>
            <div class="col-md-9">
                <!-- <div class=""> -->

                    <div class = "feeds"></div>

                <!-- </div> -->
            </div>
        </div>

    </div>
</body>
<script src="//cdn.jsdelivr.net/npm/medium-editor@latest/dist/js/medium-editor.min.js"></script>
<script>
    let editor = new MediumEditor('.editable', {
        buttonLabels: 'fontawesome'
    });
</script>
<script>
const $ = document.querySelector.bind(document)
    function readTextFile(file, div)
    {
        var rawFile = new XMLHttpRequest();
        rawFile.open("GET", file, false);
        rawFile.onreadystatechange = function ()
        {
            if(rawFile.readyState === 4)
            {
                if(rawFile.status === 200 || rawFile.status == 0)
                {
                    var allText = rawFile.responseText;
                    $(`.markedcontent${div}`).innerHTML = allText;
                }
            }
        }
        rawFile.send(null);
    }
        const url = "<?php echo "{$site_url}/my_draft.php" ?>";
        fetch(url)
        .then((resp) => resp.json())
        .then(function(data) {
            console.log(data)
            let res = data.result;
            for (let i = 0; i < res.length; i++) {
                let card = res[i];
                console.log(card);
                let post_card = `
                <div class="row mx-0 blog-item-wrapper">
                        <div class="d-flex flex-row px-0 blog-item">

                            <div class="blog-item-main d-flex flex-row">
                                <div class="blog-item-img-wrapper">
                                    <img class="blog-item-img" src="${card.post_image}">
                                </div>
                                <div class="d-flex flex-column blog-item-main-content">
                                    <div class="markedcontent${i}"></div> 
                                    <div class="row d-flex flex-row align-items-center justify-content-between mx-0">
                                        <div class="d-flex flex-row align-items-center">
                                            <div class="blog-item-tag-wrapper">
                                                <button type="button" class="btn btn-tag">Javascript</button>
                                            </div>
                                            <div class="blog-item-tag-wrapper">
                                                <button type="button" class="btn btn-tag">Tech</button>
                                            </div>
                                            <div class="blog-item-tag-wrapper">
                                                <button type="button" class="btn btn-tag">Hotels</button>
                                            </div>

                                        </div>

                                        <div class="d-flex flex-row align-items-center">
                                            <a href="editor.php?id=${card.id}"><i class="far fa-edit"></i></a>
                                            <a href="delete.php?id=${card.id}"><i class="far fa-trash-alt"></i></a>
                                        </div>
                                    </div>
                                    <p class="blog-item-date">${card.post_timestamp}</p>
                                </div>
                            </div>
                        </div>

                    </div>
                `;
                $('.feeds').innerHTML += post_card;
                readTextFile(card.markdown_url, i);
            }
        })
        .catch(function(error) {
            console.log(error);
        });
</script>
</html>
