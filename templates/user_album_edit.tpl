{include file='header.tpl'}

<table class='tabs' cellpadding='0' cellspacing='0'>
<tr>
<td class='tab0'>&nbsp;</td>
<td class='tab1' NOWRAP><a href='user_album.php'>{$user_album_edit3}</a></td>
<td class='tab'>&nbsp;</td>
<td class='tab2' NOWRAP><a href='user_album_friends.php'>{$user_album_edit5}</a></td>
<td class='tab3'>&nbsp;</td>
</tr>
</table>

<table cellpadding='0' cellspacing='0' width='100%'><tr><td class='page'>

<table cellpadding='0' cellspacing='0'>
<tr>
<td width='100%'>
  <img src='./images/icons/image48.gif' border='0' class='icon_big'>
  <div class='page_header'>{$user_album_edit6}</div>
  <div>{$user_album_edit7}</div>
</td>
<td align='right' valign='top'>
  <table cellpadding='0' cellspacing='0' width='120'>
  <tr><td class='button' nowrap='nowrap'><a href='user_album.php?album_id={$album_id}'><img src='./images/icons/album_back16.gif' border='0' class='icon'>{$user_album_edit8}</a></td></tr>
  </table>
</td>
</tr>
</table>

<br>

{* SHOW RESULT MESSAGE *}
{if $result != 0}
  <div class='success'><img src='./images/success.gif' border='0' class='icon'> {$user_album_edit2}</div>
{/if}

{* SHOW ERROR MESSAGE *}
{if $is_error != 0}
  <div class='error'><img src='./images/error.gif' border='0' class='icon'> {$user_album_edit1}</div>
{/if}

<form action='user_album_edit.php' method='post'>

<b>{$user_album_edit9}</b><br>
<input name='album_title' type='text' class='text' maxlength='50' size='50' value='{$album_title}'>
<br><br>
<b>{$user_album_edit10}</b><br>
<textarea name='album_desc' rows='6' cols='50'>{$album_desc}</textarea>

<br>

<br>

<table cellpadding='0' cellspacing='0'>
<tr>
<td>
  <input type='submit' class='button' value='{$user_album_edit16}'>&nbsp;
  <input type='hidden' name='task' value='dosave'>
  <input type='hidden' name='album_id' value='{$album_id}'>
  </form>
</td>
<td>
  <form action='user_album_update.php' method='POST'>
  <input type='submit' class='button' value='{$user_album_edit17}'>
  <input type='hidden' name='album_id' value='{$album_id}'>
</td>
</tr>
</table>

</td></tr></table>

{include file='footer.tpl'}