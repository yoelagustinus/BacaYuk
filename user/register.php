<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">
        <title>Baca Yuk!</title>
    </head>
    <body>
        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <form>
            <div class="position-absolute top-50 start-50 translate-middle">
                <div class="container">
                    <div class="card" style="width: 30rem;">
                        <div class="card-body"><h4>Register account</h4>
                            <div class="mb-3">
                                <label for="exampleInputName" class="form-label">Name</label>
                                <input type="name" class="form-control" id="exampleInputName">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail" class="form-label">Email address</label>
                                <input type="email" class="form-control" id="exampleInputEmail" aria-describedby="emailHelp">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword" class="form-label">Password</label>
                                <input type="password" class="form-control" id="exampleInputPassword">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword" class="form-label">Verification Password</label>
                                <input type="password" class="form-control" id="exampleInputPassword">
                            </div>
                            <a href="home.php" type="submit" class="btn btn-primary">Register</a>
                            <div class="link-register d-flex flex-row-reverse bd-highlight">
                                <p class="text-muted fs-6 fw-lighter">Sudah punya account?? <a href="login.php" class="text-decoration-none"> Login</a></p>
                            </div>
                        </div>
                    </div>
                </div>    
            </div>
        </form>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    </body>
</html>