<section id="section-1" class="my-1">
	<div class="container content row">
        <!--Grid row-->
        <div class="title-content blog">
            <div class="row pt-15">
                <div class="col-xl-12">
                    <div class="title-post py-3">
                        <h3 class="font-default-bold"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                    </div>                    
                    <div class="">
                        <h5><?php echo get_the_date('d.m.Y'); ?> - <?php echo the_category('<span></span>'); ?></h5>
                    </div>
                </div>
            </div>  
        </div>
        <div class="img-feature blog">
            <div class="row">
                <div class="col-xl-12">
                    <div class="thumb-post rounded-8" style="background-image: url('<?php the_post_thumbnail_url(); ?>'); width: 100%; height: 280px; background-size: cover;background-position: center;">
                    <div class="thumb-post rounded-8" style="background-image: url('<?php the_post_thumbnail_url(); ?>'); width: 100%; height: 280px; background-size: cover;background-position: center;">                    
                </div>
            </div>
        </div>
        <div class="single-content blog">
            <div class="col-xl-12">
                <div class="content-post color-denin">
                    <?php the_content(); ?>
                </div>
                <hr class="w-100 my-5">
                <div class="box-social">
                    <?php echo do_shortcode('[addthis tool="addthis_inline_share_toolbox_31dd"]'); ?>
                </div>
                <div class="box-comment py-5 color-denin">
                    <?php comments_template(); ?>
                </div>
            </div>
        </div>
    </div>
</section>
