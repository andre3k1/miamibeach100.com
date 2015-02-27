		<header>
			<div class="container">
				<div class="center"><a class="mb-logo" href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="miami beach logo"></a></div>
				<nav>
					<li class="mobile-nav"><a href=""><i class="fa fa-bars"></i> Navigation</a></li>
					<?php wp_nav_menu(); ?>
				</nav>
			</div>
		</header>

		<div id="lightbox-form" style="display: none;">
			<h2>To receive more information on all Centennial Celebration promotions, tickets and merchandise fill out the form below. </h2>
			<?php echo do_shortcode( '[contact-form-7 id="2498" title="Data Capture Lightbox"]' ) ?>
		</div>