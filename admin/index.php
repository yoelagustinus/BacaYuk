<?php
    require 'header.php';
    require '../config.php';
    
?>

<!DOCTYPE html>
<html>
<head>

</head>
<body>

<br>
<div class="container">
    <!-- <button type="button" class="btn btn-primary">Add New Konten</button> -->
    <?php echo "<a href='CreateContent.php'><button type='button' class='btn btn-success'>Add New Konten</button></a>"; ?>
    <br><br>
    <table class="table table-striped">
        <thead>
            <tr>
                <!-- <th scope="col">#</th> -->
                <th scope="col">Judul Konten</th>
                <th scope="col">Kategori</th>
                <th scope="col">Tanggal Upload</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
    <tbody>
        <?php
            
            $cursor = $db->post->find();
            foreach($cursor as $post){
                $id_content = $post->_id;
                
        ?>
                <tr>
                    <!-- <th scope="row">1</th> -->
                    <td><?php echo $post->title ?></td>
                    <td><?php echo $post->category ?></td>
                    <td><?php echo $post->created_at ?></td>
                    <td>
                        <?php echo "<a href='EditContent.php?ContentId=$id_content&'><button type='button' class='btn btn-primary'>Edit</button></a>"; ?>
                        <br><br>
                        <!-- <?php echo "<a href='DeleteContent.php?ContentId=$id_content&'><button type='button' class='btn btn-danger'>Delete</button></a>"; ?> -->
                    </td>
                </tr>
        <?php
            

            }
        ?>
        
    </tbody>
    </table>
</div>



</body>

