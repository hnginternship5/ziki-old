<?php
class Post {
    private $id;
    private $userId;
    private $storyTitle;
    private $storyBody;
    private $storyImage;
    private $postTimestamp;
    private $image;
    public function __construct() {
        $this->id = -1;
        $this->userId = -1;
        $this->storyTitle = "";
        $this->storyBody = "";
        $this->storyImage = "";
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
        $this->storyImage = $newstoryImage;
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
        return $this->storyImage;
    }
    public function getMarkdownUrl() {
        return $this->fileUrl;
    }
    public function getAuthorPic(){
        return $this->authPic;
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
                $post->authPic = $row['auth_pic'];
                $post->storyImage = $row['post_image'];
                $post->fileUrl = $row['file_url'];
                $post->postTimestamp = $row['post_timestamp'];
                $result[] = $post;
            }
        }
        return $result;
    }
    public function savePost($db, $name, $img, $dir) {
        if ($this->id == -1) {
            //Saving new post 
            $filename = $this->userId;
            $time = date("Y-m-d h:i:sa");
            $unix = strtotime($time);
            if (!is_dir($_SERVER['DOCUMENT_ROOT'] ."/markdowns/{$filename}")) {
                mkdir($_SERVER['DOCUMENT_ROOT'] ."/markdowns/{$filename}", 0777, true);
            }
            $fname = $_SERVER['DOCUMENT_ROOT'] ."/markdowns/{$filename}/{$filename}-{$unix}.md";
            $postfile = fopen($fname, "w") or die("failed while creating file");
            $result = fwrite($postfile, "<h2>{$this->storyTitle}</h2><p>{$this->storyBody}</p>");
            fclose($postfile);
            if ($result == true) {
                $md_path = "{$dir}/markdowns/{$filename}/{$filename}-{$unix}.md";
                $id = $this->id = (mt_rand(100001,999999))."-".$unix;
                $file = $md_path;
                $post_img = $this->storyImage;
                $posts[] = array('id'=> $id, 'user_id'=>$name, 'file_url'=> $file, 'post_image' => $post_img, 'auth_pic' => $img, 'post_timestamp' => $time);
                $json_db = "posts.json";
                $prev_post = json_decode($db);
                $new =array_merge($posts, $prev_post);
                $fp = fopen($json_db, 'w') or die("post DB not found");
                //die(json_encode($new));
                $new_post = fwrite($fp, json_encode($new));
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