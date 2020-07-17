<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

do_action( 'woocommerce_before_checkout_form', $checkout );

// If checkout registration is disabled and not logged in, the user cannot checkout.
if ( ! $checkout->is_registration_enabled() && $checkout->is_registration_required() && ! is_user_logged_in() ) {
	echo esc_html( apply_filters( 'woocommerce_checkout_must_be_logged_in_message', __( 'You must be logged in to checkout.', 'woocommerce' ) ) );
	return;
}

?>

<?php get_template_part('theme/woo/icons-checkout'); ?>

<form name="checkout" method="post" class="checkout woocommerce-checkout"
	action="<?php echo esc_url( wc_get_checkout_url() ); ?>" enctype="multipart/form-data">
	<div class="row pt-4 pb-5">

		<?php if ( $checkout->get_checkout_fields() ) : ?>

		<?php do_action( 'woocommerce_checkout_before_customer_details' ); ?>

		<div class="col-xl-4 mr-3 box-shadow p-4 h-fit-content" id="customer_details">
			<div class="col w-100">
				<?php do_action( 'woocommerce_checkout_billing' ); ?>
			</div>

			<div class="col">
				<?php do_action( 'woocommerce_checkout_shipping' ); ?>
			</div>
		</div>

		<?php do_action( 'woocommerce_checkout_after_customer_details' ); ?>

		<?php endif; ?>

		<?php do_action( 'woocommerce_checkout_before_order_review_heading' ); ?>

		<?php do_action( 'woocommerce_checkout_before_order_review' ); ?>

		<div id="order_review" class="woocommerce-checkout-review-order col-xl-3 mr-3 box-shadow p-4 h-fit-content">
			<h3>
				<i class="fa fa-shopping-cart" aria-hidden="true"></i>
				Resumo dos investimentos
			</h3>
			<?php wc_get_template( 'checkout/review-order.php' ); ?>
			<?php get_template_part('theme/woo/info-checkout-rescue'); ?>

			<?php //do_action( 'woocommerce_checkout_order_review' ); ?>
		</div>

		<div class="col-xl-4 box-shadow p-4 h-fit-content">
			<h3>
				<i class="fa fa-usd" aria-hidden="true"></i>
				Formas de investimento
			</h3>
			<div class="col-xl-12 text-center border p-4 my-3">
				<i class="fa fa-university" aria-hidden="true"></i>
				<br>
				Transferência bancária
			</div>
			<div class="color-gray-light my-3">
				Clique no botão "Confirmar Investimento" para confirmar seu pedido.
				Logo após, faça a transferência para a conta informada e faça o "UPLOAD" do comprovante através da nossa
				plataforma.
			</div>
			<div class="col-xl-12 p-4 my-3">
				<?php wc_get_template( 'checkout/payment.php' ); ?>
			</div>
		</div>		

		<?php do_action( 'woocommerce_checkout_after_order_review' ); ?>
	</div>

</form>

<?php do_action( 'woocommerce_after_checkout_form', $checkout ); ?>