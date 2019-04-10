<?php
$title = "Timeline";
include 'header.php';
 ?>

    <div class="container-fluid">

        <div class="row">

        <!-- Sidebar Starts -->
        <div class="col-sm-3 side-info p-4">
          <div class="logo-area mb-5 mx-4">
            <img src="assets/img/zikilogo.png" alt="" class="logo" />
          </div>

          <div class="profile-pic-area mx-auto mt-5">
            <img src="assets/img/dp.png" alt="" class="profile-pic" />
          </div>

          <div class="personal-info text-center ">
            <h1><?php echo $name; ?></h1>
            <div class="font-weight-bold skillset">
              <?php echo $email; ?>
            </div>
            <div class="shortbio">
              I'm kinda weird in a good way..... I design for survival
            </div>
          </div>

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
          </ul>
        </div>
        <!-- Sidebar Ends -->
            <div class="col-md-9">
                <!-- Post Box Begins -->
                <div class="mx-auto mt-5 mb-2 px-5">
                    <div class="post-box p-2">
                        <form method="POST" action="post.php">
                        <div class="form-group px-3">
                            <textarea
                            name="body"
                            id=""
                            rows="3"
                            class="editable medium-editor-textarea form-control post-text"
                            placeholder="What's Happening"
                            ></textarea>
                            <div class="toolbars row my-4 ">
                            <div class="col">
                                <img src="assets/img/timeline_icons/type.png" alt="" />
                                <img src="assets/img/timeline_icons/italic.png" alt="" />
                                <img
                                src="assets/img/timeline_icons/attachment2.png"
                                alt=""
                                />
                                <img src="assets/img/timeline_icons/underline.png" alt="" />
                                <img src="assets/img/timeline_icons/bold.png" alt="" />
                            </div>
                            <div class="col text-right">
                                <img
                                src="assets/img/timeline_icons/attachment.png"
                                alt=""
                                />
                                <img
                                src="assets/img/timeline_icons/attachment2.png"
                                alt=""
                                />
                                <img src="assets/img/timeline_icons/mic.png" alt="" />
                                <button type="submit" class="btn btn-publish">
                                Publish
                                </button>
                            </div>


                            </div>
                        </div>
                        </form>
                    </div>

                </div>


                    <div class="row mx-0 d-flex flex-row align-items-center  justify-content-between">

                        <div class="col-md-8 line ml-md-5"></div>
                        <div class="col d-inline-flex mr-md-5 flex-row justify-content-between">
                            <p class="post-filter"><span class="post-filter-title">Sort by:</span> Most Recent Posts</p>
                            <img src="assets/img/caret.svg">
                        </div>
                    </div>
                </div>


                    <div class="post-section"></div>

                <!-- </div> -->

            </div>

        </div>

    </div>

  <?php include 'footer.php'; ?>
