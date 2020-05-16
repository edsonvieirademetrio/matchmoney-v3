<?php 

$the_query = new WP_Query( 
	array( 	'post_type' => 'product',
		  	'posts_per_page' => 5, 
		  	'tax_query' => array(
                    array(
                        'taxonomy' => 'product_visibility',
                        'field'    => 'name',
                        'terms'    => 'featured',
                    ),
                ),
		 
		 ));  
?>
<?php if ( $the_query->have_posts() ) : ?>
	<div class="row py-2 flex-nowrap flex-sm-nowrap flex-md-nowrap flex-lg-wrap flex-xl-wrap scroll-x win-products">
        <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

                <?php include('content-product-loop.php'); ?>                

        <?php endwhile; ?>
		<!--grafic-->               
        <div class="col-8 col-sm-8 col-lg-3 col-xl-3 text-center my-4 produtos offset-md-1">
          <div class="box-int-6 produtos bg-color-gray-light py-5 px-4 text-left">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/hr-special-small.png" class="py-3 text-left" />
              <h3 class="text-left font-weight-bold color-denin">
              Aplique com as mesmas taxas e garantias que Fundos e Bancos aplicam.
              </h3>
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/produtos/person-product.png" class="person-product" />
          </div>
        </div>
	</div>
<?php endif; ?>     
<?php wp_reset_query(); ?>
<script>
	jQuery('.col-produtos:nth-child(n+2):nth-child(-n+3)').addClass('offset-md-1');
	jQuery('.col-produtos:nth-child(5)').addClass('offset-md-1');
</script>