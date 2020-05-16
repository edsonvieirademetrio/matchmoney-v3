<div id="investir"></div>
<section id="table-product desktop" class="table-product my-2 d-none d-sm-none d-md-none d-lg-block d-xl-block">
    <div class="container">
		<div class="row">
			<div class="col text-center pt-5 pb-2">
				<img src="/wp-content/uploads/2019/07/Rectangle-47.png" class=" wp-post-image wp-image-1288" alt="Rectangle 47">
				<h4 class="font-weight-bold color-denin pt-2 pb-4">Escolha o produto que mais<br>se adapta ao seu investimento</h4>
			</div>
		</div>
        <div class="row justify-content-center">
            <div class="col-2 blue-light-gradient text-white text-normal text-center v-center small ml-1 mb-1 px-2 py-3">
                Valor de investimento
            </div>
            <div class="col-2 blue-light-gradient text-white text-normal text-center v-center small ml-1 mb-1 px-2 py-3">
                Rentabilidade
            </div>            
            <div class="col-2 blue-light-gradient text-white text-normal text-center v-center small ml-1 mb-1 px-2 py-3">
                Valor de resgate
            </div>
            <div class="col-2 blue-light-gradient text-white text-normal text-center v-center small ml-1 mb-1 px-2 py-3">
                Tipo de resgate
            </div>            
            <div class="col-1 blue-light-gradient text-white text-normal text-center v-center small ml-1 mb-1 px-2 py-3">
                Investir
            </div>
        </div>
            <?php if ( have_posts() ) : ?>
                <?php while ( have_posts() ) : the_post(); ?>                            
                    <div class="row justify-content-center">
                        <div class="col-2 text-normal text-center v-center small ml-1 mb-1 px-2 py-3 color-orange bg-color-gray-light">
                            <?php get_template_part('template-parts/woo/price')?>
                        </div>
                        <div class="col-2 text-normal text-center v-center ml-1 mb-1 px-2 py-3 bg-color-orange font-weight-bold text-white">
                            <rental><?php the_field ('rentabilidade'); ?></rental>
                        </div>                        
                        <div class="col-2 text-normal text-center v-center small ml-1 mb-1 px-2 py-3 color-denin bg-color-gray-light">
                            <h6 class="font-weight-bold"><?php the_field ('valor_ao_final'); ?></h6>
                        </div>
                        <div class="col-2 text-normal text-center v-center small ml-1 mb-1 px-2 py-3 color-orange bg-color-gray-light">
                            <strong><?php the_field ('tipo_de_resgate'); ?></strong>
                        </div>                        
                        <div class="col-1 text-normal text-center v-center small ml-1 mb-1 px-2 py-3 bg-color-blue">
                            <?php get_template_part( 'template-parts/woo/add-to-cart' ); ?>
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
    </div>

</section>
<!-- mobile -->
<section id="table-product mobile" class="table-product my-2 d-lg-none d-xl-none">
    <div class="container">        
            <?php if ( have_posts() ) : ?>
                <?php while ( have_posts() ) : the_post(); ?>                            
                    <div class="row pl-2">
						<!--bloco 1 -->
                        <div class="col-5 blue-light-gradient text-white text-normal text-center v-center small ml-1 mb-1 px-2 py-3">
                            Valor de investimento
                        </div>
						<div class="col-6 text-normal text-center v-center small ml-1 mb-1 px-2 py-3 color-orange bg-color-gray-light">
                            <?php get_template_part('template-parts/woo/price')?>
                        </div>
						<!--bloco 2 -->
						<div class="col-5 blue-light-gradient text-white text-normal text-center v-center small ml-1 mb-1 px-2 py-3">
                          Rentabilidade
                      	</div>
                        <div class="col-6 text-normal text-center v-center small ml-1 mb-1 px-2 py-3 bg-color-orange font-weight-bold text-white">
                            <rental><?php the_field ('rentabilidade'); ?></rental>
                        </div>						
						<!--bloco 4 -->
						<div class="col-5 blue-light-gradient text-white text-normal text-center v-center small ml-1 mb-1 px-2 py-3">
                            Valor de resgate
                        </div>
                        <div class="col-6 text-normal text-center v-center small ml-1 mb-1 px-2 py-3 color-denin bg-color-gray-light">
                            <?php the_field ('valor_ao_final'); ?>
                        </div>
						<!--bloco 5 -->
						<div class="col-5 blue-light-gradient text-white text-normal text-center v-center small ml-1 mb-1 px-2 py-3">
                            Tipo de resgate
                        </div>
                        <div class="col-6 text-normal text-center v-center small ml-1 mb-1 px-2 py-3 color-orange bg-color-gray-light">
                            <strong><?php the_field ('tipo_de_resgate'); ?></strong>
                        </div>						
						<!--bloco 7 -->
						<div class="col-5 blue-light-gradient text-white text-normal text-center v-center small ml-1 mb-1 px-2 py-3">
                            Investir
                        </div>
                        <div class="col-6 text-normal text-center v-center small ml-1 mb-1 px-2 py-3 bg-color-blue">
                            <?php get_template_part( 'template-parts/woo/add-to-cart' ); ?>
                        </div>
                    </div>
					<hr class="space-products-mobile my-4">
                <?php endwhile; ?>
            <?php endif; ?>
    </div>

</section>