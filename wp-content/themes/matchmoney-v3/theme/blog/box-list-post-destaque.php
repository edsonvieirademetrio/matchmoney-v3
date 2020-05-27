<div class="">
    <div class="box-post destaque">        
        <a href="<?php the_permalink(); ?>">
            <div class="thumb-post rounded-8" style="background-image: url('<?php the_post_thumbnail_url(); ?>'); width: 100%; height: 280px; background-size: cover;background-position: center;">
            
            </div>
            <div class="etiqueta-destaque text-uppercase ml-3">
                Destaque
            </div>
        </a>
        <div class="pl-3">
            <div class="title-post py-3">
                <h3 class="font-default-bold"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
            </div>
            <div class="excerpt-post color-gray">
                <h5><?php the_excerpt(''); ?></h5>
            </div>
            <div class="">
                <h5><?php echo get_the_date('d.m.Y'); ?> - <?php echo the_category('<span></span>'); ?></h5>
            </div>
        </div>
    </div>
</div>