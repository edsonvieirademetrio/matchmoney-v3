<?php

get_header();
?>

<section id="section-1" class="mt-1 pb-5">
    <div class="container">
        <!--Grid row-->
        <div class="row">
            <div class="col">
                <div class="title-home">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/hr-special-small.png" class="pt-3 " />
                    <h3 class="font-weight-bold color-blue-light py-3">Saiba mais</h3>
                </div>
            </div>
        </div>
        <div class="row text-center">            
            <div class="col">
                <h5 class="color-denin font-weight-normal text-center">
                    Conectamos <span class="color-orange text-weight-bold" style="font-size: 27px !important; font-weight: bold;">empresas</span> com créditos
					garantidos a <span class="color-orange text-weight-bold" style="font-size: 27px !important; font-weight: bold;">qualquer investidor</span>
                </h5>
            </div>            
        </div>
    </div>
</section>

<section id="section-2" class="py-5" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/assets/img/sobre/bk-section-2.png');background-size: cover;background-repeat: no-repeat;background-position: center;">
    <div class="container">
        <div class="row">
            <div class="col-3">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/sobre/icon-money-about.png" class="icon-money-about" style="position: absolute;bottom: -40px;right: -20px;width: 155px;" />
            </div>
            <div class="col-12 col-sm-12 col-lg-5 col-xl-5">
                <h4 class="font-weight-bold text-white pb-3">
                    Nós acreditamos que todos devem ter acesso a investimentos de qualidade, com segurança e garantia.
                </h4>
                <p class="text-white font-weight-normal">
                    Queremos conectar suas metas e objetivos de investimentos, a produtos com altíssima rentabilidade e segurança. Somos uma empresa de tecnologia baseada na crença de que soluções inovadoras e criativas oferecem maior valor e melhor experiência. Não somos
                    uma instituição financeira. Conectamos empresas com créditos garantidos a investidores, num ambiente colaborativo, buscando retorno alto em renda fixa, com a tranquilidade de um bem real, que estará atrelado ao empréstimo. Com
                    sede própria, na região de Campinas-SP, operamos de forma totalmente digital, o que nos permite baixos custos operacionais e concentrarmos recursos a nossos clientes. Não cobramos nenhuma taxa ou valor dos investidores.
                </p>
            </div>
            <div class="col"></div>
        </div>
    </div>
</section>

<section id="section-3">
	<div class="container">
		<div class="row">
            <div class="col py-2">
                <div class="title-home">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/hr-special-small.png" class="pt-3 " />
                    <h3 class="font-weight-bold color-blue-light py-3">Dúvidas frequentes</h3>
                </div>
            </div>
        </div>
		<div class="row">
			<div class="col py-3">
				<?php
                  while ( have_posts() ) :
                      the_post();

                      the_content();

                  endwhile; // End of the loop.
                ?>
			</div>
		</div>
	</div>
</section>

<!-- video -->
<?php get_template_part('template-parts/box-video'); ?>

<!--parceiros-->
<?php get_template_part('template-parts/box-partners'); ?>


<?php
get_footer();
?>