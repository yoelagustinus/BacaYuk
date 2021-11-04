<?php 
    include 'headerUser.php';
    require '../config.php';
    require 'ControllerVisitor.php';
    $cursor = $db->post->find([
        'category' => 'pengetahuan'
    ]);


?>
<!-- Tampilan -->
<div class="tampilan">

    <!-- konten -->
    <div class="container p-4">
        <div class="d-flex justify-content-center mb-2">
            <div class="mx-auto mb-4" style="width: 650px;">
                <div class="card" style="width: 40rem;">
                    <img src="../images_thumb/pengetahuan.jpg" class="card-img-top" alt="...">
                </div>
            </div>
        </div>
        <center><h2>Pengetahuan</h2></center><br>
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <?php
                foreach($cursor as $post){
                    $id_content = $post->_id;
            
            ?>
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">
                                <?php
                                echo "<a href='Content.php?ContentId=$id_content&' class='text-decoration-none'>$post->title</a>"; 
                                ?>
                            </h5>
                            <h6 class="card-subtitle mb-2 text-muted"><?php echo $post->category ?></h6>
                            <p>
                                <?php 
                            echo cutString($post->konten);
                            echo "<a href='Content.php?ContentId=$id_content&' class='text-decoration-none'> Baca selengkapnya</a>";
                            ?>
                            </p>
                        </div>
                    </div>
                </div>
            <?php
                }
            ?>
        </div>
    </div>
</div>
