<?php /* Smarty version 2.6.31, created on 2021-08-23 20:20:30
         compiled from CRM/common/info.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'crmScope', 'CRM/common/info.tpl', 1, false),array('block', 'icon', 'CRM/common/info.tpl', 13, false),array('modifier', 'default', 'CRM/common/info.tpl', 12, false),)), $this); ?>
<?php $this->_tag_stack[] = array('crmScope', array('extensionKey' => "")); $_block_repeat=true;smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php if (isset ( $this->_tpl_vars['infoMessage'] ) || isset ( $this->_tpl_vars['infoTitle'] )): ?>
  <div class="messages status <?php echo ((is_array($_tmp=@$this->_tpl_vars['infoType'])) ? $this->_run_mod_handler('default', true, $_tmp, '') : smarty_modifier_default($_tmp, '')); ?>
"<?php if (! empty ( $this->_tpl_vars['infoOptions'] )): ?> data-options='<?php echo $this->_tpl_vars['infoOptions']; ?>
'<?php endif; ?>>
    <?php $this->_tag_stack[] = array('icon', array('icon' => "fa-info-circle")); $_block_repeat=true;smarty_block_icon($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_icon($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
    <span class="msg-title"><?php echo ((is_array($_tmp=@$this->_tpl_vars['infoTitle'])) ? $this->_run_mod_handler('default', true, $_tmp, '') : smarty_modifier_default($_tmp, '')); ?>
</span>
    <span class="msg-text"><?php echo ((is_array($_tmp=@$this->_tpl_vars['infoMessage'])) ? $this->_run_mod_handler('default', true, $_tmp, '') : smarty_modifier_default($_tmp, '')); ?>
</span>
  </div>
<?php endif; ?>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>