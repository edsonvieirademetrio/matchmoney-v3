<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package matchmoney
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon.png" rel="shortcut icon" />
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">

	<header id="masthead" class="site-header">
		<nav id="first-menu" class="navbar navbar-expand-lg text-white scrolling-navbar z-index-10" role="navigation">
			<div class="container">
				<!-- Logo -->
				<a class="navbar-brand" href="/" >
                	<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/lg-matchmoney.png" class="logo-header" />
            	</a>
				<!-- Collapse -->
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" onclick="menuMobile();">
                	<i class="fa fa-bars text-white" aria-hidden="true"></i>
				 </button>
				
				 <!--menu principal -->
				<?php get_template_part('template-parts/menu-default'); ?>		
					
			</div>			
		</nav><!-- .navbar-collapse -->
		<!-- Full Page Intro -->
		<div id="section-header" class="pt-5 pb-15">		
			<!-- Mask & flexbox options-->
			<div class="d-flex justify-content-center align-items-center">

				<!-- Content -->
				<div class="container">

					<!--Grid row-->
					<div class="row wow fadeIn">

						<!--Grid column-->
						<div class="box-1 mb-4 white-text text-left text-lg-left text-xl-left text-md-left pl-10 pt-15">

							<h1 class="title-home display-5 font-weight-bold">Seus investimentos<br>rendendo até 57,60%</h1>
							<p class="subtitle-home">
								<strong class="subtitle-home color-blue-light">Aplique com as mesmas taxas e garantias que Fundos e Bancos aplicam</strong>
							</p>
							<!-- novo botao e-book -->
							<!-- hide btn ebook
							<a class="btn bg-color-orange rounded-8 text-white waves-effect waves-light" href="/wp-content/uploads/2019/12/Ebook-MatchMoney-5.0.pdf" target="blank">Siga nosso Passo a Passo <i class="fa fa-arrow-right" aria-hidden="true"></i></a>							
							-->
							<!--
							<div id="box-news" class="mb-4">
								<div class="box-form text-center rounded-8 bg-white over-hidden">
									<style>body {background-color: transparent !important; } </style>
									<link rel='stylesheet' href='https://blob.llimages.com/machine-files/all-css/form-ll.css'>
									<form action="https://paginas.rocks/Pages/Index/303474" method="post" >  
									<input id="id" name="id" type="hidden" value="303474" />  
									<input id="pid" name="pid" type="hidden" value="11361243" />  
									<input id="list_id" name="list_id" type="hidden" value="303474" />  
									<input id="provider" name="provider" type="hidden" value="leadlovers" />  
									<input class="form-control" id="email" name="email" placeholder="Informe o seu email" type="email" required/>  
									<button class="btn bg-color-orange rounded-8 btn-leadlovers1" type="submit">Quero investir agora</button>  
									<input type="hidden" id="source" name="source" value="" />  
									<img src="https://llimages.com/redirect/redirect.aspx?A=V&p=11361243&m=303474" style="display: none;" />
									</form>
									<!--
									<div class="col p-0">
										<input type="text" id="defaultFormNameModalEx" class="form-control form-control-sm" placeholder="Digite seu e-mail aqui">
									</div>
									<div class="col p-0">
										<a type="button" class="btn btn-deep-orange rounded-8" href="/minha-conta">Quero investir agora</a>
									</div>
								</div>
							</div>
							-->
						</div>
						<!--Grid column-->

						<!--Grid column-->
						<div class="col-md-6 col-xl-5 mb-4">

						</div>
						<!--Grid column-->

					</div>
					<!--Grid row-->

				</div>
				<!-- Content -->

			</div>
			<!-- Mask & flexbox options-->

		</div>
		<!-- Full Page Intro -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
