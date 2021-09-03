<?php /* Smarty version 2.6.31, created on 2021-08-24 15:26:11
         compiled from CRM/Event/Form/ManageEvent/Location.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'crmScope', 'CRM/Event/Form/ManageEvent/Location.tpl', 1, false),array('block', 'ts', 'CRM/Event/Form/ManageEvent/Location.tpl', 12, false),array('modifier', 'is_numeric', 'CRM/Event/Form/ManageEvent/Location.tpl', 26, false),array('modifier', 'crmAddClass', 'CRM/Event/Form/ManageEvent/Location.tpl', 36, false),array('function', 'help', 'CRM/Event/Form/ManageEvent/Location.tpl', 45, false),)), $this); ?>
<?php $this->_tag_stack[] = array('crmScope', array('extensionKey' => "")); $_block_repeat=true;smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><div class="help">
  <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Use this form to configure the location and optional contact information for the event. This information will be displayed on the Event Information page. It will also be included in online registration pages and confirmation emails if these features are enabled.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
</div>

<div class="crm-block crm-form-block crm-event-manage-location-form-block">
  <div class="crm-submit-buttons">
    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/common/formButtons.tpl", 'smarty_include_vars' => array('location' => 'top')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
  </div>
  <?php if ($this->_tpl_vars['locEvents']): ?>
    <table class="form-layout-compressed">
      <tr id="optionType" class="crm-event-manage-location-form-block-location_option">
        <td class="labels">
          <?php echo $this->_tpl_vars['form']['location_option']['label']; ?>

        </td>
        <?php $_from = $this->_tpl_vars['form']['location_option']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['item']):
?>
          <?php if (((is_array($_tmp=$this->_tpl_vars['key'])) ? $this->_run_mod_handler('is_numeric', true, $_tmp) : is_numeric($_tmp))): ?>
            <td class="value"><strong><?php echo $this->_tpl_vars['item']['html']; ?>
</strong></td>
          <?php endif; ?>
        <?php endforeach; endif; unset($_from); ?>
      </tr>
      <tr id="existingLoc" class="crm-event-manage-location-form-block-loc_event_id">
        <td class="labels">
          <?php echo $this->_tpl_vars['form']['loc_event_id']['label']; ?>

        </td>
        <td class="value" colspan="2">
          <?php echo ((is_array($_tmp=$this->_tpl_vars['form']['loc_event_id']['html'])) ? $this->_run_mod_handler('crmAddClass', true, $_tmp, 'huge') : smarty_modifier_crmAddClass($_tmp, 'huge')); ?>

        </td>
      </tr>
      <tr>
        <td id="locUsedMsg" colspan="3">
        </td>
      </tr>
      <tr id="is_show_location" class="crm-event-manage-location-form-block-is_show_location">
        <td class="labels">
          <?php echo $this->_tpl_vars['form']['is_show_location']['label']; ?>
 <?php echo smarty_function_help(array('id' => "id-is_show_location"), $this);?>

        </td>
        <td class="values">
          <?php echo $this->_tpl_vars['form']['is_show_location']['html']; ?>

        </td>
      </tr>
    </table>
  <?php endif; ?>

  <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/Contact/Form/Edit/Address.tpl", 'smarty_include_vars' => array('blockId' => 1)));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
  <table class="form-layout-compressed">
    <tr>
      <td><label><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Email 1:<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></label></td>
      <td><?php echo ((is_array($_tmp=$this->_tpl_vars['form']['email']['1']['email']['html'])) ? $this->_run_mod_handler('crmAddClass', true, $_tmp, 'email') : smarty_modifier_crmAddClass($_tmp, 'email')); ?>
</td>
    </tr>
    <tr>
      <td><label><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Email 2:<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></label></td>
      <td><?php echo ((is_array($_tmp=$this->_tpl_vars['form']['email']['2']['email']['html'])) ? $this->_run_mod_handler('crmAddClass', true, $_tmp, 'email') : smarty_modifier_crmAddClass($_tmp, 'email')); ?>
</td>
    </tr>
    <tr>
      <td><label><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Phone 1:<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></label></td>
      <td><?php echo ((is_array($_tmp=$this->_tpl_vars['form']['phone']['1']['phone']['html'])) ? $this->_run_mod_handler('crmAddClass', true, $_tmp, 'phone') : smarty_modifier_crmAddClass($_tmp, 'phone')); ?>
 <?php $this->_tag_stack[] = array('ts', array('context' => 'phone_ext')); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>ext.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>&nbsp;<?php echo ((is_array($_tmp=$this->_tpl_vars['form']['phone']['1']['phone_ext']['html'])) ? $this->_run_mod_handler('crmAddClass', true, $_tmp, 'four') : smarty_modifier_crmAddClass($_tmp, 'four')); ?>
&nbsp;<?php echo $this->_tpl_vars['form']['phone']['1']['phone_type_id']['html']; ?>
</td>
    </tr>
    <tr>
      <td><label><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Phone 2:<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></label></td>
      <td><?php echo ((is_array($_tmp=$this->_tpl_vars['form']['phone']['2']['phone']['html'])) ? $this->_run_mod_handler('crmAddClass', true, $_tmp, 'phone') : smarty_modifier_crmAddClass($_tmp, 'phone')); ?>
 <?php $this->_tag_stack[] = array('ts', array('context' => 'phone_ext')); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>ext.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>&nbsp;<?php echo ((is_array($_tmp=$this->_tpl_vars['form']['phone']['2']['phone_ext']['html'])) ? $this->_run_mod_handler('crmAddClass', true, $_tmp, 'four') : smarty_modifier_crmAddClass($_tmp, 'four')); ?>
&nbsp;<?php echo $this->_tpl_vars['form']['phone']['2']['phone_type_id']['html']; ?>
</td>
    </tr>
  </table>

  <?php if ($this->_tpl_vars['locEvents']): ?>

    <script type="text/javascript">
      <?php echo '
      CRM.$(function($) {
        var $form = $(\'form.'; ?>
<?php echo $this->_tpl_vars['form']['formClass']; ?>
<?php echo '\'),
          locBlockId = '; ?>
"<?php echo $this->_tpl_vars['form']['loc_event_id']['value']['0']; ?>
"<?php echo ';

        displayMessage('; ?>
<?php echo $this->_tpl_vars['locUsed']; ?>
<?php echo ');

        $(\'#loc_event_id\', $form).change(function() {
          $.ajax({
            url: CRM.url(\'civicrm/ajax/locBlock\', \'reset=1\'),
            data: {\'lbid\': $(this).val()},
            dataType: \'json\',
            success: function(data) {
              var selectLocBlockId = $(\'#loc_event_id\').val();
              // Only change state when options are loaded
              if (data.address_1_state_province_id) {
                var defaultState = data.address_1_state_province_id;
                $(\'#address_1_state_province_id\', $form).one(\'crmOptionsUpdated\', function() {
                  $(this).val(defaultState).change();
                });
                delete data.address_1_state_province_id;
              }
              for(i in data) {
                if ( i == \'count_loc_used\' ) {
                  if ( ((selectLocBlockId == locBlockId) && data.count_loc_used > 1) ||
                    ((selectLocBlockId != locBlockId) && data.count_loc_used > 0) ) {
                    displayMessage(data.count_loc_used);
                  } else {
                    displayMessage(0);
                  }
                } else {
                  $(\'#\'+i, $form).val(data[i]).change();
                }
              }
            }
          });
          return false;
        });

        function showLocFields(clear) {
          var createNew = document.getElementsByName("location_option")[0].checked;
          if (createNew) {
            $(\'#existingLoc\', $form).hide();
            //clear all location fields values.
            if (clear !== false) {
              $(":input[id *= \'address_1_\'], :input[id *= \'email_1_\'], :input[id *= \'phone_1_\']", $form).val("").change();
              '; ?>
<?php if ($this->_tpl_vars['config']->defaultContactCountry): ?>
              <?php if ($this->_tpl_vars['config']->defaultContactStateProvince): ?>
              // Set default state once options are loaded
              var defaultState = <?php echo $this->_tpl_vars['config']->defaultContactStateProvince; ?>

              <?php echo '
                $(\'#address_1_state_province_id\', $form).one(\'crmOptionsUpdated\', function() {
                  $(this).val(defaultState).change();
                });
              '; ?>

              <?php endif; ?>
              // Set default country
              $('#address_1_country_id', $form).val(<?php echo $this->_tpl_vars['config']->defaultContactCountry; ?>
).change();
              <?php endif; ?><?php echo '
            }
            displayMessage(0);
          } else {
            $(\'#existingLoc\', $form).show();
            if (clear !== false) {
              $(\'#loc_event_id\', $form).change();
            }
          }
        }

        $(\'input[name=location_option]\').click(showLocFields);
        showLocFields(false);

        function displayMessage(count) {
          if (count) {
            var msg = '; ?>
'<?php $this->_tag_stack[] = array('ts', array('escape' => 'js','1' => "%1")); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>This location is used by %1 other events. Modifying location information will change values for all events.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>'<?php echo ';
            $(\'#locUsedMsg\', $form).text(ts(msg, {1: count})).addClass(\'status\');
          } else {
            $(\'#locUsedMsg\', $form).text(\' \').removeClass(\'status\');
          }
        }
      });
      '; ?>

    </script>
  <?php endif; ?>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>