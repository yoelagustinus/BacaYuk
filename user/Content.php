<?php
    include 'headerUser.php';
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
    <p class="fw-light text-center"><?php echo $content->category ?></p>
    <p>
        <?php
            echo $content->konten;
        ?>
    </p>
    <h5 class="mb-3">1 Komentar</h5>
    <div class="container">
        <div class="profil">
            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
            </svg>
        </div>
        <div class="user-desc">
            <h6>Username</h6>
        </div>
    </div>    
    <div class="comment" style="width: 50rem;">
        <div class="form-floating mb-3">
            <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
            <label for="floatingTextarea2">Comments</label>
        </div>
        <div class="button">
            <a href="home.php" type="submit" class="btn">Kembali</a>
            <a href="#" type="submit" class="btn btn-primary">Submit</a>
        </div>
    </div>
	<div class="container mt-5 mb-5">
        <div class="row height d-flex justify-content-center align-items-center">
            <div class="col-md-7">
                <div class="card">
                    <div class="p-3">
                        <center><h6>Comments</h6></center>
                    </div>
                    <div class="mt-3 d-flex flex-row align-items-center p-3 form-color"> <img src="../images_thumb/tztz.jpeg" width="50" class="rounded-circle mr-2"> <input type="text" class="form-control" placeholder="Enter your comment..."> </div>
					<a href="#" type="submit" class="btn btn-outline-warning">POST!</a>
                    <div class="mt-2">
                        <div class="d-flex flex-row p-3"> <img src="../images_thumb/face.jpg" width="40" height="40" class="rounded-circle mr-3">
                            <div class="w-100">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="d-flex flex-row align-items-center"> <span class="mr-2"><b>ASEP CILOQ</b></span> <small class="c-badge">Top Comment</small> </div>
                                </div>
                                <p class="text-justify comment-text mb-0">MANTAB GANN</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
	
</div>
