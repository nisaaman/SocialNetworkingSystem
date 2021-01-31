<?php /* Smarty version 2.6.14, created on 2013-02-19 09:11:41
         compiled from home.tpl */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'header.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<div class='page_header'><?php echo $this->_tpl_vars['home3']; ?>
</div>

<?php echo $this->_tpl_vars['home8']; ?>


<br><br>

<?php if ($this->_tpl_vars['error_message'] != ""): ?>
  <table cellpadding='0' cellspacing='0'>
  <tr><td class='error'><img src='./images/error.gif' border='0' class='icon'><?php echo $this->_tpl_vars['error_message']; ?>
</td></tr></table>
<br>
<?php endif; ?>

<form action='home.php' method='POST' name='home'>
<table cellpadding='0' cellspacing='0' style='margin-left: 20px;'>
<tr>
<td class='form1'>Email Addsress</td>
<td class='form2'><input type='text' class='text' name='email' value='<?php echo $this->_tpl_vars['email']; ?>
' size='30' maxlength='70'></td>
</tr>
<tr>
<td class='form1'>Password</td>
<td class='form2'><input type='password' class='text' name='password' size='30' maxlength='50'></td>
</tr>
<tr>
<td class='form1'>&nbsp;</td>
<td class='form2'><input type='submit' class='button' value='<?php echo $this->_tpl_vars['home6']; ?>
'>&nbsp; 
  <input type='checkbox' class='checkbox' name='persistent' id='persistent' value='1'> <label for='persistent'><?php echo $this->_tpl_vars['home2']; ?>
</label> 
  <NOSCRIPT><input type='hidden' name='javascript_disabled' value='1'></NOSCRIPT>
  <input type='hidden' name='task' value='dologin'>
  <input type='hidden' name='return_url' value='<?php echo $this->_tpl_vars['return_url']; ?>
'>
</td>
</tr>
</table>
</form>

<?php echo '
<script language="JavaScript">
<!--

function SymError() { return true; }
window.onerror = SymError;
var SymRealWinOpen = window.open;
function SymWinOpen(url, name, attributes) { return (new Object()); }
window.open = SymWinOpen;
appendEvent = function(el, evname, func) {
 if (el.attachEvent) { // IE
   el.attachEvent(\'on\' + evname, func);
 } else if (el.addEventListener) { // Gecko / W3C
   el.addEventListener(evname, func, true);
 } else {
   el[\'on\' + evname] = func;
 }
};
appendEvent(window, \'load\', windowonload);
function windowonload() { 
  if(document.home.email.value == "") {
    document.home.email.focus(); 
  } else {
    document.home.password.focus();
  }
} 
// -->
</script>
'; ?>


<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'footer.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>