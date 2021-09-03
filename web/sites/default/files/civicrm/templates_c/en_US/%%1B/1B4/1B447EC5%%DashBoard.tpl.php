<?php /* Smarty version 2.6.31, created on 2021-08-23 20:32:20
         compiled from CRM/Event/Page/DashBoard.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'crmScope', 'CRM/Event/Page/DashBoard.tpl', 1, false),array('block', 'ts', 'CRM/Event/Page/DashBoard.tpl', 15, false),array('block', 'icon', 'CRM/Event/Page/DashBoard.tpl', 127, false),array('function', 'crmURL', 'CRM/Event/Page/DashBoard.tpl', 11, false),array('function', 'help', 'CRM/Event/Page/DashBoard.tpl', 19, false),array('modifier', 'escape', 'CRM/Event/Page/DashBoard.tpl', 102, false),)), $this); ?>
<?php $this->_tag_stack[] = array('crmScope', array('extensionKey' => "")); $_block_repeat=true;smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php ob_start(); ?><?php echo CRM_Utils_System::crmURL(array('p' => "civicrm/event/add",'q' => "action=add&reset=1"), $this);?>
<?php $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->assign('newEventURL', ob_get_contents());ob_end_clean(); ?>
<?php ob_start(); ?><?php echo CRM_Utils_System::crmURL(array('p' => "civicrm/event/manage",'q' => "reset=1"), $this);?>
<?php $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->assign('configPagesURL', ob_get_contents());ob_end_clean(); ?>

<?php if ($this->_tpl_vars['eventSummary']['total_events']): ?>
    <a href="<?php echo $this->_tpl_vars['configPagesURL']; ?>
" class="button no-popup"><span><i class="crm-i fa-th-list" aria-hidden="true"></i> <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Manage Events<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></span></a>
    <a href="<?php echo $this->_tpl_vars['newEventURL']; ?>
" class="button"><span><i class="crm-i fa-calendar-plus-o" aria-hidden="true"></i> <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>New Event<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></span></a>
    <div class="clear">&nbsp;</div>
    <h3 id="crm-event-dashboard-heading"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Event Summary<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
      <?php echo smarty_function_help(array('id' => "id-event-intro"), $this);?>

      <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/Event/Page/iCalLinks.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
    </h3>
    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/common/jsortable.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
    <table id="options" class="display">
    <thead>
    <tr>
  <th><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Event<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></th>
  <th><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>ID<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></th>
  <th><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Type<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></th>
  <th id="nosort"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Public<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></th>
  <th id="nosort"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Date(s)<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></th>
  <th id="nosort"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Participants<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></th>
        <?php if ($this->_tpl_vars['actionColumn']): ?><th></th><?php endif; ?>
    </tr>
    </thead>
    <tbody>
    <?php $_from = $this->_tpl_vars['eventSummary']['events']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['id'] => $this->_tpl_vars['values']):
?>
    <tr class="crm-event_<?php echo $this->_tpl_vars['id']; ?>
">
        <td class="crm-event-eventTitle"><a href="<?php echo CRM_Utils_System::crmURL(array('p' => "civicrm/event/info",'q' => "reset=1&id=".($this->_tpl_vars['id'])), $this);?>
" title="<?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>View event info page<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>"><?php echo $this->_tpl_vars['values']['eventTitle']; ?>
</a>
            <?php if ($this->_tpl_vars['values']['is_repeating_event']): ?>
                <br/>
                <?php if ($this->_tpl_vars['values']['is_repeating_event'] == $this->_tpl_vars['id']): ?>
                    <span><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Repeating Event<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?> - (<?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Parent<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>)</span>
                <?php else: ?>
                    <span><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Repeating Event<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?> - (<?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Child<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>)</span>
                <?php endif; ?>
            <?php endif; ?>
        </td>
        <td class="crm-event-id"><?php echo $this->_tpl_vars['id']; ?>
</td>
        <td class="crm-event-eventType"><?php echo $this->_tpl_vars['values']['eventType']; ?>
</td>
        <td class="crm-event-isPublic"><?php echo $this->_tpl_vars['values']['isPublic']; ?>
</td>
        <td class="nowrap crm-event-startDate"><?php echo $this->_tpl_vars['values']['startDate']; ?>
&nbsp;<?php if ($this->_tpl_vars['values']['endDate']): ?>to<?php endif; ?>&nbsp;<?php echo $this->_tpl_vars['values']['endDate']; ?>
</td>
        <td class="right crm-event-participants_url">
            <?php if ($this->_tpl_vars['values']['participants'] && $this->_tpl_vars['values']['participants_url']): ?>
    <a href="<?php echo $this->_tpl_vars['values']['participants_url']; ?>
" title="<?php $this->_tag_stack[] = array('ts', array('1' => $this->_tpl_vars['eventSummary']['countedStatusANDRoles'])); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>List %1 participants<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Counted<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>:&nbsp;<?php echo $this->_tpl_vars['values']['participants']; ?>
</a>
      <?php else: ?>
    <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Counted<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>:&nbsp;<?php echo $this->_tpl_vars['values']['participants']; ?>

      <?php endif; ?>

      <?php if ($this->_tpl_vars['values']['notCountedParticipants'] && $this->_tpl_vars['values']['notCountedParticipants_url']): ?>
    <a href="<?php echo $this->_tpl_vars['values']['notCountedParticipants_url']; ?>
" title="<?php $this->_tag_stack[] = array('ts', array('1' => $this->_tpl_vars['eventSummary']['nonCountedStatusANDRoles'])); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>List %1 participants<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Not&nbsp;Counted<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>:&nbsp;<?php echo $this->_tpl_vars['values']['notCountedParticipants']; ?>
</a><hr />
      <?php else: ?>
    <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Not&nbsp;Counted<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>:&nbsp;<?php echo $this->_tpl_vars['values']['notCountedParticipants']; ?>
<hr />
      <?php endif; ?>

      <?php if ($this->_tpl_vars['values']['notCountedDueToStatus'] && $this->_tpl_vars['values']['notCountedDueToStatus_url']): ?>
    <a href="<?php echo $this->_tpl_vars['values']['notCountedDueToStatus_url']; ?>
" title="<?php $this->_tag_stack[] = array('ts', array('1' => $this->_tpl_vars['eventSummary']['nonCountedStatus'])); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>List %1 participants<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Not&nbsp;Counted&nbsp;Due&nbsp;To&nbsp;Status<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>:&nbsp;<?php echo $this->_tpl_vars['values']['notCountedDueToStatus']; ?>
</a><hr />
      <?php else: ?>
    <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Not&nbsp;Counted&nbsp;Due&nbsp;To&nbsp;Status<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>:&nbsp;<?php echo $this->_tpl_vars['values']['notCountedDueToStatus']; ?>
<hr />
      <?php endif; ?>

            <?php if ($this->_tpl_vars['values']['notCountedDueToRole'] && $this->_tpl_vars['values']['notCountedDueToRole_url']): ?>
    <a href="<?php echo $this->_tpl_vars['values']['notCountedDueToRole_url']; ?>
" title="<?php $this->_tag_stack[] = array('ts', array('1' => $this->_tpl_vars['eventSummary']['nonCountedRoles'])); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>List %1 participants<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Not&nbsp;Counted&nbsp;Due&nbsp;To&nbsp;Role<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>:&nbsp;<?php echo $this->_tpl_vars['values']['notCountedDueToRole']; ?>
</a><hr />
      <?php else: ?>
    <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Not&nbsp;Counted&nbsp;Due&nbsp;To&nbsp;Role<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>:&nbsp;<?php echo $this->_tpl_vars['values']['notCountedDueToRole']; ?>
<hr />
      <?php endif; ?>

            <?php $_from = $this->_tpl_vars['values']['statuses']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['class']):
?>
                <?php if ($this->_tpl_vars['class']): ?>
                    <?php $_from = $this->_tpl_vars['class']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['status']):
?>
                        <a href="<?php echo $this->_tpl_vars['status']['url']; ?>
" title="<?php $this->_tag_stack[] = array('ts', array('1' => $this->_tpl_vars['status']['label'])); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>List %1 participants<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>"><?php echo $this->_tpl_vars['status']['label']; ?>
: <?php echo $this->_tpl_vars['status']['count']; ?>
</a>
                    <?php endforeach; endif; unset($_from); ?>
                    <hr />
                <?php endif; ?>
            <?php endforeach; endif; unset($_from); ?>
            <?php if ($this->_tpl_vars['values']['maxParticipants']): ?><?php $this->_tag_stack[] = array('ts', array('1' => $this->_tpl_vars['values']['maxParticipants'])); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>(max %1)<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php endif; ?>
        </td>
      <?php if ($this->_tpl_vars['actionColumn']): ?>
        <td class="crm-event-isMap">
          <?php if ($this->_tpl_vars['values']['isMap']): ?>
            <a href="<?php echo $this->_tpl_vars['values']['isMap']; ?>
" title="<?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Map event location<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>"><i class="crm-i fa-map-marker" aria-hidden="true"></i> <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Map<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></a>
            &nbsp;|&nbsp;
          <?php endif; ?>
          <?php if ($this->_tpl_vars['values']['configure']): ?>
            <div class="crm-configure-actions">
                <span id="<?php echo $this->_tpl_vars['id']; ?>
" class="btn-slide crm-hover-button"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Configure<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
                  <ul class="panel" id="panel_info_<?php echo $this->_tpl_vars['id']; ?>
">
                    <?php $_from = $this->_tpl_vars['eventSummary']['tab']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['v']):
?>
                      <?php $this->assign('fld', $this->_tpl_vars['v']['field']); ?>
                      <?php if (! $this->_tpl_vars['values'][$this->_tpl_vars['fld']]): ?><?php $this->assign('status', 'disabled'); ?><?php else: ?><?php $this->assign('status', 'enabled'); ?><?php endif; ?>
                                            <?php if ($this->_tpl_vars['v']['url'] == 'civicrm/event/manage/reminder'): ?>
                        <li><a title="<?php echo ((is_array($_tmp=$this->_tpl_vars['v']['title'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" class="action-item crm-hover-button no-popup <?php echo $this->_tpl_vars['status']; ?>
"
                            href="<?php echo CRM_Utils_System::crmURL(array('p' => ($this->_tpl_vars['v']['url']),'q' => "reset=1&action=browse&setTab=1&id=".($this->_tpl_vars['id'])), $this);?>
"><?php echo $this->_tpl_vars['v']['title']; ?>
</a></li>
                      <?php else: ?>
                        <li><a title="<?php echo ((is_array($_tmp=$this->_tpl_vars['v']['title'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" class="action-item crm-hover-button no-popup <?php echo $this->_tpl_vars['status']; ?>
"
                            href="<?php echo CRM_Utils_System::crmURL(array('p' => ($this->_tpl_vars['v']['url']),'q' => "reset=1&action=update&id=".($this->_tpl_vars['id'])), $this);?>
"><?php echo $this->_tpl_vars['v']['title']; ?>
</a></li>
                      <?php endif; ?>
                    <?php endforeach; endif; unset($_from); ?>
                  </ul>
                </span>
            </div>
          <?php endif; ?>
        </td>
      <?php endif; ?>
    </tr>
    <?php endforeach; endif; unset($_from); ?>

    </tbody>
    </table>
    <?php if ($this->_tpl_vars['eventSummary']['total_events'] > 10): ?>
     <div><a href="<?php echo CRM_Utils_System::crmURL(array('p' => 'civicrm/admin/event','q' => 'reset=1'), $this);?>
"><i class="crm-i fa-chevron-right" aria-hidden="true"></i> <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Browse more events<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>...</a></div>
    <?php endif; ?>
<?php else: ?>
    <br />
    <div class="messages status no-popup">
        <table>
            <tr><?php $this->_tag_stack[] = array('icon', array('icon' => "fa-info-circle")); $_block_repeat=true;smarty_block_icon($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_icon($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></tr>
            <tr>
                <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>There are no active Events to display.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
                <?php $this->_tag_stack[] = array('ts', array('1' => $this->_tpl_vars['newEventURL'])); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>You can <a href="%1">Create a New Event</a> now.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
            </tr>
        </table>
    </div>
<?php endif; ?>

<?php if ($this->_tpl_vars['pager']->_totalItems): ?>
    <br/>
    <h3><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Recent Registrations<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></h3>
    <div class="form-item">
        <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/Event/Form/Selector.tpl", 'smarty_include_vars' => array('context' => 'event_dashboard')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
    </div>
<?php endif; ?>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>