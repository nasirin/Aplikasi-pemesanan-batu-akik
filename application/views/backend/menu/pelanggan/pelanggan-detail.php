<div class="container-fluid">
    <div class="row clearfix">
        <div class="col-xs-12">
            <div class="card profile-card">
                <div class="profile-header">&nbsp;</div>
                <div class="profile-body">
                    <div class="image-area">
                        <img src="<?= base_url('assets/img/default-user.jpg'); ?>" width="100" height="100" alt="Profile Image" />
                    </div>
                    <div class="content-area">
                        <h3><?= ucwords($pelanggan['nama_pel']); ?></h3>
                        <p>Tgl daftar: <?= date('d M Y', strtotime($pelanggan['created_pel'])); ?></p>
                    </div>
                </div>
            </div>

            <div class="card card-about-me">
                <div class="header">
                    <h2>ABOUT ME</h2>
                </div>
                <div class="body">
                    <ul>
                        <li>
                            <div class="title">
                                <i class="material-icons">email</i>
                                Email
                            </div>
                            <div class="content">
                                <?= $pelanggan['email_pel']; ?>
                            </div>
                        </li>
                        <li>
                            <div class="title">
                                <i class="material-icons">lock</i>
                                Password
                            </div>
                            <div class="content">
                                <?= $pelanggan['pass_pel']; ?>
                            </div>
                        </li>
                        <li>
                            <div class="title">
                                <i class="material-icons">phone</i>
                                Telepon
                            </div>
                            <div class="content">
                                <?= $pelanggan['notelp_pel']; ?>
                            </div>
                        </li>
                        <li>
                            <div class="title">
                                <i class="material-icons">maps</i>
                                Address...
                            </div>
                            <div class="content">
                                <?= $pelanggan['alamat_pel']; ?>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>