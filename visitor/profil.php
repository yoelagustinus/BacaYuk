<html>
    <body>
        <?php 
            include 'headerVisitor.php';
        ?>
        <div class="container p-3">
            <h3 class="mb-2" style="font-family:helvetica">Profil Anda</h3>
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <div class="row row-cols-auto">
                        <div class="col">
                            <img src="../images_thumb/profil.png" width="65" height="65"> <!--dari db-->
                        </div>
                        <div class="col mb-3">
                            <h5 class="mb-2">yumi</h5> <!--dari db-->
                            <p class="mb-2">yumi@gmail.com</p> <!--dari db-->
                            <a href="editProfil.php" class="text-decoration-none text-muted mb-2">Ubah alamat email</a>
                        </div>
                    </div>
                    <center>
                        <a href="../logout.php" role="button" class="btn btn-primary btn-sm" style="width: 10rem;">Logout</a>
                    </center> 
                </div>
            </div>
        </div>
    </body>
</html>

