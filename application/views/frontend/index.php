<?php $this->load->view('frontend/components/meta') ?>

<body id="category">

    <!-- Start Header Area -->
    <?php $this->load->view('frontend/components/header') ?>
    <!-- End Header Area -->

   <?= $contents; ?>

    <!-- start footer Area -->
    <footer class="footer-area section_gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-4  col-md-6 col-sm-6">
                    <div class="single-footer-widget">
                        <h6>About Us</h6>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore dolore
                            magna aliqua.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-footer-widget">
                        <h6>Follow Us</h6>
                        <p>Let us be social</p>
                        <div class="footer-social d-flex align-items-center">
                            <a href="<?= base_url('assets/template/frontend/') ?>#"><i class="fa fa-facebook"></i></a>
                            <a href="<?= base_url('assets/template/frontend/') ?>#"><i class="fa fa-twitter"></i></a>
                            <a href="<?= base_url('assets/template/frontend/') ?>#"><i class="fa fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- End footer Area -->

    <?php $this->load->view('frontend/components/js') ?>
</body>

</html>