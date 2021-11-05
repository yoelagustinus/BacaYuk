<?php

function sessionCheck(){
    if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
        header("location: ../index.php");
        exit;
    }
}


function cutString($text){
    if(empty($text)){
        $newText = '';
    }else{
        $newText = substr($text, 0, 100);
        $newText .='...';
    }

    return $newText;
}

