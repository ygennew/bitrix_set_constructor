<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$this->setFrameMode(true);

if(!function_exists('SetConstruktorShowItem'))
{
	?><div class="dop_sost"><h2>Дополнительные составляющие:</h2></div><?
	function SetConstruktorShowItem($arItem,$params=array())
	{
		?><div class="js-element js-elementid<?=$arItem['ID']?> simple scrollitem" <?
			?>data-elementid="<?=$arItem['ID']?>" <?
			?>data-price="<?=$arItem['PRICE_DISCOUNT_VALUE']?>" <?
			?>data-oldprice="<?=$arItem['PRICE_VALUE']?>" <?
			?>data-discount="<?=$arItem['PRICE_DISCOUNT_DIFFERENCE_VALUE']?>" <?
			?>data-elementname="<?=CUtil::JSEscape($arItem['NAME'])?>" <?
			?>><?
			if($params['TYPE']!='ELEMENT')
			{
				?><a rel="nofollow" class="delete" href="#delset"><i class="icon pngicons"></i></a><?
			}
			?><a rel="nofollow" class="checkbox<?if(isset($params['IN']) && $params['IN']=='Y'):?> in<?endif;?>" href="#checkbox"><i class="icon pngicons"></i></a><?
			?><span class="plusik"><i class="icon pngicons"></i></span><?
			?><div class="pic clearfix"><?
				// PICTURE
				if(isset($arItem['DETAIL_PAGE_URL']))
				{
					?><a href="<?=$arItem['DETAIL_PAGE_URL']?>" target="_blank"><?
				} else {
					?><span><?
				}
					if(isset($arItem['DETAIL_PICTURE']))
					{
						?><img class="sm" src="<?=$arItem['DETAIL_PICTURE']['RESIZE']['src']?>" alt="<?=$arItem['NAME']?>" title="<?=$arItem['NAME']?>" /><?
					} else {
						?><img  class="sm" src="<?=$arItem['NO_PHOTO']['src']?>" title="<?=$arItem['NAME']?>" alt="<?=$arItem['NAME']?>" /><?
					}
				if(isset($arItem['DETAIL_PAGE_URL']))
				{
					?></a><?
				} else {
					?></span><?
				}
			?></div><?			
			?><div class="name"><h4><?
				if(isset($arItem['DETAIL_PAGE_URL']))
				{
					?><a class="setitemlink" href="<?=$arItem['DETAIL_PAGE_URL']?>" target="_blank"><?
				}
					?><?=$arItem['NAME']?><?
				if(isset($arItem['DETAIL_PAGE_URL']))
				{
					?></a></h4><?
				}
				
$arFilter = Array("IBLOCK_ID"=>$arElement[IBLOCK_ID], "ID"=>$arItem[ID]);
$res = CIBlockElement::GetList(Array(), $arFilter);
if ($ob = $res->GetNextElement()){
    $arFields = $ob->GetFields();    
	$arProps = $ob->GetProperties();    	

	$stoper=5;
	$wals=Array('ML2_ARTICLE','art','shirina','dlina_sm','visota_sm','glubina','Ves_ob','visota_reviz_okna_smforsunok_massaj_nog','moshnost_lampi','tip','razmer_sm','mat_korp','mat_fasada','mat_rakov','furnitura','forma_meb','forma_rakov','cvet','cvettochno','cvetrakov','stildiz','sist_hran','osnaschenie','dop_inf','obl_prim','orientac','tip_lamp','art_cveta','mat_stolesh','forma','upravl','vid_poddon','visota_poddon','mat_poddon','pit_V','nalich_krishi','raspoloj','vhod','konstr_dver','kol_dver','cvet_korp','isp_stek','tolsh_stekla','mat_zad_sten','cvet_zad_sten','osveshen','gidro_v_kabine','zona_gidro','kol_fors','fors_spin_mass','trop_dush','tur_banya','fin_sauna','infr_sauna','vent','radio','reg_vis_noj','zerkalo','polki','sid_v_kab','cvet_stekol','cvet_prof','podkl_audio','mat_prof','telef','visota_vanni','mat_vanny','kol_fors_v_bokse','gidro_v_osn','podgolov','vstroen_siden','collecia','material','visota_izliva','mehan','otv_dlya_montaja','tip_podv','stand_podv','form_izl','dlin_izl','vidv_izliv','rejim_dush_izl','vrash_izliv','dop_fun','poverh','chislo_osn_chash','chis_dop_chash','krilo','rasp_kril','ugl_kon','shir_shkafa','mont_shir','mont_dlin','diam_sliv_otv','gotov_otv_smes','namech_otv_smes','izm_oth','sliv_pereliv','klapan_avt','montaj','pokrit_korp','pokrit_fasada','assimetr','s_dvumya_rakov','cvet_mebeli','Meta_title','tip_unitaza','antivsplesk','polochka_v_chashe','naprav_vipuska','sid_v_kompl','mat_sid','visota_chashi','metod_ust_sl_bachka','obem_sl_bachka','podvod_vodi','org_smiv_potoka','rejim_sliva','meh_sliva','cvet_siden','sid_s_mikrol','sid_s_podogr','fun_bide','ves','kreplenie','raspol_smes','pereliv','krishk_PERELIVA','ust_nad_stirmash','diam_sliva','nado_inst','krish_v_kompk','smes_v_kompl','ustr_sliva_v_kompl','univers','naznach','otv_dlya_mont','ist_pit_foto','mont_visota','mont_glub','mej_os_rass_pod_krep','metod_krep','fors_shein_mass','ozonir','fun_econ_rash','donn_klap','rashod_vody','rejim_dush','kol_rej_struy','sist_protiv_izvest','razmer_leyki','ruchnoy_dush','sovm_s_prot_vodonagr','smesit','verh_dushh','izliv_dlya_napoln_vann','ispoln_shlanga','min_DLINA','max_dlina','diam_mm','s_utyaj','dlina_shlanga','microlift','tip_zahvata','termostat','montaj_vstraiv','sposob_montaja','kol_mont_otv','leyka_da_net','aerator','pokritie','kol_fors_gid','mat_stekol','porron_v_kompl','antisk_pokritie','raspoloj_pereliv','ruchki','nojki','karkas','cvet_poddona','obem_l','tolsh_lista','hromoterapiya','sist_dezinf','kol_chel','aromater','tolko_dlya','kol_sh','vid_ust','harrak','vid_sif','dlya_sliva_diam','diam_podkl','gidrozatvor','reg_po_visote','prop_sposobn','mat_sliva','mat_reshet','razmesh','tip_reshet','dopust_nagr','vid_zatvora','regulir','masht_regul','sist_gidro','podv_podsv','diametr_leyki','podkl','mejos_rasstoyan','naprav_podkl','kol_fors_gm','max_dopus_davl','davl_srab_klap','mosh_kvt','zakaz_otd','dop_inf_2','instruk','viderj_ves','diametr_roz','doz_kol','dop_fun_izmel','zapolnenie_dver','istoch_pit','kil_kruch','konstr','model','obiem_litrov','osnasch','osn_termoreg','povorot','raspol_richaga','uvel_zerkala','faktura','avtopodjig','antivandal','aeromassaj','bezobod','ves_brut','vid_dver','vid_izol','vid_nagreva','vid_nagr_elem','vid_reshet','vid_sl_per','vn_pokr_baka','vodonepron','vremya_nagr_min','vremya_nagr_chas','vstroen_sid','vstroen_filtr','vtoraya_stup_och','visota_gidroz','visota_s_oporoy','gaz_control','glub_och_vodi','gotov_reshenie','dver_viderj','diametr_pereh','diam_sliva_izm','diam_sl_otv','diam_sm','diapozon_regul','dlina_shnur','dlya_bit_tehn','dlya_ust','zapolnyaemiy_luk','zashita_ot_peregreva','izgib_otvoda','izmel_na_semiu','ispolnen','ispol_polot_dveri','ispol_termoreg','ispol_shlanga','kart_v_kompl','klapan_avtom','kol_dverok','kol_kartr','kol_otvodov','kol_sekciy','kol_skor','kol_fors_g','kombi_vanna','kondic_vodi','max_nagr_regul','max_prop_sposobn','max_rab_temp','max_temp_nagr','max_temp_ochish_vodi','max_tok_nagr_regul','max_proizv','max_davl','material_polotna_dveri','mejos_rasst_pod_kr','mejos_rasst','min_prop_spos','min_rab_temp','min_temp_ochish_vodi','mineralizaciya','min_tolsh_betona','min_davl_vodi','montaj_dlina','montaj_shirina','moshnost_vsego','moshnost_izmelchitelya','moshnost_na_kv_m','moshnost','nakopitelnaya_emkost','napryajenie','nominal_moshnost','norma_teplootdachi','obezjelezivanie','obshaya_visota_montaja','obyem_nakopitelnoi_emkosti','obyem_peremal_kameri','obyem_rezervuara','ogneupornost','ogranichenie_temp_nagreva','otverstie_pod_filtr','ochistka_ot','pervaya_stupen_ochistki','pityevaya_voda_na_vihode','ploshad_obogreva','ploshad_teploobmennika','pod_pokritie','podvodka','podklyuchenie_gvs','podklyuchenie_otopleniya','porist_meh_kartredja','predv_ochistka_vodi','programm_termreg','proizv_litmin','proizv_litsec','protivopojarniy','pileizolyaciya','pyataya_stupen_ochistki','rabochee_davlenie_ne_bolee','rabochee_davlenie_ne_menee','rabochiy_tok','razmer_verh_dusha','regulirovka_po_dline','regulirovka_temp','regulirovka_temp_v_bane','reguliruemaya_shirina','','rejim_dush_izliva','recomend_proizv','resurs_filtr_modulya','resurs_filtr_modulya_mes','risunok','sidenie_s_microliftom','sistema_gidro_massaja','skorost_izmelchitelya','skritiy','soprotivlenie_om','sostav_kartridja','sohranenie_nastroek_pri_otkl','sposob_obrabotki_othodov','sposob_ochistki','sposob_podachi_vodi','sposob_ukladki','standart_korpusa','stepen_zashiti_IP','teplopoteri_pomesheniya','termreg','termger_v_komplekte','tip_vodi','tip_zamka','tip_izmelchitelya','tip_kameri_sgoraniya','tip_membrannoi_ochistki','tip_motora_izmelchitelya','tolshina_polotna_dveri','tochki_vodorazbora_vodi','tretya_stupen_ochistki','uvelichenie_visoti_pola','uglovoy_ventil','umyagchenie_vodi','univers_termreg','upravlenie_izmelchitelem','uroven_vodi','uroven_shuma','usilenniy','uskor_nagrev','ustanovka','forma_karniza','forma_termoregulyatora','forsunok_aeromassaj','fors_v_vanne','fors_dlya_bok_mass','fun_obogr_pomesh','func_samodiag','cvet_creplen','cvet_polotna_dver','cvet_sidenya','cvet_termoreg','chastota','stup4_och','chislo_stup_ochi','chuvstv_regul','shag_kabelya','stup6_och','shir_nishi_jeloba','shir_revis_okna','shirina_shkafa','shumoiz','electrovikl','elecpit','energosber','ACCESSORIES','cat_ya','FORUM_TOPIC_ID','FORUM_MESSAGE_CNT','ROD_SOURCE','MORE_PHOTO','ROD_WARRANTY','AKER_COUNTRY');
	//$wals=Array('ML2_ARTICLE','art','shirina','dlina_sm','visota_sm','glubina','Ves_ob','visota_reviz_okna_smforsunok_massaj_nog','moshnost_lampi','tip','razmer_sm','mat_korp','mat_fasada','mat_rakov','furnitura','forma_meb','forma_rakov','cvet','cvettochno','cvetrakov','stildiz');
	echo '<table class="yg_table">';
	
	foreach ($wals as $wal){		
	    if ($calc>=$stoper) {break; break 1;}
		if ((!empty($arProps[$wal][VALUE])) && ($calc<=$stoper)) {if (($calc%3)==0) {echo '<tr>';} echo '<td>'.$arProps[$wal][NAME].' :  '.$arProps[$wal][VALUE].'</td>'; if (($calc%2)==0) {echo '</tr>';} $calc=$calc+1;}		
	}
}
$calc=0;
echo '</table></td>';

			?></div><?
			// PRICE
			if( isset($arItem['PRICE_PRINT_DISCOUNT_VALUE']) )
			{
				?><div class="prices"><?=$arItem['PRICE_PRINT_DISCOUNT_VALUE']?></div><?
			}
			// ADD2BASKET
			// NOP
		?></div><?
		return true;
	}
}


?><div class="js-set" <?
	?>data-iblockid="<?=$arParams['IBLOCK_ID']?>" <?
	?>data-ajaxpath="<?=$this->GetFolder();?>/ajax.php" <?
	?>data-currency="<?=$arResult['ELEMENT']['PRICE_CURRENCY']?>" <?
	?>data-lid="<?=SITE_ID?>" <?
	?>data-setOffersCartProps="<?=CUtil::PhpToJSObject($arParams["OFFERS_CART_PROPERTIES"])?>" <?
	?>><?
	
	?><div class="items line1 scrollp horizontal noned"><?
		?><a rel="nofollow" class="scrollbtn prev" href="#"><span><i class="icon pngicons"></i></span></a><?
		?><a rel="nofollow" class="scrollbtn next" href="#"><span><i class="icon pngicons"></i></span></a><?
		?><div class="set_jscrollpane scroll horizontal-only" id="set_scroll_<?=$arResult['ELEMENT']['ID']?>"><?
			?><div class="sliderin scrollinner clearfix"><?
				// ELEMENT
				$arItem = $arResult['ELEMENT'];
				unset($arItem['DETAIL_PAGE_URL']);
				$params = array(
					'TYPE' => 'ELEMENT',
				);
				SetConstruktorShowItem($arItem,$params);
				
				// DEFAULT
				$params = array(
					'TYPE' => 'DEFAULT',
				);
				foreach($arResult['SET_ITEMS']['DEFAULT'] as $key => $arItem)
				{
					SetConstruktorShowItem($arItem,$params);
				}
			?></div><?
		?></div><?
	?></div><?
	
	
	?><div class="items line2 scrollp horizontal"><?
		?><a rel="nofollow" class="scrollbtn prev" href="#"><span><i class="icon pngicons"></i></span></a><?
		?><a rel="nofollow" class="scrollbtn next" href="#"><span><i class="icon pngicons"></i></span></a><?
		?><div class="set_jscrollpane scroll horizontal-only" id="set_scroll_<?=$arResult['ELEMENT']['ID']?>"><?
			?><div class="sliderin scrollinner clearfix"><?
				// DEFAULT
				$params = array(
					'TYPE' => 'DEFAULT',
					'IN' => 'Y',
				);
				foreach($arResult["SET_ITEMS"]["DEFAULT"] as $key => $arItem)
				{
					SetConstruktorShowItem($arItem,$params);
				}
				// OTHER
				$params = array(
					'TYPE' => 'OTHER',
				);
				foreach($arResult["SET_ITEMS"]["OTHER"] as $key => $arItem)
				{
					SetConstruktorShowItem($arItem,$params);
				}
			?></div><?
		?></div><?
	?></div><?

			
	// FULL PANEL
	?><div class="fullpanel clearfix"><?
		if( $arResult['SET_ITEMS']['PRICE']!='' )
		{
			?><div class="block prs"><?
				?><div class="prices"><?
					?><table><?
						?><tr><?
							?><td class="name"><?
								?><span class="title"><?=GetMessage('CATALOG_SET_SUM')?>:</span><?
							?></td><?
							?><td class="val"><?
								?><div class="allprs"><?
									if($arResult['SET_ITEMS']['OLD_PRICE'])
									{
										?> <span class="price old nowrap"><?=$arResult['SET_ITEMS']['OLD_PRICE']?></span><?
									}
									?> <span class="price new nowrap"><?=$arResult['SET_ITEMS']['PRICE']?></span><?
								?></div><?
								if($arResult['SET_ITEMS']['PRICE_DISCOUNT_DIFFERENCE'])
								{
									?><span class="arounddiscount x1"><span class="discount nowrap"><?=GetMessage("CATALOG_SET_DISCOUNT_DIFF", array("#PRICE#" => $arResult["SET_ITEMS"]["PRICE_DISCOUNT_DIFFERENCE"]))?></span></span><?
								}
							?></td><?
						?></tr><?
					?></table><?
				?></div><?
				if($arResult['SET_ITEMS']['PRICE_DISCOUNT_DIFFERENCE'])
				{
					?><span class="arounddiscount x2"><span class="discount nowrap"><?=GetMessage("CATALOG_SET_DISCOUNT_DIFF", array("#PRICE#" => $arResult["SET_ITEMS"]["PRICE_DISCOUNT_DIFFERENCE"]))?></span></span><?
				}
			?></div><?
			?><div class="block buyset"><?
				?><noindex><form><?
					?><a rel="nofollow" class="btn1 massadd2basket nowrap" href="#"><i class="icon pngicons"></i><?=GetMessage('CATALOG_SET_ADD2BASKET')?></a><?
					?><a rel="nofollow" class="btn2 buy1click set nowrap fancyajax fancybox.ajax" href="<?=SITE_DIR?>buy1click/" title="<?=GetMessage('CATALOG_SET_BUY1CLICK')?>"><i class="icon pngicons"></i><?=GetMessage('CATALOG_SET_BUY1CLICK')?></a><?
				?></form><noindex><?
			?></div><?
		} else {
			?><div class="block prs"><?
				?><?=GetMessage('CATALOG_SET_CANT_BUY')?><?
			?></div><?
		}
	?></div><?
	
?></div><?
?><script>
	BX.message({
		RSGoPro_SET_PROD_ID: '<?=GetMessageJS('RSGOPRO.SET_PROD_ID')?>',
		RSGoPro_SET_PROD_NAME: '<?=GetMessageJS('RSGOPRO.SET_PROD_NAME')?>',
		RSGoPro_SET_PROD_LINK: '<?=GetMessageJS('RSGOPRO.SET_PROD_LINK')?>',
		RSGoPro_SET_NABOR: '<?=GetMessageJS('RSGOPRO.SET_NABOR')?>',
	});
</script>