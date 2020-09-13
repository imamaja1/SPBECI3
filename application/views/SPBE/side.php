<!-- Sidebar -->
<div class="sidebar sidebar-style-2">
    <div class="sidebar-wrapper scrollbar scrollbar-inner">
        <div class="sidebar-content">
            <div class="user">
                <div class="avatar-sm float-left mr-2">
                    <img src="<?= base_url() ?>assets/img/profile.jpg" alt="..." class="avatar-img rounded-circle">
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
                    <a href="<?= base_url() ?>SPBE" class="collapsed" aria-expanded="false">
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
                    <a href="<?= base_url() ?>SPBE/permintaan" class="collapsed" aria-expanded="false">
                        <i class="fas fa-home"></i>
                        <p>Permintaan</p>

                    </a>
                </li>
                <li class="nav-item 
                <?php if ($side == 'profil') {
                    echo 'active';
                } ?>">
                    <a href="<?= base_url() ?>SPBE/profil" class="collapsed" aria-expanded="false">
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
                    <a href="<?= base_url() ?>SPBE/log_out" class="collapsed" aria-expanded="false">
                        <i class="fas fa-home"></i>
                        <p>Log Out</p>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- End Sidebar -->