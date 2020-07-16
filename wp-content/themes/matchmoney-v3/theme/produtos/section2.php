<section class="produtos-section2 py-5">
    <div class="container">
        <div class="row">
            <div class="col-xl-12 text-center">
                <h2>Escolha o <span class="font-default-black">produto ideal</span></h2>
            </div>
            <div class="col-xl-12">
                <div class="row">
                    <div class="col-xl-4">
                        <div class="col img-product-all">
                            <img src="" alt="">
                        </div>
                        <div class="col title-product-all">
                            <h4>MatchMoney Bronze</h4>
                        </div>
                        <div class="col rescue-product-all">
                            <i class="fa fa-calendar-o" aria-hidden="true"></i>
                            Resgate em 90 dias
                        </div>
                        <div class="col rental-product-all">
                            <i class="fa fa-line-chart" aria-hidden="true"></i>
                            Até 1,10% (306% CDI)
                        </div>
                        <div class="col incorp-product-all">
                            <i class="fa fa-shield" aria-hidden="true"></i>
                            NORDEX Construtora e Incorporadora
                        </div>
                        <div class="col btn-invest-product-all">
                            <button class="btn btn-md bg-orange">Invista Agora</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Adicione componente Produtos -->
            <div id="app">            

            </div>
            <script type="text/javascript">                
                new Vue({
                    el: "#app",
                    data: {
                        icon: null,
                        title: null,
                        rescue: null,
                        rental: null,
                        incorp: null,
                        url: null,
                    },
                    mounted () {
                        const session_url = 'https://matchmoney.gestordeimagem.com.br/wp-json/wc/v3/products/2007'
                        const user = 'ck_5d31097a3845e3da2bc2eef57296cc4443ef9a46'
                        const pass = 'cs_0d40a4809a5b655b3426827b16b1c17fb98a9049'                        
                        axios
                        .get(session_url, {auth: { username: user,password: pass}})
                        .then((res)=>{
                            const info = res.data
                            this.name = info.name
                            this.idProduct = info.id
                        })
                       
                    }
                })
            </script>
            <style>
            </style>
        </div>
    </div>
    
</section>