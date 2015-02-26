<?php get_header(); ?>

	<div class="vectors-left" data-stellar-ratio="1.1"><img src="<?php echo get_template_directory_uri(); ?>/img/vectors/vectors-left-faq.png" alt=""></div>
	<div class="vectors-right" data-stellar-ratio="1.1"><img src="<?php echo get_template_directory_uri(); ?>/img/vectors/vectors-right-home.png" alt=""></div>

	<section class="small-parallax gradient" data-stellar-background-ratio="0.9">

		<?php get_template_part( 'nav' ); ?>

		<div class="container">
			<div class="page-title">
				<h1 class="name"><span class="name-part title">FAQ</span></h1>
			</div>
		</div>
	</section>

	<section class="slant about">
		<div class="container">
			<h5 class="hued animscroll">We Have Answers!</h5>
			<p class="about-blurb blurb animscroll"><?php the_field('main_about_blurb'); ?></p>

			<?php if(get_field('faq_list')): ?>
				<ul class="faq-list">
				<?php while(has_sub_field('faq_list')): ?>
					<li>
						<p class="question"><span><?php the_sub_field('question'); ?></span></p>
						<p class="answer"><?php the_sub_field('answer'); ?></p>
					</li>
				<?php endwhile; ?>
			<?php endif; ?>	
		</div>
	</section>

<?php get_footer(); ?>