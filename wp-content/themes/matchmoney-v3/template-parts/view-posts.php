<section id="section-1" class="mt-1 pb-5 ">
    <div class="container">
        <!--Grid row-->
        <div class="title-page-blog z-index-12">
            <div class="row pt-15">
                <div class="col text-center">
                    <div class="title-home">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/blog/hr-special-small-orange.png" class="pt-3 " />
                        <h3 class="font-weight-bold text-white py-3">Blog</h3>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div id="box-search-blog" class="mb-4 d-none d-md-block">
                    <div class="col text-center rounded-8 bg-white over-hidden ">                        
                        <?php get_template_part('template-parts/form-search'); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="section-2" class="pb-5 blog-list">
    <div class="container">
        <div class="row flex-nowrap flex-sm-nowrap flex-md-nowrap flex-lg-wrap flex-xl-wrap scroll-x win-products">
          <?php $the_query = new WP_Query( array( 'posts_per_page' => '-1') );  ?>

              <?php if ( $the_query->have_posts() ) while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

                  <?php get_template_part('template-parts/content-view-posts') ?>

              <?php endwhile; ?>

          <?php wp_reset_query(); ?>

        </div>
    </div>
</section>
