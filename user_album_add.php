<?php
$page = "user_album_add";
include "header.php";

if(isset($_POST['task'])) { $task = $_POST['task']; } else { $task = "main"; }

// ENSURE ALBUMS ARE ENABLED FOR THIS USER
if($user->level_info[level_album_allow] == 0) { header("Location: user_home.php"); exit(); }

// CHECK THAT MAX ALBUMS HAVEN'T BEEN REACHED
$album = new se_album($user->user_info[user_id]);
$total_albums = $album->album_total();
if($total_albums >= $user->level_info[level_album_maxnum]) { $task = "main"; }

// SET VARS
$is_error = 0;



if($task == "doadd") {

  $album_title = $_POST['album_title'];
  $album_desc = str_replace("\r\n", "<br>", $_POST['album_desc']);
  $album_user_id = $user->user_info[user_id];
  $album_datecreated = time();
  
  // CHECK THAT TITLE IS NOT BLANK
  if(trim($album_title == "")) { $is_error = 1; }

  // IF NO ERROR, CONTINUE
  if($is_error != 1) {

    // INSERT NEW ALBUM INTO DATABASE
    $database->database_query("INSERT INTO se_albums (
				album_user_id,
				album_datecreated,
				album_dateupdated,
				album_title, 
				album_desc
				) VALUES (
				'$album_user_id',
				'$album_datecreated',
				'$album_datecreated',
				'$album_title',
				'$album_desc')
				");

    // GET ALBUM ID
    $album_id = $database->database_insert_id();

    // UPDATE LAST UPDATE DATE (SAY THAT 10 TIMES FAST)
    $user->user_lastupdate();

    // INSERT ACTION
    $newalbum_query = $database->database_query("SELECT album_id FROM se_albums WHERE album_user_id='".$user->user_info[user_id]."' ORDER BY album_id DESC LIMIT 1");
    $newalbum_info = $database->database_fetch_assoc($newalbum_query);
    if(strlen($album_title) > 100) { $album_title = substr($album_title, 0, 97); $album_title .= "..."; }
    $actions->actions_add($user, "newalbum", Array('[username]', '[id]', '[title]'), Array($user->user_info[user_username], $newalbum_info[album_id], $album_title));

    // SEND TO UPLOAD PAGE
    header("Location: user_album_upload.php?album_id=$album_id&new_album=1");
    exit();
  }
}



// ASSIGN VARIABLES AND SHOW ADD ALBUM PAGE
$smarty->assign('is_error', $is_error);
$smarty->assign('total_albums', $total_albums);
include "footer.php";
?>