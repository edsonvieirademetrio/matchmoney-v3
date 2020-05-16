<script>
/*Funcao para disparar GTag Conversão de cadastro */
//jQuery('.woocommerce-form.woocommerce-form-register.register .woocommerce-Button.button').attr('onclick','cr_mm();');
function gtag_report_conversion(url) {
  var callback = function () {
    if (typeof(url) != 'undefined') {
      window.location = url;
    }
  };
  gtag('event', 'conversion', {
      'send_to': 'AW-689986878/_oOsCPq9mLYBEL66gckC',
      'event_callback': callback
  });
  return false;
}
/* end */
</script>