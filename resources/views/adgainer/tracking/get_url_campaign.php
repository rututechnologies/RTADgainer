<?php

if (isset($_GET['url_campaign_id']))
{
	$campaign_id = $_GET['url_campaign_id'];
	echo "//url_campaign_id  $type\n\n";
	$type = "PPC";
	$ppc = 1;
	$org = 0;
	$ppcURL = 1;
}

if (stristr($ref2, "url_campaign_id="))
{
	$type = "PPC";
	$camp_split = explode("url_campaign_id=", $ref2);
	$camp_id_split = explode("&", $camp_split[1]);
	$campaign_id = urldecode($camp_id_split[0]);
	$ppc = 1;
	$ppcURL = 1;
}

if ($ppcCamp == 1)
{
	$campaign_id = $ppcCampID;
}

if (stristr($ref3, "url_campaign_id="))
{
	$type = "PPC";
	$camp_split = explode("url_campaign_id=", $ref3);
	$camp_id_split = explode("&", $camp_split[1]);
	$campaign_id = urldecode($camp_id_split[0]);
	$ppc = 1;
	$ppcURL = 1;
}

if (stristr($ref4, "url_campaign_id="))
{
	$type = "PPC";
	$camp_split = explode("url_campaign_id=", $ref4);
	$camp_id_split = explode("&", $camp_split[1]);
	$campaign_id = urldecode($camp_id_split[0]);
	$ppc = 1;
	$ppcURL = 1;
}

if (stristr($ref5, "url_campaign_id="))
{
	$type = "PPC";
	$camp_split = explode("url_campaign_id=", $ref5);
	$camp_id_split = explode("&", $camp_split[1]);
	$campaign_id = urldecode($camp_id_split[0]);
	$ppc = 1;
	$ppcURL = 1;
}

if (stristr($ref6, "url_campaign_id="))
{
	$type = "PPC";
	$camp_split = explode("url_campaign_id=", $ref6);
	$camp_id_split = explode("&", $camp_split[1]);
	$campaign_id = urldecode($camp_id_split[0]);
	$ppc = 1;
	$ppcURL = 1;
}

if (stristr($combReferrer, "url_campaign_id="))
{
	$type = "PPC";
	$camp_split = explode("url_campaign_id=", $combReferrer);
	$camp_id_split = explode("&", $camp_split[1]);
	$campaign_id = urldecode($camp_id_split[0]);
	$ppc = 1;
	$ppcURL = 1;
}

if (stristr($combReferrer, "display_ad_id="))
{
	$type = "DISPLAY";
	$ref_split = explode("display_ad_id=", $combReferrer);
	if (isset($ref_split[1]))
	{
		$display_split = explode("&", $ref_split[1]);
		$campaign_id = $display = urldecode($display_split[0]);
		$dsp = 1;
	}
}

if (stristr($referer, "display_ad_id="))
{
	$type = "DISPLAY";
	$ref_split = explode("display_ad_id=", $referer);
	if (isset($ref_split[1]))
	{
		$display_split = explode("&", $ref_split[1]);
		$campaign_id = $display = urldecode($display_split[0]);
		$dsp = 1;
	}
}

if (stristr($currGet, "display_ad_id="))
{
	$type = "DISPLAY";
	$ref_split = explode("display_ad_id=", $currGet);
	$display_split = explode("&", $ref_split[1]);
	$campaign_id = $display = urldecode($display_split[0]);
	$dsp = 1;
}

if (stristr($ref4, "display_ad_id="))
{
	$type = "DISPLAY";
	$ref_split = explode("display_ad_id=", $ref4);
	$display_split = explode("&", $ref_split[1]);
	$campaign_id = $display = urldecode($display_split[0]);
	$dsp = 1;
}

if (stristr($ref5, "display_ad_id="))
{
	$type = "DISPLAY";
	$ref_split = explode("display_ad_id=", $ref5);
	$display_split = explode("&", $ref_split[1]);
	$campaign_id = $display = urldecode($display_split[0]);
	$dsp = 1;
}

if (stristr($ref6, "display_ad_id="))
{
	$type = "DISPLAY";
	$ref_split = explode("display_ad_id=", $ref6);
	$display_split = explode("&", $ref_split[1]);
	$campaign_id = $display = urldecode($display_split[0]);
	$dsp = 1;
}

if (isset($_GET['display_ad_id']))
{
	$type = "DISPLAY";
	$campaign_id = $display = urldecode($_GET['display_ad_id']);
	$dsp = 1;
}
