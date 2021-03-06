<?php /* Smarty version 2.6.31, created on 2021-08-25 21:23:25
         compiled from CRM/Contribute/Form/Contribution/Confirm.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'crmScope', 'CRM/Contribute/Form/Contribution/Confirm.tpl', 1, false),array('block', 'ts', 'CRM/Contribute/Form/Contribution/Confirm.tpl', 18, false),array('block', 'crmRegion', 'CRM/Contribute/Form/Contribution/Confirm.tpl', 84, false),array('modifier', 'crmMoney', 'CRM/Contribute/Form/Contribution/Confirm.tpl', 47, false),array('modifier', 'count', 'CRM/Contribute/Form/Contribution/Confirm.tpl', 145, false),array('modifier', 'nl2br', 'CRM/Contribute/Form/Contribution/Confirm.tpl', 212, false),array('modifier', 'truncate', 'CRM/Contribute/Form/Contribution/Confirm.tpl', 262, false),array('modifier', 'crmDate', 'CRM/Contribute/Form/Contribution/Confirm.tpl', 262, false),)), $this); ?>
<?php $this->_tag_stack[] = array('crmScope', array('extensionKey' => "")); $_block_repeat=true;smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php if ($this->_tpl_vars['action'] & 1024): ?>
  <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/Contribute/Form/Contribution/PreviewHeader.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php endif; ?>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/common/TrackingFields.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<div class="crm-contribution-page-id-<?php echo $this->_tpl_vars['contributionPageID']; ?>
 crm-block crm-contribution-confirm-form-block">
  <div class="help">
    <p><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Please verify the information below carefully. Click <strong>Go Back</strong> if you need to make changes.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
      <?php echo $this->_tpl_vars['continueText']; ?>

    </p>
  </div>
  <div id="crm-submit-buttons" class="crm-submit-buttons">
    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/common/formButtons.tpl", 'smarty_include_vars' => array('location' => 'top')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
  </div>
  <?php if ($this->_tpl_vars['is_pay_later']): ?>
    <div class="bold pay_later_receipt-section"><?php echo $this->_tpl_vars['pay_later_receipt']; ?>
</div>
  <?php endif; ?>

  <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/Contribute/Form/Contribution/MembershipBlock.tpl", 'smarty_include_vars' => array('context' => 'confirmContribution')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

  <?php if ($this->_tpl_vars['amount'] >= 0 || $this->_tpl_vars['minimum_fee'] >= 0 || ( $this->_tpl_vars['isDisplayLineItems'] && $this->_tpl_vars['lineItem'] )): ?>
    <div class="crm-group amount_display-group">
      <?php if (! $this->_tpl_vars['useForMember']): ?>
        <div class="header-dark">
          <?php if (! $this->_tpl_vars['membershipBlock'] && $this->_tpl_vars['amount'] || ( $this->_tpl_vars['isDisplayLineItems'] && $this->_tpl_vars['lineItem'] )): ?><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Contribution Amount<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php else: ?><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Membership Fee<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?> <?php endif; ?>
        </div>
      <?php endif; ?>
      <div class="display-block">
        <?php if (! $this->_tpl_vars['useForMember']): ?>
          <?php if ($this->_tpl_vars['lineItem'] && $this->_tpl_vars['isDisplayLineItems']): ?>
            <?php if (! $this->_tpl_vars['amount']): ?><?php $this->assign('amount', 0); ?><?php endif; ?>
            <?php $this->assign('totalAmount', $this->_tpl_vars['amount']); ?>
            <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/Price/Page/LineItem.tpl", 'smarty_include_vars' => array('context' => 'Contribution')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
          <?php elseif ($this->_tpl_vars['is_separate_payment']): ?>
            <?php if ($this->_tpl_vars['amount'] && $this->_tpl_vars['minimum_fee']): ?>
              <?php echo $this->_tpl_vars['membership_name']; ?>
 <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Membership<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>:
              <strong><?php echo ((is_array($_tmp=$this->_tpl_vars['minimum_fee'])) ? $this->_run_mod_handler('crmMoney', true, $_tmp) : smarty_modifier_crmMoney($_tmp)); ?>
</strong>
              <br/>
              <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Additional Contribution<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>:
              <strong><?php echo ((is_array($_tmp=$this->_tpl_vars['amount'])) ? $this->_run_mod_handler('crmMoney', true, $_tmp) : smarty_modifier_crmMoney($_tmp)); ?>
</strong>
              <br/>
              <strong> -------------------------------------------</strong>
              <br/>
              <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Total<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>:
              <strong><?php echo ((is_array($_tmp=$this->_tpl_vars['amount']+$this->_tpl_vars['minimum_fee'])) ? $this->_run_mod_handler('crmMoney', true, $_tmp) : smarty_modifier_crmMoney($_tmp)); ?>
</strong>
              <br/>
            <?php elseif ($this->_tpl_vars['amount']): ?>
              <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Amount<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>:
              <strong><?php echo ((is_array($_tmp=$this->_tpl_vars['amount'])) ? $this->_run_mod_handler('crmMoney', true, $_tmp) : smarty_modifier_crmMoney($_tmp)); ?>
 <?php if ($this->_tpl_vars['amount_level']): ?><span class='crm-price-amount-label'>
                  &ndash; <?php echo $this->_tpl_vars['amount_level']; ?>
</span><?php endif; ?></strong>
            <?php else: ?>
              <?php echo $this->_tpl_vars['membership_name']; ?>
 <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Membership<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>:
              <strong><?php echo ((is_array($_tmp=$this->_tpl_vars['minimum_fee'])) ? $this->_run_mod_handler('crmMoney', true, $_tmp) : smarty_modifier_crmMoney($_tmp)); ?>
</strong>
            <?php endif; ?>
          <?php else: ?>
            <?php if ($this->_tpl_vars['totalTaxAmount']): ?>
              <?php $this->_tag_stack[] = array('ts', array('1' => $this->_tpl_vars['taxTerm'])); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Total %1 Amount<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>:
              <strong><?php echo ((is_array($_tmp=$this->_tpl_vars['totalTaxAmount'])) ? $this->_run_mod_handler('crmMoney', true, $_tmp) : smarty_modifier_crmMoney($_tmp)); ?>
 </strong>
              <br/>
            <?php endif; ?>
            <?php if ($this->_tpl_vars['amount']): ?>
              <?php if ($this->_tpl_vars['installments']): ?><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Installment Amount<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php else: ?><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Total Amount<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php endif; ?>:
              <strong><?php echo ((is_array($_tmp=$this->_tpl_vars['amount'])) ? $this->_run_mod_handler('crmMoney', true, $_tmp) : smarty_modifier_crmMoney($_tmp)); ?>
<?php if ($this->_tpl_vars['amount_level']): ?><span class='crm-price-amount-label'>
                  &ndash; <?php echo $this->_tpl_vars['amount_level']; ?>
</span><?php endif; ?></strong>
            <?php else: ?>
              <?php echo $this->_tpl_vars['membership_name']; ?>
 <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Membership<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>:
              <strong><?php echo ((is_array($_tmp=$this->_tpl_vars['minimum_fee'])) ? $this->_run_mod_handler('crmMoney', true, $_tmp) : smarty_modifier_crmMoney($_tmp)); ?>
</strong>
            <?php endif; ?>
          <?php endif; ?>
        <?php endif; ?>

        <?php if ($this->_tpl_vars['is_recur']): ?>
          <?php if (! empty ( $this->_tpl_vars['auto_renew'] )): ?>             <?php $this->_tag_stack[] = array('crmRegion', array('name' => "contribution-confirm-recur-membership")); $_block_repeat=true;smarty_block_crmRegion($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
              <br/>
              <strong>
                <?php if ($this->_tpl_vars['autoRenewOption'] == 1): ?>
                  <?php $this->_tag_stack[] = array('ts', array('1' => $this->_tpl_vars['frequency_interval'],'2' => $this->_tpl_vars['frequency_unit'])); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>I want this membership to be renewed automatically every %1 %2(s).<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
                <?php elseif ($this->_tpl_vars['autoRenewOption'] == 2): ?>
                  <?php $this->_tag_stack[] = array('ts', array('1' => $this->_tpl_vars['frequency_interval'],'2' => $this->_tpl_vars['frequency_unit'])); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>This membership will be renewed automatically every %1 %2(s).<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
                <?php endif; ?>
              </strong>
              </p>
              <div class="description crm-auto-renew-cancel-info">
                (<?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Your initial membership fee will be processed once you complete the confirmation step. You will be able to cancel the auto-renewal option by visiting the web page link that will be included in your receipt.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
                )
              </div>
            <?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_crmRegion($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
          <?php else: ?>
            <?php $this->_tag_stack[] = array('crmRegion', array('name' => "contribution-confirm-recur")); $_block_repeat=true;smarty_block_crmRegion($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
            <?php if ($this->_tpl_vars['installments']): ?>
              <?php if ($this->_tpl_vars['frequency_interval'] > 1): ?>
                <p>
                  <strong><?php $this->_tag_stack[] = array('ts', array('1' => $this->_tpl_vars['frequency_interval'],'2' => $this->_tpl_vars['frequency_unit'],'3' => $this->_tpl_vars['installments'])); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>I want to contribute this amount every %1 %2s for %3 installments.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></strong>
                </p>
              <?php else: ?>
                <p>
                  <strong><?php $this->_tag_stack[] = array('ts', array('1' => $this->_tpl_vars['frequency_unit'],'2' => $this->_tpl_vars['installments'])); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>I want to contribute this amount every %1 for %2 installments.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></strong>
                </p>
              <?php endif; ?>
            <?php else: ?>
              <?php if ($this->_tpl_vars['frequency_interval'] > 1): ?>
                <p>
                  <strong><?php $this->_tag_stack[] = array('ts', array('1' => $this->_tpl_vars['frequency_interval'],'2' => $this->_tpl_vars['frequency_unit'])); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>I want to contribute this amount every %1 %2s.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></strong>
                </p>
              <?php else: ?>
                <p><strong><?php $this->_tag_stack[] = array('ts', array('1' => $this->_tpl_vars['frequency_unit'])); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>I want to contribute this amount every %1.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></strong></p>
              <?php endif; ?>
            <?php endif; ?>
              <p><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Your initial contribution will be processed once you complete the confirmation step. You will be able to cancel the recurring contribution by visiting the web page link that will be included in your receipt.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></p>
            <?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_crmRegion($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
          <?php endif; ?>
        <?php endif; ?>

        <?php if ($this->_tpl_vars['is_pledge']): ?>
          <?php if ($this->_tpl_vars['pledge_frequency_interval'] > 1): ?>
            <p>
              <strong><?php $this->_tag_stack[] = array('ts', array('1' => $this->_tpl_vars['pledge_frequency_interval'],'2' => $this->_tpl_vars['pledge_frequency_unit'],'3' => $this->_tpl_vars['pledge_installments'])); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>I pledge to contribute this amount every %1 %2s for %3 installments.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></strong>
            </p>
          <?php else: ?>
            <p>
              <strong><?php $this->_tag_stack[] = array('ts', array('1' => $this->_tpl_vars['pledge_frequency_interval'],'2' => $this->_tpl_vars['pledge_frequency_unit'],'3' => $this->_tpl_vars['pledge_installments'])); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>I pledge to contribute this amount every %2 for %3 installments.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></strong>
            </p>
          <?php endif; ?>
          <?php if ($this->_tpl_vars['is_pay_later']): ?>
            <p><?php $this->_tag_stack[] = array('ts', array('1' => $this->_tpl_vars['receiptFromEmail'],'2' => $this->_tpl_vars['button'])); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Click &quot;%2&quot; below to register your pledge. You will be able to modify or cancel future pledge payments at any time by logging in to your account or contacting us at %1.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></p>
          <?php else: ?>
            <p><?php $this->_tag_stack[] = array('ts', array('1' => $this->_tpl_vars['receiptFromEmail'],'2' => $this->_tpl_vars['button'])); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Your initial pledge payment will be processed when you click &quot;%2&quot; below. You will be able to modify or cancel future pledge payments at any time by logging in to your account or contacting us at %1.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></p>
          <?php endif; ?>
        <?php endif; ?>
      </div>
    </div>
  <?php endif; ?>

  <?php if ($this->_tpl_vars['onbehalfProfile'] && count($this->_tpl_vars['onbehalfProfile'])): ?>
    <div class="crm-group onBehalf_display-group label-left crm-profile-view">
      <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/UF/Form/Block.tpl", 'smarty_include_vars' => array('fields' => $this->_tpl_vars['onbehalfProfile'],'prefix' => 'onbehalf')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
    </div>
  <?php endif; ?>

  <?php if ($this->_tpl_vars['honoreeProfileFields'] && count($this->_tpl_vars['honoreeProfileFields'])): ?>
    <div class="crm-group honor_block-group">
      <div class="header-dark">
        <?php echo $this->_tpl_vars['soft_credit_type']; ?>

      </div>
      <div class="display-block">
        <div class="label-left crm-section honoree_profile-section">
          <strong><?php echo $this->_tpl_vars['honorName']; ?>
</strong></br>
          <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/UF/Form/Block.tpl", 'smarty_include_vars' => array('fields' => $this->_tpl_vars['honoreeProfileFields'],'mode' => 8,'prefix' => 'honor')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
        </div>
      </div>
    </div>
  <?php endif; ?>

  <?php if ($this->_tpl_vars['customPre']): ?>
    <fieldset class="label-left crm-profile-view">
      <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/UF/Form/Block.tpl", 'smarty_include_vars' => array('fields' => $this->_tpl_vars['customPre'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
    </fieldset>
  <?php endif; ?>

  <?php if ($this->_tpl_vars['pcpBlock']): ?>
    <div class="crm-group pcp_display-group">
      <div class="header-dark">
        <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Contribution Honor Roll<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
      </div>
      <div class="display-block">
        <?php if ($this->_tpl_vars['pcp_display_in_roll']): ?>
          <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>List my contribution<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
          <?php if ($this->_tpl_vars['pcp_is_anonymous']): ?>
            <strong><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>anonymously<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>.</strong>
          <?php else: ?>
            <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>under the name<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>:
            <strong><?php echo $this->_tpl_vars['pcp_roll_nickname']; ?>
</strong>
            <br/>
            <?php if ($this->_tpl_vars['pcp_personal_note']): ?>
              <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>With the personal note<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>:
              <strong><?php echo $this->_tpl_vars['pcp_personal_note']; ?>
</strong>
            <?php else: ?>
              <strong><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>With no personal note<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></strong>
            <?php endif; ?>
          <?php endif; ?>
        <?php else: ?>
          <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Don't list my contribution in the honor roll.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
        <?php endif; ?>
        <br/>
      </div>
    </div>
  <?php endif; ?>

  <?php if (( $this->_tpl_vars['contributeMode'] != 'notify' && ( ! $this->_tpl_vars['is_pay_later'] || $this->_tpl_vars['isBillingAddressRequiredForPayLater'] ) && $this->_tpl_vars['is_monetary'] && ( $this->_tpl_vars['amount'] > 0 || $this->_tpl_vars['minimum_fee'] > 0 ) ) || $this->_tpl_vars['email']): ?>
    <?php if ($this->_tpl_vars['contributeMode'] != 'notify' && ( ! $this->_tpl_vars['is_pay_later'] || $this->_tpl_vars['isBillingAddressRequiredForPayLater'] ) && $this->_tpl_vars['is_monetary'] && ( $this->_tpl_vars['amount'] > 0 || $this->_tpl_vars['minimum_fee'] > 0 )): ?>
      <?php if ($this->_tpl_vars['billingName'] || $this->_tpl_vars['address']): ?>
        <div class="crm-group billing_name_address-group">
          <div class="header-dark">
            <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Billing Name and Address<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
          </div>
          <div class="crm-section no-label billing_name-section">
            <div class="content"><?php echo $this->_tpl_vars['billingName']; ?>
</div>
            <div class="clear"></div>
          </div>
          <div class="crm-section no-label billing_address-section">
            <div class="content"><?php echo ((is_array($_tmp=$this->_tpl_vars['address'])) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>
</div>
            <div class="clear"></div>
          </div>
        </div>
      <?php endif; ?>
    <?php endif; ?>
    <?php if ($this->_tpl_vars['email']): ?>
      <div class="crm-group contributor_email-group">
        <div class="header-dark">
          <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Your Email<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
        </div>
        <div class="crm-section no-label contributor_email-section">
          <div class="content"><?php echo $this->_tpl_vars['email']; ?>
</div>
          <div class="clear"></div>
        </div>
      </div>
    <?php endif; ?>
  <?php endif; ?>

    <?php if ($this->_tpl_vars['contributeMode'] == 'direct' && ! $this->_tpl_vars['is_pay_later'] && $this->_tpl_vars['is_monetary'] && ( $this->_tpl_vars['amount'] > 0 || $this->_tpl_vars['minimum_fee'] > 0 )): ?>
    <?php $this->_tag_stack[] = array('crmRegion', array('name' => "contribution-confirm-billing-block")); $_block_repeat=true;smarty_block_crmRegion($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
    <?php if (( $this->_tpl_vars['credit_card_number'] || $this->_tpl_vars['bank_account_number'] )): ?>
      <div class="crm-group credit_card-group">
        <?php if ($this->_tpl_vars['paymentFieldsetLabel']): ?>
          <div class="header-dark">
            <?php echo $this->_tpl_vars['paymentFieldsetLabel']; ?>

          </div>
        <?php endif; ?>
        <?php if ($this->_tpl_vars['paymentProcessor']['payment_type'] == 2): ?>
          <div class="display-block">
            <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Account Holder<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>: <?php echo $this->_tpl_vars['account_holder']; ?>
<br/>
            <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Bank Account Number<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>: <?php echo $this->_tpl_vars['bank_account_number']; ?>
<br/>
            <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Bank Identification Number<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>: <?php echo $this->_tpl_vars['bank_identification_number']; ?>
<br/>
            <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Bank Name<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>: <?php echo $this->_tpl_vars['bank_name']; ?>
<br/>
          </div>
          <?php if ($this->_tpl_vars['contributeMode'] == 'direct'): ?>
            <div class="crm-group debit_agreement-group">
              <div class="header-dark">
                <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Agreement<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
              </div>
              <div class="display-block">
                <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Your account data will be used to charge your bank account via direct debit. While submitting this form you agree to the charging of your bank account via direct debit.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
              </div>
            </div>
          <?php endif; ?>
        <?php else: ?>
          <div class="crm-section no-label credit_card_details-section">
            <div class="content"><?php echo $this->_tpl_vars['credit_card_type']; ?>
</div>
            <div class="content"><?php echo $this->_tpl_vars['credit_card_number']; ?>
</div>
            <div class="content"><?php if ($this->_tpl_vars['credit_card_exp_date']): ?><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Expires<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>: <?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['credit_card_exp_date'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 7, '') : smarty_modifier_truncate($_tmp, 7, '')))) ? $this->_run_mod_handler('crmDate', true, $_tmp) : smarty_modifier_crmDate($_tmp)); ?>
<?php endif; ?></div>
            <div class="clear"></div>
          </div>
        <?php endif; ?>
      </div>
    <?php endif; ?>
    <?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_crmRegion($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
  <?php endif; ?>

  <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/Contribute/Form/Contribution/PremiumBlock.tpl", 'smarty_include_vars' => array('context' => 'confirmContribution')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

  <?php if ($this->_tpl_vars['customPost']): ?>
    <fieldset class="label-left crm-profile-view">
      <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/UF/Form/Block.tpl", 'smarty_include_vars' => array('fields' => $this->_tpl_vars['customPost'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
    </fieldset>
  <?php endif; ?>

  <?php if ($this->_tpl_vars['contributeMode'] != 'notify' && $this->_tpl_vars['is_monetary'] && ( $this->_tpl_vars['amount'] > 0 || $this->_tpl_vars['minimum_fee'] > 0 )): ?>     <div class="messages status continue_instructions-section">
      <p>
        <?php if ($this->_tpl_vars['is_pay_later'] || $this->_tpl_vars['amount'] <= 0.0): ?>
          <?php $this->_tag_stack[] = array('ts', array('1' => $this->_tpl_vars['button'])); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Your transaction will not be completed until you click the <strong>%1</strong> button. Please click the button one time only.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
        <?php else: ?>
          <?php $this->_tag_stack[] = array('ts', array('1' => $this->_tpl_vars['button'])); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Your contribution will not be completed until you click the <strong>%1</strong> button. Please click the button one time only.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
        <?php endif; ?>
      </p>
    </div>
  <?php endif; ?>

  <div id="crm-submit-buttons" class="crm-submit-buttons">
    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/common/formButtons.tpl", 'smarty_include_vars' => array('location' => 'bottom')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
  </div>
</div>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>