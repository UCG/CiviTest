<?php /* Smarty version 2.6.31, created on 2021-08-24 21:31:00
         compiled from CRM/Event/Form/FeeBlock.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'crmScope', 'CRM/Event/Form/FeeBlock.tpl', 1, false),array('block', 'ts', 'CRM/Event/Form/FeeBlock.tpl', 105, false),)), $this); ?>
<?php $this->_tag_stack[] = array('crmScope', array('extensionKey' => "")); $_block_repeat=true;smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php if ($this->_tpl_vars['priceSet']): ?>
  <div id='validate_pricefield' class='messages crm-error hiddenElement'></div>
<?php echo '
  <script type="text/javascript">

    var fieldOptionsFull = [];
    '; ?>

    <?php $_from = $this->_tpl_vars['priceSet']['fields']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['fldId'] => $this->_tpl_vars['fldElement']):
?>
    <?php if ($this->_tpl_vars['fldElement']['options']): ?>
    <?php $_from = $this->_tpl_vars['fldElement']['options']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['opId'] => $this->_tpl_vars['fldOptions']):
?>
    <?php if ($this->_tpl_vars['fldOptions']['is_full']): ?>
    <?php echo '
    fieldOptionsFull['; ?>
<?php echo $this->_tpl_vars['fldId']; ?>
<?php echo '] = [];
    fieldOptionsFull['; ?>
<?php echo $this->_tpl_vars['fldId']; ?>
<?php echo ']['; ?>
<?php echo $this->_tpl_vars['opId']; ?>
<?php echo '] = 1;
    '; ?>

    <?php endif; ?>
    <?php endforeach; endif; unset($_from); ?>
    <?php endif; ?>
    <?php endforeach; endif; unset($_from); ?>
    <?php echo '

    if ( fieldOptionsFull.length > 0 ) {
      CRM.$(function($) {
        $("input,#priceset select,#priceset").each(function () {
          if ( $(this).attr(\'price\') ) {
            switch( $(this).attr(\'type\') ) {
              case \'checkbox\':
              case \'radio\':
                $(this).click( function() {
                  validatePriceField(this);
                });
                break;

              case \'select-one\':
                $(this).change( function() {
                  validatePriceField(this);
                });
                break;
              case \'text\':
                $(this).bind( \'keyup\', function() { validatePriceField(this) });
                break;
            }
          }
        });
      });

      function validatePriceField( obj ) {
        var namePart =  cj(obj).attr(\'name\').split(\'_\');
        var fldVal  =  cj(obj).val();
        if ( cj(obj).attr(\'type\') == \'checkbox\') {
          var eleIdpart = namePart[1].split(\'[\');
          var eleId = eleIdpart[0];
        }
        else {
          var eleId  = namePart[1];
        }
        var showError = false;

        switch( cj(obj).attr(\'type\') ) {
          case \'text\':
            if ( fieldOptionsFull[eleId] && fldVal ) {
              showError = true;
              cj(obj).parent( ).parent( ).children(\'.label\').addClass(\'crm-error\');
            }
            else {
              cj(obj).parent( ).parent( ).children(\'.label\').removeClass(\'crm-error\');
              cj(\'#validate_pricefield\').hide( ).html(\'\');
            }
            break;

          case \'checkbox\':
            var checkBoxValue = eleIdpart[1].split(\']\');
            if ( cj(obj).prop("checked") == true &&
                    fieldOptionsFull[eleId] &&
                    fieldOptionsFull[eleId][checkBoxValue[0]]) {
              showError = true;
              cj(obj).parent( ).addClass(\'crm-error\');
            }
            else {
              cj(obj).parent( ).removeClass(\'crm-error\');
            }
            break;

          default:
            if ( fieldOptionsFull[eleId] &&
                    fieldOptionsFull[eleId][fldVal]  ) {
              showError = true;
              cj(obj).parent( ).addClass(\'crm-error\');
            }
            else {
              cj(obj).parent( ).removeClass(\'crm-error\');
            }
        }

        if ( showError ) {
          cj(\'#validate_pricefield\').show().html(\'<i class="crm-i fa-exclamation-triangle crm-i-red" aria-hidden="true"></i>'; ?>
 <?php $this->_tag_stack[] = array('ts', array('escape' => 'js')); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>This Option is already full for this event.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php echo '\');
        }
        else {
          cj(\'#validate_pricefield\').hide( ).html(\'\');
        }
      }
    }

    // change the status to default \'partially paid\' for partial payments
    var feeAmount, userModifiedAmount;
    var partiallyPaidStatusId = '; ?>
<?php echo $this->_tpl_vars['partiallyPaidStatusId']; ?>
<?php echo ';

    cj(\'#total_amount\')
            .focus(
                    function() {
                      feeAmount = cj(this).val();
                      feeAmount = Number(feeAmount.replace(/[^0-9\\.]+/g,""));
                    }
            )
            .change(
                    function() {
                      userModifiedAmount = cj(this).val();
                      userModifiedAmount = Number(userModifiedAmount.replace(/[^0-9\\.]+/g,""));
                      if (userModifiedAmount < feeAmount) {
                        cj(\'.crm-participant-form-block-status_id #status_id\').val(partiallyPaidStatusId).change();
                      }
                    }
            );

    cj(\'form[name=Participant]\').on("click", \'.validate\',
            function(e) {
              if (CRM.$(\'#total_amount\').length == 0) {
                var $balance = CRM.$(\'#payment-info-balance\');
                if ($balance.length > 0 && parseFloat($balance.attr(\'data-balance\')) == 0) {
                  return true;
                }
              }
              var userSubmittedStatus = cj(\'.crm-participant-form-block-status_id #status_id\').val();
              var statusLabel = cj(\'.crm-participant-form-block-status_id #status_id option:selected\').text();
              if (userModifiedAmount < feeAmount && userSubmittedStatus != partiallyPaidStatusId) {
                var msg = "'; ?>
<?php $this->_tag_stack[] = array('ts', array('escape' => 'js','1' => "%1")); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Payment amount is less than the amount owed. Expected participant status is 'Partially paid'. Are you sure you want to set the participant status to %1? Click OK to continue, Cancel to change your entries.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php echo '";
                var result = confirm(ts(msg, {1: statusLabel}));
                if (result == false) {
                  return false;
                }
              }
            }
    );
  </script>
'; ?>

<?php endif; ?>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/Event/Form/EventFees.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>