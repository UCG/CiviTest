<?php /* Smarty version 2.6.31, created on 2021-08-26 15:53:09
         compiled from CRM/ACL/Form/ACL.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'crmScope', 'CRM/ACL/Form/ACL.tpl', 1, false),array('block', 'icon', 'CRM/ACL/Form/ACL.tpl', 14, false),array('block', 'ts', 'CRM/ACL/Form/ACL.tpl', 15, false),)), $this); ?>
<?php $this->_tag_stack[] = array('crmScope', array('extensionKey' => "")); $_block_repeat=true;smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><div class="crm-block crm-form-block crm-acl-form-block">
<?php if ($this->_tpl_vars['action'] == 8): ?>
  <div class="messages status no-popup">
    <?php $this->_tag_stack[] = array('icon', array('icon' => "fa-info-circle")); $_block_repeat=true;smarty_block_icon($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_icon($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
        <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>WARNING: Delete will remove this permission from the specified ACL Role.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?> <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Do you want to continue?<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
  </div>
<?php else: ?>
   <div class="crm-submit-buttons"><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/common/formButtons.tpl", 'smarty_include_vars' => array('location' => 'top')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></div>
   <table class="form-layout-compressed">
     <tr class="crm-acl-form-block-name">
        <td class="label"><?php echo $this->_tpl_vars['form']['name']['label']; ?>
</td>
        <td><?php echo $this->_tpl_vars['form']['name']['html']; ?>
<br />
           <span class="description"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Enter a descriptive name for this permission (e.g. 'Edit Advisory Board Contacts').<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></span>
        </td>
     </tr>
     <tr class="crm-acl-form-block-entity_id">
        <td class="label"><?php echo $this->_tpl_vars['form']['entity_id']['label']; ?>
</td>
        <td><?php echo $this->_tpl_vars['form']['entity_id']['html']; ?>
<br />
            <span class="description"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Select a Role to assign (grant) this permission to. Select the special role 'Everyone' if you want to grant this permission to ALL users. 'Everyone' includes anonymous (i.e. not logged in) users. Select the special role 'Authenticated' if you want to grant it to any logged in user.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></span>
        </td>
     </tr>
     <tr class="crm-acl-form-block-operation">
         <td class="label"><?php echo $this->_tpl_vars['form']['operation']['label']; ?>
</td>
         <td><?php echo $this->_tpl_vars['form']['operation']['html']; ?>
<br />
            <span class="description"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>What type of operation (action) is being permitted?<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></span>
         </td>
     </tr>
     <tr class="crm-acl-form-block-object_type">
         <td class="label"><?php echo $this->_tpl_vars['form']['object_type']['label']; ?>
</td>
         <td><?php echo $this->_tpl_vars['form']['object_type']['html']; ?>
</td>
     </tr>
     <tr class="crm-acl-form-block-description">
        <td class="<?php echo $this->_tpl_vars['form']['object_type']['name']; ?>
">&nbsp;</dt><td class="description"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Select the type of data this ACL operates on.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><br />
        <?php if ($this->_tpl_vars['config']->userSystem->is_drupal == '1'): ?>
           <div class="status description"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>IMPORTANT: The Drupal permissions for 'access all custom data' and 'profile listings and forms' override and disable specific ACL settings for custom field groups and profiles respectively. Do not enable those Drupal permissions for a Drupal role if you want to use CiviCRM ACL's to control access.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></div></td>
        <?php endif; ?>
     </tr>
  </table>
  <div id="id-group-acl">
   <table  class="form-layout-compressed">
     <tr class="crm-acl-form-block-group_id">
         <td class="label"><?php echo $this->_tpl_vars['form']['group_id']['label']; ?>
</td>
         <td><?php echo $this->_tpl_vars['form']['group_id']['html']; ?>
<br />
         <span class="description"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Select a specific group of contacts, OR apply this permission to ALL groups.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></span>
         </td>
     </tr>
   </table>
  </div>
  <div id="id-profile-acl">
   <table class="form-layout-compressed" >
     <tr class="crm-acl-form-block-uf_group_id">
        <td class="label"><?php echo $this->_tpl_vars['form']['uf_group_id']['label']; ?>
</td>
        <td><?php echo $this->_tpl_vars['form']['uf_group_id']['html']; ?>
<br />
        <span class="description"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Select a specific profile, OR apply this permission to ALL profiles.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></span>
        </td>
     </tr>
   </table>
    <div class="status message"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>NOTE: Profile ACL operations affect which modes a profile can be used in (i.e. Create a new contact, Edit your own contact record, View a contact record, etc.). The Create operation is required for profiles embedded in online contribution or event registration forms. None of the operations for Profile ACLs grant access to administration of profiles.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></div>
  </div>
  <div id="id-custom-acl">
   <table class="form-layout-compressed">
     <tr class="crm-acl-form-block-custom_group_id">
         <td class="label"><?php echo $this->_tpl_vars['form']['custom_group_id']['label']; ?>
</td>
         <td><?php echo $this->_tpl_vars['form']['custom_group_id']['html']; ?>
<br />
         <span class="description"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Select a specific group of custom fields, OR apply this permission to ALL custom fields.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></span>
         </td>
     </tr>
   </table>
  <div class="status message"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>NOTE: For Custom Data ACLs, the 'View' and 'Edit' operations currently do the same thing. Either option grants the right to view AND / OR edit custom data fields (in all groups, or in a specific custom data group). Neither option grants access to administration of custom data fields.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></div>
  </div>
  <div id="id-event-acl">
   <table  class="form-layout-compressed">
     <tr class="crm-acl-form-block-event_id">
         <td class="label"><?php echo $this->_tpl_vars['form']['event_id']['label']; ?>
</td>
         <td><?php echo $this->_tpl_vars['form']['event_id']['html']; ?>
<br />
         <span class="description"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Select an event, OR apply this permission to ALL events.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></span>
         </td>
     </tr>
   </table>
    <div class="status message"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>NOTE: For Event ACLs, the 'View' operation allows access to the event information screen. "Edit" allows users to register for the event if online registration is enabled.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><br />
    <?php if ($this->_tpl_vars['config']->userSystem->is_drupal == '1'): ?>
    <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Please remember that Drupal's "register for events" permission overrides CiviCRM's control over event information access.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
    <?php endif; ?>
    </div>
  </div>
   <table  class="form-layout-compressed">
     <tr class="crm-acl-form-block-is_active">
         <td class="label"><?php echo $this->_tpl_vars['form']['is_active']['label']; ?>
</td>
         <td><?php echo $this->_tpl_vars['form']['is_active']['html']; ?>
</td>
     </tr>
   </table>
<?php endif; ?>
  <div class="crm-submit-buttons"><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/common/formButtons.tpl", 'smarty_include_vars' => array('location' => 'bottom')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></div>
</div>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/common/showHide.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php echo '
<script type="text/javascript">
 showObjectSelect( );
 function showObjectSelect( ) {
    var ot = document.getElementsByName(\'object_type\');
    for (var i = 0; i < ot.length; i++) {
        if ( ot[i].checked ) {
            switch(ot[i].value) {
                case "1":
                    cj(\'#id-group-acl\').show();
                    cj(\'#id-profile-acl\').hide();
                    cj(\'#id-custom-acl\').hide();
                    cj(\'#id-event-acl\').hide();
                    break;
                case "2":
                    cj(\'#id-group-acl\').hide();
                    cj(\'#id-profile-acl\').show();
                    cj(\'#id-custom-acl\').hide();
                    cj(\'#id-event-acl\').hide();
                    break;
                case "3":
                    cj(\'#id-group-acl\').hide();
                    cj(\'#id-profile-acl\').hide();
                    cj(\'#id-custom-acl\').show();
                    cj(\'#id-event-acl\').hide();
                    break;
                case "4":
                    cj(\'#id-group-acl\').hide();
                    cj(\'#id-profile-acl\').hide();
                    cj(\'#id-custom-acl\').hide();
                    cj(\'#id-event-acl\').show();
                    break;
            }
        }
    }
 return;
}
</script>
'; ?>

<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>