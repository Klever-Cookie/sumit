<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package sumit
 */

get_header();
?>

	<main id="primary" class="site-main">

		<section id="error-404" class="error-404 not-found">
			<header class="page-header">
				<h1 class="page-title"><?php esc_html_e( '404', 'sumit' ); ?></h1>

				<h3><span>Oops!</span> That page can&rsquo;t be found.</h3>
			</header>

			<!-- .page-header -->

			
		</section>
		<!-- .error-404 -->

	</main><!-- #main -->

<?php
get_footer();
