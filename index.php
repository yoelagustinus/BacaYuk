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
<br>
<div class="container">
    <div class="card">
        <div class="card-header">
        <?php 
            $Message = $collection->message->find();
            foreach ($Message as $msg){
                echo "$msg->id_penerima";
            }
        ?> 
        </div>
        
            
        
        <div class="card-body">
            <!-- <h5 class="card-title">Special title treatment</h5> -->
            
            <?php
            $Message = $collection->message->find();
            foreach ($Message as $msg){
                echo "<p class='card-text'>";
                echo "$msg->pesan";
                echo "</p>";
            }
            ?>
            

            <form method="POST">
                <div class="input-group mb-3">
                    
                    <input type="text" class="form-control" placeholder="Text Message" name="pesan" aria-label="Recipient's username" aria-describedby="button-addon2">

                    <button class="btn btn-outline-secondary" name="submit" type="submit">Send</button>
                    
                </div>
            </form>
        </div>
    </div>

    
</div>
    
