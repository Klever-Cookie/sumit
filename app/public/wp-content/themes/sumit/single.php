<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package sumit
 */

get_header();
?>

<!--style: single.less -->


	<main id="primary" class="site-main">
		<div class="container">
			<div class="breadcrum">
			    <!--<div class="container">-->
			        <a href="/">Our Products</a><span> > <?php the_title(); ?></span>            
			    <!--</div>-->
			</div>
			
			<?php
				while ( have_posts() ) :
					the_post();

					get_template_part( 'template-parts/content', get_post_type() );

					the_post_navigation(
						array(
							'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Previous:', 'sumit' ) . '</span> <span class="nav-title">%title</span>',
							'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next:', 'sumit' ) . '</span> <span class="nav-title">%title</span>',
						)
					);

					// If comments are open or we have at least one comment, load up the comment template.
					/*if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;*/

				endwhile; // End of the loop.
			?>
		</div>

	</main><!-- #main -->

<?php
get_footer();
