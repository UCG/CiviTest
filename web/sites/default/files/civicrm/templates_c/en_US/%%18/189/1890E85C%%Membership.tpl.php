<?php /* Smarty version 2.6.31, created on 2021-08-24 17:47:39
         compiled from CRM/Member/Form/Membership.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'crmScope', 'CRM/Member/Form/Membership.tpl', 1, false),array('block', 'icon', 'CRM/Member/Form/Membership.tpl', 13, false),array('block', 'ts', 'CRM/Member/Form/Membership.tpl', 14, false),array('modifier', 'crmDate', 'CRM/Member/Form/Membership.tpl', 14, false),array('modifier', 'crmAddClass', 'CRM/Member/Form/Membership.tpl', 206, false),array('modifier', 'json_encode', 'CRM/Member/Form/Membership.tpl', 298, false),array('function', 'crmURL', 'CRM/Member/Form/Membership.tpl', 58, false),array('function', 'help', 'CRM/Member/Form/Membership.tpl', 85, false),)), $this); ?>
<?php $this->_tag_stack[] = array('crmScope', array('extensionKey' => "")); $_block_repeat=true;smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php if ($this->_tpl_vars['isRecur']): ?>
  <div class="messages status no-popup">
    <?php $this->_tag_stack[] = array('icon', array('icon' => "fa-info-circle")); $_block_repeat=true;smarty_block_icon($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_icon($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
    <p><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>This membership is set to renew automatically <?php if ($this->_tpl_vars['endDate']): ?>on <?php echo ((is_array($_tmp=$this->_tpl_vars['endDate'])) ? $this->_run_mod_handler('crmDate', true, $_tmp) : smarty_modifier_crmDate($_tmp)); ?>
<?php endif; ?>. Please be aware that any changes that you make here may not be reflected in the payment processor. Please ensure that you alter the related subscription at the payment processor.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></p>
    <?php if ($this->_tpl_vars['cancelAutoRenew']): ?><p><?php $this->_tag_stack[] = array('ts', array('1' => $this->_tpl_vars['cancelAutoRenew'])); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>To stop the automatic renewal:
      <a href="%1">Cancel auto-renew</a>
    <?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></p><?php endif; ?>
  </div>
<?php endif; ?>
<div class="spacer"></div>
<?php if ($this->_tpl_vars['priceSetId']): ?>
  <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/Price/Form/PriceSet.tpl", 'smarty_include_vars' => array('context' => 'standalone','extends' => 'Membership')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
  <?php echo '
  <script type="text/javascript">
  CRM.$(function($) {
    var membershipValues = [];
    '; ?>
<?php $_from = $this->_tpl_vars['optionsMembershipTypes']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['opId'] => $this->_tpl_vars['memType']):
?><?php echo '
      membershipValues['; ?>
<?php echo $this->_tpl_vars['opId']; ?>
<?php echo '] = '; ?>
<?php echo $this->_tpl_vars['memType']; ?>
<?php echo ';
    '; ?>
<?php endforeach; endif; unset($_from); ?><?php echo '
    processMembershipPriceset(membershipValues, '; ?>
<?php echo $this->_tpl_vars['autoRenewOption']; ?>
<?php echo ', 1);
    '; ?>
<?php if (! $this->_tpl_vars['membershipMode']): ?><?php echo '
      enableAmountSection('; ?>
<?php echo $this->_tpl_vars['contributionType']; ?>
<?php echo ');
    '; ?>
<?php endif; ?><?php echo '
  });
  </script>
  '; ?>

<?php else: ?>
  <?php if ($this->_tpl_vars['membershipMode'] == 'test'): ?>
    <?php $this->assign('registerMode', 'TEST'); ?>
    <?php elseif ($this->_tpl_vars['membershipMode'] == 'live'): ?>
    <?php $this->assign('registerMode', 'LIVE'); ?>
  <?php endif; ?>
  <?php if (! $this->_tpl_vars['emailExists'] && $this->_tpl_vars['action'] != 8 && $this->_tpl_vars['context'] != 'standalone'): ?>
  <div class="messages status no-popup">
    <?php $this->_tag_stack[] = array('icon', array('icon' => "fa-info-circle")); $_block_repeat=true;smarty_block_icon($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_icon($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
    <p><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>You will not be able to send an automatic email receipt for this Membership because there is no email address recorded for this contact. If you want a receipt to be sent when this Membership is recorded, click Cancel and then click Edit from the Summary tab to add an email address before recording the Membership.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></p>
  </div>
  <?php endif; ?>
  <?php if ($this->_tpl_vars['membershipMode']): ?>
  <div class="help">
    <?php $this->_tag_stack[] = array('ts', array('1' => $this->_tpl_vars['displayName'],'2' => $this->_tpl_vars['registerMode'])); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Use this form to submit Membership Record on behalf of %1. <strong>A %2 transaction will be submitted</strong> using the selected payment processor.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
  </div>
  <?php endif; ?>
  <div class="crm-block crm-form-block crm-membership-form-block">
    <?php if ($this->_tpl_vars['newCredit'] && $this->_tpl_vars['action'] == 1 && $this->_tpl_vars['membershipMode'] == null): ?>
    <div class="action-link css_right crm-link-credit-card-mode">
      <?php if ($this->_tpl_vars['contactId']): ?>
        <?php ob_start(); ?><?php echo CRM_Utils_System::crmURL(array('p' => 'civicrm/contact/view/membership','q' => "reset=1&action=add&cid=".($this->_tpl_vars['contactId'])."&context=".($this->_tpl_vars['context'])."&mode=live"), $this);?>
<?php $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->assign('ccModeLink', ob_get_contents());ob_end_clean(); ?>
      <?php else: ?>
        <?php ob_start(); ?><?php echo CRM_Utils_System::crmURL(array('p' => 'civicrm/contact/view/membership','q' => "reset=1&action=add&context=standalone&mode=live"), $this);?>
<?php $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->assign('ccModeLink', ob_get_contents());ob_end_clean(); ?>
      <?php endif; ?>
     <a class="open-inline-noreturn action-item crm-hover-button" href="<?php echo $this->_tpl_vars['ccModeLink']; ?>
"><i class="crm-i fa-credit-card" aria-hidden="true"></i> <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>submit credit card membership<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></a>
    </div>
    <?php endif; ?>
    <div class="crm-submit-buttons"><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/common/formButtons.tpl", 'smarty_include_vars' => array('location' => 'top')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></div>
    <?php if ($this->_tpl_vars['action'] == 8): ?>
    <div class="messages status no-popup">
      <?php $this->_tag_stack[] = array('icon', array('icon' => "fa-info-circle")); $_block_repeat=true;smarty_block_icon($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_icon($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
      <?php echo $this->_tpl_vars['deleteMessage']; ?>

    </div>
    <?php else: ?>
      <table class="form-layout-compressed">
        <tr class="crm-membership-form-contact-id">
           <td class="label"><?php echo $this->_tpl_vars['form']['contact_id']['label']; ?>
</td>
           <td><?php echo $this->_tpl_vars['form']['contact_id']['html']; ?>
</td>
        </tr>
        <tr class="crm-membership-form-block-membership_type_id">
          <td class="label"><?php echo $this->_tpl_vars['form']['membership_type_id']['label']; ?>
</td>
          <td id="mem_type_id-readonly">
            <span id="membership_type_id_0-readonly"></span> : <span id="membership_type_id_1-readonly"></span>
            <span id="mem-type-override">
              <a href="#" class="crm-hover-button action-item override-mem-type" id="show-mem-type">
                <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Override organization and type<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
              </a>
              <?php echo smarty_function_help(array('id' => 'override_membership_type'), $this);?>

            </span>
          </td>
          <td id="mem_type_id-editable"><span id='mem_type_id'><?php echo $this->_tpl_vars['form']['membership_type_id']['html']; ?>
</span>
            <?php if ($this->_tpl_vars['hasPriceSets']): ?>
              <span id='totalAmountORPriceSet'> <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>OR<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></span>
              <span id='selectPriceSet'><?php echo $this->_tpl_vars['form']['price_set_id']['html']; ?>
</span>
              <?php if ($this->_tpl_vars['buildPriceSet'] && $this->_tpl_vars['priceSet']): ?>
                <div id="priceset"><br/><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/Price/Form/PriceSet.tpl", 'smarty_include_vars' => array('extends' => 'Membership')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></div>
                <?php else: ?>
                <div id="priceset" class="hiddenElement"></div>
              <?php endif; ?>
            <?php endif; ?>
            <?php if ($this->_tpl_vars['member_is_test']): ?> <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>(test)<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php endif; ?><br />
            <span class="description"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Select Membership Organization and then Membership Type.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php if ($this->_tpl_vars['hasPriceSets']): ?> <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Alternatively, you can use a price set.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php endif; ?></span>
          </td>
        </tr>
        <tr id="maxRelated" class="crm-membership-form-block-max_related">
          <td class="label"><?php echo $this->_tpl_vars['form']['max_related']['label']; ?>
</td>
          <td><?php echo $this->_tpl_vars['form']['max_related']['html']; ?>
<br />
            <span class="description"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Maximum number of related memberships (leave blank for unlimited).<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?> <span id="eligibleRelated"></span></span>
          </td>
        </tr>
        <?php if ($this->_tpl_vars['action'] == 1): ?>
          <tr id="num_terms_row" class="crm-membership-form-block-num_terms">
            <td class="label"><?php echo $this->_tpl_vars['form']['num_terms']['label']; ?>
</td>
            <td>&nbsp;<?php echo $this->_tpl_vars['form']['num_terms']['html']; ?>
<br />
              <span class="description"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Set the membership end date this many membership periods from now. Make sure the appropriate corresponding fee is entered below.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></span>
            </td>
          </tr>
        <?php endif; ?>
        <tr class="crm-membership-form-block-source">
          <td class="label"><?php echo $this->_tpl_vars['form']['source']['label']; ?>
</td>
          <td>&nbsp;<?php echo $this->_tpl_vars['form']['source']['html']; ?>
<br />
          <span class="description"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Source of this membership. This value is searchable.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></span></td>
        </tr>

                <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/Campaign/Form/addCampaignToComponent.tpl", 'smarty_include_vars' => array('campaignTrClass' => "crm-membership-form-block-campaign_id")));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

        <tr class="crm-membership-form-block-join_date"><td class="label"><?php echo $this->_tpl_vars['form']['join_date']['label']; ?>
</td><td><?php echo $this->_tpl_vars['form']['join_date']['html']; ?>

          <br />
          <span class="description"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>When did this contact first become a member?<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></span></td></tr>
        <tr class="crm-membership-form-block-start_date"><td class="label"><?php echo $this->_tpl_vars['form']['start_date']['label']; ?>
</td><td><?php echo $this->_tpl_vars['form']['start_date']['html']; ?>

          <br />
          <span class="description"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>First day of current continuous membership period. Start Date will be automatically set based on Membership Type if you don't select a date.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></span></td></tr>
        <tr class="crm-membership-form-block-end_date"><td class="label"><?php echo $this->_tpl_vars['form']['end_date']['label']; ?>
</td>
          <td id="end-date-readonly">
              <?php echo ((is_array($_tmp=$this->_tpl_vars['endDate'])) ? $this->_run_mod_handler('crmDate', true, $_tmp) : smarty_modifier_crmDate($_tmp)); ?>

              <a href="#" class="crm-hover-button action-item override-date" id="show-end-date">
                <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Override end date<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
              </a>
              <?php echo smarty_function_help(array('id' => 'override_end_date'), $this);?>

          </td>
          <td id="end-date-editable">
            <?php echo $this->_tpl_vars['form']['end_date']['html']; ?>

            <br />
            <span class="description"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Latest membership period expiration date. End Date will be automatically set based on Membership Type if you don't select a date.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></span>
          </td>
        </tr>
        <?php if (! $this->_tpl_vars['membershipMode']): ?>
          <tr>
            <td class="label"><?php echo $this->_tpl_vars['form']['is_override']['label']; ?>
 <?php echo smarty_function_help(array('id' => "id-status-override"), $this);?>
</td>
            <td>
              <span id="is-override"><?php echo $this->_tpl_vars['form']['is_override']['html']; ?>
</span>
              <span id="status-override-end-date"><?php echo $this->_tpl_vars['form']['status_override_end_date']['html']; ?>
</span>
            </td>
          </tr>
                    <tr id="memberStatus_show">
            <?php if ($this->_tpl_vars['action'] == 2): ?>
              <td class="label"><?php echo $this->_tpl_vars['form']['status_id']['label']; ?>
</td><td class="view-value"><?php echo $this->_tpl_vars['membershipStatus']; ?>
</td>
            <?php endif; ?>
          </tr>

                    <tr id="memberStatus"><td class="label"><?php echo $this->_tpl_vars['form']['status_id']['label']; ?>
</td><td><?php echo $this->_tpl_vars['form']['status_id']['html']; ?>
<br />
            <span class="description"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>When <strong>Status Override</strong> is active, the selected status will remain in force (it will NOT be subject to membership status rules) until it is cancelled or become inactive.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></span></td></tr>
        <?php endif; ?>

        <?php if ($this->_tpl_vars['accessContribution'] && ! $this->_tpl_vars['membershipMode'] && ( $this->_tpl_vars['action'] != 2 || ( ! $this->_tpl_vars['rows']['0']['contribution_id'] && ! $this->_tpl_vars['softCredit'] ) )): ?>
          <tr id="contri">
            <td class="label"><?php echo $this->_tpl_vars['form']['record_contribution']['label']; ?>
</td>
            <td><?php echo $this->_tpl_vars['form']['record_contribution']['html']; ?>
<br />
              <span class="description"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Check this box to enter or update payment information. You will also be able to generate a customized receipt.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></span></td>
          </tr>
          <tr class="crm-membership-form-block-record_contribution"><td colspan="2">
            <fieldset id="recordContribution"><legend><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Membership Payment and Receipt<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></legend>
        <?php endif; ?>
        <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/Member/Form/MembershipCommon.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
        <?php if ($this->_tpl_vars['emailExists'] && $this->_tpl_vars['isEmailEnabledForSite']): ?>
          <tr id="send-receipt" class="crm-membership-form-block-send_receipt">
            <td class="label"><?php echo $this->_tpl_vars['form']['send_receipt']['label']; ?>
</td>
            <td>
              <?php echo $this->_tpl_vars['form']['send_receipt']['html']; ?>
<br />
              <span class="description">
                <?php $this->_tag_stack[] = array('ts', array('1' => $this->_tpl_vars['emailExists'])); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Automatically email a membership confirmation and receipt to %1? OR if the payment is from a different contact, this email will only go to them.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
                <span class="auto-renew-text"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>For auto-renewing memberships the emails are sent when each payment is received<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></span>
              </span>
            </td>
          </tr>
        <?php elseif ($this->_tpl_vars['context'] == 'standalone' && $this->_tpl_vars['isEmailEnabledForSite']): ?>
          <tr id="email-receipt" style="display:none;">
            <td class="label"><?php echo $this->_tpl_vars['form']['send_receipt']['label']; ?>
</td>
            <td>
              <?php echo $this->_tpl_vars['form']['send_receipt']['html']; ?>
<br />
              <span class="description">
                <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Automatically email a membership confirmation and receipt to <?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><span id="email-address"></span>? <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>OR if the payment is from a different contact, this email will only go to them.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
                <span class="auto-renew-text"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>For auto-renewing memberships the emails are sent when each payment is received<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></span>
              </span>
            </td>
          </tr>
        <?php endif; ?>
        <tr id="fromEmail" style="display: none" class="crm-contactEmail-form-block-fromEmailAddress crm-email-element">
          <td class="label"><?php echo $this->_tpl_vars['form']['from_email_address']['label']; ?>
</td>
          <td><?php echo $this->_tpl_vars['form']['from_email_address']['html']; ?>
 <?php echo smarty_function_help(array('id' => "id-from_email",'file' => "CRM/Contact/Form/Task/Email.hlp",'isAdmin' => $this->_tpl_vars['isAdmin']), $this);?>
</td>
        </tr>
        <tr id='notice' style="display:none;">
          <td class="label"><?php echo $this->_tpl_vars['form']['receipt_text']['label']; ?>
</td>
          <td class="html-adjust"><span class="description"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>If you need to include a special message for this member, enter it here. Otherwise, the confirmation email will include the standard receipt message configured under System Message Templates.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></span>
            <?php echo ((is_array($_tmp=$this->_tpl_vars['form']['receipt_text']['html'])) ? $this->_run_mod_handler('crmAddClass', true, $_tmp, 'huge') : smarty_modifier_crmAddClass($_tmp, 'huge')); ?>
</td>
        </tr>
      </table>
      <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/common/customDataBlock.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
      <?php if ($this->_tpl_vars['accessContribution'] && $this->_tpl_vars['action'] == 2 && $this->_tpl_vars['rows']['0']['contribution_id']): ?>
        <div class="crm-accordion-wrapper">
          <div class="crm-accordion-header"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Related Contributions<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></div>
          <div class="crm-accordion-body">
            <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/Contribute/Form/Selector.tpl", 'smarty_include_vars' => array('context' => 'Search')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
            <script type="text/javascript">
              var membershipID = <?php echo $this->_tpl_vars['entityID']; ?>
;
              var contactID = <?php echo $this->_tpl_vars['contactId']; ?>
;
              <?php echo '
              CRM.$(function($) {
                CRM.loadPage(
                  CRM.url(
                    \'civicrm/membership/recurring-contributions\',
                    {
                      reset: 1,
                      membershipID: membershipID,
                      cid: contactID
                    },
                    \'back\'
                  ),
                  {
                    target : \'#membership-recurring-contributions\',
                    dialog : false
                  }
                );
              });
              '; ?>

            </script>
            <div id="membership-recurring-contributions"></div>
          </div>
        </div>
      <?php endif; ?>
      <?php if ($this->_tpl_vars['softCredit']): ?>
        <div class="crm-accordion-wrapper">
          <div class="crm-accordion-header"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Related Soft Contributions<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></div>
          <div class="crm-accordion-body"><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/Contribute/Page/ContributionSoft.tpl", 'smarty_include_vars' => array('context' => 'membership')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></div>
       </div>
      <?php endif; ?>
    <?php endif; ?>

    <div class="crm-submit-buttons"><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/common/formButtons.tpl", 'smarty_include_vars' => array('location' => 'bottom')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></div>
  </div> <!-- end form-block -->

  <?php if ($this->_tpl_vars['action'] != 8): ?>     <?php if ($this->_tpl_vars['accessContribution'] && ! $this->_tpl_vars['membershipMode'] && ( $this->_tpl_vars['action'] != 2 || ! $this->_tpl_vars['rows']['0']['contribution_id'] )): ?>

    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/common/showHideByFieldValue.tpl", 'smarty_include_vars' => array('trigger_field_id' => 'record_contribution','trigger_value' => "",'target_element_id' => 'recordContribution','target_element_type' => "table-row",'field_type' => 'radio','invert' => 0)));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
    <?php endif; ?>

    <?php echo '
    <script type="text/javascript">
      function setPaymentBlock(mode, checkboxEvent) {
        if (cj(\'#price_set_id\').length > 0 && cj(\'#price_set_id\').val()) {
          return;
        }
        var membershipTypeID = parseInt(cj(\'#membership_type_id_1\').val());
        if (!membershipTypeID) {
          return;
        }

        var allMemberships = '; ?>
<?php echo $this->_tpl_vars['allMembershipInfo']; ?>
<?php echo ';
        membershipType = allMemberships[membershipTypeID];
        if (!mode) {
          //check the record_contribution checkbox if membership is a paid one
          '; ?>
<?php if ($this->_tpl_vars['action'] == 1): ?><?php echo '
          if (!checkboxEvent) {
            if (membershipType[\'total_amount_numeric\'] > 0) {
              cj(\'#record_contribution\').prop(\'checked\',\'checked\');
              cj(\'#recordContribution\').show();
            }
            else {
              cj(\'#record_contribution\').prop(\'checked\', false);
              cj(\'#recordContribution\').hide();
            }
          }
          '; ?>
<?php endif; ?><?php echo '
        }

        // skip this for test and live modes because financial type is set automatically
        cj("#financial_type_id").val(membershipType[\'financial_type_id\']);
        // Get the number of terms from the form, default to 1 if no num_terms element.
        var term = cj(\'#num_terms\').val() || 1;
        var taxTerm = '; ?>
<?php echo json_encode($this->_tpl_vars['taxTerm']); ?>
<?php echo ';
        var currency = '; ?>
<?php echo json_encode($this->_tpl_vars['currency_symbol']); ?>
<?php echo ';
        var taxExclusiveAmount = membershipType[\'total_amount_numeric\'] * term;
        var taxAmount = (membershipType[\'tax_rate\']/100)*taxExclusiveAmount;
        taxAmount = isNaN (taxAmount) ? 0:taxAmount;
        cj("#total_amount").val(CRM.formatMoney(taxExclusiveAmount + taxAmount, true));

        var taxMessage = taxAmount > 0 ? \'Includes \'+taxTerm+\' amount of \'+currency+\' \'+taxAmount:\'\';
        cj(\'.totaltaxAmount\').html(taxMessage);
      }


      CRM.$(function($) {
      var mode   = '; ?>
'<?php echo $this->_tpl_vars['membershipMode']; ?>
'<?php echo ';
      if ( !mode ) {
        // Offline form (mode = false) has the record_contribution checkbox
        cj(\'#record_contribution\').click( function( ) {
          if ( cj(this).prop(\'checked\') ) {
            cj(\'#recordContribution\').show( );
            setPaymentBlock( false, true);
          }
          else {
            cj(\'#recordContribution\').hide( );
          }
        });
      }

      cj(\'#membership_type_id_1\').change( function( ) {
        setPaymentBlock(mode);
      });
      cj(\'#num_terms\').change( function( ) {
        setPaymentBlock(mode);
      });

      // show/hide different contact section
      setDifferentContactBlock();
      cj(\'#is_different_contribution_contact\').change( function() {
        setDifferentContactBlock();
      });

      // give option to override membership type for auto-renew memberships - dev/core#1331
      '; ?>

      <?php if ($this->_tpl_vars['isRecur']): ?>
        cj('#membership_type_id_0-readonly').text(cj('#membership_type_id_0 option:selected').text());
        cj('#membership_type_id_1-readonly').text(cj('#membership_type_id_1 option:selected').text());
        cj('#mem_type_id-readonly').show();
        cj('#mem_type_id-editable').hide();
      <?php else: ?>
        cj('#mem_type_id-readonly').hide();
        cj('#mem_type_id-editable').show();
      <?php endif; ?>
      <?php echo '

      cj(\'#show-mem-type\').click( function( e ) {
        e.preventDefault();
        cj(\'#mem_type_id-readonly\').hide();
        cj(\'#mem_type_id-editable\').show();
      });

      // give option to override end-date for auto-renew memberships
      '; ?>

      <?php if ($this->_tpl_vars['isRecur'] && $this->_tpl_vars['endDate']): ?>
        cj('#end-date-readonly').show();
        cj('#end-date-editable').hide();
      <?php else: ?>
        cj('#end-date-readonly').hide();
        cj('#end-date-editable').show();
      <?php endif; ?>
      <?php echo '

      cj(\'#show-end-date\').click( function( e ) {
        e.preventDefault();
        cj(\'#end-date-readonly\').hide();
        cj(\'#end-date-editable\').show();
      });

    });

    function setDifferentContactBlock( ) {
      // show/hide different contact section
      if ( cj(\'#is_different_contribution_contact\').prop(\'checked\') ) {
        cj(\'#record-different-contact\').show();
      }
      else {
        cj(\'#record-different-contact\').hide();
      }
    }

    function showEmailOptions() {
      '; ?>

      // @todo emailExists refers to the primary contact for the page.
      // elsewhere some script determines if there is a paying contact the
      // email should go to instead (e.g gift membership). This should be checked for here
      // and that merged into that code as currently behaviour is inconsistent.
      var emailExists = <?php echo ((is_array($_tmp=$this->_tpl_vars['emailExists'])) ? $this->_run_mod_handler('json_encode', true, $_tmp) : json_encode($_tmp)); ?>
;
      var isStandalone = <?php if ($this->_tpl_vars['context'] == 'standalone'): ?>true<?php else: ?>false<?php endif; ?>;
      var isEmailEnabledForSite = <?php if ($this->_tpl_vars['isEmailEnabledForSite']): ?>true<?php else: ?>false<?php endif; ?>;

      <?php echo '
      var isEmailable = (isEmailEnabledForSite && (emailExists || isStandalone));

      if (isEmailable && cj(\'#send_receipt\').prop(\'checked\') && !cj(\'#auto_renew\').prop(\'checked\')) {
        // Hide extra message and from email for recurring as they cannot be stored until use.
        cj(\'#notice\').show();
        cj(\'#fromEmail\').show();
      }
      else {
        cj(\'#notice\').hide();
        cj(\'#fromEmail\').hide();
      }
    }
    </script>
    <script type="text/javascript">

    '; ?>
<?php if (! $this->_tpl_vars['membershipMode']): ?><?php echo '
    cj( "#is_override" ).change(function() {
      showHideMemberStatus();
    });

    showHideMemberStatus();
    function showHideMemberStatus() {
      var isOverride = cj( "#is_override" ).val();
      switch (isOverride) {
        case \'0\':
          cj(\'#memberStatus\').hide();
          cj(\'#memberStatus_show\').show();
          cj(\'#status-override-end-date\').hide();
          break;
        case \'1\':
          cj(\'#memberStatus\').show();
          cj(\'#memberStatus_show\').hide();
          cj(\'#status-override-end-date\').hide();
          break;
        case \'2\':
          cj(\'#memberStatus\').show();
          cj(\'#memberStatus_show\').hide();
          cj(\'#status-override-end-date\').show();
          break;
        default :
          cj(\'#memberStatus\').hide( );
          cj(\'#memberStatus_show\').show( );
          cj(\'#status-override-end-date\').hide();
          break;
      }
    }
    '; ?>
<?php endif; ?>

    <?php if ($this->_tpl_vars['context'] == 'standalone' && $this->_tpl_vars['isEmailEnabledForSite']): ?>
    <?php echo '
    CRM.$(function($) {
      var $form = $("form.'; ?>
<?php echo $this->_tpl_vars['form']['formClass']; ?>
<?php echo '");
      $("#contact_id", $form).change(checkEmail);
      checkEmail( );

      function checkEmail( ) {
        var data = $("#contact_id", $form).select2(\'data\');
        if (data && data.extra && data.extra.email && data.extra.email.length) {
          $("#email-receipt", $form).show();
          if ($("#send_receipt", $form).is(\':checked\')) {
            $("#notice", $form).show();
          }
          $("#email-address", $form).html(data.extra.email);
        }
        else {
          $("#email-receipt, #notice", $form).hide();
        }
      }
    });

    '; ?>

    <?php endif; ?>

    <?php echo '
    //keep read only always checked.
    CRM.$(function($) {
      var $form = $("form.'; ?>
<?php echo $this->_tpl_vars['form']['formClass']; ?>
<?php echo '");
      var allowAutoRenew   = '; ?>
'<?php echo $this->_tpl_vars['allowAutoRenew']; ?>
'<?php echo ';
      var alreadyAutoRenew = '; ?>
'<?php echo $this->_tpl_vars['alreadyAutoRenew']; ?>
'<?php echo ';
      if ( allowAutoRenew || alreadyAutoRenew ) {
        $( "#auto_renew" ).click(function( ) {
          if ( $(this).attr( \'readonly\' ) ) {
            $(this).prop(\'checked\', true );
          }
          showEmailOptions();
        });
      }

      '; ?>

      <?php if (! empty ( $this->_tpl_vars['existingContactMemberships'] )): ?>

      var alert, memberorgs = <?php echo json_encode($this->_tpl_vars['existingContactMemberships']); ?>
;

      <?php echo '
      $("select[name=\'membership_type_id[0]\']").change(checkExistingMemOrg);



      function checkExistingMemOrg () {
        alert && alert.close && alert.close();
        var selectedorg = $("select[name=\'membership_type_id[0]\']").val();
        if (selectedorg in memberorgs) {
          var andEndDate = \'\',
            endDate = memberorgs[selectedorg].membership_end_date,
            org = $(\'option:selected\', "select[name=\'membership_type_id[0]\']").text();
          if (endDate) {
            andEndDate = \''; ?>
<?php $this->_tag_stack[] = array('ts', array('escape' => 'js','1' => '%1')); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>and end date of %1<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php echo '\';
            andEndDate = \' \' + ts(andEndDate, {1:endDate});
          }

          alert = CRM.alert(
            // Mixing client-side variables with a translated string in smarty is awkward!
            ts('; ?>
'<?php $this->_tag_stack[] = array('ts', array('escape' => 'js')); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>This contact has an existing %1 membership at %2 with %3 status%4.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>'<?php echo ', {1:memberorgs[selectedorg].membership_type, 2: org, 3: memberorgs[selectedorg].membership_status, 4: andEndDate})
              + \'<ul><li><a href="\' + memberorgs[selectedorg].renewUrl + \'">\'
              + '; ?>
'<?php $this->_tag_stack[] = array('ts', array('escape' => 'js')); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Renew the existing membership instead<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>'
              + '</a></li><li><a href="' + memberorgs[selectedorg].membershipTab + '">'
              + '<?php $this->_tag_stack[] = array('ts', array('escape' => 'js')); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>View all existing and / or expired memberships for this contact<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>'<?php echo '
              + \'</a></li></ul>\',
            \''; ?>
<?php $this->_tag_stack[] = array('ts', array('escape' => 'js')); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Duplicate Membership?<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php echo '\', \'alert\');
        }
      }
      checkExistingMemOrg();
      '; ?>

      <?php endif; ?>

      <?php echo '

    });
    '; ?>


    <?php if ($this->_tpl_vars['membershipMode'] || $this->_tpl_vars['action'] == 2): ?>
      buildAutoRenew( null, null, '<?php echo $this->_tpl_vars['membershipMode']; ?>
');
    <?php endif; ?>
    <?php echo '
    function buildAutoRenew(membershipTypeID, processorId, mode ) {
      var action = '; ?>
'<?php echo $this->_tpl_vars['action']; ?>
'<?php echo ';

      //for update lets hide it when not already recurring.
      if (action == 2) {
        //user can\'t cancel auto renew by unchecking.
        if (cj("#auto_renew").prop(\'checked\')) {
          cj("#auto_renew").attr(\'readonly\', true);
        }
        else {
          cj("#autoRenew").hide( );
        }
      }

      //we should do all auto renew for cc memberships.
      if (!mode) {
        return;
      }

      //get the required values in case missing.
      if (!processorId) {
        processorId = cj( \'#payment_processor_id\' ).val( );
      }
      if (!membershipTypeID) {
        membershipTypeID = parseInt( cj(\'#membership_type_id_1\').val( ) );
      }

      //we don\'t have both required values.
      if (!processorId || !membershipTypeID) {
        cj("#auto_renew").prop(\'checked\', false);
        cj("#autoRenew").hide();
        showEmailOptions();
        return;
      }

      var recurProcessors  = '; ?>
<?php echo $this->_tpl_vars['recurProcessor']; ?>
<?php echo ';
      var autoRenewOptions = '; ?>
<?php echo $this->_tpl_vars['autoRenewOptions']; ?>
<?php echo ';
      var currentOption    = autoRenewOptions[membershipTypeID];

      if (!currentOption || !recurProcessors[processorId]) {
        cj("#auto_renew").prop(\'checked\', false );
        cj("#autoRenew").hide();
        return;
      }

      if (currentOption == 1) {
        cj("#autoRenew").show();
        if (cj("#auto_renew").attr(\'readonly\')) {
          cj("#auto_renew").prop(\'checked\', false).removeAttr(\'readonly\');
        }
      }
      else if ( currentOption == 2 ) {
        cj("#autoRenew").show();
        cj("#auto_renew").prop(\'checked\', true).attr(\'readonly\', true);
      }
      else {
        cj("#auto_renew").prop(\'checked\', false);
        cj("#autoRenew").hide( );
      }
      showEmailOptions();
    }

    var customDataType = '; ?>
<?php echo json_encode($this->_tpl_vars['customDataType']); ?>
<?php echo ';

    // load form during form rule.
    '; ?>
<?php if ($this->_tpl_vars['buildPriceSet']): ?><?php echo '
      cj("#totalAmountORPriceSet, #mem_type_id, #num_terms_row, .crm-membership-form-block-financial_type_id-mode").hide();
      cj(\'#total_amount\').attr("readonly", true);
    '; ?>
<?php endif; ?><?php echo '

    function buildAmount( priceSetId ) {
      if (!priceSetId) {
        priceSetId = cj("#price_set_id").val();
      }
        var fname = \'#priceset\';
        if ( !priceSetId ) {
        cj(\'#membership_type_id_1\').val(0);
        CRM.buildCustomData(customDataType, null);

        // hide price set fields.
        cj( fname ).hide( );

        // show/hide price set amount and total amount.
        cj( "#mem_type_id").show( );
        var choose = "'; ?>
<?php $this->_tag_stack[] = array('ts', array('escape' => 'js')); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Choose price set<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php echo '";
        cj("#price_set_id option[value=\'\']").html( choose );
        cj( "#totalAmountORPriceSet" ).show( );
        cj(\'#total_amount\').removeAttr("readonly");
        cj( "#num_terms_row").show( );
        cj(".crm-membership-form-block-financial_type_id-mode").show();

        '; ?>
<?php if ($this->_tpl_vars['allowAutoRenew']): ?><?php echo '
          cj(\'#autoRenew\').hide();
          cj("#auto_renew").removeAttr(\'readOnly\').prop(\'checked\', false );
        '; ?>
<?php endif; ?><?php echo '
        return;
      }

      cj( "#total_amount" ).val(\'\').attr("readonly", true);

      var dataUrl = '; ?>
"<?php echo CRM_Utils_System::crmURL(array('h' => 0,'q' => 'snippet=4'), $this);?>
"<?php echo ' + \'&priceSetId=\' + priceSetId;

      var response = cj.ajax({
        url: dataUrl,
        async: false
      }).responseText;

      cj( fname ).show( ).html( response );
      // freeze total amount text field.

      cj( "#totalAmountORPriceSet" ).hide( );
      cj( "#mem_type_id" ).hide( );
      var manual = "'; ?>
<?php $this->_tag_stack[] = array('ts', array('escape' => 'js')); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Manual membership and price<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php echo '";
      cj("#price_set_id option[value=\'\']").html( manual );
      cj( "#num_terms_row" ).hide( );
      cj(".crm-membership-form-block-financial_type_id-mode").hide();
    }

    buildMaxRelated(cj(\'#membership_type_id_1\', false).val());

    function buildMaxRelated( memType, setDefault ) {
      var allMemberships = '; ?>
<?php echo $this->_tpl_vars['allMembershipInfo']; ?>
<?php echo ';

      if ((memType > 0) && (allMemberships[memType][\'has_related\'])) {
        if (setDefault) cj(\'#max_related\').val(allMemberships[memType][\'max_related\']);
        cj(\'#maxRelated\').show();
        var cid = '; ?>
<?php if ($this->_tpl_vars['contactID']): ?><?php echo $this->_tpl_vars['contactID']; ?>
<?php else: ?>null<?php endif; ?><?php echo ';
        if (cid) {
          CRM.api(\'relationship\', \'getcount\', {contact_id: cid, membership_type_id: memType}, {
            success: function(result) {
              var relatable;
              if (result.result === 0) {
                relatable = \''; ?>
<?php $this->_tag_stack[] = array('ts', array('escape' => 'js')); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>No contacts are currently eligible to inherit this relationship.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php echo '\';
              }
              else if (result.result === 1) {
                relatable = \''; ?>
<?php $this->_tag_stack[] = array('ts', array('escape' => 'js')); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>One contact is currently eligible to inherit this relationship.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php echo '\';
              }
              else {
                relatable = \''; ?>
<?php $this->_tag_stack[] = array('ts', array('escape' => 'js','1' => '%1')); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>%1 contacts are currently eligible to inherit this relationship.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php echo '\';
                relatable = ts(relatable, {1: result});
              }
              cj(\'#eligibleRelated\').text(relatable);
            }
          });
        }
      } else {
        cj(\'#max_related\').val(\'\');
        cj(\'#maxRelated\').hide();
      }
    }

    var lastMembershipTypes = [];
    var optionsMembershipTypes = [];

    // function to load custom data for selected membership types through priceset
    function processMembershipPriceset( membershipValues, autoRenewOption, reload ) {
      var currentMembershipType = [];
      var count = 0;
      var loadCustomData = 0;
      if ( membershipValues ) {
        optionsMembershipTypes = membershipValues;
      }

      if ( reload ) {
        lastMembershipTypes = [];
        '; ?>
<?php if ($this->_tpl_vars['allowAutoRenew']): ?><?php echo '
        cj(\'#autoRenew\').hide();
        var autoRenew = cj("#auto_renew");
        autoRenew.removeAttr(\'readOnly\').prop(\'checked\', false );
        if (autoRenewOption == 1) {
          cj(\'#autoRenew\').show();
        }
        else if (autoRenewOption == 2) {
          autoRenew.attr(\'readOnly\', true).prop(\'checked\',  true );
          cj(\'#autoRenew\').show();
        }
        '; ?>
<?php endif; ?><?php echo '
      }

      cj("input,#priceset select,#priceset").each(function () {
        if ( cj(this).attr(\'price\') ) {
          switch( cj(this).attr(\'type\') ) {
            case \'checkbox\':
              if ( cj(this).prop(\'checked\') ) {
                eval( \'var option = \' + cj(this).attr(\'price\') ) ;
                var ele = option[0];
                var memTypeId = optionsMembershipTypes[ele];
                if ( memTypeId && cj.inArray(optionsMembershipTypes[ele], currentMembershipType) == -1 ) {
                  currentMembershipType[count] = memTypeId;
                  count++;
                }
              }
              if ( reload ) {
                cj(this).click( function( ) {
                  processMembershipPriceset();
                });
              }
              break;

            case \'radio\':
              if ( cj(this).prop(\'checked\') && cj(this).val() ) {
                var memTypeId = optionsMembershipTypes[cj(this).val()];
                if ( memTypeId && cj.inArray(memTypeId, currentMembershipType) == -1 ) {
                  currentMembershipType[count] = memTypeId;
                  count++;
                }
              }
              if ( reload ) {
                cj(this).click( function( ) {
                  processMembershipPriceset();
                });
              }
              break;

            case \'select-one\':
              if ( cj(this).val( ) ) {
                var memTypeId = optionsMembershipTypes[cj(this).val()];
                if ( memTypeId && cj.inArray(memTypeId, currentMembershipType) == -1 ) {
                  currentMembershipType[count] = memTypeId;
                  count++;
                }
              }
              if ( reload ) {
                cj(this).change( function( ) {
                  processMembershipPriceset();
                });
              }
              break;
          }
        }
      });

      for( i in currentMembershipType ) {
        if ( cj.inArray(currentMembershipType[i], lastMembershipTypes) == -1 ) {
          loadCustomData = 1;
          break;
        }
      }

      if ( !loadCustomData ) {
        for( i in lastMembershipTypes) {
          if ( cj.inArray(lastMembershipTypes[i], currentMembershipType) == -1 ) {
            loadCustomData = 1;
            break;
          }
        }
      }

      lastMembershipTypes = currentMembershipType;

      // load custom data only if change in membership type selection
      if ( !loadCustomData ) {
        return;
      }

      subTypeNames = currentMembershipType.join(\',\');
      if ( subTypeNames.length < 1 ) {
        subTypeNames = null;
      }

      CRM.buildCustomData(customDataType, subTypeNames);
    }

  function enableAmountSection( setContributionType ) {
    if ( !cj(\'#record_contribution\').prop(\'checked\') ) {
      cj(\'#record_contribution\').click( );
      cj(\'#recordContribution\').show( );
    }
    if ( setContributionType ) {
    cj(\'#financial_type_id\').val(setContributionType);
    }
  }
  </script>
  '; ?>

  <?php endif; ?> <?php endif; ?><?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>