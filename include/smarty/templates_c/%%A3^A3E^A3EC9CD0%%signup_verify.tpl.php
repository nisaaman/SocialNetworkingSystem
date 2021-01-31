<?php /* Smarty version 2.6.14, created on 2013-02-20 07:37:34
         compiled from signup_verify.tpl */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'header.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<div class='page_header'><?php echo $this->_tpl_vars['signup_verify6']; ?>
</div>

<?php if ($this->_tpl_vars['is_error'] == 0): ?>
  <div class='success'><img src='./images/success.gif' border='0' class='icon'> <?php echo $this->_tpl_vars['signup_verify7']; ?>
 <?php echo $this->_tpl_vars['subnet_changed']; ?>
 <?php echo $this->_tpl_vars['signup_verify8']; ?>
</div>
  <br>
  <form action='login.php' method='GET'>
  <input type='submit' class='button' value='<?php echo $this->_tpl_vars['signup_verify9']; ?>
'>
  </form>
<?php else: ?>
  <?php if ($this->_tpl_vars['resend'] == 0): ?>
    <div><?php echo $this->_tpl_vars['signup_verify10']; ?>
</div>
    <br>
    <form action='signup_verify.php' method='POST'>
    <?php echo $this->_tpl_vars['signup_verify11']; ?>
<br><input type='text' class='text' name='resend_email' size='40' maxlength='70'>
    <br><br>
    <input type='submit' class='button' value='<?php echo $this->_tpl_vars['signup_verify12']; ?>
'>
    <input type='hidden' name='task' value='resend'>
    </form>
  <?php else: ?>
    <?php if ($this->_tpl_vars['is_resend_error'] == 0): ?>
      <div class='success'><img src='./images/success.gif' border='0' class='icon'> <?php echo $this->_tpl_vars['signup_verify13']; ?>
</div>
    <?php else: ?>
      <div class='success'><img src='./images/error.gif' border='0' class='icon'><?php echo $this->_tpl_vars['error_message']; ?>
</div>
    <?php endif; ?>
  <?php endif; ?>
<?php endif; ?>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'footer.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>