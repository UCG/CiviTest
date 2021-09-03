<?php /* Smarty version 2.6.31, created on 2021-08-24 21:49:07
         compiled from CRM/Event/Page/ParticipantListing/NameStatusAndDate.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'crmScope', 'CRM/Event/Page/ParticipantListing/NameStatusAndDate.tpl', 1, false),array('block', 'icon', 'CRM/Event/Page/ParticipantListing/NameStatusAndDate.tpl', 38, false),array('block', 'ts', 'CRM/Event/Page/ParticipantListing/NameStatusAndDate.tpl', 39, false),array('function', 'cycle', 'CRM/Event/Page/ParticipantListing/NameStatusAndDate.tpl', 27, false),)), $this); ?>
<?php $this->_tag_stack[] = array('crmScope', array('extensionKey' => "")); $_block_repeat=true;smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php if ($this->_tpl_vars['rows']): ?>
    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/common/pager.tpl", 'smarty_include_vars' => array('location' => 'top')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
       <table cellpadding="0" cellspacing="0" border="0">
         <tr class="columnheader">
        <?php $_from = $this->_tpl_vars['headers']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['header']):
?>
        <th scope="col">
        <?php if ($this->_tpl_vars['header']['sort']): ?>
          <?php $this->assign('key', $this->_tpl_vars['header']['sort']); ?>
          <?php echo $this->_tpl_vars['sort']->_response[$this->_tpl_vars['key']]['link']; ?>

        <?php else: ?>
          <?php echo $this->_tpl_vars['header']['name']; ?>

        <?php endif; ?>
        </th>
      <?php endforeach; endif; unset($_from); ?>
         </tr>
      <?php $_from = $this->_tpl_vars['rows']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['row']):
?>
         <tr class="<?php echo smarty_function_cycle(array('values' => "odd-row,even-row"), $this);?>
">
            <td class="crm-participant-name"><?php echo $this->_tpl_vars['row']['name']; ?>
</td>
            <td class="crm-participant-status"><?php echo $this->_tpl_vars['row']['status']; ?>
</td>
            <td class="crm-participant-date"><?php echo $this->_tpl_vars['row']['date']; ?>
</td>
         </tr>
      <?php endforeach; endif; unset($_from); ?>
      </table>
    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/common/pager.tpl", 'smarty_include_vars' => array('location' => 'bottom')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php else: ?>
    <div class='spacer'></div>
    <div class="messages status no-popup">
      <?php $this->_tag_stack[] = array('icon', array('icon' => "fa-info-circle")); $_block_repeat=true;smarty_block_icon($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_icon($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
        <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>There are currently no participants registered for this event.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
      </div>
<?php endif; ?>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>