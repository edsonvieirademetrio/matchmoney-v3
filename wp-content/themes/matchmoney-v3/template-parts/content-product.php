<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package matchmoney
 */

?>
<section id="section-1" class="my-1">
	<div class="container content">
		<!--Grid row-->
		<div class="box-product">
			<div class="row">
				<div class="col text-left">
					<div class="title-product text-center justify-content-center">						
                        <?php wc_get_template_part( 'content', 'single-product' ); ?>
					</div>				
				</div>
			</div>
		</div>
	</div>
</section>
<script>
jQuery('.product').addClass('col-12');
jQuery('.single_add_to_cart_button').text('Investir');
jQuery('.single_add_to_cart_button').addClass('bg-color-orange text-white rounded-8 px-5 my-4');
jQuery('.product_title.entry-title').addClass('font-weight-bold color-blue-light py-3');
</script>
<style>

</style>