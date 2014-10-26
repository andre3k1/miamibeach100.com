<?php get_header(); ?>

	<div class="vectors-left" data-stellar-ratio="1.1"><img src="<?php echo get_template_directory_uri(); ?>/img/vectors/vectors-left-about.png" alt=""></div>
	<div class="vectors-right" data-stellar-ratio="1.1"><img src="<?php echo get_template_directory_uri(); ?>/img/vectors/vectors-right-about.png" alt=""></div>

	<section class="main-parallax blog" data-stellar-background-ratio="0.9">

		<?php get_template_part( 'nav' ); ?>
		
		<div class="container">
			<div class="page-title">
				<h1 class="name"><span class="name-part title">Our History</span><span class="name-part other">,</span></h1>
				<h2 class="name-part subtitle">for the latest</h2>
			</div>
		</div>
	</section>

	<section class="slant blog">

		<div class="container">

		<?php
			if ( have_posts() ) :
			while ( have_posts() ) : the_post();
		?> 

			<article class="single">
				<h3 class="blog-title"><a class="permalink" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
					<ul class="meta-title">
						<li><?php the_date(); ?></li><span class="separate-bar">|</span>
						<li>Written by: Seth H. Bramson, Miami Beach City Historian</li><span class="separate-bar"></span>
					</ul>
					<div class="loop-content">
						<?php echo the_post_thumbnail( 'blog-thumb' ); ?>
						<?php the_content(); ?>
						<p><a class="back-to-blog" href="<?php echo get_permalink( get_option( 'page_for_posts' ) ); ?>   " class="read-more"><i class="fa fa-angle-left"></i> Go Back to the History page</a></p>
						<br>
						<br>
						<p class="credit">
							Text and captions were provided by Miami Beach’s City Historian, Professor Seth H. Bramson. In his capacity as City Historian, Professor Bramson gives talks on the history of Miami Beach to service clubs, fraternal organizations, churches, temples and other interested groups at no charge. He can be reached via email at sbramson@bellsouth.net.
							<br><br>
							All images are from and courtesy of The Bramson Archive. Comments or questions regarding the images should be addressed to: Professor Seth H. Bramson/Office of the City Manager/1700 Convention Center Drive/Miami Beach, FL 33139.
						</p>
					</div>
			</article>

		<?php
			endwhile;

			else :
			// If no content, include the "No posts found" template.
			get_template_part( 'content', 'none' );

			endif;
		?>

		</div> <!-- End of container -->

	</section>

<?php get_footer(); ?>

<script>jQuery( "nav li a:contains('Blog')" ).parent().addClass("current-menu-item");</script>
