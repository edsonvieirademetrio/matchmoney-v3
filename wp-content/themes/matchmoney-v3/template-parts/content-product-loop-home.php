<div class="box-product-home rounded-15 py-3 col-6 col-sm-6 col-lg col-xl mx-2 text-center" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/assets/img/back-box-produc.png'); background-repeat: no-repeat; background-size: cover;background-position:center;">
    <h4 class="title-product font-weight-bold text-uppercase color-orange"><?php the_title(); ?></h4>
    <div class="subtitle-product text-uppercase text-white font-14 font-weight-normal mb-3">Resgate em  <?php the_field ('resgate'); ?></div>
	<div class="vlr-title font-size-12 text-white font-weight-normal pb-2 pt-3">INVESTIMENTO</div>
	<div class="text-white font-weight-bold mb-4">A partir de R$ 1.000,00</div>
    <div class="rental-title text-white font-size-12 font-weight-normal">RENTABILIDADE</div>
    <div class="txRental-title font-weight-bold text-white mb-3"> <?php the_field ('rentabilidade'); ?> </div>
    <a class="btn bg-color-orange rounded-8 text-white" href="<?php the_permalink(); ?>" >Mais sobre</a>
</div>