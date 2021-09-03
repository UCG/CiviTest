<?php /* Smarty version 2.6.31, created on 2021-08-23 20:32:58
         compiled from CRM/Volunteer/Form/Volunteer.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'crmScope', 'CRM/Volunteer/Form/Volunteer.tpl', 1, false),array('block', 'ts', 'CRM/Volunteer/Form/Volunteer.tpl', 6, false),)), $this); ?>
<?php $this->_tag_stack[] = array('crmScope', array('extensionKey' => "")); $_block_repeat=true;smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><div class="crm-section crm-volunteer-event-action-items-all">
    <div id="crm-volunteer-event-action-items">
        <span class="crm-button crm-icon-button crm-span-button" id="crm-volunteer-event-define">
            <span class="crm-button-icon ui-icon-pencil"> </span>
            <span class="crm-span-button-text">
                <?php $this->_tag_stack[] = array('ts', array('domain' => 'org.civicrm.volunteer')); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Define Volunteer Opportunities<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
            </span>
        </span>

        <span class="crm-button crm-icon-button crm-span-button" id="crm-volunteer-event-assign">
            <span class="crm-button-icon ui-icon-pencil"> </span>
            <span class="crm-span-button-text">
                <?php $this->_tag_stack[] = array('ts', array('domain' => 'org.civicrm.volunteer')); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Assign Volunteers<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
            </span>
        </span>

        <span class="crm-button crm-icon-button crm-span-button" id="crm-volunteer-event-log-hours">
            <span class="crm-button-icon ui-icon-pencil"> </span>
            <span class="crm-span-button-text">
                <?php $this->_tag_stack[] = array('ts', array('domain' => 'org.civicrm.volunteer')); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Log Volunteer Hours<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
            </span>
        </span>

    </div>
    <span class="crm-button crm-icon-button crm-span-button" id="crm-volunteer-event-edit">
        <span class="crm-button-icon ui-icon-pencil"> </span>
        <span class="crm-span-button-text">
            <?php $this->_tag_stack[] = array('ts', array('domain' => 'org.civicrm.volunteer')); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Edit Settings<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
        </span>
    </span>

    <div class="clear"></div>
</div>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>