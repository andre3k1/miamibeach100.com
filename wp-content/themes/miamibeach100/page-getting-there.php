<?php get_header(); ?>

	<div class="vectors-left" data-stellar-ratio="1.1"><img src="<?php echo get_template_directory_uri(); ?>/img/vectors/vectors-left-faq.png" alt=""></div>
	<div class="vectors-right" data-stellar-ratio="1.1"><img src="<?php echo get_template_directory_uri(); ?>/img/vectors/vectors-right-home.png" alt=""></div>

	<section class="small-parallax location" data-stellar-background-ratio="0.9">

		<?php get_template_part( 'nav' ); ?>

		<div class="container">
			<div class="page-title">
				<h1 class="name"><span class="name-part title">Getting Here</span></h1>
			</div>
		</div>
	</section>

	<section class="slant location">
		<div class="container">
			<h5 class="hued animscroll">How to Get Here!</h5>

			<p class="location-blurb animscroll">
				Location blurb will go here. Location blurb will go here. Location blurb will go here. Location blurb will go here. Location blurb will go here. Location blurb will go here. 
			</p>

			<div class="north">

				<div class="directions">
					<p class="title">Coming From The North</p>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc adipiscing, odio eu euismod blandit, ligula mi faucibus erat, eget suscipit ante lorem id diam. In gravida fringilla felis, vel Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc adipiscing, odio eu euismod blandit, ligula mi faucibus erat, eget suscipit ante lorem id diam. In gravida fringilla felis, vel Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc adipiscing, odio eu euismod blandit, ligula mi faucibus erat, eget suscipit ante lorem id diam. In gravida fringilla felis, vel Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc adipiscing, odio eu euismod blandit, ligula mi faucibus erat, eget suscipit ante lorem id diam. In gravida fringilla felis, vel </p>
				</div>
				<div class="map" id="north-map"></div>
				
			</div>			

			<div class="south">
				<div class="directions">
					<p class="title">Coming From The South</p>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc adipiscing, odio eu euismod blandit, ligula mi faucibus erat, eget suscipit ante lorem id diam. In gravida fringilla felis, vel Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc adipiscing, odio eu euismod blandit, ligula mi faucibus erat, eget suscipit ante lorem id diam. In gravida fringilla felis, vel Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc adipiscing, odio eu euismod blandit, ligula mi faucibus erat, eget suscipit ante lorem id diam. In gravida fringilla felis, vel Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc adipiscing, odio eu euismod blandit, ligula mi faucibus erat, eget suscipit ante lorem id diam. In gravida fringilla felis, vel </p>
				</div>
				<div class="map" id="south-map"></div>
			</div>

		</div>
	</section>

<?php get_footer(); ?>