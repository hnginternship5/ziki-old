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
                $post->userId = $row['userid'];
                $post->storyTitle = $row['title'];
                $post->storyBody = $row['body'];
                $post->postTimestamp = $row['image'];
                $post->image = $row['time'];

                $result[] = $post;
            }
        }

        return $result;
    }

}
