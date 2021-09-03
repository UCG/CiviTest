<?php /* Smarty version 2.6.31, created on 2021-08-24 21:06:31
         compiled from CRM/Report/Form/Event/Income.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'crmScope', 'CRM/Report/Form/Event/Income.tpl', 1, false),array('block', 'ts', 'CRM/Report/Form/Event/Income.tpl', 49, false),array('function', 'cycle', 'CRM/Report/Form/Event/Income.tpl', 37, false),)), $this); ?>
<?php $this->_tag_stack[] = array('crmScope', array('extensionKey' => "")); $_block_repeat=true;smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>    <?php if (! $this->_tpl_vars['section']): ?>
    <div class="crm-block crm-form-block crm-report-field-form-block">
    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/Report/Form/Fields.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
       </div>
    <?php endif; ?>

<div class="crm-block crm-content-block crm-report-form-block">
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/Report/Form/Actions.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
    <?php if (! $this->_tpl_vars['section']): ?>
        <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/Report/Form/Statistics.tpl", 'smarty_include_vars' => array('top' => true)));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
    <?php endif; ?>

    <?php if ($this->_tpl_vars['events']): ?>
        <div class="report-pager">
            <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/common/pager.tpl", 'smarty_include_vars' => array('location' => 'top')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
        </div>
        <?php $_from = $this->_tpl_vars['events']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['eventID']):
?>
                  <table class="report-layout">
                      <?php $_from = $this->_tpl_vars['summary'][$this->_tpl_vars['eventID']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['keys'] => $this->_tpl_vars['values']):
?>
                          <?php if ($this->_tpl_vars['keys'] == 'Title'): ?>
                              <tr>
                                        <th><?php echo $this->_tpl_vars['keys']; ?>
</th>
                                        <th colspan="3"><?php echo $this->_tpl_vars['values']; ?>
</th>
                                    </tr>
                                <?php else: ?>
                                    <tr class="<?php echo smarty_function_cycle(array('values' => "odd-row,even-row"), $this);?>
 crm-report crm-report_event_summary" id="crm-report_<?php echo $this->_tpl_vars['eventID']; ?>
_summary_<?php echo $this->_tpl_vars['keys']; ?>
">
                                        <td class="report-contents crm-report_summary_title"><?php echo $this->_tpl_vars['keys']; ?>
</td>
                                        <td class="report-contents crm-report_summary_details" colspan="3"><?php echo $this->_tpl_vars['values']; ?>
</td>
                                    </tr>
                                <?php endif; ?>
                            <?php endforeach; endif; unset($_from); ?>
                        </table>
                        <?php $_from = $this->_tpl_vars['rows']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['keys'] => $this->_tpl_vars['row']):
?>
                            <?php if ($this->_tpl_vars['row'][$this->_tpl_vars['eventID']]): ?>
                            <table class="report-layout">
                          <?php if ($this->_tpl_vars['row']): ?>
                              <tr>
                                  <th width="34%"><?php $this->_tag_stack[] = array('ts', array('1' => $this->_tpl_vars['keys'])); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>%1 Breakdown<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></th>
                                  <th class="reports-header-right"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Total<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></th>
                                        <th class="reports-header-right"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>% of Total<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></th>
                                        <th class="reports-header-right"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Revenue<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></th>
                                    </tr>
                                    <?php $_from = $this->_tpl_vars['row'][$this->_tpl_vars['eventID']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['role'] => $this->_tpl_vars['row']):
?>
                                        <tr class="<?php echo smarty_function_cycle(array('values' => "odd-row,even-row"), $this);?>
 crm-report crm-report_<?php echo $this->_tpl_vars['keys']; ?>
_<?php echo $this->_tpl_vars['role']; ?>
" id="crm-report_<?php echo $this->_tpl_vars['eventID']; ?>
_<?php echo $this->_tpl_vars['keys']; ?>
_<?php echo $this->_tpl_vars['role']; ?>
">
                                            <td class="report-contents crm-report_<?php echo $this->_tpl_vars['keys']; ?>
_breakdown" width="34%"><?php echo $this->_tpl_vars['role']; ?>
</td>
                                            <td class="report-contents-right crm-report_<?php echo $this->_tpl_vars['keys']; ?>
_total"><?php echo $this->_tpl_vars['row']['total']; ?>
</td>
                                            <td class="report-contents-right crm-report_<?php echo $this->_tpl_vars['keys']; ?>
_percentage"><?php echo $this->_tpl_vars['row']['round']; ?>
</td>
                                            <td class="report-contents-right crm-report_<?php echo $this->_tpl_vars['keys']; ?>
_revenue"><?php echo $this->_tpl_vars['row']['amount']; ?>
</td>
                                        </tr>
                                    <?php endforeach; endif; unset($_from); ?>
                                <?php endif; ?>
                            </table>
                            <?php endif; ?>
                        <?php endforeach; endif; unset($_from); ?>
        <?php endforeach; endif; unset($_from); ?>

    <div class="report-pager">
            <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/common/pager.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
        </div>
        <?php if (! $this->_tpl_vars['section']): ?>
                        <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/Report/Form/Statistics.tpl", 'smarty_include_vars' => array('bottom' => true)));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
        <?php endif; ?>
    <?php endif; ?>
    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/Report/Form/ErrorMessage.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
</div>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>