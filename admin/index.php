<?php
    require 'header.php';
    require '../config.php';
    if(isset($_POST['submit'])){
        $insertOneResult = $collection->message->insertOne([
            
            'pesan' => $_POST['pesan'],
            
        ]);
        header("Location: index.php");
    }
?>

<!DOCTYPE html>
<html>
<head>

</head>
<body>

<br>
<div class="container">
    <!-- <button type="button" class="btn btn-primary">Add New Konten</button> -->
    <?php echo "<a href='CreateContent.php'><button type='button' class='btn btn-primary'>Add New Konten</button></a>"; ?>
    <br><br>
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Judul Konten</th>
                <th scope="col">Kategori</th>
                <th scope="col">Tanggal</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
    <tbody>
        <tr>
            <th scope="row">1</th>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
            <td>actions</td>
        </tr>
        <!-- <tr>
            <th scope="row">2</th>
            <td>Jacob</td>
            <td>Thornton</td>
            <td>@fat</td>
        </tr>
        <tr>
            <th scope="row">3</th>
            <td colspan="2">Larry the Bird</td>
            <td>@twitter</td>
        </tr> -->
    </tbody>
    </table>
</div>



</body>

