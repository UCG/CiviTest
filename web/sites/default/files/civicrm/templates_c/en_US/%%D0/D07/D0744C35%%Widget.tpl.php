<?php /* Smarty version 2.6.31, created on 2021-08-25 21:11:26
         compiled from CRM/Contribute/Form/ContributionPage/Widget.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'crmScope', 'CRM/Contribute/Form/ContributionPage/Widget.tpl', 1, false),array('block', 'crmRegion', 'CRM/Contribute/Form/ContributionPage/Widget.tpl', 10, false),array('block', 'ts', 'CRM/Contribute/Form/ContributionPage/Widget.tpl', 11, false),array('block', 'icon', 'CRM/Contribute/Form/ContributionPage/Widget.tpl', 14, false),array('function', 'help', 'CRM/Contribute/Form/ContributionPage/Widget.tpl', 20, false),)), $this); ?>
<?php $this->_tag_stack[] = array('crmScope', array('extensionKey' => "")); $_block_repeat=true;smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php $this->_tag_stack[] = array('crmRegion', array('name' => "contribute-form-contributionpage-widget-main")); $_block_repeat=true;smarty_block_crmRegion($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
<h3><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Configure Widget<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></h3>
<?php if ($this->_tpl_vars['showStatus']): ?>
<div class="messages status no-popup">
    <?php $this->_tag_stack[] = array('icon', array('icon' => "fa-info-circle")); $_block_repeat=true;smarty_block_icon($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_icon($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
    <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>It looks like you may have posted and / or distributed the flash version of the Contribution widget. We won't be supporting the flash version in next release. You should try and get all sites using the flash widget to update to the improved HTML widget code below as soon as possible.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
</div>
<?php endif; ?>
<div id="form" class="crm-block crm-form-block crm-contribution-contributionpage-widget-form-block">
    <div class="help">
        <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>CiviContribute widgets allow you and your supporters to easily promote this fund-raising campaign. Widget code can be added to any web page.  It will provide a real-time display of current contribution results and a direct link to this contribution page.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?> <?php echo smarty_function_help(array('id' => "id-intro"), $this);?>

    </div>
<div class="crm-submit-buttons"><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/common/formButtons.tpl", 'smarty_include_vars' => array('location' => 'top')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></div>
    <table class="form-layout-compressed">
      <tr class="crm-contribution-contributionpage-widget-form-block-is_active"><td style="width: 12em;">&nbsp;</td><td style="font-size: 10pt;"><?php echo $this->_tpl_vars['form']['is_active']['html']; ?>
&nbsp;<?php echo $this->_tpl_vars['form']['is_active']['label']; ?>
</td></tr>
    </table>
    <div class="spacer"></div>

    <div id="widgetFields">
        <table class="form-layout-compressed">
            <tr class="crm-contribution-contributionpage-widget-form-block-title"><td class="label"><?php echo $this->_tpl_vars['form']['title']['label']; ?>
<span class="crm-marker"> *</span></td><td><?php echo $this->_tpl_vars['form']['title']['html']; ?>
</td></tr>
            <tr class="crm-contribution-form-block-url_logo"><td class="label"><?php echo $this->_tpl_vars['form']['url_logo']['label']; ?>
</span></td><td><?php echo $this->_tpl_vars['form']['url_logo']['html']; ?>
</td></tr>
            <tr class="crm-contribution-contributionpage-widget-form-block-button_title"><td class="label"><?php echo $this->_tpl_vars['form']['button_title']['label']; ?>
</td><td><?php echo $this->_tpl_vars['form']['button_title']['html']; ?>
</td></tr>
            <tr class="crm-contribution-contributionpage-widget-form-block-about"><td class="label"><?php echo $this->_tpl_vars['form']['about']['label']; ?>
<span class="crm-marker"> *</span></td><td><?php echo $this->_tpl_vars['form']['about']['html']; ?>

<br /><span class="description"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Enter content for the about message. You may include HTML formatting tags. You can also include images, as long as they are already uploaded to a server&mdash;reference them using complete URLs.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></span>
</td></tr>

        </table>

        <div id="id-get_code">
            <fieldset>
            <legend><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Preview Widget and Get Code<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></legend>
            <div class="col1">
                <?php if ($this->_tpl_vars['widget_id']): ?>
                    <div class="description">
                        <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Click <strong>Save & Preview</strong> to save any changes to your settings, and preview the widget again on this page.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
                    </div>
                    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/Contribute/Page/Widget.tpl", 'smarty_include_vars' => array('widgetId' => $this->_tpl_vars['widget_id'],'cpageId' => $this->_tpl_vars['cpageId'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><br />
                <?php else: ?>
                    <div class="description">
                        <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Click <strong>Save & Preview</strong> to save your settings and preview the widget on this page.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><br />
                    </div>
                <?php endif; ?>
                <div><?php echo $this->_tpl_vars['form']['_qf_Widget_refresh']['html']; ?>
</div>
            </div>
            <div class="col2">
                                <?php if ($this->_tpl_vars['widget_id']): ?>
                    <div class="description">
                        <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Add this widget to any web page by copying and pasting the code below.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
                    </div>
                    <textarea rows="8" cols="50" name="widget_code" id="widget_code"><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/Contribute/Page/Widget.tpl", 'smarty_include_vars' => array('widgetId' => $this->_tpl_vars['widget_id'],'cpageId' => $this->_tpl_vars['cpageId'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></textarea>
                    <br />
                    <strong><a href="#" onclick="Widget.widget_code.select(); return false;"><i class="crm-i fa-code" aria-hidden="true"></i> <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Select Code<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></a></strong>
                <?php else: ?>
                    <div class="description">
                        <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>The code for adding this widget to web pages will be displayed here after you click <strong>Save and Preview</strong>.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
                    </div>
                <?php endif; ?>
            </div>
            </fieldset>
        </div>


        <div class="crm-accordion-wrapper collapsed crm-case-roles-block">
         <div class="crm-accordion-header">
          <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Edit Widget Colors<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
         </div><!-- /.crm-accordion-header -->
         <div class="crm-accordion-body">
            <table class="form-layout-compressed">
            <?php $_from = $this->_tpl_vars['colorFields']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['fieldName'] => $this->_tpl_vars['field']):
?>
              <tr><td class="label"><?php echo $this->_tpl_vars['form'][$this->_tpl_vars['fieldName']]['label']; ?>
<span class="crm-marker"> *</span></td><td><?php echo $this->_tpl_vars['form'][$this->_tpl_vars['fieldName']]['html']; ?>
</td></tr>
            <?php endforeach; endif; unset($_from); ?>
            </table>
         </div><!-- /.crm-accordion-body -->
        </div><!-- /.crm-accordion-wrapper -->

    </div>

    <div id="crm-submit-buttons">
        <table id="preview" class"form-layout-compressed">
     <tr>
        <td><?php echo $this->_tpl_vars['form']['_qf_Widget_refresh']['html']; ?>
</td>
        </td>
     </tr>
  </table>
    </div>
  <div class="crm-submit-buttons"><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/common/formButtons.tpl", 'smarty_include_vars' => array('location' => 'bottom')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></div>

</div>

<?php echo '
<script type="text/javascript">
  var is_act = document.getElementsByName(\'is_active\');
    if ( ! is_act[0].checked) {
           cj(\'#widgetFields\').hide();
     cj(\'#preview\').hide();
  }
    function widgetBlock(chkbox) {
        if (chkbox.checked) {
        cj(\'#widgetFields\').show();
        cj(\'#preview\').show();
        return;
        } else {
        cj(\'#widgetFields\').hide();
        cj(\'#preview\').hide();
              return;
     }
    }
</script>
'; ?>

<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_crmRegion($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
<?php $this->_tag_stack[] = array('crmRegion', array('name' => "contribute-form-contributionpage-widget-post")); $_block_repeat=true;smarty_block_crmRegion($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_crmRegion($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>