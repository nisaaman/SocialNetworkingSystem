<?php

// SET GENERAL VARIABLES, AVAILABLE ON EVERY PAGE
$header_album[1] = "Photos";
$header_album[2] = "Photo Albums";
$header_album[3] = "view all";
$header_album[4] = "Untitled";
$header_album[5] = "Updated";

// ASSIGN ALL SMARTY GENERAL ALBUM VARIABLES
reset($header_album);
while(list($key, $val) = each($header_album)) {
  $smarty->assign("header_album".$key, $val);
}



// ASSIGN ALL CLASS/FUNCTION FILE VARIABLES
$class_album[1] = "You do not have enough free space to upload ";

$functions_album[1] = "Album created by ";
$functions_album[2] = "albums/media";
$functions_album[3] = "Untitled";
$functions_album[4] = "Media uploaded by ";


// SET LANGUAGE PAGE VARIABLES
switch ($page) {
  case "album":
	$album[1] = "The album you are looking for has been deleted or does not exist.";
	$album[2] = "You do not have permission to view this album.";
	$album[3] = "'s Album:";
	$album[4] = "Untitled";
	$album[5] = "'s";
	$album[6] = "albums";
	$album[7] = "An Error Has Occurred";
	$album[8] = "You must be logged in to view this page. <a href='login.php'>Click here</a> to login.";
	$album[9] = "Last Page";
	$album[10] = "viewing photo";
	$album[11] = "of";
	$album[12] = "viewing photos";
	$album[13] = "Next Page";
	$album[14] = "Return";
	break;

  case "album_file":
	$album_file[1] = "The album you are looking for has been deleted or does not exist.";
	$album_file[2] = "You do not have permission to view this file.";
	$album_file[3] = "Untitled";
	$album_file[4] = "'s";
	$album_file[5] = "albums";
	$album_file[6] = "download audio";
	$album_file[7] = "download video";
	$album_file[8] = "download this file";
	$album_file[9] = "Return to ";
	$album_file[10] = "'s Album";
	$album_file[11] = "Post Comment";
	$album_file[12] = "Report Inappropriate Content";
	$album_file[13] = "Comments";
	$album_file[14] = "Posting...";
	$album_file[15] = "Please enter a message.";
	$album_file[16] = "You have entered the wrong security code.";
	$album_file[17] = "An Error Has Occurred";
	$album_file[18] = "You must be logged in to view this page. <a href='login.php'>Click here</a> to login.";
	$album_file[19] = "Anonymous";
	$album_file[20] = "Write Something...";
	$album_file[21] = "Enter the numbers you see in this image into the field to its right. This helps keep our site free of spam.";
	$album_file[22] = "\o\\n";  //THESE CHARACTERS ARE BEING ESCAPED BECAUSE THEY ARE BEING USED IN A DATE FUNCTION
	$album_file[23] = "message";
	$album_file[24] = "Return";
	break;

  case "albums":
	$albums[1] = "The album you are looking for has been deleted or does not exist.";
	$albums[2] = "'s albums";
	$albums[3] = "This person does not have any albums.";
	$albums[4] = "Untitled";
	$albums[5] = "Updated";
	$albums[6] = "An Error Has Occurred";
	$albums[7] = "You must be logged in to view this page. <a href='login.php'>Click here</a> to login.";
	$albums[8] = "Return";
	break;

  case "user_album":
	$user_album[1] = "My Albums";
	$user_album[2] = "Album Settings";
	$user_album[3] = "My Friends' Albums";
	$user_album[4] = "My Albums";
	$user_album[5] = "You have";
	$user_album[6] = "albums and";
	$user_album[7] = "photos.";
	$user_album[8] = "MB of free space remaining.";
	$user_album[9] = "Create New Album";
	$user_album[10] = "My Albums Link:";
	$user_album[11] = "Untitled";
	$user_album[12] = "Created:";
	$user_album[13] = "Last Update:";
	$user_album[14] = "Files:";
	$user_album[15] = "photos";
	$user_album[16] = "Views:";
	$user_album[17] = "views";
	$user_album[18] = "Viewable By:";
	$user_album[19] = "View Album";
	$user_album[20] = "Edit Album";
	$user_album[21] = "Delete Album";
	$user_album[22] = "You do not have any albums.";
	$user_album[23] = "Create an album to begin uploading files.";
	break;

  case "user_album_add":
	$user_album_add[1] = "Please enter a name for this album.";
	$user_album_add[2] = "My Albums";
	$user_album_add[4] = "My Friends' Albums";
	$user_album_add[5] = "Create New Album";
	$user_album_add[6] = "Please give us some information about your new album.";
	$user_album_add[7] = "You have reached the maximum number of allowed albums. You must delete some of your old albums before you can create a new one.";
	$user_album_add[8] = "Return to My Albums";
	$user_album_add[9] = "Album Name:";
	$user_album_add[10] = "Album Description:";
	$user_album_add[11] = "Include this album in search/browse results?";
	$user_album_add[12] = "Yes, include this album in search/browse results.";
	$user_album_add[13] = "No, exclude this album from search/browse results.";
	$user_album_add[14] = "Who can see this album?";
	$user_album_add[15] = "Who can comment in this album?";
	$user_album_add[16] = "Add Album";
	$user_album_add[17] = "Cancel";
	break;

  case "user_album_comments":
	$user_album_comments[1] = "My Albums";
	$user_album_comments[2] = "Album Settings";
	$user_album_comments[3] = "My Friends' Albums";
	$user_album_comments[4] = "Photo Comments";
	$user_album_comments[5] = "To delete comments, click their checkboxes and then click the \"Delete Selected\" button below the comment list.";
	$user_album_comments[6] = "Back to Photos";
	$user_album_comments[7] = "Last Page";
	$user_album_comments[8] = "comment";
	$user_album_comments[9] = "of";
	$user_album_comments[10] = "comments";
	$user_album_comments[11] = "Next Page";
	$user_album_comments[12] = "No comments have been posted about this photo.";
	$user_album_comments[13] = "Anonymous";
	$user_album_comments[14] = "Delete Selected";
	$user_album_comments[15] = "select all comments";
	$user_album_comments[16] = "\o\\n";  //THESE CHARACTERS ARE BEING ESCAPED BECAUSE THEY ARE BEING USED IN A DATE FUNCTION
	break;

  case "user_album_delete":
	$user_album_delete[1] = "My Albums";
	$user_album_delete[2] = "Album Settings";
	$user_album_delete[3] = "My Friends' Albums";
	$user_album_delete[4] = "Delete Album:";
	$user_album_delete[5] = "Are you sure you want to delete this album? All media inside will be permanently deleted!";
	$user_album_delete[6] = "Delete Album";
	$user_album_delete[7] = "Cancel";
	break;

  case "user_album_edit":
	$user_album_edit[1] = "Untitled";
	$user_album_edit[2] = "Your changes have been saved.";
	$user_album_edit[3] = "My Albums";
	$user_album_edit[4] = "Album Settings";
	$user_album_edit[5] = "My Friends' Albums";
	$user_album_edit[6] = "Edit Album Details";
	$user_album_edit[7] = "Use this page to change the album name and  description..";
	$user_album_edit[8] = "Back to Photos";
	$user_album_edit[9] = "Album Name:";
	$user_album_edit[10] = "Album Description:";
	$user_album_edit[11] = "Include this album in search/browse results?";
	$user_album_edit[12] = "Yes, include this album in search/browse results.";
	$user_album_edit[13] = "No, exclude this album from search/browse results.";
	$user_album_edit[14] = "Who can see this album?";
	$user_album_edit[15] = "Who can comment in this album?";
	$user_album_edit[16] = "Save Changes";
	$user_album_edit[17] = "Cancel";
	break;

  case "user_album_friends":
	$user_album_friends[1] = "My Albums";
	$user_album_friends[2] = "Album Settings";
	$user_album_friends[3] = "My Friends' Albums";
	$user_album_friends[4] = "My Friends' Albums";
	$user_album_friends[5] = "The albums listed below were recently updated by your friends.";
	$user_album_friends[6] = "Owner:";
	$user_album_friends[7] = "Created:";
	$user_album_friends[8] = "Last Update:";
	$user_album_friends[9] = "Files:";
	$user_album_friends[10] = "photos";
	$user_album_friends[11] = "You do not have any friends with albums.";
	break;


  case "user_album_update":
	$user_album_update[1] = "Your changes have been saved.";
	$user_album_update[2] = "My Albums";
	$user_album_update[3] = "Album Settings";
	$user_album_update[4] = "My Friends' Albums";
	$user_album_update[5] = "Edit Photos:";
	$user_album_update[6] = "All photos inside this album are listed below.<br>This album contains";
	$user_album_update[7] = "files";
	$user_album_update[8] = "and has been viewed";
	$user_album_update[9] = "times.";
	$user_album_update[10] = "Back to Albums";
	$user_album_update[11] = "Add New Photos";
	$user_album_update[12] = "Edit Album Info";
	$user_album_update[13] = "There are no files in this album.";
	$user_album_update[14] = "Click here to begin adding files.";
	$user_album_update[15] = "Title";
	$user_album_update[16] = "comments";
	$user_album_update[17] = "Caption";
	$user_album_update[18] = "Delete Photo";
	$user_album_update[19] = "Album Cover";
	$user_album_update[20] = "Save Changes";
	break;
	

  case "user_album_upload":
	$user_album_upload[1] = "was uploaded successfully.";
	$user_album_upload[2] = "Your album has been created. You can begin uploading photos below.";
	$user_album_upload[3] = "My Albums";
	$user_album_upload[4] = "Album Settings";
	$user_album_upload[5] = "My Friends' Albums";
	$user_album_upload[6] = "Upload Photos:";
	$user_album_upload[7] = "To upload photos from your computer, click the \"Choose File\" button, locate them on your computer, then click the \"Upload Photos\" button.";
	$user_album_upload[8] = "Back to Photos";
	$user_album_upload[9] = "You have";
	$user_album_upload[10] = "File 1:";
	$user_album_upload[11] = "File 2:";
	$user_album_upload[12] = "File 3:";
	$user_album_upload[13] = "File 4:";
	$user_album_upload[14] = "File 5:";
	$user_album_upload[15] = "Upload Photos";
	$user_album_upload[16] = "UPLOADING"; // THIS ONE IS USED BY JAVASCRIPT, SO NO QUOTES, DOUBLEQUOTES, OR ANY SPECIAL CHARACTERS WHATSOEVER
	$user_album_upload[17] = "MB of free space remaining.<br>You may upload files of the following types:";
	$user_album_upload[18] = "<br>You may upload files with sizes up to";
	$user_album_upload[19] = "KB.";
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