<?php

function isPostRequest() {
    return ( filter_input(INPUT_SERVER, 'REQUEST_METHOD') === 'POST' );
}


function getIpAddress() {
    if(!empty($_SERVER['HTTP_CLIENT_IP'])) {
   echo $ip = $_SERVER['HTTP_CLIENT_IP'];
   } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
   echo $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
   } else {
   echo $ip = $_SERVER['REMOTE_ADDR'];
   }
   return $ip;
}
?>


function getPostRequest(){
    return ()
}



function editPostRequest(){
    return ()
}

