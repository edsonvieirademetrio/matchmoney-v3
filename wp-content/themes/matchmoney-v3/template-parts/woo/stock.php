<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}
global $product;

?>
<?php if ( $stock_html = $product->get_stock_quantity() ) : ?>
	<div class="stock"><?php echo $stock_html; ?></div>
<?php endif; ?>