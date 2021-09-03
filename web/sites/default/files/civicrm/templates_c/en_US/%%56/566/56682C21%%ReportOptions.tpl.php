<?php /* Smarty version 2.6.31, created on 2021-08-24 21:02:23
         compiled from CRM/Report/Form/Tabs/ReportOptions.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'crmScope', 'CRM/Report/Form/Tabs/ReportOptions.tpl', 1, false),)), $this); ?>
<?php $this->_tag_stack[] = array('crmScope', array('extensionKey' => "")); $_block_repeat=true;smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php if ($this->_tpl_vars['otherOptions']): ?>
  <div id="report-tab-other-options" class="civireport-criteria">
    <table class="report-layout">
      <?php $this->assign('optionCount', 0); ?>
      <tr class="crm-report crm-report-criteria-field">
        <?php $_from = $this->_tpl_vars['otherOptions']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['optionName'] => $this->_tpl_vars['optionField']):
?>
        <?php $this->assign('optionCount', ($this->_tpl_vars['optionCount']+1)); ?>
        <td><?php if ($this->_tpl_vars['form'][$this->_tpl_vars['optionName']]['label']): ?><?php echo $this->_tpl_vars['form'][$this->_tpl_vars['optionName']]['label']; ?>
&nbsp;<?php endif; ?><?php echo $this->_tpl_vars['form'][$this->_tpl_vars['optionName']]['html']; ?>
</td>
        <?php if (!($this->_tpl_vars['optionCount'] % 2)): ?>
      </tr><tr class="crm-report crm-report-criteria-field">
        <?php endif; ?>
        <?php endforeach; endif; unset($_from); ?>
        <?php if (!(!($this->_tpl_vars['optionCount'] % 2))): ?>
          <td colspan="2 - ($count % 2)"></td>
        <?php endif; ?>
      </tr>
    </table>
  </div>
<?php endif; ?>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>