<?php /* Smarty version 2.6.31, created on 2021-08-23 20:49:26
         compiled from CRM/Event/Page/volunteer-button.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'crmScope', 'CRM/Event/Page/volunteer-button.tpl', 1, false),)), $this); ?>
<?php $this->_tag_stack[] = array('crmScope', array('extensionKey' => "")); $_block_repeat=true;smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><div class="action-link section volunteer_link-section register_link-<?php echo $this->_tpl_vars['snippet']['position']; ?>
">
  <a href="<?php echo $this->_tpl_vars['snippet']['url']; ?>
" title="<?php echo $this->_tpl_vars['snippet']['button_text']; ?>
" class="button crm-volunteer_signup-button">
    <span><?php echo $this->_tpl_vars['snippet']['button_text']; ?>
</span>
  </a>
</div><?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>