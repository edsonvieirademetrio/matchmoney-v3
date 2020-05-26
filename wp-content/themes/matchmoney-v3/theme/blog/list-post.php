<section id="blog-section2" class="mt-1 py-5 ">
    <div class="container">        
        <div class="row">
            <div class="col-xl-8">
                <?php $the_query = new WP_Query( array( 'posts_per_page' => '-1') );  ?>
                    <?php if ( $the_query->have_posts() ) while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                        <?php get_template_part('theme/blog/box-list-post') ?>
                    <?php endwhile; ?>
                <?php wp_reset_query(); ?>
            </div>
            <div class="col-xl-4">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/v3/img/banner-blog-left.png" alt="Invista com segurança">
            </div>
        </div>       
    </div>
</section>
