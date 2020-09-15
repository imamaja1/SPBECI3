<!-- Sidebar -->
<div class="sidebar sidebar-style-">
    <div class="sidebar-wrapper  scrollbar-inner">
        <div class="sidebar-content">
            <div class="user">
                <div class="info">
                    <div class="card-body" style="text-align: center;">
                        <div id="profil_img"></div>
                        <div class="profile-image" style="margin: -20px 0 0px 0 ; text-align: center;">
                            <a type="file" data-toggle="modal" data-target="#Profil" class="btn" style="margin: auto;"><span class="fa fa-camera" style="width: 30px; background-color: skyblue; margin:auto; padding:8px 0px 8px 0px; border-radius:50%; border-color:black"></span></a>
                        </div>
                        <h3 style="color:steelblue">Terminal</h3>
                        <span style="color: black;">(style nanti diubah)</span>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <ul class="nav nav-primary">
                <li class="nav-section">
                    <span class="sidebar-mini-icon">
                        <i class="fa fa-ellipsis-h"></i>
                    </span>
                    <h4 class="text-section">Dashboard</h4>
                </li>
                <li class="nav-item 
                <?php if ($side == 'Dashboard') {
                    echo 'active';
                } ?>">
                    <a href="<?= base_url() ?>Terminal" class="collapsed" aria-expanded="false">
                        <i class="fas fa-home"></i>
                        <p>Dashboard</p>

                    </a>
                </li>
                <li class="nav-section">
                    <span class="sidebar-mini-icon">
                        <i class="fa fa-ellipsis-h"></i>
                    </span>
                    <h4 class="text-section">Data</h4>
                </li>
                <li class="nav-item 
                <?php if ($side == 'permintaan') {
                    echo 'active';
                } ?>">
                    <a href="<?= base_url() ?>Terminal/permintaan" class="collapsed" aria-expanded="false">
                        <i class="fas fa-home"></i>
                        <p>Permintaan</p>

                    </a>
                </li>
                <li class="nav-item 
                <?php if ($side == 'spbe') {
                    echo 'active';
                } ?>">
                    <a href="<?= base_url() ?>Terminal/spbe" class="collapsed" aria-expanded="false">
                        <i class="fas fa-home"></i>
                        <p>SPBE</p>

                    </a>
                </li>
                <li class="nav-item 
                <?php if ($side == 'patra_niaga') {
                    echo 'active';
                } ?>">
                    <a href="<?= base_url() ?>Terminal/patra_niaga" class="collapsed" aria-expanded="false">
                        <i class="fas fa-home"></i>
                        <p>Patra Niaga</p>

                    </a>
                </li>
                <li class="nav-item 
                <?php if ($side == 'profil') {
                    echo 'active';
                } ?>">
                    <a href="<?= base_url() ?>Terminal/profil" class="collapsed" aria-expanded="false">
                        <i class="fas fa-home"></i>
                        <p>Profil</p>
                    </a>
                </li>
                <li class="nav-section">
                    <span class="sidebar-mini-icon">
                        <i class="fa fa-ellipsis-h"></i>
                    </span>
                    <h4 class="text-section">Log Out</h4>
                </li>
                <li class="nav-item">
                    <a href="<?= base_url() ?>Terminal/log_out" class="collapsed" aria-expanded="false">
                        <i class="fas fa-home"></i>
                        <p>Log Out</p>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- End Sidebar -->



<div class="modal fade bd-example-modal-sm" id="Profil" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">

            <div class="modal-body col-md-12">
                <div class="form-group col-md-12 text-center">
                    <div class="profile" style="background-color: white;">
                        <div class="profile-image">
                            <div id="images"></div>
                        </div>
                    </div>
                </div>
                <div class="form-group col-md-12 text-center">
                    <form id="myform" enctype="multipart/form-data">
                        <input type="file" class="form-control" aria-describedby="emailHelp" id="foto" multiple>
                    </form>
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" onclick="profil()" data-dismiss="modal">Save changes</button>
            </div>
        </div>
    </div>
</div>

<script>
    var data_profil;
    document.getElementById('profil_img').innerHTML = ' <img src="<?= base_url() ?>uploads/default-avatar.png" alt="Card image cap" class="avatar-img rounded-circle avatar-xxl" >';

    document.getElementById('images').innerHTML = '<img src="<?= base_url() ?>uploads/default-avatar.png" alt="Card image cap" class="avatar-img rounded-circle avatar-xxl" id="myImg"> ';

    window.addEventListener('load', function() {
        document.querySelector('input[type="file"]').addEventListener('change', function() {

            if (this.files && this.files[0]) {
                var img = document.querySelector('#myImg'); // $('img')[0]
                img.src = URL.createObjectURL(this.files[0]); // set src to blob url
                data_profil = this.files[0]
            }
        });
    });

    function profil() {
        var nama_profil = new FormData();
        nama_profil.append('file_profil', data_profil);
        $.ajax({
            type: 'POST',
            url: " <?= base_url() ?>Rest_API/Profil/Terminal",
            headers: {
                'KEY-SPBE': 'SPBE',
                'Authorization': "Basic " + btoa("gas:gas")
            },
            dataType: 'json',
            data: nama_profil,
            enctype: 'multipart/form-data',
            cache: false,
            processData: false,
            contentType: false,
            success: function(response) {
                console.log(response);
                foto_profil();
            }
        });
    }

    function foto_profil() {
        $.ajax({
            type: 'GET',
            headers: {
                'Content-Type': 'application/x-www-form-urlencoded',
                'Authorization': "Basic " + btoa("gas:gas")
            },
            url: " <?= base_url() ?>Rest_API/Profil/Terminal?KEY-SPBE=SPBE",
            contentType: "application/json",
            dataType: 'json',
            success: function(response) {
                console.log(response);
                document.getElementById('profil_img').innerHTML = '<img src="<?= base_url() ?>uploads/' + response.data.nama_profil + '" alt="Card image cap" class="avatar-img rounded-circle avatar-xxl">'
            }
        })
    }
    setTimeout(foto_profil, 100)
</script>