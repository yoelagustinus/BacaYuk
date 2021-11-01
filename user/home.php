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
        
        <!-- Tampilan -->
        <div class="tampilan">

            <!-- navbar -->
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">
                    <a class="navbar-brand" href="home.php">BacaYuk</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#">Pengetahuan</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#">Kesehatan</a>
                            </li>
                        </ul>
                        <div class="user-setting">
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                <li class="nav-item dropdown">
                                    <a class="nav-link" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        Username 
                                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                                            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                                            <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                                        </svg>
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <li><a class="dropdown-item" href="login.php">Logout</a></li>
                                    </ul>
                                </li>
                            </ul>    
                        </div>
                    </div>
                </div>
            </nav>

            <!-- konten -->
            <div class="container p-4">
                <div class="d-flex justify-content-center mb-2">
                    <div class="mx-auto mb-4" style="width: 650px;">
                        <div class="card" style="width: 40rem;">
                        <img src="img/home-image.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo rem totam</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row row-cols-1 row-cols-md-3 g-4">
                    <div class="col">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Kenali Gejala HIV pada Anak</h5>
                                <p>Ada beberapa gejala dan tanda HIV pada anak yang sudah mulai terlihat sejak tahun pertama kehidupannya. Ini meliputi gejala awal yang ringan hingga gejala infeksi parah yang sering kambuh. 
                                    Gejala ini patut diantisipasi jika anak terlahir dari orang tua yang memiliki infeksi HIV dan tidak mendapatkan pengobatan. <a href="artikel.php" class="text-decoration-none"> Baca selengkapnya</a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Cara Mengatasi Alergi Susu Sapi Pada Anak</h5>
                                <p>Alergi susu sapi merupakan alergi makanan yang paling umum terjadi pada anak-anak, terutama yang usianya masih di bawah 3 tahun. Masalah ini tidak boleh disepelekan dan perlu ditangani dengan baik, 
                                    karena anak membutuhkan nutrisi dari susu agar tumbuh kembangnya optimal.<a href="#" class="text-decoration-none"> Baca selengkapnya</a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Gelar Simposium, Australia-Indonesia Bertukar Pengetahuan Tangani Bencana dan Pandemi</h5>
                                <p>Deputy Head of Mission Kedutaan Australia di Jakarta, Stephen Scott mengatakan, kawasan Indo-Pasifik memiliki pengalaman yang sangat kaya di bidang penanganan bencana dan kedaruratan kesehatan masyarakat. 
                                    Seperti yang telah ditunjukkan <a href="#" class="text-decoration-none"> Baca selengkapnya</a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Syarat-syarat sebagai Ilmu Pengetahuan</h5>
                                <p>Ilmu pengetahuan adalah seperangkat pengetahuan dan informasi yang telah dikaji manusia dalam berbagai bidang. Suatu pengetahuan harus memenuhi syarat-syarat untuk menjadi ilmu pengetahuan. 
                                    Poedjawijatna dalam buku Tahu dan Pengetahuan (2004) menerangkan bahwa syarat-syarat sebagai ilmu pengetahuan harus memenuhi <a href="#" class="text-decoration-none"> Baca selengkapnya</a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Vaksin Sinovac untuk Anak Usia 6-11 Tahun, Ini Pesan Ketua IDAI Bagi Orangtua</h5>
                                <p>Ketua Ikatan Dokter Anak Indonesia (IDAI) menyambut baik kabar vaksin Sinovac kini sudah mendapat izin dari Badan Pengawas Obat dan Makanan (BPOM) untuk diberikan kepada anak usia 6-11 tahun. 
                                    Sepertu diberitakan sebelumnya, BPOM telah menyetujui penggunaan vaksin Sinovac, <a href="#" class="text-decoration-none"> Baca selengkapnya</a>
                                </p>   
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Faktor Penyebab Lemah nya Mata Uang Rupiah</h5>
                                <p>Nilai tukar mata uang rupiah terhadap dolar, selalu mengalami perubahan setiap saat terkadang melemah terkadang juga dapat menguat.
                                    Kenapa bisa lemah dan kuat tentu saja keduanya ada sebab nya, namun kali ini kita akan bahas penyebab melemah nya mata uang rupiah.  
                                    Semakin lemah nya mata uang rupiah indonesia ini menyebabkan harga-harga <a href="#" class="text-decoration-none"> Baca selengkapnya</a>
                                </p>   
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </body>
</html>