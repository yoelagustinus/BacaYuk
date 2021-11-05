<?php
include '../config.php';

function detectEnter($text){
    $find = '\n';
}


function deleteContent($id){
    $content = $db->post->deleteOne([
        '_id' => new MongoDB\BSON\ObjectID($id)
    ]);

    $_SESSION['success'] = "Content telah Berhasil dihapus";
    header("Location: index.php");
}