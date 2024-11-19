<?php defined('BASEPATH') or exit('No direct script access allowed'); 

$img_url = 'http://localhost/wetshieldadmin\uploads\project'
// $img_url = 'https://wetshieldadmin.bharatmakers.com/uploads/project'
?>

<!DOCTYPE html>
<html lang="en">
<!-- Head Sectio -->
<?php require('components/head.php'); ?>

<body>
<?php require('components/navbar.php'); 


?>

<div class="page-wrapper">

  <!-- Preloader -->
  <div class="preloader"></div>





	<!-- Start main-content -->
	<section class="page-title" style="background-image: url(<?php echo base_url(); ?>assets/images/background/page-title.jpg);">
		<div class="auto-container">
			<div class="title-outer text-center">
				<h1 class="title"><?php echo $project[0]['project_name']?></h1>
				<ul class="page-breadcrumb">
					<li><a href="<?php echo base_url(); ?>">Home</a></li>
					<li><?php echo $project[0]['project_name']?></li>
				</ul>
			</div>
		</div>
	</section>
	<!-- end main-content -->


  <!-- Project Section -->
  <section class="project-section style-two">

  <div class="project-container">


      <?php foreach ($image as $images): ?>
        <div class="img-wrapper">
      <img src="<?php echo $img_url ."/". $images->image?>" alt="">

      </div>
            <?php endforeach; ?>

  </div>
  
  </section>
  <!-- End Project Section -->


  <?php require('components/footer.php'); ?>


</div><!-- End Page Wrapper -->

<!-- Scroll To Top -->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-angle-up"></span></div>

<?php require('components/script.php'); ?>

</body>

</html>