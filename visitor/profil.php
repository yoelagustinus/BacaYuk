<html>
    <body>
        <?php 
            include 'headerVisitor.php';
        ?>
        <div class="container p-2">
            <h4 class="mb-2">Profil Anda</h4>
            <div class="card bg-success" style="width: 50rem; height: 10rem;">
                <a href="changeEmail.php" class="text-decoration-none text-white p-2 d-flex justify-content-end">Edit Profil</a>
                <div class="card-body">
                    <img src="../images/profil.png" class="rounded-circle" width="100" height="100">
                </div>
            </div>    
            <div class="card" style="width: 50rem; height: 10rem;">
                <div class="card-body">
                    <h4 class="mb-2">yumi</h4>
                    <p class="mb-4">yumi@gmail.com</p>
                    <a href="../logout.php" role="button" class="btn btn-primary btn-sm" style="width: 10rem;">Logout</a> 
                </div>
            </div>    
        </div>
    </body>
</html>

