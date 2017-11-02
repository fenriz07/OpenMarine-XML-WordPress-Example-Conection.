<?php    

//Template Name: XML Boats Template


	$condiciones_en="INTERMARE 40 IN EXCELLENT CONDITION. Electronic tools for navigation: Radar Antenna, On-Board Computer, VHF Radio.";

	$condiciones_it="INTERMARE 50 FLY IMBARCAZIONE IN CONDIZIONI OTTIME. MOTORIZZAZIONE: 2 x 575 HP VOLVO PENTA. FULL FULL OPTIONAL.";


	$xml = new SimpleXMLElement('<?xml version="1.0" encoding="UTF-8"?>'.'<open_marine version="1.7" languaje="es" origin="" date="2010-08-26T18:11:0"/>');

	/*$open_marine = $xml->addChild('open_marine');
		$open_marine->addAttribute('version','1.7');
		$open_marine->addAttribute('languaje','es');
		$open_marine->addAttribute('origin','');
		$open_marine->addAttribute('date','2010-08-26T18:11:0');*/

	//Agregando el Broker
	$broker = $xml->addChild('broker');
	$broker->addAttribute('code',123);

	//Agregando los hijos del Broker
		$broker_details = $broker->addChild('broker_details');
			$broker_details->addChild('company_name','BrokerMar');
		//Datos de Oficinas
		$offices = $broker->addChild('offices');
			$office = $offices->addChild('office');
			$office->addAttribute('id',0);
				$office->addChild('office_name','BrokerMar Office');
				$office->addChild('email','brokermar@email.com');
					$name = $office->addChild('name');
						$name->addChild('title','Mr');
						$name->addChild('forename','Scott');
						$name->addChild('surname','McNally');
				$office->addChild('address','Direccion de BrokerMar');
				$office->addChild('town','Pisa');
				$office->addChild('county','GR');
				$office->addChild('country','IT');
				$office->addChild('postcode');
				$office->addChild('daytime_phone');
				$office->addChild('evening_phone');
				$office->addChild('fax');
				$office->addChild('mobile');
				$office->addChild('website','http://www.brokermar.com');
		//Declaramos el inicio de los anuncios
		$adverts = $broker->addChild('adverts');
		// Iniciaremos un for para recorrer todos los custom post y mostrarlos desde aqui
			$advert = $adverts->addChild('advert');
				$advert->addAttribute('ref','10512');
				$advert->addAttribute('office_id','0');
				$advert->addAttribute('status','available');
				//Imagenes del bote.
					$advert_media = $advert->addChild('advert_media');
					// For cargando todas las imagenes
						$media = $advert_media->addChild('media','http://img1.POPYachts.com/Listing/10512/287603L.jpg');
							$media->addAttribute('type','image/jpeg');
							$media->addAttribute('caption','');
							$media->addAttribute('primary','true');
				$advert_features = $advert->addChild('advert_features');
					$boat_type = $advert_features->addChild('boat_type','motor');
					$new_or_used = $advert_features->addChild('new_or_used','used');
					$vessel_lying = $advert_features->addChild('vessel_lying','Parma');
						$vessel_lying->addAttribute('country','IT');
					$asking_price = $advert_features->addChild('asking_price',400000);
						$asking_price->addAttribute('poa','false');
						$asking_price->addAttribute('currency','EUR');
						$asking_price->addAttribute('vat_included','false');
					$marketing_descs = $advert_features->addChild('marketing_descs');
						$marketing_desc_es = $marketing_descs->addChild('marketing_desc',$condiciones_en);
							$marketing_desc_es->addAttribute('language','en');
						$marketing_desc_it = $marketing_descs->addChild('marketing_descs',$condiciones_it);
							$marketing_desc_it->addAttribute('language','it');
					$manufacturer = $advert_features->addChild('manufacturer','Intermare');
					$model = $advert_features->addChild('model','INTERMARE 40 FLY');

				$boat_features = $advert->addChild('boat_features');
					$item = $boat_features->addChild('item','14');
						$item->addAttribute('name','passenger_capacity');

					$dimensions = $boat_features->addChild('dimensions');
						$item_b = $dimensions->addChild('item','4.4');
							$item_b->addAttribute('name','beam');
							$item_b->addAttribute('unit','metres');
						$item_d = $dimensions->addChild('item','1.2');
							$item_d->addAttribute('name','draft');
							$item_d->addAttribute('unit','metres');
						$item_l = $dimensions->addChild('item','15.2');
							$item_l->addAttribute('name','loa');
							$item_l->addAttribute('unit','metres');

					$build = $boat_features->addChild('build');
						$item_buil = $build->addChild('item','Intermare');
							$item_buil->addAttribute('name','builder');
						$item_year = $build->addChild('item','2008');
							$item_year->addAttribute('name','year');
						$item_fly = $build->addChild('item');
							$item_fly->addAttribute('name','flybridge');
						$item_disp = $build->addChild('item','21000');
							$item_disp->addAttribute('name','displacement');

					$engine = $boat_features->addChild('engine');
						$item_ste = $engine->addChild('item');
							$item_ste->addAttribute('name','stern_thruster');
						$item_hours = $engine->addChild('item',360);
							$item_hours->addAttribute('name','hours');
						$item_cruis = $engine->addChild('item',24);
							$item_cruis->addAttribute('name','cruising_speed');
						$item_max_speed = $engine->addChild('item',28);
							$item_max_speed->addAttribute('name','max_speed');
						$item_hp = $engine->addChild('item',575);
							$item_hp->addAttribute('name','horse_power');
						$item_engine_manufacturer = $engine->addChild('item','Volvo Penta');
							$item_engine_manufacturer->addAttribute('name','engine_manufacturer');
						$item_buil = $engine->addChild('item',1400);
							$item_buil->addAttribute('name','tankage');
							$item_buil->addAttribute('unit','litres');

					$accommodation = $boat_features->addChild('accommodation');
						$item_cabins = $accommodation->addChild('item',3);
							$item_cabins->addAttribute('name','cabins');
						$item_berths = $accommodation->addChild('item',4);
							$item_berths->addAttribute('name','berths');
						$item_toilet = $accommodation->addChild('item');
							$item_toilet->addAttribute('name','toilet');
						$item_shower = $accommodation->addChild('item',3);
							$item_shower->addAttribute('name','shower');

					//Fin del for


	Header('Content-type: text/xml');
	echo $xml->asXML();
	$xml->asXML('simple.xml');





?>
