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

        <?php $this->load->view('Terminal/side') ?>

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
                    <h3 class="modal-title" id="exampleModalLongTitle">Edit Data</h3>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="modal-body row">
                        <div class="form-group col-md-6">
                            <label for="exampleInputEmail1">Status Patra Niaga</label>
                            <select class="form-control" id="status_patra_niaga">
                                <option class="form-control" id="1" value="1">Waiting..</option>
                                <option class="form-control" id="2" value="2">Diverifikasi</option>
                                <option class="form-control" id="3" value="3">Ditolak</option>
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="exampleInputEmail1">Skid tank</label>
                            <div class="input-group">
                                <input id="view_nopol" type="text" class="form-control" disabled>
                                <div class="input-group-prepend">
                                    <button class="btn btn-info" type="button" onclick="data_skid_tank()">Pilih Skid Tank</button>
                                </div>
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

    <div class="modal fade" id="skid_tank" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title" id="exampleModalLabel">Data Skid Tank</h3>
                </div>
                <div class="modal-body row">
                    <div class="panel-body table-responsive">
                        <table id="datatable2" class="table">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>NOPOL</th>
                                    <th>Kapasitas (MT)</th>
                                    <th>Odometer</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                        </table>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal">Tutup</button>
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
        var x = 0;
        var kode_skid_tank_new;
        var kode_skid_tank_old;

        function data_skid_tank() {
            if (x == 0) {
                $('#datatable2').DataTable({
                    ajax: {
                        headers: {
                            'Content-Type': 'application/x-www-form-urlencoded',
                            'Authorization': "Basic " + btoa("gas:gas")
                        },
                        "method": "GET",
                        "url": "<?= base_url() ?>Rest_API/Skid_tank?KEY-SPBE=SPBE",
                    },
                    columns: [{
                            data: null
                        }, {
                            data: "nopol"
                        },
                        {
                            data: "kapasitas"
                        },
                        {
                            data: "odometer"
                        },
                        {
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
                        },
                        {
                            data: 'kode_skid_tank',
                            className: "center",
                            render: function(data, type, row, meta) {
                                if (row['status'] == 1) {
                                    return '<div class="btn-group"><button class="btn btn-info" onclick="varifikasi_fix(' + data + ')">submit</button></div>';
                                } else {
                                    return '<div class="btn-group"><button class="btn btn-info" onclick="varifikasi(' + data + ')" disabled>submit</button></div>';

                                }

                            }
                        },
                    ],
                    "fnCreatedRow": function(row, data, index) {
                        $('td', row).eq(0).html(index + 1);
                    },
                });
            } else {
                $("#datatable2").DataTable().ajax.reload();
            }
            x = x + 1
            $('#skid_tank').modal('show')

        }

        function varifikasi_fix(param) {
            kode_skid_tank_new = param;
            console.log(param)
            $('#skid_tank').modal('hide');
            $.ajax({
                type: 'GET',
                url: " <?= base_url() ?>Rest_API/skid_tank?KEY-SPBE=SPBE&id=" + param,
                contentType: "application/json",
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded',
                    'Authorization': "Basic " + btoa("gas:gas")
                },
                dataType: 'json',
                success: function(response) {
                    $("#view_nopol").val(response.data[0].nopol);
                }
            });
        }

        function put_data() {
            console.log('put');
            const value_data = {
                'kode_permintaan': kode_permintaan,
                'status_patra_niaga': $('#status_patra_niaga option:selected').attr('id'),
                'kode_skid_tank_new': kode_skid_tank_new,
                'kode_skid_tank_old': kode_skid_tank_old,
                'KEY-SPBE': 'SPBE'
            }
            console.log(value_data)
            $.ajax({
                type: 'POST',
                url: " <?= base_url() ?>Rest_API/Permintaan_patra_niaga/edit2",
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded',
                    'Authorization': "Basic " + btoa("gas:gas")
                },
                dataType: 'json',
                data: value_data,
                success: function(response) {
                    console.log(response)
                    $('#editdata').modal('hide');
                    $("#datatable").DataTable().ajax.reload();
                    swal({
                        title: 'Update Data Berhasil!',
                        // text: 'Data telah dirubah.',
                        type: 'success',
                        icon: 'success',
                        buttons: {
                            confirm: {
                                className: 'btn btn-success'
                            }
                        }
                    });
                }
            });
        }

        function datatablesgo() {
            $('#datatable').DataTable({
                distroy: true,
                ajax: {
                    "method": "GET",
                    url: "<?= base_url() ?>Rest_API/Permintaan?KEY-SPBE=SPBE",
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
                            return '<span class="badge badge-default">Waiting ..</span>';
                        } else if (data == '2') {
                            return '<span class="badge badge-info">Diverifikasi</span>'
                        } else if (data == '3') {
                            return '<span class="badge badge-danger">Ditolak</span>'
                        }
                    }
                }, {
                    data: null,
                    className: "center",
                    render: function(data, type, row, meta) {
                        if (row['status_patra_niaga'] == 2) {
                            if (row['status_permintaan'] == 1) {
                                if (moment(row['tgl_berangkat_tujuan']) > moment(row['tgl_sampai_tujuan'])) {
                                    return '<span class="badge badge-info">Skid Tank Dalam Perjalanan</span>'
                                } else {
                                    return '<span class="badge badge-primary">Skid Tank Telah Sampai</span>'
                                }
                            } else {
                                return '<span class="badge badge-primary">Skid Tank Telah Sampai</span>'
                            }
                        } else if (row['status_patra_niaga'] == 1) {
                            return '<span class="badge badge-default">Waiting ..</span>';
                        } else {
                            return '<span class="badge badge-danger">Permintaan Ditolak</span>'
                        }
                    }
                }, {
                    data: null,
                    className: "center",
                    render: function(data, type, row, meta) {
                        if (row['status_patra_niaga'] == 2) {
                            if (row['status_permintaan'] == 1) {
                                if (moment(row['tgl_berangkat_tujuan']) > moment(row['tgl_sampai_tujuan'])) {
                                    return '<div class="form-button-action"><button data-toggle="modal" data-target="#editdata" onclick="view_data(' + row['kode_permintaan'] + ',' + row['kode_skid_tank'] + ')" type="button" data-toggle="tooltip" title="" class="btn btn-link btn-success btn-lg" data-original-title="Edit Task" ><i class="fa fa-edit"></i></button><button type="button" onclick="delete_data(' + row['kode_permintaan'] + ')" data-toggle="tooltip" title="" class="btn btn-link btn-danger" data-original-title="Remove"><i class="fa fa-times"></i></button></div>'
                                } else {
                                    return '<div class="form-button-action"><button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-default btn-lg" data-original-title="Edit Task" ><i class="fa fa-edit"></i></button><button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-default btn-lg" data-original-title="Remove"><i class="fa fa-times"></i></button></div>'
                                }
                            } else {
                                return '<div class="form-button-action"><button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-default btn-lg" data-original-title="Edit Task" ><i class="fa fa-edit"></i></button><button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-default btn-lg" data-original-title="Remove"><i class="fa fa-times"></i></button></div>'
                            }
                        } else {
                            return '<div class="form-button-action"><button data-toggle="modal" data-target="#editdata" onclick="view_data(' + row['kode_permintaan'] + ',' + row['kode_skid_tank'] + ')" type="button" data-toggle="tooltip" title="" class="btn btn-link btn-success btn-lg" data-original-title="Edit Task" ><i class="fa fa-edit"></i></button><button type="button" onclick="delete_data(' + row['kode_permintaan'] + ')" data-toggle="tooltip" title="" class="btn btn-link btn-danger" data-original-title="Remove"><i class="fa fa-times"></i></button></div>'
                        }
                    }
                }, ],
                "fnCreatedRow": function(row, data, index) {
                    $('td', row).eq(0).html(index + 1);
                },
            });
        }
        datatablesgo()

        function view_data(id, id2) {
            kode_permintaan = id;
            if (id2 == null) {
                kode_skid_tank_old = 0
                kode_skid_tank_new = 0;
            } else {
                kode_skid_tank_old = id2
                kode_skid_tank_new = id2
            }

            $.ajax({
                type: 'GET',
                url: " <?= base_url() ?>Rest_API/permintaan?KEY-SPBE=SPBE&id=" + id,
                contentType: "application/json",
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded',
                    'Authorization': "Basic " + btoa("gas:gas")
                },
                dataType: 'json',
                success: function(response) {
                    if (response.data[0].kapasitas == null) {
                        $("#view_nopol").val('Patra Niaga');
                    } else {
                        $("#view_nopol").val(response.data[0].nopol);
                    }
                    $("#status_patra_niaga").val(response.data[0].status_patra_niaga);
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
                        title: "Penghapusan Data Berhasil!",
                        icon: "success",
                        button: "Tutup",
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