<?php /* Smarty version 2.6.31, created on 2021-09-02 15:22:38
         compiled from string:%7Bassign+var%3D%22greeting%22+value%3D%22Dear+Jim%22%7D%7Bif+%24greeting%7D%7B%24greeting%7D%2C%7B/if%7D%0A%7Bif+%21empty%28%24event.confirm_email_text%29+AND+%28empty%28%24isOnWaitlist%29+AND+empty%28%24isRequireApproval%29%29%7D%0A%7B%24event.confirm_email_text%7D%0A%7B/if%7D%0A%0A%7Bif+%21empty%28%24isOnWaitlist%29%7D%0A%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%7Bif+%21empty%28%24pricesetFieldsCount%29+%7D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%7B/if%7D%0A%0A%7Bts%7DYou+have+been+added+to+the+WAIT+LIST+for+this+event.%7B/ts%7D%0A%0A%7Bif+%21empty%28%24isPrimary%29%7D%0A%7Bts%7DIf+space+becomes+available+you+will+receive+an+email+with+a+link+to+a+web+page+where+you+can+complete+your+registration.%7B/ts%7D%0A%0A%7B/if%7D%0A%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%7Bif+%21empty%28%24pricesetFieldsCount%29+%7D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%7B/if%7D%0A%0A%7Belseif+%21empty%28%24isRequireApproval%29%7D%0A%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%7Bif+%21empty%28%24pricesetFieldsCount%29+%7D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%7B/if%7D%0A%0A%7Bts%7DYour+registration+has+been+submitted.%7B/ts%7D%0A%0A%7Bif+%21empty%28%24isPrimary%29%7D%0A%7Bts%7DOnce+your+registration+has+been+reviewed%2C+you+will+receive+an+email+with+a+link+to+a+web+page+where+you+can+complete+the+registration+process.%7B/ts%7D%0A%0A%7B/if%7D%0A%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%7Bif+%21empty%28%24pricesetFieldsCount%29+%7D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%7B/if%7D%0A%0A%7Belseif+%21empty%28%24is_pay_later%29%7D%0A%0A%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%7Bif+%21empty%28%24pricesetFieldsCount%29+%7D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%7B/if%7D%0A%0A%7Bif+isset%28%24pay_later_receipt%29%7D%7B%24pay_later_receipt%7D%7B/if%7D%0A%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%7Bif+%21empty%28%24pricesetFieldsCount%29+%7D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%7B/if%7D%0A%0A%7B/if%7D%0A%0A%0A%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%7Bif+%21empty%28%24pricesetFieldsCount%29+%7D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%7B/if%7D%0A%0A%7Bts%7DEvent+Information+and+Location%7B/ts%7D%0A%0A%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%7Bif+%21empty%28%24pricesetFieldsCount%29+%7D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%7B/if%7D%0A%0A%7B%24event.event_title%7D%0A%7B%24event.event_start_date%7CcrmDate%7D%7Bif+%24event.event_end_date%7D-%7Bif+%24event.event_end_date%7Cdate_format:%22%25Y%25m%25d%22+%3D%3D+%24event.event_start_date%7Cdate_format:%22%25Y%25m%25d%22%7D%7B%24event.event_end_date%7CcrmDate:0:1%7D%7Belse%7D%7B%24event.event_end_date%7CcrmDate%7D%7B/if%7D%7B/if%7D%0A%0A%7Bif+%21empty%28%24event.participant_role%29+and+%24event.participant_role+neq+%27Attendee%27+and+empty%28%24defaultRole%29%7D%0A%7Bts%7DParticipant+Role%7B/ts%7D:+%7B%24event.participant_role%7D%0A%7B/if%7D%0A%0A%7Bif+%21empty%28%24isShowLocation%29%7D%0A%7B%24location.address.1.display%7Cstrip_tags:false%7D%0A%7B/if%7D%7B%2AEnd+of+isShowLocation+condition%2A%7D%0A%0A%7Bif+%21empty%28%24location.phone.1.phone%29+%7C%7C+%21empty%28%24location.email.1.email%29%7D%0A%0A%7Bts%7DEvent+Contacts:%7B/ts%7D%0A%7Bforeach+from%3D%24location.phone+item%3Dphone%7D%0A%7Bif+%24phone.phone%7D%0A%0A%7Bif+%24phone.phone_type%7D%7B%24phone.phone_type_display%7D%7Belse%7D%7Bts%7DPhone%7B/ts%7D%7B/if%7D:+%7B%24phone.phone%7D%7B/if%7D+%7Bif+%24phone.phone_ext%7D+%7Bts%7Dext.%7B/ts%7D+%7B%24phone.phone_ext%7D%7B/if%7D%0A%7B/foreach%7D%0A%7Bforeach+from%3D%24location.email+item%3DeventEmail%7D%0A%7Bif+%24eventEmail.email%7D%0A%0A%7Bts%7DEmail%7B/ts%7D:+%7B%24eventEmail.email%7D%7B/if%7D%7B/foreach%7D%0A%7B/if%7D%0A%0A%7Bif+%21empty%28%24event.is_public%29%7D%0A%7Bcapture+assign%3DicalFeed%7D%7BcrmURL+p%3D%27civicrm/event/ical%27+q%3D%22reset%3D1%26id%3D%60%24event.id%60%22+h%3D0+a%3D1+fe%3D1%7D%7B/capture%7D%0A%7Bts%7DDownload+iCalendar+File:%7B/ts%7D+%7B%24icalFeed%7D%0A%7B/if%7D%0A%0A%7Bif+%21empty%28%24email%29%7D%0A%0A%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%7Bif+%21empty%28%24pricesetFieldsCount%29+%7D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%7B/if%7D%0A%0A%7Bts%7DRegistered+Email%7B/ts%7D%0A%0A%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%7Bif+%21empty%28%24pricesetFieldsCount%29+%7D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%7B/if%7D%0A%0A%7B%24email%7D%0A%7B/if%7D%0A%7Bif+%21empty%28%24event.is_monetary%29%7D+%7B%2A+This+section+for+Paid+events+only.%2A%7D%0A%0A%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%7Bif+%21empty%28%24pricesetFieldsCount%29+%7D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%7B/if%7D%0A%0A%7Bif+%21empty%28%24event.fee_label%29%7D%7B%24event.fee_label%7D%7B/if%7D%0A%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%7Bif+%21empty%28%24pricesetFieldsCount%29+%7D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%7B/if%7D%0A%0A%7Bif+%21empty%28%24lineItem%29%7D%7Bforeach+from%3D%24lineItem+item%3Dvalue+key%3Dpriceset%7D%0A%0A%7Bif+%24value+neq+%27skip%27%7D%0A%7Bif+%21empty%28%24isPrimary%29%7D%0A%7Bif+%24lineItem%7C%40count+GT+1%7D+%7B%2A+Header+for+multi+participant+registration+cases.+%2A%7D%0A%7Bts+1%3D%24priceset%2B1%7DParticipant+%251%7B/ts%7D%0A%7B/if%7D%0A%7B/if%7D%0A---------------------------------------------------------%7Bif+%21empty%28%24pricesetFieldsCount%29+%7D--------------------%7B/if%7D%0A%0A%7Bcapture+assign%3Dts_item%7D%7Bts%7DItem%7B/ts%7D%7B/capture%7D%0A%7Bcapture+assign%3Dts_qty%7D%7Bts%7DQty%7B/ts%7D%7B/capture%7D%0A%7Bcapture+assign%3Dts_each%7D%7Bts%7DEach%7B/ts%7D%7B/capture%7D%0A%7Bif+%21empty%28%24dataArray%29%7D%0A%7Bcapture+assign%3Dts_subtotal%7D%7Bts%7DSubtotal%7B/ts%7D%7B/capture%7D%0A%7Bcapture+assign%3Dts_taxRate%7D%7Bts%7DTax+Rate%7B/ts%7D%7B/capture%7D%0A%7Bcapture+assign%3Dts_taxAmount%7D%7Bts%7DTax+Amount%7B/ts%7D%7B/capture%7D%0A%7B/if%7D%0A%7Bcapture+assign%3Dts_total%7D%7Bts%7DTotal%7B/ts%7D%7B/capture%7D%0A%7Bcapture+assign%3Dts_participant_total%7D%7Bif+%21empty%28%24pricesetFieldsCount%29+%7D%7Bts%7DTotal+Participants%7B/ts%7D%7B/if%7D%7B/capture%7D%0A%7B%24ts_item%7Cstring_format:%22%25-30s%22%7D+%7B%24ts_qty%7Cstring_format:%22%255s%22%7D+%7B%24ts_each%7Cstring_format:%22%2510s%22%7D+%7Bif+%21empty%28%24dataArray%29%7D+%7B%24ts_subtotal%7Cstring_format:%22%2510s%22%7D+%7B%24ts_taxRate%7Cstring_format:%22%2510s%22%7D+%7B%24ts_taxAmount%7Cstring_format:%22%2510s%22%7D+%7B/if%7D+%7B%24ts_total%7Cstring_format:%22%2510s%22%7D+%7Bif+%21empty%28%24ts_participant_total%29%7D%7B%24ts_participant_total%7Cstring_format:%22%2510s%22%7D%7B/if%7D%0A----------------------------------------------------------%7Bif+%21empty%28%24pricesetFieldsCount%29+%7D--------------------%7B/if%7D%0A%0A%7Bforeach+from%3D%24value+item%3Dline%7D%0A%7Bif+%21empty%28%24pricesetFieldsCount%29+%7D%7Bcapture+assign%3Dts_participant_count%7D%7B%24line.participant_count%7D%7B/capture%7D%7B/if%7D%0A%7Bcapture+assign%3Dts_item%7D%7Bif+%24line.html_type+eq+%27Text%27%7D%7B%24line.label%7D%7Belse%7D%7B%24line.field_title%7D+-+%7B%24line.label%7D%7B/if%7D+%7Bif+%24line.description%7D+%7B%24line.description%7D%7B/if%7D%7B/capture%7D%7B%24ts_item%7Ctruncate:30:%22...%22%7Cstring_format:%22%25-30s%22%7D+%7B%24line.qty%7Cstring_format:%22%255s%22%7D+%7B%24line.unit_price%7CcrmMoney%7Cstring_format:%22%2510s%22%7D+%7Bif+%21empty%28%24dataArray%29%7D+%7B%24line.unit_price%2A%24line.qty%7CcrmMoney:%24currency%7Cstring_format:%22%2510s%22%7D+%7Bif+isset%28%24line.tax_rate%29+and+%28%24line.tax_rate+%21%3D+%22%22+%7C%7C+%24line.tax_amount+%21%3D+%22%22%29%7D++%7B%24line.tax_rate%7Cstring_format:%22%25.2f%22%7D+%25++%7B%24line.tax_amount%7CcrmMoney:%24currency%7Cstring_format:%22%2510s%22%7D+%7Belse%7D++++++++++++++++++%7B/if%7D++%7B/if%7D++%7B%24line.line_total%2B%24line.tax_amount%7CcrmMoney%7Cstring_format:%22%2510s%22%7D+%7Bif+%21empty%28%24ts_participant_count%29%7D%7B%24ts_participant_count%7Cstring_format:%22%2510s%22%7D%7B/if%7D%0A%7B/foreach%7D%0A%7B/if%7D%0A%7B/foreach%7D%0A%0A%7Bif+%21empty%28%24dataArray%29%7D%0A%7Bif+isset%28%24totalAmount%29+and+isset%28%24totalTaxAmount%29%7D%0A%7Bts%7DAmount+before+Tax%7B/ts%7D:+%7B%24totalAmount-%24totalTaxAmount%7CcrmMoney:%24currency%7D%0A%7B/if%7D%0A%0A%7Bforeach+from%3D%24dataArray+item%3Dvalue+key%3Dpriceset%7D%0A%7Bif+%24priceset+%7C%7C+%24priceset+%3D%3D+0%7D%0A%7Bif+isset%28%24taxTerm%29%7D%7B%24taxTerm%7D%7B/if%7D+%7B%24priceset%7Cstring_format:%22%25.2f%22%7D%25:+%7B%24value%7CcrmMoney:%24currency%7D%0A%7Belse%7D%0A%7Bts%7DNo%7B/ts%7D+%7Bif+isset%28%24taxTerm%29%7D%7B%24taxTerm%7D%7B/if%7D:+%7B%24value%7CcrmMoney:%24currency%7D%0A%7B/if%7D%0A%7B/foreach%7D%0A%7B/if%7D%0A%7B/if%7D%0A%0A%7Bif+%21empty%28%24amount%29+%26%26+%21%24lineItem%7D%0A%7Bforeach+from%3D%24amount+item%3Damnt+key%3Dlevel%7D%7B%24amnt.amount%7CcrmMoney%7D+%7B%24amnt.label%7D%0A%7B/foreach%7D%0A%7B/if%7D%0A%0A%7Bif+isset%28%24totalTaxAmount%29%7D%0A%7Bts%7DTotal+Tax+Amount%7B/ts%7D:+%7B%24totalTaxAmount%7CcrmMoney:%24currency%7D%0A%7B/if%7D%0A%7Bif+%21empty%28%24isPrimary%29%7D%0A%0A%7Bif+%21empty%28%24balanceAmount%29%7D%7Bts%7DTotal+Paid%7B/ts%7D%7Belse%7D%7Bts%7DTotal+Amount%7B/ts%7D%7B/if%7D:+%7Bif+%21empty%28%24totalAmount%29%7D%7B%24totalAmount%7CcrmMoney%7D%7B/if%7D+%7Bif+%21empty%28%24hookDiscount.message%29%7D%28%7B%24hookDiscount.message%7D%29%7B/if%7D%0A%0A%7Bif+%21empty%28%24balanceAmount%29%7D%0A%7Bts%7DBalance%7B/ts%7D:+%7B%24balanceAmount%7CcrmMoney%7D%0A%7B/if%7D%0A%0A%7Bif+%21empty%28%24pricesetFieldsCount%29+%7D%0A++++++%7Bassign+var%3D%22count%22+value%3D+0%7D%0A++++++%7Bforeach+from%3D%24lineItem+item%3Dpcount%7D%0A++++++%7Bassign+var%3D%22lineItemCount%22+value%3D0%7D%0A++++++%7Bif+%24pcount+neq+%27skip%27%7D%0A++++++++%7Bforeach+from%3D%24pcount+item%3Dp_count%7D%0A++++++++%7Bassign+var%3D%22lineItemCount%22+value%3D%24lineItemCount%2B%24p_count.participant_count%7D%0A++++++++%7B/foreach%7D%0A++++++++%7Bif+%24lineItemCount+%3C+1+%7D%0A++++++++%7Bassign+var%3D%22lineItemCount%22+value%3D1%7D%0A++++++++%7B/if%7D%0A++++++%7Bassign+var%3D%22count%22+value%3D%24count%2B%24lineItemCount%7D%0A++++++%7B/if%7D%0A++++++%7B/foreach%7D%0A%0A%7Bts%7DTotal+Participants%7B/ts%7D:+%7B%24count%7D%0A%7B/if%7D%0A%0A%7Bif+%21empty%28%24is_pay_later%29+%7D%0A%0A%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%7Bif+%21empty%28%24pricesetFieldsCount%29+%7D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%7B/if%7D%0A%0A%7B%24pay_later_receipt%7D%0A%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%7Bif+%21empty%28%24pricesetFieldsCount%29+%7D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%7B/if%7D%0A%0A%7B/if%7D%0A%0A%7Bif+%24register_date%7D%0A%7Bts%7DRegistration+Date%7B/ts%7D:+%7B%24register_date%7CcrmDate%7D%0A%7B/if%7D%0A%7Bif+%24receive_date%7D%0A%7Bts%7DTransaction+Date%7B/ts%7D:+%7B%24receive_date%7CcrmDate%7D%0A%7B/if%7D%0A%7Bif+%21empty%28%24financialTypeName%29%7D%0A%7Bts%7DFinancial+Type%7B/ts%7D:+%7B%24financialTypeName%7D%0A%7B/if%7D%0A%7Bif+%21empty%28%24trxn_id%29%7D%0A%7Bts%7DTransaction+%23%7B/ts%7D:+%7B%24trxn_id%7D%0A%7B/if%7D%0A%7Bif+%21empty%28%24paidBy%29%7D%0A%7Bts%7DPaid+By%7B/ts%7D:+%7B%24paidBy%7D%0A%7B/if%7D%0A%7Bif+%21empty%28%24checkNumber%29%7D%0A%7Bts%7DCheck+Number%7B/ts%7D:+%7B%24checkNumber%7D%0A%7B/if%7D%0A%7Bif+%21empty%28%24billingName%29%7D%0A%0A%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%7Bif+%21empty%28%24pricesetFieldsCount%29+%7D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%7B/if%7D%0A%0A%7Bts%7DBilling+Name+and+Address%7B/ts%7D%0A%0A%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%7Bif+%21empty%28%24pricesetFieldsCount%29+%7D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%7B/if%7D%0A%0A%7B%24billingName%7D%0A%7B%24address%7D%0A%7B/if%7D%0A%0A%7Bif+%21empty%28%24credit_card_type%29%7D%0A%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%0A%7Bts%7DCredit+Card+Information%7B/ts%7D%0A%0A%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%7Bif+%21empty%28%24pricesetFieldsCount%29+%7D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%7B/if%7D%0A%0A%7B%24credit_card_type%7D%0A%7B%24credit_card_number%7D%0A%7Bts%7DExpires%7B/ts%7D:+%7B%24credit_card_exp_date%7Ctruncate:7:%27%27%7CcrmDate%7D%0A%7B/if%7D%0A%7B/if%7D%0A%7B/if%7D+%7B%2A+End+of+conditional+section+for+Paid+events+%2A%7D%0A%0A%7Bif+%21empty%28%24customPre%29%7D%0A%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%7Bif+%21empty%28%24pricesetFieldsCount%29+%7D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%7B/if%7D%0A%0A%7B%24customPre_grouptitle%7D%0A%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%7Bif+%21empty%28%24pricesetFieldsCount%29+%7D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%7B/if%7D%0A%0A%7Bforeach+from%3D%24customPre+item%3Dvalue+key%3DcustomName%7D%0A%7Bif+%28+%21empty%28%24trackingFields%29+and+%21+in_array%28+%24customName%2C+%24trackingFields+%29+%29+or+empty%28%24trackingFields%29%7D%0A%7B%24customName%7D:+%7B%24value%7D%0A%7B/if%7D%0A%7B/foreach%7D%0A%7B/if%7D%0A%0A%7Bif+%21empty%28%24customPost%29%7D%0A%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%7Bif+%21empty%28%24pricesetFieldsCount%29+%7D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%7B/if%7D%0A%0A%7B%24customPost_grouptitle%7D%0A%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%7Bif+%21empty%28%24pricesetFieldsCount%29+%7D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%7B/if%7D%0A%0A%7Bforeach+from%3D%24customPost+item%3Dvalue+key%3DcustomName%7D%0A%7Bif+%28+%21empty%28%24trackingFields%29+and+%21+in_array%28+%24customName%2C+%24trackingFields+%29+%29+or+empty%28%24trackingFields%29%7D%0A%7B%24customName%7D:+%7B%24value%7D%0A%7B/if%7D%0A%7B/foreach%7D%0A%7B/if%7D%0A%7Bif+%21empty%28%24customProfile%29%7D%0A%0A%7Bforeach+from%3D%24customProfile+item%3Dvalue+key%3DcustomName%7D%0A%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%7Bif+%21empty%28%24pricesetFieldsCount%29+%7D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%7B/if%7D%0A%0A%7Bts+1%3D%24customName%2B1%7DParticipant+Information+-+Participant+%251%7B/ts%7D%0A%0A%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%7Bif+%21empty%28%24pricesetFieldsCount%29+%7D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%7B/if%7D%0A%0A%7Bforeach+from%3D%24value+item%3Dval+key%3Dfield%7D%0A%7Bif+%24field+eq+%27additionalCustomPre%27+or+%24field+eq+%27additionalCustomPost%27+%7D%0A%7Bif+%24field+eq+%27additionalCustomPre%27+%7D%0A----------------------------------------------------------%7Bif+%21empty%28%24pricesetFieldsCount%29+%7D--------------------%7B/if%7D%0A%0A%7B%24additionalCustomPre_grouptitle%7D%0A----------------------------------------------------------%7Bif+%21empty%28%24pricesetFieldsCount%29+%7D--------------------%7B/if%7D%0A%0A%7Belse%7D%0A----------------------------------------------------------%7Bif+%21empty%28%24pricesetFieldsCount%29+%7D--------------------%7B/if%7D%0A%0A%7B%24additionalCustomPost_grouptitle%7D%0A----------------------------------------------------------%7Bif+%21empty%28%24pricesetFieldsCount%29+%7D--------------------%7B/if%7D%0A%0A%7B/if%7D%0A%7Bforeach+from%3D%24val+item%3Dv+key%3Df%7D%0A%7B%24f%7D:+%7B%24v%7D%0A%7B/foreach%7D%0A%7B/if%7D%0A%7B/foreach%7D%0A%7B/foreach%7D%0A%7B/if%7D%0A%7Bif+%21empty%28%24customGroup%29%7D%0A%7Bforeach+from%3D%24customGroup+item%3Dvalue+key%3DcustomName%7D%0A%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%7Bif+%21empty%28%24pricesetFieldsCount%29+%7D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%7B/if%7D%0A%0A%7B%24customName%7D%0A%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%7Bif+%21empty%28%24pricesetFieldsCount%29+%7D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%3D%7B/if%7D%0A%0A%7Bforeach+from%3D%24value+item%3Dv+key%3Dn%7D%0A%7B%24n%7D:+%7B%24v%7D%0A%7B/foreach%7D%0A%7B/foreach%7D%0A%7B/if%7D%0A%0A%0A */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'crmScope', 'string:{assign var="greeting" value="Dear Jim"}{if $greeting}{$greeting},{/if}
{if !empty($event.confirm_email_text) AND (empty($isOnWaitlist) AND empty($isRequireApproval))}
{$event.confirm_email_text}
{/if}

{if !empty($isOnWaitlist)}
==========================================================={if !empty($pricesetFieldsCount) }===================={/if}

{ts}You have been added to the WAIT LIST for this event.{/ts}

{if !empty($isPrimary)}
{ts}If space becomes available you will receive an email with a link to a web page where you can complete your registration.{/ts}

{/if}
==========================================================={if !empty($pricesetFieldsCount) }===================={/if}

{elseif !empty($isRequireApproval)}
==========================================================={if !empty($pricesetFieldsCount) }===================={/if}

{ts}Your registration has been submitted.{/ts}

{if !empty($isPrimary)}
{ts}Once your registration has been reviewed, you will receive an email with a link to a web page where you can complete the registration process.{/ts}

{/if}
==========================================================={if !empty($pricesetFieldsCount) }===================={/if}

{elseif !empty($is_pay_later)}

==========================================================={if !empty($pricesetFieldsCount) }===================={/if}

{if isset($pay_later_receipt)}{$pay_later_receipt}{/if}
==========================================================={if !empty($pricesetFieldsCount) }===================={/if}

{/if}


==========================================================={if !empty($pricesetFieldsCount) }===================={/if}

{ts}Event Information and Location{/ts}

==========================================================={if !empty($pricesetFieldsCount) }===================={/if}

{$event.event_title}
{$event.event_start_date|crmDate}{if $event.event_end_date}-{if $event.event_end_date|date_format:"%Y%m%d" == $event.event_start_date|date_format:"%Y%m%d"}{$event.event_end_date|crmDate:0:1}{else}{$event.event_end_date|crmDate}{/if}{/if}

{if !empty($event.participant_role) and $event.participant_role neq \'Attendee\' and empty($defaultRole)}
{ts}Participant Role{/ts}: {$event.participant_role}
{/if}

{if !empty($isShowLocation)}
{$location.address.1.display|strip_tags:false}
{/if}{*End of isShowLocation condition*}

{if !empty($location.phone.1.phone) || !empty($location.email.1.email)}

{ts}Event Contacts:{/ts}
{foreach from=$location.phone item=phone}
{if $phone.phone}

{if $phone.phone_type}{$phone.phone_type_display}{else}{ts}Phone{/ts}{/if}: {$phone.phone}{/if} {if $phone.phone_ext} {ts}ext.{/ts} {$phone.phone_ext}{/if}
{/foreach}
{foreach from=$location.email item=eventEmail}
{if $eventEmail.email}

{ts}Email{/ts}: {$eventEmail.email}{/if}{/foreach}
{/if}

{if !empty($event.is_public)}
{capture assign=icalFeed}{crmURL p=\'civicrm/event/ical\' q="reset=1&id=`$event.id`" h=0 a=1 fe=1}{/capture}
{ts}Download iCalendar File:{/ts} {$icalFeed}
{/if}

{if !empty($email)}

==========================================================={if !empty($pricesetFieldsCount) }===================={/if}

{ts}Registered Email{/ts}

==========================================================={if !empty($pricesetFieldsCount) }===================={/if}

{$email}
{/if}
{if !empty($event.is_monetary)} {* This section for Paid events only.*}

==========================================================={if !empty($pricesetFieldsCount) }===================={/if}

{if !empty($event.fee_label)}{$event.fee_label}{/if}
==========================================================={if !empty($pricesetFieldsCount) }===================={/if}

{if !empty($lineItem)}{foreach from=$lineItem item=value key=priceset}

{if $value neq \'skip\'}
{if !empty($isPrimary)}
{if $lineItem|@count GT 1} {* Header for multi participant registration cases. *}
{ts 1=$priceset+1}Participant %1{/ts}
{/if}
{/if}
---------------------------------------------------------{if !empty($pricesetFieldsCount) }--------------------{/if}

{capture assign=ts_item}{ts}Item{/ts}{/capture}
{capture assign=ts_qty}{ts}Qty{/ts}{/capture}
{capture assign=ts_each}{ts}Each{/ts}{/capture}
{if !empty($dataArray)}
{capture assign=ts_subtotal}{ts}Subtotal{/ts}{/capture}
{capture assign=ts_taxRate}{ts}Tax Rate{/ts}{/capture}
{capture assign=ts_taxAmount}{ts}Tax Amount{/ts}{/capture}
{/if}
{capture assign=ts_total}{ts}Total{/ts}{/capture}
{capture assign=ts_participant_total}{if !empty($pricesetFieldsCount) }{ts}Total Participants{/ts}{/if}{/capture}
{$ts_item|string_format:"%-30s"} {$ts_qty|string_format:"%5s"} {$ts_each|string_format:"%10s"} {if !empty($dataArray)} {$ts_subtotal|string_format:"%10s"} {$ts_taxRate|string_format:"%10s"} {$ts_taxAmount|string_format:"%10s"} {/if} {$ts_total|string_format:"%10s"} {if !empty($ts_participant_total)}{$ts_participant_total|string_format:"%10s"}{/if}
----------------------------------------------------------{if !empty($pricesetFieldsCount) }--------------------{/if}

{foreach from=$value item=line}
{if !empty($pricesetFieldsCount) }{capture assign=ts_participant_count}{$line.participant_count}{/capture}{/if}
{capture assign=ts_item}{if $line.html_type eq \'Text\'}{$line.label}{else}{$line.field_title} - {$line.label}{/if} {if $line.description} {$line.description}{/if}{/capture}{$ts_item|truncate:30:"..."|string_format:"%-30s"} {$line.qty|string_format:"%5s"} {$line.unit_price|crmMoney|string_format:"%10s"} {if !empty($dataArray)} {$line.unit_price*$line.qty|crmMoney:$currency|string_format:"%10s"} {if isset($line.tax_rate) and ($line.tax_rate != "" || $line.tax_amount != "")}  {$line.tax_rate|string_format:"%.2f"} %  {$line.tax_amount|crmMoney:$currency|string_format:"%10s"} {else}                  {/if}  {/if}  {$line.line_total+$line.tax_amount|crmMoney|string_format:"%10s"} {if !empty($ts_participant_count)}{$ts_participant_count|string_format:"%10s"}{/if}
{/foreach}
{/if}
{/foreach}

{if !empty($dataArray)}
{if isset($totalAmount) and isset($totalTaxAmount)}
{ts}Amount before Tax{/ts}: {$totalAmount-$totalTaxAmount|crmMoney:$currency}
{/if}

{foreach from=$dataArray item=value key=priceset}
{if $priceset || $priceset == 0}
{if isset($taxTerm)}{$taxTerm}{/if} {$priceset|string_format:"%.2f"}%: {$value|crmMoney:$currency}
{else}
{ts}No{/ts} {if isset($taxTerm)}{$taxTerm}{/if}: {$value|crmMoney:$currency}
{/if}
{/foreach}
{/if}
{/if}

{if !empty($amount) && !$lineItem}
{foreach from=$amount item=amnt key=level}{$amnt.amount|crmMoney} {$amnt.label}
{/foreach}
{/if}

{if isset($totalTaxAmount)}
{ts}Total Tax Amount{/ts}: {$totalTaxAmount|crmMoney:$currency}
{/if}
{if !empty($isPrimary)}

{if !empty($balanceAmount)}{ts}Total Paid{/ts}{else}{ts}Total Amount{/ts}{/if}: {if !empty($totalAmount)}{$totalAmount|crmMoney}{/if} {if !empty($hookDiscount.message)}({$hookDiscount.message}){/if}

{if !empty($balanceAmount)}
{ts}Balance{/ts}: {$balanceAmount|crmMoney}
{/if}

{if !empty($pricesetFieldsCount) }
      {assign var="count" value= 0}
      {foreach from=$lineItem item=pcount}
      {assign var="lineItemCount" value=0}
      {if $pcount neq \'skip\'}
        {foreach from=$pcount item=p_count}
        {assign var="lineItemCount" value=$lineItemCount+$p_count.participant_count}
        {/foreach}
        {if $lineItemCount < 1 }
        {assign var="lineItemCount" value=1}
        {/if}
      {assign var="count" value=$count+$lineItemCount}
      {/if}
      {/foreach}

{ts}Total Participants{/ts}: {$count}
{/if}

{if !empty($is_pay_later) }

==========================================================={if !empty($pricesetFieldsCount) }===================={/if}

{$pay_later_receipt}
==========================================================={if !empty($pricesetFieldsCount) }===================={/if}

{/if}

{if $register_date}
{ts}Registration Date{/ts}: {$register_date|crmDate}
{/if}
{if $receive_date}
{ts}Transaction Date{/ts}: {$receive_date|crmDate}
{/if}
{if !empty($financialTypeName)}
{ts}Financial Type{/ts}: {$financialTypeName}
{/if}
{if !empty($trxn_id)}
{ts}Transaction #{/ts}: {$trxn_id}
{/if}
{if !empty($paidBy)}
{ts}Paid By{/ts}: {$paidBy}
{/if}
{if !empty($checkNumber)}
{ts}Check Number{/ts}: {$checkNumber}
{/if}
{if !empty($billingName)}

==========================================================={if !empty($pricesetFieldsCount) }===================={/if}

{ts}Billing Name and Address{/ts}

==========================================================={if !empty($pricesetFieldsCount) }===================={/if}

{$billingName}
{$address}
{/if}

{if !empty($credit_card_type)}
===========================================================
{ts}Credit Card Information{/ts}

==========================================================={if !empty($pricesetFieldsCount) }===================={/if}

{$credit_card_type}
{$credit_card_number}
{ts}Expires{/ts}: {$credit_card_exp_date|truncate:7:\'\'|crmDate}
{/if}
{/if}
{/if} {* End of conditional section for Paid events *}

{if !empty($customPre)}
==========================================================={if !empty($pricesetFieldsCount) }===================={/if}

{$customPre_grouptitle}
==========================================================={if !empty($pricesetFieldsCount) }===================={/if}

{foreach from=$customPre item=value key=customName}
{if ( !empty($trackingFields) and ! in_array( $customName, $trackingFields ) ) or empty($trackingFields)}
{$customName}: {$value}
{/if}
{/foreach}
{/if}

{if !empty($customPost)}
==========================================================={if !empty($pricesetFieldsCount) }===================={/if}

{$customPost_grouptitle}
==========================================================={if !empty($pricesetFieldsCount) }===================={/if}

{foreach from=$customPost item=value key=customName}
{if ( !empty($trackingFields) and ! in_array( $customName, $trackingFields ) ) or empty($trackingFields)}
{$customName}: {$value}
{/if}
{/foreach}
{/if}
{if !empty($customProfile)}

{foreach from=$customProfile item=value key=customName}
==========================================================={if !empty($pricesetFieldsCount) }===================={/if}

{ts 1=$customName+1}Participant Information - Participant %1{/ts}

==========================================================={if !empty($pricesetFieldsCount) }===================={/if}

{foreach from=$value item=val key=field}
{if $field eq \'additionalCustomPre\' or $field eq \'additionalCustomPost\' }
{if $field eq \'additionalCustomPre\' }
----------------------------------------------------------{if !empty($pricesetFieldsCount) }--------------------{/if}

{$additionalCustomPre_grouptitle}
----------------------------------------------------------{if !empty($pricesetFieldsCount) }--------------------{/if}

{else}
----------------------------------------------------------{if !empty($pricesetFieldsCount) }--------------------{/if}

{$additionalCustomPost_grouptitle}
----------------------------------------------------------{if !empty($pricesetFieldsCount) }--------------------{/if}

{/if}
{foreach from=$val item=v key=f}
{$f}: {$v}
{/foreach}
{/if}
{/foreach}
{/foreach}
{/if}
{if !empty($customGroup)}
{foreach from=$customGroup item=value key=customName}
=========================================================={if !empty($pricesetFieldsCount) }===================={/if}

{$customName}
=========================================================={if !empty($pricesetFieldsCount) }===================={/if}

{foreach from=$value item=v key=n}
{$n}: {$v}
{/foreach}
{/foreach}
{/if}


', 1, false),array('block', 'ts', 'string:{assign var="greeting" value="Dear Jim"}{if $greeting}{$greeting},{/if}
{if !empty($event.confirm_email_text) AND (empty($isOnWaitlist) AND empty($isRequireApproval))}
{$event.confirm_email_text}
{/if}

{if !empty($isOnWaitlist)}
==========================================================={if !empty($pricesetFieldsCount) }===================={/if}

{ts}You have been added to the WAIT LIST for this event.{/ts}

{if !empty($isPrimary)}
{ts}If space becomes available you will receive an email with a link to a web page where you can complete your registration.{/ts}

{/if}
==========================================================={if !empty($pricesetFieldsCount) }===================={/if}

{elseif !empty($isRequireApproval)}
==========================================================={if !empty($pricesetFieldsCount) }===================={/if}

{ts}Your registration has been submitted.{/ts}

{if !empty($isPrimary)}
{ts}Once your registration has been reviewed, you will receive an email with a link to a web page where you can complete the registration process.{/ts}

{/if}
==========================================================={if !empty($pricesetFieldsCount) }===================={/if}

{elseif !empty($is_pay_later)}

==========================================================={if !empty($pricesetFieldsCount) }===================={/if}

{if isset($pay_later_receipt)}{$pay_later_receipt}{/if}
==========================================================={if !empty($pricesetFieldsCount) }===================={/if}

{/if}


==========================================================={if !empty($pricesetFieldsCount) }===================={/if}

{ts}Event Information and Location{/ts}

==========================================================={if !empty($pricesetFieldsCount) }===================={/if}

{$event.event_title}
{$event.event_start_date|crmDate}{if $event.event_end_date}-{if $event.event_end_date|date_format:"%Y%m%d" == $event.event_start_date|date_format:"%Y%m%d"}{$event.event_end_date|crmDate:0:1}{else}{$event.event_end_date|crmDate}{/if}{/if}

{if !empty($event.participant_role) and $event.participant_role neq \'Attendee\' and empty($defaultRole)}
{ts}Participant Role{/ts}: {$event.participant_role}
{/if}

{if !empty($isShowLocation)}
{$location.address.1.display|strip_tags:false}
{/if}{*End of isShowLocation condition*}

{if !empty($location.phone.1.phone) || !empty($location.email.1.email)}

{ts}Event Contacts:{/ts}
{foreach from=$location.phone item=phone}
{if $phone.phone}

{if $phone.phone_type}{$phone.phone_type_display}{else}{ts}Phone{/ts}{/if}: {$phone.phone}{/if} {if $phone.phone_ext} {ts}ext.{/ts} {$phone.phone_ext}{/if}
{/foreach}
{foreach from=$location.email item=eventEmail}
{if $eventEmail.email}

{ts}Email{/ts}: {$eventEmail.email}{/if}{/foreach}
{/if}

{if !empty($event.is_public)}
{capture assign=icalFeed}{crmURL p=\'civicrm/event/ical\' q="reset=1&id=`$event.id`" h=0 a=1 fe=1}{/capture}
{ts}Download iCalendar File:{/ts} {$icalFeed}
{/if}

{if !empty($email)}

==========================================================={if !empty($pricesetFieldsCount) }===================={/if}

{ts}Registered Email{/ts}

==========================================================={if !empty($pricesetFieldsCount) }===================={/if}

{$email}
{/if}
{if !empty($event.is_monetary)} {* This section for Paid events only.*}

==========================================================={if !empty($pricesetFieldsCount) }===================={/if}

{if !empty($event.fee_label)}{$event.fee_label}{/if}
==========================================================={if !empty($pricesetFieldsCount) }===================={/if}

{if !empty($lineItem)}{foreach from=$lineItem item=value key=priceset}

{if $value neq \'skip\'}
{if !empty($isPrimary)}
{if $lineItem|@count GT 1} {* Header for multi participant registration cases. *}
{ts 1=$priceset+1}Participant %1{/ts}
{/if}
{/if}
---------------------------------------------------------{if !empty($pricesetFieldsCount) }--------------------{/if}

{capture assign=ts_item}{ts}Item{/ts}{/capture}
{capture assign=ts_qty}{ts}Qty{/ts}{/capture}
{capture assign=ts_each}{ts}Each{/ts}{/capture}
{if !empty($dataArray)}
{capture assign=ts_subtotal}{ts}Subtotal{/ts}{/capture}
{capture assign=ts_taxRate}{ts}Tax Rate{/ts}{/capture}
{capture assign=ts_taxAmount}{ts}Tax Amount{/ts}{/capture}
{/if}
{capture assign=ts_total}{ts}Total{/ts}{/capture}
{capture assign=ts_participant_total}{if !empty($pricesetFieldsCount) }{ts}Total Participants{/ts}{/if}{/capture}
{$ts_item|string_format:"%-30s"} {$ts_qty|string_format:"%5s"} {$ts_each|string_format:"%10s"} {if !empty($dataArray)} {$ts_subtotal|string_format:"%10s"} {$ts_taxRate|string_format:"%10s"} {$ts_taxAmount|string_format:"%10s"} {/if} {$ts_total|string_format:"%10s"} {if !empty($ts_participant_total)}{$ts_participant_total|string_format:"%10s"}{/if}
----------------------------------------------------------{if !empty($pricesetFieldsCount) }--------------------{/if}

{foreach from=$value item=line}
{if !empty($pricesetFieldsCount) }{capture assign=ts_participant_count}{$line.participant_count}{/capture}{/if}
{capture assign=ts_item}{if $line.html_type eq \'Text\'}{$line.label}{else}{$line.field_title} - {$line.label}{/if} {if $line.description} {$line.description}{/if}{/capture}{$ts_item|truncate:30:"..."|string_format:"%-30s"} {$line.qty|string_format:"%5s"} {$line.unit_price|crmMoney|string_format:"%10s"} {if !empty($dataArray)} {$line.unit_price*$line.qty|crmMoney:$currency|string_format:"%10s"} {if isset($line.tax_rate) and ($line.tax_rate != "" || $line.tax_amount != "")}  {$line.tax_rate|string_format:"%.2f"} %  {$line.tax_amount|crmMoney:$currency|string_format:"%10s"} {else}                  {/if}  {/if}  {$line.line_total+$line.tax_amount|crmMoney|string_format:"%10s"} {if !empty($ts_participant_count)}{$ts_participant_count|string_format:"%10s"}{/if}
{/foreach}
{/if}
{/foreach}

{if !empty($dataArray)}
{if isset($totalAmount) and isset($totalTaxAmount)}
{ts}Amount before Tax{/ts}: {$totalAmount-$totalTaxAmount|crmMoney:$currency}
{/if}

{foreach from=$dataArray item=value key=priceset}
{if $priceset || $priceset == 0}
{if isset($taxTerm)}{$taxTerm}{/if} {$priceset|string_format:"%.2f"}%: {$value|crmMoney:$currency}
{else}
{ts}No{/ts} {if isset($taxTerm)}{$taxTerm}{/if}: {$value|crmMoney:$currency}
{/if}
{/foreach}
{/if}
{/if}

{if !empty($amount) && !$lineItem}
{foreach from=$amount item=amnt key=level}{$amnt.amount|crmMoney} {$amnt.label}
{/foreach}
{/if}

{if isset($totalTaxAmount)}
{ts}Total Tax Amount{/ts}: {$totalTaxAmount|crmMoney:$currency}
{/if}
{if !empty($isPrimary)}

{if !empty($balanceAmount)}{ts}Total Paid{/ts}{else}{ts}Total Amount{/ts}{/if}: {if !empty($totalAmount)}{$totalAmount|crmMoney}{/if} {if !empty($hookDiscount.message)}({$hookDiscount.message}){/if}

{if !empty($balanceAmount)}
{ts}Balance{/ts}: {$balanceAmount|crmMoney}
{/if}

{if !empty($pricesetFieldsCount) }
      {assign var="count" value= 0}
      {foreach from=$lineItem item=pcount}
      {assign var="lineItemCount" value=0}
      {if $pcount neq \'skip\'}
        {foreach from=$pcount item=p_count}
        {assign var="lineItemCount" value=$lineItemCount+$p_count.participant_count}
        {/foreach}
        {if $lineItemCount < 1 }
        {assign var="lineItemCount" value=1}
        {/if}
      {assign var="count" value=$count+$lineItemCount}
      {/if}
      {/foreach}

{ts}Total Participants{/ts}: {$count}
{/if}

{if !empty($is_pay_later) }

==========================================================={if !empty($pricesetFieldsCount) }===================={/if}

{$pay_later_receipt}
==========================================================={if !empty($pricesetFieldsCount) }===================={/if}

{/if}

{if $register_date}
{ts}Registration Date{/ts}: {$register_date|crmDate}
{/if}
{if $receive_date}
{ts}Transaction Date{/ts}: {$receive_date|crmDate}
{/if}
{if !empty($financialTypeName)}
{ts}Financial Type{/ts}: {$financialTypeName}
{/if}
{if !empty($trxn_id)}
{ts}Transaction #{/ts}: {$trxn_id}
{/if}
{if !empty($paidBy)}
{ts}Paid By{/ts}: {$paidBy}
{/if}
{if !empty($checkNumber)}
{ts}Check Number{/ts}: {$checkNumber}
{/if}
{if !empty($billingName)}

==========================================================={if !empty($pricesetFieldsCount) }===================={/if}

{ts}Billing Name and Address{/ts}

==========================================================={if !empty($pricesetFieldsCount) }===================={/if}

{$billingName}
{$address}
{/if}

{if !empty($credit_card_type)}
===========================================================
{ts}Credit Card Information{/ts}

==========================================================={if !empty($pricesetFieldsCount) }===================={/if}

{$credit_card_type}
{$credit_card_number}
{ts}Expires{/ts}: {$credit_card_exp_date|truncate:7:\'\'|crmDate}
{/if}
{/if}
{/if} {* End of conditional section for Paid events *}

{if !empty($customPre)}
==========================================================={if !empty($pricesetFieldsCount) }===================={/if}

{$customPre_grouptitle}
==========================================================={if !empty($pricesetFieldsCount) }===================={/if}

{foreach from=$customPre item=value key=customName}
{if ( !empty($trackingFields) and ! in_array( $customName, $trackingFields ) ) or empty($trackingFields)}
{$customName}: {$value}
{/if}
{/foreach}
{/if}

{if !empty($customPost)}
==========================================================={if !empty($pricesetFieldsCount) }===================={/if}

{$customPost_grouptitle}
==========================================================={if !empty($pricesetFieldsCount) }===================={/if}

{foreach from=$customPost item=value key=customName}
{if ( !empty($trackingFields) and ! in_array( $customName, $trackingFields ) ) or empty($trackingFields)}
{$customName}: {$value}
{/if}
{/foreach}
{/if}
{if !empty($customProfile)}

{foreach from=$customProfile item=value key=customName}
==========================================================={if !empty($pricesetFieldsCount) }===================={/if}

{ts 1=$customName+1}Participant Information - Participant %1{/ts}

==========================================================={if !empty($pricesetFieldsCount) }===================={/if}

{foreach from=$value item=val key=field}
{if $field eq \'additionalCustomPre\' or $field eq \'additionalCustomPost\' }
{if $field eq \'additionalCustomPre\' }
----------------------------------------------------------{if !empty($pricesetFieldsCount) }--------------------{/if}

{$additionalCustomPre_grouptitle}
----------------------------------------------------------{if !empty($pricesetFieldsCount) }--------------------{/if}

{else}
----------------------------------------------------------{if !empty($pricesetFieldsCount) }--------------------{/if}

{$additionalCustomPost_grouptitle}
----------------------------------------------------------{if !empty($pricesetFieldsCount) }--------------------{/if}

{/if}
{foreach from=$val item=v key=f}
{$f}: {$v}
{/foreach}
{/if}
{/foreach}
{/foreach}
{/if}
{if !empty($customGroup)}
{foreach from=$customGroup item=value key=customName}
=========================================================={if !empty($pricesetFieldsCount) }===================={/if}

{$customName}
=========================================================={if !empty($pricesetFieldsCount) }===================={/if}

{foreach from=$value item=v key=n}
{$n}: {$v}
{/foreach}
{/foreach}
{/if}


', 9, false),array('modifier', 'crmDate', 'string:{assign var="greeting" value="Dear Jim"}{if $greeting}{$greeting},{/if}
{if !empty($event.confirm_email_text) AND (empty($isOnWaitlist) AND empty($isRequireApproval))}
{$event.confirm_email_text}
{/if}

{if !empty($isOnWaitlist)}
==========================================================={if !empty($pricesetFieldsCount) }===================={/if}

{ts}You have been added to the WAIT LIST for this event.{/ts}

{if !empty($isPrimary)}
{ts}If space becomes available you will receive an email with a link to a web page where you can complete your registration.{/ts}

{/if}
==========================================================={if !empty($pricesetFieldsCount) }===================={/if}

{elseif !empty($isRequireApproval)}
==========================================================={if !empty($pricesetFieldsCount) }===================={/if}

{ts}Your registration has been submitted.{/ts}

{if !empty($isPrimary)}
{ts}Once your registration has been reviewed, you will receive an email with a link to a web page where you can complete the registration process.{/ts}

{/if}
==========================================================={if !empty($pricesetFieldsCount) }===================={/if}

{elseif !empty($is_pay_later)}

==========================================================={if !empty($pricesetFieldsCount) }===================={/if}

{if isset($pay_later_receipt)}{$pay_later_receipt}{/if}
==========================================================={if !empty($pricesetFieldsCount) }===================={/if}

{/if}


==========================================================={if !empty($pricesetFieldsCount) }===================={/if}

{ts}Event Information and Location{/ts}

==========================================================={if !empty($pricesetFieldsCount) }===================={/if}

{$event.event_title}
{$event.event_start_date|crmDate}{if $event.event_end_date}-{if $event.event_end_date|date_format:"%Y%m%d" == $event.event_start_date|date_format:"%Y%m%d"}{$event.event_end_date|crmDate:0:1}{else}{$event.event_end_date|crmDate}{/if}{/if}

{if !empty($event.participant_role) and $event.participant_role neq \'Attendee\' and empty($defaultRole)}
{ts}Participant Role{/ts}: {$event.participant_role}
{/if}

{if !empty($isShowLocation)}
{$location.address.1.display|strip_tags:false}
{/if}{*End of isShowLocation condition*}

{if !empty($location.phone.1.phone) || !empty($location.email.1.email)}

{ts}Event Contacts:{/ts}
{foreach from=$location.phone item=phone}
{if $phone.phone}

{if $phone.phone_type}{$phone.phone_type_display}{else}{ts}Phone{/ts}{/if}: {$phone.phone}{/if} {if $phone.phone_ext} {ts}ext.{/ts} {$phone.phone_ext}{/if}
{/foreach}
{foreach from=$location.email item=eventEmail}
{if $eventEmail.email}

{ts}Email{/ts}: {$eventEmail.email}{/if}{/foreach}
{/if}

{if !empty($event.is_public)}
{capture assign=icalFeed}{crmURL p=\'civicrm/event/ical\' q="reset=1&id=`$event.id`" h=0 a=1 fe=1}{/capture}
{ts}Download iCalendar File:{/ts} {$icalFeed}
{/if}

{if !empty($email)}

==========================================================={if !empty($pricesetFieldsCount) }===================={/if}

{ts}Registered Email{/ts}

==========================================================={if !empty($pricesetFieldsCount) }===================={/if}

{$email}
{/if}
{if !empty($event.is_monetary)} {* This section for Paid events only.*}

==========================================================={if !empty($pricesetFieldsCount) }===================={/if}

{if !empty($event.fee_label)}{$event.fee_label}{/if}
==========================================================={if !empty($pricesetFieldsCount) }===================={/if}

{if !empty($lineItem)}{foreach from=$lineItem item=value key=priceset}

{if $value neq \'skip\'}
{if !empty($isPrimary)}
{if $lineItem|@count GT 1} {* Header for multi participant registration cases. *}
{ts 1=$priceset+1}Participant %1{/ts}
{/if}
{/if}
---------------------------------------------------------{if !empty($pricesetFieldsCount) }--------------------{/if}

{capture assign=ts_item}{ts}Item{/ts}{/capture}
{capture assign=ts_qty}{ts}Qty{/ts}{/capture}
{capture assign=ts_each}{ts}Each{/ts}{/capture}
{if !empty($dataArray)}
{capture assign=ts_subtotal}{ts}Subtotal{/ts}{/capture}
{capture assign=ts_taxRate}{ts}Tax Rate{/ts}{/capture}
{capture assign=ts_taxAmount}{ts}Tax Amount{/ts}{/capture}
{/if}
{capture assign=ts_total}{ts}Total{/ts}{/capture}
{capture assign=ts_participant_total}{if !empty($pricesetFieldsCount) }{ts}Total Participants{/ts}{/if}{/capture}
{$ts_item|string_format:"%-30s"} {$ts_qty|string_format:"%5s"} {$ts_each|string_format:"%10s"} {if !empty($dataArray)} {$ts_subtotal|string_format:"%10s"} {$ts_taxRate|string_format:"%10s"} {$ts_taxAmount|string_format:"%10s"} {/if} {$ts_total|string_format:"%10s"} {if !empty($ts_participant_total)}{$ts_participant_total|string_format:"%10s"}{/if}
----------------------------------------------------------{if !empty($pricesetFieldsCount) }--------------------{/if}

{foreach from=$value item=line}
{if !empty($pricesetFieldsCount) }{capture assign=ts_participant_count}{$line.participant_count}{/capture}{/if}
{capture assign=ts_item}{if $line.html_type eq \'Text\'}{$line.label}{else}{$line.field_title} - {$line.label}{/if} {if $line.description} {$line.description}{/if}{/capture}{$ts_item|truncate:30:"..."|string_format:"%-30s"} {$line.qty|string_format:"%5s"} {$line.unit_price|crmMoney|string_format:"%10s"} {if !empty($dataArray)} {$line.unit_price*$line.qty|crmMoney:$currency|string_format:"%10s"} {if isset($line.tax_rate) and ($line.tax_rate != "" || $line.tax_amount != "")}  {$line.tax_rate|string_format:"%.2f"} %  {$line.tax_amount|crmMoney:$currency|string_format:"%10s"} {else}                  {/if}  {/if}  {$line.line_total+$line.tax_amount|crmMoney|string_format:"%10s"} {if !empty($ts_participant_count)}{$ts_participant_count|string_format:"%10s"}{/if}
{/foreach}
{/if}
{/foreach}

{if !empty($dataArray)}
{if isset($totalAmount) and isset($totalTaxAmount)}
{ts}Amount before Tax{/ts}: {$totalAmount-$totalTaxAmount|crmMoney:$currency}
{/if}

{foreach from=$dataArray item=value key=priceset}
{if $priceset || $priceset == 0}
{if isset($taxTerm)}{$taxTerm}{/if} {$priceset|string_format:"%.2f"}%: {$value|crmMoney:$currency}
{else}
{ts}No{/ts} {if isset($taxTerm)}{$taxTerm}{/if}: {$value|crmMoney:$currency}
{/if}
{/foreach}
{/if}
{/if}

{if !empty($amount) && !$lineItem}
{foreach from=$amount item=amnt key=level}{$amnt.amount|crmMoney} {$amnt.label}
{/foreach}
{/if}

{if isset($totalTaxAmount)}
{ts}Total Tax Amount{/ts}: {$totalTaxAmount|crmMoney:$currency}
{/if}
{if !empty($isPrimary)}

{if !empty($balanceAmount)}{ts}Total Paid{/ts}{else}{ts}Total Amount{/ts}{/if}: {if !empty($totalAmount)}{$totalAmount|crmMoney}{/if} {if !empty($hookDiscount.message)}({$hookDiscount.message}){/if}

{if !empty($balanceAmount)}
{ts}Balance{/ts}: {$balanceAmount|crmMoney}
{/if}

{if !empty($pricesetFieldsCount) }
      {assign var="count" value= 0}
      {foreach from=$lineItem item=pcount}
      {assign var="lineItemCount" value=0}
      {if $pcount neq \'skip\'}
        {foreach from=$pcount item=p_count}
        {assign var="lineItemCount" value=$lineItemCount+$p_count.participant_count}
        {/foreach}
        {if $lineItemCount < 1 }
        {assign var="lineItemCount" value=1}
        {/if}
      {assign var="count" value=$count+$lineItemCount}
      {/if}
      {/foreach}

{ts}Total Participants{/ts}: {$count}
{/if}

{if !empty($is_pay_later) }

==========================================================={if !empty($pricesetFieldsCount) }===================={/if}

{$pay_later_receipt}
==========================================================={if !empty($pricesetFieldsCount) }===================={/if}

{/if}

{if $register_date}
{ts}Registration Date{/ts}: {$register_date|crmDate}
{/if}
{if $receive_date}
{ts}Transaction Date{/ts}: {$receive_date|crmDate}
{/if}
{if !empty($financialTypeName)}
{ts}Financial Type{/ts}: {$financialTypeName}
{/if}
{if !empty($trxn_id)}
{ts}Transaction #{/ts}: {$trxn_id}
{/if}
{if !empty($paidBy)}
{ts}Paid By{/ts}: {$paidBy}
{/if}
{if !empty($checkNumber)}
{ts}Check Number{/ts}: {$checkNumber}
{/if}
{if !empty($billingName)}

==========================================================={if !empty($pricesetFieldsCount) }===================={/if}

{ts}Billing Name and Address{/ts}

==========================================================={if !empty($pricesetFieldsCount) }===================={/if}

{$billingName}
{$address}
{/if}

{if !empty($credit_card_type)}
===========================================================
{ts}Credit Card Information{/ts}

==========================================================={if !empty($pricesetFieldsCount) }===================={/if}

{$credit_card_type}
{$credit_card_number}
{ts}Expires{/ts}: {$credit_card_exp_date|truncate:7:\'\'|crmDate}
{/if}
{/if}
{/if} {* End of conditional section for Paid events *}

{if !empty($customPre)}
==========================================================={if !empty($pricesetFieldsCount) }===================={/if}

{$customPre_grouptitle}
==========================================================={if !empty($pricesetFieldsCount) }===================={/if}

{foreach from=$customPre item=value key=customName}
{if ( !empty($trackingFields) and ! in_array( $customName, $trackingFields ) ) or empty($trackingFields)}
{$customName}: {$value}
{/if}
{/foreach}
{/if}

{if !empty($customPost)}
==========================================================={if !empty($pricesetFieldsCount) }===================={/if}

{$customPost_grouptitle}
==========================================================={if !empty($pricesetFieldsCount) }===================={/if}

{foreach from=$customPost item=value key=customName}
{if ( !empty($trackingFields) and ! in_array( $customName, $trackingFields ) ) or empty($trackingFields)}
{$customName}: {$value}
{/if}
{/foreach}
{/if}
{if !empty($customProfile)}

{foreach from=$customProfile item=value key=customName}
==========================================================={if !empty($pricesetFieldsCount) }===================={/if}

{ts 1=$customName+1}Participant Information - Participant %1{/ts}

==========================================================={if !empty($pricesetFieldsCount) }===================={/if}

{foreach from=$value item=val key=field}
{if $field eq \'additionalCustomPre\' or $field eq \'additionalCustomPost\' }
{if $field eq \'additionalCustomPre\' }
----------------------------------------------------------{if !empty($pricesetFieldsCount) }--------------------{/if}

{$additionalCustomPre_grouptitle}
----------------------------------------------------------{if !empty($pricesetFieldsCount) }--------------------{/if}

{else}
----------------------------------------------------------{if !empty($pricesetFieldsCount) }--------------------{/if}

{$additionalCustomPost_grouptitle}
----------------------------------------------------------{if !empty($pricesetFieldsCount) }--------------------{/if}

{/if}
{foreach from=$val item=v key=f}
{$f}: {$v}
{/foreach}
{/if}
{/foreach}
{/foreach}
{/if}
{if !empty($customGroup)}
{foreach from=$customGroup item=value key=customName}
=========================================================={if !empty($pricesetFieldsCount) }===================={/if}

{$customName}
=========================================================={if !empty($pricesetFieldsCount) }===================={/if}

{foreach from=$value item=v key=n}
{$n}: {$v}
{/foreach}
{/foreach}
{/if}


', 45, false),array('modifier', 'date_format', 'string:{assign var="greeting" value="Dear Jim"}{if $greeting}{$greeting},{/if}
{if !empty($event.confirm_email_text) AND (empty($isOnWaitlist) AND empty($isRequireApproval))}
{$event.confirm_email_text}
{/if}

{if !empty($isOnWaitlist)}
==========================================================={if !empty($pricesetFieldsCount) }===================={/if}

{ts}You have been added to the WAIT LIST for this event.{/ts}

{if !empty($isPrimary)}
{ts}If space becomes available you will receive an email with a link to a web page where you can complete your registration.{/ts}

{/if}
==========================================================={if !empty($pricesetFieldsCount) }===================={/if}

{elseif !empty($isRequireApproval)}
==========================================================={if !empty($pricesetFieldsCount) }===================={/if}

{ts}Your registration has been submitted.{/ts}

{if !empty($isPrimary)}
{ts}Once your registration has been reviewed, you will receive an email with a link to a web page where you can complete the registration process.{/ts}

{/if}
==========================================================={if !empty($pricesetFieldsCount) }===================={/if}

{elseif !empty($is_pay_later)}

==========================================================={if !empty($pricesetFieldsCount) }===================={/if}

{if isset($pay_later_receipt)}{$pay_later_receipt}{/if}
==========================================================={if !empty($pricesetFieldsCount) }===================={/if}

{/if}


==========================================================={if !empty($pricesetFieldsCount) }===================={/if}

{ts}Event Information and Location{/ts}

==========================================================={if !empty($pricesetFieldsCount) }===================={/if}

{$event.event_title}
{$event.event_start_date|crmDate}{if $event.event_end_date}-{if $event.event_end_date|date_format:"%Y%m%d" == $event.event_start_date|date_format:"%Y%m%d"}{$event.event_end_date|crmDate:0:1}{else}{$event.event_end_date|crmDate}{/if}{/if}

{if !empty($event.participant_role) and $event.participant_role neq \'Attendee\' and empty($defaultRole)}
{ts}Participant Role{/ts}: {$event.participant_role}
{/if}

{if !empty($isShowLocation)}
{$location.address.1.display|strip_tags:false}
{/if}{*End of isShowLocation condition*}

{if !empty($location.phone.1.phone) || !empty($location.email.1.email)}

{ts}Event Contacts:{/ts}
{foreach from=$location.phone item=phone}
{if $phone.phone}

{if $phone.phone_type}{$phone.phone_type_display}{else}{ts}Phone{/ts}{/if}: {$phone.phone}{/if} {if $phone.phone_ext} {ts}ext.{/ts} {$phone.phone_ext}{/if}
{/foreach}
{foreach from=$location.email item=eventEmail}
{if $eventEmail.email}

{ts}Email{/ts}: {$eventEmail.email}{/if}{/foreach}
{/if}

{if !empty($event.is_public)}
{capture assign=icalFeed}{crmURL p=\'civicrm/event/ical\' q="reset=1&id=`$event.id`" h=0 a=1 fe=1}{/capture}
{ts}Download iCalendar File:{/ts} {$icalFeed}
{/if}

{if !empty($email)}

==========================================================={if !empty($pricesetFieldsCount) }===================={/if}

{ts}Registered Email{/ts}

==========================================================={if !empty($pricesetFieldsCount) }===================={/if}

{$email}
{/if}
{if !empty($event.is_monetary)} {* This section for Paid events only.*}

==========================================================={if !empty($pricesetFieldsCount) }===================={/if}

{if !empty($event.fee_label)}{$event.fee_label}{/if}
==========================================================={if !empty($pricesetFieldsCount) }===================={/if}

{if !empty($lineItem)}{foreach from=$lineItem item=value key=priceset}

{if $value neq \'skip\'}
{if !empty($isPrimary)}
{if $lineItem|@count GT 1} {* Header for multi participant registration cases. *}
{ts 1=$priceset+1}Participant %1{/ts}
{/if}
{/if}
---------------------------------------------------------{if !empty($pricesetFieldsCount) }--------------------{/if}

{capture assign=ts_item}{ts}Item{/ts}{/capture}
{capture assign=ts_qty}{ts}Qty{/ts}{/capture}
{capture assign=ts_each}{ts}Each{/ts}{/capture}
{if !empty($dataArray)}
{capture assign=ts_subtotal}{ts}Subtotal{/ts}{/capture}
{capture assign=ts_taxRate}{ts}Tax Rate{/ts}{/capture}
{capture assign=ts_taxAmount}{ts}Tax Amount{/ts}{/capture}
{/if}
{capture assign=ts_total}{ts}Total{/ts}{/capture}
{capture assign=ts_participant_total}{if !empty($pricesetFieldsCount) }{ts}Total Participants{/ts}{/if}{/capture}
{$ts_item|string_format:"%-30s"} {$ts_qty|string_format:"%5s"} {$ts_each|string_format:"%10s"} {if !empty($dataArray)} {$ts_subtotal|string_format:"%10s"} {$ts_taxRate|string_format:"%10s"} {$ts_taxAmount|string_format:"%10s"} {/if} {$ts_total|string_format:"%10s"} {if !empty($ts_participant_total)}{$ts_participant_total|string_format:"%10s"}{/if}
----------------------------------------------------------{if !empty($pricesetFieldsCount) }--------------------{/if}

{foreach from=$value item=line}
{if !empty($pricesetFieldsCount) }{capture assign=ts_participant_count}{$line.participant_count}{/capture}{/if}
{capture assign=ts_item}{if $line.html_type eq \'Text\'}{$line.label}{else}{$line.field_title} - {$line.label}{/if} {if $line.description} {$line.description}{/if}{/capture}{$ts_item|truncate:30:"..."|string_format:"%-30s"} {$line.qty|string_format:"%5s"} {$line.unit_price|crmMoney|string_format:"%10s"} {if !empty($dataArray)} {$line.unit_price*$line.qty|crmMoney:$currency|string_format:"%10s"} {if isset($line.tax_rate) and ($line.tax_rate != "" || $line.tax_amount != "")}  {$line.tax_rate|string_format:"%.2f"} %  {$line.tax_amount|crmMoney:$currency|string_format:"%10s"} {else}                  {/if}  {/if}  {$line.line_total+$line.tax_amount|crmMoney|string_format:"%10s"} {if !empty($ts_participant_count)}{$ts_participant_count|string_format:"%10s"}{/if}
{/foreach}
{/if}
{/foreach}

{if !empty($dataArray)}
{if isset($totalAmount) and isset($totalTaxAmount)}
{ts}Amount before Tax{/ts}: {$totalAmount-$totalTaxAmount|crmMoney:$currency}
{/if}

{foreach from=$dataArray item=value key=priceset}
{if $priceset || $priceset == 0}
{if isset($taxTerm)}{$taxTerm}{/if} {$priceset|string_format:"%.2f"}%: {$value|crmMoney:$currency}
{else}
{ts}No{/ts} {if isset($taxTerm)}{$taxTerm}{/if}: {$value|crmMoney:$currency}
{/if}
{/foreach}
{/if}
{/if}

{if !empty($amount) && !$lineItem}
{foreach from=$amount item=amnt key=level}{$amnt.amount|crmMoney} {$amnt.label}
{/foreach}
{/if}

{if isset($totalTaxAmount)}
{ts}Total Tax Amount{/ts}: {$totalTaxAmount|crmMoney:$currency}
{/if}
{if !empty($isPrimary)}

{if !empty($balanceAmount)}{ts}Total Paid{/ts}{else}{ts}Total Amount{/ts}{/if}: {if !empty($totalAmount)}{$totalAmount|crmMoney}{/if} {if !empty($hookDiscount.message)}({$hookDiscount.message}){/if}

{if !empty($balanceAmount)}
{ts}Balance{/ts}: {$balanceAmount|crmMoney}
{/if}

{if !empty($pricesetFieldsCount) }
      {assign var="count" value= 0}
      {foreach from=$lineItem item=pcount}
      {assign var="lineItemCount" value=0}
      {if $pcount neq \'skip\'}
        {foreach from=$pcount item=p_count}
        {assign var="lineItemCount" value=$lineItemCount+$p_count.participant_count}
        {/foreach}
        {if $lineItemCount < 1 }
        {assign var="lineItemCount" value=1}
        {/if}
      {assign var="count" value=$count+$lineItemCount}
      {/if}
      {/foreach}

{ts}Total Participants{/ts}: {$count}
{/if}

{if !empty($is_pay_later) }

==========================================================={if !empty($pricesetFieldsCount) }===================={/if}

{$pay_later_receipt}
==========================================================={if !empty($pricesetFieldsCount) }===================={/if}

{/if}

{if $register_date}
{ts}Registration Date{/ts}: {$register_date|crmDate}
{/if}
{if $receive_date}
{ts}Transaction Date{/ts}: {$receive_date|crmDate}
{/if}
{if !empty($financialTypeName)}
{ts}Financial Type{/ts}: {$financialTypeName}
{/if}
{if !empty($trxn_id)}
{ts}Transaction #{/ts}: {$trxn_id}
{/if}
{if !empty($paidBy)}
{ts}Paid By{/ts}: {$paidBy}
{/if}
{if !empty($checkNumber)}
{ts}Check Number{/ts}: {$checkNumber}
{/if}
{if !empty($billingName)}

==========================================================={if !empty($pricesetFieldsCount) }===================={/if}

{ts}Billing Name and Address{/ts}

==========================================================={if !empty($pricesetFieldsCount) }===================={/if}

{$billingName}
{$address}
{/if}

{if !empty($credit_card_type)}
===========================================================
{ts}Credit Card Information{/ts}

==========================================================={if !empty($pricesetFieldsCount) }===================={/if}

{$credit_card_type}
{$credit_card_number}
{ts}Expires{/ts}: {$credit_card_exp_date|truncate:7:\'\'|crmDate}
{/if}
{/if}
{/if} {* End of conditional section for Paid events *}

{if !empty($customPre)}
==========================================================={if !empty($pricesetFieldsCount) }===================={/if}

{$customPre_grouptitle}
==========================================================={if !empty($pricesetFieldsCount) }===================={/if}

{foreach from=$customPre item=value key=customName}
{if ( !empty($trackingFields) and ! in_array( $customName, $trackingFields ) ) or empty($trackingFields)}
{$customName}: {$value}
{/if}
{/foreach}
{/if}

{if !empty($customPost)}
==========================================================={if !empty($pricesetFieldsCount) }===================={/if}

{$customPost_grouptitle}
==========================================================={if !empty($pricesetFieldsCount) }===================={/if}

{foreach from=$customPost item=value key=customName}
{if ( !empty($trackingFields) and ! in_array( $customName, $trackingFields ) ) or empty($trackingFields)}
{$customName}: {$value}
{/if}
{/foreach}
{/if}
{if !empty($customProfile)}

{foreach from=$customProfile item=value key=customName}
==========================================================={if !empty($pricesetFieldsCount) }===================={/if}

{ts 1=$customName+1}Participant Information - Participant %1{/ts}

==========================================================={if !empty($pricesetFieldsCount) }===================={/if}

{foreach from=$value item=val key=field}
{if $field eq \'additionalCustomPre\' or $field eq \'additionalCustomPost\' }
{if $field eq \'additionalCustomPre\' }
----------------------------------------------------------{if !empty($pricesetFieldsCount) }--------------------{/if}

{$additionalCustomPre_grouptitle}
----------------------------------------------------------{if !empty($pricesetFieldsCount) }--------------------{/if}

{else}
----------------------------------------------------------{if !empty($pricesetFieldsCount) }--------------------{/if}

{$additionalCustomPost_grouptitle}
----------------------------------------------------------{if !empty($pricesetFieldsCount) }--------------------{/if}

{/if}
{foreach from=$val item=v key=f}
{$f}: {$v}
{/foreach}
{/if}
{/foreach}
{/foreach}
{/if}
{if !empty($customGroup)}
{foreach from=$customGroup item=value key=customName}
=========================================================={if !empty($pricesetFieldsCount) }===================={/if}

{$customName}
=========================================================={if !empty($pricesetFieldsCount) }===================={/if}

{foreach from=$value item=v key=n}
{$n}: {$v}
{/foreach}
{/foreach}
{/if}


', 45, false),array('modifier', 'strip_tags', 'string:{assign var="greeting" value="Dear Jim"}{if $greeting}{$greeting},{/if}
{if !empty($event.confirm_email_text) AND (empty($isOnWaitlist) AND empty($isRequireApproval))}
{$event.confirm_email_text}
{/if}

{if !empty($isOnWaitlist)}
==========================================================={if !empty($pricesetFieldsCount) }===================={/if}

{ts}You have been added to the WAIT LIST for this event.{/ts}

{if !empty($isPrimary)}
{ts}If space becomes available you will receive an email with a link to a web page where you can complete your registration.{/ts}

{/if}
==========================================================={if !empty($pricesetFieldsCount) }===================={/if}

{elseif !empty($isRequireApproval)}
==========================================================={if !empty($pricesetFieldsCount) }===================={/if}

{ts}Your registration has been submitted.{/ts}

{if !empty($isPrimary)}
{ts}Once your registration has been reviewed, you will receive an email with a link to a web page where you can complete the registration process.{/ts}

{/if}
==========================================================={if !empty($pricesetFieldsCount) }===================={/if}

{elseif !empty($is_pay_later)}

==========================================================={if !empty($pricesetFieldsCount) }===================={/if}

{if isset($pay_later_receipt)}{$pay_later_receipt}{/if}
==========================================================={if !empty($pricesetFieldsCount) }===================={/if}

{/if}


==========================================================={if !empty($pricesetFieldsCount) }===================={/if}

{ts}Event Information and Location{/ts}

==========================================================={if !empty($pricesetFieldsCount) }===================={/if}

{$event.event_title}
{$event.event_start_date|crmDate}{if $event.event_end_date}-{if $event.event_end_date|date_format:"%Y%m%d" == $event.event_start_date|date_format:"%Y%m%d"}{$event.event_end_date|crmDate:0:1}{else}{$event.event_end_date|crmDate}{/if}{/if}

{if !empty($event.participant_role) and $event.participant_role neq \'Attendee\' and empty($defaultRole)}
{ts}Participant Role{/ts}: {$event.participant_role}
{/if}

{if !empty($isShowLocation)}
{$location.address.1.display|strip_tags:false}
{/if}{*End of isShowLocation condition*}

{if !empty($location.phone.1.phone) || !empty($location.email.1.email)}

{ts}Event Contacts:{/ts}
{foreach from=$location.phone item=phone}
{if $phone.phone}

{if $phone.phone_type}{$phone.phone_type_display}{else}{ts}Phone{/ts}{/if}: {$phone.phone}{/if} {if $phone.phone_ext} {ts}ext.{/ts} {$phone.phone_ext}{/if}
{/foreach}
{foreach from=$location.email item=eventEmail}
{if $eventEmail.email}

{ts}Email{/ts}: {$eventEmail.email}{/if}{/foreach}
{/if}

{if !empty($event.is_public)}
{capture assign=icalFeed}{crmURL p=\'civicrm/event/ical\' q="reset=1&id=`$event.id`" h=0 a=1 fe=1}{/capture}
{ts}Download iCalendar File:{/ts} {$icalFeed}
{/if}

{if !empty($email)}

==========================================================={if !empty($pricesetFieldsCount) }===================={/if}

{ts}Registered Email{/ts}

==========================================================={if !empty($pricesetFieldsCount) }===================={/if}

{$email}
{/if}
{if !empty($event.is_monetary)} {* This section for Paid events only.*}

==========================================================={if !empty($pricesetFieldsCount) }===================={/if}

{if !empty($event.fee_label)}{$event.fee_label}{/if}
==========================================================={if !empty($pricesetFieldsCount) }===================={/if}

{if !empty($lineItem)}{foreach from=$lineItem item=value key=priceset}

{if $value neq \'skip\'}
{if !empty($isPrimary)}
{if $lineItem|@count GT 1} {* Header for multi participant registration cases. *}
{ts 1=$priceset+1}Participant %1{/ts}
{/if}
{/if}
---------------------------------------------------------{if !empty($pricesetFieldsCount) }--------------------{/if}

{capture assign=ts_item}{ts}Item{/ts}{/capture}
{capture assign=ts_qty}{ts}Qty{/ts}{/capture}
{capture assign=ts_each}{ts}Each{/ts}{/capture}
{if !empty($dataArray)}
{capture assign=ts_subtotal}{ts}Subtotal{/ts}{/capture}
{capture assign=ts_taxRate}{ts}Tax Rate{/ts}{/capture}
{capture assign=ts_taxAmount}{ts}Tax Amount{/ts}{/capture}
{/if}
{capture assign=ts_total}{ts}Total{/ts}{/capture}
{capture assign=ts_participant_total}{if !empty($pricesetFieldsCount) }{ts}Total Participants{/ts}{/if}{/capture}
{$ts_item|string_format:"%-30s"} {$ts_qty|string_format:"%5s"} {$ts_each|string_format:"%10s"} {if !empty($dataArray)} {$ts_subtotal|string_format:"%10s"} {$ts_taxRate|string_format:"%10s"} {$ts_taxAmount|string_format:"%10s"} {/if} {$ts_total|string_format:"%10s"} {if !empty($ts_participant_total)}{$ts_participant_total|string_format:"%10s"}{/if}
----------------------------------------------------------{if !empty($pricesetFieldsCount) }--------------------{/if}

{foreach from=$value item=line}
{if !empty($pricesetFieldsCount) }{capture assign=ts_participant_count}{$line.participant_count}{/capture}{/if}
{capture assign=ts_item}{if $line.html_type eq \'Text\'}{$line.label}{else}{$line.field_title} - {$line.label}{/if} {if $line.description} {$line.description}{/if}{/capture}{$ts_item|truncate:30:"..."|string_format:"%-30s"} {$line.qty|string_format:"%5s"} {$line.unit_price|crmMoney|string_format:"%10s"} {if !empty($dataArray)} {$line.unit_price*$line.qty|crmMoney:$currency|string_format:"%10s"} {if isset($line.tax_rate) and ($line.tax_rate != "" || $line.tax_amount != "")}  {$line.tax_rate|string_format:"%.2f"} %  {$line.tax_amount|crmMoney:$currency|string_format:"%10s"} {else}                  {/if}  {/if}  {$line.line_total+$line.tax_amount|crmMoney|string_format:"%10s"} {if !empty($ts_participant_count)}{$ts_participant_count|string_format:"%10s"}{/if}
{/foreach}
{/if}
{/foreach}

{if !empty($dataArray)}
{if isset($totalAmount) and isset($totalTaxAmount)}
{ts}Amount before Tax{/ts}: {$totalAmount-$totalTaxAmount|crmMoney:$currency}
{/if}

{foreach from=$dataArray item=value key=priceset}
{if $priceset || $priceset == 0}
{if isset($taxTerm)}{$taxTerm}{/if} {$priceset|string_format:"%.2f"}%: {$value|crmMoney:$currency}
{else}
{ts}No{/ts} {if isset($taxTerm)}{$taxTerm}{/if}: {$value|crmMoney:$currency}
{/if}
{/foreach}
{/if}
{/if}

{if !empty($amount) && !$lineItem}
{foreach from=$amount item=amnt key=level}{$amnt.amount|crmMoney} {$amnt.label}
{/foreach}
{/if}

{if isset($totalTaxAmount)}
{ts}Total Tax Amount{/ts}: {$totalTaxAmount|crmMoney:$currency}
{/if}
{if !empty($isPrimary)}

{if !empty($balanceAmount)}{ts}Total Paid{/ts}{else}{ts}Total Amount{/ts}{/if}: {if !empty($totalAmount)}{$totalAmount|crmMoney}{/if} {if !empty($hookDiscount.message)}({$hookDiscount.message}){/if}

{if !empty($balanceAmount)}
{ts}Balance{/ts}: {$balanceAmount|crmMoney}
{/if}

{if !empty($pricesetFieldsCount) }
      {assign var="count" value= 0}
      {foreach from=$lineItem item=pcount}
      {assign var="lineItemCount" value=0}
      {if $pcount neq \'skip\'}
        {foreach from=$pcount item=p_count}
        {assign var="lineItemCount" value=$lineItemCount+$p_count.participant_count}
        {/foreach}
        {if $lineItemCount < 1 }
        {assign var="lineItemCount" value=1}
        {/if}
      {assign var="count" value=$count+$lineItemCount}
      {/if}
      {/foreach}

{ts}Total Participants{/ts}: {$count}
{/if}

{if !empty($is_pay_later) }

==========================================================={if !empty($pricesetFieldsCount) }===================={/if}

{$pay_later_receipt}
==========================================================={if !empty($pricesetFieldsCount) }===================={/if}

{/if}

{if $register_date}
{ts}Registration Date{/ts}: {$register_date|crmDate}
{/if}
{if $receive_date}
{ts}Transaction Date{/ts}: {$receive_date|crmDate}
{/if}
{if !empty($financialTypeName)}
{ts}Financial Type{/ts}: {$financialTypeName}
{/if}
{if !empty($trxn_id)}
{ts}Transaction #{/ts}: {$trxn_id}
{/if}
{if !empty($paidBy)}
{ts}Paid By{/ts}: {$paidBy}
{/if}
{if !empty($checkNumber)}
{ts}Check Number{/ts}: {$checkNumber}
{/if}
{if !empty($billingName)}

==========================================================={if !empty($pricesetFieldsCount) }===================={/if}

{ts}Billing Name and Address{/ts}

==========================================================={if !empty($pricesetFieldsCount) }===================={/if}

{$billingName}
{$address}
{/if}

{if !empty($credit_card_type)}
===========================================================
{ts}Credit Card Information{/ts}

==========================================================={if !empty($pricesetFieldsCount) }===================={/if}

{$credit_card_type}
{$credit_card_number}
{ts}Expires{/ts}: {$credit_card_exp_date|truncate:7:\'\'|crmDate}
{/if}
{/if}
{/if} {* End of conditional section for Paid events *}

{if !empty($customPre)}
==========================================================={if !empty($pricesetFieldsCount) }===================={/if}

{$customPre_grouptitle}
==========================================================={if !empty($pricesetFieldsCount) }===================={/if}

{foreach from=$customPre item=value key=customName}
{if ( !empty($trackingFields) and ! in_array( $customName, $trackingFields ) ) or empty($trackingFields)}
{$customName}: {$value}
{/if}
{/foreach}
{/if}

{if !empty($customPost)}
==========================================================={if !empty($pricesetFieldsCount) }===================={/if}

{$customPost_grouptitle}
==========================================================={if !empty($pricesetFieldsCount) }===================={/if}

{foreach from=$customPost item=value key=customName}
{if ( !empty($trackingFields) and ! in_array( $customName, $trackingFields ) ) or empty($trackingFields)}
{$customName}: {$value}
{/if}
{/foreach}
{/if}
{if !empty($customProfile)}

{foreach from=$customProfile item=value key=customName}
==========================================================={if !empty($pricesetFieldsCount) }===================={/if}

{ts 1=$customName+1}Participant Information - Participant %1{/ts}

==========================================================={if !empty($pricesetFieldsCount) }===================={/if}

{foreach from=$value item=val key=field}
{if $field eq \'additionalCustomPre\' or $field eq \'additionalCustomPost\' }
{if $field eq \'additionalCustomPre\' }
----------------------------------------------------------{if !empty($pricesetFieldsCount) }--------------------{/if}

{$additionalCustomPre_grouptitle}
----------------------------------------------------------{if !empty($pricesetFieldsCount) }--------------------{/if}

{else}
----------------------------------------------------------{if !empty($pricesetFieldsCount) }--------------------{/if}

{$additionalCustomPost_grouptitle}
----------------------------------------------------------{if !empty($pricesetFieldsCount) }--------------------{/if}

{/if}
{foreach from=$val item=v key=f}
{$f}: {$v}
{/foreach}
{/if}
{/foreach}
{/foreach}
{/if}
{if !empty($customGroup)}
{foreach from=$customGroup item=value key=customName}
=========================================================={if !empty($pricesetFieldsCount) }===================={/if}

{$customName}
=========================================================={if !empty($pricesetFieldsCount) }===================={/if}

{foreach from=$value item=v key=n}
{$n}: {$v}
{/foreach}
{/foreach}
{/if}


', 52, false),array('modifier', 'count', 'string:{assign var="greeting" value="Dear Jim"}{if $greeting}{$greeting},{/if}
{if !empty($event.confirm_email_text) AND (empty($isOnWaitlist) AND empty($isRequireApproval))}
{$event.confirm_email_text}
{/if}

{if !empty($isOnWaitlist)}
==========================================================={if !empty($pricesetFieldsCount) }===================={/if}

{ts}You have been added to the WAIT LIST for this event.{/ts}

{if !empty($isPrimary)}
{ts}If space becomes available you will receive an email with a link to a web page where you can complete your registration.{/ts}

{/if}
==========================================================={if !empty($pricesetFieldsCount) }===================={/if}

{elseif !empty($isRequireApproval)}
==========================================================={if !empty($pricesetFieldsCount) }===================={/if}

{ts}Your registration has been submitted.{/ts}

{if !empty($isPrimary)}
{ts}Once your registration has been reviewed, you will receive an email with a link to a web page where you can complete the registration process.{/ts}

{/if}
==========================================================={if !empty($pricesetFieldsCount) }===================={/if}

{elseif !empty($is_pay_later)}

==========================================================={if !empty($pricesetFieldsCount) }===================={/if}

{if isset($pay_later_receipt)}{$pay_later_receipt}{/if}
==========================================================={if !empty($pricesetFieldsCount) }===================={/if}

{/if}


==========================================================={if !empty($pricesetFieldsCount) }===================={/if}

{ts}Event Information and Location{/ts}

==========================================================={if !empty($pricesetFieldsCount) }===================={/if}

{$event.event_title}
{$event.event_start_date|crmDate}{if $event.event_end_date}-{if $event.event_end_date|date_format:"%Y%m%d" == $event.event_start_date|date_format:"%Y%m%d"}{$event.event_end_date|crmDate:0:1}{else}{$event.event_end_date|crmDate}{/if}{/if}

{if !empty($event.participant_role) and $event.participant_role neq \'Attendee\' and empty($defaultRole)}
{ts}Participant Role{/ts}: {$event.participant_role}
{/if}

{if !empty($isShowLocation)}
{$location.address.1.display|strip_tags:false}
{/if}{*End of isShowLocation condition*}

{if !empty($location.phone.1.phone) || !empty($location.email.1.email)}

{ts}Event Contacts:{/ts}
{foreach from=$location.phone item=phone}
{if $phone.phone}

{if $phone.phone_type}{$phone.phone_type_display}{else}{ts}Phone{/ts}{/if}: {$phone.phone}{/if} {if $phone.phone_ext} {ts}ext.{/ts} {$phone.phone_ext}{/if}
{/foreach}
{foreach from=$location.email item=eventEmail}
{if $eventEmail.email}

{ts}Email{/ts}: {$eventEmail.email}{/if}{/foreach}
{/if}

{if !empty($event.is_public)}
{capture assign=icalFeed}{crmURL p=\'civicrm/event/ical\' q="reset=1&id=`$event.id`" h=0 a=1 fe=1}{/capture}
{ts}Download iCalendar File:{/ts} {$icalFeed}
{/if}

{if !empty($email)}

==========================================================={if !empty($pricesetFieldsCount) }===================={/if}

{ts}Registered Email{/ts}

==========================================================={if !empty($pricesetFieldsCount) }===================={/if}

{$email}
{/if}
{if !empty($event.is_monetary)} {* This section for Paid events only.*}

==========================================================={if !empty($pricesetFieldsCount) }===================={/if}

{if !empty($event.fee_label)}{$event.fee_label}{/if}
==========================================================={if !empty($pricesetFieldsCount) }===================={/if}

{if !empty($lineItem)}{foreach from=$lineItem item=value key=priceset}

{if $value neq \'skip\'}
{if !empty($isPrimary)}
{if $lineItem|@count GT 1} {* Header for multi participant registration cases. *}
{ts 1=$priceset+1}Participant %1{/ts}
{/if}
{/if}
---------------------------------------------------------{if !empty($pricesetFieldsCount) }--------------------{/if}

{capture assign=ts_item}{ts}Item{/ts}{/capture}
{capture assign=ts_qty}{ts}Qty{/ts}{/capture}
{capture assign=ts_each}{ts}Each{/ts}{/capture}
{if !empty($dataArray)}
{capture assign=ts_subtotal}{ts}Subtotal{/ts}{/capture}
{capture assign=ts_taxRate}{ts}Tax Rate{/ts}{/capture}
{capture assign=ts_taxAmount}{ts}Tax Amount{/ts}{/capture}
{/if}
{capture assign=ts_total}{ts}Total{/ts}{/capture}
{capture assign=ts_participant_total}{if !empty($pricesetFieldsCount) }{ts}Total Participants{/ts}{/if}{/capture}
{$ts_item|string_format:"%-30s"} {$ts_qty|string_format:"%5s"} {$ts_each|string_format:"%10s"} {if !empty($dataArray)} {$ts_subtotal|string_format:"%10s"} {$ts_taxRate|string_format:"%10s"} {$ts_taxAmount|string_format:"%10s"} {/if} {$ts_total|string_format:"%10s"} {if !empty($ts_participant_total)}{$ts_participant_total|string_format:"%10s"}{/if}
----------------------------------------------------------{if !empty($pricesetFieldsCount) }--------------------{/if}

{foreach from=$value item=line}
{if !empty($pricesetFieldsCount) }{capture assign=ts_participant_count}{$line.participant_count}{/capture}{/if}
{capture assign=ts_item}{if $line.html_type eq \'Text\'}{$line.label}{else}{$line.field_title} - {$line.label}{/if} {if $line.description} {$line.description}{/if}{/capture}{$ts_item|truncate:30:"..."|string_format:"%-30s"} {$line.qty|string_format:"%5s"} {$line.unit_price|crmMoney|string_format:"%10s"} {if !empty($dataArray)} {$line.unit_price*$line.qty|crmMoney:$currency|string_format:"%10s"} {if isset($line.tax_rate) and ($line.tax_rate != "" || $line.tax_amount != "")}  {$line.tax_rate|string_format:"%.2f"} %  {$line.tax_amount|crmMoney:$currency|string_format:"%10s"} {else}                  {/if}  {/if}  {$line.line_total+$line.tax_amount|crmMoney|string_format:"%10s"} {if !empty($ts_participant_count)}{$ts_participant_count|string_format:"%10s"}{/if}
{/foreach}
{/if}
{/foreach}

{if !empty($dataArray)}
{if isset($totalAmount) and isset($totalTaxAmount)}
{ts}Amount before Tax{/ts}: {$totalAmount-$totalTaxAmount|crmMoney:$currency}
{/if}

{foreach from=$dataArray item=value key=priceset}
{if $priceset || $priceset == 0}
{if isset($taxTerm)}{$taxTerm}{/if} {$priceset|string_format:"%.2f"}%: {$value|crmMoney:$currency}
{else}
{ts}No{/ts} {if isset($taxTerm)}{$taxTerm}{/if}: {$value|crmMoney:$currency}
{/if}
{/foreach}
{/if}
{/if}

{if !empty($amount) && !$lineItem}
{foreach from=$amount item=amnt key=level}{$amnt.amount|crmMoney} {$amnt.label}
{/foreach}
{/if}

{if isset($totalTaxAmount)}
{ts}Total Tax Amount{/ts}: {$totalTaxAmount|crmMoney:$currency}
{/if}
{if !empty($isPrimary)}

{if !empty($balanceAmount)}{ts}Total Paid{/ts}{else}{ts}Total Amount{/ts}{/if}: {if !empty($totalAmount)}{$totalAmount|crmMoney}{/if} {if !empty($hookDiscount.message)}({$hookDiscount.message}){/if}

{if !empty($balanceAmount)}
{ts}Balance{/ts}: {$balanceAmount|crmMoney}
{/if}

{if !empty($pricesetFieldsCount) }
      {assign var="count" value= 0}
      {foreach from=$lineItem item=pcount}
      {assign var="lineItemCount" value=0}
      {if $pcount neq \'skip\'}
        {foreach from=$pcount item=p_count}
        {assign var="lineItemCount" value=$lineItemCount+$p_count.participant_count}
        {/foreach}
        {if $lineItemCount < 1 }
        {assign var="lineItemCount" value=1}
        {/if}
      {assign var="count" value=$count+$lineItemCount}
      {/if}
      {/foreach}

{ts}Total Participants{/ts}: {$count}
{/if}

{if !empty($is_pay_later) }

==========================================================={if !empty($pricesetFieldsCount) }===================={/if}

{$pay_later_receipt}
==========================================================={if !empty($pricesetFieldsCount) }===================={/if}

{/if}

{if $register_date}
{ts}Registration Date{/ts}: {$register_date|crmDate}
{/if}
{if $receive_date}
{ts}Transaction Date{/ts}: {$receive_date|crmDate}
{/if}
{if !empty($financialTypeName)}
{ts}Financial Type{/ts}: {$financialTypeName}
{/if}
{if !empty($trxn_id)}
{ts}Transaction #{/ts}: {$trxn_id}
{/if}
{if !empty($paidBy)}
{ts}Paid By{/ts}: {$paidBy}
{/if}
{if !empty($checkNumber)}
{ts}Check Number{/ts}: {$checkNumber}
{/if}
{if !empty($billingName)}

==========================================================={if !empty($pricesetFieldsCount) }===================={/if}

{ts}Billing Name and Address{/ts}

==========================================================={if !empty($pricesetFieldsCount) }===================={/if}

{$billingName}
{$address}
{/if}

{if !empty($credit_card_type)}
===========================================================
{ts}Credit Card Information{/ts}

==========================================================={if !empty($pricesetFieldsCount) }===================={/if}

{$credit_card_type}
{$credit_card_number}
{ts}Expires{/ts}: {$credit_card_exp_date|truncate:7:\'\'|crmDate}
{/if}
{/if}
{/if} {* End of conditional section for Paid events *}

{if !empty($customPre)}
==========================================================={if !empty($pricesetFieldsCount) }===================={/if}

{$customPre_grouptitle}
==========================================================={if !empty($pricesetFieldsCount) }===================={/if}

{foreach from=$customPre item=value key=customName}
{if ( !empty($trackingFields) and ! in_array( $customName, $trackingFields ) ) or empty($trackingFields)}
{$customName}: {$value}
{/if}
{/foreach}
{/if}

{if !empty($customPost)}
==========================================================={if !empty($pricesetFieldsCount) }===================={/if}

{$customPost_grouptitle}
==========================================================={if !empty($pricesetFieldsCount) }===================={/if}

{foreach from=$customPost item=value key=customName}
{if ( !empty($trackingFields) and ! in_array( $customName, $trackingFields ) ) or empty($trackingFields)}
{$customName}: {$value}
{/if}
{/foreach}
{/if}
{if !empty($customProfile)}

{foreach from=$customProfile item=value key=customName}
==========================================================={if !empty($pricesetFieldsCount) }===================={/if}

{ts 1=$customName+1}Participant Information - Participant %1{/ts}

==========================================================={if !empty($pricesetFieldsCount) }===================={/if}

{foreach from=$value item=val key=field}
{if $field eq \'additionalCustomPre\' or $field eq \'additionalCustomPost\' }
{if $field eq \'additionalCustomPre\' }
----------------------------------------------------------{if !empty($pricesetFieldsCount) }--------------------{/if}

{$additionalCustomPre_grouptitle}
----------------------------------------------------------{if !empty($pricesetFieldsCount) }--------------------{/if}

{else}
----------------------------------------------------------{if !empty($pricesetFieldsCount) }--------------------{/if}

{$additionalCustomPost_grouptitle}
----------------------------------------------------------{if !empty($pricesetFieldsCount) }--------------------{/if}

{/if}
{foreach from=$val item=v key=f}
{$f}: {$v}
{/foreach}
{/if}
{/foreach}
{/foreach}
{/if}
{if !empty($customGroup)}
{foreach from=$customGroup item=value key=customName}
=========================================================={if !empty($pricesetFieldsCount) }===================={/if}

{$customName}
=========================================================={if !empty($pricesetFieldsCount) }===================={/if}

{foreach from=$value item=v key=n}
{$n}: {$v}
{/foreach}
{/foreach}
{/if}


', 95, false),array('modifier', 'string_format', 'string:{assign var="greeting" value="Dear Jim"}{if $greeting}{$greeting},{/if}
{if !empty($event.confirm_email_text) AND (empty($isOnWaitlist) AND empty($isRequireApproval))}
{$event.confirm_email_text}
{/if}

{if !empty($isOnWaitlist)}
==========================================================={if !empty($pricesetFieldsCount) }===================={/if}

{ts}You have been added to the WAIT LIST for this event.{/ts}

{if !empty($isPrimary)}
{ts}If space becomes available you will receive an email with a link to a web page where you can complete your registration.{/ts}

{/if}
==========================================================={if !empty($pricesetFieldsCount) }===================={/if}

{elseif !empty($isRequireApproval)}
==========================================================={if !empty($pricesetFieldsCount) }===================={/if}

{ts}Your registration has been submitted.{/ts}

{if !empty($isPrimary)}
{ts}Once your registration has been reviewed, you will receive an email with a link to a web page where you can complete the registration process.{/ts}

{/if}
==========================================================={if !empty($pricesetFieldsCount) }===================={/if}

{elseif !empty($is_pay_later)}

==========================================================={if !empty($pricesetFieldsCount) }===================={/if}

{if isset($pay_later_receipt)}{$pay_later_receipt}{/if}
==========================================================={if !empty($pricesetFieldsCount) }===================={/if}

{/if}


==========================================================={if !empty($pricesetFieldsCount) }===================={/if}

{ts}Event Information and Location{/ts}

==========================================================={if !empty($pricesetFieldsCount) }===================={/if}

{$event.event_title}
{$event.event_start_date|crmDate}{if $event.event_end_date}-{if $event.event_end_date|date_format:"%Y%m%d" == $event.event_start_date|date_format:"%Y%m%d"}{$event.event_end_date|crmDate:0:1}{else}{$event.event_end_date|crmDate}{/if}{/if}

{if !empty($event.participant_role) and $event.participant_role neq \'Attendee\' and empty($defaultRole)}
{ts}Participant Role{/ts}: {$event.participant_role}
{/if}

{if !empty($isShowLocation)}
{$location.address.1.display|strip_tags:false}
{/if}{*End of isShowLocation condition*}

{if !empty($location.phone.1.phone) || !empty($location.email.1.email)}

{ts}Event Contacts:{/ts}
{foreach from=$location.phone item=phone}
{if $phone.phone}

{if $phone.phone_type}{$phone.phone_type_display}{else}{ts}Phone{/ts}{/if}: {$phone.phone}{/if} {if $phone.phone_ext} {ts}ext.{/ts} {$phone.phone_ext}{/if}
{/foreach}
{foreach from=$location.email item=eventEmail}
{if $eventEmail.email}

{ts}Email{/ts}: {$eventEmail.email}{/if}{/foreach}
{/if}

{if !empty($event.is_public)}
{capture assign=icalFeed}{crmURL p=\'civicrm/event/ical\' q="reset=1&id=`$event.id`" h=0 a=1 fe=1}{/capture}
{ts}Download iCalendar File:{/ts} {$icalFeed}
{/if}

{if !empty($email)}

==========================================================={if !empty($pricesetFieldsCount) }===================={/if}

{ts}Registered Email{/ts}

==========================================================={if !empty($pricesetFieldsCount) }===================={/if}

{$email}
{/if}
{if !empty($event.is_monetary)} {* This section for Paid events only.*}

==========================================================={if !empty($pricesetFieldsCount) }===================={/if}

{if !empty($event.fee_label)}{$event.fee_label}{/if}
==========================================================={if !empty($pricesetFieldsCount) }===================={/if}

{if !empty($lineItem)}{foreach from=$lineItem item=value key=priceset}

{if $value neq \'skip\'}
{if !empty($isPrimary)}
{if $lineItem|@count GT 1} {* Header for multi participant registration cases. *}
{ts 1=$priceset+1}Participant %1{/ts}
{/if}
{/if}
---------------------------------------------------------{if !empty($pricesetFieldsCount) }--------------------{/if}

{capture assign=ts_item}{ts}Item{/ts}{/capture}
{capture assign=ts_qty}{ts}Qty{/ts}{/capture}
{capture assign=ts_each}{ts}Each{/ts}{/capture}
{if !empty($dataArray)}
{capture assign=ts_subtotal}{ts}Subtotal{/ts}{/capture}
{capture assign=ts_taxRate}{ts}Tax Rate{/ts}{/capture}
{capture assign=ts_taxAmount}{ts}Tax Amount{/ts}{/capture}
{/if}
{capture assign=ts_total}{ts}Total{/ts}{/capture}
{capture assign=ts_participant_total}{if !empty($pricesetFieldsCount) }{ts}Total Participants{/ts}{/if}{/capture}
{$ts_item|string_format:"%-30s"} {$ts_qty|string_format:"%5s"} {$ts_each|string_format:"%10s"} {if !empty($dataArray)} {$ts_subtotal|string_format:"%10s"} {$ts_taxRate|string_format:"%10s"} {$ts_taxAmount|string_format:"%10s"} {/if} {$ts_total|string_format:"%10s"} {if !empty($ts_participant_total)}{$ts_participant_total|string_format:"%10s"}{/if}
----------------------------------------------------------{if !empty($pricesetFieldsCount) }--------------------{/if}

{foreach from=$value item=line}
{if !empty($pricesetFieldsCount) }{capture assign=ts_participant_count}{$line.participant_count}{/capture}{/if}
{capture assign=ts_item}{if $line.html_type eq \'Text\'}{$line.label}{else}{$line.field_title} - {$line.label}{/if} {if $line.description} {$line.description}{/if}{/capture}{$ts_item|truncate:30:"..."|string_format:"%-30s"} {$line.qty|string_format:"%5s"} {$line.unit_price|crmMoney|string_format:"%10s"} {if !empty($dataArray)} {$line.unit_price*$line.qty|crmMoney:$currency|string_format:"%10s"} {if isset($line.tax_rate) and ($line.tax_rate != "" || $line.tax_amount != "")}  {$line.tax_rate|string_format:"%.2f"} %  {$line.tax_amount|crmMoney:$currency|string_format:"%10s"} {else}                  {/if}  {/if}  {$line.line_total+$line.tax_amount|crmMoney|string_format:"%10s"} {if !empty($ts_participant_count)}{$ts_participant_count|string_format:"%10s"}{/if}
{/foreach}
{/if}
{/foreach}

{if !empty($dataArray)}
{if isset($totalAmount) and isset($totalTaxAmount)}
{ts}Amount before Tax{/ts}: {$totalAmount-$totalTaxAmount|crmMoney:$currency}
{/if}

{foreach from=$dataArray item=value key=priceset}
{if $priceset || $priceset == 0}
{if isset($taxTerm)}{$taxTerm}{/if} {$priceset|string_format:"%.2f"}%: {$value|crmMoney:$currency}
{else}
{ts}No{/ts} {if isset($taxTerm)}{$taxTerm}{/if}: {$value|crmMoney:$currency}
{/if}
{/foreach}
{/if}
{/if}

{if !empty($amount) && !$lineItem}
{foreach from=$amount item=amnt key=level}{$amnt.amount|crmMoney} {$amnt.label}
{/foreach}
{/if}

{if isset($totalTaxAmount)}
{ts}Total Tax Amount{/ts}: {$totalTaxAmount|crmMoney:$currency}
{/if}
{if !empty($isPrimary)}

{if !empty($balanceAmount)}{ts}Total Paid{/ts}{else}{ts}Total Amount{/ts}{/if}: {if !empty($totalAmount)}{$totalAmount|crmMoney}{/if} {if !empty($hookDiscount.message)}({$hookDiscount.message}){/if}

{if !empty($balanceAmount)}
{ts}Balance{/ts}: {$balanceAmount|crmMoney}
{/if}

{if !empty($pricesetFieldsCount) }
      {assign var="count" value= 0}
      {foreach from=$lineItem item=pcount}
      {assign var="lineItemCount" value=0}
      {if $pcount neq \'skip\'}
        {foreach from=$pcount item=p_count}
        {assign var="lineItemCount" value=$lineItemCount+$p_count.participant_count}
        {/foreach}
        {if $lineItemCount < 1 }
        {assign var="lineItemCount" value=1}
        {/if}
      {assign var="count" value=$count+$lineItemCount}
      {/if}
      {/foreach}

{ts}Total Participants{/ts}: {$count}
{/if}

{if !empty($is_pay_later) }

==========================================================={if !empty($pricesetFieldsCount) }===================={/if}

{$pay_later_receipt}
==========================================================={if !empty($pricesetFieldsCount) }===================={/if}

{/if}

{if $register_date}
{ts}Registration Date{/ts}: {$register_date|crmDate}
{/if}
{if $receive_date}
{ts}Transaction Date{/ts}: {$receive_date|crmDate}
{/if}
{if !empty($financialTypeName)}
{ts}Financial Type{/ts}: {$financialTypeName}
{/if}
{if !empty($trxn_id)}
{ts}Transaction #{/ts}: {$trxn_id}
{/if}
{if !empty($paidBy)}
{ts}Paid By{/ts}: {$paidBy}
{/if}
{if !empty($checkNumber)}
{ts}Check Number{/ts}: {$checkNumber}
{/if}
{if !empty($billingName)}

==========================================================={if !empty($pricesetFieldsCount) }===================={/if}

{ts}Billing Name and Address{/ts}

==========================================================={if !empty($pricesetFieldsCount) }===================={/if}

{$billingName}
{$address}
{/if}

{if !empty($credit_card_type)}
===========================================================
{ts}Credit Card Information{/ts}

==========================================================={if !empty($pricesetFieldsCount) }===================={/if}

{$credit_card_type}
{$credit_card_number}
{ts}Expires{/ts}: {$credit_card_exp_date|truncate:7:\'\'|crmDate}
{/if}
{/if}
{/if} {* End of conditional section for Paid events *}

{if !empty($customPre)}
==========================================================={if !empty($pricesetFieldsCount) }===================={/if}

{$customPre_grouptitle}
==========================================================={if !empty($pricesetFieldsCount) }===================={/if}

{foreach from=$customPre item=value key=customName}
{if ( !empty($trackingFields) and ! in_array( $customName, $trackingFields ) ) or empty($trackingFields)}
{$customName}: {$value}
{/if}
{/foreach}
{/if}

{if !empty($customPost)}
==========================================================={if !empty($pricesetFieldsCount) }===================={/if}

{$customPost_grouptitle}
==========================================================={if !empty($pricesetFieldsCount) }===================={/if}

{foreach from=$customPost item=value key=customName}
{if ( !empty($trackingFields) and ! in_array( $customName, $trackingFields ) ) or empty($trackingFields)}
{$customName}: {$value}
{/if}
{/foreach}
{/if}
{if !empty($customProfile)}

{foreach from=$customProfile item=value key=customName}
==========================================================={if !empty($pricesetFieldsCount) }===================={/if}

{ts 1=$customName+1}Participant Information - Participant %1{/ts}

==========================================================={if !empty($pricesetFieldsCount) }===================={/if}

{foreach from=$value item=val key=field}
{if $field eq \'additionalCustomPre\' or $field eq \'additionalCustomPost\' }
{if $field eq \'additionalCustomPre\' }
----------------------------------------------------------{if !empty($pricesetFieldsCount) }--------------------{/if}

{$additionalCustomPre_grouptitle}
----------------------------------------------------------{if !empty($pricesetFieldsCount) }--------------------{/if}

{else}
----------------------------------------------------------{if !empty($pricesetFieldsCount) }--------------------{/if}

{$additionalCustomPost_grouptitle}
----------------------------------------------------------{if !empty($pricesetFieldsCount) }--------------------{/if}

{/if}
{foreach from=$val item=v key=f}
{$f}: {$v}
{/foreach}
{/if}
{/foreach}
{/foreach}
{/if}
{if !empty($customGroup)}
{foreach from=$customGroup item=value key=customName}
=========================================================={if !empty($pricesetFieldsCount) }===================={/if}

{$customName}
=========================================================={if !empty($pricesetFieldsCount) }===================={/if}

{foreach from=$value item=v key=n}
{$n}: {$v}
{/foreach}
{/foreach}
{/if}


', 111, false),array('modifier', 'truncate', 'string:{assign var="greeting" value="Dear Jim"}{if $greeting}{$greeting},{/if}
{if !empty($event.confirm_email_text) AND (empty($isOnWaitlist) AND empty($isRequireApproval))}
{$event.confirm_email_text}
{/if}

{if !empty($isOnWaitlist)}
==========================================================={if !empty($pricesetFieldsCount) }===================={/if}

{ts}You have been added to the WAIT LIST for this event.{/ts}

{if !empty($isPrimary)}
{ts}If space becomes available you will receive an email with a link to a web page where you can complete your registration.{/ts}

{/if}
==========================================================={if !empty($pricesetFieldsCount) }===================={/if}

{elseif !empty($isRequireApproval)}
==========================================================={if !empty($pricesetFieldsCount) }===================={/if}

{ts}Your registration has been submitted.{/ts}

{if !empty($isPrimary)}
{ts}Once your registration has been reviewed, you will receive an email with a link to a web page where you can complete the registration process.{/ts}

{/if}
==========================================================={if !empty($pricesetFieldsCount) }===================={/if}

{elseif !empty($is_pay_later)}

==========================================================={if !empty($pricesetFieldsCount) }===================={/if}

{if isset($pay_later_receipt)}{$pay_later_receipt}{/if}
==========================================================={if !empty($pricesetFieldsCount) }===================={/if}

{/if}


==========================================================={if !empty($pricesetFieldsCount) }===================={/if}

{ts}Event Information and Location{/ts}

==========================================================={if !empty($pricesetFieldsCount) }===================={/if}

{$event.event_title}
{$event.event_start_date|crmDate}{if $event.event_end_date}-{if $event.event_end_date|date_format:"%Y%m%d" == $event.event_start_date|date_format:"%Y%m%d"}{$event.event_end_date|crmDate:0:1}{else}{$event.event_end_date|crmDate}{/if}{/if}

{if !empty($event.participant_role) and $event.participant_role neq \'Attendee\' and empty($defaultRole)}
{ts}Participant Role{/ts}: {$event.participant_role}
{/if}

{if !empty($isShowLocation)}
{$location.address.1.display|strip_tags:false}
{/if}{*End of isShowLocation condition*}

{if !empty($location.phone.1.phone) || !empty($location.email.1.email)}

{ts}Event Contacts:{/ts}
{foreach from=$location.phone item=phone}
{if $phone.phone}

{if $phone.phone_type}{$phone.phone_type_display}{else}{ts}Phone{/ts}{/if}: {$phone.phone}{/if} {if $phone.phone_ext} {ts}ext.{/ts} {$phone.phone_ext}{/if}
{/foreach}
{foreach from=$location.email item=eventEmail}
{if $eventEmail.email}

{ts}Email{/ts}: {$eventEmail.email}{/if}{/foreach}
{/if}

{if !empty($event.is_public)}
{capture assign=icalFeed}{crmURL p=\'civicrm/event/ical\' q="reset=1&id=`$event.id`" h=0 a=1 fe=1}{/capture}
{ts}Download iCalendar File:{/ts} {$icalFeed}
{/if}

{if !empty($email)}

==========================================================={if !empty($pricesetFieldsCount) }===================={/if}

{ts}Registered Email{/ts}

==========================================================={if !empty($pricesetFieldsCount) }===================={/if}

{$email}
{/if}
{if !empty($event.is_monetary)} {* This section for Paid events only.*}

==========================================================={if !empty($pricesetFieldsCount) }===================={/if}

{if !empty($event.fee_label)}{$event.fee_label}{/if}
==========================================================={if !empty($pricesetFieldsCount) }===================={/if}

{if !empty($lineItem)}{foreach from=$lineItem item=value key=priceset}

{if $value neq \'skip\'}
{if !empty($isPrimary)}
{if $lineItem|@count GT 1} {* Header for multi participant registration cases. *}
{ts 1=$priceset+1}Participant %1{/ts}
{/if}
{/if}
---------------------------------------------------------{if !empty($pricesetFieldsCount) }--------------------{/if}

{capture assign=ts_item}{ts}Item{/ts}{/capture}
{capture assign=ts_qty}{ts}Qty{/ts}{/capture}
{capture assign=ts_each}{ts}Each{/ts}{/capture}
{if !empty($dataArray)}
{capture assign=ts_subtotal}{ts}Subtotal{/ts}{/capture}
{capture assign=ts_taxRate}{ts}Tax Rate{/ts}{/capture}
{capture assign=ts_taxAmount}{ts}Tax Amount{/ts}{/capture}
{/if}
{capture assign=ts_total}{ts}Total{/ts}{/capture}
{capture assign=ts_participant_total}{if !empty($pricesetFieldsCount) }{ts}Total Participants{/ts}{/if}{/capture}
{$ts_item|string_format:"%-30s"} {$ts_qty|string_format:"%5s"} {$ts_each|string_format:"%10s"} {if !empty($dataArray)} {$ts_subtotal|string_format:"%10s"} {$ts_taxRate|string_format:"%10s"} {$ts_taxAmount|string_format:"%10s"} {/if} {$ts_total|string_format:"%10s"} {if !empty($ts_participant_total)}{$ts_participant_total|string_format:"%10s"}{/if}
----------------------------------------------------------{if !empty($pricesetFieldsCount) }--------------------{/if}

{foreach from=$value item=line}
{if !empty($pricesetFieldsCount) }{capture assign=ts_participant_count}{$line.participant_count}{/capture}{/if}
{capture assign=ts_item}{if $line.html_type eq \'Text\'}{$line.label}{else}{$line.field_title} - {$line.label}{/if} {if $line.description} {$line.description}{/if}{/capture}{$ts_item|truncate:30:"..."|string_format:"%-30s"} {$line.qty|string_format:"%5s"} {$line.unit_price|crmMoney|string_format:"%10s"} {if !empty($dataArray)} {$line.unit_price*$line.qty|crmMoney:$currency|string_format:"%10s"} {if isset($line.tax_rate) and ($line.tax_rate != "" || $line.tax_amount != "")}  {$line.tax_rate|string_format:"%.2f"} %  {$line.tax_amount|crmMoney:$currency|string_format:"%10s"} {else}                  {/if}  {/if}  {$line.line_total+$line.tax_amount|crmMoney|string_format:"%10s"} {if !empty($ts_participant_count)}{$ts_participant_count|string_format:"%10s"}{/if}
{/foreach}
{/if}
{/foreach}

{if !empty($dataArray)}
{if isset($totalAmount) and isset($totalTaxAmount)}
{ts}Amount before Tax{/ts}: {$totalAmount-$totalTaxAmount|crmMoney:$currency}
{/if}

{foreach from=$dataArray item=value key=priceset}
{if $priceset || $priceset == 0}
{if isset($taxTerm)}{$taxTerm}{/if} {$priceset|string_format:"%.2f"}%: {$value|crmMoney:$currency}
{else}
{ts}No{/ts} {if isset($taxTerm)}{$taxTerm}{/if}: {$value|crmMoney:$currency}
{/if}
{/foreach}
{/if}
{/if}

{if !empty($amount) && !$lineItem}
{foreach from=$amount item=amnt key=level}{$amnt.amount|crmMoney} {$amnt.label}
{/foreach}
{/if}

{if isset($totalTaxAmount)}
{ts}Total Tax Amount{/ts}: {$totalTaxAmount|crmMoney:$currency}
{/if}
{if !empty($isPrimary)}

{if !empty($balanceAmount)}{ts}Total Paid{/ts}{else}{ts}Total Amount{/ts}{/if}: {if !empty($totalAmount)}{$totalAmount|crmMoney}{/if} {if !empty($hookDiscount.message)}({$hookDiscount.message}){/if}

{if !empty($balanceAmount)}
{ts}Balance{/ts}: {$balanceAmount|crmMoney}
{/if}

{if !empty($pricesetFieldsCount) }
      {assign var="count" value= 0}
      {foreach from=$lineItem item=pcount}
      {assign var="lineItemCount" value=0}
      {if $pcount neq \'skip\'}
        {foreach from=$pcount item=p_count}
        {assign var="lineItemCount" value=$lineItemCount+$p_count.participant_count}
        {/foreach}
        {if $lineItemCount < 1 }
        {assign var="lineItemCount" value=1}
        {/if}
      {assign var="count" value=$count+$lineItemCount}
      {/if}
      {/foreach}

{ts}Total Participants{/ts}: {$count}
{/if}

{if !empty($is_pay_later) }

==========================================================={if !empty($pricesetFieldsCount) }===================={/if}

{$pay_later_receipt}
==========================================================={if !empty($pricesetFieldsCount) }===================={/if}

{/if}

{if $register_date}
{ts}Registration Date{/ts}: {$register_date|crmDate}
{/if}
{if $receive_date}
{ts}Transaction Date{/ts}: {$receive_date|crmDate}
{/if}
{if !empty($financialTypeName)}
{ts}Financial Type{/ts}: {$financialTypeName}
{/if}
{if !empty($trxn_id)}
{ts}Transaction #{/ts}: {$trxn_id}
{/if}
{if !empty($paidBy)}
{ts}Paid By{/ts}: {$paidBy}
{/if}
{if !empty($checkNumber)}
{ts}Check Number{/ts}: {$checkNumber}
{/if}
{if !empty($billingName)}

==========================================================={if !empty($pricesetFieldsCount) }===================={/if}

{ts}Billing Name and Address{/ts}

==========================================================={if !empty($pricesetFieldsCount) }===================={/if}

{$billingName}
{$address}
{/if}

{if !empty($credit_card_type)}
===========================================================
{ts}Credit Card Information{/ts}

==========================================================={if !empty($pricesetFieldsCount) }===================={/if}

{$credit_card_type}
{$credit_card_number}
{ts}Expires{/ts}: {$credit_card_exp_date|truncate:7:\'\'|crmDate}
{/if}
{/if}
{/if} {* End of conditional section for Paid events *}

{if !empty($customPre)}
==========================================================={if !empty($pricesetFieldsCount) }===================={/if}

{$customPre_grouptitle}
==========================================================={if !empty($pricesetFieldsCount) }===================={/if}

{foreach from=$customPre item=value key=customName}
{if ( !empty($trackingFields) and ! in_array( $customName, $trackingFields ) ) or empty($trackingFields)}
{$customName}: {$value}
{/if}
{/foreach}
{/if}

{if !empty($customPost)}
==========================================================={if !empty($pricesetFieldsCount) }===================={/if}

{$customPost_grouptitle}
==========================================================={if !empty($pricesetFieldsCount) }===================={/if}

{foreach from=$customPost item=value key=customName}
{if ( !empty($trackingFields) and ! in_array( $customName, $trackingFields ) ) or empty($trackingFields)}
{$customName}: {$value}
{/if}
{/foreach}
{/if}
{if !empty($customProfile)}

{foreach from=$customProfile item=value key=customName}
==========================================================={if !empty($pricesetFieldsCount) }===================={/if}

{ts 1=$customName+1}Participant Information - Participant %1{/ts}

==========================================================={if !empty($pricesetFieldsCount) }===================={/if}

{foreach from=$value item=val key=field}
{if $field eq \'additionalCustomPre\' or $field eq \'additionalCustomPost\' }
{if $field eq \'additionalCustomPre\' }
----------------------------------------------------------{if !empty($pricesetFieldsCount) }--------------------{/if}

{$additionalCustomPre_grouptitle}
----------------------------------------------------------{if !empty($pricesetFieldsCount) }--------------------{/if}

{else}
----------------------------------------------------------{if !empty($pricesetFieldsCount) }--------------------{/if}

{$additionalCustomPost_grouptitle}
----------------------------------------------------------{if !empty($pricesetFieldsCount) }--------------------{/if}

{/if}
{foreach from=$val item=v key=f}
{$f}: {$v}
{/foreach}
{/if}
{/foreach}
{/foreach}
{/if}
{if !empty($customGroup)}
{foreach from=$customGroup item=value key=customName}
=========================================================={if !empty($pricesetFieldsCount) }===================={/if}

{$customName}
=========================================================={if !empty($pricesetFieldsCount) }===================={/if}

{foreach from=$value item=v key=n}
{$n}: {$v}
{/foreach}
{/foreach}
{/if}


', 116, false),array('modifier', 'crmMoney', 'string:{assign var="greeting" value="Dear Jim"}{if $greeting}{$greeting},{/if}
{if !empty($event.confirm_email_text) AND (empty($isOnWaitlist) AND empty($isRequireApproval))}
{$event.confirm_email_text}
{/if}

{if !empty($isOnWaitlist)}
==========================================================={if !empty($pricesetFieldsCount) }===================={/if}

{ts}You have been added to the WAIT LIST for this event.{/ts}

{if !empty($isPrimary)}
{ts}If space becomes available you will receive an email with a link to a web page where you can complete your registration.{/ts}

{/if}
==========================================================={if !empty($pricesetFieldsCount) }===================={/if}

{elseif !empty($isRequireApproval)}
==========================================================={if !empty($pricesetFieldsCount) }===================={/if}

{ts}Your registration has been submitted.{/ts}

{if !empty($isPrimary)}
{ts}Once your registration has been reviewed, you will receive an email with a link to a web page where you can complete the registration process.{/ts}

{/if}
==========================================================={if !empty($pricesetFieldsCount) }===================={/if}

{elseif !empty($is_pay_later)}

==========================================================={if !empty($pricesetFieldsCount) }===================={/if}

{if isset($pay_later_receipt)}{$pay_later_receipt}{/if}
==========================================================={if !empty($pricesetFieldsCount) }===================={/if}

{/if}


==========================================================={if !empty($pricesetFieldsCount) }===================={/if}

{ts}Event Information and Location{/ts}

==========================================================={if !empty($pricesetFieldsCount) }===================={/if}

{$event.event_title}
{$event.event_start_date|crmDate}{if $event.event_end_date}-{if $event.event_end_date|date_format:"%Y%m%d" == $event.event_start_date|date_format:"%Y%m%d"}{$event.event_end_date|crmDate:0:1}{else}{$event.event_end_date|crmDate}{/if}{/if}

{if !empty($event.participant_role) and $event.participant_role neq \'Attendee\' and empty($defaultRole)}
{ts}Participant Role{/ts}: {$event.participant_role}
{/if}

{if !empty($isShowLocation)}
{$location.address.1.display|strip_tags:false}
{/if}{*End of isShowLocation condition*}

{if !empty($location.phone.1.phone) || !empty($location.email.1.email)}

{ts}Event Contacts:{/ts}
{foreach from=$location.phone item=phone}
{if $phone.phone}

{if $phone.phone_type}{$phone.phone_type_display}{else}{ts}Phone{/ts}{/if}: {$phone.phone}{/if} {if $phone.phone_ext} {ts}ext.{/ts} {$phone.phone_ext}{/if}
{/foreach}
{foreach from=$location.email item=eventEmail}
{if $eventEmail.email}

{ts}Email{/ts}: {$eventEmail.email}{/if}{/foreach}
{/if}

{if !empty($event.is_public)}
{capture assign=icalFeed}{crmURL p=\'civicrm/event/ical\' q="reset=1&id=`$event.id`" h=0 a=1 fe=1}{/capture}
{ts}Download iCalendar File:{/ts} {$icalFeed}
{/if}

{if !empty($email)}

==========================================================={if !empty($pricesetFieldsCount) }===================={/if}

{ts}Registered Email{/ts}

==========================================================={if !empty($pricesetFieldsCount) }===================={/if}

{$email}
{/if}
{if !empty($event.is_monetary)} {* This section for Paid events only.*}

==========================================================={if !empty($pricesetFieldsCount) }===================={/if}

{if !empty($event.fee_label)}{$event.fee_label}{/if}
==========================================================={if !empty($pricesetFieldsCount) }===================={/if}

{if !empty($lineItem)}{foreach from=$lineItem item=value key=priceset}

{if $value neq \'skip\'}
{if !empty($isPrimary)}
{if $lineItem|@count GT 1} {* Header for multi participant registration cases. *}
{ts 1=$priceset+1}Participant %1{/ts}
{/if}
{/if}
---------------------------------------------------------{if !empty($pricesetFieldsCount) }--------------------{/if}

{capture assign=ts_item}{ts}Item{/ts}{/capture}
{capture assign=ts_qty}{ts}Qty{/ts}{/capture}
{capture assign=ts_each}{ts}Each{/ts}{/capture}
{if !empty($dataArray)}
{capture assign=ts_subtotal}{ts}Subtotal{/ts}{/capture}
{capture assign=ts_taxRate}{ts}Tax Rate{/ts}{/capture}
{capture assign=ts_taxAmount}{ts}Tax Amount{/ts}{/capture}
{/if}
{capture assign=ts_total}{ts}Total{/ts}{/capture}
{capture assign=ts_participant_total}{if !empty($pricesetFieldsCount) }{ts}Total Participants{/ts}{/if}{/capture}
{$ts_item|string_format:"%-30s"} {$ts_qty|string_format:"%5s"} {$ts_each|string_format:"%10s"} {if !empty($dataArray)} {$ts_subtotal|string_format:"%10s"} {$ts_taxRate|string_format:"%10s"} {$ts_taxAmount|string_format:"%10s"} {/if} {$ts_total|string_format:"%10s"} {if !empty($ts_participant_total)}{$ts_participant_total|string_format:"%10s"}{/if}
----------------------------------------------------------{if !empty($pricesetFieldsCount) }--------------------{/if}

{foreach from=$value item=line}
{if !empty($pricesetFieldsCount) }{capture assign=ts_participant_count}{$line.participant_count}{/capture}{/if}
{capture assign=ts_item}{if $line.html_type eq \'Text\'}{$line.label}{else}{$line.field_title} - {$line.label}{/if} {if $line.description} {$line.description}{/if}{/capture}{$ts_item|truncate:30:"..."|string_format:"%-30s"} {$line.qty|string_format:"%5s"} {$line.unit_price|crmMoney|string_format:"%10s"} {if !empty($dataArray)} {$line.unit_price*$line.qty|crmMoney:$currency|string_format:"%10s"} {if isset($line.tax_rate) and ($line.tax_rate != "" || $line.tax_amount != "")}  {$line.tax_rate|string_format:"%.2f"} %  {$line.tax_amount|crmMoney:$currency|string_format:"%10s"} {else}                  {/if}  {/if}  {$line.line_total+$line.tax_amount|crmMoney|string_format:"%10s"} {if !empty($ts_participant_count)}{$ts_participant_count|string_format:"%10s"}{/if}
{/foreach}
{/if}
{/foreach}

{if !empty($dataArray)}
{if isset($totalAmount) and isset($totalTaxAmount)}
{ts}Amount before Tax{/ts}: {$totalAmount-$totalTaxAmount|crmMoney:$currency}
{/if}

{foreach from=$dataArray item=value key=priceset}
{if $priceset || $priceset == 0}
{if isset($taxTerm)}{$taxTerm}{/if} {$priceset|string_format:"%.2f"}%: {$value|crmMoney:$currency}
{else}
{ts}No{/ts} {if isset($taxTerm)}{$taxTerm}{/if}: {$value|crmMoney:$currency}
{/if}
{/foreach}
{/if}
{/if}

{if !empty($amount) && !$lineItem}
{foreach from=$amount item=amnt key=level}{$amnt.amount|crmMoney} {$amnt.label}
{/foreach}
{/if}

{if isset($totalTaxAmount)}
{ts}Total Tax Amount{/ts}: {$totalTaxAmount|crmMoney:$currency}
{/if}
{if !empty($isPrimary)}

{if !empty($balanceAmount)}{ts}Total Paid{/ts}{else}{ts}Total Amount{/ts}{/if}: {if !empty($totalAmount)}{$totalAmount|crmMoney}{/if} {if !empty($hookDiscount.message)}({$hookDiscount.message}){/if}

{if !empty($balanceAmount)}
{ts}Balance{/ts}: {$balanceAmount|crmMoney}
{/if}

{if !empty($pricesetFieldsCount) }
      {assign var="count" value= 0}
      {foreach from=$lineItem item=pcount}
      {assign var="lineItemCount" value=0}
      {if $pcount neq \'skip\'}
        {foreach from=$pcount item=p_count}
        {assign var="lineItemCount" value=$lineItemCount+$p_count.participant_count}
        {/foreach}
        {if $lineItemCount < 1 }
        {assign var="lineItemCount" value=1}
        {/if}
      {assign var="count" value=$count+$lineItemCount}
      {/if}
      {/foreach}

{ts}Total Participants{/ts}: {$count}
{/if}

{if !empty($is_pay_later) }

==========================================================={if !empty($pricesetFieldsCount) }===================={/if}

{$pay_later_receipt}
==========================================================={if !empty($pricesetFieldsCount) }===================={/if}

{/if}

{if $register_date}
{ts}Registration Date{/ts}: {$register_date|crmDate}
{/if}
{if $receive_date}
{ts}Transaction Date{/ts}: {$receive_date|crmDate}
{/if}
{if !empty($financialTypeName)}
{ts}Financial Type{/ts}: {$financialTypeName}
{/if}
{if !empty($trxn_id)}
{ts}Transaction #{/ts}: {$trxn_id}
{/if}
{if !empty($paidBy)}
{ts}Paid By{/ts}: {$paidBy}
{/if}
{if !empty($checkNumber)}
{ts}Check Number{/ts}: {$checkNumber}
{/if}
{if !empty($billingName)}

==========================================================={if !empty($pricesetFieldsCount) }===================={/if}

{ts}Billing Name and Address{/ts}

==========================================================={if !empty($pricesetFieldsCount) }===================={/if}

{$billingName}
{$address}
{/if}

{if !empty($credit_card_type)}
===========================================================
{ts}Credit Card Information{/ts}

==========================================================={if !empty($pricesetFieldsCount) }===================={/if}

{$credit_card_type}
{$credit_card_number}
{ts}Expires{/ts}: {$credit_card_exp_date|truncate:7:\'\'|crmDate}
{/if}
{/if}
{/if} {* End of conditional section for Paid events *}

{if !empty($customPre)}
==========================================================={if !empty($pricesetFieldsCount) }===================={/if}

{$customPre_grouptitle}
==========================================================={if !empty($pricesetFieldsCount) }===================={/if}

{foreach from=$customPre item=value key=customName}
{if ( !empty($trackingFields) and ! in_array( $customName, $trackingFields ) ) or empty($trackingFields)}
{$customName}: {$value}
{/if}
{/foreach}
{/if}

{if !empty($customPost)}
==========================================================={if !empty($pricesetFieldsCount) }===================={/if}

{$customPost_grouptitle}
==========================================================={if !empty($pricesetFieldsCount) }===================={/if}

{foreach from=$customPost item=value key=customName}
{if ( !empty($trackingFields) and ! in_array( $customName, $trackingFields ) ) or empty($trackingFields)}
{$customName}: {$value}
{/if}
{/foreach}
{/if}
{if !empty($customProfile)}

{foreach from=$customProfile item=value key=customName}
==========================================================={if !empty($pricesetFieldsCount) }===================={/if}

{ts 1=$customName+1}Participant Information - Participant %1{/ts}

==========================================================={if !empty($pricesetFieldsCount) }===================={/if}

{foreach from=$value item=val key=field}
{if $field eq \'additionalCustomPre\' or $field eq \'additionalCustomPost\' }
{if $field eq \'additionalCustomPre\' }
----------------------------------------------------------{if !empty($pricesetFieldsCount) }--------------------{/if}

{$additionalCustomPre_grouptitle}
----------------------------------------------------------{if !empty($pricesetFieldsCount) }--------------------{/if}

{else}
----------------------------------------------------------{if !empty($pricesetFieldsCount) }--------------------{/if}

{$additionalCustomPost_grouptitle}
----------------------------------------------------------{if !empty($pricesetFieldsCount) }--------------------{/if}

{/if}
{foreach from=$val item=v key=f}
{$f}: {$v}
{/foreach}
{/if}
{/foreach}
{/foreach}
{/if}
{if !empty($customGroup)}
{foreach from=$customGroup item=value key=customName}
=========================================================={if !empty($pricesetFieldsCount) }===================={/if}

{$customName}
=========================================================={if !empty($pricesetFieldsCount) }===================={/if}

{foreach from=$value item=v key=n}
{$n}: {$v}
{/foreach}
{/foreach}
{/if}


', 116, false),array('function', 'crmURL', 'string:{assign var="greeting" value="Dear Jim"}{if $greeting}{$greeting},{/if}
{if !empty($event.confirm_email_text) AND (empty($isOnWaitlist) AND empty($isRequireApproval))}
{$event.confirm_email_text}
{/if}

{if !empty($isOnWaitlist)}
==========================================================={if !empty($pricesetFieldsCount) }===================={/if}

{ts}You have been added to the WAIT LIST for this event.{/ts}

{if !empty($isPrimary)}
{ts}If space becomes available you will receive an email with a link to a web page where you can complete your registration.{/ts}

{/if}
==========================================================={if !empty($pricesetFieldsCount) }===================={/if}

{elseif !empty($isRequireApproval)}
==========================================================={if !empty($pricesetFieldsCount) }===================={/if}

{ts}Your registration has been submitted.{/ts}

{if !empty($isPrimary)}
{ts}Once your registration has been reviewed, you will receive an email with a link to a web page where you can complete the registration process.{/ts}

{/if}
==========================================================={if !empty($pricesetFieldsCount) }===================={/if}

{elseif !empty($is_pay_later)}

==========================================================={if !empty($pricesetFieldsCount) }===================={/if}

{if isset($pay_later_receipt)}{$pay_later_receipt}{/if}
==========================================================={if !empty($pricesetFieldsCount) }===================={/if}

{/if}


==========================================================={if !empty($pricesetFieldsCount) }===================={/if}

{ts}Event Information and Location{/ts}

==========================================================={if !empty($pricesetFieldsCount) }===================={/if}

{$event.event_title}
{$event.event_start_date|crmDate}{if $event.event_end_date}-{if $event.event_end_date|date_format:"%Y%m%d" == $event.event_start_date|date_format:"%Y%m%d"}{$event.event_end_date|crmDate:0:1}{else}{$event.event_end_date|crmDate}{/if}{/if}

{if !empty($event.participant_role) and $event.participant_role neq \'Attendee\' and empty($defaultRole)}
{ts}Participant Role{/ts}: {$event.participant_role}
{/if}

{if !empty($isShowLocation)}
{$location.address.1.display|strip_tags:false}
{/if}{*End of isShowLocation condition*}

{if !empty($location.phone.1.phone) || !empty($location.email.1.email)}

{ts}Event Contacts:{/ts}
{foreach from=$location.phone item=phone}
{if $phone.phone}

{if $phone.phone_type}{$phone.phone_type_display}{else}{ts}Phone{/ts}{/if}: {$phone.phone}{/if} {if $phone.phone_ext} {ts}ext.{/ts} {$phone.phone_ext}{/if}
{/foreach}
{foreach from=$location.email item=eventEmail}
{if $eventEmail.email}

{ts}Email{/ts}: {$eventEmail.email}{/if}{/foreach}
{/if}

{if !empty($event.is_public)}
{capture assign=icalFeed}{crmURL p=\'civicrm/event/ical\' q="reset=1&id=`$event.id`" h=0 a=1 fe=1}{/capture}
{ts}Download iCalendar File:{/ts} {$icalFeed}
{/if}

{if !empty($email)}

==========================================================={if !empty($pricesetFieldsCount) }===================={/if}

{ts}Registered Email{/ts}

==========================================================={if !empty($pricesetFieldsCount) }===================={/if}

{$email}
{/if}
{if !empty($event.is_monetary)} {* This section for Paid events only.*}

==========================================================={if !empty($pricesetFieldsCount) }===================={/if}

{if !empty($event.fee_label)}{$event.fee_label}{/if}
==========================================================={if !empty($pricesetFieldsCount) }===================={/if}

{if !empty($lineItem)}{foreach from=$lineItem item=value key=priceset}

{if $value neq \'skip\'}
{if !empty($isPrimary)}
{if $lineItem|@count GT 1} {* Header for multi participant registration cases. *}
{ts 1=$priceset+1}Participant %1{/ts}
{/if}
{/if}
---------------------------------------------------------{if !empty($pricesetFieldsCount) }--------------------{/if}

{capture assign=ts_item}{ts}Item{/ts}{/capture}
{capture assign=ts_qty}{ts}Qty{/ts}{/capture}
{capture assign=ts_each}{ts}Each{/ts}{/capture}
{if !empty($dataArray)}
{capture assign=ts_subtotal}{ts}Subtotal{/ts}{/capture}
{capture assign=ts_taxRate}{ts}Tax Rate{/ts}{/capture}
{capture assign=ts_taxAmount}{ts}Tax Amount{/ts}{/capture}
{/if}
{capture assign=ts_total}{ts}Total{/ts}{/capture}
{capture assign=ts_participant_total}{if !empty($pricesetFieldsCount) }{ts}Total Participants{/ts}{/if}{/capture}
{$ts_item|string_format:"%-30s"} {$ts_qty|string_format:"%5s"} {$ts_each|string_format:"%10s"} {if !empty($dataArray)} {$ts_subtotal|string_format:"%10s"} {$ts_taxRate|string_format:"%10s"} {$ts_taxAmount|string_format:"%10s"} {/if} {$ts_total|string_format:"%10s"} {if !empty($ts_participant_total)}{$ts_participant_total|string_format:"%10s"}{/if}
----------------------------------------------------------{if !empty($pricesetFieldsCount) }--------------------{/if}

{foreach from=$value item=line}
{if !empty($pricesetFieldsCount) }{capture assign=ts_participant_count}{$line.participant_count}{/capture}{/if}
{capture assign=ts_item}{if $line.html_type eq \'Text\'}{$line.label}{else}{$line.field_title} - {$line.label}{/if} {if $line.description} {$line.description}{/if}{/capture}{$ts_item|truncate:30:"..."|string_format:"%-30s"} {$line.qty|string_format:"%5s"} {$line.unit_price|crmMoney|string_format:"%10s"} {if !empty($dataArray)} {$line.unit_price*$line.qty|crmMoney:$currency|string_format:"%10s"} {if isset($line.tax_rate) and ($line.tax_rate != "" || $line.tax_amount != "")}  {$line.tax_rate|string_format:"%.2f"} %  {$line.tax_amount|crmMoney:$currency|string_format:"%10s"} {else}                  {/if}  {/if}  {$line.line_total+$line.tax_amount|crmMoney|string_format:"%10s"} {if !empty($ts_participant_count)}{$ts_participant_count|string_format:"%10s"}{/if}
{/foreach}
{/if}
{/foreach}

{if !empty($dataArray)}
{if isset($totalAmount) and isset($totalTaxAmount)}
{ts}Amount before Tax{/ts}: {$totalAmount-$totalTaxAmount|crmMoney:$currency}
{/if}

{foreach from=$dataArray item=value key=priceset}
{if $priceset || $priceset == 0}
{if isset($taxTerm)}{$taxTerm}{/if} {$priceset|string_format:"%.2f"}%: {$value|crmMoney:$currency}
{else}
{ts}No{/ts} {if isset($taxTerm)}{$taxTerm}{/if}: {$value|crmMoney:$currency}
{/if}
{/foreach}
{/if}
{/if}

{if !empty($amount) && !$lineItem}
{foreach from=$amount item=amnt key=level}{$amnt.amount|crmMoney} {$amnt.label}
{/foreach}
{/if}

{if isset($totalTaxAmount)}
{ts}Total Tax Amount{/ts}: {$totalTaxAmount|crmMoney:$currency}
{/if}
{if !empty($isPrimary)}

{if !empty($balanceAmount)}{ts}Total Paid{/ts}{else}{ts}Total Amount{/ts}{/if}: {if !empty($totalAmount)}{$totalAmount|crmMoney}{/if} {if !empty($hookDiscount.message)}({$hookDiscount.message}){/if}

{if !empty($balanceAmount)}
{ts}Balance{/ts}: {$balanceAmount|crmMoney}
{/if}

{if !empty($pricesetFieldsCount) }
      {assign var="count" value= 0}
      {foreach from=$lineItem item=pcount}
      {assign var="lineItemCount" value=0}
      {if $pcount neq \'skip\'}
        {foreach from=$pcount item=p_count}
        {assign var="lineItemCount" value=$lineItemCount+$p_count.participant_count}
        {/foreach}
        {if $lineItemCount < 1 }
        {assign var="lineItemCount" value=1}
        {/if}
      {assign var="count" value=$count+$lineItemCount}
      {/if}
      {/foreach}

{ts}Total Participants{/ts}: {$count}
{/if}

{if !empty($is_pay_later) }

==========================================================={if !empty($pricesetFieldsCount) }===================={/if}

{$pay_later_receipt}
==========================================================={if !empty($pricesetFieldsCount) }===================={/if}

{/if}

{if $register_date}
{ts}Registration Date{/ts}: {$register_date|crmDate}
{/if}
{if $receive_date}
{ts}Transaction Date{/ts}: {$receive_date|crmDate}
{/if}
{if !empty($financialTypeName)}
{ts}Financial Type{/ts}: {$financialTypeName}
{/if}
{if !empty($trxn_id)}
{ts}Transaction #{/ts}: {$trxn_id}
{/if}
{if !empty($paidBy)}
{ts}Paid By{/ts}: {$paidBy}
{/if}
{if !empty($checkNumber)}
{ts}Check Number{/ts}: {$checkNumber}
{/if}
{if !empty($billingName)}

==========================================================={if !empty($pricesetFieldsCount) }===================={/if}

{ts}Billing Name and Address{/ts}

==========================================================={if !empty($pricesetFieldsCount) }===================={/if}

{$billingName}
{$address}
{/if}

{if !empty($credit_card_type)}
===========================================================
{ts}Credit Card Information{/ts}

==========================================================={if !empty($pricesetFieldsCount) }===================={/if}

{$credit_card_type}
{$credit_card_number}
{ts}Expires{/ts}: {$credit_card_exp_date|truncate:7:\'\'|crmDate}
{/if}
{/if}
{/if} {* End of conditional section for Paid events *}

{if !empty($customPre)}
==========================================================={if !empty($pricesetFieldsCount) }===================={/if}

{$customPre_grouptitle}
==========================================================={if !empty($pricesetFieldsCount) }===================={/if}

{foreach from=$customPre item=value key=customName}
{if ( !empty($trackingFields) and ! in_array( $customName, $trackingFields ) ) or empty($trackingFields)}
{$customName}: {$value}
{/if}
{/foreach}
{/if}

{if !empty($customPost)}
==========================================================={if !empty($pricesetFieldsCount) }===================={/if}

{$customPost_grouptitle}
==========================================================={if !empty($pricesetFieldsCount) }===================={/if}

{foreach from=$customPost item=value key=customName}
{if ( !empty($trackingFields) and ! in_array( $customName, $trackingFields ) ) or empty($trackingFields)}
{$customName}: {$value}
{/if}
{/foreach}
{/if}
{if !empty($customProfile)}

{foreach from=$customProfile item=value key=customName}
==========================================================={if !empty($pricesetFieldsCount) }===================={/if}

{ts 1=$customName+1}Participant Information - Participant %1{/ts}

==========================================================={if !empty($pricesetFieldsCount) }===================={/if}

{foreach from=$value item=val key=field}
{if $field eq \'additionalCustomPre\' or $field eq \'additionalCustomPost\' }
{if $field eq \'additionalCustomPre\' }
----------------------------------------------------------{if !empty($pricesetFieldsCount) }--------------------{/if}

{$additionalCustomPre_grouptitle}
----------------------------------------------------------{if !empty($pricesetFieldsCount) }--------------------{/if}

{else}
----------------------------------------------------------{if !empty($pricesetFieldsCount) }--------------------{/if}

{$additionalCustomPost_grouptitle}
----------------------------------------------------------{if !empty($pricesetFieldsCount) }--------------------{/if}

{/if}
{foreach from=$val item=v key=f}
{$f}: {$v}
{/foreach}
{/if}
{/foreach}
{/foreach}
{/if}
{if !empty($customGroup)}
{foreach from=$customGroup item=value key=customName}
=========================================================={if !empty($pricesetFieldsCount) }===================={/if}

{$customName}
=========================================================={if !empty($pricesetFieldsCount) }===================={/if}

{foreach from=$value item=v key=n}
{$n}: {$v}
{/foreach}
{/foreach}
{/if}


', 70, false),)), $this); ?>
<?php $this->_tag_stack[] = array('crmScope', array('extensionKey' => "")); $_block_repeat=true;smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php $this->assign('greeting', 'Dear Jim'); ?><?php if ($this->_tpl_vars['greeting']): ?><?php echo $this->_tpl_vars['greeting']; ?>
,<?php endif; ?>
<?php if (! empty ( $this->_tpl_vars['event']['confirm_email_text'] ) && ( empty ( $this->_tpl_vars['isOnWaitlist'] ) && empty ( $this->_tpl_vars['isRequireApproval'] ) )): ?>
<?php echo $this->_tpl_vars['event']['confirm_email_text']; ?>

<?php endif; ?>

<?php if (! empty ( $this->_tpl_vars['isOnWaitlist'] )): ?>
===========================================================<?php if (! empty ( $this->_tpl_vars['pricesetFieldsCount'] )): ?>====================<?php endif; ?>

<?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>You have been added to the WAIT LIST for this event.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>

<?php if (! empty ( $this->_tpl_vars['isPrimary'] )): ?>
<?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>If space becomes available you will receive an email with a link to a web page where you can complete your registration.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>

<?php endif; ?>
===========================================================<?php if (! empty ( $this->_tpl_vars['pricesetFieldsCount'] )): ?>====================<?php endif; ?>

<?php elseif (! empty ( $this->_tpl_vars['isRequireApproval'] )): ?>
===========================================================<?php if (! empty ( $this->_tpl_vars['pricesetFieldsCount'] )): ?>====================<?php endif; ?>

<?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Your registration has been submitted.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>

<?php if (! empty ( $this->_tpl_vars['isPrimary'] )): ?>
<?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Once your registration has been reviewed, you will receive an email with a link to a web page where you can complete the registration process.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>

<?php endif; ?>
===========================================================<?php if (! empty ( $this->_tpl_vars['pricesetFieldsCount'] )): ?>====================<?php endif; ?>

<?php elseif (! empty ( $this->_tpl_vars['is_pay_later'] )): ?>

===========================================================<?php if (! empty ( $this->_tpl_vars['pricesetFieldsCount'] )): ?>====================<?php endif; ?>

<?php if (isset ( $this->_tpl_vars['pay_later_receipt'] )): ?><?php echo $this->_tpl_vars['pay_later_receipt']; ?>
<?php endif; ?>
===========================================================<?php if (! empty ( $this->_tpl_vars['pricesetFieldsCount'] )): ?>====================<?php endif; ?>

<?php endif; ?>


===========================================================<?php if (! empty ( $this->_tpl_vars['pricesetFieldsCount'] )): ?>====================<?php endif; ?>

<?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Event Information and Location<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>

===========================================================<?php if (! empty ( $this->_tpl_vars['pricesetFieldsCount'] )): ?>====================<?php endif; ?>

<?php echo $this->_tpl_vars['event']['event_title']; ?>

<?php echo ((is_array($_tmp=$this->_tpl_vars['event']['event_start_date'])) ? $this->_run_mod_handler('crmDate', true, $_tmp) : smarty_modifier_crmDate($_tmp)); ?>
<?php if ($this->_tpl_vars['event']['event_end_date']): ?>-<?php if (((is_array($_tmp=$this->_tpl_vars['event']['event_end_date'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y%m%d") : smarty_modifier_date_format($_tmp, "%Y%m%d")) == ((is_array($_tmp=$this->_tpl_vars['event']['event_start_date'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y%m%d") : smarty_modifier_date_format($_tmp, "%Y%m%d"))): ?><?php echo ((is_array($_tmp=$this->_tpl_vars['event']['event_end_date'])) ? $this->_run_mod_handler('crmDate', true, $_tmp, 0, 1) : smarty_modifier_crmDate($_tmp, 0, 1)); ?>
<?php else: ?><?php echo ((is_array($_tmp=$this->_tpl_vars['event']['event_end_date'])) ? $this->_run_mod_handler('crmDate', true, $_tmp) : smarty_modifier_crmDate($_tmp)); ?>
<?php endif; ?><?php endif; ?>

<?php if (! empty ( $this->_tpl_vars['event']['participant_role'] ) && $this->_tpl_vars['event']['participant_role'] != 'Attendee' && empty ( $this->_tpl_vars['defaultRole'] )): ?>
<?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Participant Role<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>: <?php echo $this->_tpl_vars['event']['participant_role']; ?>

<?php endif; ?>

<?php if (! empty ( $this->_tpl_vars['isShowLocation'] )): ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['location']['address']['1']['display'])) ? $this->_run_mod_handler('strip_tags', true, $_tmp, false) : smarty_modifier_strip_tags($_tmp, false)); ?>

<?php endif; ?>
<?php if (! empty ( $this->_tpl_vars['location']['phone']['1']['phone'] ) || ! empty ( $this->_tpl_vars['location']['email']['1']['email'] )): ?>

<?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Event Contacts:<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
<?php $_from = $this->_tpl_vars['location']['phone']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['phone']):
?>
<?php if ($this->_tpl_vars['phone']['phone']): ?>

<?php if ($this->_tpl_vars['phone']['phone_type']): ?><?php echo $this->_tpl_vars['phone']['phone_type_display']; ?>
<?php else: ?><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Phone<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php endif; ?>: <?php echo $this->_tpl_vars['phone']['phone']; ?>
<?php endif; ?> <?php if ($this->_tpl_vars['phone']['phone_ext']): ?> <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>ext.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?> <?php echo $this->_tpl_vars['phone']['phone_ext']; ?>
<?php endif; ?>
<?php endforeach; endif; unset($_from); ?>
<?php $_from = $this->_tpl_vars['location']['email']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['eventEmail']):
?>
<?php if ($this->_tpl_vars['eventEmail']['email']): ?>

<?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Email<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>: <?php echo $this->_tpl_vars['eventEmail']['email']; ?>
<?php endif; ?><?php endforeach; endif; unset($_from); ?>
<?php endif; ?>

<?php if (! empty ( $this->_tpl_vars['event']['is_public'] )): ?>
<?php ob_start(); ?><?php echo CRM_Utils_System::crmURL(array('p' => 'civicrm/event/ical','q' => "reset=1&id=".($this->_tpl_vars['event']['id']),'h' => 0,'a' => 1,'fe' => 1), $this);?>
<?php $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->assign('icalFeed', ob_get_contents());ob_end_clean(); ?>
<?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Download iCalendar File:<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?> <?php echo $this->_tpl_vars['icalFeed']; ?>

<?php endif; ?>

<?php if (! empty ( $this->_tpl_vars['email'] )): ?>

===========================================================<?php if (! empty ( $this->_tpl_vars['pricesetFieldsCount'] )): ?>====================<?php endif; ?>

<?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Registered Email<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>

===========================================================<?php if (! empty ( $this->_tpl_vars['pricesetFieldsCount'] )): ?>====================<?php endif; ?>

<?php echo $this->_tpl_vars['email']; ?>

<?php endif; ?>
<?php if (! empty ( $this->_tpl_vars['event']['is_monetary'] )): ?> 
===========================================================<?php if (! empty ( $this->_tpl_vars['pricesetFieldsCount'] )): ?>====================<?php endif; ?>

<?php if (! empty ( $this->_tpl_vars['event']['fee_label'] )): ?><?php echo $this->_tpl_vars['event']['fee_label']; ?>
<?php endif; ?>
===========================================================<?php if (! empty ( $this->_tpl_vars['pricesetFieldsCount'] )): ?>====================<?php endif; ?>

<?php if (! empty ( $this->_tpl_vars['lineItem'] )): ?><?php $_from = $this->_tpl_vars['lineItem']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['priceset'] => $this->_tpl_vars['value']):
?>

<?php if ($this->_tpl_vars['value'] != 'skip'): ?>
<?php if (! empty ( $this->_tpl_vars['isPrimary'] )): ?>
<?php if (count($this->_tpl_vars['lineItem']) > 1): ?> <?php $this->_tag_stack[] = array('ts', array('1' => $this->_tpl_vars['priceset']+1)); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Participant %1<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
<?php endif; ?>
<?php endif; ?>
---------------------------------------------------------<?php if (! empty ( $this->_tpl_vars['pricesetFieldsCount'] )): ?>--------------------<?php endif; ?>

<?php ob_start(); ?><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Item<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->assign('ts_item', ob_get_contents());ob_end_clean(); ?>
<?php ob_start(); ?><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Qty<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->assign('ts_qty', ob_get_contents());ob_end_clean(); ?>
<?php ob_start(); ?><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Each<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->assign('ts_each', ob_get_contents());ob_end_clean(); ?>
<?php if (! empty ( $this->_tpl_vars['dataArray'] )): ?>
<?php ob_start(); ?><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Subtotal<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->assign('ts_subtotal', ob_get_contents());ob_end_clean(); ?>
<?php ob_start(); ?><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Tax Rate<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->assign('ts_taxRate', ob_get_contents());ob_end_clean(); ?>
<?php ob_start(); ?><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Tax Amount<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->assign('ts_taxAmount', ob_get_contents());ob_end_clean(); ?>
<?php endif; ?>
<?php ob_start(); ?><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Total<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->assign('ts_total', ob_get_contents());ob_end_clean(); ?>
<?php ob_start(); ?><?php if (! empty ( $this->_tpl_vars['pricesetFieldsCount'] )): ?><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Total Participants<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php endif; ?><?php $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->assign('ts_participant_total', ob_get_contents());ob_end_clean(); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['ts_item'])) ? $this->_run_mod_handler('string_format', true, $_tmp, "%-30s") : smarty_modifier_string_format($_tmp, "%-30s")); ?>
 <?php echo ((is_array($_tmp=$this->_tpl_vars['ts_qty'])) ? $this->_run_mod_handler('string_format', true, $_tmp, "%5s") : smarty_modifier_string_format($_tmp, "%5s")); ?>
 <?php echo ((is_array($_tmp=$this->_tpl_vars['ts_each'])) ? $this->_run_mod_handler('string_format', true, $_tmp, "%10s") : smarty_modifier_string_format($_tmp, "%10s")); ?>
 <?php if (! empty ( $this->_tpl_vars['dataArray'] )): ?> <?php echo ((is_array($_tmp=$this->_tpl_vars['ts_subtotal'])) ? $this->_run_mod_handler('string_format', true, $_tmp, "%10s") : smarty_modifier_string_format($_tmp, "%10s")); ?>
 <?php echo ((is_array($_tmp=$this->_tpl_vars['ts_taxRate'])) ? $this->_run_mod_handler('string_format', true, $_tmp, "%10s") : smarty_modifier_string_format($_tmp, "%10s")); ?>
 <?php echo ((is_array($_tmp=$this->_tpl_vars['ts_taxAmount'])) ? $this->_run_mod_handler('string_format', true, $_tmp, "%10s") : smarty_modifier_string_format($_tmp, "%10s")); ?>
 <?php endif; ?> <?php echo ((is_array($_tmp=$this->_tpl_vars['ts_total'])) ? $this->_run_mod_handler('string_format', true, $_tmp, "%10s") : smarty_modifier_string_format($_tmp, "%10s")); ?>
 <?php if (! empty ( $this->_tpl_vars['ts_participant_total'] )): ?><?php echo ((is_array($_tmp=$this->_tpl_vars['ts_participant_total'])) ? $this->_run_mod_handler('string_format', true, $_tmp, "%10s") : smarty_modifier_string_format($_tmp, "%10s")); ?>
<?php endif; ?>
----------------------------------------------------------<?php if (! empty ( $this->_tpl_vars['pricesetFieldsCount'] )): ?>--------------------<?php endif; ?>

<?php $_from = $this->_tpl_vars['value']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['line']):
?>
<?php if (! empty ( $this->_tpl_vars['pricesetFieldsCount'] )): ?><?php ob_start(); ?><?php echo $this->_tpl_vars['line']['participant_count']; ?>
<?php $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->assign('ts_participant_count', ob_get_contents());ob_end_clean(); ?><?php endif; ?>
<?php ob_start(); ?><?php if ($this->_tpl_vars['line']['html_type'] == 'Text'): ?><?php echo $this->_tpl_vars['line']['label']; ?>
<?php else: ?><?php echo $this->_tpl_vars['line']['field_title']; ?>
 - <?php echo $this->_tpl_vars['line']['label']; ?>
<?php endif; ?> <?php if ($this->_tpl_vars['line']['description']): ?> <?php echo $this->_tpl_vars['line']['description']; ?>
<?php endif; ?><?php $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->assign('ts_item', ob_get_contents());ob_end_clean(); ?><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['ts_item'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 30, "...") : smarty_modifier_truncate($_tmp, 30, "...")))) ? $this->_run_mod_handler('string_format', true, $_tmp, "%-30s") : smarty_modifier_string_format($_tmp, "%-30s")); ?>
 <?php echo ((is_array($_tmp=$this->_tpl_vars['line']['qty'])) ? $this->_run_mod_handler('string_format', true, $_tmp, "%5s") : smarty_modifier_string_format($_tmp, "%5s")); ?>
 <?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['line']['unit_price'])) ? $this->_run_mod_handler('crmMoney', true, $_tmp) : smarty_modifier_crmMoney($_tmp)))) ? $this->_run_mod_handler('string_format', true, $_tmp, "%10s") : smarty_modifier_string_format($_tmp, "%10s")); ?>
 <?php if (! empty ( $this->_tpl_vars['dataArray'] )): ?> <?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['line']['unit_price']*$this->_tpl_vars['line']['qty'])) ? $this->_run_mod_handler('crmMoney', true, $_tmp, $this->_tpl_vars['currency']) : smarty_modifier_crmMoney($_tmp, $this->_tpl_vars['currency'])))) ? $this->_run_mod_handler('string_format', true, $_tmp, "%10s") : smarty_modifier_string_format($_tmp, "%10s")); ?>
 <?php if (isset ( $this->_tpl_vars['line']['tax_rate'] ) && ( $this->_tpl_vars['line']['tax_rate'] != "" || $this->_tpl_vars['line']['tax_amount'] != "" )): ?>  <?php echo ((is_array($_tmp=$this->_tpl_vars['line']['tax_rate'])) ? $this->_run_mod_handler('string_format', true, $_tmp, "%.2f") : smarty_modifier_string_format($_tmp, "%.2f")); ?>
 %  <?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['line']['tax_amount'])) ? $this->_run_mod_handler('crmMoney', true, $_tmp, $this->_tpl_vars['currency']) : smarty_modifier_crmMoney($_tmp, $this->_tpl_vars['currency'])))) ? $this->_run_mod_handler('string_format', true, $_tmp, "%10s") : smarty_modifier_string_format($_tmp, "%10s")); ?>
 <?php else: ?>                  <?php endif; ?>  <?php endif; ?>  <?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['line']['line_total']+$this->_tpl_vars['line']['tax_amount'])) ? $this->_run_mod_handler('crmMoney', true, $_tmp) : smarty_modifier_crmMoney($_tmp)))) ? $this->_run_mod_handler('string_format', true, $_tmp, "%10s") : smarty_modifier_string_format($_tmp, "%10s")); ?>
 <?php if (! empty ( $this->_tpl_vars['ts_participant_count'] )): ?><?php echo ((is_array($_tmp=$this->_tpl_vars['ts_participant_count'])) ? $this->_run_mod_handler('string_format', true, $_tmp, "%10s") : smarty_modifier_string_format($_tmp, "%10s")); ?>
<?php endif; ?>
<?php endforeach; endif; unset($_from); ?>
<?php endif; ?>
<?php endforeach; endif; unset($_from); ?>

<?php if (! empty ( $this->_tpl_vars['dataArray'] )): ?>
<?php if (isset ( $this->_tpl_vars['totalAmount'] ) && isset ( $this->_tpl_vars['totalTaxAmount'] )): ?>
<?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Amount before Tax<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>: <?php echo ((is_array($_tmp=$this->_tpl_vars['totalAmount']-$this->_tpl_vars['totalTaxAmount'])) ? $this->_run_mod_handler('crmMoney', true, $_tmp, $this->_tpl_vars['currency']) : smarty_modifier_crmMoney($_tmp, $this->_tpl_vars['currency'])); ?>

<?php endif; ?>

<?php $_from = $this->_tpl_vars['dataArray']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['priceset'] => $this->_tpl_vars['value']):
?>
<?php if ($this->_tpl_vars['priceset'] || $this->_tpl_vars['priceset'] == 0): ?>
<?php if (isset ( $this->_tpl_vars['taxTerm'] )): ?><?php echo $this->_tpl_vars['taxTerm']; ?>
<?php endif; ?> <?php echo ((is_array($_tmp=$this->_tpl_vars['priceset'])) ? $this->_run_mod_handler('string_format', true, $_tmp, "%.2f") : smarty_modifier_string_format($_tmp, "%.2f")); ?>
%: <?php echo ((is_array($_tmp=$this->_tpl_vars['value'])) ? $this->_run_mod_handler('crmMoney', true, $_tmp, $this->_tpl_vars['currency']) : smarty_modifier_crmMoney($_tmp, $this->_tpl_vars['currency'])); ?>

<?php else: ?>
<?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>No<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?> <?php if (isset ( $this->_tpl_vars['taxTerm'] )): ?><?php echo $this->_tpl_vars['taxTerm']; ?>
<?php endif; ?>: <?php echo ((is_array($_tmp=$this->_tpl_vars['value'])) ? $this->_run_mod_handler('crmMoney', true, $_tmp, $this->_tpl_vars['currency']) : smarty_modifier_crmMoney($_tmp, $this->_tpl_vars['currency'])); ?>

<?php endif; ?>
<?php endforeach; endif; unset($_from); ?>
<?php endif; ?>
<?php endif; ?>

<?php if (! empty ( $this->_tpl_vars['amount'] ) && ! $this->_tpl_vars['lineItem']): ?>
<?php $_from = $this->_tpl_vars['amount']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['level'] => $this->_tpl_vars['amnt']):
?><?php echo ((is_array($_tmp=$this->_tpl_vars['amnt']['amount'])) ? $this->_run_mod_handler('crmMoney', true, $_tmp) : smarty_modifier_crmMoney($_tmp)); ?>
 <?php echo $this->_tpl_vars['amnt']['label']; ?>

<?php endforeach; endif; unset($_from); ?>
<?php endif; ?>

<?php if (isset ( $this->_tpl_vars['totalTaxAmount'] )): ?>
<?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Total Tax Amount<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>: <?php echo ((is_array($_tmp=$this->_tpl_vars['totalTaxAmount'])) ? $this->_run_mod_handler('crmMoney', true, $_tmp, $this->_tpl_vars['currency']) : smarty_modifier_crmMoney($_tmp, $this->_tpl_vars['currency'])); ?>

<?php endif; ?>
<?php if (! empty ( $this->_tpl_vars['isPrimary'] )): ?>

<?php if (! empty ( $this->_tpl_vars['balanceAmount'] )): ?><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Total Paid<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php else: ?><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Total Amount<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php endif; ?>: <?php if (! empty ( $this->_tpl_vars['totalAmount'] )): ?><?php echo ((is_array($_tmp=$this->_tpl_vars['totalAmount'])) ? $this->_run_mod_handler('crmMoney', true, $_tmp) : smarty_modifier_crmMoney($_tmp)); ?>
<?php endif; ?> <?php if (! empty ( $this->_tpl_vars['hookDiscount']['message'] )): ?>(<?php echo $this->_tpl_vars['hookDiscount']['message']; ?>
)<?php endif; ?>

<?php if (! empty ( $this->_tpl_vars['balanceAmount'] )): ?>
<?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Balance<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>: <?php echo ((is_array($_tmp=$this->_tpl_vars['balanceAmount'])) ? $this->_run_mod_handler('crmMoney', true, $_tmp) : smarty_modifier_crmMoney($_tmp)); ?>

<?php endif; ?>

<?php if (! empty ( $this->_tpl_vars['pricesetFieldsCount'] )): ?>
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
        <?php $this->assign('lineItemCount', 1); ?>
        <?php endif; ?>
      <?php $this->assign('count', $this->_tpl_vars['count']+$this->_tpl_vars['lineItemCount']); ?>
      <?php endif; ?>
      <?php endforeach; endif; unset($_from); ?>

<?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Total Participants<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>: <?php echo $this->_tpl_vars['count']; ?>

<?php endif; ?>

<?php if (! empty ( $this->_tpl_vars['is_pay_later'] )): ?>

===========================================================<?php if (! empty ( $this->_tpl_vars['pricesetFieldsCount'] )): ?>====================<?php endif; ?>

<?php echo $this->_tpl_vars['pay_later_receipt']; ?>

===========================================================<?php if (! empty ( $this->_tpl_vars['pricesetFieldsCount'] )): ?>====================<?php endif; ?>

<?php endif; ?>

<?php if ($this->_tpl_vars['register_date']): ?>
<?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Registration Date<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>: <?php echo ((is_array($_tmp=$this->_tpl_vars['register_date'])) ? $this->_run_mod_handler('crmDate', true, $_tmp) : smarty_modifier_crmDate($_tmp)); ?>

<?php endif; ?>
<?php if ($this->_tpl_vars['receive_date']): ?>
<?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Transaction Date<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>: <?php echo ((is_array($_tmp=$this->_tpl_vars['receive_date'])) ? $this->_run_mod_handler('crmDate', true, $_tmp) : smarty_modifier_crmDate($_tmp)); ?>

<?php endif; ?>
<?php if (! empty ( $this->_tpl_vars['financialTypeName'] )): ?>
<?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Financial Type<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>: <?php echo $this->_tpl_vars['financialTypeName']; ?>

<?php endif; ?>
<?php if (! empty ( $this->_tpl_vars['trxn_id'] )): ?>
<?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Transaction #<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>: <?php echo $this->_tpl_vars['trxn_id']; ?>

<?php endif; ?>
<?php if (! empty ( $this->_tpl_vars['paidBy'] )): ?>
<?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Paid By<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>: <?php echo $this->_tpl_vars['paidBy']; ?>

<?php endif; ?>
<?php if (! empty ( $this->_tpl_vars['checkNumber'] )): ?>
<?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Check Number<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>: <?php echo $this->_tpl_vars['checkNumber']; ?>

<?php endif; ?>
<?php if (! empty ( $this->_tpl_vars['billingName'] )): ?>

===========================================================<?php if (! empty ( $this->_tpl_vars['pricesetFieldsCount'] )): ?>====================<?php endif; ?>

<?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Billing Name and Address<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>

===========================================================<?php if (! empty ( $this->_tpl_vars['pricesetFieldsCount'] )): ?>====================<?php endif; ?>

<?php echo $this->_tpl_vars['billingName']; ?>

<?php echo $this->_tpl_vars['address']; ?>

<?php endif; ?>

<?php if (! empty ( $this->_tpl_vars['credit_card_type'] )): ?>
===========================================================
<?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Credit Card Information<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>

===========================================================<?php if (! empty ( $this->_tpl_vars['pricesetFieldsCount'] )): ?>====================<?php endif; ?>

<?php echo $this->_tpl_vars['credit_card_type']; ?>

<?php echo $this->_tpl_vars['credit_card_number']; ?>

<?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Expires<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>: <?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['credit_card_exp_date'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 7, '') : smarty_modifier_truncate($_tmp, 7, '')))) ? $this->_run_mod_handler('crmDate', true, $_tmp) : smarty_modifier_crmDate($_tmp)); ?>

<?php endif; ?>
<?php endif; ?>
<?php endif; ?> 
<?php if (! empty ( $this->_tpl_vars['customPre'] )): ?>
===========================================================<?php if (! empty ( $this->_tpl_vars['pricesetFieldsCount'] )): ?>====================<?php endif; ?>

<?php echo $this->_tpl_vars['customPre_grouptitle']; ?>

===========================================================<?php if (! empty ( $this->_tpl_vars['pricesetFieldsCount'] )): ?>====================<?php endif; ?>

<?php $_from = $this->_tpl_vars['customPre']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['customName'] => $this->_tpl_vars['value']):
?>
<?php if (( ! empty ( $this->_tpl_vars['trackingFields'] ) && ! in_array ( $this->_tpl_vars['customName'] , $this->_tpl_vars['trackingFields'] ) ) || empty ( $this->_tpl_vars['trackingFields'] )): ?>
<?php echo $this->_tpl_vars['customName']; ?>
: <?php echo $this->_tpl_vars['value']; ?>

<?php endif; ?>
<?php endforeach; endif; unset($_from); ?>
<?php endif; ?>

<?php if (! empty ( $this->_tpl_vars['customPost'] )): ?>
===========================================================<?php if (! empty ( $this->_tpl_vars['pricesetFieldsCount'] )): ?>====================<?php endif; ?>

<?php echo $this->_tpl_vars['customPost_grouptitle']; ?>

===========================================================<?php if (! empty ( $this->_tpl_vars['pricesetFieldsCount'] )): ?>====================<?php endif; ?>

<?php $_from = $this->_tpl_vars['customPost']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['customName'] => $this->_tpl_vars['value']):
?>
<?php if (( ! empty ( $this->_tpl_vars['trackingFields'] ) && ! in_array ( $this->_tpl_vars['customName'] , $this->_tpl_vars['trackingFields'] ) ) || empty ( $this->_tpl_vars['trackingFields'] )): ?>
<?php echo $this->_tpl_vars['customName']; ?>
: <?php echo $this->_tpl_vars['value']; ?>

<?php endif; ?>
<?php endforeach; endif; unset($_from); ?>
<?php endif; ?>
<?php if (! empty ( $this->_tpl_vars['customProfile'] )): ?>

<?php $_from = $this->_tpl_vars['customProfile']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['customName'] => $this->_tpl_vars['value']):
?>
===========================================================<?php if (! empty ( $this->_tpl_vars['pricesetFieldsCount'] )): ?>====================<?php endif; ?>

<?php $this->_tag_stack[] = array('ts', array('1' => $this->_tpl_vars['customName']+1)); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Participant Information - Participant %1<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>

===========================================================<?php if (! empty ( $this->_tpl_vars['pricesetFieldsCount'] )): ?>====================<?php endif; ?>

<?php $_from = $this->_tpl_vars['value']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['field'] => $this->_tpl_vars['val']):
?>
<?php if ($this->_tpl_vars['field'] == 'additionalCustomPre' || $this->_tpl_vars['field'] == 'additionalCustomPost'): ?>
<?php if ($this->_tpl_vars['field'] == 'additionalCustomPre'): ?>
----------------------------------------------------------<?php if (! empty ( $this->_tpl_vars['pricesetFieldsCount'] )): ?>--------------------<?php endif; ?>

<?php echo $this->_tpl_vars['additionalCustomPre_grouptitle']; ?>

----------------------------------------------------------<?php if (! empty ( $this->_tpl_vars['pricesetFieldsCount'] )): ?>--------------------<?php endif; ?>

<?php else: ?>
----------------------------------------------------------<?php if (! empty ( $this->_tpl_vars['pricesetFieldsCount'] )): ?>--------------------<?php endif; ?>

<?php echo $this->_tpl_vars['additionalCustomPost_grouptitle']; ?>

----------------------------------------------------------<?php if (! empty ( $this->_tpl_vars['pricesetFieldsCount'] )): ?>--------------------<?php endif; ?>

<?php endif; ?>
<?php $_from = $this->_tpl_vars['val']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['f'] => $this->_tpl_vars['v']):
?>
<?php echo $this->_tpl_vars['f']; ?>
: <?php echo $this->_tpl_vars['v']; ?>

<?php endforeach; endif; unset($_from); ?>
<?php endif; ?>
<?php endforeach; endif; unset($_from); ?>
<?php endforeach; endif; unset($_from); ?>
<?php endif; ?>
<?php if (! empty ( $this->_tpl_vars['customGroup'] )): ?>
<?php $_from = $this->_tpl_vars['customGroup']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['customName'] => $this->_tpl_vars['value']):
?>
==========================================================<?php if (! empty ( $this->_tpl_vars['pricesetFieldsCount'] )): ?>====================<?php endif; ?>

<?php echo $this->_tpl_vars['customName']; ?>

==========================================================<?php if (! empty ( $this->_tpl_vars['pricesetFieldsCount'] )): ?>====================<?php endif; ?>

<?php $_from = $this->_tpl_vars['value']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['n'] => $this->_tpl_vars['v']):
?>
<?php echo $this->_tpl_vars['n']; ?>
: <?php echo $this->_tpl_vars['v']; ?>

<?php endforeach; endif; unset($_from); ?>
<?php endforeach; endif; unset($_from); ?>
<?php endif; ?>


<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>