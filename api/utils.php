<?php


function success(array $data){

    $rdata["status"] = "success";
    $rdata["data"] =$data;


    header("Content-Type:text/json");
    echo json_encode($rdata);
}


function error($message){

    $data["status"] = "error";
    $data["message"] = $message;
    header("Content-Type:text/json");
    http_response_code(421);
    echo json_encode($data);
}