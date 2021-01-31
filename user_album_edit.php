<?php
$page = "user_album_edit";
include "header.php";

if(isset($_POST['task'])) { $task = $_POST['task']; } elseif(isset($_GET['task'])) { $task = $_GET['task']; } else { $task = "main"; }
if(isset($_GET['album_id'])) { $album_id = $_GET['album_id']; } elseif(isset($_POST['album_id'])) { $album_id = $_POST['album_id']; } else { exit(); }

// ENSURE ALBUMS ARE ENABLED FOR THIS USER
if($user->level_info[level_album_allow] == 0) { header("Location: user_home.php"); exit(); }

// BE SURE ALBUM BELONGS TO THIS USER
$album = $database->database_query("SELECT * FROM se_albums WHERE album_id='$album_id' AND album_user_id='".$user->user_info[user_id]."'");
if($database->database_num_rows($album) != 1) { header("Location: user_album.php"); exit(); }
$album_info = $database->database_fetch_assoc($album);

// SET VARIABLES
$result = 0;
$is_error = 0;

// SAVE NEW INFO
if($task == "dosave") {
  $album_title = $_POST['album_title'];
  $album_desc = str_replace("\r\n", "<br>", $_POST['album_desc']);
  $album_dateupdated = time();

  // CHECK THAT TITLE IS NOT BLANK
  if(trim($album_title == "")) { $is_error = 1; }


  // IF NO ERROR, CONTINUE
  if($is_error == 0) {
    // EDIT ALBUM IN DATABASE
    $database->database_query("UPDATE se_albums SET album_title='$album_title',
				    album_desc='$album_desc',
				    album_dateupdated='$album_dateupdated' WHERE album_id='$album_id'");

    // UPDATE LAST UPDATE DATE (SAY THAT 10 TIMES FAST)
    $user->user_lastupdate();

    $result = 1;
    $album_info = $database->database_fetch_assoc($database->database_query("SELECT * FROM se_albums WHERE album_id='$album_id' AND album_user_id='".$user->user_info[user_id]."'"));
  }
}



// ASSIGN VARIABLES AND SHOW EDIT ALBUMS PAGE
$smarty->assign('result', $result);
$smarty->assign('is_error', $is_error);
$smarty->assign('album_title', $album_info[album_title]);
$smarty->assign('album_desc', str_replace("<br>", "\r\n", $album_info[album_desc]));
$smarty->assign('album_id', $album_id);
include "footer.php";
?>