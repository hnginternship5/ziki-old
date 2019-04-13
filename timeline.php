<?php
$title = "Timeline";
include 'header.php';
require_once "config.php";
//Print_r($_SESSION);
 ?>
<?php
if (!isset($_SESSION['name'])) {
      header("Location: {$site_url}");
}
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

<div class="container">

<div class="row">
    <!-- Sidebar Starts -->
    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 side-info p-4">
        <div class="logo-area mb-5 mx-4">
            <a href="/timeline.php">
                <img src="assets/img/zikilogo.png" alt="" class="logo" />
            </a>
        </div>

        <!-- user profile picture -->
        <div class="profile-pic-area mx-auto mt-5">
            <img src="<?php if (isset($img) && $img !==''){echo $img ;
                    }else {
                      echo "assets/img/noavatar92.png";
                    }?>" alt="Not Found" onerror=this.src="assets/img/noavatar92.png" class="profile-pic" />
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
    <div class="col-md-9 posts-area">
        <!-- Post Box Begins -->
        <div class="row">
            <div class="col-12 post-section">
                <form method="POST" action="/post.php" enctype="multipart/form-data">
                    <textarea class="editable medium-editor-textarea post-input" type="text" name="body"
                        placeholder="What’s happening?"></textarea>

                    <div class="">
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
                            <div class="post-action-left">
                            <div class="image-upload">
                                <label for="file-input">
                                    <i class="fas fa-paperclip"></i>
                                </label>
                                <input id="file-input" type="file" name="image"
                                    style="visibility:hidden; width:0; height:0;" />
                            </div>
                            <a class="post-action-item" href="#css"><img src="assets/img/mic.svg"></a>
                            <i class="fas fa-link"></i>
                            <button type="submit" class="btn btn-primary post-action-item">Publish</button>
                </form>
            </div>
        </div>
    </div>

</div>

<div class="row d-flex justify-content-start padd">
        <div class="col-4 mt-1 mb-1 line"></div>
    </div>

<!-- Post feeds start here -->
<div class="feeds">
                    <?php
                        $url = 'posts.json'; // path to your JSON file
                        $data = file_get_contents($url); //get file content
                        $posts = json_decode($data);
                        $i = 0;
                        foreach ($posts as $post) {
                            $mk = "markedcontent";
                            $class = $mk.$i;

                            if (count($post) > 0){
                                echo '<div class="row posts">
                                    <div class="col-md-12 col-12">
                                        <div class="row">
                                            <div class="col-md-1">
                                                <img class="blog-item-author-avatar" src="' .$post->auth_pic. '">
                                            </div>
                                            <div class="col-md-11 col-12">
                                                <div class="row blog-item-main">
                                                    <div class="col-md-3 col-12">
                                                        <div class="row">
                                                            <img src="' .$post->post_image. '" class="img-fluid post-img" alt="Profile Image">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-8 col-10">
                                                    <a href="/blog-detail.php">
                                                        <div class="'.$class.'">
                                                        
                                                        </div>
                                                    </a>
                                                    <div class="row post-footer">
                                                        <div class="col-md-8 col-7">
                                                            <a href="#">
                                                                <span class="badge badge-primary">Tech</span>
                                                            </a>
                                                            <a href="#">
                                                                <span class="badge badge-primary">AI</span>
                                                            </a>
                                                            <a href="#">
                                                                <span class="badge badge-primary">Academic</span>
                                                            </a>
                                                            <div class="col-md-12">
                                                                <div class="row">
                                                                    <p class="post-date">' .$post->post_timestamp. '</p>
                                                                </div>
                                                            </div>
                                                            </div>
                                                            <div class="col-md-4 col-5 text-right">
                                                                <a href="/blog-detail.php"><i class="far fa-comment-alt post-icon chat-icon"></i></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- <div class="col-md-1"></div> -->
                                </div>';

                                $i++;
                                // if($i > 10){
                                //     break;
                                // }
                            }else{
                                echo "No posts yet !!";
                            }
                           
                        }
                    ?>
                </div>
<!-- Post feed ends here -->
                <input type="hidden" id="pageno" value="1">
                <img id="loader" src="assets/img/loader.svg">
<!-- post feed ends here -->
<!-- </div> -->

</div>

</div>

</div>
</div>
<?php include 'footer.php'; ?>
