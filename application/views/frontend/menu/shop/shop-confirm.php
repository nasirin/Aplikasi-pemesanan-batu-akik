<!-- Start Banner Area -->
<section class="banner-area organic-breadcrumb">
	<div class="container">
		<div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
			<div class="col-first">
				<h1>Invoice</h1>
				<nav class="d-flex align-items-center">
					<a href="<?= base_url(); ?>">Home<span class="lnr lnr-arrow-right"></span></a>
					<a href="#">invoice</a>
				</nav>
			</div>
		</div>
	</div>
</section>
<!-- End Banner Area -->

<!--================Order Details Area =================-->
<section class="order_details section_gap">
	<div class="container">
		<h3 class="title_confirmation"><?= $this->session->flashdata('success'); ?></h3>
		<a href="<?= site_url('shop-cart'); ?>" class="primary-btn m-auto">Back</a>
	</div>
</section>
<!--================End Order Details Area =================-->