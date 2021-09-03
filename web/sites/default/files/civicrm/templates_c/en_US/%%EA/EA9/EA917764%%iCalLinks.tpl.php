<?php /* Smarty version 2.6.31, created on 2021-08-23 20:26:30
         compiled from CRM/Event/Page/iCalLinks.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'crmScope', 'CRM/Event/Page/iCalLinks.tpl', 1, false),)), $this); ?>
<?php $this->_tag_stack[] = array('crmScope', array('extensionKey' => "")); $_block_repeat=true;smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>  <?php $_from = $this->_tpl_vars['iCal']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['iCalItem']):
?>
  <a href="<?php echo $this->_tpl_vars['iCalItem']['url']; ?>
" title="<?php echo $this->_tpl_vars['iCalItem']['text']; ?>
"<?php if (! $this->_tpl_vars['event']): ?> class="crm-event-feed-link"<?php endif; ?>>
    <span class="fa-stack" aria-hidden="true"><i class="crm-i fa-calendar-o fa-stack-2x"></i><i style="top: 15%;" class="crm-i <?php echo $this->_tpl_vars['iCalItem']['icon']; ?>
 fa-stack-1x"></i></span>
    <span class="sr-only"><?php echo $this->_tpl_vars['iCalItem']['text']; ?>
</span>
  </a>
  <?php endforeach; endif; unset($_from); ?>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>