<!-- Sidebar -->
<div class="sidebar sidebar-style-2">
    <div class="sidebar-wrapper scrollbar scrollbar-inner">
        <div class="sidebar-content">
            <div class="user">
                <div class="card">
                    <div class="card-body" style="text-align: center;">
                        <div id="profil_img"></div>
                        <div class="profile-image" style="margin: -20px 0 0px 0 ;">
                            <a type="file" data-toggle="modal" data-target="#Profil"><span class="fa fa-camera" style="background-color: skyblue; padding:8px; border-radius:50%; border-color:black"></span></a>
                        </div>
                    </div>
                </div>
                <div class="info">
                    <a data-toggle="collapse" href="#collapseExample" aria-expanded="true">
                        <span>
                            Hizrian
                            <span class="user-level">Administrator</span>
                        </span>
                    </a>
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
                    <a href="<?= base_url() ?>Patra_niaga" class="collapsed" aria-expanded="false">
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
                <?php if ($side == 'spbe') {
                    echo 'active';
                } ?>">
                    <a href="<?= base_url() ?>Patra_niaga/skid_tank" class="collapsed" aria-expanded="false">
                        <i class="fas fa-home"></i>
                        <p>Skid Tank</p>

                    </a>
                </li>
                <li class="nav-item 
                <?php if ($side == 'profil') {
                    echo 'active';
                } ?>">
                    <a href="<?= base_url() ?>Patra_niaga/profil" class="collapsed" aria-expanded="false">
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
                    <a href="<?= base_url() ?>Patra_niaga/log_out" class="collapsed" aria-expanded="false">
                        <i class="fas fa-home"></i>
                        <p>Log Out</p>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- End Sidebar -->

<script>
    var data_profil;
    document.getElementById('images').innerHTML = '<img src="<?= base_url() ?>assets/img/profile.jpg" alt="Card image cap" class="avatar-img rounded-circle avatar-xxl"  onchange="SavePhoto()" id="blah" >';

    document.getElementById('profil_img').innerHTML = ' <img src="<?= base_url() ?>assets/img/profile.jpg" alt="Card image cap" class="avatar-img rounded-circle avatar-xxl">';

    function readURL(input) {
        console.log('profil');
        // if (input.files && input.files[0]) {
        //     var reader = new FileReader();
        //     reader.onload = function(e) {
        //         $('#blah')
        //             .attr('src', e.target.result)
        //             .width(100)
        //             .height(100);
        //     };
        //     reader.readAsDataURL(input.files[0]);
        //     data_profil = input.files[0];
        // }
    }

    function profil() {
        var nama_profil = new FormData();
        nama_profil.append('file_profil', data_profil);
        console.log('ada')
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

    // function foto_profil() {
    //     $.ajax({
    //         type: 'GET',
    //         headers: {
    //             'Content-Type': 'application/x-www-form-urlencoded',
    //             'Authorization': "Basic " + btoa("gas:gas")
    //         },
    //         url: " <?= base_url() ?>Rest_API/Profil/Terminal?KEY-SPBE=SPBE",
    //         contentType: "application/json",
    //         dataType: 'json',
    //         success: function(response) {
    //             console.log(response);
    //             document.getElementById('profil_img').innerHTML = '<img src="<?= base_url() ?>uploads/' + response.data.nama_profil + '" alt="Card image cap" class="avatar-img rounded-circle avatar-xxl">'
    //         }
    //     })
    // }
    // setTimeout(foto_profil, 100)
</script>