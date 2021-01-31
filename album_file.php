<?php
$page = "album_file";
include "header.php";


// DISPLAY ERROR PAGE IF USER IS NOT LOGGED IN AND ADMIN SETTING REQUIRES REGISTRATION
if($user->user_exists == 0 & $setting[setting_permission_album] == 0) {
  $page = "error";
  $smarty->assign('error_header', $album_file[17]);
  $smarty->assign('error_message', $album_file[18]);
  $smarty->assign('error_submit', $album_file[24]);
  include "footer.php";
}

// DISPLAY ERROR PAGE IF NO ALBUM OWNER
if($owner->user_exists == 0) {
  $page = "error";
  $smarty->assign('error_header', $album_file[17]);
  $smarty->assign('error_message', $album_file[1]);
  $smarty->assign('error_submit', $album_file[24]);
  include "footer.php";
}

// ENSURE ALBUMS ARE ENABLED FOR THIS USER
if($owner->level_info[level_album_allow] == 0) { header("Location: ".$url->url_create('profile', $owner->user_info[user_username])); exit(); }

if(isset($_POST['task'])) { $task = $_POST['task']; } elseif(isset($_GET['task'])) { $task = $_GET['task']; } else { $task = "main"; }
if(isset($_POST['album_id'])) { $album_id = $_POST['album_id']; } elseif(isset($_GET['album_id'])) { $album_id = $_GET['album_id']; } else { $album_id = 0; }
if(isset($_POST['media_id'])) { $media_id = $_POST['media_id']; } elseif(isset($_GET['media_id'])) { $media_id = $_GET['media_id']; } else { $media_id = 0; }

// BE SURE ALBUM BELONGS TO THIS USER
$album = $database->database_query("SELECT * FROM se_albums WHERE album_id='$album_id' AND album_user_id='".$owner->user_info[user_id]."'");
if($database->database_num_rows($album) != 1) { header("Location: ".$url->url_create('albums', $owner->user_info[user_username])); exit(); }
$album_info = $database->database_fetch_assoc($album);


// MAKE SURE MEDIA EXISTS
$media_query = $database->database_query("SELECT * FROM se_media WHERE media_id='$media_id' AND media_album_id='$album_id' LIMIT 1");
if($database->database_num_rows($media_query) != 1) { header("Location: ".$url->url_create('album', $owner->user_info[user_username], $album_id)); exit(); }
$media_info = $database->database_fetch_assoc($media_query);




// IF A COMMENT IS BEING POSTED
if($task == "dopost" ) {

  $comment_date = time();
  $comment_body = $_POST['comment_body'];

  // MAKE SURE COMMENT BODY IS NOT EMPTY
  $comment_body = str_replace("\r\n", "<br>", $comment_body);
  $comment_body = preg_replace('/(<br>){3,}/is', '<br><br>', $comment_body);
  $comment_body = ChopText($comment_body);
  if(str_replace(" ", "", $comment_body) == "") { $is_error = 1; $comment_body = ""; }

  // ADD COMMENT IF NO ERROR
  if($is_error == 0) {
    $database->database_query("INSERT INTO se_mediacomments (mediacomment_media_id, mediacomment_authoruser_id, mediacomment_date, mediacomment_body) VALUES ('$media_info[media_id]', '".$user->user_info[user_id]."', '$comment_date', '$comment_body')");

    // INSERT ACTION IF USER EXISTS
    if($user->user_exists != 0) {
      $commenter = $user->user_info[user_username];
      $comment_body_encoded = $comment_body;
      if(strlen($comment_body_encoded) > 250) { 
        $comment_body_encoded = substr($comment_body_encoded, 0, 240);
        $comment_body_encoded .= "...";
      }
      $comment_body_encoded = htmlspecialchars(str_replace("<br>", " ", $comment_body_encoded));
      $actions->actions_add($user, "mediacomment", Array('[username1]', '[username2]', '[albumid]', '[mediaid]', '[comment]'), Array($commenter, $owner->user_info[user_username], $album_info[album_id], $media_info[media_id], $comment_body_encoded));
    } else { 
      $commenter = $album_file[19];
    }}

  echo "<html><head><script type=\"text/javascript\">";
  echo "window.parent.addComment('$is_error', '$comment_body', '$comment_date');";
  echo "</script></head><body></body></html>";
  exit();
}



// UPDATE ALBUM VIEWS
$album_views_new = $album_info[album_views] + 1;
$database->database_query("UPDATE se_albums SET album_views='$album_views_new' WHERE album_id='$album_info[album_id]' LIMIT 1");



// GET MEDIA COMMENTS
$comment = new se_comment('media', 'media_id', $media_info[media_id]);
$total_comments = $comment->comment_total();
$comments = $comment->comment_list(0, $total_comments);


// CREATE BACK MENU LINK
$back = $database->database_query("SELECT media_id FROM se_media WHERE media_album_id='$media_info[media_album_id]' AND media_id<'$media_id' ORDER BY media_id DESC LIMIT 1");
if($database->database_num_rows($back) == 1) {
  $back_info = $database->database_fetch_assoc($back);
  $link_back = $url->url_create("album_file", $owner->user_info[user_username], $album_id, $back_info[media_id]); 
} else {
  $link_back = "#";
}

// CREATE FIRST MENU LINK
$first = $database->database_query("SELECT media_id FROM se_media WHERE media_album_id='$media_info[media_album_id]' ORDER BY media_id ASC LIMIT 1");
if($database->database_num_rows($first) == 1 AND $link_back != "#") {
  $first_info = $database->database_fetch_assoc($first);
  $link_first = $url->url_create("album_file", $owner->user_info[user_username], $album_id, $first_info[media_id]); 
} else {
  $link_first = "#";
}

// CREATE NEXT MENU LINK
$next = $database->database_query("SELECT media_id FROM se_media WHERE media_album_id='$media_info[media_album_id]' AND media_id>'$media_id' ORDER BY media_id ASC LIMIT 1");
if($database->database_num_rows($next) == 1) {
  $next_info = $database->database_fetch_assoc($next);
  $link_next = $url->url_create("album_file", $owner->user_info[user_username], $album_id, $next_info[media_id]); 
} else {
  $link_next = "#";
}

// CREATE END MENU LINK
$end = $database->database_query("SELECT media_id FROM se_media WHERE media_album_id='$media_info[media_album_id]' ORDER BY media_id DESC LIMIT 1");
if($database->database_num_rows($end) == 1 AND $link_next != "#") {
  $end_info = $database->database_fetch_assoc($end);
  $link_end = $url->url_create("album_file", $owner->user_info[user_username], $album_id, $end_info[media_id]); 
} else {
  $link_end = "#";
}





// ASSIGN VARIABLES AND DISPLAY ALBUM FILE PAGE
$smarty->assign('album_info', $album_info);
$smarty->assign('media_info', $media_info);
$smarty->assign('comments', $comments);
$smarty->assign('total_comments', $total_comments);
$smarty->assign('link_first', $link_first);
$smarty->assign('link_back', $link_back);
$smarty->assign('link_next', $link_next);
$smarty->assign('link_end', $link_end);
include "footer.php";
?>