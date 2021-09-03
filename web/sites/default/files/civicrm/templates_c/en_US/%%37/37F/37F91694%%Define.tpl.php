<?php /* Smarty version 2.6.31, created on 2021-08-23 20:32:57
         compiled from CRM/Volunteer/Page/Backbone/Define.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'crmScope', 'CRM/Volunteer/Page/Backbone/Define.tpl', 1, false),array('block', 'ts', 'CRM/Volunteer/Page/Backbone/Define.tpl', 32, false),array('function', 'help', 'CRM/Volunteer/Page/Backbone/Define.tpl', 33, false),array('function', 'crmAPI', 'CRM/Volunteer/Page/Backbone/Define.tpl', 134, false),)), $this); ?>
<?php $this->_tag_stack[] = array('crmScope', array('extensionKey' => "")); $_block_repeat=true;smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php echo ''; ?><?php echo '<script type="text/template" id="crm-vol-define-layout-tpl"><div id="help">'; ?><?php echo ''; ?><?php $this->_tag_stack[] = array('ts', array('domain' => 'org.civicrm.volunteer')); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php echo 'Use this form to specify the number of volunteers needed for each role and time slot. If no opportunities are specified, volunteers will be considered to be generally available.'; ?><?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php echo ''; ?><?php echo smarty_function_help(array('id' => "volunteer-define",'file' => "CRM/Volunteer/Page/Backbone/Define.hlp",'isModulePermissionSupported' => ($this->_tpl_vars['isModulePermissionSupported'])), $this);?><?php echo '</div><form class="crm-block crm-form-block crm-event-manage-volunteer-form-block"><div id="crm-vol-define-scheduled-needs-region"><div class="crm-loading-element">'; ?><?php $this->_tag_stack[] = array('ts', array('domain' => 'org.civicrm.volunteer')); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php echo 'Loading'; ?><?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php echo '...</div></div><div id="crm-vol-define-flexible-needs-region"></div></form></script><script type="text/template" id="crm-vol-define-table-tpl"><table id="crm-vol-define-needs-table"><thead><tr><th id="role_id">'; ?><?php $this->_tag_stack[] = array('ts', array('domain' => 'org.civicrm.volunteer')); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php echo 'Role'; ?><?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php echo '</th><th id="quantity">'; ?><?php $this->_tag_stack[] = array('ts', array('domain' => 'org.civicrm.volunteer')); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php echo 'Volunteers Needed'; ?><?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php echo '</th><th id="time_components">'; ?><?php $this->_tag_stack[] = array('ts', array('domain' => 'org.civicrm.volunteer')); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php echo 'Time'; ?><?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php echo '</th><th id="visibility">'; ?><?php $this->_tag_stack[] = array('ts', array('domain' => 'org.civicrm.volunteer')); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php echo 'Public?'; ?><?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php echo '</th><th>Enabled?</th><th></th></tr></thead><tbody></tbody></table></script><script type="text/template" id="crm-vol-define-scheduled-need-tpl"><td>'; ?><?php echo '
      <%= RenderUtil.select({
      apiEntity: \'volunteer_need\',
      apiField: \'role_id\',
      name: \'role_id\',
      optionEditPath: \'civicrm/admin/options/volunteer_role\',
      options: pseudoConstant.volunteer_role,
      selected: role_id
      }) %>
    '; ?><?php echo '</td><td><input type="text" class="crm-form-text" name="quantity" value="<%= quantity %>" size="4"></td><td><label>'; ?><?php $this->_tag_stack[] = array('ts', array('domain' => 'org.civicrm.volunteer')); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php echo 'Schedule Type:'; ?><?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php echo '<select name="schedule_type"><option value="">'; ?><?php $this->_tag_stack[] = array('ts', array('domain' => 'org.civicrm.volunteer')); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php echo '- select one -'; ?><?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php echo '</option><option value="shift">'; ?><?php $this->_tag_stack[] = array('ts', array('domain' => 'org.civicrm.volunteer')); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php echo 'Set shift'; ?><?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php echo '</option><option value="flexible">'; ?><?php $this->_tag_stack[] = array('ts', array('domain' => 'org.civicrm.volunteer')); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php echo 'Flexible timeframe'; ?><?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php echo '</option><option value="open">'; ?><?php $this->_tag_stack[] = array('ts', array('domain' => 'org.civicrm.volunteer')); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php echo 'Open-Ended'; ?><?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php echo '</option></select>'; ?><?php echo smarty_function_help(array('id' => "volunteer-define-schedule_type",'file' => "CRM/Volunteer/Page/Backbone/Define.hlp"), $this);?><?php echo '</label><table class="time_components"><thead><tr><th class="start_datetime">'; ?><?php $this->_tag_stack[] = array('ts', array('domain' => 'org.civicrm.volunteer')); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php echo 'Start Date/Time'; ?><?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php echo '</th><th class="end_datetime">'; ?><?php $this->_tag_stack[] = array('ts', array('domain' => 'org.civicrm.volunteer')); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php echo 'End Date/Time'; ?><?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php echo '</th><th class="duration">'; ?><?php $this->_tag_stack[] = array('ts', array('domain' => 'org.civicrm.volunteer')); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php echo 'Minutes'; ?><?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php echo '</th></tr></thead><tbody><tr><td class="start_datetime"><input type="text" class="crm-form-text dateplugin" name="display_start_date"  value="<%= display_start_date %>" size="20"><input type="text" class="crm-form-text" name="display_start_time" size="10"></td><td class="end_datetime"><input type="text" class="crm-form-text dateplugin" name="display_end_date"  value="<%= display_end_date %>" size="20"><input type="text" class="crm-form-text" name="display_end_time" size="10"></td><td class="duration"><input type="text" class="crm-form-text" name="duration" value="<%= duration %>" size="6"></td></tr></tbody></table></td><td><input type="checkbox" name="visibility_id" value="<%= visibilityValue %>"></td><td><input type="checkbox" name="is_active" value="1"></td><td><a href="#" class="crm-vol-del action-item crm-hover-button small-popup" title="'; ?><?php $this->_tag_stack[] = array('ts', array('domain' => 'org.civicrm.volunteer')); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php echo 'Delete'; ?><?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php echo '">'; ?><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php echo 'Delete'; ?><?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php echo '</a></td></script><script type="text/template" id="crm-vol-define-flexible-need-tpl"><input type="checkbox" name="visibility_id" id="crm-vol-visibility-id" value="<%= visibilityValue %>"><label for="crm-vol-visibility-id">Allow users to sign up without specifying a shift.</label></script><script type="text/template" id="crm-vol-define-add-row-tpl"><tr id="crm-vol-define-add-row"><td colspan="8"><select class="crm-form-select crm-action-menu action-icon-plus" id="crm-vol-define-add-need"><option value="">'; ?><?php $this->_tag_stack[] = array('ts', array('domain' => 'org.civicrm.volunteer')); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php echo 'New Opportunity'; ?><?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php echo '</option>'; ?><?php echo smarty_function_crmAPI(array('var' => 'result','entity' => 'VolunteerNeed','action' => 'getoptions','field' => 'role_id','sequential' => 0), $this);?><?php echo ''; ?><?php $_from = $this->_tpl_vars['result']['values']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['id'] => $this->_tpl_vars['VolunteerNeed']):
?><?php echo '<option value="'; ?><?php echo $this->_tpl_vars['id']; ?><?php echo '">'; ?><?php echo $this->_tpl_vars['VolunteerNeed']; ?><?php echo '</option>'; ?><?php endforeach; endif; unset($_from); ?><?php echo '</select></td></tr></script>'; ?>

<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>