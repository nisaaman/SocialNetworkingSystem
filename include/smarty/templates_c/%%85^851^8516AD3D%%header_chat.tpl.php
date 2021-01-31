<?php /* Smarty version 2.6.14, created on 2013-02-19 09:12:08
         compiled from header_chat.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'array', 'header_chat.tpl', 4, false),)), $this); ?>

<?php if ($this->_tpl_vars['setting']['setting_chat_enabled'] != 0): ?>
  <?php echo smarty_function_array(array('var' => 'chat_menu','value' => "chat.php"), $this);?>

  <?php echo smarty_function_array(array('var' => 'chat_menu','value' => "chat16.gif"), $this);?>

  <?php echo smarty_function_array(array('var' => 'chat_menu','value' => $this->_tpl_vars['header_chat1']), $this);?>

  <?php echo smarty_function_array(array('var' => 'global_plugin_menu','value' => $this->_tpl_vars['chat_menu']), $this);?>
 
<?php endif; ?>
