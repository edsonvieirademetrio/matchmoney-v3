<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

do_action( 'woocommerce_before_customer_login_form' ); ?>
<?php 
	//Obtem os parametros
	$url = $_SERVER["REQUEST_URI"]; 
	$url_components = parse_url($url); 
	parse_str($url_components['query'], $params); 
	$is_register_woo = $params['register'];		
?>

<?php if ( 'yes' === get_option( 'woocommerce_enable_myaccount_registration' ) && !$is_register_woo ) : ?>

<div class="u-columns col2-set" id="customer_login">

	<div class="u-column1 col-xl-12">
		<div class="row justify-content-center">		
			<div class="col-xl-4 bg-gray-light box-shadow p-4 mb-4">
				<h2 class="text-center mb-4"><?php esc_html_e( 'Entrar', 'woocommerce' ); ?></h2>

				<form class="woocommerce-form woocommerce-form-login login" method="post">

					<?php do_action( 'woocommerce_login_form_start' ); ?>

					<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide text-center mb-1">
						<label for="username"><?php esc_html_e( 'Nome de usuário ou e-mail', 'woocommerce' ); ?>&nbsp;<span class="required">*</span></label>
						<div class="text-center">
							<input type="text" class="w-100 woocommerce-Input woocommerce-Input--text input-text" name="username" id="username" autocomplete="username" value="<?php echo ( ! empty( $_POST['username'] ) ) ? esc_attr( wp_unslash( $_POST['username'] ) ) : ''; ?>" /><?php // @codingStandardsIgnoreLine ?>					
						</div>
					</p>
					<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide text-center mb-1">
						<label for="password"><?php esc_html_e( 'Senha', 'woocommerce' ); ?>&nbsp;<span class="required">*</span></label>
						<div class="text-center">
							<input class="w-100 woocommerce-Input woocommerce-Input--text input-text" type="password" name="password" id="password" autocomplete="current-password" />					
						</div>
					</p>

					<?php do_action( 'woocommerce_login_form' ); ?>

					<div class="social-login-form text-center py-2">
						<div class="py-3 color-gray-light">
						- ou utilize sua conta -
						</div>
						<?php echo do_shortcode('[nextend_social_login]'); ?>
					</div>

					<p class="form-row">
						<label class="woocommerce-form__label woocommerce-form__label-for-checkbox woocommerce-form-login__rememberme">
							<input class="pb-2 woocommerce-form__input woocommerce-form__input-checkbox color-grat-light" name="rememberme" type="checkbox" id="rememberme" value="forever" /> <span class="color-gray-light"><?php esc_html_e( 'Lembrar-me', 'woocommerce' ); ?></span>
						</label>
						<?php wp_nonce_field( 'woocommerce-login', 'woocommerce-login-nonce' ); ?>
						<div class="pb-2">
							<button type="submit" class="w-100 bg-orange z-depth-1 text-white woocommerce-button button woocommerce-form-login__submit" name="login" value="<?php esc_attr_e( 'Log in', 'woocommerce' ); ?>"><?php esc_html_e( 'Acessar', 'woocommerce' ); ?></button>				
						</div>
					</p>
					<div class="woocommerce-LostPassword lost_password py-2">
						<a href="<?php echo esc_url( wp_lostpassword_url() ); ?>"><?php esc_html_e( 'Perdeu a senha?', 'woocommerce' ); ?></a>
					</div>

					<?php do_action( 'woocommerce_login_form_end' ); ?>

				</form>
			</div>
		</div>		

<?php endif; ?>

		

<?php if ( 'yes' === get_option( 'woocommerce_enable_myaccount_registration' ) && $is_register_woo) : ?>

	</div>	
	<div class="u-column2 col-xl-12">
		<div class="row justify-content-center">		
			<div class="col-xl-4 bg-gray-light box-shadow p-4 mb-4">
				<h2 class="text-center mb-4"><?php esc_html_e( 'Criar conta', 'woocommerce' ); ?></h2>
		
				<form method="post" class="woocommerce-form woocommerce-form-register register" <?php do_action( 'woocommerce_register_form_tag' ); ?> >
		
					<?php do_action( 'woocommerce_register_form_start' ); ?>
		
					<?php if ( 'no' === get_option( 'woocommerce_registration_generate_username' ) ) : ?>
		
						<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide mb-1">
							<label for="reg_username"><?php esc_html_e( 'Username', 'woocommerce' ); ?>&nbsp;<span class="required">*</span></label>
							<div>
								<input type="text" class="w-100 woocommerce-Input woocommerce-Input--text input-text" name="username" id="reg_username" autocomplete="username" value="<?php echo ( ! empty( $_POST['username'] ) ) ? esc_attr( wp_unslash( $_POST['username'] ) ) : ''; ?>" /><?php // @codingStandardsIgnoreLine ?>
							</div>
						</p>
		
					<?php endif; ?>
		
					<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide mb-1">
						<label for="reg_email"><?php esc_html_e( 'Digite seu email', 'woocommerce' ); ?>&nbsp;<span class="required">*</span></label>
						<div>
							<input type="email" class="w-100 woocommerce-Input woocommerce-Input--text input-text" name="email" id="reg_email" autocomplete="email" value="<?php echo ( ! empty( $_POST['email'] ) ) ? esc_attr( wp_unslash( $_POST['email'] ) ) : ''; ?>" /><?php // @codingStandardsIgnoreLine ?>
						</div>
					</p>
		
					<?php if ( 'no' === get_option( 'woocommerce_registration_generate_password' ) ) : ?>
		
						<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide mb-1">
							<label for="reg_password"><?php esc_html_e( 'Digite uma senha', 'woocommerce' ); ?>&nbsp;<span class="required">*</span></label>
							<div>
								<input type="password" class="w-100 woocommerce-Input woocommerce-Input--text input-text" name="password" id="reg_password" autocomplete="new-password" />
							</div>
						</p>
		
					<?php else : ?>
		
						<p><?php esc_html_e( 'A senha será enviada para o seu endereço de email.', 'woocommerce' ); ?></p>
		
					<?php endif; ?>
		
					<?php do_action( 'woocommerce_register_form' ); ?>
		
					<div class="social-login-form text-center py-2">
						<div class="py-3 color-gray-light">
						- ou utilize sua conta -
						</div>
						<?php echo do_shortcode('[nextend_social_login]'); ?>
					</div>
		
					<p class="woocommerce-FormRow form-row">
						<?php wp_nonce_field( 'woocommerce-register', 'woocommerce-register-nonce' ); ?>
						<div>
							<button type="submit" class="w-100 bg-orange z-depth-1 text-white woocommerce-Button button" name="register" onclick="gtag_report_conversion()" value="<?php esc_attr_e( 'Register', 'woocommerce' ); ?>"><?php esc_html_e( 'Criar conta', 'woocommerce' ); ?></button>

						</div>
					</p>
		
					<?php do_action( 'woocommerce_register_form_end' ); ?>
		
				</form>
			
			</div>
		</div>


	</div>

</div>
<?php endif; ?>

<?php do_action( 'woocommerce_after_customer_login_form' ); ?>
