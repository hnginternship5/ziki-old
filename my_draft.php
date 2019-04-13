<?php

//session_start();
include 'includes/config.php';
require_once 'config.php';
require_once 'functions/Draft.php';
extract($_SESSION);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    //$title = isset($_POST['title']) ? trim($_POST['title']) : null;
    $header = isset($_POST['title']) ? trim($_POST['title']) : null;
    $content = isset($_POST['body']) ? trim($_POST['body']) : null;
    $body = "<h2>".$header."</h2>".$content;
    $file = isset($_FILES['image']) ? $_FILES['image'] : $default_img;
    $user = $email;
    $new_file_name = date('dmYHis').str_replace(" ", "", basename($file['name']));
    $image_type = strtolower(pathinfo($new_file_name, PATHINFO_EXTENSION));
    if ($image_type != "jpg" && $image_type != "png" && $image_type != "jpeg") {
        $response['error'] = true;
        $response['message'] = 'Please make sure you uploading your image';
    }
    else{
        $target_file = SITE_ROOT.'/drafts/post-images/'.$new_file_name;
        $url_link = $site_url.'drafts/post-images/'.$new_file_name;
        if ($file['error'] === 0) {
            $upload = move_uploaded_file($file['tmp_name'], $target_file);
            if ($upload) {
                $db_json = file_get_contents("drafts.json");
                $newPost = new Draft();
                $newPost->setUserId($user);
                $newPost->setStoryBody($body);
                $newPost->setStoryImage($url_link);
                if ($newPost->savePost($db_json, $name, $img, $site_url)) {
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
    }
    die(json_encode($response));
}
else {
    $data = file_get_contents("drafts.json");
    $posts = json_decode($data, true);
    $getAllPosts = Draft::fetchAllPosts($posts);
    $posts = array();
    if (!empty($getAllPosts)) {
        foreach ($getAllPosts as $blog) {
            $postId = $blog->getId();
            $postBody = $blog->getStoryBody();
            $postPic = $blog->getStoryImage();
            $markdownLink = $blog->getMarkdownUrl();
            //$authPic = $blog->getAuthorPic();
            $postTimestamp = $blog->getTimePosted();
            $post['id'] = $postId;
            //$post['author_image'] = $authPic;
            $post['markdown_url'] = $markdownLink;
            $post['post_image'] = $postPic;
            $post['post_timestamp'] = date("jS F, Y h:i:s A", strtotime($postTimestamp));
            array_push($posts, $post);
        }
        $result['error'] = false;
        $result['result'] = $posts;
    }
    else{
        $result['error'] = true;
        $result['message'] = 'internal server error, please add a default post on installation.';
    }
    echo(json_encode($result));
}