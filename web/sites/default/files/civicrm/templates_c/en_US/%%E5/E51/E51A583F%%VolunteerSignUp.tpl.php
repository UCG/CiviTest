<?php /* Smarty version 2.6.31, created on 2021-08-23 20:50:32
         compiled from CRM/Volunteer/Form/VolunteerSignUp.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'crmScope', 'CRM/Volunteer/Form/VolunteerSignUp.tpl', 1, false),array('block', 'ts', 'CRM/Volunteer/Form/VolunteerSignUp.tpl', 5, false),)), $this); ?>
<?php $this->_tag_stack[] = array('crmScope', array('extensionKey' => "")); $_block_repeat=true;smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><div class="crm-block crm-volunteer-signup-form-block">

  <div class="help">
    <p>
      <?php $this->_tag_stack[] = array('ts', array('domain' => 'org.civicrm.volunteer')); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Thank you for being a volunteer! You are registering for the following volunteer commitments:<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
    </p>
  </div>

  <p class="description">
    <?php $this->_tag_stack[] = array('ts', array('domain' => 'org.civicrm.volunteer')); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>For additional project or role detail, click the corresponding detail icon in the table below.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
    <span class="icon ui-icon-comment"></span>
  </p>

  <div class="crm-volunteer-signup-summary">
    <table>
      <tr>
        <th class="crm-vol-opp-project"><?php $this->_tag_stack[] = array('ts', array('domain' => 'org.civicrm.volunteer')); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Project Title<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></th>
        <th class="crm-vol-opp-beneficiary"><?php $this->_tag_stack[] = array('ts', array('domain' => 'org.civicrm.volunteer')); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Project Beneficiaries<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></th>
        <th class="crm-vol-opp-role"><?php $this->_tag_stack[] = array('ts', array('domain' => 'org.civicrm.volunteer')); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Role<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></th>
        <th class="crm-vol-opp-time"><?php $this->_tag_stack[] = array('ts', array('domain' => 'org.civicrm.volunteer')); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Date and Time<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></th>
      </tr>
      <?php $_from = $this->_tpl_vars['volunteerNeeds']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['volunteerNeed']):
?>
        <tr>
          <td class="crm-vol-opp-project">
            <?php echo $this->_tpl_vars['volunteerNeed']['project']['title']; ?>

            <?php if ($this->_tpl_vars['volunteerNeed']['project']['description']): ?>
              <span class="icon ui-icon-comment crm-vol-description">
                <div class="vol-project-description-wrapper"><?php echo $this->_tpl_vars['volunteerNeed']['project']['description']; ?>
</div>
              </span>
            <?php endif; ?>
          </td>
          <td class="crm-vol-opp-beneficiary"><?php echo $this->_tpl_vars['volunteerNeed']['project']['beneficiaries']; ?>
</td>
          <td class="crm-vol-opp-role">
            <?php echo $this->_tpl_vars['volunteerNeed']['role_label']; ?>

            <?php if ($this->_tpl_vars['volunteerNeed']['role_description']): ?>
              <span class="icon ui-icon-comment crm-vol-description">
                <div class="vol-role-description-wrapper"><?php echo $this->_tpl_vars['volunteerNeed']['role_description']; ?>
</div>
              </span>
            <?php endif; ?>
          </td>
          <td class="crm-vol-opp-time"><?php echo $this->_tpl_vars['volunteerNeed']['display_time']; ?>
</td>
        </tr>
      <?php endforeach; endif; unset($_from); ?>
    </table>
  </div>

  <div class="help">
    <p>
      <?php $this->_tag_stack[] = array('ts', array('domain' => 'org.civicrm.volunteer')); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Please provide the following information and submit the form to complete your registration.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
    </p>
  </div>

  <div class="crm-volunteer-signup-profiles">
    <?php $_from = $this->_tpl_vars['customProfiles']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['ufID'] => $this->_tpl_vars['ufFields']):
?>
      <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/UF/Form/Block.tpl", 'smarty_include_vars' => array('fields' => $this->_tpl_vars['ufFields'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
    <?php endforeach; endif; unset($_from); ?>
  </div>

  <?php if ($this->_tpl_vars['allowAdditionalVolunteers']): ?>

    <fieldset class="crm-volunteer-additional-volunteers-section">
      <legend><?php $this->_tag_stack[] = array('ts', array('domain' => 'org.civicrm.volunteer')); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Additional Volunteers<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></legend>
      <div class="crm-section">
        <div class="label"><?php echo $this->_tpl_vars['form']['additionalVolunteerQuantity']['label']; ?>
</div>
        <div class="content"><?php echo $this->_tpl_vars['form']['additionalVolunteerQuantity']['html']; ?>
</div>
        <div class="clear"></div>
      </div>

      <div class="crm-volunteer-additional-volunteers" id="additionalVolunteers">
        <?php if ($this->_tpl_vars['additionalVolunteerProfiles']): ?>
          <?php $_from = $this->_tpl_vars['additionalVolunteerProfiles']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['additionalVolunteer']):
?>
            <div class='additional-volunteer-profile'>
              <?php $_from = $this->_tpl_vars['additionalVolunteer']['profiles']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['ufID'] => $this->_tpl_vars['ufFields']):
?>
                <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/UF/Form/Block.tpl", 'smarty_include_vars' => array('fields' => $this->_tpl_vars['ufFields'],'prefix' => $this->_tpl_vars['additionalVolunteer']['prefix'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
              <?php endforeach; endif; unset($_from); ?>
              <div class="clear"></div>
            </div>
          <?php endforeach; endif; unset($_from); ?>
        <?php endif; ?>
      </div>
    </fieldset>
  <?php endif; ?>

  <div>
    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/common/formButtons.tpl", 'smarty_include_vars' => array('location' => 'bottom')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
  </div>
</div>

<?php if ($this->_tpl_vars['allowAdditionalVolunteers']): ?>
</form>
<form>
  <div class="crm-volunteer-additional-volunteers-template">
    <div class='additional-volunteer-profile'>
      <?php $_from = $this->_tpl_vars['additionalVolunteersTemplate']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['ufID'] => $this->_tpl_vars['ufFields']):
?>
        <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/UF/Form/Block.tpl", 'smarty_include_vars' => array('fields' => $this->_tpl_vars['ufFields'],'prefix' => 'additionalVolunteersTemplate')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
      <?php endforeach; endif; unset($_from); ?>
      <div class="clear"></div>
    </div>
  </div>
<?php endif; ?>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/common/notifications.tpl", 'smarty_include_vars' => array('location' => 'bottom')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>