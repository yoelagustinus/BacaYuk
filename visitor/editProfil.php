<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">
        <title>Baca Yuk!</title>
        <style type="text/css">
            body { background: #ECEFF1 !important; }
        </style>
    </head>
    <body>
        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <form action="" method="POST">
            <div class="position-absolute top-50 start-50 translate-middle">
                <div class="container">
                    <div class="card" style="width: 50rem;">
                        <div class="card-body"><h4>Edit account</h4>
                            <div class="mb-3">
                                <label for="exampleInputName" class="form-label">Name</label>
                                <input type="name" name="name" class="form-control" id="exampleInputName">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail" class="form-label">Email address</label>
                                <input type="email" name="mail" class="form-control" id="exampleInputEmail" aria-describedby="emailHelp">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword" class="form-label">Password</label>
                                <input type="password" name="password1" class="form-control" id="exampleInputPassword">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword" class="form-label">Verification Password</label>
                                <input type="password" name="password2" class="form-control" id="exampleInputPassword">
                            </div>
                            <button id="edit" name="edit" class="btn btn-primary">Simpan Perubahan</button>
                            <a href="profil.php" name="batal" class="text-muted text-decoration-none p-3">Batal</a>
                        </div>
                    </div>
                </div>    
            </div>
        </form>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    </body>
</html>