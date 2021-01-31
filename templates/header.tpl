<html>
<head>
<title>Social Media PSTU</title>
<link rel="stylesheet" href="./templates/styles.css" title="stylesheet" type="text/css">  
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

{* CODE FOR VARIOUS JAVASCRIPT-BASED FEATURES, DO NOT REMOVE *}
<script type="text/javascript" src="./include/js/tips.js"></script>
<script type="text/javascript" src="./include/js/showhide.js"></script>
<script type="text/javascript" src="./include/js/suggest.js"></script>
<script type="text/javascript" src="./include/js/status.js"></script>

{* ASSIGN PLUGIN MENU ITEMS AND INCLUDE NECESSARY STYLE/JAVASCRIPT FILES *}
{section name=header_loop loop=$global_plugins}{include file="header_`$global_plugins[header_loop]`.tpl"}{/section} 
{array var="global_plugin_menu" value=''}
</head>
<body>

{* START PAGE *}
<table cellpadding='0' cellspacing='0' width='800' align='center'>
<tr>
<td align='center'>

<table cellpadding='0' cellspacing='0' align='left' width='100%'>
<tr>
<td class='topbar1'><img src='images/__logo.jpg' border='0' align="left" height="90"><br><br></td>
<td class='topbar1'><img src='images/logo.jpg' width="300" height="70"></td>
<td class='topbar1' align='right'>
  <form action='search.php' method='POST'>
  <table cellpadding='0' cellspacing='0'>
  <tr>
  <td>Search Friends &nbsp;</td>
  <td><input type='text' name='search_text' class='text' size='30'>&nbsp;</td>
  <td><input type='submit' class='button' value='{$header2}'></td>
  </tr>
  </table>
  <input type='hidden' name='task' value='dosearch'>
  <input type='hidden' name='t' value='0'>
  </form>
</td>
</tr>
<tr>
<td colspan="2" class='topbar2'>
{if $user->user_exists != 0}
  {$header7}<a href='user_home.php' class='top_menu_item'>{$user->user_info.user_username}</a>&nbsp;&nbsp;&nbsp;
  {* IF USER IS NOT LOGGED IN, SHOW APPROPRIATE TOP MENU ITEMS *}
  {else}
  <b> <a href='home.php' class='top_menu_item'>{$header3}</a>&nbsp;&nbsp;&nbsp;
  {/if}
</td>
<td class='topbar2_right'>
  
  {* IF USER IS LOGGED IN, SHOW APPROPRIATE TOP MENU ITEMS *}
  {if $user->user_exists != 0}
  <b><a href='user_logout.php' class='top_menu_item'>{$header8}</a></b>
  {* IF USER IS NOT LOGGED IN, SHOW APPROPRIATE TOP MENU ITEMS *}
  {else}
  <b><a href='signup.php' class='top_menu_item'>{$header9}</a>&nbsp;&nbsp;&nbsp;
  {/if}
</td>
</tr>

{* SHOW MENU IF USER IS LOGGED IN AND ACCESSING USER AREA *}
{if $user->user_exists != 0}
  <tr>
  <td class='menu' colspan='3'>

    <table cellpadding='0' cellspacing='0'>
    <tr>

    {* SHOW PROFILE MENU ITEM *}
    <td class='menu_item'>
      <a href='user_home.php' class='menu_item'><img src='./images/icons/menu_home.gif' border='0' class='icon'  >{$header11}</a> 
    </td>

    {* SHOW PROFILE MENU ITEM *}
    <td class='menu_item'>
      <a href='{$url->url_create('profile', $user->user_info.user_username)}' class='menu_item'><img src='./images/icons/menu_profile.gif' border='0' class='icon'>{$header12}</a> 
    </td>
	   <td class='menu_item'>
       <img src='./images/icons/menu_editprofile.gif' border='0' class='icon'><a href='user_editprofile.php'>{$header13}</a>
    </td>

    {* SHOW FRIENDS MENU ITEM IF ENABLED *}
    {if $setting.setting_connection_allow != 0}
      <td class='menu_item'>
        <a href='user_friends.php' class='menu_item'><img src='./images/icons/menu_friends.gif' border='0' class='icon' >{$header16}</a>
      </td>
    {/if}

    {* SHOW ANY PLUGIN MENU ITEMS *}
    {section name=menu_loop loop=$global_plugin_menu} 
      {if $global_plugin_menu[menu_loop] != ''} 
        <td class='menu_item'> 
          <a href='{$global_plugin_menu[menu_loop].0}' class='menu_item'>
		  <img src='./images/icons/{$global_plugin_menu[menu_loop].1}' border='0' class='icon'  >{$global_plugin_menu[menu_loop].2}</a> 
        </td> 
      {/if} 
    {/section} 

    {* SHOW MESSAGES MENU ITEM IF ENABLED *}
    {if $user->level_info.level_message_allow != 0}
      <td class='menu_item'>
        <a href='user_messages.php' class='menu_item'><img src='./images/icons/menu_messages.gif' border='0' class='icon'>{$header18}
		{if $user_unread_pms != 0} ({$user_unread_pms}){/if}</a>
      </td>
    {/if}
	    {* SHOW SETTINGS *}
    <td class='menu_item'>
      <a href='user_account_pass.php' class='menu_item'><img src='./images/icons/menu_account.gif' border='0' class='icon'>{$header19}</a>
    </td>

    </tr>
    </table>

  </td>
  </tr>
{/if}

<tr><td class='shadow' colspan='3'><img src='./images/shadow.gif' border='0'></td></tr>
</table>

{* BEGIN PAGE CONTENT *}
<table cellpadding='0' cellspacing='0' width='100%' align='center'>
<tr>
{* SHOW LEFT-SIDE ADVERTISEMENT BANNER *}
<td class='ad_left' width='1' style='display: table-cell; visibility: visible;'></td>
<td class='content'>

{* SHOW BELOW-MENU ADVERTISEMENT BANNER *}
{$ads->ad_belowmenu}