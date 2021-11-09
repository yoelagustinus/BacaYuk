<html>
    <body>
        <?php 
            include 'headerVisitor.php';
        ?>
        <div class="container p-3">
            <h4 class="mb-2">Profil Anda</h4>
            <div class="d-flex justify-content-center">
                <div class="card" style="width: 65rem;">
                    <div class="card-body">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <div class="edit d-flex flex-row-reverse bd-highlight">
                                <li class="nav-item">
                                    <a class="nav-link text-muted" href="editProfil.php" id="navbar" role="button" data-bs-toggle="" aria-expanded="false">
                                        <h5>Edit Profil</h5>   
                                    </a>
                                </li>
                            </div>
                       </ul>
                        <center><img src="../images_thumb/profil.png" width="90" height="90"></center>
                    </div>
                    <div class="card-group p-3" style="width: 65rem;">
                        <div class="card">
                            <div class="card-body">
                                <h5>Name</h5>
                                <p class="mb-2">yumi</p>
                                <h5>Email Address</h5>
                                <p class="mb-2">yumi@gmail.com</p>
                                <a href="../logout.php" class="text-decoration-none"><h5>Logout</h5></a>
                            </div>
                        </div>
                    </div>
                </div>            
            </div>
        </div>
    </body>
</html>
