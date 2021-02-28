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
                            <h3><?= ucwords($user['namaUser']); ?></h3>
                            <p><?= ucwords($user['level']); ?></p>
                            <p><?= ucwords($user['statusUser'] == 'on' ? 'Active' : 'Non Active')  ?></p>
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
                                    <?= $user['emailUser']; ?>
                                </div>
                            </li>
                            <li>
                                <div class="title">
                                    <i class="material-icons">lock</i>
                                    Password
                                </div>
                                <div class="content">
                                    <?= $user['passUser']; ?>
                                </div>
                            </li>
                            <li>
                                <div class="title">
                                    <i class="material-icons">phone</i>
                                    Telepon
                                </div>
                                <div class="content">
                                    <?= $user['notelpUser']; ?>
                                </div>
                            </li>
                            <li>
                                <div class="title">
                                    <i class="material-icons">maps</i>
                                    Address...
                                </div>
                                <div class="content">
                                    <?= $user['alamatUser']; ?>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>