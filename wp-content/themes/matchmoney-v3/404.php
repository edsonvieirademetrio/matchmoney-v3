<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package matchmoney
 */

get_header();
?>
	<div class="row">
		<div class="container">
          <div id="primary" class="content-area">
              <main id="main" class="site-main container">

              <h1 class="color-denin text-center">Ops! Algo deu errado.</h1>
				<div class="text-center">
					<a href="/" class="color-orange text-center text-underline font-weight-bold" style="text-align:center;">Tente novamente</a>
				</div>
              </main><!-- #main -->
          </div><!-- #primary -->
		</div>
	</div>

<?php
get_footer();
