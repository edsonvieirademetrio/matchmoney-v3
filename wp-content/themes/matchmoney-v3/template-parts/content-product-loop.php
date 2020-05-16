    <div class="col-8 col-sm-8 col-lg-3 col-xl-3 text-center my-4 col-produtos">
        <div class="box-product-home rounded-top-15 py-4 px-2" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/assets/img/back-box-produc.png'); background-repeat: no-repeat; background-size: cover;background-position:center;">
            <h2 class="title-product font-weight-bold text-uppercase color-orange"><?php the_title(); ?></h3>
            <div class="subtitle-product text-uppercase text-white font-14 font-weight-normal">Resgate em  <?php the_field ('resgate'); ?></div>            
			<div class="mb-4"></div>
            <div class="rental-title text-white font-size-12 font-weight-normal">RENTABILIDADE</div>
            <div class="txRental-title font-weight-bold text-white"> <?php the_field ('rentabilidade'); ?> </div>
        </div>
        <div class="box-product2 produtos py-4 bg-color-gray-light px-2">
            <div class="rental-title color-denin font-size-12 font-weight-normal">INVESTIMENTO MÍNIMO</div>
            <div class="txRental-title font-weight-bold color-blue-light"> <?php the_field ('valor_min_cota'); ?> </div>
            <div class="mb-4"></div>
			<div class="rental-title color-denin font-size-12 font-weight-normal">PRAZO RETORNO</div>
            <div class="txRental-title font-weight-bold color-blue-light"> <?php the_field ('prazo_de_retorno'); ?> </div>
            <div class="mb-4"></div>
			<div class="rental-title color-denin font-size-12 font-weight-normal">RESGATE</div>
            <div class="txRental-title font-weight-bold color-blue-light"> <?php the_field ('tipo_de_resgate'); ?> </div>
        </div>
        <div class="box-product3 produtos bg-color-orange text-center p-2 rounded-bottom-15">
            <div class="vlr-title font-size-12 text-white font-weight-normal pb-2 pt-3">STATUS DA OFERTA</div>
            <?php

                $mostraVl = get_field('data_final_oferta');
                if ( is_user_logged_in() ){
                	echo '<div class="text-white font-weight-normal mb-2">';
                	echo $mostraVl;
                	echo '</div>';
                }else{
                	echo '<div class="login-product text-white font-10 pb-4">';
                	echo 'Faça seu <a href="/minha-conta" class="font-weight-bold color-blue">login</a> ou <a href="/minha-conta" class="font-weight-bold color-blue">cadastre-se</a> para visualizar';
                	echo '</div>';
                }
            ?>			
            <a class="btn bg-white rounded-8 text-orange" href="<?php the_permalink(); ?>">Quero investir</a>
        </div>
    </div>    

