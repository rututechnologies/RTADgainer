<?php

use Illuminate\Support\Facades\Request;
use Thytanium\Agent\Facades\Agent;


$ref3 = "";
if (isset($_SERVER['HTTP_REFERER']))
{
	$ref3 = urldecode($_SERVER['HTTP_REFERER']);
}

$ref4 = "";
if (isset($_SERVER['REQUEST_URI']))
{
	$ref4 = urldecode($_SERVER['REQUEST_URI']);
}


$ref5 = "";
if (isset($_GET['url_data']))
{
	$ref5 = urldecode($_GET['url_data']);

}

$ref6 = "";
if (isset($_GET['url']))
{
	$ref6 = urldecode($_GET['url']);

}


// echo "//".$_GET['referrer'];


if (count($_GET) > 0)
{
	//echo "// "; print_r($_GET);

	if (isset($_GET['referrer']))
	{
		$referer = $_GET['referrer'];
	}
	else
	{
		if (Agent::isReferral())
		{
			$ref = Agent::referrer();
			$referer = htmlspecialchars_decode($ref);
		}
		else
		{
			$referer = "Direct";
		}
	}
	//mail("sales@aemporium.com","set",$_GET['url_data']);
}
else
{

	if (isset($_GET['referrer']))
	{
		$referer = $_GET['referrer'];
	}
	else
	{
		if (Agent::isReferral())
		{
			$ref = Agent::referrer();
			$referer = htmlspecialchars_decode($ref);
		}
		else
		{
			$referer = "Direct";
		}
	}


	//mail("sales@aemporium.com","not set",$_SERVER['HTTP_REFERER']);
}


echo "
		// ref3 $ref3 ";

echo "
		// ref4 $ref4 ";

echo "
		// ref5 $ref5 ";

echo "
		// ref6 $ref6 ";

echo "
		// ref $referer ";

echo "
		// getV $getVal ";

echo "
		// currGet $currGet ";


if (stristr($referer, "url_campaign_id="))
{
	$type = "PPC";
	$camp_split = explode("url_campaign_id=", $referer);
	$camp_id_split = explode("&", $camp_split[1]);
	$campaign_id = urldecode($camp_id_split[0]);
	$ppc = 1;
	//$entry = 1;
	echo "//url camp $campaign_id";
	$ppcURL = 1;

}


if (stristr($referer, "doubleclick"))
{


	// mail("hayashi@adgainer.co.jp","error 63","$referer $visitor");

	$type = "PPC";
	$camp_split = explode("url_campaign_id=", $referer);
	if (count($camp_split) > 1)
	{
		if (isset($camp_split[1]))
		{
			$camp_id_split = explode("&", $camp_split[1]);
			$campaign_id = urldecode($camp_id_split[0]);
			$ppcURL = 1;
		}
	}
	$ppc = 1;
	//$entry = 1;
	echo "//dblc";
}


if (isset($_GET['adurl']) || isset($_GET['rurl']) || isset($_GET['click_id']) || isset($_GET['rurl']) || isset($_GET['ad']) || isset($_GET['glicd']) || isset($_GET['adk']))
{


	//$entry = 1;
	//$referer = htmlspecialchars_decode($_GET['adurl']);
	$type = "PPC";
	$ppc = 1;
	if (stristr($referer, "url_campaign_id="))
	{

		$camp_split = explode("url_campaign_id=", $referer);
		$camp_id_split = explode("&", $camp_split[1]);
		$campaign_id = urldecode($camp_id_split[0]);
		$ppcURL = 1;
	}
	echo "//assort";

}

$combReferrer = Agent::referrer();
$ref2 = Agent::referrer();


echo "
		// ref2 $ref2 ";

echo "
		// combRef $combReferrer ";

if (isset($_GET['q']))
{
	$type = "ORG";
	$keyword = $_GET['q'];
	$searchTerm = $_GET['q'];
}


if (isset($_GET['p']))
{
	$type = "ORG";
	$keyword = $_GET['p'];
	$searchTerm = $_GET['p'];
}

if (isset($_GET['okw']))
{
	$type = "ORG";
	$keyword = $_GET['okw'];
	$searchTerm = $_GET['okw'];
}

if (isset($_GET['text']))
{
	$type = "ORG";
	$keyword = $_GET['text'];
	$searchTerm = $_GET['text'];
}


if (isset($_GET['search_word']))
{
	$type = "ORG";
	$keyword = $_GET['search_word'];
	$searchTerm = $_GET['search_word'];
}

if (isset($_GET['query']))
{
	$type = "ORG";
	$keyword = $_GET['query'];
	$searchTerm = $_GET['query'];
}

if (isset($_GET['encquery']))
{
	$type = "ORG";
	$keyword = $_GET['encquery'];
	$searchTerm = $_GET['encquery'];
}

if (isset($_GET['terms']))
{
	$type = "ORG";
	$keyword = $_GET['terms'];
	$searchTerm = $_GET['terms'];
}

if (isset($_GET['rdata']))
{
	$type = "ORG";
	$keyword = $_GET['rdata'];
	$searchTerm = $_GET['rdata'];
}

if (isset($_GET['search_word']))
{
	$type = "ORG";
	$keyword = $_GET['search_word'];
	$searchTerm = $_GET['search_word'];
}


if (isset($_GET['wd']))
{
	$type = "ORG";
	$keyword = $_GET['wd'];
	$searchTerm = $_GET['wd'];
}

if (isset($_GET['szukaj']))
{
	$type = "ORG";
	$keyword = $_GET['szukaj'];
	$searchTerm = $_GET['szukaj'];
}

if (isset($_GET['qt']))
{
	$type = "ORG";
	$keyword = $_GET['qt'];
	$searchTerm = $_GET['qt'];
}

if (isset($_GET['k']))
{
	$type = "ORG";
	$keyword = $_GET['k'];
	$searchTerm = $_GET['k'];
}

if (isset($_GET['words']))
{
	$type = "ORG";
	$keyword = $_GET['words'];
	$searchTerm = $_GET['words'];
}

if (isset($_GET['s']))
{
	$type = "ORG";
	$keyword = $_GET['s'];
	$searchTerm = $_GET['s'];
}


if (isset($_GET['utm_content']))
{
	$type = "PPC";
	$utm_content = urldecode($_GET['utm_content']);
	//$keywordField = "keyword";
	//$ppc = 1;
	////$entry = 1;
	echo "//k1";
}


if (stristr($referer, "utm_medium=") || stristr($ref3, "utm_medium=") || stristr($ref4, "utm_medium=") || stristr($ref5, "utm_medium=") || stristr($ref6, "utm_medium="))
{
	// $ppc = 1;

}

$pdv = "";
$pmt = "";
$pkw = "";
$pcrid = "";
$mkwid = "";
$dblclick_name_calls = "";
$dblclick_name_goals = "";
$dblclick_agency_id = "";
$dblclick_advertiser_id = "";


getVariable($referer, $dblclick_name_calls, "dblclick_name_call=", $type, $ppc, $this);
////getVariable($getVal,$dblclick_name_calls,"dblclick_name_call=",$type,$ppc,$this);
////getVariable($ref2,$dblclick_name_calls,"dblclick_name_call=",$type,$ppc,$this);
getVariable($ref3, $dblclick_name_calls, "dblclick_name_call=", $type, $ppc, $this);
getVariable($ref4, $dblclick_name_calls, "dblclick_name_call=", $type, $ppc, $this);
////getVariable($ref5,$dblclick_name_calls,"dblclick_name_call=",$type,$ppc,$this);
////getVariable($ref6,$dblclick_name_calls,"dblclick_name_call=",$type,$ppc,$this);
getVariable($currGet, $dblclick_name_calls, "dblclick_name_call=", $type, $ppc, $this);
//getVariable($combReferrer,$dblclick_name_calls,"dblclick_name_call=",$type,$ppc,$this);


getVariable($referer, $dblclick_name_goals, "dblclick_name_goal=", $type, $ppc, $this);
////getVariable($getVal,$dblclick_name_goals,"dblclick_name_goal=",$type,$ppc,$this);
//getVariable($ref2,$dblclick_name_goals,"dblclick_name_goal=",$type,$ppc,$this);
getVariable($ref3, $dblclick_name_goals, "dblclick_name_goal=", $type, $ppc, $this);
getVariable($ref4, $dblclick_name_goals, "dblclick_name_goal=", $type, $ppc, $this);
//getVariable($ref5,$dblclick_name_goals,"dblclick_name_goal=",$type,$ppc,$this);
//getVariable($ref6,$dblclick_name_goals,"dblclick_name_goal=",$type,$ppc,$this);
getVariable($currGet, $dblclick_name_goals, "dblclick_name_goal=", $type, $ppc, $this);
//getVariable($combReferrer,$dblclick_name_goals,"dblclick_name_goal=",$type,$ppc,$this);

getVariable($referer, $dblclick_agency_id, "dblclick_agency_id=", $type, $ppc, $this);
////getVariable($getVal,$dblclick_agency_id,"dblclick_agency_id=",$type,$ppc,$this);
//getVariable($ref2,$dblclick_agency_id,"dblclick_agency_id=",$type,$ppc,$this);
getVariable($ref3, $dblclick_agency_id, "dblclick_agency_id=", $type, $ppc, $this);
getVariable($ref4, $dblclick_agency_id, "dblclick_agency_id=", $type, $ppc, $this);
//getVariable($ref5,$dblclick_agency_id,"dblclick_agency_id=",$type,$ppc,$this);
//getVariable($ref6,$dblclick_agency_id,"dblclick_agency_id=",$type,$ppc,$this);
getVariable($currGet, $dblclick_agency_id, "dblclick_agency_id=", $type, $ppc, $this);
//getVariable($combReferrer,$dblclick_agency_id,"dblclick_agency_id=",$type,$ppc,$this);

getVariable($referer, $dblclick_advertiser_id, "dblclick_advertiser_id=", $type, $ppc, $this);
////getVariable($getVal,$dblclick_advertiser_id,"dblclick_advertiser_id=",$type,$ppc,$this);
//getVariable($ref2,$dblclick_advertiser_id,"dblclick_advertiser_id=",$type,$ppc,$this);
getVariable($ref3, $dblclick_advertiser_id, "dblclick_advertiser_id=", $type, $ppc, $this);
getVariable($ref4, $dblclick_advertiser_id, "dblclick_advertiser_id=", $type, $ppc, $this);
//getVariable($ref5,$dblclick_advertiser_id,"dblclick_advertiser_id=",$type,$ppc,$this);
//getVariable($ref6,$dblclick_advertiser_id,"dblclick_advertiser_id=",$type,$ppc,$this);
getVariable($currGet, $dblclick_advertiser_id, "dblclick_advertiser_id=", $type, $ppc, $this);
//getVariable($combReferrer,$dblclick_advertiser_id,"dblclick_advertiser_id=",$type,$ppc,$this);

getVariable($referer, $pdv, "pdv=", $type, $ppc, $this);
//getVariable($getVal,$pdv,"pdv=",$type,$ppc,$this);
//getVariable($ref2,$pdv,"pdv=",$type,$ppc,$this);
getVariable($ref3, $pdv, "pdv=", $type, $ppc, $this);
getVariable($ref4, $pdv, "pdv=", $type, $ppc, $this);
//getVariable($ref5,$pdv,"pdv=",$type,$ppc,$this);
//getVariable($ref6,$pdv,"pdv=",$type,$ppc,$this);
getVariable($currGet, $pdv, "pdv=", $type, $ppc, $this);
//getVariable($combReferrer,$pdv,"pdv=",$type,$ppc,$this);

getVariable($referer, $pmt, "pmt=", $type, $ppc, $this);
//getVariable($getVal,$pmt,"pmt=",$type,$ppc,$this);
//getVariable($ref2,$pmt,"pmt=",$type,$ppc,$this);
getVariable($ref3, $pmt, "pmt=", $type, $ppc, $this);
getVariable($ref4, $pmt, "pmt=", $type, $ppc, $this);
//getVariable($ref5,$pmt,"pmt=",$type,$ppc,$this);
//getVariable($ref6,$pmt,"pmt=",$type,$ppc,$this);
getVariable($currGet, $pmt, "pmt=", $type, $ppc, $this);
//getVariable($combReferrer,$pmt,"pmt=",$type,$ppc,$this);

getVariable($referer, $pkw, "pkw=", $type, $ppc, $this);
//getVariable($getVal,$pkw,"pkw=",$type,$ppc,$this);
//getVariable($ref2,$pkw,"pkw=",$type,$ppc,$this);
getVariable($ref3, $pkw, "pkw=", $type, $ppc, $this);
getVariable($ref4, $pkw, "pkw=", $type, $ppc, $this);
//getVariable($ref5,$pkw,"pkw=",$type,$ppc,$this);
//getVariable($ref6,$pkw,"pkw=",$type,$ppc,$this);
getVariable($currGet, $pkw, "pkw=", $type, $ppc, $this);
//getVariable($combReferrer,$pkw,"pkw=",$type,$ppc,$this);

getVariable($referer, $pcrid, "pcrid=", $type, $ppc, $this);
//getVariable($getVal,$pcrid,"pcrid=",$type,$ppc,$this);
//getVariable($ref2,$pcrid,"pcrid=",$type,$ppc,$this);
getVariable($ref3, $pcrid, "pcrid=", $type, $ppc, $this);
getVariable($ref4, $pcrid, "pcrid=", $type, $ppc, $this);
//getVariable($ref5,$pcrid,"pcrid=",$type,$ppc,$this);
//getVariable($ref6,$pcrid,"pcrid=",$type,$ppc,$this);
getVariable($currGet, $pcrid, "pcrid=", $type, $ppc, $this);
//getVariable($combReferrer,$pcrid,"pcrid=",$type,$ppc,$this);

getVariable($referer, $mkwid, "mkwid=", $type, $ppc, $this);
//getVariable($getVal,$mkwid,"mkwid=",$type,$ppc,$this);
//getVariable($ref2,$mkwid,"mkwid=",$type,$ppc,$this);
getVariable($ref3, $mkwid, "mkwid=", $type, $ppc, $this);
getVariable($ref4, $mkwid, "mkwid=", $type, $ppc, $this);
//getVariable($ref5,$mkwid,"mkwid=",$type,$ppc,$this);
//getVariable($ref6,$mkwid,"mkwid=",$type,$ppc,$this);
getVariable($currGet, $mkwid, "mkwid=", $type, $ppc, $this);
//getVariable($combReferrer,$mkwid,"mkwid=",$type,$ppc,$this);

getVariable($referer, $source, "utm_source=", $type, $ppc, $this);
//getVariable($getVal,$source,"utm_source=",$type,$ppc,$this);
//getVariable($ref2,$source,"utm_source=",$type,$ppc,$this);
getVariable($ref3, $source, "utm_source=", $type, $ppc, $this);
getVariable($ref4, $source, "utm_source=", $type, $ppc, $this);
//getVariable($ref5,$source,"utm_source=",$type,$ppc,$this);
//getVariable($ref6,$source,"utm_source=",$type,$ppc,$this);
getVariable($currGet, $source, "utm_source=", $type, $ppc, $this);
//getVariable($combReferrer,$source,"utm_source=",$type,$ppc,$this);

getVariable($referer, $source, "source=", $type, $ppc, $this);
//getVariable($getVal,$source,"source=",$type,$ppc,$this);
//getVariable($ref2,$source,"source=",$type,$ppc,$this);
getVariable($ref3, $source, "source=", $type, $ppc, $this);
getVariable($ref4, $source, "source=", $type, $ppc, $this);
//getVariable($ref5,$source,"source=",$type,$ppc,$this);
//getVariable($ref6,$source,"source=",$type,$ppc,$this);
getVariable($currGet, $source, "source=", $type, $ppc, $this);
//getVariable($combReferrer,$source,"source=",$type,$ppc,$this);


getVariable($referer, $utm_term, "utm_term=", $type, $ppc, $this);
//getVariable($getVal,$utm_term,"utm_term=",$type,$ppc,$this);
//getVariable($ref2,$utm_term,"utm_term=",$type,$ppc,$this);
getVariable($ref3, $utm_term, "utm_term=", $type, $ppc, $this);
getVariable($ref4, $utm_term, "utm_term=", $type, $ppc, $this);
//getVariable($ref5,$utm_term,"utm_term=",$type,$ppc,$this);
//getVariable($ref6,$utm_term,"utm_term=",$type,$ppc,$this);
getVariable($currGet, $utm_term, "utm_term=", $type, $ppc, $this);
//getVariable($combReferrer,$utm_term,"utm_term=",$type,$ppc,$this);

/*
getVariable($referer,$utm_term,"utm_term=",$type,$ppc,$this);
getVariable($getVal,$utm_term,"utm_term=",$type,$ppc,$this);
getVariable($ref2,$utm_term,"utm_term=",$type,$ppc,$this);
getVariable($ref3,$utm_term,"utm_term=",$type,$ppc,$this);
getVariable($ref4,$utm_term,"utm_term=",$type,$ppc,$this);
getVariable($ref5,$utm_term,"utm_term=",$type,$ppc,$this);
getVariable($ref6,$utm_term,"utm_term=",$type,$ppc,$this);
getVariable($currGet,$utm_term,"utm_term=",$type,$ppc,$this);
getVariable($combReferrer,$utm_term,"utm_term=",$type,$ppc,$this);
*/
getVariable($referer, $utm_content, "utm_content=", $type, $ppc, $this);
//getVariable($getVal,$utm_content,"utm_content=",$type,$ppc,$this);
//getVariable($ref2,$utm_content,"utm_content=",$type,$ppc,$this);
getVariable($ref3, $utm_content, "utm_content=", $type, $ppc, $this);
getVariable($ref4, $utm_content, "utm_content=", $type, $ppc, $this);
//getVariable($ref5,$utm_content,"utm_content=",$type,$ppc,$this);
//getVariable($ref6,$utm_content,"utm_content=",$type,$ppc,$this);
getVariable($currGet, $utm_content, "utm_content=", $type, $ppc, $this);
//getVariable($combReferrer,$utm_content,"utm_content=",$type,$ppc,$this);

getVariable($referer, $searchTerm, "search_term=", $type, $ppc, $this);
//getVariable($getVal,$searchTerm,"okw=",$type,$ppc,$this);
//getVariable($ref2,$searchTerm,"okw=",$type,$ppc,$this);
getVariable($ref3, $searchTerm, "search_term=", $type, $ppc, $this);
getVariable($ref4, $searchTerm, "search_term=", $type, $ppc, $this);
//getVariable($ref5,$searchTerm,"okw=",$type,$ppc,$this);
//getVariable($ref6,$searchTerm,"okw=",$type,$ppc,$this);
getVariable($currGet, $searchTerm, "search_term=", $type, $ppc, $this);


getVariable($referer, $searchTerm, "okw=", $type, $ppc, $this);
//getVariable($getVal,$searchTerm,"okw=",$type,$ppc,$this);
//getVariable($ref2,$searchTerm,"okw=",$type,$ppc,$this);
getVariable($ref3, $searchTerm, "okw=", $type, $ppc, $this);
getVariable($ref4, $searchTerm, "okw=", $type, $ppc, $this);
//getVariable($ref5,$searchTerm,"okw=",$type,$ppc,$this);
//getVariable($ref6,$searchTerm,"okw=",$type,$ppc,$this);
getVariable($currGet, $searchTerm, "okw=", $type, $ppc, $this);
//getVariable($combReferrer,$searchTerm,"okw=",$type,$ppc,$this);

getVariable($referer, $searchTerm, "p=", $type, $ppc, $this);
//getVariable($getVal,$searchTerm,"p=",$type,$ppc,$this);
//getVariable($ref2,$searchTerm,"p=",$type,$ppc,$this);
getVariable($ref3, $searchTerm, "p=", $type, $ppc, $this);
getVariable($ref4, $searchTerm, "p=", $type, $ppc, $this);
//getVariable($ref5,$searchTerm,"p=",$type,$ppc,$this);
//getVariable($ref6,$searchTerm,"p=",$type,$ppc,$this);
getVariable($currGet, $searchTerm, "p=", $type, $ppc, $this);
//getVariable($combReferrer,$searchTerm,"p=",$type,$ppc,$this);

getVariable($referer, $searchTerm, "q=", $type, $ppc, $this);
//getVariable($getVal,$searchTerm,"q=",$type,$ppc,$this);
//getVariable($ref2,$searchTerm,"q=",$type,$ppc,$this);
getVariable($ref3, $searchTerm, "q=", $type, $ppc, $this);
getVariable($ref4, $searchTerm, "q=", $type, $ppc, $this);
//getVariable($ref5,$searchTerm,"q=",$type,$ppc,$this);
//getVariable($ref6,$searchTerm,"q=",$type,$ppc,$this);
getVariable($currGet, $searchTerm, "q=", $type, $ppc, $this);
//getVariable($combReferrer,$searchTerm,"q=",$type,$ppc,$this);

getVariable($referer, $keyword, "keyword=", $type, $ppc, $this, $keywordField, 1);
//getVariable($getVal,$keyword,"keyword=",$type,$ppc,$keywordField,1);
//getVariable($ref2,$keyword,"keyword=",$type,$ppc,$keywordField,1);
getVariable($ref3, $keyword, "keyword=", $type, $ppc, $this, $keywordField, 1);
getVariable($ref4, $keyword, "keyword=", $type, $ppc, $this, $keywordField, 1);
//getVariable($ref5,$keyword,"keyword=",$type,$ppc,$keywordField,1);
//getVariable($ref6,$keyword,"keyword=",$type,$ppc,$keywordField,1);
getVariable($currGet, $keyword, "keyword=", $type, $ppc, $this, $keywordField, 1);
//getVariable($combReferrer,$keyword,"keyword=",$type,$ppc,$keywordField,1);

getVariable($referer, $keyword, "j_keyword=", $type, $ppc, $this, $keywordField, 1);
//getVariable($getVal,$keyword,"j_keyword=",$type,$ppc,$keywordField,1);
//getVariable($ref2,$keyword,"j_keyword=",$type,$ppc,$keywordField,1);
getVariable($ref3, $keyword, "j_keyword=", $type, $ppc, $this, $keywordField, 1);
getVariable($ref4, $keyword, "j_keyword=", $type, $ppc, $this, $keywordField, 1);
//getVariable($ref5,$keyword,"j_keyword=",$type,$ppc,$keywordField,1);
//getVariable($ref6,$keyword,"j_keyword=",$type,$ppc,$keywordField,1);
getVariable($currGet, $keyword, "j_keyword=", $type, $ppc, $this, $keywordField, 1);
//getVariable($combReferrer,$keyword,"j_keyword=",$type,$ppc,$keywordField,1);

getVariable($referer, $keyword, "k_keyword=", $type, $ppc, $this, $keywordField, 1);
//getVariable($getVal,$keyword,"k_keyword=",$type,$ppc,$keywordField,1);
//getVariable($ref2,$keyword,"k_keyword=",$type,$ppc,$keywordField,1);
getVariable($ref3, $keyword, "k_keyword=", $type, $ppc, $this, $keywordField, 1);
getVariable($ref4, $keyword, "k_keyword=", $type, $ppc, $this, $keywordField, 1);
//getVariable($ref5,$keyword,"k_keyword=",$type,$ppc,$keywordField,1);
//getVariable($ref6,$keyword,"k_keyword=",$type,$ppc,$keywordField,1);
getVariable($currGet, $keyword, "k_keyword=", $type, $ppc, $this, $keywordField, 1);
//getVariable($combReferrer,$keyword,"k_keyword=",$type,$ppc,$keywordField,1);

getVariable($referer, $keyword, "ch_keyword=", $type, $ppc, $this, $keywordField, 1);
//getVariable($getVal,$keyword,"ch_keyword=",$type,$ppc,$keywordField,1);
//getVariable($ref2,$keyword,"ch_keyword=",$type,$ppc,$keywordField,1);
getVariable($ref3, $keyword, "ch_keyword=", $type, $ppc, $this, $keywordField, 1);
getVariable($ref4, $keyword, "ch_keyword=", $type, $ppc, $this, $keywordField, 1);
//getVariable($ref5,$keyword,"ch_keyword=",$type,$ppc,$keywordField,1);
//getVariable($ref6,$keyword,"ch_keyword=",$type,$ppc,$keywordField,1);
getVariable($currGet, $keyword, "ch_keyword=", $type, $ppc, $this, $keywordField, 1);
//getVariable($combReferrer,$keyword,"ch_keyword=",$type,$ppc,$keywordField,1);

getVariable($referer, $network, "network=", $type, $ppc, $this);
//getVariable($getVal,$network,"network=",$type,$ppc,$this);
//getVariable($ref2,$network,"network=",$type,$ppc,$this);
getVariable($ref3, $network, "network=", $type, $ppc, $this);
getVariable($ref4, $network, "network=", $type, $ppc, $this);
//getVariable($ref5,$network,"network=",$type,$ppc,$this);
//getVariable($ref6,$network,"network=",$type,$ppc,$this);
getVariable($currGet, $network, "network=", $type, $ppc, $this);
//getVariable($combReferrer,$network,"network=",$type,$ppc,$this);

getVariable($referer, $gclid, "gclid=", $type, $ppc, $this);
//getVariable($getVal,$gclid,"gclid=",$type,$ppc,$this);
//getVariable($ref2,$gclid,"gclid=",$type,$ppc,$this);
getVariable($ref3, $gclid, "gclid=", $type, $ppc, $this);
getVariable($ref4, $gclid, "gclid=", $type, $ppc, $this);
//getVariable($ref5,$gclid,"gclid=",$type,$ppc,$this);
//getVariable($ref6,$gclid,"gclid=",$type,$ppc,$this);
getVariable($currGet, $gclid, "gclid=", $type, $ppc, $this);
//getVariable($combReferrer,$gclid,"gclid=",$type,$ppc,$this);

getVariable($referer, $matchtype, "matchtype=", $type, $ppc, $this);
////getVariable($getVal,$matchtype,"matchtype=",$type,$ppc,$this);
//getVariable($ref2,$matchtype,"matchtype=",$type,$ppc,$this);
getVariable($ref3, $matchtype, "matchtype=", $type, $ppc, $this);
getVariable($ref4, $matchtype, "matchtype=", $type, $ppc, $this);
//getVariable($ref5,$matchtype,"matchtype=",$type,$ppc,$this);
//getVariable($ref6,$matchtype,"matchtype=",$type,$ppc,$this);
getVariable($currGet, $matchtype, "matchtype=", $type, $ppc, $this);
//getVariable($combReferrer,$matchtype,"matchtype=",$type,$ppc,$this);


getVariable($referer, $campaign_id, "url_campaign_id=", $type, $ppc, $this);
//getVariable($getVal,$campaign_id,"url_campaign_id=",$type,$ppc,$this);
//getVariable($ref2,$campaign_id,"url_campaign_id=",$type,$ppc,$this);
getVariable($ref3, $campaign_id, "url_campaign_id=", $type, $ppc, $this);
getVariable($ref4, $campaign_id, "url_campaign_id=", $type, $ppc, $this);
//getVariable($ref5,$campaign_id,"url_campaign_id=",$type,$ppc,$this);
//getVariable($ref6,$campaign_id,"url_campaign_id=",$type,$ppc,$this);
getVariable($currGet, $campaign_id, "url_campaign_id=", $type, $ppc, $this);
//getVariable($combReferrer,$campaign_id,"url_campaign_id=",$type,$ppc,$this);


function getVariable($reference, &$variable, $variable_name, &$type, &$ppc, $that, &$keywordField = '', $keyword_field = '')
{
// TODO: escape_str
//	$variable = $that->db->escape_str($variable);

	if ($variable != "")
	{
		return FALSE;
	}

	$ref_split = explode($variable_name, $reference);
	if (isset($ref_split[1]))
	{
		$split = explode("&", $ref_split[1]);
	}
	if (isset($split[0]))
	{
		$variable = urldecode($split[0]);
	}

	$var_split = explode("?", $variable);
	if (isset($var_split[1]))
	{
		$variable = $var_split[0];
	}

	if ($type == "PPC")
	{
		$ppc = 1;
	}

	$variable = trim($variable);

	if ((strpos($variable_name, 'k=') > 0 && $variable != "")
		|| (strpos($variable_name, 'p=') > 0 && $variable != "")
		|| (strpos($variable_name, 'q=') > 0 && $variable != "")
		|| (strpos($variable_name, 'okw=') > 0 && $variable != "")
	)
	{
		$type = "ORG";
		$ppc = 0;
		$org = 1;
	}

	if ($type == "" && ((strpos($variable_name, 'url_campaign_id=') >= 0 && $variable != "") || (strpos($variable_name, 'keyword=') >= 0 && strlen($variable) > 0 && $variable != "")))
	{
		$type = "PPC";
		$ppc = 1;
		$org = 0;
	}


	if ($keyword_field)
	{
		$keywordField = str_replace("=", "", $variable_name);
	}

	$var = str_replace("=", "", $variable_name);

	if (isset($_GET[$var]) && $_GET[$var] != "")
	{
		$variable = $_GET[$var];
	}
}

if (Request::Input('matchtype') != "")
{
	$matchType = Request::Input('matchtype');
}

if (Request::Input('network') != "")
{
	$network = Request::Input('network');
}

if (Request::Input('okw') != "")
{
	$searchTerm = Request::Input('okw');
}

if (Request::Input('text') != "")
{
	$searchTerm = Request::Input('text');
}
if (Request::Input('s') != "")
{
	$searchTerm = Request::Input('s');
}
if (Request::Input('query') != "")
{
	$searchTerm = Request::Input('query');
}
if (Request::Input('wd') != "")
{
	$searchTerm = Request::Input('wd');
}
if (Request::Input('terms') != "")
{
	$searchTerm = Request::Input('terms');
}


if (isset($_GET['matchtype']))
{
	$type = "PPC";
	$matchtype = urldecode($_GET['matchtype']);
	$ppc = 1;
	////$entry = 1;
	echo "//mT";
}

if (isset($_GET['network']))
{
	$type = "PPC";
	$network = urldecode($_GET['network']);
	$ppc = 1;
	////$entry = 1;
	echo "//nk";
}

if ($keyword == '' && isset($referer))
{
	//$keyword = $referer;
}

if (isset($_GET['imgurl']))
{

	$keyword .= " (Image Search)";
	$org = 1;
	$ppc = "";
	$type = "ORG";
}

$source_candidate = Agent::referrer() == "web" ? "Google Search" : '';

if (stristr($referer, "google") || stristr($ref2, "google") || stristr($ref4, "google") || stristr($getVal, "google") || stristr($combReferrer, "google"))
{

	if (empty($source))
	{
		$source_candidate = "Google";
	}
	if ($type == "")
	{
		$type = "ORG";
	}
	//$entry = 1;
}


if (stristr($referer, "yahoo") || stristr($ref2, "yahoo") || stristr($ref4, "yahoo") || stristr($getVal, "yahoo") || stristr($combReferrer, "yahoo"))
{
	if (empty($source))
	{
		$source_candidate = "Yahoo";
	}
	if ($type == "")
	{
		$type = "ORG";
	}
	//$entry = 1;
}

if (stristr($referer, "bing") || stristr($ref2, "bing") || stristr($getVal, "bing") || stristr($combReferrer, "bing"))
{
	if (empty($source))
	{
		$source_candidate = "Bing";
	}
	if ($type == "")
	{
		$type = "ORG";
	}
	//$entry = 1;
}

if (stristr($referer, "alexia") || stristr($ref2, "alexia") || stristr($ref4, "alexia"))
{
	if (empty($source))
	{
		$source_candidate = "Alexia";
	}
	if ($type == "")
	{
		$type = "ORG";
	}
	//$entry = 1;
}

if (stristr($referer, "Daum") || stristr($ref2, "Daum") || stristr($ref4, "Daum"))
{
	if (empty($source))
	{
		$source_candidate = "Daum";
	}
	if ($type == "")
	{
		$type = "ORG";
	}
	//$entry = 1;
}

if (stristr($referer, "MSN") || stristr($ref2, "MSN") || stristr($ref4, "MSN"))
{
	if (empty($source))
	{
		$source_candidate = "MSN";
	}
	if ($type == "")
	{
		$type = "ORG";
	}
	//$entry = 1;
}

if (stristr($referer, "adcenter") || stristr($ref2, "adcenter") || stristr($ref4, "adcenter") ||
	stristr($referer, "bing") || stristr($ref2, "bing") || stristr($ref4, "bing")
)
{
	if (empty($source))
	{
		$source_candidate = "Bing Ads";
	}
	if ($type == "")
	{
		$type = "ORG";
	}
	//$entry = 1;
}

if (stristr($referer, "AOL") || stristr($ref2, "AOL") || stristr($ref4, "AOL"))
{
	if (empty($source))
	{
		$source_candidate = "AOL";
	}
	if ($type == "")
	{
		$type = "ORG";
	}
	//$entry = 1;
}

if (stristr($referer, "lycos") || stristr($ref2, "lycos") || stristr($ref4, "lycos"))
{
	if (empty($source))
	{
		$source_candidate = "Lycos";
	}
	if ($type == "")
	{
		$type = "ORG";
	}
	//$entry = 1;
}

if (stristr($referer, "Altavista") || stristr($ref2, "Altavista") || stristr($ref4, "Altavista"))
{
	if (empty($source))
	{
		$source_candidate = "Altavista";
	}
	if ($type == "")
	{
		$type = "ORG";
	}
	//$entry= 1;
}

if (stristr($referer, "Netscape") || stristr($ref2, "Netscape") || stristr($ref4, "Netscape"))
{
	if (empty($source))
	{
		$source_candidate = "Netscape";
	}
	if ($type == "")
	{
		$type = "ORG";
	}
	//$entry = 1;
}

if (stristr($referer, "CNN") || stristr($ref2, "CNN") || stristr($ref4, "CNN"))
{
	if (empty($source))
	{
		$source_candidate = "CNN";
	}
	if ($type == "")
	{
		$type = "ORG";
	}
	//$entry = 1;
}

if (stristr($referer, "Alltheweb") || stristr($ref2, "Alltheweb") || stristr($ref4, "Alltheweb"))
{
	if (empty($source))
	{
		$source_candidate = "Alltheweb";
	}
	if ($type == "")
	{
		$type = "ORG";
	}
	//$entry = 1;
}

if (stristr($referer, "Ask") || stristr($ref2, "Ask") || stristr($ref4, "Ask"))
{
	if (empty($source))
	{
		$source_candidate = "Ask";
	}
	if ($type == "")
	{
		$type = "ORG";
	}
	//$entry = 1;
}

if (!empty($source_candidate)) {
	printf("\n// %s\n", $source_candidate);
}

$keyword = urldecode($keyword);

?>
