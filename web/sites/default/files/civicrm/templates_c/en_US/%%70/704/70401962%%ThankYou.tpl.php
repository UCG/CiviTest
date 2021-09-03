<?php /* Smarty version 2.6.31, created on 2021-08-25 21:10:09
         compiled from CRM/Contribute/Form/ContributionPage/ThankYou.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'crmScope', 'CRM/Contribute/Form/ContributionPage/ThankYou.tpl', 1, false),array('block', 'crmRegion', 'CRM/Contribute/Form/ContributionPage/ThankYou.tpl', 10, false),array('block', 'ts', 'CRM/Contribute/Form/ContributionPage/ThankYou.tpl', 13, false),array('function', 'help', 'CRM/Contribute/Form/ContributionPage/ThankYou.tpl', 13, false),)), $this); ?>
<?php $this->_tag_stack[] = array('crmScope', array('extensionKey' => "")); $_block_repeat=true;smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php $this->_tag_stack[] = array('crmRegion', array('name' => "contribute-form-contributionpage-thankyou-main")); $_block_repeat=true;smarty_block_crmRegion($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
<div class="crm-block crm-form-block crm-contribution-contributionpage-thankyou-form-block">
<div class="help">
    <p><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Use this form to configure the thank-you message and receipting options.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?> <?php echo smarty_function_help(array('id' => 'id_thank'), $this);?>
</p>
</div>
    <div class="crm-submit-buttons"><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/common/formButtons.tpl", 'smarty_include_vars' => array('location' => 'top')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></div>
    <table class="form-layout">
    <tr class="crm-contribution-contributionpage-thankyou-form-block-thankyou_title">
       <td class="label"><?php echo $this->_tpl_vars['form']['thankyou_title']['label']; ?>
<?php if ($this->_tpl_vars['action'] == 2): ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'CRM/Core/I18n/Dialog.tpl', 'smarty_include_vars' => array('table' => 'civicrm_contribution_page','field' => 'thankyou_title','id' => $this->_tpl_vars['contributionPageID'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php endif; ?> <?php echo smarty_function_help(array('id' => "id_thankyou-title"), $this);?>
</td>
       <td class="html-adjust"><?php echo $this->_tpl_vars['form']['thankyou_title']['html']; ?>

       </td>
    </tr>
    <tr class="crm-contribution-contributionpage-thankyou-form-block-thankyou_text">
       <td class="label"><?php echo $this->_tpl_vars['form']['thankyou_text']['label']; ?>
<?php if ($this->_tpl_vars['action'] == 2): ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'CRM/Core/I18n/Dialog.tpl', 'smarty_include_vars' => array('table' => 'civicrm_contribution_page','field' => 'thankyou_text','id' => $this->_tpl_vars['contributionPageID'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php endif; ?><br /><?php echo smarty_function_help(array('id' => "id_thankyou-text"), $this);?>
</td>
       <td class="html-adjust"><?php echo $this->_tpl_vars['form']['thankyou_text']['html']; ?>
<br /></td>
    </tr>
    <tr class="crm-contribution-contributionpage-thankyou-form-block-thankyou_footer">
       <td class="label"><?php echo $this->_tpl_vars['form']['thankyou_footer']['label']; ?>
<?php if ($this->_tpl_vars['action'] == 2): ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'CRM/Core/I18n/Dialog.tpl', 'smarty_include_vars' => array('table' => 'civicrm_contribution_page','field' => 'thankyou_footer','id' => $this->_tpl_vars['contributionPageID'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php endif; ?> <?php echo smarty_function_help(array('id' => "id_footer-text"), $this);?>
</td>
       <td class="html-adjust"><?php echo $this->_tpl_vars['form']['thankyou_footer']['html']; ?>
<br /></td>
    </tr>
    <tr class="crm-contribution-contributionpage-thankyou-form-block-is_email_receipt">
       <td class="label"></td>
       <td class="html-adjust"><?php echo $this->_tpl_vars['form']['is_email_receipt']['html']; ?>
<?php echo $this->_tpl_vars['form']['is_email_receipt']['label']; ?>
 <?php echo smarty_function_help(array('id' => "id_is-email-receipt"), $this);?>

       </td>
    </tr>
    </table>
    <table id="receiptDetails" class="form-layout">
    <tr class="crm-contribution-contributionpage-thankyou-form-block-receipt_from_name">
      <td class="label"><?php echo $this->_tpl_vars['form']['receipt_from_name']['label']; ?>
<?php if ($this->_tpl_vars['action'] == 2): ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'CRM/Core/I18n/Dialog.tpl', 'smarty_include_vars' => array('table' => 'civicrm_contribution_page','field' => 'receipt_from_name','id' => $this->_tpl_vars['contributionPageID'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php endif; ?> <?php echo smarty_function_help(array('id' => "id_receipt-from-name"), $this);?>

      </td>
      <td class="html-adjust"><?php echo $this->_tpl_vars['form']['receipt_from_name']['html']; ?>

  </td>
    </tr>
    <tr class="crm-contribution-contributionpage-thankyou-form-block-receipt_from_email">
      <td class="label"><?php echo $this->_tpl_vars['form']['receipt_from_email']['label']; ?>
 <span class="crm-marker" title="<?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>This field is required.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>">*</span> <?php echo smarty_function_help(array('id' => "id_receipt-from-email"), $this);?>
</td>
      <td class="html-adjust"><?php echo $this->_tpl_vars['form']['receipt_from_email']['html']; ?>
</td>
    </tr>
    <tr class="crm-contribution-contributionpage-thankyou-form-block-receipt_text">
      <td class="label"><?php echo $this->_tpl_vars['form']['receipt_text']['label']; ?>
<?php if ($this->_tpl_vars['action'] == 2): ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'CRM/Core/I18n/Dialog.tpl', 'smarty_include_vars' => array('table' => 'civicrm_contribution_page','field' => 'receipt_text','id' => $this->_tpl_vars['contributionPageID'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php endif; ?>  <?php echo smarty_function_help(array('id' => "id_receipt-text"), $this);?>
</td>
      <td class="html-adjust"><?php echo $this->_tpl_vars['form']['receipt_text']['html']; ?>
<br /></td>
    </tr>
    <tr class="crm-contribution-contributionpage-thankyou-form-block-cc_receipt">
      <td class="label"><?php echo $this->_tpl_vars['form']['cc_receipt']['label']; ?>
 <?php echo smarty_function_help(array('id' => "id_receipt-cc"), $this);?>
</td>
      <td class="html-adjust"><?php echo $this->_tpl_vars['form']['cc_receipt']['html']; ?>
</td>
    </tr>
    <tr class="crm-contribution-contributionpage-thankyou-form-block-bcc_receipt">
      <td class="label"><?php echo $this->_tpl_vars['form']['bcc_receipt']['label']; ?>
 <?php echo smarty_function_help(array('id' => "id_receipt-bcc"), $this);?>
</td>
      <td class="html-adjust"><?php echo $this->_tpl_vars['form']['bcc_receipt']['html']; ?>
</td>
    </tr>
    </table>
    <div class="crm-submit-buttons"><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/common/formButtons.tpl", 'smarty_include_vars' => array('location' => 'bottom')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></div>
</div>

<script type="text/javascript">
 showReceipt();
 <?php echo '
     function showReceipt() {
        var checkbox = document.getElementsByName("is_email_receipt");
        if (checkbox[0].checked) {
            document.getElementById("receiptDetails").style.display = "block";
        } else {
            document.getElementById("receiptDetails").style.display = "none";
        }
     }
 '; ?>

</script>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_crmRegion($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
<?php $this->_tag_stack[] = array('crmRegion', array('name' => "contribute-form-contributionpage-thankyou-post")); $_block_repeat=true;smarty_block_crmRegion($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_crmRegion($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>