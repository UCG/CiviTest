<?php /* Smarty version 2.6.31, created on 2021-08-24 18:59:55
         compiled from CRM/Report/Form/Statistics.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'crmScope', 'CRM/Report/Form/Statistics.tpl', 1, false),array('modifier', 'escape', 'CRM/Report/Form/Statistics.tpl', 21, false),array('modifier', 'crmMoney', 'CRM/Report/Form/Statistics.tpl', 45, false),array('modifier', 'crmNumberFormat', 'CRM/Report/Form/Statistics.tpl', 49, false),)), $this); ?>
<?php $this->_tag_stack[] = array('crmScope', array('extensionKey' => "")); $_block_repeat=true;smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php if (! empty ( $this->_tpl_vars['top'] )): ?>
  <?php if (! empty ( $this->_tpl_vars['printOnly'] )): ?>
    <h1><?php echo $this->_tpl_vars['reportTitle']; ?>
</h1>
    <div id="report-date"><?php if (! empty ( $this->_tpl_vars['reportDate'] )): ?><?php echo $this->_tpl_vars['reportDate']; ?>
<?php endif; ?></div>
  <?php endif; ?>
  <?php if (! empty ( $this->_tpl_vars['statistics'] )): ?>
    <table class="report-layout statistics-table">
      <?php if (! empty ( $this->_tpl_vars['statistics']['groups'] )): ?>
        <?php $_from = $this->_tpl_vars['statistics']['groups']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['row']):
?>
          <tr>
            <th class="statistics" scope="row"><?php echo $this->_tpl_vars['row']['title']; ?>
</th>
            <td><?php echo ((is_array($_tmp=$this->_tpl_vars['row']['value'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</td>
          </tr>
        <?php endforeach; endif; unset($_from); ?>
      <?php endif; ?>
      <?php if (! empty ( $this->_tpl_vars['statistics']['filters'] )): ?>
        <?php $_from = $this->_tpl_vars['statistics']['filters']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['row']):
?>
          <tr>
            <th class="statistics" scope="row"><?php echo $this->_tpl_vars['row']['title']; ?>
</th>
            <td><?php echo ((is_array($_tmp=$this->_tpl_vars['row']['value'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</td>
          </tr>
        <?php endforeach; endif; unset($_from); ?>
      <?php endif; ?>
    </table>
  <?php endif; ?>
<?php endif; ?>

<?php if (! empty ( $this->_tpl_vars['bottom'] ) && ! empty ( $this->_tpl_vars['rows'] ) && ! empty ( $this->_tpl_vars['statistics'] )): ?>
  <table class="report-layout">
    <?php if (! empty ( $this->_tpl_vars['statistics']['counts'] )): ?>
      <?php $_from = $this->_tpl_vars['statistics']['counts']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['row']):
?>
        <tr>
          <th class="statistics" scope="row"><?php echo $this->_tpl_vars['row']['title']; ?>
</th>
          <td>
            <?php if (! empty ( $this->_tpl_vars['row']['type'] ) && $this->_tpl_vars['row']['type'] == 1024): ?>
              <?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['row']['value'])) ? $this->_run_mod_handler('crmMoney', true, $_tmp) : smarty_modifier_crmMoney($_tmp)))) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>

            <?php elseif (! empty ( $this->_tpl_vars['row']['type'] ) && $this->_tpl_vars['row']['type'] == 2): ?>
              <?php echo ((is_array($_tmp=$this->_tpl_vars['row']['value'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>

            <?php else: ?>
               <?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['row']['value'])) ? $this->_run_mod_handler('crmNumberFormat', true, $_tmp) : smarty_modifier_crmNumberFormat($_tmp)))) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>

            <?php endif; ?>

          </td>
        </tr>
      <?php endforeach; endif; unset($_from); ?>
    <?php endif; ?>
  </table>
<?php endif; ?>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>