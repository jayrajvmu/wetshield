<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>

<!DOCTYPE html>
<html lang="en">
<!-- Head Sectio -->
<?php require('components/head.php'); ?>

<body>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script type="text/javascript">


<?php if($this->session->flashdata('emailsucess')){ ?>
	Swal.fire({
  title: 'Sucess',
  text: 'Mail sent sucessfully!',
  icon: 'sucess',
  confirmButtonText: 'Cool'
})
<?php }else if($this->session->flashdata('emailerror')){  ?>
	Swal.fire({
  title: 'Error!',
  text: 'Something went wrong!',
  icon: 'error',
  confirmButtonText: 'Cool'
})
<?php } ?>


</script>
<?php require('components/navbar.php'); ?>

<div class="page-wrapper">

  <!-- Preloader -->
  <div class="preloader"></div>





    	<!-- Start main-content -->
	<section class="page-title" style="background-image: url(<?php echo base_url(); ?>assets/images/background/page-title.jpg);">
		<div class="auto-container">
			<div class="title-outer text-center">
				<h1 class="title">Contact Us</h1>
				<ul class="page-breadcrumb">
					<li><a href="<?php echo base_url(); ?>">Home</a></li>
					<li>Contact</li>
				</ul>
			</div>
		</div>
	</section>
	<!-- end main-content -->

	<!--Contact Details Start-->
	<section class="contact-details">
		<div class="container ">
			<div class="row">
				<div class="col-xl-7 col-lg-6">
					<div class="sec-title">
						<span class="sub-title">Send us email</span>
						<h2>Feel free to write</h2>
					</div>
					<!-- Contact Form -->
					<form id="contact_form" name="contact_form" class="" action="<?php echo base_url(); ?>/Welcome/send_mail" method="post">
						<div class="row">
							<div class="col-sm-6">
								<div class="mb-3">
									<input name="form_name" class="form-control" type="text" placeholder="Enter Name" required>
								</div>
							</div>
							<div class="col-sm-6">
								<div class="mb-3">
									<input name="form_email" class="form-control  email" type="email" placeholder="Enter Email" required>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-6">
								<div class="mb-3">
									<input name="form_city" class="form-control " type="text" placeholder="Enter City">
								</div>
							</div>
							<div class="col-sm-6">
								<div class="mb-3">
									<input name="form_phone" class="form-control" type="text" placeholder="Enter Phone" required pattern="[6-9]{1}[0-9]{9}">
								</div>
							</div>
						</div>
						<div class="mb-3">
							<textarea name="form_message" class="form-control " rows="7" placeholder="Enter Message"></textarea>
						</div>
						<div class="mb-5">
							<input name="form_botcheck" class="form-control" type="hidden" value="" />
							<button type="submit" class="theme-btn btn-style-one" data-loading-text="Please wait..."><span class="btn-title">Send message</span></button>
							<button type="reset" class="theme-btn btn-style-one ml-25"><span class="btn-title">Reset</span></button>
						</div>
					</form>
					<!-- Contact Form Validation-->
				</div>
				<div class="col-xl-5 col-lg-6">
					<div class="contact-details__right">
						<div class="sec-title">
							<span class="sub-title">Need any help?</span>
							<h2>Get in touch with us</h2>
							<div class="text">Lorem ipsum is simply free text available dolor sit amet consectetur notted adipisicing elit sed do eiusmod tempor incididunt simply dolore magna.</div>
						</div>
						<ul class="list-unstyled contact-details__info">
							<li>
								<div class="icon">
									<span class="lnr-icon-phone-plus"></span>
								</div>
								<div class="text">
									<h6 class="mb-1">Have any question?</h6>
									<a href="+918015545547"><span>Free</span>+91 80155 45547</a>

								</div>
							</li>
							<li>
								<div class="icon">
									<span class="lnr-icon-envelope1"></span>
								</div>
								<div class="text">
									<h6 class="mb-1">Write email</h6>
						

									<a href="mailto:info@wetshield.in"><span class="__cf_email__" data-cfemail="">info@wetshield.in</span></a>

								</div>
							</li>
							<li>
								<div class="icon">
									<span class="lnr-icon-location"></span>
								</div>
								<div class="text">
									<h6 class="mb-1">Visit anytime</h6>
									<span>204-JH, Ashirvad colony,<br> Hormavu, Bangalore, 560043</span>
								</div>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--Contact Details End-->

    	<!-- Map Section-->
	<section class="map-section py-0">
		<!-- <iframe  class="map w-100"  src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=1%20Grafton%20Street,%20Dublin,%20Ireland+(My%20Business%20Name)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe> -->

			<iframe  class="map w-100"  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d244.76813892021815!2d76.97311302131772!3d11.01683805116046!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ba859bb6aaaaaab%3A0x12d45667012935f5!2sKisslead%20Technologies!5e0!3m2!1sen!2sin!4v1731493990672!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
	</section>
	<!--End Map Section-->


  <?php require('components/footer.php'); ?>


</div><!-- End Page Wrapper -->

<!-- Scroll To Top -->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-angle-up"></span></div>

<?php require('components/script.php'); ?>

</body>

</html>