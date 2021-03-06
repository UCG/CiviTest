<?php /* Smarty version 2.6.31, created on 2021-08-24 17:50:35
         compiled from CRM/Contact/Form/Relationship.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'crmScope', 'CRM/Contact/Form/Relationship.tpl', 1, false),array('block', 'ts', 'CRM/Contact/Form/Relationship.tpl', 21, false),array('function', 'crmURL', 'CRM/Contact/Form/Relationship.tpl', 18, false),array('modifier', 'crmDate', 'CRM/Contact/Form/Relationship.tpl', 24, false),array('modifier', 'ucfirst', 'CRM/Contact/Form/Relationship.tpl', 109, false),array('modifier', 'json_encode', 'CRM/Contact/Form/Relationship.tpl', 132, false),)), $this); ?>
<?php $this->_tag_stack[] = array('crmScope', array('extensionKey' => "")); $_block_repeat=true;smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
  <?php if ($this->_tpl_vars['action'] == 4): ?>     <div class="crm-block crm-content-block crm-relationship-view-block">
      <table class="crm-info-panel">
        <?php $_from = $this->_tpl_vars['viewRelationship']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['row']):
?>
          <tr>
            <td class="label"><?php echo $this->_tpl_vars['row']['relation']; ?>
</td>
            <td><a class="no-popup" href="<?php echo CRM_Utils_System::crmURL(array('p' => 'civicrm/contact/view','q' => "reset=1&cid=".($this->_tpl_vars['row']['cid'])), $this);?>
"><?php echo $this->_tpl_vars['row']['name']; ?>
</a></td>
          </tr>
          <?php if ($this->_tpl_vars['isCurrentEmployer']): ?>
            <tr><td class="label"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Current Employee?<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></td><td><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Yes<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></td></tr>
          <?php endif; ?>
          <?php if ($this->_tpl_vars['row']['start_date']): ?>
            <tr><td class="label"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Start Date<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></td><td><?php echo ((is_array($_tmp=$this->_tpl_vars['row']['start_date'])) ? $this->_run_mod_handler('crmDate', true, $_tmp) : smarty_modifier_crmDate($_tmp)); ?>
</td></tr>
          <?php endif; ?>
          <?php if ($this->_tpl_vars['row']['end_date']): ?>
            <tr><td class="label"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>End Date<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></td><td><?php echo ((is_array($_tmp=$this->_tpl_vars['row']['end_date'])) ? $this->_run_mod_handler('crmDate', true, $_tmp) : smarty_modifier_crmDate($_tmp)); ?>
</td></tr>
          <?php endif; ?>
          <?php if ($this->_tpl_vars['row']['description']): ?>
            <tr><td class="label"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Description<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></td><td><?php echo $this->_tpl_vars['row']['description']; ?>
</td></tr>
          <?php endif; ?>
          <?php $_from = $this->_tpl_vars['viewNote']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['rec']):
?>
            <?php if ($this->_tpl_vars['rec']): ?>
              <tr><td class="label"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Note<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></td><td><?php echo $this->_tpl_vars['rec']; ?>
</td></tr>
            <?php endif; ?>
          <?php endforeach; endif; unset($_from); ?>
          <tr>
            <td class="label"><label><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Permissions<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></label></td>
            <td>
              <?php if ($this->_tpl_vars['row']['is_permission_a_b'] || $this->_tpl_vars['row']['is_permission_b_a']): ?>
                <?php if ($this->_tpl_vars['row']['is_permission_a_b']): ?>
                  <div>
                  <?php if ($this->_tpl_vars['row']['rtype'] == 'a_b' && $this->_tpl_vars['is_contact_id_a']): ?>
                    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/Contact/Page/View/RelationshipPerm.tpl", 'smarty_include_vars' => array('permType' => $this->_tpl_vars['row']['is_permission_a_b'],'permDisplayName' => $this->_tpl_vars['displayName'],'otherDisplayName' => $this->_tpl_vars['row']['display_name'],'displayText' => true)));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
                  <?php else: ?>
                    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/Contact/Page/View/RelationshipPerm.tpl", 'smarty_include_vars' => array('permType' => $this->_tpl_vars['row']['is_permission_a_b'],'otherDisplayName' => $this->_tpl_vars['displayName'],'permDisplayName' => $this->_tpl_vars['row']['display_name'],'displayText' => true)));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
                  <?php endif; ?>
                  </div>
                <?php endif; ?>
                <?php if ($this->_tpl_vars['row']['is_permission_b_a']): ?>
                  <div>
                  <?php if ($this->_tpl_vars['row']['rtype'] == 'a_b' && $this->_tpl_vars['is_contact_id_a']): ?>
                    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/Contact/Page/View/RelationshipPerm.tpl", 'smarty_include_vars' => array('permType' => $this->_tpl_vars['row']['is_permission_b_a'],'otherDisplayName' => $this->_tpl_vars['displayName'],'permDisplayName' => $this->_tpl_vars['row']['display_name'],'displayText' => true)));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
                  <?php else: ?>
                    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/Contact/Page/View/RelationshipPerm.tpl", 'smarty_include_vars' => array('permType' => $this->_tpl_vars['row']['is_permission_b_a'],'permDisplayName' => $this->_tpl_vars['displayName'],'otherDisplayName' => $this->_tpl_vars['row']['display_name'],'displayText' => true)));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
                  <?php endif; ?>
                  </div>
                <?php endif; ?>
              <?php else: ?>
                <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>None<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
              <?php endif; ?>
            </td>
          </tr>
          <tr><td class="label"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Status<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></td><td><?php if ($this->_tpl_vars['row']['is_active']): ?><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Enabled<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php else: ?><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Disabled<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php endif; ?></td></tr>
        <?php endforeach; endif; unset($_from); ?>
      </table>
      <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/Custom/Page/CustomDataView.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
    </div>
  <?php endif; ?>

  <?php if ($this->_tpl_vars['action'] == 2 || $this->_tpl_vars['action'] == 1): ?>     <div class="crm-block crm-form-block crm-relationship-form-block">
      <table class="form-layout-compressed">
        <tr class="crm-relationship-form-block-relationship_type_id">
          <td class="label"><?php echo $this->_tpl_vars['form']['relationship_type_id']['label']; ?>
</td>
          <td><?php echo $this->_tpl_vars['form']['relationship_type_id']['html']; ?>
</td>
        </tr>
        <tr class="crm-relationship-form-block-related_contact_id">
          <td class="label"><?php echo $this->_tpl_vars['form']['related_contact_id']['label']; ?>
</td>
          <td><?php echo $this->_tpl_vars['form']['related_contact_id']['html']; ?>
</td>
        </tr>
        <tr class="crm-relationship-form-block-is_current_employer" style="display:none;">
          <td class="label"><?php echo $this->_tpl_vars['form']['is_current_employer']['label']; ?>
</td>
          <td><?php echo $this->_tpl_vars['form']['is_current_employer']['html']; ?>
</td>
        </tr>
        <tr class="crm-relationship-form-block-start_date">
          <td class="label"><?php echo $this->_tpl_vars['form']['start_date']['label']; ?>
</td>
          <td><?php echo $this->_tpl_vars['form']['start_date']['html']; ?>
 <?php echo $this->_tpl_vars['form']['end_date']['label']; ?>
 <?php echo $this->_tpl_vars['form']['end_date']['html']; ?>
<br /><span class="description"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>If this relationship has start and/or end dates, specify them here.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></span></td>
        </tr>
        <tr class="crm-relationship-form-block-description">
          <td class="label"><?php echo $this->_tpl_vars['form']['description']['label']; ?>
</td>
          <td><?php echo $this->_tpl_vars['form']['description']['html']; ?>
</td>
        </tr>
        <tr class="crm-relationship-form-block-note">
          <td class="label"><?php echo $this->_tpl_vars['form']['note']['label']; ?>
</td>
          <td><?php echo $this->_tpl_vars['form']['note']['html']; ?>
</td>
        </tr>
        <tr class="crm-relationship-form-block-is_permission_a_b">
          <?php ob_start(); ?><?php if ($this->_tpl_vars['action'] == 1): ?><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>selected contact(s)<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php else: ?><?php echo $this->_tpl_vars['display_name_b']; ?>
<?php endif; ?><?php $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->assign('contact_b', ob_get_contents());ob_end_clean(); ?>
          <td class="label"><label><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Permissions<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></label></td>
          <td>
            <?php $this->_tag_stack[] = array('ts', array('1' => $this->_tpl_vars['display_name_a'],'2' => $this->_tpl_vars['contact_b'])); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Permission for <strong>%1</strong> to access information about <strong>%2</strong><?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><br />
            <?php echo $this->_tpl_vars['form']['is_permission_a_b']['html']; ?>

          </td>
        </tr>
        <tr class="crm-relationship-form-block-is_permission_b_a">
          <td class="label"> </td>
          <td>
            <?php $this->_tag_stack[] = array('ts', array('1' => ((is_array($_tmp=$this->_tpl_vars['contact_b'])) ? $this->_run_mod_handler('ucfirst', true, $_tmp) : ucfirst($_tmp)),'2' => $this->_tpl_vars['display_name_a'])); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Permission for <strong>%1</strong> to access information about <strong>%2</strong><?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><br />
            <?php echo $this->_tpl_vars['form']['is_permission_b_a']['html']; ?>

          </td>
        </tr>
        <tr class="crm-relationship-form-block-is_active">
          <td class="label"><?php echo $this->_tpl_vars['form']['is_active']['label']; ?>
</td>
          <td><?php echo $this->_tpl_vars['form']['is_active']['html']; ?>
</td>
        </tr>
      </table>
      <div id="customData"></div>
      <div class="spacer"></div>
    </div>
  <?php endif; ?>
  <?php if (( $this->_tpl_vars['action'] == 1 ) || ( $this->_tpl_vars['action'] == 2 )): ?>
        <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/common/customData.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
    <script type="text/javascript">
      <?php echo '
      CRM.$(function($) {
        var
          $form = $("form.'; ?>
<?php echo $this->_tpl_vars['form']['formClass']; ?>
<?php echo '"),
          $relationshipTypeSelect = $(\'[name=relationship_type_id]\', $form),
          relationshipData = {},
          contactTypes = '; ?>
<?php echo json_encode($this->_tpl_vars['contactTypes']); ?>
<?php echo ';

        (function init () {
          // Refresh options if relationship types were edited
          $(\'body\').on(\'crmOptionsEdited\', \'a.crm-option-edit-link\', refreshRelationshipData);
          // Initial load and trigger change on select
          refreshRelationshipData().done(function() {
            $relationshipTypeSelect.change();
          });
          $relationshipTypeSelect.change(function() {
            var $select = $(this);

            // ensure we have relationship data before changing anything
            getRelationshipData().then(function() {
              updateSelect($select);
            })
          });
        })();

        /**
         * Fetch contact types and reset relationship data
         */
        function refreshRelationshipData() {
          // reset
          relationshipData = {};

          return getRelationshipData();
        }

        /**
         * Fetches the relationship data using latest relationship types
         */
        function getRelationshipData() {
          var defer = $.Deferred();

          if (!$.isEmptyObject(relationshipData)) {
            defer.resolve(relationshipData);
          }

          CRM.api3("RelationshipType", "get", {"options": {"limit":0}})
            .done(function (data) {
              $.each(data.values, function (key, relType) {
                // Loop over the suffixes for a relationship type
                $.each(["a", "b"], function (index, suffix) {
                  var subtype = relType["contact_subtype_" + suffix];
                  var type = subtype || relType["contact_type_" + suffix];
                  var label = getContactTypeLabel(type) || "Contact";
                  label = label.toLowerCase();
                  relType["placeholder_" + suffix] = "- select " + label + " -";
                });

                relationshipData[relType["id"]] = relType;
              });

              defer.resolve(relationshipData);
            });

          return defer.promise();
        }

        /**
         * Gets a contact type label based on a provided name
         * @param {String} name - the name of the contact type
         */
        function getContactTypeLabel(name) {
          var label = "";

          $.each(contactTypes, function(index, contactType) {
            if (contactType.name === name) {
              label = contactType.label;
              return false;
            }
          });

          return label;
        }

        function updateSelect($select) {
          var
            val = $select.val(),
            $contactField = $(\'#related_contact_id[type=text]\', $form);
          if (!val && $contactField.length) {
            $contactField
              .prop(\'disabled\', true)
              .attr(\'placeholder\', '; ?>
'<?php $this->_tag_stack[] = array('ts', array('escape' => 'js')); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>- first select relationship type -<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>'<?php echo ')
              .change();
          }
          else if (val) {
            var
              pieces = val.split(\'_\'),
              rType = pieces[0],
              source = pieces[1], // a or b
              target = pieces[2], // b or a
              contact_type = relationshipData[rType][\'contact_type_\' + target],
              contact_sub_type = relationshipData[rType][\'contact_sub_type_\' + target];
            // ContactField only exists for ADD action, not update
            if ($contactField.length) {
              var api = {params: {}};
              if (contact_type) {
                api.params.contact_type = contact_type;
              }
              if (contact_sub_type) {
                api.params.contact_sub_type = contact_sub_type;
              }
              $contactField
                .val(\'\')
                .prop(\'disabled\', false)
                .data(\'api-params\', api)
                .data(\'user-filter\', {})
                .attr(\'placeholder\', relationshipData[rType][\'placeholder_\' + target])
                .change();
            }

            // Show/hide employer field
            $(\'.crm-relationship-form-block-is_current_employer\', $form).toggle(rType === '; ?>
'<?php echo $this->_tpl_vars['employmentRelationship']; ?>
'<?php echo ');

            CRM.buildCustomData(\'Relationship\', rType);
          }
        }
      });
      '; ?>

    </script>
  <?php endif; ?>

  <?php if ($this->_tpl_vars['action'] == 8): ?>
    <div class="status">
      <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Are you sure you want to delete this Relationship?<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
    </div>
  <?php endif; ?>
  <div class="crm-submit-buttons"><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/common/formButtons.tpl", 'smarty_include_vars' => array('location' => 'bottom')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></div>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>