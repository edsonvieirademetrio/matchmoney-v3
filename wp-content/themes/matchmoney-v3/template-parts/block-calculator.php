<!--Section: Main simule-->
        <section id="section-1" class="pb-0 pb-sm-0 pb-lg-5 pb-xl-5">
            <div class="container">
                <!--Grid row-->
                <div class="row pl-10 pr-10">
                    <div class="col">
                        <div class="title-home">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/hr-special-medium.png" class="py-3 " />
                            <h3 class="font-weight-bold color-denin py-3">Simule o seu<br> investimento agora</h3>
                        </div>
                    </div>
                </div>
                <!--Grid row-->

                <!-- grafico-->
                <!--
          <div id="columnchart_values"></div>
            -->

                <!-- Ctrl Grafic row-->
                <div id="ctrl-grafic" class="row pl-10 pr-10">
                    <div class="col-12 col-sm-12 col-lg-5 col-xl-5">
                        <div class="box-title color-denin font-size-25 font-weight-normal">
                            Invista
                        </div>
                        <div class="box-vlr">
                            <span class="currency font-weight-normal color-denin">R$</span>
                            <span id="vlr" class="vlr color-denin font-size-64">1000,00</span>
                            <input type="range" class="custom-range color-orange" min="0" max="3" id="range-vlr" value="0">
							<div class="row text-center font-weight-bold font-size-12 color-denin">
                                <div class="col ">
									<span class="text-left pr-4">|</span>
									<br>
									R$ 1000
								</div>
                                <div class="col">
									<span class="text-center pr-2">|</span>
									<br>
									R$ 2500
								</div>
                                <div class="col">
									<span class="text-center pl-2">|</span>
									<br>
									R$ 5000
								</div>
                                <div class="col ">
									<span class="text-right pl-4">|</span>
									<br>
									R$ 10000
								
								</div>
                            </div>
                        </div>
                    </div>
                    <div class="col"></div>
                    <div class="col-12 col-sm-12 col-lg-5 col-xl-5">
                        <div class="box-title box-title color-denin font-size-25 font-weight-normal ">
                            Prazo
                        </div>
                        <div class="box-month">
                            <span id="number-month" class="color-denin font-size-64">181</span>
                            <span class="month color-denin font-size-64">dias</span>
                            <input type="range" class="custom-range color-orange" min="0" max="4" id="range-month" value="0">
							<div class="row text-center font-weight-bold font-size-12 color-denin">
                                <div class="col">
									<span class="text-center pr-2">|</span>
									<br>
									<span class="text-center pr-2">181</span>
								</div>
                                <div class="col">|<br>365</div>
                                <div class="col">|<br>730</div>
                                <div class="col">
									<span class="text-center pl-1">|</span>
									<br>
									<span class="text-center pl-1">1095</span>									
								</div>
                                <div class="col">
									<span class="text-center pl-2">|</span>
									<br>
									<span class="text-center pl-2">1460</span>
								</div>
							
                            </div>
                        </div>
                        <div class="box-vlr">

                        </div>
                    </div>
                </div>
                <!--/. Ctrl Grafic row-->
                <div id="grafic-view" class="row desktop justify-content-center">
                    <div class="col-3 p-relative">
                        <div class="grafic-view1 aqua-gradient text-center m-auto p-absolute b-0 l-15 wow fadeIn"></div>
                    </div>
                    <div class="col-3 p-relative">
                        <div class="grafic-view2 aqua-gradient text-center m-auto p-absolute b-0 l-15 wow fadeIn"></div>
                    </div>
                    <div class="col-3 p-relative">
                        <div class="grafic-view3 aqua-gradient text-center m-auto p-absolute b-0 l-15 wow fadeIn"></div>
                    </div>
                    <div class="col-3 p-relative">
                        <div class="grafic-view4 peach-gradient text-center m-auto p-absolute b-0 l-15 wow fadeIn"></div>
                    </div>
                </div>


                <div id="product-grafic" class="row text-left text-sm-left text-lg-center text-xl-center v-center">
                    <div class="col-12 col-lg-3 col-xl-3 bank1 order-2 order-lg-1 order-xl-1 py-2 py-sm-2 py-lg-1 py-xl-1">
                        <div class="col title-invest color-denin font-weight-normal font-size-20 p-4 d-none d-sm-none d-lg-block d-xl-block">
                            Poupança
                        </div>
                        <div class="col title-rescue text-uppercase color-orange d-none d-sm-none d-lg-block d-xl-block">
                            Total Resgatado:
                        </div>
                        <div class="col rescue">
                            <span id="rescue" class="rescue font-size-18 color-denin d-none d-sm-none d-lg-block d-xl-block"></span>
                        </div>
                        <div class="row ml-0">
                            <div class="col-5">
                                <span id="rescue" class="rescue font-size-18 color-denin d-lg-none d-xl-none"></span>
                            </div>
                            <div class="col-7">
                                <span class="grafic-right-view1 aqua-gradient text-center m-auto p-absolute b-0 wow fadeIn d-md-none d-lg-none d-xl-none"></span>    
                            </div>
                        </div>
                        <div class="text-left col-12 col-sm-12 col-md-12 d-lg-none d-xl-none">
                                Poupança 
                        </div>
                    </div>
                    <div class="col-12 col-lg-3 col-xl-3 bank2 order-3 order-lg-2 order-xl-2 py-2 py-sm-2 py-lg-1 py-xl-1">
                        <div class="col title-invest color-denin font-weight-normal font-size-20 p-4 d-none d-sm-none d-lg-block d-xl-block">
                            Tesouro Prefixado
                        </div>
                        <div class="col title-rescue text-uppercase color-orange d-none d-sm-none d-lg-block d-xl-block">
                            Total Resgatado:
                        </div>
                        <div class="col rescue">
                            <span id="rescue" class="rescue font-size-18 color-denin d-none d-sm-none d-lg-block d-xl-block"></span>
                        </div>
                        <div class="row ml-0">
                            <div class="col-5">
                                <span id="rescue" class="rescue font-size-18 color-denin d-lg-none d-xl-none"></span>
                            </div>
                            <div class="col-7">
                                <span class="grafic-right-view2 aqua-gradient text-center m-auto p-absolute b-0 wow fadeIn d-md-none d-lg-none d-xl-none"></span>    
                            </div>
                        </div>
                        <div class="text-left col-12 col-sm-12 col-md-12 d-lg-none d-xl-none">
                            Tesouro Prefixado
                        </div>
                    </div>
                    <div class="col-12 col-lg-3 col-xl-3 bank3 order-4 order-lg-3 order-xl-3 py-2 py-sm-2 py-lg-1 py-xl-1">
                        <div class="col title-invest color-denin font-weight-normal font-size-20 p-4 d-none d-sm-none d-lg-block d-xl-block">
                            Tesouro Selic
                        </div>
                        <div class="col title-rescue text-uppercase color-orange d-none d-sm-none d-lg-block d-xl-block">
                            Total Resgatado:
                        </div>
                        <div class="col rescue">
                            <span id="rescue" class="rescue font-size-18 color-denin d-none d-sm-none d-lg-block d-xl-block"></span>
                        </div>
                        <div class="row ml-0">
                            <div class="col-5">
                                <span id="rescue" class="rescue font-size-18 color-denin d-lg-none d-xl-none"></span>
                            </div>
                            <div class="col-7">
                                <span class="grafic-right-view3 aqua-gradient text-center m-auto p-absolute b-0 wow fadeIn d-md-none d-lg-none d-xl-none"></span>    
                            </div>
                        </div>
                        <div class="text-left col-12 col-sm-12 col-md-12 d-lg-none d-xl-none">
                            Tesouro Selic
                        </div>
                    </div>
                    <div class="col order-5 text-center">
                        <a class="btn text-white font-weight-normal aqua-gradient rounded-8 d-lg-none d-xl-none text-center" href="/produtos">Investir agora</a>
                    </div>
                    <div class="col-12 col-lg-3 col-xl-3 bankMatch order-1 order-lg-4 order-xl-4 text-center py-2 py-sm-2 py-lg-1 py-xl-1">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icon-moeda.png" class="icon-money d-none d-lg-block d-xl-block" />
                        <div class="col title-invest color-denin font-weight-normal font-size-32 p-2 d-none d-lg-block d-xl-block">
                            Matchmoney
                        </div>
                        <div class="col title-rescue text-uppercase color-orange">
                            Total Resgatado <span class="name-site d-md-none d-lg-none d-xl-none">na Matchmoney:</span>
                        </div>
                        <div class="col rescue">
                            <span id="rescue" class="rescue font-size-32 color-denin font-weight-bold"></span>
                        </div>
                        <div class="row pb-3 justify-content-center">
                            <div class="col-3"></div>
                            <div class="col-7">
                                <div class="col"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icon-moeda.png" class="icon-money-sm d-md-none d-lg-none d-xl-none" /></div>
                                <div class="grafic-right-view4 peach-gradient wow fadeIn d-md-none d-lg-none d-xl-none"></div>
                            </div>
                            
                        </div>
                        <div class="text-left col-12 col-sm-12 col-md-12 d-lg-none d-xl-none color-orange">
                            Outros Rendimentos:
                        </div>
  						<?php
  							global $post;
  							$page_slug = $post->post_name;
  							if( !$page_slug == "produtos"){
								echo '<a class="btn text-white font-weight-normal aqua-gradient rounded-8 d-none d-lg-block d-xl-block" href="/produtos">Investir agora</a>';
							}
						?>                        
                    </div>
                </div>
            </div>
        </section>
        <!--/.Section: Main simule-->