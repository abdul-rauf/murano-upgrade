<?php if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*********************************************************************************
 * Name: Universal Click to Call by Epicom
 * Version: 1.0.0
 * Date: 2011-06-08
 * Author: Epicom Corp.
 * Maintainer: support@epicom.com
 * License: GPL version 2 or later
 ********************************************************************************/
	function make_calls()
	{
		global $db, $current_user;

		if (!isset($_REQUEST['number'])) {
			echo 'Bad phone number';
			die;
		}

		$AccountSid = $GLOBALS['sugar_config']['UC2C']['account_sid'];
		$AuthToken = $GLOBALS['sugar_config']['UC2C']['auth_token'];

		$From = $current_user->phone_work;
		$To = trim($_REQUEST['number']);
		$Url = 'https://cti.epicom.com/v1/CallbackFromTwilio.php?number='. trim($_REQUEST['number']);

		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, "https://cti.epicom.com/v1/index.php?Action=MakeCall&AccountSid=$AccountSid&AuthToken=$AuthToken&From=$From&To=$To&Url=$Url&Timeout=15");
		curl_setopt($ch, CURLOPT_HEADER, 0);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
		$result = curl_exec($ch);
//		$responseCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
		curl_close($ch);

/*		if( $responseCode >= 400 ) {
			echo $response->ErrorMessage;
			die;
		}
*/

//		echo "Connecting... ".$_REQUEST['number'];
		echo $result;
	}
	make_calls();
?>