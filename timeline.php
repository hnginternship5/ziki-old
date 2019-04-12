<?php
$title = "Timeline";
include 'header.php';
require_once "config.php";
 ?>
<?php
$_SESSION['accesstoken'] = true;
            if(isset($_SESSION['accesstoken'])){
  try{

        ?>
<?php
        }catch(Exception $e){
            //echo "Google Auth Error:  ". $e->getMessage();
         }
            }

            else{
                header("Location: {$site_url}");
            }
        ?>


        <div class="row">
            <!-- Sidebar Starts -->
            <div class="col-sm-3 col-12 side-info p-4">
                <div class="logo-area mb-5 mx-4">
		  <a href="/timeline.php">
                    <img src="assets/img/zikilogo.png" alt="" class="logo" />
		 </a>		
                </div>

                <!-- user profile picture -->
                <div class="profile-pic-area mx-auto mt-5" style="padding-left:100px;">
                    <img src="<?php echo $img ?>" alt="Not Found" onerror=this.src="assets/img/profile.png" class="profile-pic" />
                </div>

                <!-- User name, Skills, short bio -->
                <div class="text-center">
                    <h3 class="profile-name">
                        <?php 
                             echo $name;// dear backend dev. just uncomment this 
                            // and remove what echoes below. That's it.
                            //echo 'Austin Asoluka';
                        ?>
                    </h3>
                    <h4 class="user-skills">
                        <?php 
                             echo $email; //dear backend dev. just uncomment this 
                            // and remove what echoes below. That's it.
                            //echo 'Web | Software Developer';
                        ?>
                    </h4>
                    <p class="profile-motto">Software Engineer at AWS design enthusiast and music lover</p>
                </div>

                <!-- social media links 
                <div class="sidebar-icons text-center my-3">
                    <i class="fab fa-github social"></i>
                    <i class="fab fa-dribbble social"></i>
                    <i class="fas fa-rss social"></i>
                </div>
		-->
                <ul class="nav flex-column p-5 my-5 text-center">
                <!--    <li class="nav-item">
                        <a class="nav-link" href="#">My Blogs</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Insights</a>
                    </li>
		-->
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
                                <form method="POST" action="/post.php" enctype="multipart/form-data">
                                    <textarea class="editable medium-editor-textarea post-input" type="text" name="body" placeholder="What’s happening?"></textarea>

                                    <div class="row mx-0 d-flex flex-row mt-auto justify-content-between">
                                    <!--   <div class="post-action-right">
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
                        -->
                                        <div class="post-action-left" style="padding-left:700px;">
                                            <div class="image-upload">
                                                <label for="file-input">
                                                    <i class="fas fa-paperclip"></i>
                                                </label>
                                                <input id="file-input" type="file" name="image" style="visibility:hidden; width:0; height:0;" />
                                            </div>
                                            <a class="post-action-item" href="#css"><img src="assets/img/mic.svg"></a>
                                            <i class="fas fa-link"></i>
                                            <button type="submit" class="btn btn-primary post-action-item">Publish</button>
                                    </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mx-0 d-flex flex-row align-items-center justify-content-between padd">
                        <div class="col-md-8 line ml-md-5"></div>
                        <div class="col d-inline-flex mr-md-5 flex-row justify-content-between">
                            <!--<p class="post-filter"><span class="post-filter-title">Sort by:</span> Most Recent Posts</p> 
                            <img src="assets/img/caret.svg"> -->
                        </div>
                    </div>
                </div>

                <!-- Post feeds start here -->
                <div class="feeds"></div>
                <!-- Post feed ends here -->

                <!-- post feed ends here -->
                <!-- </div> -->

            </div>

        </div>

    </div>

  <?php include 'footer.php'; ?>
