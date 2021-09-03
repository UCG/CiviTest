<?php /* Smarty version 2.6.31, created on 2021-08-24 18:37:35
         compiled from CRM/Admin/Form/Setting/SettingField.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'crmScope', 'CRM/Admin/Form/Setting/SettingField.tpl', 1, false),array('modifier', 'cat', 'CRM/Admin/Form/Setting/SettingField.tpl', 15, false),array('modifier', 'replace', 'CRM/Admin/Form/Setting/SettingField.tpl', 15, false),array('function', 'help', 'CRM/Admin/Form/Setting/SettingField.tpl', 15, false),)), $this); ?>
<?php $this->_tag_stack[] = array('crmScope', array('extensionKey' => "")); $_block_repeat=true;smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><tr class="crm-setting-form-block-<?php echo $this->_tpl_vars['setting_name']; ?>
">
  <td class="label"><?php echo $this->_tpl_vars['form'][$this->_tpl_vars['setting_name']]['label']; ?>
</td>
  <td>
    <?php if (! empty ( $this->_tpl_vars['fieldSpec']['wrapper_element'] )): ?>
      <?php echo $this->_tpl_vars['fieldSpec']['wrapper_element']['0']; ?>
<?php echo $this->_tpl_vars['form'][$this->_tpl_vars['setting_name']]['html']; ?>
<?php echo $this->_tpl_vars['fieldSpec']['wrapper_element']['1']; ?>

    <?php else: ?>
      <?php echo $this->_tpl_vars['form'][$this->_tpl_vars['setting_name']]['html']; ?>

    <?php endif; ?>
    <div class="description">
      <?php echo $this->_tpl_vars['fieldSpec']['description']; ?>

    </div>
    <?php if ($this->_tpl_vars['fieldSpec']['help_text']): ?>
            <?php $this->assign('tplhelp_id', ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['setting_name'])) ? $this->_run_mod_handler('cat', true, $_tmp, '-id') : smarty_modifier_cat($_tmp, '-id')))) ? $this->_run_mod_handler('replace', true, $_tmp, '_', '-') : smarty_modifier_replace($_tmp, '_', '-'))); ?><?php echo smarty_function_help(array('id' => ($this->_tpl_vars['tplhelp_id'])), $this);?>

    <?php endif; ?>
  </td>
</tr>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>