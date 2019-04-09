<?php

require 'Router.php';
require 'Request.php';
require 'UploadImage.php';

$router = new Router(new Request);

$router->post('/api/upload-image', function() {
    
  return (new UploadImage)->upload();
});

$router->get('/api/images', function() {
    
    return (new UploadImage)->getAllImages();
  });
