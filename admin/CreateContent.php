<?php
    require 'header.php';
    require '../config.php';

?>


<div class="container">
    <br>
    <p class="fs-2">Menambah Konten Baru</p>
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
                            <textarea class="form-control" name= "title" id="title"></textarea>
                        </div>
                    </td>
                </tr>
                <tr>
                    <th scope="row">Isi Konten</th>
                    <td>
                        <div class="form-floating">
                            <textarea class="form-control" name= "konten" id="konten" style="height: 500px"></textarea>
                        </div>
                    </td>
                </tr>
                <tr>
                    <th scope="row">Kategori Kontent</th>
                    <td>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                        <label class="form-check-label" for="flexRadioDefault1">
                            Kesehatan
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
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
                            <input class="form-control" type="file" id="formFile">
                        </div>
                    </td>
                </tr>

            </tbody>
        </table>


        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
            UPDATE
        </button>

    </form>
</div>