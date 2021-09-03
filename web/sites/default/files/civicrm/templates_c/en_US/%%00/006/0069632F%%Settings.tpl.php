<?php /* Smarty version 2.6.31, created on 2021-08-25 15:50:22
         compiled from CRM/Volunteer/Form/Settings.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'crmScope', 'CRM/Volunteer/Form/Settings.tpl', 1, false),)), $this); ?>
<?php $this->_tag_stack[] = array('crmScope', array('extensionKey' => "")); $_block_repeat=true;smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
<div class="crm-submit-buttons">
    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/common/formButtons.tpl", 'smarty_include_vars' => array('location' => 'top')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
</div>


<?php $_from = $this->_tpl_vars['elementGroups']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['groupName'] => $this->_tpl_vars['elementNames']):
?>
    <fieldset>
        <legend><?php echo $this->_tpl_vars['groupName']; ?>
</legend>
        <?php if ($this->_tpl_vars['helpText'][$this->_tpl_vars['groupName']]): ?>
            <div class="help"><?php echo $this->_tpl_vars['helpText'][$this->_tpl_vars['groupName']]; ?>
</div>
        <?php endif; ?>
        <?php $_from = $this->_tpl_vars['elementNames']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['elementName']):
?>
            <div class="crm-section <?php echo $this->_tpl_vars['form'][$this->_tpl_vars['elementName']]['name']; ?>
">
                <div class="label">
                    <?php echo $this->_tpl_vars['form'][$this->_tpl_vars['elementName']]['label']; ?>

                </div>
                <div class="content">
                    <?php echo $this->_tpl_vars['form'][$this->_tpl_vars['elementName']]['html']; ?>

                    <?php if ($this->_tpl_vars['fieldDescriptions'][$this->_tpl_vars['elementName']]): ?>
                        <div class="description"><?php echo $this->_tpl_vars['fieldDescriptions'][$this->_tpl_vars['elementName']]; ?>
</div>
                    <?php endif; ?>
                </div>
                <div class="clear"></div>
            </div>
        <?php endforeach; endif; unset($_from); ?>
    </fieldset>
<?php endforeach; endif; unset($_from); ?>


<div class="crm-submit-buttons">
    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/common/formButtons.tpl", 'smarty_include_vars' => array('location' => 'bottom')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
</div><?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>