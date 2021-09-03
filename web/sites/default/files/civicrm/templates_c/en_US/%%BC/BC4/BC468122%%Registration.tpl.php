<?php /* Smarty version 2.6.31, created on 2021-08-24 15:26:17
         compiled from CRM/Event/Form/ManageEvent/Registration.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'crmScope', 'CRM/Event/Form/ManageEvent/Registration.tpl', 1, false),array('block', 'ts', 'CRM/Event/Form/ManageEvent/Registration.tpl', 15, false),array('function', 'help', 'CRM/Event/Form/ManageEvent/Registration.tpl', 30, false),array('modifier', 'crmAddClass', 'CRM/Event/Form/ManageEvent/Registration.tpl', 97, false),array('modifier', 'count', 'CRM/Event/Form/ManageEvent/Registration.tpl', 399, false),)), $this); ?>
<?php $this->_tag_stack[] = array('crmScope', array('extensionKey' => "")); $_block_repeat=true;smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php if ($this->_tpl_vars['addProfileBottomAdd'] || $this->_tpl_vars['addProfileBottom']): ?>
  <td scope="row" class="label"
      width="20%"><?php if ($this->_tpl_vars['addProfileBottomAdd']): ?><?php echo $this->_tpl_vars['form']['additional_custom_post_id_multiple'][$this->_tpl_vars['profileBottomNumAdd']]['label']; ?>

    <?php else: ?><?php echo $this->_tpl_vars['form']['custom_post_id_multiple'][$this->_tpl_vars['profileBottomNum']]['label']; ?>
<?php endif; ?></td>
  <td><?php if ($this->_tpl_vars['addProfileBottomAdd']): ?><?php echo $this->_tpl_vars['form']['additional_custom_post_id_multiple'][$this->_tpl_vars['profileBottomNumAdd']]['html']; ?>
<?php else: ?><?php echo $this->_tpl_vars['form']['custom_post_id_multiple'][$this->_tpl_vars['profileBottomNum']]['html']; ?>
<?php endif; ?>
    <span class='profile_bottom_link_remove'><a href="#" class="crm-hover-button crm-button-rem-profile" data-addtlPartc="<?php echo $this->_tpl_vars['addProfileBottomAdd']; ?>
"><i class="crm-i fa-trash" aria-hidden="true"></i> <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>remove profile<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></a></span>
    <span class='profile_bottom_link'>&nbsp;<a href="#" class="crm-hover-button crm-button-add-profile"><i class="crm-i fa-plus-circle" aria-hidden="true"></i> <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>add another profile (bottom of page)<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></a></span>
    <?php if ($this->_tpl_vars['addProfileBottomAdd']): ?>
      <div
        class="description"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Change this if you want to use a different profile for additional participants.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></div>
    <?php else: ?>
      <div
        class="description"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Include additional fields on this registration form by selecting and configuring a CiviCRM Profile to be included at the bottom of the page.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></div>
    <?php endif; ?>
    <br/><span class="profile-links"></span>
  </td>
<?php else: ?>
<?php $this->assign('eventID', $this->_tpl_vars['id']); ?>
  <div class="help">
    <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>If you want to provide an Online Registration page for this event, check the first box below and then complete the fields on this form.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
    <?php echo smarty_function_help(array('id' => "id-event-reg"), $this);?>

  </div>
<div class="crm-block crm-form-block crm-event-manage-registration-form-block">
<div class="crm-submit-buttons">
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/common/formButtons.tpl", 'smarty_include_vars' => array('location' => 'top')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
</div>

<div id="register">
  <table class="form-layout">
    <tr class="crm-event-manage-registration-form-block-is_online_registration">
      <td class="label"><?php echo $this->_tpl_vars['form']['is_online_registration']['label']; ?>
</td>
      <td><?php echo $this->_tpl_vars['form']['is_online_registration']['html']; ?>

        <span class="description"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Online registration enabled?<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></span>
      </td>
    </tr>
  </table>
</div>
<div class="spacer"></div>
<div id="registration_blocks">
<table class="form-layout-compressed">

  <tr class="crm-event-manage-registration-form-block-registration_link_text">
    <td scope="row" class="label"
        width="20%"><?php echo $this->_tpl_vars['form']['registration_link_text']['label']; ?>
 <?php if ($this->_tpl_vars['action'] == 2): ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'CRM/Core/I18n/Dialog.tpl', 'smarty_include_vars' => array('table' => 'civicrm_event','field' => 'registration_link_text','id' => $this->_tpl_vars['eventID'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php endif; ?></td>
    <td><?php echo $this->_tpl_vars['form']['registration_link_text']['html']; ?>
 <?php echo smarty_function_help(array('id' => "id-link_text"), $this);?>
</td>
  </tr>
  <?php if (! $this->_tpl_vars['isTemplate']): ?>
    <tr class="crm-event-manage-registration-form-block-registration_start_date">
      <td scope="row" class="label" width="20%"><?php echo $this->_tpl_vars['form']['registration_start_date']['label']; ?>
</td>
      <td><?php echo $this->_tpl_vars['form']['registration_start_date']['html']; ?>
</td>
    </tr>
    <tr class="crm-event-manage-registration-form-block-registration_end_date">
      <td scope="row" class="label" width="20%"><?php echo $this->_tpl_vars['form']['registration_end_date']['label']; ?>
</td>
      <td><?php echo $this->_tpl_vars['form']['registration_end_date']['html']; ?>
</td>
    </tr>
  <?php endif; ?>
  <tr class="crm-event-manage-registration-form-block-is_multiple_registrations">
    <td scope="row" class="label" width="20%"><?php echo $this->_tpl_vars['form']['is_multiple_registrations']['label']; ?>
</td>
    <td><?php echo $this->_tpl_vars['form']['is_multiple_registrations']['html']; ?>
 <?php echo smarty_function_help(array('id' => "id-allow_multiple"), $this);?>
</td>
  </tr>
  <tr class="crm-event-manage-registration-form-block-maximum_additional_participants" id="id-max-additional-participants">
    <td scope="row" class="label" width="20%"><?php echo $this->_tpl_vars['form']['max_additional_participants']['label']; ?>
</td>
    <td><?php echo $this->_tpl_vars['form']['max_additional_participants']['html']; ?>
 <?php echo smarty_function_help(array('id' => "id-max_additional"), $this);?>
</td>
  </tr>
  <tr class="crm-event-manage-registration-form-block-allow_same_participant_emails">
    <td scope="row" class="label" width="20%"><?php echo $this->_tpl_vars['form']['allow_same_participant_emails']['label']; ?>
</td>
    <td><?php echo $this->_tpl_vars['form']['allow_same_participant_emails']['html']; ?>
 <?php echo smarty_function_help(array('id' => "id-allow_same_email"), $this);?>
</td>
  </tr>
  <tr class="crm-event-manage-registration-form-block-dedupe_rule_group_id">
    <td scope="row" class="label" width="20%"><?php echo $this->_tpl_vars['form']['dedupe_rule_group_id']['label']; ?>
</td>
    <td><?php echo $this->_tpl_vars['form']['dedupe_rule_group_id']['html']; ?>
 <?php echo smarty_function_help(array('id' => "id-dedupe_rule_group_id"), $this);?>
</td>
  </tr>
  <tr class="crm-event-manage-registration-form-block-requires_approval">
    <?php if ($this->_tpl_vars['form']['requires_approval']): ?>
      <td scope="row" class="label" width="20%"><?php echo $this->_tpl_vars['form']['requires_approval']['label']; ?>
</td>
      <td><?php echo $this->_tpl_vars['form']['requires_approval']['html']; ?>
 <?php echo smarty_function_help(array('id' => "id-requires_approval"), $this);?>
</td>
    <?php endif; ?>
  </tr>
  <tr id="id-approval-text" class="crm-event-manage-registration-form-block-approval_req_text">
    <?php if ($this->_tpl_vars['form']['approval_req_text']): ?>
      <td scope="row" class="label"
          width="20%"><?php echo $this->_tpl_vars['form']['approval_req_text']['label']; ?>
 <?php if ($this->_tpl_vars['action'] == 2): ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'CRM/Core/I18n/Dialog.tpl', 'smarty_include_vars' => array('table' => 'civicrm_event','field' => 'approval_req_text','id' => $this->_tpl_vars['eventID'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php endif; ?></td>
      <td><?php echo $this->_tpl_vars['form']['approval_req_text']['html']; ?>
</td>
    <?php endif; ?>
  </tr>
  <tr class="crm-event-manage-registration-form-block-expiration_time">
    <td scope="row" class="label" width="20%"><?php echo $this->_tpl_vars['form']['expiration_time']['label']; ?>
</td>
    <td><?php echo ((is_array($_tmp=$this->_tpl_vars['form']['expiration_time']['html'])) ? $this->_run_mod_handler('crmAddClass', true, $_tmp, 'four') : smarty_modifier_crmAddClass($_tmp, 'four')); ?>
 <?php echo smarty_function_help(array('id' => "id-expiration_time"), $this);?>
</td>
  </tr>
  <tr class="crm-event-manage-registration-form-block-selfcancelxfer">
    <td scope="row" class="label" width="20%"><?php echo $this->_tpl_vars['form']['allow_selfcancelxfer']['label']; ?>
</td>
    <td><?php echo $this->_tpl_vars['form']['allow_selfcancelxfer']['html']; ?>
 <?php echo smarty_function_help(array('id' => "id-allow_selfcancelxfer"), $this);?>
</td>
  </tr>
  <tr class="crm-event-manage-registration-form-block-selfcancelxfer_time">
    <td scope="row" class="label" width="20%"><?php echo $this->_tpl_vars['form']['selfcancelxfer_time']['label']; ?>
</td>
    <td><?php echo ((is_array($_tmp=$this->_tpl_vars['form']['selfcancelxfer_time']['html'])) ? $this->_run_mod_handler('crmAddClass', true, $_tmp, 'four') : smarty_modifier_crmAddClass($_tmp, 'four')); ?>
 <?php echo smarty_function_help(array('id' => "id-selfcancelxfer_time"), $this);?>
</td>
  </tr>
</table>
<div class="spacer"></div>

<fieldset id="registration" class="crm-collapsible <?php if ($this->_tpl_vars['defaultsEmpty']): ?>collapsed<?php endif; ?>">
  <legend class="collapsible-title"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Registration Screen<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></legend>
  <div id="registration_screen">
    <table class="form-layout-compressed">
      <tr class="crm-event-manage-registration-form-block-intro_text">
        <td scope="row" class="label"
            width="20%"><?php echo $this->_tpl_vars['form']['intro_text']['label']; ?>
 <?php if ($this->_tpl_vars['action'] == 2): ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'CRM/Core/I18n/Dialog.tpl', 'smarty_include_vars' => array('table' => 'civicrm_event','field' => 'intro_text','id' => $this->_tpl_vars['eventID'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php endif; ?></td>
        <td><?php echo $this->_tpl_vars['form']['intro_text']['html']; ?>

          <div
            class="description"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Introductory message / instructions for online event registration page (may include HTML formatting tags).<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></div>
        </td>
      </tr>
      <tr class="crm-event-manage-registration-form-block-footer_text">
        <td scope="row" class="label"
            width="20%"><?php echo $this->_tpl_vars['form']['footer_text']['label']; ?>
 <?php if ($this->_tpl_vars['action'] == 2): ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'CRM/Core/I18n/Dialog.tpl', 'smarty_include_vars' => array('table' => 'civicrm_event','field' => 'footer_text','id' => $this->_tpl_vars['eventID'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php endif; ?></td>
        <td><?php echo $this->_tpl_vars['form']['footer_text']['html']; ?>

          <div class="description"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Optional footer text for registration screen.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></div>
        </td>
      </tr>
    </table>
    <table class="form-layout-compressed">
      <tr class="crm-event-manage-registration-form-block-custom_pre_id">
        <td scope="row" class="label" width="20%"><?php echo $this->_tpl_vars['form']['custom_pre_id']['label']; ?>
</td>
        <td><?php echo $this->_tpl_vars['form']['custom_pre_id']['html']; ?>

          <div
            class="description"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Include additional fields on this registration form by selecting and configuring a CiviCRM Profile to be included at the top of the page (immediately after the introductory message).<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php echo smarty_function_help(array('id' => "event-profile"), $this);?>
</div>
        </td>
      </tr>
      <tr id="profile_post" class="crm-event-manage-registration-form-block-custom_post_id">
        <td scope="row" class="label" width="20%"><?php echo $this->_tpl_vars['form']['custom_post_id']['label']; ?>
</td>
        <td><?php echo $this->_tpl_vars['form']['custom_post_id']['html']; ?>

          <div class="description"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Include additional fields on this registration form by selecting and configuring a CiviCRM Profile to be included at the bottom of the page.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></div>
          <span class='profile_bottom_link_main <?php if ($this->_tpl_vars['profilePostMultiple']): ?>hiddenElement<?php endif; ?>'><a href="#" class="crm-hover-button crm-button-add-profile"><i class="crm-i fa-plus-circle" aria-hidden="true"></i> <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>add another profile (bottom of page)<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></a></span>
          <br/>
        </td>
      </tr>

      <?php if ($this->_tpl_vars['profilePostMultiple']): ?>
        <?php $_from = $this->_tpl_vars['profilePostMultiple']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['profilePostIdName'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['profilePostIdName']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['profilePostNum'] => $this->_tpl_vars['profilePostId']):
        $this->_foreach['profilePostIdName']['iteration']++;
?>
          <tr id="custom_post_id_multiple_<?php echo $this->_tpl_vars['profilePostNum']; ?>
_wrapper"
              class='crm-event-manage-registration-form-block-custom_post_multiple'>
            <td scope="row" class="label" width="20%"><?php echo $this->_tpl_vars['form']['custom_post_id_multiple'][$this->_tpl_vars['profilePostNum']]['label']; ?>
</td>
            <td><?php echo $this->_tpl_vars['form']['custom_post_id_multiple'][$this->_tpl_vars['profilePostNum']]['html']; ?>

              &nbsp;
              <span class='profile_bottom_link_remove'>
                <a href="#" class="crm-hover-button crm-button-rem-profile">
                  <i class="crm-i fa-trash" aria-hidden="true"></i> <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>remove profile<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
                </a>
              </span>
              &nbsp;&nbsp;
              <span class='profile_bottom_link' <?php if (! ($this->_foreach['profilePostIdName']['iteration'] == $this->_foreach['profilePostIdName']['total'])): ?> style="display: none"<?php endif; ?>>
                <a href="#" class="crm-hover-button crm-button-add-profile">
                  <i class="crm-i fa-plus-circle" aria-hidden="true"></i>
                  <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>add another profile (bottom of page)<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
                </a>
              </span>
              <br/><span class="profile-links"></span>
            </td>
          </tr>
        <?php endforeach; endif; unset($_from); ?>
      <?php endif; ?>
    </table>
    <table class="form-layout-compressed">
      <tr id="additional_profile_pre" class="crm-event-manage-registration-form-block-additional_custom_pre_id">
        <td scope="row" class="label" width="20%"><?php echo $this->_tpl_vars['form']['additional_custom_pre_id']['label']; ?>
</td>
        <td><?php echo $this->_tpl_vars['form']['additional_custom_pre_id']['html']; ?>

              <div
                class="description"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Change this if you want to use a different profile for additional participants.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></div>
          <br/><span class="profile-links"></span>
        </td>
      </tr>
      <tr id="additional_profile_post" class="crm-event-manage-registration-form-block-additional_custom_post_id">
        <td scope="row" class="label" width="20%"><?php echo $this->_tpl_vars['form']['additional_custom_post_id']['label']; ?>
</td>
        <td><?php echo $this->_tpl_vars['form']['additional_custom_post_id']['html']; ?>

          <div
            class="description"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Change this if you want to use a different profile for additional participants.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
          </div>
          <span class='profile_bottom_add_link_main<?php if ($this->_tpl_vars['profilePostMultipleAdd']): ?> hiddenElement<?php endif; ?>'><a href="#" class="crm-hover-button crm-button-add-profile"><i class="crm-i fa-plus-circle" aria-hidden="true"></i> <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>add another profile (bottom of page)<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></a></span>
          <br/><span class="profile-links"></span>
        </td>
      </tr>
      <?php if ($this->_tpl_vars['profilePostMultipleAdd']): ?>
        <?php $_from = $this->_tpl_vars['profilePostMultipleAdd']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['profilePostIdAName'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['profilePostIdAName']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['profilePostNumA'] => $this->_tpl_vars['profilePostIdA']):
        $this->_foreach['profilePostIdAName']['iteration']++;
?>
          <tr id='additional_custom_post_id_multiple_<?php echo $this->_tpl_vars['profilePostNumA']; ?>
_wrapper'
              class='crm-event-manage-registration-form-block-additional_custom_post_multiple'>
            <td scope="row" class="label"
                width="20%"><?php echo $this->_tpl_vars['form']['additional_custom_post_id_multiple'][$this->_tpl_vars['profilePostNumA']]['label']; ?>
</td>
            <td><?php echo $this->_tpl_vars['form']['additional_custom_post_id_multiple'][$this->_tpl_vars['profilePostNumA']]['html']; ?>

              &nbsp;
              <span class='profile_bottom_add_link_remove'>
                <a href="#" class="crm-hover-button crm-button-rem-profile">
                  <i class="crm-i fa-trash" aria-hidden="true"></i> <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>remove profile<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
                </a>
              </span>
              <span class='profile_bottom_add_link' <?php if (! ($this->_foreach['profilePostIdAName']['iteration'] == $this->_foreach['profilePostIdAName']['total'])): ?> style="display: none"<?php endif; ?>>
                <a href="#" class="crm-hover-button crm-button-add-profile">
                  <i class="crm-i fa-plus-circle" aria-hidden="true"></i>
                  <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>add another profile (bottom of page)<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
                </a>
              </span>
              <br/><span class="profile-links"></span>
            </td>
          </tr>
        <?php endforeach; endif; unset($_from); ?>
      <?php endif; ?>
    </table>
  </div>
</fieldset>

<fieldset id="confirm" class="crm-collapsible <?php if ($this->_tpl_vars['defaultsEmpty']): ?>collapsed<?php endif; ?>">
  <legend class="collapsible-title"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Confirmation Screen<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></legend>
  <?php if (! $this->_tpl_vars['is_monetary']): ?>
    <table class="form-layout-compressed">
      <tr class="crm-event-manage-registration-form-block-is_confirm_enabled">
        <td scope="row" class="label" width="20%"><?php echo $this->_tpl_vars['form']['is_confirm_enabled']['label']; ?>
</td>
        <td><?php echo $this->_tpl_vars['form']['is_confirm_enabled']['html']; ?>

          <div class="description"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Optionally hide the confirmation screen for free events.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></div>
        </td>
      </tr>
    </table>
  <?php endif; ?>

  <div id="confirm_screen_settings">
    <table class="form-layout-compressed">
      <tr class="crm-event-manage-registration-form-block-confirm_title">
        <td scope="row" class="label" width="20%"><?php echo $this->_tpl_vars['form']['confirm_title']['label']; ?>
 <span
            class="crm-marker">*</span> <?php if ($this->_tpl_vars['action'] == 2): ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'CRM/Core/I18n/Dialog.tpl', 'smarty_include_vars' => array('table' => 'civicrm_event','field' => 'confirm_title','id' => $this->_tpl_vars['eventID'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php endif; ?>
        </td>
        <td><?php echo $this->_tpl_vars['form']['confirm_title']['html']; ?>
<br/>
                <span
                  class="description"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Page title for screen where user reviews and confirms their registration information.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></span>
        </td>
      </tr>
      <tr class="crm-event-manage-registration-form-block-confirm_text">
        <td scope="row" class="label"
            width="20%"><?php echo $this->_tpl_vars['form']['confirm_text']['label']; ?>
 <?php if ($this->_tpl_vars['action'] == 2): ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'CRM/Core/I18n/Dialog.tpl', 'smarty_include_vars' => array('table' => 'civicrm_event','field' => 'confirm_text','id' => $this->_tpl_vars['eventID'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php endif; ?></td>
        <td><?php echo $this->_tpl_vars['form']['confirm_text']['html']; ?>

          <div class="description"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Optional instructions / message for Confirmation screen.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></div>
        </td>
      </tr>
      <tr class="crm-event-manage-registration-form-block-confirm_footer_text">
        <td scope="row" class="label"
            width="20%"><?php echo $this->_tpl_vars['form']['confirm_footer_text']['label']; ?>
 <?php if ($this->_tpl_vars['action'] == 2): ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'CRM/Core/I18n/Dialog.tpl', 'smarty_include_vars' => array('table' => 'civicrm_event','field' => 'confirm_footer_text','id' => $this->_tpl_vars['eventID'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php endif; ?></td>
        <td><?php echo $this->_tpl_vars['form']['confirm_footer_text']['html']; ?>

          <div class="description"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Optional page footer text for Confirmation screen.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></div>
        </td>
      </tr>
    </table>
  </div>
</fieldset>

<fieldset id="thankyou" class="crm-collapsible <?php if ($this->_tpl_vars['defaultsEmpty']): ?>collapsed<?php endif; ?>">
  <legend class="collapsible-title"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Thank-you Screen<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></legend>
  <table class="form-layout-compressed">
    <tr class="crm-event-manage-registration-form-block-confirm_thankyou_title">
      <td scope="row" class="label" width="20%"><?php echo $this->_tpl_vars['form']['thankyou_title']['label']; ?>
 <span
          class="crm-marker">*</span> <?php if ($this->_tpl_vars['action'] == 2): ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'CRM/Core/I18n/Dialog.tpl', 'smarty_include_vars' => array('table' => 'civicrm_event','field' => 'thankyou_title','id' => $this->_tpl_vars['eventID'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php endif; ?>
      </td>
      <td><?php echo $this->_tpl_vars['form']['thankyou_title']['html']; ?>

        <div class="description"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Page title for registration Thank-you screen.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></div>
      </td>
    </tr>
    <tr class="crm-event-manage-registration-form-block-confirm_thankyou_text">
      <td scope="row" class="label"
          width="20%"><?php echo $this->_tpl_vars['form']['thankyou_text']['label']; ?>
 <?php if ($this->_tpl_vars['action'] == 2): ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'CRM/Core/I18n/Dialog.tpl', 'smarty_include_vars' => array('table' => 'civicrm_event','field' => 'thankyou_text','id' => $this->_tpl_vars['eventID'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php endif; ?></td>
      <td><?php echo $this->_tpl_vars['form']['thankyou_text']['html']; ?>

        <div
          class="description"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Optional message for Thank-you screen (may include HTML formatting).<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></div>
      </td>
    </tr>
    <tr class="crm-event-manage-registration-form-block-confirm_thankyou_footer_text">
      <td scope="row" class="label"
          width="20%"><?php echo $this->_tpl_vars['form']['thankyou_footer_text']['label']; ?>
 <?php if ($this->_tpl_vars['action'] == 2): ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'CRM/Core/I18n/Dialog.tpl', 'smarty_include_vars' => array('table' => 'civicrm_event','field' => 'thankyou_footer_text','id' => $this->_tpl_vars['eventID'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php endif; ?></td>
      <td><?php echo $this->_tpl_vars['form']['thankyou_footer_text']['html']; ?>

        <div
          class="description"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Optional footer text for Thank-you screen (often used to include links to other pages/activities on your site).<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></div>
      </td>
    </tr>
  </table>
</fieldset>

<fieldset id="mail" class="crm-collapsible <?php if ($this->_tpl_vars['defaultsEmpty']): ?>collapsed<?php endif; ?>">
  <legend class="collapsible-title"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Confirmation Email<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></legend>
  <div>
    <table class="form-layout-compressed">
      <tr class="crm-event-manage-registration-form-block-is_email_confirm">
        <td scope="row" class="label" width="20%"><?php echo $this->_tpl_vars['form']['is_email_confirm']['label']; ?>
</td>
        <td><?php echo $this->_tpl_vars['form']['is_email_confirm']['html']; ?>
<br/>
          <span
            class="description"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Do you want a registration confirmation email sent automatically to the user? This email includes event date(s), location and contact information. For paid events, this email is also a receipt for their payment.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></span>
        </td>
      </tr>
    </table>
    <div id="confirmEmail">
      <table class="form-layout-compressed">
        <tr class="crm-event-manage-registration-form-block-confirm_email_text">
          <td scope="row" class="label"
              width="20%"><?php echo $this->_tpl_vars['form']['confirm_email_text']['label']; ?>
 <?php if ($this->_tpl_vars['action'] == 2): ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'CRM/Core/I18n/Dialog.tpl', 'smarty_include_vars' => array('table' => 'civicrm_event','field' => 'confirm_email_text','id' => $this->_tpl_vars['eventID'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php endif; ?></td>
          <td><?php echo $this->_tpl_vars['form']['confirm_email_text']['html']; ?>
<br/>
            <span
              class="description"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Additional message or instructions to include in confirmation email.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></span>
          </td>
        </tr>
        <tr class="crm-event-manage-registration-form-block-confirm_from_name">
          <td scope="row" class="label" width="20%"><?php echo $this->_tpl_vars['form']['confirm_from_name']['label']; ?>
 <span
              class="crm-marker">*</span> <?php if ($this->_tpl_vars['action'] == 2): ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'CRM/Core/I18n/Dialog.tpl', 'smarty_include_vars' => array('table' => 'civicrm_event','field' => 'confirm_from_name','id' => $this->_tpl_vars['eventID'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php endif; ?>
          </td>
          <td><?php echo $this->_tpl_vars['form']['confirm_from_name']['html']; ?>
<br/>
            <span class="description"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>FROM name for email.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></span>
          </td>
        </tr>
        <tr class="crm-event-manage-registration-form-block-confirm_from_email">
          <td scope="row" class="label" width="20%"><?php echo $this->_tpl_vars['form']['confirm_from_email']['label']; ?>
 <span class="crm-marker">*</span></td>
          <td><?php echo $this->_tpl_vars['form']['confirm_from_email']['html']; ?>
<br/>
            <span
              class="description"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>FROM email address (this must be a valid email account with your SMTP email service provider).<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></span>
          </td>
        </tr>
        <tr class="crm-event-manage-registration-form-block-cc_confirm">
          <td scope="row" class="label" width="20%"><?php echo $this->_tpl_vars['form']['cc_confirm']['label']; ?>
</td>
          <td><?php echo $this->_tpl_vars['form']['cc_confirm']['html']; ?>
<br/>
            <span
              class="description"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>You can notify event organizers of each online registration by specifying one or more email addresses to receive a carbon copy (cc). Multiple email addresses should be separated by a comma (e.g. jane@example.org, paula@example.org).<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></span>
          </td>
        </tr>
        <tr class="crm-event-manage-registration-form-block-bcc_confirm">
          <td scope="row" class="label" width="20%"><?php echo $this->_tpl_vars['form']['bcc_confirm']['label']; ?>
</td>
          <td><?php echo $this->_tpl_vars['form']['bcc_confirm']['html']; ?>
<br/>
            <span
              class="description"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>You may specify one or more email addresses to receive a blind carbon copy (bcc) of the confirmation email. Multiple email addresses should be separated by a comma (e.g. jane@example.org, paula@example.org).<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></span>
          </td>
        </tr>
      </table>
    </div>
  </div>
</fieldset>
</div>     </div>
  <div class="crm-submit-buttons">
    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/common/formButtons.tpl", 'smarty_include_vars' => array('location' => 'bottom')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
  </div>
  <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/common/showHide.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/common/showHideByFieldValue.tpl", 'smarty_include_vars' => array('trigger_field_id' => 'is_online_registration','trigger_value' => "",'target_element_id' => 'registration_blocks','target_element_type' => 'block','field_type' => 'radio','invert' => 0)));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php if (! $this->_tpl_vars['is_monetary']): ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/common/showHideByFieldValue.tpl", 'smarty_include_vars' => array('trigger_field_id' => 'is_confirm_enabled','trigger_value' => "",'target_element_id' => 'confirm_screen_settings','target_element_type' => 'block','field_type' => 'radio','invert' => 0)));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php endif; ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/common/showHideByFieldValue.tpl", 'smarty_include_vars' => array('trigger_field_id' => 'is_email_confirm','trigger_value' => "",'target_element_id' => 'confirmEmail','target_element_type' => 'block','field_type' => 'radio','invert' => 0)));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php if ($this->_tpl_vars['form']['requires_approval']): ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/common/showHideByFieldValue.tpl", 'smarty_include_vars' => array('trigger_field_id' => 'requires_approval','trigger_value' => "",'target_element_id' => "id-approval-text",'target_element_type' => "table-row",'field_type' => 'radio','invert' => 0)));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php endif; ?>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/common/buildProfileLink.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<script type="text/javascript">
<?php echo '    (function($, _) { // Generic Closure

    $(".crm-submit-buttons button").click( function() {
      $(".dedupenotify .ui-notify-close").click();
    });

    var profileBottomCount = Number('; ?>
<?php echo count($this->_tpl_vars['profilePostMultiple']); ?>
<?php echo ');
    var profileBottomCountAdd = Number('; ?>
<?php echo count($this->_tpl_vars['profilePostMultipleAdd']); ?>
<?php echo ');

    function addBottomProfile( e ) {
        var urlPath;
        e.preventDefault();

        var addtlPartc = $(this).data(\'addtlPartc\');

        if ($(this).closest("td").children("input").attr("name").indexOf("additional_custom_post") > -1 || addtlPartc) {
            profileBottomCountAdd++
            urlPath = CRM.url(\'civicrm/event/manage/registration\', { addProfileBottomAdd: 1, addProfileNumAdd: profileBottomCountAdd, snippet: 4 } ) ;
        } else {
            profileBottomCount++;
            urlPath = CRM.url(\'civicrm/event/manage/registration\', { addProfileBottom: 1 , addProfileNum : profileBottomCount, snippet: 4 } ) ;
        }

        $(this).closest(\'tbody\').append(\'<tr class="additional_profile"></tr>\');
        var $el = $(this).closest(\'tbody\').find(\'tr:last\');
        $el.load(urlPath, function() { $(this).trigger(\'crmLoad\') });
        $(this).closest(".profile_bottom_link_main, .profile_bottom_link, .profile_bottom_add_link_main").hide();
        $el.find(".profile_bottom_link_main, .profile_bottom_link, .profile_bottom_add_link_main").show();
    }

    function removeBottomProfile( e ) {
        e.preventDefault();

        $(e.target).closest(\'tr\').hide().find(\'.crm-profile-selector\').val(\'\');
        $(e.target).closest(\'tbody\').find(\'tr:visible:last .profile_bottom_link_main,tr:visible:last .profile_bottom_add_link, tr:visible:last .profile_bottom_link, tr:visible:last .profile_bottom_add_link_main\').show();
    }

    var
      strSameAs = \''; ?>
<?php $this->_tag_stack[] = array('ts', array('escape' => 'js')); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>- same as for main contact -<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php echo '\',
      strSelect = \''; ?>
<?php $this->_tag_stack[] = array('ts', array('escape' => 'js')); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>- select -<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php echo '\';

    $(\'#crm-container\').on(\'crmLoad\', function() {
        var $container = $("[id^=\'additional_profile_\'],.additional_profile").not(\'.processed\').addClass(\'processed\');
        $container.find(".crm-profile-selector-select select").each( function() {
            var $select = $(this);
            var selected = $select.find(\':selected\').val(); //cache the default
            $select.find(\'option[value=""]\').remove();
            $select.prepend(\'<option value="">\'+strSameAs+\'</option>\');
            if ($select.closest(\'tr\').is(\':not([id*="_pre"])\')) {
               $select.prepend(\'<option value="">\'+strSelect+\'</option>\');
            }
            $select.find(\'option[value="\'+selected+\'"]\').attr(\'selected\', \'selected\'); //restore default
        });
    });

$(function($) {

    var allow_multiple = $("#is_multiple_registrations");
    if ( !allow_multiple.prop(\'checked\') ) {
        $(\'#additional_profile_pre,#additional_profile_post,#id-max-additional-participants\').hide();
    }
    allow_multiple.change( function( ) {
        if ( !$(this).prop(\'checked\') ) {
            $("#additional_custom_pre_id,#additional_custom_post_id").val(\'\');
            $(".crm-event-manage-registration-form-block-additional_custom_post_multiple").hide();
            $(\'#additional_profile_pre,#additional_profile_post,#id-max-additional-participants\').hide();
        } else {
            $(".crm-event-manage-registration-form-block-additional_custom_post_multiple").show();
            $(\'#additional_profile_pre,#additional_profile_post,#id-max-additional-participants\').show();
        }
    });

    var allow_selfCancel = $("#allow_selfcancelxfer");
    if ( !allow_selfCancel.prop(\'checked\') ) {
        $(\'#selfcancelxfer_time\').hide();
        $(\'.crm-event-manage-registration-form-block-selfcancelxfer_time\').hide();
    }
    allow_selfCancel.change( function( ) {
        if ( !$(this).prop(\'checked\') ) {
            $("#selfcancelxfer_time").val(\'\');
            $(\'#selfcancelxfer_time\').hide();
            $(\'.crm-event-manage-registration-form-block-selfcancelxfer_time\').hide();
        } else {
          $(\'#selfcancelxfer_time\').show();
          $(\'.crm-event-manage-registration-form-block-selfcancelxfer_time\').show();
        }

    });

    $(\'#registration_blocks\').on(\'click\', \'.crm-button-add-profile\', addBottomProfile);
    $(\'#registration_blocks\').on(\'click\', \'.crm-button-rem-profile\', removeBottomProfile);

    $(\'#crm-container\').on(\'crmLoad\', function(e) {
        $(\'tr[id^="additional_profile"] input[id^="additional_custom_"]\').change(function(e) {
            var $input = $(e.target);
            if ( $input.val() == \'\') {
                var $selected = $input.closest(\'tr\').find(\'.crm-profile-selector-select :selected\');
                if ($selected.text() == strSelect) { $input.val(\'none\'); }
            }
        });
    });

}); // END onReady
}(CRM.$, CRM._)); //Generic Closure
'; ?>

</script>
<?php endif; ?>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>