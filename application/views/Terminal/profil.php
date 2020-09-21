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

                <!-- <h1 style="color: aliceblue; text-align:center">Terminal</h1> -->
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

        <?php $this->load->view('Terminal/side') ?>

        <div class="main-panel">
            <div class="content">
                <div class="panel-header bg-primary-gradient">
                    <div class="page-inner py-5">
                        <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
                            <div>
                                <h2 class="text-white pb-2 fw-bold">Terminal</h2>
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
                                                <label>Nama Terminal</label>
                                                <input type="text" class="form-control" id="nama_terminal">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label>Telepon Terminal</label>
                                                <input type="" class="form-control" id="telepon_terminal">
                                            </div>
                                            <div class="form-group col-md-12">
                                                <label>Alamat Terminal</label>
                                                <textarea class="form-control" rows="5" id="alamat_terminal"></textarea>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label>Username</label>
                                                <input type="" class="form-control" id="username">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label>Password</label>
                                                <input type="password" class="form-control" id="password">
                                            </div>
                                        </div>
                                        <div class="panel-footer">
                                            <button class="btn btn-info pull-right" onclick="put()">Update</button>
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
        var id;
        var password;
        $.ajax({
            type: 'GET',
            headers: {
                'Content-Type': 'application/x-www-form-urlencoded',
                'Authorization': "Basic " + btoa("gas:gas")
            },
            url: " <?= base_url() ?>Rest_API/auth?KEY-SPBE=SPBE",
            contentType: "application/json",
            dataType: 'json',
            success: function(response) {
                console.log(response);
                id = response.kode_terminal;
                $.ajax({
                    type: 'GET',
                    url: " <?= base_url() ?>Rest_API/Terminal_lpg?id=" + id + "&KEY-SPBE=SPBE",
                    headers: {
                        'Content-Type': 'application/x-www-form-urlencoded',
                        'Authorization': "Basic " + btoa("gas:gas")
                    },
                    contentType: "application/json",
                    dataType: 'json',
                    success: function(response) {
                        console.log(response);
                        $("#nama_terminal").val(response.data[0].nama_terminal);
                        $("#telepon_terminal").val(response.data[0].telepon_terminal);
                        $("#alamat_terminal").val(response.data[0].alamat_terminal);
                        $("#username").val(response.data[0].username);
                        $("#password").val(response.data[0].password);
                        password = response.data[0].password;
                    }
                });
            }
        })


        function put() {
            var value_data;
            console.log('put');
            if ($("#password").val() == password) {
                value_data = {
                    'kode_terminal': id, //sesion
                    'nama_terminal': $("#nama_terminal").val(),
                    'telepon_terminal': $("#telepon_terminal").val(),
                    'alamat_terminal': $("#alamat_terminal").val(),
                    'username': $("#username").val(), //sesion
                    'password': 'false',
                    'KEY-SPBE': 'SPBE'
                }
            } else {
                value_data = {
                    'kode_terminal': id, //sesion
                    'nama_terminal': $("#nama_terminal").val(),
                    'telepon_terminal': $("#telepon_terminal").val(),
                    'alamat_terminal': $("#alamat_terminal").val(),
                    'username': $("#username").val(), //sesion
                    'password': $("#password").val(), //sesion
                    'KEY-SPBE': 'SPBE'
                }
            }
            $.ajax({
                type: 'POST',
                url: " <?= base_url() ?>Rest_API/Terminal_lpg/edit",
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
                    $.ajax({
                        type: 'GET',
                        url: " <?= base_url() ?>Rest_API/Terminal_lpg?id=" + id + "&KEY-SPBE=SPBE",
                        headers: {
                            'Content-Type': 'application/x-www-form-urlencoded',
                            'Authorization': "Basic " + btoa("gas:gas")
                        },
                        contentType: "application/json",
                        dataType: 'json',
                        success: function(response) {
                            $("#nama_terminal").val(response.data[0].nama_terminal);
                            $("#telepon_terminal").val(response.data[0].telepon_terminal);
                            $("#alamat_terminal").val(response.data[0].alamat_terminal);
                            $("#username").val(response.data[0].username);
                            $("#password").val(response.data[0].password);
                        }
                    });
                }
            });
        }
    </script>
</body>

</html>