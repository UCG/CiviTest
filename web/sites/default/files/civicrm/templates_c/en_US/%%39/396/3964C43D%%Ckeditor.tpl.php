<?php /* Smarty version 2.6.31, created on 2021-08-24 17:18:29
         compiled from CRM/Admin/Form/Preferences/Ckeditor.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'crmScope', 'CRM/Admin/Form/Preferences/Ckeditor.tpl', 1, false),)), $this); ?>
<?php $this->_tag_stack[] = array('crmScope', array('extensionKey' => "")); $_block_repeat=true;smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php echo $this->_tpl_vars['form']['ckeditor_config']['html']; ?>

<?php echo '
  <script type="text/javascript">
    CRM.$(function($) {
      $(\'#ckeditor_config\').appendTo($(\'#editor_id\').parent());
      function showCKEditorConfig() {
        $(\'.crm-preferences-display-form-block-editor_id .crm-button\').toggle($(this).val() == \'CKEditor\');
      }
      $(\'select[name=editor_id]\').each(showCKEditorConfig).change(showCKEditorConfig);
    });
  </script>
'; ?>

<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>