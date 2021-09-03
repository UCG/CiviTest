<?php /* Smarty version 2.6.31, created on 2021-08-25 21:11:36
         compiled from CRM/PCP/Form/Contribute.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'crmScope', 'CRM/PCP/Form/Contribute.tpl', 1, false),array('block', 'ts', 'CRM/PCP/Form/Contribute.tpl', 14, false),array('function', 'crmURL', 'CRM/PCP/Form/Contribute.tpl', 12, false),array('function', 'help', 'CRM/PCP/Form/Contribute.tpl', 18, false),)), $this); ?>
<?php $this->_tag_stack[] = array('crmScope', array('extensionKey' => "")); $_block_repeat=true;smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><div id="pcp-form" class="crm-block crm-form-block crm-contribution-contributionpage-pcp-form-block">
<?php if (! $this->_tpl_vars['profile']): ?>
  <?php ob_start(); ?><?php echo CRM_Utils_System::crmURL(array('p' => 'civicrm/admin/uf/group','q' => "reset=1"), $this);?>
<?php $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->assign('pUrl', ob_get_contents());ob_end_clean(); ?>
  <div class="status message">
  <?php $this->_tag_stack[] = array('ts', array('1' => $this->_tpl_vars['pUrl'])); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>No Profile with a user account registration option has been configured / enabled for your site. You need to <a href='%1'>configure a Supporter profile</a> first. It will be used to collect or update basic information from users while they are creating a Personal Campaign Page.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
  </div>
<?php endif; ?>
<div class="help">
<?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Allow constituents to create their own personal fundraising pages linked to this contribution page.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?> <?php echo smarty_function_help(array('id' => "id-pcp_intro_help"), $this);?>

</div>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/PCP/Form/PCP.tpl", 'smarty_include_vars' => array('context' => 'contribute')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>