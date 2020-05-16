// Animations initialization
new WOW().init();

//Função Box Newsletter
jQuery(document).ready(function() {
    setTimeout(function() {
        jQuery('#box-newsletter').fadeIn("slow");
    }, 3000);
});

function exit() {
    jQuery('#box-newsletter').fadeOut("slow");
}
// Simulador de Investimentos
var month = ['181', '06', '181', '06', '12'];
var percent = ['10%', '15%', '20%', '50%', '53%', '56%', '60%', '63%', '66%', '70%', '72%', '74%', '76%', '78%', '80%', '82%', '84%', '86%', '88%', '90%', '92%', '94%', '96%', '98', '100'];
var percent2 = ['5%', '10%', '13%', '16%', '20%', '23%', '26%', '30%', '33%', '36%', '40%', '43%', '46%', '50%', '53%', '56%', '60%', '63%', '65%', '70%', '74%', '77%', '80%', '83%', '86%', '89%', '93%', '97%', '100%'];

var serie03 = [
    ['1.000,00', '1.030,00', '1.014,49', '1.015,23', '1.015,23'],
    ['2.500,00', '2.582,00', '2.536,22', '2.565,79', '2.565,79'],
    ['5.000,00', '5.180,00', '5.072,00', '5.131,58', '5.076,14'],
    ['10.000,00', '10.390,00', '10.144,87', '10.263,16', '10.152,29']
];

var serie06 = [
    ['1.000,00 	', ' 1.084,00 	', '1.029,18 	 ', '1.055,20 ', ' 1.031,72 '],
    ['2.500,00 	', ' 2.725,00 	', '2.572,96 	 ', '2.637,99 ', ' 2.579,30 '],
    ['5.000,00 	', ' 5.480,00 	', '5.145,92 	 ', '5.275,98 ', ' 5.158,59 '],
    ['10.000,00 ', ' 11.080,00 ', ' 10.291,83  ', '10.551,95', ' 10.317,18']
];

var serie12 = [
    ['1.000,00 	', ' 1.192,00 	', '1.059,22 	 ', '1.117,71 ', ' 1.066,71 '],
    ['2.500,00 	', ' 3.010,00 	', '2.648,05 	 ', '2.794,26 ', ' 2.666,76 '],
    ['5.000,00 	', ' 6.080,00 	', '5.296,09 	 ', '5.588,52 ', ' 5.333,53 '],
    ['10.000,00 ', ' 12.400,00', ' 10.592,18  ', '11.177,03', ' 10.667,05']
];

var serie24 = [
    ['1.000,00 	', ' 1.324,00 	', '1.091,74 	 ', '1.188,93 ', ' 1.104,47 '],
    ['2.500,00 	', ' 3.355,00 	', '2.729,32 	 ', '2.976,02 ', ' 2.764,85 '],
    ['5.000,00 	', ' 6.800,00 	', '5.458,76 	 ', '5.952,04 ', ' 5.522,38 '],
    ['10.000,00 ', ' 13.960,00', ' 10.917,43  ', '11.904,04', ' 11.044,65']
];

var serie36 = [
    ['1.000,00 	', ' 1.480,00 	', '1.122,99 	 ', '1.257,70 ', ' 1.140,69 '],
    ['2.500,00 	', ' 3.760,00 	', '2.807,47 	 ', '3.144,26 ', ' 2.851,70 '],
    ['5.000,00 	', ' 7.640,00 	', '5.615,05 	 ', '6.288,52 ', ' 5.703,47 '],
    ['10.000,00 ', ' 15.760,00', ' 11.230,33  ', '12.576,99', ' 11.406,84']
];

//default
var vlrInvest = serie03[0][0];
var vlrMatch = serie03[0][1];
var vlrBank1 = serie03[0][2];
var vlrBank2 = serie03[0][3];
var vlrBank3 = serie03[0][4];
var vlrMonth = jQuery('#range-month').val();
jQuery('#vlr').text(vlrInvest);
jQuery('#number-month').text(month[0]);
jQuery('.bank1 #rescue').text(vlrBank1);
jQuery('.bank2 #rescue').text(vlrBank2);
jQuery('.bank3 #rescue').text(vlrBank3);
jQuery('.bankMatch #rescue').text(vlrMatch);
jQuery('.grafic-view1').css('height', percent2[0]);
jQuery('.grafic-view2').css('height', percent2[1]);
jQuery('.grafic-view3').css('height', percent2[2]);
jQuery('.grafic-view4').css('height', percent[3]);
//mobile
jQuery('.grafic-right-view1').css('width', percent2[0]);
jQuery('.grafic-right-view2').css('width', percent2[1]);
jQuery('.grafic-right-view3').css('width', percent2[2]);
jQuery('.grafic-right-view4').css('width', percent[3]);

jQuery("#range-vlr").change(function() {
    var rangeMonth = jQuery('#range-month').val();
    var rangeVlr = jQuery('#range-vlr').val();
    var codeInvest = rangeVlr + rangeMonth;
    console.log(codeInvest);
    switch (codeInvest) {
        case '00':
            var vlrInvest = serie03[0][0];
            var vlrMatch = serie03[0][1];
            var vlrBank1 = serie03[0][2];
            var vlrBank2 = serie03[0][3];
            var vlrBank3 = serie03[0][4];
            var vlrMonth = rangeMonth;
            jQuery('#vlr').text(vlrInvest);
            jQuery('#number-month').text('181');
            jQuery('.bank1 #rescue').text(vlrBank1);
            jQuery('.bank2 #rescue').text(vlrBank2);
            jQuery('.bank3 #rescue').text(vlrBank3);
            jQuery('.bankMatch #rescue').text(vlrMatch);
            jQuery('.grafic-view1').css('height', percent2[0]);
            jQuery('.grafic-view2').css('height', percent2[1]);
            jQuery('.grafic-view3').css('height', percent2[2]);
            jQuery('.grafic-view4').css('height', percent[3]);
            //mobile
            jQuery('.grafic-right-view1').css('width', percent2[0]);
            jQuery('.grafic-right-view2').css('width', percent2[1]);
            jQuery('.grafic-right-view3').css('width', percent2[2]);
            jQuery('.grafic-right-view4').css('width', percent[3]);
            break;
        case '10':
            var vlrInvest = serie03[1][0];
            var vlrMatch = serie03[1][1];
            var vlrBank1 = serie03[1][2];
            var vlrBank2 = serie03[1][3];
            var vlrBank3 = serie03[1][4];
            var vlrMonth = rangeMonth;
            jQuery('#vlr').text(vlrInvest);
            jQuery('#number-month').text('181');
            jQuery('.bank1 #rescue').text(vlrBank1);
            jQuery('.bank2 #rescue').text(vlrBank2);
            jQuery('.bank3 #rescue').text(vlrBank3);
            jQuery('.bankMatch #rescue').text(vlrMatch);
            jQuery('.grafic-view1').css('height', percent2[0]);
            jQuery('.grafic-view2').css('height', percent2[1]);
            jQuery('.grafic-view3').css('height', percent2[2]);
            jQuery('.grafic-view4').css('height', percent[4]);
            //mobile
            jQuery('.grafic-right-view1').css('width', percent2[1]);
            jQuery('.grafic-right-view2').css('width', percent2[2]);
            jQuery('.grafic-right-view3').css('width', percent2[3]);
            jQuery('.grafic-right-view4').css('width', percent[4]);
            break;
        case '20':
            var vlrInvest = serie03[2][0];
            var vlrMatch = serie03[2][1];
            var vlrBank1 = serie03[2][2];
            var vlrBank2 = serie03[2][3];
            var vlrBank3 = serie03[2][4];
            var vlrMonth = rangeMonth;
            jQuery('#vlr').text(vlrInvest);
            jQuery('#number-month').text('181');
            jQuery('.bank1 #rescue').text(vlrBank1);
            jQuery('.bank2 #rescue').text(vlrBank2);
            jQuery('.bank3 #rescue').text(vlrBank3);
            jQuery('.bankMatch #rescue').text(vlrMatch);
            jQuery('.grafic-view1').css('height', percent2[0]);
            jQuery('.grafic-view2').css('height', percent2[1]);
            jQuery('.grafic-view3').css('height', percent2[2]);
            jQuery('.grafic-view4').css('height', percent[5]);
            //mobile
            jQuery('.grafic-right-view1').css('width', percent2[2]);
            jQuery('.grafic-right-view2').css('width', percent2[3]);
            jQuery('.grafic-right-view3').css('width', percent2[4]);
            jQuery('.grafic-right-view4').css('width', percent[5]);
            break;
        case '30':
            var vlrInvest = serie03[3][0];
            var vlrMatch = serie03[3][1];
            var vlrBank1 = serie03[3][2];
            var vlrBank2 = serie03[3][3];
            var vlrBank3 = serie03[3][4];
            var vlrMonth = rangeMonth;
            jQuery('#vlr').text(vlrInvest);
            jQuery('#number-month').text('181');
            jQuery('.bank1 #rescue').text(vlrBank1);
            jQuery('.bank2 #rescue').text(vlrBank2);
            jQuery('.bank3 #rescue').text(vlrBank3);
            jQuery('.bankMatch #rescue').text(vlrMatch);
            jQuery('.grafic-view1').css('height', percent2[0]);
            jQuery('.grafic-view2').css('height', percent2[1]);
            jQuery('.grafic-view3').css('height', percent2[2]);
            jQuery('.grafic-view4').css('height', percent[6]);
            //mobile
            jQuery('.grafic-right-view1').css('width', percent2[2]);
            jQuery('.grafic-right-view2').css('width', percent2[3]);
            jQuery('.grafic-right-view3').css('width', percent2[4]);
            jQuery('.grafic-right-view4').css('width', percent[6]);
            break;

        case '01':
            var vlrInvest = serie06[0][0];
            var vlrMatch = serie06[0][1];
            var vlrBank1 = serie06[0][2];
            var vlrBank2 = serie06[0][3];
            var vlrBank3 = serie06[0][4];
            var vlrMonth = rangeMonth;
            jQuery('#vlr').text(vlrInvest);
            jQuery('#number-month').text('365')
            jQuery('.bank1 #rescue').text(vlrBank1);
            jQuery('.bank2 #rescue').text(vlrBank2);
            jQuery('.bank3 #rescue').text(vlrBank3);
            jQuery('.bankMatch #rescue').text(vlrMatch);
            jQuery('.grafic-view1').css('height', percent2[0]);
            jQuery('.grafic-view2').css('height', percent2[1]);
            jQuery('.grafic-view3').css('height', percent2[2]);
            jQuery('.grafic-view4').css('height', percent[7]);
            //mobile
            jQuery('.grafic-right-view1').css('width', percent2[2]);
            jQuery('.grafic-right-view2').css('width', percent2[3]);
            jQuery('.grafic-right-view3').css('width', percent2[4]);
            jQuery('.grafic-right-view4').css('width', percent[7]);
            break;
        case '11':
            var vlrInvest = serie06[1][0];
            var vlrMatch = serie06[1][1];
            var vlrBank1 = serie06[1][2];
            var vlrBank2 = serie06[1][3];
            var vlrBank3 = serie06[1][4];
            var vlrMonth = rangeMonth;
            jQuery('#vlr').text(vlrInvest);
            jQuery('#number-month').text('365')
            jQuery('.bank1 #rescue').text(vlrBank1);
            jQuery('.bank2 #rescue').text(vlrBank2);
            jQuery('.bank3 #rescue').text(vlrBank3);
            jQuery('.bankMatch #rescue').text(vlrMatch);
            jQuery('.grafic-view1').css('height', percent2[0]);
            jQuery('.grafic-view2').css('height', percent2[1]);
            jQuery('.grafic-view3').css('height', percent2[2]);
            jQuery('.grafic-view4').css('height', percent[8]);
            //mobile
            jQuery('.grafic-right-view1').css('width', percent2[2]);
            jQuery('.grafic-right-view2').css('width', percent2[3]);
            jQuery('.grafic-right-view3').css('width', percent2[4]);
            jQuery('.grafic-right-view4').css('width', percent[8]);
            break;
        case '21':
            var vlrInvest = serie06[2][0];
            var vlrMatch = serie06[2][1];
            var vlrBank1 = serie06[2][2];
            var vlrBank2 = serie06[2][3];
            var vlrBank3 = serie06[2][4];
            var vlrMonth = rangeMonth;
            jQuery('#vlr').text(vlrInvest);
            jQuery('#number-month').text('365')
            jQuery('.bank1 #rescue').text(vlrBank1);
            jQuery('.bank2 #rescue').text(vlrBank2);
            jQuery('.bank3 #rescue').text(vlrBank3);
            jQuery('.bankMatch #rescue').text(vlrMatch);
            jQuery('.grafic-view1').css('height', percent2[0]);
            jQuery('.grafic-view2').css('height', percent2[1]);
            jQuery('.grafic-view3').css('height', percent2[2]);
            jQuery('.grafic-view4').css('height', percent[9]);
            //mobile
            jQuery('.grafic-right-view1').css('width', percent2[2]);
            jQuery('.grafic-right-view2').css('width', percent2[3]);
            jQuery('.grafic-right-view3').css('width', percent2[4]);
            jQuery('.grafic-right-view4').css('width', percent[9]);
            break;
        case '31':
            var vlrInvest = serie06[3][0];
            var vlrMatch = serie06[3][1];
            var vlrBank1 = serie06[3][2];
            var vlrBank2 = serie06[3][3];
            var vlrBank3 = serie06[3][4];
            var vlrMonth = rangeMonth;
            jQuery('#vlr').text(vlrInvest);
            jQuery('#number-month').text('365')
            jQuery('.bank1 #rescue').text(vlrBank1);
            jQuery('.bank2 #rescue').text(vlrBank2);
            jQuery('.bank3 #rescue').text(vlrBank3);
            jQuery('.bankMatch #rescue').text(vlrMatch);
            jQuery('.grafic-view1').css('height', percent2[0]);
            jQuery('.grafic-view2').css('height', percent2[1]);
            jQuery('.grafic-view3').css('height', percent2[2]);
            jQuery('.grafic-view4').css('height', percent[10]);
            //mobile
            jQuery('.grafic-right-view1').css('width', percent2[2]);
            jQuery('.grafic-right-view2').css('width', percent2[3]);
            jQuery('.grafic-right-view3').css('width', percent2[4]);
            jQuery('.grafic-right-view4').css('width', percent[10]);
            break;
        case '02':
            var vlrInvest = serie12[0][0];
            var vlrMatch = serie12[0][1];
            var vlrBank1 = serie12[0][2];
            var vlrBank2 = serie12[0][3];
            var vlrBank3 = serie12[0][4];
            var vlrMonth = rangeMonth;
            jQuery('#vlr').text(vlrInvest);
            jQuery('#number-month').text('730')
            jQuery('.bank1 #rescue').text(vlrBank1);
            jQuery('.bank2 #rescue').text(vlrBank2);
            jQuery('.bank3 #rescue').text(vlrBank3);
            jQuery('.bankMatch #rescue').text(vlrMatch);
            jQuery('.grafic-view1').css('height', percent2[1]);
            jQuery('.grafic-view2').css('height', percent2[2]);
            jQuery('.grafic-view3').css('height', percent2[3]);
            jQuery('.grafic-view4').css('height', percent[11]);
            //mobile
            jQuery('.grafic-right-view1').css('width', percent2[5]);
            jQuery('.grafic-right-view2').css('width', percent2[6]);
            jQuery('.grafic-right-view3').css('width', percent2[7]);
            jQuery('.grafic-right-view4').css('width', percent[11]);
            break;
        case '12':
            var vlrInvest = serie12[1][0];
            var vlrMatch = serie12[1][1];
            var vlrBank1 = serie12[1][2];
            var vlrBank2 = serie12[1][3];
            var vlrBank3 = serie12[1][4];
            var vlrMonth = rangeMonth;
            jQuery('#vlr').text(vlrInvest);
            jQuery('#number-month').text('730')
            jQuery('.bank1 #rescue').text(vlrBank1);
            jQuery('.bank2 #rescue').text(vlrBank2);
            jQuery('.bank3 #rescue').text(vlrBank3);
            jQuery('.bankMatch #rescue').text(vlrMatch);
            jQuery('.grafic-view1').css('height', percent2[1]);
            jQuery('.grafic-view2').css('height', percent2[2]);
            jQuery('.grafic-view3').css('height', percent2[3]);
            jQuery('.grafic-view4').css('height', percent[12]);
            //mobile
            jQuery('.grafic-right-view1').css('width', percent2[5]);
            jQuery('.grafic-right-view2').css('width', percent2[6]);
            jQuery('.grafic-right-view3').css('width', percent2[7]);
            jQuery('.grafic-right-view4').css('width', percent[12]);
            break;
        case '22':
            var vlrInvest = serie12[2][0];
            var vlrMatch = serie12[2][1];
            var vlrBank1 = serie12[2][2];
            var vlrBank2 = serie12[2][3];
            var vlrBank3 = serie12[2][4];
            var vlrMonth = rangeMonth;
            jQuery('#vlr').text(vlrInvest);
            jQuery('#number-month').text('730')
            jQuery('.bank1 #rescue').text(vlrBank1);
            jQuery('.bank2 #rescue').text(vlrBank2);
            jQuery('.bank3 #rescue').text(vlrBank3);
            jQuery('.bankMatch #rescue').text(vlrMatch);
            jQuery('.grafic-view1').css('height', percent2[1]);
            jQuery('.grafic-view2').css('height', percent2[2]);
            jQuery('.grafic-view3').css('height', percent2[3]);
            jQuery('.grafic-view4').css('height', percent[13]);
            //mobile
            jQuery('.grafic-right-view1').css('width', percent2[6]);
            jQuery('.grafic-right-view2').css('width', percent2[7]);
            jQuery('.grafic-right-view3').css('width', percent2[8]);
            jQuery('.grafic-right-view4').css('width', percent[13]);
            break;
        case '32':
            var vlrInvest = serie12[3][0];
            var vlrMatch = serie12[3][1];
            var vlrBank1 = serie12[3][2];
            var vlrBank2 = serie12[3][3];
            var vlrBank3 = serie12[3][4];
            var vlrMonth = rangeMonth;
            jQuery('#vlr').text(vlrInvest);
            jQuery('#number-month').text('730')
            jQuery('.bank1 #rescue').text(vlrBank1);
            jQuery('.bank2 #rescue').text(vlrBank2);
            jQuery('.bank3 #rescue').text(vlrBank3);
            jQuery('.bankMatch #rescue').text(vlrMatch);
            jQuery('.grafic-view1').css('height', percent2[1]);
            jQuery('.grafic-view2').css('height', percent2[2]);
            jQuery('.grafic-view3').css('height', percent2[3]);
            jQuery('.grafic-view4').css('height', percent[14]);
            //mobile
            jQuery('.grafic-right-view1').css('width', percent2[6]);
            jQuery('.grafic-right-view2').css('width', percent2[7]);
            jQuery('.grafic-right-view3').css('width', percent2[8]);
            jQuery('.grafic-right-view4').css('width', percent[14]);
            break;
        case '03':
            var vlrInvest = serie24[0][0];
            var vlrMatch = serie24[0][1];
            var vlrBank1 = serie24[0][2];
            var vlrBank2 = serie24[0][3];
            var vlrBank3 = serie24[0][4];
            var vlrMonth = rangeMonth;
            jQuery('#vlr').text(vlrInvest);
            jQuery('#number-month').text('1095')
            jQuery('.bank1 #rescue').text(vlrBank1);
            jQuery('.bank2 #rescue').text(vlrBank2);
            jQuery('.bank3 #rescue').text(vlrBank3);
            jQuery('.bankMatch #rescue').text(vlrMatch);
            jQuery('.grafic-view1').css('height', percent2[2]);
            jQuery('.grafic-view2').css('height', percent2[3]);
            jQuery('.grafic-view3').css('height', percent2[4]);
            jQuery('.grafic-view4').css('height', percent[15]);
            //mobile
            jQuery('.grafic-right-view1').css('width', percent2[6]);
            jQuery('.grafic-right-view2').css('width', percent2[7]);
            jQuery('.grafic-right-view3').css('width', percent2[8]);
            jQuery('.grafic-right-view4').css('width', percent[15]);
            break;
        case '13':
            var vlrInvest = serie24[1][0];
            var vlrMatch = serie24[1][1];
            var vlrBank1 = serie24[1][2];
            var vlrBank2 = serie24[1][3];
            var vlrBank3 = serie24[1][4];
            var vlrMonth = rangeMonth;
            jQuery('#vlr').text(vlrInvest);
            jQuery('#number-month').text('1095')
            jQuery('.bank1 #rescue').text(vlrBank1);
            jQuery('.bank2 #rescue').text(vlrBank2);
            jQuery('.bank3 #rescue').text(vlrBank3);
            jQuery('.bankMatch #rescue').text(vlrMatch);
            jQuery('.grafic-view1').css('height', percent2[2]);
            jQuery('.grafic-view2').css('height', percent2[3]);
            jQuery('.grafic-view3').css('height', percent2[4]);
            jQuery('.grafic-view4').css('height', percent[16]);
            //mobile
            jQuery('.grafic-right-view1').css('width', percent2[7]);
            jQuery('.grafic-right-view2').css('width', percent2[8]);
            jQuery('.grafic-right-view3').css('width', percent2[9]);
            jQuery('.grafic-right-view4').css('width', percent[16]);
            break;
        case '23':
            var vlrInvest = serie24[2][0];
            var vlrMatch = serie24[2][1];
            var vlrBank1 = serie24[2][2];
            var vlrBank2 = serie24[2][3];
            var vlrBank3 = serie24[2][4];
            var vlrMonth = rangeMonth;
            jQuery('#vlr').text(vlrInvest);
            jQuery('#number-month').text('1095')
            jQuery('.bank1 #rescue').text(vlrBank1);
            jQuery('.bank2 #rescue').text(vlrBank2);
            jQuery('.bank3 #rescue').text(vlrBank3);
            jQuery('.bankMatch #rescue').text(vlrMatch);
            jQuery('.grafic-view1').css('height', percent2[2]);
            jQuery('.grafic-view2').css('height', percent2[3]);
            jQuery('.grafic-view3').css('height', percent2[4]);
            jQuery('.grafic-view4').css('height', percent[17]);
            //mobile
            jQuery('.grafic-right-view1').css('width', percent2[7]);
            jQuery('.grafic-right-view2').css('width', percent2[8]);
            jQuery('.grafic-right-view3').css('width', percent2[9]);
            jQuery('.grafic-right-view4').css('width', percent[17]);
            break;
        case '33':
            var vlrInvest = serie24[3][0];
            var vlrMatch = serie24[3][1];
            var vlrBank1 = serie24[3][2];
            var vlrBank2 = serie24[3][3];
            var vlrBank3 = serie24[3][4];
            var vlrMonth = rangeMonth;
            jQuery('#vlr').text(vlrInvest);
            jQuery('#number-month').text('1095')
            jQuery('.bank1 #rescue').text(vlrBank1);
            jQuery('.bank2 #rescue').text(vlrBank2);
            jQuery('.bank3 #rescue').text(vlrBank3);
            jQuery('.bankMatch #rescue').text(vlrMatch);
            jQuery('.grafic-view1').css('height', percent2[2]);
            jQuery('.grafic-view2').css('height', percent2[3]);
            jQuery('.grafic-view3').css('height', percent2[4]);
            jQuery('.grafic-view4').css('height', percent[18]);
            //mobile
            jQuery('.grafic-right-view1').css('width', percent2[8]);
            jQuery('.grafic-right-view2').css('width', percent2[9]);
            jQuery('.grafic-right-view3').css('width', percent2[10]);
            jQuery('.grafic-right-view4').css('width', percent[18]);
            break;

        case '04':
            var vlrInvest = serie36[0][0];
            var vlrMatch = serie36[0][1];
            var vlrBank1 = serie36[0][2];
            var vlrBank2 = serie36[0][3];
            var vlrBank3 = serie36[0][4];
            var vlrMonth = rangeMonth;
            jQuery('#vlr').text(vlrInvest);
            jQuery('#number-month').text('1460');
            jQuery('.bank1 #rescue').text(vlrBank1);
            jQuery('.bank2 #rescue').text(vlrBank2);
            jQuery('.bank3 #rescue').text(vlrBank3);
            jQuery('.bankMatch #rescue').text(vlrMatch);
            jQuery('.grafic-view1').css('height', percent2[3]);
            jQuery('.grafic-view2').css('height', percent2[4]);
            jQuery('.grafic-view3').css('height', percent2[6]);
            jQuery('.grafic-view4').css('height', percent[19]);
            //mobile
            jQuery('.grafic-right-view1').css('width', percent2[8]);
            jQuery('.grafic-right-view2').css('width', percent2[9]);
            jQuery('.grafic-right-view3').css('width', percent2[10]);
            jQuery('.grafic-right-view4').css('width', percent[19]);
            break;
        case '14':
            var vlrInvest = serie36[1][0];
            var vlrMatch = serie36[1][1];
            var vlrBank1 = serie36[1][2];
            var vlrBank2 = serie36[1][3];
            var vlrBank3 = serie36[1][4];
            var vlrMonth = rangeMonth;
            jQuery('#vlr').text(vlrInvest);
            jQuery('#number-month').text('1460');
            jQuery('.bank1 #rescue').text(vlrBank1);
            jQuery('.bank2 #rescue').text(vlrBank2);
            jQuery('.bank3 #rescue').text(vlrBank3);
            jQuery('.bankMatch #rescue').text(vlrMatch);
            jQuery('.grafic-view1').css('height', percent2[3]);
            jQuery('.grafic-view2').css('height', percent2[4]);
            jQuery('.grafic-view3').css('height', percent2[6]);
            jQuery('.grafic-view4').css('height', percent[20]);
            //mobile
            jQuery('.grafic-right-view1').css('width', percent2[9]);
            jQuery('.grafic-right-view2').css('width', percent2[10]);
            jQuery('.grafic-right-view3').css('width', percent2[11]);
            jQuery('.grafic-right-view4').css('width', percent[20]);
            break;
        case '24':
            var vlrInvest = serie36[2][0];
            var vlrMatch = serie36[2][1];
            var vlrBank1 = serie36[2][2];
            var vlrBank2 = serie36[2][3];
            var vlrBank3 = serie36[2][4];
            var vlrMonth = rangeMonth;
            jQuery('#vlr').text(vlrInvest);
            jQuery('#number-month').text('1460');
            jQuery('.bank1 #rescue').text(vlrBank1);
            jQuery('.bank2 #rescue').text(vlrBank2);
            jQuery('.bank3 #rescue').text(vlrBank3);
            jQuery('.bankMatch #rescue').text(vlrMatch);
            jQuery('.grafic-view1').css('height', percent2[3]);
            jQuery('.grafic-view2').css('height', percent2[4]);
            jQuery('.grafic-view3').css('height', percent2[6]);
            jQuery('.grafic-view4').css('height', percent[21]);
            //mobile
            jQuery('.grafic-right-view1').css('width', percent2[9]);
            jQuery('.grafic-right-view2').css('width', percent2[10]);
            jQuery('.grafic-right-view3').css('width', percent2[11]);
            jQuery('.grafic-right-view4').css('width', percent[21]);
            break;
        case '34':
            var vlrInvest = serie36[3][0];
            var vlrMatch = serie36[3][1];
            var vlrBank1 = serie36[3][2];
            var vlrBank2 = serie36[3][3];
            var vlrBank3 = serie36[3][4];
            var vlrMonth = rangeMonth;
            jQuery('#vlr').text(vlrInvest);
            jQuery('#number-month').text('1460');
            jQuery('.bank1 #rescue').text(vlrBank1);
            jQuery('.bank2 #rescue').text(vlrBank2);
            jQuery('.bank3 #rescue').text(vlrBank3);
            jQuery('.bankMatch #rescue').text(vlrMatch);
            jQuery('.grafic-view1').css('height', percent2[3]);
            jQuery('.grafic-view2').css('height', percent2[4]);
            jQuery('.grafic-view3').css('height', percent2[6]);
            jQuery('.grafic-view4').css('height', percent[22]);
            //mobile
            jQuery('.grafic-right-view1').css('width', percent2[10]);
            jQuery('.grafic-right-view2').css('width', percent2[11]);
            jQuery('.grafic-right-view3').css('width', percent2[12]);
            jQuery('.grafic-right-view4').css('width', percent[22]);
            break;
        default:
            break;
    }
});
jQuery("#range-month").change(function() {
    var rangeMonth = jQuery('#range-month').val();
    var rangeVlr = jQuery('#range-vlr').val();
    var codeInvest = rangeVlr + rangeMonth;
    console.log(codeInvest);
    switch (codeInvest) {
        case '00':
            var vlrInvest = serie03[0][0];
            var vlrMatch = serie03[0][1];
            var vlrBank1 = serie03[0][2];
            var vlrBank2 = serie03[0][3];
            var vlrBank3 = serie03[0][4];
            var vlrMonth = rangeMonth;
            jQuery('#vlr').text(vlrInvest);
            jQuery('#number-month').text('181');
            jQuery('.bank1 #rescue').text(vlrBank1);
            jQuery('.bank2 #rescue').text(vlrBank2);
            jQuery('.bank3 #rescue').text(vlrBank3);
            jQuery('.bankMatch #rescue').text(vlrMatch);
            jQuery('.grafic-view1').css('height', percent2[0]);
            jQuery('.grafic-view2').css('height', percent2[1]);
            jQuery('.grafic-view3').css('height', percent2[2]);
            jQuery('.grafic-view4').css('height', percent[3]);
            //mobile
            jQuery('.grafic-right-view1').css('width', percent2[0]);
            jQuery('.grafic-right-view2').css('width', percent2[1]);
            jQuery('.grafic-right-view3').css('width', percent2[2]);
            jQuery('.grafic-right-view4').css('width', percent[3]);
            break;
        case '10':
            var vlrInvest = serie03[1][0];
            var vlrMatch = serie03[1][1];
            var vlrBank1 = serie03[1][2];
            var vlrBank2 = serie03[1][3];
            var vlrBank3 = serie03[1][4];
            var vlrMonth = rangeMonth;
            jQuery('#vlr').text(vlrInvest);
            jQuery('#number-month').text('181');
            jQuery('.bank1 #rescue').text(vlrBank1);
            jQuery('.bank2 #rescue').text(vlrBank2);
            jQuery('.bank3 #rescue').text(vlrBank3);
            jQuery('.bankMatch #rescue').text(vlrMatch);
            jQuery('.grafic-view1').css('height', percent2[0]);
            jQuery('.grafic-view2').css('height', percent2[1]);
            jQuery('.grafic-view3').css('height', percent2[2]);
            jQuery('.grafic-view4').css('height', percent[4]);
            //mobile
            jQuery('.grafic-right-view1').css('width', percent2[1]);
            jQuery('.grafic-right-view2').css('width', percent2[2]);
            jQuery('.grafic-right-view3').css('width', percent2[3]);
            jQuery('.grafic-right-view4').css('width', percent[4]);
            break;
        case '20':
            var vlrInvest = serie03[2][0];
            var vlrMatch = serie03[2][1];
            var vlrBank1 = serie03[2][2];
            var vlrBank2 = serie03[2][3];
            var vlrBank3 = serie03[2][4];
            var vlrMonth = rangeMonth;
            jQuery('#vlr').text(vlrInvest);
            jQuery('#number-month').text('181');
            jQuery('.bank1 #rescue').text(vlrBank1);
            jQuery('.bank2 #rescue').text(vlrBank2);
            jQuery('.bank3 #rescue').text(vlrBank3);
            jQuery('.bankMatch #rescue').text(vlrMatch);
            jQuery('.grafic-view1').css('height', percent2[0]);
            jQuery('.grafic-view2').css('height', percent2[1]);
            jQuery('.grafic-view3').css('height', percent2[2]);
            jQuery('.grafic-view4').css('height', percent[5]);
            //mobile
            jQuery('.grafic-right-view1').css('width', percent2[2]);
            jQuery('.grafic-right-view2').css('width', percent2[3]);
            jQuery('.grafic-right-view3').css('width', percent2[4]);
            jQuery('.grafic-right-view4').css('width', percent[5]);
            break;
        case '30':
            var vlrInvest = serie03[3][0];
            var vlrMatch = serie03[3][1];
            var vlrBank1 = serie03[3][2];
            var vlrBank2 = serie03[3][3];
            var vlrBank3 = serie03[3][4];
            var vlrMonth = rangeMonth;
            jQuery('#vlr').text(vlrInvest);
            jQuery('#number-month').text('181');
            jQuery('.bank1 #rescue').text(vlrBank1);
            jQuery('.bank2 #rescue').text(vlrBank2);
            jQuery('.bank3 #rescue').text(vlrBank3);
            jQuery('.bankMatch #rescue').text(vlrMatch);
            jQuery('.grafic-view1').css('height', percent2[0]);
            jQuery('.grafic-view2').css('height', percent2[1]);
            jQuery('.grafic-view3').css('height', percent2[2]);
            jQuery('.grafic-view4').css('height', percent[6]);
            //mobile
            jQuery('.grafic-right-view1').css('width', percent2[2]);
            jQuery('.grafic-right-view2').css('width', percent2[3]);
            jQuery('.grafic-right-view3').css('width', percent2[4]);
            jQuery('.grafic-right-view4').css('width', percent[6]);
            break;

        case '01':
            var vlrInvest = serie06[0][0];
            var vlrMatch = serie06[0][1];
            var vlrBank1 = serie06[0][2];
            var vlrBank2 = serie06[0][3];
            var vlrBank3 = serie06[0][4];
            var vlrMonth = rangeMonth;
            jQuery('#vlr').text(vlrInvest);
            jQuery('#number-month').text('365')
            jQuery('.bank1 #rescue').text(vlrBank1);
            jQuery('.bank2 #rescue').text(vlrBank2);
            jQuery('.bank3 #rescue').text(vlrBank3);
            jQuery('.bankMatch #rescue').text(vlrMatch);
            jQuery('.grafic-view1').css('height', percent2[0]);
            jQuery('.grafic-view2').css('height', percent2[1]);
            jQuery('.grafic-view3').css('height', percent2[2]);
            jQuery('.grafic-view4').css('height', percent[7]);
            //mobile
            jQuery('.grafic-right-view1').css('width', percent2[2]);
            jQuery('.grafic-right-view2').css('width', percent2[3]);
            jQuery('.grafic-right-view3').css('width', percent2[4]);
            jQuery('.grafic-right-view4').css('width', percent[7]);
            break;
        case '11':
            var vlrInvest = serie06[1][0];
            var vlrMatch = serie06[1][1];
            var vlrBank1 = serie06[1][2];
            var vlrBank2 = serie06[1][3];
            var vlrBank3 = serie06[1][4];
            var vlrMonth = rangeMonth;
            jQuery('#vlr').text(vlrInvest);
            jQuery('#number-month').text('365')
            jQuery('.bank1 #rescue').text(vlrBank1);
            jQuery('.bank2 #rescue').text(vlrBank2);
            jQuery('.bank3 #rescue').text(vlrBank3);
            jQuery('.bankMatch #rescue').text(vlrMatch);
            jQuery('.grafic-view1').css('height', percent2[0]);
            jQuery('.grafic-view2').css('height', percent2[1]);
            jQuery('.grafic-view3').css('height', percent2[2]);
            jQuery('.grafic-view4').css('height', percent[8]);
            //mobile
            jQuery('.grafic-right-view1').css('width', percent2[2]);
            jQuery('.grafic-right-view2').css('width', percent2[3]);
            jQuery('.grafic-right-view3').css('width', percent2[4]);
            jQuery('.grafic-right-view4').css('width', percent[8]);
            break;
        case '21':
            var vlrInvest = serie06[2][0];
            var vlrMatch = serie06[2][1];
            var vlrBank1 = serie06[2][2];
            var vlrBank2 = serie06[2][3];
            var vlrBank3 = serie06[2][4];
            var vlrMonth = rangeMonth;
            jQuery('#vlr').text(vlrInvest);
            jQuery('#number-month').text('365')
            jQuery('.bank1 #rescue').text(vlrBank1);
            jQuery('.bank2 #rescue').text(vlrBank2);
            jQuery('.bank3 #rescue').text(vlrBank3);
            jQuery('.bankMatch #rescue').text(vlrMatch);
            jQuery('.grafic-view1').css('height', percent2[0]);
            jQuery('.grafic-view2').css('height', percent2[1]);
            jQuery('.grafic-view3').css('height', percent2[2]);
            jQuery('.grafic-view4').css('height', percent[9]);
            //mobile
            jQuery('.grafic-right-view1').css('width', percent2[2]);
            jQuery('.grafic-right-view2').css('width', percent2[3]);
            jQuery('.grafic-right-view3').css('width', percent2[4]);
            jQuery('.grafic-right-view4').css('width', percent[9]);
            break;
        case '31':
            var vlrInvest = serie06[3][0];
            var vlrMatch = serie06[3][1];
            var vlrBank1 = serie06[3][2];
            var vlrBank2 = serie06[3][3];
            var vlrBank3 = serie06[3][4];
            var vlrMonth = rangeMonth;
            jQuery('#vlr').text(vlrInvest);
            jQuery('#number-month').text('365')
            jQuery('.bank1 #rescue').text(vlrBank1);
            jQuery('.bank2 #rescue').text(vlrBank2);
            jQuery('.bank3 #rescue').text(vlrBank3);
            jQuery('.bankMatch #rescue').text(vlrMatch);
            jQuery('.grafic-view1').css('height', percent2[0]);
            jQuery('.grafic-view2').css('height', percent2[1]);
            jQuery('.grafic-view3').css('height', percent2[2]);
            jQuery('.grafic-view4').css('height', percent[10]);
            //mobile
            jQuery('.grafic-right-view1').css('width', percent2[2]);
            jQuery('.grafic-right-view2').css('width', percent2[3]);
            jQuery('.grafic-right-view3').css('width', percent2[4]);
            jQuery('.grafic-right-view4').css('width', percent[10]);
            break;
        case '02':
            var vlrInvest = serie12[0][0];
            var vlrMatch = serie12[0][1];
            var vlrBank1 = serie12[0][2];
            var vlrBank2 = serie12[0][3];
            var vlrBank3 = serie12[0][4];
            var vlrMonth = rangeMonth;
            jQuery('#vlr').text(vlrInvest);
            jQuery('#number-month').text('730')
            jQuery('.bank1 #rescue').text(vlrBank1);
            jQuery('.bank2 #rescue').text(vlrBank2);
            jQuery('.bank3 #rescue').text(vlrBank3);
            jQuery('.bankMatch #rescue').text(vlrMatch);
            jQuery('.grafic-view1').css('height', percent2[1]);
            jQuery('.grafic-view2').css('height', percent2[2]);
            jQuery('.grafic-view3').css('height', percent2[3]);
            jQuery('.grafic-view4').css('height', percent[11]);
            //mobile
            jQuery('.grafic-right-view1').css('width', percent2[5]);
            jQuery('.grafic-right-view2').css('width', percent2[6]);
            jQuery('.grafic-right-view3').css('width', percent2[7]);
            jQuery('.grafic-right-view4').css('width', percent[11]);
            break;
        case '12':
            var vlrInvest = serie12[1][0];
            var vlrMatch = serie12[1][1];
            var vlrBank1 = serie12[1][2];
            var vlrBank2 = serie12[1][3];
            var vlrBank3 = serie12[1][4];
            var vlrMonth = rangeMonth;
            jQuery('#vlr').text(vlrInvest);
            jQuery('#number-month').text('730')
            jQuery('.bank1 #rescue').text(vlrBank1);
            jQuery('.bank2 #rescue').text(vlrBank2);
            jQuery('.bank3 #rescue').text(vlrBank3);
            jQuery('.bankMatch #rescue').text(vlrMatch);
            jQuery('.grafic-view1').css('height', percent2[1]);
            jQuery('.grafic-view2').css('height', percent2[2]);
            jQuery('.grafic-view3').css('height', percent2[3]);
            jQuery('.grafic-view4').css('height', percent[12]);
            //mobile
            jQuery('.grafic-right-view1').css('width', percent2[5]);
            jQuery('.grafic-right-view2').css('width', percent2[6]);
            jQuery('.grafic-right-view3').css('width', percent2[7]);
            jQuery('.grafic-right-view4').css('width', percent[12]);
            break;
        case '22':
            var vlrInvest = serie12[2][0];
            var vlrMatch = serie12[2][1];
            var vlrBank1 = serie12[2][2];
            var vlrBank2 = serie12[2][3];
            var vlrBank3 = serie12[2][4];
            var vlrMonth = rangeMonth;
            jQuery('#vlr').text(vlrInvest);
            jQuery('#number-month').text('730')
            jQuery('.bank1 #rescue').text(vlrBank1);
            jQuery('.bank2 #rescue').text(vlrBank2);
            jQuery('.bank3 #rescue').text(vlrBank3);
            jQuery('.bankMatch #rescue').text(vlrMatch);
            jQuery('.grafic-view1').css('height', percent2[1]);
            jQuery('.grafic-view2').css('height', percent2[2]);
            jQuery('.grafic-view3').css('height', percent2[3]);
            jQuery('.grafic-view4').css('height', percent[13]);
            //mobile
            jQuery('.grafic-right-view1').css('width', percent2[6]);
            jQuery('.grafic-right-view2').css('width', percent2[7]);
            jQuery('.grafic-right-view3').css('width', percent2[8]);
            jQuery('.grafic-right-view4').css('width', percent[13]);
            break;
        case '32':
            var vlrInvest = serie12[3][0];
            var vlrMatch = serie12[3][1];
            var vlrBank1 = serie12[3][2];
            var vlrBank2 = serie12[3][3];
            var vlrBank3 = serie12[3][4];
            var vlrMonth = rangeMonth;
            jQuery('#vlr').text(vlrInvest);
            jQuery('#number-month').text('730')
            jQuery('.bank1 #rescue').text(vlrBank1);
            jQuery('.bank2 #rescue').text(vlrBank2);
            jQuery('.bank3 #rescue').text(vlrBank3);
            jQuery('.bankMatch #rescue').text(vlrMatch);
            jQuery('.grafic-view1').css('height', percent2[1]);
            jQuery('.grafic-view2').css('height', percent2[2]);
            jQuery('.grafic-view3').css('height', percent2[3]);
            jQuery('.grafic-view4').css('height', percent[14]);
            //mobile
            jQuery('.grafic-right-view1').css('width', percent2[6]);
            jQuery('.grafic-right-view2').css('width', percent2[7]);
            jQuery('.grafic-right-view3').css('width', percent2[8]);
            jQuery('.grafic-right-view4').css('width', percent[14]);
            break;
        case '03':
            var vlrInvest = serie24[0][0];
            var vlrMatch = serie24[0][1];
            var vlrBank1 = serie24[0][2];
            var vlrBank2 = serie24[0][3];
            var vlrBank3 = serie24[0][4];
            var vlrMonth = rangeMonth;
            jQuery('#vlr').text(vlrInvest);
            jQuery('#number-month').text('1095')
            jQuery('.bank1 #rescue').text(vlrBank1);
            jQuery('.bank2 #rescue').text(vlrBank2);
            jQuery('.bank3 #rescue').text(vlrBank3);
            jQuery('.bankMatch #rescue').text(vlrMatch);
            jQuery('.grafic-view1').css('height', percent2[2]);
            jQuery('.grafic-view2').css('height', percent2[3]);
            jQuery('.grafic-view3').css('height', percent2[4]);
            jQuery('.grafic-view4').css('height', percent[15]);
            //mobile
            jQuery('.grafic-right-view1').css('width', percent2[6]);
            jQuery('.grafic-right-view2').css('width', percent2[7]);
            jQuery('.grafic-right-view3').css('width', percent2[8]);
            jQuery('.grafic-right-view4').css('width', percent[15]);
            break;
        case '13':
            var vlrInvest = serie24[1][0];
            var vlrMatch = serie24[1][1];
            var vlrBank1 = serie24[1][2];
            var vlrBank2 = serie24[1][3];
            var vlrBank3 = serie24[1][4];
            var vlrMonth = rangeMonth;
            jQuery('#vlr').text(vlrInvest);
            jQuery('#number-month').text('1095')
            jQuery('.bank1 #rescue').text(vlrBank1);
            jQuery('.bank2 #rescue').text(vlrBank2);
            jQuery('.bank3 #rescue').text(vlrBank3);
            jQuery('.bankMatch #rescue').text(vlrMatch);
            jQuery('.grafic-view1').css('height', percent2[2]);
            jQuery('.grafic-view2').css('height', percent2[3]);
            jQuery('.grafic-view3').css('height', percent2[4]);
            jQuery('.grafic-view4').css('height', percent[16]);
            //mobile
            jQuery('.grafic-right-view1').css('width', percent2[7]);
            jQuery('.grafic-right-view2').css('width', percent2[8]);
            jQuery('.grafic-right-view3').css('width', percent2[9]);
            jQuery('.grafic-right-view4').css('width', percent[16]);
            break;
        case '23':
            var vlrInvest = serie24[2][0];
            var vlrMatch = serie24[2][1];
            var vlrBank1 = serie24[2][2];
            var vlrBank2 = serie24[2][3];
            var vlrBank3 = serie24[2][4];
            var vlrMonth = rangeMonth;
            jQuery('#vlr').text(vlrInvest);
            jQuery('#number-month').text('1095')
            jQuery('.bank1 #rescue').text(vlrBank1);
            jQuery('.bank2 #rescue').text(vlrBank2);
            jQuery('.bank3 #rescue').text(vlrBank3);
            jQuery('.bankMatch #rescue').text(vlrMatch);
            jQuery('.grafic-view1').css('height', percent2[2]);
            jQuery('.grafic-view2').css('height', percent2[3]);
            jQuery('.grafic-view3').css('height', percent2[4]);
            jQuery('.grafic-view4').css('height', percent[17]);
            //mobile
            jQuery('.grafic-right-view1').css('width', percent2[7]);
            jQuery('.grafic-right-view2').css('width', percent2[8]);
            jQuery('.grafic-right-view3').css('width', percent2[9]);
            jQuery('.grafic-right-view4').css('width', percent[17]);
            break;
        case '33':
            var vlrInvest = serie24[3][0];
            var vlrMatch = serie24[3][1];
            var vlrBank1 = serie24[3][2];
            var vlrBank2 = serie24[3][3];
            var vlrBank3 = serie24[3][4];
            var vlrMonth = rangeMonth;
            jQuery('#vlr').text(vlrInvest);
            jQuery('#number-month').text('1095')
            jQuery('.bank1 #rescue').text(vlrBank1);
            jQuery('.bank2 #rescue').text(vlrBank2);
            jQuery('.bank3 #rescue').text(vlrBank3);
            jQuery('.bankMatch #rescue').text(vlrMatch);
            jQuery('.grafic-view1').css('height', percent2[2]);
            jQuery('.grafic-view2').css('height', percent2[3]);
            jQuery('.grafic-view3').css('height', percent2[4]);
            jQuery('.grafic-view4').css('height', percent[18]);
            //mobile
            jQuery('.grafic-right-view1').css('width', percent2[8]);
            jQuery('.grafic-right-view2').css('width', percent2[9]);
            jQuery('.grafic-right-view3').css('width', percent2[10]);
            jQuery('.grafic-right-view4').css('width', percent[18]);
            break;

        case '04':
            var vlrInvest = serie36[0][0];
            var vlrMatch = serie36[0][1];
            var vlrBank1 = serie36[0][2];
            var vlrBank2 = serie36[0][3];
            var vlrBank3 = serie36[0][4];
            var vlrMonth = rangeMonth;
            jQuery('#vlr').text(vlrInvest);
            jQuery('#number-month').text('1460');
            jQuery('.bank1 #rescue').text(vlrBank1);
            jQuery('.bank2 #rescue').text(vlrBank2);
            jQuery('.bank3 #rescue').text(vlrBank3);
            jQuery('.bankMatch #rescue').text(vlrMatch);
            jQuery('.grafic-view1').css('height', percent2[3]);
            jQuery('.grafic-view2').css('height', percent2[4]);
            jQuery('.grafic-view3').css('height', percent2[6]);
            jQuery('.grafic-view4').css('height', percent[19]);
            //mobile
            jQuery('.grafic-right-view1').css('width', percent2[8]);
            jQuery('.grafic-right-view2').css('width', percent2[9]);
            jQuery('.grafic-right-view3').css('width', percent2[10]);
            jQuery('.grafic-right-view4').css('width', percent[19]);
            break;
        case '14':
            var vlrInvest = serie36[1][0];
            var vlrMatch = serie36[1][1];
            var vlrBank1 = serie36[1][2];
            var vlrBank2 = serie36[1][3];
            var vlrBank3 = serie36[1][4];
            var vlrMonth = rangeMonth;
            jQuery('#vlr').text(vlrInvest);
            jQuery('#number-month').text('1460');
            jQuery('.bank1 #rescue').text(vlrBank1);
            jQuery('.bank2 #rescue').text(vlrBank2);
            jQuery('.bank3 #rescue').text(vlrBank3);
            jQuery('.bankMatch #rescue').text(vlrMatch);
            jQuery('.grafic-view1').css('height', percent2[3]);
            jQuery('.grafic-view2').css('height', percent2[4]);
            jQuery('.grafic-view3').css('height', percent2[6]);
            jQuery('.grafic-view4').css('height', percent[20]);
            //mobile
            jQuery('.grafic-right-view1').css('width', percent2[9]);
            jQuery('.grafic-right-view2').css('width', percent2[10]);
            jQuery('.grafic-right-view3').css('width', percent2[11]);
            jQuery('.grafic-right-view4').css('width', percent[20]);
            break;
        case '24':
            var vlrInvest = serie36[2][0];
            var vlrMatch = serie36[2][1];
            var vlrBank1 = serie36[2][2];
            var vlrBank2 = serie36[2][3];
            var vlrBank3 = serie36[2][4];
            var vlrMonth = rangeMonth;
            jQuery('#vlr').text(vlrInvest);
            jQuery('#number-month').text('1460');
            jQuery('.bank1 #rescue').text(vlrBank1);
            jQuery('.bank2 #rescue').text(vlrBank2);
            jQuery('.bank3 #rescue').text(vlrBank3);
            jQuery('.bankMatch #rescue').text(vlrMatch);
            jQuery('.grafic-view1').css('height', percent2[3]);
            jQuery('.grafic-view2').css('height', percent2[4]);
            jQuery('.grafic-view3').css('height', percent2[6]);
            jQuery('.grafic-view4').css('height', percent[21]);
            //mobile
            jQuery('.grafic-right-view1').css('width', percent2[9]);
            jQuery('.grafic-right-view2').css('width', percent2[10]);
            jQuery('.grafic-right-view3').css('width', percent2[11]);
            jQuery('.grafic-right-view4').css('width', percent[21]);
            break;
        case '34':
            var vlrInvest = serie36[3][0];
            var vlrMatch = serie36[3][1];
            var vlrBank1 = serie36[3][2];
            var vlrBank2 = serie36[3][3];
            var vlrBank3 = serie36[3][4];
            var vlrMonth = rangeMonth;
            jQuery('#vlr').text(vlrInvest);
            jQuery('#number-month').text('1460');
            jQuery('.bank1 #rescue').text(vlrBank1);
            jQuery('.bank2 #rescue').text(vlrBank2);
            jQuery('.bank3 #rescue').text(vlrBank3);
            jQuery('.bankMatch #rescue').text(vlrMatch);
            jQuery('.grafic-view1').css('height', percent2[3]);
            jQuery('.grafic-view2').css('height', percent2[4]);
            jQuery('.grafic-view3').css('height', percent2[6]);
            jQuery('.grafic-view4').css('height', percent[22]);
            //mobile
            jQuery('.grafic-right-view1').css('width', percent2[10]);
            jQuery('.grafic-right-view2').css('width', percent2[11]);
            jQuery('.grafic-right-view3').css('width', percent2[12]);
            jQuery('.grafic-right-view4').css('width', percent[22]);
            break;
        default:
            break;
    }
});



//Correcao Menu Mobile
function menuMobile() {
    var stageMenu = jQuery('#first-menu').hasClass('fixed-top');
    if (stageMenu == false) {
        jQuery('#first-menu').addClass('fixed-top bg-color-denin');
        jQuery('.container.menu-page').addClass('bg-color-denin');
    } else {
        jQuery('#first-menu').removeClass('fixed-top bg-color-denin');
        jQuery('.container.menu-page').removeClass('bg-color-denin');
    }

}

//Funcao para esconder botao atualizar
jQuery('button[name="update_cart"]').hide();
jQuery(".quantity input").change(function() {
    var btnUpdateCart = jQuery('button[name="update_cart"]').is(":disabled")
    if (btnUpdateCart == true) {
        jQuery('button[name="update_cart"]').hide();
    } else {
        jQuery('button[name="update_cart"]').show();
    }
});

//Trocar o text do botão comprar
jQuery('button.single_add_to_cart_button.button.alt').text('Investir');

//Campos personalizados da categoria de produtos

jQuery(document).ready(function() {
    var titleCat = jQuery('#cat-title-current').val();
    var rentalAte = jQuery('#cat-rentalAte-current').val();
    var rentalDe = jQuery('#cat-rentalDe-current').val();

    jQuery('.titleCategory').text(titleCat);
    jQuery('.cat-rentalAte-current').text(rentalAte);
    jQuery('.cat-rentalDe-current').text(rentalDe);

});

//Retirar o MM para usar no texto de produtos
jQuery(document).ready(function() {
    var text = jQuery('.titleCategory.replaceMm').text();
    var textReplace = text.replace('MM', '');
    jQuery('.titleCategory.replaceMm').empty('');
    jQuery('.titleCategory.replaceMm').text(textReplace);

});

//Ajuste na pagina minha conta
jQuery('.u-column1.woocommerce-Address').removeClass('col-1');
jQuery('.u-column1.woocommerce-Address h3').text('Endereço');
jQuery('.page-minha-conta .woocommerce-MyAccount-content h3').text('Endereço');
jQuery('.u-column2.col-2.woocommerce-Address').hide();

//Muda posição do texto na pag. minha conta	
var textAviso = jQuery('.woocommerce-privacy-policy-text').html();
jQuery('.woocommerce-privacy-policy-text').hide();
jQuery('.woocommerce-FormRow.form-row').after(textAviso);

//Muda o "lembrar" de posição na pag. minha conta
var textAviso2 = jQuery('.woocommerce-form__label.woocommerce-form__label-for-checkbox.woocommerce-form-login__rememberme').html();
jQuery('.woocommerce-form__label.woocommerce-form__label-for-checkbox.woocommerce-form-login__rememberme').hide();
jQuery('.woocommerce-button.button.woocommerce-form-login__submit').after(textAviso2);


/*Função para mostrar o Valor de Resgate e Data de Resgate do investimento */
/*
//Calculando o valor de resgate
let nomeProduto = jQuery('td.woocommerce-table__product-name.product-name').text();
let valorInvestido = jQuery('span.woocommerce-Price-amount.amount').text()
let infoProduto = criarObjetos(nomeProduto)
let prazoProduto = infoProduto[1]
let taxaProduto = infoProduto[2]

let taxaProdutoConvert = taxaProduto.replace(',', '.')
let taxaProdutoRemove = taxaProdutoConvert.replace(/[()%]/g, "")
let valorConvetido = converteValor(valorInvestido)

function converteValor(valor) {
    let valorNew = valor.split(',')
    var valorNewConvert = valorNew[0].replace('.', '')
    var valorNewConvert = valorNewConvert.replace('R$', '')
    return valorNewConvert
}

function criarObjetos(myText) {
    let nomeProduto = myText.split(' ')
    return nomeProduto
}

calculaJurosCompostos(valorConvetido, prazoProduto, taxaProdutoRemove)

function calculaJurosCompostos(valor, prazo, taxa) {
    let valorFinal = valor * Math.pow((1 + (taxa / 100)), prazo)
    let valorFinalParseado = valorFinal.toFixed(2)
    return valorFinalParseado
}

//Calculando a data de resgate
function criarObjetos(myText) {
    let nomeObjeto = myText.split(' ')
    return nomeObjeto
}

function verificaMes(mes) {
    switch (mes) {
        case 'janeiro':
            return '1'
            break;
        case 'fevereiro':
            return '2'
            break;
        case 'março':
            return '3'
            break;
        case 'abril':
            return '4'
            break;
        case 'maio':
            return '5'
            break;
        case 'junho':
            return '6'
            break;
        case 'julho':
            return '7'
            break;
        case 'agosto':
            return '8'
            break;
        case 'setembro':
            return '9'
            break;
        case 'outubro':
            return '10'
            break;
        case 'novembro':
            return '11'
            break;
        case 'dezembro':
            return '12'
            break;

        default:
            'Este mês não existe ou está incorreto'
    }
}
var getDataInvestimento = jQuery('.order-date').text()
let dataInvestimento = criarObjetos(getDataInvestimento)
let dia = dataInvestimento[0]
let mes = dataInvestimento[2]
let mesNew = verificaMes(mes)
let ano = dataInvestimento[4]
let dataNew = ano + '-' + mesNew + '-' + dia

function calculaPeriodo(formatView, formatCalc, timeInterval, dateStart) {
    let dateEnd = moment(dateStart).add(timeInterval, formatCalc).format(formatView)
  	return dateEnd
}

//Inserindo os valores no template
var valorResgate = calculaJurosCompostos(valorConvetido, prazoProduto, taxaProdutoRemove)
var dataResgate = calculaPeriodo('DD/MM/YYYY', 'month', prazoProduto, dataNew)

jQuery(document).ready(function() {
    jQuery('#valor-resgate').text(valorResgate)
  	if(dataResgate == 'Invalid date'){
  		jQuery('#data-resgate').text('Processando...')
  	}else{
  		jQuery('#data-resgate').text(dataResgate)
  	}
    jQuery('#valor-resgate').mask('000.000.000.000.000,00', { reverse: true });
});

jQuery('.woocommerce-order-details').append('<div id="tabela-complementar"><div class="box-46"><span id="label-valor-resgate">Valor de resgate: </span></div><div class="box-50"><span id="symbol-currency">R$</span><span id="valor-resgate"></span></div></div><div class="clear"></div>')

jQuery('.woocommerce-order-details').append('<div id="tabela-complementar2"><div class="box-46"><span id="label-data-resgate">Data de resgate: </span></div><div class="box-50"><span id="data-resgate"></span></div></div><div class="clear"></div>')
*/
/*Fim da funcao*/