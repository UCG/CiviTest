<?php /* Smarty version 2.6.31, created on 2021-08-24 17:40:37
         compiled from CRM/Member/Form/MembershipType.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'crmScope', 'CRM/Member/Form/MembershipType.tpl', 1, false),array('block', 'ts', 'CRM/Member/Form/MembershipType.tpl', 28, false),array('block', 'icon', 'CRM/Member/Form/MembershipType.tpl', 107, false),array('function', 'docURL', 'CRM/Member/Form/MembershipType.tpl', 36, false),array('function', 'help', 'CRM/Member/Form/MembershipType.tpl', 48, false),array('function', 'crmURL', 'CRM/Member/Form/MembershipType.tpl', 106, false),)), $this); ?>
<?php $this->_tag_stack[] = array('crmScope', array('extensionKey' => "")); $_block_repeat=true;smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php if ($this->_tpl_vars['action'] == 8): ?>
  <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/Core/Form/EntityForm.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php else: ?>
<div class="crm-block crm-form-block crm-membership-type-form-block">

  <div class="form-item" id="membership_type_form">
    <div class="crm-submit-buttons"><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/common/formButtons.tpl", 'smarty_include_vars' => array('location' => 'top')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></div>
    <table class="form-layout-compressed">
      <?php $_from = $this->_tpl_vars['tpl_standardised_fields']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['fieldName']):
?>
       <?php $this->assign('fieldSpec', $this->_tpl_vars['entityFields'][$this->_tpl_vars['fieldName']]); ?>
       <tr class="crm-<?php echo $this->_tpl_vars['entityInClassFormat']; ?>
-form-block-<?php echo $this->_tpl_vars['fieldName']; ?>
">
          <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/Core/Form/Field.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
        </tr>
      <?php endforeach; endif; unset($_from); ?>
      <tr class="crm-membership-type-form-block-financial_type_id">
        <td class="label"><?php echo $this->_tpl_vars['form']['financial_type_id']['label']; ?>
</td>
        <td><?php echo $this->_tpl_vars['form']['financial_type_id']['html']; ?>
<br />
          <span class="description"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Select the financial type assigned to fees for this membership type (for example 'Membership Fees'). This is required for all membership types - including free or complimentary memberships.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></span>
        </td>
      </tr>
      <tr class="crm-membership-type-form-block-auto_renew">
        <td class="label"><?php echo $this->_tpl_vars['form']['auto_renew']['label']; ?>
</td>
        <?php if ($this->_tpl_vars['authorize']): ?>
          <td><?php echo $this->_tpl_vars['form']['auto_renew']['html']; ?>
</td>
        <?php else: ?>
          <td><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>You will need to select and configure a supported payment processor (currently Authorize.Net, PayPal Pro, or PayPal Website Standard) in order to offer automatically renewing memberships.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?> <?php echo smarty_function_docURL(array('page' => "user/contributions/payment-processors"), $this);?>
</td>
        <?php endif; ?>
      </tr>
      <tr class="crm-membership-type-form-block-duration_unit_interval">
        <td class="label"><?php echo $this->_tpl_vars['form']['duration_unit']['label']; ?>
</td>
        <td><?php echo $this->_tpl_vars['form']['duration_interval']['html']; ?>
&nbsp;&nbsp;<?php echo $this->_tpl_vars['form']['duration_unit']['html']; ?>
<br />
          <span class="description"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Duration of this membership (e.g. 30 days, 2 months, 5 years, 1 lifetime)<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></span>
        </td>
      </tr>
      <tr class="crm-membership-type-form-block-period_type">
        <td class="label"><?php echo $this->_tpl_vars['form']['period_type']['label']; ?>
</td>
        <td><?php echo $this->_tpl_vars['form']['period_type']['html']; ?>
<br />
          <span class="description"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Select 'rolling' if membership periods begin at date of signup. Select 'fixed' if membership periods begin on a set calendar date.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?> <?php echo smarty_function_help(array('id' => "period-type",'file' => "CRM/Member/Page/MembershipType.hlp"), $this);?>
</span>
        </td>
      </tr>
      <tr id="fixed_start_day_row" class="crm-membership-type-form-block-fixed_period_start_day">
        <td class="label"><?php echo $this->_tpl_vars['form']['fixed_period_start_day']['label']; ?>
</td>
        <td><?php echo $this->_tpl_vars['form']['fixed_period_start_day']['html']; ?>
<br />
          <span class="description"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Month and day on which a <strong>fixed</strong> period membership or subscription begins. Example: A fixed period membership with Start Day set to Jan 01 means that membership periods would be 1/1/06 - 12/31/06 for anyone signing up during 2006.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></span>
        </td>
      </tr>
      <tr id="fixed_rollover_day_row" class="crm-membership-type-form-block-fixed_period_rollover_day">
        <td class="label"><?php echo $this->_tpl_vars['form']['fixed_period_rollover_day']['label']; ?>
</td>
        <td><?php echo $this->_tpl_vars['form']['fixed_period_rollover_day']['html']; ?>
<br />
          <span class="description"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Membership signups on or after this date cover the following calendar year as well. Example: If the rollover day is November 30, membership period for signups during December will cover the following year.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></span>
        </td>
      </tr>
      <tr id="month_fixed_rollover_day_row" class="crm-membership-type-form-block-fixed_period_rollover_day">
        <td class="label"><?php echo $this->_tpl_vars['form']['month_fixed_period_rollover_day']['label']; ?>
</td>
        <td><?php echo $this->_tpl_vars['form']['month_fixed_period_rollover_day']['html']; ?>
<br />
          <span class="description"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Membership signups on or after this day of the month cover the rest of the month plus the specified number of months.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></span>
        </td>
      </tr>
      <tr class="crm-membership-type-form-block-relationship_type_id">
        <td class="label"><?php echo $this->_tpl_vars['form']['relationship_type_id']['label']; ?>
</td>
        <td>
          <?php if (! $this->_tpl_vars['membershipRecordsExists']): ?>
            <?php echo $this->_tpl_vars['form']['relationship_type_id']['html']; ?>

            <br />
            <?php else: ?>
            <?php echo $this->_tpl_vars['form']['relationship_type_id']['html']; ?>
<div class="status message"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>You cannot modify relationship type because there are membership records associated with this membership type.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></div>
          <?php endif; ?>
          <span class="description"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Memberships can be automatically granted to related contacts by selecting a Relationship Type.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?> <?php echo smarty_function_help(array('id' => "rel-type",'file' => "CRM/Member/Page/MembershipType.hlp"), $this);?>
</span>
        </td>
      </tr>
      <tr id="maxRelated" class="crm-membership-type-form-block-max_related">
        <td class="label"><?php echo $this->_tpl_vars['form']['max_related']['label']; ?>
</td>
        <td><?php echo $this->_tpl_vars['form']['max_related']['html']; ?>
<br />
          <span class="description"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Maximum number of related memberships (leave blank for unlimited).<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></span>
        </td>
      </tr>
      <tr class="crm-membership-type-form-block-visibility">
        <td class="label"><?php echo $this->_tpl_vars['form']['visibility']['label']; ?>
</td>
        <td><?php echo $this->_tpl_vars['form']['visibility']['html']; ?>
<br />
          <span class="description"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Can this membership type be used for self-service signups ('Public'), or is it only for CiviCRM users with 'Edit Contributions' permission ('Admin').<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></span>
        </td>
      </tr>
      <tr class="crm-membership-type-form-block-weight">
        <td class="label"><?php echo $this->_tpl_vars['form']['weight']['label']; ?>
</td>
        <td><?php echo $this->_tpl_vars['form']['weight']['html']; ?>
</td>
      </tr>
      <tr class="crm-membership-type-form-block-is_active">
        <td class="label"><?php echo $this->_tpl_vars['form']['is_active']['label']; ?>
</td>
        <td><?php echo $this->_tpl_vars['form']['is_active']['html']; ?>
</td>
      </tr>
    </table>
    <div class="spacer"></div>

    <fieldset><legend><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Renewal Reminders<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></legend>
      <div class="help">
        <?php ob_start(); ?><?php echo CRM_Utils_System::crmURL(array('p' => 'civicrm/admin/scheduleReminders','q' => 'reset=1'), $this);?>
<?php $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->assign('reminderLink', ob_get_contents());ob_end_clean(); ?>
        <?php $this->_tag_stack[] = array('icon', array('icon' => "fa-info-circle")); $_block_repeat=true;smarty_block_icon($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_icon($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
        <?php $this->_tag_stack[] = array('ts', array('1' => $this->_tpl_vars['reminderLink'])); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Configure membership renewal reminders using <a href="%1">Schedule Reminders</a>. If you have previously configured renewal reminder templates, you can re-use them with your new scheduled reminders.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?> <?php echo smarty_function_docURL(array('page' => "user/email/scheduled-reminders"), $this);?>

      </div>
    </fieldset>

    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/common/customDataBlock.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

    <div class="crm-submit-buttons"><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/common/formButtons.tpl", 'smarty_include_vars' => array('location' => 'bottom')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></div>
  <?php endif; ?>
    <div class="spacer"></div>
  </div>
</div>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/common/deferredFinancialType.tpl", 'smarty_include_vars' => array('context' => 'MembershipType')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php echo '
<script type="text/javascript">
CRM.$(function($) {
  showHidePeriodSettings();
  $(\'#duration_unit\').change(function(){
    showHidePeriodSettings();
  });

  $(\'#period_type\').change(function(){
    showHidePeriodSettings();
  });

  '; ?>

  <?php if ($this->_tpl_vars['action'] == 2): ?>
  <?php echo '
    showHideMaxRelated($(\'#relationship_type_id\').val());
    $(\'#relationship_type_id\').change(function(){
      showHideMaxRelated($(\'#relationship_type_id\').val());
    });
  '; ?>
<?php else: ?><?php echo '
    showHideMaxRelated($(\'#relationship_type_id :selected\').val());
    $(\'#relationship_type_id\').change(function(){
      showHideMaxRelated($(\'#relationship_type_id :selected\').val());
    });
  '; ?>
<?php endif; ?><?php echo '
});

function showHidePeriodSettings() {
  if ((cj("#period_type :selected").val() == "fixed") &&
    (cj("#duration_unit :selected").val() == "year")) {
    cj(\'#fixed_start_day_row, #fixed_rollover_day_row\').show();
    cj(\'#month_fixed_rollover_day_row\').hide();
    if (!cj("#fixed_period_start_day_M, #fixed_period_start_day_d").val()) {
      cj("#fixed_period_start_day_M, #fixed_period_start_day_d").val("1");
    }
    if (!cj("#fixed_period_rollover_day_M").val()) {
      cj("#fixed_period_rollover_day_M").val("12");
    }
    if (!cj("#fixed_period_rollover_day_d").val()) {
      cj("#fixed_period_rollover_day_d").val("31");
    }
    cj("#month_fixed_rollover_day_row").val("");
  }
  else if ((cj("#period_type :selected").val() == "fixed" ) &&
    (cj("#duration_unit :selected").val() == "month" )) {
    cj(\'#month_fixed_rollover_day_row\').show();
    cj(\'#fixed_start_day_row, #fixed_rollover_day_row\').hide();
    cj("#fixed_period_start_day_M, #fixed_period_start_day_d").val("");
    cj("#fixed_period_rollover_day_M, #fixed_period_rollover_day_d").val("");
  }
  else {
    cj(\'#fixed_start_day_row, #fixed_rollover_day_row, #month_fixed_rollover_day_row\').hide();
    cj("#fixed_period_start_day_M, #fixed_period_start_day_d").val("");
    cj("#fixed_period_rollover_day_M, #fixed_period_rollover_day_d").val("");
    cj("#month_fixed_rollover_day_row").val("");
  }
}

//load the auto renew msg if recur allow.
'; ?>
<?php if ($this->_tpl_vars['authorize'] && $this->_tpl_vars['allowAutoRenewMsg']): ?><?php echo '
CRM.$(function($) {
  setReminder( null );
});
'; ?>
<?php endif; ?><?php echo '

function setReminder( autoRenewOpt ) {
  //don\'t process.
  var allowToProcess = '; ?>
'<?php echo $this->_tpl_vars['allowAutoRenewMsg']; ?>
'<?php echo ';
  if ( !allowToProcess ) {
    return;
  }
  if ( !autoRenewOpt ) {
    autoRenewOpt = cj( \'input:radio[name="auto_renew"]:checked\').val();
  }
  funName = \'hide();\';
  if ( autoRenewOpt == 1 || autoRenewOpt == 2 ) funName = \'show();\';
  eval( "cj(\'#autoRenewalMsgId\')." + funName );
}

function showHideMaxRelated(relTypeId) {
  if (relTypeId) {
    cj(\'#maxRelated\').show();
  }
  else {
    cj(\'#maxRelated\').hide();
  }
}
</script>
'; ?>

<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>