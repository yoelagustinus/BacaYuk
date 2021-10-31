<?php
    require 'header.php';
    require '../config.php';

    $id_content = $_GET['ContentId'];
    $content = $db->post->findOne(
        array(
            '_id' => $id_content
        )
    );
    

?>


<div class="container">
    <br>
    <p class="fs-2">Edit Konten <?php echo $content ?></p>
    <form action="" method="POST" accept-charset="UTF-8">
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
                            <textarea class="form-control" name= "title" id="title" required></textarea>
                        </div>
                    </td>
                </tr>
                <tr>
                    <th scope="row">Isi Konten</th>
                    <td>
                        <div class="form-floating">
                            <textarea class="form-control" name= "konten" id="konten" style="height: 500px" required></textarea>
                        </div>
                    </td>
                </tr>
                <tr>
                    <th scope="row">Kategori Kontent</th>
                    <td>
                        <div class="form-check">
                            <!-- <input class="form-check-input" type="radio" name="category" id="flexRadioDefault1"> -->
                            <input class="form-check-input"  id="flexRadioDefault1" type="radio" name="category" <?php if (isset($category) && $category=="kesehatan") echo "checked";?>value="kesehatan" required>
                            <label class="form-check-label" for="flexRadioDefault1">
                                Kesehatan
                            </label>
                        </div>

                        <div class="form-check">
                            <!-- <input class="form-check-input" type="radio" name="category" id="flexRadioDefault2"> -->
                            <input class="form-check-input"  id="flexRadioDefault2" type="radio" name="category" <?php if (isset($category) && $category=="pengetahuan") echo "checked";?>value="pengetahuan">
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
                            <input class="form-control" type="file" name="file" id="formFile">
                        </div>
                    </td>
                </tr>

            </tbody>
        </table>


        <input type="submit" name="submit" value="Create" class="btn btn-success">

    </form>

    <br><br>
</div>