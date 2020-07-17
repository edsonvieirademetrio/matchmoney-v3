<?php

	defined( 'ABSPATH' ) || exit;

?>

<?php get_template_part('theme/woo/icons-checkout'); ?>

<div class="woocommerce-order mb-5">
	<?php if ( $order ) :

		do_action( 'woocommerce_before_thankyou', $order->get_id() ); ?>

		<?php if ( $order->has_status( 'failed' ) ) : ?>
			<div class="row">
				<div class="col-8 bg-color-blue text-center text-white py-3">
					<span><i class="far fa-thumbs-down"></i></span>
					<span class="woocommerce-notice woocommerce-notice--error woocommerce-thankyou-order-failed"><?php esc_html_e( 'Unfortunately your order cannot be processed as the originating bank/merchant has declined your transaction. Please attempt your purchase again.', 'woocommerce' ); ?></span>
				</div>
				<div class="col-4 bg-color-orange text-center py-3">
					<a href="/produtos" class="text-white">Quero investir mais</a>
				</div>
			</div>
			<p class="woocommerce-notice woocommerce-notice--error woocommerce-thankyou-order-failed-actions">
				<a href="<?php echo esc_url( $order->get_checkout_payment_url() ); ?>" class="button pay"><?php esc_html_e( 'Pay', 'woocommerce' ); ?></a>
				<?php if ( is_user_logged_in() ) : ?>
					<a href="<?php echo esc_url( wc_get_page_permalink( 'myaccount' ) ); ?>" class="button pay"><?php esc_html_e( 'My account', 'woocommerce' ); ?></a>
				<?php endif; ?>
			</p>

		<?php else : ?>
			<div class="row">
				<div class="col-xl-7 mr-3 box-shadow p-4 h-fit-content">
					<div class="py-3 mr-2 text-center">
						<div class="woocommerce-notice woocommerce-notice--success woocommerce-thankyou-order-received">
							<span>
								<i class="fa fa-check-circle h3 color-blue" aria-hidden="true"></i>
							</span>
							<span>
								<?php echo apply_filters( 'woocommerce_thankyou_order_received_text', esc_html__( 'Parabéns, seu investimento está quase concluído!', 'woocommerce' ), $order ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
							</span>							
						</div>
					</div>
					<div class="row p-3 bg-gray-light mb-3">
						<div class="col-xl-2">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/v3/img/icon-number-invest-g.png" alt="">
						</div>
						<div class="col-xl-8">
						<div class="woocommerce-order-overview__order order text-left">
							<?php esc_html_e( 'Número do Investimento:', 'woocommerce' ); ?>
							<h3 class="font-weight-bold">
								# <strong>
								<?php echo $order->get_order_number();?>
								</strong>
							</h3>
						</div>
						</div>
					</div>
					<div class="row p-3 bg-gray-light">
						<div class="col-xl-2">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/v3/img/icon-payment-method-g.png" alt="">
						</div>
						<div class="col-xl-8">
						<div class="woocommerce-order-overview__order order text-left">
							<?php esc_html_e( 'Forma de Investimento:', 'woocommerce' ); ?>
							<h3 class="font-weight-bold">
								<?php if ( $order->get_payment_method_title() ) : ?>
									<div class="woocommerce-order-overview__payment-method method">
										<strong><?php echo wp_kses_post( $order->get_payment_method_title() ); ?></strong>
									</div>
								<?php endif; ?>
							</h3>
						</div>
						</div>
					</div>
					<div class="get p warning color-black">
						<?php do_action( 'woocommerce_thankyou_' . $order->get_payment_method(), $order->get_id() ); ?>
					</div>
					<div class="text-center py-4">
						<p class="">
							Agora só falta depositar ou transferir o valor investido de 
							<strong class="font-weight-bold color-gray"><?php echo $order->get_formatted_order_total(); ?></strong> 
							para a conta indicada, que é a instituição financeira parceira da MatchMoney.
							<br>Em seguida, você deve fazer o upload do comprovante clicando no botão abaixo ou pela seção Minha Conta.
						</p>						
						<a href="#" class="btn btn-lg bg-orange text-white">
							Enviar Comprovante
						</a>
						<p class="color-gray-light mt-4">
							*Outra opção é enviar o comprovante para contato@matchmoney.com.br
						</p>
					</div>
					<hr>
					<div>
						<?php get_template_part('theme/woo/info-all-rescue'); ?>
					</div>
				</div>
				<div class="col-xl-4 box-shadow p-4 h-fit-content">
					<div>
						<h2>Resumo</h2>
						<div class="woocommerce-order-overview__date date">
							<?php esc_html_e( 'Data do investimento:', 'woocommerce' ); ?>
							<strong class="font-weight-bold"><?php echo wc_format_datetime( $order->get_date_created() ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></strong>
						</div>
	
						<div class="woocommerce-order-overview__total total">
							<?php esc_html_e( 'Total do Investimento:', 'woocommerce' ); ?>
							<strong class="font-weight-bold"><?php echo $order->get_formatted_order_total(); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></strong>
						</div>
		
						<?php if ( is_user_logged_in() && $order->get_user_id() === get_current_user_id() && $order->get_billing_email() ) : ?>
							<div class="woocommerce-order-overview__email email">
								<?php esc_html_e( 'Email:', 'woocommerce' ); ?>
								<strong class="font-weight-bold"><?php echo $order->get_billing_email(); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></strong>
							</div>
						<?php endif; ?>
					</div>
					<hr>
					<div class="my-4">
						<?php do_action( 'woocommerce_thankyou', $order->get_id() ); ?>
					</div>
					<hr>
					<div class="text-center py-4">
						<h4 class="color-gray-light">Gostou da experiência?</h4>
						<a href="/" class="btn btn-lg bg-orange text-white">
							Continue Investindo
						</a>
					</div>
				</div>												
			</div>


		<?php endif; ?>
		


	<?php else : ?>

		<p class="woocommerce-notice woocommerce-notice--success woocommerce-thankyou-order-received"><?php echo apply_filters( 'woocommerce_thankyou_order_received_text', esc_html__( 'Thank you. Your order has been received.', 'woocommerce' ), null ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>

	<?php endif; ?>
	
	<?php get_template_part( 'inc/insert-script-checkout' ); ?>

</div>