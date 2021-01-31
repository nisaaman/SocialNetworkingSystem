<?php
setlocale(LC_ALL, 'Null');
$multi_language = "no";

// SET HEADER VARIABLES
$header[1] = "Search:";
$header[2] = "Go";
$header[3] = "Home";
$header[4] = "Search";
$header[5] = "Invite";
$header[6] = "Help";
$header[7] = "Hello,";
$header[8] = "Logout";
$header[9] = "Signup";
$header[11] = "My Home";
$header[12] = "Profile";
$header[13] = "Edit";


$header[16] = "Friends";

$header[18] = "Messages";
$header[19] = "Settings";
$header[20] = "Social Book";

$header[22] = "Default";
$header[23] = "An Error Has Occurred";
$header[24] = "You do not have permission to view this page. The user whose page you are trying to view has placed you on their blocklist.";
$header[25] = "Return";

// ASSIGN ALL SMARTY HEADER VARIABLES
reset($header);
while(list($key, $val) = each($header)) {
  $smarty->assign("header".$key, $val);
}


// ASSIGN ALL CLASS/FUNCTION FILE VARIABLES
$class_datetime[1] = "seconds ago";
$class_datetime[2] = "minutes ago";
$class_datetime[3] = "hours ago";
$class_datetime[4] = "days ago";
$class_datetime[5] = "weeks ago";
$class_datetime[6] = "months ago";
$class_datetime[7] = "years ago";

$class_upload[1] = "Upload failed. Please try again.";
$class_upload[2] = "The size of your uploaded file is greater than the maximum allowed filesize.";
$class_upload[3] = "Your file's filetype is not allowed.";
$class_upload[4] = "Your image's dimensions are greater than the maximum allowed width and height.";

$class_user[1] = "Default";
$class_user[2] = "Your browser does not have Javascript enabled. Please enable Javascript and try again.";
$class_user[3] = "The login details you provided were invalid. Please try again.";
$class_user[4] = "The administrator has disabled your account.";
$class_user[5] = "You have not yet verified your email address. If you would like to have the email resent to you, please <a href='signup_verify.php'>click here</a>.";
$class_user[6] = "Please ensure you have completed all the required fields.";
$class_user[7] = "Please ensure your username is alphanumeric.";
$class_user[8] = "The username you selected is banned. Please choose another.";
$class_user[9] = "The username you selected is reserved. Please choose another.";
$class_user[10] = "The email address you provided is banned. Please provide another.";
$class_user[11] = "The email address you provided is not a valid email address.";
$class_user[12] = "The username you selected has already been taken. Please choose another.";
$class_user[13] = "The email address you provided has already been taken. Please provide another.";
$class_user[14] = "The old password you provided is incorrect. Please try again.";
$class_user[15] = "Please be sure you have provided the same password in both new password fields.";
$class_user[16] = "Please provide a password with at least 6 letters or numbers.";
$class_user[17] = "Please ensure your password is alphanumeric.";
$class_user[18] = "Please ensure you have filled out the fields in the proper format.";
$class_user[19] = "Your book has been changed from ";
$class_user[20] = " to ";
$class_user[21] = "Once you verify your email address, your book will be changed from ";
$class_user[22] = "You must enter a message.";
$class_user[23] = "The username you have specified is not a real user.";
$class_user[24] = "You may not send yourself a message.";
$class_user[25] = "The user you are trying to send a message to has placed you on their block list.";
$class_user[26] = "You are not friends with the user you are trying to send a message to. You can only send private messages to friends.";
$class_user[27] = "MONTH";
$class_user[28] = "DAY";
$class_user[29] = "YEAR";

$functions_general[1] = "Everyone";
$functions_general[2] = "All Registered Users";
$functions_general[3] = "Only My Friends and Everyone within My Subnetwork";
$functions_general[4] = "Only My Friends and Their Friends within My Subnetwork";
$functions_general[5] = "Only My Friends";
$functions_general[6] = "Only Me";
$functions_general[7] = "Nobody";
$functions_general[8] = "profiles";
$functions_general[9] = "'s Profile";



// SET LANGUAGE PAGE VARIABLES
switch ($page) {

  case "home":
	
	$home[2] = "Keep me Logged in";
	$home[3] = "Account Login";
	$home[4] = "Email:";
	$home[5] = "Password:";
	$home[6] = "Login";
	$home[7] = "Forgot password?";
	$home[8] = "Welcome to the social book! If you already have an account, you can login below.<br>If you don't have an account, you can <a href='signup.php'>sign up here</a>!";
	break;

  case "profile":
	$profile[1] = "An Error Has Occurred";
	$profile[2] = "The profile you are looking for has been deleted or does not exist.";
	$profile[3] = "Private Profile";
	$profile[4] = "You do not have permission to view this profile.";
	$profile[5] = "'s Profile";
	$profile[6] = "'s profile";
	$profile[7] = "View";
	$profile[8] = "'s Friends";
	$profile[9] = "Add to My Friends";
	$profile[10] = "Send Message";
	$profile[11] = "Report this Person";
	$profile[12] = "Block this Person";
	$profile[13] = "update";
	$profile[14] = "is";
	$profile[15] = "Statistics";
	$profile[16] = "Profile Views:";
	$profile[17] = "views";
	$profile[18] = "Friends:";
	$profile[19] = "friends";
	$profile[20] = "\o\\n";	  //THESE CHARACTERS ARE BEING ESCAPED BECAUSE THEY ARE BEING USED IN A DATE FUNCTION
	$profile[21] = "is online.";
	$profile[22] = "Last Update:";
	$profile[23] = "Signup Date:";
	$profile[24] = "Recent Activity";
	$profile[25] = "view all";
	$profile[26] = "reply";





	$profile[32] = "comments";
	$profile[33] = "Anonymous";
	$profile[34] = "message";
	$profile[35] = "Friends";
	$profile[36] = "Status";
	$profile[37] = "years old";
	$profile[38] = "Comments";

	$profile[40] = "You must be logged in to view this page. <a href='login.php'>Click here</a> to login.";
	$profile[41] = "Remove from My Friends";
	$profile[42] = "Unblock this Person";
	$profile[43] = "Return";
	$profile[44] = "Write Something...";
	$profile[45] = "Posting...";
	$profile[46] = "Please enter a message.";
	$profile[47] = "You have entered the wrong security code.";
	$profile[48] = "Post Comment";
	$profile[49] = "Enter the numbers you see in this image into the field to its right. This helps keep our site free of spam.";
	break;

  case "profile_comments":
	$profile_comments[1] = "message";
	$profile_comments[2] = "\o\\n";	  //THESE CHARACTERS ARE BEING ESCAPED BECAUSE THEY ARE BEING USED IN A DATE FUNCTION
	$profile_comments[3] = "Comments About";

	$profile_comments[5] = "Back to";
	$profile_comments[6] = "'s Profile";
	$profile_comments[7] = "Last Page";
	$profile_comments[8] = "showing comment";
	$profile_comments[9] = "of";
	$profile_comments[10] = "showing comments";
	$profile_comments[11] = "Next Page";
	$profile_comments[12] = "Anonymous";

	$profile_comments[14] = "Write Something...";
	$profile_comments[15] = "Posting...";
	$profile_comments[16] = "Please enter a message.";
	$profile_comments[17] = "You have entered the wrong security code.";
	$profile_comments[18] = "Post Comment";
	$profile_comments[19] = "Enter the numbers you see in this image into the field to its right. This helps keep our site free of spam.";
	$profile_comments[20] = "An Error Has Occurred";
	$profile_comments[21] = "The profile you are looking for has been deleted or does not exist.";
	$profile_comments[22] = "You must be logged in to view this page. <a href='login.php'>Click here</a> to login.";
	$profile_comments[23] = "Return";
	break;

  case "profile_friends":
	$profile_friends[1] = "'s Friends";
	$profile_friends[2] = "The following people are listed as ";
	$profile_friends[3] = "'s friends.";
	$profile_friends[4] = " has not yet added any friends.";
	$profile_friends[5] = "Last Page";
	$profile_friends[6] = "viewing friends";
	$profile_friends[7] = "of";
	$profile_friends[8] = "Next Page";
	$profile_friends[9] = "'s Profile";
	$profile_friends[10] = "View Profile";
	$profile_friends[11] = "You must be logged in to view this page. <a href='login.php'>Click here</a> to login.";
	$profile_friends[12] = "Send Message";
	$profile_friends[13] = "Return";

	$profile_friends[15] = "Username:";
	$profile_friends[16] = "Last Update:";
	$profile_friends[17] = "Last Login:";
	$profile_friends[18] = "An Error Has Occurred";
	$profile_friends[19] = "The user you are looking for has been deleted or does not exist.";
	break;

  case "search":
	$search[1] = "Search";
	$search[2] = "Search the social book.";
	$search[3] = "Search for:";
	$search[4] = "Search";
	$search[5] = "Advanced Search";
	$search[6] = "No results for";
	$search[7] = "were found.";
	$search[8] = "results";
	$search[9] = "including";
	$search[10] = "profiles";
	$search[11] = "Currently Online";


	$search[14] = "Last Page";
	$search[15] = "Displaying";
	$search[16] = "of";
	$search[17] = "matches";
	$search[18] = "seconds";
	$search[19] = "Next Page";






	$search[26] = "You must be logged in to view this page. <a href='login.php'>Click here</a> to login.";
	$search[27] = "An Error Has Occurred.";
	$search[28] = "Return";
	break;
	
  case "signup":
	$signup[1] = "You must agree to the terms of service to signup.";
	$signup[2] = "Please make sure you have correctly entered the verification code.";
	$signup[3] = "Language:";
	$signup[4] = "OR";
	$signup[5] = "The invite code and email address combination you have entered is invalid.";
	$signup[6] = "The invite code you have entered is invalid.";	












	$signup[19] = "Signup Complete!";
	$signup[20] = "Congratulations! You have successfully created your account. ";
	$signup[22] = "Your password has been sent to the email address you provided.";
	$signup[23] = "Click the button below to login.";
	$signup[24] = "An email has been sent to the email address you provided. Please follow the link in that email to verify your email address.";
	$signup[25] = "Continue...";
	$signup[26] = "Return to Home";
	$signup[27] = "Invite Your Friends";
	$signup[28] = "Invite your friends to join! Enter the email addresses of your friends separated by commas in the field below.";
	$signup[29] = "Send Invitations To:";
	$signup[30] = "Enter your friends' email addresses (up to 5) below, separated by commas.";
	$signup[31] = "Your Message";
	$signup[32] = "If you want to include a personal message in your invitations, enter it here. (optional)";
	$signup[33] = "Send Invitations";
	$signup[34] = "Skip This Step";
	$signup[35] = "Upload Your Photo";
	$signup[36] = "Upload a photo of yourself from your computer. This will be the icon other people will see on your profile.";
	$signup[37] = "Upload";
	$signup[38] = "To upload your photo, click the \"Browse\" button, locate the photo on your computer, and click the \"Upload\" button. Your photo must be less than 4 MB in size and must be one of these types:";
	$signup[39] = "Keep This Photo";
	$signup[40] = "Create Your Profile";
	$signup[41] = "Tell us a little more about yourself. Fields marked with an asterisk (*) are required.";
	$signup[42] = "Create Your Account";
	$signup[43] = "Welcome to the social book! To create your account, please provide the following information.";
	$signup[44] = "Login Information";
	$signup[45] = "Email Address:";
	$signup[46] = "You will use your email address to login.";
	$signup[47] = "Password:";
	$signup[48] = "Enter a password with at least 6 characters.";
	$signup[49] = "Password Again:";
	$signup[50] = "Enter your password again for confirmation.";
	$signup[51] = "Account Information";
	$signup[52] = "Username:";
	$signup[53] = "This is the name others see when they view your profile. If you decide to change your username, you must enter one that has not already been taken by another person.";
	$signup[54] = "This will be the name people see when they view your profile.";
	$signup[55] = "Timezone:";
	$signup[56] = "Security Information";
	$signup[57] = "Invitation Code:";
	$signup[58] = "Security Code:";
	$signup[59] = "Enter the numbers you see in this image into the field to its left. This helps keep our site free of spam.";
	$signup[60] = "I have read and agree to the <a href='help_tos.php' target='_blank'>terms of service</a>.";
	break;
	
  case "signup_verify":
	$signup_verify[1] = "Another user has already taken this email address.";


	$signup_verify[4] = "There is no user in the system with that email address. Please <a href='home.php'>click here</a> to return to the home page.";
	$signup_verify[5] = "The email address you have provided is already verified. If you have forgotten your password, please <a href='lostpass.php'>click here</a> to have it sent to you.";
	$signup_verify[6] = "Email Address Verification";
	$signup_verify[7] = "Congratulations! You have successfully verified your email address.";
	$signup_verify[8] = "Click the button below to login.";
	$signup_verify[9] = "Continue To Login...";
	$signup_verify[10] = "To have the email verification resent, enter your email address in the field below. If you have reached this page in error, <a href='home.php'>click here</a> to return to the home page.";
	$signup_verify[11] = "Your Email Address";
	$signup_verify[12] = "Resend Verification";
	$signup_verify[13] = "A new verification email has been sent to the email address you provided. Please follow the link within to verify your account.";
	break;
	
	  case "user_account_delete":
	$user_account_delete[2] = "Change Password";
	$user_account_delete[3] = "Delete Account";
	$user_account_delete[4] = "Delete Account?";
	$user_account_delete[5] = "Are you sure you want to delete your account? All of your account data, including any files you have uploaded, will be permanently deleted! Upon deletion of your account, you will be automatically logged out.";
	$user_account_delete[6] = "Delete My Account";
	$user_account_delete[7] = "Cancel";
	break;
	case "user_account_pass":

	$user_account_pass[6] = "Your changes have been saved.";
	$user_account_pass[8] = "Change Password";
	$user_account_pass[9] = "Delete Account";
	$user_account_pass[10] = "Change Password";
	$user_account_pass[11] = "If you want to change your account password, please complete the following form.";
	$user_account_pass[12] = "Old Password:";
	$user_account_pass[13] = "New Password:";
	$user_account_pass[14] = "New Password Again:";
	$user_account_pass[15] = "Save Changes";
	break;


  case "user_editprofile":
	$user_editprofile[1] = "Changing this field may change which book you belong to.<br>You currently belong to:";



	$user_editprofile[5] = "Your changes have been saved!";
	$user_editprofile[6] = "Status";
	$user_editprofile[7] = "Photo";

	$user_editprofile[9] = "Comments";
	$user_editprofile[10] = "Profile Settings";
	$user_editprofile[11] = "Edit Profile:";
	$user_editprofile[12] = "Please provide some information about yourself.";
	$user_editprofile[13] = "Save Changes";
	break;

  case "user_editprofile_comments":
	$user_editprofile_comments[1] = "Status";
	$user_editprofile_comments[2] = "Photo";
	$user_editprofile_comments[3] = "\o\\n";  //THESE CHARACTERS ARE BEING ESCAPED BECAUSE THEY ARE BEING USED IN A DATE FUNCTION
	$user_editprofile_comments[4] = "Comments";
	$user_editprofile_comments[5] = "Profile Settings";
	$user_editprofile_comments[6] = "Profile Comments";
	$user_editprofile_comments[7] = "The comments below have been posted on your profile by other people. To delete comments, click their checkboxes and then click the \"Delete Selected\" button below the comment list.";
	$user_editprofile_comments[8] = "select all comments";
	$user_editprofile_comments[9] = "Last Page";
	$user_editprofile_comments[10] = "showing comment";
	$user_editprofile_comments[11] = "of";
	$user_editprofile_comments[12] = "showing comments";
	$user_editprofile_comments[13] = "Next Page";
	$user_editprofile_comments[14] = "No comments have been posted on your profile.";
	$user_editprofile_comments[15] = "Anonymous";
	$user_editprofile_comments[16] = "Delete Selected";
	break;

  case "user_editprofile_photo":





	$user_editprofile_photo[6] = "Status";
	$user_editprofile_photo[7] = "Photo";

	$user_editprofile_photo[9] = "Comments";
	$user_editprofile_photo[10] = "Profile Settings";
	$user_editprofile_photo[11] = "Edit My Photo";
	$user_editprofile_photo[12] = "This photo is your personal icon and will be displayed on your profile.";
	$user_editprofile_photo[13] = "remove photo";
	$user_editprofile_photo[14] = "Upload";
	$user_editprofile_photo[15] = "Images must be less than 4 MB in size with one of the following extensions:";
	$user_editprofile_photo[16] = "Current Photo";
	$user_editprofile_photo[17] = "Upload Photo";
	break;

  case "user_editprofile_status":
	$user_editprofile_status[1] = "Your status has been updated.";
	$user_editprofile_status[2] = "Status";
	$user_editprofile_status[3] = "Photo";

	$user_editprofile_status[5] = "Comments";
	$user_editprofile_status[6] = "Profile Settings";
	$user_editprofile_status[7] = "Update My Status";
	$user_editprofile_status[8] = "Update your status message to let your friends know what you're up to.";
	$user_editprofile_status[9] = "Update";
	$user_editprofile_status[10] = "is";
	break;

  case "user_friends":
	$user_friends[1] = "Current Friends";
	$user_friends[2] = "Friend Requests";
	$user_friends[3] = "My Friends";
	$user_friends[4] = "Everyone currently on your friend list is shown here. To search for a specific friend, enter a keyword in the field below.";
	$user_friends[5] = "Your friend list is empty.";
	$user_friends[6] = "Search my friends:";
	$user_friends[7] = "Search";
	$user_friends[8] = "Sort by:";
	$user_friends[9] = "Recently Updated";
	$user_friends[10] = "Recently Logged In";
	$user_friends[11] = "Friend Type";
	$user_friends[12] = "None of your friends match your search criteria.";
	$user_friends[13] = "Last Page";
	$user_friends[14] = "viewing friend";
	$user_friends[15] = "viewing friends";
	$user_friends[16] = "of";
	$user_friends[17] = "Next Page";
	$user_friends[18] = "'s Profile";
	$user_friends[19] = "Last Update:";
	$user_friends[20] = "Last Login:";
	$user_friends[21] = "Friend Type:";
	$user_friends[22] = "Details:";
	$user_friends[23] = "Edit Friendship";
	$user_friends[24] = "Remove Friend";
	$user_friends[25] = "Send Message";
	$user_friends[26] = "View Friends";
	$user_friends[27] = "Friend Settings";
	$user_friends[28] = "Outgoing Friend Requests";
	break;

  case "user_friends_add":
	$user_friends_add[1] = "An Error Has Occurred";
	$user_friends_add[2] = "The person you are looking for has been deleted or does not exist.";
	$user_friends_add[3] = "This user has placed you on their blocklist.";
	$user_friends_add[4] = "You may not add yourself as a friend.";
	$user_friends_add[5] = "This user is already your friend.";
	$user_friends_add[6] = "This user is waiting for a confirmation from you. <a href='user_friends_requests.php'>Click here</a> to view your friend requests.";
	$user_friends_add[7] = "A message has been sent to this user to confirm your friendship.";
	$user_friends_add[8] = "This user has been added to your friendlist.";
	$user_friends_add[9] = "Add Friend";
	$user_friends_add[10] = "You are about to add";
	$user_friends_add[11] = "to your friends.<br>If you add this person to your friends, they will be able to see your profile (even if it's viewable by friends only).";
	$user_friends_add[12] = "Return to Profile";
	$user_friends_add[13] = "Tell us more about how you know";
	$user_friends_add[14] = "Friend Type:";
	$user_friends_add[15] = "Other:";
	$user_friends_add[16] = "Friend Type:";
	$user_friends_add[17] = "How do you know this person?";
	$user_friends_add[18] = "Add Friend";
	$user_friends_add[19] = "Cancel";
	$user_friends_add[20] = "You have already sent a friend request to this user. They must confirm the friendship before you can become friends.";
	$user_friends_add[21] = "You are not allowed to add this person to your friends.";
	$user_friends_add[22] = "Return";
	break;
	
  case "user_friends_confirm":
	$user_friends_confirm[1] = "An Error Has Occurred";
	$user_friends_confirm[2] = "The user you're looking for doesn't exist!";
	$user_friends_confirm[3] = "Current Friends";
	$user_friends_confirm[4] = "Friend Requests";
	$user_friends_confirm[5] = "Friendship Details";
	$user_friends_confirm[6] = "Tell us more about how you know";
	$user_friends_confirm[7] = "Friend Type:";
	$user_friends_confirm[8] = "Other";
	$user_friends_confirm[9] = "Specify:";
	$user_friends_confirm[10] = "Friend Type:";
	$user_friends_confirm[11] = "How do you know";
	$user_friends_confirm[12] = "?";
	$user_friends_confirm[13] = "Edit Friendship";
	$user_friends_confirm[14] = "Cancel";
	$user_friends_confirm[15] = "Return";
	$user_friends_confirm[16] = "Friend Settings";
	$user_friends_confirm[17] = "Outgoing Friend Requests";
	break;

  case "user_friends_requests":
	$user_friends_requests[1] = "Current Friends";
	$user_friends_requests[2] = "Friend Requests";
	$user_friends_requests[3] = "Friend Requests";
	$user_friends_requests[4] = "When other people request to become your friend, their requests appear here. You can approve or reject their requests.";
	$user_friends_requests[5] = "You do not have any friend requests at this time.";
	$user_friends_requests[6] = "Last Update:";
	$user_friends_requests[7] = "Last Login:";
	$user_friends_requests[8] = "Friend Type:";
	$user_friends_requests[9] = "Details:";
	$user_friends_requests[10] = "Confirm Friendship";
	$user_friends_requests[11] = "Reject Friendship";
	$user_friends_requests[12] = "Send Message";
	$user_friends_requests[13] = "Last Page";
	$user_friends_requests[14] = "viewing friend";
	$user_friends_requests[15] = "viewing friends";
	$user_friends_requests[16] = "of";
	$user_friends_requests[17] = "Next Page";
	$user_friends_requests[18] = "Friend Settings";
	$user_friends_requests[19] = "Outgoing Friend Requests";
	break;
	
  case "user_home":
	$user_home[1] = "What's New?";
	$user_home[2] = "My Profile Link:";
	$user_home[3] = "Notifications";
	$user_home[4] = "Update your status.";
	$user_home[5] = "profile views";
	$user_home[6] = "reset";
	$user_home[7] = "save";
	$user_home[8] = "cancel";
	$user_home[9] = "There has not been any recent activity on the social book.";
	$user_home[10] = "Members Online";
	$user_home[11] = "My Status";
	$user_home[12] = "update";
	$user_home[13] = "  ";
	$user_home[14] = "new messages";
	$user_home[15] = "new friend request(s)";

	$user_home[17] = "View My Profile";

	$user_home[19] = "Edit My Profile";

	$user_home[21] = "View My Friends";





	$user_home[27] = "Browse For People";

	$user_home[29] = "Recent News";
	$user_home[30] = "There have been no news announcements posted recently.";
	break;

  case "user_messages":
	$user_messages[1] = "Inbox";
	$user_messages[2] = "Sent Messages";
	$user_messages[3] = "My Message Inbox";
	$user_messages[4] = "You have";
	$user_messages[5] = "unread message(s)";
	$user_messages[6] = "in your inbox.";
	$user_messages[7] = "Compose New Message";
	$user_messages[8] = "Your message was sent successfully.";
	$user_messages[9] = "Last Page";
	$user_messages[10] = "viewing message";
	$user_messages[11] = "viewing messages";
	$user_messages[12] = "of";
	$user_messages[13] = "Next Page";
	$user_messages[14] = "Your inbox is empty. When you receive messages in the future, they will be listed here.";
	$user_messages[15] = "From";
	$user_messages[16] = "Subject";
	$user_messages[17] = "Options";
	$user_messages[18] = "'s Profile";
	$user_messages[19] = "reply";
	$user_messages[20] = "delete";
	$user_messages[21] = "Delete Selected";
	$user_messages[22] = "Message Settings";
	break;

  case "user_messages_new":
	$user_messages_new[1] = "Please input valid users to send message to.";
	$user_messages_new[2] = "Please enter a message.";
	$user_messages_new[3] = "Please limit your recipients to five (5) users.";
	$user_messages_new[4] = "Message Settings";
	$user_messages_new[5] = "Inbox";
	$user_messages_new[6] = "Sent Messages";
	$user_messages_new[7] = "Compose New Message";
	$user_messages_new[8] = "Create your new message with the form below. You can separate multiple recipients with a semi-colon (;).";
	$user_messages_new[9] = "From:";
	$user_messages_new[10] = "To:";
	$user_messages_new[11] = "Subject:";
	$user_messages_new[12] = "Message:";
	$user_messages_new[13] = "Send Message";
	$user_messages_new[14] = "Cancel";
	$user_messages_new[15] = "Please enter a recipient.";
	$user_messages_new[16] = "is not a valid username.";
	$user_messages_new[17] = "You are not allowed to message user";
	break;

  case "user_messages_outbox":
	$user_messages_outbox[1] = "Inbox";
	$user_messages_outbox[2] = "Sent Messages";
	$user_messages_outbox[3] = "My Sent Messages";
	$user_messages_outbox[4] = "You have";
	$user_messages_outbox[5] = "total message(s) in your outbox.";
	$user_messages_outbox[6] = "Compose New Message";
	$user_messages_outbox[7] = "Last Page";
	$user_messages_outbox[8] = "viewing message";
	$user_messages_outbox[9] = "viewing messages";
	$user_messages_outbox[10] = "of";
	$user_messages_outbox[11] = "Next Page";
	$user_messages_outbox[12] = "Your outbox is empty. When you send messages in the future, they will be listed here.";
	$user_messages_outbox[13] = "To";
	$user_messages_outbox[14] = "Subject";
	$user_messages_outbox[15] = "Options";
	$user_messages_outbox[16] = "'s Profile";
	$user_messages_outbox[17] = "delete";
	$user_messages_outbox[18] = "Delete Selected";
	$user_messages_outbox[19] = "Message Settings";
	break;

  case "user_messages_settings":
	$user_messages_settings[1] = "Inbox";
	$user_messages_settings[2] = "Sent Messages";
	$user_messages_settings[3] = "Message Settings";
	$user_messages_settings[4] = "Message Settings";
	$user_messages_settings[5] = "Edit your message settings such as email notifications on this page.";
	$user_messages_settings[6] = "Your changes have been saved.";
	$user_messages_settings[7] = "Message Notification";
	$user_messages_settings[8] = "Do you want to be notified by email when someone sends you a message?";
	$user_messages_settings[9] = "Yes, notify me when someone sends me a message.";
	$user_messages_settings[10] = "Save Changes";
	break;

  case "user_messages_view":
	$user_messages_view[1] = "Inbox";
	$user_messages_view[2] = "Sent Messages";
	$user_messages_view[3] = "To:";
	$user_messages_view[4] = "Sent:";
	$user_messages_view[5] = "Close";
	$user_messages_view[6] = "Reply";
	$user_messages_view[7] = "Delete";
	$user_messages_view[8] = "Conversation History";
	$user_messages_view[9] = "Sent";
	$user_messages_view[10] = "Received";
	$user_messages_view[11] = "Message Settings";
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