
<?php
/* Template Name: Page Woocommerce */

get_header();

?>
<section class="mt-5 pt-4 bg-gray-light">
	<div class="container">
      <div class="row">
		<div class="col">
            <div id="primary" class="content-area">
                <main id="main" class="site-main container">

                <?php
                while ( have_posts() ) :

                    the_post();

                    the_content();

                endwhile; // End of the loop.
                ?>

                </main><!-- #main -->
            </div><!-- #primary -->
		</div>
      </div>
	</div>
</section>

<?php
get_footer();
