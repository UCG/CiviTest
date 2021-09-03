<?php /* Smarty version 2.6.31, created on 2021-08-24 17:20:18
         compiled from CRM/Contact/Page/View/Summary-tab.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'crmScope', 'CRM/Contact/Page/View/Summary-tab.tpl', 1, false),array('block', 'crmRegion', 'CRM/Contact/Page/View/Summary-tab.tpl', 20, false),)), $this); ?>
<?php $this->_tag_stack[] = array('crmScope', array('extensionKey' => "")); $_block_repeat=true;smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
<?php if (( isset ( $this->_tpl_vars['hookContentPlacement'] ) && ( $this->_tpl_vars['hookContentPlacement'] != 3 ) ) || empty ( $this->_tpl_vars['hookContentPlacement'] )): ?>

  <?php if (! empty ( $this->_tpl_vars['hookContent'] ) && isset ( $this->_tpl_vars['hookContentPlacement'] ) && $this->_tpl_vars['hookContentPlacement'] == 2): ?>
    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/Contact/Page/View/SummaryHook.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
  <?php endif; ?>

  <div class="contactTopBar contact_panel">
    <div class="contactCardLeft">
      <?php $this->_tag_stack[] = array('crmRegion', array('name' => "contact-basic-info-left")); $_block_repeat=true;smarty_block_crmRegion($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
        <div class="crm-summary-contactinfo-block">
          <div class="crm-summary-block" id="contactinfo-block">
            <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/Contact/Page/Inline/ContactInfo.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
          </div>
        </div>
      <?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_crmRegion($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
    </div>
    <div class="contactCardRight">
      <?php $this->_tag_stack[] = array('crmRegion', array('name' => "contact-basic-info-right")); $_block_repeat=true;smarty_block_crmRegion($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
      <?php if (! empty ( $this->_tpl_vars['imageURL'] )): ?>
        <div id="crm-contact-thumbnail">
          <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/Contact/Page/ContactImage.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
        </div>
      <?php endif; ?>
        <div class="<?php if (! empty ( $this->_tpl_vars['imageURL'] )): ?> float-left<?php endif; ?>">
          <div class="crm-summary-basic-block crm-summary-block">
            <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/Contact/Page/Inline/Basic.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
          </div>
        </div>
      <?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_crmRegion($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
    </div>
  </div>
  <div class="contact_details">
    <div class="contact_panel">
      <div class="contactCardLeft">
        <?php $this->_tag_stack[] = array('crmRegion', array('name' => "contact-details-left")); $_block_repeat=true;smarty_block_crmRegion($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
          <div >
            <?php if ($this->_tpl_vars['showEmail']): ?>
              <div class="crm-summary-email-block crm-summary-block" id="email-block">
                <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/Contact/Page/Inline/Email.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
              </div>
            <?php endif; ?>
            <?php if ($this->_tpl_vars['showWebsite']): ?>
              <div class="crm-summary-website-block crm-summary-block" id="website-block">
                <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/Contact/Page/Inline/Website.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
              </div>
            <?php endif; ?>
          </div>
        <?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_crmRegion($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
      </div><!-- #contactCardLeft -->

      <div class="contactCardRight">
        <?php $this->_tag_stack[] = array('crmRegion', array('name' => "contact-details-right")); $_block_repeat=true;smarty_block_crmRegion($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
          <div>
            <?php if ($this->_tpl_vars['showPhone']): ?>
              <div class="crm-summary-phone-block crm-summary-block" id="phone-block">
                <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/Contact/Page/Inline/Phone.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
              </div>
            <?php endif; ?>
            <?php if ($this->_tpl_vars['showIM']): ?>
              <div class="crm-summary-im-block crm-summary-block" id="im-block">
                <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/Contact/Page/Inline/IM.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
              </div>
            <?php endif; ?>
            <?php if ($this->_tpl_vars['showOpenID']): ?>
              <div class="crm-summary-openid-block crm-summary-block" id="openid-block">
                <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/Contact/Page/Inline/OpenID.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
              </div>
            <?php endif; ?>
          </div>
        <?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_crmRegion($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
      </div><!-- #contactCardRight -->

      <div class="clear"></div>
    </div><!-- #contact_panel -->
    <?php if ($this->_tpl_vars['showAddress']): ?>
      <div class="contact_panel">
        <?php $this->_tag_stack[] = array('crmRegion', array('name' => "contact-addresses")); $_block_repeat=true;smarty_block_crmRegion($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
        <?php $this->assign('locationIndex', 1); ?>
        <?php if ($this->_tpl_vars['address']): ?>
          <?php $_from = $this->_tpl_vars['address']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['locationIndex'] => $this->_tpl_vars['add']):
?>
            <div class="<?php if ((1 & $this->_tpl_vars['locationIndex'])): ?>contactCardLeft<?php else: ?>contactCardRight<?php endif; ?> crm-address_<?php echo $this->_tpl_vars['locationIndex']; ?>
 crm-address-block crm-summary-block">
              <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/Contact/Page/Inline/Address.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
            </div>
          <?php endforeach; endif; unset($_from); ?>
          <?php $this->assign('locationIndex', $this->_tpl_vars['locationIndex']+1); ?>
        <?php endif; ?>
                  <?php if ($this->_tpl_vars['permission'] == 'edit'): ?>
          <?php $this->assign('add', 0); ?>
          <div class="<?php if ((1 & $this->_tpl_vars['locationIndex'])): ?>contactCardLeft<?php else: ?>contactCardRight<?php endif; ?> crm-address-block crm-summary-block">
            <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/Contact/Page/Inline/Address.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
          </div>
        <?php endif; ?>
        <?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_crmRegion($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
      </div> <!-- end of contact panel -->
    <?php endif; ?>
    <div class="contact_panel">
      <?php if ($this->_tpl_vars['showCommunicationPreferences']): ?>
        <div class="contactCardLeft">
          <?php $this->_tag_stack[] = array('crmRegion', array('name' => "contact-comm-pref")); $_block_repeat=true;smarty_block_crmRegion($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
            <div class="crm-summary-comm-pref-block">
              <div class="crm-summary-block" id="communication-pref-block" >
                <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/Contact/Page/Inline/CommunicationPreferences.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
              </div>
            </div>
          <?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_crmRegion($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
        </div> <!-- contactCardLeft -->
      <?php endif; ?>
      <?php if ($this->_tpl_vars['contact_type'] == 'Individual' && $this->_tpl_vars['showDemographics']): ?>
        <div class="contactCardRight">
          <?php $this->_tag_stack[] = array('crmRegion', array('name' => "contact-demographic")); $_block_repeat=true;smarty_block_crmRegion($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
            <div class="crm-summary-demographic-block">
              <div class="crm-summary-block" id="demographic-block">
                <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/Contact/Page/Inline/Demographics.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
              </div>
            </div>
          <?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_crmRegion($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
        </div> <!-- contactCardRight -->
      <?php endif; ?>
      <div class="clear"></div>
      <div class="separator"></div>
    </div> <!-- contact panel -->
  </div><!--contact_details-->

  <?php if ($this->_tpl_vars['showCustomData']): ?>
    <div id="customFields">
      <div class="contact_panel">
        <div class="contactCardLeft">
          <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/Contact/Page/View/CustomDataView.tpl", 'smarty_include_vars' => array('side' => '1')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
        </div><!--contactCardLeft-->
        <div class="contactCardRight">
          <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/Contact/Page/View/CustomDataView.tpl", 'smarty_include_vars' => array('side' => '0')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
        </div>

        <div class="clear"></div>
      </div>
    </div>
  <?php endif; ?>

  <?php if (! empty ( $this->_tpl_vars['hookContent'] ) && isset ( $this->_tpl_vars['hookContentPlacement'] ) && $this->_tpl_vars['hookContentPlacement'] == 1): ?>
    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/Contact/Page/View/SummaryHook.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
  <?php endif; ?>
<?php else: ?>
  <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/Contact/Page/View/SummaryHook.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php endif; ?>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>