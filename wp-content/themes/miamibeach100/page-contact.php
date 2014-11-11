<?php get_header(); ?>

	<div class="vectors-left-contact" data-stellar-ratio="1.1"><img src="<?php echo get_template_directory_uri(); ?>/img/vectors/vectors-left-contact.png" alt=""></div>
	<div class="vectors-right-contact" data-stellar-ratio="1.1"><img src="<?php echo get_template_directory_uri(); ?>/img/vectors/vectors-right-contact.png" alt=""></div>

	<section class="main-parallax contact" data-stellar-background-ratio="0.9">

		<?php get_template_part( 'nav' ); ?>
		
		<div class="container">
			<div class="page-title">
				<h1 class="name"><span class="name-part title">We're Here</span></h1>
					<h2 class="name-part subtitle"> to Serve</h2>
			</div>
			</div>
		</div>
	</section>

	<section class="slant contact">

		<div class="container">
			<h5 class="hued animscroll">Support</h5>
			<p class="contact-blurb blurb animscroll">For more info and support, contact us!</p>
			<div class="vector-bg-right-small" data-stellar-ratio="1.1"></div>

			<ul class="contact-grid animscroll">
				<li>
					<i class="fa fa-map-marker"></i>
					<p class="contact-items"><span>Sponsorship Opportunities</span><br/>
						<a href="mailto:sponsorship@miamibeach100.com">sponsorship@miamibeach100.com</a>
						or call (305) 341-7899
					</p>
				</li>
				<li>
					<i class="fa fa-map-marker"></i>
					<p class="contact-items"><span>PR & Press Inquiries</span><br/>
						<a href="mailto:press@miamibeach100.com">press@miamibeach100.com</a>
						or call (305) 341-7899
					</p>
				</li>
				<li>
					<i class="fa fa-map-marker"></i>
					<p class="contact-items"><span>To Volunteer</span><br/>
						<a href="mailto:volunteer@miamibeach100.com">volunteer@miamibeach100.com&nbsp;</a>
						or call (305) 538-3809
					</p>
				</li>
				<li>
					<i class="fa fa-map-marker"></i>
					<p class="contact-items"><span>Tickets for Events</span><br/>
						<a href="mailto:events@miamibeach100.com">events@miamibeach100.com</a>
						or call (305) 538-3809
					</p>
				</li>
			</ul>

			<div class="form-contact animscroll">
				<?php echo do_shortcode( '[contact-form-7 id="63" title="Contact Miami Beach 100"]' ) ?>
			</div>

			<div class="vector-bg-left-small" data-stellar-ratio="1.1"></div>

			<ul class="info-form animscroll">
				<li>
					<a target="_blank" href="https://goo.gl/maps/7Ryiy"><i class="fa fa-map-marker"></i></a>
					<p class="contact-info"><a target="_blank" href="https://goo.gl/maps/Bqij6">407 Lincoln Road, Suite 304<br/>Miami Beach, FL 33139</a></p>
				</li>
				<li>
					<a target="_blank" href="mailto:"><i class="fa fa-envelope"></i></a>
					<p class="contact-info"><a target="_blank" href="mailto:contact@miamibeach100.com">contact@miamibeach100.com</a></p>
				</li>
				<li>
					<a target="_blank" href=""><i class="fa fa-phone"></i></a>
					<p class="contact-info"><a target="_blank" href="tel:305 341 7899">(305) 341-7899</a></p>
				</li>
			</ul
		</div> 

	</section>

<?php get_footer(); ?>
