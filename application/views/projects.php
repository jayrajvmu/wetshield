<?php defined('BASEPATH') or exit('No direct script access allowed'); 

$img_url = 'http://localhost/wetshieldadmin\uploads\projects'
// $img_url = 'https://wetshieldadmin.bharatmakers.com/uploads/projects'
?>

<!DOCTYPE html>
<html lang="en">
<!-- Head Sectio -->
<?php require('components/head.php'); ?>

<body>
<?php require('components/navbar.php'); ?>

<div class="page-wrapper">

  <!-- Preloader -->
  <div class="preloader"></div>





	<!-- Start main-content -->
	<section class="page-title" style="background-image: url(<?php echo base_url(); ?>assets/images/background/page-title.jpg);">
		<div class="auto-container">
			<div class="title-outer text-center">
				<h1 class="title">Projects</h1>
				<ul class="page-breadcrumb">
					<li><a href="<?php echo base_url(); ?>">Home</a></li>
					<li>Projects</li>
				</ul>
			</div>
		</div>
	</section>
	<!-- end main-content -->


  <!-- Project Section -->
  <section class="project-section style-two">
    <div class="outer-box">
      <div class="projects-carousel owl-carousel owl-theme default-dots">
        <!-- Project Block -->


        <?php foreach ($projects as $project): ?>
          <div class="project-block">
          <div class="inner-box">
            <div class="image-box">
              <figure class="image"><a href="<?php echo base_url().$project['url'] ?>"><img src="<?php echo $img_url ."/". $project['project_img']?>" alt="Image"></a></figure>
            </div>
            <div class="content-box">
              <a href="<?php echo base_url().$project['url'] ?>" class="theme-btn read-more"><i class="far fa-arrow-up"></i></a><br>
              <h4 class="title"><a href="<?php echo base_url().$project['url'] ?>"><?php echo $project['project_name'] ?></a></h4>
            </div>
            <div class="overlay-1"></div>
          </div>
        </div>
            <?php endforeach; ?>
 
      </div>
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