<?php /* Smarty version 2.6.31, created on 2021-08-24 21:45:02
         compiled from CRM/Event/Form/Task/Batch.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'crmScope', 'CRM/Event/Form/Task/Batch.tpl', 1, false),array('block', 'ts', 'CRM/Event/Form/Task/Batch.tpl', 13, false),array('function', 'help', 'CRM/Event/Form/Task/Batch.tpl', 14, false),array('function', 'copyIcon', 'CRM/Event/Form/Task/Batch.tpl', 45, false),array('function', 'cycle', 'CRM/Event/Form/Task/Batch.tpl', 51, false),)), $this); ?>
<?php $this->_tag_stack[] = array('crmScope', array('extensionKey' => "")); $_block_repeat=true;smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><div class="batch-update crm-block crm-form-block crm-event-batch-form-block">
  <div class="help">
    <?php if ($this->_tpl_vars['context'] == 'statusChange'): ?>       <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Update the status for each participant individually below, or change all statuses to:<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
      <?php echo $this->_tpl_vars['form']['status_change']['html']; ?>
  <?php echo smarty_function_help(array('id' => "id-status_change"), $this);?>

      <?php if ($this->_tpl_vars['status']): ?>
        <div class="status">
          <p><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>This form <strong>will send email</strong> to contacts only in certain circumstances:<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></p>
          <ul>
            <li><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><strong>Resolving "Pay Later" registrations for online registrations:</strong> Participants who registered online whose status is changed from <em>Pending Pay Later</em> to <em>Registered</em> or <em>Attended</em> will receive a confirmation email and their payment status will be set to completed. If this is not you want to do, you can change their participant status by editing their event registration record directly.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></li>
          <?php if ($this->_tpl_vars['notifyingStatuses']): ?>
            <li><?php $this->_tag_stack[] = array('ts', array('1' => $this->_tpl_vars['notifyingStatuses'])); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><strong>Special statuses:</strong> Participants whose status is changed to any of the following will be automatically notified via email: %1<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></li>
          <?php endif; ?>
          </ul>
        </div>
      <?php endif; ?>
    <?php else: ?>
      <?php if ($this->_tpl_vars['statusProfile'] == 1): ?>         <div class="status"><?php echo $this->_tpl_vars['status']; ?>
</div>
      <?php endif; ?>
      <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Update field values for each participant as needed. To set a field to the same value for ALL rows, enter that value for the first participation and then click the
        <strong>Copy icon</strong>
        (next to the column title).<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
    <?php endif; ?>
    <p><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Click <strong>Update Participant(s)</strong> below to save all your changes.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></p>
  </div>
        <table class="crm-copy-fields">
       <thead class="sticky">
            <tr class="columnheader">
             <?php $_from = $this->_tpl_vars['readOnlyFields']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['fName'] => $this->_tpl_vars['fTitle']):
?>
              <td><?php echo $this->_tpl_vars['fTitle']; ?>
</td>
           <?php endforeach; endif; unset($_from); ?>

             <td><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Event<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></td>
             <?php $_from = $this->_tpl_vars['fields']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['fieldName'] => $this->_tpl_vars['field']):
?>
                <td><?php echo smarty_function_copyIcon(array('name' => $this->_tpl_vars['field']['name'],'title' => $this->_tpl_vars['field']['title']), $this);?>
<?php echo $this->_tpl_vars['field']['title']; ?>
</td>
             <?php endforeach; endif; unset($_from); ?>

         </tr>
         </thead>
            <?php $_from = $this->_tpl_vars['componentIds']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['pid']):
?>
             <tr class="<?php echo smarty_function_cycle(array('values' => "odd-row,even-row"), $this);?>
" entity_id="<?php echo $this->_tpl_vars['pid']; ?>
">
        <?php $_from = $this->_tpl_vars['readOnlyFields']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['fName'] => $this->_tpl_vars['fTitle']):
?>
           <td><?php echo $this->_tpl_vars['contactDetails'][$this->_tpl_vars['pid']][$this->_tpl_vars['fName']]; ?>
</td>
        <?php endforeach; endif; unset($_from); ?>

              <td class="crm-event-title"><?php echo $this->_tpl_vars['details'][$this->_tpl_vars['pid']]['title']; ?>
</td>
              <?php $_from = $this->_tpl_vars['fields']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['fieldName'] => $this->_tpl_vars['field']):
?>
                <?php $this->assign('n', $this->_tpl_vars['field']['name']); ?>

                                <?php if ($this->_tpl_vars['field']['options_per_line']): ?>
                  <td class="compressed">
                    <?php $this->assign('count', '1'); ?>
                    <?php echo '<table class="form-layout-compressed"><tr>'; ?><?php echo ''; ?><?php $this->assign('index', '1'); ?><?php echo ''; ?><?php $_from = $this->_tpl_vars['form']['field'][$this->_tpl_vars['pid']][$this->_tpl_vars['n']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['optionOuter'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['optionOuter']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['optionKey'] => $this->_tpl_vars['optionItem']):
        $this->_foreach['optionOuter']['iteration']++;
?><?php echo ''; ?><?php if ($this->_tpl_vars['index'] < 10): ?><?php echo ''; ?><?php $this->assign('index', ($this->_tpl_vars['index']+1)); ?><?php echo ''; ?><?php else: ?><?php echo '<td class="labels font-light">'; ?><?php echo $this->_tpl_vars['form']['field'][$this->_tpl_vars['pid']][$this->_tpl_vars['n']][$this->_tpl_vars['optionKey']]['html']; ?><?php echo '</td>'; ?><?php if ($this->_tpl_vars['count'] == $this->_tpl_vars['field']['options_per_line']): ?><?php echo '</tr><tr>'; ?><?php $this->assign('count', '1'); ?><?php echo ''; ?><?php else: ?><?php echo ''; ?><?php $this->assign('count', ($this->_tpl_vars['count']+1)); ?><?php echo ''; ?><?php endif; ?><?php echo ''; ?><?php endif; ?><?php echo ''; ?><?php endforeach; endif; unset($_from); ?><?php echo '</tr></table>'; ?>

                  </td>
                <?php else: ?>
                  <td class="compressed"><?php echo $this->_tpl_vars['form']['field'][$this->_tpl_vars['pid']][$this->_tpl_vars['n']]['html']; ?>
</td>
                <?php endif; ?>
              <?php endforeach; endif; unset($_from); ?>
             </tr>
            <?php endforeach; endif; unset($_from); ?>
           </tr>
         </table>
<div class="crm-submit-buttons">
<?php if ($this->_tpl_vars['fields']): ?><?php echo $this->_tpl_vars['form']['_qf_Batch_refresh']['html']; ?>
<?php endif; ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/common/formButtons.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
</div>
</div>

<?php if ($this->_tpl_vars['context'] == 'statusChange'): ?> <?php echo '
<script type="text/javascript">
/**
 * Function to update participant status
 */
CRM.$(function($) {
   $(\'#status_change\').change( function() {
      if ( $(this).val() ) {
        $(\'.crm-copy-fields [name^="field["][name*="[participant_status]"]\').val( $(this).val() );
      }
   });

});
</script>
'; ?>

<?php endif; ?>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/common/batchCopy.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>