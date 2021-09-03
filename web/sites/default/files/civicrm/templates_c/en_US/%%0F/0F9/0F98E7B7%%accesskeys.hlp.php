<?php /* Smarty version 2.6.31, created on 2021-08-24 15:26:20
         compiled from CRM/common/accesskeys.hlp */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'crmScope', 'CRM/common/accesskeys.hlp', 1, false),array('block', 'htxt', 'CRM/common/accesskeys.hlp', 10, false),array('block', 'ts', 'CRM/common/accesskeys.hlp', 23, false),)), $this); ?>
<?php $this->_tag_stack[] = array('crmScope', array('extensionKey' => "")); $_block_repeat=true;smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php $this->_tag_stack[] = array('htxt', array('id' => 'accesskeys')); $_block_repeat=true;smarty_block_htxt($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
  <?php 
    $ua = strtolower($_SERVER['HTTP_USER_AGENT']);
    if (strstr($ua, 'mac')) {
      $key = '<span>CTRL</span>+<span>ALT</span>';
    }
    else {
      $key = strstr($ua, 'firefox') ? '<span>ALT</span>+<span>SHIFT</span>' : '<span>ALT</span>';
    }
    $this->assign('accessKey', $key);
   ?>
  <p></p>
  <ul id="crmAccessKeyList">
    <li><?php echo $this->_tpl_vars['accessKey']; ?>
+<span>E</span> - <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Edit Contact (View Contact Summary Page)<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></li>
    <li><?php echo $this->_tpl_vars['accessKey']; ?>
+<span>S</span> - <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Save Button<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></li>
    <li><?php echo $this->_tpl_vars['accessKey']; ?>
+<span>N</span> - <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Add a new record in each tab (Activities, Tags,..etc)<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></li>
    <li><?php echo $this->_tpl_vars['accessKey']; ?>
+<span>M</span> - <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Find menu item...<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></li>
    <li><?php echo $this->_tpl_vars['accessKey']; ?>
+<span>Q</span> - <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Quicksearch<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></li>
  </ul>
  <?php echo '<style type="text/css">
    #crmAccessKeyList li {
      margin-top: 5px;
    }
    #crmAccessKeyList span {
      display: inline-block;
      background: grey;
      font-size: 80%;
      border: 2px groove #eee;
      padding: 0 4px;
    }
  </style>'; ?>

<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_htxt($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>