<?php
$page = "profile";
include "header.php";

// DISPLAY ERROR PAGE IF USER IS NOT LOGGED IN AND ADMIN SETTING REQUIRES REGISTRATION
if($user->user_exists == 0 & $setting[setting_permission_profile] == 0) {
  $page = "error";
  $smarty->assign('error_header', $profile[1]);
  $smarty->assign('error_message', $profile[40]);
  $smarty->assign('error_submit', $profile[43]);
  include "footer.php";
}

// DISPLAY ERROR PAGE IF NO OWNER
if($owner->user_exists == 0) {
  $page = "error";
  $smarty->assign('error_header', $profile[1]);
  $smarty->assign('error_message', $profile[2]);
  $smarty->assign('error_submit', $profile[43]);
  include "footer.php";
}

// UPDATE PROFILE VIEWS IF PROFILE VISIBLE

  $profile_views = $owner->user_info[user_views_profile]+1;
  $database->database_query("UPDATE se_users SET user_views_profile='$profile_views' WHERE user_id='".$owner->user_info[user_id]."'");



// GET PROFILE FIELDS
$owner->user_fields(0, 0, 0, 0, 1);

// GET PROFILE COMMENTS
$comment = new se_comment('profile', 'user_id', $owner->user_info[user_id]);
$total_comments = $comment->comment_total();
$comments = $comment->comment_list(0, 10);

// GET FRIENDS LIST
$friends = $owner->user_friend_list(0, 5, 0, 1, "RAND()");
$total_friends = $owner->user_friend_total(0);


// ENSURE CONECTIONS ARE ALLOWED FOR THIS USER
$is_friend = $user->user_friended($owner->user_info[user_id]);
$friendship_allowed = 1;

if($is_friend) { $friendship_allowed = 1; }

// DETERMINE IF USER IS ONLINE
$online_users_array = online_users();
if(in_array($owner->user_info[user_username], $online_users_array)) { $is_online = 1; } else { $is_online = 0; }

// GET RECENT ACTIVITY (ACTIONS)
$actions = $actions->actions_display();
$actions_total = count($actions);

// ASSIGN VARIABLES AND INCLUDE FOOTER
$smarty->assign('tabs', $owner->profile_tabs);
$smarty->assign('comments', $comments);
$smarty->assign('total_comments', $total_comments);
$smarty->assign('friends', $friends);
$smarty->assign('total_friends', $total_friends);
$smarty->assign('friend_ofs', $friend_ofs);
$smarty->assign('total_friend_ofs', $total_friend_ofs);
$smarty->assign('is_friend', $is_friend);
$smarty->assign('friendship_allowed', $friendship_allowed);
$smarty->assign('is_profile_private', $is_profile_private);
$smarty->assign('is_online', $is_online);
$smarty->assign('allowed_to_comment', $allowed_to_comment);
$smarty->assign('total_views', $profile_views);
$smarty->assign('actions', $actions);
$smarty->assign('actions_total', $actions_total);
include "footer.php";
?>