<?php
/**
 * The Template for displaying all single posts.
 *
 * @package sparkling
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'single' );

				// If comments are open or we have at least one comment, load up the comment template
			if ( comments_open() || '0' != get_comments_number() ) :
				comments_template();
				endif;

			the_post_navigation(
				array(
					'next_text' => '<span class="post-title">%title</span> <i class="fa fa-chevron-right"></i>',
					'prev_text' => '<i class="fa fa-chevron-left"></i> <span class="post-title">%title</span>',
				)
			);

		endwhile; // end of the loop.
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
