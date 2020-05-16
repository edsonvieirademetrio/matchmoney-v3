<?php

get_header();
?>


<section id="section-1" class="mt-1 pb-5">
    <div class="container">
        <!--Grid row-->
        <div class="row">
            <div class="col">
                <div class="title-home">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/hr-special-small.png" class="pt-3 " />
                    <h3 class="font-weight-bold color-blue-light py-3">Produtos</h3>
                </div>
            </div>
        </div>
        <?php get_template_part('template-parts/loop-products'); ?>
		
    </div>
</section>
<!--Section Explain Products -->
<?php echo do_shortcode('[themify_layout_part id=1967]'); ?>
<?php echo do_shortcode('[themify_layout_part id=1970]'); ?>
<?php echo do_shortcode('[themify_layout_part id=1962]'); ?>
<?php echo do_shortcode('[themify_layout_part id=1973]'); ?>
<?php echo do_shortcode('[themify_layout_part id=1976]'); ?>
<!--./Section Explain Products -->
<?php get_template_part('template-parts/block-calculator'); ?>



<?php
get_footer();
?>