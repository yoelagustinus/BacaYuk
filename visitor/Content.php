<?php
    include 'headerVisitor.php';
    require '../config.php';
    
    
    if(isset($_GET['ContentId'])){
        $content = $db->post->findOne([
            '_id' => new MongoDB\BSON\ObjectID($_GET['ContentId'])
        ]);
    }
    $thumbnail = $content->fileName;
?>

<link rel="stylesheet" href="comment.css" media="screen">
<!-- artikel -->
<div class="container p-4">
    <div class="d-flex justify-content-center mb-3">
        <?php
        echo '<img src="../images_thumb/'. $thumbnail.'" width="500" class="img-fluid" alt="">';
        ?>
    </div>
    <h4 class="mb-3 text-center"><?php echo $content->title ?></h4>
    <p class="fw-light text-center"><?php echo $content->category ?> / 04 Nov 2021</p>
    <p>
        <?php
            echo $content->konten;
        ?>
    </p>
    <!-- komentar -->
    <h5 class="mb-2">1 Komentar</h5>    
    <div class="container">
        <div class="row row-cols-auto">
            <div class="col"><img src="../images_thumb/profil.png" width="35"></div>
            <div class="col"><h6>Username</h6>
                <p>Terimakasih artikelnya sangat bermanfaat</p>
            </div>
        </div> 
    </div>
    <div class="comment" style="width: 50rem;">
        <div class="form-floating mb-3">
            <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
            <label for="floatingTextarea2">Beri komentar disini...</label>
        </div>
        <div class="button">
            <a href="home.php" type="submit" class="btn">Kembali</a>
            <a href="#" type="submit" class="btn btn-primary">Submit</a>
        </div>
    </div>
	
</div>
