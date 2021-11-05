<?php
function sessionCheck(){
    if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
        header("location: ../index.php");
        exit;
    }
}

function detectEnter($text){
    $find = '\n';
}