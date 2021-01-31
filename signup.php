<?php
$page = "signup";
include "header.php";

if(isset($_POST['task'])) { $task = $_POST['task']; } else { $task = "step1"; }

// SET ERROR VARS
$is_error = 0;
$error_message = "";


// IF USER IS ALREADY LOGGED IN, FORWARD TO USER HOME PAGE
if($user->user_exists != 0) { header("Location: user_home.php"); exit(); }



// CHECK IF USER SIGNUP COOKIES SET (STEPS 3, 4, 5)
$signup_logged_in = 0;
if($task != "step1" AND $task != "step1do" AND $task != "step2" AND $task != "step2do") {
  if(isset($_COOKIE['signup_id']) & isset($_COOKIE['signup_email']) & isset($_COOKIE['signup_password'])) {

    // GET USER ROW IF AVAILABLE
    $user_id = $_COOKIE['signup_id'];
    $new_user = new se_user(Array($user_id));

    // VERIFY USER LOGIN COOKIE VALUES AND RESET USER LOGIN VARIABLE
    if($_COOKIE['signup_email'] == crypt($new_user->user_info[user_email], "$1$"."$") & $_COOKIE['signup_password'] == $new_user->user_info[user_password]) {
      $signup_logged_in = 1;
    }
  }

  if($signup_logged_in != 1) { cheader("signup.php"); exit(); }
}

if($signup_logged_in != 1) {
  setcookie("signup_id", "", 0, "/");
  setcookie("signup_email", "", 0, "/");
  setcookie("signup_password", "", 0, "/");
  $_COOKIE['signup_id'] = "";
  $_COOKIE['signup_email'] = "";
  $_COOKIE['signup_password'] = "";
  $new_user = new se_user();
  
  if($task == "step1") { 
    if(isset($_GET['signup_email'])) { $signup_email = $_GET['signup_email']; } else { $signup_email = ""; }
    $signup_password = ""; 
  }
}



// PROCESS INPUT FROM FIRST STEP (OR DOUBLE CHECK VALUES), CONTINUE TO SECOND STEP (OR SECOND STEP PROCESSING)
if($task == "step1do" | $task == "step2do") {
  $signup_email = $_POST['signup_email'];
  $signup_password = $_POST['signup_password'];
  $signup_password2 = $_POST['signup_password2'];
  $step = $_POST['step'];
    if($task == "step2do" & $step != "1") {
      $signup_password = base64_decode($signup_password);
      $signup_password2 = base64_decode($signup_password2);
    }
  $signup_username = $_POST['signup_username'];
  $signup_timezone = $_POST['signup_timezone'];

  // GET LANGUAGE PACK SELECTION
  if($setting[setting_lang_allow] != 1) {
    $signup_lang = $setting[setting_lang_default];
  } else {
    $signup_lang = strtolower($_POST['signup_lang']);
    if(!file_exists("./lang/lang_".$signup_lang.".php")) { $signup_lang = $setting[setting_lang_default]; }
  }

  // TEMPORARILY SET PASSWORD IF RANDOM PASSWORD ENABLED
  if($setting[setting_signup_randpass] != 0) {
    $signup_password = "temporary";
    $signup_password2 = "temporary";
  }

  // CHECK USER ERRORS
  $new_user->user_account($signup_email, $signup_username);
  $new_user->user_password('', $signup_password, $signup_password2, 0);
  $is_error = $new_user->is_error;
  $error_message = $new_user->error_message;


  // CHECK TERMS OF SERVICE AGREEMENT IF NECESSARY
  if($setting[setting_signup_tos] != 0) {
    $signup_agree = $_POST['signup_agree'];
    if($signup_agree != 1) {
      $is_error = 1;
      $error_message = $signup[1];
    }
  }

  // RETRIEVE AND CHECK SECURITY CODE IF NECESSARY
  if($setting[setting_signup_code] != 0) {
    session_start();
    $code = $_SESSION['code'];
    $signup_secure = $_POST['signup_secure'];

    if($signup_secure != $code) {
      $is_error = 1;
      $error_message = $signup[2];
   }
  }


  // IF THERE IS NO ERROR, CONTINUE TO STEP 2 OR PROCESS STEP 2
  if($is_error == 0) {
    // ONLY IF ON STEP ONE, CONTINUE TO STEP 2 - ELSE GO TO PROCESSING STEP 2
    if($task == "step1do") { $task = "step2"; }

  // IF THERE WAS AN ERROR, GO BACK TO STEP 1
  } else {
    $task = "step1";
  }

}


if($task == "step1" | $task == "step1do" | $task == "step2" | $task == "step2do") {
  if($task == "step2do") { $validate = 1; } else { $validate = 0; }
  $new_user->user_fields(0, 0, $validate, 1);
  if($validate == 1) { $is_error = $new_user->is_error; $error_message = $new_user->error_message; }
}


if($task == "step2do") {

  // PROFILE FIELD INPUTS PROCESSED AND CHECKED FOR ERRORS ABOVE
  // IF THERE IS NO ERROR, ADD USER AND USER PROFILE AND CONTINUE TO STEP 3
  if($is_error == 0) {

    $new_user->user_create($signup_email, $signup_username, $signup_password, $signup_timezone, $signup_lang);

    // INSERT ACTION
    $actions->actions_add($new_user, "signup", Array('[username]'), Array($new_user->user_info[user_username]));

    }

    // SET SIGNUP COOKIE
    $id = $new_user->user_info[user_id];
    $em = crypt($new_user->user_info[user_email], "$1$"."$");
    $pass = $new_user->user_info[user_password];
    setcookie("signup_id", "$id", 0, "/");
    setcookie("signup_email", "$em", 0, "/");
    setcookie("signup_password", "$pass", 0, "/");

        $task = "step3"; 
}







// UPLOAD PHOTO
if($task == "step3do") {
  $new_user->user_photo_upload("photo");
  $is_error = $new_user->is_error;
  $error_message = $new_user->error_message;
  $task = "step3";
}






// SHOW COMPLETION PAGE
if($task == "step4") {
  // UNSET SIGNUP COOKIES
  setcookie("signup_id", "", 0, "/");
  setcookie("signup_email", "", 0, "/");
  setcookie("signup_password", "", 0, "/");

  // DISPLAY THANK YOU
  $step = 4;
}




// SHOW THIRD STEP
if($task == "step3") {
  $step = 3;
  $next_task = "step3do";
  $last_task = "step4"; 
}





// SHOW SECOND STEP
if($task == "step2") {
  $step = 2;
  $next_task = "step2do";
  if(count($new_user->profile_tabs) == 0) { $task = "step1"; }
  $signup_password = base64_encode($signup_password);
  $signup_password2 = base64_encode($signup_password2);
}







// SHOW FIRST STEP
if($task == "step1") {
  $step = 1;
  if(count($new_user->profile_tabs) == 0) { $next_task = "step2do"; } else { $next_task = "step1do"; }

  // GET LANGUAGE FILE OPTIONS
  $lang_options = Array();
  $lang_count = 0;
  if($dh = opendir("./lang/")) {
    while(($file = readdir($dh)) !== false) {
      if($file != "." & $file != "..") {
        if(preg_match("/lang_([^_]+)\.php/", $file, $matches)) {
          $lang_options[$lang_count] = ucfirst($matches[1]);
          $lang_count++;
        }
      }
    }
    closedir($dh);
  }

}









// SET DEFAULT TIMEZONE
if(!isset($signup_timezone)) { $signup_timezone = $setting['setting_timezone']; }

// ASSIGN VARIABLES AND INCLUDE FOOTER
$smarty->assign('error_message', $error_message);
$smarty->assign('new_user', $new_user);
$smarty->assign('tabs', $new_user->profile_tabs);
$smarty->assign('signup_email', $signup_email);
$smarty->assign('signup_password', $signup_password);
$smarty->assign('signup_password2', $signup_password2);
$smarty->assign('signup_username', $signup_username);
$smarty->assign('signup_timezone', $signup_timezone);
$smarty->assign('signup_lang', $signup_lang);
$smarty->assign('signup_secure', $signup_secure);
$smarty->assign('signup_agree', $signup_agree);
$smarty->assign('lang_options', $lang_options);
$smarty->assign('next_task', $next_task);
$smarty->assign('last_task', $last_task);
$smarty->assign('step', $step);
include "footer.php";
?>