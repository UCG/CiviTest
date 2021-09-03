<?php /* Smarty version 2.6.31, created on 2021-08-25 21:24:41
         compiled from CRM/Contribute/Form/ManagePremiums.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'crmScope', 'CRM/Contribute/Form/ManagePremiums.tpl', 1, false),array('block', 'icon', 'CRM/Contribute/Form/ManagePremiums.tpl', 14, false),array('block', 'ts', 'CRM/Contribute/Form/ManagePremiums.tpl', 15, false),array('block', 'crmRegion', 'CRM/Contribute/Form/ManagePremiums.tpl', 21, false),array('modifier', 'crmAddClass', 'CRM/Contribute/Form/ManagePremiums.tpl', 54, false),array('function', 'crmURL', 'CRM/Contribute/Form/ManagePremiums.tpl', 87, false),)), $this); ?>
<?php $this->_tag_stack[] = array('crmScope', array('extensionKey' => "")); $_block_repeat=true;smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><div class="crm-block crm-form-block crm-contribution-manage_premiums-form-block">
   <?php if ($this->_tpl_vars['action'] == 8): ?>
      <div class="messages status no-popup">
          <?php $this->_tag_stack[] = array('icon', array('icon' => "fa-info-circle")); $_block_repeat=true;smarty_block_icon($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_icon($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
          <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Are you sure you want to delete this premium?<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?> <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>This action cannot be undone.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?> <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>This will also remove the premium from any contribution pages that currently include it.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
      </div>
  <?php elseif ($this->_tpl_vars['action'] == 1024): ?>
     <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/Contribute/Form/Contribution/PremiumBlock.tpl", 'smarty_include_vars' => array('context' => 'previewPremium')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
  <?php else: ?>
     <div class="crm-submit-buttons"><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/common/formButtons.tpl", 'smarty_include_vars' => array('location' => 'top')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></div>
  <?php $this->_tag_stack[] = array('crmRegion', array('name' => "contribute-form-managepremiums-standard-fields")); $_block_repeat=true;smarty_block_crmRegion($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
  <table class="form-layout-compressed">
     <tr class="crm-contribution-form-block-name">
  <td class="label"><?php echo $this->_tpl_vars['form']['name']['label']; ?>
 <?php if ($this->_tpl_vars['action'] == 2): ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'CRM/Core/I18n/Dialog.tpl', 'smarty_include_vars' => array('table' => 'civicrm_product','field' => 'name','id' => $this->_tpl_vars['productId'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php endif; ?>
  </td>
  <td class="html-adjust"><?php echo $this->_tpl_vars['form']['name']['html']; ?>
<br />
     <span class="description"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Name of the premium (product, service, subscription, etc.) as it will be displayed to contributors.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></span>
  </td>
     </tr>
     <tr>
        <td class="label"><?php echo $this->_tpl_vars['form']['description']['label']; ?>
 <?php if ($this->_tpl_vars['action'] == 2): ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'CRM/Core/I18n/Dialog.tpl', 'smarty_include_vars' => array('table' => 'civicrm_product','field' => 'description','id' => $this->_tpl_vars['productId'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php endif; ?>
  </td>
  <td class="html-adjust"><?php echo $this->_tpl_vars['form']['description']['html']; ?>

  </td>
     <tr class="crm-contribution-form-block-sku">
        <td class="label"><?php echo $this->_tpl_vars['form']['sku']['label']; ?>

  </td>
  <td class="html-adjust"><?php echo $this->_tpl_vars['form']['sku']['html']; ?>
<br />
     <span class="description"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Optional product SKU or code. If used, this value will be included in contributor receipts.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></span>
  </td>
     </tr>
     <tr class="crm-contribution-form-block-imageOption" >
        <td class="label"><?php echo $this->_tpl_vars['form']['imageOption']['label']; ?>
</td>
      <td>
      <fieldset><div class="description">
        <p><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>You can give this premium a picture that will be displayed on the contribution page. Both a 50 x 50 pixel thumbnail image and a 200 x 200 pixel larger image will be displayed. Images must be in GIF, JPEG, or PNG format.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></p>
        <p><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>You can upload an image from your computer OR enter a URL for an image already on the Web. If you chose to upload an image file, a 'thumbnail' version will be automatically created for you. If you don't have an image available at this time, you may also choose to display a 'No Image Available' icon by selecting the 'default image'.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></p>
                  </div>
  <table class="form-layout-compressed">
    <?php if (! empty ( $this->_tpl_vars['thumbnailUrl'] )): ?><tr class="odd-row"><td class="describe-image" colspan="2"><strong>Current Image Thumbnail</strong><br /><img src="<?php echo $this->_tpl_vars['thumbnailUrl']; ?>
" /></td></tr><?php endif; ?>
    <tr class="crm-contribution-form-block-imageOption"><td><?php echo $this->_tpl_vars['form']['imageOption']['image']['html']; ?>
</td><td><?php echo $this->_tpl_vars['form']['uploadFile']['html']; ?>
</td></tr>
  <tr class="crm-contribution-form-block-imageOption-thumbnail"><td colspan="2"><?php echo $this->_tpl_vars['form']['imageOption']['thumbnail']['html']; ?>
</td></tr>
    <tr id="imageURL"<?php if ($this->_tpl_vars['action'] != 2): ?> class="hiddenElement"<?php endif; ?>>
        <td class="label"><?php echo $this->_tpl_vars['form']['imageUrl']['label']; ?>
</td><td><?php echo ((is_array($_tmp=$this->_tpl_vars['form']['imageUrl']['html'])) ? $this->_run_mod_handler('crmAddClass', true, $_tmp, 'huge') : smarty_modifier_crmAddClass($_tmp, 'huge')); ?>
</td>
    </tr>
    <tr id="thumbnailURL"<?php if ($this->_tpl_vars['action'] != 2): ?> class="hiddenElement"<?php endif; ?>>
        <td class="label"><?php echo $this->_tpl_vars['form']['thumbnailUrl']['label']; ?>
</td><td><?php echo ((is_array($_tmp=$this->_tpl_vars['form']['thumbnailUrl']['html'])) ? $this->_run_mod_handler('crmAddClass', true, $_tmp, 'huge') : smarty_modifier_crmAddClass($_tmp, 'huge')); ?>
</td>
    </tr>
  <tr><td colspan="2"><?php echo $this->_tpl_vars['form']['imageOption']['default_image']['html']; ?>
</td></tr>
  <tr><td colspan="2"><?php echo $this->_tpl_vars['form']['imageOption']['noImage']['html']; ?>
</td></tr>
  </table>
        </fieldset>
        </td>
    </tr>
    <tr class="crm-contribution-form-block-min_contribution">
       <td class="label"><?php echo $this->_tpl_vars['form']['min_contribution']['label']; ?>
</td>
       <td class="html-adjust"><?php echo $this->_tpl_vars['form']['min_contribution']['html']; ?>
<br />
          <span class="description"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>The minimum contribution amount required to be eligible to select this premium. If you want to offer it to all contributors regardless of contribution amount, enter '0'. If display of minimum contribution amounts is enabled then this text is displayed:<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?> <em><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>(Contribute at least X to be eligible for this gift.)<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></em></span>
       </td>
    </tr>
    <tr class="crm-contribution-form-block-price">
       <td class="label"><?php echo $this->_tpl_vars['form']['price']['label']; ?>
</td>
       <td class="html-adjust"><?php echo $this->_tpl_vars['form']['price']['html']; ?>
<br />
     <span class="description"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>The market value of this premium (e.g. retail price). For tax-deductible contributions, this amount will be used to set the non-deductible amount in the contribution record and receipt.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></span>
       </td>
    </tr>
    <tr class="crm-contribution-form-block-cost">
       <td class="label"><?php echo $this->_tpl_vars['form']['cost']['label']; ?>
</td>
       <td class="html-adjust"><?php echo $this->_tpl_vars['form']['cost']['html']; ?>
<br />
        <span class="description"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>You may optionally record the actual cost of this premium to your organization. This may be useful when evaluating net return for this incentive.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></span>
       </td>
    </tr>
     <tr class="crm-contribution-form-block-financial_type">
       <td class="label"><?php echo $this->_tpl_vars['form']['financial_type_id']['label']; ?>
</td>
       <td class="html-adjust">
       <?php if (empty ( $this->_tpl_vars['financialType'] )): ?>
         <?php ob_start(); ?><?php echo CRM_Utils_System::crmURL(array('p' => 'civicrm/admin/financial/financialType','q' => "reset=1"), $this);?>
<?php $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->assign('ftUrl', ob_get_contents());ob_end_clean(); ?>
         <?php $this->_tag_stack[] = array('ts', array('1' => $this->_tpl_vars['ftUrl'])); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>There are no financial types configured with linked 'Cost of Sales Premiums' and 'Premiums Inventory Account' accounts. If you want to generate accounting transactions which track the cost of premiums used <a href='%1'>click here</a> to configure financial types and accounts.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
       <?php else: ?>
         <?php echo $this->_tpl_vars['form']['financial_type_id']['html']; ?>
<br />
   <span class="description"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Select a financial type that is linked to both a 'Cost of Sales Premiums Account' and a 'Premiums Inventory Account' if you want to generate accounting transactions to track the cost of premiums used.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></span>
       <?php endif; ?>
       </td>
    </tr>
    <tr class="crm-contribution-form-block-options">
       <td class="label"><?php echo $this->_tpl_vars['form']['options']['label']; ?>
 <?php if ($this->_tpl_vars['action'] == 2): ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'CRM/Core/I18n/Dialog.tpl', 'smarty_include_vars' => array('table' => 'civicrm_product','field' => 'options','id' => $this->_tpl_vars['productId'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php endif; ?></td>
      <td class="html-adjust"><?php echo $this->_tpl_vars['form']['options']['html']; ?>
<br />
          <span class="description"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Enter a comma-delimited list of color, size, etc. options for the product if applicable. Contributors will be presented a drop-down menu of these options when they select this product.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></span>
       </td>
    </tr>
    <tr class="crm-contribution-form-block-is_active">
       <td class="label"><?php echo $this->_tpl_vars['form']['is_active']['label']; ?>
</td>
       <td class="html-adjust"><?php echo $this->_tpl_vars['form']['is_active']['html']; ?>
</td>
    </tr>
  </table>
  <?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_crmRegion($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
  <?php $this->_tag_stack[] = array('crmRegion', array('name' => "contribute-form-managepremiums-other-fields")); $_block_repeat=true;smarty_block_crmRegion($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
  <fieldset id="time-delimited" class="crm-collapsible <?php if (empty ( $this->_tpl_vars['showSubscriptions'] )): ?>collapsed<?php endif; ?>">
    <legend class="collapsible-title"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Subscription or Service Settings<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></legend>
    <div>
      <table class="form-layout-compressed">
        <tr class="crm-contribution-form-block-period_type">
           <td class="label"><?php echo $this->_tpl_vars['form']['period_type']['label']; ?>
</td>
           <td class="html-adjust"><?php echo $this->_tpl_vars['form']['period_type']['html']; ?>
<br />
              <span class="description"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Select 'Rolling' if the subscription or service starts on the current day. Select 'Fixed' if the start date is a fixed month and day within the current year (set this value in the next field).<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></span>
           </td>
        </tr>
        <tr class="crm-contribution-form-block-fixed_period_start_day">
           <td class="label"><?php echo $this->_tpl_vars['form']['fixed_period_start_day']['label']; ?>
</td>
           <td class="html-adjust"><?php echo $this->_tpl_vars['form']['fixed_period_start_day']['html']; ?>
<br />
              <span class="description"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Month and day (MMDD) on which a fixed period subscription or service will start. EXAMPLE: A fixed period subscription with Start Day set to 0101 means that the subscription period would be 1/1/06 - 12/31/06 for anyone signing up during 2006.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></span>
           </td>
        </tr>
        <tr class="crm-contribution-form-block-duration_interval">
           <td class="label"><?php echo $this->_tpl_vars['form']['duration_interval']['label']; ?>
</td>
           <td class="html-adjust"><?php echo $this->_tpl_vars['form']['duration_interval']['html']; ?>
 &nbsp; <?php echo $this->_tpl_vars['form']['duration_unit']['html']; ?>
<br />
              <span class="description"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Duration of subscription or service (e.g. 12-month subscription).<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></span>
           </td>
        </tr>
        <tr class="crm-contribution-form-block-frequency_interval">
           <td class="label"><?php echo $this->_tpl_vars['form']['frequency_interval']['label']; ?>
</td>
           <td class="html-adjust"><?php echo $this->_tpl_vars['form']['frequency_interval']['html']; ?>
 &nbsp; <?php echo $this->_tpl_vars['form']['frequency_unit']['html']; ?>
<br />
              <span class="description"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Frequency of subscription or service (e.g. journal delivered every two months).<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></span>
        </td>
        </tr>
      </table>
    </div>
  </fieldset>
  <?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_crmRegion($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
 <?php endif; ?>
<div class="crm-submit-buttons"><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/common/formButtons.tpl", 'smarty_include_vars' => array('location' => 'bottom')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></div>
</div>
<?php if ($this->_tpl_vars['action'] == 1 || $this->_tpl_vars['action'] == 2): ?>

<script type="text/javascript">
<?php echo '

function add_upload_file_block(parms) {
  if (parms ==\'thumbnail\') {

          document.getElementById("imageURL").style.display="table-row";
        document.getElementById("thumbnailURL").style.display="table-row";

  } else {

        document.getElementById("imageURL").style.display="none";
        document.getElementById("thumbnailURL").style.display="none";

  }
}

'; ?>

</script>

<?php endif; ?>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>