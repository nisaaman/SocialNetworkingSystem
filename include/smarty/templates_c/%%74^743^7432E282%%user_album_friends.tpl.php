<?php /* Smarty version 2.6.14, created on 2013-02-19 09:13:13
         compiled from user_album_friends.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'truncate', 'user_album_friends.tpl', 57, false),array('modifier', 'count', 'user_album_friends.tpl', 73, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'header.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<table class='tabs' cellpadding='0' cellspacing='0'>
<tr>
<td class='tab0'>&nbsp;</td>
<td class='tab2' NOWRAP><a href='user_album.php'><?php echo $this->_tpl_vars['user_album_friends1']; ?>
</a></td>
<td class='tab'>&nbsp;</td>
<td class='tab1' NOWRAP><a href='user_album_friends.php'><?php echo $this->_tpl_vars['user_album_friends3']; ?>
</a></td>
<td class='tab3'>&nbsp;</td>
</tr>
</table>

<table cellpadding='0' cellspacing='0' width='100%'><tr><td class='page'>

<img src='./images/icons/image48.gif' border='0' class='icon_big'>
<div class='page_header'><?php echo $this->_tpl_vars['user_album_friends4']; ?>
</div>
<div><?php echo $this->_tpl_vars['user_album_friends5']; ?>
</div>

<br><br>

<?php unset($this->_sections['album_loop']);
$this->_sections['album_loop']['name'] = 'album_loop';
$this->_sections['album_loop']['loop'] = is_array($_loop=$this->_tpl_vars['albums']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['album_loop']['show'] = true;
$this->_sections['album_loop']['max'] = $this->_sections['album_loop']['loop'];
$this->_sections['album_loop']['step'] = 1;
$this->_sections['album_loop']['start'] = $this->_sections['album_loop']['step'] > 0 ? 0 : $this->_sections['album_loop']['loop']-1;
if ($this->_sections['album_loop']['show']) {
    $this->_sections['album_loop']['total'] = $this->_sections['album_loop']['loop'];
    if ($this->_sections['album_loop']['total'] == 0)
        $this->_sections['album_loop']['show'] = false;
} else
    $this->_sections['album_loop']['total'] = 0;
if ($this->_sections['album_loop']['show']):

            for ($this->_sections['album_loop']['index'] = $this->_sections['album_loop']['start'], $this->_sections['album_loop']['iteration'] = 1;
                 $this->_sections['album_loop']['iteration'] <= $this->_sections['album_loop']['total'];
                 $this->_sections['album_loop']['index'] += $this->_sections['album_loop']['step'], $this->_sections['album_loop']['iteration']++):
$this->_sections['album_loop']['rownum'] = $this->_sections['album_loop']['iteration'];
$this->_sections['album_loop']['index_prev'] = $this->_sections['album_loop']['index'] - $this->_sections['album_loop']['step'];
$this->_sections['album_loop']['index_next'] = $this->_sections['album_loop']['index'] + $this->_sections['album_loop']['step'];
$this->_sections['album_loop']['first']      = ($this->_sections['album_loop']['iteration'] == 1);
$this->_sections['album_loop']['last']       = ($this->_sections['album_loop']['iteration'] == $this->_sections['album_loop']['total']);
?>

    <?php if ($this->_tpl_vars['albums'][$this->_sections['album_loop']['index']]['album_cover_id'] == 0): ?>
    <?php $this->assign('album_cover_src', './images/icons/folder_big.gif'); ?>
  <?php else: ?>
        <?php if ($this->_tpl_vars['albums'][$this->_sections['album_loop']['index']]['album_cover_ext'] == 'jpeg' || $this->_tpl_vars['albums'][$this->_sections['album_loop']['index']]['album_cover_ext'] == 'jpg' || $this->_tpl_vars['albums'][$this->_sections['album_loop']['index']]['album_cover_ext'] == 'gif' || $this->_tpl_vars['albums'][$this->_sections['album_loop']['index']]['album_cover_ext'] == 'png' || $this->_tpl_vars['albums'][$this->_sections['album_loop']['index']]['album_cover_ext'] == 'bmp'): ?>
      <?php $this->assign('album_cover_dir', $this->_tpl_vars['url']->url_userdir($this->_tpl_vars['albums'][$this->_sections['album_loop']['index']]['album_author']->user_info['user_id'])); ?>
      <?php $this->assign('album_cover_src', ($this->_tpl_vars['album_cover_dir']).($this->_tpl_vars['albums'][$this->_sections['album_loop']['index']]['album_cover_id'])."_thumb.jpg"); ?>
        <?php elseif ($this->_tpl_vars['albums'][$this->_sections['album_loop']['index']]['album_cover_ext'] == 'mp3' || $this->_tpl_vars['albums'][$this->_sections['album_loop']['index']]['album_cover_ext'] == 'mp4' || $this->_tpl_vars['albums'][$this->_sections['album_loop']['index']]['album_cover_ext'] == 'wav'): ?>
      <?php $this->assign('album_cover_src', './images/icons/audio_big.gif'); ?>
        <?php elseif ($this->_tpl_vars['albums'][$this->_sections['album_loop']['index']]['album_cover_ext'] == 'mpeg' || $this->_tpl_vars['albums'][$this->_sections['album_loop']['index']]['album_cover_ext'] == 'mpg' || $this->_tpl_vars['albums'][$this->_sections['album_loop']['index']]['album_cover_ext'] == 'mpa' || $this->_tpl_vars['albums'][$this->_sections['album_loop']['index']]['album_cover_ext'] == 'avi' || $this->_tpl_vars['albums'][$this->_sections['album_loop']['index']]['album_cover_ext'] == 'swf' || $this->_tpl_vars['albums'][$this->_sections['album_loop']['index']]['album_cover_ext'] == 'mov' || $this->_tpl_vars['albums'][$this->_sections['album_loop']['index']]['album_cover_ext'] == 'ram' || $this->_tpl_vars['albums'][$this->_sections['album_loop']['index']]['album_cover_ext'] == 'rm'): ?>
      <?php $this->assign('album_cover_src', './images/icons/video_big.gif'); ?>
        <?php else: ?>
      <?php $this->assign('album_cover_src', './images/icons/file_big.gif'); ?>
    <?php endif; ?>
  <?php endif; ?>



<div class='album_row'>
<table cellpadding='0' cellspacing='0'>
<tr>
<td valign='top'>
  <table cellpadding='0' cellspacing='0' width='220'>
  <tr>
  <td class='album_photo'><a href='<?php echo $this->_tpl_vars['url']->url_create('album',$this->_tpl_vars['albums'][$this->_sections['album_loop']['index']]['album_author']->user_info['user_username'],$this->_tpl_vars['albums'][$this->_sections['album_loop']['index']]['album_id']); ?>
'><img src='<?php echo $this->_tpl_vars['album_cover_src']; ?>
' border='0'></a></td>
  </tr>
  </table>
</td>
<td class='album_row1' valign='top'>
  <div><font class='big'><a href='<?php echo $this->_tpl_vars['url']->url_create('album',$this->_tpl_vars['albums'][$this->_sections['album_loop']['index']]['album_author']->user_info['user_username'],$this->_tpl_vars['albums'][$this->_sections['album_loop']['index']]['album_id']); ?>
'><img src='./images/icons/album16.gif' border='0' class='icon'><?php echo ((is_array($_tmp=$this->_tpl_vars['albums'][$this->_sections['album_loop']['index']]['album_title'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 30) : smarty_modifier_truncate($_tmp, 30)); ?>
</a></font></div><br>
  <table cellpadding='0' cellspacing='0'>
  <tr><td width='100'><?php echo $this->_tpl_vars['user_album_friends6']; ?>
</td><td><a href='<?php echo $this->_tpl_vars['url']->url_create('profile',$this->_tpl_vars['albums'][$this->_sections['album_loop']['index']]['album_author']->user_info['user_username']); ?>
'><?php echo $this->_tpl_vars['albums'][$this->_sections['album_loop']['index']]['album_author']->user_info['user_username']; ?>
</a></td></tr>
  <tr><td><?php echo $this->_tpl_vars['user_album_friends7']; ?>
</td><td><?php echo $this->_tpl_vars['datetime']->time_since($this->_tpl_vars['albums'][$this->_sections['album_loop']['index']]['album_datecreated']); ?>
</td></tr>
  <?php if ($this->_tpl_vars['albums'][$this->_sections['album_loop']['index']]['album_dateupdated'] != 0): ?><tr><td><?php echo $this->_tpl_vars['user_album_friends8']; ?>
</td><td><?php echo $this->_tpl_vars['datetime']->time_since($this->_tpl_vars['albums'][$this->_sections['album_loop']['index']]['album_dateupdated']); ?>
</td></tr><?php endif; ?>
  <tr><td><?php echo $this->_tpl_vars['user_album_friends9']; ?>
</td><td><?php echo $this->_tpl_vars['albums'][$this->_sections['album_loop']['index']]['album_files']; ?>
 <?php echo $this->_tpl_vars['user_album_friends10']; ?>
 (<?php echo $this->_tpl_vars['albums'][$this->_sections['album_loop']['index']]['album_space']; ?>
 MB)</td></tr>
  <tr><td colspan='2'><br><?php echo ((is_array($_tmp=$this->_tpl_vars['albums'][$this->_sections['album_loop']['index']]['album_desc'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 197) : smarty_modifier_truncate($_tmp, 197)); ?>
</td></tr>
  </table>
</td>
</tr>
</table>
</div>

<?php endfor; endif; ?>

<?php if (count($this->_tpl_vars['albums']) == 0): ?>
  <div class='align'>
  <br>
  <table cellpadding='0' cellspacing='0' align='center'>
  <tr><td class='result'>
    <img src='./images/icons/bulb22.gif' border='0' class='icon'> <?php echo $this->_tpl_vars['user_album_friends11']; ?>

  </td></tr></table>
  </div>
<?php endif; ?>

</td></tr></table>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'footer.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>