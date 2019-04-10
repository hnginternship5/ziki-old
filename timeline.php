<?php
$title = "Timeline";
include 'header.php';
 ?>

        <div class="row">
            <!-- Sidebar Starts -->
            <div class="col-sm-3 col-12 side-info p-4">
                <div class="logo-area mb-5 mx-4">
                    <img src="assets/img/zikilogo.png" alt="" class="logo" />
                </div>

                <!-- user profile picture -->
                <div class="profile-pic-area mx-auto mt-5">
                    <img src="assets/img/dp.png" alt="" class="profile-pic" />
                </div>

                <!-- User name, Skills, short bio -->
                <div class="text-center">
                    <h3 class="profile-name">
                        <?php 
                            // echo $name; dear backend dev. just uncomment this 
                            // and remove what echoes below. That's it.
                            echo 'Austin Asoluka';
                        ?>
                    </h3>
                    <h4 class="user-skills">
                        <?php 
                            // echo $email; dear backend dev. just uncomment this 
                            // and remove what echoes below. That's it.
                            echo 'Web | Software Developer';
                        ?>
                    </h4>
                    <p class="profile-motto">Software Engineer at AWS design enthusiast and music lover</p>
                </div>

                <!-- social media links -->
                <div class="sidebar-icons text-center my-3">
                    <i class="fab fa-github social"></i>
                    <i class="fab fa-dribbble social"></i>
                    <i class="fas fa-rss social"></i>
                </div>

                <ul class="nav flex-column p-5 my-5 text-center">
                    <li class="nav-item">
                        <a class="nav-link" href="#">My Blogs</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Insights</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/user-profile-setting.php">Settings</a>
                    </li>
		    <li class="nav-item">
                        <a class="nav-link" href="/logout.php">Logout</a>
                    </li>
                </ul>
            </div>

            <!-- Sidebar Ends -->
            <div class="col-md-9 col-12 posts-area">
                <!-- Post Box Begins -->
               <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="row d-flex flex-column post-section">
                                <textarea class="post-input" type="text" name="post-input" placeholder="What’s happening?"></textarea>

                                <div class="row mx-0 d-flex flex-row mt-auto justify-content-between">
                                    <div class="post-action-right">
                                        <button class="tool fa fa-underline"  onclick="document.execCommand('underline', false, '');"></button>
                                        <button class="tool fa fa-italic" onclick="document.execCommand('italic', false, '');"></button>
                                        <button class="tool fa fa-bold" onclick="document.execCommand('bold', false, '');"></button>
                                        <button class="tool fas fa-cut" onclick="document.execCommand('cut',false,'')"></button>
                                        <button class="tool fas fa-strikethrough" onclick="document.execCommand('strikeThrough',false,'')"></button>
                                        <button class="tool fa fa-trash" onclick="document.execCommand('delete',false,'')"></button>
                                        <button class="tool fab fa-scribd" onclick="document.execCommand('selectAll',false,'')"></button>
                                        <button class="tool fa fa-align-center" onclick="document.execCommand('justifyCenter',false,'')"></button>
                                        <button class="tool fa fa-align-left" onclick="document.execCommand('justifyLeft',false,'')"></button>
                                        <button class="tool fa fa-align-right" onclick="document.execCommand('justifyRight',false,'')"></button>  
                                    </div>

                                    <div class="post-action-left">
                                        <i class="fas fa-paperclip"></i>
                                        <a class="post-action-item" href="#css"><img src="assets/img/mic.svg"></a>
                                        <i class="fas fa-link"></i>
                                        <button class="btn btn-primary post-action-item">Publish</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mx-0 d-flex flex-row align-items-center justify-content-between padd">
                        <div class="col-md-8 line ml-md-5"></div>
                        <div class="col d-inline-flex mr-md-5 flex-row justify-content-between">
                            <p class="post-filter"><span class="post-filter-title">Sort by:</span> Most Recent Posts</p>
                            <img src="assets/img/caret.svg">
                        </div>
                    </div>
                </div>

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
                <!-- Post feed ends here -->

                <!-- post feed ends here -->
                <!-- </div> -->

            </div>

        </div>

    </div>

  <?php include 'footer.php'; ?>
