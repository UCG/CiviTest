<?php /* Smarty version 2.6.31, created on 2021-09-01 22:05:55
         compiled from CRM/Batch/Form/Entry.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'crmScope', 'CRM/Batch/Form/Entry.tpl', 1, false),array('block', 'ts', 'CRM/Batch/Form/Entry.tpl', 12, false),array('function', 'crmURL', 'CRM/Batch/Form/Entry.tpl', 14, false),array('function', 'copyIcon', 'CRM/Batch/Form/Entry.tpl', 56, false),array('function', 'cycle', 'CRM/Batch/Form/Entry.tpl', 64, false),array('modifier', 'crmMoney', 'CRM/Batch/Form/Entry.tpl', 33, false),array('modifier', 'substr', 'CRM/Batch/Form/Entry.tpl', 55, false),array('modifier', 'crmAddClass', 'CRM/Batch/Form/Entry.tpl', 68, false),array('modifier', 'json_encode', 'CRM/Batch/Form/Entry.tpl', 323, false),)), $this); ?>
<?php $this->_tag_stack[] = array('crmScope', array('extensionKey' => "")); $_block_repeat=true;smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><div class="batch-entry form-item">
  <div class="help">
    <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Click Validate & Process below when you've entered all items for the batch. You can also Save & Continue Later at any time.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
    <?php if (call_user_func ( array ( 'CRM_Core_Permission' , 'check' ) , 'administer CiviCRM' )): ?>
      <?php ob_start(); ?><?php echo CRM_Utils_System::crmURL(array('p' => "civicrm/admin/uf/group",'q' => "reset=1&selectedChild=reserved-profiles"), $this);?>
<?php $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->assign('batchEntryProfileURL', ob_get_contents());ob_end_clean(); ?>
      <?php $this->_tag_stack[] = array('ts', array('1' => $this->_tpl_vars['batchEntryProfileURL'])); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Add, remove or change the order of columns by editing the corresponding <a href="%1" target="_blank">Bulk Entry profile</a>.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
      <?php if ($this->_tpl_vars['batchType'] == 1): ?>
        <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Custom fields and a Personal Campaign Page field can be added if needed.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
      <?php endif; ?>
    <?php endif; ?>
  </div>
  <?php if ($this->_tpl_vars['batchAmountMismatch']): ?>
    <div class="status message status-warning">
      <i class="crm-i fa-exclamation-triangle" aria-hidden="true"></i> <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Total for amounts entered below does not match the expected batch total.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
    </div>
    <?php echo $this->_tpl_vars['form']['_qf_Entry_upload_force']['html']; ?>

    <div class="clear"></div>
  <?php endif; ?>
  <table class="form-layout-compressed batch-totals">
    <tr>
      <td class="label">
        <label><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Total amount expected<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></label>
      </td>
      <td class="right"><span class="batch-expected-total"><?php echo ((is_array($_tmp=$this->_tpl_vars['batchTotal'])) ? $this->_run_mod_handler('crmMoney', true, $_tmp) : smarty_modifier_crmMoney($_tmp)); ?>
</span></td>
    </tr>
    <tr>
      <td class="label">
        <label><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Total amount entered<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></label>
      </td>
      <td class="right"><?php echo $this->_tpl_vars['defaultCurrencySymbol']; ?>
 <span class="batch-actual-total"></span></td>
    </tr>
  </table>

  <div class="crm-copy-fields crm-grid-table" id="crm-batch-entry-table">
    <div class="crm-grid-header">
      <div class="crm-grid-cell">&nbsp;</div>
      <div class="crm-grid-cell"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Contact<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></div>
      <?php if ($this->_tpl_vars['batchType'] == 2): ?>
        <div class="crm-grid-cell">&nbsp;</div>
      <?php endif; ?>
      <?php if ($this->_tpl_vars['batchType'] == 3): ?>
        <div class="crm-grid-cell"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Open Pledges (Due Date - Amount)<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></div>
      <?php endif; ?>
      <?php $_from = $this->_tpl_vars['fields']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['fieldName'] => $this->_tpl_vars['field']):
?>
        <div class="crm-grid-cell">
          <?php if (((is_array($_tmp=$this->_tpl_vars['field']['name'])) ? $this->_run_mod_handler('substr', true, $_tmp, 0, 11) : substr($_tmp, 0, 11)) != 'soft_credit' && $this->_tpl_vars['field']['name'] != 'trxn_id'): ?>
          <?php echo smarty_function_copyIcon(array('name' => $this->_tpl_vars['field']['name'],'title' => $this->_tpl_vars['field']['title']), $this);?>

          <?php endif; ?><?php echo $this->_tpl_vars['field']['title']; ?>

        </div>
      <?php endforeach; endif; unset($_from); ?>
    </div>

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
      <div class="<?php echo smarty_function_cycle(array('values' => "odd-row,even-row"), $this);?>
 selector-rows crm-grid-row" entity_id="<?php echo $this->_tpl_vars['rowNumber']; ?>
">
        <div class="compressed crm-grid-cell"><span class="batch-edit"></span></div>
                <div class="compressed crm-grid-cell">
          <?php echo ((is_array($_tmp=$this->_tpl_vars['form']['primary_contact_id'][$this->_tpl_vars['rowNumber']]['html'])) ? $this->_run_mod_handler('crmAddClass', true, $_tmp, 'big') : smarty_modifier_crmAddClass($_tmp, 'big')); ?>

        </div>

        <?php if ($this->_tpl_vars['batchType'] == 2): ?>
          <?php echo $this->_tpl_vars['form']['member_option'][$this->_tpl_vars['rowNumber']]['html']; ?>

        <?php endif; ?>
        <?php if ($this->_tpl_vars['batchType'] == 3): ?>
          <?php echo $this->_tpl_vars['form']['open_pledges'][$this->_tpl_vars['rowNumber']]['html']; ?>

        <?php endif; ?>
        <?php $_from = $this->_tpl_vars['fields']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['fieldName'] => $this->_tpl_vars['field']):
?>
          <?php $this->assign('n', $this->_tpl_vars['field']['name']); ?>
          <?php if ($this->_tpl_vars['n'] == 'soft_credit'): ?>
            <div class="compressed crm-grid-cell">
              <?php echo ((is_array($_tmp=$this->_tpl_vars['form']['soft_credit_contact_id'][$this->_tpl_vars['rowNumber']]['html'])) ? $this->_run_mod_handler('crmAddClass', true, $_tmp, 'big') : smarty_modifier_crmAddClass($_tmp, 'big')); ?>

              <?php echo $this->_tpl_vars['form']['soft_credit_amount'][$this->_tpl_vars['rowNumber']]['label']; ?>
&nbsp;<?php echo ((is_array($_tmp=$this->_tpl_vars['form']['soft_credit_amount'][$this->_tpl_vars['rowNumber']]['html'])) ? $this->_run_mod_handler('crmAddClass', true, $_tmp, 'eight') : smarty_modifier_crmAddClass($_tmp, 'eight')); ?>

            </div>
          <?php elseif ($this->_tpl_vars['n'] == 'soft_credit_type'): ?>
            <div class="compressed crm-grid-cell"><?php echo $this->_tpl_vars['form']['soft_credit_type'][$this->_tpl_vars['rowNumber']]['html']; ?>
</div>
          <?php elseif ($this->_tpl_vars['n'] == 'contribution_soft_credit_pcp_id'): ?>
            <div class="compressed crm-grid-cell">
              <div><?php echo $this->_tpl_vars['form']['pcp_made_through_id'][$this->_tpl_vars['rowNumber']]['html']; ?>
<?php echo $this->_tpl_vars['form']['pcp_made_through'][$this->_tpl_vars['rowNumber']]['html']; ?>
</div>
              <div><?php echo $this->_tpl_vars['form']['pcp_display_in_roll'][$this->_tpl_vars['rowNumber']]['label']; ?>
&nbsp;<?php echo $this->_tpl_vars['form']['pcp_display_in_roll'][$this->_tpl_vars['rowNumber']]['html']; ?>
</div>
              <div class="pcp_roll_display"><?php echo $this->_tpl_vars['form']['pcp_roll_nickname'][$this->_tpl_vars['rowNumber']]['label']; ?>
&nbsp;<?php echo $this->_tpl_vars['form']['pcp_roll_nickname'][$this->_tpl_vars['rowNumber']]['html']; ?>
</div>
              <div class="pcp_roll_display"><?php echo $this->_tpl_vars['form']['pcp_personal_note'][$this->_tpl_vars['rowNumber']]['label']; ?>
&nbsp;<?php echo $this->_tpl_vars['form']['pcp_personal_note'][$this->_tpl_vars['rowNumber']]['html']; ?>
</div>
            </div>
          <?php elseif (in_array ( $this->_tpl_vars['fields'][$this->_tpl_vars['n']]['html_type'] , array ( 'Radio' , 'CheckBox' ) )): ?>
            <div class="compressed crm-grid-cell">&nbsp;<?php echo $this->_tpl_vars['form']['field'][$this->_tpl_vars['rowNumber']][$this->_tpl_vars['n']]['html']; ?>
</div>
          <?php elseif ($this->_tpl_vars['n'] == 'total_amount'): ?>
             <div class="compressed crm-grid-cell">
               <?php echo $this->_tpl_vars['form']['field'][$this->_tpl_vars['rowNumber']][$this->_tpl_vars['n']]['html']; ?>

               <?php if ($this->_tpl_vars['batchType'] == 3): ?>
		 <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><span id=<?php echo $this->_tpl_vars['rowNumber']; ?>
 class="pledge-adjust-option"><a href='#'>adjust payment amount</a></span><?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
                 <span id="adjust-select-<?php echo $this->_tpl_vars['rowNumber']; ?>
" class="adjust-selectbox"><?php echo $this->_tpl_vars['form']['option_type'][$this->_tpl_vars['rowNumber']]['html']; ?>
</span>
               <?php endif; ?>
             </div>
          <?php else: ?>
            <div class="compressed crm-grid-cell">
              <?php echo $this->_tpl_vars['form']['field'][$this->_tpl_vars['rowNumber']][$this->_tpl_vars['n']]['html']; ?>

              <?php if ($this->_tpl_vars['fields'][$this->_tpl_vars['n']]['html_type'] == 'File' && ! empty ( $this->_tpl_vars['form']['field'][$this->_tpl_vars['rowNumber']][$this->_tpl_vars['fieldName']]['value']['size'] )): ?>
                <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Attached<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>: <?php echo $this->_tpl_vars['form']['field'][$this->_tpl_vars['rowNumber']][$this->_tpl_vars['fieldName']]['value']['name']; ?>

              <?php endif; ?>
            </div>
          <?php endif; ?>
        <?php endforeach; endif; unset($_from); ?>
      </div>
    <?php endfor; endif; ?>
  </div>
  <div class="crm-submit-buttons"><?php if ($this->_tpl_vars['fields']): ?><?php echo $this->_tpl_vars['form']['_qf_Batch_refresh']['html']; ?>
<?php endif; ?> &nbsp; <?php echo $this->_tpl_vars['form']['buttons']['html']; ?>
</div>
</div>
<?php echo '
<script type="text/javascript">
CRM.$(function($) {
  var $form = $(\'form.'; ?>
<?php echo $this->_tpl_vars['form']['formClass']; ?>
<?php echo '\');
  $(\'.selector-rows\').change(function () {
    var options = {
      \'url\': '; ?>
"<?php echo CRM_Utils_System::crmURL(array('p' => 'civicrm/ajax/batch','h' => 0), $this);?>
"<?php echo '
    };
    $($form).ajaxSubmit(options);
  });

 $(\'input[id*="primary_contact_"]\').change(function() {
 var temp = this.id.split(\'_\');
   var ROWID = temp[3];
   if ($(this).val()) {
     updateContactInfo(ROWID,\'primary_\');
   }
 });

 $(\'select[id^="option_type_"]\').each(function () {
    if ($(this).val() == 1) {
      $(this).attr(\'disabled\', true);
      $(this).hide();
    }
  });

  $(\'#crm-container\').on(\'keyup change\', \'*.selector-rows\', function () {
    // validate rows
    checkColumns($(this));
  });

  // validate rows
  validateRow();

  //calculate the actual total for the batch
  calculateActualTotal();

  $(\'input[id*="_total_amount"]\').bind(\'keyup change\', function () {
    calculateActualTotal();
  });

  '; ?>
<?php if ($this->_tpl_vars['batchType'] == 1): ?><?php echo '
  // hide all dates if send receipt is checked
  hideSendReceipt();

  // hide the receipt date if send receipt is checked
  $(\'input[id*="][send_receipt]"]\').change(function () {
    showHideReceipt($(this));
  });

  '; ?>
<?php elseif ($this->_tpl_vars['batchType'] == 2): ?><?php echo '
  $(\'select[id^="member_option_"]\').each(function () {
    if ($(this).val() == 1) {
      $(this).prop(\'disabled\', true);
    }
  });

  // set payment info accord to membership type
  $(\'select[id*="_membership_type_0"]\').change(function () {
    setPaymentBlock($(this), null);
  });

  $(\'select[id*="_membership_type_1"]\').change(function () {
    setPaymentBlock($(this), $(this).val());
  });

  '; ?>
<?php endif; ?><?php echo '

  // line breaks between radio buttons and checkboxes
  $(\'input.form-radio\').next().after(\'<br />\');
  $(\'input.form-checkbox\').next().after(\'<br />\');

  //set the focus on first element
  $(\'#primary_contact_1\').focus();

});

function setPaymentBlock(form, memType) {
  var rowID = form.closest(\'div.crm-grid-row\').attr(\'entity_id\');
  var dataUrl = '; ?>
"<?php echo CRM_Utils_System::crmURL(array('p' => 'civicrm/ajax/memType','h' => 0), $this);?>
"<?php echo ';

  if (!memType) {
    memType = cj(\'select[id="field_\' + rowID + \'_membership_type_1"]\').val();
  }

  cj.post(dataUrl, {mtype: memType}, function (data) {
    cj(\'#field_\' + rowID + \'_financial_type\').val(data.financial_type_id);
    cj(\'#field_\' + rowID + \'_total_amount\').val(data.total_amount).change();
  }, \'json\');
}

function hideSendReceipt() {
  cj(\'input[id*="][send_receipt]"]\').each(function () {
    showHideReceipt(cj(this));
  });
}

function showHideReceipt(elem) {
  var rowID = elem.closest(\'div.crm-grid-row\').attr(\'entity_id\');
  if (elem.prop(\'checked\')) {
    cj(\'.crm-batch-receipt_date-\' + rowID).hide();
  }
  else {
    cj(\'.crm-batch-receipt_date-\' + rowID).show();
  }
}

function validateRow() {
  cj(\'.selector-rows\').each(function () {
    checkColumns(cj(this));
  });
}

function checkColumns(parentRow) {
  // show valid row icon if all required data is field
  var validRow = 0;
  var inValidRow = 0;
  var errorExists = false;
  var rowID = parentRow.closest(\'div.crm-grid-row\').attr(\'entity_id\');

  parentRow.find(\'div .required\').each(function () {
    //special case to handle contact autocomplete select
    var fieldId = cj(this).attr(\'id\');
    // datepicker hasTimeEntry would not have an id - not sure why.
    if (typeof fieldId != \'undefined\' && fieldId.substring(0, 16) == \'primary_contact_\') {
      // if display value is set then make sure we also check if contact id is set
      if (!cj(this).val()) {
        inValidRow++;
      }
      else {
        var contactIdElement = cj(\'input[name="primary_contact_select_id[\' + rowID + \']"]\');
        if (cj(this).val() && !contactIdElement.val()) {
          inValidRow++;
          errorExists = true;
        }
        else if (cj(this).val() && contactIdElement.val()) {
          // this is hack to remove error span because we are skipping this for autocomplete fields
          cj(this).next(\'span.crm-error\').remove();
        }
      }
    }
    else {
      if (!cj(this).val()) {
        inValidRow++;
      }
      else {
        if (cj(this).hasClass(\'error\') && (cj(this).hasClass(\'valid\') || cj(this).hasClass(\'required\'))) {
          errorExists = true;
        }
        else {
          validRow++;
        }
      }
    }
  });

  // this means user has entered some data
  if (errorExists) {
    parentRow.find("div:first span").prop(\'class\', \'batch-invalid\');
  }
  else {
    if (inValidRow == 0 && validRow > 0) {
      parentRow.find("div:first span").prop(\'class\', \'batch-valid\');
    }
    else {
      parentRow.find("div:first span").prop(\'class\', \'batch-edit\');
    }
  }
}

function calculateActualTotal() {
  var total = 0;
  cj(\'input[id*="_total_amount"]\').each(function () {
    if (cj(this).val()) {
      total += parseFloat(cj(this).val());
    }
  });

  cj(\'.batch-actual-total\').html(formatMoney(total));
}

//money formatting/localization
function formatMoney(amount) {
  var c = 2;
  var t = \''; ?>
<?php echo $this->_tpl_vars['config']->monetaryThousandSeparator; ?>
<?php echo '\';
  var d = \''; ?>
<?php echo $this->_tpl_vars['config']->monetaryDecimalPoint; ?>
<?php echo '\';

  var n = amount,
    c = isNaN(c = Math.abs(c)) ? 2 : c,
    d = d == undefined ? "," : d,
    t = t == undefined ? "." : t, s = n < 0 ? "-" : "",
    i = parseInt(n = Math.abs(+n || 0).toFixed(c)) + "",
    j = (j = i.length) > 3 ? j % 3 : 0;

  return s + (j ? i.substr(0, j) + t : "") + i.substr(j).replace(/(\\d{3})(?=\\d)/g, "$1" + t) + (c ? d + Math.abs(n - i).toFixed(c).slice(2) : "");
}

function updateContactInfo(blockNo, prefix) {
  var contactHiddenElement = \'input[id="\' + prefix + \'contact_id_\' + blockNo + \'"]\';
  var contactId = cj(contactHiddenElement).val();

  var returnProperties = \'\';
  var profileFields = [];
  '; ?>

  <?php if ($this->_tpl_vars['contactFields']): ?>
  <?php $_from = $this->_tpl_vars['contactFields']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['fldName'] => $this->_tpl_vars['val']):
?>
  var fldName = <?php echo json_encode($this->_tpl_vars['fldName']); ?>
;
  <?php echo '
  if (returnProperties) {
    returnProperties = returnProperties + \',\';
  }
  var fld = fldName.split(\'-\');
  returnProperties = returnProperties + fld[0];
  profileFields[fld[0]] = fldName;
  '; ?>

  <?php endforeach; endif; unset($_from); ?>
  <?php endif; ?>
  <?php echo '

  CRM.api(\'Contact\', \'get\', {
      \'sequential\': \'1\',
      \'contact_id\': contactId,
      \'return\': returnProperties },
    { success: function (data) {
      cj.each(data.values[0], function (key, value) {
        // set the values
        var actualFldName = profileFields[key];
        if (key == \'country\' || key == \'state_province\') {
          idFldName = key + \'_id\';
          value = data.values[0][idFldName];
        }
        setFieldValue(actualFldName, value, blockNo)
      });

      // for membership batch entry based on contact we need to enable / disable
      // add membership select
      '; ?>
<?php if ($this->_tpl_vars['batchType'] == 2): ?><?php echo '
      CRM.api(\'Membership\', \'get\', {
          \'sequential\': \'1\',
          \'contact_id\': contactId,
        },
        { success: function (data) {
          if (data.count > 0) {
            //get the information on membership type
            var membershipTypeId = data.values[0].membership_type_id;
            var membershipJoinDate = data.values[0].join_date;
            var membershipStartDate = data.values[0].start_date;
            CRM.api(\'MembershipType\', \'get\', {
                \'sequential\': \'1\',
                \'id\': membershipTypeId
              },
              { success: function (data) {
                var memTypeContactId = data.values[0].member_of_contact_id;
                cj(\'select[id="member_option_\' + blockNo + \'"]\').prop(\'disabled\', false).val(2);
                cj(\'select[id="field_\' + blockNo + \'_membership_type_0"]\').val(memTypeContactId).change();
                cj(\'select[id="field_\' + blockNo + \'_membership_type_1"]\').val(membershipTypeId).change();
                cj(\'#field_\' + blockNo + \'_\' + \'membership_join_date\').val(membershipJoinDate).trigger(\'change\');
                cj(\'#field_\' + blockNo + \'_\' + \'membership_start_date\').val(membershipStartDate).trigger(\'change\');
              }
              });
          }
        }
        });
      '; ?>
<?php elseif ($this->_tpl_vars['batchType'] == 3): ?><?php echo '
      cj(\'#open_pledges_\'+blockNo).empty();
         cj(\'#open_pledges_\'+blockNo).append(cj(\'<option>\', {
			    value: \'\',
			    text: \'-select-\'
			}));
	 CRM.api(\'Pledge\', \'get\', {
	  \'sequential\': 1,
	 \'contact_id\': contactId || 0
	 },
	{success: function(data) {
	 cj.each(data[\'values\'], function(key, value) {
	  if (value[\'pledge_status\'] != \'Completed\') {
	   var date = cj.datepicker.parseDate(\'yy-mm-dd\', value[\'pledge_next_pay_date\']);
           var dateformat = "'; ?>
<?php echo $this->_tpl_vars['config']->dateInputFormat; ?>
<?php echo '";
	    cj(\'#open_pledges_\'+ blockNo).append(cj(\'<option>\', {
		value: value[\'pledge_id\'],
		text: cj.datepicker.formatDate(dateformat, date) + ", " + value[\'pledge_next_pay_amount\'] + \' \' + value[\'pledge_currency\']
		}));
	     }
	   });
	 }
        });
      '; ?>
<?php endif; ?><?php echo '
    }
    });
}

/**
 * This function is use to setdefault elements via ajax
 *
 * @param fname string field name
 * @return void
 */
function setFieldValue(fname, fieldValue, blockNo) {
  var elementId = cj(\'[name="field[\' + blockNo + \'][\' + fname + \']"]\');

  if (elementId.length == 0) {
    elementId = cj(\'input[type=checkbox][name^="field[\' + blockNo + \'][\' + fname + \']"][type!=hidden]\');
  }

  // if element not found than return
  if (elementId.length == 0) {
    return;
  }

  //check if it is date element
  var isDateElement = elementId.attr(\'format\');

  //get the element type
  var elementType = elementId.attr(\'type\');

  // set the value for all the elements, elements needs to be handled are
  // select, checkbox, radio, date fields, text, textarea, multi-select
  // wysiwyg editor, advanced multi-select ( to do )
  if (elementType == \'radio\') {
    if (fieldValue) {
      elementId.filter("[value=" + fieldValue + "]").prop("checked", true);
    }
    else {
      elementId.removeProp(\'checked\');
    }
  }
  else {
    if (elementType == \'checkbox\') {
      // handle checkbox
      elementId.removeProp(\'checked\');
      if (fieldValue) {
        cj.each(fieldValue, function (key, value) {
          cj(\'input[name="field[\' + blockNo + \'][\' + fname + \'][\' + value + \']"]\').prop(\'checked\', true);
        });
      }
    }
    else {
      if (elementId.is(\'textarea\')) {
        CRM.wysiwyg.setVal(elementId, fieldValue);
      }
      else {
        elementId.val(fieldValue);
      }
    }
  }

  // since we use different display field for date we also need to set it.
  // also check for date time field and set the value correctly
  if (isDateElement && fieldValue) {
    setDateFieldValue(fname, fieldValue, blockNo)
  }
}

function setDateFieldValue(fname, fieldValue, blockNo) {
  var dateValues = fieldValue.split(\' \');

  var actualDateElement = cj(\'#field_\' + blockNo + \'_\' + fname);
  var date_format = actualDateElement.attr(\'format\');
  var altDateFormat = \'yy-mm-dd\';

  var actualDateValue = cj.datepicker.parseDate(altDateFormat, dateValues[0]);

  // format date according to display field
  var hiddenDateValue = cj.datepicker.formatDate(\'mm/dd/yy\', actualDateValue);

  actualDateElement.val(hiddenDateValue);

  var displayDateValue = actualDateElement.val();
  if (date_format != \'mm/dd/yy\') {
    displayDateValue = cj.datepicker.formatDate(date_format, actualDateValue);
  }
  cj(\'[id^=field_\' + blockNo + \'_\' + fname + \'_display]\').val(displayDateValue);

  // need to fix time formatting
  if (dateValues[1]) {
    cj(\'#field_\' + blockNo + \'_\' + fname + \'_time\').val(dateValues[1].substr(0, 5));
  }
}

if (CRM.batch.type_id == 3){
  cj(\'select[id*="open_pledges_"]\').change(function () {
    setPledgeAmount(cj(this), cj(this).val());
  });
  cj(\'.pledge-adjust-option\').click(function(){
    var blockNo = cj(this).attr(\'id\');
    cj(\'select[id="option_type_\' + blockNo + \'"]\').show();
    cj(\'select[id="option_type_\' + blockNo + \'"]\').removeAttr(\'disabled\');
    cj(\'#field_\' + blockNo + \'_total_amount\').removeAttr(\'readonly\');
  });
}

function setPledgeAmount(form, pledgeID) {
  var rowID = form.closest(\'div.crm-grid-row\').attr(\'entity_id\');
  var dataUrl = CRM.url(\'civicrm/ajax/pledgeAmount\');
  if (pledgeID) {
    cj.post(dataUrl, {pid: pledgeID}, function (data) {
    cj(\'#field_\' + rowID + \'_financial_type\').val(data.financial_type_id).change();
    cj(\'#field_\' + rowID + \'_total_amount\').val(data.amount).change();
    cj(\'#field_\' + rowID + \'_total_amount\').attr(\'readonly\', true);
    }, \'json\');
  }
  else {
    cj(\'#field_\' + rowID + \'_total_amount\').val(\'\').change();
    cj(\'#field_\' + rowID + \'_financial_type\').val(\'\').change();
    cj(\'#field_\' + rowID + \'_total_amount\').removeAttr(\'readonly\');
  }
}

//end for pledge amount
</script>
'; ?>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/common/batchCopy.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>