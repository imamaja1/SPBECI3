<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Sistem Pendistribusian LPG</title>
    <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
    <link rel="icon" href="<?= base_url() ?>assets/img/icon.ico" type="image/x-icon" />

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

        <?php $this->load->view('SPBE/side') ?>

        <div class="main-panel">
            <div class="content">
                <div class="panel-header bg-primary-gradient">
                    <div class="page-inner py-5">
                        <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
                            <div>
                                <h2 class="text-white pb-2 fw-bold">Profil</h2>
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
                                            <div class="form-group col-md-4">
                                                <label>Nama SPBE</label>
                                                <input type="text" class="form-control" id="nama_spbe">
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label>Telepon SPBE</label>
                                                <input type="" class="form-control" id="telepon_spbe">
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label>Kapasitas TT</label>
                                                <input type="" class="form-control" id="kapasitas_tt">
                                            </div>
                                            <div class="form-group col-md-12">
                                                <label>Alamat</label>
                                                <textarea class="form-control" rows="5" id="alamat_spbe"></textarea>
                                            </div>

                                            <div class="form-group col-md-4">
                                                <label>DOT</label>
                                                <input type="" class="form-control" id="dot" onchange="mychang()">
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label>Limit</label>
                                                <input type="" class="form-control" id="limit" disabled>
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label>Jarak</label>
                                                <input type="" class="form-control" id="jarak">
                                            </div>
                                            <div class="form-group col-md-12">
                                                <button class="btn btn-info pull-right" onclick="put()">Update</button>
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
                        2020, made with <i class="fa fa-heart heart text-danger"></i> by <a href="https://www.themekita.com">Terminal</a>
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
        var id;
        var pengali;

        function data_spbe() {
            $.ajax({
                type: 'GET',
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded',
                    'Authorization': "Basic " + btoa("gas:gas")
                },
                url: " <?= base_url() ?>Rest_API/Auth?KEY-SPBE=SPBE",
                contentType: "application/json",
                dataType: 'json',
                success: function(response) {
                    id = response.kode_spbe
                    $.ajax({
                        type: 'GET',
                        headers: {
                            'Content-Type': 'application/x-www-form-urlencoded',
                            'Authorization': "Basic " + btoa("gas:gas")
                        },
                        url: " <?= base_url() ?>Rest_API/SPBE?KEY-SPBE=SPBE&id=" + id,
                        contentType: "application/json",
                        dataType: 'json',
                        success: function(response) {
                            console.log(response);
                            document.getElementById('namaspbe').innerHTML = response.data[0].nama_spbe;
                            $("#nama_spbe").val(response.data[0].nama_spbe);
                            $("#alamat_spbe").val(response.data[0].alamat_spbe);
                            $("#telepon_spbe").val(response.data[0].telepon_spbe);
                            $("#kapasitas_tt").val(response.data[0].kapasitas_tt);
                            $("#dot").val(response.data[0].dot);
                            $("#limit").val(response.data[0].limit);
                            $("#jarak").val(response.data[0].jarak);
                            $("#username").val(response.data[0].username);
                            $("#password").val(response.data[0].password);
                            pengali = response.data[0].limit / response.data[0].dot;
                        }
                    });
                }
            });
        }
        data_spbe();

        function mychang() {
            $("#limit").val($("#dot").val() * pengali);
        }

        function put() {
            const value_data = {
                'kode_spbe': id, //sesion
                'nama_spbe': $("#nama_spbe").val(),
                'pemilik_spbe': $("#pemilik_spbe").val(),
                'alamat_spbe': $("#alamat_spbe").val(),
                'telepon_spbe': $("#telepon_spbe").val(),
                'kapasitas_tt': $("#kapasitas_tt").val(),
                'dot': $("#dot").val(),
                'limit': $("#limit").val(),
                'jarak': $("#jarak").val(),
                'KEY-SPBE': 'SPBE'
            }
            console.log(value_data);
            $.ajax({
                type: 'POST',
                url: " <?= base_url() ?>Rest_API/SPBE/edit",
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded',
                    'Authorization': "Basic " + btoa("gas:gas")
                },
                contentType: 'application/x-www-form-urlencoded; charset=utf-8',
                dataType: 'json',
                data: value_data,
                success: function(response) {
                    swal({
                        title: "Edit Data Berhasil!",
                        icon: "success",
                        button: "Tutup",
                    });
                    data_spbe();
                }
            });
        }
    </script>
</body>

</html>