<?php /* Smarty version 2.6.31, created on 2021-08-25 21:11:02
         compiled from CRM/Contribute/Form/ContributionPage/Premium.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'crmScope', 'CRM/Contribute/Form/ContributionPage/Premium.tpl', 1, false),array('block', 'crmRegion', 'CRM/Contribute/Form/ContributionPage/Premium.tpl', 10, false),array('block', 'ts', 'CRM/Contribute/Form/ContributionPage/Premium.tpl', 12, false),)), $this); ?>
<?php $this->_tag_stack[] = array('crmScope', array('extensionKey' => "")); $_block_repeat=true;smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php $this->_tag_stack[] = array('crmRegion', array('name' => "contribute-form-contributionpage-premium-main")); $_block_repeat=true;smarty_block_crmRegion($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
<div class="help">
  <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Edit <strong>Premiums Settings</strong> to customize the title and introductory message (e.g ...in appreciation of your support, you will be able to select from a number of exciting thank-you gifts...). You can optionally provide a contact email address and/or phone number for inquiries.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
  <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Then select and review the premiums that you want to offer on this contribution page.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
</div>
<div id="id_Premiums" class="crm-block crm-form-block crm-contribution-contributionpage-premium-form-block">
  <div class="crm-submit-buttons"><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/common/formButtons.tpl", 'smarty_include_vars' => array('location' => 'top')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></div>
  <table class="form-layout-compressed">
    <tr class="crm-contribution-contributionpage-premium-form-block-premiums_active">
      <td class="label"><?php echo $this->_tpl_vars['form']['premiums_active']['label']; ?>
</td>
      <td class="html-adjust"><?php echo $this->_tpl_vars['form']['premiums_active']['html']; ?>
<br/>
        <span class="description"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Is the Premiums section enabled for this Online Contributions page?<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></span>
      </td>
    </tr>
  </table>

  <div id="premiumSettings">
    <div class="crm-accordion-wrapper crm-premium-settings-accordion collapsed">
      <div class="crm-accordion-header">
        <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Premiums Settings<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
      </div>
      <div class="crm-accordion-body">
        <table class="form-layout-compressed">
          <tr class="crm-contribution-contributionpage-premium-form-block-premiums_intro_title">
            <td class="label">
              <?php echo $this->_tpl_vars['form']['premiums_intro_title']['label']; ?>

              <?php if ($this->_tpl_vars['action'] == 2): ?>
                <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'CRM/Core/I18n/Dialog.tpl', 'smarty_include_vars' => array('table' => 'civicrm_premiums','field' => 'premiums_intro_title','id' => $this->_tpl_vars['contributionPageID'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
              <?php endif; ?>
            </td>
            <td class="html-adjust"><?php echo $this->_tpl_vars['form']['premiums_intro_title']['html']; ?>
<br/>
              <span class="description"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Title to appear at the top of the Premiums section.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></span>
            </td>
          </tr>
          <tr class="crm-contribution-contributionpage-premium-form-block-premiums_intro_text">
            <td class="label">
              <?php echo $this->_tpl_vars['form']['premiums_intro_text']['label']; ?>

              <?php if ($this->_tpl_vars['action'] == 2): ?>
                <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'CRM/Core/I18n/Dialog.tpl', 'smarty_include_vars' => array('table' => 'civicrm_premiums','field' => 'premiums_intro_text','id' => $this->_tpl_vars['contributionPageID'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
              <?php endif; ?>
            </td>
            <td class="html-adjust"><?php echo $this->_tpl_vars['form']['premiums_intro_text']['html']; ?>
<br/>
            <span class="description">
              <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Enter content for the introductory message. This will be displayed below the Premiums section title. You may include HTML formatting tags. You can also include images, as long as they are already uploaded to a server&mdash;reference them using complete URLs.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
            </span>
            </td>
          </tr>
          <tr class="crm-contribution-contributionpage-premium-form-block-premiums_contact_email">
            <td class="label">
              <?php echo $this->_tpl_vars['form']['premiums_contact_email']['label']; ?>

            </td>
            <td class="html-adjust"><?php echo $this->_tpl_vars['form']['premiums_contact_email']['html']; ?>
<br/>
            <span class="description">
              <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>This email address is included in automated contribution receipts if the contributor has selected a premium. It should be an appropriate contact mailbox for inquiries about premium fulfillment/shipping.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
            </span>
            </td>
          </tr>
          <tr class="crm-contribution-contributionpage-premium-form-block-premiums_contact_phone">
            <td class="label">
              <?php echo $this->_tpl_vars['form']['premiums_contact_phone']['label']; ?>

            </td>
            <td class="html-adjust"><?php echo $this->_tpl_vars['form']['premiums_contact_phone']['html']; ?>
<br/>
            <span class="description">
              <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>This phone number is included in automated contribution receipts if the contributor has selected a premium. It should be an appropriate phone number for inquiries about premium fulfillment/shipping.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
            </span>
            </td>
          </tr>
          <tr class="crm-contribution-contributionpage-premium-form-block-premiums_display_min_contribution">
            <td class="label">
              <?php echo $this->_tpl_vars['form']['premiums_display_min_contribution']['label']; ?>

            </td>
            <td class="html-adjust"><?php echo $this->_tpl_vars['form']['premiums_display_min_contribution']['html']; ?>
<br/>
            <span class="description">
              <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Should the minimum contribution amount be automatically displayed after each premium description?<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
            </span>
            </td>
          </tr>
          <tr class="crm-contribution-contributionpage-premium-form-block-premiums_nothankyou_label">
            <td class="label">
              <?php echo $this->_tpl_vars['form']['premiums_nothankyou_label']['label']; ?>
<span class="crm-marker"> *</span>
            </td>
            <td class="html-adjust"><?php echo $this->_tpl_vars['form']['premiums_nothankyou_label']['html']; ?>
<br/>
              <span class="description"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>You can change the text for the 'No thank-you' radio button.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></span>
            </td>
          </tr>
          <tr class="crm-contribution-contributionpage-premium-form-block-premiums_nothankyou_position">
            <td class="label">
              <?php echo $this->_tpl_vars['form']['premiums_nothankyou_position']['label']; ?>

            </td>
            <td class="html-adjust"><?php echo $this->_tpl_vars['form']['premiums_nothankyou_position']['html']; ?>
<br/>
            <span class="description">
              <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Place the 'No thank-you' radio button before OR after the list of premiums offered on this page.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
            </span>
            </td>
          </tr>
        </table>
      </div>
      <!-- /.crm-accordion-body -->
    </div>
    <!-- /.crm-accordion-wrapper -->

        <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/Contribute/Page/Premium.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
  </div>

  <div class="crm-submit-buttons"><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/common/formButtons.tpl", 'smarty_include_vars' => array('location' => 'bottom')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></div>
</div>

<script type="text/javascript">
  <?php echo '
  CRM.$(function($) {

    // bind click event to premiums_active checkbox
    $(\'#premiums_active\').click(function () {
      premiumBlock();
    });

    // hide premium setting if premium block is not enabled
    if (!$(\'#premiums_active\').prop(\'checked\')) {
      $(\'#premiumSettings\').hide();
    }
  });

  // function to show/hide premium settings
  function premiumBlock() {
    if (cj(\'#premiums_active\').prop(\'checked\')) {
      cj(\'#premiumSettings\').show();
    }
    else {
      cj(\'#premiumSettings\').hide();
    }
    return false;
  }

  '; ?>

</script>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_crmRegion($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
<?php $this->_tag_stack[] = array('crmRegion', array('name' => "contribute-form-contributionpage-premium-post")); $_block_repeat=true;smarty_block_crmRegion($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_crmRegion($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>