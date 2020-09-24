<aside id="leftsidebar" class="sidebar">
    <!-- User Info -->
    <div class="user-info">
        <div class="image">
            <img src="<?= base_url('assets/template/backend/') ?>images/user.png" width="48" height="48" alt="User" />
        </div>
        <div class="info-container">
            <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?= ucwords($this->fungsi->user_login()->nama_user); ?></div>
            <div class="email"><?= ucwords($this->fungsi->user_login()->level); ?></div>
            <div class="btn-group user-helper-dropdown">
                <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                <ul class="dropdown-menu pull-right">
                    <li><a href="<?= site_url('profil/' . $this->session->userdata('id')); ?>"><i class="material-icons">person</i>Profile</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href="<?= site_url('logout'); ?>"><i class="material-icons">input</i>Sign Out</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="menu">
        <ul class="list">
            <li class="header">MAIN NAVIGATION</li>
            <li class="<?= $active == 'home' ? 'active' : ''; ?>">
                <a href="<?= base_url(); ?>">
                    <i class="material-icons">home</i>
                    <span>Home</span>
                </a>
            </li>
            <li class="<?= $active == 'order' ? 'active' : ''; ?>">
                <a href="<?= site_url('pesanan') ?>">
                    <i class="material-icons">assignment</i>
                    <span>Pesanan</span>
                </a>
            </li>
            <li class="<?= $active == 'produk' ? 'active' : ''; ?>">
                <a href="<?= site_url('produk'); ?>">
                    <i class="material-icons">widgets</i>
                    <span>Produk</span>
                </a>
            </li>
            <!-- <li class="<?= $active == 'produk' ? 'active' : ''; ?>">
                <a href="<?= site_url('produk'); ?>">
                    <i class="material-icons">layers</i>
                    <span>Produk</span>
                </a>
            </li> -->
            <li class="<?= $active == 'pelanggan' ? 'active' : ''; ?>">
                <a href="<?= site_url('pelanggan'); ?>">
                    <i class="material-icons">people</i>
                    <span>Pelanggan</span>
                </a>
            </li>
            <li class="<?= $active == 'user' ? 'active' : ''; ?>">
                <a href="<?= site_url('user'); ?>">
                    <i class="material-icons">people</i>
                    <span>User</span>
                </a>
            </li>
        </ul>
    </div>
</aside>