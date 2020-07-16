<section class="produto-section-2">
    <div class="row">
        <div class="col-xl-6 info-general-product">
            <div class="col-xl-12 logo-incorp-product">
                <img src="" alt="">
            </div>        
            <div class="col-xl-12 title-product">
                MatchMoney 12 meses
            </div>    
            <div class="col-xl-12 range-stock-product">
                <div class="progress-bar-into-product">
                    {{progressBar}}
                </div>
                <div class="progress-bar-numbers-into-product">
                    {{progressNumber}}
                </div>
            </div>
            <div class="col-xl-12 description-text-product">
                {{textDescription}}
            </div>
            <div class="col-xl-12 rescue-text-product">
                <i class="fa fa-calendar-o" aria-hidden="true"></i>
                {{rescueText}}
            </div>
            <div class="col-xl-12 rental-text-product">
                <i class="fa fa-line-chart" aria-hidden="true"></i>
                {{rentalText}}
            </div>
            <div class="col-xl-12 incorp-text-product">
                <i class="fa fa-shield" aria-hidden="true"></i>
                {{incorpText}}
            </div>
            <div class="col-xl-12 address-text-product">
                <i class="fa fa-home" aria-hidden="true"></i>
                {{adressText}}
            </div>

        </div>
        <div class="col-xl-6 options-select-product">
            <div class="col-xl-12 options-into-product">
                <h4>Quanto você deseja investir no produto {{title}}?</h4>
                <div class="row">
                    <div class="col-xl-2 option-into">
                        {{valueInvest}}
                        <div class="cdi-product-text">
                            {{rentalCdi}}
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-12 result-into-product">
                <h4>Resultado</h4>
                <div class="row">
                    <div class="col-xl-4">
                        <div class="value-invest-into-product">
                            R$ {{valueInvest}}                    
                        </div>
                        <div class="text-value-invest-into-product">
                            Investimento inicial
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <div class="text-rental-invest-into-product">
                            {{rentalInvest}}
                        </div>
                        <div class="text-rental-time-invest-into-product">
                            em {{timeRescue}}
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <div class="value-rescue-into-product">
                            R$ {{valueRescue}}
                        </div>
                        <div class="text-value-rescue-into-product">
                            Valor de resgate
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-12 text-left btn-into-product">
                <button class="btn btn-md bg-orange color-white">Invista Agora</button>
            </div>
            <div class="col-xl-12">
                <div class="row">
                    <div class="col-xl-6">
                        <h6 class="color-gray text-uppercase text-left">Compara com o mercado</h6>
                        <img src="#" alt="">
                    </div>
                    <div class="col-xl-6">
                        <div>
                            <span>{{valueRescue}}<br>Matchmoney</span>                    
                        </div>
                        <div>
                            <span>{{valorTesouroSelic}}<br>Tesouro Selic</span>
                        </div>
                        <div>
                            <span>{{valorTesouroPrefixado}}<br>Tesouro Prefixado</span>
                        </div>
                        <div>
                            <span>{{valorPoupanca}}<br>Poupança</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>