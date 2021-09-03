<?php /* Smarty version 2.6.31, created on 2021-08-26 15:51:08
         compiled from CRM/ACL/Header.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'crmScope', 'CRM/ACL/Header.tpl', 1, false),array('block', 'ts', 'CRM/ACL/Header.tpl', 13, false),array('function', 'docURL', 'CRM/ACL/Header.tpl', 10, false),)), $this); ?>
<?php $this->_tag_stack[] = array('crmScope', array('extensionKey' => "")); $_block_repeat=true;smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php ob_start(); ?><?php echo smarty_function_docURL(array('page' => 'user/initial-set-up/permissions-and-access-control/','text' => 'Access Control Documentation'), $this);?>
<?php $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->assign('docLink', ob_get_contents());ob_end_clean(); ?>

<div class="help">
  <p><?php $this->_tag_stack[] = array('ts', array('1' => $this->_tpl_vars['docLink'])); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>ACLs allow you to control access to CiviCRM data. An ACL consists of an <strong>Operation</strong> (e.g. 'View' or 'Edit'), a <strong>set of data</strong> that the operation can be performed on (e.g. a group of contacts), and a <strong>Role</strong> that has permission to do this operation. Refer to the %1 for more info.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></p>
</div>

<?php 
  $currentStep = $this->get_template_vars('step');
  $wizard = array(
    'style' => array(),
    'currentStepNumber' => $currentStep,
    'steps' => array(
      array(
        'title' => ts('Manage Roles'),
        'link' => CRM_Utils_System::url('civicrm/admin/options/acl_role', 'reset=1'),
      ),
      array(
        'title' => ts('Assign Users'),
        'link' => CRM_Utils_System::url('civicrm/acl/entityrole', 'reset=1'),
      ),
      array(
        'title' => ts('Manage ACLs'),
        'link' => CRM_Utils_System::url('civicrm/acl', 'reset=1'),
      ),
    ),
  );
  foreach ($wizard['steps'] as $num => &$step) {
    $step['step'] = $step['valid'] = $step['stepNumber'] = $num + 1;
    if ($step['stepNumber'] == $currentStep) {
      $step['link'] = NULL;
    }
  }
  $this->assign('wizard', $wizard);
 ?>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/common/WizardHeader.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>