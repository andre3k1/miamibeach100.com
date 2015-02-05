<?php get_header(); ?>

<div class="vectors-left" data-stellar-ratio="1.1">
	<img src="<?php echo get_template_directory_uri(); ?>/img/vectors/vectors-left-blog-sponsors.png" alt="">
</div>

<div class="vectors-right" data-stellar-ratio="1.1">
	<img src="<?php echo get_template_directory_uri(); ?>/img/vectors/vectors-right-blog-sponsors.png" alt="">
</div>

<section class="main-parallax sponsors" data-stellar-background-ratio="0.9">
	<?php get_template_part( 'nav' ); ?>
	<div class="container">
		<div class="page-title">
			<h1 class="name">
				<span class="name-part title">Thank you</span>
			</h1>
			<h2 class="name-part animLeft">for your continuous</h2>
			<h1 class="name-part subtitle">Support</h1>
		</div>
	</div>
</section>

<section class="slant sponsors">
	<div class="container">
		<div class="vector-bg-left-small-sponsors" data-stellar-ratio="1.1"></div>
		<br>

		<!-- TITLE SPONSOR -->
		<?php if(get_field('page_sponsors_title_sponsor')): ?>
			<h1 class="animscroll">Official Title Sponsor</h1>
			<ul class="row animscroll">
				<?php while(has_sub_field('page_sponsors_title_sponsor')): ?>
					<li>
						<a href="<?php the_sub_field('url'); ?>" target="_blank">
							<?php
								$image = get_sub_field('image');
								$size = 'sponsor-banner';
								echo wp_get_attachment_image($image, $size);
							?>
						</a>
					</li>
				<?php endwhile; ?>
			</ul>
		<?php endif; ?>

		<!-- PRESENTING / AFFILIATE -->
		<div class="vsplit">
			<div class="col-1">
				<?php if(get_field('page_sponsors_presenting_sponsor')): ?>
					<h1 class="animscroll">Presenting Sponsors</h1>
					<ul class="tile-grid-large animscroll">
						<?php while(has_sub_field('page_sponsors_presenting_sponsor')): ?>
							<li>
								<a href="<?php the_sub_field('url'); ?>" target="_blank">
									<?php
										$image = get_sub_field('image');
										$size = 'sponsor-sqaure';
										echo wp_get_attachment_image($image, $size);
									?>
									<p class="thumb-link">
										<?php the_sub_field('sponsor_name'); ?>
									</p>
								</a>
							</li>
						<?php endwhile; ?>
					</ul>
				<?php endif; ?>
			</div>
			<div class="col-2">
				<?php if(get_field('page_sponsors_affiliate_sponsor')): ?>
					<h1 class="animscroll">Affiliate Sponsors</h1>
					<ul class="tile-grid-large animscroll">
						<?php while(has_sub_field('page_sponsors_affiliate_sponsor')): ?>
							<li>
								<a href="<?php the_sub_field('url'); ?>" target="_blank">
									<?php
										$image = get_sub_field('image');
										$size = 'sponsor-sqaure';
										echo wp_get_attachment_image($image, $size);
									?>
									<p class="thumb-link">
										<?php the_sub_field('sponsor_name'); ?>
									</p>
								</a>
							</li>
						<?php endwhile; ?>
					</ul>
				<?php endif; ?>
			</div>
		</div>

		<!-- DIAMOND / LEGACY -->
		<div class="vsplit">
			<div class="col-1">
				<?php if(get_field('page_sponsors_diamond_sponsor')): ?>
					<h1 class="animscroll">Diamond Sponsors</h1>
					<ul class="tile-grid-large animscroll">
						<?php while(has_sub_field('page_sponsors_diamond_sponsor')): ?>
							<li>
								<a href="<?php the_sub_field('url'); ?>" target="_blank">
									<?php
										$image = get_sub_field('image');
										$size = 'sponsor-sqaure';
										echo wp_get_attachment_image($image, $size);
									?>
									<p class="thumb-link">
										<?php the_sub_field('sponsor_name'); ?>
									</p>
								</a>
							</li>
						<?php endwhile; ?>
					</ul>
				<?php endif; ?>
			</div>
			<div class="col-2">
				<?php if(get_field('page_sponsors_legacy_sponsor')): ?>
					<h1 class="animscroll">Legacy Sponsors</h1>
					<ul class="tile-grid-large animscroll">
						<?php while(has_sub_field('page_sponsors_legacy_sponsor')): ?>
							<li>
								<a href="<?php the_sub_field('url'); ?>" target="_blank">
									<?php
										$image = get_sub_field('image');
										$size = 'sponsor-sqaure';
										echo wp_get_attachment_image($image, $size);
									?>
									<p class="thumb-link">
										<?php the_sub_field('sponsor_name'); ?>
									</p>
								</a>
							</li>
						<?php endwhile; ?>
					</ul>
				<?php endif; ?>
			</div>
		</div>

		<!-- PLATINUM -->
		<?php if(get_field('page_sponsors_platinum_sponsor')): ?>
			<h1 class="animscroll">Platinum Sponsors</h1>
			<ul class="tile-grid-medium animscroll">
				<?php while(has_sub_field('page_sponsors_platinum_sponsor')): ?>
					<li>
						<a href="<?php the_sub_field('url'); ?>" target="_blank">
							<?php
								$image = get_sub_field('image');
								$size = 'sponsor-sqaure';
								echo wp_get_attachment_image($image, $size);
							?>
							<p class="thumb-link">
								<?php the_sub_field('sponsor_name'); ?>
							</p>
						</a>
					</li>
				<?php endwhile; ?>
			</ul>
		<?php endif; ?>

		<!-- GOLD -->
		<?php if(get_field('page_sponsors_gold_sponsor')): ?>
			<h1 class="animscroll">Gold Sponsors</h1>
			<ul class="tile-grid-medium animscroll">
				<?php while(has_sub_field('page_sponsors_gold_sponsor')): ?>
					<li>
						<a href="<?php the_sub_field('url'); ?>" target="_blank">
							<?php
								$image = get_sub_field('image');
								$size = 'sponsor-sqaure';
								echo wp_get_attachment_image($image, $size);
							?>
							<p class="thumb-link">
								<?php the_sub_field('sponsor_name'); ?>
							</p>
						</a>
					</li>
				<?php endwhile; ?>
			</ul>
		<?php endif; ?>

		<!-- SILVER -->
		<?php if(get_field('page_sponsors_silver_sponsor')): ?>
			<h1 class="animscroll">Silver Sponsors</h1>
			<ul class="tile-grid-medium animscroll">
				<?php while(has_sub_field('page_sponsors_silver_sponsor')): ?>
					<li>
						<a href="<?php the_sub_field('url'); ?>" target="_blank">
							<?php
								$image = get_sub_field('image');
								$size = 'sponsor-sqaure';
								echo wp_get_attachment_image($image, $size);
							?>
						</a>
					</li>
				<?php endwhile; ?>
			</ul>
		<?php endif; ?>

		<!-- BRONZE -->
		<?php if(get_field('page_sponsors_bronze_sponsor')): ?>
			<h1 class="animscroll">Bronze Sponsors</h1>
			<ul class="tile-grid-medium animscroll">
				<?php while(has_sub_field('page_sponsors_bronze_sponsor')): ?>
					<li>
						<a href="<?php the_sub_field('url'); ?>" target="_blank">
							<?php
								$image = get_sub_field('image');
								$size = 'sponsor-sqaure';
								echo wp_get_attachment_image($image, $size);
							?>
						</a>
					</li>
				<?php endwhile; ?>
			</ul>
		<?php endif; ?>

		<!-- SUPPORTING -->
		<?php if(get_field('page_sponsors_supporting_sponsor')): ?>
			<h1 class="animscroll">Supporting Sponsors</h1>
			<ul class="tile-grid-small animscroll">
				<?php while(has_sub_field('page_sponsors_supporting_sponsor')): ?>
					<li>
						<a href="<?php the_sub_field('url'); ?>" target="_blank">
							<?php
								$image = get_sub_field('image');
								$size = 'sponsor-sqaure';
								echo wp_get_attachment_image($image, $size);
							?>
						</a>
					</li>
				<?php endwhile; ?>
			</ul>
		<?php endif; ?>

		<!-- EVENT -->
		<?php if(get_field('page_sponsors_event_partner')): ?>
			<h1 class="animscroll">Event Partners</h1>
			<ul class="tile-grid-small animscroll">
				<?php while(has_sub_field('page_sponsors_event_partner')): ?>
					<li>
						<a href="<?php the_sub_field('url'); ?>" target="_blank">
							<?php
								$image = get_sub_field('image');
								$size = 'sponsor-sqaure';
								echo wp_get_attachment_image($image, $size);
							?>
						</a>
					</li>
				<?php endwhile; ?>
			</ul>
		<?php endif; ?>

		<!-- MEDIA / HOTEL -->
		<div class="vsplit">
			<div class="col-1">
				<?php if(get_field('page_sponsors_media_partner')): ?>
					<h1 class="animscroll">Media Partners</h1>
					<ul class="tile-grid-small animscroll">
						<?php while(has_sub_field('page_sponsors_media_partner')): ?>
							<li>
								<a href="<?php the_sub_field('url'); ?>" target="_blank">
									<?php
										$image = get_sub_field('image');
										$size = 'sponsor-sqaure';
										echo wp_get_attachment_image($image, $size);
									?>
								</a>
							</li>
						<?php endwhile; ?>
					</ul>
				<?php endif; ?>
			</div>
			<div class="col-2">
				<?php if(get_field('page_sponsors_hotel_partner')): ?>
					<h1 class="animscroll">Hotel Partners</h1>
					<ul class="tile-grid-small animscroll">
						<?php while(has_sub_field('page_sponsors_hotel_partner')): ?>
							<li>
								<a href="<?php the_sub_field('url'); ?>" target="_blank">
									<?php
										$image = get_sub_field('image');
										$size = 'sponsor-sqaure';
										echo wp_get_attachment_image($image, $size);
									?>
								</a>
							</li>
						<?php endwhile; ?>
					</ul>
				<?php endif; ?>
			</div>
		</div>

		<!-- CULTURAL -->
		<?php if(get_field('page_sponsors_cultural_partner')): ?>
			<h1 class="animscroll">Cultural Partners</h1>
			<ul class="tile-grid-small animscroll">
				<?php while(has_sub_field('page_sponsors_cultural_partner')): ?>
					<li>
						<a href="<?php the_sub_field('url'); ?>" target="_blank">
							<?php
								$image = get_sub_field('image');
								$size = 'sponsor-sqaure';
								echo wp_get_attachment_image($image, $size);
							?>
						</a>
					</li>
				<?php endwhile; ?>
			</ul>
		<?php endif; ?>

		<div class="vector-bg-right-small-sponsors" data-stellar-ratio="1.1"></div>

		<div class="sponsor-contact">
			<h1 class="animscroll">Centennial Sponsorship Packages &amp; Site Activation Opportunities</h1>
			<p class="animscroll">The City of Miami Beach is pleased to provide unique sponsorship packages for Centennial events in addition to a wide variety of customizable activation opportunities for brands interested in being featured in these historic productions. A wide variety of premium branding, promotions, customer engagement, product sampling and lead generation opportunities are available.  Our Centennial Sponsorship team will be pleased to personally work hand-in-hand with your brand to develop specifically customized sponsorship packages upon request.  For more information about Centennial Sponsorships please call (305) 341-7899 or E-Mail: <a href="mailto:sponsorships@miamibeach100.com">sponsorships@miamibeach100.com</a></p>
			<h1 class="animscroll">Mayor Philip Levine Talks Centennial Opportunities</h1>
			<div class="video-holder">
				<iframe width="560" height="315" src="//www.youtube.com/embed/axtOodcuPlE?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
			</div>
		</div>
	</div>
</section>

<?php get_footer(); ?>
