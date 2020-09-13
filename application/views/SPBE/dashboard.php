<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Atlantis Lite - Bootstrap 4 Admin Dashboard</title>
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

        <?php $this->load->view('SPBE/side') ?>

        <div class="main-panel">
            <div class="content">
                <div class="panel-header bg-primary-gradient">
                    <div class="page-inner py-5">
                        <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
                            <div>
                                <h2 class="text-white pb-2 fw-bold">Dashboard</h2>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- isi -->
                <div class="page-inner mt--5">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card" style="max-height:350px; overflow-y:auto;">
                                <div class="card-header">
                                    <div class="card-title">Konfirmasi Skid Tank</div>
                                </div>
                                <div class="card-body">
                                    <div id="Verifikasi"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="card" style="max-height:350px; overflow-y:auto;">
                                <div class="card-header">
                                    <div class="card-title">Progres Skid Tank</div>
                                </div>
                                <div class="card-body">
                                    <div id="progres"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-header">
                                    <div class="card-title">Activiti Skid Tank</div>
                                </div>
                                <div class="card-body">
                                    <ol class="activity-feed">
                                        <div id="datatimeline"></div>
                                    </ol>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <div class="card-title">Jarak yang ditempuh Skid Tank</div>
                                </div>
                                <div class="card-body">
                                    <div id="chart-container">
                                        <canvas id="dashboard-bar-1"></canvas>
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

    <!-- moris -->
    <script src="<?= base_url() ?>assets/js/raphael-min.js"></script>
    <script src="<?= base_url() ?>assets/js/morris.min.js"></script>

    <script type="text/javascript">
        var kode_permintaan;
        var jarak;
        var kode_skid_tank;
        var time;
        var id;

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
                data_permintaan2()
                data_permintaan()
            }
        })

        function kode3(kode, jum) {
            $.ajax({
                type: 'GET',
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded',
                    'Authorization': "Basic " + btoa("gas:gas")
                },
                url: " <?= base_url() ?>Rest_API/permintaan?KEY-SPBE=SPBE&id=" + kode,
                contentType: "application/json",
                dataType: 'json',
                success: function(response) {
                    document.getElementById('datatimeline').innerHTML = null;
                    if (jum > 1) {
                        document.getElementById('datatimeline').innerHTML += '<li class="feed-item"><time class="date" datetime="9-25">' + response.data[0].tgl + '</time><span class="text"><strong>Pemintaan Skid Tank</strong> dari <strong>SPBE</strong></span></li>'
                        if (jum > 2) {
                            document.getElementById('datatimeline').innerHTML += '<li class="feed-item"><time class="date" datetime="9-25">' + response.data[0].tgl_berangkat_tujuan + '</time><span class="text"><strong>Pemintaan Skid Tank</strong> dari <strong>SPBE</strong></span></li>'
                            if (jum > 3) {
                                document.getElementById('datatimeline').innerHTML += '<li class="feed-item"><time class="date" datetime="9-25">' + response.data[0].tgl_berangkat_tujuan + '</time><span class="text"><strong>Pemintaan Skid Tank</strong> dari <strong>SPBE</strong></span></li>'
                                if (jum > 4) {
                                    document.getElementById('datatimeline').innerHTML += '<li class="feed-item"><time class="date" datetime="9-25">' + response.data[0].tgl_berangkat_tujuan + '</time><span class="text"><strong>Pemintaan Skid Tank</strong> dari <strong>SPBE</strong></span></li>'
                                    if (jum > 5) {
                                        document.getElementById('datatimeline').innerHTML += '<li class="feed-item"><time class="date" datetime="9-25">' + response.data[0].tgl_berangkat_tujuan + '</time><span class="text"><strong>Pemintaan Skid Tank</strong> dari <strong>SPBE</strong></span></li>'
                                    }
                                }
                            }
                        }
                    }
                }

            })
        }

        function data_permintaan() {
            $.ajax({
                type: 'GET',
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded',
                    'Authorization': "Basic " + btoa("gas:gas")
                },
                url: " <?= base_url() ?>Rest_API/Permintaan_spbe/permintaan?KEY-SPBE=SPBE&id=" + id,
                contentType: "application/json",
                dataType: 'json',
                success: function(response) {
                    document.getElementById('progres').innerHTML = null;
                    if (response.status) {
                        var x = new Date(new Date().toLocaleString('en-US', {
                            timeZone: 'Asia/Jakarta'
                        }));
                        var times = moment.utc(x.getFullYear() + '-' + (x.getMonth() + 1) + '-' + x.getDate() + ' ' + x.getHours() + ':' + x.getMinutes() + ':' + x.getSeconds());
                        console.log(response)
                        $.each(response.data, function(i) {
                            if (response.data[i].status_permintaan != '2') {
                                if (response.data[i].status_patra_niaga == '2') {
                                    if (moment(response.data[i].tgl_berangkat_tujuan) < times) {
                                        if (moment(response.data[i].tgl_sampai_tujuan) < times && moment(response.data[i].tgl_berangkat_tujuan) < moment(response.data[i].tgl_sampai_tujuan)) {
                                            if (moment(response.data[i].tgl_kembali) < times) {
                                                if (moment(response.data[i].tgl_sampai_kembali) < times) {
                                                    console.log('nesxt3');
                                                    kdoe2(response.data[i].kode_permintaan, response.data[i].jarak, response.data[i].kode_skid_tank);
                                                    document.getElementById('progres').innerHTML += '<div class="mb-5" ><div class="progress-status-1"><span class="text-muted">Permintaan SPBE : ' + response.data[i].nama_spbe + ' <br> <span class="text-info d-inline-block">Proses Menuju Tujuan</span></span><span class="text-muted fw-bold pull-right"> 40%</span></div><div class="progress m-1"><div class="progress-bar progress-bar-striped bg-info" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" data-toggle="tooltip" data-placement="top" title="" data-original-title="40%"></div></div><div class="progress-status pull-right m-1"><button class="btn btn-default btn-border btn-round btn-sm" onclick="kode3(' + response.data[i].kode_permintaan + ',4)">timeline</button></div></div>'
                                                } else {
                                                    document.getElementById('progres').innerHTML += '<div class="mb-5" ><div class="progress-status-1"><span class="text-muted">Permintaan SPBE : ' + response.data[i].nama_spbe + ' <br> <span class="text-info d-inline-block">Proses Menuju Tujuan</span></span><span class="text-muted fw-bold pull-right"> 40%</span></div><div class="progress m-1"><div class="progress-bar progress-bar-striped bg-info" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" data-toggle="tooltip" data-placement="top" title="" data-original-title="40%"></div></div><div class="progress-status pull-right m-1"><button class="btn btn-default btn-border btn-round btn-sm" onclick="kode3(' + response.data[i].kode_permintaan + ',4)">timeline</button></div></div>'
                                                }
                                            } else {
                                                document.getElementById('progres').innerHTML += '<div class="mb-5" ><div class="progress-status-1"><span class="text-muted">Permintaan SPBE : ' + response.data[i].nama_spbe + ' <br> <span class="text-info d-inline-block">Proses Menuju Tujuan</span></span><span class="text-muted fw-bold pull-right"> 40%</span></div><div class="progress m-1"><div class="progress-bar progress-bar-striped bg-info" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" data-toggle="tooltip" data-placement="top" title="" data-original-title="40%"></div></div><div class="progress-status pull-right m-1"><button class="btn btn-default btn-border btn-round btn-sm" onclick="kode3(' + response.data[i].kode_permintaan + ',4)">timeline</button></div></div>'
                                            }
                                        } else {
                                            document.getElementById('progres').innerHTML += '<div class="mb-5" ><div class="progress-status-1"><span class="text-muted">Permintaan SPBE : ' + response.data[i].nama_spbe + ' <br> <span class="text-info d-inline-block">Proses Menuju Tujuan</span></span><span class="text-muted fw-bold pull-right"> 40%</span></div><div class="progress m-1"><div class="progress-bar progress-bar-striped bg-info" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" data-toggle="tooltip" data-placement="top" title="" data-original-title="40%"></div></div><div class="progress-status pull-right m-1"><button class="btn btn-default btn-border btn-round btn-sm" onclick="kode3(' + response.data[i].kode_permintaan + ',4)">timeline</button></div></div>'
                                        }
                                    } else {
                                        document.getElementById('progres').innerHTML += '<div class="mb-5" ><div class="progress-status-1"><span class="text-muted">Permintaan SPBE : ' + response.data[i].nama_spbe + ' <br> <span class="text-info d-inline-block">Proses Menuju Tujuan</span></span><span class="text-muted fw-bold pull-right"> 40%</span></div><div class="progress m-1"><div class="progress-bar progress-bar-striped bg-info" role="progressbar" style="width: 20%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" data-toggle="tooltip" data-placement="top" title="" data-original-title="40%"></div></div><div class="progress-status pull-right m-1"><button class="btn btn-default btn-border btn-round btn-sm" onclick="kode3(' + response.data[i].kode_permintaan + ',3)">timeline</button></div></div>'
                                    }
                                } else if (response.data[i].status_patra_niaga == '1') {
                                    document.getElementById('progres').innerHTML += '<div class="mb-5" ><div class="progress-status-1"><span class="text-muted">Permintaan SPBE : ' + response.data[i].nama_spbe + ' <br> <span class="text-info d-inline-block">Proses Menuju Tujuan</span></span><span class="text-muted fw-bold pull-right"> 40%</span></div><div class="progress m-1"><div class="progress-bar progress-bar-striped bg-info" role="progressbar" style="width: 10%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" data-toggle="tooltip" data-placement="top" title="" data-original-title="40%"></div></div><div class="progress-status pull-right m-1"><button class="btn btn-default btn-border btn-round btn-sm" onclick="kode3(' + response.data[i].kode_permintaan + ',2)">timeline</button></div></div>'
                                }
                            }
                        });
                    }
                }
            })
        }

        $.ajax({
            type: 'GET',
            headers: {
                'Content-Type': 'application/x-www-form-urlencoded',
                'Authorization': "Basic " + btoa("gas:gas")
            },
            url: " <?= base_url() ?>Rest_API/Aktifitas/Skid_tank?KEY-SPBE=SPBE",
            contentType: "application/json",
            dataType: 'json',
            success: function(response) {
                console.log(response.data)
                Morris.Bar({
                    element: 'dashboard-bar-1',
                    data: response.data,
                    xkey: 'nopol',
                    ykeys: ['jarak'],
                    labels: ['Jarak Yang Ditempuh'],
                    barColors: ['#33414E', '#1caf9a'],
                    gridTextSize: '12px',
                    hideHover: true,
                    resize: true,
                    gridLineColor: '#E5E5E5'
                });
            }
        })

        function data_permintaan2() {
            $.ajax({
                type: 'GET',
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded',
                    'Authorization': "Basic " + btoa("gas:gas")
                },
                url: " <?= base_url() ?>Rest_API/Permintaan_spbe?KEY-SPBE=SPBE&id=" + id,
                contentType: "application/json",
                dataType: 'json',
                success: function(response) {
                    document.getElementById('Verifikasi').innerHTML = null;
                    console.log(response);
                    if (response.status) {
                        $.each(response.data, function(i) {
                            document.getElementById('Verifikasi').innerHTML += '<div class="card p-3"><div class=" d-flex row"><div class="col-md-8"><h6 class="text-uppercase fw-bold mb-1">Skid Tang dengan NOPOL : ' + response.data[i].nopol + ' <span></h6><span class="text-uppercase text-muted d-block"><table><tr><td>No SPA</td><td> : ' + response.data[i].no_spa + '</td></tr><tr><td>Tanggal SPA</td><td> : ' + response.data[i].tgl_spa + '</td></tr><tr><td>Kapasitas TT </td><td> : ' + response.data[i].kapasitas_tt + '</td></tr></table></span></div><div class=" col-md-4 pull-right mt-2"><button class="btn btn-success btn-border btn-round pull-right btn-sm" onclick="kode_vefikasi(' + response.data[i].kode_permintaan + ')">Konfirmasui</button></div></div></div>'
                        });
                    }
                }
            });
        }

        function kode_vefikasi(data) {
            swal({
                title: 'Anda yakin?',
                text: "Permintaan akan dikonfirmasi!",
                icon: 'info',
                buttons: {
                    cancel: {
                        visible: true,
                        className: 'btn btn-danger'
                    },
                    confirm: {
                        text: 'Konfirmasi!',
                        className: 'btn btn-success'
                    }
                }
            }).then((e) => {
                if (e) {
                    konfirmasi(data)
                } else {
                    swal.close();
                }
            });
        }

        function konfirmasi(data) {
            const value_data = {
                'kode_permintaan': data,
                'KEY-SPBE': 'SPBE'
            }
            $.ajax({
                type: 'POST',
                url: " <?= base_url() ?>Rest_API/Permintaan_spbe/edit",
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded',
                    'Authorization': "Basic " + btoa("gas:gas")
                },
                dataType: 'json',
                data: value_data,
                success: function(response) {
                    swal({
                        title: "Konfirmasi Data Berhasil!",
                        icon: "success",
                        button: "close",
                    })

                    data_permintaan();
                    data_permintaan2();
                }
            });
        }
        // $.ajax({
        //     type: 'GET',
        //     headers: {
        //         'Content-Type': 'application/x-www-form-urlencoded',
        //         'Authorization': "Basic " + btoa("gas:gas")
        //     },
        //     url: " <?= base_url() ?>Rest_API/aktifitas/spbe?KEY-SPBE=SPBE",
        //     contentType: "application/json",
        //     dataType: 'json',
        //     success: function(response) {
        //         Morris.Bar({
        //             element: 'dashboard-bar-2',
        //             data: response.data,
        //             xkey: 'nama_spbe',
        //             ykeys: ['jumlah_diterima', 'jumlah_ditolak'],
        //             labels: ['Jumlah Permintaan Diterima', 'Jumlah Permintaan Ditolak'],
        //             barColors: ['#33414E', '#1caf9a'],
        //             gridTextSize: '10px',
        //             hideHover: true,
        //             resize: true,
        //             gridLineColor: '#E5E5E5'
        //         });
        //     }
        // })
    </script>
</body>

</html>