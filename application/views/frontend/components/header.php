<header class="header_area sticky-header">
    <div class="main_menu">
        <nav class="navbar navbar-expand-lg navbar-light main_box">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <a class="navbar-brand logo_h" href="<?= base_url() ?>"><img src="<?= base_url('assets/img/logo.png') ?>" alt=""></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                    <ul class="nav navbar-nav menu_nav ml-auto">
                        <li class="nav-item <?= $active == 'home' ? 'active' : ''; ?>">
                            <a class="nav-link" href="<?= base_url() ?>">Home</a>
                        </li>
                        <li class="nav-item <?= $active == 'shop' ? 'active' : ''; ?>">
                            <a href="<?= site_url('shop') ?>" class="nav-link">Shop</a>
                        </li>
                        <li class="nav-item <?= $active == 'contact' ? 'active' : ''; ?>">
                            <a class="nav-link" href="<?= site_url('contact') ?>">Contact</a>
                        </li>
                        <li class="nav-item <?= $active == 'login' ? 'active' : ''; ?>">
                            <?php if ($this->session->userdata('idUser')) : ?>
                                <a href="<?= site_url('uprofil/' . $this->session->userdata('idUser')); ?>" class="nav-link">Account</a>
                            <?php else : ?>
                                <a href="<?= site_url('ulogin'); ?>" class="nav-link">Login</a>
                            <?php endif; ?>
                        </li>
                        <?php if ($this->session->userdata('idUser')) : ?>
                            <li class="nav-item <?= $active == 'cart' ? 'active' : ''; ?>">
                                <a href="<?= site_url('shop-cart'); ?>" class="nav-link">My Order</a>
                            </li>
                        <?php endif; ?>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li class="nav-item">
                            <button class="search"><span class="lnr lnr-magnifier" id="search"></span></button>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    <div class="search_input" id="search_input_box">
        <div class="container">
            <form action="" method="get" class="d-flex justify-content-between">
                <input type="text" class="form-control" id="search_input" placeholder="Search Here">
                <button type="submit" class="btn"></button>
                <span class="lnr lnr-cross" id="close_search" title="Close Search"></span>
            </form>
        </div>
    </div>
</header>