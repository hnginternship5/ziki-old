<?php
$title ="Welcome";
include 'header.php';
 ?>
 <?php if (!isset($_SESSION['name']))
{?>


    <div class="container-fluid">
        <div class="row justify-content-between m-4">
            <img class="img-fluid logo" src="assets/img/zikilogo.png">
            <button type="button" class="btn btn-primary align-self-end px-5" data-toggle="modal" data-target="#exampleModalCenter">
                Login
            </button>
        </div>
  <?php  }else {
      }
       ?>

        <div class="container justify-content-center">
            <div class="col-md-12 col-12 posts-area">
                <!-- Post feeds start here -->
                <div class="row posts">
                    <div class="col-md-12 col-12">
                        <div class="row">
                            <div class="col-md-1">
                                <img class="blog-item-author-avatar" src="assets/img/avatar-2.jpeg">
                            </div>
                            <div class="col-md-11 col-12">
                                <div class="row blog-main-item">
                                    <div class="col-md-3 col-12">
                                        <div class="row">
                                            <img src="assets/img/wall.jpg" class="img-fluid post-img" alt="Profile Image">
                                        </div>
                                    </div>
                                    <div class="col-md-9 col-12">
                                        <div class="row post-heading">
                                            <div class="col-md-8 col-10">
                                                <h4>UI/UX Concept</h4>
                                            </div>
                                            <div class="col-md-4 col-2 text-right">
                                                <!-- When user stars a post, change class to
                                                    the one below-->
                                                <!-- <i class="fas fa-star"></i> -->
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12 col-12">
                                                <p class="post-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dgiat nuor sit amet, consectetur adipiscing elit, sed
                                                <span class="read-more">....read more</span>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="row post-footer">
                                            <div class="col-md-8 col-7">
                                                <span class="badge badge-primary">Tech</span>
                                                <span class="badge badge-primary">AI</span>
                                                <span class="badge badge-primary">Academic</span>
                                                <div class="col-md-12">
                                                    <div class="row">
                                                        <p class="post-date">April 3, 2016</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-5 text-right">
                                                <a href="#"><i class="far fa-comment-alt post-icon chat-icon"></i></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="col-md-1"></div> -->
                </div>

                <div class="row posts">
                    <div class="col-md-12 col-12">
                        <div class="row">
                            <div class="col-md-1">
                                <img class="blog-item-author-avatar" src="assets/img/avatar-2.jpeg">
                            </div>
                            <div class="col-md-11 col-12">
                                <div class="row blog-main-item">
                                    <div class="col-md-3 col-12">
                                        <div class="row">
                                            <img src="assets/img/wall.jpg" class="img-fluid post-img" alt="Profile Image">
                                        </div>
                                    </div>
                                    <div class="col-md-9 col-12">
                                        <div class="row post-heading">
                                            <div class="col-md-8 col-10">
                                                <h4>UI/UX Concept</h4>
                                            </div>
                                            <div class="col-md-4 col-2 text-right">
                                                <!-- When user stars a post, change class to
                                                    the one below-->
                                                <!-- <i class="fas fa-star"></i> -->
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12 col-12">
                                                <p class="post-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dgiat nuor sit amet, consectetur adipiscing elit, sed
                                                <span class="read-more">....read more</span>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="row post-footer">
                                            <div class="col-md-8 col-7">
                                                <span class="badge badge-primary">Tech</span>
                                                <span class="badge badge-primary">AI</span>
                                                <span class="badge badge-primary">Academic</span>
                                                <div class="col-md-12">
                                                    <div class="row">
                                                        <p class="post-date">April 3, 2016</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-5 text-right">
                                                <a href="#"><i class="far fa-comment-alt post-icon chat-icon"></i></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="col-md-1"></div> -->
                </div>

                <div class="row posts">
                    <div class="col-md-12 col-12">
                        <div class="row">
                            <div class="col-md-1">
                                <img class="blog-item-author-avatar" src="assets/img/avatar-2.jpeg">
                            </div>
                            <div class="col-md-11 col-12">
                                <div class="row blog-main-item">
                                    <div class="col-md-3 col-12">
                                        <div class="row">
                                            <img src="assets/img/wall.jpg" class="img-fluid post-img" alt="Profile Image">
                                        </div>
                                    </div>
                                    <div class="col-md-9 col-12">
                                        <div class="row post-heading">
                                            <div class="col-md-8 col-10">
                                                <h4>UI/UX Concept</h4>
                                            </div>
                                            <div class="col-md-4 col-2 text-right">
                                                <!-- When user stars a post, change class to
                                                    the one below-->
                                                <!-- <i class="fas fa-star"></i> -->
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12 col-12">
                                                <p class="post-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dgiat nuor sit amet, consectetur adipiscing elit, sed
                                                <span class="read-more">....read more</span>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="row post-footer">
                                            <div class="col-md-8 col-7">
                                                <span class="badge badge-primary">Tech</span>
                                                <span class="badge badge-primary">AI</span>
                                                <span class="badge badge-primary">Academic</span>
                                                <div class="col-md-12">
                                                    <div class="row">
                                                        <p class="post-date">April 3, 2016</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-5 text-right">
                                                <a href="#"><i class="far fa-comment-alt post-icon chat-icon"></i></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="col-md-1"></div> -->
                </div>

                <div class="row posts">
                    <div class="col-md-12 col-12">
                        <div class="row">
                            <div class="col-md-1">
                                <img class="blog-item-author-avatar" src="assets/img/avatar-2.jpeg">
                            </div>
                            <div class="col-md-11 col-12">
                                <div class="row blog-main-item">
                                    <div class="col-md-3 col-12">
                                        <div class="row">
                                            <img src="assets/img/wall.jpg" class="img-fluid post-img" alt="Profile Image">
                                        </div>
                                    </div>
                                    <div class="col-md-9 col-12">
                                        <div class="row post-heading">
                                            <div class="col-md-8 col-10">
                                                <h4>UI/UX Concept</h4>
                                            </div>
                                            <div class="col-md-4 col-2 text-right">
                                                <!-- When user stars a post, change class to
                                                    the one below-->
                                                <!-- <i class="fas fa-star"></i> -->
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12 col-12">
                                                <p class="post-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dgiat nuor sit amet, consectetur adipiscing elit, sed
                                                <span class="read-more">....read more</span>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="row post-footer">
                                            <div class="col-md-8 col-7">
                                                <span class="badge badge-primary">Tech</span>
                                                <span class="badge badge-primary">AI</span>
                                                <span class="badge badge-primary">Academic</span>
                                                <div class="col-md-12">
                                                    <div class="row">
                                                        <p class="post-date">April 3, 2016</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-5 text-right">
                                                <a href="#"><i class="far fa-comment-alt post-icon chat-icon"></i></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="col-md-1"></div> -->
                </div>


                <div class="row posts">
                    <div class="col-md-12 col-12">
                        <div class="row">
                            <div class="col-md-1">
                                <img class="blog-item-author-avatar" src="assets/img/avatar-2.jpeg">
                            </div>
                            <div class="col-md-11 col-12">
                                <div class="row blog-main-item">
                                    <div class="col-md-3 col-12">
                                        <div class="row">
                                            <img src="assets/img/wall.jpg" class="img-fluid post-img" alt="Profile Image">
                                        </div>
                                    </div>
                                    <div class="col-md-9 col-12">
                                        <div class="row post-heading">
                                            <div class="col-md-8 col-10">
                                                <h4>UI/UX Concept</h4>
                                            </div>
                                            <div class="col-md-4 col-2 text-right">
                                                <!-- When user stars a post, change class to
                                                    the one below-->
                                                <!-- <i class="fas fa-star"></i> -->
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12 col-12">
                                                <p class="post-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dgiat nuor sit amet, consectetur adipiscing elit, sed
                                                <span class="read-more">....read more</span>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="row post-footer">
                                            <div class="col-md-8 col-7">
                                                <span class="badge badge-primary">Tech</span>
                                                <span class="badge badge-primary">AI</span>
                                                <span class="badge badge-primary">Academic</span>
                                                <div class="col-md-12">
                                                    <div class="row">
                                                        <p class="post-date">April 3, 2016</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-5 text-right">
                                                <a href="#"><i class="far fa-comment-alt post-icon chat-icon"></i></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="col-md-1"></div> -->
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
