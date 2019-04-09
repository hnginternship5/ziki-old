<?php

require_once "FileUploader.php";

class FileRetriver extends FileUploader
{
    public function __construct(){

    }

    public function getAllImages(){
        $files = array_diff(scandir($this->uploadDirectory), array('.', '..'));
        return array_map(function($file){
            return $this->getFilePath($this->uploadDirectory . $file);
        }, $files);
    }
}