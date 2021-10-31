<?php
    require 'header.php';
    require 'config.php';
    if(isset($_POST['submit'])){
        $insertOneResult = $collection->message->insertOne([
            
            'pesan' => $_POST['pesan'],
            
        ]);
        header("Location: index.php");
    }
?>

    
