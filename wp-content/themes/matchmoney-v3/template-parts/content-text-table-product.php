<section id="section-1" class="mt-1 pb-2" >
    <div class="container">
        <!--Grid row-->
        <div class="row">
            <div class="col">
                <div class="title-home mb-5">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/hr-special-small.png" class="pt-3 " />
                    <h3 class="font-weight-bold color-denin py-3">Produtos</h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <h2 class="title-cat-text color-orange font-weight-bold mb-5"><?php single_cat_title( ); ?></h2>
				<div class="text-cat color-denin font-weight-normal">
					<?php 
						$categories = get_queried_object_id();
                        echo get_field('descricao_publica', 'product_cat_' . $categories);
					?>
				</div>
            </div>
            <div class="col thumb-text-product">
                <img src="<?php $imgCat = get_queried_object_id();
                                echo get_field('logo_categoria', 'product_cat_' . $imgCat); 
							?>" 
				class="img-cat" />
            </div>            
        </div>
    </div>
</section>
<section id="section-2" class="mt-1 pt-4 pb-3 blue-gradient mb-5" >
	<div class="container">
        <!--Grid row-->
        <div class="row">
            <div class="desc-public-2 col text-white text-weight-normal">
                <?php 
                  $categories = get_queried_object_id();
                  echo get_field('descricao_publica_2', 'product_cat_' . $categories);
                ?>
            </div>
        </div>        
    </div>
</section>