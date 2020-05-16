<?php
/**
 * Customer new account email
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/emails/customer-new-account.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates/Emails
 * @version 3.5.2
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

?>

<?php do_action( 'woocommerce_email_header', $email_heading, $email ); ?>
<div class="logo"><img src="https://matchmoney.com.br/wp-content/uploads/img/logo-matchmoney-black.png" style="text-align:center;"></div>
<p></p>
<?php /* translators: %s Customer username */ ?>
<p><?php printf( esc_html__( 'Olá Investidor(a),', 'woocommerce' ), esc_html( $user_login ) ); ?></p>
<p>O seu nome de usuário é <?php printf( esc_html__( '%s,', 'woocommerce' ), esc_html( $user_login ) ); ?>.</p>
<p>Gostaríamos de lembrar que com a assinatura de nossa Newsletter, você receberá todas
as novas oportunidades em primeira mão e, além disso, matérias e reportagens sobre
investimentos.</p>
<?php if ( 'yes' === get_option( 'woocommerce_registration_generate_password' ) && $password_generated ) : ?>
	<?php /* translators: %s Auto generated password */ ?>
	<p><?php printf( esc_html__( 'Sua senha inicial é essa: %s', 'woocommerce' ), '<strong>' . esc_html( $user_pass ) . '</strong>' ); ?></p>
	<p>Você pode alterá-la acessando <a href="https://matchmoney.com.br/minha-conta/edit-account/" target="blank">SEU CADASTRO</a>.
<?php endif; ?>
<p>Para aproveitar todas essas oportunidades, <a href="https://matchmoney.com.br/minha-conta/edit-address/cobranca/" target="blank">complete seu cadastro de
cliente</a>.</p>
<p>Para acessar diretamente nossos produto <a href="https://matchmoney.com.br/loja">clique neste link</a>.</p>
<p>Você pode acessar sua conta para ver pedidos, alterar sua senha e muito mais em: <a href="https://matchmoney.com.br/minha-conta/">https://matchmoney.com.br/minha-conta/</a></p>
<p>Estamos ansiosos para atende-lo(a) em breve.</p>

<?php
do_action( 'woocommerce_email_footer', $email );
