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
                            <li class="nav-item"><a class="nav-link" href="data_checkup.php">Data Check Up</a></li>
                            <li class="nav-item"><a class="nav-link" href="data_pelayanan.php">Data Pelayanan</a></li>
                            <li class="nav-item"><a class="nav-link" href="../diriku.php">Tentang</a></li>

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
                        <h2>Data Check Up</h2>
                        <div class="page_link">
                            <a href="../index.php">Beranda</a>
                            <a href="data_checkup.php">Data Check Up</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================End Home Banner Area =================-->

    <?php
    include '../koneksi.php';
    $sql = "SELECT * FROM pelayanan INNER JOIN hasil ON pelayanan.id_hasil=hasil.id_hasil ORDER BY tgl_tes";

    $res = mysqli_query($koneksi, $sql);
    $dapas = array();

    while ($data = mysqli_fetch_assoc($res)) {
        $dapas[] = $data;
    }
    ?>

    <div class="card">
        <div id="cont" class="card-header">
            <div id="cont" class="card-body">
                <table class="table table-bordered">
                    <thead align="center">
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Usia</th>
                            <th scope="col">Alamat</th>
                            <th scope="col">Hasil Check</th>
                            <th scope="col">Tanggal Check</th>
                        </tr>
                    </thead>
                    <?php
                    $no = 1;
                    foreach ($dapas as $d) { ?>
                        <tr>
                            <td scope="row" align="center"><?= $no ?></td>
                            <td><?= $d['nama'] ?></th>
                            <td align="center"><?= $d['usia'] ?></th>
                            <td><?= $d['alamat'] ?></th>
                            <td align="center"><?= $d['hasil'] ?></th>
                            <td align="center"><?= $d['tgl_tes'] ?></th>
                        </tr>
                    <?php
                        $no++;
                    }
                    ?>
                </table>

            </div>
        </div>
    </div>
    
</body>