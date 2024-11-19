<script src="<?php echo base_url(); ?>assets/js/popper.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/jquery.js"></script>
<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/jquery.fancybox.js"></script>
<script src="<?php echo base_url(); ?>assets/js/jquery-ui.js"></script>
<script src="<?php echo base_url(); ?>assets/js/gsap.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/ScrollTrigger.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/splitType.js"></script>
<script src="<?php echo base_url(); ?>assets/js/bundled-lenis.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/wow.js"></script>
<script src="<?php echo base_url(); ?>assets/js/select2.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/appear.js"></script>
<script src="<?php echo base_url(); ?>assets/js/owl.js"></script>
<script src="<?php echo base_url(); ?>assets/js/custom-gsap.js"></script>
<script src="<?php echo base_url(); ?>assets/js/script.js"></script>




    <script>
        let active = "<?= $active ?>"; 

        let navActive = active.split(".")[0];
        $("."+navActive).addClass('current');               

       
    </script>