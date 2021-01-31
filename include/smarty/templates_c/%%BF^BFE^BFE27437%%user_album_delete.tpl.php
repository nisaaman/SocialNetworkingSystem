<?php /* Smarty version 2.6.14, created on 2013-02-19 09:15:23
         compiled from user_album_delete.tpl */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'header.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<table class='tabs' cellpadding='0' cellspacing='0'>
<tr>
<td class='tab0'>&nbsp;</td>
<td class='tab1' NOWRAP><a href='user_album.php'><?php echo $this->_tpl_vars['user_album_delete1']; ?>
</a></td>
<td class='tab'>&nbsp;</td>
<td class='tab2' NOWRAP><a href='user_album_friends.php'><?php echo $this->_tpl_vars['user_album_delete3']; ?>
</a></td>
<td class='tab3'>&nbsp;</td>
</tr>
</table>

<table cellpadding='0' cellspacing='0' width='100%'><tr><td class='page'>

<img src='./images/icons/image48.gif' border='0' class='icon_big'>
<div class='page_header'><?php echo $this->_tpl_vars['user_album_delete4']; ?>
 <a href='<?php echo $this->_tpl_vars['url']->url_create('album',$this->_tpl_vars['user']->user_info['user_username'],$this->_tpl_vars['album_id']); ?>
'><?php echo $this->_tpl_vars['album_title']; ?>
</a></div>
<div><?php echo $this->_tpl_vars['user_album_delete5']; ?>
</div>

<br>

<table cellpadding='0' cellspacing='0'>
<form action='user_album_delete.php' method='post'>
<tr>
<td><input type='submit' class='button' value='<?php echo $this->_tpl_vars['user_album_delete6']; ?>
'>&nbsp;</td>
<input type='hidden' name='task' value='dodelete'>
<input type='hidden' name='album_id' value='<?php echo $this->_tpl_vars['album_id']; ?>
'>
</form>
<form action='user_album.php' method='POST'>
<td><input type='submit' class='button' value='<?php echo $this->_tpl_vars['user_album_delete7']; ?>
'></td>
</tr>
</table>

</td></tr></table>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'footer.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>