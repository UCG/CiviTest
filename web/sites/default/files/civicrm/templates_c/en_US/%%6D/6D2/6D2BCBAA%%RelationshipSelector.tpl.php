<?php /* Smarty version 2.6.31, created on 2021-08-24 17:21:39
         compiled from CRM/Contact/Page/View/RelationshipSelector.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'crmScope', 'CRM/Contact/Page/View/RelationshipSelector.tpl', 1, false),array('block', 'crmRegion', 'CRM/Contact/Page/View/RelationshipSelector.tpl', 11, false),array('function', 'crmURL', 'CRM/Contact/Page/View/RelationshipSelector.tpl', 19, false),)), $this); ?>
<?php $this->_tag_stack[] = array('crmScope', array('extensionKey' => "")); $_block_repeat=true;smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php $this->_tag_stack[] = array('crmRegion', array('name' => "crm-contact-relationshipselector-pre")); $_block_repeat=true;smarty_block_crmRegion($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_crmRegion($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
<?php if (! isset ( $this->_tpl_vars['entityInClassFormat'] )): ?>
   <?php $this->assign('entityInClassFormat', 'relationship'); ?>
<?php endif; ?>
<div class="crm-contact-<?php echo $this->_tpl_vars['entityInClassFormat']; ?>
-<?php echo $this->_tpl_vars['context']; ?>
">
  <table
    class="crm-contact-<?php echo $this->_tpl_vars['entityInClassFormat']; ?>
-selector-<?php echo $this->_tpl_vars['context']; ?>
 crm-ajax-table"
    data-ajax="<?php echo CRM_Utils_System::crmURL(array('p' => "civicrm/ajax/contactrelationships",'q' => "context=".($this->_tpl_vars['context'])."&cid=".($this->_tpl_vars['contactId'])), $this);?>
"
    data-order='[[0,"asc"],[1,"asc"]]'
    style="width: 100%;">
    <thead>
    <tr>
      <?php $_from = $this->_tpl_vars['columnHeaders']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['headerkey'] => $this->_tpl_vars['header']):
?>
        <?php if ($this->_tpl_vars['header']['sort']): ?>
          <th data-data="<?php echo $this->_tpl_vars['header']['sort']; ?>
" class="crm-contact-<?php echo $this->_tpl_vars['entityInClassFormat']; ?>
-<?php echo $this->_tpl_vars['header']['sort']; ?>
"><?php echo $this->_tpl_vars['header']['name']; ?>
</th>
        <?php else: ?>
          <th data-data="<?php echo $this->_tpl_vars['headerkey']; ?>
" data-orderable="false" class="crm-contact-<?php echo $this->_tpl_vars['entityInClassFormat']; ?>
-<?php echo $this->_tpl_vars['headerkey']; ?>
"><?php echo $this->_tpl_vars['header']['name']; ?>
</th>
        <?php endif; ?>

      <?php endforeach; endif; unset($_from); ?>
    </tr>
    </thead>
  </table>
</div>
<?php $this->_tag_stack[] = array('crmRegion', array('name' => "crm-contact-relationshipselector-post")); $_block_repeat=true;smarty_block_crmRegion($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_crmRegion($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>