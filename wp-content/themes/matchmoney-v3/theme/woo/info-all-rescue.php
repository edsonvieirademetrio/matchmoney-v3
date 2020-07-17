<div class="row mt-4">
    <div class="col-xl-12">
        <h4>Seus Resgates</h4>
    </div>
    <!--espaco para foreach-->
    <div class="col-xl-4 mr-2 py-3 box-shadow">
        <div class="row">
            <div class="col-xl-5">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/v3/img/icon-rescue-default.png" alt="">
            </div>
            <div class="col-xl-7">
                <div class="date-text-rescue">
                    {{ dateTextRescue }}
                </div>
                <div class="value-text-rescue">
                    {{ valueTextRescue }}
                </div>
                <div class="value-text-diferent-invest">
                    <i class="fa fa-line-chart" aria-hidden="true"></i>
                    Ganhe R$ {{ valueTextDiferentInvest }}
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 mr-2 py-3 box-shadow">
        <div class="row">
            <div class="col-xl-5">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/v3/img/icon-rescue-default.png" alt="">
            </div>
            <div class="col-xl-7">
                <div class="date-text-rescue">
                    {{ dateTextRescue }}
                </div>
                <div class="value-text-rescue">
                    {{ valueTextRescue }}
                </div>
                <div class="value-text-diferent-invest">
                    <i class="fa fa-line-chart" aria-hidden="true"></i>
                    Ganhe R$ {{ valueTextDiferentInvest }}
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-4 mr-2 py-3 box-shadow">
        <div class="row">
            <div class="col-xl-4 p-0">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/v3/img/icon-rescue-default.png" alt="">
            </div>
            <div class="col-xl-8">
                <div class="date-text-rescue">
                    {{ dateTextRescue }}
                </div>
                <div class="value-text-rescue">
                    {{ valueTextRescue }}
                </div>
                <div class="value-text-diferent-invest">
                    <i class="fa fa-line-chart" aria-hidden="true"></i>
                    Ganhe R$ {{ valueTextDiferentInvest }}
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-12 color-gray-light py-3">
        <p>
            * O prazo para resgate começa a partir da data de confirmação do seu pedido de investimento.
        </p>
    </div>

</div>