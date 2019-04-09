<?php

require_once 'FileUploader.php';
require_once 'FileRetriver.php';
require_once 'utils.php';

class UploadImage
{
    public function upload(){
    
        try {
            $fileUploader = new FileUploader("image");
    
    
            $fileUploader->setAllowedFileTypes(["jpg","png","jpeg","svg"]);
            $fileUploader->setMaxFileSize(5000000);
    
    
            if($fileUploader->uploadFile()){
    
    
    
                $data["status"] = "success";
                $data["data"] =$data;
    
                success(["message"=>"File Uploaded successfully",
                "src" => $fileUploader->getFilePath()]);
            }else{
                error("An error occurred file was not uploaded");
            }
        } catch (Exception $e) {
    
            error($e->getMessage());
        }
    }

    public function getAllImages()
    {
        $images = (new FileRetriver)->getAllImages();
        success([
            "images" => $images
        ]);
    }
}








