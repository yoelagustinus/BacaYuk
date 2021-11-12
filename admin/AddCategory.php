<?php
    require 'header.php';
    require '../config.php';
    require 'ControllerAdmin.php';

    if(isset($_POST['create'])){
        $data = [
            'category' => $_POST['category'],
            
        ];
        
        $insertOneResult = $db->category->insertOne($data);
             
        $_SESSION['success'] = "category '" .  $_POST['category'] . "' berhasil dibuat";
        header("Location: index.php");
    }

?>

<div class="container">
    <br>
    <p class="fs-2">Menambah Category Baru</p>
    <form action="" method="POST" enctype="multipart/form-data">
        <table class="table">
            <tbody>
                <tr>
                    <th scope="row">Name Category</th>
                    <td>
                        <div class="form-floating">
                            <input type="text" class="form-control" id="category" name="category" required>
                        </div>
                    </td>
                </tr>
                
            </tbody>
        </table>
        <button id="create" name="create" class="btn btn-success">Create Category</button>
    </form>

</div>