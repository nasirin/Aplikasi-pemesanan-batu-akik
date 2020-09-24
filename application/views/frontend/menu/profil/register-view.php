<!-- Start Banner Area -->
<section class="banner-area organic-breadcrumb">
    <div class="container">
        <div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
            <div class="col-first">
                <h1>Registration</h1>
                <nav class="d-flex align-items-center">
                    <a href="index.html">Home<span class="lnr lnr-arrow-right"></span></a>
                    <a href="#">Registration</a>
                </nav>
            </div>
        </div>
    </div>
</section>
<!-- End Banner Area -->

<!--================Login Box Area =================-->
<section class="login_box_area section_gap">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="login_box_img">
                    <img class="img-fluid" src="<?= base_url('assets/template/frontend/'); ?>img/login.jpg" alt="">
                    <div class="hover">
                        <h4>Alredy have account?</h4>
                        <p>There are advances being made in science and technology everyday, and a good example of this is the</p>
                        <a class="primary-btn" href="<?= site_url('ulogin'); ?>">login</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="login_form_inner">
                    <h3>create new account</h3>
                    <form class="row login_form" action="<?= site_url('register'); ?>" method="post" id="contactForm" novalidate="novalidate">
                        <div class="col-md-12 form-group">
                            <input type="text" class="form-control" name="nama" placeholder="Full Name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Full name'">
                        </div>
                        <div class="col-md-12 form-group">
                            <input type="text" class="form-control" name="email" placeholder="Email Address.." onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email Address..'">
                        </div>
                        <div class="col-md-12 form-group">
                            <input type="text" class="form-control" name="pass" placeholder="Password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Password'">
                        </div>
                        <div class="col-md-12 form-group">
                            <input type="number" class="form-control" name="notelp" min="0" placeholder="Phone Number" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Phone Number'">
                        </div>
                        <div class="col-md-12 form-group">
                        <input type="text" class="form-control" name="alamat" placeholder="Address..." onfocus="this.placeholder = ''" onblur="this.placeholder = 'Address...'">
                        </div>
                        <div class="col-md-12 form-group">
                            <button type="submit" value="submit" class="primary-btn">Sign up</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================End Login Box Area =================-->