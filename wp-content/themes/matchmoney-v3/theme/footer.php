<?php 
    //$stateWoo = is_woocommerce();
    $stateAccount = is_account_page();
	if ($stateAccount == true){
		get_template_part('theme/woo/footer');
	}else{
		get_template_part('theme/footer-default');
	}
?>