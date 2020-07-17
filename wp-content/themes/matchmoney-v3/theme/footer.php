<?php 
    $stateWoo = is_cart();
	$stateAccount = is_account_page();
	$stateCart = is_cart();
	$stateCheckout = is_checkout();
	if ($stateAccount == true || $stateCart == true || $stateCheckout == true ){
		get_template_part('theme/woo/footer');
	}else{
		get_template_part('theme/footer-default');
	}
?>