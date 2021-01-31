<?php /* Smarty version 2.6.14, created on 2013-02-19 09:12:52
         compiled from user_album_add.tpl */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'header.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<table class='tabs' cellpadding='0' cellspacing='0'>
<tr>
<td class='tab0'>&nbsp;</td>
<td class='tab1' NOWRAP><a href='user_album.php'><?php echo $this->_tpl_vars['user_album_add2']; ?>
</a></td>
<td class='tab'>&nbsp;</td>
<td class='tab2' NOWRAP><a href='user_album_friends.php'><?php echo $this->_tpl_vars['user_album_add4']; ?>
</a></td>
<td class='tab3'>&nbsp;</td>
</tr>
</table>

<table cellpadding='0' cellspacing='0' width='100%'><tr><td class='page'>

<img src='./images/icons/image48.gif' border='0' class='icon_big'>
<div class='page_header'><?php echo $this->_tpl_vars['user_album_add5']; ?>
</div>
<div><?php echo $this->_tpl_vars['user_album_add6']; ?>
</div>

<br><br>

<?php if ($this->_tpl_vars['is_error'] != ""): ?>
  <div class='error'><img src='./images/error.gif' class='icon' border='0'> <?php echo $this->_tpl_vars['user_album_add1']; ?>
</div>
<?php endif; ?>

<?php if ($this->_tpl_vars['total_albums'] >= $this->_tpl_vars['user']->level_info['level_album_maxnum']): ?>
  <table cellpadding='0' cellspacing='0'>
  <tr>
  <td class='result'>
    <img src='./images/error.gif' class='icon' border='0'> <?php echo $this->_tpl_vars['user_album_add7']; ?>

  </td></tr></table>
  <br>
  <form action='user_album.php' method='get'>
  <input type='submit' class='button' value='<?php echo $this->_tpl_vars['user_album_add8']; ?>
'>
  </form>

<?php else: ?>

  <form action='user_album_add.php' method='POST'>
  <b><?php echo $this->_tpl_vars['user_album_add9']; ?>
</b><br>
  <input name='album_title' type='text' class='text' maxlength='50' size='30'>

  <br><br>

  <b><?php echo $this->_tpl_vars['user_album_add10']; ?>
</b><br>
  <textarea name='album_desc' rows='6' cols='50'></textarea>

  <br>
  <br>
  <table cellpadding='0' cellspacing='0'>
  <tr>
  <td>
    <input type='submit' class='button' value='<?php echo $this->_tpl_vars['user_album_add16']; ?>
'>&nbsp;
    <input type='hidden' name='task' value='doadd'>
    </form>
  </td>
  <td>
    <form action='user_album.php' method='POST'>
    <input type='submit' class='button' value='<?php echo $this->_tpl_vars['user_album_add17']; ?>
'>
    </form>
  </td>
  </tr>
  </table>
<?php endif; ?>

</td></tr></table>
  
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'footer.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>