<?php /* Smarty version 2.6.31, created on 2021-08-25 21:11:36
         compiled from CRM/PCP/Form/PCP.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'crmScope', 'CRM/PCP/Form/PCP.tpl', 1, false),array('block', 'crmRegion', 'CRM/PCP/Form/PCP.tpl', 21, false),array('block', 'ts', 'CRM/PCP/Form/PCP.tpl', 70, false),array('function', 'help', 'CRM/PCP/Form/PCP.tpl', 26, false),array('function', 'crmURL', 'CRM/PCP/Form/PCP.tpl', 71, false),array('modifier', 'crmAddClass', 'CRM/PCP/Form/PCP.tpl', 62, false),)), $this); ?>
<?php $this->_tag_stack[] = array('crmScope', array('extensionKey' => "")); $_block_repeat=true;smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><div class="crm-submit-buttons"><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/common/formButtons.tpl", 'smarty_include_vars' => array('location' => 'top')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></div>
<table class="form-layout">
  <tr  class="crm-contribution-contributionpage-pcp-form-block-pcp_active">
      <td class="label">&nbsp;</td>
      <td><?php echo $this->_tpl_vars['form']['pcp_active']['html']; ?>
 <?php echo $this->_tpl_vars['form']['pcp_active']['label']; ?>
</td>
  </tr>
</table>

<div class="spacer"></div>

<div id="pcpFields">
<?php $this->_tag_stack[] = array('crmRegion', array('name' => "pcp-form-pcp-fields")); $_block_repeat=true;smarty_block_crmRegion($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
  <?php if ($this->_tpl_vars['form']['target_entity_type']): ?>
  <table class="form-layout">
    <tr  class="crm-contribution-contributionpage-pcp-form-block-target_entity_type">
        <td class="label"><?php echo $this->_tpl_vars['form']['target_entity_type']['label']; ?>
 <span class="crm-marker"> *</span></td>
        <td><?php echo $this->_tpl_vars['form']['target_entity_type']['html']; ?>
 <?php echo smarty_function_help(array('id' => "id-target_entity_type"), $this);?>
</td>
    </tr>
  </table>
  <div id="pcpDetailFields" <?php if ($this->_tpl_vars['form']['target_entity_type']['value'][0] == 'event'): ?> style="display:none;"<?php endif; ?>>
    <table class="form-layout">
      <tr class="crm-contribution-contributionpage-pcp-form-block-target_entity_id" id="pcpDetailFields">
          <td class="label"><?php echo $this->_tpl_vars['form']['target_entity_id']['label']; ?>
 <span class="crm-marker"> *</span></td>
          <td><?php echo $this->_tpl_vars['form']['target_entity_id']['html']; ?>
 <?php echo smarty_function_help(array('id' => "id-target_entity_id"), $this);?>
</td>
      </tr>
    </table>
  </div>
  <?php endif; ?>

  <table class="form-layout">
     <tr class="crm-contribution-contributionpage-pcp-form-block-is_approval_needed">
        <td class="label"><?php echo $this->_tpl_vars['form']['is_approval_needed']['label']; ?>
</td>
        <td><?php echo $this->_tpl_vars['form']['is_approval_needed']['html']; ?>
 <?php echo smarty_function_help(array('id' => "id-approval_needed"), $this);?>
</td>
     </tr>
     <tr class="crm-contribution-contributionpage-pcp-form-block-notify_email">
        <td class="label"><?php echo $this->_tpl_vars['form']['notify_email']['label']; ?>
</td>
        <td><?php echo $this->_tpl_vars['form']['notify_email']['html']; ?>
 <?php echo smarty_function_help(array('id' => "id-notify"), $this);?>
</td>
     </tr>
     <tr class="crm-contribution-contributionpage-pcp-form-block-supporter_profile_id">
        <td class="label"><?php echo $this->_tpl_vars['form']['supporter_profile_id']['label']; ?>
</td>
        <td><?php echo $this->_tpl_vars['form']['supporter_profile_id']['html']; ?>
 <?php echo smarty_function_help(array('id' => "id-supporter_profile"), $this);?>
</td>
     </tr>
     <tr class="crm-contribution-contributionpage-pcp-form-block-owner_notify_id">
        <td class="label"><?php echo $this->_tpl_vars['form']['owner_notify_id']['label']; ?>
</td>
        <td><?php echo $this->_tpl_vars['form']['owner_notify_id']['html']; ?>
</td>
     </tr>
     <tr class="crm-contribution-contributionpage-pcp-form-block-is_tellfriend_enabled">
        <td class="label"><?php echo $this->_tpl_vars['form']['is_tellfriend_enabled']['label']; ?>
</td>
        <td><?php echo $this->_tpl_vars['form']['is_tellfriend_enabled']['html']; ?>
 <?php echo smarty_function_help(array('id' => "id-is_tellfriend"), $this);?>
</td>
     </tr>
     <tr id="tflimit" class="crm-contribution-contributionpage-pcp-form-block-tellfriend_limit">
        <td class="label"><?php echo $this->_tpl_vars['form']['tellfriend_limit']['label']; ?>
</td>
        <td><?php echo ((is_array($_tmp=$this->_tpl_vars['form']['tellfriend_limit']['html'])) ? $this->_run_mod_handler('crmAddClass', true, $_tmp, 'four') : smarty_modifier_crmAddClass($_tmp, 'four')); ?>
 <?php echo smarty_function_help(array('id' => "id-tellfriend_limit"), $this);?>
</td>
     </tr>
     <tr class="crm-contribution-contributionpage-pcp-form-block-link_text">
        <td class="label"><?php echo $this->_tpl_vars['form']['link_text']['label']; ?>
</td>
        <td>
          <?php echo ((is_array($_tmp=$this->_tpl_vars['form']['link_text']['html'])) ? $this->_run_mod_handler('crmAddClass', true, $_tmp, 'huge') : smarty_modifier_crmAddClass($_tmp, 'huge')); ?>
 <?php echo smarty_function_help(array('id' => "id-link_text"), $this);?>
<br />
          <span class="description">
            <?php if ($this->_tpl_vars['config']->userSystem->is_drupal || $this->_tpl_vars['config']->userFramework == 'WordPress'): ?>
              <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>You can also place additional links (or menu items) allowing constituents to create their own fundraising pages using the following URL:<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><br />
              <em><?php echo CRM_Utils_System::crmURL(array('a' => 1,'fe' => 1,'p' => 'civicrm/contribute/campaign','q' => "action=add&reset=1&pageId=".($this->_tpl_vars['pageId'])."&component=".($this->_tpl_vars['context'])), $this);?>
</em>
            <?php elseif ($this->_tpl_vars['config']->userFramework == 'Joomla'): ?>
              <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>You can also create front-end links (or menu items) allowing constituents to create their own fundraising pages using the Menu Manager. Select <strong>Contributions &raquo; Personal Campaign Pages</strong> and then select this event.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
            <?php endif; ?>
          </span>
        </td>
     </tr>
  </table>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_crmRegion($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
</div>
<div class="crm-submit-buttons"><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/common/formButtons.tpl", 'smarty_include_vars' => array('location' => 'bottom')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></div>
</div>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/common/showHideByFieldValue.tpl", 'smarty_include_vars' => array('trigger_field_id' => 'pcp_active','trigger_value' => 'true','target_element_id' => 'pcpFields','target_element_type' => 'block','field_type' => 'radio','invert' => 'false')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/common/showHideByFieldValue.tpl", 'smarty_include_vars' => array('trigger_field_id' => 'is_tellfriend_enabled','trigger_value' => 'true','target_element_id' => 'tflimit','target_element_type' => "table-row",'field_type' => 'radio','invert' => 'false')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>