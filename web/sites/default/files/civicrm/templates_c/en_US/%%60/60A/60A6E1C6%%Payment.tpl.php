<?php /* Smarty version 2.6.31, created on 2021-08-25 20:51:45
         compiled from CRM/Contribute/Form/AdditionalInfo/Payment.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'crmScope', 'CRM/Contribute/Form/AdditionalInfo/Payment.tpl', 1, false),)), $this); ?>
<?php $this->_tag_stack[] = array('crmScope', array('extensionKey' => "")); $_block_repeat=true;smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php if ($this->_tpl_vars['buildRecurBlock']): ?>
<?php echo '
  <script type="text/javascript" >

    function toggleRecur() {
      var isRecur = cj(\'input[id="is_recur"]:checked\');
      var frequencyUnit = cj(\'#frequency_unit\');
      var frequencyInterval = cj(\'#frequency_interval\');
      var installments = cj(\'#installments\');
      if (isRecur.val() > 0) {
        frequencyUnit.prop(\'disabled\', false).addClass(\'required\');
        frequencyInterval.prop(\'disabled\', false).addClass(\'required\');
        installments.prop(\'disabled\', false);
      }
      else {
        frequencyInterval.val(\'\');
        installments.val(\'\');
        frequencyUnit.prop(\'disabled\', true).removeClass(\'required\');
        frequencyInterval.prop(\'disabled\', true).removeClass(\'required\');
        installments.prop(\'disabled\', true);
      }
    }

    function buildRecurBlock(processorId) {
      if (!processorId) processorId = cj("#payment_processor_id").val();
      var recurPaymentProIds = '; ?>
'<?php echo $this->_tpl_vars['recurringPaymentProcessorIds']; ?>
'<?php echo ';
      var funName = (cj.inArray(processorId, recurPaymentProIds.split(\',\')) > -1) ? \'show\' : \'hide\';

      var priceSet = cj("#price_set_id");
      if (priceSet && priceSet.val()) {
        funName = \'hide\';
        //reset the values of recur block.
        if (cj(\'input:radio[name="is_recur"]:checked\').val()) {
          cj("#installments").val(\'\');
          cj("#frequency_interval").val(\'\');
          cj(\'input:radio[name="is_recur"]\')[0].checked = true;
        }
      }
      toggleRecur();
      eval(\'cj("#recurringPaymentBlock").\' + funName + "()");
    }

    CRM.$(function($) {
      buildRecurBlock(null);
      toggleRecur();

      cj(\'input[id="is_recur"]\').on(\'change\', function() {
        toggleRecur();
      });
    });

  </script>
'; ?>

<?php endif; ?>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>