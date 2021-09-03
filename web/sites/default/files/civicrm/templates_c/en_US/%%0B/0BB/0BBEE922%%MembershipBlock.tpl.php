<?php /* Smarty version 2.6.31, created on 2021-08-25 21:23:26
         compiled from CRM/Contribute/Form/Contribution/MembershipBlock.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'crmScope', 'CRM/Contribute/Form/Contribution/MembershipBlock.tpl', 1, false),array('block', 'ts', 'CRM/Contribute/Form/Contribution/MembershipBlock.tpl', 41, false),array('modifier', 'date_format', 'CRM/Contribute/Form/Contribution/MembershipBlock.tpl', 40, false),array('modifier', 'crmDate', 'CRM/Contribute/Form/Contribution/MembershipBlock.tpl', 41, false),array('modifier', 'crmMoney', 'CRM/Contribute/Form/Contribution/MembershipBlock.tpl', 170, false),)), $this); ?>
<?php $this->_tag_stack[] = array('crmScope', array('extensionKey' => "")); $_block_repeat=true;smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php if (! empty ( $this->_tpl_vars['useForMember'] ) && ! $this->_tpl_vars['is_quick_config']): ?>
  <div id="membership" class="crm-group membership-group">
    <?php if ($this->_tpl_vars['context'] == 'makeContribution'): ?>
      <div id="priceset">
        <fieldset>
          <?php if ($this->_tpl_vars['renewal_mode']): ?>
            <?php if ($this->_tpl_vars['membershipBlock']['renewal_title']): ?>
              <legend><?php echo $this->_tpl_vars['membershipBlock']['renewal_title']; ?>
</legend>
            <?php endif; ?>
            <?php if ($this->_tpl_vars['membershipBlock']['renewal_text']): ?>
              <div id="membership-intro" class="crm-section membership_renewal_intro-section">
                <?php echo $this->_tpl_vars['membershipBlock']['renewal_text']; ?>

              </div>
            <?php endif; ?>
          <?php else: ?>
            <?php if ($this->_tpl_vars['membershipBlock']['new_title']): ?>
              <legend><?php echo $this->_tpl_vars['membershipBlock']['new_title']; ?>
</legend>
            <?php endif; ?>
            <?php if ($this->_tpl_vars['membershipBlock']['new_text']): ?>
              <div id="membership-intro" class="crm-section membership_new_intro-section">
                <?php echo $this->_tpl_vars['membershipBlock']['new_text']; ?>

              </div>
            <?php endif; ?>
          <?php endif; ?>
          <?php if (! empty ( $this->_tpl_vars['membershipTypes'] )): ?>
            <?php $_from = $this->_tpl_vars['membershipTypes']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['row']):
?>
              <?php if (array_key_exists ( 'current_membership' , $this->_tpl_vars['row'] )): ?>
                <div id='help'>
                                    <?php if ($this->_tpl_vars['row']['current_membership']): ?>
                    <?php if (((is_array($_tmp=$this->_tpl_vars['row']['current_membership'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y%m%d") : smarty_modifier_date_format($_tmp, "%Y%m%d")) < ((is_array($_tmp=time())) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y%m%d") : smarty_modifier_date_format($_tmp, "%Y%m%d"))): ?>
                      <?php $this->_tag_stack[] = array('ts', array('1' => ((is_array($_tmp=$this->_tpl_vars['row']['current_membership'])) ? $this->_run_mod_handler('crmDate', true, $_tmp) : smarty_modifier_crmDate($_tmp)),'2' => $this->_tpl_vars['row']['name'])); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Your <strong>%2</strong> membership expired on %1.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><br />
                    <?php else: ?>
                      <?php $this->_tag_stack[] = array('ts', array('1' => ((is_array($_tmp=$this->_tpl_vars['row']['current_membership'])) ? $this->_run_mod_handler('crmDate', true, $_tmp) : smarty_modifier_crmDate($_tmp)),'2' => $this->_tpl_vars['row']['name'])); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Your <strong>%2</strong> membership expires on %1.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><br />
                    <?php endif; ?>
                  <?php else: ?>
                    <?php $this->_tag_stack[] = array('ts', array('1' => $this->_tpl_vars['row']['name'])); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Your <strong>%1</strong> membership does not expire (you do not need to renew that membership).<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><br />
                  <?php endif; ?>
                </div>
              <?php endif; ?>
            <?php endforeach; endif; unset($_from); ?>
          <?php endif; ?>

          <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/Price/Form/PriceSet.tpl", 'smarty_include_vars' => array('extends' => 'Membership')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
        </fieldset>
      </div>
    <?php elseif ($this->_tpl_vars['lineItem'] && $this->_tpl_vars['priceSetID'] && ! $this->_tpl_vars['is_quick_config']): ?>
      <?php $this->assign('totalAmount', $this->_tpl_vars['amount']); ?>
      <div class="header-dark">
        <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Membership Fee<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
      </div>
      <div class="display-block">
        <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/Price/Page/LineItem.tpl", 'smarty_include_vars' => array('context' => 'Membership')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
      </div>
    <?php endif; ?>
  </div>
<?php echo '
  <script type="text/javascript">
    CRM.$(function($) {
      //if price set is set we use below below code to show for showing auto renew
      var autoRenewOption =  '; ?>
'<?php echo $this->_tpl_vars['autoRenewOption']; ?>
'<?php echo ';
      var autoRenew = $("#auto_renew_section");
      var autoRenewCheckbox = $("#auto_renew");
      var forceRenew = $("#force_renew");
      autoRenew.hide();
      forceRenew.hide();
      if ( autoRenewOption == 1 ) {
        autoRenew.show();
      } else if ( autoRenewOption == 2 ) {
        autoRenewCheckbox.prop(\'checked\',  true );
        autoRenewCheckbox.attr( \'readonly\', true );
        autoRenew.hide();
        forceRenew.show();
      }
    });
  </script>
'; ?>

<?php elseif ($this->_tpl_vars['membershipBlock'] && ! $this->_tpl_vars['is_quick_config']): ?>
  <div id="membership" class="crm-group membership-group">
    <?php if ($this->_tpl_vars['context'] == 'makeContribution'): ?>
    <fieldset>
      <?php if ($this->_tpl_vars['renewal_mode']): ?>
        <?php if ($this->_tpl_vars['membershipBlock']['renewal_title']): ?>
          <legend><?php echo $this->_tpl_vars['membershipBlock']['renewal_title']; ?>
</legend>
        <?php endif; ?>
        <?php if ($this->_tpl_vars['membershipBlock']['renewal_text']): ?>
          <div id="membership-intro" class="crm-section membership_renewal_intro-section">
            <p><?php echo $this->_tpl_vars['membershipBlock']['renewal_text']; ?>
</p>
          </div>
        <?php endif; ?>

      <?php else: ?>
        <?php if ($this->_tpl_vars['membershipBlock']['new_title']): ?>
          <legend><?php echo $this->_tpl_vars['membershipBlock']['new_title']; ?>
</legend>
        <?php endif; ?>
        <?php if ($this->_tpl_vars['membershipBlock']['new_text']): ?>
          <div id="membership-intro" class="crm-section membership_new_intro-section">
            <p><?php echo $this->_tpl_vars['membershipBlock']['new_text']; ?>
</p>
          </div>
        <?php endif; ?>
      <?php endif; ?>
      <?php endif; ?>
      <?php if ($this->_tpl_vars['context'] != 'makeContribution'): ?>
        <div class="header-dark">
          <?php if ($this->_tpl_vars['renewal_mode']): ?>
            <?php if ($this->_tpl_vars['membershipBlock']['renewal_title']): ?>
              <?php echo $this->_tpl_vars['membershipBlock']['renewal_title']; ?>

            <?php else: ?>
              <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Select a Membership Renewal Level<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
            <?php endif; ?>

          <?php else: ?>
            <?php if ($this->_tpl_vars['membershipBlock']['new_title']): ?>
              <?php echo $this->_tpl_vars['membershipBlock']['new_title']; ?>

            <?php else: ?>
              <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Select a Membership Level<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
            <?php endif; ?>
          <?php endif; ?>
        </div>
      <?php endif; ?>

      <?php if ($this->_tpl_vars['context'] == 'makeContribution'): ?>
    </fieldset>
    <?php endif; ?>
  </div>

<?php endif; ?>
<?php if ($this->_tpl_vars['membershipBlock'] && $this->_tpl_vars['is_quick_config']): ?>
  <?php if ($this->_tpl_vars['context'] != 'makeContribution'): ?>
    <div class="header-dark">
      <?php if ($this->_tpl_vars['renewal_mode']): ?>
        <?php if ($this->_tpl_vars['membershipBlock']['renewal_title']): ?>
          <?php echo $this->_tpl_vars['membershipBlock']['renewal_title']; ?>

        <?php else: ?>
          <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Select a Membership Renewal Level<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
        <?php endif; ?>
      <?php else: ?>
        <?php if ($this->_tpl_vars['membershipBlock']['new_title']): ?>
          <?php echo $this->_tpl_vars['membershipBlock']['new_title']; ?>

        <?php else: ?>
          <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Select a Membership Level<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
        <?php endif; ?>
      <?php endif; ?>
    </div>
  <?php endif; ?>
  <?php echo '<table id="membership-listings">'; ?><?php $_from = $this->_tpl_vars['membershipTypes']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['row']):
?><?php echo '<tr '; ?><?php if ($this->_tpl_vars['context'] == 'makeContribution'): ?><?php echo 'class="odd-row" '; ?><?php endif; ?><?php echo 'valign="top">'; ?><?php if ($this->_tpl_vars['showRadio']): ?><?php echo ''; ?><?php $this->assign('pid', $this->_tpl_vars['row']['id']); ?><?php echo '<td style="width: 1em;">'; ?><?php echo $this->_tpl_vars['form']['selectMembership'][$this->_tpl_vars['pid']]['html']; ?><?php echo '</td>'; ?><?php else: ?><?php echo '<td>&nbsp;</td>'; ?><?php endif; ?><?php echo '<td style="width: auto;"><span class="bold">'; ?><?php echo $this->_tpl_vars['row']['name']; ?><?php echo ' &nbsp;'; ?><?php if (( $this->_tpl_vars['membershipBlock']['display_min_fee'] && $this->_tpl_vars['context'] == 'makeContribution' ) && $this->_tpl_vars['row']['minimum_fee'] > 0): ?><?php echo ''; ?><?php if ($this->_tpl_vars['is_separate_payment'] || ! $this->_tpl_vars['form']['amount']['label']): ?><?php echo '&ndash; '; ?><?php echo ((is_array($_tmp=$this->_tpl_vars['row']['minimum_fee'])) ? $this->_run_mod_handler('crmMoney', true, $_tmp) : smarty_modifier_crmMoney($_tmp)); ?><?php echo ''; ?><?php else: ?><?php echo ''; ?><?php $this->_tag_stack[] = array('ts', array('1' => ((is_array($_tmp=$this->_tpl_vars['row']['minimum_fee'])) ? $this->_run_mod_handler('crmMoney', true, $_tmp) : smarty_modifier_crmMoney($_tmp)))); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php echo '(contribute at least %1 to be eligible for this membership)'; ?><?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php echo ''; ?><?php endif; ?><?php echo ''; ?><?php endif; ?><?php echo '</span><br />'; ?><?php echo $this->_tpl_vars['row']['description']; ?><?php echo ' &nbsp;</td><td style="width: auto;">'; ?><?php echo ''; ?><?php if (array_key_exists ( 'current_membership' , $this->_tpl_vars['row'] ) && $this->_tpl_vars['context'] == 'makeContribution'): ?><?php echo ''; ?><?php if ($this->_tpl_vars['row']['current_membership']): ?><?php echo ''; ?><?php if (((is_array($_tmp=$this->_tpl_vars['row']['current_membership'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y%m%d") : smarty_modifier_date_format($_tmp, "%Y%m%d")) < ((is_array($_tmp=time())) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y%m%d") : smarty_modifier_date_format($_tmp, "%Y%m%d"))): ?><?php echo '<br /><em>'; ?><?php $this->_tag_stack[] = array('ts', array('1' => ((is_array($_tmp=$this->_tpl_vars['row']['current_membership'])) ? $this->_run_mod_handler('crmDate', true, $_tmp) : smarty_modifier_crmDate($_tmp)),'2' => $this->_tpl_vars['row']['name'])); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php echo 'Your <strong>%2</strong> membership expired on %1.'; ?><?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php echo '</em>'; ?><?php else: ?><?php echo '<br /><em>'; ?><?php $this->_tag_stack[] = array('ts', array('1' => ((is_array($_tmp=$this->_tpl_vars['row']['current_membership'])) ? $this->_run_mod_handler('crmDate', true, $_tmp) : smarty_modifier_crmDate($_tmp)),'2' => $this->_tpl_vars['row']['name'])); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php echo 'Your <strong>%2</strong> membership expires on %1.'; ?><?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php echo '</em>'; ?><?php endif; ?><?php echo ''; ?><?php else: ?><?php echo ''; ?><?php $this->_tag_stack[] = array('ts', array('1' => $this->_tpl_vars['row']['name'])); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php echo 'Your <strong>%1</strong> membership does not expire (you do not need to renew that membership).'; ?><?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php echo '<br />'; ?><?php endif; ?><?php echo ''; ?><?php else: ?><?php echo '&nbsp;'; ?><?php endif; ?><?php echo '</td></tr>'; ?><?php endforeach; endif; unset($_from); ?><?php echo ''; ?><?php if (isset ( $this->_tpl_vars['form']['auto_renew'] )): ?><?php echo '<tr id="allow_auto_renew"><td style="width: auto;">'; ?><?php echo $this->_tpl_vars['form']['auto_renew']['html']; ?><?php echo '</td><td style="width: auto;">'; ?><?php echo $this->_tpl_vars['form']['auto_renew']['label']; ?><?php echo '</td></tr>'; ?><?php endif; ?><?php echo ''; ?><?php if ($this->_tpl_vars['showRadio']): ?><?php echo ''; ?><?php if ($this->_tpl_vars['showRadioNoThanks']): ?><?php echo ' '; ?><?php echo '<tr class="odd-row"><td>'; ?><?php echo $this->_tpl_vars['form']['selectMembership']['no_thanks']['html']; ?><?php echo '</td><td colspan="2"><strong>'; ?><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php echo 'No thank you'; ?><?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php echo '</strong></td></tr>'; ?><?php endif; ?><?php echo ''; ?><?php endif; ?><?php echo '</table>'; ?>

<?php endif; ?>
<?php if ($this->_tpl_vars['membershipBlock']): ?>
<?php echo '
  <script type="text/javascript">
    CRM.$(function($) {
      showHideAutoRenew( null );
    });
    function showHideAutoRenew( memTypeId )
    {
      var priceSetName = "price_"+'; ?>
'<?php echo $this->_tpl_vars['membershipFieldID']; ?>
'<?php echo ';
      var considerUserInput = '; ?>
'<?php echo $this->_tpl_vars['takeUserSubmittedAutoRenew']; ?>
'<?php echo ';
      if ( memTypeId ) considerUserInput = false;
      if ( !memTypeId ) memTypeId = cj(\'input:radio[name=\'+priceSetName+\']:checked\').attr(\'membership-type\');

      //does this page has only one membership type.
      var singleMembership = '; ?>
'<?php echo $this->_tpl_vars['singleMembership']; ?>
'<?php echo ';
      if ( !memTypeId && singleMembership ) memTypeId = cj("input:radio[name="+priceSetName+"]").attr(\'membership-type\');
      var renewOptions  = '; ?>
<?php echo $this->_tpl_vars['autoRenewMembershipTypeOptions']; ?>
<?php echo ';
      var currentOption = eval( "renewOptions." + \'autoRenewMembershipType_\' + memTypeId );
      var autoRenew = cj(\'#auto_renew_section\');
      var autoRenewC = cj(\'input[name="auto_renew"]\');
      var forceRenew = cj("#force_renew");

      var readOnly = false;
      var isChecked  = false;
      if ( currentOption == 0 ) {
        isChecked = false;
        forceRenew.hide();
        autoRenew.hide();
      }
      if ( currentOption == 1 ) {
        forceRenew.hide();
        autoRenew.show();

        //uncomment me, if we\'d like
        //to load auto_renew checked.
        //isChecked = true;
      } else if ( currentOption == 2 || currentOption == 4) {
        autoRenew.hide();
        forceRenew.show();
        isChecked = readOnly = true;
      }

      if ( considerUserInput ) isChecked = autoRenew.prop(\'checked\' );

      //its a normal recur contribution.
      if ( cj( "is_recur" ) &&
        ( cj( \'input:radio[name="is_recur"]:checked\').val() == 1 ) ) {
        isChecked = false;
        autoRenew.hide();
        forceRenew.hide();
      }

      autoRenewC.attr( \'readonly\', readOnly );
      autoRenewC.prop(\'checked\',  isChecked );
    }

    '; ?>
<?php if ($this->_tpl_vars['allowAutoRenewMembership']): ?><?php echo '
    CRM.$(function($) {
      //keep read only always checked.
      cj( "#auto_renew" ).click(function( ) {
        if ( cj(this).attr( \'readonly\' ) ) {
          cj(this).prop(\'checked\', true );
        }
      });
    });
    '; ?>
<?php endif; ?><?php echo '
  </script>
'; ?>

<?php endif; ?>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>