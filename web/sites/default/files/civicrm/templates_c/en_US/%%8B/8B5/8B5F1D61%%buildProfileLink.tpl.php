<?php /* Smarty version 2.6.31, created on 2021-08-24 15:26:22
         compiled from CRM/common/buildProfileLink.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'crmScope', 'CRM/common/buildProfileLink.tpl', 1, false),array('block', 'ts', 'CRM/common/buildProfileLink.tpl', 7, false),array('function', 'crmURL', 'CRM/common/buildProfileLink.tpl', 5, false),)), $this); ?>
<?php $this->_tag_stack[] = array('crmScope', array('extensionKey' => "")); $_block_repeat=true;smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php echo '
<script type="text/javascript">
    function buildLinks( element, profileId ) {
      if ( profileId >= 1 ) {
        var ufFieldUrl = '; ?>
"<?php echo CRM_Utils_System::crmURL(array('p' => 'civicrm/admin/uf/group/field','q' => 'reset=1&action=browse&gid=','h' => 0), $this);?>
"<?php echo ';
        ufFieldUrl = ufFieldUrl + profileId;
        var editTitle = '; ?>
"<?php $this->_tag_stack[] = array('ts', array('escape' => 'js')); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>edit profile<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>"<?php echo ';
        element.parent().find(\'span.profile-links\').html(\'<a href="\' + ufFieldUrl +\'" target="_blank" title="\'+ editTitle+\'">\'+ editTitle+\'</a>\');
      } else {
        element.parent().find(\'span.profile-links\').html(\'\');
      }
    }
</script>
'; ?>

<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>