<?

//  THIS FILE CONTAINS EMAIL-RELATED FUNCTIONS
//  FUNCTIONS IN THIS CLASS:
//    send_verification()
//    send_welcome()








// THIS FUNCTION SENDS A VERIFICATION EMAIL TO A USER
// INPUT: $user_info REPRESENTING THE RECIPIENT'S USER INFO
// OUTPUT: 
function send_verification($user_info) {
	global $setting, $url;

	// GET SERVER INFO
	$prefix = $url->url_base;

	// GET VERIFICATION CODE AND LINK
	$verify_code = md5($user_info[user_code]);
	$time = time();
	$verify_link = "$prefix"."signup_verify.php?u=$user_info[user_id]&verify=$verify_code&d=$time";

	// DECODE SUBJECT AND EMAIL FOR SENDING
	$subject = htmlspecialchars_decode($setting[setting_email_verify_subject], ENT_QUOTES);
	$message = htmlspecialchars_decode($setting[setting_email_verify_message], ENT_QUOTES);

	// REPLACE VARIABLES IN SUBJECT AND MESSAGE
	$subject = str_replace("[username]", $user_info[user_username], $subject);
	$message = str_replace("[username]", $user_info[user_username], $message);
	$subject = str_replace("[email]", $user_info[user_email], $subject);
	$message = str_replace("[email]", $user_info[user_email], $message);
	$subject = str_replace("[link]", "<a href=\"$verify_link\">".$verify_link."</a>", $subject);
	$message = str_replace("[link]", "<a href=\"$verify_link\">".$verify_link."</a>", $message);

	// ENCODE SUBJECT FOR UTF8
	$subject="=?UTF-8?B?".base64_encode($subject)."?=";

	// REPLACE CARRIAGE RETURNS WITH BREAKS
	$message = str_replace("\n", "<br>", $message);

	// SET HEADERS
	$from_email = "$setting[setting_email_fromname] <$setting[setting_email_fromemail]>";
	$headers = "MIME-Version: 1.0"."\n";
	$headers .= "Content-type: text/html; charset=utf-8"."\n";
	$headers .= "Content-Transfer-Encoding: 8bit"."\n";
	$headers .= "From: $from_email"."\n";
	$headers .= "Return-Path: $from_email"."\n";
	$headers .= "Reply-To: $from_email";

	// SEND MAIL
	mail($user_info[user_newemail], $subject, $message, $headers);

	return true;
} // END send_verification() FUNCTION









// THIS FUNCTION SENDS A WELCOME EMAIL TO THE USER
// INPUT: $user_info REPRESENTING THE RECIPIENT'S USER INFO
//	  $password (OPTIONAL) REPRESENTING THE RECIPIENT'S PASSWORD
// OUTPUT: 
function send_welcome($user_info, $password = "") {
	global $url, $setting;

	// GET SERVER INFO
	$prefix = $url->url_base;

	// DECODE SUBJECT AND EMAIL FOR SENDING
	$subject = htmlspecialchars_decode($setting[setting_email_welcome_subject], ENT_QUOTES);
	$message = htmlspecialchars_decode($setting[setting_email_welcome_message], ENT_QUOTES);

	// REPLACE VARIABLES IN SUBJECT AND MESSAGE
	$subject = str_replace("[username]", $user_info[user_username], $subject);
	$message = str_replace("[username]", $user_info[user_username], $message);
	$subject = str_replace("[email]", $user_info[user_email], $subject);
	$message = str_replace("[email]", $user_info[user_email], $message);
	$subject = str_replace("[password]", $password, $subject);
	$message = str_replace("[password]", $password, $message);
	$subject = str_replace("[link]", "<a href=\"$prefix"."home.php\">$prefix"."home.php</a>", $subject);
	$message = str_replace("[link]", "<a href=\"$prefix"."home.php\">$prefix"."home.php</a>", $message);

	// ENCODE SUBJECT FOR UTF8
	$subject="=?UTF-8?B?".base64_encode($subject)."?=";

	// REPLACE CARRIAGE RETURNS WITH BREAKS
	$message = str_replace("\n", "<br>", $message);

	// SET HEADERS
	$from_email = "$setting[setting_email_fromname] <$setting[setting_email_fromemail]>";
	$headers = "MIME-Version: 1.0"."\n";
	$headers .= "Content-type: text/html; charset=utf-8"."\n";
	$headers .= "Content-Transfer-Encoding: 8bit"."\n";
	$headers .= "From: $from_email"."\n";
	$headers .= "Return-Path: $from_email"."\n";
	$headers .= "Reply-To: $from_email";

	// SEND MAIL
	mail($user_info[user_email], $subject, $message, $headers);

	return true;
} // END send_welcome() FUNCTION


?>