<?php
    require 'header.php';
    require '../config.php';
    

    if(isset($_GET['ContentId'])){
        $content = $db->post->findOne([
            '_id' => new MongoDB\BSON\ObjectID($_GET['ContentId'])
        ]);
    }

    if(isset($_POST['submit'])){
        $db->post->updateOne([
            '_id' => new MongoDB\BSON\ObjectID($_GET['ContentId'])
        ],
        [
            '$set' => ['title' => $_POST['title'], 'konten' => $_POST['konten'], 'category' => $_POST['category'],'file' => $_POST['file'],
        ]
        ]);
        $_SESSION['success'] = "Content '$content->title' berhasil diupdate";
        header("Location: index.php");
     }
    

?>


<div class="container">
    <br>
    <p class="fs-4">Edit <?php echo $content->title ?></p>
    <form method="POST">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Coloumn</th>
                    <th scope="col">Value</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">Title</th>
                    <td>
                        <div class="form-floating">
                            <textarea class="form-control" name= "title" id="title" style="height:100px;" required><?php echo $content->title ?></textarea>
                        </div>
                    </td>
                </tr>
                <tr>
                    
                    <th scope="row">Isi Konten</th>
                    <td>
                        <div class="form-floating">
                            <textarea class="form-control" name= "konten"  style='height: 500px' required><?php echo $content->konten ?></textarea>
                        </div>
                    </td>
                </tr>
                <tr>
                    <th scope="row">Kategori Kontent</th>
                    <td>
                        <div class="form-check">
                            <!-- <input class="form-check-input" type="radio" name="category" id="flexRadioDefault1"> -->
                            <input class="form-check-input"  id="flexRadioDefault1" type="radio" name="category" <?php if (isset($category) && $category=="kesehatan") echo "checked";?>value="kesehatan" required
                                <?php
                                    if($content->category == "kesehatan"){
                                        echo "checked";
                                    }
                                ?>
                            >
                            <label class="form-check-label" for="flexRadioDefault1">
                                Kesehatan
                            </label>
                        </div>

                        <div class="form-check">
                            <!-- <input class="form-check-input" type="radio" name="category" id="flexRadioDefault2"> -->
                            <input class="form-check-input"  id="flexRadioDefault2" type="radio" name="category" <?php if (isset($category) && $category=="pengetahuan") echo "checked";?>value="pengetahuan"
                                <?php
                                    if($content->category == "pengetahuan"){
                                        echo "checked";
                                    }
                                ?>
                            >
                            <label class="form-check-label" for="flexRadioDefault2">
                                Pengetahuan
                            </label>
                        </div>
                        
                        
                    </td>
                </tr>

                <tr>
                    <th scope="row">Thumbnail Picture</th>
                    <td>
                        <div class="mb-3">
                            <input class="form-control" type="file" accept="image/png, image/jpeg" name="file" id="formFile">
                        </div>
                    </td>
                </tr>

            </tbody>
        </table>


        <input type="submit" name="submit" value="Create" class="btn btn-success">

    </form>

    <br><br>
</div>
