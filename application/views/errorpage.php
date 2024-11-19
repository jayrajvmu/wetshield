<?php defined('BASEPATH') or exit('No direct script access allowed'); 

$img_url = 'http://localhost/wetshieldadmin\uploads\project'
// $img_url = 'https://wetshieldadmin.bharatmakers.com/uploads/projects'
?>

<!DOCTYPE html>
<html lang="en">
<!-- Head Sectio -->
<?php require('components/head.php'); ?>

<body>
<?php require('components/navbar.php'); 

print_r($project)

?>

<div class="page-wrapper">

  <!-- Preloader -->
  <div class="preloader"></div>




	<!-- 404 Section -->
	<section class="">
		<div class="auto-container pt-120 pb-70">
			<div class="row">
				<div class="col-xl-12">
					<div class="error-page__inner">
						<div class="error-page__title-box">
							<img src="<?php echo base_url(); ?>assets/images/resource/404.jpg" alt="">
							<h3 class="error-page__sub-title">Page not found!</h3>
						</div>
						<p class="error-page__text">Sorry we can't find that page! The page you are looking <br> for
							was never existed.</p>
				
						<a href="<?php echo base_url(); ?>" class="theme-btn btn-style-one hover-dark"><span class="btn-title">Back to Home</span></a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--End 404 Section -->


  <?php require('components/footer.php'); ?>


</div><!-- End Page Wrapper -->

<!-- Scroll To Top -->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-angle-up"></span></div>

<?php require('components/script.php'); ?>

</body>

</html>