<?php /* Smarty version 2.6.31, created on 2021-08-26 17:41:53
         compiled from CRM/Campaign/Form/Search/Survey.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'crmScope', 'CRM/Campaign/Form/Search/Survey.tpl', 1, false),array('block', 'icon', 'CRM/Campaign/Form/Search/Survey.tpl', 13, false),array('block', 'ts', 'CRM/Campaign/Form/Search/Survey.tpl', 14, false),array('block', 'crmButton', 'CRM/Campaign/Form/Search/Survey.tpl', 18, false),array('function', 'crmURL', 'CRM/Campaign/Form/Search/Survey.tpl', 131, false),)), $this); ?>
<?php $this->_tag_stack[] = array('crmScope', array('extensionKey' => "")); $_block_repeat=true;smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
<?php if (! $this->_tpl_vars['hasSurveys']): ?>
    <div class="messages status no-popup">
        <?php $this->_tag_stack[] = array('icon', array('icon' => "fa-info-circle")); $_block_repeat=true;smarty_block_icon($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_icon($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
        <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>None found.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
    </div>

    <div class="action-link">
         <?php $this->_tag_stack[] = array('crmButton', array('p' => 'civicrm/survey/add','q' => 'reset=1','h' => 0,'icon' => "plus-circle")); $_block_repeat=true;smarty_block_crmButton($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Add Survey<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_crmButton($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
    </div>

<?php elseif ($this->_tpl_vars['buildSelector']): ?>

    <div id="survey-result-set-dialog" class="hiddenElement"></div>

    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/common/enableDisableApi.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

  <?php echo '
  <script type="text/javascript">
    CRM.$(function($) {
      loadSurveyList( );
    });
  </script>
  '; ?>


  <table class="surveys">
    <thead>
    <tr class="columnheader">
      <th class="hiddenElement"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Survey ID<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></th>
      <th><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Title<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></th>
      <th class="hiddenElement"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Campaign ID<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></th>
      <th><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Campaign<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></th>
      <th class="hiddenElement"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Survey Type ID<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></th>
      <th><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Survey Type<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></th>
      <th><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Release Frequency<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></th>
      <th><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Reserve Each Time<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></th>
      <th><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Total Reserve<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></th>
      <th><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Default?<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></th>
      <th class="hiddenElement"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Is Active?<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></th>
      <th><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Active?<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></th>
      <th></th>
      <th></th>
      <th></th>
    </tr>
    </thead>
    <tbody></tbody>
  </table>

<?php else: ?>

   <div class="action-link">
      <?php $this->_tag_stack[] = array('crmButton', array('p' => 'civicrm/survey/add','q' => 'reset=1','h' => 0,'icon' => "plus-circle")); $_block_repeat=true;smarty_block_crmButton($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Add Survey<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_crmButton($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
   </div>

    
        <div class="crm-block crm-form-block crm-search-form-block">
    <?php $this->assign('searchForm', "search_form_".($this->_tpl_vars['searchFor'])); ?>

      <div id="<?php echo $this->_tpl_vars['searchForm']; ?>
" class="crm-accordion-wrapper crm-survey_search_form-accordion<?php if ($this->_tpl_vars['force'] && ! $this->_tpl_vars['buildSelector']): ?> collapsed<?php endif; ?>">
        <div class="crm-accordion-header">
            <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Search Surveys<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
        </div><!-- /.crm-accordion-header -->

        <div class="crm-accordion-body">
        <?php echo '<table class="form-layout-compressed"><tr><td>'; ?><?php echo $this->_tpl_vars['form']['survey_title']['label']; ?><?php echo '<br />'; ?><?php echo $this->_tpl_vars['form']['survey_title']['html']; ?><?php echo '</td></tr><tr><td>'; ?><?php echo $this->_tpl_vars['form']['activity_type_id']['label']; ?><?php echo '<br />'; ?><?php echo $this->_tpl_vars['form']['activity_type_id']['html']; ?><?php echo '</td><td>'; ?><?php echo $this->_tpl_vars['form']['survey_campaign_id']['label']; ?><?php echo '<br />'; ?><?php echo $this->_tpl_vars['form']['survey_campaign_id']['html']; ?><?php echo '</td></tr><tr><td colspan="2">'; ?><?php if ($this->_tpl_vars['context'] == 'search'): ?><?php echo ''; ?><?php echo $this->_tpl_vars['form']['buttons']['html']; ?><?php echo ''; ?><?php else: ?><?php echo '<a class="searchSurvey button" style="float:left;" href="#" title="'; ?><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php echo 'Search'; ?><?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php echo '" onClick="searchSurveys( \''; ?><?php echo $this->_tpl_vars['qfKey']; ?><?php echo '\' );return false;">'; ?><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php echo 'Search'; ?><?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php echo '</a>'; ?><?php endif; ?><?php echo '</td></tr></table>'; ?>

        </div>
      </div>
    </div>
    
    <div id='surveyList'></div>

<?php endif; ?> 

<?php echo '
<script type="text/javascript">

 '; ?>

  <?php if ($this->_tpl_vars['force'] && ! $this->_tpl_vars['buildSelector']): ?>
 <?php echo '
 CRM.$(function($) {
    searchSurveys( '; ?>
'<?php echo $this->_tpl_vars['qfKey']; ?>
'<?php echo ' );
 });

 '; ?>

 <?php endif; ?>
 <?php echo '

function searchSurveys( qfKey )
{
      var dataUrl =  '; ?>
"<?php echo CRM_Utils_System::crmURL(array('h' => 0,'q' => 'search=1&snippet=4&type=survey'), $this);?>
"<?php echo ';

      //lets carry qfKey to retain form session.
      if ( qfKey ) dataUrl = dataUrl + \'&qfKey=\' + qfKey;

      CRM.$.get( dataUrl, null, function( surveyList ) {
        CRM.$( \'#surveyList\' ).html( surveyList ).trigger(\'crmLoad\');

        //collapse the search form.
        var searchFormName = \'#search_form_\' + '; ?>
'<?php echo $this->_tpl_vars['searchFor']; ?>
'<?php echo ';
        CRM.$( searchFormName + \'.crm-accordion-wrapper:not(.collapsed)\').crmAccordionToggle();
      }, \'html\' );
}

function loadSurveyList( )
{
     var sourceUrl = '; ?>
"<?php echo CRM_Utils_System::crmURL(array('p' => 'civicrm/ajax/rest','h' => 0,'q' => 'snippet=4&className=CRM_Campaign_Page_AJAX&fnName=surveyList'), $this);?>
"<?php echo ';

     //build the search qill.
     //get the search criteria.
     var searchParams   = '; ?>
<?php echo $this->_tpl_vars['searchParams']; ?>
<?php echo ';
     var surveyTypes    = '; ?>
<?php echo $this->_tpl_vars['surveyTypes']; ?>
<?php echo ';
     var surveyCampaigns = '; ?>
<?php echo $this->_tpl_vars['surveyCampaigns']; ?>
<?php echo ';

     var noRecordFoundMsg  = "'; ?>
<?php $this->_tag_stack[] = array('ts', array('escape' => 'js')); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>No matches found for:<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php echo '";
     noRecordFoundMsg += \'<div class="qill">\';

     var count = 0;
     var searchQill = [];
     for ( param in searchParams ) {
       if ( val = CRM.$( \'#\' + param ).val( ) ) {
         if ( param == \'activity_type_id\' ) val = surveyTypes[val];
         if ( param == \'survey_campaign_id\' ) val = surveyCampaigns[val];
         searchQill[count++] = searchParams[param] + \' : \' + val;
       }
     }
     noRecordFoundMsg += searchQill.join( \'<span class="font-italic"> ...AND... </span></div><div class="qill">\' );
     CRM.$( \'table.surveys\', \'#surveyList\').dataTable({
             "bFilter"    : false,
             "bAutoWidth" : false,
             "bProcessing": false,
             "bLengthChange": false,
             "aaSorting": [],
             "aoColumns":[{sClass:\'crm-survey-id                          hiddenElement\' },
                          {sClass:\'crmf-title\'                                     },
                          {sClass:\'crm-survey-campaign_id                 hiddenElement\' },
                          {sClass:\'crm-survey-campaign\'                                  },
                          {sClass:\'crm-survey-activity_type_id            hiddenElement\' },
                          {sClass:\'crm-survey-activity_type\'                             },
                          {sClass:\'crm-survey-release_frequency\'                         },
                          {sClass:\'crm-survey-default_number_of_contacts\'                },
                          {sClass:\'crm-survey-max_number_of_contacts\'                    },
                          {sClass:\'crm-survey-is_default\'                                },
                          {sClass:\'crm-survey-is_active                   hiddenElement\' },
                          {sClass:\'crm-survey-isActive\'                                  },
                          {sClass:\'crm-survey-result_id\',                 bSortable:false},
                          {sClass:\'crm-survey-action\',                    bSortable:false},
                          {sClass:\'crm-campaign-voterLinks\',              bSortable:false}
           ],
         "sPaginationType": "full_numbers",
             "sDom"       : \'rt<"crm-datatable-pager-bottom"ip>\',
             "bServerSide": true,
             "bJQueryUI": true,
             "sAjaxSource": sourceUrl,
             "asStripClasses" : [ "odd-row", "even-row" ],
             "oLanguage":{"sEmptyTable"  : noRecordFoundMsg,
                 "sZeroRecords" : noRecordFoundMsg },
             "fnDrawCallback": function() {
               CRM.$(this).trigger(\'crmLoad\');
             },
             "fnRowCallback": function( nRow, aData, iDisplayIndex ) {
               // Crm-editable
               CRM.$(nRow).children().eq(1).addClass(\'crm-editable\');
         //insert the id for each row for enable/disable.
         var rowId = \'survey-\' + aData[0];
         CRM.$(nRow).attr( \'id\', rowId).addClass(\'crm-entity\');
         //handled disabled rows.
         var isActive = Boolean(Number(aData[10]));
         if ( !isActive ) CRM.$(nRow).addClass( \'disabled\' );

         //add id for yes/no column.
         CRM.$(nRow).children().eq(11).attr( \'id\', rowId + \'_status\' );
         CRM.$(nRow).children().eq(9).html(CRM.utils.formatIcon(\'fa-check\', ts(\'Default\'), nRow.cells[9].innerText));

         return nRow;
    },

    "fnServerData": function ( sSource, aoData, fnCallback ) {
      var dataLength = aoData.length;

      var count = 1;
      var searchCriteria = [];

      //get the search criteria.
                        var searchParams = '; ?>
<?php echo $this->_tpl_vars['searchParams']; ?>
<?php echo ';
                        for ( param in searchParams ) {
          fldName = param;
          if ( param == \'survey_title\' ) fldName = \'title\';
          if ( param == \'survey_campaign_id\' ) fldName = \'campaign_id\';
                            if ( val = CRM.$( \'#\' + param ).val( ) ) {
            aoData[dataLength++] = {name: fldName, value: val};
          }
          searchCriteria[count++] = fldName;
                        }

      //do search for surveys.
      aoData[dataLength++] = {name: \'search_for\', value: \'survey\'};

      //lets transfer search criteria.
      aoData[dataLength++] = {name: \'searchCriteria\', value:searchCriteria.join(\',\')};

      CRM.$.ajax( {
        "dataType": \'json\',
        "type": "POST",
        "url": sSource,
        "data": aoData,
        "success": fnCallback
      } ); }
         });
}

function displayResultSet( surveyId, surveyTitle, OptionGroupId ) {
  var data                = new Object;
  data[\'option_group_id\'] = OptionGroupId;
  data[\'survey_id\']       = surveyId;

  var dataUrl  = '; ?>
"<?php echo CRM_Utils_System::crmURL(array('p' => 'civicrm/ajax/rest','h' => 0,'q' => 'className=CRM_Campaign_Page_AJAX&fnName=loadOptionGroupDetails'), $this);?>
"<?php echo ';
  var content  = \'<tr><th>'; ?>
<?php $this->_tag_stack[] = array('ts', array('escape' => 'js')); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Label<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php echo '</th><th>'; ?>
<?php $this->_tag_stack[] = array('ts', array('escape' => 'js')); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Value<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php echo '</th><th>'; ?>
<?php $this->_tag_stack[] = array('ts', array('escape' => 'js')); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Recontact Interval<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php echo '</th><th>'; ?>
<?php $this->_tag_stack[] = array('ts', array('escape' => 'js')); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Order<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php echo '</th></tr>\';
  var setTitle = \''; ?>
<?php $this->_tag_stack[] = array('ts', array('escape' => 'js')); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Result Set for<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?> <?php echo '\' + surveyTitle;

  CRM.$.post( dataUrl, data, function( opGroup ) {
    if ( opGroup.status == \'success\' ) {
      var result = opGroup.result;
      for( key in result ) {
        var interval = \'\';
  if ( result[key].interval && result[key].interval != \'undefined\' ) {
    interval = result[key].interval;
  }
        content += \'<tr><td>\'+  result[key].label +\'</td><td>\'+ result[key].value +\'</td><td>\'+ interval +\'</td><td>\'+ result[key].weight +\'</td></tr>\';
      }

      CRM.$("#survey-result-set-dialog").show( ).html(\'<table>\'+content+\'</table>\').dialog({
        title: setTitle,
        modal: true,
        width: 480,
        overlay: {
          opacity: 0.5,
          background: "black"
        },
        beforeclose: function(event, ui) {
          CRM.$(this).dialog("destroy");
        }
      });
    }
  }, "json" );

}

</script>
'; ?>

<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>