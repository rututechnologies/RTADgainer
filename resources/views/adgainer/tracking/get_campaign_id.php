<?php

	if(stristr($ref3,"campaign_id="))
	{
		$camp_split = explode("campaign_id=",$ref3);
		$camp_id_split = explode("&",$camp_split[1]);
		$campaign_id = urldecode($camp_id_split[0]);
	}

	if(stristr($ref4,"campaign_id="))
	{
		$camp_split = explode("campaign_id=",$ref4);
		$camp_id_split = explode("&",$camp_split[1]);
		$campaign_id = urldecode($camp_id_split[0]);
	}

	if(stristr($ref5,"campaign_id="))
	{
		$camp_split = explode("campaign_id=",$ref5);
		$camp_id_split = explode("&",$camp_split[1]);
		$campaign_id = urldecode($camp_id_split[0]);
	}


	if(stristr($ref6,"campaign_id="))
	{
		$camp_split = explode("campaign_id=",$ref6);
		$camp_id_split = explode("&",$camp_split[1]);
		$campaign_id = urldecode($camp_id_split[0]);
	}

	if(stristr($combReferrer,"campaign_id="))
	{
		$camp_split = explode("campaign_id=",$combReferrer);
		$camp_id_split = explode("&",$camp_split[1]);
		$campaign_id = urldecode($camp_id_split[0]);
	}





	if(stristr($ref2,"url_campaign_id="))
	{
		$type = "PPC";
		$camp_split = explode("url_campaign_id=",$ref2);
		$camp_id_split = explode("&",$camp_split[1]);
		$campaign_id = urldecode($camp_id_split[0]);
		$ppc = 1;
		//echo "//url camp $campaign_id x";
		$ppcCamp = 1;
		$ppcCampID = $campaign_id;


		$ppcURL = 1;
		//mail("hayashi@adgainer.co.jp","$campaign_id ENTRY NEWREF","$visitor

		//VALUES: $values x

		//CURR: $currGet

		//REF4: $ref4

		//REF5: $ref5

		//REF6: $ref6");
		//$entry = 1;

	}

	if(stristr($ref3,"url_campaign_id="))
	{
		$type = "PPC";
		$camp_split = explode("url_campaign_id=",$ref3);
		$camp_id_split = explode("&",$camp_split[1]);
		$campaign_id = urldecode($camp_id_split[0]);
		$ppc = 1;
		//echo "//url camp $campaign_id x";
		$ppcCamp = 1;
		$ppcCampID = $campaign_id;


		$ppcURL = 1;
		//mail("hayashi@adgainer.co.jp","$campaign_id ENTRY REF3","$visitor

		//VALUES: $values x

		//CURR: $currGet

		//REF4: $ref4

		//REF5: $ref5

		//REF6: $ref6");
	}

	if(stristr($ref4,"url_campaign_id="))
	{
		$type = "PPC";
		$camp_split = explode("url_campaign_id=",$ref4);
		$camp_id_split = explode("&",$camp_split[1]);
		$campaign_id = urldecode($camp_id_split[0]);
		$ppc = 1;
		//echo "//url camp $campaign_id x";
		$ppcCamp = 1;
		$ppcCampID = $campaign_id;


		$ppcURL = 1;
		//mail("hayashi@adgainer.co.jp","$campaign_id ENTRY REF4","$visitor

		//VALUES: $values x

		//CURR: $currGet

		//REF4: $ref4

		//REF5: $ref5

		//REF6: $ref6");


	}

	if(stristr($ref5,"url_campaign_id="))
	{
		$type = "PPC";
		$camp_split = explode("url_campaign_id=",$ref5);
		$camp_id_split = explode("&",$camp_split[1]);
		$campaign_id = urldecode($camp_id_split[0]);
		$ppc = 1;
		//echo "//url camp $campaign_id x";
		$ppcCamp = 1;
		$ppcCampID = $campaign_id;


		$ppcURL = 1;
		//mail("hayashi@adgainer.co.jp","$campaign_id ENTRY REF5","$visitor

		//VALUES: $values x

		//CURR: $currGet

		//REF4: $ref4

		//REF5: $ref5

		//REF6: $ref6");
	}

	if(stristr($ref6,"url_campaign_id="))
	{
		$type = "PPC";
		$camp_split = explode("url_campaign_id=",$ref6);
		$camp_id_split = explode("&",$camp_split[1]);
		$campaign_id = urldecode($camp_id_split[0]);
		$ppc = 1;
		//echo "//url camp $campaign_id x";
		$ppcCamp = 1;
		$ppcCampID = $campaign_id;


		$ppcURL = 1;
		//mail("hayashi@adgainer.co.jp","$campaign_id ENTRY REF6","$visitor

		//VALUES: $values x

		//CURR: $currGet

		//REF4: $ref4

		//REF5: $ref5

		//REF6: $ref6");
	}


	if(stristr($currGet,"url_campaign_id="))
	{
		$type = "PPC";
		$camp_split = explode("url_campaign_id=",$currGet);
		$camp_id_split = explode("&",$camp_split[1]);
		$campaign_id = urldecode($camp_id_split[0]);
		$ppc = 1;
		//echo "//url camp $campaign_id x";
		$ppcCamp = 1;
		$ppcCampID = $campaign_id;


		$ppcURL = 1;
		//mail("hayashi@adgainer.co.jp","$campaign_id ENTRY CURGET","$visitor

		//VALUES: $values x

		//CURR: $currGet

		//REF4: $ref4

		//REF5: $ref5

		//REF6: $ref6");
	}

	if(isset($_GET['url']) && stristr($_GET['url'],"url_campaign_id="))
	{
		$type = "PPC";
		$camp_split = explode("url_campaign_id=",$_GET['url']);
		$camp_id_split = explode("&",$camp_split[1]);
		$campaign_id = urldecode($camp_id_split[0]);
		$ppc = 1;
		//echo "//url camp $campaign_id x";
		$ppcCamp = 1;
		$ppcCampID = $campaign_id;


		$ppcURL = 1;
		//mail("hayashi@adgainer.co.jp","$campaign_id ENTRY GETURL","$visitor

		//VALUES: $values x

		//CURR: $currGet

		//REF4: $ref4

		//REF5: $ref5

		//REF6: $ref6");
	}

	if(isset($_GET['adurl']) && stristr($_GET['adurl'],"url_campaign_id="))
	{
		$type = "PPC";
		$camp_split = explode("url_campaign_id=",$_GET['adurl']);
		$camp_id_split = explode("&",$camp_split[1]);
		$campaign_id = urldecode($camp_id_split[0]);
		$ppc = 1;
		//echo "//url camp $campaign_id x";
		$ppcCamp = 1;
		$ppcCampID = $campaign_id;


		$ppcURL = 1;
		//mail("hayashi@adgainer.co.jp","$campaign_id ENTRY GETADURL","$visitor

		//VALUES: $values x

		//CURR: $currGet

		//REF4: $ref4

		//REF5: $ref5

		//REF6: $ref6");
	}

?>
