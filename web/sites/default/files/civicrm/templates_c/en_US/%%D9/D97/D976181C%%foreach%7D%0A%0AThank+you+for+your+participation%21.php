<?php /* Smarty version 2.6.31, created on 2021-08-23 20:50:50
         compiled from string:Dear+Tory+Trone%2C%0A%0AYou+are+confirmed+to+volunteer+for+the+following+project%28s%29:%0A%0A%0A%7Bforeach+from%3D%24volunteer_projects+item%3Dvolunteer_project%7D%0AProject:+%7B%24volunteer_project.title%7D%0A%0A%7Bif+%21empty%28%24volunteer_project.description%29%7D%0ADescription:+%7B%24volunteer_project.description%7D%0A%7B/if%7D%0A%0A%7Bif+%21empty%28%24volunteer_project.location%29%7D%0ALocation:%0A++++%7B%24volunteer_project.location.address.street_address%7D%0A++++%7B%24volunteer_project.location.address.city%7D%0A%0A++++%7B%24volunteer_project.location.email%7D%0A++++%7B%24volunteer_project.location.phone%7D%0A%7B/if%7D%0A%0AYour+Contact:%0A++++%7Bforeach+from%3D%24volunteer_project.contacts+item%3Dperson%7D%0A++++%7B%24person.display_name%7D%2C+%7B%24person.email%7D%2C+%7B%24person.phone%7D%0A++++%7B/foreach%7D%0A%0AShifts:%0A++++Role+%7C+Description+%7C+Start+Time+%7C+Duration%0A++++%7Bforeach+from%3D%24volunteer_project.opportunities+item%3Dopportunity%7D%0A++++%7B%24opportunity.role%7D+%7C+%7B%24opportunity.description%7D+%7C+%7B%24opportunity.display_time%7D+%7C+%7B%24opportunity.duration%7D%0A++++%7B/foreach%7D%0A%0A%7B/foreach%7D%0A%0AThank+you+for+your+participation%21 */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'crmScope', 'string:Dear Tory Trone,

You are confirmed to volunteer for the following project(s):


{foreach from=$volunteer_projects item=volunteer_project}
Project: {$volunteer_project.title}

{if !empty($volunteer_project.description)}
Description: {$volunteer_project.description}
{/if}

{if !empty($volunteer_project.location)}
Location:
    {$volunteer_project.location.address.street_address}
    {$volunteer_project.location.address.city}

    {$volunteer_project.location.email}
    {$volunteer_project.location.phone}
{/if}

Your Contact:
    {foreach from=$volunteer_project.contacts item=person}
    {$person.display_name}, {$person.email}, {$person.phone}
    {/foreach}

Shifts:
    Role | Description | Start Time | Duration
    {foreach from=$volunteer_project.opportunities item=opportunity}
    {$opportunity.role} | {$opportunity.description} | {$opportunity.display_time} | {$opportunity.duration}
    {/foreach}

{/foreach}

Thank you for your participation!', 1, false),)), $this); ?>
<?php $this->_tag_stack[] = array('crmScope', array('extensionKey' => "")); $_block_repeat=true;smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Dear Tory Trone,

You are confirmed to volunteer for the following project(s):


<?php $_from = $this->_tpl_vars['volunteer_projects']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['volunteer_project']):
?>
Project: <?php echo $this->_tpl_vars['volunteer_project']['title']; ?>


<?php if (! empty ( $this->_tpl_vars['volunteer_project']['description'] )): ?>
Description: <?php echo $this->_tpl_vars['volunteer_project']['description']; ?>

<?php endif; ?>

<?php if (! empty ( $this->_tpl_vars['volunteer_project']['location'] )): ?>
Location:
    <?php echo $this->_tpl_vars['volunteer_project']['location']['address']['street_address']; ?>

    <?php echo $this->_tpl_vars['volunteer_project']['location']['address']['city']; ?>


    <?php echo $this->_tpl_vars['volunteer_project']['location']['email']; ?>

    <?php echo $this->_tpl_vars['volunteer_project']['location']['phone']; ?>

<?php endif; ?>

Your Contact:
    <?php $_from = $this->_tpl_vars['volunteer_project']['contacts']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['person']):
?>
    <?php echo $this->_tpl_vars['person']['display_name']; ?>
, <?php echo $this->_tpl_vars['person']['email']; ?>
, <?php echo $this->_tpl_vars['person']['phone']; ?>

    <?php endforeach; endif; unset($_from); ?>

Shifts:
    Role | Description | Start Time | Duration
    <?php $_from = $this->_tpl_vars['volunteer_project']['opportunities']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['opportunity']):
?>
    <?php echo $this->_tpl_vars['opportunity']['role']; ?>
 | <?php echo $this->_tpl_vars['opportunity']['description']; ?>
 | <?php echo $this->_tpl_vars['opportunity']['display_time']; ?>
 | <?php echo $this->_tpl_vars['opportunity']['duration']; ?>

    <?php endforeach; endif; unset($_from); ?>

<?php endforeach; endif; unset($_from); ?>

Thank you for your participation!<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>