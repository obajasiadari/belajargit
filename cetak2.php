<!DOCTYPE html>
<html>

<head>
    <title>Print Tiket BUS ANTAR DIMENSI</title>

</head>

<body>

    <!-- Portfolio Modal 1-->

    <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" aria-labelledby="portfolioModal1" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
                <div class="modal-body pb-5">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8" id="tiket1">
                                <!-- Portfolio Modal - Title-->
                                <h2 class="portfolio-modal-title text-secondary text-center text-uppercase mb-0">Tiket
                                </h2>
                                <!-- Icon Divider-->
                                <div class="divider-custom">
                                    <div class="divider-custom-line"></div>
                                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                    <div class="divider-custom-line"></div>
                                </div>
                                <!-- Portfolio Modal - Image-->
                                <img class="img-fluid rounded mb-5" width="400px" src="assets/img/portfolio/a-n.png" alt="..." />
                                <!-- Portfolio Modal - Text-->
                                <p class="mb-4">Pesan Tiketmu : Asgard - Nganjuk</p>
                                <form action="proses/input-proses.php" method="post" enctype="multipart/form-data">
                                    <div class="form-group">

                                        <label for="name">Nama Lengkap</label>
                                        <input type="text" class="form-control" id="name" aria-describedby="textHelp" placeholder="Rian" name="nama_pelanggan">
                                    </div>
                                    <div class="form-group">
                                        <label for="ktp">No KTP</label>
                                        <input type="number" name="nik" class="form-control" id="ktp" aria-describedby="textHelp" placeholder="2171100905019006"><br>
                                    </div>
                                    <div class="form-group">
                                        <label for="telepon">No Telepon</label>
                                        <input type="tel" name="no_hp" class="form-control" id="telepon" aria-describedby="textHelp" placeholder="08117007474"><br>

                                    </div>
                                    <div class="form-group">
                                        <label for="kelas">Kelas Penumpang</label>
                                        <select name="kelas" class="custom-select" id="kelas">
                                            <option>Ekonomi</option>
                                            <option>Bisnis</option>
                                            <option>Eksekutif</option>
                                        </select><br>
                                    </div>
                                    <div class="form-group">
                                        <label for="tanggal">Jadwal Keberangkatan</label>
                                        <input type="date" name="tanggal" class="form-control" id="InputTiket" aria-describedby="textHelp" date-date-format="dd-mm-YYYY" placeholder="09-05-2022"><br>
                                        <br><br>
                                        <br>
                                    </div>
                                    <div class="form-group">
                                        <label for="telepon">Jumlah Penumpang</label>
                                        <input type="number" name="jml" class="form-control" id="InputTiket" aria-describedby="textHelp" placeholder="2" max="59">
                                        <br><small id="textHelp" class="form-text text-muted">Bukan Lansia (Usia < 60)</small>
                                                <br>

                                    </div>
                                    <div class="form-group">
                                        <label for="telepon">Jumlah Penumpang Lansia</label>
                                        <input type="number" name="jml_lansia" class="form-control" id="telepon" aria-describedby="textHelp" placeholder="1">

                                        <br>
                                        <small id="textHelp" class="form-text text-muted">Usia 60 ke
                                            atas</small>
                                        <br>
                                    </div>

                                    <div class="form-group">
                                        <label for="telepon">Harga Tiket : 200000</label>
                                    </div>
                                    <div class="form-group">
                                        <label for="telepon">Total Biaya : 580000</label>
                                        <br>
                                        <br>
                                    </div>

                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                        <label class="form-check-label" for="exampleCheck1">Saya dan/atau
                                            rombongan
                                            telah membaca, memahami dan setuju berdasarkan syarat dan <a href="#">ketentuan</a> yang telah ditetapkan</label>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        window.print();
    </script>

</body>

</html>