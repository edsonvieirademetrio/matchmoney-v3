<section id="blog-section1" class="mt-1 py-xl-5 pt-5 pb-1  bg-gray-light">
    <div class="container">
        <!--Grid row-->
        <div class="row row mt-40 mb-40 text-xl-left text-center">
            <div class="col-xl-12">
                <h2>Blog <span class="font-default-black">MatchMoney</span></h2>
            </div>
        </div>
        <div class="row py-2 mx-1">
            <div class="col-xl-4">
                <div id="box-search-blog" class="row">
                    <div class="col-xl-12 align-middle">                        
                        <?php get_template_part('theme/blog/form-search'); ?>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 p-4">
            <?php get_template_part('theme/blog/menu-category'); ?>
            </div>
        </div>               
    </div>
</section>
