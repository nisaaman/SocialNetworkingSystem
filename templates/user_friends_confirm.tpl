{include file='header.tpl'}

<table class='tabs' cellpadding='0' cellspacing='0'>
<tr>
<td class='tab0'>&nbsp;</td>
<td class='tab1' NOWRAP><a href='user_friends.php'>{$user_friends_confirm3}</a></td>
<td class='tab'>&nbsp;</td>
<td class='tab2' NOWRAP><a href='user_friends_requests.php'>{$user_friends_confirm4}</a></td>
<td class='tab'>&nbsp;</td>
</tr>
</table>


<img src='./images/icons/friends48.gif' border='0' class='icon_big'>
<div class='page_header'>{$user_friends_confirm5}</div>
<div>{$user_friends_confirm6} <a href='{$url->url_create('profile', $owner->user_info.user_username)}'>{$owner->user_info.user_username}</a>.</div>

<br><br>

<form action='user_friends_confirm.php' method='POST' name='confirmform'>
<table cellpadding='0' cellspacing='0'>

{* SHOW FRIEND TYPES IF APPLICABLE *}
{if $friend_types != ""}
  <tr>
  <td>
    <table cellpadding='0' cellspacing='0'>
    <tr>
    <td class='form1'>{$user_friends_confirm7}</td>
    <td class='form2'>
      <select name='friend_type' style='margin-top: 0px;'>
      <option></option>
        {section name=type_loop loop=$friend_types}
          <option value='{$friend_types[type_loop]}'{if $friend_type == $friend_types[type_loop]} SELECTED{/if}>{$friend_types[type_loop]}</option>
        {/section}
      </select>
    </td>
    <td>
    </td>
    </tr>
    </table>
  </td>
  </tr>

{else}
  <input type='hidden' name='friend_type' value=''>
{/if}
</table>

<br>

{* SHOW FRIEND EXPLANATION IF APPLICABLE *}
{if $setting.setting_connection_explain != 0}
<table cellpadding='0' cellspacing='0'>
<tr>
<td>
  <b>{$user_friends_confirm11} <a href='{$url->url_create('profile', $owner->user_info.user_username)}'>{$owner->user_info.user_username}</a>{$user_friends_confirm12}</b><br>
  <textarea name='friend_explain' rows='5' cols='60' style='margin-top: 3px;'>{$friend_explain}</textarea>
</td>
</tr>
</table>
{else}
  <input type='hidden' name='friend_explain' value=''>
{/if}  


<table cellpadding='0' cellspacing='0'>
<tr><td colspan='2'>&nbsp;</td></tr>
<tr>
<td colspan='2'>
   <table cellpadding='0' cellspacing='0'>
   <tr>
   <td>
   <input type='submit' class='button' value='{$user_friends_confirm13}'>&nbsp;
   <input type='hidden' name='task' value='editdo'>
   <input type='hidden' name='user' value='{$owner->user_info.user_username}'>
   </form>
   </td>
   <td>
     <form action='user_friends.php' method='POST'>
     <input type='submit' class='button' value='{$user_friends_confirm14}'>
     <input type='hidden' name='task' value='cancel'>
     <input type='hidden' name='user' value='{$owner->user_info.user_username}'>
     </form>
   </td>
   </tr>
   </table>
</td>
</tr>
</table>

{include file='footer.tpl'}