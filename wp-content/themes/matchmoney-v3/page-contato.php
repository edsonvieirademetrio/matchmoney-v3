<?php

get_header();
?>

<section id="section-1" class="mt-1 pb-5" >
    <div class="container">
        <!--Grid row-->
        <div class="row">
            <div class="col">
                <div class="title-home">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/hr-special-small.png" class="pt-3 " />
                    <h3 class="font-weight-bold color-blue-light py-3">Contato</h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <h5 class="color-orange font-weight-bold">Quer falar<br>com a gente?</h5>
                <p class="color-denin font-weight-normal">
                    Preencha o formulário ao lado e<br>
                    entraremos em contato com você!
                </p>
                <div class="col-12 col-sm-12 col-lg-8 col-xl-8 p-5 bg-color-gray-light mb-4 mb-sm-4 mb-lg-0 mb-xl-0">
                    <p>
                        <span>
                            <i class="fa fa-envelope color-orange" aria-hidden="true"></i>
                        </span>
                        <span>
                            <a href="mailto:contato@matchmoney.com.br"> contato@matchmoney.com.br</a>
                        </span>
                    </p>
                    <p>
                        <span>
                            <i class="fab fa-whatsapp color-orange"></i>
                        </span>
                        <span>
                            <a href="https://api.whatsapp.com/send?phone=+5511934571180&text=Gostaria%20de%20informa%C3%A7%C3%B5es%20sobre%20os%20vossos%20produtos." target="blank" class="color-blue"> (11)9 3457 1180</a>
                        </span>
                    </p> 
                    <p>
                        <span>
                            <i class="fas fa-map-marker-alt color-orange"></i>
                        </span>
                        <span class="color-blue-light">
                            Rua José Milton Pizzi,126 - Sala 14 <br>Centro - Itatiba/SP
                        </span>
                    </p>       
                </div>

            </div>
            <div class="col">
                <div class="box-form-contact bg-color-orange p-5 rounded-8">
                    <?php echo do_shortcode('[contact-form-7 id="1509" title="Form Contato v 2.0"]'); ?>
                </div>
            </div>            
        </div>
    </div>
</section>


<?php
get_footer();
?>