<?php
define ("dir", "https://ziki.hng.tech/" ); 
//session_start();
include 'includes/config.php';
require_once 'config.php';
require_once 'functions/Post.php';
extract($_SESSION);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    //$title = isset($_POST['title']) ? trim($_POST['title']) : null;
    $body = isset($_POST['body']) ? trim($_POST['body']) : null;
    //$file = $_FILES['image'];
   // $name ="Ogundiji Bolade Adio";
   // $email = "kamponistullar@gmail.com";
    $user = $email;
    $db_json = file_get_contents("posts.json");
    $newPost = new Post();
    $newPost->setUserId($user);
    $newPost->setStoryBody($body);
    //$newPost->setStoryTitle($title);
    //$newPost->setStoryImage($target_file);
    if ($newPost->savePost($db_json, $name, $img)) {
        $response = array('error' => false, 'message' => 'post published successfully');
    } else {
    $response = array('error' => true, 'message' => 'error occured while posting');
    }
    /*
    $new_file_name = date('dmYHis').str_replace(" ", "", basename($_FILES['image']['name']));
    $image_type = strtolower(pathinfo($new_file_name, PATHINFO_EXTENSION));
    if ($image_type != "jpg" && $image_type != "png" && $image_type != "jpeg") {
        $response['error'] = true;
        $response['message'] = 'Please make sure you uploading your image';
    }
    else{
        $target_file = SITE_ROOT.'/uploads/'.$new_file_name;
        if ($file['error'] === 0) {
            $upload = move_uploaded_file($file['tmp_name'], $target_file);
            if ($upload) {
                $db_json = file_get_contents("posts.json");
                $newPost = new Post();
                $newPost->setUserId($user);
                $newPost->setStoryBody($body);
                $newPost->setStoryTitle($title);
                $newPost->setStoryImage($target_file);
                if ($newPost->savePost($db_json)) {
                    $response = array('error' => false, 'message' => 'post published successfully');
                } else {
                    $response = array('error' => true, 'message' => 'error occured while posting');
                }
            }
            else{
                $response['error'] = true;
                $response['message'] = 'Error while uploading image';
            }
        }
        else{
            $response['error'] = true;
            $response['message'] = 'Error, please select an image';
        }
    }*/
    //header("Location: https://ziki.hng.tech/timeline.php");
    header('Location: http://localhost:8000/timeline.php');
}
else {
    $data = file_get_contents("posts.json");
    $posts = json_decode($data, true);
    $getAllPosts = Post::fetchAllPosts($posts);
    $posts = array();
    if (!empty($getAllPosts)) {
        foreach ($getAllPosts as $blog) {
            $postId = $blog->getId();
            //$postTitle = $blog->getStoryTitle();
            $postBody = $blog->getStoryBody();
            //$postPic = $blog->getStoryImage();
            $markdownLink = $blog->getMarkdownUrl();
            $authPic = $blog->getAuthorPic();
            $postTimestamp = $blog->getTimePosted();
            $post['id'] = $postId;
            $post['author_image'] = $authPic;
            $post['markdown_url'] = $markdownLink;
            $post['post_timestamp'] = date("jS F, Y", strtotime($postTimestamp));
            array_push($posts, $post);
        }
        $result['error'] = false;
        $result['result'] = $posts;
    }
    else{
        $result['error'] = true;
        $result['message'] = 'internal server error';
    }
    echo(json_encode($result));
}
