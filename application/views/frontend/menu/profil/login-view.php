<!-- Start Banner Area -->
<section class="banner-area organic-breadcrumb">
    <div class="container">
        <div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
            <div class="col-first">
                <h1>Login</h1>
                <nav class="d-flex align-items-center">
                    <a href="<?= base_url(); ?>">Home<span class="lnr lnr-arrow-right"></span></a>
                    <a href="#">Login</a>
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
                        <h4>Create new account</h4>
                        <p>There are advances being made in science and technology everyday, and a good example of this is the</p>
                        <a class="primary-btn" href="<?= site_url('registration'); ?>">Create an Account</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="login_form_inner">
                    <h3>Log in to enter</h3>
                    <form class="row login_form" action="<?= site_url('signin'); ?>" method="post" id="contactForm" novalidate="novalidate">
                        <div class="col-md-12 form-group">
                            <input type="email" class="form-control" name="email" placeholder="Email Address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email Address'">
                        </div>
                        <div class="col-md-12 form-group">
                            <input type="text" class="form-control" name="pass" placeholder="Password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Password'">
                        </div>
                        <div class="col-md-12 form-group">
                            <button type="submit" value="submit" class="primary-btn">Log In</button>                            
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================End Login Box Area =================-->