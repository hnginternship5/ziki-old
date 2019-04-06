<?php

class Post {

    private $id;
    private $userId;
    private $storyTitle;
    private $storyBody;
    private $postTimestamp;
    private $image;

    public function __construct() {

        $this->id = -1;
        $this->userId = -1;
        $this->storyTitle = "";
        $this->storyBody = "";
        $this->postTimestamp = "";
        $this->image = "";
    }

    public function setUserId($newUserId) {
        $this->userId = $newUserId;
    }

    public function setStoryBody($newstoryBody) {
        $this->storyBody = $newstoryBody;
    }

    public function setStoryTitle($newstoryTitle) {
        $this->storyTitle = $newstoryTitle;
    }

    public function setStoryImage($newstoryImage) {
        $this->image = $newstoryImage;
    }

    public function setTimePosted($newTimestamp) {

        $this->postTimestamp = $newTimestamp;
    }

    public function getId() {
        return $this->id;
    }

    public function getUserId() {
        return $this->userId;
    }

    public function getStoryTitle() {
        return $this->storyTitle;
    }

    public function getStoryBody() {
        return $this->storyBody;
    }

    public function getStoryImage() {
        $this->image;
    }

    public function getTimePosted() {
        return $this->postTimestamp;
    }

    static public function fetchAllPosts($postJson) {

        $result = array();
        //run check
        if (!empty($postJson)) {
            foreach ($postJson as $row) {
                $post = new Post();
                $post->id = $row['id'];
                $post->userId = $row['user_id'];
                $post->image = $row['post_image'];
                $post->postTimestamp = $row['post_timestamp'];

                $result[] = $post;
            }
        }

        return $result;
    }

    public function savePost() {

        if ($this->id == -1) {

            //Saving new post 
            $filename = md5($this->userId.$this->storyTitle).date("Y-m-d h:i:sa");
            $postfile = fopen(SITE_ROOT."/markdowns/me.md", "w") or die("failed while creating file");
            $result = fwrite($postfile, $this->storyTitle.$this->storyBody);
            fclose($postfile);
            if ($result == true) {
                $id = $this->id = (mt_rand(100001,999999));
                $file = $filename;
                $img = $this->image;
                $time = date("Y-m-d h:i:sa");
                $posts[] = array('id'=> $id, 'user_id'=>$_SESSION['loggedUserId'], 'file_url'=> $file, 'post_image' => $img, 'post_timestamp' => $time);
                $fp = fopen('posts.json', 'w') or die("post DB not found");
                fwrite($fp, json_encode($posts));
                fclose($fp);
                return true;
            } else {
                return false;
            }
        } else {
            return false;
        }

        return false;
    }

}
