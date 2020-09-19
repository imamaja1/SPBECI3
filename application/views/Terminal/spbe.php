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

        <?php $this->load->view('Terminal/side') ?>

        <div class="main-panel">
            <div class="content">
                <div class="panel-header bg-primary-gradient">
                    <div class="page-inner py-5">
                        <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
                            <div>
                                <h2 class="text-white pb-2 fw-bold">SPBE</h2>
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
                                        <h4 class="card-title">Data SPBE</h4>
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
                                                        Data SPBE tidak boleh kosong
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label for="exampleInputEmail1">Nama SPBE</label>
                                                        <input type="" class="form-control" id="post_name_spbe" aria-describedby="emailHelp" required>
                                                    </div>

                                                    <div class="form-group col-md-6">
                                                        <label for="exampleInputEmail1">No Telepon</label>
                                                        <input type="" class="form-control" id="post_telepon_spbe" aria-describedby="emailHelp" required>
                                                    </div>

                                                    <div class="form-group col-md-6">
                                                        <label for="exampleInputEmail1">Kapasitas TT</label>
                                                        <input type="" class="form-control" id="post_kapasitas_tt" aria-describedby="emailHelp" required>
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label for="exampleInputEmail1">Jarak SPBE</label>
                                                        <input type="" class="form-control" id="post_jarak" aria-describedby="emailHelp" required>
                                                    </div>
                                                    <div class="form-group col-md-12">
                                                        <label for="exampleInputEmail1">Alamat SPBE</label>
                                                        <textarea class="form-control" id="post_alamat_spbe"></textarea>
                                                    </div>
                                                    <div class="form-group col-md-4">
                                                        <label for="exampleInputEmail1">DOT</label>
                                                        <input type="" class="form-control" onchange="myFunction()" id="post_dot" aria-describedby="emailHelp" required>
                                                    </div>
                                                    <div class="form-group col-md-4">
                                                        <label for="exampleInputEmail1">Kali DOT</label>
                                                        <input type="" class="form-control" onchange="myFunction()" id="post_kali_dot" aria-describedby="emailHelp" required>
                                                    </div>
                                                    <div class="form-group col-md-4">
                                                        <label for="exampleInputEmail1">Limit</label>
                                                        <input type="" class="form-control" id="post_limit" aria-describedby="emailHelp" disabled>
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label for="exampleInputEmail1">Username</label>
                                                        <input type="" class="form-control" id="post_username" aria-describedby="emailHelp" required>
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label for="exampleInputEmail1">Password</label>
                                                        <input type="password" class="form-control" id="post_password" aria-describedby="emailHelp" required>
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
                                                    <th>Nama SPBE</th>
                                                    <th>No Telepon</th>
                                                    <th>DOT</th>
                                                    <th>Kapasitas TT</th>
                                                    <th style="width: 20px;">Action </th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                                <tr>
                                                    <td>Tiger Nixon</td>
                                                    <td>System Architect</td>
                                                    <td>Edinburgh</td>
                                                    <td>61</td>
                                                    <td>2011/04/25</td>
                                                    <td>$320,800</td>
                                                </tr>
                                            </tbody>
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

    <script type="text/javascript">
        $('#datatable').DataTable({
            distroy: true,
            ajax: {
                "method": "GET",
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded',
                    'Authorization': "Basic " + btoa("gas:gas")
                },
                "url": "<?= base_url() ?>/Rest_API/SPBE?KEY-SPBE=SPBE"
            },
            columns: [{
                data: null
            }, {
                data: "nama_spbe"
            }, {
                data: "telepon_spbe"
            }, {
                data: "dot"
            }, {
                data: "kapasitas_tt"
            }, {
                data: "kode_spbe",
                className: "center",
                render: function(data, type, row, meta) {
                    return '<div class="form-button-action"><button data-toggle="modal" data-target="#editdata" onclick="view_data(' + data + ')" type="button" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Edit Task" ><i class="fa fa-edit"></i></button><button type="button" onclick="delete_data(' + data + ')" data-toggle="tooltip" title="" class="btn btn-link btn-danger" data-original-title="Remove"><i class="fa fa-times"></i></button></div>'
                }
            }, ],
            "fnCreatedRow": function(row, data, index) {
                $('td', row).eq(0).html(index + 1);
            },
        });

        function myFunction() {
            $("#post_limit").val($("#post_dot").val() * $("#post_kali_dot").val());
            $("#put_limit").val($("#put_dot").val() * $("#put_kali_dot").val());
        }

        function empty() {
            $("#post_name_spbe").val('')
            $("#post_telepon_spbe").val('')
            $("#post_alamat_spbe").val('')
            $("#post_kapasitas_tt").val('')
            $("#post_dot").val('')
            $("#post_jarak").val('')
            $("#post_limit").val('')
            $("#post_username").val('')
            $("#post_password").val('')
            $("#post_kali_dot").val('')
        }

        function post_data() {
            if ($("#post_name_spbe").val() == '' || $("#post_telepon_spbe").val() == '' || $("#post_alamat_spbe").val() == '' || $("#post_kapasitas_tt").val() == '' ||
                $("#post_dot").val() == '' || $("#post_jarak").val() == '' || $("#post_limit").val() == '' || $("#post_username").val() == '' ||
                $("#post_password").val() == '' || $("#post_kali_dot").val() == '') {
                // $('.validasi').show()
                $('.validasi').show();
                swal({
                    title: "Data tidak boleh kosong!",
                    text: "Mohon periksa kembali data yang dimasukan",
                    icon: "warning",
                    button: "Tutup",
                });
            } else {
                const value_data = {
                    'nama_spbe': $("#post_name_spbe").val(),
                    'telepon_spbe': $("#post_telepon_spbe").val(),
                    'alamat_spbe': $("#post_alamat_spbe").val(),
                    'kapasitas_tt': $("#post_kapasitas_tt").val(),
                    'dot': $("#post_dot").val(),
                    'jarak': $("#post_jarak").val(),
                    'limit': $("#post_limit").val(),
                    'username': $("#post_username").val(),
                    'password': $("#post_password").val(),
                    'KEY-SPBE': 'SPBE'
                }
                $.ajax({
                    type: 'POST',
                    url: " <?= base_url() ?>Rest_API/SPBE",
                    headers: {
                        'Content-Type': 'application/x-www-form-urlencoded',
                        'Authorization': "Basic " + btoa("gas:gas")
                    },
                    dataType: 'json',
                    data: value_data,
                    success: function(response) {
                        $('#inputdata').modal('hide')
                        swal({
                            title: "Penambahan Data Berhasil!",
                            icon: "success",
                            button: "Tutup",
                        });
                        $(".put").hide();
                        $(".delete").hide();
                        $(".tambah").show();
                        $("#datatable").DataTable().ajax.reload();
                        empty()
                    }
                });
            }
        }

        function view_data(id) {
            $.ajax({
                type: 'GET',
                url: " <?= base_url() ?>Rest_API/SPBE?KEY-SPBE=SPBE&id=" + id,
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded',
                    'Authorization': "Basic " + btoa("gas:gas")
                },
                contentType: "application/json",
                dataType: 'json',
                success: function(response) {
                    console.log(response);
                    $("#view_nama_spbe").text(response.data[0].nama_spbe);
                    $("#view_telepon_spbe").text(response.data[0].telepon_spbe);
                    $("#view_alamat_spbe").text(response.data[0].alamat_spbe);
                    $("#view_kapasitas_tt").text(response.data[0].kapasitas_tt);
                    $("#view_jarak").text(response.data[0].jarak);
                    $("#view_dot").text(response.data[0].dot);
                    $("#view_limit").text(response.data[0].limit);
                    kode_spbe = response.data[0].kode_spbe;

                    $("#put_nama_spbe").val(response.data[0].nama_spbe);
                    $("#put_telepon_spbe").val(response.data[0].telepon_spbe);
                    $("#put_alamat_spbe").val(response.data[0].alamat_spbe);
                    $("#put_kapasitas_tt").val(response.data[0].kapasitas_tt);
                    $("#put_jarak").val(response.data[0].jarak);
                    $("#put_dot").val(response.data[0].dot);
                    $("#put_kali_dot").val(response.data[0].limit / response.data[0].dot);
                    $("#put_limit").val(response.data[0].limit);
                    $("#put_username").val(response.data[0].username);
                    $("#put_password").val(response.data[0].password);
                    password = response.data[0].password;
                }
            });
        }

        function put_data() {
            console.log('put');
            var value_data;
            if ($("#put_password").val() == password) {
                value_data = {
                    'kode_spbe': kode_spbe,
                    'nama_spbe': $("#put_nama_spbe").val(),
                    'telepon_spbe': $("#put_telepon_spbe").val(),
                    'alamat_spbe': $("#put_alamat_spbe").val(),
                    'kapasitas_tt': $("#put_kapasitas_tt").val(),
                    'dot': $("#put_dot").val(),
                    'jarak': $("#put_jarak").val(),
                    'limit': $("#put_limit").val(),
                    'username': $("#put_username").val(),
                    'password': 'false',
                    'KEY-SPBE': 'SPBE'
                }
            } else {
                value_data = {
                    'kode_spbe': kode_spbe,
                    'nama_spbe': $("#put_nama_spbe").val(),
                    'telepon_spbe': $("#put_telepon_spbe").val(),
                    'alamat_spbe': $("#put_alamat_spbe").val(),
                    'kapasitas_tt': $("#put_kapasitas_tt").val(),
                    'dot': $("#put_dot").val(),
                    'jarak': $("#put_jarak").val(),
                    'limit': $("#put_limit").val(),
                    'username': $("#put_username").val(),
                    'password': $("#put_password").val(),
                    'KEY-SPBE': 'SPBE'
                }
            }
            $.ajax({
                type: 'POST',
                url: " <?= base_url() ?>Rest_API/SPBE/edit",
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded',
                    'Authorization': "Basic " + btoa("gas:gas")
                },
                dataType: 'json',
                data: value_data,
                success: function(response) {
                    swal({
                        title: "Edit Data Berhasil!",
                        icon: "success",
                        button: "Tutup",
                    });
                    $(".put").show();
                    $(".delete").hide();
                    $(".tambah").hide();
                    $("#datatable").DataTable().ajax.reload();
                    $('#editdata').modal('hide')
                }
            });
        }

        function delete_data(id) {
            kode_SPBE = id;
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
                'kode_SPBE': kode_SPBE,
                'KEY-SPBE': 'SPBE'
            }
            console.log(value_data);
            $.ajax({
                type: 'POST',
                url: " <?= base_url() ?>Rest_API/SPBE/delete",
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded',
                    'Authorization': "Basic " + btoa("gas:gas")
                },
                dataType: 'json',
                data: value_data,
                success: function(response) {
                    swal({
                        title: "Penghapusan Data Berhasil!",
                        icon: "success",
                        button: "Tutup",
                    });
                    $(".delete").show();
                    $(".tambah").hide();
                    $(".put").hide();
                    $("#datatable").DataTable().ajax.reload();
                }
            });
        }
    </script>
</body>

</html>