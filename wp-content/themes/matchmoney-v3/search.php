<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package matchmoney
 */

get_header('');
?>

	<section id="primary" class="content-area">
		<main id="main" class="site-main container">		
			<?php if ( have_posts() ) : ?>
				<div class="row">
					<header class="page-header clear">
						<h3 class="font-weight-bold color-blue-light py-3">
							<?php
							/* translators: %s: search query. */
							printf( esc_html__( 'Encontramos os seguintes resultados para: %s', 'matchmoney' ), '<span>' . get_search_query() . '</span>' );
							?>
						</h3>
					</header><!-- .pa-ge-header -->
				</div>
				<div class="row blog-list">
				<?php
				/* Start the Loop */
				while ( have_posts() ) :
					the_post();

					/**
					 * Run the loop for the search to output the results.
					 * If you want to overload this in a child theme then include a file
					 * called content-search.php and that will be used instead.
					 */
					get_template_part( 'template-parts/content-view-posts', 'search' );

				endwhile;

				the_posts_navigation();
				echo '</div>';
			else :

				get_template_part( 'template-parts/content-view-posts', 'none' );

			endif;
			?>		
		</main><!-- #main -->
	</section><!-- #primary -->

<?php
//get_sidebar();
get_footer();
