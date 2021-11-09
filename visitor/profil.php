<html>
    <body>
        <?php 
            include 'headerVisitor.php';
        ?>
        <div class="container p-3">
            <h4 class="mb-2">Profil Anda</h4>
            <div class="card" style="width: 35rem;">
                <div class="card-body">
                    <div class="d-flex flex-row-reverse">
                        <a href="changeEmail.php" class="text-decoration-none text-muted">Edit Profil</a>
                    </div>
                    <center><img src="../images_thumb/profil.png" width="75" height="75"></center>
                </div>
                <div class="card-group p-3" style="width: 35rem;">
                    <div class="card">
                        <div class="card-body">
                            <h6>Name</h6>
                            <p class="mb-2">yumi</p>
                            <h6>Email Address</h6>
                            <p class="mb-2">yumi@gmail.com</p>
                            <a href="../logout.php" class="text-decoration-none">Logout</a>
                        </div>
                    </div>
                </div>
            </div>            
        </div>
    </body>
</html>
