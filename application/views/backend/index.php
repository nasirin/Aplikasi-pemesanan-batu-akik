<?php $this->load->View('backend/components/meta') ?>

<body class="theme-red">
    <!-- <div class="page-loader-wrapper">
        <div class="loader">
            <div class="preloader">
                <div class="spinner-layer pl-red">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
            <p>Please wait...</p>
        </div>
    </div>
    <div class="overlay"></div> -->

    <?php $this->load->View('backend/components/topbar') ?>
    <!-- #Top Bar -->
    <section>
        <?php $this->load->view('backend/components/asside') ?>
    </section>

    <section class="content">
        <?= $contents; ?>
    </section>

    <?php $this->load->view('backend/components/js') ?>
</body>

</html>