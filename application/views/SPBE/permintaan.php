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
                            <div class="alert alert-danger limit col-md-12" style="display: none;" role="limit">
                                Permintaan tidak dapat dilakukan karena sudah melampaui limit
                            </div>
                            <div class="card full-height">
                                <div class="card-header">
                                    <div class="d-flex align-items-center">
                                        <h4 class="card-title">Data Permintaan</h4>
                                        <button class="btn btn-primary btn-round ml-auto" data-toggle="modal" data-target="#inputdata" onclick="tambahdata()">
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
                                                        Data Permintaan tidak boleh kosong
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
                                                    <div class="form-group col-md-12">
                                                        <label for="exampleInputEmail1">Bukti</label>
                                                        <div class="card ml-auto mr-auto" style="width: 18rem;">
                                                            <div id="fotodatabukti"></div>
                                                        </div>
                                                        <input type="file" class="form-control" id="foto_bukti" aria-describedby="emailHelp">
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
                        Hak Cipta Depot LPG Lombok
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
                    <h3 class="modal-title" id="exampleModalLongTitle">Data Skid Tank</h3>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="modal-body row">
                        <div class="form-group col-md-4  ">
                            <label for="exampleInputEmail1">NOPOL</label>
                            <br>
                            <span id="view_nopol"></span>
                            <hr>
                        </div>
                        <div class="form-group col-md-4  ">
                            <label for="exampleInputEmail1">Kapasitas</label>
                            <br>
                            <span id="view_kapasitas"></span>
                            <hr>
                        </div>
                        <div class="form-group col-md-4  ">
                            <label for="exampleInputEmail1">Odometer</label>
                            <br>
                            <span id="view_odometer"></span>
                            <hr>
                        </div>
                        <div class="form-group col-md-4  ">
                            <label for="exampleInputEmail1">Nama Supir 1</label>
                            <br>
                            <span id="view_nama_supir1"></span>
                            <hr>
                        </div>
                        <div class="form-group col-md-4  ">
                            <label for="exampleInputEmail1">Tanggal Lahir </label>
                            <br>
                            <span id="view_tgl_lahir1"></span>
                            <hr>
                        </div>
                        <div class="form-group col-md-4  ">
                            <label for="exampleInputEmail1">NO HP</label>
                            <br>
                            <span id="view_no_hp1"></span>
                            <hr>
                        </div>
                        <div class="form-group col-md-6  ">
                            <label for="exampleInputEmail1">NO SIM</label>
                            <br>
                            <span id="view_no_sim1"></span>
                            <hr>
                        </div>
                        <div class="form-group col-md-6  ">
                            <label for="exampleInputEmail1">Tangal Berlaku</label>
                            <br>
                            <span id="view_tgl_berlaku1"></span>
                            <hr>
                        </div>
                        <div class="form-group col-md-4  ">
                            <label for="exampleInputEmail1">Nama Supir 2</label>
                            <br>
                            <span id="view_nama_supir2"></span>
                            <hr>
                        </div>
                        <div class="form-group col-md-4  ">
                            <label for="exampleInputEmail1">Tanggal Lahir</label>
                            <br>
                            <span id="view_tgl_lahir2"></span>
                            <hr>
                        </div>
                        <div class="form-group col-md-4  ">
                            <label for="exampleInputEmail2">NO HP</label>
                            <br>
                            <span id="view_no_hp2"></span>
                            <hr>
                        </div>
                        <div class="form-group col-md-6  ">
                            <label for="exampleInputEmail2">NO SIM</label>
                            <br>
                            <span id="view_no_sim2"></span>
                            <hr>
                        </div>
                        <div class="form-group col-md-6  ">
                            <label for="exampleInputEmail2">Tangal Berlaku</label>
                            <br>
                            <span id="view_tgl_berlaku2"></span>
                            <hr>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                    <!-- <button type="button" class="btn btn-primary" onclick="put_data()">Simpan</button> -->
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade bd-example-modal-lg" id="bukti" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title" id="exampleModalLongTitle">Bukti Nopol</h3>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="modal-body row">
                        <div class="form-group col-md-12">
                            <div class=" col-md-8 ml-auto mr-auto">
                                <div id="bukti_nopol"></div>
                            </div>
                        </div>
                    </div>
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
        var bukti;
        window.addEventListener('load', function() {
            document.querySelector('#foto_bukti').addEventListener('change', function() {
                if (this.files && this.files[0]) {
                    var img = document.querySelector('#bukti_foto'); // $('img')[0]
                    img.src = URL.createObjectURL(this.files[0]); // set src to blob url
                    bukti = this.files[0]
                }
            });
        });

        function show_bukti(data) {
            $('#bukti').modal('show')
            document.getElementById('bukti_nopol').innerHTML = '<img src="<?= base_url() ?>uploads/bukti/' + data + '" alt="Card image cap" style="margin: auto" width="100%"> ';
        }
        $.ajax({
            type: 'GET',
            headers: {
                'Content-Type': 'application/x-www-form-urlencoded',
                'Authorization': "Basic " + btoa("gas:986b679b6523392aa553cd1aae104768")
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
                        'Authorization': "Basic " + btoa("gas:986b679b6523392aa553cd1aae104768")
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

        function tambahdata() {
            $('.validasi').hide();
            document.getElementById('fotodatabukti').innerHTML = '<img src="<?= base_url() ?>uploads/default-avatar.png" alt="Card image cap" width="100%" height="200px" id="bukti_foto">'
        }

        function datatablesgo() {
            $('#datatable').DataTable({
                distroy: true,
                ajax: {
                    "method": "GET",
                    url: "<?= base_url() ?>/Rest_API/Permintaan_spbe/data?KEY-SPBE=SPBE&id=" + id,
                    headers: {
                        'Content-Type': 'application/x-www-form-urlencoded',
                        'Authorization': "Basic " + btoa("gas:986b679b6523392aa553cd1aae104768")
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
                                if (moment(row['tgl_berangkat_tujuan']) < moment(row['tgl_sampai_tujuan'])) {
                                    return '<span class="badge badge-info">Skid Tank Telah Sampai</span>'
                                } else {
                                    return '<span class="badge badge-default">Skid Tank diperjalanan </span>'
                                }
                            } else {
                                return '<span class="badge badge-info">Skid Tank Telah Sampai</span>'
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
                        if (row['kode_skid_tank'] == null) {
                            return '<div class="form-button-action"><button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Edit Task" onclick="show_bukti(\'' + row['bukti'] + '\')"><i class="far fa-file-image"></i></button><button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-default btn-lg" data-original-title="Edit Task" ><i class="fas fa-eye"></i></button><button type="button" onclick="delete_data(' + row['kode_permintaan'] + ')" data-toggle="tooltip" title="" class="btn btn-link btn-danger" data-original-title="Remove"><i class="fa fa-times"></i></button></div>'
                        } else {
                            return '<div class="form-button-action"><button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Edit Task" onclick="show_bukti(\'' + row['bukti'] + '\')"><i class="far fa-file-image"></i></button><button data-toggle="modal" data-target="#editdata" onclick="view_data(' + row['kode_skid_tank'] + ')" type="button" data-toggle="tooltip" title="" class="btn btn-link btn-success btn-lg" data-original-title="Edit Task" ><i class="fas fa-eye"></i></button><button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-default" data-original-title="Remove"><i class="fa fa-times"></i></button></div>'
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
                    'Authorization': "Basic " + btoa("gas:986b679b6523392aa553cd1aae104768")
                },
                dataType: 'json',
                success: function(response) {
                    if (((response.jumlah + 1) * 13) + (response.sisa_stok.stock * 1) > limit) {
                        $(".limit").show();
                        $("#post_no_spa").prop('disabled', true);
                        $("#post_tgl_spa").prop('disabled', true);
                        $("#post_stock").prop('disabled', true);
                    } else {
                        $(".limit").hide();
                        $("#post_no_spa").prop('disabled', false);
                        $("#post_tgl_spa").prop('disabled', false);
                        $("#post_stock").prop('disabled', false);
                    }
                }
            });
        }
        setTimeout(cek, 400);

        function post_data() {
            if ($("#post_no_spa").val() == '' || $("#post_tgl_spa").val() == '' || $("#post_stock").val() == '' || $("#foto_bukti").val() == '') {
                $('.validasi').show();
                swal({
                    title: "Data tidak boleh kosong!",
                    text: "Mohon periksa kembali data yang dimasukan",
                    icon: "warning",
                    button: "Tutup",
                });
            } else {
                var value_data = new FormData();
                value_data.append('bukti', bukti);
                value_data.append('no_spa', $("#post_no_spa").val());
                value_data.append('tgl_spa', $("#post_tgl_spa").val());
                value_data.append('stock', $("#post_stock").val());
                value_data.append('nopol', $("#post_nopol").val());
                value_data.append('kode_spbe', id)
                console.log(...value_data);
                $.ajax({
                    type: 'POST',
                    url: " <?= base_url() ?>Rest_API/permintaan",
                    headers: {
                        'Authorization': "Basic " + btoa("gas:986b679b6523392aa553cd1aae104768"),
                        'KEY-SPBE': 'SPBE'
                    },
                    dataType: 'json',
                    enctype: 'multipart/form-data',
                    data: value_data,
                    cache: false,
                    processData: false,
                    contentType: false,
                    success: function(response) {
                        if (response.status == 'false') {
                            console.log(response)
                            swal({
                                title: "No. SPA sudah ada!",
                                icon: "warning",
                                button: "Tutup",
                            });
                        } else {
                            swal({
                                title: "Penambahan Data Berhasil!",
                                icon: "success",
                                button: "Tutup",
                            });

                            $(".delete").hide();
                            $(".tambah").show();
                            $(".put").hide();
                            $('#inputdata').modal('hide');
                            $("#datatable").DataTable().ajax.reload();
                            empty();
                            cek()
                        }
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
                    'Authorization': "Basic " + btoa("gas:986b679b6523392aa553cd1aae104768")
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
                'kode_permintaan': kode_permintaan,
                'KEY-SPBE': 'SPBE'
            }
            $.ajax({
                type: 'post',
                url: " <?= base_url() ?>Rest_API/Permintaan/delete",
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded',
                    'Authorization': "Basic " + btoa("gas:986b679b6523392aa553cd1aae104768")
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