<?php /* Smarty version 2.6.31, created on 2021-08-25 20:52:41
         compiled from CRM/Batch/Form/Batch.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'crmScope', 'CRM/Batch/Form/Batch.tpl', 1, false),array('block', 'ts', 'CRM/Batch/Form/Batch.tpl', 12, false),array('block', 'icon', 'CRM/Batch/Form/Batch.tpl', 22, false),array('modifier', 'crmAddClass', 'CRM/Batch/Form/Batch.tpl', 45, false),)), $this); ?>
<?php $this->_tag_stack[] = array('crmScope', array('extensionKey' => "")); $_block_repeat=true;smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php if ($this->_tpl_vars['action'] == 8): ?>
  <h3><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Delete Data Entry Batch<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></h3>
<?php elseif ($this->_tpl_vars['action'] == 2): ?>
  <h3><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Edit Data Entry Batch<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></h3>
<?php else: ?>
  <h3><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>New Data Entry Batch<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></h3>
<?php endif; ?>
<div class="crm-block crm-form-block crm-batch-form-block">
<div class="crm-submit-buttons"><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/common/formButtons.tpl", 'smarty_include_vars' => array('location' => 'top')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></div>
<?php if ($this->_tpl_vars['action'] == 8): ?>
  <div class="messages status no-popup">
     <?php $this->_tag_stack[] = array('icon', array('icon' => "fa-info-circle")); $_block_repeat=true;smarty_block_icon($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_icon($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
        <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>WARNING: Deleting this batch will result in the loss of all data entered for the batch.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?> <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>This may mean the loss of a substantial amount of data, and the action cannot be undone.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?> <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Do you want to continue?<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
      </div>
<?php else: ?>
  <table class="form-layout-compressed">
      <tr class="crm-batch-form-block-title">
          <td class="label"><?php echo $this->_tpl_vars['form']['title']['label']; ?>
</td>
          <td><?php echo $this->_tpl_vars['form']['title']['html']; ?>
</td>
      </tr>
      <tr class="crm-batch-form-block-type_id">
          <td class="label"><?php echo $this->_tpl_vars['form']['type_id']['label']; ?>
</td>
          <td><?php echo $this->_tpl_vars['form']['type_id']['html']; ?>
</td>
      </tr>
      <tr class="crm-batch-form-block-description">
          <td class="label"><?php echo $this->_tpl_vars['form']['description']['label']; ?>
</td>
          <td><?php echo $this->_tpl_vars['form']['description']['html']; ?>
</td>
      </tr>
      <tr class="crm-batch-form-block-item_count">
          <td class="label"><?php echo $this->_tpl_vars['form']['item_count']['label']; ?>
</td>
          <td><?php echo $this->_tpl_vars['form']['item_count']['html']; ?>
</td>
      </tr>
      <tr  class="crm-batch-form-block-total">
           <td class="label"><?php echo $this->_tpl_vars['form']['total']['label']; ?>
</td>
           <td><?php echo ((is_array($_tmp=$this->_tpl_vars['form']['total']['html'])) ? $this->_run_mod_handler('crmAddClass', true, $_tmp, 'eight') : smarty_modifier_crmAddClass($_tmp, 'eight')); ?>
</td>
      </tr>
  </table>
<?php endif; ?>
    <div class="crm-submit-buttons"><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/common/formButtons.tpl", 'smarty_include_vars' => array('location' => 'bottom')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></div>
</div>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>