{include file='header.tpl'}

<table class='tabs' cellpadding='0' cellspacing='0'>
<tr>
<td class='tab0'>&nbsp;</td>
<td class='tab1' NOWRAP><a href='user_album.php'>{$user_album_add2}</a></td>
<td class='tab'>&nbsp;</td>
<td class='tab2' NOWRAP><a href='user_album_friends.php'>{$user_album_add4}</a></td>
<td class='tab3'>&nbsp;</td>
</tr>
</table>

<table cellpadding='0' cellspacing='0' width='100%'><tr><td class='page'>

<img src='./images/icons/image48.gif' border='0' class='icon_big'>
<div class='page_header'>{$user_album_add5}</div>
<div>{$user_album_add6}</div>

<br><br>

{* SHOW ERROR MESSAGE *}
{if $is_error != ""}
  <div class='error'><img src='./images/error.gif' class='icon' border='0'> {$user_album_add1}</div>
{/if}

{* SHOW ERROR IF MAX ALBUMS REACHED *}
{if $total_albums >= $user->level_info.level_album_maxnum}
  <table cellpadding='0' cellspacing='0'>
  <tr>
  <td class='result'>
    <img src='./images/error.gif' class='icon' border='0'> {$user_album_add7}
  </td></tr></table>
  <br>
  <form action='user_album.php' method='get'>
  <input type='submit' class='button' value='{$user_album_add8}'>
  </form>

{* DISPLAY ALBUM CREATION PAGE *}
{else}

  <form action='user_album_add.php' method='POST'>
  <b>{$user_album_add9}</b><br>
  <input name='album_title' type='text' class='text' maxlength='50' size='30'>

  <br><br>

  <b>{$user_album_add10}</b><br>
  <textarea name='album_desc' rows='6' cols='50'></textarea>

  <br>
  <br>
  <table cellpadding='0' cellspacing='0'>
  <tr>
  <td>
    <input type='submit' class='button' value='{$user_album_add16}'>&nbsp;
    <input type='hidden' name='task' value='doadd'>
    </form>
  </td>
  <td>
    <form action='user_album.php' method='POST'>
    <input type='submit' class='button' value='{$user_album_add17}'>
    </form>
  </td>
  </tr>
  </table>
{/if}

</td></tr></table>
  
{include file='footer.tpl'}