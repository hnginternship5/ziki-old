<?php
$title ="Welcome";
include 'header.php';

require_once "config.php";
$link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://" . $_SERVER['HTTP_HOST'] .  $_SERVER['REQUEST_URI'];
$site = (isset($site_url)) ? $site_url : die("please provide your site url in the config.php file.") ;
$site_address = ($link == $site) ? $site : die("Your url is not the same as the url installed in the config.php file");

 ?>

<style>
    .post-date {
        color: #515151;
    }

    @media only screen and (min-width: 750px) and (max-width: 1300px) {
        .blog-item-author-avatar {
            position: relative;
            left: -3em;
        }
    }

    @media only screen and (max-width: 500px) {
        .blog-item-author-avatar {
            z-index: 1;
            position: relative;
            top: -0.5em;
        }
    }

</style>

<div class="container-fluid">
    <div class="row justify-content-between m-4">
        <a href="/timeline.php">
            <img class="img-fluid logo" src="assets/img/zikilogo.png">
        </a>
        <button type="button" class="btn btn-primary align-self-end px-5" data-toggle="modal"
            data-target="#exampleModalCenter">
            Login
        </button>
    </div>
    <div class="container justify-content-center">
        <div class="col-md-12 col-12 posts-area">
            <!-- Post feeds start here -->

        </div>
    </div>
    <script>
        const $ = document.querySelector.bind(document)

        function readTextFile(file, div) {
            var rawFile = new XMLHttpRequest();
            rawFile.open("GET", file, false);
            rawFile.onreadystatechange = function () {
                if (rawFile.readyState === 4) {
                    if (rawFile.status === 200 || rawFile.status == 0) {
                        var allText = rawFile.responseText;
                        $(`.markedcontent${div}`).innerHTML = allText;
                    }
                }
            }
            rawFile.send(null);
        }
        const url = "<?php echo "{$site_url}/post.php" ?>";
        fetch(url)
            .then((resp) => resp.json())
            .then(function (data) {
                console.log(data)
                let res = data.result;
                for (let i = 0; i < res.length; i++) {
                    let card = res[i];
                    console.log(card);
                    let post_card = `
                <div class="row posts pb-3">
                            <div class="col-md-1">
                                <img class="blog-item-author-avatar" src="${card.author_image}">
                            </div>
                            <div class="col-md-11">
                                <div class="row blog-item-main">
                                    <div class="col-md-3">
                                            <img src="${card.post_image}" class="img-fluid post-img" alt="Profile Image">
                                    </div>

                                    <div class="col-md-9">
                                        <a href="/blog-detail.php">
                                            <div class="markedcontent${i}"></div>
                                        </a>
                                        <div class="row post-footer mt-1">
                                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                                <a href="#">
                                                <span class="badge badge-primary">Tech</span>
                                                    </a>
                                                    <a href="#">
                                                <span class="badge badge-primary">AI</span>
                                                    </a>
                                                    <a href="#">
                                                <span class="badge badge-primary">Academic</span>
					                            	</a>
                                            </div>
                                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 d-flex justify-content-end">
                                                    <a href="/blog.php?id=${card.id}"><i class="far fa-comment-alt post-icon chat-icon"></i></i></a>
                                                </div>
                                        </div>

                                        <div class="row">
                                                        <div class="col-md-12">
                                                        <p class="post-date">${card.post_timestamp}</p>
                                                        </div>
                                                </div>
                                    </div>
                                </div>
                            </div>
                    <!-- <div class="col-md-1"></div> -->
                </div>
                `;
                    $('.posts-area').innerHTML += post_card;
                    readTextFile(card.markdown_url, i);
                }
            })
            .catch(function (error) {
                console.log(error);
            });
        //$('body').style.background = '#ff1212'
    </script>
    <script>
        const toggleThemeBtn = document.querySelector('.toggle-theme');
        toggleThemeBtn.addEventListener('click', e => document.querySelector('body').classList.toggle('dark'));
    </script>

    <?php include'auth.php' ;?>

    </body>

    </html>
