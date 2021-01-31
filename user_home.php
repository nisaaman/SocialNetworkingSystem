<?php
$page = "user_home";
include "header.php";

if(isset($_GET['task'])) { $task = $_GET['task']; } elseif(isset($_POST['task'])) { $task = $_POST['task']; } else { $task = "main"; }



// RESET PROFILE VIEWS
if($task == "resetviews") {
  $database->database_query("UPDATE se_users SET user_views_profile='0' WHERE user_id='".$user->user_info[user_id]."' LIMIT 1");
  header("Location: user_home.php"); exit;
}


// GET TOTAL FRIEND REQUESTS
$total_friend_requests = $user->user_friend_total(1, 0);


// GET RECENT ACTIVITY (ACTIONS)
$actions = $actions->actions_display();



// ASSIGN SMARTY VARS AND INCLUDE FOOTER

$smarty->assign('total_friends', $total_friends);
$smarty->assign('total_friend_requests', $total_friend_requests);
$smarty->assign('actions', $actions);
$smarty->assign('online_users', online_users());
include "footer.php";
?>