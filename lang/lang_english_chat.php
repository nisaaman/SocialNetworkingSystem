<?php
// SET GENERAL VARIABLES, AVAILABLE ON EVERY PAGE
$header_chat[1] = "Chat";

// ASSIGN ALL SMARTY GENERAL CHAT VARIABLES
reset($header_chat);
while(list($key, $val) = each($header_chat)) {
  $smarty->assign("header_chat".$key, $val);
}



// SET LANGUAGE PAGE VARIABLES
switch ($page) {

  case "chat":
	$chat[1] = "An Error Has Occurred";
	$chat[2] = "You must be logged in to view this page. <a href='login.php'>Click here</a> to login.";
	$chat[3] = "Return";
	break;

  case "chat_frame":
	$chat_frame[1] = "Welcome to the chatroom!";
	$chat_frame[2] = "Logging you in as";
	$chat_frame[3] = "...";
	$chat_frame[4] = "Live Chat";
	$chat_frame[5] = "Bold";
	$chat_frame[6] = "Italics";
	$chat_frame[7] = "Underline";
	$chat_frame[8] = "Smilies";
	$chat_frame[9] = "Color";
	$chat_frame[10] = "Timestamp";
	$chat_frame[11] = "Audio On/Off";
	$chat_frame[12] = "person chatting";
	$chat_frame[13] = "people chatting";
	$chat_frame[14] = "Your have been logged out of the chatroom.<br>Either you have experienced a connection issue,<br>Please try again in a few minutes.";
	$chat_frame[15] = "Your connection to the chatroom has timed out.<br><br>Please <a href='chat_frame.php'>click here</a> to login again or try again later.";
	$chat_frame[16] = "You have been kicked from the chatroom by the administrator.<br>You will be able to login again in a few minutes.";
	$chat_frame[17] = "You have been banned from the chatroom by the administrator.";
	$chat_frame[18] = "The chatroom has been disabled by the administrator.<br>Check back soon!";
	$chat_frame[19] = "You could not login due to a server error.<br>Please notify the administrator!";
	$chat_frame[20] = " has just joined the chat.";
	$chat_frame[21] = " has just left the chat.";
	break;


}

// ASSIGN ALL SMARTY VARIABLES
if(is_array(${"$page"})) {
  reset(${"$page"});
  while(list($key, $val) = each(${"$page"})) {
    $smarty->assign($page.$key, $val);
  }
}
?>