<?php /* Smarty version 2.6.31, created on 2021-08-24 19:05:22
         compiled from CRM/Event/Page/List.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'crmScope', 'CRM/Event/Page/List.tpl', 1, false),array('block', 'crmRegion', 'CRM/Event/Page/List.tpl', 13, false),array('block', 'ts', 'CRM/Event/Page/List.tpl', 19, false),array('function', 'cycle', 'CRM/Event/Page/List.tpl', 29, false),array('function', 'crmURL', 'CRM/Event/Page/List.tpl', 30, false),array('modifier', 'purify', 'CRM/Event/Page/List.tpl', 31, false),array('modifier', 'crmDate', 'CRM/Event/Page/List.tpl', 32, false),array('modifier', 'date_format', 'CRM/Event/Page/List.tpl', 35, false),)), $this); ?>
<?php $this->_tag_stack[] = array('crmScope', array('extensionKey' => "")); $_block_repeat=true;smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/common/jsortable.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<div class="crm-section crm-event-list">
  <?php $this->_tag_stack[] = array('crmRegion', array('name' => "crm-event-list-pre")); $_block_repeat=true;smarty_block_crmRegion($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
  <?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_crmRegion($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>

  <table id="options" class="display">
    <thead>
    <tr>
      <th><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Event<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></th>
      <th></th>
      <th><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>When<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></th>
      <th><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Location<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></th>
      <th><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Category<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></th>
      <th><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Email<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></th>
      <?php if ($this->_tpl_vars['registration_links']): ?><th><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Register<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></th><?php endif; ?>
    </tr>
    </thead>
    <?php $_from = $this->_tpl_vars['events']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['uid'] => $this->_tpl_vars['event']):
?>
      <tr class="<?php echo smarty_function_cycle(array('values' => "odd-row,even-row"), $this);?>
<?php if (! empty ( $this->_tpl_vars['row']['class'] )): ?> <?php echo $this->_tpl_vars['row']['class']; ?>
<?php endif; ?>">
        <td><a href="<?php echo CRM_Utils_System::crmURL(array('p' => 'civicrm/event/info','q' => "reset=1&id=".($this->_tpl_vars['event']['event_id'])), $this);?>
" title="<?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>read more<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>"><strong><?php echo $this->_tpl_vars['event']['title']; ?>
</strong></a></td>
        <td><?php if ($this->_tpl_vars['event']['summary']): ?><?php echo ((is_array($_tmp=$this->_tpl_vars['event']['summary'])) ? $this->_run_mod_handler('purify', true, $_tmp) : smarty_modifier_purify($_tmp)); ?>
 (<a href="<?php echo CRM_Utils_System::crmURL(array('p' => 'civicrm/event/info','q' => "reset=1&id=".($this->_tpl_vars['event']['event_id'])), $this);?>
" title="<?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>details...<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>read more<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>...</a>)<?php else: ?>&nbsp;<?php endif; ?></td>
        <td class="nowrap" data-order="<?php echo ((is_array($_tmp=$this->_tpl_vars['event']['start_date'])) ? $this->_run_mod_handler('crmDate', true, $_tmp, '%Y-%m-%d') : smarty_modifier_crmDate($_tmp, '%Y-%m-%d')); ?>
">
          <?php if ($this->_tpl_vars['event']['start_date']): ?><?php echo ((is_array($_tmp=$this->_tpl_vars['event']['start_date'])) ? $this->_run_mod_handler('crmDate', true, $_tmp) : smarty_modifier_crmDate($_tmp)); ?>
<?php if ($this->_tpl_vars['event']['end_date']): ?><br /><em><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>through<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></em><br /><?php echo ''; ?><?php echo ''; ?><?php if (((is_array($_tmp=$this->_tpl_vars['event']['end_date'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y%m%d") : smarty_modifier_date_format($_tmp, "%Y%m%d")) == ((is_array($_tmp=$this->_tpl_vars['event']['start_date'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y%m%d") : smarty_modifier_date_format($_tmp, "%Y%m%d"))): ?><?php echo ''; ?><?php echo ((is_array($_tmp=$this->_tpl_vars['event']['end_date'])) ? $this->_run_mod_handler('crmDate', true, $_tmp, 0, 1) : smarty_modifier_crmDate($_tmp, 0, 1)); ?><?php echo ''; ?><?php else: ?><?php echo ''; ?><?php echo ((is_array($_tmp=$this->_tpl_vars['event']['end_date'])) ? $this->_run_mod_handler('crmDate', true, $_tmp) : smarty_modifier_crmDate($_tmp)); ?><?php echo ''; ?><?php endif; ?><?php echo ''; ?>
<?php endif; ?>
          <?php else: ?><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>(not available)<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php endif; ?>
        </td>
        <td><?php if ($this->_tpl_vars['event']['is_show_location'] == 1 && $this->_tpl_vars['event']['location']): ?><?php echo $this->_tpl_vars['event']['location']; ?>
<?php else: ?><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>(not available)<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php endif; ?></td>
        <td><?php if ($this->_tpl_vars['event']['event_type']): ?><?php echo $this->_tpl_vars['event']['event_type']; ?>
<?php else: ?>&nbsp;<?php endif; ?></td>
        <td><?php if ($this->_tpl_vars['event']['contact_email']): ?><a href="mailto:<?php echo $this->_tpl_vars['event']['contact_email']; ?>
"><?php echo $this->_tpl_vars['event']['contact_email']; ?>
</a><?php else: ?>&nbsp;<?php endif; ?></td>
        <?php if ($this->_tpl_vars['registration_links']): ?><td><a href="<?php echo $this->_tpl_vars['event']['registration_link']; ?>
"><?php echo $this->_tpl_vars['event']['registration_link_text']; ?>
</a></td><?php endif; ?>
      </tr>
    <?php endforeach; endif; unset($_from); ?>
  </table>

  <?php $this->_tag_stack[] = array('crmRegion', array('name' => "crm-event-list-post")); $_block_repeat=true;smarty_block_crmRegion($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
  <?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_crmRegion($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
</div>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>