<?php /* Smarty version 2.6.31, created on 2021-08-24 21:40:54
         compiled from CRM/Event/Form/SelfSvcUpdate.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'crmScope', 'CRM/Event/Form/SelfSvcUpdate.tpl', 1, false),array('block', 'ts', 'CRM/Event/Form/SelfSvcUpdate.tpl', 13, false),array('modifier', 'truncate', 'CRM/Event/Form/SelfSvcUpdate.tpl', 22, false),array('modifier', 'crmDate', 'CRM/Event/Form/SelfSvcUpdate.tpl', 22, false),)), $this); ?>
<?php $this->_tag_stack[] = array('crmScope', array('extensionKey' => "")); $_block_repeat=true;smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><div class="crm-selfsvcupdate-form">
  <table class="crm-selfsvcupdate-form-details">
    <tr>
      <th><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Participant<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></th>
      <th><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Event<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></th>
      <th><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Fee Level<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></th>
      <th><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Amount<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></th>
      <th><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Registered<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></th>
      <th><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Status<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></th>
      <th><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Role<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></th>
    </tr>
    <tr class="crm-selfsvcupdate-form-details">
      <td><?php echo $this->_tpl_vars['details']['name']; ?>
</td><td><?php echo $this->_tpl_vars['details']['title']; ?>
<br /><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['details']['event_start_date'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 10, '') : smarty_modifier_truncate($_tmp, 10, '')))) ? $this->_run_mod_handler('crmDate', true, $_tmp) : smarty_modifier_crmDate($_tmp)); ?>
</td>
      <td class="crm-participant-participant_fee_level"><?php echo $this->_tpl_vars['details']['fee_level']; ?>
</td>
      <td class="right nowrap crm-paticipant-participant_fee_amount"><?php echo $this->_tpl_vars['details']['fee_amount']; ?>
</td>
      <td><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['details']['register_date'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 10, '') : smarty_modifier_truncate($_tmp, 10, '')))) ? $this->_run_mod_handler('crmDate', true, $_tmp) : smarty_modifier_crmDate($_tmp)); ?>
</td>
      <td><?php echo $this->_tpl_vars['details']['status']; ?>
</td><td class="crm-participant-participant_role"><?php echo $this->_tpl_vars['details']['role']; ?>
</td>
    </tr>
  </table>
  <div class="crm-public-form-item crm-section selfsvcupdate-section">
    <div class="label"><?php echo $this->_tpl_vars['form']['action']['label']; ?>
</div>
    <div class="content"><?php echo $this->_tpl_vars['form']['action']['html']; ?>
</div>
    <div class="clear"></div>
  </div>
  <div class="crm-submit-buttons"><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/common/formButtons.tpl", 'smarty_include_vars' => array('location' => 'bottom')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></div>
</div>
<?php echo '
<script type="text/javascript">
  var contributionID = '; ?>
'<?php echo $this->_tpl_vars['contributionId']; ?>
'<?php echo ';
  CRM.$(function($) {
    $(\'#action\').on(\'change\', function() {
      selected = $(this).find("option:selected").text();
      if (selected == \'Cancel\' && contributionID) {
        CRM.alert(\''; ?>
<?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Cancellations are not refundable.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php echo '\', \'Warning\', \'alert\');
      }
    });
  });
</script>
'; ?>

<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>