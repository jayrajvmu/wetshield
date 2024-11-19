
<?php
   $active = basename($_SERVER['PHP_SELF']); //get active page from url
?>
  <!-- Main Header-->
  <header class="main-header header-style-one">
    <div class="header-lower">
      <!-- Main box -->
      <div class="main-box">
        <div class="logo-box">
          <div class="logo"><a href="<?php echo base_url(); ?>"><img src="<?php echo base_url(); ?>assets/images/logo.png" alt="Logo" title="Roofting"></a></div>
        </div>

        <!--Nav Box-->
        <div class="nav-outer">
          <nav class="nav main-menu">
            <ul class="navigation">
            <li class="index"><a href="<?php echo base_url(); ?>">Home</a></li>
            <li class="ourcompany"><a href="<?php echo base_url(); ?>ourcompany">Our Company</a></li>
            <li class="services"><a href="<?php echo base_url(); ?>services">Services</a></li>
            <li class="projects"><a href="<?php echo base_url(); ?>projects">Projects</a></li>
            <li class="contact"><a href="<?php echo base_url(); ?>contact">Contact</a></li>
            </ul>
          </nav>
        </div>
        <!-- Main Menu End-->

        <!-- Outer Box -->
        <div class="outer-box">


          <!-- Info Btn -->
          <div class="btn-box">
            <!-- Info Btn -->
            <a href="tel:+918015545547" class="info-btn-two"> <i class="icon fa fa-phone"></i> <small>Make A Call:</small> <strong>+91 80155 45547</strong> </a>
          </div>
          <!-- Mobile Nav toggler -->
          <div class="mobile-nav-toggler"><span class="icon lnr-icon-bars"></span></div>
        </div>
      </div>
    </div>

    <!-- Mobile Menu  -->
    <div class="mobile-menu">
      <div class="menu-backdrop"></div>
      <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
      <nav class="menu-box">
        <div class="upper-box">
          <div class="nav-logo"><a href="<?php echo base_url(); ?>"><img src="<?php echo base_url(); ?>assets/images/logo-2.png" alt="" title=""></a></div>
          <div class="close-btn"><i class="icon fa fa-times"></i></div>
        </div>
        <ul class="navigation clearfix">
          <!--Keep This Empty / Menu will come through Javascript-->
        </ul>
        <ul class="contact-list-one light">
          <li> <i class="icon lnr-icon-phone-handset"></i> <span class="title">Call Now</span>
            <div class="text"><a href="tel:+918015545547">+91 80155 45547</a></div>
          </li>
          <li> <i class="icon lnr-icon-envelope1"></i> <span class="title">Send Email</span>
            <div class="text"><a href="mailto:info@wetshield.in"><span class="__cf_email__" data-cfemail="">info@wetshield.in</span></a></div>
          </li>
          <li> <i class="icon lnr-icon-map-marker"></i> <span class="title">Address</span>
            <div class="text">204-JH, Ashirvad colony, Hormavu, Bangalore, 560043</div>
          </li>
        </ul>
        <ul class="social-links">
          <li><a href="#"><i class="fab fa-twitter"></i></a></li>
          <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
          <li><a href="#"><i class="fab fa-pinterest"></i></a></li>
          <li><a href="#"><i class="fab fa-instagram"></i></a></li>
        </ul>
      </nav>
    </div>
    <!-- End Mobile Menu -->



    <!-- Sticky Header  -->
    <div class="sticky-header">
      <div class="auto-container">
        <div class="inner-container">
          <!--Logo-->
          <div class="logo"> <a href="<?php echo base_url(); ?>" title=""><img src="<?php echo base_url(); ?>assets/images/logo.png" alt="" title=""></a> </div>

          <!--Right Col-->
          <div class="nav-outer">
            <!-- Main Menu -->
            <nav class="main-menu">
              <div class="navbar-collapse show collapse clearfix">
                <ul class="navigation clearfix">
                  <!--Keep This Empty / Menu will come through Javascript-->
                </ul>
              </div>
            </nav>
            <!-- Main Menu End-->

            <!--Mobile Navigation Toggler-->
            <div class="mobile-nav-toggler"><span class="icon lnr-icon-bars"></span></div>
          </div>
        </div>
      </div>
    </div>
    <!-- End Sticky Menu -->
  </header>
  <!--End Main Header -->