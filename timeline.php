<?php include 'header.php'; 
if(isset($_SESSION['name'])) {

?>
        <div class="row">
            <img class="header-img" src="assets/img/header.png" >
        </div>

        <div class="row">

            <div class="col-md-3 d-flex flex-column align-items-center profile-section">
                <div class="profile-img-wrapper">
                    <img class="profile-img" src="assets/img/profile.png">
                </div>
                <div class="profile-main">
                    <h3 class="profile-name"><?php echo $name ?> </h3>
                    <p class="profile-technologies"><span><?php echo $email ?></span></p>
                    <p class="profile-motto">I’m kinda weird in a very good way.... I design for survival</p>
                </div>
                <div class="profile-social-wrapper">
                    <a class="profile-social-icon" href="#"><img  src="assets/img/github-logo.svg"></a>
                    <a  class="profile-social-icon" href="#"><img  src="assets/img/dribble.svg"></a>
                    <a  class="profile-social-icon" href="#"><img src="assets/img/rss-symbol.svg"></a>
                </div>

                <div>

                    <ul class="menu-wrapper d-flex flex-column">
                        <a href=""><li class="menu-item text-center">Draft</li></a>
                        <a href="#"><li class="menu-item text-center">My Blogs</li> </a>
                        <a href="#"><li class="menu-item text-center">Insights</li> </a>
                        <a href="user-profile-setting.php"><li class="menu-item text-center">Settings</li> </a>
                        <a href="/logout.php"><li class="menu-item text-center">Logout</li></a>

                    </ul>
                </div>

                <div class="line"></div>

                <div>

                    <ul class="menu-wrapper d-flex flex-column">
                        <a href="#"><li class="menu-item text-center">English (US)</li> </a>
                        <a href="#"><li class="menu-item text-center">Privacy</li> </a>
                        <a href="#"><li class="menu-item text-center">Terms of Use</li> </a>
                        <a href="#"><li class="menu-item text-center">Contact</li> </a>
                        <a href="#"><li class="menu-item text-center">Advertise with us</li> </a>

                    </ul>
                </div>

            </div>
            <div class="col-md-9">

                <!-- <div class=""> -->

                    <div class="row d-flex flex-column post-section">

                        <textarea class="post-input" type="text" name="post-input" placeholder="What’s happening?"></textarea>

                        <div class="row mx-0 d-flex flex-row mt-auto justify-content-between">
                            <div class="post-action-right">
                                <a class="post-action-item" href="#css"><img src="assets/img/text.svg" width="15"></a>
                                <a class="post-action-item" href="#css"><img src="assets/img/italic.svg" width="15"></a>
                                <a class="post-action-item" href="#css"><img src="assets/img/link-in.svg" width="15"></a>
                                <a class="post-action-item" href="#css"><img src="assets/img/underline.svg" width="15"></a>
                                <a class="post-action-item" href="#css"><img src="assets/img/bold.svg" width="10"></a>
                            </div>

                            <div class="post-action-left">
                                <a class="post-action-item" href="#css"><img src="assets/img/attachment.svg" width="15"></a>
                                <a class="post-action-item" href="#css"><img src="assets/img/mic.svg" width="15"></a>
                                <a class="post-action-item" href="#css"><img src="assets/img/link.svg" width="15"></a>
                                <button class="btn publish-btn post-action-item">Publish</button>
                            </div>

                        </div>
                    </div>

                    <div class="row mx-0 d-flex flex-row align-items-center  justify-content-between">
                        <div class="col-md-8 line ml-md-5"></div>
                        <div class="col d-inline-flex mr-md-5 flex-row justify-content-between">
                            <p class="post-filter"><span class="post-filter-title">Sort by:</span> Most Recent Posts</p>
                            <img src="assets/img/caret.svg">
                        </div>
                    </div>

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
                                            <a href="#"><p class="blog-item-more_action ">Read More</p></a>
                                        </div>

                                        <div class="d-flex flex-row align-items-center">
                                            <img class="blog-item-action" src="assets/img/comment.svg">
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
                                            <a href="#"><p class="blog-item-more_action ">Read More</p></a>
                                        </div>

                                        <div class="d-flex flex-row align-items-center">
                                            <img class="blog-item-action" src="assets/img/comment.svg">
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
                                            <a href="#"><p class="blog-item-more_action ">Read More</p></a>
                                        </div>

                                        <div class="d-flex flex-row align-items-center">
                                            <img class="blog-item-action" src="assets/img/comment.svg">
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
                                            <a href="#"><p class="blog-item-more_action ">Read More</p></a>
                                        </div>

                                        <div class="d-flex flex-row align-items-center">
                                            <img class="blog-item-action" src="assets/img/comment.svg">
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
                                            <a href="#"><p class="blog-item-more_action ">Read More</p></a>
                                        </div>

                                        <div class="d-flex flex-row align-items-center">
                                            <img class="blog-item-action" src="assets/img/comment.svg">
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
                                            <a href="#"><p class="blog-item-more_action ">Read More</p></a>
                                        </div>

                                        <div class="d-flex flex-row align-items-center">
                                            <img class="blog-item-action" src="assets/img/comment.svg">
                                        </div>
                                    </div>
                                    <p class="blog-item-date">3rd, April 2019 </p>
                                </div>
                            </div>
                        </div>

                    </div>
                <!-- </div> -->
                <h6 class="text-center" style="margin-top:27px;margin-bottom:27px">Load More<h5>
            </div>
        </div>

        <?php }
else{
    header('Location: auth.php');//redirect to login page, or...

}
include 'footer.php'; ?>
