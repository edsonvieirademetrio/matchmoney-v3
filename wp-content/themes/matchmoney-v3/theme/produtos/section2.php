<section class="produtos-section2 py-5" id="app">
    <div class="container">
        <div class="row">
            <div class="col-xl-12 text-center">
                <h2>Escolha o <span class="font-default-black">produto ideal</span></h2>
            </div>
            <div class="col-xl-12 mt-3 py-4">
                <div class="row justify-content-center">
                    <div class="col-xl-3 mr-3 mb-4 box-shadow" v-for="el in getAllProducts">
                        <div class="col img-product-all text-center">
                            <img v-bind:src="el.icon" alt="" style="max-height: 80px;">                            
                        </div>
                        <div class="col title-product-all text-center ">
                            <h4 class="font-weight-bold mt-2">{{ el.title }}</h4>
                        </div>
                        <div class="col rescue-product-all pb-1 pr-1">
                            <i class="fa fa-calendar-o color-blue" aria-hidden="true"></i>
                            Resgate em {{ el.rescue }}
                        </div>
                        <div class="col rental-product-all pb-1 pr-1">
                            <i class="fa fa-line-chart color-blue" aria-hidden="true"></i>
                            Até {{ el.rental }}
                        </div>
                        <div class="col incorp-product-all pb-1 pr-1">
                            <i class="fa fa-shield color-blue" aria-hidden="true"></i>
                            {{ el.incorp }}
                        </div>
                        <div class="col btn-invest-product-all">
                            <button class="btn btn-md bg-orange w-100 text-white font-weight-bold">Invista Agora</button>
                        </div>
                    </div>
                </div>
            </div>                            
        </div>
    </div>
    
</section>
<script type="text/javascript">                
    new Vue({
        el: "#app",
        data: {
            getAllProducts: null,
            icon: null,
            title: null,
            rescue: null,
            rental: null,
            incorp: null,
            url: null,
            idProduct: null
        },
        mounted () {
            const session_url = 'https://matchmoney.gestordeimagem.com.br/wp-json/wc/v3/products?category=58'
            const user = 'ck_5d31097a3845e3da2bc2eef57296cc4443ef9a46'
            const pass = 'cs_0d40a4809a5b655b3426827b16b1c17fb98a9049'                        
            axios
            .get(session_url, {auth: { username: user,password: pass}})
            .then((res)=>{
                const dataAllProducts = res.data                
                const arrayAllProducts = []
                console.log(dataAllProducts)
                dataAllProducts.forEach((el)=>{
                    const metaData = el.meta_data
                    metaData.forEach((obj)=>{                    
                        if(obj.key == 'resgate_texto'){    
                            this.fieldRescue = obj.value                        
                        }
                        if(obj.key == 'rentabilidade_texto'){    
                            this.fieldRental = obj.value                        
                        }
                        if(obj.key == 'nome_da_empresa_texto'){    
                            this.fieldIncorp = obj.value                        
                        }
                        
                    })
                    const data = {
                        title: el.name,
                        rescue: this.fieldRescue,
                        rental: this.fieldRental,
                        incorp: this.fieldIncorp,
                        icon: el.images[0].src
                    }
                    arrayAllProducts.push(data)

                })
                this.getAllProducts = arrayAllProducts
                console.log(arrayAllProducts)
            })
            
        }
    })
</script>   