<?php get_header(); ?>

	<div class="vectors-left" data-stellar-ratio="1.1"><img src="<?php echo get_template_directory_uri(); ?>/img/vectors/vectors-left-blog-sponsors.png" alt=""></div>
	<div class="vectors-right" data-stellar-ratio="1.1"><img src="<?php echo get_template_directory_uri(); ?>/img/vectors/vectors-right-blog-sponsors.png" alt=""></div>

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
			<div class="vector-bg-left-small-sponsors" data-stellar-ratio="1.1"></div>

		<?php
			if ( have_posts() ) :
			while ( have_posts() ) : the_post();
		?> 

			<article>
				<h3 class="blog-title"><a class="permalink" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
					<ul class="meta-title">
						<li><?php echo get_the_date(); ?></li><span class="separate-bar">|</span>
						<li>Written by: Seth H. Bramson, Miami Beach City Historian</li><span class="separate-bar"></span>
					</ul>
					<div class="loop-content">
						<?php echo the_post_thumbnail( 'blog-thumb' ); ?>
						<?php the_excerpt(); ?> 
						<p><a class="back-to-blog" href="<?php the_permalink(); ?>" class="read-more">Read Full Article <i class="fa fa-angle-right"></i></a></p>
					</div>
			</article>

		<?php
			endwhile;

			else :
			// If no content, include the "No posts found" template.
			get_template_part( 'content', 'none' );

			endif;
		?>

			<div class="blog-navigation-page">
				<?php
					global $wp_query;

					$big = 999999999; // need an unlikely integer

					echo paginate_links( array(
						'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
						'format' => '?paged=%#%',
						'current' => max( 1, get_query_var('paged') ),
						'total' => $wp_query->max_num_pages
					) );
				?>	
			</div>

			<div class="vector-bg-right-small-sponsors" data-stellar-ratio="1.1"></div>

		</div> <!-- End of container -->

	</section>

<?php get_footer(); ?>