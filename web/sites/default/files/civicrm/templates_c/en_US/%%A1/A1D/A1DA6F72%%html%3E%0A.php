<?php /* Smarty version 2.6.31, created on 2021-08-23 20:50:50
         compiled from string:%3C%21DOCTYPE+html+PUBLIC+%22-//W3C//DTD+XHTML+1.0+Transitional//EN%22+%22http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd%22%3E%0A%3Chtml+xmlns%3D%22http://www.w3.org/1999/xhtml%22%3E%0A++%3Chead%3E%0A++++%3Cmeta+http-equiv%3D%22Content-Type%22+content%3D%22text/html%3B+charset%3DUTF-8%22+/%3E%0A++++%3Ctitle%3E%3C/title%3E%0A++%3C/head%3E%0A++%3Cbody%3E%0A++++%3Ccenter%3E%0A++++++%3Ctable+width%3D%22620%22+border%3D%220%22+cellpadding%3D%220%22+cellspacing%3D%220%22+id%3D%22crm-event_receipt%22+style%3D%22font-family:+Arial%2C+Verdana%2C+sans-serif%3B+text-align:+left%3B%22%3E%0A++++++++%3Ctr%3E%0A++++++++++%3Ctd%3E%0A++++++++++++%3Cstrong%3EDear+Tory+Trone%2C%3C/strong%3E%0A%0A++++++++++++%3Cp%3EYou+are+confirmed+to+volunteer+for+the+following+project%28s%29:%3C/p%3E%0A%0A++++++++++++%3Ctable%3E%0A++++++++++++++%7Bforeach+from%3D%24volunteer_projects+item%3Dvolunteer_project%7D%0A++++++++++++++%3Ctr%3E%0A++++++++++++++++%3Ctd%3E%0A++++++++++++++++++%3Ctable%3E%0A++++++++++++++++++++%3Ctr%3E%0A++++++++++++++++++++++%3Ctd%3E%3Cstrong%3EProject:%3C/strong%3E+%7B%24volunteer_project.title%7D%3C/td%3E%0A++++++++++++++++++++%3C/tr%3E%0A%0A++++++++++++++++++++%7Bif+%21empty%28%24volunteer_project.description%29%7D%0A++++++++++++++++++++%3Ctr%3E%0A++++++++++++++++++++++%3Ctd%3E%3Cstrong%3EDescription:%3C/strong%3E+%7B%24volunteer_project.description%7D%3C/td%3E%0A++++++++++++++++++++%3C/tr%3E%0A++++++++++++++++++++%7B/if%7D%0A%0A++++++++++++++++++++%7Bif+%21empty%28%24volunteer_project.location%29%7D%0A++++++++++++++++++++%3Ctr%3E%0A++++++++++++++++++++++%3Ctd%3E%0A++++++++++++++++++++++++%3Cstrong%3ELocation:%3C/strong%3E%0A++++++++++++++++++++++++%3Ctable%3E%0A++++++++++++++++++++++++++%3Ctr%3E%0A++++++++++++++++++++++++++++%3Ctd%3E%7B%24volunteer_project.location.address.name%7D%3C/td%3E%0A++++++++++++++++++++++++++%3C/tr%3E++++++++++++++++++++++++%0A++++++++++++++++++++++++++%3Ctr%3E%0A++++++++++++++++++++++++++++%3Ctd%3E%7B%24volunteer_project.location.address.street_address%7D%3C/td%3E%0A++++++++++++++++++++++++++%3C/tr%3E%0A++++++++++++++++++++++++++%3Ctr%3E%0A++++++++++++++++++++++++++++%3Ctd%3E%7B%24volunteer_project.location.address.city%7D%3C/td%3E%0A++++++++++++++++++++++++++%3C/tr%3E%0A++++++++++++++++++++++++++%3Ctr%3E%0A++++++++++++++++++++++++++++%3Ctd%3E%7B%24volunteer_project.location.email%7D%3C/td%3E%0A++++++++++++++++++++++++++%3C/tr%3E%0A++++++++++++++++++++++++++%3Ctr%3E%0A++++++++++++++++++++++++++++%3Ctd%3E%7B%24volunteer_project.location.phone%7D%3C/td%3E%0A++++++++++++++++++++++++++%3C/tr%3E%0A++++++++++++++++++++++++%3C/table%3E%0A++++++++++++++++++++++%3C/td%3E%0A++++++++++++++++++++%3C/tr%3E%0A++++++++++++++++++++%7B/if%7D%0A%0A++++++++++++++++++++%3Ctr%3E%0A++++++++++++++++++++++%3Ctd%3E%0A++++++++++++++++++++++++%3Cstrong%3EYour+Contact:%3C/strong%3E%0A++++++++++++++++++++++++%3Ctable%3E%0A++++++++++++++++++++++++%7Bforeach+from%3D%24volunteer_project.contacts+item%3Dperson%7D%0A++++++++++++++++++++++++++%3Ctr%3E%0A++++++++++++++++++++++++++++%3Ctd%3E%7B%24person.display_name%7D%3C/td%3E%0A++++++++++++++++++++++++++++%3Ctd%3E%7B%24person.email%7D%3C/td%3E%0A++++++++++++++++++++++++++++%3Ctd%3E%7B%24person.phone%7D%3C/td%3E%0A++++++++++++++++++++++++++%3C/tr%3E%0A++++++++++++++++++++++++%7B/foreach%7D%0A++++++++++++++++++++++++%3C/table%3E%0A++++++++++++++++++++++%3C/td%3E%0A++++++++++++++++++++%3C/tr%3E%0A%0A++++++++++++++++++++%3Ctr%3E%0A++++++++++++++++++++++%3Ctd%3E%0A++++++++++++++++++++++++%3Cstrong%3EShifts:%3C/strong%3E%0A++++++++++++++++++++++++%3Ctable+border%3D%221%22%3E%0A++++++++++++++++++++++++++%3Ctr%3E%0A++++++++++++++++++++++++++++%3Ctd%3ERole%3C/td%3E%0A++++++++++++++++++++++++++++%3Ctd%3EDescription%3C/td%3E%0A++++++++++++++++++++++++++++%3Ctd%3EStart+Time%3C/td%3E%0A++++++++++++++++++++++++++++%3Ctd%3EDuration%3C/td%3E%0A++++++++++++++++++++++++++%3C/tr%3E%0A++++++++++++++++++++++++++%7Bforeach+from%3D%24volunteer_project.opportunities+item%3Dopportunity%7D%0A++++++++++++++++++++++++++%3Ctr%3E%0A++++++++++++++++++++++++++++%3Ctd%3E%7B%24opportunity.role%7D%3C/td%3E%0A++++++++++++++++++++++++++++%3Ctd%3E%7B%24opportunity.description%7D%3C/td%3E%0A++++++++++++++++++++++++++++%3Ctd%3E%7B%24opportunity.display_time%7D%3C/td%3E%0A++++++++++++++++++++++++++++%3Ctd%3E%7B%24opportunity.duration%7D%3C/td%3E%0A++++++++++++++++++++++++++%3C/tr%3E%0A++++++++++++++++++++++++++%7B/foreach%7D%0A++++++++++++++++++++++++%3C/table%3E%0A++++++++++++++++++++++%3C/td%3E%0A++++++++++++++++++++%3C/tr%3E%0A++++++++++++++++++%3C/table%3E%0A++++++++++++++++%3C/td%3E%0A++++++++++++++%3C/tr%3E%0A++++++++++++++%7B/foreach%7D%0A++++++++++++%3C/table%3E%0A%0A++++++++++++%3Cp%3EThank+you+for+your+participation%21%3C/p%3E%0A++++++++++%3C/td%3E%0A++++++++%3C/tr%3E%0A++++++%3C/table%3E%0A++++%3C/center%3E%0A++%3C/body%3E%0A%3C/html%3E%0A */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'crmScope', 'string:<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title></title>
  </head>
  <body>
    <center>
      <table width="620" border="0" cellpadding="0" cellspacing="0" id="crm-event_receipt" style="font-family: Arial, Verdana, sans-serif; text-align: left;">
        <tr>
          <td>
            <strong>Dear Tory Trone,</strong>

            <p>You are confirmed to volunteer for the following project(s):</p>

            <table>
              {foreach from=$volunteer_projects item=volunteer_project}
              <tr>
                <td>
                  <table>
                    <tr>
                      <td><strong>Project:</strong> {$volunteer_project.title}</td>
                    </tr>

                    {if !empty($volunteer_project.description)}
                    <tr>
                      <td><strong>Description:</strong> {$volunteer_project.description}</td>
                    </tr>
                    {/if}

                    {if !empty($volunteer_project.location)}
                    <tr>
                      <td>
                        <strong>Location:</strong>
                        <table>
                          <tr>
                            <td>{$volunteer_project.location.address.name}</td>
                          </tr>                        
                          <tr>
                            <td>{$volunteer_project.location.address.street_address}</td>
                          </tr>
                          <tr>
                            <td>{$volunteer_project.location.address.city}</td>
                          </tr>
                          <tr>
                            <td>{$volunteer_project.location.email}</td>
                          </tr>
                          <tr>
                            <td>{$volunteer_project.location.phone}</td>
                          </tr>
                        </table>
                      </td>
                    </tr>
                    {/if}

                    <tr>
                      <td>
                        <strong>Your Contact:</strong>
                        <table>
                        {foreach from=$volunteer_project.contacts item=person}
                          <tr>
                            <td>{$person.display_name}</td>
                            <td>{$person.email}</td>
                            <td>{$person.phone}</td>
                          </tr>
                        {/foreach}
                        </table>
                      </td>
                    </tr>

                    <tr>
                      <td>
                        <strong>Shifts:</strong>
                        <table border="1">
                          <tr>
                            <td>Role</td>
                            <td>Description</td>
                            <td>Start Time</td>
                            <td>Duration</td>
                          </tr>
                          {foreach from=$volunteer_project.opportunities item=opportunity}
                          <tr>
                            <td>{$opportunity.role}</td>
                            <td>{$opportunity.description}</td>
                            <td>{$opportunity.display_time}</td>
                            <td>{$opportunity.duration}</td>
                          </tr>
                          {/foreach}
                        </table>
                      </td>
                    </tr>
                  </table>
                </td>
              </tr>
              {/foreach}
            </table>

            <p>Thank you for your participation!</p>
          </td>
        </tr>
      </table>
    </center>
  </body>
</html>
', 1, false),)), $this); ?>
<?php $this->_tag_stack[] = array('crmScope', array('extensionKey' => "")); $_block_repeat=true;smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title></title>
  </head>
  <body>
    <center>
      <table width="620" border="0" cellpadding="0" cellspacing="0" id="crm-event_receipt" style="font-family: Arial, Verdana, sans-serif; text-align: left;">
        <tr>
          <td>
            <strong>Dear Tory Trone,</strong>

            <p>You are confirmed to volunteer for the following project(s):</p>

            <table>
              <?php $_from = $this->_tpl_vars['volunteer_projects']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['volunteer_project']):
?>
              <tr>
                <td>
                  <table>
                    <tr>
                      <td><strong>Project:</strong> <?php echo $this->_tpl_vars['volunteer_project']['title']; ?>
</td>
                    </tr>

                    <?php if (! empty ( $this->_tpl_vars['volunteer_project']['description'] )): ?>
                    <tr>
                      <td><strong>Description:</strong> <?php echo $this->_tpl_vars['volunteer_project']['description']; ?>
</td>
                    </tr>
                    <?php endif; ?>

                    <?php if (! empty ( $this->_tpl_vars['volunteer_project']['location'] )): ?>
                    <tr>
                      <td>
                        <strong>Location:</strong>
                        <table>
                          <tr>
                            <td><?php echo $this->_tpl_vars['volunteer_project']['location']['address']['name']; ?>
</td>
                          </tr>                        
                          <tr>
                            <td><?php echo $this->_tpl_vars['volunteer_project']['location']['address']['street_address']; ?>
</td>
                          </tr>
                          <tr>
                            <td><?php echo $this->_tpl_vars['volunteer_project']['location']['address']['city']; ?>
</td>
                          </tr>
                          <tr>
                            <td><?php echo $this->_tpl_vars['volunteer_project']['location']['email']; ?>
</td>
                          </tr>
                          <tr>
                            <td><?php echo $this->_tpl_vars['volunteer_project']['location']['phone']; ?>
</td>
                          </tr>
                        </table>
                      </td>
                    </tr>
                    <?php endif; ?>

                    <tr>
                      <td>
                        <strong>Your Contact:</strong>
                        <table>
                        <?php $_from = $this->_tpl_vars['volunteer_project']['contacts']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['person']):
?>
                          <tr>
                            <td><?php echo $this->_tpl_vars['person']['display_name']; ?>
</td>
                            <td><?php echo $this->_tpl_vars['person']['email']; ?>
</td>
                            <td><?php echo $this->_tpl_vars['person']['phone']; ?>
</td>
                          </tr>
                        <?php endforeach; endif; unset($_from); ?>
                        </table>
                      </td>
                    </tr>

                    <tr>
                      <td>
                        <strong>Shifts:</strong>
                        <table border="1">
                          <tr>
                            <td>Role</td>
                            <td>Description</td>
                            <td>Start Time</td>
                            <td>Duration</td>
                          </tr>
                          <?php $_from = $this->_tpl_vars['volunteer_project']['opportunities']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['opportunity']):
?>
                          <tr>
                            <td><?php echo $this->_tpl_vars['opportunity']['role']; ?>
</td>
                            <td><?php echo $this->_tpl_vars['opportunity']['description']; ?>
</td>
                            <td><?php echo $this->_tpl_vars['opportunity']['display_time']; ?>
</td>
                            <td><?php echo $this->_tpl_vars['opportunity']['duration']; ?>
</td>
                          </tr>
                          <?php endforeach; endif; unset($_from); ?>
                        </table>
                      </td>
                    </tr>
                  </table>
                </td>
              </tr>
              <?php endforeach; endif; unset($_from); ?>
            </table>

            <p>Thank you for your participation!</p>
          </td>
        </tr>
      </table>
    </center>
  </body>
</html>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>