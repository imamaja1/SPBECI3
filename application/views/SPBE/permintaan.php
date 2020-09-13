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

                <h1 style="color: aliceblue; text-align:center"></h1>
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
                                <h2 class="text-white pb-2 fw-bold">Permintaan</h2>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- isi -->
                <div class="page-inner mt--5">
                    <div class="row mt--2">
                        <div class="col-md-12">
                            <div class="card full-height">
                                <div class="card-header">
                                    <div class="d-flex align-items-center">
                                        <h4 class="card-title">Data Permintaan</h4>
                                        <button class="btn btn-primary btn-round ml-auto" data-toggle="modal" data-target="#inputdata">
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
                                                    <div class="form-group col-md-6">
                                                        <label for="exampleInputEmail1">Nomor SPA</label>
                                                        <input type="" class="form-control" id="post_no_spa" aria-describedby="emailHelp">
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label for="exampleInputEmail1">TGL SPA</label>
                                                        <input type="date" class="form-control" id="post_tgl_spa" aria-describedby="emailHelp">
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label for="exampleInputEmail1">Sisa Stock</label>
                                                        <input type="" class="form-control" id="post_stock">
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label for="exampleInputEmail1">NOPOL</label>
                                                        <input type="" class="form-control" id="post_nopol" aria-describedby="emailHelp" value="Patra Niaga" disabled>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
                                                <button type="button" class="btn btn-primary" onclick="post_data()">Simpan</button>
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
                                                    <th>NO SPA</th>
                                                    <th>Tanggal SPA</th>
                                                    <th>Stock</th>
                                                    <th>NOPOL</th>
                                                    <th>Status Patra Niaga</th>
                                                    <th>Keterangan</th>
                                                    <th>Action</th>
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
            <footer class="footer">
                <div class="container-fluid">
                    <div class="copyright ml-auto">
                        2020, made with <i class="fa fa-heart heart text-danger"></i> by <a href="https://www.themekita.com">Terminal</a>
                    </div>
                </div>
            </footer>
        </div>
    </div>


    <!-- modal edit data -->
    <div class="modal fade bd-example-modal-lg" id="editdata" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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
                        <div class="form-group col-md-6">
                            <label for="exampleInputEmail1">Nama SPBE</label>
                            <input type="" class="form-control" id="put_nama_spbe" aria-describedby="emailHelp" required>
                        </div>

                        <div class="form-group col-md-6">
                            <label for="exampleInputEmail1">No Telepon</label>
                            <input type="" class="form-control" id="put_telepon_spbe" aria-describedby="emailHelp" required>
                        </div>

                        <div class="form-group col-md-6">
                            <label for="exampleInputEmail1">Kapasitas TT</label>
                            <input type="" class="form-control" id="put_kapasitas_tt" aria-describedby="emailHelp" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="exampleInputEmail1">Jarak SPBE</label>
                            <input type="" class="form-control" id="put_jarak" aria-describedby="emailHelp" required>
                        </div>
                        <div class="form-group col-md-12">
                            <label for="exampleInputEmail1">Alamat SPBE</label>
                            <textarea class="form-control" id="put_alamat_spbe"></textarea>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="exampleInputEmail1">DOT</label>
                            <input type="" class="form-control" onchange="myFunction()" id="put_dot" aria-describedby="emailHelp" required>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="exampleInputEmail1">Kali DOT</label>
                            <input type="" class="form-control" onchange="myFunction()" id="put_kali_dot" aria-describedby="emailHelp" required>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="exampleInputEmail1">Limit</label>
                            <input type="" class="form-control" id="put_limit" aria-describedby="emailHelp" disabled>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="exampleInputEmail1">Username</label>
                            <input type="" class="form-control" id="put_username" aria-describedby="emailHelp" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="exampleInputEmail1">Password</label>
                            <input type="password" class="form-control" id="put_password" aria-describedby="emailHelp" required>
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
    <script src="<?= base_url() ?>assets/js/moment.min.js"></script>

    <script type="text/javascript">
        var id;
        var kode_permintaan;
        var limit;
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
                id = response.kode_spbe
                datatablesgo();
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
                        limit = response.data[0].limit;
                        document.getElementById('namaspbe').innerHTML = response.data[0].nama_spbe;

                    }
                })
            }
        })

        function datatablesgo() {
            $('#datatable').DataTable({
                distroy: true,
                ajax: {
                    "method": "GET",
                    url: "<?= base_url() ?>/Rest_API/Permintaan_spbe/data?KEY-SPBE=SPBE&id=" + id,
                    headers: {
                        'Content-Type': 'application/x-www-form-urlencoded',
                        'Authorization': "Basic " + btoa("gas:gas")
                    },
                },
                columns: [{
                    data: null
                }, {
                    data: "no_spa"
                }, {
                    data: "tgl_spa"
                }, {
                    data: "stock"
                }, {
                    data: null,
                    render: function(data, type, row, meta) {
                        if (row['kode_skid_tank'] == null) {
                            return 'Patra Niaga'
                        } else {
                            return row['nopol']
                        }
                    }
                }, {
                    data: "status_patra_niaga",
                    className: "center",
                    render: function(data, type, row, meta) {
                        if (data == '1') {
                            return '<span class="label label-default">Waiting ..</span>';
                        } else if (data == '2') {
                            return '<span class="label label-info">Diverifikasi</span>'
                        } else if (data == '3') {
                            return '<span class="label label-danger">Ditolak</span>'
                        }
                    }
                }, {
                    data: null,
                    className: "center",
                    render: function(data, type, row, meta) {
                        if (row['status_patra_niaga'] == 2) {
                            if (row['status_permintaan'] == 1) {
                                if (moment(row['tgl_berangkat_tujuan']) < moment(row['tgl_sampai_tujuan'])) {
                                    return '<span class="label label-info">Skid Tank Telah Sampai</span>'
                                } else {
                                    return '<span class="label label-default">Skid Tank diperjalanan </span>'
                                }
                            } else {
                                return '<span class="label label-info">Skid Tank Telah Sampai</span>'
                            }
                        } else if (row['status_patra_niaga'] == 1) {
                            return '<span class="label label-default">Waiting ..</span>';
                        } else {
                            return '<span class="label label-danger">Permintaan Ditolak</span>'
                        }
                    }
                }, {
                    data: null,
                    className: "center",
                    render: function(data, type, row, meta) {
                        if (row['kode_skid_tank'] == null) {
                            return '<div class="btn-group"><button class="btn btn-success" data-toggle="modal" data-target="#viewdata" onclick="view_data(' + data + ')" disabled><span class="fa fa-eye"></span></button><button class="btn btn-danger" data-toggle="modal" data-target="#deletedata" onclick="delete_data(' + row['kode_permintaan'] + ')"><span class="fa fa-trash-o"></span></button></div>'
                        } else {
                            return '<div class="btn-group"><button class="btn btn-success" data-toggle="modal" data-target="#viewdata" onclick="view_data(' + row['kode_skid_tank'] + ')"><span class="fa fa-eye"></span></button><button class="btn btn-danger" data-toggle="modal" data-target="#deletedata" onclick="delete_data(' + row['kode_permintaan'] + ')" disabled><span class="fa fa-trash-o"></span></button></div>'
                        }
                    }
                }, ],
                "fnCreatedRow": function(row, data, index) {
                    $('td', row).eq(0).html(index + 1);
                },
            });
        }

        function cek() {
            $.ajax({
                type: 'GET',
                url: " <?= base_url() ?>Rest_API/cek_permintaan?KEY-SPBE=SPBE&id=" + id,
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded',
                    'Authorization': "Basic " + btoa("gas:gas")
                },
                dataType: 'json',
                success: function(response) {
                    console.log(response)
                    if (response.data * 13 > limit) {
                        $(".limit").show();
                        $("#post_no_spa").prop('disabled', true);
                        $("#post_tgl_spa").prop('disabled', true);
                        $("#post_stock").prop('disabled', true);
                    } else {
                        $("#post_no_spa").prop('disabled', false);
                        $("#post_tgl_spa").prop('disabled', false);
                        $("#post_stock").prop('disabled', false);
                    }
                }
            });
        }
        setTimeout(cek, 400);

        function post_data() {
            if ($("#post_no_spa").val() == '' || $("#post_tgl_spa").val() == '' || $("#post_stock").val() == '') {
                $('.validasi').show();
                swal({
                    title: "Data tidak boleh kosong!",
                    text: "Tolong periksa kembali data yang dimasukan!!",
                    icon: "warning",
                    button: "close",
                });
            } else {
                console.log('post');
                const value_data = {
                    'no_spa': $("#post_no_spa").val(),
                    'tgl_spa': $("#post_tgl_spa").val(),
                    'stock': $("#post_stock").val(),
                    'nopol': $("#post_nopol").val(),
                    'kode_spbe': id,
                    'KEY-SPBE': 'SPBE'
                }
                console.log(value_data);
                $.ajax({
                    type: 'POST',
                    url: " <?= base_url() ?>Rest_API/permintaan",
                    headers: {
                        'Content-Type': 'application/x-www-form-urlencoded',
                        'Authorization': "Basic " + btoa("gas:gas")
                    },
                    dataType: 'json',
                    data: value_data,
                    success: function(response) {
                        swal({
                            title: "Penambahan Data Berhasil!",
                            icon: "success",
                            button: "close",
                        });

                        $(".delete").hide();
                        $(".tambah").show();
                        $(".put").hide();
                        $('#inputdata').modal('hide');
                        $("#datatable").DataTable().ajax.reload();
                        empty();
                        cek()
                    }
                });
            }
        }

        function empty() {
            $("#post_no_spa").val('');
            $("#post_tgl_spa").val('');
            $("#post_stock").val('');
        }

        function view_data(id) {
            console.log(id);
            $.ajax({
                type: 'GET',
                url: " <?= base_url() ?>Rest_API/skid_tank?KEY-SPBE=SPBE&id=" + id,
                contentType: "application/json",
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded',
                    'Authorization': "Basic " + btoa("gas:gas")
                },
                dataType: 'json',
                success: function(response) {
                    console.log(response)
                    $("#view_nopol").text(response.data[0].nopol);
                    $("#view_kapasitas").text(response.data[0].kapasitas);
                    $("#view_odometer").text(response.data[0].odometer);

                    $("#view_nama_supir1").text(response.data[0].nama_supir);
                    $("#view_no_hp1").text(response.data[0].no_hp);
                    $("#view_no_sim1").text(response.data[0].no_sim);
                    $("#view_tgl_berlaku1").text(response.data[0].tahun_berlaku);
                    $("#view_tgl_lahir1").text(response.data[0].tgl_lahir);

                    $("#view_nama_supir2").text(response.data[1].nama_supir);
                    $("#view_no_hp2").text(response.data[1].no_hp);
                    $("#view_no_sim2").text(response.data[1].no_sim);
                    $("#view_tgl_berlaku2").text(response.data[1].tahun_berlaku);
                    $("#view_tgl_lahir2").text(response.data[1].tgl_lahir);
                }
            });
        }

        function delete_data(id) {
            kode_permintaan = id;
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
                        text: 'Yes, delete it!',
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
                'kode_permintaan': kode_permintaan,
                'KEY-SPBE': 'SPBE'
            }
            $.ajax({
                type: 'post',
                url: " <?= base_url() ?>Rest_API/Permintaan/delete",
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded',
                    'Authorization': "Basic " + btoa("gas:gas")
                },
                contentType: 'application/x-www-form-urlencoded; charset=utf-8',
                dataType: 'json',
                data: value_data,
                success: function(response) {
                    swal({
                        title: 'Terhapus!',
                        text: 'Data telah dihapus.',
                        type: 'success',
                        icon: "success",
                        buttons: {
                            confirm: {
                                className: 'btn btn-success'
                            }
                        }
                    });
                    $("#datatable").DataTable().ajax.reload();
                    $('#inputdata').modal('hide')
                    cek()
                }
            });

        }
    </script>
</body>

</html>