<?php
/**
 * matchmoney functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package matchmoney
 */

if ( ! function_exists( 'matchmoney_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function matchmoney_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on matchmoney, use a find and replace
		 * to change 'matchmoney' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'matchmoney', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'matchmoney' ),
			'menu-2' => esc_html__( 'Principal', 'matchmoney' ),
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'matchmoney_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'matchmoney_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function matchmoney_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'matchmoney_content_width', 640 );
}
add_action( 'after_setup_theme', 'matchmoney_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function matchmoney_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'matchmoney' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'matchmoney' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'matchmoney_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function matchmoney_scripts() {
	wp_enqueue_style( 'matchmoney-style', get_stylesheet_uri() );

	wp_enqueue_script( 'matchmoney-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'matchmoney-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	/** Implementação MD Bootstrap **/
    wp_enqueue_style( 'Font_Awesome', get_template_directory_uri() . '/assets/font/font-awesome-4.7.0/css/font-awesome.min.css' );
	//wp_enqueue_style( 'Fidei_css', get_template_directory_uri() . '/assets/style.css' );
	wp_enqueue_style( 'Bootstrap_css', get_template_directory_uri() . '/assets/css/bootstrap.min.css' );
    wp_enqueue_style( 'MDB', get_template_directory_uri() . '/assets/css/mdb.min.css' );
    //wp_enqueue_script( 'jQuery', get_template_directory_uri() . '/assets/js/jquery-3.4.1.min.js', array(), '3.3.1', true );
    wp_enqueue_script( 'Tether', get_template_directory_uri() . '/assets/js/popper.min.js', array(), '1.0.0', true );
    wp_enqueue_script( 'Bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array(), '1.0.0', true );
	wp_enqueue_script( 'MDB', get_template_directory_uri() . '/assets/js/mdb.min.js', array(), '1.0.0', true );        
	wp_enqueue_script( 'Moment_js', get_template_directory_uri() . '/assets/js/moment.js', array(), '1.0.0', true ); 
	wp_enqueue_script( 'Mask_js', get_template_directory_uri() . '/assets/js/jquery.mask.js', array(), '1.0.0', true );   
	wp_enqueue_script( 'Fidei_js', get_template_directory_uri() . '/assets/js/fidei.js', array(), '1.0.1', true ); 
  	wp_enqueue_script( 'Fidei_js_v3', get_template_directory_uri() . '/assets/v3/js/fidei.js', array(), '1.0.0', true ); 
	  
	
    //wp_enqueue_script( 'Customizer_JS', get_template_directory_uri() . '/js/customizer.js', array(), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'matchmoney_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

/**
 * Load WooCommerce compatibility file.
 */
if ( class_exists( 'WooCommerce' ) ) {
	require get_template_directory() . '/inc/woocommerce.php';
}


function classMyMenuLi( $classes, $item ) {

	$classes[] = 'nav-item';
    return $classes;

}
add_filter( 'nav_menu_css_class', 'classMyMenuLi', 10, 2 );

function classMyMenuA( $atts, $item, $args ) {

	$atts['class'] = 'nav-link text-white font-weight-normal';

    return $atts;
}
add_filter( 'nav_menu_link_attributes', 'classMyMenuA', 10, 3 );

/****Personalizar produtos *******/
/* Remove opções adicionais*/
// function remove_gallery_and_product_images() {
// 	if ( is_product() ) {
// 		remove_action( 'woocommerce_before_single_product_summary', 'woocommerce_show_product_images', 20 );
// 		}
// 	}
// add_action('loop_start', 'remove_gallery_and_product_images');
/*Remove informações adicionais */
function bbloomer_remove_product_tabs( $tabs ) {
    unset( $tabs['additional_information'] ); 
    return $tabs;
}
add_filter( 'woocommerce_product_tabs', 'bbloomer_remove_product_tabs', 98 );

/*Remove informações adicionais checkout*/
add_filter( 'woocommerce_enable_order_notes_field', '__return_false', 9999 );

function remove_order_notes( $fields ) {
     unset($fields['order']['order_comments']);
     return $fields;
}
add_filter( 'woocommerce_checkout_fields' , 'remove_order_notes' );

/* Remove o cupon checkout e art */
// hide coupon field on cart page
function hide_coupon_field_on_cart( $enabled ) {
	if ( is_cart() ) {
		$enabled = false;
	}
	return $enabled;
}
add_filter( 'woocommerce_coupons_enabled', 'hide_coupon_field_on_cart' );
// hide coupon field on checkout page
function hide_coupon_field_on_checkout( $enabled ) {
	if ( is_checkout() ) {
		$enabled = false;
	}
	return $enabled;
}
add_filter( 'woocommerce_coupons_enabled', 'hide_coupon_field_on_checkout' );

/* Adiciona no body class uma classe page-SLUG */
function wp_body_classes( $classes ) {
  	$globalPost = get_post();
	$slug = $globalPost->post_name;
    $classes[] = "page-".$slug;
      
    return $classes;
}
add_filter( 'body_class','wp_body_classes' );

/*Adicionar o nome da pessoa ao menu quando ela está logada */
function shortcode_personName( $attr ) {
    ob_start();
    get_template_part( 'template-parts/menu-person-name' );
    return ob_get_clean();
}
add_shortcode( 'person-name', 'shortcode_personName' );

/*funcao para inserir tags no body e no head*/
function insert_gtm_head(  ) { 
    
    include('inc/head-gtm.php');
}; 
add_action( 'wp_head', 'insert_gtm_head');

function insert_gtm_body(  ) { 
    
    include('inc/body-gtm.php');
};       
add_action( 'wp_after_body', 'insert_gtm_body');

//Insercao de tags no checkout 
/*
function insert_script_checkout() {
	get_template_part( 'inc/insert-script-checkout' );
}
add_action( 'woocommerce_thankyou', 'insert_script_checkout');
*/

//Insercao de tags no formulario login 
function insert_script_register() {
	get_template_part( 'inc/insert-script-register' );
}
add_action( 'woocommerce_after_customer_login_form', 'insert_script_register');

//Redireciona o login para a home
add_filter( 'woocommerce_login_redirect', 'my_redirect_login_home' );
/*Exclude pages from WordPress Search*/
function wpb_search_filter($query) {
  	if (!is_admin()) {
      if ($query->is_search) {
      $query->set('post_type', 'post');
      }
      return $query;
        }
	}
add_filter('pre_get_posts','wpb_search_filter');
/*Limitar caracteres resumo dos post*/
function custom_excerpt_mm( $length ) {
	return 35;
}
add_filter( 'excerpt_length', 'custom_excerpt_mm', 999 );

/* Redirect login home*/
function my_redirect_home( $woocommerce_registration_redirect ) {
	return home_url('/');
}
add_filter( 'woocommerce_registration_redirect', 'my_redirect_home' );

/* Redirect login home*/
function my_redirect_login_home( $woocommerce_login_redirect ) {
	return home_url('/');
}

/*Redireciona direto pro checkout*/
function redirect_to_checkout() {
    global $woocommerce;
    $checkout_url = $woocommerce->cart->get_checkout_url();
    return $checkout_url;
}
add_filter ('add_to_cart_redirect', 'redirect_to_checkout');

/* novo menu minha conta */
function my_account_menu_order() {
 	$menuOrder = array(
 		'dashboard'          => __( 'Início', 'woocommerce' ),
 		'orders'             => __( 'Meus Investimentos', 'woocommerce' ),
  		'investimentos-disponiveis'             => __( 'Investimentos Disponíveis', 'woocommerce' ),
 		//'downloads'          => __( 'Download', 'woocommerce' ),
 		'edit-address'       => __( 'Cadastro', 'woocommerce' ),
 		'edit-account'    	=> __( 'Alteração de senha', 'woocommerce' ),
 		'customer-logout'    => __( 'Logout', 'woocommerce' ),
 	);
 	return $menuOrder;
 }
 add_filter ( 'woocommerce_account_menu_items', 'my_account_menu_order' );

/* criar novo menu no minha conta*/
function maybe_redirect_endpoint ($url, $endpoint, $value, $permalink)
{
    if( $endpoint == 'investimentos-disponiveis')
        $url = '/produtos';
    return $url;
}
add_filter( 'woocommerce_get_endpoint_url', 'maybe_redirect_endpoint', 10, 4 );

/*background especial minha conta*/
function myaccount_bg( $classes ) {
    if ( is_page( 'minha-conta' ) ) {
      	if ( is_user_logged_in() ){
      		$classes[] = '';
      	}else{
      		$classes[] = 'bg-gradient-blue2';
      	}
    }
    return $classes;
}
add_filter( 'body_class', 'myaccount_bg' );

/*Inserindo CPF no email woocommerce de compra do admin*/
function insert_custom_fields_email_admin( $order, $sent_to_admin, $plain_text ) {
 
    if ($order->billing_cpf){
        echo '<br><p> <strong>CPF: </strong>'. $order->billing_cpf.'</p>';
    } 
    if ($order->billing_cnpj){ 
        echo '<br><p> <strong>CNPJ: </strong>'. $order->billing_cnpj. '</p>';
    } 
 
}
add_action('woocommerce_email_customer_details', 'insert_custom_fields_email_admin', 30, 3 );

/*Campo rentabilidade max e faixa Categori de Produtos */

function the_acf_field_wp() {
  
  $categories = get_queried_object_id();
  $cat = get_field('rentabilidade_ate', 'product_cat_' . $categories);
  echo $cat;
  
}
add_shortcode( 'php-acf-field-1', 'the_acf_field_wp' );

function the_acf_field_wp2() {
  
  $categories = get_queried_object_id();
  $cat = get_field('rentabilidade_de', 'product_cat_' . $categories);
  echo $cat;
  
}
add_shortcode( 'php-acf-field-2', 'the_acf_field_wp2' );

function the_acf_field_wp3() {
  
  $categories = get_queried_object_id();
  $cat = get_field('info_do_imovel', 'product_cat_' . $categories);
  echo do_shortcode($cat);
  
}
add_shortcode( 'php-acf-field-3', 'the_acf_field_wp3' );

function the_acf_field_wp4() {
  
  $categories = get_queried_object_id();
  $cat = get_field('matricula_do_imovel', 'product_cat_' . $categories);
  echo do_shortcode($cat);
  
}
add_shortcode( 'php-acf-field-4', 'the_acf_field_wp4' );

// Alterando o BICS do Woocommerce 
//original fields from plugins/woocommerce/includes/gateways/bacs/class-wc-gateway-bacs.php
function custom_bacs_fields() {
	global $wpdb;
	$account_details = get_option( 'woocommerce_bacs_accounts',
				array(
					array(
						'account_name'   => get_option( 'account_name' ),
						'account_number' => get_option( 'account_number' ),
						'sort_code'      => get_option( 'sort_code' ),
						'bank_name'      => get_option( 'bank_name' ),
						'iban'           => get_option( 'iban' ),
						'bic'            => get_option( 'bic' )
					)
				)

			);


	$account_fields = array(
		'bank_name'      => array(
			'label' => 'Banco',
			'value' => $account_details[0]['bank_name']
		),
		'account_name'   => array(
			'label' => 'Nome da conta',
			'value' => $account_details[0]['account_name']
		),
		'account_agency' => array(
			'label' => __( 'Agência', 'woocommerce' ),
			'value' => $account_details[0]['sort_code']
		),
		'account_number' => array(
			'label' => __( 'Número da conta', 'woocommerce' ),
			'value' => $account_details[0]['account_number']
		),
		'bic'            => array(
			'label' => __( 'CNPJ', 'woocommerce' ),
			'value' => $account_details[0]['bic']
		)
	);

	return $account_fields;


}
add_filter('woocommerce_bacs_account_fields','custom_bacs_fields');


/*Calculadora */
function blockCalculator( $attr ) {
    ob_start();
    get_template_part( 'template-parts/block-calculator' );
    return ob_get_clean();
}
add_shortcode( 'block-calculator', 'blockCalculator' );
/*Tabela escolha dos produtos */
function tableProductMM( $attr ) {
    ob_start();
    get_template_part( 'template-parts/table-product-mm' );
    return ob_get_clean();
}
add_shortcode( 'table-product-mm', 'tableProductMM' );

//Diminui complexidade da senha woocommerce
add_filter( 'woocommerce_min_password_strength', 'reduce_min_strength_password_requirement' );
function reduce_min_strength_password_requirement( $strength ) {
    // 3 => Strong (default) | 2 => Medium | 1 => Weak | 0 => Very Weak (anything).
    return 1; 
}
// Configura a mensagem a ser exibida
function msgHintWoo ( $hint ) {
    $hint = ' ';
    return $hint;
}
add_filter( 'password_hint', 'msgHintWoo' );

//Esconde o form de comprovante após o envio
function scripts_before_account_orders( ) { 
    
	echo "
	<script>
		document.addEventListener( 'wpcf7mailsent', function( event ) {
			console.log('send')
			let estadoForm = jQuery('div').hasClass( 'wpcf7-mail-sent-ok' )
			if(estadoForm == true){
				jQuery('#form-envio-comprovante').hide()
			}    
		}, false )
	</script>";
	
};       
add_action( 'woocommerce_before_account_orders', 'scripts_before_account_orders');

// Mensagem de erro de login personalizadas
function login_error_message($error){
    //check if that's the error you are looking for
    $pos = strpos($error, 'incorrect');
    if (is_int($pos)) {
        //its the right error so you can overwrite it
        $error = "Nome de usuário ou senha incorretos. Verifique os campos digitados.";
    }
    return $error;
}
add_filter('login_errors','login_error_message');

//Formulário Reinvestir
function form_redeem(  ) { 
    echo '<div class="form-redeem text-center pt-3">';
    echo '<p>Clique no botão abaixo para confirmar o reinvestimento</p>';
    echo do_shortcode('[contact-form-7 id="3145" title="Formulário de Reinvestimento"]'); 
    echo '</div>';
    
};
add_action( 'woocommerce_order_details_after_order_table', 'form_redeem', 10, 2 ); 
