<?php /* Smarty version 2.6.31, created on 2021-08-25 21:06:47
         compiled from CRM/Financial/Form/FinancialType.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'crmScope', 'CRM/Financial/Form/FinancialType.tpl', 1, false),array('block', 'ts', 'CRM/Financial/Form/FinancialType.tpl', 14, false),array('function', 'crmURL', 'CRM/Financial/Form/FinancialType.tpl', 14, false),)), $this); ?>
<?php $this->_tag_stack[] = array('crmScope', array('extensionKey' => "")); $_block_repeat=true;smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/Core/Form/EntityForm.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php if ($this->_tpl_vars['action'] == 2 || $this->_tpl_vars['action'] == 4): ?>   <div class="crm-submit-buttons">
    <a href="<?php echo CRM_Utils_System::crmURL(array('p' => 'civicrm/admin/financial/financialType/accounts','q' => "action=browse&reset=1&aid=".($this->_tpl_vars['aid'])), $this);?>
" class="button"><span><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>View or Edit Financial Accounts<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></a></span>
  </div>
<?php endif; ?>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>