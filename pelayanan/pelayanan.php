<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="img/favicon.png" type="image/png">
    <title>Griya Sehat</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../vendors/linericon/style.css">
    <link rel="stylesheet" href="../css/font-awesome.min.css">
    <!-- main css -->
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/responsive.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- nice select CSS -->
    <link rel="stylesheet" href="css/nice-select.css">
    <!-- style CSS -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <!--================Header Menu Area =================-->
    <header class="header_area">
        <div class="main_menu">
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="container box_1620">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <a class="navbar-brand logo_h" href="index.html"><img src="http://localhost/covid19/img/logone.png" width="100px" alt=""></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                        <ul class="nav navbar-nav menu_nav ml-auto">
                            <li class="nav-item active"><a class="nav-link" href="../index.php">Beranda</a></li>
                            <li class="nav-item"><a class="nav-link" href="checkup.php">Check Up</a></li>
                            <li class="nav-item"><a class="nav-link" href="data_checkup.php">Data Check Up</a></li>
                            <li class="nav-item"><a class="nav-link" href="pelayanan.php">Pelayanan</a></li>
                            <li class="nav-item"><a class="nav-link" href="data_pelayanan.php">Data Pelayanan</a></li>
                            <li class="nav-item"><a class="nav-link" href="http://localhost/covid19/login/logout.php">Log Out</a></li>

                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </header>
    <!--================Header Menu Area =================-->
    <!--================Home Banner Area =================-->
    <section class="banner_area">
        <div class="box_1620">
            <div class="banner_inner d-flex align-items-center">
                <div class="container">
                    <div class="banner_content text-center">
                        <h2>Pelayanan</h2>
                        <h3>---------</h3>
                        <a href="checkup.php" class="genric-btn info-border radius">CHECK UP</a>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
    <!--================End Home Banner Area =================-->
    <!--::regervation_part start::-->
    <section class="regervation_part section_padding">
        <div class="container">
            <div class="row align-items-center regervation_content">
                <div class="col-lg-7">
                    <div class="regervation_part_iner">
                        <form method="post" action="proses-periksa.php">
                            <h2>Periksa Hari Ini</h2>
                            <div class="form-row">
                                <div class="form-group col-md-5">
                                    <input type="text" class="form-control" name="id_periksa" placeholder="No Identitas (KTP/SIM/lainnya)">
                                </div>
                                <div class="form-group col-md-6">
                                    <input type="text" class="form-control" name="nama" placeholder="Nama Pasien">
                                </div>
                                <div class="form-group col-md-4">
                                    <input type="text" class="form-control" name="usia" placeholder="Usia Pasien">
                                </div>
                                <div class="form-group col-md-5">
                                    <select class="form-control" name="id_dokter" id="Select">
                                        <option value="pilih_dokter " selected> Pilih Dokter </option>
                                        <option value="dokter_umum">Dokter Umum</option>
                                        <option value="dokter_spesialis">Dokter Spesialis</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-10">
                                    <textarea class="form-control" name="catatan" id="Textarea" rows="2" placeholder="Catatan "></textarea>
                                </div>
                            </div>
                            <div class="regerv_btn">
                                <button type="submit" class="btn_2" name="antre">ANTRE</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-5 col-md-6">
                    <img src="health_.png" width="800px" alt="" class="reservation_img_iner">
                </div>
            </div>
        </div>

    </section>
    <!--::regervation_part end::-->

    <!-- jquery plugins here-->
    <script src="js/jquery-1.12.1.min.js"></script>
    <!-- owl carousel js -->

    <script src="js/jquery.nice-select.min.js"></script>
    <!-- custom js -->
    <script src="js/custom.js"></script>

    <p>
        <center>Copyright &copy; 2020 <a href="https://www.instagram.com/ozzas_/">Memoreza Sabana</a></center>
    </p>
</body>

</html>