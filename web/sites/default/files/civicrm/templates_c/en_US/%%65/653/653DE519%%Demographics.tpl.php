<?php /* Smarty version 2.6.31, created on 2021-08-24 17:20:20
         compiled from CRM/Contact/Page/Inline/Demographics.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'crmScope', 'CRM/Contact/Page/Inline/Demographics.tpl', 1, false),array('block', 'ts', 'CRM/Contact/Page/Inline/Demographics.tpl', 11, false),array('modifier', 'crmDate', 'CRM/Contact/Page/Inline/Demographics.tpl', 27, false),)), $this); ?>
<?php $this->_tag_stack[] = array('crmScope', array('extensionKey' => "")); $_block_repeat=true;smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><div id="crm-demographic-content" <?php if ($this->_tpl_vars['permission'] == 'edit'): ?> class="crm-inline-edit" data-dependent-fields='["#crm-contactname-content"]' data-edit-params='{"cid": "<?php echo $this->_tpl_vars['contactId']; ?>
", "class_name": "CRM_Contact_Form_Inline_Demographics"}'<?php endif; ?>>
  <div class="crm-clear crm-inline-block-content" <?php if ($this->_tpl_vars['permission'] == 'edit'): ?>title="<?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Edit demographics<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>"<?php endif; ?>>
    <?php if ($this->_tpl_vars['permission'] == 'edit'): ?>
    <div class="crm-edit-help">
      <span class="crm-i fa-pencil" aria-hidden="true"></span> <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Edit demographics<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
    </div>
    <?php endif; ?>
    <div class="crm-summary-row">
      <div class="crm-label"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Gender<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></div>
      <div class="crm-content crm-contact-gender_display"><?php if (! empty ( $this->_tpl_vars['gender_display'] )): ?><?php echo $this->_tpl_vars['gender_display']; ?>
<?php endif; ?></div>
    </div>

    <div class="crm-summary-row">
      <div class="crm-label"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Date of Birth<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></div>
      <div class="crm-content crm-contact-birth_date_display">
        <?php $this->assign('date_format', $this->_tpl_vars['fields']['birth_date']['smarty_view_format']); ?>
        <?php if (! empty ( $this->_tpl_vars['birth_date'] )): ?>
          <?php echo ((is_array($_tmp=$this->_tpl_vars['birth_date'])) ? $this->_run_mod_handler('crmDate', true, $_tmp, $this->_tpl_vars['date_format']) : smarty_modifier_crmDate($_tmp, $this->_tpl_vars['date_format'])); ?>

        <?php endif; ?>
      </div>
    </div>
      <?php if (! empty ( $this->_tpl_vars['is_deceased'] )): ?>
        <?php if (! empty ( $this->_tpl_vars['deceased_date'] )): ?>
          <div class="crm-summary-row">
            <div class="crm-label"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Date Deceased<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></div>
            <div class="crm-content crm-contact-deceased_date_display">
              <?php $this->assign('date_format', $this->_tpl_vars['fields']['birth_date']['smarty_view_format']); ?>
              <?php echo ((is_array($_tmp=$this->_tpl_vars['deceased_date'])) ? $this->_run_mod_handler('crmDate', true, $_tmp, $this->_tpl_vars['date_format']) : smarty_modifier_crmDate($_tmp, $this->_tpl_vars['date_format'])); ?>

              <?php if (! empty ( $this->_tpl_vars['birth_date'] )): ?>(<?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Age<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?> <?php if (! empty ( $this->_tpl_vars['age']['y'] )): ?><?php $this->_tag_stack[] = array('ts', array('count' => $this->_tpl_vars['age']['y'],'plural' => '%count years')); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>%count year<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php elseif (! empty ( $this->_tpl_vars['age']['m'] )): ?><?php $this->_tag_stack[] = array('ts', array('count' => $this->_tpl_vars['age']['m'],'plural' => '%count months')); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>%count month<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php endif; ?>)<?php endif; ?>
            </div>
          </div>
        <?php else: ?>
          <div class="crm-summary-row">
            <div class="crm-label"></div>
            <div class="crm-content crm-contact-deceased_message"><span class="font-red upper"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Contact is Deceased<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></span></div>
          </div>
        <?php endif; ?>
      <?php else: ?>
        <div class="crm-summary-row">
          <div class="crm-label"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Age<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></div>
          <div class="crm-content crm-contact-age_display"><?php if (! empty ( $this->_tpl_vars['age']['y'] )): ?><?php $this->_tag_stack[] = array('ts', array('count' => $this->_tpl_vars['age']['y'],'plural' => '%count years')); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>%count year<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php elseif (! empty ( $this->_tpl_vars['age']['m'] )): ?><?php $this->_tag_stack[] = array('ts', array('count' => $this->_tpl_vars['age']['m'],'plural' => '%count months')); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>%count month<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php endif; ?></div>
        </div>
      <?php endif; ?>
    </div>
  </div>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>