<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Sistem Pendistribusian LPG</title>
    <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
    <link rel="icon" href="<?= base_url() ?>assets/img/icon.ico" type="image/x-icon" />
    <?php $this->load->view('SPBE/head') ?>
    <!-- Fonts and icons -->
    <script src="<?= base_url() ?>assets/js/plugin/webfont/webfont.min.js"></script>
    <script>
        WebFont.load({
            google: {
                "families": ["Lato:300,400,700,900"]
            },
            custom: {
                "families": ["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"],
                urls: ['<?= base_url() ?>assets/css/fonts.min.css']
            },
            active: function() {
                sessionStorage.fonts = true;
            }
        });
    </script>

    <!-- CSS Files -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/atlantis.min.css">

    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/demo.css">
</head>

<body>
    <div class="wrapper">
        <div class="main-header">
            <!-- Logo Header -->
            <div class="logo-header" data-background-color="blue">

                <!-- <h1 style="color: aliceblue; text-align:center">Patra Niaga</h1> -->
                <button class="navbar-toggler sidenav-toggler ml-auto" type="button" data-toggle="collapse" data-target="collapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon">
                        <i class="icon-menu"></i>
                    </span>
                </button>
                <button class="topbar-toggler more"><i class="icon-options-vertical"></i></button>
                <div class="nav-toggle">
                    <button class="btn btn-toggle toggle-sidebar">
                        <i class="icon-menu"></i>
                    </button>
                </div>
            </div>
            <!-- End Logo Header -->

            <!-- Navbar Header -->
            <nav class="navbar navbar-header navbar-expand-lg" data-background-color="blue2"></nav>
            <!-- End Navbar -->
        </div>

        <?php $this->load->view('Patra_niaga/side') ?>

        <div class="main-panel">
            <div class="content">
                <div class="panel-header bg-primary-gradient">
                    <div class="page-inner py-5">
                        <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
                            <div>
                                <h2 class="text-white pb-2 fw-bold">Patra Niaga</h2>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- isi -->
                <div class="panel panel-default">
                    <div class="page-inner mt--5">
                        <div class="row mt--2">
                            <div class="col-md-12">
                                <div class="card full-height">
                                    <div class="card-header">
                                        <h2>Data Patra Niaga</h2>
                                    </div>
                                    <div class="card-body">
                                        <div class="p-2 row">
                                            <div class="form-group col-md-6">
                                                <label for="exampleInputEmail1">Nama </label>
                                                <input type="" class="form-control" id="put_nama_patra_niaga" aria-describedby="emailHelp">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="exampleInputEmail1">No Telepon </label>
                                                <input type="" class="form-control" id="put_telepon_patra_niaga" aria-describedby="emailHelp">
                                            </div>
                                            <div class="form-group col-md-12">
                                                <label for="exampleInputEmail1">Alamat </label>
                                                <textarea class="form-control" id="put_alamat_patra_niaga"></textarea>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="exampleInputEmail1">Username</label>
                                                <input type="" class="form-control" id="put_username" aria-describedby="emailHelp">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="exampleInputEmail1">Password</label>
                                                <input type="password" class="form-control" id="put_password" aria-describedby="emailHelp">
                                            </div>
                                            <div class="form-group col-md-12">
                                                <button type="submit" class="btn btn-info pull-right" onclick="put_patra_niaga()">Update</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <footer class="footer">
                <div class="container-fluid">
                    <div class="copyright ml-auto">
                        Hak Cipta Depot LPG Lombok 
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <!--   Core JS Files   -->
    <script src="<?= base_url() ?>assets/js/core/jquery.3.2.1.min.js"></script>
    <script src="<?= base_url() ?>assets/js/core/popper.min.js"></script>
    <script src="<?= base_url() ?>assets/js/core/bootstrap.min.js"></script>

    <!-- jQuery UI -->
    <script src="<?= base_url() ?>assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
    <script src="<?= base_url() ?>assets/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js"></script>

    <!-- jQuery Scrollbar -->
    <script src="<?= base_url() ?>assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>


    <!-- Chart JS -->
    <script src="<?= base_url() ?>assets/js/plugin/chart.js/chart.min.js"></script>

    <!-- jQuery Sparkline -->
    <script src="<?= base_url() ?>assets/js/plugin/jquery.sparkline/jquery.sparkline.min.js"></script>

    <!-- Chart Circle -->
    <script src="<?= base_url() ?>assets/js/plugin/chart-circle/circles.min.js"></script>

    <!-- Datatables -->
    <script src="<?= base_url() ?>assets/js/plugin/datatables/datatables.min.js"></script>

    <!-- Bootstrap Notify -->
    <script src="<?= base_url() ?>assets/js/plugin/bootstrap-notify/bootstrap-notify.min.js"></script>

    <!-- jQuery Vector Maps -->
    <script src="<?= base_url() ?>assets/js/plugin/jqvmap/jquery.vmap.min.js"></script>
    <script src="<?= base_url() ?>assets/js/plugin/jqvmap/maps/jquery.vmap.world.js"></script>

    <!-- Sweet Alert -->
    <script src="<?= base_url() ?>assets/js/plugin/sweetalert/sweetalert.min.js"></script>

    <!-- Atlantis JS -->
    <script src="<?= base_url() ?>assets/js/atlantis.min.js"></script>

    <!-- moment -->
    <script src="<?= base_url() ?>assets/js/moment.min.js"></script>

    <script type="text/javascript">
        view_patra_niaga();
        var kode_patra_niaga;
        var kode_skid_tank;
        var kode_supir1;
        var kode_supir2;
        var password;

        function view_patra_niaga() {
            $.ajax({
                type: 'GET',
                url: " <?= base_url() ?>Rest_API/Patra_niaga?KEY-SPBE=SPBE",
                contentType: "application/json",
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded',
                    'Authorization': "Basic " + btoa("gas:gas")
                },
                dataType: 'json',
                success: function(response) {
                    console.log();
                    kode_patra_niaga = response.data[0].kode_patra_niaga;
                    $("#put_nama_patra_niaga").val(response.data[0].nama_patra_niaga);
                    $("#put_telepon_patra_niaga").val(response.data[0].telepon_patra_niaga);
                    $("#put_alamat_patra_niaga").val(response.data[0].alamat_patra_niaga);
                    $("#put_username").val(response.data[0].username);
                    $("#put_password").val(response.data[0].password);
                    password = response.data[0].password;
                }
            });
        }

        function put_patra_niaga() {
            var value_data;
            if ($("#put_password").val() == password) {
                value_data = {
                    'kode_patra_niaga': kode_patra_niaga,
                    'nama_patra_niaga': $("#put_nama_patra_niaga").val(),
                    'telepon_patra_niaga': $("#put_telepon_patra_niaga").val(),
                    'alamat_patra_niaga': $("#put_alamat_patra_niaga").val(),
                    'username': $("#put_username").val(),
                    'password': 'false',
                    'KEY-SPBE': 'SPBE'
                }
            } else {
                value_data = {
                    'kode_patra_niaga': kode_patra_niaga,
                    'nama_patra_niaga': $("#put_nama_patra_niaga").val(),
                    'telepon_patra_niaga': $("#put_telepon_patra_niaga").val(),
                    'alamat_patra_niaga': $("#put_alamat_patra_niaga").val(),
                    'username': $("#put_username").val(),
                    'password': $("#put_password").val(),
                    'KEY-SPBE': 'SPBE'
                }
            }

            $.ajax({
                type: 'POST',
                url: " <?= base_url() ?>Rest_API/Patra_niaga/edit",
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded',
                    'Authorization': "Basic " + btoa("gas:gas")
                },
                contentType: 'application/x-www-form-urlencoded; charset=utf-8',
                dataType: 'json',
                data: value_data,
                success: function(response) {
                    swal({
                        title: "Update Data Berhasil!",
                        icon: "success",
                        button: "Tutup",
                    });
                    $(".put").show();
                }
            });
        }
    </script>
</body>

</html>