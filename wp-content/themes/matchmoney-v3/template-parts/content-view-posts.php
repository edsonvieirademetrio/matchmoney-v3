<div class="col-10 col-sm-10 col-md-10 col-lg-5 col-xl-5 mb-5 col-card-blog">
    <div class="box-post">
        <div class="date-post text-white blue-gradient py-1 text-center rounded-8">
            <?php echo get_the_date(''); ?>
        </div>
        <a href="<?php the_permalink(); ?>">
            <div class="thumb-post rounded-8" style="background-image: url('<?php the_post_thumbnail_url(); ?>'); width: 100%; height: 280px; background-size: cover;background-position: center;">
            
            </div>
        </a>
        <div class="title-post py-2">
            <h3 class="font-weight-bold color-blue-light text-left"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
        </div>
        <div class="excerpt-post py-2 color-gray">
            <?php the_excerpt(); ?>
        </div>
        <div class="read-more py-2 color-orange">
            <a href="<?php the_permalink(); ?>">Ler mais</a>
        </div>
    </div>
</div>
