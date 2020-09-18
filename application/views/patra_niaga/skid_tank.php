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

                <!-- <h1 style="color: aliceblue; text-align:center">Terminal</h1>  -->
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
                                        <div class="d-flex align-items-center">
                                            <h4 class="card-title">Data Skid Tank</h4>
                                            <button class="btn btn-primary btn-round ml-auto" data-toggle="modal" data-target="#inputdata" onclick="$('.validasi').hide();">
                                                <i class="fa fa-plus"></i>
                                                Tambah Data
                                            </button>
                                        </div>
                                    </div>
                                    <!-- modal input data -->
                                    <div class="modal fade bd-example-modal-lg" id="inputdata" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                        <div class="modal-dialog modal-lg" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h3 class="modal-title" id="exampleModalLongTitle">Input Data</h3>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="modal-body row">
                                                        <div class="alert alert-danger validasi col-md-12" style="display: none;" role="validasi">
                                                            Data Skid Tank tidak boleh kosong
                                                        </div>
                                                        <div class="form-group col-md-4">
                                                            <label for="exampleInputEmail1">NOPOL</label>
                                                            <input type="" class="form-control" id="post_nopol" aria-describedby="emailHelp">
                                                        </div>
                                                        <div class="form-group col-md-2">
                                                            <label for="exampleInputEmail1">Kapasitas</label>
                                                            <input type="" class="form-control" id="post_kapasitas" aria-describedby="emailHelp">
                                                        </div>
                                                        <div class="form-group col-md-3">
                                                            <label for="exampleInputEmail1">Odometer</label>
                                                            <input class="form-control" id="post_odometer" aria-describedby="emailHelp">
                                                        </div>
                                                        <div class="form-group col-md-3">
                                                            <label for="exampleInputEmail1">Status</label>
                                                            <select class="form-control" id="post_status">
                                                                <option class="form-control" id="1" value="1">Ready</option>
                                                                <option class="form-control" id="3" value="3">Not Ready</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <hr>
                                                        </div>
                                                        <div class="form-group col-md-6">
                                                            <label for="exampleInputEmail1">Nama Supir 1</label>
                                                            <input type="" class="form-control" id="post_nama_supir1" aria-describedby="emailHelp">
                                                        </div>
                                                        <div class="form-group col-md-6">
                                                            <label for="exampleInputEmail1">Tanggal Lahir</label>
                                                            <input type="date" class="form-control" id="post_tgl_lahir1" aria-describedby="emailHelp">
                                                        </div>
                                                        <div class="form-group col-md-4">
                                                            <label for="exampleInputEmail1">NO HP</label>
                                                            <input type="" class="form-control" id="post_no_hp1" aria-describedby="emailHelp">
                                                        </div>
                                                        <div class="form-group col-md-4">
                                                            <label for="exampleInputEmail1">NO SIM</label>
                                                            <input type="" class="form-control" id="post_no_sim1" aria-describedby="emailHelp">
                                                        </div>
                                                        <div class="form-group col-md-4">
                                                            <label for="exampleInputEmail1">Tanggal Berlaku</label>
                                                            <input type="date" class="form-control" id="post_tgl_berlaku1" aria-describedby="emailHelp">
                                                        </div>
                                                        <div class="form-group col-md-6">
                                                            <label for="exampleInputEmail1">Nama Supir 2</label>
                                                            <input type="" class="form-control" id="post_nama_supir2" aria-describedby="emailHelp">
                                                        </div>
                                                        <div class="form-group col-md-6">
                                                            <label for="exampleInputEmail1">Tanggal Lahir</label>
                                                            <input type="date" class="form-control" id="post_tgl_lahir2" aria-describedby="emailHelp">
                                                        </div>
                                                        <div class="form-group col-md-4">
                                                            <label for="exampleInputEmail1">NO HP</label>
                                                            <input type="" class="form-control" id="post_no_hp2" aria-describedby="emailHelp">
                                                        </div>
                                                        <div class="form-group col-md-4">
                                                            <label for="exampleInputEmail1">NO SIM</label>
                                                            <input type="" class="form-control" id="post_no_sim2" aria-describedby="emailHelp">
                                                        </div>
                                                        <div class="form-group col-md-4">
                                                            <label for="exampleInputEmail1">Tanggal Berlaku</label>
                                                            <input type="date" class="form-control" id="post_tgl_berlaku2" aria-describedby="emailHelp">
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
                                                        <button type="button" class="btn btn-primary" onclick="post_data()">Simpan</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table id="datatable" class="display table table-striped table-hover">
                                                <thead>
                                                    <tr>
                                                        <th>No</th>
                                                        <th>NOPOL</th>
                                                        <th>Kapasitas (MT)</th>
                                                        <th>Odometer</th>
                                                        <th>Status</th>
                                                        <th>Keterangan</th>
                                                        <th style="width: 20px;">Action</th>
                                                    </tr>
                                                </thead>
                                            </table>
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
    </div>

    <!-- modal edit data -->
    <div class="modal fade bd-example-modal-lg" id="editdata" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title" id="exampleModalLongTitle">Edit Data</h3>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="modal-body row">
                        <div class="form-group col-md-4">
                            <label for="exampleInputEmail1">NOPOL</label>
                            <input type="" class="form-control" id="put_nopol" aria-describedby="emailHelp">
                        </div>
                        <div class="form-group col-md-2">
                            <label for="exampleInputEmail1">Kapasitas</label>
                            <input type="" class="form-control" id="put_kapasitas" aria-describedby="emailHelp">
                        </div>
                        <div class="form-group col-md-3">
                            <label for="exampleInputEmail1">Odometer</label>
                            <input class="form-control" id="put_odometer" aria-describedby="emailHelp">
                        </div>
                        <div class="form-group col-md-3">
                            <label for="exampleInputEmail1">Status</label>
                            <select class="form-control" id="put_status">
                                <option class="form-control" id="1" value="1">Ready</option>
                                <option class="form-control" id="3" value="3">Not Ready</option>
                            </select>
                        </div>
                        <div class="row">
                            <hr>
                        </div>
                        <div class="modal-body row">
                            <div class="form-group col-md-6">
                                <label for="exampleInputEmail1">Nama Supir 1</label>
                                <input type="" class="form-control" id="put_nama_supir1" aria-describedby="emailHelp">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="exampleInputEmail1">Tanggal Lahir</label>
                                <input type="date" class="form-control" id="put_tgl_lahir1" aria-describedby="emailHelp">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="exampleInputEmail1">NO HP</label>
                                <input type="" class="form-control" id="put_no_hp1" aria-describedby="emailHelp">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="exampleInputEmail1">NO SIM</label>
                                <input type="" class="form-control" id="put_no_sim1" aria-describedby="emailHelp">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="exampleInputEmail1">Tanggal Berlaku</label>
                                <input type="date" class="form-control" id="put_tgl_berlaku1" aria-describedby="emailHelp">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="exampleInputEmail1">Nama Supir 2</label>
                                <input type="" class="form-control" id="put_nama_supir2" aria-describedby="emailHelp">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="exampleInputEmail1">Tanggal Lahir</label>
                                <input type="date" class="form-control" id="put_tgl_lahir2" aria-describedby="emailHelp">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="exampleInputEmail1">NO HP</label>
                                <input type="" class="form-control" id="put_no_hp2" aria-describedby="emailHelp">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="exampleInputEmail1">NO SIM</label>
                                <input type="" class="form-control" id="put_no_sim2" aria-describedby="emailHelp">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="exampleInputEmail1">Tanggal Berlaku</label>
                                <input type="date" class="form-control" id="put_tgl_berlaku2" aria-describedby="emailHelp">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
                    <button type="button" class="btn btn-primary" onclick="put_data()">Simpan</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade bd-example-modal-lg" id="timeline" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title" id="exampleModalLongTitle">Data Skid Tank</h3>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <ol class="activity-feed">
                        <div id="datatimeline"></div>
                    </ol>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
                </div>
            </div>
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
        var password_patra;
        var x = new Date(new Date().toLocaleString('en-US', {
            timeZone: 'Asia/Jakarta'
        }));

        var times = moment(x.getFullYear() + '-' + (x.getMonth() + 1) + '-' + x.getDate() + ' ' + x.getHours() + ':' + x.getMinutes() + ':' + x.getSeconds());


        function kode3(kode) {
            console.log(kode)
            $.ajax({
                type: 'GET',
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded',
                    'Authorization': "Basic " + btoa("gas:gas")
                },
                url: " <?= base_url() ?>Rest_API/Permintaan/Skid_tank?KEY-SPBE=SPBE&id=" + kode,
                contentType: "application/json",
                dataType: 'json',
                success: function(response) {
                    document.getElementById('datatimeline').innerHTML = null;
                    if (response.data[0].status_permintaan != '2') {
                        if (response.data[0].status_patra_niaga == '2') {
                            if (moment(response.data[0].tgl_berangkat_tujuan) < times) {
                                document.getElementById('datatimeline').innerHTML += '<li class="feed-item"><time class="date" datetime="9-25">' + response.data[0].tgl + '</time><span class="text"><strong>Skid Tank </strong> bersiap menuju <strong>SPBE</strong></span></li>'
                                if (moment(response.data[0].tgl_berangkat_tujuan) < moment(response.data[0].tgl_sampai_tujuan)) {
                                    document.getElementById('datatimeline').innerHTML += '<li class="feed-item"><time class="date" datetime="9-25">' + response.data[0].tgl + '</time><span class="text"><strong>Skid Tank </strong>dalam perjalana menuju <strong>SPBE</strong></span></li>'
                                    if (moment(response.data[0].tgl_sampai_tujuan) < times) {
                                        document.getElementById('datatimeline').innerHTML += '<li class="feed-item"><time class="date" datetime="9-25">' + response.data[0].tgl_sampai_tujuan + '</time><span class="text"><strong>Skid Tank </strong> Telah sampai di <strong>SPBE</strong></span></li>'
                                        if (moment(response.data[0].tgl_kembali) < times) {
                                            document.getElementById('datatimeline').innerHTML += '<li class="feed-item"><time class="date" datetime="9-25">' + response.data[0].tgl_kembali + '</time><span class="text"><strong>Skid Tank</strong> Kembali ke <strong>Pangkalan</strong></span></li>'
                                        }
                                    }
                                }
                            }
                        }
                    }
                }
            })
        }

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
                    password_patra = response.data[0].password;
                }
            });
        }

        function put_patra_niaga() {
            var value_data;
            if ($("#put_password").val() == password_patra) {
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
                    $(".put").show();
                    swal({
                        title: "Edit Data Berhasil!",
                        icon: "success",
                        button: "close",
                    });

                    view_patra_niaga()
                }
            });
        }
        $('#datatable').DataTable({
            ajax: {
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded',
                    'Authorization': "Basic " + btoa("gas:gas")
                },
                method: "GET",
                url: "<?= base_url() ?>/Rest_API/Skid_tank?KEY-SPBE=SPBE",
            },
            columns: [{
                data: null
            }, {
                data: "nopol"
            }, {
                data: "kapasitas"
            }, {
                data: "odometer"
            }, {
                data: "status",
                render: function(data, type, row, meta) {
                    if (data == '1') {
                        return '<span class="badge badge-info">Ready</span>';
                    } else if (data == '2') {
                        return '<span class="badge badge-default">Waiting..</span>'
                    } else if (data == '3') {
                        return '<span class="badge badge-danger">Not Ready</span>'
                    }
                }
            }, {
                data: "",
                render: function(data, type, row, meta) {
                    if (row['status'] == '1') {
                        return '<span class="badge badge-info">Ready</span>';
                    } else if (row['status'] == '2') {
                        return '<a href="#" data-toggle="modal" data-target="#timeline" onclick="kode3(' + row['kode_skid_tank'] + ')"><span class="badge badge-default" >Skid Tank Masih dalam Perjalanan</span></a>'
                    } else if (row['status'] == '3') {
                        return '<span class="badge badge-danger">Tidak Dapat Digunakan</span>'
                    }
                }
            }, {
                data: "kode_skid_tank",
                className: "center",
                render: function(data, type, row, meta) {
                    return '<div class="form-button-action"><button data-toggle="modal" data-target="#editdata" onclick="view_data(' + data + ')" type="button" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Edit Task" ><i class="fa fa-edit"></i></button><button type="button" onclick="delete_data(' + data + ')" data-toggle="tooltip" title="" class="btn btn-link btn-danger" data-original-title="Remove"><i class="fa fa-times"></i></button></div>'
                }
            }, ],
            "fnCreatedRow": function(row, data, index) {
                $('td', row).eq(0).html(index + 1);
            },
        });

        function view_data(id) {
            console.log(id);
            $.ajax({
                type: 'GET',
                url: " <?= base_url() ?>Rest_API/Skid_tank?KEY-SPBE=SPBE&id=" + id,
                contentType: "application/json",
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded',
                    'Authorization': "Basic " + btoa("gas:gas")
                },
                dataType: 'json',
                success: function(response) {
                    console.log(response)
                    kode_skid_tank = response.data[0].kode_skid_tank;
                    $("#put_nopol").val(response.data[0].nopol);
                    $("#put_kapasitas").val(response.data[0].kapasitas);
                    $("#put_odometer").val(response.data[0].odometer);
                    $("#put_status").val(response.data[0].status);

                    kode_supir1 = response.data[0].kode_supir;
                    $("#put_nama_supir1").val(response.data[0].nama_supir);
                    $("#put_no_hp1").val(response.data[0].no_hp);
                    $("#put_no_sim1").val(response.data[0].no_sim);
                    $("#put_tgl_berlaku1").val(response.data[0].tahun_berlaku);
                    $("#put_tgl_lahir1").val(response.data[0].tgl_lahir);

                    kode_supir2 = response.data[1].kode_supir;
                    $("#put_nama_supir2").val(response.data[1].nama_supir);
                    $("#put_no_hp2").val(response.data[1].no_hp);
                    $("#put_no_sim2").val(response.data[1].no_sim);
                    $("#put_tgl_berlaku2").val(response.data[1].tahun_berlaku);
                    $("#put_tgl_lahir2").val(response.data[1].tgl_lahir);
                }
            });
        }

        function post_data() {
            console.log('post');
            if ($("#post_nopol").val() != '' && $("#post_kapasitas").val() != '' && $("#post_odometer").val() != '' &&
                $("#post_nama_supir1").val() != '' && $("#post_tgl_lahir1").val() != '' && $("#post_no_hp1").val() != '' &&
                $("#post_no_sim1").val() != '' && $("#post_tgl_berlaku1").val() != '' && $("#post_nama_supir2").val() != '' && $("#post_tgl_lahir2").val() != '' && $("#post_no_hp2").val() != '' && $("#post_no_sim2").val() != '' && $("#post_tgl_berlaku2").val() != '') {
                const value_data = {
                    'nopol': $("#post_nopol").val(),
                    'kapasitas': $("#post_kapasitas").val(),
                    'odometer': $("#post_odometer").val(),
                    'status': $('#post_status option:selected').attr('id'),
                    // supir 1
                    'nama_supir1': $("#post_nama_supir1").val(),
                    'tgl_lahir1': $("#post_tgl_lahir1").val(),
                    'no_hp1': $("#post_no_hp1").val(),
                    'no_sim1': $("#post_no_sim1").val(),
                    'tahun_berlaku1': $("#post_tgl_berlaku1").val(),
                    // supir 2
                    'nama_supir2': $("#post_nama_supir2").val(),
                    'tgl_lahir2': $("#post_tgl_lahir2").val(),
                    'no_hp2': $("#post_no_hp2").val(),
                    'no_sim2': $("#post_no_sim2").val(),
                    'tahun_berlaku2': $("#post_tgl_berlaku2").val(),
                    'KEY-SPBE': 'SPBE'
                }
                console.log(value_data);
                $.ajax({
                    type: 'POST',
                    url: " <?= base_url() ?>Rest_API/Skid_tank",
                    headers: {
                        'Content-Type': 'application/x-www-form-urlencoded',
                        'Authorization': "Basic " + btoa("gas:gas")
                    },
                    contentType: 'application/x-www-form-urlencoded; charset=utf-8',
                    dataType: 'json',
                    data: value_data,
                    success: function(response) {
                        if (response.status == 'false') {
                            swal({
                                title: "Penambahan Data Gagal!",
                                text: "Nopol sudah terpakai",
                                icon: "warning",
                                button: "Tutup",
                            });
                        } else {
                            swal({
                                title: "Penambahan Data Berhasil!",
                                icon: "success",
                                button: "Tutup",
                            });
                            $(".delete2").hide();
                            $(".put2").hide();
                            $(".tambah2").show();
                            $("#datatable").DataTable().ajax.reload();
                            $('#inputdata').modal('hide')
                            empty()
                        }
                    }
                });
            } else {
                $('.validasi').show();
                swal({
                    title: "Data tidak boleh kosong!",
                    text: "Mohon periksa kembali data yang dimasukan",
                    icon: "warning",
                    button: "Tutup",
                });
            }
        }

        function put_data() {
            console.log('put');
            const value_data = {
                'kode_skid_tank': kode_skid_tank,
                'nopol': $("#put_nopol").val(),
                'kapasitas': $("#put_kapasitas").val(),
                'odometer': $("#put_odometer").val(),
                'status': $('#put_status option:selected').attr('id'),
                // supir 1
                'kode_supir1': kode_supir1,
                'nama_supir1': $("#put_nama_supir1").val(),
                'tgl_lahir1': $("#put_tgl_lahir1").val(),
                'no_hp1': $("#put_no_hp1").val(),
                'no_sim1': $("#put_no_sim1").val(),
                'tahun_berlaku1': $("#put_tgl_berlaku1").val(),
                // supir 2
                'kode_supir2': kode_supir2,
                'nama_supir2': $("#put_nama_supir2").val(),
                'tgl_lahir2': $("#put_tgl_lahir2").val(),
                'no_hp2': $("#put_no_hp2").val(),
                'no_sim2': $("#put_no_sim2").val(),
                'tahun_berlaku2': $("#put_tgl_berlaku2").val(),
                'KEY-SPBE': 'SPBE'
            }
            $.ajax({
                type: 'POST',
                url: " <?= base_url() ?>Rest_API/Skid_tank/edit",
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
                    $(".delete2").hide();
                    $(".put2").show();
                    $(".tambah2").hide();
                    $("#datatable").DataTable().ajax.reload();
                    $('#editdata').modal('hide')
                }
            });
        }

        function delete_data(id) {
            kode_skid_tank = id;
            swal({
                title: 'Anda yakin?',
                text: "Data yang dihapus akan hilang!",
                type: 'warning',
                buttons: {
                    cancel: {
                        visible: true,
                        className: 'btn btn-danger'
                    },
                    confirm: {
                        text: 'Hapus',
                        className: 'btn btn-success'
                    }
                }
            }).then((Delete) => {
                if (Delete) {
                    delete_fix();
                } else {
                    swal.close();
                }
            });
        }

        function delete_fix() {
            console.log('delete');
            const value_data = {
                'kode_skid_tank': kode_skid_tank,
                'KEY-SPBE': 'SPBE'
            }
            console.log(value_data);
            $.ajax({
                type: 'POST',
                url: " <?= base_url() ?>Rest_API/Skid_tank/delete",
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded',
                    'Authorization': "Basic " + btoa("gas:gas")
                },
                contentType: 'application/x-www-form-urlencoded; charset=utf-8',
                dataType: 'json',
                data: value_data,
                success: function(response) {
                    swal({
                        title: "Penghapusan Data Berhasil!",
                        icon: "success",
                        button: "Tutup",
                    });
                    $(".delete2").show();
                    $(".put2").hide();
                    $(".tambah2").hide();
                    $("#datatable").DataTable().ajax.reload();
                }
            });
        }

        function empty() {
            $("#post_nopol").val('')
            $("#post_kapasitas").val('')
            $("#post_odometer").val('')
            // supir 1
            $("#post_nama_supir1").val('')
            $("#post_tgl_lahir1").val('')
            $("#post_no_hp1").val('')
            $("#post_no_sim1").val('')
            $("#post_tgl_berlaku1").val('')
            // supir 2
            $("#post_nama_supir2").val('')
            $("#post_tgl_lahir2").val('')
            $("#post_no_hp2").val('')
            $("#post_no_sim2").val('')
            $("#post_tgl_berlaku2").val('')
        }
    </script>
</body>

</html>