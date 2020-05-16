<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package matchmoney
 */

get_header();
?>
	<?php echo do_shortcode('[themify_layout_part id="1671"]'); ?>
	<?php //get_template_part('template-parts/content-text-table-product'); ?>
	<?php //get_template_part('template-parts/box-partners'); ?>
	<?php //get_template_part('template-parts/table-product-mm'); ?>
	<?php //echo do_shortcode('[themify_layout_part id="1789"]'); ?>
	<?php //get_template_part('template-parts/block-calculator'); ?>
	

	<?php //get_template_part('template-parts/content-product-no-loop'); ?>
	<!--campos personalizados -->
    <input type="hidden" id="cat-title-current" value="<?php single_cat_title(); ?>" ></input>
    <input type="hidden" id="cat-rentalAte-current" value="<?php echo do_shortcode('[php-acf-field-1]'); ?>" ></input>
    <input type="hidden" id="cat-rentalDe-current" value="<?php echo do_shortcode('[php-acf-field-2]'); ?>" ></input>

<?php
//get_sidebar();
get_footer();
