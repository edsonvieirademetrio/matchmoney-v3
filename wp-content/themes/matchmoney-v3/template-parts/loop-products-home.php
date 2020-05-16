<?php 

$the_query = new WP_Query( 
	array( 
		'post_type' => 'product',
		'posts_per_page' => 5 ,
		'tax_query' => array(
							array(
								'taxonomy' => 'product_visibility',
								'field'    => 'name',
								'terms'    => 'featured',
							),
						),
	) 
	);  
?>
<?php if ( $the_query->have_posts() ) : ?>
	<div class="row py-2 flex-row flex-nowrap scroll-x win-products">
        <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

                <?php include('content-product-loop-home.php'); ?>                

        <?php endwhile; ?>		
	</div>
<?php endif; ?>     
<?php wp_reset_query(); ?>