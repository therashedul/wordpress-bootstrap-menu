<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Bootstrap wordpress menu</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <!-- Vendor CSS Files -->
		<link href="<?php echo get_template_directory_uri().'/'; ?>assets/vendor/aos/aos.css" rel="stylesheet">
		<link href="<?php echo get_template_directory_uri().'/'; ?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<link href="<?php echo get_template_directory_uri().'/'; ?>assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
		<link href="<?php echo get_template_directory_uri().'/'; ?>assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
		<link href="<?php echo get_template_directory_uri().'/'; ?>assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
		<link href="<?php echo get_template_directory_uri().'/'; ?>assets/vendor/remixicon/remixicon.css" rel="stylesheet">
		<link href="<?php echo get_template_directory_uri().'/'; ?>assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

		<!-- Template Main CSS File -->
		<link href="<?php echo get_stylesheet_directory_uri(). '/style.css' ?>" rel="stylesheet">
  </head>
  <body>
    <h1>Wordrpess menu </h1>

    <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center">
            <h1 class="logo me-auto"> 
			    <a href="index.html">DigiMobi</a> 
			</h1>
											
            	    <nav id="navbar" class="navbar">
							<ul>
								<?php
								if ( has_nav_menu( 'primary' ) ) {

									wp_nav_menu(
										array(
											'container' => 'div',
											'menu' => 'primary',
											'theme_location' => 'primary',
											'depth' => 2,
											'container_class' => '',
											'container_id' => 'navbarCollapse',
											'add_li_class'  => 'li-1 li-2',
											'menu_class' => '',
											'fallback_cb' => 'bs4navwalker::fallback',
											'walker' => new bs4navwalker()
										)
									);

								} elseif ( ! has_nav_menu( 'expanded' ) ) {

									wp_list_pages(
										array(
											'match_menu_classes' => true,
											'show_sub_menu_icons' => true,
											'title_li' => false,
											'walker'   => new TwentyTwenty_Walker_Page(),
										)
									);

								}
								?>

							</ul>
							<i class="bi bi-list mobile-nav-toggle"></i>
						</nav
              ><!-- .primary-menu-wrapper -->
			</div><!-- .header-inner -->
		</header><!-- #site-header -->

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>


	<!-- Vendor JS Files -->
	<script src="<?php echo get_template_directory_uri().'/'; ?>assets/vendor/aos/aos.js"></script>
	<script src="<?php echo get_template_directory_uri().'/'; ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
	<script src="<?php echo get_template_directory_uri().'/'; ?>assets/vendor/glightbox/js/glightbox.min.js"></script>
	<script src="<?php echo get_template_directory_uri().'/'; ?>assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
	<script src="<?php echo get_template_directory_uri().'/'; ?>assets/vendor/swiper/swiper-bundle.min.js"></script>
	<script src="<?php echo get_template_directory_uri().'/'; ?>assets/vendor/waypoints/noframework.waypoints.js"></script>
	<script src="<?php echo get_template_directory_uri().'/'; ?>assets/vendor/php-email-form/validate.js"></script>

		<?php wp_footer(); ?>

	</body>
</html>