<?php

?>
<?php
defined( 'ABSPATH' ) or die( 'No script kiddies, please!' );
// Scripts
wp_enqueue_script( 'jquery' );
wp_enqueue_script( 'jquery-validate' );
wp_enqueue_script( 'fleet-management-main' );
// Styles
if ( $settings['conf_load_font_awesome_from_plugin'] == 1 ):
	wp_enqueue_style( 'font-awesome' );
endif;
if ( $newOrder == true && $cameFromSingleStep1 && $settings['conf_universal_analytics_enhanced_ecommerce'] == 1 ):
	include 'Shared/Step4EnhancedEcommercePartial.php';
endif;
?>
<style>
a {
  color: #434d57;
}
#blok
{
	width:80%;
}
.dodatki
{
	width: 25%;
	float: left;
	margin:10px;
	position:relative;
}
#dodatek1, #dodatek2, #dodatek3{
	box-shadow: 0px 0px 5px rgba(0,0,0,.12), 0px 0px 5px rgba(0,0,0,.24) !important; 
	float: left;
	width: 100%;
	margin-top: 10px;
	padding: 10px;
	height: 400px;
}
#dodatek4, #dodatek5{
	box-shadow: 0px 0px 5px rgba(0,0,0,.12), 0px 0px 5px rgba(0,0,0,.24) !important; 
	float: left;
	width: 100%;
	margin-top: 10px;
	padding: 10px;
	height: 250px;
}
.col-xs-12.col-sm-2.extra-options
{
	width:100%;
	margin-top:10px;
	margin-bottom:10px; 
	text-align:center;
}
.ikona
{
	height:12%;
	float: left;
	width: auto;
	margin-right:2px;
}
.col-xs-4.remove_unit_col
{
	width: auto; text-align: center; margin-left: 30%;
}
.vc_custom_1669210437177 {
    background-color: #ffffff !important;
}
#informacja4
{
	margin-left:25%;
}
#summary
{
	width:30%; 
	display:inline-block; 
	margin-left:5%;
}
#suma
{
	margin-left:24px;
}
#cena
{
	width: 65%;
	
	display:inline-block;
	padding:5px;
}
.name
{
	width:65%;
	display: inline-block; 
	margin-left:24px;
	padding:5px;
}
@media screen and (max-width: 360px)
{
	.ikona
{
	height:15%;
	float: left;
	width: auto;
	margin-right:2px;
}}

@media screen and (max-width: 1635px)
{
.dodatki
{
	
	float: left;
	margin:10px;
	position:relative;
}
#dodatek1, #dodatek2, #dodatek3{
	box-shadow: 0px 0px 5px rgba(0,0,0,.12), 0px 0px 5px rgba(0,0,0,.24) !important; 
	float: left;
	width: 100%;
	margin-top: 10px;
	padding: 10px;
	height: 480px;
}
#dodatek4, #dodatek5{
	box-shadow: 0px 0px 5px rgba(0,0,0,.12), 0px 0px 5px rgba(0,0,0,.24) !important; 
	float: left;
	width: 100%;
	margin-top: 10px;
	padding: 10px;
	height: 300px;
}
#summary
{
	width:30%; 
	display:inline-block; 
	margin-left:5%;
}
#cena
{
	width: 60%;
	display:inline-block;
}
.name
{
	width:60%;
	display: inline-block; 
	margin-left:20px;
}
#informacja4
{
	margin-left:0;
}
}

@media screen and (max-width: 1100px)
{
.dodatki
{
	width: 100%;
	float: left;
	margin:0;
	margin-bottom:20px;
	position:relative;
}
#summary
{
	width:100%; 
	display:inline-block; 
	margin-left:0;
}
#cena
{
	width: 100%;
	display:inline-block;
}
#suma
{
	margin-left:29px;
}
.name
{
	width:100%;
	display: inline-block; 
	margin-left:0;
	padding:0;
}
#blok
{
	width:100%;
}
#name1, #name2, #name3, #name4, #name5
{
	margin-left:29px;
}
#dodatek1, #dodatek2, #dodatek3 {
	height: 400px;
}
}
</style>
<script src="https://code.jquery.com/jquery-latest.min.js"></script>
<script>
$(document).ready(function () {
	    $('#dodaj').click(
        function () {
            $('#dodaj').addClass('aktywny');
			$('#dodaj').html('Dodano');
			$('#dodaj2').hide();
			$('#usun2').hide();
			$('#dodaj3').hide();
			$('#usun3').hide();
			$('#dodaj1').hide();
			$('#usun1').hide();
			$('#dodaj4').hide();
			$('#usun4').hide();
			$('#dodaj1').removeClass('aktywny');
			$('#dodaj4').removeClass('aktywny');
			$('#informacja1').html('Można wybrać tylko jeden wariant Pakietu.<br> Jeżeli chcesz zmienić wariant usuń obecny wybór.');
			$('#informacja2').html('Można wybrać tylko jeden wariant Pakietu.<br> Jeżeli chcesz zmienić wariant usuń obecny wybór.');
			$('#informacja3').html('Można wybrać tylko jeden wariant Pakietu.<br> Jeżeli chcesz zmienić wariant usuń obecny wybór.');
			$('#informacja4').html('Twój pakiet obejmuje dodatek Myjnia.');
			

        });
		
	    $('#usun').click(
        function () {
            $('#dodaj').removeClass('aktywny');
			$('#dodaj').html('Dodaj');
			$('#dodaj2').show();
			$('#usun2').show();
			$('#dodaj3').show();
			$('#usun3').show();
			$('#dodaj1').show();
			$('#usun1').show();
			$('#dodaj4').show();
			$('#usun4').hide();
			$('#dodaj4').html('Dodaj');
			$('#dodaj4').removeClass('aktywny');
			$('#dodaj1').addClass('aktywny');
			$('#dodaj1').html('Dodano');
			$('#informacja1').html('');
			$('#informacja2').html('');
			$('#informacja3').html('');
			$('#informacja4').html('');
			$(".usun-button").hide();
        })
								
    });

</script>	
<script>
$(document).ready(function () {
	    $('#dodaj1').click(
        function () {
			$('#dodaj2').hide();
			$('#dodaj').hide();
			$('#usun').hide();
			$('#dodaj3').hide();
			$('#usun3').hide();
			$('#dodaj1').addClass('aktywny');
			$('#dodaj1').html('Dodano');
			$('#usun1').hide();
			$('#informacja').html('Można wybrać tylko jeden wariant Pakietu.<br> Jeżeli chcesz zmienić wariant usuń obecny wybór.');
			$('#informacja2').html('Można wybrać tylko jeden wariant Pakietu.<br> Jeżeli chcesz zmienić wariant usuń obecny wybór.');
			$('#informacja3').html('Można wybrać tylko jeden wariant Pakietu.<br> Jeżeli chcesz zmienić wariant usuń obecny wybór.');
			$('#informacja4').html('Twój pakiet obejmuje dodatek Myjnia.');
        });
		
	    $('#usun1').click(
        function () {
            $('#dodaj1').removeClass('aktywny');
			$('#dodaj1').html('Dodaj');
			$('#dodaj').show();
			$('#usun').show();
			$('#dodaj3').show();
			$('#usun3').show();
			$('#dodaj1').show();
			$('#usun1').show();
			$('#dodaj2').show();
			$('#usun2').show();
			$('#informacja').html('');
			$('#informacja2').html('');
			$('#informacja3').html('');
			$('#informacja4').html('');
			$(".usun-button").hide();
        })
								
    });

</script>

<script>
$(document).ready(function () {
	    $('#dodaj2').click(
        function () {
            $('#dodaj2').addClass('aktywny');
			$('#dodaj2').html('Dodano');
			$('#dodaj').hide();
			$('#usun').hide();
			$('#dodaj3').hide();
			$('#usun3').hide();
			$('#dodaj1').hide();
			$('#usun1').hide();
			$('#dodaj4').hide();
			$('#usun4').hide();
			$('#dodaj1').removeClass('aktywny');
			$('#dodaj4').removeClass('aktywny');
			$('#informacja1').html('Można wybrać tylko jeden wariant Pakietu.<br> Jeżeli chcesz zmienić wariant usuń obecny wybór.');
			$('#informacja').html('Można wybrać tylko jeden wariant Pakietu.<br> Jeżeli chcesz zmienić wariant usuń obecny wybór.');
			$('#informacja3').html('Można wybrać tylko jeden wariant Pakietu.<br> Jeżeli chcesz zmienić wariant usuń obecny wybór.');
			$('#informacja4').html('Twój pakiet obejmuje dodatek Myjnia.');
        });
		
	    $('#usun2').click(
        function () {
            $('#dodaj2').removeClass('aktywny');
			$('#dodaj2').html('Dodaj');
			$('#dodaj').show();
			$('#usun').show();
			$('#dodaj3').show();
			$('#usun3').show();
			$('#dodaj1').show();
			$('#usun1').show();
			$('#dodaj4').show();
			$('#usun4').hide();
			$('#dodaj4').html('Dodaj');
			$('#dodaj4').removeClass('aktywny');
			$('#dodaj1').addClass('aktywny');
			$('#dodaj1').html('Dodano');
			$('#informacja1').html('');
			$('#informacja').html('');
			$('#informacja3').html('');
			$('#informacja4').html('');
			$(".usun-button").hide();
        })
								
    });

</script>

<script>
$(document).ready(function () {
	    $('#dodaj3').click(
        function () {
            $('#dodaj3').addClass('aktywny');
			$('#dodaj3').html('Dodano');
			$('#dodaj').hide();
			$('#usun').hide();
			$('#dodaj2').hide();
			$('#usun2').hide();
			$('#dodaj1').hide();
			$('#usun1').hide();
			$('#dodaj4').hide();
			$('#usun4').hide();
			$('#dodaj1').removeClass('aktywny');
			$('#dodaj4').removeClass('aktywny');
			$('#informacja1').html('Można wybrać tylko jeden wariant Pakietu.<br> Jeżeli chcesz zmienić wariant usuń obecny wybór.');
			$('#informacja').html('Można wybrać tylko jeden wariant Pakietu.<br> Jeżeli chcesz zmienić wariant usuń obecny wybór.');
			$('#informacja2').html('Można wybrać tylko jeden wariant Pakietu.<br> Jeżeli chcesz zmienić wariant usuń obecny wybór.');
			$('#informacja4').html('Twój pakiet obejmuje dodatek Myjnia.');
        });
		
	    $('#usun3').click(
        function () {
            $('#dodaj3').removeClass('aktywny');
			$('#dodaj3').html('Dodaj');
			$('#dodaj').show();
			$('#usun').show();
			$('#dodaj2').show();
			$('#usun2').show();
			$('#dodaj1').show();
			$('#usun1').show();
			$('#dodaj4').show();
			$('#usun4').hide();
			$('#dodaj4').html('Dodaj');
			$('#dodaj4').removeClass('aktywny');
			$('#dodaj1').addClass('aktywny');
			$('#dodaj1').html('Dodano');
			$('#informacja1').html('');
			$('#informacja').html('');
			$('#informacja2').html('');
			$('#informacja4').html('');
			$(".usun-button").hide();
        })
								
    });

</script>	

<script>
$(document).ready(function () {
	    $('#dodaj4').click(
        function () {
            $('#dodaj4').addClass('aktywny');
			$('#dodaj4').html('Dodano');
        });
		
	    $('#usun4').click(
        function () {
            $('#dodaj4').removeClass('aktywny');
			$('#dodaj4').html('Dodaj');
			$("#usun4").hide();
        })
								
    });

</script>		
<script>
$(document).ready(function () {
	    $('#dodaj5').click(
        function () {
            $('#dodaj5').addClass('aktywny');
			$('#dodaj5').html('Dodano');
        });
		
	    $('#usun5').click(
        function () {
            $('#dodaj5').removeClass('aktywny');
			$('#dodaj5').html('Dodaj');
			$("#usun5").hide();
        })
								
    });

</script>
<script>
    $(document).ready(function() {
        $(".usun-button").hide();
		$("#usun4").hide();
		$("#usun5").hide();
        $("#dodaj2").click(function() {
            $("#usun2").show();
        });
		$("#dodaj3").click(function() {
            $("#usun3").show();
        });
		$("#dodaj").click(function() {
            $("#usun").show();
        });
		$("#dodaj1").click(function() {
            $("#usun1").show();	
        });
		$("#dodaj4").click(function() {
            $("#usun4").show();
        });
		$("#dodaj5").click(function() {
            $("#usun5").show();
        });
    });
</script>
<script>
    $(document).ready(function() {
        $("#all1").hide();
		$("#all2").hide();
		$("#all3").hide();
		$("#all4").hide();
		$("#all5").hide();
		$("#all6").hide();
		$("#all7").hide();
		$("#all8").hide();
		$("#all9").hide();
		$("#name1").hide();
		$("#name2").hide();
		$("#name3").hide();
		$("#name4").hide();
		$("#name5").hide();
		$("#name6").hide();
    });
</script>




<style>
.aktywny {
	color: #ffffff;
    background-color: #008000 !important;
    text-decoration: none;
}
#dodaj:hover, #dodaj1:hover, #dodaj2:hover, #dodaj3:hover, #dodaj4:hover, #dodaj5:hover{
	background-color: #008000 !important;
}

#dodaj, #dodaj2, #dodaj3, #dodaj4, #dodaj5, #dodaj1
{
	background-color:#00cc33;
}


.adjust-line-height {
  line-height: 1em;
  margin-left: 5%;
}
</style>
<div class="row car-rental-top-navigation">
    <form action="" name="navigation-form" id="navigation-form" method="post">
        <input type="hidden" name="<?= esc_attr( $extPrefix . $orderCodeParam ); ?>" value="<?= esc_attr( $orderCode ); ?>"/>
        <input type="hidden" name="<?= esc_attr( $extPrefix ); ?>do_not_flush" value="yes"/>
        <div class="col-xs-12 col-sm-6 col-md-3">
            <button type="submit" name="<?= esc_attr( $extPrefix ); ?>do_search0" class="enabled backward"><span
                        class="nav-num">1</span> <span class="btn-text"><?= esc_html( $lang['LANG_SEARCH_TEXT'] ); ?></span>
            </button>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-3">
            <button type="submit" name="<?= esc_attr( $extPrefix ); ?>do_search" class="enabled backward"><span
                        class="nav-num">2</span> <span class="btn-text"><?= esc_html( $lang['LANG_ORDER_CHANGE_ORDERED_ITEMS_TEXT'] ); ?></span>
            </button>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-3">
            <button type="button" class="enabled active forward"><span
                        class="nav-num">3</span> <span class="btn-text"><?= esc_html( $lang['LANG_CHANGE_EXTRAS_TEXT'] ); ?></span></button>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-3">
			<?php if ( $newOrder == false ): ?>
                <button type="submit" name="<?= esc_attr( $extPrefix ); ?>do_search4" class="enabled forward"><span
                            class="nav-num">4</span> <span class="btn-text"><?= esc_html( $lang['LANG_CONFIRM_TEXT'] ); ?></span>
                </button>
			<?php else: ?>
                <button type="button" disabled><span
                            class="nav-num">4</span> <span class="btn-text"><?= esc_html( $lang['LANG_CONFIRM_TEXT'] ); ?></span>
                </button>
			<?php endif; ?>
        </div>
    </form>
</div>
<?$dlugosc = str_replace(' dni','',$expectedDurationText);?>
<div class="car-rental-options">

    <form name="form1" id="form1" method="post" action="">
	    <input type="hidden" name="action" value="quantacars_formularz_koniec">
        <!--<h3 class="search-label"><?= esc_html( $lang['LANG_SELECTED_ITEMS_TEXT'] ); ?></h3>
        <div class="row hidden-xs nrs-header no_margin">
            <div class="col-xs-12 col-sm-5 col-md-6 no_padding">
				<?= esc_html( $lang['LANG_ITEM_MODEL_TEXT'] ); ?>
            </div>
			<div class="col-xs-12 col-sm-5 col-md-6 no_padding">
				<?= esc_html( $lang['LANG_DAY_TEXT'] ); ?>
            </div>
            <div class="col-xs-12 col-sm-2">
				<?= esc_html( $lang['LANG_PRICE_TEXT'] ); ?>
            </div>
            <div class="col-xs-12 col-sm-2">
				<?php if ( $settings['conf_deposit_enabled'] == 1 ): ?>
					<?= esc_html( $lang['LANG_DEPOSIT_TEXT'] ); ?>
				<?php else: ?>
                    &nbsp;
				<?php endif; ?>
            </div>-->

        </div>
		<?php foreach ( $itemModels AS $itemModel ): ?>
            <div class="row selected-item no_margin align_center-xs">
                <!--<div class="col-xs-12 col-sm-3 col-md-4 item-details item-name">
					<?= esc_html( $itemModel['print_translated_class_name'] ? $itemModel['print_translated_class_name'] . "" : "" ); ?>
					<?= esc_html( $itemModel['print_translated_manufacturer_name'] . ' ' . $itemModel['print_translated_item_model_name'] . ' ' . $itemModel['via_partner'] ); ?></strong> lub podobny
				 <br>Rodzaj paliwa:<strong><?php print esc_html( $itemModel['print_translated_attribute1_title'] ); ?></strong><br>Skrzynia biegów: <strong><?php print esc_html( $itemModel['print_translated_attribute2_title'] ); ?>
		</div>-->
                <div class="col-xs-12 col-sm-2 item-options">
					<?php if ( $itemModel['options_html'] != "" ): ?>
                        <span class="hidden-sm hidden-md hidden-lg hidden-xl quantity">
                            <?= esc_html( $lang['LANG_RENTAL_OPTIONS_TEXT'] ); ?>:
                     </span>
						<?php print_esc_drop( $itemModel['options_html'] ); ?>
					<?php endif; ?>
                </div>
                <!--<div class="col-xxs-12 col-xs-6 col-sm-2 item-details">
                    <span class="hidden-sm hidden-md hidden-lg hidden-xl">
                        <?= esc_html( $lang['LANG_TOTAL_TEXT'] ); ?>:
                    </span>
					<?php if ( $itemModel['price_group_id'] == 0 ): ?>
						<?= esc_html( $lang['LANG_ASK_FOR_QUOTE_TEXT'] ); ?>
					<?php else: ?>
                        <span title="<?php
						if ( $itemModel['tax_percentage'] > 0 ):
							print( $itemModel['unit_print']['discounted_total'] . ' ' . esc_html( $lang['LANG_TAX_WITHOUT_TEXT'] ) . ' + ' );
							print( $itemModel['unit_print']['discounted_tax_amount'] . ' ' . esc_html( $lang['LANG_TAX_SHORT_TEXT'] ) . ' = ' );
							print( $itemModel['unit_print']['discounted_total_with_tax'] );
						endif;
						?>" style="cursor:pointer">
                        <div id="suma"><?php
						$najem = $dlugosc*round(round(str_replace(',','.',str_replace('&nbsp;','',$itemModel['unit_per_period_print']['discounted_total_dynamic'] ))),2);
						echo number_format($najem, 2, ',', ' ').' PLN';
						?></div>
						<div id="suma2"></div>
					</span>
					
					<?php endif; ?>
                </div>-->

                <div class="col-xs-12 col-sm-3 col-md-2 item-details">
					<?php if ( $itemModel['max_allowed_units'] > 1 ): ?>
                        <div class="row">
                            <div class="col-xs-4 remove_unit_col">


                            </div>
                            <div class="col-xs-4 no_padding">
                                <input class="units_qty"
                                       id="item_units<?= esc_attr( $itemModel['item_id'] ); ?>"
                                       max="<?= esc_attr( $itemModel['max_allowed_units'] ); ?>"
                                       min="0"
                                       name="e[<?= esc_attr( $itemModel['item_id'] ); ?>]"
                                       type="number"
                                       value="<?= esc_attr( $itemModel['selected_quantity'] ); ?>"
                                       readonly/>
                            </div>
                            <div class="col-xs-4 add_unit_col">

                            </div>
                        </div>
					<?php else: ?>
                        <input type="hidden" name="item_model_units[<?= esc_attr( $itemModel['item_id'] ); ?>]" value="1"/><span
                                class="hidden-xs"></span>
					<?php endif; ?>
                </div>
            </div>
		<?php endforeach; ?>
        <!--<div class="clear">&nbsp;</div>-->
        <!--<h3 class="search-label top-padded"><?= esc_html( $lang['LANG_RENTAL_OPTIONS_TEXT'] ); ?></h3>
        <div class="row hidden-xs nrs-header no_margin">
            <div class="col-xs-12 col-sm-5 col-md-6">
				<?= esc_html( $lang['LANG_EXTRA_TEXT'] ); ?>
            </div>
            <div class="col-xs-12 col-sm-2">
				<?= esc_html( $lang['LANG_TOTAL_TEXT'] ); ?>
            </div>
            <div class="col-xs-12 col-sm-3 col-md-2 align_right">
            </div>
        </div>-->
		<?php ?>

		<div id="blok">
		<?php $i = 1; ?>
		<?php foreach ( $extras AS $extra ): ?>
			<div class="dodatki" style="75%;">
			<div id="dodatek<?php echo $i; ?>" style="position:relative;">
					<b><center style = "font-size:20px;"><?= esc_html( $extra['translated_extra'] ); ?></center></b>
					<div class="col-xs-12 col-sm-2 extra-options">
							<?php if ( $extra['options_html'] != "" ): ?>
                        		<span class="hidden-sm hidden-md hidden-lg hidden-xl quantity">
                            		<?= esc_html( $lang['LANG_RENTAL_OPTIONS_TEXT'] ); ?>:
                     			</span>
							<?php print_esc_drop( $extra['options_html'] ); ?>
								<?php endif; ?>
							<div style="text-align:center;">
								<?php
								if($extra['translated_extra'] == "Pakiet Komfort" || $extra['translated_extra'] == "Pakiet Komfort PLUS" || $extra['translated_extra'] == "Pakiet PLATINIUM" || $extra['translated_extra'] == "GPS"){
								$extra_unit = str_replace(',', '.', str_replace('&nbsp;', '', $extra['unit_per_period_print']['discounted_total_dynamic']));
								$rounded_unit = round($extra_unit);
								$multiplied_unit = $rounded_unit * 1; // wartość pomnożona przez 10, zamiast przez zmienną $dlugosc
								$formatted_unit = number_format($multiplied_unit, 2, ',', ' ');
								echo "DOBA: " .$formatted_unit . ' PLN<br>';}
								
								?>
								
								
                    		<span class="hidden-sm hidden-md hidden-lg hidden-xl">

                    		</span>
                    		<span title="<?php
							if ( $extra['tax_percentage'] > 0 ):
								
								print esc_html( $extra['unit_print']['discounted_total'] . ' ' . $lang['LANG_TAX_WITHOUT_TEXT'] . ' + ' );
								print esc_html( $extra['unit_print']['discounted_tax_amount'] . ' ' . $lang['LANG_TAX_SHORT_TEXT'] . ' = ' . $extra['unit_print']['discounted_total_with_tax'] );
								endif;
								?>" style="cursor:pointer">
								<?php
								$dodatek = $dlugosc*round(round(str_replace(',','.',str_replace('&nbsp;','',$extra['unit_per_period_print']['discounted_total_dynamic'] ))),2);
								echo "RAZEM: " . number_format($dodatek, 2, ',', ' ').' PLN';
								$dobowa = number_format(round(str_replace(',','.',str_replace('&nbsp;','',$extra['unit_per_period_print']['discounted_total_dynamic'])), 0), 0, ',', ' ').' PLN x '.$dlugosc;
								?>
								</span>
                		
							</div>


                		</div>
							

					<?php if($itemModel['print_translated_class_name'] == 'Segment SUV MP+' && $extra['translated_extra'] == "Pakiet Komfort"){
						echo('<br>
					<font size="2"><font color="limeGreen">✓</font> Zmniejszenie kaucji do 1000,00 PLN ');}
					else if($itemModel['print_translated_class_name'] == 'Segment SUV MP+'&& $extra['translated_extra'] == "Pakiet Basic"){
						echo('<br>
					<font size="2"><font color="limeGreen">✓</font> Kaucja 5000,00 PLN ');}
					else if($itemModel['print_translated_class_name'] == 'Segment SUV MP+'&& $extra['translated_extra'] == "Pakiet Komfort PLUS"){
						echo('<br>
					<font size="2"><font color="limeGreen">✓</font> Zmniejszenie kaucji do 1000,00 PLN ');}
					else if($itemModel['print_translated_class_name'] == 'Segment SUV MP+'&& $extra['translated_extra'] == "Pakiet PLATINIUM"){
						echo('<br>
					<font size="2"><font color="limeGreen">✓</font> Zmniejszenie kaucji do 1000,00 PLN ');}
					else if($itemModel['print_translated_class_name'] == 'Segment SUV DP+'&& $extra['translated_extra'] == "Pakiet Basic"){
						echo('<br>
					<font size="2"><font color="limeGreen">✓</font> Kaucja 5000,00 PLN ');}
					else if($itemModel['print_translated_class_name'] == 'Segment SUV DP+'&& $extra['translated_extra'] == "Pakiet Komfort"){
						echo('<br>
					<font size="2"><font color="limeGreen">✓</font> Zmniejszenie kaucji do 1000,00 PLN ');}
					else if($itemModel['print_translated_class_name'] == 'Segment SUV DP+'&& $extra['translated_extra'] == "Pakiet Komfort PLUS"){
						echo('<br>
					<font size="2"><font color="limeGreen">✓</font> Zmniejszenie kaucji do 1000,00 PLN ');}
					else if($itemModel['print_translated_class_name'] == 'Segment SUV DP+'&& $extra['translated_extra'] == "Pakiet PLATINIUM"){
						echo('<br>
					<font size="2"><font color="limeGreen">✓</font> Zmniejszenie kaucji do 1000,00 PLN ');}
					else if($itemModel['print_translated_class_name'] == 'Segment E+'&& $extra['translated_extra'] == "Pakiet Basic"){
						echo('<br>
					<font size="2"><font color="limeGreen">✓</font> Kaucja 5000,00 PLN ');}
					else if($itemModel['print_translated_class_name'] == 'Segment E+'&& $extra['translated_extra'] == "Pakiet Komfort"){
						echo('<br>
					<font size="2"><font color="limeGreen">✓</font> Zmniejszenie kaucji do 1000,00 PLN ');}
					else if($itemModel['print_translated_class_name'] == 'Segment E+'&& $extra['translated_extra'] == "Pakiet Komfort PLUS"){
						echo('<br>
					<font size="2"><font color="limeGreen">✓</font> Zmniejszenie kaucji do 1000,00 PLN ');}
					else if($itemModel['print_translated_class_name'] == 'Segment E+'&& $extra['translated_extra'] == "Pakiet PLATINIUM"){
						echo('<br>
					<font size="2"><font color="limeGreen">✓</font> Zmniejszenie kaucji do 1000,00 PLN ');}
					else if($itemModel['print_translated_item_model_name'] == 'RX'&& $extra['translated_extra'] == "Pakiet Basic"){
						echo('<br>
					<font size="2"><font color="limeGreen">✓</font> Kaucja 5000,00 PLN ');}
					else if($itemModel['print_translated_item_model_name'] == 'RX'&& $extra['translated_extra'] == "Pakiet Komfort"){
						echo('<br>
					<font size="2"><font color="limeGreen">✓</font> Zmniejszenie kaucji do 1000,00 PLN ');}
					else if($itemModel['print_translated_item_model_name'] == 'RX'&& $extra['translated_extra'] == "Pakiet Komfort PLUS"){
						echo('<br>
					<font size="2"><font color="limeGreen">✓</font> Zmniejszenie kaucji do 1000,00 PLN ');}
					else if($itemModel['print_translated_item_model_name'] == 'RX'&& $extra['translated_extra'] == "Pakiet PLATINIUM"){
						echo('<br>
					<font size="2"><font color="limeGreen">✓</font> Zmniejszenie kaucji do 1000,00 PLN ');}
					else if($itemModel['print_translated_item_model_name'] == 'MERCEDES GLC'&& $extra['translated_extra'] == "Pakiet Basic"){
						echo('<br>
					<font size="2"><font color="limeGreen">✓</font> Kaucja 5000,00 PLN ');}
					else if($itemModel['print_translated_item_model_name'] == 'MERCEDES GLC'&& $extra['translated_extra'] == "Pakiet Komfort"){
						echo('<br>
					<font size="2"><font color="limeGreen">✓</font> Zmniejszenie kaucji do 1000,00 PLN ');}
					else if($itemModel['print_translated_item_model_name'] == 'MERCEDES GLC'&& $extra['translated_extra'] == "Pakiet Komfort PLUS"){
						echo('<br>
					<font size="2"><font color="limeGreen">✓</font> Zmniejszenie kaucji do 1000,00 PLN ');}
					else if($itemModel['print_translated_item_model_name'] == 'MERCEDES GLC'&& $extra['translated_extra'] == "Pakiet PLATINIUM"){
						echo('<br>
					<font size="2"><font color="limeGreen">✓</font> Zmniejszenie kaucji do 1000,00 PLN ');}
					else if($itemModel['print_translated_item_model_name'] == 'VOLVO XC60'&& $extra['translated_extra'] == "Pakiet Basic"){
						echo('<br>
					<font size="2"><font color="limeGreen">✓</font> Kaucja 5000,00 PLN ');}
					else if($itemModel['print_translated_item_model_name'] == 'VOLVO XC60'&& $extra['translated_extra'] == "Pakiet Komfort"){
						echo('<br>
					<font size="2"><font color="limeGreen">✓</font> Zmniejszenie kaucji do 1000,00 PLN ');}
					else if($itemModel['print_translated_item_model_name'] == 'VOLVO XC60'&& $extra['translated_extra'] == "Pakiet Komfort PLUS"){
						echo('<br>
					<font size="2"><font color="limeGreen">✓</font> Zmniejszenie kaucji do 1000,00 PLN ');}
					else if($itemModel['print_translated_item_model_name'] == 'VOLVO XC60'&& $extra['translated_extra'] == "Pakiet PLATINIUM"){
						echo('<br>
					<font size="2"><font color="limeGreen">✓</font> Zmniejszenie kaucji do 1000,00 PLN ');}
					else if($itemModel['print_translated_item_model_name'] == 'GLE'&& $extra['translated_extra'] == "Pakiet Basic"){
						echo('<br>
					<font size="2"><font color="limeGreen">✓</font> Kaucja 5000,00 PLN ');}
					else if($itemModel['print_translated_item_model_name'] == 'GLE'&& $extra['translated_extra'] == "Pakiet Komfort"){
						echo('<br>
					<font size="2"><font color="limeGreen">✓</font> Zmniejszenie kaucji do 1000,00 PLN ');}
					else if($itemModel['print_translated_item_model_name'] == 'GLE'&& $extra['translated_extra'] == "Pakiet Komfort PLUS"){
						echo('<br>
					<font size="2"><font color="limeGreen">✓</font> Zmniejszenie kaucji do 1000,00 PLN ');}
					else if($itemModel['print_translated_item_model_name'] == 'GLE'&& $extra['translated_extra'] == "Pakiet PLATINIUM"){
						echo('<br>
					<font size="2"><font color="limeGreen">✓</font> Zmniejszenie kaucji do 1000,00 PLN ');}
					else if($itemModel['print_translated_item_model_name'] == '718 Cayman'&& $extra['translated_extra'] == "Pakiet Basic"){
						echo('<br>
					<font size="2"><font color="limeGreen">✓</font> Kaucja 5000,00 PLN ');}
					else if($itemModel['print_translated_item_model_name'] == '718 Cayman'&& $extra['translated_extra'] == "Pakiet Komfort"){
						echo('<br>
					<font size="2"><font color="limeGreen">✓</font> Zmniejszenie kaucji do 2000,00 PLN ');}
					else if($itemModel['print_translated_item_model_name'] == '718 Cayman'&& $extra['translated_extra'] == "Pakiet Komfort PLUS"){
						echo('<br>
					<font size="2"><font color="limeGreen">✓</font> Zmniejszenie kaucji do 2000,00 PLN ');}
					else if($itemModel['print_translated_item_model_name'] == '718 Cayman'&& $extra['translated_extra'] == "Pakiet Komfort PLATINIUM"){
						echo('<br>
					<font size="2"><font color="limeGreen">✓</font> Zmniejszenie kaucji do 2000,00 PLN ');}
					else if($extra['translated_extra'] == "GPS"){
						echo('<font size="2">');}
					else if($extra['translated_extra'] == "Myjnia"){
					echo('<font size="2">');}
					else{
						echo('<br>
					<font size="2"><font color="limeGreen">✓</font> Kaucja 1,00 PLN ');}
					
					?>
					<?php if($extra['translated_extra'] == "Pakiet Komfort"){
					echo('
					<br><font color="limeGreen">✓</font> Dodatek Myjnia<br>
					<div class="ikona"><font color="limeGreen">✓</font></div> Brak udziału własnego w przypadku jednej szkody likwidowanej z AC w Polsce<br>
					<div style="margin-left:12px;"><font color="Red"> <b>Nie obejmuje uszkodzenia:
					   Felg,
					   Opon,
					   Szyb</font></b></font></div>');
					}else if($extra['translated_extra'] == "Pakiet Komfort PLUS"){
					echo('
					<br><div class="ikona"><font color="limeGreen">✓</font></div> Brak opłaty z tytułu wyjazdu Pojazdem z Polski na teren UE oraz Norwegii, Lichtensteinu i Szwajcarii<br>
					<font color="limeGreen">✓</font> Dodatek Myjnia<br>
					<div class="ikona"><font color="limeGreen">✓</font></div> Brak udziału własnego w przypadku jednej szkody likwidowanej z AC w Polsce<br>
					<div style="margin-left:12px"><font color="Green"><b>Obejmuje uszkodzenie:
					Felgi, 
					Opony, 
					Szyby</font></b></font></div>');
					}
					else if($extra['translated_extra'] == "Pakiet Basic"){
						echo('
						<br><div class="ikona"><font color="limeGreen">✓</font></div>Brak udziału własnego w przypadku jednej szkody likwidowanej z OC w Polsce<br>
					   <div style="margin-left:12px;"><font color="Red"> <b>Nie obejmuje uszkodzenia:<br>
					   ✗ Felg <br>
					   ✗ Opon <br>
					   ✗ Szyb</font></b></font></div>');
						}
					else if($extra['translated_extra'] == "Pakiet PLATINIUM"){
						echo('
						<br><div class="ikona"><font color="limeGreen">✓</font></div> Brak opłaty z tytułu wyjazdu Pojazdem z Polski na teren UE oraz Norwegii, Lichtensteinu i Szwajcarii<br>
						<font color="limeGreen">✓</font> Dodatek Myjnia<br>
						<div style="height:22%;float: left;width: auto;margin-right:2px;"><font color="limeGreen">✓</font></div> Brak udziału własnego w przypadku <b>dwóch szkód</b> likwidowanych z AC na terenie Unii Europejskiej oraz Norwegii, Lichtensteinu i Szwajcarii<br>
						<div style="margin-left:12px"><font color="Green"><b>Obejmuje uszkodzenie:
						Felgi, 
						Opony, 
						Szyby</b></font><br></font></div>');
						}
						else if($extra['translated_extra'] == "Myjnia"){
						echo('
						<br><font size="2"><div style="height:45%;float: left;width: auto;margin-right:2px;"><font color="limeGreen">✓</font></div> Zwalnia z opłaty za zwrot brudnego Pojazdu. Jednak w przypadku konieczności prania tapicerki lub innego specjalistycznego czyszczenia, Najemca dodatkowo zostanie obciążony kosztem tej czynności</b></font><br></font>');
						}
						else if($extra['translated_extra'] == "GPS"){
						echo('
						<br><font size="2"><font color="limeGreen">✓</font> Zawiera urządzenie nawigacyjne');
						}?>
					<div class="col-xs-12 col-sm-3 col-md-2 extra-details" style = "width:100%; position:absolute; bottom:5px;">
					<?php if ( $extra['max_allowed_units'] > 0 ): ?>

                        <div class="row" style="text-align:center; ">
                            <div class="col-xs-4 remove_unit_col">
								
						<?php if($extra['translated_extra'] == "Pakiet Komfort"){
								echo('<button id="dodaj" type="button" onclick="addUnit(\'extra\','. esc_attr( $extra['extra_id'] . ', ' . $extra['max_allowed_units'] ) .')">
								Dodaj
								</button>');
								$suma1 = $najem + $dodatek;
								$sumadodatku1 = $dodatek;
								$dobowa1 = $dobowa;
								//echo '<div id="suma2">' . number_format($suma, 2, ',', ' ') . ' PLN</div>';
								}
								?>
								<?php if($extra['translated_extra'] == "Pakiet Basic"){
								echo('<button id="dodaj1" type="button" class="aktywny" onclick="addUnit(\'extra\','. esc_attr( $extra['extra_id'] . ', ' . $extra['max_allowed_units'] ) .')">
								Dodano
								</button>');
								//$suma1 = $najem + $dodatek;
								//echo '<div id="suma2">' . number_format($suma1, 2, ',', ' ') . ' PLN</div>';
								}
								?>
						<?php if($extra['translated_extra'] == "Pakiet Komfort PLUS"){
								echo('<button id="dodaj2" type="button" onclick="addUnit(\'extra\','. esc_attr( $extra['extra_id'] . ', ' . $extra['max_allowed_units'] ) .')">
								Dodaj
								</button>');
								$suma2 = $najem + $dodatek;
								$sumadodatku2 = $dodatek;
								$dobowa2 = $dobowa;
								//echo number_format($suma2, 2, ',', ' ').' PLN';
								}
								?>
						<?php if($extra['translated_extra'] == "Pakiet PLATINIUM"){
								echo('<button id="dodaj3" type="button" onclick="addUnit(\'extra\','. esc_attr( $extra['extra_id'] . ', ' . $extra['max_allowed_units'] ) .')">
								Dodaj
								</button>');
								$suma3 = $najem + $dodatek;
								$sumadodatku3 = $dodatek;
								$dobowa3 = $dobowa;
								//echo number_format($suma3, 2, ',', ' ').' PLN';
								}
								?>
								<?php if($extra['translated_extra'] == "Myjnia"){
								echo('<button id="dodaj4" type="button" onclick="addUnit(\'extra\','. esc_attr( $extra['extra_id'] . ', ' . $extra['max_allowed_units'] ) .')">
								Dodaj
								</button>');
								$suma4 = $najem + $dodatek;
								$sumadodatku4 = $dodatek;
								$dobowa4 = $dobowa;
								//echo number_format($suma4, 2, ',', ' ').' PLN';
								}
								?>
								<?php if($extra['translated_extra'] == "GPS"){
								echo('<button id="dodaj5" type="button" onclick="addUnit(\'extra\','. esc_attr( $extra['extra_id'] . ', ' . $extra['max_allowed_units'] ) .')">
								Dodaj
								</button>');
								$suma5 = $najem + $dodatek;
								$suma6 = $suma4 + $dodatek;
								$suma7 = $suma1 + $dodatek;
								$suma8 = $suma2 + $dodatek;
								$suma9 = $suma3 + $dodatek;
								$sumadodatku5 = $dodatek;
								$dobowa5 = $dobowa;
								//echo number_format($suma5, 2, ',', ' ').' PLN';
								}
								?>
								
								
						</div>
						
						<div class="col-xs-4 no_padding" style="display: none">
                                <input class="units_qty"
                                       id="extra_units<?= esc_attr( $extra['extra_id'] ); ?>"
                                       max="<?= esc_attr( $extra['max_allowed_units'] ); ?>"
                                       min="0"
                                       name="extra_units[<?= esc_attr( $extra['extra_id'] ); ?>]"
                                       type="number"
                                       value="<?= esc_attr( $extra['selected_quantity'] ); ?>"
                                       />
                                <input type="hidden" name="extra_ids[]" value="<?= esc_attr( $extra['extra_id'] ); ?>"/>

								

                            </div>
                            <div class="col-xs-4 add_unit_col" style="width: auto; text-align:center;margin-left: 5px">

						<?php if($extra['translated_extra'] == "Pakiet Komfort"){
								echo('<button id="usun" class="usun-button" type="button" onclick="removeUnit(\'extra\','. esc_attr( $extra['extra_id'] ) .');">
								Usuń
						</button>
						<center><div id="informacja"></div></center>');}?>
						
						<?php if($extra['translated_extra'] == "Pakiet Komfort PLUS"){
								echo('<button id="usun2" class="usun-button" type="button" onclick="removeUnit(\'extra\','. esc_attr( $extra['extra_id'] ) .');">
								Usuń
						</button>
						<center><div id="informacja2"></div></center>');}?>
						<?php if($extra['translated_extra'] == "Pakiet PLATINIUM"){
								echo('<button id="usun3" class="usun-button" type="button" onclick="removeUnit(\'extra\','. esc_attr( $extra['extra_id'] ) .');">
								Usuń
						</button>
						<center><div id="informacja3"></div></center>');}?>
						<?php if($extra['translated_extra'] == "Pakiet Basic"){
						echo('<button id="usun1" class="usun-button" type="button" onclick="removeUnit(\'extra\','. esc_attr( $extra['extra_id'] ) .');">
						Usuń
						</button>
						<center><div id="informacja1"></div></center>');}?>
						<?php if($extra['translated_extra'] == "Myjnia"){
						echo('<button id="usun4" type="button" onclick="removeUnit(\'extra\','. esc_attr( $extra['extra_id'] ) .');">
						Usuń
						</button>
						<center><div id="informacja4"></div></center>');}?>
						<?php if($extra['translated_extra'] == "GPS"){
						echo('<button id="usun5" type="button" onclick="removeUnit(\'extra\','. esc_attr( $extra['extra_id'] ) .');">
						Usuń
						</button>');}?>
                            </div>
                        </div>
					

                </div>
                <!--Koniec dodatku-->
                

						<?php else: ?>
                        <div class="form-group">
                            <input type="hidden" name="extra_ids[]" value="<?= esc_html( $extra['extra_id'] ); ?>"/>
                            <input class="units_qty"
                                   id="extra_units<?= esc_attr( $extra['extra_id'] ); ?>"
                                   name="extra_units[<?= esc_attr( $extra['extra_id'] ); ?>]"
                                   type="checkbox"<?= esc_html( $extra['selected_quantity'] > 0 ? ' checked="checked"' : '' ); ?>
                                   value="1"/>
								   
                            <div class="col-xs-6 no_padding btn-group">
                                <label for="extra_units<?= esc_attr( $extra['extra_id'] ); ?>"
                                       class="btn button remove_unit checkbox-check">
                                    <span class="glyphicon glyphicon-ok"></span>
                                    <span> </span>
                                </label>
                            </div>
                            <div class="col-xs-6 no_padding btn-group">
                                <label for="extra_units<?= esc_attr( $extra['extra_id'] ); ?>"
                                       class="checkbox-msg <?= esc_html( $extra['selected_quantity'] > 0 ? 'active' : '' ); ?>">
									<?php printString( 'nrs_select_text' ); ?>
                                </label>
                            </div>
                        </div>
					<?php endif; ?>
                </div>
            </div><!--Koniec dodatków-->
			<?php $i++; ?>
		<?php endforeach; ?>
						</div>
		<div id="summary">
			
			<?php
				if ( $complexPickup || $complexReturn ):
					include 'Shared/LocationsSummaryComplexPartial.php';
				else:
					include 'Shared/LocationsSummarySimplePartialStep3.php';
				endif;
			?>
			<!--Podsumowanie - model-->
			
			<div class="box_shadow">
				<div class="nrs-header" style="border-bottom-left-radius: 0;
    border-bottom-right-radius: 0;">Podsumowanie</div>
				<!--Podsumowanie - jpg-->
				<div class="item-image col-xs-122"style="width:auto;">
					<?php if ( $itemModel['item_model_thumb_1_url'] != "" ): ?>

					<img class="item_list" src="<?php print esc_url( $itemModel['item_model_big_thumb_1_url'] ); ?>"
						 alt="<?php print esc_attr( $itemModel['print_translated_manufacturer_name'] . '&nbsp' . $itemModel['print_translated_item_model_name'] . '&nbsp' . $itemModel['via_partner'] ); ?>"/>
						<?php else: ?>
							&nbsp;
						<?php endif; ?>
				</div>
					<!--Podsumowanie - samochód-->
					<div class="col-xs-122 item-detailss item-name" style=" padding:5px;">
					<!--<?= esc_html( $itemModel['print_translated_class_name'] ? $itemModel['print_translated_class_name'] . "" : "" ); ?>-->
					<b><i class="fas fa-car"></i><?= esc_html( $itemModel['print_translated_manufacturer_name'] . ' ' . $itemModel['print_translated_item_model_name'] . ' ' . $itemModel['via_partner'] ); ?></strong></b> lub podobny
					</div>
					 <!--<br>Rodzaj paliwa:<strong><?php print esc_html( $itemModel['print_translated_attribute1_title'] ); ?>--></strong>
					 <div style="background-color:#efefef;padding:5px;"><strong><i class="fas fa-cogs"></i>Skrzynia biegów : <?php print esc_html( $itemModel['print_translated_attribute2_title'] ); ?>
					 <?php if ( $itemModel['show_attribute4'] ): ?></div>
                    <div style="padding:5px;">
                        <i class="fas fa-users"></i>
                        <strong>
							<?php print esc_html( $lang['LANG_ATTRIBUTE_GROUP_DEFAULT_LABEL4_TEXT'] ); ?>:
                        </strong> <?php print esc_html( $itemModel['max_passengers'] ); ?>
                    </div>
				<?php endif; ?>
				
				<!--Cena dobowa najem-->
				<div id ="najem" style = "background-color: #efefef;">
				<div id="cena">
					
						<i class="fas fa-money-bill"></i><b>Cena za najem : <?echo(str_replace(',00','',str_replace('.',',',str_replace(',','&nbsp',number_format(round(round(str_replace(',','.',str_replace('&nbsp;','',$itemModel['unit_per_period_print']['discounted_total_dynamic'] )))),2))))); echo(' PLN x '.$dlugosc);?>
						<?= ( $itemModel['multiplier'] > 1 ? ' x ' . $itemModel['multiplier'] : '' ); ?></b>
					
				</div>
				<!--Cena całkowita za najem-->
				<div id="suma" style="text-align:left; display:inline-block;">
					<span title="">
						<b>Razem : <?php $najem = $dlugosc*round(round(str_replace(',','.',str_replace('&nbsp;','',$itemModel['unit_per_period_print']['discounted_total_dynamic'] ))),2);
						echo number_format($najem, 2, ',', ' ').' PLN';
						?></b>
					</span>
				</div>
				</div>
				<!--Kaucja-->
				<div class="col-xxs-122 col-xs-66 col-sm-22 item-details4" style="padding:5px; margin-left:24px;">
				<?php if ( $settings['conf_deposit_enabled'] == 1 ): ?>
					
					
					
					<div id="kaucja"> <b><?= 'Kaucja : ' . esc_html( $itemModel['unit_long_print']['fixed_deposit'] ); ?></div>
					<div id="kaucja2"></div>
					<div id="kaucja3"></div></b>
				<?php else: ?>
					&nbsp;
				<?php endif; ?>
				</div>
				<!--dodatki-->
				<div id="extras" style="background-color: #efefef; padding:5px;">
				
					<div id="name" style = "margin-left:24px"><b>Dodatki : </div></div>
					<div id="name1">
						<div class = "name">
						Pakiet Komfort:
						<?php echo $dobowa1;?></div>
						<div style="display: inline-block;">
						<?php
								echo "Razem: " . number_format($sumadodatku1, 2, ',', ' ').' PLN';
								?></div>
					</div>
					<div id="name2">
						<div class = "name">
						Pakiet Komfort PLUS:
						<?php echo $dobowa2;?></div>
						<div style="display: inline-block;">
						<?php
								echo "Razem: " . number_format($sumadodatku2, 2, ',', ' ').' PLN';
								?></div>
					</div>
					<div id="name3">
						<div class = "name">
						Pakiet PLATINIUM:
						<?php echo $dobowa3;?></div>
						<div style="display: inline-block;">
						<?php
								echo "Razem: " . number_format($sumadodatku3, 2, ',', ' ').' PLN';
								?></div>
					</div>
					
					<div id="name4">
						<div class = "name">
						Myjnia:
						</div>
						<div style="display: inline-block;">
						<?php
								echo "Razem: " . number_format($sumadodatku4, 2, ',', ' ').' PLN';
								?></div>
					</div>
					<div id="name5">
						<div class = "name">
						GPS:
						<?php echo $dobowa5;?></div>
						<div style="display: inline-block;">
						<?php
								echo "Razem: " . number_format($sumadodatku5, 2, ',', ' ').' PLN';
								?></div>
					</div>
				</b>
				
				<!--Cena za wszystko-->
				<div style = "background-color:#ed1c24; color:white; padding:5px; border-radius: 0px 0px 4px 4px;box-shadow: 1px 3px 3px rgba(0,0,0,0.33);">
				<div id="podsumowanie" style = "margin-left:24px;"><b>
					<?php $suma = $najem;
							echo '<div id="all">Suma : ' . number_format($suma, 2, ',', ' ') . ' PLN</div>';
							echo '<div id="all1">Suma : ' . number_format($suma1, 2, ',', ' ') . ' PLN</div>';
							echo '<div id="all2">Suma : ' . number_format($suma2, 2, ',', ' ') . ' PLN</div>';
							echo '<div id="all3">Suma : ' . number_format($suma3, 2, ',', ' ') . ' PLN</div>';
							echo '<div id="all4">Suma : ' . number_format($suma4, 2, ',', ' ') . ' PLN</div>';
							echo '<div id="all5">Suma : ' . number_format($suma5, 2, ',', ' ') . ' PLN</div>';
							echo '<div id="all6">Suma : ' . number_format($suma6, 2, ',', ' ') . ' PLN</div>';
							echo '<div id="all7">Suma : ' . number_format($suma7, 2, ',', ' ') . ' PLN</div>';
							echo '<div id="all8">Suma : ' . number_format($suma8, 2, ',', ' ') . ' PLN</div>';
							echo '<div id="all9">Suma : ' . number_format($suma9, 2, ',', ' ') . ' PLN</div>';?>	
				</div></b></font>
				
			</div>	
			
	</div>
<?php if ( $gotAnyExtras == false ): ?>
            <div class="no-items">
				<?= esc_html( $lang['LANG_NO_EXTRAS_AVAILABLE_CLICK_CONTINUE_TEXT'] ); ?>
            </div>
		<?php endif; ?>
        <div class="clear"></div>
        <div class="row car-rental-edition-buttons">
            <div class="col-xs-12">
                <input type="hidden" name="<?= esc_attr( $extPrefix . $orderCodeParam ); ?>" value="<?= esc_attr( $orderCode ); ?>"/>
                <input type="hidden" name="<?= esc_attr( $extPrefix ); ?>do_not_flush" value="yes"/>
				<?php if ( $newOrder == false ): ?>
                    <input type="submit" name="<?= esc_attr( $extPrefix ); ?>cancel_order" class="float_left"
                           value="<?= esc_html( $lang['LANG_CANCEL_ORDER_TEXT'] ); ?>"/>
                    <button id="<?= esc_attr( $extPrefix ); ?>do_search" name="<?= esc_attr( $extPrefix ); ?>do_search4" class="float_right"
                            type="submit"><?= esc_html( $lang['LANG_CONTINUE_TEXT'] ); ?></button>
				<?php else: ?>
					<?php if ( $settings['conf_universal_analytics_events_tracking'] == 1 ): ?>
                        <!-- Note: Do not translate events to track well inter-language events -->
                        <button id="<?= esc_attr( $extPrefix ); ?>do_search" name="<?= esc_attr( $extPrefix ); ?>do_search4" type="submit"
                                class="float_right" onclick="ga('send', 'event', '<?= esc_js( $extName ); ?>', 'Click', '4. Continue to summary');">
							<?= esc_html( $lang['LANG_CONTINUE_TEXT'] ); ?></button>
					<?php else: ?>
                        <button id="<?= esc_attr( $extPrefix ); ?>do_search" name="<?= esc_attr( $extPrefix ); ?>do_search4" class="float_right"
                                type="submit"><?= esc_html( $lang['LANG_CONTINUE_TEXT'] ); ?></button>
					<?php endif; ?>
				<?php endif; ?>
                <input type="hidden" name="<?= esc_attr( $extPrefix ); ?>came_from_step3" value="yes"/>
            </div>
        </div>
    </form>
    <div class="clear">&nbsp;</div>
</div></div>
	
		
    </form>
    <div class="clear">&nbsp;</div>
</div>
<script>
$(document).ready(function () {
    $('#do_search4').click(function (e) {
        var elements = ['#dodaj', '#dodaj1', '#dodaj2', '#dodaj3', '#dodaj4', '#dodaj5'];
        var foundActive = false;

        for (var i = 0; i < elements.length; i++) {
            if ($(elements[i]).hasClass('aktywny')) {
                foundActive = true;
                break;
            }
        }

        if (foundActive) {
            var extraId = <?php echo json_encode($extra['extra_id']); ?>;
            var maxAllowedUnits = <?php echo json_encode($extra['max_allowed_units']); ?>;
            addUnit('extra', extraId, maxAllowedUnits);
        } else {
            e.preventDefault(); // Zatrzymuje domyślne zachowanie przycisku
            // Tutaj możesz dodać dodatkowe działania lub zmienić kod, jeśli chcesz.
        }
    });
});
</script>

<?php if($itemModel['print_translated_class_name'] == 'Segment SUV MP+'){
echo("<script>
$(document).ready(function(){ 

$('#dodaj').click(function() {
	$('#kaucja').hide();
	$('#kaucja2').html('<b>Kaucja : </b>1 000,00 PLN');
	$('#name1').show();
	$('#all').hide();
	$('#all1').show();
	$('#name4').hide();
	$('#dodatek3').css({
        'background-color': 'rgba(255, 255, 255, 0.79)',
        'background-image': 'linear-gradient(184deg, rgba(255, 255, 255, 0.79) 75%, rgba(255, 0, 0, 0.8) 100%)'
      });
  }); 
$('#usun').click(function() {
   $('#kaucja').show();
   $('#kaucja2').html('');
   $('#name1').hide();
   $('#all').show();
   $('#all1').hide();
   $('#dodatek3').css('background-color', '');
   $('#dodatek3').css('background-image', '');
 });
   
  });
});
</script>");}else if($itemModel['print_translated_class_name'] == 'Segment SUV DP+'){
	echo("<script>
$(document).ready(function(){ 

$('#dodaj').click(function() {
	$('#kaucja').hide();
	$('#kaucja2').html('<b>Kaucja : </b>1 000,00 PLN');
	$('#name1').show();
	$('#all').hide();
	$('#all1').show();
	$('#name4').hide();
	$('#dodatek3').css({
        'background-color': 'rgba(255, 255, 255, 0.79)',
        'background-image': 'linear-gradient(184deg, rgba(255, 255, 255, 0.79) 75%, rgba(255, 0, 0, 0.8) 100%)'
      });
  }); 
$('#usun').click(function() {
   $('#kaucja').show();
   $('#kaucja2').html('');
   $('#name1').hide();
   $('#all').show();
   $('#all1').hide();
   $('#dodatek3').css('background-color', '');
	$('#dodatek3').css('background-image', '');
  });
});
</script>");}else if($itemModel['print_translated_class_name'] == 'Segment E+'){
	echo("<script>
$(document).ready(function(){ 

$('#dodaj').click(function() {
	$('#kaucja').hide();
	$('#kaucja2').html('<b>Kaucja : </b>1 000,00 PLN');
	$('#name1').show();
	$('#all').hide();
	$('#all1').show();
	$('#name4').hide();
	$('#dodatek3').css({
        'background-color': 'rgba(255, 255, 255, 0.79)',
        'background-image': 'linear-gradient(184deg, rgba(255, 255, 255, 0.79) 75%, rgba(255, 0, 0, 0.8) 100%)'
      });
  }); 
$('#usun').click(function() {
   $('#kaucja').show();
   $('#kaucja2').html('');
   $('#name1').hide();
   $('#all').show();
   $('#all1').hide();
   $('#dodatek3').css('background-color', '');
   $('#dodatek3').css('background-image', '');
 });
  });
});
</script>");}else if($itemModel['print_translated_item_model_name'] == 'RX'){
	echo("<script>
$(document).ready(function(){ 

$('#dodaj').click(function() {
	$('#kaucja').hide();
	$('#kaucja2').html('<b>Kaucja : </b>1 000,00 PLN');
	$('#name1').show();
	$('#all').hide();
	$('#all1').show();
	$('#name4').hide();
	$('#dodatek3').css({
        'background-color': 'rgba(255, 255, 255, 0.79)',
        'background-image': 'linear-gradient(184deg, rgba(255, 255, 255, 0.79) 75%, rgba(255, 0, 0, 0.8) 100%)'
      });
  }); 
$('#usun').click(function() {
   $('#kaucja').show();
   $('#kaucja2').html('');
   $('#name1').hide();
   $('#all').show();
   $('#all1').hide();
   $('#dodatek3').css('background-color', '');
   $('#dodatek3').css('background-image', '');
  });
});
</script>");}else if($itemModel['print_translated_item_model_name'] == 'MERCEDES GLC'){
	echo("<script>
$(document).ready(function(){ 

$('#dodaj').click(function() {
	$('#kaucja').hide();
	$('#kaucja2').html('<b>Kaucja : </b>1 000,00 PLN');
	$('#name1').show();
	$('#all').hide();
	$('#all1').show();
	$('#name4').hide();
	$('#dodatek3').css({
        'background-color': 'rgba(255, 255, 255, 0.79)',
        'background-image': 'linear-gradient(184deg, rgba(255, 255, 255, 0.79) 75%, rgba(255, 0, 0, 0.8) 100%)'
      });
  }); 
$('#usun').click(function() {
   $('#kaucja').show();
   $('#kaucja2').html('');
   $('#name1').hide();
   $('#all').show();
   $('#all1').hide();
   $('#dodatek3').css('background-color', '');
   $('#dodatek3').css('background-image', '');
  });
});
</script>");}else if($itemModel['print_translated_item_model_name'] == 'VOLVO XC60'){
	echo("<script>
$(document).ready(function(){ 

$('#dodaj').click(function() {
	$('#kaucja').hide();
	$('#kaucja2').html('<b>Kaucja : </b>1 000,00 PLN');
	$('#name1').show();
	$('#all').hide();
	$('#all1').show();
	$('#name4').hide();
	$('#dodatek3').css({
        'background-color': 'rgba(255, 255, 255, 0.79)',
        'background-image': 'linear-gradient(184deg, rgba(255, 255, 255, 0.79) 75%, rgba(255, 0, 0, 0.8) 100%)'
      });
  }); 
$('#usun').click(function() {
   $('#kaucja').show();
   $('#kaucja2').html('');
   $('#name1').hide();
   $('#all').show();
   $('#all1').hide();
   $('#dodatek3').css('background-color', '');
   $('#dodatek3').css('background-image', '');
  });
});
</script>");}else if($itemModel['print_translated_item_model_name'] == 'GLE'){
	echo("<script>
$(document).ready(function(){ 

$('#dodaj').click(function() {
	$('#kaucja').hide();
	$('#kaucja2').html('<b>Kaucja : </b>1 000,00 PLN');
	$('#name1').show();
	$('#all').hide();
	$('#all1').show();
	$('#name4').hide();
	$('#dodatek3').css({
        'background-color': 'rgba(255, 255, 255, 0.79)',
        'background-image': 'linear-gradient(184deg, rgba(255, 255, 255, 0.79) 75%, rgba(255, 0, 0, 0.8) 100%)'
      });
  }); 
$('#usun').click(function() {
   $('#kaucja').show();
   $('#kaucja2').html('');
   $('#name1').hide();
   $('#all').show();
   $('#all1').hide();
   $('#dodatek3').css('background-color', '');
   $('#dodatek3').css('background-image', '');
  });
});
</script>");}else if($itemModel['print_translated_item_model_name'] == '718 Cayman'){
	echo("<script>
$(document).ready(function(){ 

$('#dodaj').click(function() {
	$('#kaucja').hide();
	$('#kaucja2').html('<b>Kaucja : </b>2 000,00 PLN');
	$('#name1').show();
	$('#all').hide();
	$('#all1').show();
	$('#name4').hide();
	$('#dodatek3').css({
        'background-color': 'rgba(255, 255, 255, 0.79)',
        'background-image': 'linear-gradient(184deg, rgba(255, 255, 255, 0.79) 75%, rgba(255, 0, 0, 0.8) 100%)'
      });
  }); 
$('#usun').click(function() {
   $('#kaucja').show();
   $('#kaucja2').html('');
   $('#name1').hide();
   $('#all').show();
   $('#all1').hide();
   $('#dodatek3').css('background-color', '');
   $('#dodatek3').css('background-image', '');
  });
});
</script>");}
	else{
		echo("<script>
$(document).ready(function(){ 

$('#dodaj').click(function() {
	$('#kaucja').hide();
	$('#kaucja2').html('<b>Kaucja : </b>1,00 PLN');
	$('#name1').show();
	$('#all').hide();
	$('#all1').show();
	$('#name4').hide();
	$('#dodatek3').css({
        'background-color': 'rgba(255, 255, 255, 0.79)',
        'background-image': 'linear-gradient(184deg, rgba(255, 255, 255, 0.79) 75%, rgba(255, 0, 0, 0.8) 100%)'
      });
  }); 
$('#usun').click(function() {
   $('#kaucja').show();
   $('#kaucja2').html('');
   $('#name1').hide();
   $('#all').show();
   $('#all1').hide();
   $('#dodatek3').css('background-color', '');
   $('#dodatek3').css('background-image', '');
  });
});
	</script>");};


	?>


<?php if($itemModel['print_translated_class_name'] == 'Segment SUV MP+'){
echo("<script>
$(document).ready(function(){ 

$('#dodaj2').click(function() {
	$('#kaucja').hide();
	$('#kaucja2').html('<b>Kaucja : </b>1 000,00 PLN');
	$('#name2').show();
	$('#all').hide();
	$('#all2').show();
	$('#name4').hide();
	$('#dodatek2').css({
        'background-color': 'rgba(255, 255, 255, 0.79)',
        'background-image': 'linear-gradient(184deg, rgba(255, 255, 255, 0.79) 75%, rgba(255, 0, 0, 0.8) 100%)'
      });
  }); 
$('#usun2').click(function() {
   $('#kaucja').show();
   $('#kaucja2').html('');
   $('#name2').hide();
   $('#all').show();
   $('#all2').hide();
   $('#dodatek2').css('background-color', '');
   $('#dodatek2').css('background-image', '');
  });
});
</script>");}else if($itemModel['print_translated_class_name'] == 'Segment SUV DP+'){
	echo("<script>
$(document).ready(function(){ 

$('#dodaj2').click(function() {
	$('#kaucja').hide();
	$('#kaucja2').html('<b>Kaucja : </b>1 000,00 PLN');
	$('#name2').show();
	$('#all').hide();
	$('#all2').show();
	$('#name4').hide();
	$('#dodatek2').css({
        'background-color': 'rgba(255, 255, 255, 0.79)',
        'background-image': 'linear-gradient(184deg, rgba(255, 255, 255, 0.79) 75%, rgba(255, 0, 0, 0.8) 100%)'
      });
  }); 
$('#usun2').click(function() {
   $('#kaucja').show();
   $('#kaucja2').html('');
   $('#name2').hide();
   $('#all').show();
   $('#all2').hide();
   $('#dodatek2').css('background-color', '');
   $('#dodatek2').css('background-image', '');
  });
});
</script>");}else if($itemModel['print_translated_class_name'] == 'Segment E+'){
	echo("<script>
$(document).ready(function(){ 

$('#dodaj2').click(function() {
	$('#kaucja').hide();
	$('#kaucja2').html('<b>Kaucja : </b>1 000,00 PLN');
	$('#name2').show();
	$('#all').hide();
	$('#all2').show();
	$('#name4').hide();
	$('#dodatek2').css({
        'background-color': 'rgba(255, 255, 255, 0.79)',
        'background-image': 'linear-gradient(184deg, rgba(255, 255, 255, 0.79) 75%, rgba(255, 0, 0, 0.8) 100%)'
      });
  }); 
$('#usun2').click(function() {
   $('#kaucja').show();
   $('#kaucja2').html('');
   $('#name2').hide();
   $('#all').show();
   $('#all2').hide();
   $('#dodatek2').css('background-color', '');
   $('#dodatek2').css('background-image', '');
  });
});
</script>");}else if($itemModel['print_translated_item_model_name'] == 'RX'){
	echo("<script>
$(document).ready(function(){ 

$('#dodaj2').click(function() {
	$('#kaucja').hide();
	$('#kaucja2').html('<b>Kaucja : </b>1 000,00 PLN');
	$('#name2').show();
	$('#all').hide();
	$('#all2').show();
	$('#name4').hide();
	$('#dodatek2').css({
        'background-color': 'rgba(255, 255, 255, 0.79)',
        'background-image': 'linear-gradient(184deg, rgba(255, 255, 255, 0.79) 75%, rgba(255, 0, 0, 0.8) 100%)'
      });
  }); 
$('#usun2').click(function() {
   $('#kaucja').show();
   $('#kaucja2').html('');
   $('#name2').hide();
   $('#all').show();
   $('#all2').hide();
   $('#dodatek2').css('background-color', '');
   $('#dodatek2').css('background-image', '');
  });
});
</script>");}else if($itemModel['print_translated_item_model_name'] == 'MERCEDES GLC'){
	echo("<script>
$(document).ready(function(){ 

$('#dodaj2').click(function() {
	$('#kaucja').hide();
	$('#kaucja2').html('<b>Kaucja : </b>1 000,00 PLN');
	$('#name2').show();
	$('#all').hide();
	$('#all2').show();
	$('#name4').hide();
	$('#dodatek2').css({
        'background-color': 'rgba(255, 255, 255, 0.79)',
        'background-image': 'linear-gradient(184deg, rgba(255, 255, 255, 0.79) 75%, rgba(255, 0, 0, 0.8) 100%)'
      });
  }); 
$('#usun2').click(function() {
   $('#kaucja').show();
   $('#kaucja2').html('');
   $('#name2').hide();
   $('#all').show();
   $('#all2').hide();
   $('#dodatek2').css('background-color', '');
   $('#dodatek2').css('background-image', '');
  });
});
</script>");}else if($itemModel['print_translated_item_model_name'] == 'VOLVO XC60'){
	echo("<script>
$(document).ready(function(){ 

$('#dodaj2').click(function() {
	$('#kaucja').hide();
	$('#kaucja2').html('<b>Kaucja : </b>1 000,00 PLN');
	$('#name2').show();
	$('#all').hide();
	$('#all2').show();
	$('#name4').hide();
	$('#dodatek2').css({
        'background-color': 'rgba(255, 255, 255, 0.79)',
        'background-image': 'linear-gradient(184deg, rgba(255, 255, 255, 0.79) 75%, rgba(255, 0, 0, 0.8) 100%)'
      });
  }); 
$('#usun2').click(function() {
   $('#kaucja').show();
   $('#kaucja2').html('');
   $('#name2').hide();
   $('#all').show();
   $('#all2').hide();
   $('#dodatek2').css('background-color', '');
   $('#dodatek2').css('background-image', '');
  });
});
</script>");}else if($itemModel['print_translated_item_model_name'] == 'GLE'){
	echo("<script>
$(document).ready(function(){ 

$('#dodaj2').click(function() {
	$('#kaucja').hide();
	$('#kaucja2').html('<b>Kaucja : </b>1 000,00 PLN');
	$('#name2').show();
	$('#all').hide();
	$('#all2').show();
	$('#name4').hide();
	$('#dodatek2').css({
        'background-color': 'rgba(255, 255, 255, 0.79)',
        'background-image': 'linear-gradient(184deg, rgba(255, 255, 255, 0.79) 75%, rgba(255, 0, 0, 0.8) 100%)'
      });
  }); 
$('#usun2').click(function() {
   $('#kaucja').show();
   $('#kaucja2').html('');
   $('#name2').hide();
   $('#all').show();
   $('#all2').hide();
   $('#dodatek2').css('background-color', '');
   $('#dodatek2').css('background-image', '');
  });
});
</script>");}else if($itemModel['print_translated_item_model_name'] == '718 Cayman'){
	echo("<script>
$(document).ready(function(){ 

$('#dodaj2').click(function() {
	$('#kaucja').hide();
	$('#kaucja2').html('<b>Kaucja : </b>2 000,00 PLN');
	$('#name2').show();
	$('#all').hide();
	$('#all2').show();
	$('#name4').hide();
	$('#dodatek2').css({
        'background-color': 'rgba(255, 255, 255, 0.79)',
        'background-image': 'linear-gradient(184deg, rgba(255, 255, 255, 0.79) 75%, rgba(255, 0, 0, 0.8) 100%)'
      });
  }); 
$('#usun2').click(function() {
   $('#kaucja').show();
   $('#kaucja2').html('');
   $('#name2').hide();
   $('#all').show();
   $('#all2').hide();
   $('#dodatek2').css('background-color', '');
   $('#dodatek2').css('background-image', '');
  });
});
</script>");}
	else{
		echo("<script>
$(document).ready(function(){ 

$('#dodaj2').click(function() {
	$('#kaucja').hide();
	$('#kaucja2').html('<b>Kaucja : </b>1,00 PLN');
	$('#name2').show();
	$('#all').hide();
	$('#all2').show();
	$('#name4').hide();
	$('#dodatek2').css({
        'background-color': 'rgba(255, 255, 255, 0.79)',
        'background-image': 'linear-gradient(184deg, rgba(255, 255, 255, 0.79) 75%, rgba(255, 0, 0, 0.8) 100%)'
      });
  }); 
$('#usun2').click(function() {
   $('#kaucja').show();
   $('#kaucja2').html('');
   $('#name2').hide();
   $('#all').show();
   $('#all2').hide();
   $('#dodatek2').css('background-color', '');
   $('#dodatek2').css('background-image', '');
  });
});
	</script>");};


	?>




<?php if($itemModel['print_translated_class_name'] == 'Segment SUV MP+'){
echo("<script>
$(document).ready(function(){ 

$('#dodaj3').click(function() {
	$('#kaucja').hide();
	$('#kaucja2').html('<b>Kaucja : </b>1 000,00 PLN');
	$('#name3').show();
	$('#all').hide();
	$('#all3').show();
	$('#name4').hide();
	$('#dodatek1').css({
        'background-color': 'rgba(255, 255, 255, 0.79)',
        'background-image': 'linear-gradient(184deg, rgba(255, 255, 255, 0.79) 75%, rgba(255, 0, 0, 0.8) 100%)'
      });
  }); 
$('#usun3').click(function() {
   $('#kaucja').show();
   $('#kaucja2').html('');
   $('#name3').hide();
   $('#all').show();
   $('#all3').hide();
   $('#dodatek1').css('background-color', '');
   $('#dodatek1').css('background-image', '');
  });
});
</script>");}else if($itemModel['print_translated_class_name'] == 'Segment SUV DP+'){
	echo("<script>
$(document).ready(function(){ 

$('#dodaj3').click(function() {
	$('#kaucja').hide();
	$('#kaucja2').html('<b>Kaucja : </b>1 000,00 PLN');
	$('#name3').show();
	$('#all').hide();
	$('#all3').show();
	$('#name4').hide();
	$('#dodatek1').css({
        'background-color': 'rgba(255, 255, 255, 0.79)',
        'background-image': 'linear-gradient(184deg, rgba(255, 255, 255, 0.79) 75%, rgba(255, 0, 0, 0.8) 100%)'
      });
  }); 
$('#usun3').click(function() {
   $('#kaucja').show();
   $('#kaucja2').html('');
   $('#name3').hide();
   $('#all').show();
   $('#all3').hide();
   $('#dodatek1').css('background-color', '');
   $('#dodatek1').css('background-image', '');
  });
});
</script>");}else if($itemModel['print_translated_class_name'] == 'Segment E+'){
	echo("<script>
$(document).ready(function(){ 

$('#dodaj3').click(function() {
	$('#kaucja').hide();
	$('#kaucja2').html('<b>Kaucja : </b>1 000,00 PLN');
	$('#name3').show();
	$('#all').hide();
	$('#all3').show();
	$('#name4').hide();
	$('#dodatek1').css({
        'background-color': 'rgba(255, 255, 255, 0.79)',
        'background-image': 'linear-gradient(184deg, rgba(255, 255, 255, 0.79) 75%, rgba(255, 0, 0, 0.8) 100%)'
      });
  }); 
$('#usun3').click(function() {
   $('#kaucja').show();
   $('#kaucja2').html('');
   $('#name3').hide();
   $('#all').show();
   $('#all3').hide();
   $('#dodatek1').css('background-color', '');
   $('#dodatek1').css('background-image', '');
  });
});
</script>");}else if($itemModel['print_translated_item_model_name'] == 'RX'){
	echo("<script>
$(document).ready(function(){ 

$('#dodaj3').click(function() {
	$('#kaucja').hide();
	$('#kaucja2').html('<b>Kaucja : </b>1 000,00 PLN');
	$('#name3').show();
	$('#all').hide();
	$('#all3').show();
	$('#name4').hide();
	$('#dodatek1').css({
        'background-color': 'rgba(255, 255, 255, 0.79)',
        'background-image': 'linear-gradient(184deg, rgba(255, 255, 255, 0.79) 75%, rgba(255, 0, 0, 0.8) 100%)'
      });
  }); 
$('#usun3').click(function() {
   $('#kaucja').show();
   $('#kaucja2').html('');
   $('#name3').hide();
   $('#all').show();
   $('#all3').hide();
   $('#dodatek1').css('background-color', '');
   $('#dodatek1').css('background-image', '');
  });
});
</script>");}else if($itemModel['print_translated_item_model_name'] == 'MERCEDES GLC'){
	echo("<script>
$(document).ready(function(){ 

$('#dodaj3').click(function() {
	$('#kaucja').hide();
	$('#kaucja2').html('<b>Kaucja : </b>1 000,00 PLN');
	$('#name3').show();
	$('#all').hide();
	$('#all3').show();
	$('#name4').hide();
	$('#dodatek1').css({
        'background-color': 'rgba(255, 255, 255, 0.79)',
        'background-image': 'linear-gradient(184deg, rgba(255, 255, 255, 0.79) 75%, rgba(255, 0, 0, 0.8) 100%)'
      });
  }); 
$('#usun3').click(function() {
   $('#kaucja').show();
   $('#kaucja2').html('');
   $('#name3').hide();
   $('#all').show();
   $('#all3').hide();
   $('#dodatek1').css('background-color', '');
   $('#dodatek1').css('background-image', '');
  });
});
</script>");}else if($itemModel['print_translated_item_model_name'] == 'VOLVO XC60'){
	echo("<script>
$(document).ready(function(){ 

$('#dodaj3').click(function() {
	$('#kaucja').hide();
	$('#kaucja2').html('<b>Kaucja : </b>1 000,00 PLN');
	$('#name3').show();
	$('#all').hide();
	$('#all3').show();
	$('#name4').hide();
	$('#dodatek1').css({
        'background-color': 'rgba(255, 255, 255, 0.79)',
        'background-image': 'linear-gradient(184deg, rgba(255, 255, 255, 0.79) 75%, rgba(255, 0, 0, 0.8) 100%)'
      });
  }); 
$('#usun3').click(function() {
   $('#kaucja').show();
   $('#kaucja2').html('');
   $('#name3').hide();
   $('#all').show();
   $('#all3').hide();
   $('#dodatek1').css('background-color', '');
   $('#dodatek1').css('background-image', '');
  });
});
</script>");}else if($itemModel['print_translated_item_model_name'] == 'GLE'){
	echo("<script>
$(document).ready(function(){ 

$('#dodaj3').click(function() {
	$('#kaucja').hide();
	$('#kaucja2').html('<b>Kaucja : </b>1 000,00 PLN');
	$('#name3').show();
	$('#all').hide();
	$('#all3').show();
	$('#name4').hide();
	$('#dodatek1').css({
        'background-color': 'rgba(255, 255, 255, 0.79)',
        'background-image': 'linear-gradient(184deg, rgba(255, 255, 255, 0.79) 75%, rgba(255, 0, 0, 0.8) 100%)'
      });
  }); 
$('#usun3').click(function() {
   $('#kaucja').show();
   $('#kaucja2').html('');
   $('#name3').hide();
   $('#all').show();
   $('#all3').hide();
   $('#dodatek1').css('background-color', '');
   $('#dodatek1').css('background-image', '');
  });
});
</script>");}else if($itemModel['print_translated_item_model_name'] == '718 Cayman'){
	echo("<script>
$(document).ready(function(){ 

$('#dodaj3').click(function() {
	$('#kaucja').hide();
	$('#kaucja2').html('<b>Kaucja : </b>2 000,00 PLN');
	$('#name3').show();
	$('#all').hide();
	$('#all3').show();
	$('#name4').hide();
	$('#dodatek1').css({
        'background-color': 'rgba(255, 255, 255, 0.79)',
        'background-image': 'linear-gradient(184deg, rgba(255, 255, 255, 0.79) 75%, rgba(255, 0, 0, 0.8) 100%)'
      });
  }); 
$('#usun3').click(function() {
   $('#kaucja').show();
   $('#kaucja2').html('');
   $('#name3').hide();
   $('#all').show();
   $('#all3').hide();
   $('#dodatek1').css('background-color', '');
   $('#dodatek1').css('background-image', '');
  });
});
</script>");}
	else{
		echo("<script>
$(document).ready(function(){ 

$('#dodaj3').click(function() {
	$('#kaucja').hide();
	$('#kaucja2').html('<b>Kaucja : </b>1,00 PLN');
	$('#name3').show();
	$('#all').hide();
	$('#all3').show();
	$('#name4').hide();
	$('#dodatek1').css({
        'background-color': 'rgba(255, 255, 255, 0.79)',
        'background-image': 'linear-gradient(184deg, rgba(255, 255, 255, 0.79) 75%, rgba(255, 0, 0, 0.8) 100%)'
      });
  }); 
$('#usun3').click(function() {
   $('#kaucja').show();
   $('#kaucja2').html('');
   $('#name3').hide();
   $('#all').show();
   $('#all3').hide();
   $('#dodatek1').css('background-color', '');
   $('#dodatek1').css('background-image', '');
  });
});
	</script>");};


	?>
<script>
$(document).ready(function(){ 

$('#dodaj4').click(function() {

	$('#name4').show();
	$('#all').hide();
	$('#all4').show();
	$('#dodatek4').css({
        'background-color': 'rgba(255, 255, 255, 0.79)',
        'background-image': 'linear-gradient(184deg, rgba(255, 255, 255, 0.79) 75%, rgba(255, 0, 0, 0.8) 100%)'
      });
  }); 
$('#usun4').click(function() {
   $('#name4').hide();
   $('#all').show();
   $('#all4').hide();
   $('#dodatek4').css('background-color', '');
   $('#dodatek4').css('background-image', '');
  });
});
$('#dodaj5').click(function() {

$('#name5').show();
$('#all').hide();
$('#all5').show();
$('#dodatek5').css({
        'background-color': 'rgba(255, 255, 255, 0.79)',
        'background-image': 'linear-gradient(184deg, rgba(255, 255, 255, 0.79) 75%, rgba(255, 0, 0, 0.8) 100%)'
      });
}); 
$('#usun5').click(function() {
$('#name5').hide();
$('#all').show();
$('#all5').hide();
$('#dodatek5').css('background-color', '');
   $('#dodatek5').css('background-image', '');
});
	</script>



<script>
var dodajClicked = false;
var dodaj2Clicked = false;
var dodaj3Clicked = false;	
var dodaj4Clicked = false;
var dodaj5Clicked = false;

$(document).ready(function() {
	
	$('#dodaj').click(function() {
    dodajClicked = true;
    updateDodatkiText();
  });
  
  $('#usun').click(function() {
    dodajClicked = false;
    updateDodatkiText();
  });
  $('#dodaj2').click(function() {
    dodaj2Clicked = true;
    updateDodatkiText();
  });
  
  $('#usun2').click(function() {
    dodaj2Clicked = false;
    updateDodatkiText();
  });

  $('#dodaj3').click(function() {
    dodaj3Clicked = true;
    updateDodatkiText();
  });
  
  $('#usun3').click(function() {
    dodaj3Clicked = false;
    updateDodatkiText();
  });
 
	$('#dodaj4').click(function() {
    dodaj4Clicked = true;
    updateDodatkiText();
  });
  
  $('#usun4').click(function() {
    dodaj4Clicked = false;
    updateDodatkiText();
  });
  
  $('#dodaj5').click(function() {
    dodaj5Clicked = true;
    updateDodatkiText();
  });
  
  $('#usun5').click(function() {
    dodaj5Clicked = false;
    updateDodatkiText();
  });
});

function updateDodatkiText() {
  
  if (dodajClicked && dodaj5Clicked && !dodaj4Clicked && !dodaj2Clicked && !dodaj3Clicked) {
    $('#name1').show();
    $('#name5').show();
    $('#all7').show();
    $('#all').hide();
    $('#all1').hide();
    $('#all4').hide();
    $('#all5').hide();
    $('#all6').hide();
	$('#all8').hide();
  } else if (dodajClicked && !dodaj5Clicked && !dodaj4Clicked && !dodaj2Clicked && !dodaj3Clicked) {
    $('#name1').show();
    $('#all1').show();
    $('#name5').hide();
    $('#all5').hide();
    $('#all').hide();
    $('#all4').hide();
    $('#all6').hide();
    $('#all7').hide();
	$('#all8').hide();
  } 
  else if (dodajClicked && dodaj5Clicked && dodaj4Clicked && !dodaj2Clicked && !dodaj3Clicked){
	$('#name1').show();
    $('#name5').show();
    $('#all7').show();
    $('#all').hide();
    $('#all1').hide();
    $('#all4').hide();
    $('#all5').hide();
    $('#all6').hide();
	$('#all8').hide();
	$('#name4').hide();
	$('#dodaj4').removeClass('aktywny');
	$('#dodatek4').css('background-color', '');
   $('#dodatek4').css('background-image', '');
  }
  else if (!dodajClicked && dodaj5Clicked && !dodaj4Clicked && !dodaj2Clicked && !dodaj3Clicked) {
    $('#name5').show();
    $('#all5').show();
    $('#name1').hide();
    $('#all1').hide();
    $('#all').hide();
    $('#all4').hide();
    $('#all6').hide();
    $('#all7').hide();
	$('#all8').hide();
	$('#all9').hide();
  } else if (!dodajClicked && dodaj5Clicked && dodaj4Clicked && !dodaj2Clicked && !dodaj3Clicked) {
    $('#name1').hide();
    $('#name4').show();
    $('#name5').show();
    $('#all1').hide();
    $('#all4').hide();
    $('#all5').hide();
    $('#all6').show();
    $('#all5').hide();
    $('#all').hide();
	$('#all7').hide();
	$('#all8').hide();
	$('#all9').hide();
	$('#dodaj4').addClass('aktywny');
	$('#usun4').show();
	$('#dodaj4').html('Dodano');
   $('#dodatek4').css({
        'background-color': 'rgba(255, 255, 255, 0.79)',
        'background-image': 'linear-gradient(184deg, rgba(255, 255, 255, 0.79) 75%, rgba(255, 0, 0, 0.8) 100%)'
      });

  } else if (dodaj4Clicked && !dodaj5Clicked && !dodajClicked && !dodaj2Clicked && !dodaj3Clicked) {
    $('#name4').show();
    $('#all').hide();
    $('#all5').hide();
    $('#all4').show();
    $('#all6').hide();
    $('#all1').hide();
    $('#name1').hide();
    $('#name5').hide();
    $('#all7').hide();
	$('#dodaj4').addClass('aktywny');
	$('#usun4').show();
	$('#dodaj4').html('Dodano');
   $('#dodatek4').css({
        'background-color': 'rgba(255, 255, 255, 0.79)',
        'background-image': 'linear-gradient(184deg, rgba(255, 255, 255, 0.79) 75%, rgba(255, 0, 0, 0.8) 100%)'
      });
  } else if (!dodaj4Clicked && dodaj5Clicked && !dodajClicked && !dodaj2Clicked && !dodaj3Clicked) {
    $('#name5').show();
    $('#all5').show();
    $('#name1').hide();
    $('#all1').hide();
    $('#all').hide();
    $('#all4').hide();
    $('#all6').hide();
    $('#all7').hide();
	$('#all8').hide();
	$('#all9').hide();
  } else if (!dodaj4Clicked && !dodaj5Clicked && dodajClicked && !dodaj2Clicked && !dodaj3Clicked) {
    $('#name1').show();
    $('#all1').show();
    $('#name5').hide();
    $('#all5').hide();
    $('#all').hide();
    $('#all4').hide();
    $('#all6').hide();
    $('#all7').hide();
  } else if (dodaj2Clicked && !dodaj3Clicked && !dodaj4Clicked && !dodajClicked && dodaj5Clicked) {
  $('#name2').show();
  $('#all8').show();
  $('#name3').hide();
  $('#name5').show();
  $('#all3').hide();
  $('#all').hide();
  $('#all1').hide();
  $('#all4').hide();
  $('#all5').hide();
  $('#all6').hide();
  $('#all7').hide();
  $('#all2').hide();
}//gps,komfort+,myjnia
else if (dodaj2Clicked && !dodaj3Clicked && dodaj4Clicked && !dodajClicked && dodaj5Clicked) {
  $('#name2').show();
  $('#all8').show();
  $('#name3').hide();
  $('#name5').show();
  $('#all3').hide();
  $('#all').hide();
  $('#all1').hide();
  $('#all4').hide();
  $('#all5').hide();
  $('#all6').hide();
  $('#all7').hide();
  $('#all2').hide();
  $('#all9').hide();
  $('#dodaj4').removeClass('aktywny');
	$('#dodatek4').css('background-color', '');
   $('#dodatek4').css('background-image', '');
}
  else if (dodaj2Clicked && !dodaj3Clicked && !dodaj4Clicked && !dodajClicked && !dodaj5Clicked) {
  $('#name2').show();
  $('#all2').show();
  $('#name3').hide();
  $('#all3').hide();
  $('#all').hide();
  $('#all1').hide();
  $('#all4').hide();
  $('#all5').hide();
  $('#all6').hide();
  $('#all7').hide();
  $('#all8').hide();
  $('#all9').hide();
} else if (!dodaj2Clicked && dodaj3Clicked && !dodaj4Clicked && !dodajClicked && !dodaj5Clicked) {
  $('#name3').show();
  $('#all3').show();
  $('#name2').hide();
  $('#all2').hide();
  $('#all').hide();
  $('#all1').hide();
  $('#all4').hide();
  $('#all5').hide();
  $('#all6').hide();
  $('#all7').hide();
  $('#all8').hide();
  $('#all9').hide();
} 
else if (!dodaj2Clicked && dodaj3Clicked && !dodaj4Clicked && !dodajClicked && dodaj5Clicked) {
  $('#name3').show();
  $('#all9').show();
  $('#name5').show();
  $('#all3').hide();
  $('#all').hide();
  $('#all1').hide();
  $('#all4').hide();
  $('#all5').hide();
  $('#all6').hide();
  $('#all7').hide();
  $('#all2').hide();
  $('#all8').hide();
}//gps,komfort plat,myjnia
else if (!dodaj2Clicked && dodaj3Clicked && dodaj4Clicked && !dodajClicked && dodaj5Clicked) {
  $('#name3').show();
  $('#all9').show();
  $('#name5').show();
  $('#all3').hide();
  $('#all').hide();
  $('#all1').hide();
  $('#all4').hide();
  $('#all5').hide();
  $('#all6').hide();
  $('#all7').hide();
  $('#all2').hide();
  $('#all8').hide();
  $('#dodaj4').removeClass('aktywny');
	$('#dodatek4').css('background-color', '');
   $('#dodatek4').css('background-image', '');
}

  
  else {
    $('#name1').hide();
	$('#name2').hide();
	$('#name3').hide();
    $('#name4').hide();
    $('#name5').hide();
    $('#all').show();
    $('#all1').hide();
    $('#all2').hide();
    $('#all3').hide();
    $('#all4').hide();
    $('#all5').hide();
    $('#all6').hide();
    $('#all7').hide();
    $('#all8').hide();
    $('#all9').hide();
  }
}
</script>




<?php
if($extras[0]['selected_quantity'] > 0 && $itemModel['print_translated_class_name'] == 'Segment SUV MP+'){
	echo("
	<script>
$(document).ready(function(){ 
	$('#dodaj').addClass('aktywny');$('#dodaj2').hide();$('#usun2').hide();$('#informacja2').html('Można wybrać tylko jeden wariant Pakietu.<br> Jeżeli chcesz zmienić wariant usuń obecny wybór.');
	$('#dodaj').html('Dodano');
	$('#kaucja').hide();
	$('#kaucja2').html('1 000,00 PLN');
 
 });
</script>");}else if($extras[0]['selected_quantity'] > 0 && $itemModel['print_translated_class_name'] == 'Segment SUV DP+'){
		echo("
	<script>
$(document).ready(function(){ 
	$('#dodaj').addClass('aktywny');$('#dodaj2').hide();$('#usun2').hide();$('#informacja2').html('Można wybrać tylko jeden wariant Pakietu.<br> Jeżeli chcesz zmienić wariant usuń obecny wybór.');
	$('#dodaj').html('Dodano');
	$('#kaucja').hide();
	$('#kaucja2').html('1 000,00 PLN');
 
 });
</script>");}else if($extras[0]['selected_quantity'] > 0 && $itemModel['print_translated_class_name'] == 'Segment E+'){
		echo("
	<script>
$(document).ready(function(){ 
	$('#dodaj').addClass('aktywny');$('#dodaj2').hide();$('#usun2').hide();$('#informacja2').html('Można wybrać tylko jeden wariant Pakietu.<br> Jeżeli chcesz zmienić wariant usuń obecny wybór.');
	$('#dodaj').html('Dodano');
	$('#kaucja').hide();
	$('#kaucja2').html('1 000,00 PLN');
 
 });
</script>");}else if($extras[0]['selected_quantity'] > 0 && $itemModel['print_translated_item_model_name'] == 'RX'){
		echo("
	<script>
$(document).ready(function(){ 
	$('#dodaj').addClass('aktywny');$('#dodaj2').hide();$('#usun2').hide();$('#informacja2').html('Można wybrać tylko jeden wariant Pakietu.<br> Jeżeli chcesz zmienić wariant usuń obecny wybór.');
	$('#dodaj').html('Dodano');
	$('#kaucja').hide();
	$('#kaucja2').html('1 000,00 PLN');
 
 });
</script>");}else if($extras[0]['selected_quantity'] > 0 && $itemModel['print_translated_item_model_name'] == 'MERCEDES GLC'){
		echo("
	<script>
$(document).ready(function(){ 
	$('#dodaj').addClass('aktywny');$('#dodaj2').hide();$('#usun2').hide();$('#informacja2').html('Można wybrać tylko jeden wariant Pakietu.<br> Jeżeli chcesz zmienić wariant usuń obecny wybór.');
	$('#dodaj').html('Dodano');
	$('#kaucja').hide();
	$('#kaucja2').html('1 000,00 PLN');
 
 });
</script>");}else if($extras[0]['selected_quantity'] > 0 && $itemModel['print_translated_item_model_name'] == 'VOLVO XC60'){
		echo("
	<script>
$(document).ready(function(){ 
	$('#dodaj').addClass('aktywny');$('#dodaj2').hide();$('#usun2').hide();$('#informacja2').html('Można wybrać tylko jeden wariant Pakietu.<br> Jeżeli chcesz zmienić wariant usuń obecny wybór.');
	$('#dodaj').html('Dodano');
	$('#kaucja').hide();
	$('#kaucja2').html('1 000,00 PLN');
 
 });
</script>");}else if($extras[0]['selected_quantity'] > 0 && $itemModel['print_translated_item_model_name'] == 'GLE'){
		echo("
	<script>
$(document).ready(function(){ 
	$('#dodaj').addClass('aktywny');$('#dodaj2').hide();$('#usun2').hide();$('#informacja2').html('Można wybrać tylko jeden wariant Pakietu.<br> Jeżeli chcesz zmienić wariant usuń obecny wybór.');
	$('#dodaj').html('Dodano');
	$('#kaucja').hide();
	$('#kaucja2').html('1 000,00 PLN');
 
 });
</script>");}else if($extras[0]['selected_quantity'] > 0 && $itemModel['print_translated_item_model_name'] == '718 Cayman'){
		echo("
	<script>
$(document).ready(function(){ 
	$('#dodaj').addClass('aktywny');$('#dodaj2').hide();$('#usun2').hide();$('#informacja2').html('Można wybrać tylko jeden wariant Pakietu.<br> Jeżeli chcesz zmienić wariant usuń obecny wybór.');
	$('#dodaj').html('Dodano');
	$('#kaucja').hide();
	$('#kaucja2').html('2 000,00 PLN');
 
 });
</script>");}else if($extras[0]['selected_quantity'] > 0){
			echo("
	<script>
$(document).ready(function(){ 
	$('#dodaj').addClass('aktywny');$('#dodaj2').hide();$('#usun2').hide();$('#informacja2').html('Można wybrać tylko jeden wariant Pakietu.<br> Jeżeli chcesz zmienić wariant usuń obecny wybór.');
	$('#dodaj').html('Dodano');
	$('#kaucja').hide();
	$('#kaucja2').html('1,00 PLN');
 
 });
</script>");};
	
	

	
?>

<?php
if($extras[1]['selected_quantity'] > 0 && $itemModel['print_translated_class_name'] == 'Segment SUV MP+'){
	echo("
	<script>
$(document).ready(function(){ 
	$('#dodaj2').addClass('aktywny');$('#dodaj').hide();$('#usun').hide();$('#dodaj2').addClass('aktywny');$('#informacja').html('Można wybrać tylko jeden wariant Pakietu.<br> Jeżeli chcesz zmienić wariant usuń obecny wybór.');
	$('#dodaj2').html('Dodano');
	$('#kaucja').hide();
	$('#kaucja2').html('1 000,00 PLN');
 
 });
</script>");}else if($extras[1]['selected_quantity'] > 0 && $itemModel['print_translated_class_name'] == 'Segment SUV DP+'){
		echo("
	<script>
$(document).ready(function(){ 
	$('#dodaj2').addClass('aktywny');$('#dodaj').hide();$('#usun').hide();$('#dodaj2').addClass('aktywny');$('#informacja').html('c.');
	$('#dodaj2').html('Dodano');
	$('#kaucja').hide();
	$('#kaucja2').html('1 000,00 PLN');
 
 });
</script>");}else if($extras[1]['selected_quantity'] > 0 && $itemModel['print_translated_class_name'] == 'Segment E+'){
		echo("
	<script>
$(document).ready(function(){ 
	$('#dodaj2').addClass('aktywny');$('#dodaj').hide();$('#usun').hide();$('#dodaj2').addClass('aktywny');$('#informacja').html('c.');
	$('#dodaj2').html('Dodano');
	$('#kaucja').hide();
	$('#kaucja2').html('1 000,00 PLN');
 
 });
</script>");}else if($extras[1]['selected_quantity'] > 0 && $itemModel['print_translated_item_model_name'] == 'RX'){
		echo("
	<script>
$(document).ready(function(){ 
	$('#dodaj2').addClass('aktywny');$('#dodaj').hide();$('#usun').hide();$('#dodaj2').addClass('aktywny');$('#informacja').html('Można wybrać tylko jeden wariant Pakietu.<br> Jeżeli chcesz zmienić wariant usuń obecny wybór.');
	$('#dodaj2').html('Dodano');
	$('#kaucja').hide();
	$('#kaucja2').html('1 000,00 PLN');
 
 });
</script>");}else if($extras[1]['selected_quantity'] > 0 && $itemModel['print_translated_item_model_name'] == 'MERCEDES GLC'){
		echo("
	<script>
$(document).ready(function(){ 
	$('#dodaj2').addClass('aktywny');$('#dodaj').hide();$('#usun').hide();$('#dodaj2').addClass('aktywny');$('#informacja').html('Można wybrać tylko jeden wariant Pakietu.<br> Jeżeli chcesz zmienić wariant usuń obecny wybór.');
	$('#dodaj2').html('Dodano');
	$('#kaucja').hide();
	$('#kaucja2').html('1 000,00 PLN');
 
 });
</script>");}else if($extras[1]['selected_quantity'] > 0 && $itemModel['print_translated_item_model_name'] == 'VOLVO XC60'){
		echo("
	<script>
$(document).ready(function(){ 
	$('#dodaj2').addClass('aktywny');$('#dodaj').hide();$('#usun').hide();$('#dodaj2').addClass('aktywny');$('#informacja').html('Można wybrać tylko jeden wariant Pakietu.<br> Jeżeli chcesz zmienić wariant usuń obecny wybór.');
	$('#dodaj2').html('Dodano');
	$('#kaucja').hide();
	$('#kaucja2').html('1 000,00 PLN');
 
 });
</script>");}else if($extras[1]['selected_quantity'] > 0 && $itemModel['print_translated_item_model_name'] == 'GLE'){
		echo("
	<script>
$(document).ready(function(){ 
	$('#dodaj2').addClass('aktywny');$('#dodaj').hide();$('#usun').hide();$('#dodaj2').addClass('aktywny');$('#informacja').html('Można wybrać tylko jeden wariant Pakietu.<br> Jeżeli chcesz zmienić wariant usuń obecny wybór.');
	$('#dodaj2').html('Dodano');
	$('#kaucja').hide();
	$('#kaucja2').html('1 000,00 PLN');
 
 });
</script>");}else if($extras[1]['selected_quantity'] > 0 && $itemModel['print_translated_item_model_name'] == '718 Cayman'){
		echo("
	<script>
$(document).ready(function(){ 
	$('#dodaj2').addClass('aktywny');$('#dodaj').hide();$('#usun').hide();$('#dodaj2').addClass('aktywny');$('#informacja').html('Można wybrać tylko jeden wariant Pakietu.<br> Jeżeli chcesz zmienić wariant usuń obecny wybór.');
	$('#dodaj2').html('Dodano');
	$('#kaucja').hide();
	$('#kaucja2').html('2 000,00 PLN');
 
 });
</script>");}else if($extras[1]['selected_quantity'] > 0){
			echo("
	<script>
$(document).ready(function(){ 
	$('#dodaj2').addClass('aktywny');$('#dodaj').hide();$('#usun').hide();$('#dodaj2').addClass('aktywny');$('#informacja').html('Można wybrać tylko jeden wariant Pakietu.<br> Jeżeli chcesz zmienić wariant usuń obecny wybór.');
	$('#dodaj2').html('Dodano');
	$('#kaucja').hide();
	$('#kaucja2').html('1,00 PLN');
 
 });
</script>");};
	
	

	
?>
<form method="POST" action="">

</form>