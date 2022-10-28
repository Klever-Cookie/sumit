<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package sumit
 */

get_header();
?>

<!--style: archive.less -->

	<main id="primary" class="site-main posts-sumit">
		
		
		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<?php
				//the_archive_title( '<h1 class="page-title">', '</h1>' );
				//the_archive_description( '<div class="archive-description">', '</div>' );
				?>
			</header><!-- .page-header -->

			<div class="breadcrum-blog">
			    <div class="container">
			        <span>Blogs</span>            
			    </div>
			</div>
			

			<?php
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content-archive' );

			endwhile;

			//the_posts_navigation();

		else :

			get_template_part( 'template-parts/content-archive' );

		endif;
		?>

		<div class="container">
			<div class="navigation-arrow">
				<div class="navigation"><p><?php previous_posts_link('< Prev'); ?></p></div>
				<div class="navigation right"><p><?php next_posts_link('Next > '); ?></p></div>	
			</div>
		</div>
		
		
	</main><!-- #main -->




<?php
get_footer();
