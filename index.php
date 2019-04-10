<?php
$title ="Welcome";
include 'header.php';
 ?>
 <?php if (!isset($_SESSION['name']))
{?>


    <div class="container-fluid">
        <div class="row justify-content-between m-4">
            <img class="img-fluid logo" src="assets/img/logo.png">
            <button type="button" class="btn btn-primary align-self-end px-5" data-toggle="modal" data-target="#exampleModalCenter">
                Login
            </button>
        </div>
  <?php  }else {
      }
       ?>

        <div class="container justify-content-center">
            <div class="col-xs-5">

                <!-- <div class=""> -->

                <div class="row mx-0 mt-md-4 blog-item-wrapper first-child">
                    <div class="d-flex flex-row px-0 blog-item">
                        <div class="blog-item-author-avatar-wrapper">
                            <img class="blog-item-author-avatar" src="assets/img/naomi.png">
                        </div>
                        <div class="blog-item-main d-flex flex-row">
                            <div class="blog-item-img-wrapper">
                                <img class="blog-item-img" src="assets/img/wall.jpg">
                            </div>
                            <div class="d-flex flex-column blog-item-main-content">
                                <div class="d-flex flex-row justify-content-between">
                                    <h2 class="blog-item-header text-left">This is my first Post</h2>

                                </div>
                                <h6 class="blog-item-author text-left">Oluwa Trumpeter </h6>
                                <p class="blog-item-content text-left">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dgiat nuor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dgiat nulla pariatur ....</p>
                                <div class="row d-flex flex-row align-items-center justify-content-between mx-0">
                                    <div class="d-flex flex-row align-items-center">
                                        <div class="blog-item-tag-wrapper">
                                            <p class="blog-item-tag text-center">Javascript</p>
                                        </div>
                                        <div class="blog-item-tag-wrapper">
                                            <p class="blog-item-tag text-center">Tech</p>
                                        </div>
                                        <div class="blog-item-tag-wrapper">
                                            <p class="blog-item-tag text-center">Hotels</p>
                                        </div>
                                        <a href="/auth.php">
                                            <p class="blog-item-more_action ">Read More</p>
                                        </a>
                                    </div>

                                    <div class="d-flex flex-row align-items-center">
                                        <a href="/auth.php">
                                        <img class="blog-item-action" src="assets/img/comment.svg">
					</a>
                                    </div>
                                </div>
                                <p class="blog-item-date">3rd, April 2019 </p>
                            </div>
                        </div>
                    </div>

                </div>


                <div class="row mx-0 blog-item-wrapper">
                    <div class="d-flex flex-row px-0 blog-item">
                        <div class="blog-item-author-avatar-wrapper">
                            <img class="blog-item-author-avatar" src="assets/img/naomi.png">
                        </div>
                        <div class="blog-item-main d-flex flex-row">
                            <div class="blog-item-img-wrapper">
                                <img class="blog-item-img" src="assets/img/image-1.png">
                            </div>
                            <div class="d-flex flex-column blog-item-main-content">
                                <div class="d-flex flex-row justify-content-between">
                                    <h2 class="blog-item-header text-left">C.Ronaldo vs Messi</h2>
                                </div>
                                <h6 class="blog-item-author text-left">Oluwa Trumpeter </h6>
                                <p class="blog-item-content text-left">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dgiat nuor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dgiat nulla pariatur ....</p>
                                <div class="row d-flex flex-row align-items-center justify-content-between mx-0">
                                    <div class="d-flex flex-row align-items-center">
                                        <div class="blog-item-tag-wrapper">
                                            <p class="blog-item-tag text-center">Javascript</p>
                                        </div>
                                        <div class="blog-item-tag-wrapper">
                                            <p class="blog-item-tag text-center">Tech</p>
                                        </div>
                                        <div class="blog-item-tag-wrapper">
                                            <p class="blog-item-tag text-center">Hotels</p>
                                        </div>
                                        <a href="/auth.php">
                                            <p class="blog-item-more_action ">Read More</p>
                                        </a>
                                    </div>
                                    <div class="d-flex flex-row align-items-center">
                                        <a href="/auth.php">
                                        <img class="blog-item-action" src="assets/img/comment.svg">
					</a>
                                    </div>
                                </div>
                                <p class="blog-item-date">3rd, April 2019 </p>
                            </div>
                        </div>
                    </div>

                </div>


                <div class="row mx-0 blog-item-wrapper">
                    <div class="d-flex flex-row px-0 blog-item">
                        <div class="blog-item-author-avatar-wrapper">
                            <img class="blog-item-author-avatar" src="assets/img/avatar-2.jpeg">
                        </div>
                        <div class="blog-item-main d-flex flex-row">
                            <div class="blog-item-img-wrapper">
                                <img class="blog-item-img" src="assets/img/image-1.png">
                            </div>
                            <div class="d-flex flex-column blog-item-main-content">
                                <div class="d-flex flex-row justify-content-between">
                                    <h2 class="blog-item-header text-left">The effect of culture on design trends</h2>
                                </div>
                                <h6 class="blog-item-author text-left">Oluwa Trumpeter </h6>
                                <p class="blog-item-content text-left">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dgiat nuor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dgiat nulla pariatur ....</p>
                                <div class="row d-flex flex-row align-items-center justify-content-between mx-0">
                                    <div class="d-flex flex-row align-items-center">
                                        <div class="blog-item-tag-wrapper">
                                            <p class="blog-item-tag text-center">Javascript</p>
                                        </div>
                                        <div class="blog-item-tag-wrapper">
                                            <p class="blog-item-tag text-center">Tech</p>
                                        </div>
                                        <div class="blog-item-tag-wrapper">
                                            <p class="blog-item-tag text-center">Hotels</p>
                                        </div>
                                        <a href="/auth.php">
                                            <p class="blog-item-more_action ">Read More</p>
                                        </a>
                                    </div>

                                    <div class="d-flex flex-row align-items-center">
                                        <a href="/auth.php">
                                        <img class="blog-item-action" src="assets/img/comment.svg">
					</a>
                                    </div>
                                </div>
                                <p class="blog-item-date">3rd, April 2019 </p>
                            </div>
                        </div>
                    </div>

                </div>


                <div class="row mx-0 blog-item-wrapper">
                    <div class="d-flex flex-row px-0 blog-item">
                        <div class="blog-item-author-avatar-wrapper">
                            <img class="blog-item-author-avatar" src="assets/img/avatar-2.jpeg">
                        </div>
                        <div class="blog-item-main d-flex flex-row">
                            <div class="blog-item-img-wrapper">
                                <img class="blog-item-img" src="assets/img/image-1.png">
                            </div>
                            <div class="d-flex flex-column blog-item-main-content">
                                <div class="d-flex flex-row justify-content-between">
                                    <h2 class="blog-item-header text-left">This is my first Post</h2>

                                </div>
                                <h6 class="blog-item-author text-left">Oluwa Trumpeter </h6>
                                <p class="blog-item-content text-left">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dgiat nuor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dgiat nulla pariatur ....</p>
                                <div class="row d-flex flex-row align-items-center justify-content-between mx-0">
                                    <div class="d-flex flex-row align-items-center">
                                        <div class="blog-item-tag-wrapper">
                                            <p class="blog-item-tag text-center">Javascript</p>
                                        </div>
                                        <div class="blog-item-tag-wrapper">
                                            <p class="blog-item-tag text-center">Tech</p>
                                        </div>
                                        <div class="blog-item-tag-wrapper">
                                            <p class="blog-item-tag text-center">Hotels</p>
                                        </div>
                                        <a href="/auth.php">
                                            <p class="blog-item-more_action ">Read More</p>
                                        </a>
                                    </div>

                                    <div class="d-flex flex-row align-items-center">
                                        <a href="/auth.php">
                                        <img class="blog-item-action" src="assets/img/comment.svg">
					</a>
                                    </div>
                                </div>
                                <p class="blog-item-date">3rd, April 2019 </p>
                            </div>
                        </div>
                    </div>

                </div>


                <div class="row mx-0 blog-item-wrapper">
                    <div class="d-flex flex-row px-0 blog-item">
                        <div class="blog-item-author-avatar-wrapper">
                            <img class="blog-item-author-avatar" src="assets/img/avatar-2.jpeg">
                        </div>
                        <div class="blog-item-main d-flex flex-row">
                            <div class="blog-item-img-wrapper">
                                <img class="blog-item-img" src="assets/img/image-1.png">
                            </div>
                            <div class="d-flex flex-column blog-item-main-content">
                                <div class="d-flex flex-row justify-content-between">
                                    <h2 class="blog-item-header text-left">This is my first Post</h2>
                                </div>
                                <h6 class="blog-item-author text-left">Oluwa Trumpeter </h6>
                                <p class="blog-item-content text-left">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dgiat nuor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dgiat nulla pariatur ....</p>
                                <div class="row d-flex flex-row align-items-center justify-content-between mx-0">
                                    <div class="d-flex flex-row align-items-center">
                                        <div class="blog-item-tag-wrapper">
                                            <p class="blog-item-tag text-center">Javascript</p>
                                        </div>
                                        <div class="blog-item-tag-wrapper">
                                            <p class="blog-item-tag text-center">Tech</p>
                                        </div>
                                        <div class="blog-item-tag-wrapper">
                                            <p class="blog-item-tag text-center">Hotels</p>
                                        </div>
                                        <a href="/auth.php">
                                            <p class="blog-item-more_action ">Read More</p>
                                        </a>
                                    </div>

                                    <div class="d-flex flex-row align-items-center">
                                        <a href="/auth.php">
                                        <img class="blog-item-action" src="assets/img/comment.svg">
					</a>
                                    </div>
                                </div>
                                <p class="blog-item-date">3rd, April 2019 </p>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="row mx-0 blog-item-wrapper">
                    <div class="d-flex flex-row px-0 blog-item">
                        <div class="blog-item-author-avatar-wrapper">
                            <img class="blog-item-author-avatar" src="assets/img/avatar-2.jpeg">
                        </div>
                        <div class="blog-item-main d-flex flex-row">
                            <div class="blog-item-img-wrapper">
                                <img class="blog-item-img" src="assets/img/image-1.png">
                            </div>
                            <div class="d-flex flex-column blog-item-main-content">
                                <div class="d-flex flex-row justify-content-between">
                                    <h2 class="blog-item-header text-left">This is my first Post</h2>
                                </div>
                                <h6 class="blog-item-author text-left">Oluwa Trumpeter </h6>
                                <p class="blog-item-content text-left">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dgiat nuor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dgiat nulla pariatur ....</p>
                                <div class="row d-flex flex-row align-items-center justify-content-between mx-0">
                                    <div class="d-flex flex-row align-items-center">
                                        <div class="blog-item-tag-wrapper">
                                            <p class="blog-item-tag text-center">Javascript</p>
                                        </div>
                                        <div class="blog-item-tag-wrapper">
                                            <p class="blog-item-tag text-center">Tech</p>
                                        </div>
                                        <div class="blog-item-tag-wrapper">
                                            <p class="blog-item-tag text-center">Hotels</p>
                                        </div>
                                        <a href="/auth.php">
                                            <p class="blog-item-more_action ">Read More</p>
                                        </a>
                                    </div>

                                    <div class="d-flex flex-row align-items-center">
                                        <a href="/auth.php">
                                        <img class="blog-item-action" src="assets/img/comment.svg">
					</a>
                                    </div>
                                </div>
                                <p class="blog-item-date">3rd, April 2019 </p>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- </div> -->
            </div>
        </div>
    </div>

    </div>

    <script>
        const toggleThemeBtn = document.querySelector('.toggle-theme');
        toggleThemeBtn.addEventListener('click', e => document.querySelector('body').classList.toggle('dark'));
    </script>

    <?php include'auth.php' ;?>
    
</body>

</html>
