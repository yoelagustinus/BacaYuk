<html>
    <body>
        <!-- Tampilan -->
        <div class="tampilan">

            <!-- navbar -->
            <?php 
                include 'headerVisitor.php';

                require '../config.php';
                require 'ControllerVisitor.php';
                $cursor = $db->post->find();
            ?>

            <!-- konten -->
            <div class="container p-4">
                <div class="d-flex justify-content-center mb-2">
                    <div class="mx-auto mb-4" style="width: 650px;">
                        <div class="card" style="width: 40rem;">
                        <img src="../images_thumb/home-image.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo rem totam</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row row-cols-1 row-cols-md-3 g-4">
                    <?php
                        foreach($cursor as $post){
                            $id_content = $post->_id;
                    
                    ?>
                        <div class="col">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">
                                        <?php
                                        echo "<a href='Content.php?ContentId=$id_content&' class='text-decoration-none'>$post->title</a>"; 
                                        ?>
                                    </h5>
                                    <h6 class="card-subtitle mb-2 text-muted"><?php echo $post->category ?></h6>
                                    <p>
                                        <?php 
                                    echo cutString($post->konten);
                                    echo "<a href='Content.php?ContentId=$id_content&' class='text-decoration-none'> Baca selengkapnya</a>";
                                    ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                    <?php
                        }
                    ?>
                        <!-- <div class="col">
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
                        </div> -->
                </div>
            </div>
        </div>
    </body>
</html>