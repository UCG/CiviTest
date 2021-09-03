<?php /* Smarty version 2.6.31, created on 2021-09-01 21:22:49
         compiled from CRM/Event/Import/Form/DataSource.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'crmScope', 'CRM/Event/Import/Form/DataSource.tpl', 1, false),array('block', 'ts', 'CRM/Event/Import/Form/DataSource.tpl', 18, false),array('function', 'help', 'CRM/Event/Import/Form/DataSource.tpl', 19, false),)), $this); ?>
<?php $this->_tag_stack[] = array('crmScope', array('extensionKey' => "")); $_block_repeat=true;smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
<div class="crm-block crm-form-block crm-event-import-uploadfile-form-block">
  <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/common/WizardHeader.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

 <div class="help">
    <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>The Event Import Wizard allows you to easily upload event participation data such as event registrations from other applications into CiviCRM.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
    <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Files to be imported must be in the 'comma-separated-values' format (CSV) and must contain data needed to match the participant data to an existing contact in your CiviCRM database.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?> <?php echo smarty_function_help(array('id' => 'upload'), $this);?>

 </div>
 <div id="upload-file" class="form-item">
 <div class="crm-submit-buttons"><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/common/formButtons.tpl", 'smarty_include_vars' => array('location' => 'top')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></div>
   <table class="form-layout">
        <tr class="crm-event-import-uploadfile-form-block-uploadFile">
            <td class="label"><?php echo $this->_tpl_vars['form']['uploadFile']['label']; ?>
</td>
            <td><?php echo $this->_tpl_vars['form']['uploadFile']['html']; ?>
<br />
                <span class="description">
                    <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>File format must be comma-separated-values (CSV).<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
                </span>
            </td>
  </tr>
  <tr>
            <td>&nbsp;</td>
      <td><?php $this->_tag_stack[] = array('ts', array('1' => $this->_tpl_vars['uploadSize'])); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Maximum Upload File Size: %1 MB<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></td>
        </tr>
  <tr class="crm-participants-form-block-skipColumnHeader">
            <td>&nbsp;</td>
            <td><?php echo $this->_tpl_vars['form']['skipColumnHeader']['html']; ?>
 <?php echo $this->_tpl_vars['form']['skipColumnHeader']['label']; ?>
<br />
                <span class="description">
                    <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Check this box if the first row of your file consists of field names (Example: "Contact ID", "Participant Role").<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
                </span>
            </td>
  </tr>
  <tr class="crm-event-import-uploadfile-form-block-contactType">
            <td class="label"><?php echo $this->_tpl_vars['form']['contactType']['label']; ?>
</td>
            <td><?php echo $this->_tpl_vars['form']['contactType']['html']; ?>
<br />
                <span class="description">
                    <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Select 'Individual' if you are importing event participation data for individual persons.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
                    <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Select 'Organization' or 'Household' if you are importing event participation data for contacts of that type. (NOTE: Some built-in contact types may not be enabled for your site.)<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
                </span>
            </td>
  </tr>
  <tr class="crm-event-import-uploadfile-form-block-onDuplicate">
            <td class="label"><?php echo $this->_tpl_vars['form']['onDuplicate']['label']; ?>
</td>
      <td><?php echo $this->_tpl_vars['form']['onDuplicate']['html']; ?>
 <?php echo smarty_function_help(array('id' => "id-onDuplicate"), $this);?>
</td>
        </tr>

   <tr class="crm-import-datasource-form-block-fieldSeparator">
     <td class="label"><?php echo $this->_tpl_vars['form']['fieldSeparator']['label']; ?>
 <?php echo smarty_function_help(array('id' => 'id-fieldSeparator','file' => 'CRM/Contact/Import/Form/DataSource'), $this);?>
</td>
     <td><?php echo $this->_tpl_vars['form']['fieldSeparator']['html']; ?>
</td>
   </tr>
  <tr class="crm-event-import-uploadfile-form-block-date_format">
            <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/Core/Date.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
  </tr>
  <?php if ($this->_tpl_vars['savedMapping']): ?>
  <tr class="crm-event-import-uploadfile-form-block-savedMapping">
              <td class="label"><?php if ($this->_tpl_vars['loadedMapping']): ?><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Select a Different Field Mapping<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php else: ?><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Load Saved Field Mapping<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php endif; ?></dt>
              <td><span><?php echo $this->_tpl_vars['form']['savedMapping']['html']; ?>
</span> </td>
  </tr>
  <tr>
            <td>&nbsp;</td>
            <td class="description"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Select Saved Mapping, or leave blank to create a new mapping.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></td>
        <?php endif; ?>
        </tr>
    </table>
    <div class="crm-submit-buttons"><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/common/formButtons.tpl", 'smarty_include_vars' => array('location' => 'bottom')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></div>
  </div>
 </div>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>