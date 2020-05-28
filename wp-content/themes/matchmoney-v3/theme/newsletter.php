<section class="home-section5 pb-4 pt-5 <?php if(is_page( 'produtos') || is_page( 'blog') || is_single('')) {echo 'bg-gray-light';}else{echo 'bg-white';}?>">
    <div class="container">
        <div class="row">
            <div class="col-xl-12 mb-30">
                <h3><strong>Assine nossa newsletter</strong> para novidades e promoções exclusivas</h3>            
            </div>
        </div>
        <div class="row box-news py-4 mb-30 align-middle <?php if(is_page( 'produtos' )) {echo 'bg-white';}else{echo 'bg-gray-light';}?>">
            <div class="col-xl-2">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/v3/img/home-icon-free.png" alt="">
            </div>
            <div class="col-xl-9">
                <div class="row align-middle">
                    <!-- Default form subscription -->
                        <!-- Name -->
                        <span class="col-xl-4">
                            <input type="text" id="defaultSubscriptionFormPassword" class="form-control" placeholder="Nome">
                        </span>
                        <!-- Email -->
                        <span class="col-xl-4">
                            <input type="email" id="defaultSubscriptionFormEmail" class="form-control" placeholder="E-mail">                    
                        </span>
                        <!-- Sign in button -->
                        <span class="col-xl-4">
                            <button class="btn btn-info btn-block float-left btn-sm" type="submit">Cadastre Agora</button>
                        </span>
                    <!-- Default form subscription -->
                </div>
            </div>
            <div class="col-xl-1 p-0 m-0 pr-2">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/v3/img/home-icon-news.png" alt="">
            </div>
        </div>
    
    </div>
</section>