<?php

/**
 * Return a search keyword.
 *
 * This function will return a correct keyword from referrer in phone_time_use.last_page of database,
 * if $keyword and extracted keyword from $reference are difference.
 * The difference means there is mojibake.
 *
 * @param $reference string $combReferrer is this, $combReferrer made by collect_keyword.php, referrer.
 * @param $variable_name string Defined name of keyword (e.g. j_keyword)
 * @param $keyword string Original keyword made by the system.
 *
 * @return string Correct keyword
 * @see #118
 */
function getRefKeyword($reference, $variable_name, $keyword)
{
	$variable = '';

	$var = str_replace('=', '', $variable_name);
	if (isset($_GET[$var]) && $_GET[$var] != '')
	{
		$variable = $_GET[$var];
	}

	if ($variable != '' && ($keyword !== $variable))
	{
		return urldecode($variable);
	}

	$ref_split = explode("$variable_name=", $reference);
	if (isset($ref_split[1]))
	{
		$split = explode('&', $ref_split[1]);
	}

	if (isset($split[0]))
	{
		$variable = urldecode($split[0]);
	}

	$var_split = explode('?', $variable);
	if (isset($var_split[1]))
	{
		$variable = $var_split[0];
	}

	$variable = trim($variable);

	if ($variable != '' && ($keyword !== $variable))
	{
		return $variable;
	}
	else
	{
		return $keyword;
	}
}

function sendRowIDtoINT_MERG($account_id, $campaign_id, $row_id, $that)
{
	$responses = "";
	$attempts = 0;
	do
	{
		try
		{

			$URL = "http://sync.im-apps.net/imid/set?cid=10081&tid=aid&uid=$row_id";

			$ch = curl_init($URL);
			//curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
			curl_setopt($ch, CURLOPT_HEADER, TRUE);
			curl_setopt($ch, CURLOPT_ENCODING, 'UTF-8');
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
			curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
			//curl_setopt($ch, CURLOPT_VERBOSE, true);
			//curl_setopt($ch, CURLOPT_STDERR, $fp);
			$output = curl_exec($ch);
			$httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
			$error = "";

			curl_close($ch);
		}
		catch (Exception $e)
		{

			$httpcode = "FAIL";
			$error = $e->getMessage();
			$output = "";
		}

		$responses .= $httpcode . " ";
		if ($httpcode == 200 || $httpcode == 504)
		{
			break;
		}
		else
		{
			$attempts++;
		}
	}
	while ($attempts < 2);

	$qry = "INSERT INTO postback_responses (account_id,campaign_id,attempts,responses,URL,query_string,response_code,response_html,variables,XML,try_error)
					VALUES
					('" . $account_id . "','" . $campaign_id . "','$attempts','$responses','$URL','$row_id','$httpcode','$output','$row_id','$row_id','$error')
					";
	$that->db->query($qry);
}

function create_session_time($row_id, $session_id, $ip, $device_id, $campaign_id, $combReferrer, $type, $keyword, $phone, $that)
{
	echo "\n// SESSION TIME ";
	$data = array(
		'row_id' => $row_id,
		'session_id' => $session_id,
		'ip' => $ip,
		'assign_phone' => $phone,
		'device_id' => $device_id,
		'campaign_id' => $campaign_id
	);
	$that->db->insert('session_site_time', $data);
	echo sendCheck($that, $row_id, $ip, $campaign_id, $combReferrer, $type, $keyword);
	echo " // SEND CHECK ";
}

function getjQuery()
{

	$file = file_get_contents('jquery.js', TRUE);

	return $file;
}

function getTodaysPPC($campaign_id, $there)
{
	$qry = "SELECT * FROM phone_time_use WHERE time_stamp > '" . date("Y-m-d", time()) . "' AND campaign_id = '$campaign_id'  AND ip!=''";
	$q = $there->db->query($qry);

	$visits = array("PPC" => 0, "ORG" => 0, "DIRECT" => 0, "DISPLAY" => 0, "ALL" => 0, "ACTIVE" => 0);

	foreach ($q->result() as $data)
	{

		if ($data->traffic_type == "PPC")
		{
			$visits['PPC']++;
		}
		if ($data->traffic_type == "ORG")
		{
			$visits['ORG']++;
		}
		if (stristr($data->traffic_type, 'DIRECT'))
		{
			$visits['DIRECT']++;
		}
		if ($data->traffic_type == "DISPLAY")
		{
			$visits['DISPLAY']++;
		}

		if ($data->tracking_active == 1)
		{
			$visits['ACTIVE']++;
		}
	}

	$visits['ALL'] = $visits['PPC'] + $visits['ORG'] + $visits['DIRECT'] + $visits['DISPLAY'];

	return $visits;
}

function getCampaignNumbers($campaign_id, $numbers, $there)
{

	if ($numbers == 0)
	{

		$q = $there->db->query("SELECT * FROM phone_number_inventory WHERE campaign_id = '$campaign_id' AND useable='1'");
		$_SESSION['number_of_numbers'] = $q->num_rows();

		return $q->num_rows();
	}
	else
	{
		return $numbers;
	}
}

function check_assigned_time($time_stamp, $correlation_time)
{

	if (($current_unix_time - $assigned_unix_time) < $total_time)
	{

		return 0;
	}
	else
	{

		return 1;
	}
}

function check_visitor_last($visitor, $last_visit_time, $num_rows)
{

	if ($num_rows < 1)
	{

		$assigned_unix_time = strtotime($last_visit_time);

		$current_time = mdate("Y-m-d H:i:s", time());
		$current_unix_time = strtotime($current_time);

		if (($current_unix_time - $assigned_unix_time) < 300)
		{

			return 1;
		}
		else
		{
			return 0;
		}
	}
	else
	{
		return 1;
	}
}

function checkGoalPage($ref, $goal, $gclid = '')
{

	$goalExp = explode("||", $goal);

	//dynamic url
	if (isset($goalExp[1]))
	{

		$valid = 0;
		foreach ($goalExp as $key => $getVar)
		{

			if (is_string($getVar))
			{
				if (stristr($ref, "$getVar="))
				{
					$valid++;
				}
			}
		}

		if ($valid == (count($goalExp) - 1) && $valid > 0)
		{

			return 1;
		}
		else
		{
			return 0;
		}
	}
	else
	{

		if ($goal != '' && stristr($ref, $goal))
		{
			//echo "// if($goal != '' && stristr($ref,$goal)){ ";
			return 1;
		}
		else
		{
			return 0;
		}
	}
}

function updateGoalTime($that, $goal_hit, $goal_name, $visitor, $campaign_id, $user_data = '')
{
	if (is_object($user_data))
	{
		if ($user_data->$goal_name != '0000-00-00 00:00:00')
		{
			return FALSE;
		}
	}

	if ($goal_hit == 1)
	{
		$that->db->query("UPDATE phone_time_use SET $goal_name = '" . date("y-m-d H:i:s") . "' WHERE ip = '$visitor' and campaign_id='$campaign_id' and tracking_active = 1 order by id desc limit 1  ");
	}
	else
	{
		return FALSE;
	}
}

function sendCheck($that, $row_id, $visitor, $campaign_id, $page, $type, $keyword)
{
	if ($that->Webtracking_model->saveTracking($row_id, $visitor, $campaign_id, $page, $type, $keyword) !== TRUE)
	{
		return;
	}
	$CI = &get_instance();
	$CI->load->library('../controllers/incomingdata');
	$CI->checkTracking($row_id, $visitor, $campaign_id, urlencode($page));
	return sprintf("
	setTimeout(function() {
		jQuery.post('%s',{v_id:'%s',ip:'%s',campaign_id:''},null,'jsonp');
	}, 40000);", site_url('incomingdata/updateTracking'), $row_id, $visitor, $campaign_id);
}

function checkDB($that, $function = '', $line = '', $file = '', $send = '', $qry = '')
{
	$err = $that->db->error();
	$err_msg = $err['message'];
	if ($err_msg == '' && $send == '')
	{
		return TRUE;
	}
	else
	{
		$err = $err_msg;
		$l = $that->db->last_query();

		$arry = array(
			'function' => $function,
			'file' => $file,
			'line' => $line,
			'query' => $l,
			'error' => $err

		);

		//$this->db->insert('bad_queries',$arry);

		$msg = "

LINE: $line

FUNCTION: $function

QUERY: $l $qry

FILE: $file

SEND: $send

		";

		mail('hayashi@adgainer.co.jp', 'ERROR', $err . ' ' . $msg);

		return $err;
	}
}

if (!isset($have_campaign))
{
	exit;
}

?>