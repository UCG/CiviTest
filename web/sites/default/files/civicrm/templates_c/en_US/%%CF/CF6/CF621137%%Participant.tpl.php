<?php /* Smarty version 2.6.31, created on 2021-08-23 20:53:06
         compiled from CRM/Event/Form/Participant.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'crmScope', 'CRM/Event/Form/Participant.tpl', 1, false),array('block', 'ts', 'CRM/Event/Form/Participant.tpl', 25, false),array('block', 'icon', 'CRM/Event/Form/Participant.tpl', 46, false),array('function', 'crmURL', 'CRM/Event/Form/Participant.tpl', 21, false),array('modifier', 'upper', 'CRM/Event/Form/Participant.tpl', 31, false),array('modifier', 'crmAddClass', 'CRM/Event/Form/Participant.tpl', 114, false),array('modifier', 'json_encode', 'CRM/Event/Form/Participant.tpl', 236, false),)), $this); ?>
<?php $this->_tag_stack[] = array('crmScope', array('extensionKey' => "")); $_block_repeat=true;smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
<?php if ($this->_tpl_vars['showFeeBlock']): ?>
  <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/Event/Form/FeeBlock.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php else: ?>
  <div class="crm-block crm-form-block crm-participant-form-block">
    <?php if ($this->_tpl_vars['newCredit'] && $this->_tpl_vars['action'] == 1 && $this->_tpl_vars['participantMode'] == null): ?>
      <div class="action-link css_right crm-link-credit-card-mode">
        <?php if ($this->_tpl_vars['contactId']): ?>
          <?php ob_start(); ?><?php echo CRM_Utils_System::crmURL(array('p' => 'civicrm/contact/view/participant','q' => "reset=1&action=add&cid=".($this->_tpl_vars['contactId'])."&context=".($this->_tpl_vars['context'])."&mode=live"), $this);?>
<?php $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->assign('ccModeLink', ob_get_contents());ob_end_clean(); ?>
        <?php else: ?>
          <?php ob_start(); ?><?php echo CRM_Utils_System::crmURL(array('p' => 'civicrm/contact/view/participant','q' => "reset=1&action=add&context=standalone&mode=live"), $this);?>
<?php $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->assign('ccModeLink', ob_get_contents());ob_end_clean(); ?>
        <?php endif; ?>
        <a class="open-inline-noreturn action-item crm-hover-button" href="<?php echo $this->_tpl_vars['ccModeLink']; ?>
"><i class="crm-i fa-credit-card" aria-hidden="true"></i> <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>submit credit card event registration<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></a>
      </div>
    <?php endif; ?>
    <div class="view-content">
      <?php if (! empty ( $this->_tpl_vars['participantMode'] )): ?>
        <div class="help">
          <?php $this->_tag_stack[] = array('ts', array('1' => $this->_tpl_vars['displayName'],'2' => ((is_array($_tmp=$this->_tpl_vars['participantMode'])) ? $this->_run_mod_handler('upper', true, $_tmp) : smarty_modifier_upper($_tmp)))); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Use this form to submit an event registration on behalf of %1. <strong>A %2 transaction will be submitted</strong> using the selected payment processor.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
        </div>
      <?php endif; ?>
      <div id="eventFullMsg" class="messages status no-popup" style="display:none;"></div>


      <?php if ($this->_tpl_vars['action'] == 1 && $this->_tpl_vars['paid']): ?>
        <div class="help">
          <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>If you are accepting offline payment from this participant, check <strong>Record Payment</strong>. You will be able to fill in the payment information, and optionally send a receipt.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
        </div>
      <?php endif; ?>

      <?php if ($this->_tpl_vars['action'] == 8): ?>         <div class="crm-participant-form-block-delete messages status no-popup">
          <div class="crm-content">
            <?php $this->_tag_stack[] = array('icon', array('icon' => "fa-info-circle")); $_block_repeat=true;smarty_block_icon($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_icon($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
            <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>WARNING: Deleting this registration will result in the loss of related payment records (if any).<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?> <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Do you want to continue?<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
          </div>
          <?php if ($this->_tpl_vars['additionalParticipant']): ?>
            <div class="crm-content">
              <?php $this->_tag_stack[] = array('ts', array('1' => $this->_tpl_vars['additionalParticipant'])); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?> There are %1 more Participant(s) registered by this participant.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
            </div>
          <?php endif; ?>
        </div>
        <?php if ($this->_tpl_vars['additionalParticipant']): ?>
          <?php echo $this->_tpl_vars['form']['delete_participant']['html']; ?>

        <?php endif; ?>
        <?php else: ?>         <div class="crm-submit-buttons"><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/common/formButtons.tpl", 'smarty_include_vars' => array('location' => 'top')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></div>
        <table class="form-layout-compressed">
          <tr class="crm-participant-form-contact-id">
            <td class="label"><?php echo $this->_tpl_vars['form']['contact_id']['label']; ?>
</td>
            <td><?php echo $this->_tpl_vars['form']['contact_id']['html']; ?>
</td>
          </tr>
          <?php if ($this->_tpl_vars['action'] == 2): ?>
            <?php if ($this->_tpl_vars['additionalParticipants']): ?>               <tr class="crm-participant-form-block-additionalParticipants">
                <td class="label"><label><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Also Registered by this Participant<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></label></td>
                <td>
                  <?php $_from = $this->_tpl_vars['additionalParticipants']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['apName'] => $this->_tpl_vars['apURL']):
?>
                    <a href="<?php echo $this->_tpl_vars['apURL']; ?>
" title="<?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>view additional participant<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>"><?php echo $this->_tpl_vars['apName']; ?>
</a><br />
                  <?php endforeach; endif; unset($_from); ?>
                </td>
              </tr>
            <?php endif; ?>
            <?php if ($this->_tpl_vars['registered_by_contact_id']): ?>
              <tr class="crm-participant-form-block-registered-by">
                <td class="label"><label><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Registered By<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></label></td>
                <td class="view-value">
                  <a href="<?php echo CRM_Utils_System::crmURL(array('p' => 'civicrm/contact/view/participant','q' => "reset=1&id=".($this->_tpl_vars['participant_registered_by_id'])."&cid=".($this->_tpl_vars['registered_by_contact_id'])."&action=view"), $this);?>
"
                     title="<?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>view primary participant<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>"><?php echo $this->_tpl_vars['registered_by_display_name']; ?>
</a>
                </td>
              </tr>
            <?php endif; ?>
          <?php endif; ?>
          <tr class="crm-participant-form-block-event_id">
            <td class="label"><?php echo $this->_tpl_vars['form']['event_id']['label']; ?>
</td>
            <td class="view-value">
              <?php echo $this->_tpl_vars['form']['event_id']['html']; ?>

              <?php if ($this->_tpl_vars['is_test']): ?>
                <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>(test)<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
              <?php endif; ?>
            </td>
          </tr>

                <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/Campaign/Form/addCampaignToComponent.tpl", 'smarty_include_vars' => array('campaignTrClass' => "crm-participant-form-block-campaign_id")));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

          <tr class="crm-participant-form-block-role_id">
            <td class="label"><?php echo $this->_tpl_vars['form']['role_id']['label']; ?>
</td>
            <td><?php echo $this->_tpl_vars['form']['role_id']['html']; ?>
</td>
          </tr>
          <tr class="crm-participant-form-block-register_date">
            <td class="label"><?php echo $this->_tpl_vars['form']['register_date']['label']; ?>
</td>
            <td><?php echo $this->_tpl_vars['form']['register_date']['html']; ?>
</td>
          </tr>
          <tr class="crm-participant-form-block-status_id">
            <td class="label"><?php echo $this->_tpl_vars['form']['status_id']['label']; ?>
</td>
            <td><?php echo $this->_tpl_vars['form']['status_id']['html']; ?>
<?php if ($this->_tpl_vars['event_is_test']): ?> <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>(test)<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php endif; ?>
              <div id="notify"><?php echo $this->_tpl_vars['form']['is_notify']['html']; ?>
<?php echo $this->_tpl_vars['form']['is_notify']['label']; ?>
</div>
            </td>
          </tr>
          <tr class="crm-participant-form-block-source">
            <td class="label"><?php echo $this->_tpl_vars['form']['source']['label']; ?>
</td><td><?php echo ((is_array($_tmp=$this->_tpl_vars['form']['source']['html'])) ? $this->_run_mod_handler('crmAddClass', true, $_tmp, 'huge') : smarty_modifier_crmAddClass($_tmp, 'huge')); ?>
<br />
            <span class="description"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Source for this registration (if applicable).<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></span></td>
          </tr>
          <?php if ($this->_tpl_vars['participantMode']): ?>
            <tr class="crm-participant-form-block-payment_processor_id">
              <td class="label nowrap"><?php echo $this->_tpl_vars['form']['payment_processor_id']['label']; ?>
</td>
              <td><?php echo $this->_tpl_vars['form']['payment_processor_id']['html']; ?>
</td>
            </tr>
          <?php endif; ?>
        </table>
       <?php if ($this->_tpl_vars['participantId'] && $this->_tpl_vars['hasPayment']): ?>
        <table class='form-layout'>
          <tr>
            <td class='label'><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Fees<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></td>
                        <td id='payment-info'></td>
          </tr>
         </table>
        <?php endif; ?>
              <div class="crm-event-form-fee-block"></div>
        <fieldset>
          <table class="form-layout">
            <tr class="crm-participant-form-block-note">
              <td class="label"><?php echo $this->_tpl_vars['form']['note']['label']; ?>
</td><td><?php echo $this->_tpl_vars['form']['note']['html']; ?>
</td>
            </tr>
          </table>
        </fieldset>

        <div class="crm-participant-form-block-customData">
          <div id="customData" class="crm-customData-block"></div>            <div id="customData<?php echo $this->_tpl_vars['eventNameCustomDataTypeID']; ?>
" class="crm-customData-block"></div>           <div id="customData<?php echo $this->_tpl_vars['roleCustomDataTypeID']; ?>
" class="crm-customData-block"></div>           <div id="customData<?php echo $this->_tpl_vars['eventTypeCustomDataTypeID']; ?>
" class="crm-customData-block"></div>         </div>
      <?php endif; ?>

      <?php if ($this->_tpl_vars['accessContribution'] && $this->_tpl_vars['action'] == 2 && $this->_tpl_vars['rows']['0']['contribution_id']): ?>
      <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/Contribute/Form/Selector.tpl", 'smarty_include_vars' => array('context' => 'Search')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
      <?php endif; ?>

      <div class="crm-submit-buttons"><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/common/formButtons.tpl", 'smarty_include_vars' => array('location' => 'bottom')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></div>
    </div>
  </div>
    <?php if ($this->_tpl_vars['action'] == 1 || $this->_tpl_vars['action'] == 2): ?>
    <?php if ($this->_tpl_vars['participantId'] && $this->_tpl_vars['hasPayment']): ?>
      <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/Contribute/Page/PaymentInfo.tpl", 'smarty_include_vars' => array('show' => 'payments')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
    <?php endif; ?>

        <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/common/customData.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

    <script type="text/javascript">
      <?php echo '
      CRM.$(function($) {

        var $form = $(\'form.'; ?>
<?php echo $this->_tpl_vars['form']['formClass']; ?>
<?php echo '\');

        // Handle event selection
        $(\'#event_id\', $form).change(function() {
          var eventId = $(this).val();
          if (!eventId) {
            return;
          }
          var info = $(this).select2(\'data\').extra;

          // Set role from default
          $(\'select[name^=role_id]\', $form).select2(\'val\', [info.default_role_id], true);

          // Set campaign default
          $(\'#campaign_id\', $form).select2(\'val\', info.campaign_id);

          // Event and event-type custom data
          CRM.buildCustomData(\'Participant\', eventId, '; ?>
<?php echo $this->_tpl_vars['eventNameCustomDataTypeID']; ?>
<?php echo ', null, null, null, true);
          CRM.buildCustomData(\'Participant\', info.event_type_id, '; ?>
<?php echo $this->_tpl_vars['eventTypeCustomDataTypeID']; ?>
<?php echo ', null, null, null, true);

          buildFeeBlock();
        });

        // Handle participant role selection
        $(\'select[name^=role_id]\', $form).change(buildRoleCustomData);
        if ($(\'select[name^=role_id]\', $form).val()) {
          buildRoleCustomData();
        }

        buildFeeBlock();

        //build discount block
        if ($(\'#discount_id\', $form).val()) {
          buildFeeBlock($(\'#discount_id\', $form).val());
        }
        $($form).on(\'change\', \'#discount_id\', function() {
          buildFeeBlock($(this).val());
        });

        function buildRoleCustomData() {
          var roleId = $(\'select[name^=role_id]\', $form).val() || [];
          CRM.buildCustomData(\'Participant\', roleId.join(), '; ?>
<?php echo $this->_tpl_vars['roleCustomDataTypeID']; ?>
<?php echo ');
        }

        //build fee block
        function buildFeeBlock(discountId)  {
          var dataUrl = '; ?>
"<?php echo CRM_Utils_System::crmURL(array('p' => $this->_tpl_vars['urlPath'],'h' => 0,'q' => "snippet=4&qfKey=".($this->_tpl_vars['qfKey'])), $this);?>
";

          <?php if ($this->_tpl_vars['urlPathVar']): ?>
          dataUrl += '&' + '<?php echo $this->_tpl_vars['urlPathVar']; ?>
';
          <?php endif; ?>
          dataUrl += '&' + 'is_backoffice=1';

          <?php echo '
          var eventId = $(\'[name=event_id], #event_id\', $form).val();

          if (eventId) {
            dataUrl += \'&eventId=\' + eventId;
          }
          else {
            $(\'#eventFullMsg\', $form).hide( );
            $(\'.crm-event-form-fee-block\', $form).html(\'\');
            return;
          }

          var participantId  = '; ?>
<?php echo json_encode($this->_tpl_vars['participantId']); ?>
<?php echo ';

          if (participantId) {
            dataUrl += \'&participantId=\' + participantId;
          }

          if (discountId) {
            dataUrl += \'&discountId=\' + discountId;
          }

          $.ajax({
            url: dataUrl,
            success: function ( html ) {
              $(".crm-event-form-fee-block", $form).html( html ).trigger(\'crmLoad\');
              //show event real full as well as waiting list message.
              if ( $("#hidden_eventFullMsg", $form).val( ) ) {
                $( "#eventFullMsg", $form).show( ).html( $("#hidden_eventFullMsg", $form).val( ) );
              }
              else {
                $( "#eventFullMsg", $form ).hide( );
              }
            }
          });
        }

        '; ?>

        CRM.buildCustomData( '<?php echo $this->_tpl_vars['customDataType']; ?>
', null, null );
        <?php if ($this->_tpl_vars['eventID']): ?>
          CRM.buildCustomData( '<?php echo $this->_tpl_vars['customDataType']; ?>
', <?php echo $this->_tpl_vars['eventID']; ?>
, <?php echo $this->_tpl_vars['eventNameCustomDataTypeID']; ?>
 );
        <?php endif; ?>
        <?php if ($this->_tpl_vars['eventTypeID']): ?>
          CRM.buildCustomData( '<?php echo $this->_tpl_vars['customDataType']; ?>
', <?php echo $this->_tpl_vars['eventTypeID']; ?>
, <?php echo $this->_tpl_vars['eventTypeCustomDataTypeID']; ?>
 );
        <?php endif; ?>
        <?php echo '

      });
    </script>
    '; ?>


  <?php endif; ?>


<script type="text/javascript">
  <?php echo '

  sendNotification();
  function sendNotification() {
    var notificationStatusIds = '; ?>
"<?php echo $this->_tpl_vars['notificationStatusIds']; ?>
"<?php echo ';
    notificationStatusIds = notificationStatusIds.split(\',\');
    if (cj.inArray(cj(\'.crm-participant-form-block-status_id select#status_id option:selected\').val(), notificationStatusIds) > -1) {
      cj("#notify").show();
      cj("#is_notify").prop(\'checked\', false);
    }
    else {
      cj("#notify").hide();
      cj("#is_notify").prop(\'checked\', false);
    }
  }

  '; ?>

</script>

<?php endif; ?> <?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>