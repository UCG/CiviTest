<?php /* Smarty version 2.6.31, created on 2021-08-26 17:41:51
         compiled from CRM/Campaign/Form/Search/Campaign.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'crmScope', 'CRM/Campaign/Form/Search/Campaign.tpl', 1, false),array('block', 'icon', 'CRM/Campaign/Form/Search/Campaign.tpl', 13, false),array('block', 'ts', 'CRM/Campaign/Form/Search/Campaign.tpl', 15, false),array('block', 'crmButton', 'CRM/Campaign/Form/Search/Campaign.tpl', 18, false),array('modifier', 'crmAddClass', 'CRM/Campaign/Form/Search/Campaign.tpl', 80, false),array('function', 'crmURL', 'CRM/Campaign/Form/Search/Campaign.tpl', 130, false),)), $this); ?>
<?php $this->_tag_stack[] = array('crmScope', array('extensionKey' => "")); $_block_repeat=true;smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
<?php if (! $this->_tpl_vars['hasCampaigns']): ?>
  <div class="messages status no-popup">
    <?php $this->_tag_stack[] = array('icon', array('icon' => "fa-info-circle")); $_block_repeat=true;smarty_block_icon($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_icon($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
    &nbsp;
    <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>None found.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
  </div>
  <div class="action-link">
    <?php $this->_tag_stack[] = array('crmButton', array('p' => "civicrm/campaign/add",'q' => "reset=1",'icon' => "crm-i fa-plus-circle",'h' => 0)); $_block_repeat=true;smarty_block_crmButton($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Add Campaign<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_crmButton($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
  </div>
<?php elseif ($this->_tpl_vars['buildSelector']): ?>


  <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/common/enableDisableApi.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

  <?php echo '
    <script type="text/javascript">
      CRM.$(function($) {
        loadCampaignList();
      });
    </script>
  '; ?>

  <table class="campaigns">
    <thead>
    <tr class="columnheader">
      <th><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>ID<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></th>
      <th class="hiddenElement"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Campaign Name<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></th>
      <th><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Title<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></th>
      <th><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Description<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></th>
      <th><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Start Date<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></th>
      <th><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>End Date<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></th>
      <th class="hiddenElement"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Type ID<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></th>
      <th><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Type<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></th>
      <th class="hiddenElement"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Status ID<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></th>
      <th><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Status<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></th>
      <th class="hiddenElement"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Is Active?<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></th>
      <th><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Active?<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></th>
      <th></th>
    </tr>
    </thead>
    <tbody></tbody>
  </table>
<?php else: ?>
  <div class="action-link">
    <?php $this->_tag_stack[] = array('crmButton', array('p' => "civicrm/campaign/add",'q' => "reset=1",'icon' => "crm-i fa-plus-circle",'h' => 0)); $_block_repeat=true;smarty_block_crmButton($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Add Campaign<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_crmButton($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
  </div>

  <div class="crm-block crm-form-block crm-search-form-block">

    <?php $this->assign('searchForm', "search_form_".($this->_tpl_vars['searchFor'])); ?>

    <div id="<?php echo $this->_tpl_vars['searchForm']; ?>
"
         class="crm-accordion-wrapper crm-campaign_search_form-accordion <?php if ($this->_tpl_vars['force'] && ! $this->_tpl_vars['buildSelector']): ?>collapsed<?php endif; ?>">
      <div class="crm-accordion-header">
        <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Search Campaigns<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
      </div>
      <!-- /.crm-accordion-header -->

      <div class="crm-accordion-body">
        <?php echo '<table class="form-layout-compressed"><tr><td>'; ?><?php echo $this->_tpl_vars['form']['campaign_title']['label']; ?><?php echo '<br/>'; ?><?php echo $this->_tpl_vars['form']['campaign_title']['html']; ?><?php echo ' &nbsp;</td><td>'; ?><?php echo $this->_tpl_vars['form']['description']['label']; ?><?php echo '<br/>'; ?><?php echo ((is_array($_tmp=$this->_tpl_vars['form']['description']['html'])) ? $this->_run_mod_handler('crmAddClass', true, $_tmp, 'huge') : smarty_modifier_crmAddClass($_tmp, 'huge')); ?><?php echo '</td></tr><tr><td>'; ?><?php echo $this->_tpl_vars['form']['start_date']['label']; ?><?php echo '<br/>'; ?><?php echo $this->_tpl_vars['form']['start_date']['html']; ?><?php echo '</td><td>'; ?><?php echo $this->_tpl_vars['form']['end_date']['label']; ?><?php echo '<br/>'; ?><?php echo $this->_tpl_vars['form']['end_date']['html']; ?><?php echo '</td></tr><tr><td>'; ?><?php echo $this->_tpl_vars['form']['campaign_type_id']['label']; ?><?php echo '<br/>'; ?><?php echo $this->_tpl_vars['form']['campaign_type_id']['html']; ?><?php echo '</td><td>'; ?><?php echo $this->_tpl_vars['form']['status_id']['label']; ?><?php echo '<br/>'; ?><?php echo $this->_tpl_vars['form']['status_id']['html']; ?><?php echo '</td><td>'; ?><?php echo $this->_tpl_vars['form']['is_active']['label']; ?><?php echo '<br/>'; ?><?php echo $this->_tpl_vars['form']['is_active']['html']; ?><?php echo '</td></tr><tr><td colspan="2">'; ?><?php if ($this->_tpl_vars['context'] == 'search'): ?><?php echo ''; ?><?php echo $this->_tpl_vars['form']['buttons']['html']; ?><?php echo ''; ?><?php else: ?><?php echo '<a class="searchCampaign button" style="float:left;" href="#" title="'; ?><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php echo 'Search'; ?><?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php echo '"onClick="searchCampaigns( \''; ?><?php echo $this->_tpl_vars['qfKey']; ?><?php echo '\' );return false;">'; ?><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php echo 'Search'; ?><?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php echo '</a>'; ?><?php endif; ?><?php echo '</td></tr></table>'; ?>

      </div>
    </div>
  </div>
  <div id='campaignList'></div>
<?php endif; ?> 

<?php echo '
<script type="text/javascript">
(function($) {

  window.searchCampaigns = function searchCampaigns(qfKey) {
    var dataUrl = '; ?>
"<?php echo CRM_Utils_System::crmURL(array('h' => 0,'q' => 'search=1&snippet=4&type=campaign'), $this);?>
"<?php echo ';

    //lets carry qfKey to retain form session.
    if (qfKey) {
      dataUrl = dataUrl + \'&qfKey=\' + qfKey;
    }

    $.get(dataUrl, null, function (campaignList) {
      $(\'#campaignList\').html(campaignList).trigger(\'crmLoad\');

      //collapse the search form.
      var searchFormName = \'#search_form_\' + '; ?>
'<?php echo $this->_tpl_vars['searchFor']; ?>
'<?php echo ';
      $(searchFormName + \'.crm-accordion-wrapper:not(.collapsed)\').crmAccordionToggle();
    }, \'html\');
  };

  window.loadCampaignList = function() {
    var sourceUrl = '; ?>
"<?php echo CRM_Utils_System::crmURL(array('p' => 'civicrm/ajax/rest','h' => 0,'q' => 'snippet=4&className=CRM_Campaign_Page_AJAX&fnName=campaignList'), $this);?>
"<?php echo ';

    //build the search qill.
    //get the search criteria.
    var searchParams = '; ?>
<?php echo $this->_tpl_vars['searchParams']; ?>
<?php echo ';
    var campaignTypes = '; ?>
<?php echo $this->_tpl_vars['campaignTypes']; ?>
<?php echo ';
    var campaignStatus = '; ?>
<?php echo $this->_tpl_vars['campaignStatus']; ?>
<?php echo ';
    var noRecordFoundMsg = \''; ?>
<?php $this->_tag_stack[] = array('ts', array('escape' => 'js')); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>No matches found for:<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php echo '\';
    noRecordFoundMsg += \'<div class="qill">\';

    var count = 0;
    var searchQill = [];
    for (param in searchParams) {
      if (val = $(\'#\' + param).val()) {
        if (param == \'status_id\') {
          val = campaignStatus[val];
        }
        if (param == \'campaign_type_id\') {
          val = campaignTypes[val];
        }
        searchQill[count++] = searchParams[param] + \' : \' + val;
      }
    }
    noRecordFoundMsg += searchQill.join(\'<span class="font-italic"> ...AND... </span></div><div class="qill">\');
    $(\'table.campaigns\', \'#campaignList\').dataTable({
      "bFilter": false,
      "bAutoWidth": false,
      "bProcessing": false,
      "bLengthChange": false,
      "aaSorting": [],
      "aoColumns": [
        {sClass: \'crm-campaign-id\'                         },
        {sClass: \'crm-campaign-name                 hiddenElement\' },
        {sClass: \'crmf-title\'                              },
        {sClass: \'crmf-description\'                        },
        {sClass: \'crm-campaign-start_date\'                         },
        {sClass: \'crm-campaign-end_date\'                           },
        {sClass: \'crm-campaign-campaign-type_id     hiddenElement\' },
        {sClass: \'crmf-campaign_type_id\'                      },
        {sClass: \'crm-campaign-campaign-status_id   hiddenElement\' },
        {sClass: \'crmf-status_id\'                    },
        {sClass: \'crm-campaign-campaign-is_active   hiddenElement\' },
        {sClass: \'crm-campaign-campaign-isAactive\'                 },
        {sClass: \'crm-campaign-action\', bSortable: false}
      ],
      "sPaginationType": "full_numbers",
      "sDom": \'rt<"crm-datatable-pager-bottom"ip>\',
      "bServerSide": true,
      "bJQueryUI": true,
      "sAjaxSource": sourceUrl,
      "asStripClasses": ["odd-row", "even-row"],
      "oLanguage": {"sEmptyTable": noRecordFoundMsg,
        "sZeroRecords": noRecordFoundMsg },
      "fnDrawCallback": function () {
        $(this).trigger(\'crmLoad\');
      },
      "fnRowCallback": function (nRow, aData, iDisplayIndex) {
        //insert the id for each row for enable/disable.
        var rowId = \'campaign-\' + aData[0];
        $(nRow).attr(\'id\', rowId).addClass(\'crm-entity\');
        //handled disabled rows.
        var isActive = Boolean(Number(aData[10]));
        if (!isActive) {
          $(nRow).addClass(\'disabled\');
        }

        // Crm-editable
        $(nRow).children().eq(2).addClass(\'crm-editable\');
        $(nRow).children().eq(3).data(\'type\', \'textarea\').addClass(\'crm-editable\');
        $(nRow).children().eq(7).data(\'type\', \'select\').addClass(\'crm-editable\');
        $(nRow).children().eq(9).data({type: \'select\', emptyOption: \'\'}).addClass(\'crm-editable\');

        return nRow;
      },

      "fnServerData": function (sSource, aoData, fnCallback) {
        var dataLength = aoData.length;

        var count = 1;
        var searchCriteria = [];

        //get the search criteria.
        var searchParams = '; ?>
<?php echo $this->_tpl_vars['searchParams']; ?>
<?php echo ';
        for (param in searchParams) {
          fldName = param;
          if (param == \'campaign_title\') {
            fldName = \'title\';
          }
          if (val = $(\'#\' + param).val()) {
            aoData[dataLength++] = {name: fldName, value: val};
          }
          searchCriteria[count++] = fldName;
        }

        //do search for campaigns.
        aoData[dataLength++] = {name: \'search_for\', value: \'campaign\'};

        //lets transfer search criteria.
        aoData[dataLength++] = {name: \'searchCriteria\', value: searchCriteria.join(\',\')};

        $.ajax({
          "dataType": \'json\',
          "type": "POST",
          "url": sSource,
          "data": aoData,
          "success": fnCallback
        });
      }
    });
  };

  '; ?>

    <?php if ($this->_tpl_vars['force'] && ! $this->_tpl_vars['buildSelector']): ?>
  <?php echo '
  $(function($) {
    searchCampaigns('; ?>
'<?php echo $this->_tpl_vars['qfKey']; ?>
'<?php echo ');
  });

  '; ?>

  <?php endif; ?>
  <?php echo '
})(CRM.$);
</script>
'; ?>

<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>