<?php /* Smarty version 2.6.31, created on 2021-09-02 15:22:38
         compiled from string:%3C%21DOCTYPE+html+PUBLIC+%22-//W3C//DTD+XHTML+1.0+Transitional//EN%22+%22http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd%22%3E%0A%3Chtml+xmlns%3D%22http://www.w3.org/1999/xhtml%22%3E%0A%3Chead%3E%0A+%3Cmeta+http-equiv%3D%22Content-Type%22+content%3D%22text/html%3B+charset%3DUTF-8%22+/%3E%0A+%3Ctitle%3E%3C/title%3E%0A%3C/head%3E%0A%3Cbody%3E%0A%0A%7Bcapture+assign%3DheaderStyle%7Dcolspan%3D%222%22+style%3D%22text-align:+left%3B+padding:+4px%3B+border-bottom:+1px+solid+%23999%3B+background-color:+%23eee%3B%22%7B/capture%7D%0A%7Bcapture+assign%3DlabelStyle+%7Dstyle%3D%22padding:+4px%3B+border-bottom:+1px+solid+%23999%3B+background-color:+%23f7f7f7%3B%22%7B/capture%7D%0A%7Bcapture+assign%3DvalueStyle+%7Dstyle%3D%22padding:+4px%3B+border-bottom:+1px+solid+%23999%3B%22%7B/capture%7D%0A%0A%3Ccenter%3E%0A++%3Ctable+id%3D%22crm-event_receipt%22+style%3D%22font-family:+Arial%2C+Verdana%2C+sans-serif%3B+text-align:+left%3B+width:100%25%3B+max-width:700px%3B+padding:0%3B+margin:0%3B+border:0px%3B%22%3E%0A%0A++%3C%21--+BEGIN+HEADER+--%3E%0A++%3C%21--+You+can+add+table+row%28s%29+here+with+logo+or+other+header+elements+--%3E%0A++%3C%21--+END+HEADER+--%3E%0A%0A++%3C%21--+BEGIN+CONTENT+--%3E%0A%0A++%3Ctr%3E%0A+++%3Ctd%3E%0A++++%7Bassign+var%3D%22greeting%22+value%3D%22Dear+Jim%22%7D%7Bif+%24greeting%7D%3Cp%3E%7B%24greeting%7D%2C%3C/p%3E%7B/if%7D%0A%0A++++%7Bif+%21empty%28%24event.confirm_email_text%29+AND+%28empty%28%24isOnWaitlist%29+AND+empty%28%24isRequireApproval%29%29%7D%0A+++++%3Cp%3E%7B%24event.confirm_email_text%7Chtmlize%7D%3C/p%3E%0A++++%7B/if%7D%0A%0A++++%7Bif+%21empty%28%24isOnWaitlist%29%7D%0A+++++%3Cp%3E%7Bts%7DYou+have+been+added+to+the+WAIT+LIST+for+this+event.%7B/ts%7D%3C/p%3E%0A+++++%7Bif+%21empty%28%24isPrimary%29%7D%0A+++++++%3Cp%3E%7Bts%7DIf+space+becomes+available+you+will+receive+an+email+with+a+link+to+a+web+page+where+you+can+complete+your+registration.%7B/ts%7D%3C/p%3E%0A+++++%7B/if%7D%0A++++%7Belseif+%21empty%28%24isRequireApproval%29%7D%0A+++++%3Cp%3E%7Bts%7DYour+registration+has+been+submitted.%7B/ts%7D%3C/p%3E%0A+++++%7Bif+%21empty%28%24isPrimary%29%7D%0A++++++%3Cp%3E%7Bts%7DOnce+your+registration+has+been+reviewed%2C+you+will+receive+an+email+with+a+link+to+a+web+page+where+you+can+complete+the+registration+process.%7B/ts%7D%3C/p%3E%0A+++++%7B/if%7D%0A++++%7Belseif+%21empty%28%24is_pay_later%29%7D%0A+++++%3Cp%3E%7Bif+isset%28%24pay_later_receipt%29%7D%7B%24pay_later_receipt%7D%7B/if%7D%3C/p%3E+%7B%2A+FIXME:+this+might+be+text+rather+than+HTML+%2A%7D%0A++++%7B/if%7D%0A%0A+++%3C/td%3E%0A++%3C/tr%3E%0A++%3Ctr%3E%0A+++%3Ctd%3E%0A++++%3Ctable+style%3D%22border:+1px+solid+%23999%3B+margin:+1em+0em+1em%3B+border-collapse:+collapse%3B+width:100%25%3B%22%3E%0A+++++%3Ctr%3E%0A++++++%3Cth+%7B%24headerStyle%7D%3E%0A+++++++%7Bts%7DEvent+Information+and+Location%7B/ts%7D%0A++++++%3C/th%3E%0A+++++%3C/tr%3E%0A+++++%3Ctr%3E%0A++++++%3Ctd+colspan%3D%222%22+%7B%24valueStyle%7D%3E%0A+++++++%7B%24event.event_title%7D%3Cbr+/%3E%0A+++++++%7B%24event.event_start_date%7CcrmDate%7D%7Bif+%24event.event_end_date%7D-%7Bif+%24event.event_end_date%7Cdate_format:%22%25Y%25m%25d%22+%3D%3D+%24event.event_start_date%7Cdate_format:%22%25Y%25m%25d%22%7D%7B%24event.event_end_date%7CcrmDate:0:1%7D%7Belse%7D%7B%24event.event_end_date%7CcrmDate%7D%7B/if%7D%7B/if%7D%0A++++++%3C/td%3E%0A+++++%3C/tr%3E%0A%0A+++++%7Bif+%21empty%28%24event.participant_role%29+and+%24event.participant_role+neq+%27Attendee%27+and+%21empty%28%24defaultRole%29%7D%0A++++++%3Ctr%3E%0A+++++++%3Ctd+%7B%24labelStyle%7D%3E%0A++++++++%7Bts%7DParticipant+Role%7B/ts%7D%0A+++++++%3C/td%3E%0A+++++++%3Ctd+%7B%24valueStyle%7D%3E%0A++++++++%7B%24event.participant_role%7D%0A+++++++%3C/td%3E%0A++++++%3C/tr%3E%0A+++++%7B/if%7D%0A%0A+++++%7Bif+%21empty%28%24isShowLocation%29%7D%0A++++++%3Ctr%3E%0A+++++++%3Ctd+colspan%3D%222%22+%7B%24valueStyle%7D%3E%0A++++++++%7B%24location.address.1.display%7Cnl2br%7D%0A+++++++%3C/td%3E%0A++++++%3C/tr%3E%0A+++++%7B/if%7D%0A%0A+++++%7Bif+%21empty%28%24location.phone.1.phone%29+%7C%7C+%21empty%28%24location.email.1.email%29%7D%0A++++++%3Ctr%3E%0A+++++++%3Ctd+colspan%3D%222%22+%7B%24labelStyle%7D%3E%0A++++++++%7Bts%7DEvent+Contacts:%7B/ts%7D%0A+++++++%3C/td%3E%0A++++++%3C/tr%3E%0A++++++%7Bforeach+from%3D%24location.phone+item%3Dphone%7D%0A+++++++%7Bif+%24phone.phone%7D%0A++++++++%3Ctr%3E%0A+++++++++%3Ctd+%7B%24labelStyle%7D%3E%0A++++++++++%7Bif+%24phone.phone_type%7D%0A+++++++++++%7B%24phone.phone_type_display%7D%0A++++++++++%7Belse%7D%0A+++++++++++%7Bts%7DPhone%7B/ts%7D%0A++++++++++%7B/if%7D%0A+++++++++%3C/td%3E%0A+++++++++%3Ctd+%7B%24valueStyle%7D%3E%0A++++++++++%7B%24phone.phone%7D+%7Bif+%24phone.phone_ext%7D%26nbsp%3B%7Bts%7Dext.%7B/ts%7D+%7B%24phone.phone_ext%7D%7B/if%7D%0A+++++++++%3C/td%3E%0A++++++++%3C/tr%3E%0A+++++++%7B/if%7D%0A++++++%7B/foreach%7D%0A++++++%7Bforeach+from%3D%24location.email+item%3DeventEmail%7D%0A+++++++%7Bif+%24eventEmail.email%7D%0A++++++++%3Ctr%3E%0A+++++++++%3Ctd+%7B%24labelStyle%7D%3E%0A++++++++++%7Bts%7DEmail%7B/ts%7D%0A+++++++++%3C/td%3E%0A+++++++++%3Ctd+%7B%24valueStyle%7D%3E%0A++++++++++%7B%24eventEmail.email%7D%0A+++++++++%3C/td%3E%0A++++++++%3C/tr%3E%0A+++++++%7B/if%7D%0A++++++%7B/foreach%7D%0A+++++%7B/if%7D%0A%0A+++++%7Bif+%21empty%28%24event.is_public%29%7D%0A++++++%3Ctr%3E%0A+++++++%3Ctd+colspan%3D%222%22+%7B%24valueStyle%7D%3E%0A++++++++%7Bcapture+assign%3DicalFeed%7D%7BcrmURL+p%3D%27civicrm/event/ical%27+q%3D%22reset%3D1%26id%3D%60%24event.id%60%22+h%3D0+a%3D1+fe%3D1%7D%7B/capture%7D%0A++++++++%3Ca+href%3D%22%7B%24icalFeed%7D%22%3E%7Bts%7DDownload+iCalendar+File%7B/ts%7D%3C/a%3E%0A+++++++%3C/td%3E%0A++++++%3C/tr%3E%0A+++++%7B/if%7D%0A%0A+++++%7Bif+%24email%7D%0A++++++%3Ctr%3E%0A+++++++%3Cth+%7B%24headerStyle%7D%3E%0A++++++++%7Bts%7DRegistered+Email%7B/ts%7D%0A+++++++%3C/th%3E%0A++++++%3C/tr%3E%0A++++++%3Ctr%3E%0A+++++++%3Ctd+colspan%3D%222%22+%7B%24valueStyle%7D%3E%0A++++++++%7B%24email%7D%0A+++++++%3C/td%3E%0A++++++%3C/tr%3E%0A+++++%7B/if%7D%0A%0A%0A+++++%7Bif+%21empty%28%24event.is_monetary%29%7D%0A%0A++++++%3Ctr%3E%0A+++++++%3Cth+%7B%24headerStyle%7D%3E%0A++++++++%7Bif+%21empty%28%24event.fee_label%29%7D%7B%24event.fee_label%7D%7B/if%7D%0A+++++++%3C/th%3E%0A++++++%3C/tr%3E%0A%0A++++++%7Bif+%21empty%28%24lineItem%29%7D%0A+++++++%7Bforeach+from%3D%24lineItem+item%3Dvalue+key%3Dpriceset%7D%0A++++++++%7Bif+%24value+neq+%27skip%27%7D%0A+++++++++%7Bif+%21empty%28%24isPrimary%29%7D%0A++++++++++%7Bif+%24lineItem%7C%40count+GT+1%7D+%7B%2A+Header+for+multi+participant+registration+cases.+%2A%7D%0A+++++++++++%3Ctr%3E%0A++++++++++++%3Ctd+colspan%3D%222%22+%7B%24labelStyle%7D%3E%0A+++++++++++++%7Bts+1%3D%24priceset%2B1%7DParticipant+%251%7B/ts%7D%0A++++++++++++%3C/td%3E%0A+++++++++++%3C/tr%3E%0A++++++++++%7B/if%7D%0A+++++++++%7B/if%7D%0A+++++++++%3Ctr%3E%0A++++++++++%3Ctd+colspan%3D%222%22+%7B%24valueStyle%7D%3E%0A+++++++++++%3Ctable%3E+%7B%2A+FIXME:+style+this+table+so+that+it+looks+like+the+text+version+%28justification%2C+etc.%29+%2A%7D%0A++++++++++++%3Ctr%3E%0A+++++++++++++%3Cth%3E%7Bts%7DItem%7B/ts%7D%3C/th%3E%0A+++++++++++++%3Cth%3E%7Bts%7DQty%7B/ts%7D%3C/th%3E%0A+++++++++++++%3Cth%3E%7Bts%7DEach%7B/ts%7D%3C/th%3E%0A+++++++++++++%7Bif+%21empty%28%24dataArray%29%7D%0A++++++++++++++%3Cth%3E%7Bts%7DSubTotal%7B/ts%7D%3C/th%3E%0A++++++++++++++%3Cth%3E%7Bts%7DTax+Rate%7B/ts%7D%3C/th%3E%0A++++++++++++++%3Cth%3E%7Bts%7DTax+Amount%7B/ts%7D%3C/th%3E%0A+++++++++++++%7B/if%7D%0A+++++++++++++%3Cth%3E%7Bts%7DTotal%7B/ts%7D%3C/th%3E%0A+++++++%7Bif+%21empty%28%24pricesetFieldsCount%29+%7D%3Cth%3E%7Bts%7DTotal+Participants%7B/ts%7D%3C/th%3E%7B/if%7D%0A++++++++++++%3C/tr%3E%0A++++++++++++%7Bforeach+from%3D%24value+item%3Dline%7D%0A+++++++++++++%3Ctr%3E%0A++++++++++++++%3Ctd%3E%0A++++++++%7Bif+%24line.html_type+eq+%27Text%27%7D%7B%24line.label%7D%7Belse%7D%7B%24line.field_title%7D+-+%7B%24line.label%7D%7B/if%7D+%7Bif+%24line.description%7D%3Cdiv%3E%7B%24line.description%7Ctruncate:30:%22...%22%7D%3C/div%3E%7B/if%7D%0A++++++++++++++%3C/td%3E%0A++++++++++++++%3Ctd%3E%0A+++++++++++++++%7B%24line.qty%7D%0A++++++++++++++%3C/td%3E%0A++++++++++++++%3Ctd%3E%0A+++++++++++++++%7B%24line.unit_price%7CcrmMoney%7D%0A++++++++++++++%3C/td%3E%0A++++++++++++++%7Bif+%21empty%28%24dataArray%29%7D%0A+++++++++++++++%3Ctd%3E%0A++++++++++++++++%7B%24line.unit_price%2A%24line.qty%7CcrmMoney%7D%0A+++++++++++++++%3C/td%3E%0A+++++++++++++++%7Bif+isset%28%24line.tax_rate%29+and+%28%24line.tax_rate+%21%3D+%22%22+%7C%7C+%24line.tax_amount+%21%3D+%22%22%29%7D%0A++++++++++++++++%3Ctd%3E%0A+++++++++++++++++%7B%24line.tax_rate%7Cstring_format:%22%25.2f%22%7D%25%0A++++++++++++++++%3C/td%3E%0A++++++++++++++++%3Ctd%3E%0A+++++++++++++++++%7B%24line.tax_amount%7CcrmMoney%7D%0A++++++++++++++++%3C/td%3E%0A+++++++++++++++%7Belse%7D%0A++++++++++++++++%3Ctd%3E%3C/td%3E%0A++++++++++++++++%3Ctd%3E%3C/td%3E%0A+++++++++++++++%7B/if%7D%0A++++++++++++++%7B/if%7D%0A++++++++++++++%3Ctd%3E%0A+++++++++++++++%7B%24line.line_total%2B%24line.tax_amount%7CcrmMoney%7D%0A++++++++++++++%3C/td%3E%0A++++++++%7Bif++%21empty%28%24pricesetFieldsCount%29+%7D%0A++++++++%3Ctd%3E%0A++++%7B%24line.participant_count%7D%0A++++++++++++++%3C/td%3E%0A++++++++%7B/if%7D%0A+++++++++++++%3C/tr%3E%0A++++++++++++%7B/foreach%7D%0A+++++++++++%3C/table%3E%0A++++++++++%3C/td%3E%0A+++++++++%3C/tr%3E%0A++++++++%7B/if%7D%0A+++++++%7B/foreach%7D%0A+++++++%7Bif+%21empty%28%24dataArray%29%7D%0A++++++++%7Bif+isset%28%24totalAmount%29+and+isset%28%24totalTaxAmount%29%7D%0A++++++++%3Ctr%3E%0A+++++++++%3Ctd+%7B%24labelStyle%7D%3E%0A++++++++++%7Bts%7DAmount+Before+Tax:%7B/ts%7D%0A+++++++++%3C/td%3E%0A+++++++++%3Ctd+%7B%24valueStyle%7D%3E%0A++++++++++%7B%24totalAmount-%24totalTaxAmount%7CcrmMoney%7D%0A+++++++++%3C/td%3E%0A++++++++%3C/tr%3E%0A++++++++%7B/if%7D%0A++++++++%7Bforeach+from%3D%24dataArray+item%3Dvalue+key%3Dpriceset%7D%0A++++++++++%3Ctr%3E%0A+++++++++++%7Bif+%24priceset+%7C%7C+%24priceset+%3D%3D+0%7D%0A++++++++++++%3Ctd%3E%26nbsp%3B%7Bif+isset%28%24taxTerm%29%7D%7B%24taxTerm%7D%7B/if%7D+%7B%24priceset%7Cstring_format:%22%25.2f%22%7D%25%3C/td%3E%0A++++++++++++%3Ctd%3E%26nbsp%3B%7B%24value%7CcrmMoney:%24currency%7D%3C/td%3E%0A+++++++++++%7Belse%7D%0A++++++++++++%3Ctd%3E%26nbsp%3B%7Bts%7DNo%7B/ts%7D+%7Bif+isset%28%24taxTerm%29%7D%7B%24taxTerm%7D%7B/if%7D%3C/td%3E%0A++++++++++++%3Ctd%3E%26nbsp%3B%7B%24value%7CcrmMoney:%24currency%7D%3C/td%3E%0A+++++++++++%7B/if%7D%0A++++++++++%3C/tr%3E%0A++++++++%7B/foreach%7D%0A+++++++%7B/if%7D%0A++++++%7B/if%7D%0A%0A++++++%7Bif+%21empty%28%24amount%29+%26%26+%21%24lineItem%7D%0A+++++++%7Bforeach+from%3D%24amount+item%3Damnt+key%3Dlevel%7D%0A++++++++%3Ctr%3E%0A+++++++++%3Ctd+colspan%3D%222%22+%7B%24valueStyle%7D%3E%0A++++++++++%7B%24amnt.amount%7CcrmMoney%7D+%7B%24amnt.label%7D%0A+++++++++%3C/td%3E%0A++++++++%3C/tr%3E%0A+++++++%7B/foreach%7D%0A++++++%7B/if%7D%0A++++++%7Bif+isset%28%24totalTaxAmount%29%7D%0A+++++++%3Ctr%3E%0A++++++++%3Ctd+%7B%24labelStyle%7D%3E%0A+++++++++%7Bts%7DTotal+Tax+Amount%7B/ts%7D%0A++++++++%3C/td%3E%0A++++++++%3Ctd+%7B%24valueStyle%7D%3E%0A+++++++++%7B%24totalTaxAmount%7CcrmMoney:%24currency%7D%0A++++++++%3C/td%3E%0A+++++++%3C/tr%3E%0A++++++%7B/if%7D%0A++++++%7Bif+%21empty%28%24isPrimary%29%7D%0A+++++++%3Ctr%3E%0A++++++++%3Ctd+%7B%24labelStyle%7D%3E%0A++++++++%7Bif+isset%28%24balanceAmount%29%7D%0A+++++++++++%7Bts%7DTotal+Paid%7B/ts%7D%0A++++++++%7Belse%7D%0A+++++++++++%7Bts%7DTotal+Amount%7B/ts%7D%0A+++++++++%7B/if%7D%0A++++++++%3C/td%3E%0A++++++++%3Ctd+%7B%24valueStyle%7D%3E%0A+++++++++%7Bif+%21empty%28%24totalAmount%29%7D%7B%24totalAmount%7CcrmMoney%7D%7B/if%7D+%7Bif+%21empty%28%24hookDiscount.message%29%7D%28%7B%24hookDiscount.message%7D%29%7B/if%7D%0A++++++++%3C/td%3E%0A+++++++%3C/tr%3E%0A++++++%7Bif+isset%28%24balanceAmount%29%7D%0A+++++++%3Ctr%3E%0A++++++++%3Ctd+%7B%24labelStyle%7D%3E%0A+++++++++%7Bts%7DBalance%7B/ts%7D%0A++++++++%3C/td%3E%0A++++++++%3Ctd+%7B%24valueStyle%7D%3E%0A+++++++++%7B%24balanceAmount%7CcrmMoney%7D%0A++++++++%3C/td%3E%0A+++++++%3C/tr%3E%0A++++++%7B/if%7D%0A+++++++%7Bif+%21empty%28%24pricesetFieldsCount%29+%7D%0A+++++%3Ctr%3E%0A+++++++%3Ctd+%7B%24labelStyle%7D%3E%0A+++%7Bts%7DTotal+Participants%7B/ts%7D%3C/td%3E%0A+++++++%3Ctd+%7B%24valueStyle%7D%3E%0A+++%7Bassign+var%3D%22count%22+value%3D+0%7D%0A+++++++++%7Bforeach+from%3D%24lineItem+item%3Dpcount%7D%0A+++++++++%7Bassign+var%3D%22lineItemCount%22+value%3D0%7D%0A+++++++++%7Bif+%24pcount+neq+%27skip%27%7D%0A+++++++++++%7Bforeach+from%3D%24pcount+item%3Dp_count%7D%0A+++++++++++%7Bassign+var%3D%22lineItemCount%22+value%3D%24lineItemCount%2B%24p_count.participant_count%7D%0A+++++++++++%7B/foreach%7D%0A+++++++++++%7Bif+%24lineItemCount+%3C+1+%7D%0A+++++++++++assign+var%3D%22lineItemCount%22+value%3D1%7D%0A+++++++++++%7B/if%7D%0A+++++++++++%7Bassign+var%3D%22count%22+value%3D%24count%2B%24lineItemCount%7D%0A+++++++++%7B/if%7D%0A+++++++++%7B/foreach%7D%0A+++%7B%24count%7D%0A+++++++%3C/td%3E%0A+++++%3C/tr%3E%0A+++++%7B/if%7D%0A+++++++%7Bif+%21empty%28%24is_pay_later%29%7D%0A++++++++%3Ctr%3E%0A+++++++++%3Ctd+colspan%3D%222%22+%7B%24labelStyle%7D%3E%0A++++++++++%7Bif+isset%28%24pay_later_receipt%29%7D%7B%24pay_later_receipt%7D%7B/if%7D%0A+++++++++%3C/td%3E%0A++++++++%3C/tr%3E%0A+++++++%7B/if%7D%0A%0A+++++++%7Bif+%24register_date%7D%0A++++++++%3Ctr%3E%0A+++++++++%3Ctd+%7B%24labelStyle%7D%3E%0A++++++++++%7Bts%7DRegistration+Date%7B/ts%7D%0A+++++++++%3C/td%3E%0A+++++++++%3Ctd+%7B%24valueStyle%7D%3E%0A++++++++++%7B%24register_date%7CcrmDate%7D%0A+++++++++%3C/td%3E%0A++++++++%3C/tr%3E%0A+++++++%7B/if%7D%0A%0A+++++++%7Bif+%21empty%28%24receive_date%29%7D%0A++++++++%3Ctr%3E%0A+++++++++%3Ctd+%7B%24labelStyle%7D%3E%0A++++++++++%7Bts%7DTransaction+Date%7B/ts%7D%0A+++++++++%3C/td%3E%0A+++++++++%3Ctd+%7B%24valueStyle%7D%3E%0A++++++++++%7B%24receive_date%7CcrmDate%7D%0A+++++++++%3C/td%3E%0A++++++++%3C/tr%3E%0A+++++++%7B/if%7D%0A%0A+++++++%7Bif+%21empty%28%24financialTypeName%29%7D%0A++++++++%3Ctr%3E%0A+++++++++%3Ctd+%7B%24labelStyle%7D%3E%0A++++++++++%7Bts%7DFinancial+Type%7B/ts%7D%0A+++++++++%3C/td%3E%0A+++++++++%3Ctd+%7B%24valueStyle%7D%3E%0A++++++++++%7B%24financialTypeName%7D%0A+++++++++%3C/td%3E%0A++++++++%3C/tr%3E%0A+++++++%7B/if%7D%0A%0A+++++++%7Bif+%21empty%28%24trxn_id%29%7D%0A++++++++%3Ctr%3E%0A+++++++++%3Ctd+%7B%24labelStyle%7D%3E%0A++++++++++%7Bts%7DTransaction+%23%7B/ts%7D%0A+++++++++%3C/td%3E%0A+++++++++%3Ctd+%7B%24valueStyle%7D%3E%0A++++++++++%7B%24trxn_id%7D%0A+++++++++%3C/td%3E%0A++++++++%3C/tr%3E%0A+++++++%7B/if%7D%0A%0A+++++++%7Bif+%21empty%28%24paidBy%29%7D%0A++++++++%3Ctr%3E%0A+++++++++%3Ctd+%7B%24labelStyle%7D%3E%0A++++++++++%7Bts%7DPaid+By%7B/ts%7D%0A+++++++++%3C/td%3E%0A+++++++++%3Ctd+%7B%24valueStyle%7D%3E%0A+++++++++%7B%24paidBy%7D%0A+++++++++%3C/td%3E%0A++++++++%3C/tr%3E%0A+++++++%7B/if%7D%0A%0A+++++++%7Bif+%21empty%28%24checkNumber%29%7D%0A++++++++%3Ctr%3E%0A+++++++++%3Ctd+%7B%24labelStyle%7D%3E%0A++++++++++%7Bts%7DCheck+Number%7B/ts%7D%0A+++++++++%3C/td%3E%0A+++++++++%3Ctd+%7B%24valueStyle%7D%3E%0A++++++++++%7B%24checkNumber%7D%0A+++++++++%3C/td%3E%0A++++++++%3C/tr%3E%0A+++++++%7B/if%7D%0A%0A+++++++%7Bif+%21empty%28%24billingName%29%7D%0A++++++++%3Ctr%3E%0A+++++++++%3Cth+%7B%24headerStyle%7D%3E%0A++++++++++%7Bts%7DBilling+Name+and+Address%7B/ts%7D%0A+++++++++%3C/th%3E%0A++++++++%3C/tr%3E%0A++++++++%3Ctr%3E%0A+++++++++%3Ctd+colspan%3D%222%22+%7B%24valueStyle%7D%3E%0A++++++++++%7B%24billingName%7D%3Cbr+/%3E%0A++++++++++%7B%24address%7Cnl2br%7D%0A+++++++++%3C/td%3E%0A++++++++%3C/tr%3E%0A+++++++%7B/if%7D%0A%0A+++++++%7Bif+%21empty%28%24credit_card_type%29%7D%0A++++++++%3Ctr%3E%0A+++++++++%3Cth+%7B%24headerStyle%7D%3E%0A++++++++++%7Bts%7DCredit+Card+Information%7B/ts%7D%0A+++++++++%3C/th%3E%0A++++++++%3C/tr%3E%0A++++++++%3Ctr%3E%0A+++++++++%3Ctd+colspan%3D%222%22+%7B%24valueStyle%7D%3E%0A++++++++++%7B%24credit_card_type%7D%3Cbr+/%3E%0A++++++++++%7B%24credit_card_number%7D%3Cbr+/%3E%0A++++++++++%7Bts%7DExpires%7B/ts%7D:+%7B%24credit_card_exp_date%7Ctruncate:7:%27%27%7CcrmDate%7D%0A+++++++++%3C/td%3E%0A++++++++%3C/tr%3E%0A+++++++%7B/if%7D%0A%0A++++++%7B/if%7D%0A%0A+++++%7B/if%7D+%7B%2A+End+of+conditional+section+for+Paid+events+%2A%7D%0A%0A+++++%7Bif+%21empty%28%24customPre%29%7D%0A++++++%3Ctr%3E%0A+++++++%3Cth+%7B%24headerStyle%7D%3E%0A++++++++%7B%24customPre_grouptitle%7D%0A+++++++%3C/th%3E%0A++++++%3C/tr%3E%0A++++++%7Bforeach+from%3D%24customPre+item%3Dvalue+key%3DcustomName%7D%0A+++++++%7Bif+%28+%21empty%28%24trackingFields%29+and+%21+in_array%28+%24customName%2C+%24trackingFields+%29+%29+or+empty%28%24trackingFields%29%7D%0A++++++++%3Ctr%3E%0A+++++++++%3Ctd+%7B%24labelStyle%7D%3E%0A++++++++++%7B%24customName%7D%0A+++++++++%3C/td%3E%0A+++++++++%3Ctd+%7B%24valueStyle%7D%3E%0A++++++++++%7B%24value%7D%0A+++++++++%3C/td%3E%0A++++++++%3C/tr%3E%0A+++++++%7B/if%7D%0A++++++%7B/foreach%7D%0A+++++%7B/if%7D%0A%0A+++++%7Bif+%21empty%28%24customPost%29%7D%0A++++++%3Ctr%3E%0A+++++++%3Cth+%7B%24headerStyle%7D%3E%0A++++++++%7B%24customPost_grouptitle%7D%0A+++++++%3C/th%3E%0A++++++%3C/tr%3E%0A++++++%7Bforeach+from%3D%24customPost+item%3Dvalue+key%3DcustomName%7D%0A+++++++%7Bif+%28+%21empty%28%24trackingFields%29+and+%21+in_array%28+%24customName%2C+%24trackingFields+%29+%29+or+empty%28%24trackingFields%29%7D%0A++++++++%3Ctr%3E%0A+++++++++%3Ctd+%7B%24labelStyle%7D%3E%0A++++++++++%7B%24customName%7D%0A+++++++++%3C/td%3E%0A+++++++++%3Ctd+%7B%24valueStyle%7D%3E%0A++++++++++%7B%24value%7D%0A+++++++++%3C/td%3E%0A++++++++%3C/tr%3E%0A+++++++%7B/if%7D%0A++++++%7B/foreach%7D%0A+++++%7B/if%7D%0A%0A+++++%7Bif+%21empty%28%24customProfile%29%7D%0A++++++%7Bforeach+from%3D%24customProfile+item%3Dvalue+key%3DcustomName%7D%0A+++++++%3Ctr%3E%0A++++++++%3Cth+%7B%24headerStyle%7D%3E%0A+++++++++%7Bts+1%3D%24customName%2B1%7DParticipant+Information+-+Participant+%251%7B/ts%7D%0A++++++++%3C/th%3E%0A+++++++%3C/tr%3E%0A+++++++%7Bforeach+from%3D%24value+item%3Dval+key%3Dfield%7D%0A++++++++%7Bif+%24field+eq+%27additionalCustomPre%27+or+%24field+eq+%27additionalCustomPost%27%7D%0A+++++++++%3Ctr%3E%0A++++++++++%3Ctd+colspan%3D%222%22+%7B%24labelStyle%7D%3E%0A+++++++++++%7Bif+%24field+eq+%27additionalCustomPre%27%7D%0A++++++++++++%7B%24additionalCustomPre_grouptitle%7D%0A+++++++++++%7Belse%7D%0A++++++++++++%7B%24additionalCustomPost_grouptitle%7D%0A+++++++++++%7B/if%7D%0A++++++++++%3C/td%3E%0A+++++++++%3C/tr%3E%0A+++++++++%7Bforeach+from%3D%24val+item%3Dv+key%3Df%7D%0A++++++++++%3Ctr%3E%0A+++++++++++%3Ctd+%7B%24labelStyle%7D%3E%0A++++++++++++%7B%24f%7D%0A+++++++++++%3C/td%3E%0A+++++++++++%3Ctd+%7B%24valueStyle%7D%3E%0A++++++++++++%7B%24v%7D%0A+++++++++++%3C/td%3E%0A++++++++++%3C/tr%3E%0A+++++++++%7B/foreach%7D%0A++++++++%7B/if%7D%0A+++++++%7B/foreach%7D%0A++++++%7B/foreach%7D%0A+++++%7B/if%7D%0A%0A+++++%7Bif+%21empty%28%24customGroup%29%7D%0A++++++%7Bforeach+from%3D%24customGroup+item%3Dvalue+key%3DcustomName%7D%0A+++++++%3Ctr%3E%0A++++++++%3Cth+%7B%24headerStyle%7D%3E%0A+++++++++%7B%24customName%7D%0A++++++++%3C/th%3E%0A+++++++%3C/tr%3E%0A+++++++%7Bforeach+from%3D%24value+item%3Dv+key%3Dn%7D%0A++++++++%3Ctr%3E%0A+++++++++%3Ctd+%7B%24labelStyle%7D%3E%0A++++++++++%7B%24n%7D%0A+++++++++%3C/td%3E%0A+++++++++%3Ctd+%7B%24valueStyle%7D%3E%0A++++++++++%7B%24v%7D%0A+++++++++%3C/td%3E%0A++++++++%3C/tr%3E%0A+++++++%7B/foreach%7D%0A++++++%7B/foreach%7D%0A+++++%7B/if%7D%0A%0A++++%3C/table%3E%0A+++%3C/td%3E%0A++%3C/tr%3E%0A%0A+%3C/table%3E%0A%3C/center%3E%0A%0A%3C/body%3E%0A%3C/html%3E%0A */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'crmScope', 'string:<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
 <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
 <title></title>
</head>
<body>

{capture assign=headerStyle}colspan="2" style="text-align: left; padding: 4px; border-bottom: 1px solid #999; background-color: #eee;"{/capture}
{capture assign=labelStyle }style="padding: 4px; border-bottom: 1px solid #999; background-color: #f7f7f7;"{/capture}
{capture assign=valueStyle }style="padding: 4px; border-bottom: 1px solid #999;"{/capture}

<center>
  <table id="crm-event_receipt" style="font-family: Arial, Verdana, sans-serif; text-align: left; width:100%; max-width:700px; padding:0; margin:0; border:0px;">

  <!-- BEGIN HEADER -->
  <!-- You can add table row(s) here with logo or other header elements -->
  <!-- END HEADER -->

  <!-- BEGIN CONTENT -->

  <tr>
   <td>
    {assign var="greeting" value="Dear Jim"}{if $greeting}<p>{$greeting},</p>{/if}

    {if !empty($event.confirm_email_text) AND (empty($isOnWaitlist) AND empty($isRequireApproval))}
     <p>{$event.confirm_email_text|htmlize}</p>
    {/if}

    {if !empty($isOnWaitlist)}
     <p>{ts}You have been added to the WAIT LIST for this event.{/ts}</p>
     {if !empty($isPrimary)}
       <p>{ts}If space becomes available you will receive an email with a link to a web page where you can complete your registration.{/ts}</p>
     {/if}
    {elseif !empty($isRequireApproval)}
     <p>{ts}Your registration has been submitted.{/ts}</p>
     {if !empty($isPrimary)}
      <p>{ts}Once your registration has been reviewed, you will receive an email with a link to a web page where you can complete the registration process.{/ts}</p>
     {/if}
    {elseif !empty($is_pay_later)}
     <p>{if isset($pay_later_receipt)}{$pay_later_receipt}{/if}</p> {* FIXME: this might be text rather than HTML *}
    {/if}

   </td>
  </tr>
  <tr>
   <td>
    <table style="border: 1px solid #999; margin: 1em 0em 1em; border-collapse: collapse; width:100%;">
     <tr>
      <th {$headerStyle}>
       {ts}Event Information and Location{/ts}
      </th>
     </tr>
     <tr>
      <td colspan="2" {$valueStyle}>
       {$event.event_title}<br />
       {$event.event_start_date|crmDate}{if $event.event_end_date}-{if $event.event_end_date|date_format:"%Y%m%d" == $event.event_start_date|date_format:"%Y%m%d"}{$event.event_end_date|crmDate:0:1}{else}{$event.event_end_date|crmDate}{/if}{/if}
      </td>
     </tr>

     {if !empty($event.participant_role) and $event.participant_role neq \'Attendee\' and !empty($defaultRole)}
      <tr>
       <td {$labelStyle}>
        {ts}Participant Role{/ts}
       </td>
       <td {$valueStyle}>
        {$event.participant_role}
       </td>
      </tr>
     {/if}

     {if !empty($isShowLocation)}
      <tr>
       <td colspan="2" {$valueStyle}>
        {$location.address.1.display|nl2br}
       </td>
      </tr>
     {/if}

     {if !empty($location.phone.1.phone) || !empty($location.email.1.email)}
      <tr>
       <td colspan="2" {$labelStyle}>
        {ts}Event Contacts:{/ts}
       </td>
      </tr>
      {foreach from=$location.phone item=phone}
       {if $phone.phone}
        <tr>
         <td {$labelStyle}>
          {if $phone.phone_type}
           {$phone.phone_type_display}
          {else}
           {ts}Phone{/ts}
          {/if}
         </td>
         <td {$valueStyle}>
          {$phone.phone} {if $phone.phone_ext}&nbsp;{ts}ext.{/ts} {$phone.phone_ext}{/if}
         </td>
        </tr>
       {/if}
      {/foreach}
      {foreach from=$location.email item=eventEmail}
       {if $eventEmail.email}
        <tr>
         <td {$labelStyle}>
          {ts}Email{/ts}
         </td>
         <td {$valueStyle}>
          {$eventEmail.email}
         </td>
        </tr>
       {/if}
      {/foreach}
     {/if}

     {if !empty($event.is_public)}
      <tr>
       <td colspan="2" {$valueStyle}>
        {capture assign=icalFeed}{crmURL p=\'civicrm/event/ical\' q="reset=1&id=`$event.id`" h=0 a=1 fe=1}{/capture}
        <a href="{$icalFeed}">{ts}Download iCalendar File{/ts}</a>
       </td>
      </tr>
     {/if}

     {if $email}
      <tr>
       <th {$headerStyle}>
        {ts}Registered Email{/ts}
       </th>
      </tr>
      <tr>
       <td colspan="2" {$valueStyle}>
        {$email}
       </td>
      </tr>
     {/if}


     {if !empty($event.is_monetary)}

      <tr>
       <th {$headerStyle}>
        {if !empty($event.fee_label)}{$event.fee_label}{/if}
       </th>
      </tr>

      {if !empty($lineItem)}
       {foreach from=$lineItem item=value key=priceset}
        {if $value neq \'skip\'}
         {if !empty($isPrimary)}
          {if $lineItem|@count GT 1} {* Header for multi participant registration cases. *}
           <tr>
            <td colspan="2" {$labelStyle}>
             {ts 1=$priceset+1}Participant %1{/ts}
            </td>
           </tr>
          {/if}
         {/if}
         <tr>
          <td colspan="2" {$valueStyle}>
           <table> {* FIXME: style this table so that it looks like the text version (justification, etc.) *}
            <tr>
             <th>{ts}Item{/ts}</th>
             <th>{ts}Qty{/ts}</th>
             <th>{ts}Each{/ts}</th>
             {if !empty($dataArray)}
              <th>{ts}SubTotal{/ts}</th>
              <th>{ts}Tax Rate{/ts}</th>
              <th>{ts}Tax Amount{/ts}</th>
             {/if}
             <th>{ts}Total{/ts}</th>
       {if !empty($pricesetFieldsCount) }<th>{ts}Total Participants{/ts}</th>{/if}
            </tr>
            {foreach from=$value item=line}
             <tr>
              <td>
        {if $line.html_type eq \'Text\'}{$line.label}{else}{$line.field_title} - {$line.label}{/if} {if $line.description}<div>{$line.description|truncate:30:"..."}</div>{/if}
              </td>
              <td>
               {$line.qty}
              </td>
              <td>
               {$line.unit_price|crmMoney}
              </td>
              {if !empty($dataArray)}
               <td>
                {$line.unit_price*$line.qty|crmMoney}
               </td>
               {if isset($line.tax_rate) and ($line.tax_rate != "" || $line.tax_amount != "")}
                <td>
                 {$line.tax_rate|string_format:"%.2f"}%
                </td>
                <td>
                 {$line.tax_amount|crmMoney}
                </td>
               {else}
                <td></td>
                <td></td>
               {/if}
              {/if}
              <td>
               {$line.line_total+$line.tax_amount|crmMoney}
              </td>
        {if  !empty($pricesetFieldsCount) }
        <td>
    {$line.participant_count}
              </td>
        {/if}
             </tr>
            {/foreach}
           </table>
          </td>
         </tr>
        {/if}
       {/foreach}
       {if !empty($dataArray)}
        {if isset($totalAmount) and isset($totalTaxAmount)}
        <tr>
         <td {$labelStyle}>
          {ts}Amount Before Tax:{/ts}
         </td>
         <td {$valueStyle}>
          {$totalAmount-$totalTaxAmount|crmMoney}
         </td>
        </tr>
        {/if}
        {foreach from=$dataArray item=value key=priceset}
          <tr>
           {if $priceset || $priceset == 0}
            <td>&nbsp;{if isset($taxTerm)}{$taxTerm}{/if} {$priceset|string_format:"%.2f"}%</td>
            <td>&nbsp;{$value|crmMoney:$currency}</td>
           {else}
            <td>&nbsp;{ts}No{/ts} {if isset($taxTerm)}{$taxTerm}{/if}</td>
            <td>&nbsp;{$value|crmMoney:$currency}</td>
           {/if}
          </tr>
        {/foreach}
       {/if}
      {/if}

      {if !empty($amount) && !$lineItem}
       {foreach from=$amount item=amnt key=level}
        <tr>
         <td colspan="2" {$valueStyle}>
          {$amnt.amount|crmMoney} {$amnt.label}
         </td>
        </tr>
       {/foreach}
      {/if}
      {if isset($totalTaxAmount)}
       <tr>
        <td {$labelStyle}>
         {ts}Total Tax Amount{/ts}
        </td>
        <td {$valueStyle}>
         {$totalTaxAmount|crmMoney:$currency}
        </td>
       </tr>
      {/if}
      {if !empty($isPrimary)}
       <tr>
        <td {$labelStyle}>
        {if isset($balanceAmount)}
           {ts}Total Paid{/ts}
        {else}
           {ts}Total Amount{/ts}
         {/if}
        </td>
        <td {$valueStyle}>
         {if !empty($totalAmount)}{$totalAmount|crmMoney}{/if} {if !empty($hookDiscount.message)}({$hookDiscount.message}){/if}
        </td>
       </tr>
      {if isset($balanceAmount)}
       <tr>
        <td {$labelStyle}>
         {ts}Balance{/ts}
        </td>
        <td {$valueStyle}>
         {$balanceAmount|crmMoney}
        </td>
       </tr>
      {/if}
       {if !empty($pricesetFieldsCount) }
     <tr>
       <td {$labelStyle}>
   {ts}Total Participants{/ts}</td>
       <td {$valueStyle}>
   {assign var="count" value= 0}
         {foreach from=$lineItem item=pcount}
         {assign var="lineItemCount" value=0}
         {if $pcount neq \'skip\'}
           {foreach from=$pcount item=p_count}
           {assign var="lineItemCount" value=$lineItemCount+$p_count.participant_count}
           {/foreach}
           {if $lineItemCount < 1 }
           assign var="lineItemCount" value=1}
           {/if}
           {assign var="count" value=$count+$lineItemCount}
         {/if}
         {/foreach}
   {$count}
       </td>
     </tr>
     {/if}
       {if !empty($is_pay_later)}
        <tr>
         <td colspan="2" {$labelStyle}>
          {if isset($pay_later_receipt)}{$pay_later_receipt}{/if}
         </td>
        </tr>
       {/if}

       {if $register_date}
        <tr>
         <td {$labelStyle}>
          {ts}Registration Date{/ts}
         </td>
         <td {$valueStyle}>
          {$register_date|crmDate}
         </td>
        </tr>
       {/if}

       {if !empty($receive_date)}
        <tr>
         <td {$labelStyle}>
          {ts}Transaction Date{/ts}
         </td>
         <td {$valueStyle}>
          {$receive_date|crmDate}
         </td>
        </tr>
       {/if}

       {if !empty($financialTypeName)}
        <tr>
         <td {$labelStyle}>
          {ts}Financial Type{/ts}
         </td>
         <td {$valueStyle}>
          {$financialTypeName}
         </td>
        </tr>
       {/if}

       {if !empty($trxn_id)}
        <tr>
         <td {$labelStyle}>
          {ts}Transaction #{/ts}
         </td>
         <td {$valueStyle}>
          {$trxn_id}
         </td>
        </tr>
       {/if}

       {if !empty($paidBy)}
        <tr>
         <td {$labelStyle}>
          {ts}Paid By{/ts}
         </td>
         <td {$valueStyle}>
         {$paidBy}
         </td>
        </tr>
       {/if}

       {if !empty($checkNumber)}
        <tr>
         <td {$labelStyle}>
          {ts}Check Number{/ts}
         </td>
         <td {$valueStyle}>
          {$checkNumber}
         </td>
        </tr>
       {/if}

       {if !empty($billingName)}
        <tr>
         <th {$headerStyle}>
          {ts}Billing Name and Address{/ts}
         </th>
        </tr>
        <tr>
         <td colspan="2" {$valueStyle}>
          {$billingName}<br />
          {$address|nl2br}
         </td>
        </tr>
       {/if}

       {if !empty($credit_card_type)}
        <tr>
         <th {$headerStyle}>
          {ts}Credit Card Information{/ts}
         </th>
        </tr>
        <tr>
         <td colspan="2" {$valueStyle}>
          {$credit_card_type}<br />
          {$credit_card_number}<br />
          {ts}Expires{/ts}: {$credit_card_exp_date|truncate:7:\'\'|crmDate}
         </td>
        </tr>
       {/if}

      {/if}

     {/if} {* End of conditional section for Paid events *}

     {if !empty($customPre)}
      <tr>
       <th {$headerStyle}>
        {$customPre_grouptitle}
       </th>
      </tr>
      {foreach from=$customPre item=value key=customName}
       {if ( !empty($trackingFields) and ! in_array( $customName, $trackingFields ) ) or empty($trackingFields)}
        <tr>
         <td {$labelStyle}>
          {$customName}
         </td>
         <td {$valueStyle}>
          {$value}
         </td>
        </tr>
       {/if}
      {/foreach}
     {/if}

     {if !empty($customPost)}
      <tr>
       <th {$headerStyle}>
        {$customPost_grouptitle}
       </th>
      </tr>
      {foreach from=$customPost item=value key=customName}
       {if ( !empty($trackingFields) and ! in_array( $customName, $trackingFields ) ) or empty($trackingFields)}
        <tr>
         <td {$labelStyle}>
          {$customName}
         </td>
         <td {$valueStyle}>
          {$value}
         </td>
        </tr>
       {/if}
      {/foreach}
     {/if}

     {if !empty($customProfile)}
      {foreach from=$customProfile item=value key=customName}
       <tr>
        <th {$headerStyle}>
         {ts 1=$customName+1}Participant Information - Participant %1{/ts}
        </th>
       </tr>
       {foreach from=$value item=val key=field}
        {if $field eq \'additionalCustomPre\' or $field eq \'additionalCustomPost\'}
         <tr>
          <td colspan="2" {$labelStyle}>
           {if $field eq \'additionalCustomPre\'}
            {$additionalCustomPre_grouptitle}
           {else}
            {$additionalCustomPost_grouptitle}
           {/if}
          </td>
         </tr>
         {foreach from=$val item=v key=f}
          <tr>
           <td {$labelStyle}>
            {$f}
           </td>
           <td {$valueStyle}>
            {$v}
           </td>
          </tr>
         {/foreach}
        {/if}
       {/foreach}
      {/foreach}
     {/if}

     {if !empty($customGroup)}
      {foreach from=$customGroup item=value key=customName}
       <tr>
        <th {$headerStyle}>
         {$customName}
        </th>
       </tr>
       {foreach from=$value item=v key=n}
        <tr>
         <td {$labelStyle}>
          {$n}
         </td>
         <td {$valueStyle}>
          {$v}
         </td>
        </tr>
       {/foreach}
      {/foreach}
     {/if}

    </table>
   </td>
  </tr>

 </table>
</center>

</body>
</html>
', 1, false),array('block', 'ts', 'string:<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
 <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
 <title></title>
</head>
<body>

{capture assign=headerStyle}colspan="2" style="text-align: left; padding: 4px; border-bottom: 1px solid #999; background-color: #eee;"{/capture}
{capture assign=labelStyle }style="padding: 4px; border-bottom: 1px solid #999; background-color: #f7f7f7;"{/capture}
{capture assign=valueStyle }style="padding: 4px; border-bottom: 1px solid #999;"{/capture}

<center>
  <table id="crm-event_receipt" style="font-family: Arial, Verdana, sans-serif; text-align: left; width:100%; max-width:700px; padding:0; margin:0; border:0px;">

  <!-- BEGIN HEADER -->
  <!-- You can add table row(s) here with logo or other header elements -->
  <!-- END HEADER -->

  <!-- BEGIN CONTENT -->

  <tr>
   <td>
    {assign var="greeting" value="Dear Jim"}{if $greeting}<p>{$greeting},</p>{/if}

    {if !empty($event.confirm_email_text) AND (empty($isOnWaitlist) AND empty($isRequireApproval))}
     <p>{$event.confirm_email_text|htmlize}</p>
    {/if}

    {if !empty($isOnWaitlist)}
     <p>{ts}You have been added to the WAIT LIST for this event.{/ts}</p>
     {if !empty($isPrimary)}
       <p>{ts}If space becomes available you will receive an email with a link to a web page where you can complete your registration.{/ts}</p>
     {/if}
    {elseif !empty($isRequireApproval)}
     <p>{ts}Your registration has been submitted.{/ts}</p>
     {if !empty($isPrimary)}
      <p>{ts}Once your registration has been reviewed, you will receive an email with a link to a web page where you can complete the registration process.{/ts}</p>
     {/if}
    {elseif !empty($is_pay_later)}
     <p>{if isset($pay_later_receipt)}{$pay_later_receipt}{/if}</p> {* FIXME: this might be text rather than HTML *}
    {/if}

   </td>
  </tr>
  <tr>
   <td>
    <table style="border: 1px solid #999; margin: 1em 0em 1em; border-collapse: collapse; width:100%;">
     <tr>
      <th {$headerStyle}>
       {ts}Event Information and Location{/ts}
      </th>
     </tr>
     <tr>
      <td colspan="2" {$valueStyle}>
       {$event.event_title}<br />
       {$event.event_start_date|crmDate}{if $event.event_end_date}-{if $event.event_end_date|date_format:"%Y%m%d" == $event.event_start_date|date_format:"%Y%m%d"}{$event.event_end_date|crmDate:0:1}{else}{$event.event_end_date|crmDate}{/if}{/if}
      </td>
     </tr>

     {if !empty($event.participant_role) and $event.participant_role neq \'Attendee\' and !empty($defaultRole)}
      <tr>
       <td {$labelStyle}>
        {ts}Participant Role{/ts}
       </td>
       <td {$valueStyle}>
        {$event.participant_role}
       </td>
      </tr>
     {/if}

     {if !empty($isShowLocation)}
      <tr>
       <td colspan="2" {$valueStyle}>
        {$location.address.1.display|nl2br}
       </td>
      </tr>
     {/if}

     {if !empty($location.phone.1.phone) || !empty($location.email.1.email)}
      <tr>
       <td colspan="2" {$labelStyle}>
        {ts}Event Contacts:{/ts}
       </td>
      </tr>
      {foreach from=$location.phone item=phone}
       {if $phone.phone}
        <tr>
         <td {$labelStyle}>
          {if $phone.phone_type}
           {$phone.phone_type_display}
          {else}
           {ts}Phone{/ts}
          {/if}
         </td>
         <td {$valueStyle}>
          {$phone.phone} {if $phone.phone_ext}&nbsp;{ts}ext.{/ts} {$phone.phone_ext}{/if}
         </td>
        </tr>
       {/if}
      {/foreach}
      {foreach from=$location.email item=eventEmail}
       {if $eventEmail.email}
        <tr>
         <td {$labelStyle}>
          {ts}Email{/ts}
         </td>
         <td {$valueStyle}>
          {$eventEmail.email}
         </td>
        </tr>
       {/if}
      {/foreach}
     {/if}

     {if !empty($event.is_public)}
      <tr>
       <td colspan="2" {$valueStyle}>
        {capture assign=icalFeed}{crmURL p=\'civicrm/event/ical\' q="reset=1&id=`$event.id`" h=0 a=1 fe=1}{/capture}
        <a href="{$icalFeed}">{ts}Download iCalendar File{/ts}</a>
       </td>
      </tr>
     {/if}

     {if $email}
      <tr>
       <th {$headerStyle}>
        {ts}Registered Email{/ts}
       </th>
      </tr>
      <tr>
       <td colspan="2" {$valueStyle}>
        {$email}
       </td>
      </tr>
     {/if}


     {if !empty($event.is_monetary)}

      <tr>
       <th {$headerStyle}>
        {if !empty($event.fee_label)}{$event.fee_label}{/if}
       </th>
      </tr>

      {if !empty($lineItem)}
       {foreach from=$lineItem item=value key=priceset}
        {if $value neq \'skip\'}
         {if !empty($isPrimary)}
          {if $lineItem|@count GT 1} {* Header for multi participant registration cases. *}
           <tr>
            <td colspan="2" {$labelStyle}>
             {ts 1=$priceset+1}Participant %1{/ts}
            </td>
           </tr>
          {/if}
         {/if}
         <tr>
          <td colspan="2" {$valueStyle}>
           <table> {* FIXME: style this table so that it looks like the text version (justification, etc.) *}
            <tr>
             <th>{ts}Item{/ts}</th>
             <th>{ts}Qty{/ts}</th>
             <th>{ts}Each{/ts}</th>
             {if !empty($dataArray)}
              <th>{ts}SubTotal{/ts}</th>
              <th>{ts}Tax Rate{/ts}</th>
              <th>{ts}Tax Amount{/ts}</th>
             {/if}
             <th>{ts}Total{/ts}</th>
       {if !empty($pricesetFieldsCount) }<th>{ts}Total Participants{/ts}</th>{/if}
            </tr>
            {foreach from=$value item=line}
             <tr>
              <td>
        {if $line.html_type eq \'Text\'}{$line.label}{else}{$line.field_title} - {$line.label}{/if} {if $line.description}<div>{$line.description|truncate:30:"..."}</div>{/if}
              </td>
              <td>
               {$line.qty}
              </td>
              <td>
               {$line.unit_price|crmMoney}
              </td>
              {if !empty($dataArray)}
               <td>
                {$line.unit_price*$line.qty|crmMoney}
               </td>
               {if isset($line.tax_rate) and ($line.tax_rate != "" || $line.tax_amount != "")}
                <td>
                 {$line.tax_rate|string_format:"%.2f"}%
                </td>
                <td>
                 {$line.tax_amount|crmMoney}
                </td>
               {else}
                <td></td>
                <td></td>
               {/if}
              {/if}
              <td>
               {$line.line_total+$line.tax_amount|crmMoney}
              </td>
        {if  !empty($pricesetFieldsCount) }
        <td>
    {$line.participant_count}
              </td>
        {/if}
             </tr>
            {/foreach}
           </table>
          </td>
         </tr>
        {/if}
       {/foreach}
       {if !empty($dataArray)}
        {if isset($totalAmount) and isset($totalTaxAmount)}
        <tr>
         <td {$labelStyle}>
          {ts}Amount Before Tax:{/ts}
         </td>
         <td {$valueStyle}>
          {$totalAmount-$totalTaxAmount|crmMoney}
         </td>
        </tr>
        {/if}
        {foreach from=$dataArray item=value key=priceset}
          <tr>
           {if $priceset || $priceset == 0}
            <td>&nbsp;{if isset($taxTerm)}{$taxTerm}{/if} {$priceset|string_format:"%.2f"}%</td>
            <td>&nbsp;{$value|crmMoney:$currency}</td>
           {else}
            <td>&nbsp;{ts}No{/ts} {if isset($taxTerm)}{$taxTerm}{/if}</td>
            <td>&nbsp;{$value|crmMoney:$currency}</td>
           {/if}
          </tr>
        {/foreach}
       {/if}
      {/if}

      {if !empty($amount) && !$lineItem}
       {foreach from=$amount item=amnt key=level}
        <tr>
         <td colspan="2" {$valueStyle}>
          {$amnt.amount|crmMoney} {$amnt.label}
         </td>
        </tr>
       {/foreach}
      {/if}
      {if isset($totalTaxAmount)}
       <tr>
        <td {$labelStyle}>
         {ts}Total Tax Amount{/ts}
        </td>
        <td {$valueStyle}>
         {$totalTaxAmount|crmMoney:$currency}
        </td>
       </tr>
      {/if}
      {if !empty($isPrimary)}
       <tr>
        <td {$labelStyle}>
        {if isset($balanceAmount)}
           {ts}Total Paid{/ts}
        {else}
           {ts}Total Amount{/ts}
         {/if}
        </td>
        <td {$valueStyle}>
         {if !empty($totalAmount)}{$totalAmount|crmMoney}{/if} {if !empty($hookDiscount.message)}({$hookDiscount.message}){/if}
        </td>
       </tr>
      {if isset($balanceAmount)}
       <tr>
        <td {$labelStyle}>
         {ts}Balance{/ts}
        </td>
        <td {$valueStyle}>
         {$balanceAmount|crmMoney}
        </td>
       </tr>
      {/if}
       {if !empty($pricesetFieldsCount) }
     <tr>
       <td {$labelStyle}>
   {ts}Total Participants{/ts}</td>
       <td {$valueStyle}>
   {assign var="count" value= 0}
         {foreach from=$lineItem item=pcount}
         {assign var="lineItemCount" value=0}
         {if $pcount neq \'skip\'}
           {foreach from=$pcount item=p_count}
           {assign var="lineItemCount" value=$lineItemCount+$p_count.participant_count}
           {/foreach}
           {if $lineItemCount < 1 }
           assign var="lineItemCount" value=1}
           {/if}
           {assign var="count" value=$count+$lineItemCount}
         {/if}
         {/foreach}
   {$count}
       </td>
     </tr>
     {/if}
       {if !empty($is_pay_later)}
        <tr>
         <td colspan="2" {$labelStyle}>
          {if isset($pay_later_receipt)}{$pay_later_receipt}{/if}
         </td>
        </tr>
       {/if}

       {if $register_date}
        <tr>
         <td {$labelStyle}>
          {ts}Registration Date{/ts}
         </td>
         <td {$valueStyle}>
          {$register_date|crmDate}
         </td>
        </tr>
       {/if}

       {if !empty($receive_date)}
        <tr>
         <td {$labelStyle}>
          {ts}Transaction Date{/ts}
         </td>
         <td {$valueStyle}>
          {$receive_date|crmDate}
         </td>
        </tr>
       {/if}

       {if !empty($financialTypeName)}
        <tr>
         <td {$labelStyle}>
          {ts}Financial Type{/ts}
         </td>
         <td {$valueStyle}>
          {$financialTypeName}
         </td>
        </tr>
       {/if}

       {if !empty($trxn_id)}
        <tr>
         <td {$labelStyle}>
          {ts}Transaction #{/ts}
         </td>
         <td {$valueStyle}>
          {$trxn_id}
         </td>
        </tr>
       {/if}

       {if !empty($paidBy)}
        <tr>
         <td {$labelStyle}>
          {ts}Paid By{/ts}
         </td>
         <td {$valueStyle}>
         {$paidBy}
         </td>
        </tr>
       {/if}

       {if !empty($checkNumber)}
        <tr>
         <td {$labelStyle}>
          {ts}Check Number{/ts}
         </td>
         <td {$valueStyle}>
          {$checkNumber}
         </td>
        </tr>
       {/if}

       {if !empty($billingName)}
        <tr>
         <th {$headerStyle}>
          {ts}Billing Name and Address{/ts}
         </th>
        </tr>
        <tr>
         <td colspan="2" {$valueStyle}>
          {$billingName}<br />
          {$address|nl2br}
         </td>
        </tr>
       {/if}

       {if !empty($credit_card_type)}
        <tr>
         <th {$headerStyle}>
          {ts}Credit Card Information{/ts}
         </th>
        </tr>
        <tr>
         <td colspan="2" {$valueStyle}>
          {$credit_card_type}<br />
          {$credit_card_number}<br />
          {ts}Expires{/ts}: {$credit_card_exp_date|truncate:7:\'\'|crmDate}
         </td>
        </tr>
       {/if}

      {/if}

     {/if} {* End of conditional section for Paid events *}

     {if !empty($customPre)}
      <tr>
       <th {$headerStyle}>
        {$customPre_grouptitle}
       </th>
      </tr>
      {foreach from=$customPre item=value key=customName}
       {if ( !empty($trackingFields) and ! in_array( $customName, $trackingFields ) ) or empty($trackingFields)}
        <tr>
         <td {$labelStyle}>
          {$customName}
         </td>
         <td {$valueStyle}>
          {$value}
         </td>
        </tr>
       {/if}
      {/foreach}
     {/if}

     {if !empty($customPost)}
      <tr>
       <th {$headerStyle}>
        {$customPost_grouptitle}
       </th>
      </tr>
      {foreach from=$customPost item=value key=customName}
       {if ( !empty($trackingFields) and ! in_array( $customName, $trackingFields ) ) or empty($trackingFields)}
        <tr>
         <td {$labelStyle}>
          {$customName}
         </td>
         <td {$valueStyle}>
          {$value}
         </td>
        </tr>
       {/if}
      {/foreach}
     {/if}

     {if !empty($customProfile)}
      {foreach from=$customProfile item=value key=customName}
       <tr>
        <th {$headerStyle}>
         {ts 1=$customName+1}Participant Information - Participant %1{/ts}
        </th>
       </tr>
       {foreach from=$value item=val key=field}
        {if $field eq \'additionalCustomPre\' or $field eq \'additionalCustomPost\'}
         <tr>
          <td colspan="2" {$labelStyle}>
           {if $field eq \'additionalCustomPre\'}
            {$additionalCustomPre_grouptitle}
           {else}
            {$additionalCustomPost_grouptitle}
           {/if}
          </td>
         </tr>
         {foreach from=$val item=v key=f}
          <tr>
           <td {$labelStyle}>
            {$f}
           </td>
           <td {$valueStyle}>
            {$v}
           </td>
          </tr>
         {/foreach}
        {/if}
       {/foreach}
      {/foreach}
     {/if}

     {if !empty($customGroup)}
      {foreach from=$customGroup item=value key=customName}
       <tr>
        <th {$headerStyle}>
         {$customName}
        </th>
       </tr>
       {foreach from=$value item=v key=n}
        <tr>
         <td {$labelStyle}>
          {$n}
         </td>
         <td {$valueStyle}>
          {$v}
         </td>
        </tr>
       {/foreach}
      {/foreach}
     {/if}

    </table>
   </td>
  </tr>

 </table>
</center>

</body>
</html>
', 31, false),array('modifier', 'htmlize', 'string:<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
 <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
 <title></title>
</head>
<body>

{capture assign=headerStyle}colspan="2" style="text-align: left; padding: 4px; border-bottom: 1px solid #999; background-color: #eee;"{/capture}
{capture assign=labelStyle }style="padding: 4px; border-bottom: 1px solid #999; background-color: #f7f7f7;"{/capture}
{capture assign=valueStyle }style="padding: 4px; border-bottom: 1px solid #999;"{/capture}

<center>
  <table id="crm-event_receipt" style="font-family: Arial, Verdana, sans-serif; text-align: left; width:100%; max-width:700px; padding:0; margin:0; border:0px;">

  <!-- BEGIN HEADER -->
  <!-- You can add table row(s) here with logo or other header elements -->
  <!-- END HEADER -->

  <!-- BEGIN CONTENT -->

  <tr>
   <td>
    {assign var="greeting" value="Dear Jim"}{if $greeting}<p>{$greeting},</p>{/if}

    {if !empty($event.confirm_email_text) AND (empty($isOnWaitlist) AND empty($isRequireApproval))}
     <p>{$event.confirm_email_text|htmlize}</p>
    {/if}

    {if !empty($isOnWaitlist)}
     <p>{ts}You have been added to the WAIT LIST for this event.{/ts}</p>
     {if !empty($isPrimary)}
       <p>{ts}If space becomes available you will receive an email with a link to a web page where you can complete your registration.{/ts}</p>
     {/if}
    {elseif !empty($isRequireApproval)}
     <p>{ts}Your registration has been submitted.{/ts}</p>
     {if !empty($isPrimary)}
      <p>{ts}Once your registration has been reviewed, you will receive an email with a link to a web page where you can complete the registration process.{/ts}</p>
     {/if}
    {elseif !empty($is_pay_later)}
     <p>{if isset($pay_later_receipt)}{$pay_later_receipt}{/if}</p> {* FIXME: this might be text rather than HTML *}
    {/if}

   </td>
  </tr>
  <tr>
   <td>
    <table style="border: 1px solid #999; margin: 1em 0em 1em; border-collapse: collapse; width:100%;">
     <tr>
      <th {$headerStyle}>
       {ts}Event Information and Location{/ts}
      </th>
     </tr>
     <tr>
      <td colspan="2" {$valueStyle}>
       {$event.event_title}<br />
       {$event.event_start_date|crmDate}{if $event.event_end_date}-{if $event.event_end_date|date_format:"%Y%m%d" == $event.event_start_date|date_format:"%Y%m%d"}{$event.event_end_date|crmDate:0:1}{else}{$event.event_end_date|crmDate}{/if}{/if}
      </td>
     </tr>

     {if !empty($event.participant_role) and $event.participant_role neq \'Attendee\' and !empty($defaultRole)}
      <tr>
       <td {$labelStyle}>
        {ts}Participant Role{/ts}
       </td>
       <td {$valueStyle}>
        {$event.participant_role}
       </td>
      </tr>
     {/if}

     {if !empty($isShowLocation)}
      <tr>
       <td colspan="2" {$valueStyle}>
        {$location.address.1.display|nl2br}
       </td>
      </tr>
     {/if}

     {if !empty($location.phone.1.phone) || !empty($location.email.1.email)}
      <tr>
       <td colspan="2" {$labelStyle}>
        {ts}Event Contacts:{/ts}
       </td>
      </tr>
      {foreach from=$location.phone item=phone}
       {if $phone.phone}
        <tr>
         <td {$labelStyle}>
          {if $phone.phone_type}
           {$phone.phone_type_display}
          {else}
           {ts}Phone{/ts}
          {/if}
         </td>
         <td {$valueStyle}>
          {$phone.phone} {if $phone.phone_ext}&nbsp;{ts}ext.{/ts} {$phone.phone_ext}{/if}
         </td>
        </tr>
       {/if}
      {/foreach}
      {foreach from=$location.email item=eventEmail}
       {if $eventEmail.email}
        <tr>
         <td {$labelStyle}>
          {ts}Email{/ts}
         </td>
         <td {$valueStyle}>
          {$eventEmail.email}
         </td>
        </tr>
       {/if}
      {/foreach}
     {/if}

     {if !empty($event.is_public)}
      <tr>
       <td colspan="2" {$valueStyle}>
        {capture assign=icalFeed}{crmURL p=\'civicrm/event/ical\' q="reset=1&id=`$event.id`" h=0 a=1 fe=1}{/capture}
        <a href="{$icalFeed}">{ts}Download iCalendar File{/ts}</a>
       </td>
      </tr>
     {/if}

     {if $email}
      <tr>
       <th {$headerStyle}>
        {ts}Registered Email{/ts}
       </th>
      </tr>
      <tr>
       <td colspan="2" {$valueStyle}>
        {$email}
       </td>
      </tr>
     {/if}


     {if !empty($event.is_monetary)}

      <tr>
       <th {$headerStyle}>
        {if !empty($event.fee_label)}{$event.fee_label}{/if}
       </th>
      </tr>

      {if !empty($lineItem)}
       {foreach from=$lineItem item=value key=priceset}
        {if $value neq \'skip\'}
         {if !empty($isPrimary)}
          {if $lineItem|@count GT 1} {* Header for multi participant registration cases. *}
           <tr>
            <td colspan="2" {$labelStyle}>
             {ts 1=$priceset+1}Participant %1{/ts}
            </td>
           </tr>
          {/if}
         {/if}
         <tr>
          <td colspan="2" {$valueStyle}>
           <table> {* FIXME: style this table so that it looks like the text version (justification, etc.) *}
            <tr>
             <th>{ts}Item{/ts}</th>
             <th>{ts}Qty{/ts}</th>
             <th>{ts}Each{/ts}</th>
             {if !empty($dataArray)}
              <th>{ts}SubTotal{/ts}</th>
              <th>{ts}Tax Rate{/ts}</th>
              <th>{ts}Tax Amount{/ts}</th>
             {/if}
             <th>{ts}Total{/ts}</th>
       {if !empty($pricesetFieldsCount) }<th>{ts}Total Participants{/ts}</th>{/if}
            </tr>
            {foreach from=$value item=line}
             <tr>
              <td>
        {if $line.html_type eq \'Text\'}{$line.label}{else}{$line.field_title} - {$line.label}{/if} {if $line.description}<div>{$line.description|truncate:30:"..."}</div>{/if}
              </td>
              <td>
               {$line.qty}
              </td>
              <td>
               {$line.unit_price|crmMoney}
              </td>
              {if !empty($dataArray)}
               <td>
                {$line.unit_price*$line.qty|crmMoney}
               </td>
               {if isset($line.tax_rate) and ($line.tax_rate != "" || $line.tax_amount != "")}
                <td>
                 {$line.tax_rate|string_format:"%.2f"}%
                </td>
                <td>
                 {$line.tax_amount|crmMoney}
                </td>
               {else}
                <td></td>
                <td></td>
               {/if}
              {/if}
              <td>
               {$line.line_total+$line.tax_amount|crmMoney}
              </td>
        {if  !empty($pricesetFieldsCount) }
        <td>
    {$line.participant_count}
              </td>
        {/if}
             </tr>
            {/foreach}
           </table>
          </td>
         </tr>
        {/if}
       {/foreach}
       {if !empty($dataArray)}
        {if isset($totalAmount) and isset($totalTaxAmount)}
        <tr>
         <td {$labelStyle}>
          {ts}Amount Before Tax:{/ts}
         </td>
         <td {$valueStyle}>
          {$totalAmount-$totalTaxAmount|crmMoney}
         </td>
        </tr>
        {/if}
        {foreach from=$dataArray item=value key=priceset}
          <tr>
           {if $priceset || $priceset == 0}
            <td>&nbsp;{if isset($taxTerm)}{$taxTerm}{/if} {$priceset|string_format:"%.2f"}%</td>
            <td>&nbsp;{$value|crmMoney:$currency}</td>
           {else}
            <td>&nbsp;{ts}No{/ts} {if isset($taxTerm)}{$taxTerm}{/if}</td>
            <td>&nbsp;{$value|crmMoney:$currency}</td>
           {/if}
          </tr>
        {/foreach}
       {/if}
      {/if}

      {if !empty($amount) && !$lineItem}
       {foreach from=$amount item=amnt key=level}
        <tr>
         <td colspan="2" {$valueStyle}>
          {$amnt.amount|crmMoney} {$amnt.label}
         </td>
        </tr>
       {/foreach}
      {/if}
      {if isset($totalTaxAmount)}
       <tr>
        <td {$labelStyle}>
         {ts}Total Tax Amount{/ts}
        </td>
        <td {$valueStyle}>
         {$totalTaxAmount|crmMoney:$currency}
        </td>
       </tr>
      {/if}
      {if !empty($isPrimary)}
       <tr>
        <td {$labelStyle}>
        {if isset($balanceAmount)}
           {ts}Total Paid{/ts}
        {else}
           {ts}Total Amount{/ts}
         {/if}
        </td>
        <td {$valueStyle}>
         {if !empty($totalAmount)}{$totalAmount|crmMoney}{/if} {if !empty($hookDiscount.message)}({$hookDiscount.message}){/if}
        </td>
       </tr>
      {if isset($balanceAmount)}
       <tr>
        <td {$labelStyle}>
         {ts}Balance{/ts}
        </td>
        <td {$valueStyle}>
         {$balanceAmount|crmMoney}
        </td>
       </tr>
      {/if}
       {if !empty($pricesetFieldsCount) }
     <tr>
       <td {$labelStyle}>
   {ts}Total Participants{/ts}</td>
       <td {$valueStyle}>
   {assign var="count" value= 0}
         {foreach from=$lineItem item=pcount}
         {assign var="lineItemCount" value=0}
         {if $pcount neq \'skip\'}
           {foreach from=$pcount item=p_count}
           {assign var="lineItemCount" value=$lineItemCount+$p_count.participant_count}
           {/foreach}
           {if $lineItemCount < 1 }
           assign var="lineItemCount" value=1}
           {/if}
           {assign var="count" value=$count+$lineItemCount}
         {/if}
         {/foreach}
   {$count}
       </td>
     </tr>
     {/if}
       {if !empty($is_pay_later)}
        <tr>
         <td colspan="2" {$labelStyle}>
          {if isset($pay_later_receipt)}{$pay_later_receipt}{/if}
         </td>
        </tr>
       {/if}

       {if $register_date}
        <tr>
         <td {$labelStyle}>
          {ts}Registration Date{/ts}
         </td>
         <td {$valueStyle}>
          {$register_date|crmDate}
         </td>
        </tr>
       {/if}

       {if !empty($receive_date)}
        <tr>
         <td {$labelStyle}>
          {ts}Transaction Date{/ts}
         </td>
         <td {$valueStyle}>
          {$receive_date|crmDate}
         </td>
        </tr>
       {/if}

       {if !empty($financialTypeName)}
        <tr>
         <td {$labelStyle}>
          {ts}Financial Type{/ts}
         </td>
         <td {$valueStyle}>
          {$financialTypeName}
         </td>
        </tr>
       {/if}

       {if !empty($trxn_id)}
        <tr>
         <td {$labelStyle}>
          {ts}Transaction #{/ts}
         </td>
         <td {$valueStyle}>
          {$trxn_id}
         </td>
        </tr>
       {/if}

       {if !empty($paidBy)}
        <tr>
         <td {$labelStyle}>
          {ts}Paid By{/ts}
         </td>
         <td {$valueStyle}>
         {$paidBy}
         </td>
        </tr>
       {/if}

       {if !empty($checkNumber)}
        <tr>
         <td {$labelStyle}>
          {ts}Check Number{/ts}
         </td>
         <td {$valueStyle}>
          {$checkNumber}
         </td>
        </tr>
       {/if}

       {if !empty($billingName)}
        <tr>
         <th {$headerStyle}>
          {ts}Billing Name and Address{/ts}
         </th>
        </tr>
        <tr>
         <td colspan="2" {$valueStyle}>
          {$billingName}<br />
          {$address|nl2br}
         </td>
        </tr>
       {/if}

       {if !empty($credit_card_type)}
        <tr>
         <th {$headerStyle}>
          {ts}Credit Card Information{/ts}
         </th>
        </tr>
        <tr>
         <td colspan="2" {$valueStyle}>
          {$credit_card_type}<br />
          {$credit_card_number}<br />
          {ts}Expires{/ts}: {$credit_card_exp_date|truncate:7:\'\'|crmDate}
         </td>
        </tr>
       {/if}

      {/if}

     {/if} {* End of conditional section for Paid events *}

     {if !empty($customPre)}
      <tr>
       <th {$headerStyle}>
        {$customPre_grouptitle}
       </th>
      </tr>
      {foreach from=$customPre item=value key=customName}
       {if ( !empty($trackingFields) and ! in_array( $customName, $trackingFields ) ) or empty($trackingFields)}
        <tr>
         <td {$labelStyle}>
          {$customName}
         </td>
         <td {$valueStyle}>
          {$value}
         </td>
        </tr>
       {/if}
      {/foreach}
     {/if}

     {if !empty($customPost)}
      <tr>
       <th {$headerStyle}>
        {$customPost_grouptitle}
       </th>
      </tr>
      {foreach from=$customPost item=value key=customName}
       {if ( !empty($trackingFields) and ! in_array( $customName, $trackingFields ) ) or empty($trackingFields)}
        <tr>
         <td {$labelStyle}>
          {$customName}
         </td>
         <td {$valueStyle}>
          {$value}
         </td>
        </tr>
       {/if}
      {/foreach}
     {/if}

     {if !empty($customProfile)}
      {foreach from=$customProfile item=value key=customName}
       <tr>
        <th {$headerStyle}>
         {ts 1=$customName+1}Participant Information - Participant %1{/ts}
        </th>
       </tr>
       {foreach from=$value item=val key=field}
        {if $field eq \'additionalCustomPre\' or $field eq \'additionalCustomPost\'}
         <tr>
          <td colspan="2" {$labelStyle}>
           {if $field eq \'additionalCustomPre\'}
            {$additionalCustomPre_grouptitle}
           {else}
            {$additionalCustomPost_grouptitle}
           {/if}
          </td>
         </tr>
         {foreach from=$val item=v key=f}
          <tr>
           <td {$labelStyle}>
            {$f}
           </td>
           <td {$valueStyle}>
            {$v}
           </td>
          </tr>
         {/foreach}
        {/if}
       {/foreach}
      {/foreach}
     {/if}

     {if !empty($customGroup)}
      {foreach from=$customGroup item=value key=customName}
       <tr>
        <th {$headerStyle}>
         {$customName}
        </th>
       </tr>
       {foreach from=$value item=v key=n}
        <tr>
         <td {$labelStyle}>
          {$n}
         </td>
         <td {$valueStyle}>
          {$v}
         </td>
        </tr>
       {/foreach}
      {/foreach}
     {/if}

    </table>
   </td>
  </tr>

 </table>
</center>

</body>
</html>
', 27, false),array('modifier', 'crmDate', 'string:<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
 <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
 <title></title>
</head>
<body>

{capture assign=headerStyle}colspan="2" style="text-align: left; padding: 4px; border-bottom: 1px solid #999; background-color: #eee;"{/capture}
{capture assign=labelStyle }style="padding: 4px; border-bottom: 1px solid #999; background-color: #f7f7f7;"{/capture}
{capture assign=valueStyle }style="padding: 4px; border-bottom: 1px solid #999;"{/capture}

<center>
  <table id="crm-event_receipt" style="font-family: Arial, Verdana, sans-serif; text-align: left; width:100%; max-width:700px; padding:0; margin:0; border:0px;">

  <!-- BEGIN HEADER -->
  <!-- You can add table row(s) here with logo or other header elements -->
  <!-- END HEADER -->

  <!-- BEGIN CONTENT -->

  <tr>
   <td>
    {assign var="greeting" value="Dear Jim"}{if $greeting}<p>{$greeting},</p>{/if}

    {if !empty($event.confirm_email_text) AND (empty($isOnWaitlist) AND empty($isRequireApproval))}
     <p>{$event.confirm_email_text|htmlize}</p>
    {/if}

    {if !empty($isOnWaitlist)}
     <p>{ts}You have been added to the WAIT LIST for this event.{/ts}</p>
     {if !empty($isPrimary)}
       <p>{ts}If space becomes available you will receive an email with a link to a web page where you can complete your registration.{/ts}</p>
     {/if}
    {elseif !empty($isRequireApproval)}
     <p>{ts}Your registration has been submitted.{/ts}</p>
     {if !empty($isPrimary)}
      <p>{ts}Once your registration has been reviewed, you will receive an email with a link to a web page where you can complete the registration process.{/ts}</p>
     {/if}
    {elseif !empty($is_pay_later)}
     <p>{if isset($pay_later_receipt)}{$pay_later_receipt}{/if}</p> {* FIXME: this might be text rather than HTML *}
    {/if}

   </td>
  </tr>
  <tr>
   <td>
    <table style="border: 1px solid #999; margin: 1em 0em 1em; border-collapse: collapse; width:100%;">
     <tr>
      <th {$headerStyle}>
       {ts}Event Information and Location{/ts}
      </th>
     </tr>
     <tr>
      <td colspan="2" {$valueStyle}>
       {$event.event_title}<br />
       {$event.event_start_date|crmDate}{if $event.event_end_date}-{if $event.event_end_date|date_format:"%Y%m%d" == $event.event_start_date|date_format:"%Y%m%d"}{$event.event_end_date|crmDate:0:1}{else}{$event.event_end_date|crmDate}{/if}{/if}
      </td>
     </tr>

     {if !empty($event.participant_role) and $event.participant_role neq \'Attendee\' and !empty($defaultRole)}
      <tr>
       <td {$labelStyle}>
        {ts}Participant Role{/ts}
       </td>
       <td {$valueStyle}>
        {$event.participant_role}
       </td>
      </tr>
     {/if}

     {if !empty($isShowLocation)}
      <tr>
       <td colspan="2" {$valueStyle}>
        {$location.address.1.display|nl2br}
       </td>
      </tr>
     {/if}

     {if !empty($location.phone.1.phone) || !empty($location.email.1.email)}
      <tr>
       <td colspan="2" {$labelStyle}>
        {ts}Event Contacts:{/ts}
       </td>
      </tr>
      {foreach from=$location.phone item=phone}
       {if $phone.phone}
        <tr>
         <td {$labelStyle}>
          {if $phone.phone_type}
           {$phone.phone_type_display}
          {else}
           {ts}Phone{/ts}
          {/if}
         </td>
         <td {$valueStyle}>
          {$phone.phone} {if $phone.phone_ext}&nbsp;{ts}ext.{/ts} {$phone.phone_ext}{/if}
         </td>
        </tr>
       {/if}
      {/foreach}
      {foreach from=$location.email item=eventEmail}
       {if $eventEmail.email}
        <tr>
         <td {$labelStyle}>
          {ts}Email{/ts}
         </td>
         <td {$valueStyle}>
          {$eventEmail.email}
         </td>
        </tr>
       {/if}
      {/foreach}
     {/if}

     {if !empty($event.is_public)}
      <tr>
       <td colspan="2" {$valueStyle}>
        {capture assign=icalFeed}{crmURL p=\'civicrm/event/ical\' q="reset=1&id=`$event.id`" h=0 a=1 fe=1}{/capture}
        <a href="{$icalFeed}">{ts}Download iCalendar File{/ts}</a>
       </td>
      </tr>
     {/if}

     {if $email}
      <tr>
       <th {$headerStyle}>
        {ts}Registered Email{/ts}
       </th>
      </tr>
      <tr>
       <td colspan="2" {$valueStyle}>
        {$email}
       </td>
      </tr>
     {/if}


     {if !empty($event.is_monetary)}

      <tr>
       <th {$headerStyle}>
        {if !empty($event.fee_label)}{$event.fee_label}{/if}
       </th>
      </tr>

      {if !empty($lineItem)}
       {foreach from=$lineItem item=value key=priceset}
        {if $value neq \'skip\'}
         {if !empty($isPrimary)}
          {if $lineItem|@count GT 1} {* Header for multi participant registration cases. *}
           <tr>
            <td colspan="2" {$labelStyle}>
             {ts 1=$priceset+1}Participant %1{/ts}
            </td>
           </tr>
          {/if}
         {/if}
         <tr>
          <td colspan="2" {$valueStyle}>
           <table> {* FIXME: style this table so that it looks like the text version (justification, etc.) *}
            <tr>
             <th>{ts}Item{/ts}</th>
             <th>{ts}Qty{/ts}</th>
             <th>{ts}Each{/ts}</th>
             {if !empty($dataArray)}
              <th>{ts}SubTotal{/ts}</th>
              <th>{ts}Tax Rate{/ts}</th>
              <th>{ts}Tax Amount{/ts}</th>
             {/if}
             <th>{ts}Total{/ts}</th>
       {if !empty($pricesetFieldsCount) }<th>{ts}Total Participants{/ts}</th>{/if}
            </tr>
            {foreach from=$value item=line}
             <tr>
              <td>
        {if $line.html_type eq \'Text\'}{$line.label}{else}{$line.field_title} - {$line.label}{/if} {if $line.description}<div>{$line.description|truncate:30:"..."}</div>{/if}
              </td>
              <td>
               {$line.qty}
              </td>
              <td>
               {$line.unit_price|crmMoney}
              </td>
              {if !empty($dataArray)}
               <td>
                {$line.unit_price*$line.qty|crmMoney}
               </td>
               {if isset($line.tax_rate) and ($line.tax_rate != "" || $line.tax_amount != "")}
                <td>
                 {$line.tax_rate|string_format:"%.2f"}%
                </td>
                <td>
                 {$line.tax_amount|crmMoney}
                </td>
               {else}
                <td></td>
                <td></td>
               {/if}
              {/if}
              <td>
               {$line.line_total+$line.tax_amount|crmMoney}
              </td>
        {if  !empty($pricesetFieldsCount) }
        <td>
    {$line.participant_count}
              </td>
        {/if}
             </tr>
            {/foreach}
           </table>
          </td>
         </tr>
        {/if}
       {/foreach}
       {if !empty($dataArray)}
        {if isset($totalAmount) and isset($totalTaxAmount)}
        <tr>
         <td {$labelStyle}>
          {ts}Amount Before Tax:{/ts}
         </td>
         <td {$valueStyle}>
          {$totalAmount-$totalTaxAmount|crmMoney}
         </td>
        </tr>
        {/if}
        {foreach from=$dataArray item=value key=priceset}
          <tr>
           {if $priceset || $priceset == 0}
            <td>&nbsp;{if isset($taxTerm)}{$taxTerm}{/if} {$priceset|string_format:"%.2f"}%</td>
            <td>&nbsp;{$value|crmMoney:$currency}</td>
           {else}
            <td>&nbsp;{ts}No{/ts} {if isset($taxTerm)}{$taxTerm}{/if}</td>
            <td>&nbsp;{$value|crmMoney:$currency}</td>
           {/if}
          </tr>
        {/foreach}
       {/if}
      {/if}

      {if !empty($amount) && !$lineItem}
       {foreach from=$amount item=amnt key=level}
        <tr>
         <td colspan="2" {$valueStyle}>
          {$amnt.amount|crmMoney} {$amnt.label}
         </td>
        </tr>
       {/foreach}
      {/if}
      {if isset($totalTaxAmount)}
       <tr>
        <td {$labelStyle}>
         {ts}Total Tax Amount{/ts}
        </td>
        <td {$valueStyle}>
         {$totalTaxAmount|crmMoney:$currency}
        </td>
       </tr>
      {/if}
      {if !empty($isPrimary)}
       <tr>
        <td {$labelStyle}>
        {if isset($balanceAmount)}
           {ts}Total Paid{/ts}
        {else}
           {ts}Total Amount{/ts}
         {/if}
        </td>
        <td {$valueStyle}>
         {if !empty($totalAmount)}{$totalAmount|crmMoney}{/if} {if !empty($hookDiscount.message)}({$hookDiscount.message}){/if}
        </td>
       </tr>
      {if isset($balanceAmount)}
       <tr>
        <td {$labelStyle}>
         {ts}Balance{/ts}
        </td>
        <td {$valueStyle}>
         {$balanceAmount|crmMoney}
        </td>
       </tr>
      {/if}
       {if !empty($pricesetFieldsCount) }
     <tr>
       <td {$labelStyle}>
   {ts}Total Participants{/ts}</td>
       <td {$valueStyle}>
   {assign var="count" value= 0}
         {foreach from=$lineItem item=pcount}
         {assign var="lineItemCount" value=0}
         {if $pcount neq \'skip\'}
           {foreach from=$pcount item=p_count}
           {assign var="lineItemCount" value=$lineItemCount+$p_count.participant_count}
           {/foreach}
           {if $lineItemCount < 1 }
           assign var="lineItemCount" value=1}
           {/if}
           {assign var="count" value=$count+$lineItemCount}
         {/if}
         {/foreach}
   {$count}
       </td>
     </tr>
     {/if}
       {if !empty($is_pay_later)}
        <tr>
         <td colspan="2" {$labelStyle}>
          {if isset($pay_later_receipt)}{$pay_later_receipt}{/if}
         </td>
        </tr>
       {/if}

       {if $register_date}
        <tr>
         <td {$labelStyle}>
          {ts}Registration Date{/ts}
         </td>
         <td {$valueStyle}>
          {$register_date|crmDate}
         </td>
        </tr>
       {/if}

       {if !empty($receive_date)}
        <tr>
         <td {$labelStyle}>
          {ts}Transaction Date{/ts}
         </td>
         <td {$valueStyle}>
          {$receive_date|crmDate}
         </td>
        </tr>
       {/if}

       {if !empty($financialTypeName)}
        <tr>
         <td {$labelStyle}>
          {ts}Financial Type{/ts}
         </td>
         <td {$valueStyle}>
          {$financialTypeName}
         </td>
        </tr>
       {/if}

       {if !empty($trxn_id)}
        <tr>
         <td {$labelStyle}>
          {ts}Transaction #{/ts}
         </td>
         <td {$valueStyle}>
          {$trxn_id}
         </td>
        </tr>
       {/if}

       {if !empty($paidBy)}
        <tr>
         <td {$labelStyle}>
          {ts}Paid By{/ts}
         </td>
         <td {$valueStyle}>
         {$paidBy}
         </td>
        </tr>
       {/if}

       {if !empty($checkNumber)}
        <tr>
         <td {$labelStyle}>
          {ts}Check Number{/ts}
         </td>
         <td {$valueStyle}>
          {$checkNumber}
         </td>
        </tr>
       {/if}

       {if !empty($billingName)}
        <tr>
         <th {$headerStyle}>
          {ts}Billing Name and Address{/ts}
         </th>
        </tr>
        <tr>
         <td colspan="2" {$valueStyle}>
          {$billingName}<br />
          {$address|nl2br}
         </td>
        </tr>
       {/if}

       {if !empty($credit_card_type)}
        <tr>
         <th {$headerStyle}>
          {ts}Credit Card Information{/ts}
         </th>
        </tr>
        <tr>
         <td colspan="2" {$valueStyle}>
          {$credit_card_type}<br />
          {$credit_card_number}<br />
          {ts}Expires{/ts}: {$credit_card_exp_date|truncate:7:\'\'|crmDate}
         </td>
        </tr>
       {/if}

      {/if}

     {/if} {* End of conditional section for Paid events *}

     {if !empty($customPre)}
      <tr>
       <th {$headerStyle}>
        {$customPre_grouptitle}
       </th>
      </tr>
      {foreach from=$customPre item=value key=customName}
       {if ( !empty($trackingFields) and ! in_array( $customName, $trackingFields ) ) or empty($trackingFields)}
        <tr>
         <td {$labelStyle}>
          {$customName}
         </td>
         <td {$valueStyle}>
          {$value}
         </td>
        </tr>
       {/if}
      {/foreach}
     {/if}

     {if !empty($customPost)}
      <tr>
       <th {$headerStyle}>
        {$customPost_grouptitle}
       </th>
      </tr>
      {foreach from=$customPost item=value key=customName}
       {if ( !empty($trackingFields) and ! in_array( $customName, $trackingFields ) ) or empty($trackingFields)}
        <tr>
         <td {$labelStyle}>
          {$customName}
         </td>
         <td {$valueStyle}>
          {$value}
         </td>
        </tr>
       {/if}
      {/foreach}
     {/if}

     {if !empty($customProfile)}
      {foreach from=$customProfile item=value key=customName}
       <tr>
        <th {$headerStyle}>
         {ts 1=$customName+1}Participant Information - Participant %1{/ts}
        </th>
       </tr>
       {foreach from=$value item=val key=field}
        {if $field eq \'additionalCustomPre\' or $field eq \'additionalCustomPost\'}
         <tr>
          <td colspan="2" {$labelStyle}>
           {if $field eq \'additionalCustomPre\'}
            {$additionalCustomPre_grouptitle}
           {else}
            {$additionalCustomPost_grouptitle}
           {/if}
          </td>
         </tr>
         {foreach from=$val item=v key=f}
          <tr>
           <td {$labelStyle}>
            {$f}
           </td>
           <td {$valueStyle}>
            {$v}
           </td>
          </tr>
         {/foreach}
        {/if}
       {/foreach}
      {/foreach}
     {/if}

     {if !empty($customGroup)}
      {foreach from=$customGroup item=value key=customName}
       <tr>
        <th {$headerStyle}>
         {$customName}
        </th>
       </tr>
       {foreach from=$value item=v key=n}
        <tr>
         <td {$labelStyle}>
          {$n}
         </td>
         <td {$valueStyle}>
          {$v}
         </td>
        </tr>
       {/foreach}
      {/foreach}
     {/if}

    </table>
   </td>
  </tr>

 </table>
</center>

</body>
</html>
', 57, false),array('modifier', 'date_format', 'string:<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
 <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
 <title></title>
</head>
<body>

{capture assign=headerStyle}colspan="2" style="text-align: left; padding: 4px; border-bottom: 1px solid #999; background-color: #eee;"{/capture}
{capture assign=labelStyle }style="padding: 4px; border-bottom: 1px solid #999; background-color: #f7f7f7;"{/capture}
{capture assign=valueStyle }style="padding: 4px; border-bottom: 1px solid #999;"{/capture}

<center>
  <table id="crm-event_receipt" style="font-family: Arial, Verdana, sans-serif; text-align: left; width:100%; max-width:700px; padding:0; margin:0; border:0px;">

  <!-- BEGIN HEADER -->
  <!-- You can add table row(s) here with logo or other header elements -->
  <!-- END HEADER -->

  <!-- BEGIN CONTENT -->

  <tr>
   <td>
    {assign var="greeting" value="Dear Jim"}{if $greeting}<p>{$greeting},</p>{/if}

    {if !empty($event.confirm_email_text) AND (empty($isOnWaitlist) AND empty($isRequireApproval))}
     <p>{$event.confirm_email_text|htmlize}</p>
    {/if}

    {if !empty($isOnWaitlist)}
     <p>{ts}You have been added to the WAIT LIST for this event.{/ts}</p>
     {if !empty($isPrimary)}
       <p>{ts}If space becomes available you will receive an email with a link to a web page where you can complete your registration.{/ts}</p>
     {/if}
    {elseif !empty($isRequireApproval)}
     <p>{ts}Your registration has been submitted.{/ts}</p>
     {if !empty($isPrimary)}
      <p>{ts}Once your registration has been reviewed, you will receive an email with a link to a web page where you can complete the registration process.{/ts}</p>
     {/if}
    {elseif !empty($is_pay_later)}
     <p>{if isset($pay_later_receipt)}{$pay_later_receipt}{/if}</p> {* FIXME: this might be text rather than HTML *}
    {/if}

   </td>
  </tr>
  <tr>
   <td>
    <table style="border: 1px solid #999; margin: 1em 0em 1em; border-collapse: collapse; width:100%;">
     <tr>
      <th {$headerStyle}>
       {ts}Event Information and Location{/ts}
      </th>
     </tr>
     <tr>
      <td colspan="2" {$valueStyle}>
       {$event.event_title}<br />
       {$event.event_start_date|crmDate}{if $event.event_end_date}-{if $event.event_end_date|date_format:"%Y%m%d" == $event.event_start_date|date_format:"%Y%m%d"}{$event.event_end_date|crmDate:0:1}{else}{$event.event_end_date|crmDate}{/if}{/if}
      </td>
     </tr>

     {if !empty($event.participant_role) and $event.participant_role neq \'Attendee\' and !empty($defaultRole)}
      <tr>
       <td {$labelStyle}>
        {ts}Participant Role{/ts}
       </td>
       <td {$valueStyle}>
        {$event.participant_role}
       </td>
      </tr>
     {/if}

     {if !empty($isShowLocation)}
      <tr>
       <td colspan="2" {$valueStyle}>
        {$location.address.1.display|nl2br}
       </td>
      </tr>
     {/if}

     {if !empty($location.phone.1.phone) || !empty($location.email.1.email)}
      <tr>
       <td colspan="2" {$labelStyle}>
        {ts}Event Contacts:{/ts}
       </td>
      </tr>
      {foreach from=$location.phone item=phone}
       {if $phone.phone}
        <tr>
         <td {$labelStyle}>
          {if $phone.phone_type}
           {$phone.phone_type_display}
          {else}
           {ts}Phone{/ts}
          {/if}
         </td>
         <td {$valueStyle}>
          {$phone.phone} {if $phone.phone_ext}&nbsp;{ts}ext.{/ts} {$phone.phone_ext}{/if}
         </td>
        </tr>
       {/if}
      {/foreach}
      {foreach from=$location.email item=eventEmail}
       {if $eventEmail.email}
        <tr>
         <td {$labelStyle}>
          {ts}Email{/ts}
         </td>
         <td {$valueStyle}>
          {$eventEmail.email}
         </td>
        </tr>
       {/if}
      {/foreach}
     {/if}

     {if !empty($event.is_public)}
      <tr>
       <td colspan="2" {$valueStyle}>
        {capture assign=icalFeed}{crmURL p=\'civicrm/event/ical\' q="reset=1&id=`$event.id`" h=0 a=1 fe=1}{/capture}
        <a href="{$icalFeed}">{ts}Download iCalendar File{/ts}</a>
       </td>
      </tr>
     {/if}

     {if $email}
      <tr>
       <th {$headerStyle}>
        {ts}Registered Email{/ts}
       </th>
      </tr>
      <tr>
       <td colspan="2" {$valueStyle}>
        {$email}
       </td>
      </tr>
     {/if}


     {if !empty($event.is_monetary)}

      <tr>
       <th {$headerStyle}>
        {if !empty($event.fee_label)}{$event.fee_label}{/if}
       </th>
      </tr>

      {if !empty($lineItem)}
       {foreach from=$lineItem item=value key=priceset}
        {if $value neq \'skip\'}
         {if !empty($isPrimary)}
          {if $lineItem|@count GT 1} {* Header for multi participant registration cases. *}
           <tr>
            <td colspan="2" {$labelStyle}>
             {ts 1=$priceset+1}Participant %1{/ts}
            </td>
           </tr>
          {/if}
         {/if}
         <tr>
          <td colspan="2" {$valueStyle}>
           <table> {* FIXME: style this table so that it looks like the text version (justification, etc.) *}
            <tr>
             <th>{ts}Item{/ts}</th>
             <th>{ts}Qty{/ts}</th>
             <th>{ts}Each{/ts}</th>
             {if !empty($dataArray)}
              <th>{ts}SubTotal{/ts}</th>
              <th>{ts}Tax Rate{/ts}</th>
              <th>{ts}Tax Amount{/ts}</th>
             {/if}
             <th>{ts}Total{/ts}</th>
       {if !empty($pricesetFieldsCount) }<th>{ts}Total Participants{/ts}</th>{/if}
            </tr>
            {foreach from=$value item=line}
             <tr>
              <td>
        {if $line.html_type eq \'Text\'}{$line.label}{else}{$line.field_title} - {$line.label}{/if} {if $line.description}<div>{$line.description|truncate:30:"..."}</div>{/if}
              </td>
              <td>
               {$line.qty}
              </td>
              <td>
               {$line.unit_price|crmMoney}
              </td>
              {if !empty($dataArray)}
               <td>
                {$line.unit_price*$line.qty|crmMoney}
               </td>
               {if isset($line.tax_rate) and ($line.tax_rate != "" || $line.tax_amount != "")}
                <td>
                 {$line.tax_rate|string_format:"%.2f"}%
                </td>
                <td>
                 {$line.tax_amount|crmMoney}
                </td>
               {else}
                <td></td>
                <td></td>
               {/if}
              {/if}
              <td>
               {$line.line_total+$line.tax_amount|crmMoney}
              </td>
        {if  !empty($pricesetFieldsCount) }
        <td>
    {$line.participant_count}
              </td>
        {/if}
             </tr>
            {/foreach}
           </table>
          </td>
         </tr>
        {/if}
       {/foreach}
       {if !empty($dataArray)}
        {if isset($totalAmount) and isset($totalTaxAmount)}
        <tr>
         <td {$labelStyle}>
          {ts}Amount Before Tax:{/ts}
         </td>
         <td {$valueStyle}>
          {$totalAmount-$totalTaxAmount|crmMoney}
         </td>
        </tr>
        {/if}
        {foreach from=$dataArray item=value key=priceset}
          <tr>
           {if $priceset || $priceset == 0}
            <td>&nbsp;{if isset($taxTerm)}{$taxTerm}{/if} {$priceset|string_format:"%.2f"}%</td>
            <td>&nbsp;{$value|crmMoney:$currency}</td>
           {else}
            <td>&nbsp;{ts}No{/ts} {if isset($taxTerm)}{$taxTerm}{/if}</td>
            <td>&nbsp;{$value|crmMoney:$currency}</td>
           {/if}
          </tr>
        {/foreach}
       {/if}
      {/if}

      {if !empty($amount) && !$lineItem}
       {foreach from=$amount item=amnt key=level}
        <tr>
         <td colspan="2" {$valueStyle}>
          {$amnt.amount|crmMoney} {$amnt.label}
         </td>
        </tr>
       {/foreach}
      {/if}
      {if isset($totalTaxAmount)}
       <tr>
        <td {$labelStyle}>
         {ts}Total Tax Amount{/ts}
        </td>
        <td {$valueStyle}>
         {$totalTaxAmount|crmMoney:$currency}
        </td>
       </tr>
      {/if}
      {if !empty($isPrimary)}
       <tr>
        <td {$labelStyle}>
        {if isset($balanceAmount)}
           {ts}Total Paid{/ts}
        {else}
           {ts}Total Amount{/ts}
         {/if}
        </td>
        <td {$valueStyle}>
         {if !empty($totalAmount)}{$totalAmount|crmMoney}{/if} {if !empty($hookDiscount.message)}({$hookDiscount.message}){/if}
        </td>
       </tr>
      {if isset($balanceAmount)}
       <tr>
        <td {$labelStyle}>
         {ts}Balance{/ts}
        </td>
        <td {$valueStyle}>
         {$balanceAmount|crmMoney}
        </td>
       </tr>
      {/if}
       {if !empty($pricesetFieldsCount) }
     <tr>
       <td {$labelStyle}>
   {ts}Total Participants{/ts}</td>
       <td {$valueStyle}>
   {assign var="count" value= 0}
         {foreach from=$lineItem item=pcount}
         {assign var="lineItemCount" value=0}
         {if $pcount neq \'skip\'}
           {foreach from=$pcount item=p_count}
           {assign var="lineItemCount" value=$lineItemCount+$p_count.participant_count}
           {/foreach}
           {if $lineItemCount < 1 }
           assign var="lineItemCount" value=1}
           {/if}
           {assign var="count" value=$count+$lineItemCount}
         {/if}
         {/foreach}
   {$count}
       </td>
     </tr>
     {/if}
       {if !empty($is_pay_later)}
        <tr>
         <td colspan="2" {$labelStyle}>
          {if isset($pay_later_receipt)}{$pay_later_receipt}{/if}
         </td>
        </tr>
       {/if}

       {if $register_date}
        <tr>
         <td {$labelStyle}>
          {ts}Registration Date{/ts}
         </td>
         <td {$valueStyle}>
          {$register_date|crmDate}
         </td>
        </tr>
       {/if}

       {if !empty($receive_date)}
        <tr>
         <td {$labelStyle}>
          {ts}Transaction Date{/ts}
         </td>
         <td {$valueStyle}>
          {$receive_date|crmDate}
         </td>
        </tr>
       {/if}

       {if !empty($financialTypeName)}
        <tr>
         <td {$labelStyle}>
          {ts}Financial Type{/ts}
         </td>
         <td {$valueStyle}>
          {$financialTypeName}
         </td>
        </tr>
       {/if}

       {if !empty($trxn_id)}
        <tr>
         <td {$labelStyle}>
          {ts}Transaction #{/ts}
         </td>
         <td {$valueStyle}>
          {$trxn_id}
         </td>
        </tr>
       {/if}

       {if !empty($paidBy)}
        <tr>
         <td {$labelStyle}>
          {ts}Paid By{/ts}
         </td>
         <td {$valueStyle}>
         {$paidBy}
         </td>
        </tr>
       {/if}

       {if !empty($checkNumber)}
        <tr>
         <td {$labelStyle}>
          {ts}Check Number{/ts}
         </td>
         <td {$valueStyle}>
          {$checkNumber}
         </td>
        </tr>
       {/if}

       {if !empty($billingName)}
        <tr>
         <th {$headerStyle}>
          {ts}Billing Name and Address{/ts}
         </th>
        </tr>
        <tr>
         <td colspan="2" {$valueStyle}>
          {$billingName}<br />
          {$address|nl2br}
         </td>
        </tr>
       {/if}

       {if !empty($credit_card_type)}
        <tr>
         <th {$headerStyle}>
          {ts}Credit Card Information{/ts}
         </th>
        </tr>
        <tr>
         <td colspan="2" {$valueStyle}>
          {$credit_card_type}<br />
          {$credit_card_number}<br />
          {ts}Expires{/ts}: {$credit_card_exp_date|truncate:7:\'\'|crmDate}
         </td>
        </tr>
       {/if}

      {/if}

     {/if} {* End of conditional section for Paid events *}

     {if !empty($customPre)}
      <tr>
       <th {$headerStyle}>
        {$customPre_grouptitle}
       </th>
      </tr>
      {foreach from=$customPre item=value key=customName}
       {if ( !empty($trackingFields) and ! in_array( $customName, $trackingFields ) ) or empty($trackingFields)}
        <tr>
         <td {$labelStyle}>
          {$customName}
         </td>
         <td {$valueStyle}>
          {$value}
         </td>
        </tr>
       {/if}
      {/foreach}
     {/if}

     {if !empty($customPost)}
      <tr>
       <th {$headerStyle}>
        {$customPost_grouptitle}
       </th>
      </tr>
      {foreach from=$customPost item=value key=customName}
       {if ( !empty($trackingFields) and ! in_array( $customName, $trackingFields ) ) or empty($trackingFields)}
        <tr>
         <td {$labelStyle}>
          {$customName}
         </td>
         <td {$valueStyle}>
          {$value}
         </td>
        </tr>
       {/if}
      {/foreach}
     {/if}

     {if !empty($customProfile)}
      {foreach from=$customProfile item=value key=customName}
       <tr>
        <th {$headerStyle}>
         {ts 1=$customName+1}Participant Information - Participant %1{/ts}
        </th>
       </tr>
       {foreach from=$value item=val key=field}
        {if $field eq \'additionalCustomPre\' or $field eq \'additionalCustomPost\'}
         <tr>
          <td colspan="2" {$labelStyle}>
           {if $field eq \'additionalCustomPre\'}
            {$additionalCustomPre_grouptitle}
           {else}
            {$additionalCustomPost_grouptitle}
           {/if}
          </td>
         </tr>
         {foreach from=$val item=v key=f}
          <tr>
           <td {$labelStyle}>
            {$f}
           </td>
           <td {$valueStyle}>
            {$v}
           </td>
          </tr>
         {/foreach}
        {/if}
       {/foreach}
      {/foreach}
     {/if}

     {if !empty($customGroup)}
      {foreach from=$customGroup item=value key=customName}
       <tr>
        <th {$headerStyle}>
         {$customName}
        </th>
       </tr>
       {foreach from=$value item=v key=n}
        <tr>
         <td {$labelStyle}>
          {$n}
         </td>
         <td {$valueStyle}>
          {$v}
         </td>
        </tr>
       {/foreach}
      {/foreach}
     {/if}

    </table>
   </td>
  </tr>

 </table>
</center>

</body>
</html>
', 57, false),array('modifier', 'nl2br', 'string:<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
 <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
 <title></title>
</head>
<body>

{capture assign=headerStyle}colspan="2" style="text-align: left; padding: 4px; border-bottom: 1px solid #999; background-color: #eee;"{/capture}
{capture assign=labelStyle }style="padding: 4px; border-bottom: 1px solid #999; background-color: #f7f7f7;"{/capture}
{capture assign=valueStyle }style="padding: 4px; border-bottom: 1px solid #999;"{/capture}

<center>
  <table id="crm-event_receipt" style="font-family: Arial, Verdana, sans-serif; text-align: left; width:100%; max-width:700px; padding:0; margin:0; border:0px;">

  <!-- BEGIN HEADER -->
  <!-- You can add table row(s) here with logo or other header elements -->
  <!-- END HEADER -->

  <!-- BEGIN CONTENT -->

  <tr>
   <td>
    {assign var="greeting" value="Dear Jim"}{if $greeting}<p>{$greeting},</p>{/if}

    {if !empty($event.confirm_email_text) AND (empty($isOnWaitlist) AND empty($isRequireApproval))}
     <p>{$event.confirm_email_text|htmlize}</p>
    {/if}

    {if !empty($isOnWaitlist)}
     <p>{ts}You have been added to the WAIT LIST for this event.{/ts}</p>
     {if !empty($isPrimary)}
       <p>{ts}If space becomes available you will receive an email with a link to a web page where you can complete your registration.{/ts}</p>
     {/if}
    {elseif !empty($isRequireApproval)}
     <p>{ts}Your registration has been submitted.{/ts}</p>
     {if !empty($isPrimary)}
      <p>{ts}Once your registration has been reviewed, you will receive an email with a link to a web page where you can complete the registration process.{/ts}</p>
     {/if}
    {elseif !empty($is_pay_later)}
     <p>{if isset($pay_later_receipt)}{$pay_later_receipt}{/if}</p> {* FIXME: this might be text rather than HTML *}
    {/if}

   </td>
  </tr>
  <tr>
   <td>
    <table style="border: 1px solid #999; margin: 1em 0em 1em; border-collapse: collapse; width:100%;">
     <tr>
      <th {$headerStyle}>
       {ts}Event Information and Location{/ts}
      </th>
     </tr>
     <tr>
      <td colspan="2" {$valueStyle}>
       {$event.event_title}<br />
       {$event.event_start_date|crmDate}{if $event.event_end_date}-{if $event.event_end_date|date_format:"%Y%m%d" == $event.event_start_date|date_format:"%Y%m%d"}{$event.event_end_date|crmDate:0:1}{else}{$event.event_end_date|crmDate}{/if}{/if}
      </td>
     </tr>

     {if !empty($event.participant_role) and $event.participant_role neq \'Attendee\' and !empty($defaultRole)}
      <tr>
       <td {$labelStyle}>
        {ts}Participant Role{/ts}
       </td>
       <td {$valueStyle}>
        {$event.participant_role}
       </td>
      </tr>
     {/if}

     {if !empty($isShowLocation)}
      <tr>
       <td colspan="2" {$valueStyle}>
        {$location.address.1.display|nl2br}
       </td>
      </tr>
     {/if}

     {if !empty($location.phone.1.phone) || !empty($location.email.1.email)}
      <tr>
       <td colspan="2" {$labelStyle}>
        {ts}Event Contacts:{/ts}
       </td>
      </tr>
      {foreach from=$location.phone item=phone}
       {if $phone.phone}
        <tr>
         <td {$labelStyle}>
          {if $phone.phone_type}
           {$phone.phone_type_display}
          {else}
           {ts}Phone{/ts}
          {/if}
         </td>
         <td {$valueStyle}>
          {$phone.phone} {if $phone.phone_ext}&nbsp;{ts}ext.{/ts} {$phone.phone_ext}{/if}
         </td>
        </tr>
       {/if}
      {/foreach}
      {foreach from=$location.email item=eventEmail}
       {if $eventEmail.email}
        <tr>
         <td {$labelStyle}>
          {ts}Email{/ts}
         </td>
         <td {$valueStyle}>
          {$eventEmail.email}
         </td>
        </tr>
       {/if}
      {/foreach}
     {/if}

     {if !empty($event.is_public)}
      <tr>
       <td colspan="2" {$valueStyle}>
        {capture assign=icalFeed}{crmURL p=\'civicrm/event/ical\' q="reset=1&id=`$event.id`" h=0 a=1 fe=1}{/capture}
        <a href="{$icalFeed}">{ts}Download iCalendar File{/ts}</a>
       </td>
      </tr>
     {/if}

     {if $email}
      <tr>
       <th {$headerStyle}>
        {ts}Registered Email{/ts}
       </th>
      </tr>
      <tr>
       <td colspan="2" {$valueStyle}>
        {$email}
       </td>
      </tr>
     {/if}


     {if !empty($event.is_monetary)}

      <tr>
       <th {$headerStyle}>
        {if !empty($event.fee_label)}{$event.fee_label}{/if}
       </th>
      </tr>

      {if !empty($lineItem)}
       {foreach from=$lineItem item=value key=priceset}
        {if $value neq \'skip\'}
         {if !empty($isPrimary)}
          {if $lineItem|@count GT 1} {* Header for multi participant registration cases. *}
           <tr>
            <td colspan="2" {$labelStyle}>
             {ts 1=$priceset+1}Participant %1{/ts}
            </td>
           </tr>
          {/if}
         {/if}
         <tr>
          <td colspan="2" {$valueStyle}>
           <table> {* FIXME: style this table so that it looks like the text version (justification, etc.) *}
            <tr>
             <th>{ts}Item{/ts}</th>
             <th>{ts}Qty{/ts}</th>
             <th>{ts}Each{/ts}</th>
             {if !empty($dataArray)}
              <th>{ts}SubTotal{/ts}</th>
              <th>{ts}Tax Rate{/ts}</th>
              <th>{ts}Tax Amount{/ts}</th>
             {/if}
             <th>{ts}Total{/ts}</th>
       {if !empty($pricesetFieldsCount) }<th>{ts}Total Participants{/ts}</th>{/if}
            </tr>
            {foreach from=$value item=line}
             <tr>
              <td>
        {if $line.html_type eq \'Text\'}{$line.label}{else}{$line.field_title} - {$line.label}{/if} {if $line.description}<div>{$line.description|truncate:30:"..."}</div>{/if}
              </td>
              <td>
               {$line.qty}
              </td>
              <td>
               {$line.unit_price|crmMoney}
              </td>
              {if !empty($dataArray)}
               <td>
                {$line.unit_price*$line.qty|crmMoney}
               </td>
               {if isset($line.tax_rate) and ($line.tax_rate != "" || $line.tax_amount != "")}
                <td>
                 {$line.tax_rate|string_format:"%.2f"}%
                </td>
                <td>
                 {$line.tax_amount|crmMoney}
                </td>
               {else}
                <td></td>
                <td></td>
               {/if}
              {/if}
              <td>
               {$line.line_total+$line.tax_amount|crmMoney}
              </td>
        {if  !empty($pricesetFieldsCount) }
        <td>
    {$line.participant_count}
              </td>
        {/if}
             </tr>
            {/foreach}
           </table>
          </td>
         </tr>
        {/if}
       {/foreach}
       {if !empty($dataArray)}
        {if isset($totalAmount) and isset($totalTaxAmount)}
        <tr>
         <td {$labelStyle}>
          {ts}Amount Before Tax:{/ts}
         </td>
         <td {$valueStyle}>
          {$totalAmount-$totalTaxAmount|crmMoney}
         </td>
        </tr>
        {/if}
        {foreach from=$dataArray item=value key=priceset}
          <tr>
           {if $priceset || $priceset == 0}
            <td>&nbsp;{if isset($taxTerm)}{$taxTerm}{/if} {$priceset|string_format:"%.2f"}%</td>
            <td>&nbsp;{$value|crmMoney:$currency}</td>
           {else}
            <td>&nbsp;{ts}No{/ts} {if isset($taxTerm)}{$taxTerm}{/if}</td>
            <td>&nbsp;{$value|crmMoney:$currency}</td>
           {/if}
          </tr>
        {/foreach}
       {/if}
      {/if}

      {if !empty($amount) && !$lineItem}
       {foreach from=$amount item=amnt key=level}
        <tr>
         <td colspan="2" {$valueStyle}>
          {$amnt.amount|crmMoney} {$amnt.label}
         </td>
        </tr>
       {/foreach}
      {/if}
      {if isset($totalTaxAmount)}
       <tr>
        <td {$labelStyle}>
         {ts}Total Tax Amount{/ts}
        </td>
        <td {$valueStyle}>
         {$totalTaxAmount|crmMoney:$currency}
        </td>
       </tr>
      {/if}
      {if !empty($isPrimary)}
       <tr>
        <td {$labelStyle}>
        {if isset($balanceAmount)}
           {ts}Total Paid{/ts}
        {else}
           {ts}Total Amount{/ts}
         {/if}
        </td>
        <td {$valueStyle}>
         {if !empty($totalAmount)}{$totalAmount|crmMoney}{/if} {if !empty($hookDiscount.message)}({$hookDiscount.message}){/if}
        </td>
       </tr>
      {if isset($balanceAmount)}
       <tr>
        <td {$labelStyle}>
         {ts}Balance{/ts}
        </td>
        <td {$valueStyle}>
         {$balanceAmount|crmMoney}
        </td>
       </tr>
      {/if}
       {if !empty($pricesetFieldsCount) }
     <tr>
       <td {$labelStyle}>
   {ts}Total Participants{/ts}</td>
       <td {$valueStyle}>
   {assign var="count" value= 0}
         {foreach from=$lineItem item=pcount}
         {assign var="lineItemCount" value=0}
         {if $pcount neq \'skip\'}
           {foreach from=$pcount item=p_count}
           {assign var="lineItemCount" value=$lineItemCount+$p_count.participant_count}
           {/foreach}
           {if $lineItemCount < 1 }
           assign var="lineItemCount" value=1}
           {/if}
           {assign var="count" value=$count+$lineItemCount}
         {/if}
         {/foreach}
   {$count}
       </td>
     </tr>
     {/if}
       {if !empty($is_pay_later)}
        <tr>
         <td colspan="2" {$labelStyle}>
          {if isset($pay_later_receipt)}{$pay_later_receipt}{/if}
         </td>
        </tr>
       {/if}

       {if $register_date}
        <tr>
         <td {$labelStyle}>
          {ts}Registration Date{/ts}
         </td>
         <td {$valueStyle}>
          {$register_date|crmDate}
         </td>
        </tr>
       {/if}

       {if !empty($receive_date)}
        <tr>
         <td {$labelStyle}>
          {ts}Transaction Date{/ts}
         </td>
         <td {$valueStyle}>
          {$receive_date|crmDate}
         </td>
        </tr>
       {/if}

       {if !empty($financialTypeName)}
        <tr>
         <td {$labelStyle}>
          {ts}Financial Type{/ts}
         </td>
         <td {$valueStyle}>
          {$financialTypeName}
         </td>
        </tr>
       {/if}

       {if !empty($trxn_id)}
        <tr>
         <td {$labelStyle}>
          {ts}Transaction #{/ts}
         </td>
         <td {$valueStyle}>
          {$trxn_id}
         </td>
        </tr>
       {/if}

       {if !empty($paidBy)}
        <tr>
         <td {$labelStyle}>
          {ts}Paid By{/ts}
         </td>
         <td {$valueStyle}>
         {$paidBy}
         </td>
        </tr>
       {/if}

       {if !empty($checkNumber)}
        <tr>
         <td {$labelStyle}>
          {ts}Check Number{/ts}
         </td>
         <td {$valueStyle}>
          {$checkNumber}
         </td>
        </tr>
       {/if}

       {if !empty($billingName)}
        <tr>
         <th {$headerStyle}>
          {ts}Billing Name and Address{/ts}
         </th>
        </tr>
        <tr>
         <td colspan="2" {$valueStyle}>
          {$billingName}<br />
          {$address|nl2br}
         </td>
        </tr>
       {/if}

       {if !empty($credit_card_type)}
        <tr>
         <th {$headerStyle}>
          {ts}Credit Card Information{/ts}
         </th>
        </tr>
        <tr>
         <td colspan="2" {$valueStyle}>
          {$credit_card_type}<br />
          {$credit_card_number}<br />
          {ts}Expires{/ts}: {$credit_card_exp_date|truncate:7:\'\'|crmDate}
         </td>
        </tr>
       {/if}

      {/if}

     {/if} {* End of conditional section for Paid events *}

     {if !empty($customPre)}
      <tr>
       <th {$headerStyle}>
        {$customPre_grouptitle}
       </th>
      </tr>
      {foreach from=$customPre item=value key=customName}
       {if ( !empty($trackingFields) and ! in_array( $customName, $trackingFields ) ) or empty($trackingFields)}
        <tr>
         <td {$labelStyle}>
          {$customName}
         </td>
         <td {$valueStyle}>
          {$value}
         </td>
        </tr>
       {/if}
      {/foreach}
     {/if}

     {if !empty($customPost)}
      <tr>
       <th {$headerStyle}>
        {$customPost_grouptitle}
       </th>
      </tr>
      {foreach from=$customPost item=value key=customName}
       {if ( !empty($trackingFields) and ! in_array( $customName, $trackingFields ) ) or empty($trackingFields)}
        <tr>
         <td {$labelStyle}>
          {$customName}
         </td>
         <td {$valueStyle}>
          {$value}
         </td>
        </tr>
       {/if}
      {/foreach}
     {/if}

     {if !empty($customProfile)}
      {foreach from=$customProfile item=value key=customName}
       <tr>
        <th {$headerStyle}>
         {ts 1=$customName+1}Participant Information - Participant %1{/ts}
        </th>
       </tr>
       {foreach from=$value item=val key=field}
        {if $field eq \'additionalCustomPre\' or $field eq \'additionalCustomPost\'}
         <tr>
          <td colspan="2" {$labelStyle}>
           {if $field eq \'additionalCustomPre\'}
            {$additionalCustomPre_grouptitle}
           {else}
            {$additionalCustomPost_grouptitle}
           {/if}
          </td>
         </tr>
         {foreach from=$val item=v key=f}
          <tr>
           <td {$labelStyle}>
            {$f}
           </td>
           <td {$valueStyle}>
            {$v}
           </td>
          </tr>
         {/foreach}
        {/if}
       {/foreach}
      {/foreach}
     {/if}

     {if !empty($customGroup)}
      {foreach from=$customGroup item=value key=customName}
       <tr>
        <th {$headerStyle}>
         {$customName}
        </th>
       </tr>
       {foreach from=$value item=v key=n}
        <tr>
         <td {$labelStyle}>
          {$n}
         </td>
         <td {$valueStyle}>
          {$v}
         </td>
        </tr>
       {/foreach}
      {/foreach}
     {/if}

    </table>
   </td>
  </tr>

 </table>
</center>

</body>
</html>
', 75, false),array('modifier', 'count', 'string:<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
 <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
 <title></title>
</head>
<body>

{capture assign=headerStyle}colspan="2" style="text-align: left; padding: 4px; border-bottom: 1px solid #999; background-color: #eee;"{/capture}
{capture assign=labelStyle }style="padding: 4px; border-bottom: 1px solid #999; background-color: #f7f7f7;"{/capture}
{capture assign=valueStyle }style="padding: 4px; border-bottom: 1px solid #999;"{/capture}

<center>
  <table id="crm-event_receipt" style="font-family: Arial, Verdana, sans-serif; text-align: left; width:100%; max-width:700px; padding:0; margin:0; border:0px;">

  <!-- BEGIN HEADER -->
  <!-- You can add table row(s) here with logo or other header elements -->
  <!-- END HEADER -->

  <!-- BEGIN CONTENT -->

  <tr>
   <td>
    {assign var="greeting" value="Dear Jim"}{if $greeting}<p>{$greeting},</p>{/if}

    {if !empty($event.confirm_email_text) AND (empty($isOnWaitlist) AND empty($isRequireApproval))}
     <p>{$event.confirm_email_text|htmlize}</p>
    {/if}

    {if !empty($isOnWaitlist)}
     <p>{ts}You have been added to the WAIT LIST for this event.{/ts}</p>
     {if !empty($isPrimary)}
       <p>{ts}If space becomes available you will receive an email with a link to a web page where you can complete your registration.{/ts}</p>
     {/if}
    {elseif !empty($isRequireApproval)}
     <p>{ts}Your registration has been submitted.{/ts}</p>
     {if !empty($isPrimary)}
      <p>{ts}Once your registration has been reviewed, you will receive an email with a link to a web page where you can complete the registration process.{/ts}</p>
     {/if}
    {elseif !empty($is_pay_later)}
     <p>{if isset($pay_later_receipt)}{$pay_later_receipt}{/if}</p> {* FIXME: this might be text rather than HTML *}
    {/if}

   </td>
  </tr>
  <tr>
   <td>
    <table style="border: 1px solid #999; margin: 1em 0em 1em; border-collapse: collapse; width:100%;">
     <tr>
      <th {$headerStyle}>
       {ts}Event Information and Location{/ts}
      </th>
     </tr>
     <tr>
      <td colspan="2" {$valueStyle}>
       {$event.event_title}<br />
       {$event.event_start_date|crmDate}{if $event.event_end_date}-{if $event.event_end_date|date_format:"%Y%m%d" == $event.event_start_date|date_format:"%Y%m%d"}{$event.event_end_date|crmDate:0:1}{else}{$event.event_end_date|crmDate}{/if}{/if}
      </td>
     </tr>

     {if !empty($event.participant_role) and $event.participant_role neq \'Attendee\' and !empty($defaultRole)}
      <tr>
       <td {$labelStyle}>
        {ts}Participant Role{/ts}
       </td>
       <td {$valueStyle}>
        {$event.participant_role}
       </td>
      </tr>
     {/if}

     {if !empty($isShowLocation)}
      <tr>
       <td colspan="2" {$valueStyle}>
        {$location.address.1.display|nl2br}
       </td>
      </tr>
     {/if}

     {if !empty($location.phone.1.phone) || !empty($location.email.1.email)}
      <tr>
       <td colspan="2" {$labelStyle}>
        {ts}Event Contacts:{/ts}
       </td>
      </tr>
      {foreach from=$location.phone item=phone}
       {if $phone.phone}
        <tr>
         <td {$labelStyle}>
          {if $phone.phone_type}
           {$phone.phone_type_display}
          {else}
           {ts}Phone{/ts}
          {/if}
         </td>
         <td {$valueStyle}>
          {$phone.phone} {if $phone.phone_ext}&nbsp;{ts}ext.{/ts} {$phone.phone_ext}{/if}
         </td>
        </tr>
       {/if}
      {/foreach}
      {foreach from=$location.email item=eventEmail}
       {if $eventEmail.email}
        <tr>
         <td {$labelStyle}>
          {ts}Email{/ts}
         </td>
         <td {$valueStyle}>
          {$eventEmail.email}
         </td>
        </tr>
       {/if}
      {/foreach}
     {/if}

     {if !empty($event.is_public)}
      <tr>
       <td colspan="2" {$valueStyle}>
        {capture assign=icalFeed}{crmURL p=\'civicrm/event/ical\' q="reset=1&id=`$event.id`" h=0 a=1 fe=1}{/capture}
        <a href="{$icalFeed}">{ts}Download iCalendar File{/ts}</a>
       </td>
      </tr>
     {/if}

     {if $email}
      <tr>
       <th {$headerStyle}>
        {ts}Registered Email{/ts}
       </th>
      </tr>
      <tr>
       <td colspan="2" {$valueStyle}>
        {$email}
       </td>
      </tr>
     {/if}


     {if !empty($event.is_monetary)}

      <tr>
       <th {$headerStyle}>
        {if !empty($event.fee_label)}{$event.fee_label}{/if}
       </th>
      </tr>

      {if !empty($lineItem)}
       {foreach from=$lineItem item=value key=priceset}
        {if $value neq \'skip\'}
         {if !empty($isPrimary)}
          {if $lineItem|@count GT 1} {* Header for multi participant registration cases. *}
           <tr>
            <td colspan="2" {$labelStyle}>
             {ts 1=$priceset+1}Participant %1{/ts}
            </td>
           </tr>
          {/if}
         {/if}
         <tr>
          <td colspan="2" {$valueStyle}>
           <table> {* FIXME: style this table so that it looks like the text version (justification, etc.) *}
            <tr>
             <th>{ts}Item{/ts}</th>
             <th>{ts}Qty{/ts}</th>
             <th>{ts}Each{/ts}</th>
             {if !empty($dataArray)}
              <th>{ts}SubTotal{/ts}</th>
              <th>{ts}Tax Rate{/ts}</th>
              <th>{ts}Tax Amount{/ts}</th>
             {/if}
             <th>{ts}Total{/ts}</th>
       {if !empty($pricesetFieldsCount) }<th>{ts}Total Participants{/ts}</th>{/if}
            </tr>
            {foreach from=$value item=line}
             <tr>
              <td>
        {if $line.html_type eq \'Text\'}{$line.label}{else}{$line.field_title} - {$line.label}{/if} {if $line.description}<div>{$line.description|truncate:30:"..."}</div>{/if}
              </td>
              <td>
               {$line.qty}
              </td>
              <td>
               {$line.unit_price|crmMoney}
              </td>
              {if !empty($dataArray)}
               <td>
                {$line.unit_price*$line.qty|crmMoney}
               </td>
               {if isset($line.tax_rate) and ($line.tax_rate != "" || $line.tax_amount != "")}
                <td>
                 {$line.tax_rate|string_format:"%.2f"}%
                </td>
                <td>
                 {$line.tax_amount|crmMoney}
                </td>
               {else}
                <td></td>
                <td></td>
               {/if}
              {/if}
              <td>
               {$line.line_total+$line.tax_amount|crmMoney}
              </td>
        {if  !empty($pricesetFieldsCount) }
        <td>
    {$line.participant_count}
              </td>
        {/if}
             </tr>
            {/foreach}
           </table>
          </td>
         </tr>
        {/if}
       {/foreach}
       {if !empty($dataArray)}
        {if isset($totalAmount) and isset($totalTaxAmount)}
        <tr>
         <td {$labelStyle}>
          {ts}Amount Before Tax:{/ts}
         </td>
         <td {$valueStyle}>
          {$totalAmount-$totalTaxAmount|crmMoney}
         </td>
        </tr>
        {/if}
        {foreach from=$dataArray item=value key=priceset}
          <tr>
           {if $priceset || $priceset == 0}
            <td>&nbsp;{if isset($taxTerm)}{$taxTerm}{/if} {$priceset|string_format:"%.2f"}%</td>
            <td>&nbsp;{$value|crmMoney:$currency}</td>
           {else}
            <td>&nbsp;{ts}No{/ts} {if isset($taxTerm)}{$taxTerm}{/if}</td>
            <td>&nbsp;{$value|crmMoney:$currency}</td>
           {/if}
          </tr>
        {/foreach}
       {/if}
      {/if}

      {if !empty($amount) && !$lineItem}
       {foreach from=$amount item=amnt key=level}
        <tr>
         <td colspan="2" {$valueStyle}>
          {$amnt.amount|crmMoney} {$amnt.label}
         </td>
        </tr>
       {/foreach}
      {/if}
      {if isset($totalTaxAmount)}
       <tr>
        <td {$labelStyle}>
         {ts}Total Tax Amount{/ts}
        </td>
        <td {$valueStyle}>
         {$totalTaxAmount|crmMoney:$currency}
        </td>
       </tr>
      {/if}
      {if !empty($isPrimary)}
       <tr>
        <td {$labelStyle}>
        {if isset($balanceAmount)}
           {ts}Total Paid{/ts}
        {else}
           {ts}Total Amount{/ts}
         {/if}
        </td>
        <td {$valueStyle}>
         {if !empty($totalAmount)}{$totalAmount|crmMoney}{/if} {if !empty($hookDiscount.message)}({$hookDiscount.message}){/if}
        </td>
       </tr>
      {if isset($balanceAmount)}
       <tr>
        <td {$labelStyle}>
         {ts}Balance{/ts}
        </td>
        <td {$valueStyle}>
         {$balanceAmount|crmMoney}
        </td>
       </tr>
      {/if}
       {if !empty($pricesetFieldsCount) }
     <tr>
       <td {$labelStyle}>
   {ts}Total Participants{/ts}</td>
       <td {$valueStyle}>
   {assign var="count" value= 0}
         {foreach from=$lineItem item=pcount}
         {assign var="lineItemCount" value=0}
         {if $pcount neq \'skip\'}
           {foreach from=$pcount item=p_count}
           {assign var="lineItemCount" value=$lineItemCount+$p_count.participant_count}
           {/foreach}
           {if $lineItemCount < 1 }
           assign var="lineItemCount" value=1}
           {/if}
           {assign var="count" value=$count+$lineItemCount}
         {/if}
         {/foreach}
   {$count}
       </td>
     </tr>
     {/if}
       {if !empty($is_pay_later)}
        <tr>
         <td colspan="2" {$labelStyle}>
          {if isset($pay_later_receipt)}{$pay_later_receipt}{/if}
         </td>
        </tr>
       {/if}

       {if $register_date}
        <tr>
         <td {$labelStyle}>
          {ts}Registration Date{/ts}
         </td>
         <td {$valueStyle}>
          {$register_date|crmDate}
         </td>
        </tr>
       {/if}

       {if !empty($receive_date)}
        <tr>
         <td {$labelStyle}>
          {ts}Transaction Date{/ts}
         </td>
         <td {$valueStyle}>
          {$receive_date|crmDate}
         </td>
        </tr>
       {/if}

       {if !empty($financialTypeName)}
        <tr>
         <td {$labelStyle}>
          {ts}Financial Type{/ts}
         </td>
         <td {$valueStyle}>
          {$financialTypeName}
         </td>
        </tr>
       {/if}

       {if !empty($trxn_id)}
        <tr>
         <td {$labelStyle}>
          {ts}Transaction #{/ts}
         </td>
         <td {$valueStyle}>
          {$trxn_id}
         </td>
        </tr>
       {/if}

       {if !empty($paidBy)}
        <tr>
         <td {$labelStyle}>
          {ts}Paid By{/ts}
         </td>
         <td {$valueStyle}>
         {$paidBy}
         </td>
        </tr>
       {/if}

       {if !empty($checkNumber)}
        <tr>
         <td {$labelStyle}>
          {ts}Check Number{/ts}
         </td>
         <td {$valueStyle}>
          {$checkNumber}
         </td>
        </tr>
       {/if}

       {if !empty($billingName)}
        <tr>
         <th {$headerStyle}>
          {ts}Billing Name and Address{/ts}
         </th>
        </tr>
        <tr>
         <td colspan="2" {$valueStyle}>
          {$billingName}<br />
          {$address|nl2br}
         </td>
        </tr>
       {/if}

       {if !empty($credit_card_type)}
        <tr>
         <th {$headerStyle}>
          {ts}Credit Card Information{/ts}
         </th>
        </tr>
        <tr>
         <td colspan="2" {$valueStyle}>
          {$credit_card_type}<br />
          {$credit_card_number}<br />
          {ts}Expires{/ts}: {$credit_card_exp_date|truncate:7:\'\'|crmDate}
         </td>
        </tr>
       {/if}

      {/if}

     {/if} {* End of conditional section for Paid events *}

     {if !empty($customPre)}
      <tr>
       <th {$headerStyle}>
        {$customPre_grouptitle}
       </th>
      </tr>
      {foreach from=$customPre item=value key=customName}
       {if ( !empty($trackingFields) and ! in_array( $customName, $trackingFields ) ) or empty($trackingFields)}
        <tr>
         <td {$labelStyle}>
          {$customName}
         </td>
         <td {$valueStyle}>
          {$value}
         </td>
        </tr>
       {/if}
      {/foreach}
     {/if}

     {if !empty($customPost)}
      <tr>
       <th {$headerStyle}>
        {$customPost_grouptitle}
       </th>
      </tr>
      {foreach from=$customPost item=value key=customName}
       {if ( !empty($trackingFields) and ! in_array( $customName, $trackingFields ) ) or empty($trackingFields)}
        <tr>
         <td {$labelStyle}>
          {$customName}
         </td>
         <td {$valueStyle}>
          {$value}
         </td>
        </tr>
       {/if}
      {/foreach}
     {/if}

     {if !empty($customProfile)}
      {foreach from=$customProfile item=value key=customName}
       <tr>
        <th {$headerStyle}>
         {ts 1=$customName+1}Participant Information - Participant %1{/ts}
        </th>
       </tr>
       {foreach from=$value item=val key=field}
        {if $field eq \'additionalCustomPre\' or $field eq \'additionalCustomPost\'}
         <tr>
          <td colspan="2" {$labelStyle}>
           {if $field eq \'additionalCustomPre\'}
            {$additionalCustomPre_grouptitle}
           {else}
            {$additionalCustomPost_grouptitle}
           {/if}
          </td>
         </tr>
         {foreach from=$val item=v key=f}
          <tr>
           <td {$labelStyle}>
            {$f}
           </td>
           <td {$valueStyle}>
            {$v}
           </td>
          </tr>
         {/foreach}
        {/if}
       {/foreach}
      {/foreach}
     {/if}

     {if !empty($customGroup)}
      {foreach from=$customGroup item=value key=customName}
       <tr>
        <th {$headerStyle}>
         {$customName}
        </th>
       </tr>
       {foreach from=$value item=v key=n}
        <tr>
         <td {$labelStyle}>
          {$n}
         </td>
         <td {$valueStyle}>
          {$v}
         </td>
        </tr>
       {/foreach}
      {/foreach}
     {/if}

    </table>
   </td>
  </tr>

 </table>
</center>

</body>
</html>
', 151, false),array('modifier', 'truncate', 'string:<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
 <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
 <title></title>
</head>
<body>

{capture assign=headerStyle}colspan="2" style="text-align: left; padding: 4px; border-bottom: 1px solid #999; background-color: #eee;"{/capture}
{capture assign=labelStyle }style="padding: 4px; border-bottom: 1px solid #999; background-color: #f7f7f7;"{/capture}
{capture assign=valueStyle }style="padding: 4px; border-bottom: 1px solid #999;"{/capture}

<center>
  <table id="crm-event_receipt" style="font-family: Arial, Verdana, sans-serif; text-align: left; width:100%; max-width:700px; padding:0; margin:0; border:0px;">

  <!-- BEGIN HEADER -->
  <!-- You can add table row(s) here with logo or other header elements -->
  <!-- END HEADER -->

  <!-- BEGIN CONTENT -->

  <tr>
   <td>
    {assign var="greeting" value="Dear Jim"}{if $greeting}<p>{$greeting},</p>{/if}

    {if !empty($event.confirm_email_text) AND (empty($isOnWaitlist) AND empty($isRequireApproval))}
     <p>{$event.confirm_email_text|htmlize}</p>
    {/if}

    {if !empty($isOnWaitlist)}
     <p>{ts}You have been added to the WAIT LIST for this event.{/ts}</p>
     {if !empty($isPrimary)}
       <p>{ts}If space becomes available you will receive an email with a link to a web page where you can complete your registration.{/ts}</p>
     {/if}
    {elseif !empty($isRequireApproval)}
     <p>{ts}Your registration has been submitted.{/ts}</p>
     {if !empty($isPrimary)}
      <p>{ts}Once your registration has been reviewed, you will receive an email with a link to a web page where you can complete the registration process.{/ts}</p>
     {/if}
    {elseif !empty($is_pay_later)}
     <p>{if isset($pay_later_receipt)}{$pay_later_receipt}{/if}</p> {* FIXME: this might be text rather than HTML *}
    {/if}

   </td>
  </tr>
  <tr>
   <td>
    <table style="border: 1px solid #999; margin: 1em 0em 1em; border-collapse: collapse; width:100%;">
     <tr>
      <th {$headerStyle}>
       {ts}Event Information and Location{/ts}
      </th>
     </tr>
     <tr>
      <td colspan="2" {$valueStyle}>
       {$event.event_title}<br />
       {$event.event_start_date|crmDate}{if $event.event_end_date}-{if $event.event_end_date|date_format:"%Y%m%d" == $event.event_start_date|date_format:"%Y%m%d"}{$event.event_end_date|crmDate:0:1}{else}{$event.event_end_date|crmDate}{/if}{/if}
      </td>
     </tr>

     {if !empty($event.participant_role) and $event.participant_role neq \'Attendee\' and !empty($defaultRole)}
      <tr>
       <td {$labelStyle}>
        {ts}Participant Role{/ts}
       </td>
       <td {$valueStyle}>
        {$event.participant_role}
       </td>
      </tr>
     {/if}

     {if !empty($isShowLocation)}
      <tr>
       <td colspan="2" {$valueStyle}>
        {$location.address.1.display|nl2br}
       </td>
      </tr>
     {/if}

     {if !empty($location.phone.1.phone) || !empty($location.email.1.email)}
      <tr>
       <td colspan="2" {$labelStyle}>
        {ts}Event Contacts:{/ts}
       </td>
      </tr>
      {foreach from=$location.phone item=phone}
       {if $phone.phone}
        <tr>
         <td {$labelStyle}>
          {if $phone.phone_type}
           {$phone.phone_type_display}
          {else}
           {ts}Phone{/ts}
          {/if}
         </td>
         <td {$valueStyle}>
          {$phone.phone} {if $phone.phone_ext}&nbsp;{ts}ext.{/ts} {$phone.phone_ext}{/if}
         </td>
        </tr>
       {/if}
      {/foreach}
      {foreach from=$location.email item=eventEmail}
       {if $eventEmail.email}
        <tr>
         <td {$labelStyle}>
          {ts}Email{/ts}
         </td>
         <td {$valueStyle}>
          {$eventEmail.email}
         </td>
        </tr>
       {/if}
      {/foreach}
     {/if}

     {if !empty($event.is_public)}
      <tr>
       <td colspan="2" {$valueStyle}>
        {capture assign=icalFeed}{crmURL p=\'civicrm/event/ical\' q="reset=1&id=`$event.id`" h=0 a=1 fe=1}{/capture}
        <a href="{$icalFeed}">{ts}Download iCalendar File{/ts}</a>
       </td>
      </tr>
     {/if}

     {if $email}
      <tr>
       <th {$headerStyle}>
        {ts}Registered Email{/ts}
       </th>
      </tr>
      <tr>
       <td colspan="2" {$valueStyle}>
        {$email}
       </td>
      </tr>
     {/if}


     {if !empty($event.is_monetary)}

      <tr>
       <th {$headerStyle}>
        {if !empty($event.fee_label)}{$event.fee_label}{/if}
       </th>
      </tr>

      {if !empty($lineItem)}
       {foreach from=$lineItem item=value key=priceset}
        {if $value neq \'skip\'}
         {if !empty($isPrimary)}
          {if $lineItem|@count GT 1} {* Header for multi participant registration cases. *}
           <tr>
            <td colspan="2" {$labelStyle}>
             {ts 1=$priceset+1}Participant %1{/ts}
            </td>
           </tr>
          {/if}
         {/if}
         <tr>
          <td colspan="2" {$valueStyle}>
           <table> {* FIXME: style this table so that it looks like the text version (justification, etc.) *}
            <tr>
             <th>{ts}Item{/ts}</th>
             <th>{ts}Qty{/ts}</th>
             <th>{ts}Each{/ts}</th>
             {if !empty($dataArray)}
              <th>{ts}SubTotal{/ts}</th>
              <th>{ts}Tax Rate{/ts}</th>
              <th>{ts}Tax Amount{/ts}</th>
             {/if}
             <th>{ts}Total{/ts}</th>
       {if !empty($pricesetFieldsCount) }<th>{ts}Total Participants{/ts}</th>{/if}
            </tr>
            {foreach from=$value item=line}
             <tr>
              <td>
        {if $line.html_type eq \'Text\'}{$line.label}{else}{$line.field_title} - {$line.label}{/if} {if $line.description}<div>{$line.description|truncate:30:"..."}</div>{/if}
              </td>
              <td>
               {$line.qty}
              </td>
              <td>
               {$line.unit_price|crmMoney}
              </td>
              {if !empty($dataArray)}
               <td>
                {$line.unit_price*$line.qty|crmMoney}
               </td>
               {if isset($line.tax_rate) and ($line.tax_rate != "" || $line.tax_amount != "")}
                <td>
                 {$line.tax_rate|string_format:"%.2f"}%
                </td>
                <td>
                 {$line.tax_amount|crmMoney}
                </td>
               {else}
                <td></td>
                <td></td>
               {/if}
              {/if}
              <td>
               {$line.line_total+$line.tax_amount|crmMoney}
              </td>
        {if  !empty($pricesetFieldsCount) }
        <td>
    {$line.participant_count}
              </td>
        {/if}
             </tr>
            {/foreach}
           </table>
          </td>
         </tr>
        {/if}
       {/foreach}
       {if !empty($dataArray)}
        {if isset($totalAmount) and isset($totalTaxAmount)}
        <tr>
         <td {$labelStyle}>
          {ts}Amount Before Tax:{/ts}
         </td>
         <td {$valueStyle}>
          {$totalAmount-$totalTaxAmount|crmMoney}
         </td>
        </tr>
        {/if}
        {foreach from=$dataArray item=value key=priceset}
          <tr>
           {if $priceset || $priceset == 0}
            <td>&nbsp;{if isset($taxTerm)}{$taxTerm}{/if} {$priceset|string_format:"%.2f"}%</td>
            <td>&nbsp;{$value|crmMoney:$currency}</td>
           {else}
            <td>&nbsp;{ts}No{/ts} {if isset($taxTerm)}{$taxTerm}{/if}</td>
            <td>&nbsp;{$value|crmMoney:$currency}</td>
           {/if}
          </tr>
        {/foreach}
       {/if}
      {/if}

      {if !empty($amount) && !$lineItem}
       {foreach from=$amount item=amnt key=level}
        <tr>
         <td colspan="2" {$valueStyle}>
          {$amnt.amount|crmMoney} {$amnt.label}
         </td>
        </tr>
       {/foreach}
      {/if}
      {if isset($totalTaxAmount)}
       <tr>
        <td {$labelStyle}>
         {ts}Total Tax Amount{/ts}
        </td>
        <td {$valueStyle}>
         {$totalTaxAmount|crmMoney:$currency}
        </td>
       </tr>
      {/if}
      {if !empty($isPrimary)}
       <tr>
        <td {$labelStyle}>
        {if isset($balanceAmount)}
           {ts}Total Paid{/ts}
        {else}
           {ts}Total Amount{/ts}
         {/if}
        </td>
        <td {$valueStyle}>
         {if !empty($totalAmount)}{$totalAmount|crmMoney}{/if} {if !empty($hookDiscount.message)}({$hookDiscount.message}){/if}
        </td>
       </tr>
      {if isset($balanceAmount)}
       <tr>
        <td {$labelStyle}>
         {ts}Balance{/ts}
        </td>
        <td {$valueStyle}>
         {$balanceAmount|crmMoney}
        </td>
       </tr>
      {/if}
       {if !empty($pricesetFieldsCount) }
     <tr>
       <td {$labelStyle}>
   {ts}Total Participants{/ts}</td>
       <td {$valueStyle}>
   {assign var="count" value= 0}
         {foreach from=$lineItem item=pcount}
         {assign var="lineItemCount" value=0}
         {if $pcount neq \'skip\'}
           {foreach from=$pcount item=p_count}
           {assign var="lineItemCount" value=$lineItemCount+$p_count.participant_count}
           {/foreach}
           {if $lineItemCount < 1 }
           assign var="lineItemCount" value=1}
           {/if}
           {assign var="count" value=$count+$lineItemCount}
         {/if}
         {/foreach}
   {$count}
       </td>
     </tr>
     {/if}
       {if !empty($is_pay_later)}
        <tr>
         <td colspan="2" {$labelStyle}>
          {if isset($pay_later_receipt)}{$pay_later_receipt}{/if}
         </td>
        </tr>
       {/if}

       {if $register_date}
        <tr>
         <td {$labelStyle}>
          {ts}Registration Date{/ts}
         </td>
         <td {$valueStyle}>
          {$register_date|crmDate}
         </td>
        </tr>
       {/if}

       {if !empty($receive_date)}
        <tr>
         <td {$labelStyle}>
          {ts}Transaction Date{/ts}
         </td>
         <td {$valueStyle}>
          {$receive_date|crmDate}
         </td>
        </tr>
       {/if}

       {if !empty($financialTypeName)}
        <tr>
         <td {$labelStyle}>
          {ts}Financial Type{/ts}
         </td>
         <td {$valueStyle}>
          {$financialTypeName}
         </td>
        </tr>
       {/if}

       {if !empty($trxn_id)}
        <tr>
         <td {$labelStyle}>
          {ts}Transaction #{/ts}
         </td>
         <td {$valueStyle}>
          {$trxn_id}
         </td>
        </tr>
       {/if}

       {if !empty($paidBy)}
        <tr>
         <td {$labelStyle}>
          {ts}Paid By{/ts}
         </td>
         <td {$valueStyle}>
         {$paidBy}
         </td>
        </tr>
       {/if}

       {if !empty($checkNumber)}
        <tr>
         <td {$labelStyle}>
          {ts}Check Number{/ts}
         </td>
         <td {$valueStyle}>
          {$checkNumber}
         </td>
        </tr>
       {/if}

       {if !empty($billingName)}
        <tr>
         <th {$headerStyle}>
          {ts}Billing Name and Address{/ts}
         </th>
        </tr>
        <tr>
         <td colspan="2" {$valueStyle}>
          {$billingName}<br />
          {$address|nl2br}
         </td>
        </tr>
       {/if}

       {if !empty($credit_card_type)}
        <tr>
         <th {$headerStyle}>
          {ts}Credit Card Information{/ts}
         </th>
        </tr>
        <tr>
         <td colspan="2" {$valueStyle}>
          {$credit_card_type}<br />
          {$credit_card_number}<br />
          {ts}Expires{/ts}: {$credit_card_exp_date|truncate:7:\'\'|crmDate}
         </td>
        </tr>
       {/if}

      {/if}

     {/if} {* End of conditional section for Paid events *}

     {if !empty($customPre)}
      <tr>
       <th {$headerStyle}>
        {$customPre_grouptitle}
       </th>
      </tr>
      {foreach from=$customPre item=value key=customName}
       {if ( !empty($trackingFields) and ! in_array( $customName, $trackingFields ) ) or empty($trackingFields)}
        <tr>
         <td {$labelStyle}>
          {$customName}
         </td>
         <td {$valueStyle}>
          {$value}
         </td>
        </tr>
       {/if}
      {/foreach}
     {/if}

     {if !empty($customPost)}
      <tr>
       <th {$headerStyle}>
        {$customPost_grouptitle}
       </th>
      </tr>
      {foreach from=$customPost item=value key=customName}
       {if ( !empty($trackingFields) and ! in_array( $customName, $trackingFields ) ) or empty($trackingFields)}
        <tr>
         <td {$labelStyle}>
          {$customName}
         </td>
         <td {$valueStyle}>
          {$value}
         </td>
        </tr>
       {/if}
      {/foreach}
     {/if}

     {if !empty($customProfile)}
      {foreach from=$customProfile item=value key=customName}
       <tr>
        <th {$headerStyle}>
         {ts 1=$customName+1}Participant Information - Participant %1{/ts}
        </th>
       </tr>
       {foreach from=$value item=val key=field}
        {if $field eq \'additionalCustomPre\' or $field eq \'additionalCustomPost\'}
         <tr>
          <td colspan="2" {$labelStyle}>
           {if $field eq \'additionalCustomPre\'}
            {$additionalCustomPre_grouptitle}
           {else}
            {$additionalCustomPost_grouptitle}
           {/if}
          </td>
         </tr>
         {foreach from=$val item=v key=f}
          <tr>
           <td {$labelStyle}>
            {$f}
           </td>
           <td {$valueStyle}>
            {$v}
           </td>
          </tr>
         {/foreach}
        {/if}
       {/foreach}
      {/foreach}
     {/if}

     {if !empty($customGroup)}
      {foreach from=$customGroup item=value key=customName}
       <tr>
        <th {$headerStyle}>
         {$customName}
        </th>
       </tr>
       {foreach from=$value item=v key=n}
        <tr>
         <td {$labelStyle}>
          {$n}
         </td>
         <td {$valueStyle}>
          {$v}
         </td>
        </tr>
       {/foreach}
      {/foreach}
     {/if}

    </table>
   </td>
  </tr>

 </table>
</center>

</body>
</html>
', 177, false),array('modifier', 'crmMoney', 'string:<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
 <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
 <title></title>
</head>
<body>

{capture assign=headerStyle}colspan="2" style="text-align: left; padding: 4px; border-bottom: 1px solid #999; background-color: #eee;"{/capture}
{capture assign=labelStyle }style="padding: 4px; border-bottom: 1px solid #999; background-color: #f7f7f7;"{/capture}
{capture assign=valueStyle }style="padding: 4px; border-bottom: 1px solid #999;"{/capture}

<center>
  <table id="crm-event_receipt" style="font-family: Arial, Verdana, sans-serif; text-align: left; width:100%; max-width:700px; padding:0; margin:0; border:0px;">

  <!-- BEGIN HEADER -->
  <!-- You can add table row(s) here with logo or other header elements -->
  <!-- END HEADER -->

  <!-- BEGIN CONTENT -->

  <tr>
   <td>
    {assign var="greeting" value="Dear Jim"}{if $greeting}<p>{$greeting},</p>{/if}

    {if !empty($event.confirm_email_text) AND (empty($isOnWaitlist) AND empty($isRequireApproval))}
     <p>{$event.confirm_email_text|htmlize}</p>
    {/if}

    {if !empty($isOnWaitlist)}
     <p>{ts}You have been added to the WAIT LIST for this event.{/ts}</p>
     {if !empty($isPrimary)}
       <p>{ts}If space becomes available you will receive an email with a link to a web page where you can complete your registration.{/ts}</p>
     {/if}
    {elseif !empty($isRequireApproval)}
     <p>{ts}Your registration has been submitted.{/ts}</p>
     {if !empty($isPrimary)}
      <p>{ts}Once your registration has been reviewed, you will receive an email with a link to a web page where you can complete the registration process.{/ts}</p>
     {/if}
    {elseif !empty($is_pay_later)}
     <p>{if isset($pay_later_receipt)}{$pay_later_receipt}{/if}</p> {* FIXME: this might be text rather than HTML *}
    {/if}

   </td>
  </tr>
  <tr>
   <td>
    <table style="border: 1px solid #999; margin: 1em 0em 1em; border-collapse: collapse; width:100%;">
     <tr>
      <th {$headerStyle}>
       {ts}Event Information and Location{/ts}
      </th>
     </tr>
     <tr>
      <td colspan="2" {$valueStyle}>
       {$event.event_title}<br />
       {$event.event_start_date|crmDate}{if $event.event_end_date}-{if $event.event_end_date|date_format:"%Y%m%d" == $event.event_start_date|date_format:"%Y%m%d"}{$event.event_end_date|crmDate:0:1}{else}{$event.event_end_date|crmDate}{/if}{/if}
      </td>
     </tr>

     {if !empty($event.participant_role) and $event.participant_role neq \'Attendee\' and !empty($defaultRole)}
      <tr>
       <td {$labelStyle}>
        {ts}Participant Role{/ts}
       </td>
       <td {$valueStyle}>
        {$event.participant_role}
       </td>
      </tr>
     {/if}

     {if !empty($isShowLocation)}
      <tr>
       <td colspan="2" {$valueStyle}>
        {$location.address.1.display|nl2br}
       </td>
      </tr>
     {/if}

     {if !empty($location.phone.1.phone) || !empty($location.email.1.email)}
      <tr>
       <td colspan="2" {$labelStyle}>
        {ts}Event Contacts:{/ts}
       </td>
      </tr>
      {foreach from=$location.phone item=phone}
       {if $phone.phone}
        <tr>
         <td {$labelStyle}>
          {if $phone.phone_type}
           {$phone.phone_type_display}
          {else}
           {ts}Phone{/ts}
          {/if}
         </td>
         <td {$valueStyle}>
          {$phone.phone} {if $phone.phone_ext}&nbsp;{ts}ext.{/ts} {$phone.phone_ext}{/if}
         </td>
        </tr>
       {/if}
      {/foreach}
      {foreach from=$location.email item=eventEmail}
       {if $eventEmail.email}
        <tr>
         <td {$labelStyle}>
          {ts}Email{/ts}
         </td>
         <td {$valueStyle}>
          {$eventEmail.email}
         </td>
        </tr>
       {/if}
      {/foreach}
     {/if}

     {if !empty($event.is_public)}
      <tr>
       <td colspan="2" {$valueStyle}>
        {capture assign=icalFeed}{crmURL p=\'civicrm/event/ical\' q="reset=1&id=`$event.id`" h=0 a=1 fe=1}{/capture}
        <a href="{$icalFeed}">{ts}Download iCalendar File{/ts}</a>
       </td>
      </tr>
     {/if}

     {if $email}
      <tr>
       <th {$headerStyle}>
        {ts}Registered Email{/ts}
       </th>
      </tr>
      <tr>
       <td colspan="2" {$valueStyle}>
        {$email}
       </td>
      </tr>
     {/if}


     {if !empty($event.is_monetary)}

      <tr>
       <th {$headerStyle}>
        {if !empty($event.fee_label)}{$event.fee_label}{/if}
       </th>
      </tr>

      {if !empty($lineItem)}
       {foreach from=$lineItem item=value key=priceset}
        {if $value neq \'skip\'}
         {if !empty($isPrimary)}
          {if $lineItem|@count GT 1} {* Header for multi participant registration cases. *}
           <tr>
            <td colspan="2" {$labelStyle}>
             {ts 1=$priceset+1}Participant %1{/ts}
            </td>
           </tr>
          {/if}
         {/if}
         <tr>
          <td colspan="2" {$valueStyle}>
           <table> {* FIXME: style this table so that it looks like the text version (justification, etc.) *}
            <tr>
             <th>{ts}Item{/ts}</th>
             <th>{ts}Qty{/ts}</th>
             <th>{ts}Each{/ts}</th>
             {if !empty($dataArray)}
              <th>{ts}SubTotal{/ts}</th>
              <th>{ts}Tax Rate{/ts}</th>
              <th>{ts}Tax Amount{/ts}</th>
             {/if}
             <th>{ts}Total{/ts}</th>
       {if !empty($pricesetFieldsCount) }<th>{ts}Total Participants{/ts}</th>{/if}
            </tr>
            {foreach from=$value item=line}
             <tr>
              <td>
        {if $line.html_type eq \'Text\'}{$line.label}{else}{$line.field_title} - {$line.label}{/if} {if $line.description}<div>{$line.description|truncate:30:"..."}</div>{/if}
              </td>
              <td>
               {$line.qty}
              </td>
              <td>
               {$line.unit_price|crmMoney}
              </td>
              {if !empty($dataArray)}
               <td>
                {$line.unit_price*$line.qty|crmMoney}
               </td>
               {if isset($line.tax_rate) and ($line.tax_rate != "" || $line.tax_amount != "")}
                <td>
                 {$line.tax_rate|string_format:"%.2f"}%
                </td>
                <td>
                 {$line.tax_amount|crmMoney}
                </td>
               {else}
                <td></td>
                <td></td>
               {/if}
              {/if}
              <td>
               {$line.line_total+$line.tax_amount|crmMoney}
              </td>
        {if  !empty($pricesetFieldsCount) }
        <td>
    {$line.participant_count}
              </td>
        {/if}
             </tr>
            {/foreach}
           </table>
          </td>
         </tr>
        {/if}
       {/foreach}
       {if !empty($dataArray)}
        {if isset($totalAmount) and isset($totalTaxAmount)}
        <tr>
         <td {$labelStyle}>
          {ts}Amount Before Tax:{/ts}
         </td>
         <td {$valueStyle}>
          {$totalAmount-$totalTaxAmount|crmMoney}
         </td>
        </tr>
        {/if}
        {foreach from=$dataArray item=value key=priceset}
          <tr>
           {if $priceset || $priceset == 0}
            <td>&nbsp;{if isset($taxTerm)}{$taxTerm}{/if} {$priceset|string_format:"%.2f"}%</td>
            <td>&nbsp;{$value|crmMoney:$currency}</td>
           {else}
            <td>&nbsp;{ts}No{/ts} {if isset($taxTerm)}{$taxTerm}{/if}</td>
            <td>&nbsp;{$value|crmMoney:$currency}</td>
           {/if}
          </tr>
        {/foreach}
       {/if}
      {/if}

      {if !empty($amount) && !$lineItem}
       {foreach from=$amount item=amnt key=level}
        <tr>
         <td colspan="2" {$valueStyle}>
          {$amnt.amount|crmMoney} {$amnt.label}
         </td>
        </tr>
       {/foreach}
      {/if}
      {if isset($totalTaxAmount)}
       <tr>
        <td {$labelStyle}>
         {ts}Total Tax Amount{/ts}
        </td>
        <td {$valueStyle}>
         {$totalTaxAmount|crmMoney:$currency}
        </td>
       </tr>
      {/if}
      {if !empty($isPrimary)}
       <tr>
        <td {$labelStyle}>
        {if isset($balanceAmount)}
           {ts}Total Paid{/ts}
        {else}
           {ts}Total Amount{/ts}
         {/if}
        </td>
        <td {$valueStyle}>
         {if !empty($totalAmount)}{$totalAmount|crmMoney}{/if} {if !empty($hookDiscount.message)}({$hookDiscount.message}){/if}
        </td>
       </tr>
      {if isset($balanceAmount)}
       <tr>
        <td {$labelStyle}>
         {ts}Balance{/ts}
        </td>
        <td {$valueStyle}>
         {$balanceAmount|crmMoney}
        </td>
       </tr>
      {/if}
       {if !empty($pricesetFieldsCount) }
     <tr>
       <td {$labelStyle}>
   {ts}Total Participants{/ts}</td>
       <td {$valueStyle}>
   {assign var="count" value= 0}
         {foreach from=$lineItem item=pcount}
         {assign var="lineItemCount" value=0}
         {if $pcount neq \'skip\'}
           {foreach from=$pcount item=p_count}
           {assign var="lineItemCount" value=$lineItemCount+$p_count.participant_count}
           {/foreach}
           {if $lineItemCount < 1 }
           assign var="lineItemCount" value=1}
           {/if}
           {assign var="count" value=$count+$lineItemCount}
         {/if}
         {/foreach}
   {$count}
       </td>
     </tr>
     {/if}
       {if !empty($is_pay_later)}
        <tr>
         <td colspan="2" {$labelStyle}>
          {if isset($pay_later_receipt)}{$pay_later_receipt}{/if}
         </td>
        </tr>
       {/if}

       {if $register_date}
        <tr>
         <td {$labelStyle}>
          {ts}Registration Date{/ts}
         </td>
         <td {$valueStyle}>
          {$register_date|crmDate}
         </td>
        </tr>
       {/if}

       {if !empty($receive_date)}
        <tr>
         <td {$labelStyle}>
          {ts}Transaction Date{/ts}
         </td>
         <td {$valueStyle}>
          {$receive_date|crmDate}
         </td>
        </tr>
       {/if}

       {if !empty($financialTypeName)}
        <tr>
         <td {$labelStyle}>
          {ts}Financial Type{/ts}
         </td>
         <td {$valueStyle}>
          {$financialTypeName}
         </td>
        </tr>
       {/if}

       {if !empty($trxn_id)}
        <tr>
         <td {$labelStyle}>
          {ts}Transaction #{/ts}
         </td>
         <td {$valueStyle}>
          {$trxn_id}
         </td>
        </tr>
       {/if}

       {if !empty($paidBy)}
        <tr>
         <td {$labelStyle}>
          {ts}Paid By{/ts}
         </td>
         <td {$valueStyle}>
         {$paidBy}
         </td>
        </tr>
       {/if}

       {if !empty($checkNumber)}
        <tr>
         <td {$labelStyle}>
          {ts}Check Number{/ts}
         </td>
         <td {$valueStyle}>
          {$checkNumber}
         </td>
        </tr>
       {/if}

       {if !empty($billingName)}
        <tr>
         <th {$headerStyle}>
          {ts}Billing Name and Address{/ts}
         </th>
        </tr>
        <tr>
         <td colspan="2" {$valueStyle}>
          {$billingName}<br />
          {$address|nl2br}
         </td>
        </tr>
       {/if}

       {if !empty($credit_card_type)}
        <tr>
         <th {$headerStyle}>
          {ts}Credit Card Information{/ts}
         </th>
        </tr>
        <tr>
         <td colspan="2" {$valueStyle}>
          {$credit_card_type}<br />
          {$credit_card_number}<br />
          {ts}Expires{/ts}: {$credit_card_exp_date|truncate:7:\'\'|crmDate}
         </td>
        </tr>
       {/if}

      {/if}

     {/if} {* End of conditional section for Paid events *}

     {if !empty($customPre)}
      <tr>
       <th {$headerStyle}>
        {$customPre_grouptitle}
       </th>
      </tr>
      {foreach from=$customPre item=value key=customName}
       {if ( !empty($trackingFields) and ! in_array( $customName, $trackingFields ) ) or empty($trackingFields)}
        <tr>
         <td {$labelStyle}>
          {$customName}
         </td>
         <td {$valueStyle}>
          {$value}
         </td>
        </tr>
       {/if}
      {/foreach}
     {/if}

     {if !empty($customPost)}
      <tr>
       <th {$headerStyle}>
        {$customPost_grouptitle}
       </th>
      </tr>
      {foreach from=$customPost item=value key=customName}
       {if ( !empty($trackingFields) and ! in_array( $customName, $trackingFields ) ) or empty($trackingFields)}
        <tr>
         <td {$labelStyle}>
          {$customName}
         </td>
         <td {$valueStyle}>
          {$value}
         </td>
        </tr>
       {/if}
      {/foreach}
     {/if}

     {if !empty($customProfile)}
      {foreach from=$customProfile item=value key=customName}
       <tr>
        <th {$headerStyle}>
         {ts 1=$customName+1}Participant Information - Participant %1{/ts}
        </th>
       </tr>
       {foreach from=$value item=val key=field}
        {if $field eq \'additionalCustomPre\' or $field eq \'additionalCustomPost\'}
         <tr>
          <td colspan="2" {$labelStyle}>
           {if $field eq \'additionalCustomPre\'}
            {$additionalCustomPre_grouptitle}
           {else}
            {$additionalCustomPost_grouptitle}
           {/if}
          </td>
         </tr>
         {foreach from=$val item=v key=f}
          <tr>
           <td {$labelStyle}>
            {$f}
           </td>
           <td {$valueStyle}>
            {$v}
           </td>
          </tr>
         {/foreach}
        {/if}
       {/foreach}
      {/foreach}
     {/if}

     {if !empty($customGroup)}
      {foreach from=$customGroup item=value key=customName}
       <tr>
        <th {$headerStyle}>
         {$customName}
        </th>
       </tr>
       {foreach from=$value item=v key=n}
        <tr>
         <td {$labelStyle}>
          {$n}
         </td>
         <td {$valueStyle}>
          {$v}
         </td>
        </tr>
       {/foreach}
      {/foreach}
     {/if}

    </table>
   </td>
  </tr>

 </table>
</center>

</body>
</html>
', 183, false),array('modifier', 'string_format', 'string:<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
 <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
 <title></title>
</head>
<body>

{capture assign=headerStyle}colspan="2" style="text-align: left; padding: 4px; border-bottom: 1px solid #999; background-color: #eee;"{/capture}
{capture assign=labelStyle }style="padding: 4px; border-bottom: 1px solid #999; background-color: #f7f7f7;"{/capture}
{capture assign=valueStyle }style="padding: 4px; border-bottom: 1px solid #999;"{/capture}

<center>
  <table id="crm-event_receipt" style="font-family: Arial, Verdana, sans-serif; text-align: left; width:100%; max-width:700px; padding:0; margin:0; border:0px;">

  <!-- BEGIN HEADER -->
  <!-- You can add table row(s) here with logo or other header elements -->
  <!-- END HEADER -->

  <!-- BEGIN CONTENT -->

  <tr>
   <td>
    {assign var="greeting" value="Dear Jim"}{if $greeting}<p>{$greeting},</p>{/if}

    {if !empty($event.confirm_email_text) AND (empty($isOnWaitlist) AND empty($isRequireApproval))}
     <p>{$event.confirm_email_text|htmlize}</p>
    {/if}

    {if !empty($isOnWaitlist)}
     <p>{ts}You have been added to the WAIT LIST for this event.{/ts}</p>
     {if !empty($isPrimary)}
       <p>{ts}If space becomes available you will receive an email with a link to a web page where you can complete your registration.{/ts}</p>
     {/if}
    {elseif !empty($isRequireApproval)}
     <p>{ts}Your registration has been submitted.{/ts}</p>
     {if !empty($isPrimary)}
      <p>{ts}Once your registration has been reviewed, you will receive an email with a link to a web page where you can complete the registration process.{/ts}</p>
     {/if}
    {elseif !empty($is_pay_later)}
     <p>{if isset($pay_later_receipt)}{$pay_later_receipt}{/if}</p> {* FIXME: this might be text rather than HTML *}
    {/if}

   </td>
  </tr>
  <tr>
   <td>
    <table style="border: 1px solid #999; margin: 1em 0em 1em; border-collapse: collapse; width:100%;">
     <tr>
      <th {$headerStyle}>
       {ts}Event Information and Location{/ts}
      </th>
     </tr>
     <tr>
      <td colspan="2" {$valueStyle}>
       {$event.event_title}<br />
       {$event.event_start_date|crmDate}{if $event.event_end_date}-{if $event.event_end_date|date_format:"%Y%m%d" == $event.event_start_date|date_format:"%Y%m%d"}{$event.event_end_date|crmDate:0:1}{else}{$event.event_end_date|crmDate}{/if}{/if}
      </td>
     </tr>

     {if !empty($event.participant_role) and $event.participant_role neq \'Attendee\' and !empty($defaultRole)}
      <tr>
       <td {$labelStyle}>
        {ts}Participant Role{/ts}
       </td>
       <td {$valueStyle}>
        {$event.participant_role}
       </td>
      </tr>
     {/if}

     {if !empty($isShowLocation)}
      <tr>
       <td colspan="2" {$valueStyle}>
        {$location.address.1.display|nl2br}
       </td>
      </tr>
     {/if}

     {if !empty($location.phone.1.phone) || !empty($location.email.1.email)}
      <tr>
       <td colspan="2" {$labelStyle}>
        {ts}Event Contacts:{/ts}
       </td>
      </tr>
      {foreach from=$location.phone item=phone}
       {if $phone.phone}
        <tr>
         <td {$labelStyle}>
          {if $phone.phone_type}
           {$phone.phone_type_display}
          {else}
           {ts}Phone{/ts}
          {/if}
         </td>
         <td {$valueStyle}>
          {$phone.phone} {if $phone.phone_ext}&nbsp;{ts}ext.{/ts} {$phone.phone_ext}{/if}
         </td>
        </tr>
       {/if}
      {/foreach}
      {foreach from=$location.email item=eventEmail}
       {if $eventEmail.email}
        <tr>
         <td {$labelStyle}>
          {ts}Email{/ts}
         </td>
         <td {$valueStyle}>
          {$eventEmail.email}
         </td>
        </tr>
       {/if}
      {/foreach}
     {/if}

     {if !empty($event.is_public)}
      <tr>
       <td colspan="2" {$valueStyle}>
        {capture assign=icalFeed}{crmURL p=\'civicrm/event/ical\' q="reset=1&id=`$event.id`" h=0 a=1 fe=1}{/capture}
        <a href="{$icalFeed}">{ts}Download iCalendar File{/ts}</a>
       </td>
      </tr>
     {/if}

     {if $email}
      <tr>
       <th {$headerStyle}>
        {ts}Registered Email{/ts}
       </th>
      </tr>
      <tr>
       <td colspan="2" {$valueStyle}>
        {$email}
       </td>
      </tr>
     {/if}


     {if !empty($event.is_monetary)}

      <tr>
       <th {$headerStyle}>
        {if !empty($event.fee_label)}{$event.fee_label}{/if}
       </th>
      </tr>

      {if !empty($lineItem)}
       {foreach from=$lineItem item=value key=priceset}
        {if $value neq \'skip\'}
         {if !empty($isPrimary)}
          {if $lineItem|@count GT 1} {* Header for multi participant registration cases. *}
           <tr>
            <td colspan="2" {$labelStyle}>
             {ts 1=$priceset+1}Participant %1{/ts}
            </td>
           </tr>
          {/if}
         {/if}
         <tr>
          <td colspan="2" {$valueStyle}>
           <table> {* FIXME: style this table so that it looks like the text version (justification, etc.) *}
            <tr>
             <th>{ts}Item{/ts}</th>
             <th>{ts}Qty{/ts}</th>
             <th>{ts}Each{/ts}</th>
             {if !empty($dataArray)}
              <th>{ts}SubTotal{/ts}</th>
              <th>{ts}Tax Rate{/ts}</th>
              <th>{ts}Tax Amount{/ts}</th>
             {/if}
             <th>{ts}Total{/ts}</th>
       {if !empty($pricesetFieldsCount) }<th>{ts}Total Participants{/ts}</th>{/if}
            </tr>
            {foreach from=$value item=line}
             <tr>
              <td>
        {if $line.html_type eq \'Text\'}{$line.label}{else}{$line.field_title} - {$line.label}{/if} {if $line.description}<div>{$line.description|truncate:30:"..."}</div>{/if}
              </td>
              <td>
               {$line.qty}
              </td>
              <td>
               {$line.unit_price|crmMoney}
              </td>
              {if !empty($dataArray)}
               <td>
                {$line.unit_price*$line.qty|crmMoney}
               </td>
               {if isset($line.tax_rate) and ($line.tax_rate != "" || $line.tax_amount != "")}
                <td>
                 {$line.tax_rate|string_format:"%.2f"}%
                </td>
                <td>
                 {$line.tax_amount|crmMoney}
                </td>
               {else}
                <td></td>
                <td></td>
               {/if}
              {/if}
              <td>
               {$line.line_total+$line.tax_amount|crmMoney}
              </td>
        {if  !empty($pricesetFieldsCount) }
        <td>
    {$line.participant_count}
              </td>
        {/if}
             </tr>
            {/foreach}
           </table>
          </td>
         </tr>
        {/if}
       {/foreach}
       {if !empty($dataArray)}
        {if isset($totalAmount) and isset($totalTaxAmount)}
        <tr>
         <td {$labelStyle}>
          {ts}Amount Before Tax:{/ts}
         </td>
         <td {$valueStyle}>
          {$totalAmount-$totalTaxAmount|crmMoney}
         </td>
        </tr>
        {/if}
        {foreach from=$dataArray item=value key=priceset}
          <tr>
           {if $priceset || $priceset == 0}
            <td>&nbsp;{if isset($taxTerm)}{$taxTerm}{/if} {$priceset|string_format:"%.2f"}%</td>
            <td>&nbsp;{$value|crmMoney:$currency}</td>
           {else}
            <td>&nbsp;{ts}No{/ts} {if isset($taxTerm)}{$taxTerm}{/if}</td>
            <td>&nbsp;{$value|crmMoney:$currency}</td>
           {/if}
          </tr>
        {/foreach}
       {/if}
      {/if}

      {if !empty($amount) && !$lineItem}
       {foreach from=$amount item=amnt key=level}
        <tr>
         <td colspan="2" {$valueStyle}>
          {$amnt.amount|crmMoney} {$amnt.label}
         </td>
        </tr>
       {/foreach}
      {/if}
      {if isset($totalTaxAmount)}
       <tr>
        <td {$labelStyle}>
         {ts}Total Tax Amount{/ts}
        </td>
        <td {$valueStyle}>
         {$totalTaxAmount|crmMoney:$currency}
        </td>
       </tr>
      {/if}
      {if !empty($isPrimary)}
       <tr>
        <td {$labelStyle}>
        {if isset($balanceAmount)}
           {ts}Total Paid{/ts}
        {else}
           {ts}Total Amount{/ts}
         {/if}
        </td>
        <td {$valueStyle}>
         {if !empty($totalAmount)}{$totalAmount|crmMoney}{/if} {if !empty($hookDiscount.message)}({$hookDiscount.message}){/if}
        </td>
       </tr>
      {if isset($balanceAmount)}
       <tr>
        <td {$labelStyle}>
         {ts}Balance{/ts}
        </td>
        <td {$valueStyle}>
         {$balanceAmount|crmMoney}
        </td>
       </tr>
      {/if}
       {if !empty($pricesetFieldsCount) }
     <tr>
       <td {$labelStyle}>
   {ts}Total Participants{/ts}</td>
       <td {$valueStyle}>
   {assign var="count" value= 0}
         {foreach from=$lineItem item=pcount}
         {assign var="lineItemCount" value=0}
         {if $pcount neq \'skip\'}
           {foreach from=$pcount item=p_count}
           {assign var="lineItemCount" value=$lineItemCount+$p_count.participant_count}
           {/foreach}
           {if $lineItemCount < 1 }
           assign var="lineItemCount" value=1}
           {/if}
           {assign var="count" value=$count+$lineItemCount}
         {/if}
         {/foreach}
   {$count}
       </td>
     </tr>
     {/if}
       {if !empty($is_pay_later)}
        <tr>
         <td colspan="2" {$labelStyle}>
          {if isset($pay_later_receipt)}{$pay_later_receipt}{/if}
         </td>
        </tr>
       {/if}

       {if $register_date}
        <tr>
         <td {$labelStyle}>
          {ts}Registration Date{/ts}
         </td>
         <td {$valueStyle}>
          {$register_date|crmDate}
         </td>
        </tr>
       {/if}

       {if !empty($receive_date)}
        <tr>
         <td {$labelStyle}>
          {ts}Transaction Date{/ts}
         </td>
         <td {$valueStyle}>
          {$receive_date|crmDate}
         </td>
        </tr>
       {/if}

       {if !empty($financialTypeName)}
        <tr>
         <td {$labelStyle}>
          {ts}Financial Type{/ts}
         </td>
         <td {$valueStyle}>
          {$financialTypeName}
         </td>
        </tr>
       {/if}

       {if !empty($trxn_id)}
        <tr>
         <td {$labelStyle}>
          {ts}Transaction #{/ts}
         </td>
         <td {$valueStyle}>
          {$trxn_id}
         </td>
        </tr>
       {/if}

       {if !empty($paidBy)}
        <tr>
         <td {$labelStyle}>
          {ts}Paid By{/ts}
         </td>
         <td {$valueStyle}>
         {$paidBy}
         </td>
        </tr>
       {/if}

       {if !empty($checkNumber)}
        <tr>
         <td {$labelStyle}>
          {ts}Check Number{/ts}
         </td>
         <td {$valueStyle}>
          {$checkNumber}
         </td>
        </tr>
       {/if}

       {if !empty($billingName)}
        <tr>
         <th {$headerStyle}>
          {ts}Billing Name and Address{/ts}
         </th>
        </tr>
        <tr>
         <td colspan="2" {$valueStyle}>
          {$billingName}<br />
          {$address|nl2br}
         </td>
        </tr>
       {/if}

       {if !empty($credit_card_type)}
        <tr>
         <th {$headerStyle}>
          {ts}Credit Card Information{/ts}
         </th>
        </tr>
        <tr>
         <td colspan="2" {$valueStyle}>
          {$credit_card_type}<br />
          {$credit_card_number}<br />
          {ts}Expires{/ts}: {$credit_card_exp_date|truncate:7:\'\'|crmDate}
         </td>
        </tr>
       {/if}

      {/if}

     {/if} {* End of conditional section for Paid events *}

     {if !empty($customPre)}
      <tr>
       <th {$headerStyle}>
        {$customPre_grouptitle}
       </th>
      </tr>
      {foreach from=$customPre item=value key=customName}
       {if ( !empty($trackingFields) and ! in_array( $customName, $trackingFields ) ) or empty($trackingFields)}
        <tr>
         <td {$labelStyle}>
          {$customName}
         </td>
         <td {$valueStyle}>
          {$value}
         </td>
        </tr>
       {/if}
      {/foreach}
     {/if}

     {if !empty($customPost)}
      <tr>
       <th {$headerStyle}>
        {$customPost_grouptitle}
       </th>
      </tr>
      {foreach from=$customPost item=value key=customName}
       {if ( !empty($trackingFields) and ! in_array( $customName, $trackingFields ) ) or empty($trackingFields)}
        <tr>
         <td {$labelStyle}>
          {$customName}
         </td>
         <td {$valueStyle}>
          {$value}
         </td>
        </tr>
       {/if}
      {/foreach}
     {/if}

     {if !empty($customProfile)}
      {foreach from=$customProfile item=value key=customName}
       <tr>
        <th {$headerStyle}>
         {ts 1=$customName+1}Participant Information - Participant %1{/ts}
        </th>
       </tr>
       {foreach from=$value item=val key=field}
        {if $field eq \'additionalCustomPre\' or $field eq \'additionalCustomPost\'}
         <tr>
          <td colspan="2" {$labelStyle}>
           {if $field eq \'additionalCustomPre\'}
            {$additionalCustomPre_grouptitle}
           {else}
            {$additionalCustomPost_grouptitle}
           {/if}
          </td>
         </tr>
         {foreach from=$val item=v key=f}
          <tr>
           <td {$labelStyle}>
            {$f}
           </td>
           <td {$valueStyle}>
            {$v}
           </td>
          </tr>
         {/foreach}
        {/if}
       {/foreach}
      {/foreach}
     {/if}

     {if !empty($customGroup)}
      {foreach from=$customGroup item=value key=customName}
       <tr>
        <th {$headerStyle}>
         {$customName}
        </th>
       </tr>
       {foreach from=$value item=v key=n}
        <tr>
         <td {$labelStyle}>
          {$n}
         </td>
         <td {$valueStyle}>
          {$v}
         </td>
        </tr>
       {/foreach}
      {/foreach}
     {/if}

    </table>
   </td>
  </tr>

 </table>
</center>

</body>
</html>
', 191, false),array('function', 'crmURL', 'string:<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
 <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
 <title></title>
</head>
<body>

{capture assign=headerStyle}colspan="2" style="text-align: left; padding: 4px; border-bottom: 1px solid #999; background-color: #eee;"{/capture}
{capture assign=labelStyle }style="padding: 4px; border-bottom: 1px solid #999; background-color: #f7f7f7;"{/capture}
{capture assign=valueStyle }style="padding: 4px; border-bottom: 1px solid #999;"{/capture}

<center>
  <table id="crm-event_receipt" style="font-family: Arial, Verdana, sans-serif; text-align: left; width:100%; max-width:700px; padding:0; margin:0; border:0px;">

  <!-- BEGIN HEADER -->
  <!-- You can add table row(s) here with logo or other header elements -->
  <!-- END HEADER -->

  <!-- BEGIN CONTENT -->

  <tr>
   <td>
    {assign var="greeting" value="Dear Jim"}{if $greeting}<p>{$greeting},</p>{/if}

    {if !empty($event.confirm_email_text) AND (empty($isOnWaitlist) AND empty($isRequireApproval))}
     <p>{$event.confirm_email_text|htmlize}</p>
    {/if}

    {if !empty($isOnWaitlist)}
     <p>{ts}You have been added to the WAIT LIST for this event.{/ts}</p>
     {if !empty($isPrimary)}
       <p>{ts}If space becomes available you will receive an email with a link to a web page where you can complete your registration.{/ts}</p>
     {/if}
    {elseif !empty($isRequireApproval)}
     <p>{ts}Your registration has been submitted.{/ts}</p>
     {if !empty($isPrimary)}
      <p>{ts}Once your registration has been reviewed, you will receive an email with a link to a web page where you can complete the registration process.{/ts}</p>
     {/if}
    {elseif !empty($is_pay_later)}
     <p>{if isset($pay_later_receipt)}{$pay_later_receipt}{/if}</p> {* FIXME: this might be text rather than HTML *}
    {/if}

   </td>
  </tr>
  <tr>
   <td>
    <table style="border: 1px solid #999; margin: 1em 0em 1em; border-collapse: collapse; width:100%;">
     <tr>
      <th {$headerStyle}>
       {ts}Event Information and Location{/ts}
      </th>
     </tr>
     <tr>
      <td colspan="2" {$valueStyle}>
       {$event.event_title}<br />
       {$event.event_start_date|crmDate}{if $event.event_end_date}-{if $event.event_end_date|date_format:"%Y%m%d" == $event.event_start_date|date_format:"%Y%m%d"}{$event.event_end_date|crmDate:0:1}{else}{$event.event_end_date|crmDate}{/if}{/if}
      </td>
     </tr>

     {if !empty($event.participant_role) and $event.participant_role neq \'Attendee\' and !empty($defaultRole)}
      <tr>
       <td {$labelStyle}>
        {ts}Participant Role{/ts}
       </td>
       <td {$valueStyle}>
        {$event.participant_role}
       </td>
      </tr>
     {/if}

     {if !empty($isShowLocation)}
      <tr>
       <td colspan="2" {$valueStyle}>
        {$location.address.1.display|nl2br}
       </td>
      </tr>
     {/if}

     {if !empty($location.phone.1.phone) || !empty($location.email.1.email)}
      <tr>
       <td colspan="2" {$labelStyle}>
        {ts}Event Contacts:{/ts}
       </td>
      </tr>
      {foreach from=$location.phone item=phone}
       {if $phone.phone}
        <tr>
         <td {$labelStyle}>
          {if $phone.phone_type}
           {$phone.phone_type_display}
          {else}
           {ts}Phone{/ts}
          {/if}
         </td>
         <td {$valueStyle}>
          {$phone.phone} {if $phone.phone_ext}&nbsp;{ts}ext.{/ts} {$phone.phone_ext}{/if}
         </td>
        </tr>
       {/if}
      {/foreach}
      {foreach from=$location.email item=eventEmail}
       {if $eventEmail.email}
        <tr>
         <td {$labelStyle}>
          {ts}Email{/ts}
         </td>
         <td {$valueStyle}>
          {$eventEmail.email}
         </td>
        </tr>
       {/if}
      {/foreach}
     {/if}

     {if !empty($event.is_public)}
      <tr>
       <td colspan="2" {$valueStyle}>
        {capture assign=icalFeed}{crmURL p=\'civicrm/event/ical\' q="reset=1&id=`$event.id`" h=0 a=1 fe=1}{/capture}
        <a href="{$icalFeed}">{ts}Download iCalendar File{/ts}</a>
       </td>
      </tr>
     {/if}

     {if $email}
      <tr>
       <th {$headerStyle}>
        {ts}Registered Email{/ts}
       </th>
      </tr>
      <tr>
       <td colspan="2" {$valueStyle}>
        {$email}
       </td>
      </tr>
     {/if}


     {if !empty($event.is_monetary)}

      <tr>
       <th {$headerStyle}>
        {if !empty($event.fee_label)}{$event.fee_label}{/if}
       </th>
      </tr>

      {if !empty($lineItem)}
       {foreach from=$lineItem item=value key=priceset}
        {if $value neq \'skip\'}
         {if !empty($isPrimary)}
          {if $lineItem|@count GT 1} {* Header for multi participant registration cases. *}
           <tr>
            <td colspan="2" {$labelStyle}>
             {ts 1=$priceset+1}Participant %1{/ts}
            </td>
           </tr>
          {/if}
         {/if}
         <tr>
          <td colspan="2" {$valueStyle}>
           <table> {* FIXME: style this table so that it looks like the text version (justification, etc.) *}
            <tr>
             <th>{ts}Item{/ts}</th>
             <th>{ts}Qty{/ts}</th>
             <th>{ts}Each{/ts}</th>
             {if !empty($dataArray)}
              <th>{ts}SubTotal{/ts}</th>
              <th>{ts}Tax Rate{/ts}</th>
              <th>{ts}Tax Amount{/ts}</th>
             {/if}
             <th>{ts}Total{/ts}</th>
       {if !empty($pricesetFieldsCount) }<th>{ts}Total Participants{/ts}</th>{/if}
            </tr>
            {foreach from=$value item=line}
             <tr>
              <td>
        {if $line.html_type eq \'Text\'}{$line.label}{else}{$line.field_title} - {$line.label}{/if} {if $line.description}<div>{$line.description|truncate:30:"..."}</div>{/if}
              </td>
              <td>
               {$line.qty}
              </td>
              <td>
               {$line.unit_price|crmMoney}
              </td>
              {if !empty($dataArray)}
               <td>
                {$line.unit_price*$line.qty|crmMoney}
               </td>
               {if isset($line.tax_rate) and ($line.tax_rate != "" || $line.tax_amount != "")}
                <td>
                 {$line.tax_rate|string_format:"%.2f"}%
                </td>
                <td>
                 {$line.tax_amount|crmMoney}
                </td>
               {else}
                <td></td>
                <td></td>
               {/if}
              {/if}
              <td>
               {$line.line_total+$line.tax_amount|crmMoney}
              </td>
        {if  !empty($pricesetFieldsCount) }
        <td>
    {$line.participant_count}
              </td>
        {/if}
             </tr>
            {/foreach}
           </table>
          </td>
         </tr>
        {/if}
       {/foreach}
       {if !empty($dataArray)}
        {if isset($totalAmount) and isset($totalTaxAmount)}
        <tr>
         <td {$labelStyle}>
          {ts}Amount Before Tax:{/ts}
         </td>
         <td {$valueStyle}>
          {$totalAmount-$totalTaxAmount|crmMoney}
         </td>
        </tr>
        {/if}
        {foreach from=$dataArray item=value key=priceset}
          <tr>
           {if $priceset || $priceset == 0}
            <td>&nbsp;{if isset($taxTerm)}{$taxTerm}{/if} {$priceset|string_format:"%.2f"}%</td>
            <td>&nbsp;{$value|crmMoney:$currency}</td>
           {else}
            <td>&nbsp;{ts}No{/ts} {if isset($taxTerm)}{$taxTerm}{/if}</td>
            <td>&nbsp;{$value|crmMoney:$currency}</td>
           {/if}
          </tr>
        {/foreach}
       {/if}
      {/if}

      {if !empty($amount) && !$lineItem}
       {foreach from=$amount item=amnt key=level}
        <tr>
         <td colspan="2" {$valueStyle}>
          {$amnt.amount|crmMoney} {$amnt.label}
         </td>
        </tr>
       {/foreach}
      {/if}
      {if isset($totalTaxAmount)}
       <tr>
        <td {$labelStyle}>
         {ts}Total Tax Amount{/ts}
        </td>
        <td {$valueStyle}>
         {$totalTaxAmount|crmMoney:$currency}
        </td>
       </tr>
      {/if}
      {if !empty($isPrimary)}
       <tr>
        <td {$labelStyle}>
        {if isset($balanceAmount)}
           {ts}Total Paid{/ts}
        {else}
           {ts}Total Amount{/ts}
         {/if}
        </td>
        <td {$valueStyle}>
         {if !empty($totalAmount)}{$totalAmount|crmMoney}{/if} {if !empty($hookDiscount.message)}({$hookDiscount.message}){/if}
        </td>
       </tr>
      {if isset($balanceAmount)}
       <tr>
        <td {$labelStyle}>
         {ts}Balance{/ts}
        </td>
        <td {$valueStyle}>
         {$balanceAmount|crmMoney}
        </td>
       </tr>
      {/if}
       {if !empty($pricesetFieldsCount) }
     <tr>
       <td {$labelStyle}>
   {ts}Total Participants{/ts}</td>
       <td {$valueStyle}>
   {assign var="count" value= 0}
         {foreach from=$lineItem item=pcount}
         {assign var="lineItemCount" value=0}
         {if $pcount neq \'skip\'}
           {foreach from=$pcount item=p_count}
           {assign var="lineItemCount" value=$lineItemCount+$p_count.participant_count}
           {/foreach}
           {if $lineItemCount < 1 }
           assign var="lineItemCount" value=1}
           {/if}
           {assign var="count" value=$count+$lineItemCount}
         {/if}
         {/foreach}
   {$count}
       </td>
     </tr>
     {/if}
       {if !empty($is_pay_later)}
        <tr>
         <td colspan="2" {$labelStyle}>
          {if isset($pay_later_receipt)}{$pay_later_receipt}{/if}
         </td>
        </tr>
       {/if}

       {if $register_date}
        <tr>
         <td {$labelStyle}>
          {ts}Registration Date{/ts}
         </td>
         <td {$valueStyle}>
          {$register_date|crmDate}
         </td>
        </tr>
       {/if}

       {if !empty($receive_date)}
        <tr>
         <td {$labelStyle}>
          {ts}Transaction Date{/ts}
         </td>
         <td {$valueStyle}>
          {$receive_date|crmDate}
         </td>
        </tr>
       {/if}

       {if !empty($financialTypeName)}
        <tr>
         <td {$labelStyle}>
          {ts}Financial Type{/ts}
         </td>
         <td {$valueStyle}>
          {$financialTypeName}
         </td>
        </tr>
       {/if}

       {if !empty($trxn_id)}
        <tr>
         <td {$labelStyle}>
          {ts}Transaction #{/ts}
         </td>
         <td {$valueStyle}>
          {$trxn_id}
         </td>
        </tr>
       {/if}

       {if !empty($paidBy)}
        <tr>
         <td {$labelStyle}>
          {ts}Paid By{/ts}
         </td>
         <td {$valueStyle}>
         {$paidBy}
         </td>
        </tr>
       {/if}

       {if !empty($checkNumber)}
        <tr>
         <td {$labelStyle}>
          {ts}Check Number{/ts}
         </td>
         <td {$valueStyle}>
          {$checkNumber}
         </td>
        </tr>
       {/if}

       {if !empty($billingName)}
        <tr>
         <th {$headerStyle}>
          {ts}Billing Name and Address{/ts}
         </th>
        </tr>
        <tr>
         <td colspan="2" {$valueStyle}>
          {$billingName}<br />
          {$address|nl2br}
         </td>
        </tr>
       {/if}

       {if !empty($credit_card_type)}
        <tr>
         <th {$headerStyle}>
          {ts}Credit Card Information{/ts}
         </th>
        </tr>
        <tr>
         <td colspan="2" {$valueStyle}>
          {$credit_card_type}<br />
          {$credit_card_number}<br />
          {ts}Expires{/ts}: {$credit_card_exp_date|truncate:7:\'\'|crmDate}
         </td>
        </tr>
       {/if}

      {/if}

     {/if} {* End of conditional section for Paid events *}

     {if !empty($customPre)}
      <tr>
       <th {$headerStyle}>
        {$customPre_grouptitle}
       </th>
      </tr>
      {foreach from=$customPre item=value key=customName}
       {if ( !empty($trackingFields) and ! in_array( $customName, $trackingFields ) ) or empty($trackingFields)}
        <tr>
         <td {$labelStyle}>
          {$customName}
         </td>
         <td {$valueStyle}>
          {$value}
         </td>
        </tr>
       {/if}
      {/foreach}
     {/if}

     {if !empty($customPost)}
      <tr>
       <th {$headerStyle}>
        {$customPost_grouptitle}
       </th>
      </tr>
      {foreach from=$customPost item=value key=customName}
       {if ( !empty($trackingFields) and ! in_array( $customName, $trackingFields ) ) or empty($trackingFields)}
        <tr>
         <td {$labelStyle}>
          {$customName}
         </td>
         <td {$valueStyle}>
          {$value}
         </td>
        </tr>
       {/if}
      {/foreach}
     {/if}

     {if !empty($customProfile)}
      {foreach from=$customProfile item=value key=customName}
       <tr>
        <th {$headerStyle}>
         {ts 1=$customName+1}Participant Information - Participant %1{/ts}
        </th>
       </tr>
       {foreach from=$value item=val key=field}
        {if $field eq \'additionalCustomPre\' or $field eq \'additionalCustomPost\'}
         <tr>
          <td colspan="2" {$labelStyle}>
           {if $field eq \'additionalCustomPre\'}
            {$additionalCustomPre_grouptitle}
           {else}
            {$additionalCustomPost_grouptitle}
           {/if}
          </td>
         </tr>
         {foreach from=$val item=v key=f}
          <tr>
           <td {$labelStyle}>
            {$f}
           </td>
           <td {$valueStyle}>
            {$v}
           </td>
          </tr>
         {/foreach}
        {/if}
       {/foreach}
      {/foreach}
     {/if}

     {if !empty($customGroup)}
      {foreach from=$customGroup item=value key=customName}
       <tr>
        <th {$headerStyle}>
         {$customName}
        </th>
       </tr>
       {foreach from=$value item=v key=n}
        <tr>
         <td {$labelStyle}>
          {$n}
         </td>
         <td {$valueStyle}>
          {$v}
         </td>
        </tr>
       {/foreach}
      {/foreach}
     {/if}

    </table>
   </td>
  </tr>

 </table>
</center>

</body>
</html>
', 119, false),)), $this); ?>
<?php $this->_tag_stack[] = array('crmScope', array('extensionKey' => "")); $_block_repeat=true;smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
 <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
 <title></title>
</head>
<body>

<?php ob_start(); ?>colspan="2" style="text-align: left; padding: 4px; border-bottom: 1px solid #999; background-color: #eee;"<?php $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->assign('headerStyle', ob_get_contents());ob_end_clean(); ?>
<?php ob_start(); ?>style="padding: 4px; border-bottom: 1px solid #999; background-color: #f7f7f7;"<?php $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->assign('labelStyle', ob_get_contents());ob_end_clean(); ?>
<?php ob_start(); ?>style="padding: 4px; border-bottom: 1px solid #999;"<?php $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->assign('valueStyle', ob_get_contents());ob_end_clean(); ?>

<center>
  <table id="crm-event_receipt" style="font-family: Arial, Verdana, sans-serif; text-align: left; width:100%; max-width:700px; padding:0; margin:0; border:0px;">

  <!-- BEGIN HEADER -->
  <!-- You can add table row(s) here with logo or other header elements -->
  <!-- END HEADER -->

  <!-- BEGIN CONTENT -->

  <tr>
   <td>
    <?php $this->assign('greeting', 'Dear Jim'); ?><?php if ($this->_tpl_vars['greeting']): ?><p><?php echo $this->_tpl_vars['greeting']; ?>
,</p><?php endif; ?>

    <?php if (! empty ( $this->_tpl_vars['event']['confirm_email_text'] ) && ( empty ( $this->_tpl_vars['isOnWaitlist'] ) && empty ( $this->_tpl_vars['isRequireApproval'] ) )): ?>
     <p><?php echo ((is_array($_tmp=$this->_tpl_vars['event']['confirm_email_text'])) ? $this->_run_mod_handler('htmlize', true, $_tmp) : smarty_modifier_htmlize($_tmp)); ?>
</p>
    <?php endif; ?>

    <?php if (! empty ( $this->_tpl_vars['isOnWaitlist'] )): ?>
     <p><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>You have been added to the WAIT LIST for this event.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></p>
     <?php if (! empty ( $this->_tpl_vars['isPrimary'] )): ?>
       <p><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>If space becomes available you will receive an email with a link to a web page where you can complete your registration.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></p>
     <?php endif; ?>
    <?php elseif (! empty ( $this->_tpl_vars['isRequireApproval'] )): ?>
     <p><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Your registration has been submitted.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></p>
     <?php if (! empty ( $this->_tpl_vars['isPrimary'] )): ?>
      <p><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Once your registration has been reviewed, you will receive an email with a link to a web page where you can complete the registration process.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></p>
     <?php endif; ?>
    <?php elseif (! empty ( $this->_tpl_vars['is_pay_later'] )): ?>
     <p><?php if (isset ( $this->_tpl_vars['pay_later_receipt'] )): ?><?php echo $this->_tpl_vars['pay_later_receipt']; ?>
<?php endif; ?></p>     <?php endif; ?>

   </td>
  </tr>
  <tr>
   <td>
    <table style="border: 1px solid #999; margin: 1em 0em 1em; border-collapse: collapse; width:100%;">
     <tr>
      <th <?php echo $this->_tpl_vars['headerStyle']; ?>
>
       <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Event Information and Location<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
      </th>
     </tr>
     <tr>
      <td colspan="2" <?php echo $this->_tpl_vars['valueStyle']; ?>
>
       <?php echo $this->_tpl_vars['event']['event_title']; ?>
<br />
       <?php echo ((is_array($_tmp=$this->_tpl_vars['event']['event_start_date'])) ? $this->_run_mod_handler('crmDate', true, $_tmp) : smarty_modifier_crmDate($_tmp)); ?>
<?php if ($this->_tpl_vars['event']['event_end_date']): ?>-<?php if (((is_array($_tmp=$this->_tpl_vars['event']['event_end_date'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y%m%d") : smarty_modifier_date_format($_tmp, "%Y%m%d")) == ((is_array($_tmp=$this->_tpl_vars['event']['event_start_date'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y%m%d") : smarty_modifier_date_format($_tmp, "%Y%m%d"))): ?><?php echo ((is_array($_tmp=$this->_tpl_vars['event']['event_end_date'])) ? $this->_run_mod_handler('crmDate', true, $_tmp, 0, 1) : smarty_modifier_crmDate($_tmp, 0, 1)); ?>
<?php else: ?><?php echo ((is_array($_tmp=$this->_tpl_vars['event']['event_end_date'])) ? $this->_run_mod_handler('crmDate', true, $_tmp) : smarty_modifier_crmDate($_tmp)); ?>
<?php endif; ?><?php endif; ?>
      </td>
     </tr>

     <?php if (! empty ( $this->_tpl_vars['event']['participant_role'] ) && $this->_tpl_vars['event']['participant_role'] != 'Attendee' && ! empty ( $this->_tpl_vars['defaultRole'] )): ?>
      <tr>
       <td <?php echo $this->_tpl_vars['labelStyle']; ?>
>
        <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Participant Role<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
       </td>
       <td <?php echo $this->_tpl_vars['valueStyle']; ?>
>
        <?php echo $this->_tpl_vars['event']['participant_role']; ?>

       </td>
      </tr>
     <?php endif; ?>

     <?php if (! empty ( $this->_tpl_vars['isShowLocation'] )): ?>
      <tr>
       <td colspan="2" <?php echo $this->_tpl_vars['valueStyle']; ?>
>
        <?php echo ((is_array($_tmp=$this->_tpl_vars['location']['address']['1']['display'])) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>

       </td>
      </tr>
     <?php endif; ?>

     <?php if (! empty ( $this->_tpl_vars['location']['phone']['1']['phone'] ) || ! empty ( $this->_tpl_vars['location']['email']['1']['email'] )): ?>
      <tr>
       <td colspan="2" <?php echo $this->_tpl_vars['labelStyle']; ?>
>
        <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Event Contacts:<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
       </td>
      </tr>
      <?php $_from = $this->_tpl_vars['location']['phone']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['phone']):
?>
       <?php if ($this->_tpl_vars['phone']['phone']): ?>
        <tr>
         <td <?php echo $this->_tpl_vars['labelStyle']; ?>
>
          <?php if ($this->_tpl_vars['phone']['phone_type']): ?>
           <?php echo $this->_tpl_vars['phone']['phone_type_display']; ?>

          <?php else: ?>
           <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Phone<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
          <?php endif; ?>
         </td>
         <td <?php echo $this->_tpl_vars['valueStyle']; ?>
>
          <?php echo $this->_tpl_vars['phone']['phone']; ?>
 <?php if ($this->_tpl_vars['phone']['phone_ext']): ?>&nbsp;<?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>ext.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?> <?php echo $this->_tpl_vars['phone']['phone_ext']; ?>
<?php endif; ?>
         </td>
        </tr>
       <?php endif; ?>
      <?php endforeach; endif; unset($_from); ?>
      <?php $_from = $this->_tpl_vars['location']['email']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['eventEmail']):
?>
       <?php if ($this->_tpl_vars['eventEmail']['email']): ?>
        <tr>
         <td <?php echo $this->_tpl_vars['labelStyle']; ?>
>
          <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Email<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
         </td>
         <td <?php echo $this->_tpl_vars['valueStyle']; ?>
>
          <?php echo $this->_tpl_vars['eventEmail']['email']; ?>

         </td>
        </tr>
       <?php endif; ?>
      <?php endforeach; endif; unset($_from); ?>
     <?php endif; ?>

     <?php if (! empty ( $this->_tpl_vars['event']['is_public'] )): ?>
      <tr>
       <td colspan="2" <?php echo $this->_tpl_vars['valueStyle']; ?>
>
        <?php ob_start(); ?><?php echo CRM_Utils_System::crmURL(array('p' => 'civicrm/event/ical','q' => "reset=1&id=".($this->_tpl_vars['event']['id']),'h' => 0,'a' => 1,'fe' => 1), $this);?>
<?php $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->assign('icalFeed', ob_get_contents());ob_end_clean(); ?>
        <a href="<?php echo $this->_tpl_vars['icalFeed']; ?>
"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Download iCalendar File<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></a>
       </td>
      </tr>
     <?php endif; ?>

     <?php if ($this->_tpl_vars['email']): ?>
      <tr>
       <th <?php echo $this->_tpl_vars['headerStyle']; ?>
>
        <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Registered Email<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
       </th>
      </tr>
      <tr>
       <td colspan="2" <?php echo $this->_tpl_vars['valueStyle']; ?>
>
        <?php echo $this->_tpl_vars['email']; ?>

       </td>
      </tr>
     <?php endif; ?>


     <?php if (! empty ( $this->_tpl_vars['event']['is_monetary'] )): ?>

      <tr>
       <th <?php echo $this->_tpl_vars['headerStyle']; ?>
>
        <?php if (! empty ( $this->_tpl_vars['event']['fee_label'] )): ?><?php echo $this->_tpl_vars['event']['fee_label']; ?>
<?php endif; ?>
       </th>
      </tr>

      <?php if (! empty ( $this->_tpl_vars['lineItem'] )): ?>
       <?php $_from = $this->_tpl_vars['lineItem']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['priceset'] => $this->_tpl_vars['value']):
?>
        <?php if ($this->_tpl_vars['value'] != 'skip'): ?>
         <?php if (! empty ( $this->_tpl_vars['isPrimary'] )): ?>
          <?php if (count($this->_tpl_vars['lineItem']) > 1): ?>            <tr>
            <td colspan="2" <?php echo $this->_tpl_vars['labelStyle']; ?>
>
             <?php $this->_tag_stack[] = array('ts', array('1' => $this->_tpl_vars['priceset']+1)); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Participant %1<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
            </td>
           </tr>
          <?php endif; ?>
         <?php endif; ?>
         <tr>
          <td colspan="2" <?php echo $this->_tpl_vars['valueStyle']; ?>
>
           <table>             <tr>
             <th><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Item<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></th>
             <th><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Qty<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></th>
             <th><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Each<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></th>
             <?php if (! empty ( $this->_tpl_vars['dataArray'] )): ?>
              <th><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>SubTotal<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></th>
              <th><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Tax Rate<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></th>
              <th><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Tax Amount<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></th>
             <?php endif; ?>
             <th><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Total<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></th>
       <?php if (! empty ( $this->_tpl_vars['pricesetFieldsCount'] )): ?><th><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Total Participants<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></th><?php endif; ?>
            </tr>
            <?php $_from = $this->_tpl_vars['value']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['line']):
?>
             <tr>
              <td>
        <?php if ($this->_tpl_vars['line']['html_type'] == 'Text'): ?><?php echo $this->_tpl_vars['line']['label']; ?>
<?php else: ?><?php echo $this->_tpl_vars['line']['field_title']; ?>
 - <?php echo $this->_tpl_vars['line']['label']; ?>
<?php endif; ?> <?php if ($this->_tpl_vars['line']['description']): ?><div><?php echo ((is_array($_tmp=$this->_tpl_vars['line']['description'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 30, "...") : smarty_modifier_truncate($_tmp, 30, "...")); ?>
</div><?php endif; ?>
              </td>
              <td>
               <?php echo $this->_tpl_vars['line']['qty']; ?>

              </td>
              <td>
               <?php echo ((is_array($_tmp=$this->_tpl_vars['line']['unit_price'])) ? $this->_run_mod_handler('crmMoney', true, $_tmp) : smarty_modifier_crmMoney($_tmp)); ?>

              </td>
              <?php if (! empty ( $this->_tpl_vars['dataArray'] )): ?>
               <td>
                <?php echo ((is_array($_tmp=$this->_tpl_vars['line']['unit_price']*$this->_tpl_vars['line']['qty'])) ? $this->_run_mod_handler('crmMoney', true, $_tmp) : smarty_modifier_crmMoney($_tmp)); ?>

               </td>
               <?php if (isset ( $this->_tpl_vars['line']['tax_rate'] ) && ( $this->_tpl_vars['line']['tax_rate'] != "" || $this->_tpl_vars['line']['tax_amount'] != "" )): ?>
                <td>
                 <?php echo ((is_array($_tmp=$this->_tpl_vars['line']['tax_rate'])) ? $this->_run_mod_handler('string_format', true, $_tmp, "%.2f") : smarty_modifier_string_format($_tmp, "%.2f")); ?>
%
                </td>
                <td>
                 <?php echo ((is_array($_tmp=$this->_tpl_vars['line']['tax_amount'])) ? $this->_run_mod_handler('crmMoney', true, $_tmp) : smarty_modifier_crmMoney($_tmp)); ?>

                </td>
               <?php else: ?>
                <td></td>
                <td></td>
               <?php endif; ?>
              <?php endif; ?>
              <td>
               <?php echo ((is_array($_tmp=$this->_tpl_vars['line']['line_total']+$this->_tpl_vars['line']['tax_amount'])) ? $this->_run_mod_handler('crmMoney', true, $_tmp) : smarty_modifier_crmMoney($_tmp)); ?>

              </td>
        <?php if (! empty ( $this->_tpl_vars['pricesetFieldsCount'] )): ?>
        <td>
    <?php echo $this->_tpl_vars['line']['participant_count']; ?>

              </td>
        <?php endif; ?>
             </tr>
            <?php endforeach; endif; unset($_from); ?>
           </table>
          </td>
         </tr>
        <?php endif; ?>
       <?php endforeach; endif; unset($_from); ?>
       <?php if (! empty ( $this->_tpl_vars['dataArray'] )): ?>
        <?php if (isset ( $this->_tpl_vars['totalAmount'] ) && isset ( $this->_tpl_vars['totalTaxAmount'] )): ?>
        <tr>
         <td <?php echo $this->_tpl_vars['labelStyle']; ?>
>
          <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Amount Before Tax:<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
         </td>
         <td <?php echo $this->_tpl_vars['valueStyle']; ?>
>
          <?php echo ((is_array($_tmp=$this->_tpl_vars['totalAmount']-$this->_tpl_vars['totalTaxAmount'])) ? $this->_run_mod_handler('crmMoney', true, $_tmp) : smarty_modifier_crmMoney($_tmp)); ?>

         </td>
        </tr>
        <?php endif; ?>
        <?php $_from = $this->_tpl_vars['dataArray']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['priceset'] => $this->_tpl_vars['value']):
?>
          <tr>
           <?php if ($this->_tpl_vars['priceset'] || $this->_tpl_vars['priceset'] == 0): ?>
            <td>&nbsp;<?php if (isset ( $this->_tpl_vars['taxTerm'] )): ?><?php echo $this->_tpl_vars['taxTerm']; ?>
<?php endif; ?> <?php echo ((is_array($_tmp=$this->_tpl_vars['priceset'])) ? $this->_run_mod_handler('string_format', true, $_tmp, "%.2f") : smarty_modifier_string_format($_tmp, "%.2f")); ?>
%</td>
            <td>&nbsp;<?php echo ((is_array($_tmp=$this->_tpl_vars['value'])) ? $this->_run_mod_handler('crmMoney', true, $_tmp, $this->_tpl_vars['currency']) : smarty_modifier_crmMoney($_tmp, $this->_tpl_vars['currency'])); ?>
</td>
           <?php else: ?>
            <td>&nbsp;<?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>No<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?> <?php if (isset ( $this->_tpl_vars['taxTerm'] )): ?><?php echo $this->_tpl_vars['taxTerm']; ?>
<?php endif; ?></td>
            <td>&nbsp;<?php echo ((is_array($_tmp=$this->_tpl_vars['value'])) ? $this->_run_mod_handler('crmMoney', true, $_tmp, $this->_tpl_vars['currency']) : smarty_modifier_crmMoney($_tmp, $this->_tpl_vars['currency'])); ?>
</td>
           <?php endif; ?>
          </tr>
        <?php endforeach; endif; unset($_from); ?>
       <?php endif; ?>
      <?php endif; ?>

      <?php if (! empty ( $this->_tpl_vars['amount'] ) && ! $this->_tpl_vars['lineItem']): ?>
       <?php $_from = $this->_tpl_vars['amount']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['level'] => $this->_tpl_vars['amnt']):
?>
        <tr>
         <td colspan="2" <?php echo $this->_tpl_vars['valueStyle']; ?>
>
          <?php echo ((is_array($_tmp=$this->_tpl_vars['amnt']['amount'])) ? $this->_run_mod_handler('crmMoney', true, $_tmp) : smarty_modifier_crmMoney($_tmp)); ?>
 <?php echo $this->_tpl_vars['amnt']['label']; ?>

         </td>
        </tr>
       <?php endforeach; endif; unset($_from); ?>
      <?php endif; ?>
      <?php if (isset ( $this->_tpl_vars['totalTaxAmount'] )): ?>
       <tr>
        <td <?php echo $this->_tpl_vars['labelStyle']; ?>
>
         <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Total Tax Amount<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
        </td>
        <td <?php echo $this->_tpl_vars['valueStyle']; ?>
>
         <?php echo ((is_array($_tmp=$this->_tpl_vars['totalTaxAmount'])) ? $this->_run_mod_handler('crmMoney', true, $_tmp, $this->_tpl_vars['currency']) : smarty_modifier_crmMoney($_tmp, $this->_tpl_vars['currency'])); ?>

        </td>
       </tr>
      <?php endif; ?>
      <?php if (! empty ( $this->_tpl_vars['isPrimary'] )): ?>
       <tr>
        <td <?php echo $this->_tpl_vars['labelStyle']; ?>
>
        <?php if (isset ( $this->_tpl_vars['balanceAmount'] )): ?>
           <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Total Paid<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
        <?php else: ?>
           <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Total Amount<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
         <?php endif; ?>
        </td>
        <td <?php echo $this->_tpl_vars['valueStyle']; ?>
>
         <?php if (! empty ( $this->_tpl_vars['totalAmount'] )): ?><?php echo ((is_array($_tmp=$this->_tpl_vars['totalAmount'])) ? $this->_run_mod_handler('crmMoney', true, $_tmp) : smarty_modifier_crmMoney($_tmp)); ?>
<?php endif; ?> <?php if (! empty ( $this->_tpl_vars['hookDiscount']['message'] )): ?>(<?php echo $this->_tpl_vars['hookDiscount']['message']; ?>
)<?php endif; ?>
        </td>
       </tr>
      <?php if (isset ( $this->_tpl_vars['balanceAmount'] )): ?>
       <tr>
        <td <?php echo $this->_tpl_vars['labelStyle']; ?>
>
         <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Balance<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
        </td>
        <td <?php echo $this->_tpl_vars['valueStyle']; ?>
>
         <?php echo ((is_array($_tmp=$this->_tpl_vars['balanceAmount'])) ? $this->_run_mod_handler('crmMoney', true, $_tmp) : smarty_modifier_crmMoney($_tmp)); ?>

        </td>
       </tr>
      <?php endif; ?>
       <?php if (! empty ( $this->_tpl_vars['pricesetFieldsCount'] )): ?>
     <tr>
       <td <?php echo $this->_tpl_vars['labelStyle']; ?>
>
   <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Total Participants<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></td>
       <td <?php echo $this->_tpl_vars['valueStyle']; ?>
>
   <?php $this->assign('count', 0); ?>
         <?php $_from = $this->_tpl_vars['lineItem']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['pcount']):
?>
         <?php $this->assign('lineItemCount', 0); ?>
         <?php if ($this->_tpl_vars['pcount'] != 'skip'): ?>
           <?php $_from = $this->_tpl_vars['pcount']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['p_count']):
?>
           <?php $this->assign('lineItemCount', $this->_tpl_vars['lineItemCount']+$this->_tpl_vars['p_count']['participant_count']); ?>
           <?php endforeach; endif; unset($_from); ?>
           <?php if ($this->_tpl_vars['lineItemCount'] < 1): ?>
           assign var="lineItemCount" value=1}
           <?php endif; ?>
           <?php $this->assign('count', $this->_tpl_vars['count']+$this->_tpl_vars['lineItemCount']); ?>
         <?php endif; ?>
         <?php endforeach; endif; unset($_from); ?>
   <?php echo $this->_tpl_vars['count']; ?>

       </td>
     </tr>
     <?php endif; ?>
       <?php if (! empty ( $this->_tpl_vars['is_pay_later'] )): ?>
        <tr>
         <td colspan="2" <?php echo $this->_tpl_vars['labelStyle']; ?>
>
          <?php if (isset ( $this->_tpl_vars['pay_later_receipt'] )): ?><?php echo $this->_tpl_vars['pay_later_receipt']; ?>
<?php endif; ?>
         </td>
        </tr>
       <?php endif; ?>

       <?php if ($this->_tpl_vars['register_date']): ?>
        <tr>
         <td <?php echo $this->_tpl_vars['labelStyle']; ?>
>
          <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Registration Date<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
         </td>
         <td <?php echo $this->_tpl_vars['valueStyle']; ?>
>
          <?php echo ((is_array($_tmp=$this->_tpl_vars['register_date'])) ? $this->_run_mod_handler('crmDate', true, $_tmp) : smarty_modifier_crmDate($_tmp)); ?>

         </td>
        </tr>
       <?php endif; ?>

       <?php if (! empty ( $this->_tpl_vars['receive_date'] )): ?>
        <tr>
         <td <?php echo $this->_tpl_vars['labelStyle']; ?>
>
          <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Transaction Date<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
         </td>
         <td <?php echo $this->_tpl_vars['valueStyle']; ?>
>
          <?php echo ((is_array($_tmp=$this->_tpl_vars['receive_date'])) ? $this->_run_mod_handler('crmDate', true, $_tmp) : smarty_modifier_crmDate($_tmp)); ?>

         </td>
        </tr>
       <?php endif; ?>

       <?php if (! empty ( $this->_tpl_vars['financialTypeName'] )): ?>
        <tr>
         <td <?php echo $this->_tpl_vars['labelStyle']; ?>
>
          <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Financial Type<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
         </td>
         <td <?php echo $this->_tpl_vars['valueStyle']; ?>
>
          <?php echo $this->_tpl_vars['financialTypeName']; ?>

         </td>
        </tr>
       <?php endif; ?>

       <?php if (! empty ( $this->_tpl_vars['trxn_id'] )): ?>
        <tr>
         <td <?php echo $this->_tpl_vars['labelStyle']; ?>
>
          <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Transaction #<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
         </td>
         <td <?php echo $this->_tpl_vars['valueStyle']; ?>
>
          <?php echo $this->_tpl_vars['trxn_id']; ?>

         </td>
        </tr>
       <?php endif; ?>

       <?php if (! empty ( $this->_tpl_vars['paidBy'] )): ?>
        <tr>
         <td <?php echo $this->_tpl_vars['labelStyle']; ?>
>
          <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Paid By<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
         </td>
         <td <?php echo $this->_tpl_vars['valueStyle']; ?>
>
         <?php echo $this->_tpl_vars['paidBy']; ?>

         </td>
        </tr>
       <?php endif; ?>

       <?php if (! empty ( $this->_tpl_vars['checkNumber'] )): ?>
        <tr>
         <td <?php echo $this->_tpl_vars['labelStyle']; ?>
>
          <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Check Number<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
         </td>
         <td <?php echo $this->_tpl_vars['valueStyle']; ?>
>
          <?php echo $this->_tpl_vars['checkNumber']; ?>

         </td>
        </tr>
       <?php endif; ?>

       <?php if (! empty ( $this->_tpl_vars['billingName'] )): ?>
        <tr>
         <th <?php echo $this->_tpl_vars['headerStyle']; ?>
>
          <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Billing Name and Address<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
         </th>
        </tr>
        <tr>
         <td colspan="2" <?php echo $this->_tpl_vars['valueStyle']; ?>
>
          <?php echo $this->_tpl_vars['billingName']; ?>
<br />
          <?php echo ((is_array($_tmp=$this->_tpl_vars['address'])) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>

         </td>
        </tr>
       <?php endif; ?>

       <?php if (! empty ( $this->_tpl_vars['credit_card_type'] )): ?>
        <tr>
         <th <?php echo $this->_tpl_vars['headerStyle']; ?>
>
          <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Credit Card Information<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
         </th>
        </tr>
        <tr>
         <td colspan="2" <?php echo $this->_tpl_vars['valueStyle']; ?>
>
          <?php echo $this->_tpl_vars['credit_card_type']; ?>
<br />
          <?php echo $this->_tpl_vars['credit_card_number']; ?>
<br />
          <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Expires<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>: <?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['credit_card_exp_date'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 7, '') : smarty_modifier_truncate($_tmp, 7, '')))) ? $this->_run_mod_handler('crmDate', true, $_tmp) : smarty_modifier_crmDate($_tmp)); ?>

         </td>
        </tr>
       <?php endif; ?>

      <?php endif; ?>

     <?php endif; ?> 
     <?php if (! empty ( $this->_tpl_vars['customPre'] )): ?>
      <tr>
       <th <?php echo $this->_tpl_vars['headerStyle']; ?>
>
        <?php echo $this->_tpl_vars['customPre_grouptitle']; ?>

       </th>
      </tr>
      <?php $_from = $this->_tpl_vars['customPre']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['customName'] => $this->_tpl_vars['value']):
?>
       <?php if (( ! empty ( $this->_tpl_vars['trackingFields'] ) && ! in_array ( $this->_tpl_vars['customName'] , $this->_tpl_vars['trackingFields'] ) ) || empty ( $this->_tpl_vars['trackingFields'] )): ?>
        <tr>
         <td <?php echo $this->_tpl_vars['labelStyle']; ?>
>
          <?php echo $this->_tpl_vars['customName']; ?>

         </td>
         <td <?php echo $this->_tpl_vars['valueStyle']; ?>
>
          <?php echo $this->_tpl_vars['value']; ?>

         </td>
        </tr>
       <?php endif; ?>
      <?php endforeach; endif; unset($_from); ?>
     <?php endif; ?>

     <?php if (! empty ( $this->_tpl_vars['customPost'] )): ?>
      <tr>
       <th <?php echo $this->_tpl_vars['headerStyle']; ?>
>
        <?php echo $this->_tpl_vars['customPost_grouptitle']; ?>

       </th>
      </tr>
      <?php $_from = $this->_tpl_vars['customPost']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['customName'] => $this->_tpl_vars['value']):
?>
       <?php if (( ! empty ( $this->_tpl_vars['trackingFields'] ) && ! in_array ( $this->_tpl_vars['customName'] , $this->_tpl_vars['trackingFields'] ) ) || empty ( $this->_tpl_vars['trackingFields'] )): ?>
        <tr>
         <td <?php echo $this->_tpl_vars['labelStyle']; ?>
>
          <?php echo $this->_tpl_vars['customName']; ?>

         </td>
         <td <?php echo $this->_tpl_vars['valueStyle']; ?>
>
          <?php echo $this->_tpl_vars['value']; ?>

         </td>
        </tr>
       <?php endif; ?>
      <?php endforeach; endif; unset($_from); ?>
     <?php endif; ?>

     <?php if (! empty ( $this->_tpl_vars['customProfile'] )): ?>
      <?php $_from = $this->_tpl_vars['customProfile']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['customName'] => $this->_tpl_vars['value']):
?>
       <tr>
        <th <?php echo $this->_tpl_vars['headerStyle']; ?>
>
         <?php $this->_tag_stack[] = array('ts', array('1' => $this->_tpl_vars['customName']+1)); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Participant Information - Participant %1<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
        </th>
       </tr>
       <?php $_from = $this->_tpl_vars['value']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['field'] => $this->_tpl_vars['val']):
?>
        <?php if ($this->_tpl_vars['field'] == 'additionalCustomPre' || $this->_tpl_vars['field'] == 'additionalCustomPost'): ?>
         <tr>
          <td colspan="2" <?php echo $this->_tpl_vars['labelStyle']; ?>
>
           <?php if ($this->_tpl_vars['field'] == 'additionalCustomPre'): ?>
            <?php echo $this->_tpl_vars['additionalCustomPre_grouptitle']; ?>

           <?php else: ?>
            <?php echo $this->_tpl_vars['additionalCustomPost_grouptitle']; ?>

           <?php endif; ?>
          </td>
         </tr>
         <?php $_from = $this->_tpl_vars['val']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['f'] => $this->_tpl_vars['v']):
?>
          <tr>
           <td <?php echo $this->_tpl_vars['labelStyle']; ?>
>
            <?php echo $this->_tpl_vars['f']; ?>

           </td>
           <td <?php echo $this->_tpl_vars['valueStyle']; ?>
>
            <?php echo $this->_tpl_vars['v']; ?>

           </td>
          </tr>
         <?php endforeach; endif; unset($_from); ?>
        <?php endif; ?>
       <?php endforeach; endif; unset($_from); ?>
      <?php endforeach; endif; unset($_from); ?>
     <?php endif; ?>

     <?php if (! empty ( $this->_tpl_vars['customGroup'] )): ?>
      <?php $_from = $this->_tpl_vars['customGroup']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['customName'] => $this->_tpl_vars['value']):
?>
       <tr>
        <th <?php echo $this->_tpl_vars['headerStyle']; ?>
>
         <?php echo $this->_tpl_vars['customName']; ?>

        </th>
       </tr>
       <?php $_from = $this->_tpl_vars['value']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['n'] => $this->_tpl_vars['v']):
?>
        <tr>
         <td <?php echo $this->_tpl_vars['labelStyle']; ?>
>
          <?php echo $this->_tpl_vars['n']; ?>

         </td>
         <td <?php echo $this->_tpl_vars['valueStyle']; ?>
>
          <?php echo $this->_tpl_vars['v']; ?>

         </td>
        </tr>
       <?php endforeach; endif; unset($_from); ?>
      <?php endforeach; endif; unset($_from); ?>
     <?php endif; ?>

    </table>
   </td>
  </tr>

 </table>
</center>

</body>
</html>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>