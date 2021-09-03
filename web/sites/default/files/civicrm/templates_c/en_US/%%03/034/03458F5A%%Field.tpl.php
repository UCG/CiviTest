<?php /* Smarty version 2.6.31, created on 2021-08-25 21:15:08
         compiled from CRM/Price/Form/Field.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'crmScope', 'CRM/Price/Form/Field.tpl', 1, false),array('block', 'ts', 'CRM/Price/Form/Field.tpl', 97, false),array('function', 'help', 'CRM/Price/Form/Field.tpl', 110, false),array('function', 'crmURL', 'CRM/Price/Form/Field.tpl', 136, false),array('modifier', 'crmAddClass', 'CRM/Price/Form/Field.tpl', 153, false),)), $this); ?>
<?php $this->_tag_stack[] = array('crmScope', array('extensionKey' => "")); $_block_repeat=true;smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php echo '
<script type="text/Javascript">
  function option_html_type(form) {
    var html_type_name = cj(\'#html_type\').val();

    if (html_type_name == "Text") {
      cj("#price-block").show();
      cj("#showoption").hide();

    }
    else {
      cj("#price-block").hide();
      cj("#showoption").show();
    }

    if (html_type_name == \'Radio\' || html_type_name == \'CheckBox\') {
      cj("#optionsPerLine").show( );
    }
    else {
      cj("#optionsPerLine").hide( );
      cj("#optionsPerLineDef").hide( );
    }

    var radioOption, checkBoxOption;

    for (var i=1; i<=15; i++) {
      radioOption = \'#radio\'+i;
      checkBoxOption = \'#checkbox\'+i;
      if (html_type_name == \'Radio\' || html_type_name == \'CheckBox\' || html_type_name == \'Select\') {
        if (html_type_name == "CheckBox") {
          cj(checkBoxOption).show();
          cj(radioOption).hide();
        }
        else {
          cj(radioOption).show();
          cj(checkBoxOption).hide();
        }
      }
    }

  }

  var adminVisibilityID = 0;
  cj(\'#visibility_id\').on(\'change\', function () {
    if (adminVisibilityID == 0) {
      CRM.api3(\'OptionValue\', \'getvalue\', {
        \'sequential\': 1,
        \'return\': \'value\',
        \'option_group_id\': \'visibility\',
        \'name\': \'admin\'
      }).done(function(result) {
        adminVisibilityID = result.result;
        if (cj(\'#visibility_id\').val() == adminVisibilityID) {
          updateVisibilitySelects(adminVisibilityID);
        }
      });
    } else {
      if (cj(\'#visibility_id\').val() == adminVisibilityID) {
        updateVisibilitySelects(adminVisibilityID);
      }
    }
  });

  function updateVisibilitySelects(value) {
    for (var i=1; i<=15; i++) {
      cj(\'#option_visibility_id_\' + i).val(value);
    }
  }
</script>
'; ?>

<div class="crm-block crm-form-block crm-price-field-form-block">
  <div class="crm-submit-buttons"><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/common/formButtons.tpl", 'smarty_include_vars' => array('location' => 'top')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></div>
  <table class="form-layout">
    <tr class="crm-price-field-form-block-label">
      <td class="label"><?php echo $this->_tpl_vars['form']['label']['label']; ?>
</td>
      <td><?php if ($this->_tpl_vars['action'] == 2): ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'CRM/Core/I18n/Dialog.tpl', 'smarty_include_vars' => array('table' => 'civicrm_price_field','field' => 'label','id' => $this->_tpl_vars['fid'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php endif; ?><?php echo $this->_tpl_vars['form']['label']['html']; ?>

      </td>
    </tr>
    <tr class="crm-price-field-form-block-html_type">
      <td class="label"><?php echo $this->_tpl_vars['form']['html_type']['label']; ?>
</td>
      <td><?php echo $this->_tpl_vars['form']['html_type']['html']; ?>

      </td>
    </tr>
  <?php if ($this->_tpl_vars['action'] != 4 && $this->_tpl_vars['action'] != 2): ?>
    <tr>
      <td>&nbsp;</td>
      <td class="description"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Select the html type used to offer options for this field<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
      </td>
    </tr>
  <?php endif; ?>
  </table>

  <div class="spacer"></div>
  <div id="price-block" <?php if ($this->_tpl_vars['action'] == 2 && $this->_tpl_vars['form']['html_type']['value']['0'] == 'Text'): ?> class="show-block" <?php else: ?> class="hiddenElement" <?php endif; ?>>
    <table class="form-layout">
      <tr class="crm-price-field-form-block-price">
        <td class="label"><?php echo $this->_tpl_vars['form']['price']['label']; ?>
 <span class="crm-marker" title="<?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>This field is required.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>">*</span></td>
        <td><?php echo $this->_tpl_vars['form']['price']['html']; ?>

        <?php if ($this->_tpl_vars['action'] != 4): ?>
          <br /><span class="description"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Unit price.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></span> <?php echo smarty_function_help(array('id' => "id-negative"), $this);?>

        <?php endif; ?>
        </td>
      </tr>
      <tr class="crm-price-field-form-block-non-deductible-amount">
        <td class="label"><?php echo $this->_tpl_vars['form']['non_deductible_amount']['label']; ?>
</td>
        <td><?php echo $this->_tpl_vars['form']['non_deductible_amount']['html']; ?>
</td>
      </tr>
    <?php if ($this->_tpl_vars['useForEvent']): ?>
      <tr class="crm-price-field-form-block-count">
        <td class="label"><?php echo $this->_tpl_vars['form']['count']['label']; ?>
</td>
        <td><?php echo $this->_tpl_vars['form']['count']['html']; ?>
<br />
          <span class="description"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Enter a value here if you want to increment the number of registered participants per unit against the maximum number of participants allowed for this event.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></span>
          <?php echo smarty_function_help(array('id' => "id-participant-count"), $this);?>

        </td>
      </tr>
      <tr class="crm-price-field-form-block-max_value">
        <td class="label"><?php echo $this->_tpl_vars['form']['max_value']['label']; ?>
</td>
        <td><?php echo $this->_tpl_vars['form']['max_value']['html']; ?>

        </td>
      </tr>
    <?php endif; ?>
      <tr class="crm-price-field-form-block-financial_type">
        <td class="label"><?php echo $this->_tpl_vars['form']['financial_type_id']['label']; ?>
<span class="crm-marker" title="<?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>This field is required.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>">*</span></td></td>
        <td>
        <?php if (! $this->_tpl_vars['financialType']): ?>
          <?php ob_start(); ?><?php echo CRM_Utils_System::crmURL(array('p' => 'civicrm/admin/financial/financialType','q' => "reset=1"), $this);?>
<?php $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->assign('ftUrl', ob_get_contents());ob_end_clean(); ?>
          <?php $this->_tag_stack[] = array('ts', array('1' => $this->_tpl_vars['ftUrl'])); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>There is no Financial Type configured of Account Relation Revenue. <a href='%1'>Click here</a> if you want to configure financial type for your site.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
          <?php else: ?>
          <?php echo $this->_tpl_vars['form']['financial_type_id']['html']; ?>

        <?php endif; ?>
        </td>
      </tr>
    </table>
  </div>

<?php if ($this->_tpl_vars['action'] == 1): ?>
  <div id='showoption' class="hiddenElement"><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/Price/Form/OptionFields.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></div>
<?php endif; ?>
  <table class="form-layout">
    <tr id="optionsPerLine" class="crm-price-field-form-block-options_per_line">
      <td class="label"><?php echo $this->_tpl_vars['form']['options_per_line']['label']; ?>
</td>
      <td><?php echo ((is_array($_tmp=$this->_tpl_vars['form']['options_per_line']['html'])) ? $this->_run_mod_handler('crmAddClass', true, $_tmp, 'two') : smarty_modifier_crmAddClass($_tmp, 'two')); ?>
</td>
    </tr>
    <tr class="crm-price-field-form-block-is_display_amounts">
      <td class="label"><?php echo $this->_tpl_vars['form']['is_display_amounts']['label']; ?>
</td>
      <td><?php echo $this->_tpl_vars['form']['is_display_amounts']['html']; ?>

      <?php if ($this->_tpl_vars['action'] != 4): ?>
        <div class="description"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Display amount next to each option? If no, then the amount should be in the option description.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></div>
      <?php endif; ?>
      </td>
    </tr>
    <tr class="crm-price-field-form-block-weight">
      <td class="label"><?php echo $this->_tpl_vars['form']['weight']['label']; ?>
</td>
      <td><?php echo ((is_array($_tmp=$this->_tpl_vars['form']['weight']['html'])) ? $this->_run_mod_handler('crmAddClass', true, $_tmp, 'two') : smarty_modifier_crmAddClass($_tmp, 'two')); ?>

      <?php if ($this->_tpl_vars['action'] != 4): ?>
        <div class="description"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Weight controls the order in which fields are displayed in a group. Enter a positive or negative integer - lower numbers are displayed ahead of higher numbers.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></div>
      <?php endif; ?>
      </td>
    </tr>

    <tr class="crm-price-field-form-block-help_pre">
      <td class="label"><?php echo $this->_tpl_vars['form']['help_pre']['label']; ?>
</td>
      <td><?php if ($this->_tpl_vars['action'] == 2): ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'CRM/Core/I18n/Dialog.tpl', 'smarty_include_vars' => array('table' => 'civicrm_price_field','field' => 'help_pre','id' => $this->_tpl_vars['fid'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php endif; ?><?php echo ((is_array($_tmp=$this->_tpl_vars['form']['help_pre']['html'])) ? $this->_run_mod_handler('crmAddClass', true, $_tmp, 'huge') : smarty_modifier_crmAddClass($_tmp, 'huge')); ?>
&nbsp;
      <?php if ($this->_tpl_vars['action'] != 4): ?>
        <div class="description"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Explanatory text displayed to users at the beginning of this field.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></div>
      <?php endif; ?>
      </td>
    </tr>

    <tr class="crm-price-field-form-block-help_post">
      <td class="label"><?php echo $this->_tpl_vars['form']['help_post']['label']; ?>
</td>
      <td><?php if ($this->_tpl_vars['action'] == 2): ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'CRM/Core/I18n/Dialog.tpl', 'smarty_include_vars' => array('table' => 'civicrm_price_field','field' => 'help_post','id' => $this->_tpl_vars['fid'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php endif; ?><?php echo ((is_array($_tmp=$this->_tpl_vars['form']['help_post']['html'])) ? $this->_run_mod_handler('crmAddClass', true, $_tmp, 'huge') : smarty_modifier_crmAddClass($_tmp, 'huge')); ?>
&nbsp;
      <?php if ($this->_tpl_vars['action'] != 4): ?>
        <div class="description"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Explanatory text displayed to users below this field.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></div>
      <?php endif; ?>
      </td>
    </tr>

    <tr class="crm-price-field-form-block-active_on">
      <td class="label"><?php echo $this->_tpl_vars['form']['active_on']['label']; ?>
</td>
      <td><?php echo $this->_tpl_vars['form']['active_on']['html']; ?>

      <?php if ($this->_tpl_vars['action'] != 4): ?>
        <br /><span class="description"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Date this field becomes effective (optional).  Used for price set fields that are made available starting on a specific date.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></span>
      <?php endif; ?>
      </td>
    </tr>

    <tr class="crm-price-field-form-block-expire_on">
      <td class="label"><?php echo $this->_tpl_vars['form']['expire_on']['label']; ?>
</td>
      <td><?php echo $this->_tpl_vars['form']['expire_on']['html']; ?>

      <?php if ($this->_tpl_vars['action'] != 4): ?>
        <br /><span class="description"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Date this field expires (optional).  Used for price set fields that are no longer available after a specific date (e.g. early-bird pricing).<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></span>
      <?php endif; ?>
      </td>
    </tr>

    <tr class="crm-price-field-form-block-is_required">
      <td class="label"><?php echo $this->_tpl_vars['form']['is_required']['label']; ?>
</td>
      <td>&nbsp;<?php echo $this->_tpl_vars['form']['is_required']['html']; ?>
</td>
    </tr>
    <tr class="crm-price-field-form-block-visibility_id">
      <td class="label"><?php echo $this->_tpl_vars['form']['visibility_id']['label']; ?>
</td>
      <td>&nbsp;<?php echo $this->_tpl_vars['form']['visibility_id']['html']; ?>
  <?php echo smarty_function_help(array('id' => "id-visibility"), $this);?>
</td>
    </tr>
    <tr class="crm-price-field-form-block-is_active">
      <td class="label"><?php echo $this->_tpl_vars['form']['is_active']['label']; ?>
</td>
      <td><?php echo $this->_tpl_vars['form']['is_active']['html']; ?>
</td>
    </tr>
  </table>
  <div class="crm-submit-buttons"><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/common/formButtons.tpl", 'smarty_include_vars' => array('location' => 'bottom')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></div>
</div>

<?php echo '
<script type="text/javascript">
  option_html_type(this.form);
  function calculateRowValues( row ) {
    var mtype = cj("#membership_type_id_"+row).val();
    var postUrl = "'; ?>
<?php echo CRM_Utils_System::crmURL(array('p' => 'civicrm/ajax/memType','h' => 0), $this);?>
<?php echo '";

    cj.post( postUrl, {mtype: mtype}, function(data) {
      cj("#option_amount_"+ row).val(data.total_amount);
      cj("#option_label_"+ row).val(data.name);
      cj("#option_financial_type_id_"+ row).val(data.financial_type_id);
      if (data.name) {
        cj("#membership_num_terms_"+ row).val(\'1\');
      }
      else {
        cj("#membership_num_terms_"+ row).val(\'\');
      }
    }, \'json\');
  }
</script>
'; ?>


<?php if ($this->_tpl_vars['action'] == 2 && ( $this->_tpl_vars['form']['data_type']['value']['1']['0'] == 'CheckBox' || $this->_tpl_vars['form']['data_type']['value']['1']['0'] == 'Radio' || $this->_tpl_vars['form']['data_type']['value']['1']['0'] == 'Select' )): ?>
<div class="action-link">
  <a href="<?php echo CRM_Utils_System::crmURL(array('p' => "civicrm/admin/event/field/option",'q' => "reset=1&action=browse&fid=".($this->_tpl_vars['fid'])), $this);?>
" class="button"><span><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Multiple Choice Options<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></span></a>
</div>
<?php endif; ?>

<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>