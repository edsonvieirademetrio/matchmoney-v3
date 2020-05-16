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
		<div class="title-content-blog z-index-12">
			<div class="row pt-15">
				<div class="col text-left">
					<div class="date-post-content text-white aqua-gradient py-1 text-center rounded-8">
						<?php the_date(); ?>
					</div>
					<div class="title-post py-2">
						<h2 class="font-weight-bold text-white text-left"><?php the_title(); ?></h3>
					</div>
					<div class="category-post color-blue-light">
						<?php the_category(' | ') ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section id="section-2" class="pb-5">
	<div class="container content">
		<div class="row justify-content-start">
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
</section>