<?php

class FileUploader
{

    protected $inputName;
    protected $acceptedFileTypes;
    protected $maxFileSize;
    protected $uploadDirectory = 'api/uploads/';
    protected $fileName;
    protected $pathToFile;


    public function __construct($inputName)
    {
        if(empty($_FILES[$inputName])){
            throw new Exception("File Is not uploaded");
        }
        $this->inputName = $inputName;
        $this->fileName = $this->getFileName();
        $this->pathToFile = $this->uploadDirectory . $this->fileName;
    }

    public function handleFileUpload(){

    }


    public function uploadFile(){

        if($this->getUploadErrors()!=0){
            throw new Exception("An Upload Error occurred");
        }else{
            if($this->getFileSize()>$this->maxFileSize){
                throw new Exception("File is too large");
            }else{

                if(!$this->isValidFileType()){
                    throw  new Exception("File  must be one of this extensions ".implode(',', $this->acceptedFileTypes));
                }else{
                    return $this->upload();
                }
            }

        }
    }

    protected function upload(){

        return move_uploaded_file($this->getTempFilename(),$this->pathToFile);
    }

    public function getFilePath($path = null)
    {
        return $_SERVER['HTTP_HOST'] . "/" . ($path ?? $this->pathToFile);
    }


    public function getFileName(){

        return $_FILES[$this->inputName]['name'];
    }

    public function getTempFilename(){

        return $_FILES[$this->inputName]['tmp_name'];
    }


    public function getFileSize(){

        return  $_FILES[$this->inputName]['size'];
    }


    public function getUploadErrors(){
      return  $_FILES[$this->inputName]['error'];
    }


    public function getFileExtension(){
        $spl = new SplFileInfo($this->getFileName());
        return $spl->getExtension();
    }


    public function setAllowedFileTypes(array $types){
        $this->acceptedFileTypes = $types;
    }


    public function setMaxFileSize($size){

        if($size<0){
            throw new Exception("File size can't be less than zero");
        }

        $this->maxFileSize = $size;

    }


    public function isValidFileType(){
        return in_array($this->getFileExtension(),$this->acceptedFileTypes);
    }

    public function setUploadDirectory($directory){
        $this->uploadDirectory = $directory;
    }

    public function setFilename($name){
        $this->fileName = $name;
    }
}