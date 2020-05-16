<?php
/**
 * Orders
 *
 * Shows orders on the account page.
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/myaccount/orders.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.7.0
 */

defined( 'ABSPATH' ) || exit;

do_action( 'woocommerce_before_account_orders', $has_orders ); ?>

<?php if ( $has_orders ) : ?>
	<div class="">
		<a class="btn bg-color-blue rounded text-white" href="/produtos">
			<?php esc_html_e( 'Investimentos disponíveis', 'woocommerce' ); ?>
		</a>
	</div>
	<div class="card-invesitmentos card-body card-body-cascade py-3 my-3 color-orange bg-white">
		<h4>Resumo de Investimento</h4>
		<div class="woocommerce-orders-table woocommerce-MyAccount-orders shop_table shop_table_responsive my_account_orders account-orders-table">		
			<?php
			foreach ( $customer_orders->orders as $customer_order ) {
				$order      = wc_get_order( $customer_order ); // phpcs:ignore WordPress.WP.GlobalVariablesOverride.OverrideProhibited
				$item_count = $order->get_item_count() - $order->get_item_count_refunded();
				?>
				<div class="woocommerce-orders-table__row woocommerce-orders-table__row--status-<?php echo esc_attr( $order->get_status() ); ?> order">
					<?php foreach ( wc_get_account_orders_columns() as $column_id => $column_name ) : ?>
						<div class="woocommerce-orders-table__cell woocommerce-orders-table__cell-<?php echo esc_attr( $column_id ); ?>" data-title="<?php echo esc_attr( $column_name ); ?>">
							<?php if ( has_action( 'woocommerce_my_account_my_orders_column_' . $column_id ) ) : ?>
								<?php do_action( 'woocommerce_my_account_my_orders_column_' . $column_id, $order ); ?>

							<?php elseif ( 'order-number' === $column_id ) : ?>
								Código Investimento: <a href="<?php echo esc_url( $order->get_view_order_url() ); ?>" class="color-orange">
									<?php echo esc_html( _x( '#', 'hash before order number', 'woocommerce' ) . $order->get_order_number() ); ?>
								</a>
							<div class="divider"></div>
							<?php elseif ( 'order-date' === $column_id ) : ?>
								Data Investimento: <time datetime="<?php echo esc_attr( $order->get_date_created()->date( 'c' ) ); ?>"><?php echo esc_html( wc_format_datetime( $order->get_date_created() ) ); ?></time>
							<div class="divider"></div>
							<?php elseif ( 'order-status' === $column_id ) : ?>
								Status Investimento: <?php echo esc_html( wc_get_order_status_name( $order->get_status() ) ); ?>
							<div class="divider"></div>
							<?php elseif ( 'order-total' === $column_id ) : ?>
								Valor Investido: <?php
								/* translators: 1: formatted order total 2: total order items */
								echo wp_kses_post( sprintf( _n( '%1$s for %2$s item', '%1$s for %2$s items', $item_count, 'woocommerce' ), $order->get_formatted_order_total(), $item_count ) );
								?>
							<div class="divider"></div>
							<?php elseif ( 'order-actions' === $column_id ) : ?>
								Mais detalhes: | <?php
								$actions = wc_get_account_orders_actions( $order );

								if ( ! empty( $actions ) ) {
									foreach ( $actions as $key => $action ) { // phpcs:ignore WordPress.WP.GlobalVariablesOverride.OverrideProhibited
										echo '<a href="' . esc_url( $action['url'] ) . '" class="color-orange woocommerce-button button btn-view-order' . sanitize_html_class( $key ) . '">' . esc_html( $action['name'] ) . '</a> | ';
										echo '<a href="' . esc_url( $action['url'] ) . '#reinvestir" class="btn-reinvest">Reinvestir</a>';
									}
								}
								?>
							<?php endif; ?>
						</div>
					<?php endforeach; ?>
				</div>
				<?php
			}
			?>
		</div>
	</div>
<?php else : ?>
	<div class="woocommerce-message woocommerce-message--info woocommerce-Message woocommerce-Message--info woocommerce-info">
		<a class="woocommerce-Button button" href="/produtos">
			<?php esc_html_e( 'Investimento disponíveis', 'woocommerce' ); ?>
		</a>
		<?php esc_html_e( 'Aguardando investimentos...', 'woocommerce' ); ?>
	</div>
<?php endif; ?>

<?php do_action( 'woocommerce_after_account_orders', $has_orders ); ?>
<!-- Função para enviar comprovante de depósito -->
<div class="row card-body card-body-cascade">
	<div class="col-md-12 bg-white color-orange">
		<h4 class="font-weight-bold py-3">Envie seu comprovante de depósito:</h4>
		<?php echo do_shortcode('[contact-form-7 id="2436" title="Field Upload Account bank"]'); ?>		
	</div>
</div>
