<div class="">
    <div class="box-post destaque">   
        <div class="row mb-30">
            <div class="col-xl-6">
                <a href="<?php the_permalink(); ?>">
                    <div class="thumb-post rounded-8" style="background-image: url('<?php the_post_thumbnail_url(); ?>'); width: 100%; height: 280px; background-size: cover;background-position: center;">
                    
                    </div>                    
                </a>
            </div>
            <div class="col-xl-6">
                <div class="category-blog color-gray">
                    <?php echo the_category('<span class="color-gray"></span>, '); ?>
                </div>
                <div class="title-post py-3">
                    <h3 class="font-default-bold"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                </div>
                <div class="excerpt-post color-gray">
                    <h5><?php the_excerpt(''); ?></h5>
                </div>
                <div class="date-blog">
                    <?php echo get_the_date('d.m.Y'); ?>
                </div>
            </div>
        </div>                    
    </div>
</div>