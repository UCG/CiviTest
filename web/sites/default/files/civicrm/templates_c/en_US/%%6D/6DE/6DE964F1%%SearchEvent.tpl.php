<?php /* Smarty version 2.6.31, created on 2021-08-23 20:26:30
         compiled from CRM/Event/Form/SearchEvent.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'crmScope', 'CRM/Event/Form/SearchEvent.tpl', 1, false),array('block', 'ts', 'CRM/Event/Form/SearchEvent.tpl', 12, false),array('modifier', 'crmAddClass', 'CRM/Event/Form/SearchEvent.tpl', 19, false),)), $this); ?>
<?php $this->_tag_stack[] = array('crmScope', array('extensionKey' => "")); $_block_repeat=true;smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>  <div class="crm-accordion-wrapper crm-block crm-form-block crm-event-searchevent-form-block collapsed">
    <div class="crm-accordion-header">
      <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Find Events<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
    </div>
    <div class="crm-accordion-body">
  <table class="form-layout">
    <tr class="crm-event-searchevent-form-block-title">
        <td>
          <label><?php echo $this->_tpl_vars['form']['title']['label']; ?>
</label>
          <?php echo ((is_array($_tmp=$this->_tpl_vars['form']['title']['html'])) ? $this->_run_mod_handler('crmAddClass', true, $_tmp, 'twenty') : smarty_modifier_crmAddClass($_tmp, 'twenty')); ?>

          <div class="description font-italic">
                 <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Complete OR partial Event name.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
          </div>
        </td>
        <td><label><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Event Type<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></label>
          <?php echo $this->_tpl_vars['form']['event_type_id']['html']; ?>

        </td>
    </tr>
    <tr>
    <td colspan="2"><div style="height: auto; vertical-align: bottom"><?php echo $this->_tpl_vars['form']['eventsByDates']['html']; ?>
</div></td>
    </tr>
    <tr>
       <td colspan="2">
       <table class="form-layout-compressed" id="id_fromToDates">
        <tr class="">
          <td class="crm-event-searchevent-form-block-start_date">
            <label><?php echo $this->_tpl_vars['form']['start_date']['label']; ?>
</label>
            <?php echo $this->_tpl_vars['form']['start_date']['html']; ?>

          </td>
          <td class="crm-event-searchevent-form-block-end_date">
            <label><?php echo $this->_tpl_vars['form']['end_date']['label']; ?>
</label>
            <?php echo $this->_tpl_vars['form']['end_date']['html']; ?>

          </td>
        </tr>
      </table>
    </td></tr>

        <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/Campaign/Form/addCampaignToComponent.tpl", 'smarty_include_vars' => array('campaignContext' => 'componentSearch','campaignTrClass' => 'crm-event-searchevent-form-block-campaign_id','campaignTdClass' => '')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
    <td class="right"><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/common/formButtons.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></td>
  </table>
    </div>
  </div>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/common/showHide.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<?php echo '
<script type="text/javascript">
if ( document.getElementsByName(\'eventsByDates\')[1].checked ) {
  CRM.$(\'#id_fromToDates\').show();
}
</script>
'; ?>

<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>