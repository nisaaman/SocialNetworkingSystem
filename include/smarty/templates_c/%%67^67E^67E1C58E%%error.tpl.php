<?php /* Smarty version 2.6.14, created on 2013-02-19 09:13:51
         compiled from error.tpl */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'header.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<img src='./images/icons/error48.gif' border='0' class='icon_big'>
<div class='page_header'><?php echo $this->_tpl_vars['error_header']; ?>
</div>
<?php echo $this->_tpl_vars['error_message']; ?>


<br><br><br>
<input type='button' class='button' value='<?php echo $this->_tpl_vars['error_submit']; ?>
' onClick='history.go(-1)'>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'footer.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>