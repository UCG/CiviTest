<?php /* Smarty version 2.6.31, created on 2021-08-25 20:39:55
         compiled from CRM/Badge/Form/Layout.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'crmScope', 'CRM/Badge/Form/Layout.tpl', 1, false),array('block', 'ts', 'CRM/Badge/Form/Layout.tpl', 11, false),array('block', 'icon', 'CRM/Badge/Form/Layout.tpl', 16, false),array('function', 'help', 'CRM/Badge/Form/Layout.tpl', 27, false),array('modifier', 'crmAddClass', 'CRM/Badge/Form/Layout.tpl', 111, false),)), $this); ?>
<?php $this->_tag_stack[] = array('crmScope', array('extensionKey' => "")); $_block_repeat=true;smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><h3><?php if ($this->_tpl_vars['action'] == 1): ?><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>New Badge Layout<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php elseif ($this->_tpl_vars['action'] == 2): ?><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Edit Badge Layout<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php else: ?><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Delete Badge Layout<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php endif; ?></h3>
<div class="crm-block crm-form-block crm-badge-layout-form-block">
  <div class="crm-submit-buttons"><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/common/formButtons.tpl", 'smarty_include_vars' => array('location' => 'top')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></div>
  <?php if ($this->_tpl_vars['action'] == 8): ?>
    <div class="messages status no-popup">
      <?php $this->_tag_stack[] = array('icon', array('icon' => "fa-info-circle")); $_block_repeat=true;smarty_block_icon($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_icon($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
      <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>This may mean the loss of a substantial amount of data, and the action cannot be undone.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?> <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Do you want to continue?<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
    </div>
  <?php else: ?>
    <table class="form-layout-compressed">
      <tr class="crm-badge-layout-form-block-title">
        <td class="label"><?php echo $this->_tpl_vars['form']['title']['label']; ?>
</td>
        <td><?php echo $this->_tpl_vars['form']['title']['html']; ?>
</td>
      </tr>
      <tr class="crm-badge-layout-form-block-label_format_name">
        <td class="label"><?php echo $this->_tpl_vars['form']['label_format_name']['label']; ?>
</td>
        <td><?php echo $this->_tpl_vars['form']['label_format_name']['html']; ?>
 <?php echo smarty_function_help(array('id' => "id-label_format"), $this);?>
</td>
      </tr>
      <tr class="crm-badge-layout-form-block-description">
        <td class="label"><?php echo $this->_tpl_vars['form']['description']['label']; ?>
</td>
        <td><?php echo $this->_tpl_vars['form']['description']['html']; ?>
</td>
      </tr>
      <tr class="crm-badge-layout-form-block-image_1">
        <td class="label"><?php echo $this->_tpl_vars['form']['image_1']['label']; ?>
</td>
        <td>
         <table>
           <tr>
            <td><?php echo $this->_tpl_vars['form']['image_1']['html']; ?>

               <a href="#" class="crm-hover-button clear-image" title="<?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Clear<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>"><i class="crm-i fa-times" aria-hidden="true"></i></a>
             <br/>
             <span class="description"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Click above and select a file by double clicking on it.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></span>
            </td>
            <td>
             <?php echo $this->_tpl_vars['form']['width_image_1']['html']; ?>
<br/><?php echo $this->_tpl_vars['form']['width_image_1']['label']; ?>

            </td>
           <td>
              <?php echo $this->_tpl_vars['form']['height_image_1']['html']; ?>
</br><?php echo $this->_tpl_vars['form']['height_image_1']['label']; ?>

            </td>
           </tr>
         </table>
        </td>
      </tr>
      <tr class="crm-badge-layout-form-block-image_2">
        <td class="label"><?php echo $this->_tpl_vars['form']['image_2']['label']; ?>
</td>
        <td>
         <table>
          <tr>
           <td><?php echo $this->_tpl_vars['form']['image_2']['html']; ?>

              <a href="#" class="crm-hover-button clear-image" title="<?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Clear<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>"><i class="crm-i fa-times" aria-hidden="true"></i></a>
            <br/>
            <span class="description"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Click above and select a file by double clicking on it.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></span>
           </td>
           <td>
            <?php echo $this->_tpl_vars['form']['width_image_2']['html']; ?>
<br/><?php echo $this->_tpl_vars['form']['width_image_2']['label']; ?>

           </td>
           <td>
            <?php echo $this->_tpl_vars['form']['height_image_2']['html']; ?>
<br/><?php echo $this->_tpl_vars['form']['height_image_2']['label']; ?>

           </td>
          </tr>
         </table>
        </td>
      </tr>
      <tr class="crm-badge-layout-form-block-participant_image">
        <td class="label"><?php echo $this->_tpl_vars['form']['show_participant_image']['label']; ?>
</td>
        <td>
         <table>
           <tr>
            <td><?php echo $this->_tpl_vars['form']['show_participant_image']['html']; ?>

             <br/>
             <span class="description"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Select this option if you want to use a contact's image on their name badge.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></span>
            </td>
            <td>
             <?php echo $this->_tpl_vars['form']['width_participant_image']['html']; ?>
<br/><?php echo $this->_tpl_vars['form']['width_participant_image']['label']; ?>

            </td>
           <td>
              <?php echo $this->_tpl_vars['form']['height_participant_image']['html']; ?>
</br><?php echo $this->_tpl_vars['form']['height_participant_image']['label']; ?>

            </td>
           <td>
              <?php echo $this->_tpl_vars['form']['alignment_participant_image']['html']; ?>
</br><?php echo $this->_tpl_vars['form']['alignment_participant_image']['label']; ?>

            </td>
           </tr>
         </table>
        </td>
      </tr>
      <tr class="crm-badge-layout-form-block-elements">
        <td class="label"><label><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Elements<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></label></td>
        <td>
          <table class="form-layout-compressed">
            <tr>
              <td><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Row<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></td>
              <td><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Label<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></td>
              <td><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Font<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></td>
              <td><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Size<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></td>
              <td><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Style<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></td>
              <td><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Alignment<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></td>
            </tr>
            <?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['start'] = (int)1;
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['rowCount']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['i']['show'] = true;
$this->_sections['i']['max'] = $this->_sections['i']['loop'];
$this->_sections['i']['step'] = 1;
if ($this->_sections['i']['start'] < 0)
    $this->_sections['i']['start'] = max($this->_sections['i']['step'] > 0 ? 0 : -1, $this->_sections['i']['loop'] + $this->_sections['i']['start']);
else
    $this->_sections['i']['start'] = min($this->_sections['i']['start'], $this->_sections['i']['step'] > 0 ? $this->_sections['i']['loop'] : $this->_sections['i']['loop']-1);
if ($this->_sections['i']['show']) {
    $this->_sections['i']['total'] = min(ceil(($this->_sections['i']['step'] > 0 ? $this->_sections['i']['loop'] - $this->_sections['i']['start'] : $this->_sections['i']['start']+1)/abs($this->_sections['i']['step'])), $this->_sections['i']['max']);
    if ($this->_sections['i']['total'] == 0)
        $this->_sections['i']['show'] = false;
} else
    $this->_sections['i']['total'] = 0;
if ($this->_sections['i']['show']):

            for ($this->_sections['i']['index'] = $this->_sections['i']['start'], $this->_sections['i']['iteration'] = 1;
                 $this->_sections['i']['iteration'] <= $this->_sections['i']['total'];
                 $this->_sections['i']['index'] += $this->_sections['i']['step'], $this->_sections['i']['iteration']++):
$this->_sections['i']['rownum'] = $this->_sections['i']['iteration'];
$this->_sections['i']['index_prev'] = $this->_sections['i']['index'] - $this->_sections['i']['step'];
$this->_sections['i']['index_next'] = $this->_sections['i']['index'] + $this->_sections['i']['step'];
$this->_sections['i']['first']      = ($this->_sections['i']['iteration'] == 1);
$this->_sections['i']['last']       = ($this->_sections['i']['iteration'] == $this->_sections['i']['total']);
?>
              <?php $this->assign('rowNumber', $this->_sections['i']['index']); ?>
              <tr>
                <td>#<?php echo $this->_tpl_vars['rowNumber']; ?>
</td>
                <td><?php echo ((is_array($_tmp=$this->_tpl_vars['form']['token'][$this->_tpl_vars['rowNumber']]['html'])) ? $this->_run_mod_handler('crmAddClass', true, $_tmp, 'twenty') : smarty_modifier_crmAddClass($_tmp, 'twenty')); ?>
</td>
                <td><?php echo $this->_tpl_vars['form']['font_name'][$this->_tpl_vars['rowNumber']]['html']; ?>
</td>
                <td><?php echo $this->_tpl_vars['form']['font_size'][$this->_tpl_vars['rowNumber']]['html']; ?>
</td>
                <td><?php echo $this->_tpl_vars['form']['font_style'][$this->_tpl_vars['rowNumber']]['html']; ?>
</td>
                <td><?php echo $this->_tpl_vars['form']['text_alignment'][$this->_tpl_vars['rowNumber']]['html']; ?>
</td>
              </tr>
            <?php endfor; endif; ?>
          </table>
        </td>
      </tr>
      <tr class="crm-badge-layout-form-block-add_barcode">
        <td class="label"><?php echo $this->_tpl_vars['form']['add_barcode']['label']; ?>
</td>
        <td><?php echo $this->_tpl_vars['form']['add_barcode']['html']; ?>
&nbsp;&nbsp;&nbsp;<?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>of type<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>&nbsp;&nbsp;&nbsp;
          <?php echo $this->_tpl_vars['form']['barcode_type']['html']; ?>
&nbsp;&nbsp;&nbsp;<?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>on<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>&nbsp;&nbsp;&nbsp;<?php echo $this->_tpl_vars['form']['barcode_alignment']['html']; ?>

        </td>
      </tr>
      <tr class="crm-badge-layout-form-block-is_active">
        <td class="label"><?php echo $this->_tpl_vars['form']['is_active']['label']; ?>
</td>
        <td><?php echo $this->_tpl_vars['form']['is_active']['html']; ?>
</td>
      </tr>
      <tr class="crm-badge-layout-form-block-is_default">
        <td class="label"><?php echo $this->_tpl_vars['form']['is_default']['label']; ?>
</td>
        <td><?php echo $this->_tpl_vars['form']['is_default']['html']; ?>
</td>
      </tr>
      <tr class="crm-badge-layout-form-block-is_reserved">
        <td class="label"><?php echo $this->_tpl_vars['form']['is_reserved']['label']; ?>
</td>
        <td><?php echo $this->_tpl_vars['form']['is_reserved']['html']; ?>
</td>
      </tr>
    </table>
  <?php endif; ?>
  <div class="crm-submit-buttons"><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/common/formButtons.tpl", 'smarty_include_vars' => array('location' => 'bottom')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></div>
</div>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>