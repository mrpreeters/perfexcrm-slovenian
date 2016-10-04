﻿<?php
# Version 1.0.0
#
# General
$lang['id']                   = 'ID';
$lang['name']                 = 'Ime';
$lang['options']              = 'Možnosti';
$lang['submit']               = 'Shrani';
$lang['added_successfuly']    = '%s uspešno dodano.';
$lang['updated_successfuly']  = '%s uspešno posodobljeno.';
$lang['edit']                 = 'Uredi %s';
$lang['add_new']              = 'Dodaj novo %s';
$lang['deleted']              = '%s Izbrisano';
$lang['problem_deleting']     = 'Problem brisanja %s';
$lang['is_referenced']        = 'ID naslov %s je že v uporabi.';
$lang['close']                = 'Zapri';
$lang['send']                 = 'Pošlji';
$lang['cancel']               = 'Prekliči';
$lang['go_back']              = 'Pojdi nazaj';
$lang['error_uploading_file'] = 'Napaka pri nalaganju datoteke';
$lang['load_more']            = 'Naloži več';
$lang['cant_delete_default']  = 'Ne moremo izbrisati privzetega %s';

# Invoice General
$lang['invoice_status_paid']                = 'Plačano';
$lang['invoice_status_unpaid']              = 'Neplačano';
$lang['invoice_status_overdue']             = 'Zapadlo';
$lang['invoice_status_not_paid_completely'] = 'Delno plačano';

$lang['invoice_pdf_heading'] = 'INVOICE';

$lang['invoice_table_item_heading']            = 'Predmet';
$lang['invoice_table_quantity_heading']        = 'Količina';
$lang['invoice_table_rate_heading']            = 'Razmerje';
$lang['invoice_table_tax_heading']             = 'Davek';
$lang['invoice_table_amount_heading']          = 'Znesek';
$lang['invoice_subtotal']                      = 'Skupni znesek';
$lang['invoice_adjustment']                    = 'Prilagoditev';
$lang['invoice_total']                         = 'Skupaj';
$lang['invoice_vat']                           = 'Davčna številka';
$lang['invoice_bill_to']                       = 'Bill To';
$lang['invoice_data_date']                     = 'Datum računa:';
$lang['invoice_data_duedate']                  = 'Datum zapadlosti:';
$lang['invoice_received_payments']             = 'Transakcije';
$lang['invoice_no_payments_found']             = 'Ni najdenih plačil za ta račun';
$lang['invoice_note']                          = 'Opomba:';
$lang['invoice_payments_table_number_heading'] = 'Plačilo #';
$lang['invoice_payments_table_mode_heading']   = 'Način plačila';
$lang['invoice_payments_table_date_heading']   = 'Datum';
$lang['invoice_payments_table_amount_heading'] = 'Količina';


# Announcements
$lang['announcement']                 = 'Obvestilo';
$lang['announcement_lowercase']       = 'obvestilo';
$lang['announcements']                = 'Obvestila';
$lang['announcements_lowercase']      = 'obvestila';
$lang['new_announcement']             = 'Novo obvestilo';
$lang['announcement_name']            = 'Tema';
$lang['announcement_message']         = 'Sporočilo';
$lang['announcement_show_to_staff']   = 'Pokaži osebju';
$lang['announcement_show_to_clients'] = 'Pokaži strankam';
$lang['announcement_show_my_name']    = 'Pokaži moje ime';

# Clients
$lang['clients']                               = 'Stranke';
$lang['client']                                = 'Stranka';
$lang['new_client']                            = 'Nova stranka';
$lang['client_lowercase']                      = 'stranka';
$lang['client_delete_tooltip']                 = 'Vsi podatki o stranki bodo izbrisani. Pogodbe, vstopnice, opombe. OPOMBA: Če so najdeni računi, stranka ne bo izbrisana. Te račune je potrebno dodeliti drugi stranki, da lahko obdržite številko računa';
$lang['customer_delete_invoices_warning']      = 'Ta stranka ima na tem računu račune. Ne morete izbrisati te stranke. V prihodnje prestavite vse račune na drugo stranko in jo potem izbrišite.';
$lang['client_firstname']                      = 'Ime';
$lang['client_lastname']                       = 'Priimek';
$lang['client_email']                          = 'E-pošta';
$lang['client_company']                        = 'Podjetje';
$lang['client_vat_number']                     = 'Davčna številka';
$lang['client_address']                        = 'Naslov';
$lang['client_city']                           = 'Kraj';
$lang['client_postal_code']                    = 'Poštna številka';
$lang['client_state']                          = 'Država';
$lang['client_password']                       = 'Geslo';
$lang['client_password_change_populate_note']  = 'OPOMBA: Če ste izpolnili ta polja, bo geslo na tem stiku spremenjeno.';
$lang['client_password_last_changed']          = 'Zadjna sprememba gesla:';
$lang['login_as_client']                       = 'Prijavite se kot stranka';
$lang['client_invoices_tab']                   = 'Računi';
$lang['contracts_invoices_tab']                = 'Pogodba';
$lang['contracts_tickets_tab']                 = 'Vstopnice';
$lang['contracts_notes_tab']                   = 'Opombe';
$lang['client_invoice_number_table_heading']   = 'Račun #';
$lang['client_invoice_date_table_heading']     = 'Datum';
$lang['client_invoice_due_date_table_heading'] = 'Datum zapadlosti';
$lang['client_string_table_heading']           = 'Stranka';
$lang['client_amount_table_heading']           = 'Znesek';
$lang['client_status_table_heading']           = 'Stanje';
$lang['note_description']                      = 'Opis opombe';

$lang['client_string_contracts_table_heading']      = 'Stranka';
$lang['client_start_date_contracts_table_heading']  = 'Datum začetka';
$lang['client_end_date_contracts_table_heading']    = 'Končni datum';
$lang['client_description_contracts_table_heading'] = 'Opis';
$lang['client_do_not_send_welcome_email']           = 'Ne pošlji pozdravno sporočilo';

$lang['clients_notes_table_description_heading'] = 'Opis';
$lang['clients_notes_table_addedfrom_heading']   = 'Dodano od';
$lang['clients_notes_table_dateadded_heading']   = 'Datum dodanega';

$lang['clients_list_full_name']   = 'Polno ime';

$lang['clients_list_last_login']  = 'Zadnji vpis';


# Contracts
$lang['contracts']                = 'Pogodbe';
$lang['contract']                 = 'Pogodba';
$lang['new_contract']             = 'Nova pogodba';
$lang['contract_lowercase']       = 'pogodba';
$lang['contract_start_date']      = 'Datum začetka';
$lang['contract_end_date']        = 'Končni datum';
$lang['contract_subject']         = 'Tema';
$lang['contract_description']     = 'Opis';
$lang['contract_subject_tooltip'] = 'Tema je vidna tudi stranki';
$lang['contract_client_string']   = 'Stranka';
$lang['contract_attach']          = 'Priloži dokument';

$lang['contract_list_client']     = 'Stranka';
$lang['contract_list_subject']    = 'Tema';
$lang['contract_list_start_date'] = 'Datum začetka';
$lang['contract_list_end_date']   = 'Končni datum';

# Currencies
$lang['currencies']           = 'Valute';
$lang['currency']             = 'Valuta';
$lang['new_currency']         = 'Nova valuta';
$lang['currency_lowercase']   = 'Valuta';
$lang['base_currency_set']    = 'To je zdaj vaša osnovna valuta.';
$lang['make_base_currency']   = 'Določi osnovno valuto';
$lang['base_currency_string'] = 'Osnovna valuta';

$lang['currency_list_name']   = 'Ime';
$lang['currency_list_symbol'] = 'Simbol';


$lang['currency_add_edit_description'] = 'Ime valute';
$lang['currency_add_edit_rate']        = 'Simbol';

$lang['currency_edit_heading'] = 'Uredu valuto';
$lang['currency_add_heading']  = 'Dodaj novo valuto';


# Department
$lang['departments']          = 'Oddelki';
$lang['department']           = 'Oddelek';
$lang['new_department']       = 'Nov oddelek';
$lang['department_lowercase'] = 'oddelek';

$lang['department_name']             = 'Ime oddelka';
$lang['department_email']            = 'e-pošta oddelka';
$lang['department_hide_from_client'] = 'Skrij pred stranko?';
$lang['department_list_name']        = 'Ime';

# Email Templates
$lang['email_templates']                        = 'Predloge e-pošte';
$lang['email_template']                         = 'Predloga e-pošte';
$lang['email_template_lowercase']               = 'Predloga e-pošte';
$lang['email_templates_lowercase']              = 'predloge e-pošte';
$lang['email_template_ticket_fields_heading']   = 'Vstopnice';
$lang['email_template_invoices_fields_heading'] = 'Računi';
$lang['email_template_clients_fields_heading']  = 'Stranke';

$lang['template_name']                                      = 'Ime predloge';
$lang['template_subject']                                   = 'Tema';
$lang['template_fromname']                                  = 'Ime od';
$lang['template_fromemail']                                 = 'E-pošta od';
$lang['send_as_plain_text']                                 = 'Pošlji kot čistopis';
$lang['email_template_disabed']                             = 'Disabled';
$lang['email_template_email_message']                       = 'Email message';
$lang['available_merge_fields']                             = 'Available merge fields';
# Home
$lang['dashboard_string']                                   = 'Dashboard';
$lang['home_latest_todos']                                  = 'Latest todo\'s';
$lang['home_no_latest_todos']                               = 'No todos found';
$lang['home_latest_finished_todos']                         = 'Latest finished todo\'s';
$lang['home_no_finished_todos_found']                       = 'No finished todos found';
$lang['home_todo_heading']                                  = 'To do items';
$lang['home_tickets_awaiting_reply_by_department']          = 'Tickets awaiting reply by department';
$lang['home_tickets_awaiting_reply_by_status']              = 'Tickets awaiting reply by status';
$lang['home_this_week_events']                              = 'This week events';
$lang['home_upcoming_events_next_week']                     = 'Upcoming events next week';
$lang['home_event_added_by']                                = 'Event added by';
$lang['home_public_event']                                  = 'Public event';
$lang['home_weekly_payment_records']                        = 'Weekly Payment Records';
$lang['home_weekend_ticket_opening_statistics']             = 'Weekly Ticket Openings Statistics';
# Newsfeed
$lang['whats_on_your_mind']                                 = 'Share documents, ideas..';
$lang['new_post']                                           = 'Post';
$lang['newsfeed_upload_tooltip']                            = 'Tip:Drag and drop files to upload';
$lang['newsfeed_all_departments']                           = 'All Departments';
$lang['newsfeed_pin_post']                                  = 'Pin post';
$lang['newsfeed_unpin_post']                                = 'Unpin post';
$lang['newsfeed_delete_post']                               = 'Izbriši';
$lang['newsfeed_published_post']                            = 'Objavljeno';
$lang['newsfeed_you_like_this']                             = 'To vam je všeč';
$lang['newsfeed_like_this']                                 = 'Všeč mi je';
$lang['newsfeed_one_other']                                 = 'ostalo';
$lang['newsfeed_you']                                       = 'Ti';
$lang['newsfeed_and']                                       = 'in';
$lang['newsfeed_you_and']                                   = 'Ti in';
$lang['newsfeed_like_this_saying']                          = 'Všeč mi je';
$lang['newsfeed_unlike_this_saying']                        = 'Ni mi všeč';
$lang['newsfeed_show_more_comments']                        = 'Prikaži več komentarjev';
$lang['comment_this_post_placeholder']                      = 'Komentiraj to objavo..';
$lang['newsfeed_post_likes_modal_heading']                  = 'Sodelavci katerim je všeč ta objava';
$lang['newsfeed_comment_likes_modal_heading']               = 'Sodelavci katerim je všeč ta komentar';
$lang['newsfeed_newsfeed_post_only_visible_to_departments'] = 'Ta objava je vidna naslednjim oddelkom:%s';
# Invoice Items
$lang['invoice_items']                                      = 'Izdaj račune';
$lang['invoice_item']                                       = 'Izdaj račun';
$lang['new_invoice_item']                                   = 'Nov izdelek';
$lang['invoice_item_lowercase']                             = 'izdaj račun';

$lang['invoice_items_list_description'] = 'Opis';
$lang['invoice_items_list_rate']        = 'Cena';
$lang['invoice_items_list_tax']         = 'Davek';

$lang['invoice_item_add_edit_description'] = 'Opis';
$lang['invoice_item_add_edit_rate']        = 'Ocena';
$lang['invoice_item_add_edit_tax']         = 'Davek';
$lang['invoice_item_add_edit_tax_select']  = 'Izberi davek';

$lang['invoice_item_edit_heading'] = 'Uredi izdelek';
$lang['invoice_item_add_heading']  = 'Dodaj nov izdelek';

# Invoices


$lang['invoices']                       = 'Računi';
$lang['invoice']                        = 'Račun';
$lang['invoice_lowercase']              = 'račun';
$lang['create_new_invoice']             = 'Ustvari nov račun';
$lang['view_invoice']                   = 'Oglej si račun';

$lang['invoice_payment_recorded']       = 'Račun plačila je zabeležen';
$lang['invoice_payment_record_failed']  = 'Računa plačila ni uspelo zabeležiti';
$lang['invoice_sent_to_client_success'] = 'Račun je bil uspešno poslan stranki';
$lang['invoice_sent_to_client_fail']    = 'Problem pri pošiljanju računa';
$lang['invoice_reminder_send_problem']  = 'Problem pri pošiljanju opozorila za zakasnitev plačila';
$lang['invoice_overdue_reminder_sent']  = 'Račun za opozorilo pri zakasnitvi plačila je bil uspešno poslan';

$lang['invoice_details']              = 'Podrobnosti računa';
$lang['invoice_view']                 = 'Ogled računa';
$lang['invoice_select_customer']      = 'Stranka';
$lang['invoice_add_edit_number']      = 'Številka računa';
$lang['invoice_add_edit_date']        = 'Datum izdaje';
$lang['invoice_add_edit_duedate']     = 'Datum poteka';
$lang['invoice_add_edit_currency']    = 'Valuta';
$lang['invoice_add_edit_client_note'] = 'Sporočilo stranke';
$lang['invoice_add_edit_admin_note']  = 'Sporočilo administratorja';

$lang['invoice_add_edit_search_item']  = 'Išči';
$lang['invoices_toggle_table_tooltip'] = 'Preklopi tabelo';

$lang['edit_invoice_tooltip']                   = 'Uredi račun';
$lang['delete_invoice_tooltip']                 = 'Izbriši račun. Sporočilo: Vsa plačila glede tega računa bodo izpisana (če obstajajo).';
$lang['invoice_sent_to_email_tooltip']          = 'Pošlji na e-mail';
$lang['invoice_already_send_to_client_tooltip'] = 'Ta račun je že bil poslan stranki %s';
$lang['send_overdue_notice_tooltip']            = 'Pošlji sporočilo o zakasnitvi';
$lang['invoice_view_activity_tooltip']          = 'Dnevnik aktivnosti';
$lang['invoice_record_payment']                 = 'Zapiši plačilo';

$lang['invoice_send_to_client_modal_heading']    = 'Pošlji račun stranki';
$lang['invoice_send_to_client_attach_pdf']       = 'Priloži PDF račun';
$lang['invoice_send_to_client_preview_template'] = 'Predogled predloge za e-mail';

$lang['invoice_dt_table_heading_number']  = 'Račun #';
$lang['invoice_dt_table_heading_date']    = 'Datum';
$lang['invoice_dt_table_heading_client']  = 'Stranka';
$lang['invoice_dt_table_heading_duedate'] = 'Datum poteka';
$lang['invoice_dt_table_heading_amount']  = 'Znesek';
$lang['invoice_dt_table_heading_status']  = 'Status';

$lang['record_payment_for_invoice']              = 'Zabeleži plačilo za';
$lang['record_payment_amount_received']          = 'Prejeta količina';
$lang['record_payment_date']                     = 'Datum plačila';
$lang['record_payment_leave_note']               = 'Pusti sporočilo';
$lang['invoice_payments_received']               = 'Prejeta plačiča';
$lang['invoice_record_payment_note_placeholder'] = 'Sporočilo admina';
$lang['no_payments_found']                       = 'Ni bilo najdenih plačil za ta račun';
$lang['invoice_email_link_text']                 = 'Oglej si račun';

# Payments
$lang['payments']                             = 'Plačila';
$lang['payment']                              = 'Plačilo';
$lang['payment_lowercase']                    = 'plačilo';
$lang['payments_table_number_heading']        = 'Plačilo #';
$lang['payments_table_invoicenumber_heading'] = 'Račun #';
$lang['payments_table_mode_heading']          = 'Način plačila';
$lang['payments_table_date_heading']          = 'Datum';
$lang['payments_table_amount_heading']        = 'Znesek';
$lang['payments_table_client_heading']        = 'Stranka';
$lang['payment_not_exists']                   = 'Plačilo ne obstaja';

$lang['payment_edit_for_invoice']     = 'Plačilo za račun';
$lang['payment_edit_amount_received'] = 'Prejeti znesek';
$lang['payment_edit_date']            = 'Datum plačila';
$lang['payment_edit_lave_note']       = 'Pusti sporočilo';


# Knowledge Base
$lang['kb_article_add_edit_subject'] = 'Predmet';
$lang['kb_article_add_edit_group']   = 'Skupina';
$lang['kb_string']                   = 'Baza podatkov';
$lang['kb_article']                  = 'Članek';
$lang['kb_article_lowercase']        = 'članek';
$lang['kb_article_new_article']      = 'Nov članek';
$lang['kb_article_disabled']         = 'Onemogočen';
$lang['kb_article_description']      = 'Opis članka';

$lang['kb_table']                      = 'Seznam';
$lang['kb_no_articles_found']          = 'V bazi podatkov ni bilo najdenih člankov';
$lang['kb_dt_article_name']            = 'Ime članka';
$lang['kb_dt_group_name']              = 'Skupina';
$lang['new_group']                     = 'Nova skupina';
$lang['kb_group_add_edit_name']        = 'Ime skupine';
$lang['kb_group_add_edit_description'] = 'Kratek opis';
$lang['kb_group_add_edit_disabled']    = 'Onemogočen';
$lang['kb_group_add_edit_note']        = 'Sporočilo: Vsi članki v tej skupini bodo skriti če je onemogočen obkljukano';
$lang['group_table_name_heading']      = 'Ime';
$lang['group_table_isactive_heading']  = 'Aktiven';
$lang['kb_no_groups_found']            = 'Baza podatkov ni bila najdena';

# Mail Lists
$lang['mail_lists']                           = 'Seznami pošte';
$lang['mail_list']                            = 'Seznam pošte';
$lang['new_mail_list']                        = 'Nov seznam pošte';
$lang['mail_list_lowercase']                  = 'seznam pošte';
$lang['custom_field_deleted_success']         = 'Polje po meri je bilo izbrisano';
$lang['custom_field_deleted_fail']            = 'Problem pri brisanju polja po meri';
$lang['email_removed_from_list']              = 'E-sporočilo je bilo izbrisano iz seznama';
$lang['email_remove_fail']                    = 'E-sporočilo je bilo izbrisano iz seznama';
$lang['staff_mail_lists']                     = 'Seznam za pošiljanje zaposlenim';
$lang['clients_mail_lists']                   = 'Seznam za pošiljanje strankam';
$lang['mail_list_total_imported']             = 'Število vseh uvoženih sporočil: %s';
$lang['mail_list_total_duplicate']            = 'Število vseh podvojenih sporočil: %s';
$lang['mail_list_total_failed_to_insert']     = 'E-sporočila ki niso bila vstavljena %s';
$lang['mail_list_total_invalid']              = 'Napačen e-naslov: %s';
$lang['cant_edit_mail_list']                  = 'Tega seznama ne moreš urediti, saj se polni avtomatsko.';
$lang['mail_list_add_edit_name']              = 'Ime seznama pošiljanja';
$lang['mail_list_add_edit_customfield']       = 'Dodaj polje po meri';
$lang['mail_lists_viewing_emails']            = 'Ogledovanje sporočil iz seznama';
$lang['mail_lists_view_email_email_heading']  = 'EE-pošta';
$lang['mail_lists_view_email_date_heading']   = 'Datum dodajanja';
$lang['add_new_email_to']                     = 'Dodaj nov e-naslov v %s';
$lang['import_emails_to']                     = 'Uvozi e-naslov v %s';
$lang['mail_list_new_email_edit_add_label']   = 'E-naslov';
$lang['mail_list_import_file']                = 'Ubozi datoteko';
$lang['mail_list_available_custom_fields']    = 'Mesta po meri na voljo';
$lang['submit_import_emails']                 = 'Uvozi e-sporočila';
$lang['btn_import_emails']                    = 'Uvozi e-sporočila (Excel)';
$lang['btn_add_email_to_list']                = 'Dodaj e-naslov na seznam';
$lang['mail_lists_dt_list_name']              = 'Ime seznama';
$lang['mail_lists_dt_datecreated']            = 'Datum nastanka';
$lang['mail_lists_dt_creator']                = 'Avtor';
$lang['email_added_to_mail_list_successfuly'] = 'Dodaj e-naslov na seznam';
$lang['email_is_duplicate_mail_list']         = 'E-naslov na seznamu že obstaja';

# Media
$lang['media_files']            = 'Datoteke';

# Payment modes
$lang['new_payment_mode']       = 'Nov način plačila';
$lang['payment_modes']          = 'Načini plačila';
$lang['payment_mode']           = 'Način plačila';
$lang['payment_mode_lowercase'] = 'način plačila';
$lang['payment_modes_dt_name']  = 'Ime načina plačila';

$lang['payment_mode_add_edit_name'] = 'Ime načina plačila';
$lang['payment_mode_edit_heading']  = 'Uredi način plačila';
$lang['payment_mode_add_heading']   = 'Dodaj nov način plačila';

# Predefined Ticket Replies
$lang['new_predefined_reply']              = 'Nov vnaprej določen odgovor';
$lang['predefined_replies']                = 'Vnaprej določeni odgovori';
$lang['predefined_reply']                  = 'Vnaprej določen odgovor';
$lang['predefined_reply_lowercase']        = 'vnaprej določen odgovor';
$lang['predifined_replies_dt_name']        = 'Vnaprej določeno ime odgovora';
$lang['predifined_reply_add_edit_name']    = 'vnaprej določeno ime odgovora';
$lang['predifined_reply_add_edit_content'] = 'Vsebina odgovora';

# Ticket Priorities
$lang['new_ticket_priority']           = 'Nova prioriteta';
$lang['ticket_priorities']             = 'Prioriteta pogodb';
$lang['ticket_priority']               = 'Prioriteta pogodb';
$lang['ticket_priority_lowercase']     = 'prioriteta pogodb';
$lang['no_ticket_priorities_found']    = 'Prioriteta pogodb ni bila najdena';
$lang['ticket_priority_dt_name']       = 'Ime prioritete pogodb';
$lang['ticket_priority_add_edit_name'] = 'Ime prioritete';

# Reports
$lang['kb_reports']                         = 'Baza podatkov člankov poročil';
$lang['sales_reports']                      = 'Poročila prodaj';
$lang['reports_choose_kb_group']            = 'Choose Group';
$lang['reports_sales_select_report_type']   = 'Select Report Type';
$lang['report_kb_yes']                      = 'Yes';
$lang['report_kb_no']                       = 'No';
$lang['report_kb_no_votes']                 = 'No votes yet';
$lang['report_this_week_leads_conversions'] = 'This Week Leads Conversions';
$lang['report_leads_sources_conversions']   = 'Sources Conversion';
$lang['report_leads_monthly_conversions']   = 'Monthly';
$lang['sales_report_heading']               = 'Sales Report';
$lang['report_sales_type_income']           = 'Total Income';

$lang['report_sales_type_customer']                    = 'Customer Report';
$lang['report_sales_base_currency_select_explanation'] = 'You need to select currency because you have invoices with different currency';
$lang['report_sales_from_date']                        = 'From Date';
$lang['report_sales_to_date']                          = 'To Date';


$lang['report_sales_months_all_time']      = 'All Time';
$lang['report_sales_months_six_months']    = 'Last 6 months';
$lang['report_sales_months_twelve_months'] = 'Last 12 months';
$lang['report_sales_months_custom']        = 'Custom';
$lang['reports_sales_generated_report']    = 'Generated Report';



$lang['reports_sales_dt_customers_client']                = 'Customer';
$lang['reports_sales_dt_customers_total_invoices']        = 'Total Invoices';
$lang['reports_sales_dt_items_customers_amount']          = 'Amount';
$lang['reports_sales_dt_items_customers_amount_with_tax'] = 'Amount with Tax';

# Roles
$lang['new_role']           = 'New Role';
$lang['all_roles']          = 'All Role';
$lang['roles']              = 'Staff Roles';
$lang['role']               = 'Role';
$lang['role_lowercase']     = 'role';
$lang['roles_total_users']  = 'Total Users: ';
$lang['roles_dt_name']      = 'Role Name';
$lang['role_add_edit_name'] = 'Role Name';

# Service
$lang['new_service']           = 'Nova storitev';
$lang['services']              = 'Storitve';
$lang['service']               = 'Storitev';
$lang['service_lowercase']     = 'storitev';
$lang['services_dt_name']      = 'Ime storitve';
$lang['service_add_edit_name'] = 'Ime storitve';

# Settings
$lang['settings']                     = 'Nastavitve';
$lang['settings_updated']             = 'Nastavitve posodobljene';
$lang['settings_save']                = 'Shrani nastavitve';
$lang['settings_group_general']       = 'Splošno';
$lang['settings_group_localization']  = 'Lokalizacija';
$lang['settings_group_tickets']       = 'Karte';
$lang['settings_group_sales']         = 'Finance';
$lang['settings_group_email']         = 'Email';
$lang['settings_group_clients']       = 'Stranke';
$lang['settings_group_newsfeed']      = 'Novice';
$lang['settings_group_cronjob']       = 'Cron Job';

$lang['settings_yes']                                        = 'Da';
$lang['settings_no']                                         = 'Ne';
$lang['settings_clients_default_theme']                      = 'Privzeta tema stranke';
$lang['settings_clients_allow_registration']                 = 'Dovoli da se stranke registrirajo';
$lang['settings_clients_allow_kb_view_without_registration'] = 'Dovoli da bazo znanja vidijo stranke, brez da se registrirajo';

$lang['settings_cron_send_overdue_reminder']                 = 'Pošlji opomin o neplačanem računu';
$lang['settings_cron_send_overdue_reminder_tooltip']         = 'Pošlji opomin ko se status računa spremeni na čez rok';
$lang['automatically_send_invoice_overdue_reminder_after']   = 'Avtomatsko pošlji opomin po (dneh)';
$lang['automatically_resend_invoice_overdue_reminder_after'] = 'Avtomatsko ponovno pošlji opomin po (dneh)';

$lang['settings_email_host']      = 'SMTP Gostitelj';
$lang['settings_email_port']      = 'SMTP Vrata';
$lang['settings_email']           = 'SMTP Email';
$lang['settings_email_password']  = 'SMTP Geslo';
$lang['settings_email_charset']   = 'Email Charset';
$lang['settings_email_signature'] = 'Email Podpis';

$lang['settings_general_company_logo']                = 'Logotip podjetja';
$lang['settings_general_company_logo_tooltip']        = 'Priporočene dimenzije: 150 x 34px';
$lang['settings_general_company_remove_logo_tooltip'] = 'Odstrani logotip podjetja';
$lang['settings_general_company_name']                = 'Ime podjetja';
$lang['settings_general_company_main_domain']         = 'Glavna domena podjetja';
$lang['settings_general_use_knowledgebase']           = 'Uporabi bazo znanja';
$lang['settings_general_use_knowledgebase_tooltip']   = 'Če ste dovolili to možnost bo baza znanja pokazana tudi odjemalcu';
$lang['settings_general_tables_limit']                = 'Omejitev strani tabel';
$lang['settings_general_default_staff_role']          = 'Privzeta vloga osebja';
$lang['settings_general_default_staff_role_tooltip']  = 'Ko dodate novega člana osebja bo ta vloga privzeto izbrana';

$lang['settings_localization_date_format']      = 'Format datuma';
$lang['settings_localization_default_timezone'] = 'Privzet časovni pas';
$lang['settings_localization_default_language'] = 'Privzet jezik';


$lang['settings_newsfeed_max_file_upload_post']    = 'Največje število datotek na objavo';
$lang['settings_newsfeed_max_file_size']           = 'Največja velikost datoteke (MB)';

$lang['settings_reminders_contracts']         = 'Opomin o poteku pogodbe';
$lang['settings_reminders_contracts_tooltip'] = 'Opomin o poteku pogodbe v dneh';

$lang['settings_tickets_use_services']             = 'Uporabi storitve';
$lang['settings_tickets_max_attachments']          = 'Največje število pripetih kart';
$lang['settings_tickets_allow_departments_access'] = 'Dovoli osebju da dostopajo le do kart ki pripadajo oddelku osebja';
$lang['settings_tickets_allowed_file_extensions']  = 'Dovoli priponke kot dodatek datoteki';

$lang['settings_sales_general']                                    = 'Splošno';
$lang['settings_sales_general_note']                               = 'Splošne nastavitve';
$lang['settings_sales_invoice_prefix']                             = 'Predpona številke računa';
$lang['settings_sales_decimal_separator']                          = 'Ločitev decimalk';
$lang['settings_sales_thousand_separator']                         = 'Ločitev tisočih';
$lang['settings_sales_currency_placement']                         = 'Umestitev valute';
$lang['settings_sales_currency_placement_before']                  = 'Znesek prej';
$lang['settings_sales_currency_placement_after']                   = 'Znesek potem';
$lang['settings_sales_require_client_logged_in_to_view_invoice']   = 'Zahtevaj da se odjemalec prijavi preden vidi račun';
$lang['settings_sales_next_invoice_number']                        = 'Številka naslednjega računa';
$lang['settings_sales_next_invoice_number_tooltip']                = 'Nastavite to polje na 1 če želite začeti od začetka';
//$lang['settings_sales_decrement_invoice_number_on_delete']         = 'Decrement invoice number on delete';
//$lang['settings_sales_decrement_invoice_number_on_delete_tooltip'] = 'Do you want to decrement the invoice number when the last invoice is deleted? eq. If is set this option to YES and before invoice delete the next invoice number is 15 the next invoice number will decrement to 14. If is set to NO the number will remain to 15.  If you have setup delete only on last invoice to NO you should set this option to NO too to keep the next invoice number not decremented.';
$lang['settings_sales_invoice_number_format']                      = 'Format številke računa';
$lang['settings_sales_invoice_number_format_year_based']           = 'Leto Based';
$lang['settings_sales_invoice_number_format_number_based']         = 'Število Based (000001)';
$lang['settings_sales_invoice_year']                               = 'Leto računa (YYYY/000001)';
$lang['settings_sales_invoice_year_tooltip']                       = 'Trenutno leto računa. To spremenite ko pride novo leto.';

$lang['settings_sales_company_info_heading'] = 'Podjetje';
$lang['settings_sales_company_info_note']    = 'Te informacije bodo prikazane na računih/ocenah/plačilih in drugih PDF dokumentih kjer so zahtevani podatki podjetja';
$lang['settings_sales_company_name']         = 'Ime podjetja';
$lang['settings_sales_address']              = 'Naslov';
$lang['settings_sales_city']                 = 'Mesto';
$lang['settings_sales_country_code']         = 'Koda države';
$lang['settings_sales_postal_code']          = 'Poštna številka';
$lang['settings_sales_phonenumber']          = 'Telefonska številka';

# Leads
$lang['new_lead']       = 'Nova sled';
$lang['leads']          = 'Sledi';
$lang['lead']           = 'Sled';
$lang['lead_lowercase'] = 'sled';
$lang['leads_all']      = 'Vse';

$lang['leads_canban_notes']  = 'Opombe: %s';
$lang['leads_canban_source'] = 'Vir: %s';

$lang['lead_new_source']            = 'Nov vir';
$lang['lead_sources']               = 'Vodilni vir';
$lang['lead_source']                = 'Vodilni vir';
$lang['lead_source_lowercase']      = 'vodilni vir';
$lang['leads_sources_not_found']    = 'Vodilni viri niso bili najdeni';
$lang['leads_sources_table_name']   = 'Ime vira';
$lang['leads_source_add_edit_name'] = 'Ime vira';

$lang['lead_new_status']         = 'Ime novega statusa sledi';
$lang['lead_statuss']            = 'Status sledi';
$lang['lead_status']             = 'Status sledi';
$lang['lead_status_lowercase']   = 'status sledi';
$lang['leads_status_table_name'] = 'Ime statusa';

$lang['leads_status_add_edit_name']  = 'Ime statusa';
$lang['leads_status_add_edit_order'] = 'Naročilo';

$lang['lead_statuses_not_found']      = 'Noben status sledi ni bil našen';
$lang['leads_search']                 = 'Preišči sledi';

$lang['leads_table_total'] = 'Skupno sledi: %s';

$lang['leads_dt_name']         = 'Ime';
$lang['leads_dt_email']        = 'Email';
$lang['leads_dt_phonenumber']  = 'Telefonska številka';
$lang['leads_dt_assigned']     = 'Dodeljeno';
$lang['leads_dt_status']       = 'Status';
$lang['leads_dt_last_contact'] = 'Zadnja pogodba';

$lang['lead_add_edit_name']                 = 'Ime';
$lang['lead_add_edit_email']                = 'Email naslov';
$lang['lead_add_edit_phonenumber']          = 'Telefonska številka';
$lang['lead_add_edit_source']               = 'Vir';
$lang['lead_add_edit_status']               = 'Status sledi';
$lang['lead_add_edit_assigned']             = 'Dodeljeno';
$lang['lead_add_edit_datecontacted']        = 'Datum kontaktiranja';
$lang['lead_add_edit_contected_today']      = 'Kontaktiranje danes';
$lang['lead_add_edit_activity']             = 'Dnevnik aktivnosti';
$lang['lead_add_edit_notes']                = 'Zapiski';
$lang['lead_add_edit_add_note']             = 'Dodaj zapisek';
$lang['lead_not_contacted']                 = 'Nisem prišel v kontakt s to sledjo';
$lang['lead_add_edit_contected_this_lead']  = 'Prišel sem v stik s to sledjo';
$lang['lead_confirmation_canban_contacted'] = 'Ali ste že prišli v stik s to sledjo?';

# Misc
$lang['activity_log_when_cron_job'] = 'Cron Job';
$lang['access_denied']              = 'Dostop zavrnjen';
$lang['prev']                       = 'Prejšnje';
$lang['next']                       = 'Naslednje';

# Datatables
$lang['dt_paginate_first']          = 'Prvi';
$lang['dt_paginate_last']           = 'Zadnja';
$lang['dt_paginate_next']           = 'Naslednja';
$lang['dt_paginate_previous']       = 'Prejšnja';
$lang['dt_empty_table']             = 'No {0} found';
$lang['dt_search']                  = 'Iskanje:';
$lang['dt_zero_records']            = 'Ni ustreznih zapisov';
$lang['dt_loading_records']         = '	Nalaganje...';
$lang['dt_length_menu']             = 'Prikaže_MENI_vpise';
$lang['dt_info_filtered']           = '(filtrirani iz_MAC_celote {0})';
$lang['dt_info_empty']              = 'Prikazuje 0 za 0 od 0 {0}';
$lang['dt_info']                    = 'Prikazuje_START_do_ZAKLJUČEK_od_TOTAL {0}';
$lang['dt_empty_table']             = 'NE {0} najde ';
$lang['dt_sort_ascending']          = 'aktivira da razvrsti stolpce naraščajoče';
$lang['dt_sort_descending']         = 'aktivira da razvrsti stolpce padajoče';
# Invoice Activity Log
$lang['user_sent_overdue_reminder'] = '%s poslan račun opomnika ';
# Weekdays
$lang['wd_monday']    = 'Ponedeljek';
$lang['wd_tuesday']   = 'Torek';
$lang['wd_thursday']  = 'Sreda';
$lang['wd_wednesday'] = 'Četrtek';
$lang['wd_friday']    = 'Petek';
$lang['wd_saturday']  = 'Sobota';
$lang['wd_sunday']    = 'Nedelja';
# Admin Left Sidebar
$lang['als_dashboard'] = 'Nadzorna plošča';
$lang['als_clients']   = 'Stranke';
$lang['als_leads']     = 'Vodje';
$lang['als_contracts'] = 'Pogodbe';
$lang['als_all_tickets'] = 'SVE vstopnice';
$lang['als_sales']       = 'Prodaja';
$lang['als_staff'] = 'Osebje';
$lang['als_tasks'] = 'Naloge';
$lang['als_kb']    = 'Baza znanja';
$lang['als_surveys']               = 'Raziskave';
$lang['als_media']                 = 'Mediji';
$lang['als_reports']               = 'Poročila';
$lang['als_reports_sales_submenu'] = 'Prodaja';
$lang['als_reports_leads_submenu'] = 'Vodje';
$lang['als_kb_articles_submenu']   = 'KB Članki';
$lang['als_utilities']             = 'Pripomočki';
$lang['als_announcements_submenu'] = 'Obvestila';
$lang['als_mail_lists_submenu']    = 'Seznami sporočil ';
$lang['als_calendar_submenu']      = 'Koledar';
$lang['als_activity_log_submenu']  = 'Dnevnik aktivnssti';
# Admin Customizer Sidebar
$lang['acs_tickets']                           = 'Vstopnice';
$lang['acs_ticket_priority_submenu']           = 'Prednost vstopnic';
$lang['acs_ticket_statuses_submenu']           = 'Stanja vstopnic';
$lang['acs_ticket_predefined_replies_submenu'] = 'Vnaprej določeni odgovori ';
$lang['acs_ticket_services_submenu']           = 'Storitve';
$lang['acs_departments']                       = 'Oddelki';
$lang['acs_leads']                             = 'Vodje';
$lang['acs_leads_sources_submenu']             = 'Viri';
$lang['acs_leads_statuses_submenu']            = 'Stanja';
$lang['acs_sales_taxes_submenu']               = 'Davčne stopnje';
$lang['acs_sales_currencies_submenu']          = 'Valute';
$lang['acs_sales_payment_modes_submenu']       = 'Načini plačevanja';
$lang['acs_email_templates']                   = 'Predloge E-sporočil';
$lang['acs_roles']                             = 'Vloge';
$lang['acs_settings']                          = 'Nastavitve';
# Tickets
$lang['new_ticket']                                         = 'Odpri nove vstopnice';
$lang['tickets']                                            = 'Vstopnice';
$lang['ticket']                                             = 'Vstopnice';
$lang['ticket_lowercase']                                   = 'Vstopnica';
$lang['support_tickets']                                    = 'Vstopnice Podpore ';
$lang['support_ticket']                                     = 'Vstopnice Podpore';
$lang['ticket_settings_to']                                 = 'Za';
$lang['ticket_settings_email']                              = 'E-naslov';
$lang['ticket_settings_departments']                        = 'Oddelek';
$lang['ticket_settings_service']                            = 'Storitev';
$lang['ticket_settings_priority']                           = 'Prednost';
$lang['ticket_settings_subject']                            = 'Predmet';
$lang['ticket_settings_assign_to']                          = 'Dodelitev vstopnic (trenutno je privzeti uporabnik)';
$lang['ticket_settings_assign_to_you']                      = 'Ti';
$lang['ticket_settings_select_client']                      = 'Izberi stranko ';
$lang['ticket_add_body']                                    = 'Telo vstopnice';
$lang['ticket_add_attachments']                             = 'Priključki';
$lang['ticket_no_reply_yet']                                = 'Ni odgovora še ';
$lang['new_ticket_added_succesfuly']                        = 'Vstopnica #%s dodana uspešno';
$lang['replied_to_ticket_succesfuly']                       = 'Odgovor do vstopnice  #%s vspešen';
$lang['ticket_settings_updated_successfuly']                = 'Nastavitve vstopnic posodobljene vspešno ';
$lang['ticket_settings_updated_successfuly_and_reassigned'] = 'Nastavitve vstopnic posodobljene vspešn - premeščen na oddelek %s';
$lang['ticket_dt_subject']                                  = 'Predmet';
$lang['ticket_dt_department']                               = 'Oddelek';
$lang['ticket_dt_service']                                  = 'Storitev';
$lang['ticket_dt_submitter']                                = 'Stranka';
$lang['ticket_dt_status']                                   = 'Stanje';
$lang['ticket_dt_priority']                                 = 'Prednost';
$lang['ticket_dt_last_reply']                               = 'Zadnji odgovor';
$lang['ticket_single_add_reply']                  = 'Dodaj odgovor';
$lang['ticket_single_add_note']                   = 'Dodaj opombo';
$lang['ticket_single_other_user_tickets']         = 'Ostale vstopnice';
$lang['ticket_single_settings']                   = 'Nastavitve';
$lang['ticket_single_priority']                   = 'Prednost: %s';
$lang['ticket_single_last_reply']                 = 'Zadnji odgovor: %s';
$lang['ticket_single_change_status_top']          = 'Spremeni stanje';
$lang['ticket_single_ticket_note_by']             = 'Opomba vstopnice  od %s';
$lang['ticket_single_note_added']                 = 'Opomba dodana: %s';
$lang['ticket_single_change_status']              = 'Spremeni stanje';
$lang['ticket_single_assign_to_me_on_update']     = 'Samodejno dodaj vstopnico za mene';
$lang['ticket_single_insert_predefined_reply']    = 'Vstavi vnaprej določen odgovor';
$lang['ticket_single_insert_knowledge_base_link'] = 'Vstavo povezavo baze znanja';
$lang['ticket_single_attachments']                = 'Priključki';
$lang['ticket_single_add_response']               = 'Dodaj odgovor';
$lang['ticket_single_note_heading']               = 'Opomba';
$lang['ticket_single_add_note']                   = 'Dodaj opombo';
$lang['ticket_settings_none_assigned']            = 'Noben';
$lang['ticket_status_changed_successfuly']        = 'Stanje vstopnic spremenjeno';
$lang['ticket_status_changed_fail']               = 'Problem pri spreminjanju stanja vstopnice ';
$lang['ticket_staff_string']                    = 'Osebje';
$lang['ticket_client_string']                   = 'Stranka';
$lang['ticket_posted']                          = 'Objavljeno: %s';
$lang['ticket_insert_predefined_reply_heading'] = 'Vstavi vnaprej določen odgovor';
$lang['ticket_kb_link_heading']                 = 'Vstavi povezavo baze znanja';
$lang['ticket_access_by_department_denied']     = 'Nimate dostopa do te vstopnice.Ta vstopnica pripada oddelku, ki vam ni dodeljen.';
# Staff
$lang['new_staff']                       = 'Novi član osebja';
$lang['staff_members']                   = 'Člani osebja';
$lang['staff_member']                    = 'Član osebja';
$lang['staff_member_lowercase']          = 'Član osebja';
$lang['staff_profile_updated']           = 'Vaš profil je posodobljen ';
$lang['staff_old_password_incorect']     = 'Vaše staro geslo ni pravilno';
$lang['staff_password_changed']          = 'Vaše geslo je bilo spremenjeno';
$lang['staff_problem_changing_password'] = 'Problem pri spreminjanju vašega gesla';
$lang['staff_profile_string']            = 'Profil';
$lang['staff_cant_remove_main_admin']          = 'Ni mogoče odstraniti glavnega skrbnika';
$lang['staff_cant_remove_yourself_from_admin'] = 'Ne morete odstraniti skrbniško vlogo';
$lang['staff_dt_name']       = 'Polno ime';
$lang['staff_dt_email']      = 'E-naslov';
$lang['staff_dt_last_Login'] = 'Zadnja prijava';
$lang['staff_dt_active']     = 'Activen';
$lang['staff_add_edit_firstname']             = 'Ime';
$lang['staff_add_edit_lastname']              = 'Priimek';
$lang['staff_add_edit_email']                 = 'E-naslov';
$lang['staff_add_edit_phonenumber']           = 'Telefonska številka';
$lang['staff_add_edit_facebook']              = 'Facebook';
$lang['staff_add_edit_linkedin']              = 'LinkedIn';
$lang['staff_add_edit_skype']                 = 'Skype';
$lang['staff_add_edit_departments']           = 'Član oddelkov ';
$lang['staff_add_edit_role']                  = 'Vloga';
$lang['staff_add_edit_permissions']           = 'Dovoljenja';
$lang['staff_add_edit_administrator']         = 'Skrbnik';
$lang['staff_add_edit_password']              = 'Geslo';
$lang['staff_add_edit_password_note']         = 'Opomba: če izpolnite polja, geslo tega uporabika bo spremenjeno.';
$lang['staff_add_edit_password_last_changed'] = 'Zadnja sprememba gesla';
$lang['staff_add_edit_notes']                 = 'Opombe';
$lang['staff_add_edit_note_description']      = 'Opis opomb';
$lang['staff_notes_table_description_heading'] = 'Opomba';
$lang['staff_notes_table_addedfrom_heading']   = 'Dodan obrazec  ';
$lang['staff_notes_table_dateadded_heading']   = 'Dodan datum ';
$lang['staff_admin_profile']         = 'To je skrbniški profil';
$lang['staff_profile_notifications'] = 'Obvestila';
$lang['staff_profile_departments']   = 'Oddelki';
$lang['staff_edit_profile_image']                     = 'Slika profila';
$lang['staff_edit_profile_your_departments']          = 'Vaši oddelki';
$lang['staff_edit_profile_change_your_password']      = 'Spremenite vaše geslo';
$lang['staff_edit_profile_change_old_password']       = 'Staro geslo';
$lang['staff_edit_profile_change_new_password']       = 'Novo geslo';
$lang['staff_edit_profile_change_repet_new_password'] = 'Ponovi staro geslo';
# Surveys
$lang['new_survey']                    = 'Nova anketa';
$lang['surveys']                       = 'Ankete';
$lang['survey']                        = 'Anketa';
$lang['survey_lowercase']              = 'anketa';
$lang['survey_no_mail_lists_selected'] = 'Ni izbranih seznamov sporočil';
$lang['survey_send_success_note']      = 'Vsa anketna sporočila(%s) bojo poslana preko CRON';
$lang['survey_result']                 = 'Rezultat Ankete: %s';
$lang['question_string']               = 'Vprešanje';
$lang['question_field_string']         = 'Polja';
$lang['survey_list_view_tooltip']         = 'Pogled ankete';
$lang['survey_list_view_results_tooltip'] = 'Pogled rezultata ';
$lang['survey_add_edit_subject']                   = 'Predmet ankete';
$lang['survey_add_edit_email_description']         = 'Opis ankete(Opis E-naslova)';
$lang['survey_include_survey_link']                = 'Vključi povezavo ankete v opis';
$lang['survey_available_mail_lists_custom_fields'] = 'Raspoložljiva polja iz seznamov sporočil';
$lang['survey_mail_lists_custom_fields_tooltip']   = 'Polja se lahko uporabljajo za urejanje e-sporočil.';
$lang['survey_add_edit_short_description_view']    = 'Kratek opis ankete(Pogled Opisa)';
$lang['survey_add_edit_from']                      = 'Od(prikazano v e-pošti)';
$lang['survey_add_edit_redirect_url']              = 'Preusmeritev URL ankete';
$lang['survey_add_edit_red_url_note']              = 'Ko uporabnik konča anketo, kje mora biti usmerjen(pustite prazno polje za URL strani)';
$lang['survey_add_edit_disabled']                  = 'Onemogočen';
$lang['survey_add_edit_only_for_logged_in']        = 'Samo za prijavljane(osebje,stranke)';
$lang['send_survey_string']                        = 'Send Survey';
$lang['survey_send_mail_list_clients']             = 'Customers';
$lang['survey_send_mail_list_staff']               = 'Staff';
$lang['survey_send_mail_lists_string']             = 'Mail Lists';
$lang['survey_send_mail_lists_note_logged_in']     = 'Note: If you are sending survey to mail lists Only for logged in participants need to be unchecked';
$lang['survey_send_string']                        = 'Send';

$lang['survey_send_to_total']  = 'Send to total %s emails';
$lang['survey_send_till_now']  = 'Till now';
$lang['survey_send_finished']  = 'Survey send finished: %s';
$lang['survey_added_to_queue'] = 'This survey is added to cron queue on %s';

$lang['survey_questions_string']          = 'Questions';
$lang['survey_insert_field']              = 'Insert Field';
$lang['survey_field_checkbox']            = 'Checkbox';
$lang['survey_field_radio']               = 'Radio';
$lang['survey_field_input']               = 'Input Field';
$lang['survey_field_textarea']            = 'Textarea';
$lang['survey_question_required']         = 'Required';
$lang['survey_question_only_for_preview'] = 'Only for preview';
$lang['survey_create_first']              = 'You need to create the survey first then you will be able to insert the questions.';


$lang['survey_dt_name']               = 'Name';
$lang['survey_dt_total_questions']    = 'Total Questions';
$lang['survey_dt_total_participants'] = 'Total Participants';
$lang['survey_dt_date_created']       = 'Date Created';
$lang['survey_dt_active']             = 'Active';

$lang['survey_text_questions_results'] = 'Text questions result';
$lang['survey_view_all_answers']       = 'View all answers';

# Staff Tasks
$lang['new_task']       = 'New Task';
$lang['tasks']          = 'Tasks';
$lang['task']           = 'Task';
$lang['task_lowercase'] = 'task';
$lang['comment_string'] = 'Comment';

$lang['task_marked_as_complete'] = 'Task marked as complete';
$lang['task_follower_removed']   = 'Task follower removed successfully';
$lang['task_assignee_removed']   = 'Task assignee removed successfully';

$lang['task_no_assignees'] = 'No assignees for this task';
$lang['task_no_followers'] = 'No followers for this task';

$lang['task_list_all']            = 'All';
$lang['task_list_finished']       = 'Finished';
$lang['task_list_unfinished']     = 'Unfinished';
$lang['task_list_not_assigned']   = 'Not Assigned';
$lang['task_list_duedate_passed'] = 'Due Date Passed';
$lang['tasks_dt_name']            = 'Name';

$lang['task_single_priority']               = 'Priority';
$lang['task_single_start_date']             = 'Start Date';
$lang['task_single_due_date']               = 'Due Date';
$lang['task_single_finished']               = 'Finished';
$lang['task_single_mark_as_complete']       = 'Mark as complete';
$lang['task_single_edit']                   = 'Edit';
$lang['task_single_delete']                 = 'Delete';
$lang['task_single_assignees']              = 'Assignees';
$lang['task_single_assignees_select_title'] = 'Assign task to';
$lang['task_single_followers']              = 'Followers';
$lang['task_single_followers_select_title'] = 'Add Followers';
$lang['task_single_insert_media_link']      = 'Insert Media Link';
$lang['task_single_add_new_comment']        = 'Add Comment';

$lang['task_add_edit_subject']     = 'Subject';
$lang['task_add_edit_priority']    = 'Priority';
$lang['task_priority_low']         = 'Low';
$lang['task_priority_medium']      = 'Medium';
$lang['task_priority_high']        = 'High';
$lang['task_priority_urgent']      = 'Urgent';
$lang['task_add_edit_start_date']  = 'Start Date';
$lang['task_add_edit_due_date']    = 'Due Date';
$lang['task_add_edit_description'] = 'Task Description';

# Taxes
$lang['new_tax']       = 'New Tax';
$lang['taxes']         = 'Taxes';
$lang['tax']           = 'Tax';
$lang['tax_lowercase'] = 'tax';
$lang['tax_dt_name']   = 'Tax Name';
$lang['tax_dt_rate']   = 'Rate (percent)';

$lang['tax_add_edit_name'] = 'Tax Name';
$lang['tax_add_edit_rate'] = 'Tax Rate (percent)';
$lang['tax_edit_title']    = 'Edit Tax';
$lang['tax_add_title']     = 'Add New Tax';

# Ticket Statuses
$lang['new_ticket_status']       = 'New Ticket Status';
$lang['ticket_statuses']         = 'Ticket Statuses';
$lang['ticket_status']           = 'Ticket Status';
$lang['ticket_status_lowercase'] = 'ticket status';

$lang['ticket_statuses_dt_name']      = 'Ticket Status Name';
$lang['no_ticket_statuses_found']     = 'No ticket statuses found';
$lang['ticket_statuses_table_total']  = 'Total %s';
$lang['ticket_status_add_edit_name']  = 'Ticket Status Name';
$lang['ticket_status_add_edit_color'] = 'Pick Color';
$lang['ticket_status_add_edit_order'] = 'Status Order';

# Todos
$lang['new_todo']                  = 'New Todo';
$lang['my_todos']                  = 'My Todo Items';
$lang['todo']                      = 'Todo Item';
$lang['todo_lowercase']            = 'todo';
$lang['todo_status_changed']       = 'Todo Status Changed';
$lang['todo_add_title']            = 'Add New Todo';
$lang['add_new_todo_description']  = 'Description';
$lang['no_finished_todos_found']   = 'No finished todos found';
$lang['no_unfinished_todos_found'] = 'No todos found';
$lang['unfinished_todos_title']    = 'Unfinished todo\'s';
$lang['finished_todos_title']      = 'Latest finished todo\'s';

# Authentication
$lang['password_changed_email_subject']             = 'Your password has been changed';
$lang['password_reset_email_subject']               = 'Reset your password on %s';
# Utilities
$lang['utility_activity_log']                       = 'Activity Log';
$lang['utility_activity_log_filter_by_date']        = 'Filter by date';
$lang['utility_activity_log_dt_description']        = 'Description';
$lang['utility_activity_log_dt_date']               = 'Date';
$lang['utility_activity_log_dt_staff']              = 'Staff';
$lang['utility_calendar_new_event_title']           = 'Add new event';
$lang['utility_calendar_new_event_start_date']      = 'Start Date';
$lang['utility_calendar_new_event_end_date']        = 'End Date';
$lang['utility_calendar_new_event_make_public']     = 'Make Public';
$lang['utility_calendar_event_added_successfuly']   = 'New event added successfully';
$lang['utility_calendar_event_deleted_successfuly'] = 'Event deleted';
$lang['utility_calendar_new_event_placeholder']     = 'Event title';


# Navigation
$lang['nav_notifications']          = 'Notifications';
$lang['nav_my_profile']             = 'My Profile';
$lang['nav_edit_profile']           = 'Edit Profile';
$lang['nav_logout']                 = 'Logout';
$lang['nav_no_notifications']       = 'No notifications found';
$lang['nav_view_all_notifications'] = 'View all notifications';
$lang['nav_customizer_tooltip']     = 'Customize Settings';
$lang['nav_notifications_tooltip']  = 'View Notifications';

## Clients
$lang['clients_required_field'] = 'This field is required';

# Footer
$lang['clients_copyright'] = 'Copyright %s';

# Announcements
$lang['clients_announcement_from']  = 'From: ';
$lang['clients_announcement_added'] = 'Added: ';

# Contracts
$lang['clients_contracts']               = 'Contracts';
$lang['clients_contracts_dt_subject']    = 'Subject';
$lang['clients_contracts_dt_start_date'] = 'Start Date';
$lang['clients_contracts_dt_end_date']   = 'End Date';

# Home
$lang['clients_quick_invoice_info']                = 'Quick Invoices Info';
$lang['clients_home_currency_select_tooltip']      = 'You need to select currency because you have invoices with different currency';

# Invoices
$lang['clients_invoice_html_btn_download'] = 'Download';

$lang['clients_my_invoices']        = 'My Invoices';
$lang['clients_invoice_dt_number']  = 'Invoice #';
$lang['clients_invoice_dt_date']    = 'Date';
$lang['clients_invoice_dt_duedate'] = 'Due Date';
$lang['clients_invoice_dt_amount']  = 'Amount';
$lang['clients_invoice_dt_status']  = 'Status';

# Profile
$lang['clients_profile_heading'] = 'Profile';

# Used for edit profile and register START
$lang['clients_firstname'] = 'First Name';
$lang['clients_lastname']  = 'Last Name';
$lang['clients_email']     = 'Email Address';
$lang['clients_company']   = 'Company';
$lang['clients_vat']       = 'VAT Number';
$lang['clients_phone']     = 'Phone';
$lang['clients_country']   = 'Country';
$lang['clients_city']      = 'City';
$lang['clients_address']   = 'Address';
$lang['clients_zip']       = 'Zip';
$lang['clients_state']     = 'State';
# Used for edit profile and register END

$lang['clients_register_password']        = 'Password';
$lang['clients_register_password_repeat'] = 'Repeat Password';
$lang['clients_edit_profile_update_btn']  = 'Update';

$lang['clients_edit_profile_change_password_heading'] = 'Change Password';
$lang['clients_edit_profile_old_password']            = 'Old Password';
$lang['clients_edit_profile_new_password']            = 'New Password';
$lang['clients_edit_profile_new_password_repeat']     = 'Repeat Password';
$lang['clients_edit_profile_change_password_btn']     = 'Change Password';
$lang['clients_profile_last_changed_password']        = 'Password last changed %s';

# Knowledge base
$lang['clients_knowledge_base']                    = 'Knowledge Base';
$lang['clients_knowledge_base_articles_not_found'] = 'No knowledge base articles found';
$lang['clients_knowledge_base_find_useful']        = 'Did you find this article useful?';
$lang['clients_knowledge_base_find_useful_yes']    = 'Yes';
$lang['clients_knowledge_base_find_useful_no']     = 'No';
$lang['clients_article_only_1_vote_today']         = 'You can vote once in 24 hours';
$lang['clients_article_voted_thanks_for_feedback'] = 'Thanks for your feedback';

# Tickets
$lang['clients_ticket_open_subject']                = 'Open Ticket';
$lang['clients_ticket_open_departments']            = 'Department';
$lang['clients_tickets_heading']                    = 'Support Tickets';
$lang['clients_ticket_open_service']                = 'Service';
$lang['clients_ticket_open_priority']               = 'Priority';
$lang['clients_latest_tickets']                     = 'Latest Tickets';
$lang['clients_ticket_open_body']                   = 'Ticket Body';
$lang['clients_ticket_attachments']                 = 'Attachments';
$lang['clients_ticket_posted']                      = 'Posted: %s';
$lang['clients_single_ticket_string']               = 'Ticket';
$lang['clients_single_ticket_replied']              = 'Replied: %s';
$lang['clients_single_ticket_informations_heading'] = 'Ticket Informations';

$lang['clients_tickets_dt_number']     = 'Ticket #';
$lang['clients_tickets_dt_subject']    = 'Subject';
$lang['clients_tickets_dt_department'] = 'Department';
$lang['clients_tickets_dt_service']    = 'Service';
$lang['clients_tickets_dt_status']     = 'Status';
$lang['clients_tickets_dt_last_reply'] = 'Last Reply';

$lang['clients_ticket_single_department']        = 'Department: %s';
$lang['clients_ticket_single_submited']          = 'Submited: %s';
$lang['clients_ticket_single_status']            = 'Status:';
$lang['clients_ticket_single_priority']          = 'Priority: %s';
$lang['clients_ticket_single_add_reply_btn']     = 'Add Reply';
$lang['clients_ticket_single_add_reply_heading'] = 'Add reply to this ticket';

# Login
$lang['clients_login_heading_no_register'] = 'Please login';
$lang['clients_login_heading_register']    = 'Please login or register';
$lang['clients_login_email']               = 'Email Address';
$lang['clients_login_password']            = 'Password';
$lang['clients_login_remember']            = 'Remember me';
$lang['clients_login_login_string']        = 'Login';

# Register
$lang['clients_register_string']  = 'Register';
$lang['clients_register_heading'] = 'Register';

# Navigation
$lang['clients_nav_login']     = 'Login';
$lang['clients_nav_register']  = 'Register';
$lang['clients_nav_invoices']  = 'Invoices';
$lang['clients_nav_contracts'] = 'Contracts';
$lang['clients_nav_kb']        = 'Knowledge Base';
$lang['clients_nav_profile']   = 'Profile';
$lang['clients_nav_logout']    = 'Logout';

# Datatables
$lang['clients_dt_paginate_first']    = 'First';
$lang['clients_dt_paginate_last']     = 'Last';
$lang['clients_dt_paginate_next']     = 'Next';
$lang['clients_dt_paginate_previous'] = 'Previous';
$lang['clients_dt_empty_table']       = 'No {0} found';
$lang['clients_dt_search']            = 'Search:';
$lang['clients_dt_zero_records']      = 'No matching records found';
$lang['clients_dt_loading_records']   = 'Loading...';
$lang['clients_dt_length_menu']       = 'Show _MENU_ ';
$lang['clients_dt_info_filtered']     = '(filtered from _MAX_ total {0})';
$lang['clients_dt_info_empty']        = 'Showing 0 to 0 of 0 {0}';
$lang['clients_dt_info']              = 'Showing _START_ to _END_ of _TOTAL_ {0}';
$lang['clients_dt_empty_table']       = 'No {0} found';
$lang['clients_dt_sort_ascending']    = 'activate to sort column ascending';
$lang['clients_dt_sort_descending']   = 'activate to sort column descending';


# Version 1.0.1
# Admin
#
# Payments
$lang['payment_receipt']                               = 'Payment Receipt';
$lang['payment_for_string']                            = 'Payment For';
$lang['payment_date']                                  = 'Payment Date:';
$lang['payment_view_mode']                             = 'Payment Mode:';
$lang['payment_total_amount']                          = 'Total Amount';
$lang['payment_table_invoice_number']                  = 'Invoice Number';
$lang['payment_table_invoice_date']                    = 'Invoice Date';
$lang['payment_table_invoice_amount_total']            = 'Invoice Amount';
$lang['payment_table_payment_amount_total']            = 'Payment Amount';
$lang['payments_table_transaction_id']                 = 'Transaction ID: %s';
$lang['payment_getaway_token_not_found']               = 'Token Not Found';
$lang['online_payment_recorded_success']               = 'Payment recorded successfully';
$lang['online_payment_recorded_success_fail_database'] = 'Payment is successful but failed to insert payment to database, contact administrator';

# Leads
$lang['lead_convert_to_client']                   = 'Convert to customer';
$lang['lead_convert_to_email']                    = 'Email';
$lang['lead_convert_to_client_firstname']         = 'First Name';
$lang['lead_convert_to_client_lastname']          = 'Last Name';
$lang['lead_email_already_exists']                = 'Lead email already exists in customers data';
$lang['lead_to_client_base_converted_success']    = 'Lead converted to customer successfully';
$lang['lead_already_converted']                   = 'Converted to customer';
$lang['lead_have_client_profile']                 = 'This lead have customer profile.';
$lang['lead_converted_edit_client_profile']       = 'Edit Profile';

# Invoices
$lang['view_invoice_as_customer_tooltip']                                     = 'View invoice as customer';
$lang['invoice_add_edit_recurring']                                           = 'Recurring Invoice?';
$lang['invoice_add_edit_recurring_no']                                        = 'No';
$lang['invoice_add_edit_recurring_month']                                     = 'Every %s month';
$lang['invoice_add_edit_recurring_months']                                    = 'Every %s months';
$lang['invoices_list_all']                                                    = 'All';
$lang['invoices_list_not_have_payment']                                       = 'Invoices with no payment record';
$lang['invoices_list_recuring']                                               = 'Recurring Invoices';
$lang['invoices_list_made_payment_by']                                        = 'Made Payment by %s';
$lang['invoices_create_invoice_from_recurring_only_on_paid_invoices']         = 'Create new invoice from main recurring invoice only if is with status Paid';
$lang['invoices_create_invoice_from_recurring_only_on_paid_invoices_tooltip'] = 'If this field is set to YES and the recurring invoices is not with status PAID, the new invoice will NOT be created.';
$lang['send_renewed_invoice_from_recurring_to_email']                         = 'Auto send the renewed invoice to the customer';
$lang['view_invoice_pdf_link_pay']                                            = 'Pay Invoice';

# Payment modes
$lang['payment_mode_add_edit_description']         = 'Bank Accounts / Description';
$lang['payment_mode_add_edit_description_tooltip'] = 'You can set here bank accounts informations. Will be shown on HTML Invoice';
$lang['payment_modes_dt_description']              = 'Bank Accounts / Description';
$lang['payment_modes_add_edit_announcement']       = 'Note: Payment modes listed below are offline modes. Online payment modes can be configured in Settings-> Payment Gataways';
$lang['payment_mode_add_edit_active']              = 'Active';
$lang['payment_modes_dt_active']                   = 'Active';

# Contracts
$lang['contract_not_found'] = 'Contract not found. Maybe is deleted, check activity log';

# Settings
$lang['setting_bar_heading']                 = 'Setup';
$lang['settings_group_online_payment_modes'] = 'Payment Gataways';
$lang['settings_paymentmethod_mode_label']   = 'Label';
$lang['settings_paymentmethod_active']       = 'Active';
$lang['settings_paymentmethod_currencies']   = 'Coma Separated Currencies';
$lang['settings_paymentmethod_testing_mode'] = 'Enable Testing Mode';

$lang['settings_paymentmethod_paypal_username']  = 'Paypal API Username';
$lang['settings_paymentmethod_paypal_password']  = 'Paypal API Password';
$lang['settings_paymentmethod_paypal_signature'] = 'API Signature';

$lang['settings_paymentmethod_stripe_api_secret_key']      = 'Stripe API Secret Key';
$lang['settings_paymentmethod_stripe_api_publishable_key'] = 'Stripe Publishable Key';
$lang['settings_limit_top_search_bar_results']             = 'Limit Top Search Bar Results to';

# Quick Actions
$lang['qa_create_invoice']  = 'Create Invoice';
$lang['qa_create_task']     = 'Create Task';
$lang['qa_create_client']   = 'Create Customer';
$lang['qa_create_contract'] = 'Create Contract';
$lang['qa_create_kba']      = 'Create Knowledge Base Article';
$lang['qa_create_survey']   = 'Create Survey';
$lang['qa_create_ticket']   = 'Open Ticket';
$lang['qa_create_staff']    = 'Create Staff Member';

## Clients
$lang['client_phonenumber'] = 'Phone';

# Main Clients
$lang['clients_register']                          = 'Register';
$lang['clients_profile_updated']                   = 'Your profile has been updated';
$lang['clients_successfully_registered']           = 'Thank your for registering';
$lang['clients_account_created_but_not_logged_in'] = 'Your account has been created but you are not logged in our system automatically. Please try to login';
# Tickets
$lang['clients_tickets_heading']                   = 'Support Tickets';

# Payments
// Uses on stripe page
$lang['payment_for_invoice'] = 'Payment for Invoice';
$lang['payment_total']       = 'Total: %s';

# Invoice
$lang['invoice_html_online_payment']             = 'Online Payment';
$lang['invoice_html_online_payment_button_text'] = 'Pay Now';
$lang['invoice_html_payment_modes_not_selected'] = 'Please Select Payment Mode';
$lang['invoice_html_amount_blank']               = 'Total amount cant be blank or zero';
$lang['invoice_html_offline_payment']            = 'Offline Payment';
$lang['invoice_html_amount']                     = 'Amount';


# Version 1.0.2
# Admin
#
# DataTables
$lang['dt_button_column_visibility']  = 'Visibility';
$lang['dt_button_reload']             = 'Reload';
$lang['dt_button_excel']              = 'Excel';
$lang['dt_button_csv']                = 'CSV';
$lang['dt_button_pdf']                = 'PDF';
$lang['dt_button_print']              = 'Print';
$lang['is_not_active_export']         = 'No';
$lang['is_active_export']             = 'Yes';

# Invoice
$lang['invoice_add_edit_advanced_options']               = 'Advanced Options';
$lang['invoice_add_edit_allowed_payment_modes']          = 'Allowed payment modes for this invoice';
$lang['invoice_add_edit_recuring_invoices_from_invoice'] = 'Recurring invoices from this invoice';
$lang['invoice_add_edit_no_payment_modes_found']         = 'No payment modes found.';
$lang['invoice_html_total_pay']                          = 'Total: %s';

# Email templates
$lang['email_templates_table_heading_name'] = 'Template Name';
# General
$lang['discount_type']                      = 'Discount Type';
$lang['discount_type_after_tax']            = 'After Tax';
$lang['discount_type_before_tax']           = 'Before Tax';
$lang['terms_and_conditions']               = 'Terms & Conditions';
$lang['reference_no']                       = 'Reference #';
$lang['no_discount']                        = 'No discount';
$lang['view_stats_tooltip']                 = 'View Quick Stats';
# Clients
$lang['zip_from_date']                      = 'From Date:';
$lang['zip_to_date']                        = 'To Date:';
$lang['client_zip_payments']                = 'ZIP Payments';
$lang['client_zip_invoices']                = 'ZIP Invoices';
$lang['client_zip_estimates']               = 'ZIP Estimates';
$lang['client_zip_status']                  = 'Status';
$lang['client_zip_status_all']              = 'All';
$lang['client_zip_payment_modes']           = 'Payment made by';
$lang['client_zip_no_data_found']           = 'No %s found';

# Payments
$lang['payment_mode']         = 'Payment Mode';
$lang['payment_view_heading'] = 'Payment';

# Settings
$lang['settings_allow_payment_amount_to_be_modified']               = 'Allow customer to modify the amount to pay (for online payments)';
$lang['settings_survey_send_emails_per_cron_run']                   = 'How much emails to sent per hour';
$lang['settings_survey_send_emails_per_cron_run_tooltip']           = 'This option is used when sending Surveys. The Survey cron will sent X emails per hour. Some hosting providers have limit for sending emails per hour.';
$lang['settings_delete_only_on_last_invoice']                       = 'Delete invoice allowed only on last invoice';
$lang['settings_sales_estimate_prefix']                             = 'Estimate Number Prefix';
$lang['settings_sales_next_estimate_number']                        = 'Next estimate Number';
$lang['settings_sales_next_estimate_number_tooltip']                = 'Set this field to 1 if you want to start from begining';
$lang['settings_sales_decrement_estimate_number_on_delete']         = 'Decrement estimate number on delete';
$lang['settings_sales_decrement_estimate_number_on_delete_tooltip'] = 'Do you want to decrement the estimate number when the last estimate is deleted? eq. If is set this option to YES and before estimate delete the next estimate number is 15 the next estimate number will decrement to 14.If is set to NO the number will remain to 15. If you have setup delete only on last estimate to NO you should set this option to NO too to keep the next estimate number not decremented.';
$lang['settings_sales_estimate_number_format']                      = 'Estimate Number Format';
$lang['settings_sales_estimate_number_format_year_based']           = 'Year Based';
$lang['settings_sales_estimate_number_format_number_based']         = 'Number Based (000001)';
$lang['settings_sales_estimate_year']                               = 'Estimate Year (YYYY/000001)';
$lang['settings_sales_estimate_year_tooltip']                       = 'Current estimate year. Reset this when new year arrives.';
$lang['settings_delete_only_on_last_estimate']                      = 'Delete estimate allowed only on last invoice';
$lang['settings_cron_invoice_heading']                              = 'Invoice';
$lang['settings_send_test_email_heading']                           = 'Send Test Email';
$lang['settings_send_test_email_subheading']                        = 'Send test email to make sure that your SMTP settings is set correctly.';
$lang['settings_send_test_email_string']                            = 'Email Address';
$lang['settings_smtp_settings_heading']                             = 'SMTP Settings';
$lang['settings_smtp_settings_subheading']                          = 'Setup main email';

$lang['settings_sales_heading_general']                             = 'General';
$lang['settings_sales_heading_invoice']                             = 'Invoice';
$lang['settings_sales_heading_estimates']                           = 'Estimates';
$lang['settings_sales_heading_company']                             = 'Company';
$lang['settings_sales_cron_invoice_heading']                        = 'Invoice';

# Tasks
$lang['tasks_dt_datestart'] = 'Date Start';
$lang['tasks_dt_priority']  = 'Priority';

# Invoice General
$lang['invoice_discount'] = 'Discount';

# Tickets
$lang['ticket_settings_client'] = 'Customer';

# Settings
$lang['settings_rtl_support_admin']                                   = 'RTL Admin Area (Right to Left)';
$lang['settings_rtl_support_client']                                  = 'RTL Customers Area (Right to Left)';
$lang['acs_language_editor']                                          = 'Language Editor';
$lang['settings_estimate_auto_convert_to_invoice_on_client_accept']   = 'Auto convert the estimate to invoice after client accept';
$lang['settings_exclude_estimate_from_client_area_with_draft_status'] = 'Exclude estimates with draft status from customers area';

# Months
$lang['January']   = 'January';
$lang['February']  = 'February';
$lang['March']     = 'March';
$lang['April']     = 'April';
$lang['May']       = 'May';
$lang['June']      = 'June';
$lang['July']      = 'July';
$lang['August']    = 'August';
$lang['September'] = 'September';
$lang['October']   = 'October';
$lang['November']  = 'November';
$lang['December']  = 'December';

# Time ago function translate
$lang['time_ago_just_now']  = 'Just now';
$lang['time_ago_minute']    = 'one minute ago';
$lang['time_ago_minutes']   = '%s minutes ago';
$lang['time_ago_hour']      = 'an hour ago';
$lang['time_ago_hours']     = '%s hrs ago';
$lang['time_ago_yesterday'] = 'yesterday';
$lang['time_ago_days']      = '%s days ago';
$lang['time_ago_week']      = 'a week ago';
$lang['time_ago_weeks']     = '%s weeks ago';
$lang['time_ago_month']     = 'a month ago';
$lang['time_ago_months']    = '%s months ago';
$lang['time_ago_year']      = 'one year ago';
$lang['time_ago_years']     = '%s years ago';


# Estimates
$lang['estimates']                          = 'Estimates';
$lang['estimate']                           = 'Estimate';
$lang['estimate_lowercase']                 = 'estimate';
$lang['create_new_estimate']                = 'Create New Estimate';
$lang['view_estimate']                      = 'View estimate';
$lang['estimate_sent_to_client_success']    = 'The estimate is sent successfully to the client';
$lang['estimate_sent_to_client_fail']       = 'Problem while sending the estimate';
$lang['estimate_reminder_send_problem']     = 'Problem sending estimate overdue reminder';
$lang['estimate_details']                   = 'Estimate Details';
$lang['estimate_view']                      = 'View estimate';
$lang['estimate_select_customer']           = 'Customer';
$lang['estimate_add_edit_number']           = 'Estimate Number';
$lang['estimate_add_edit_date']             = 'Estimate Date';
$lang['estimate_add_edit_expirydate']       = 'Expiry Date';
$lang['estimate_add_edit_currency']         = 'Currency';
$lang['estimate_add_edit_client_note']      = 'Client Note';
$lang['estimate_add_edit_admin_note']       = 'Admin Note';
$lang['estimate_add_edit_new_item']         = 'New Item';
$lang['estimate_add_edit_search_item']      = 'Search Items';
$lang['estimates_toggle_table_tooltip']     = 'Toggle Table';
$lang['estimate_add_edit_advanced_options'] = 'Advanced Options';
$lang['estimate_vat']                       = 'VAT Number';
$lang['estimate_to']                        = 'To';
$lang['estimates_list_all']                 = 'All';

$lang['estimate_invoiced_date']                  = 'Estimate Invoiced on %s';
$lang['edit_estimate_tooltip']                   = 'Edit Estimate';
$lang['delete_estimate_tooltip']                 = 'Delete Estimate';
$lang['estimate_sent_to_email_tooltip']          = 'Send to Email';
$lang['estimate_already_send_to_client_tooltip'] = 'This estimate is already sent to the client %s';
$lang['send_overdue_notice_tooltip']             = 'Send Overdue Notice';
$lang['estimate_view_activity_tooltip']          = 'Activity Log';

$lang['estimate_send_to_client_modal_heading']    = 'Send estimate to client';
$lang['estimate_send_to_client_attach_pdf']       = 'Attach estimate PDF';
$lang['estimate_send_to_client_preview_template'] = 'Preview Email Template';

$lang['estimate_dt_table_heading_number']     = 'Estimate #';
$lang['estimate_dt_table_heading_date']       = 'Date';
$lang['estimate_dt_table_heading_client']     = 'Customer';
$lang['estimate_dt_table_heading_expirydate'] = 'Expiry Date';
$lang['estimate_dt_table_heading_amount']     = 'Amount';
$lang['estimate_dt_table_heading_status']     = 'Status';

$lang['estimate_email_link_text']    = 'View Estimate';
$lang['estimate_convert_to_invoice'] = 'Convert to Invoice';
# Home
$lang['home_unfinished_tasks']       = 'Unfinished Tasks';

# Clients
$lang['client_estimates_tab'] = 'Estimates';
$lang['client_payments_tab']  = 'Payments';


# Estimate General
$lang['estimate_pdf_heading']            = 'ESTIMATE';
$lang['estimate_table_item_heading']     = 'Item';
$lang['estimate_table_quantity_heading'] = 'Qty';
$lang['estimate_table_rate_heading']     = 'Rate';
$lang['estimate_table_tax_heading']      = 'Tax';
$lang['estimate_table_amount_heading']   = 'Amount';
$lang['estimate_subtotal']               = 'Sub Total';
$lang['estimate_adjustment']             = 'Adjustment';
$lang['estimate_discount']               = 'Discount';
$lang['estimate_total']                  = 'Total';
$lang['estimate_to']                     = 'To';
$lang['estimate_data_date']              = 'Estimate Date';
$lang['estimate_data_expiry_date']       = 'Expiry Date';
$lang['estimate_note']                   = 'Note:';
$lang['estimate_status_draft']           = 'Draft';
$lang['estimate_status_sent']            = 'Sent';
$lang['estimate_status_declined']        = 'Declined';
$lang['estimate_status_accepted']        = 'Accepted';
$lang['estimate_status_expired']         = 'Expired';
$lang['estimate_note']                   = 'Note:';

# Quick create
$lang['qa_create_estimate'] = 'Create Estimate';
$lang['qa_create_lead']     = 'Create Lead';


## Clients
$lang['clients_estimate_dt_number']             = 'Estimate #';
$lang['clients_estimate_dt_date']               = 'Date';
$lang['clients_estimate_dt_duedate']            = 'Expiry Date';
$lang['clients_estimate_dt_amount']             = 'Amount';
$lang['clients_estimate_dt_status']             = 'Status';
$lang['clients_nav_estimates']                  = 'Estimates';
$lang['clients_decline_estimate']               = 'Decline';
$lang['clients_accept_estimate']                = 'Accept';
$lang['clients_my_estimates']                   = 'Estimates';
$lang['clients_estimate_invoiced_successfuly']  = 'Estimate accepted. Here is the invoice from this estimate';
$lang['clients_estimate_accepted_not_invoiced'] = 'Thank you for accepting this estimate';
$lang['clients_estimate_declined']              = 'Estimate declined. You can accept the estimate any time before expiry date';
$lang['clients_estimate_failed_action']         = 'Failed to take action on this estimate';
$lang['client_add_edit_profile']                = 'Profile';
$lang['clients_estimate_failed_action']         = 'Ni uspelo narediti ocene';
$lang['client_add_edit_profile']                = 'Profil';

# Custom Fields
$lang['custom_field']                          = 'Custom field';
$lang['custom_field_lowercase']                = 'custom field';
$lang['custom_fields']                         = 'Custom Fields';
$lang['custom_fields_lowercase']               = 'custom fields';
$lang['new_custom_field']                      = 'New Custom Field';
$lang['custom_field_name']                     = 'Field Name';
$lang['custom_field_add_edit_type']            = 'Type';
$lang['custom_field_add_edit_belongs_top']     = 'Field Belongs to';
$lang['custom_field_add_edit_options']         = 'Options';
$lang['custom_field_add_edit_options_tooltip'] = 'Only use for Select, Checkbox types. Populate the field by separating the options by coma. eq. apple,orange,banana';
$lang['custom_field_add_edit_order']           = 'Order';

$lang['custom_field_dt_field_to']       = 'Belongs to';
$lang['custom_field_dt_field_name']     = 'Name';
$lang['custom_field_dt_field_type']     = 'Type';
$lang['custom_field_add_edit_active']   = 'Active';
$lang['custom_field_add_edit_disabled'] = 'Disabled';

# Ticket replies
$lang['ticket_reply']           = 'Ticket Reply';
$lang['ticket_reply_lowercase'] = 'ticket reply';

# Admin Customizer Sidebar
$lang['asc_custom_fields'] = 'Custom Fields';

# Contracts
$lang['contract_types']          = 'Contracts Types';
$lang['contract_type']           = 'Contract type';
$lang['new_contract_type']       = 'New Contract Type';
$lang['contract_type_lowercase'] = 'contract';
$lang['contract_type_name']      = 'Name';

$lang['contract_types_list_name'] = 'Contract Type';

# Customizer Menu
$lang['acs_contracts']      = 'Contracts';
$lang['acs_contract_types'] = 'Contract Types';

# Version 1.0.4
# Invoice Items
$lang['invoice_item_long_description']     = 'Long Description';
# Customers
$lang['client_delete_invoices_warning']    = 'This client have invoices or estimates on the account. You cant delete this client. Change all invoices to another client in a future then delete.';
$lang['clients_list_phone']                = 'Phone';
$lang['client_expenses_tab']               = 'Expenses';
$lang['customers_summary']                 = 'Customers Summary';
$lang['customers_summary_active']          = 'Active Contacts';
$lang['customers_summary_inactive']        = 'Inactive Contacts';
$lang['customers_summary_logged_in_today'] = 'Contacts Logged In Today';

# Authentication
$lang['admin_auth_forgot_password_email']             = 'Email Address';
$lang['admin_auth_forgot_password_heading']           = 'Forgot Password';
$lang['admin_auth_login_heading']                     = 'Login';
$lang['admin_auth_login_email']                       = 'Email Address';
$lang['admin_auth_login_password']                    = 'Password';
$lang['admin_auth_login_remember_me']                 = 'Remember me';
$lang['admin_auth_login_button']                      = 'Login';
$lang['admin_auth_login_fp']                          = 'Forgot Password?';
$lang['admin_auth_reset_password_heading']            = 'Reset Password';
$lang['admin_auth_reset_password']                    = 'Password';
$lang['admin_auth_reset_password_repeat']             = 'Repeat Password';
$lang['admin_auth_invalid_email_or_password']         = 'Invalid email or password';
$lang['admin_auth_inactive_account']                  = 'Inactive Account';
# Calender
$lang['calendar_estimate']                            = 'Estimate';
$lang['calendar_invoice']                             = 'Invoice';
$lang['calendar_contract']                            = 'Contract';
$lang['calendar_customer_reminder']                     = 'Client Reminder';
$lang['calendar_event']                               = 'Event';
$lang['calendar_task']                                = 'Task';
# Leads
$lang['lead_edit_delete_tooltip']                     = 'Delete Lead';
$lang['lead_attachments']                             = 'Attachments';
# Admin Customizer Sidebar
$lang['acs_finance']                                  = 'Finance';
# Settings
$lang['new_company_field_info']                       = 'This field will be shown on invoices/estimates on the company side (left). You are not allowed to add any characters(dots,dashes,signs etc.) in the NAME field.';
$lang['new_company_field_name']                       = 'Field Name';
$lang['new_company_field_value']                      = 'Field Value';
$lang['new_company_field']                            = 'Add New Company Field';
$lang['settings_number_padding_invoice_and_estimate'] = 'Invoice/Estimate Number Padding Zero\'s. <br /> <small>eq. If this value is 3 the number will be formated: 005 or 025</small>';
$lang['settings_show_sale_agent_on_invoices']         = 'Show Sale Agent on Invoice';
$lang['settings_show_sale_agent_on_estimates']        = 'Show Sale Agent on Estimate';
$lang['settings_predefined_predefined_term']          = 'Predefined Terms & Conditions';
$lang['settings_predefined_clientnote']               = 'Predefined Client Note';
$lang['settings_custom_pdf_logo_image_url']           = 'Custom PDF Company Logo URL (JPG - 210x60px)';
$lang['settings_custom_pdf_logo_image_url_tooltip']   = 'Probably you will have problems with PNG images with transparency that are handled in different way depending on the php-imagick or php-gd version used. Try to update php-imagick and disable php-gd
. If you leave this field blank the uploaded logo will be used.';

# General
$lang['sale_agent_string']               = 'Sale Agent';
$lang['amount_display_in_base_currency'] = 'Amount is displayed in your base currency - Only use this report if you are using 1 currency for payments and expenses.';
# Leads
$lang['leads_summary']                                         = 'Leads Summary';

# Contracts
$lang['contract_value']                 = 'Contract Value';
$lang['contract_trash']                 = 'Trash';
$lang['contracts_view_trash']           = 'View Trash';
$lang['contracts_view_all']             = 'All';
$lang['contracts_view_exclude_trashed'] = 'Exclude Trashed Contracts';
$lang['contract_value_tooltip']         = 'Base currency will be used.';
$lang['contract_trash_tooltip']         = 'If you add contract to trash, wont be shown on client side, wont be included in chart and other stats and also by default wont be shown when you will list all contracts.';
$lang['contract_summary_active']              = 'Active';
$lang['contract_renew_heading']               = 'Renew Contract';
$lang['contract_summary_heading']             = 'Contract Summary';
$lang['contract_summary_expired']             = 'Expired';
$lang['contract_summary_about_to_expire']     = 'About to Expire';
$lang['contract_summary_recently_added']      = 'Recently Added';
$lang['contract_summary_trash']               = 'Trash';
$lang['contract_summary_by_type']             = 'Contracts by Type';
$lang['contract_summary_by_type_value']       = 'Contracts Value by Type';
$lang['contract_renewed_successfuly']         = 'Contract renewed successfully';
$lang['contract_renewed_fail']                = 'Problem while renewing the contract. Contact administrator';
$lang['no_contract_renewals_found']           = 'Renewals for this contract is not found';
$lang['no_contract_renewals_history_heading'] = 'Contract Renewal History';
$lang['contract_renewed_by']                  = '%s renewed this contract';
$lang['contract_renewal_deleted']             = 'Renewal successfully deleted';
$lang['contract_renewal_delete_fail']         = 'Failed to delete contract renewal. Contact administrator';

$lang['contract_renewal_new_value'] = 'New Contract Value: %s';
$lang['contract_renewal_old_value'] = 'Old Contract Value: %s';

$lang['contract_renewal_new_start_date'] = 'New Start Date: %s';
$lang['contract_renewal_old_start_date'] = 'Old Contract Start Date was: %s';

$lang['contract_renewal_new_end_date'] = 'New End Date: %s';
$lang['contract_renewal_old_end_date'] = 'Old Contract End Date was: %s';
$lang['contract_attachment']           = 'Attachment';
$lang['contract_attachment_lowercase'] = 'attachment';

# Admin Aside Menu
$lang['als_goals_tracking']     = 'Goals Tracking';
$lang['als_expenses']           = 'Expenses';
$lang['als_reports_expenses']   = 'Expenses';
$lang['als_expenses_vs_income'] = 'Expenses vs Income';

# Invoices
$lang['invoice_attach_file']           = 'Attach File';
$lang['invoice_mark_as_sent']          = 'Mark as Sent';
$lang['invoice_marked_as_sent']        = 'Invoice marked as sent successfully';
$lang['invoice_marked_as_sent_failed'] = 'Failed to mark invoice as sent';

# Quick Actions
$lang['qa_new_goal']    = 'Setup New Goal';
$lang['qa_new_expense'] = 'Record Expense';

# Goals Tracking
$lang['goals']                                         = 'Goals';
$lang['goal']                                          = 'Goal';
$lang['goals_tracking']                                = 'Goals Tracking';
$lang['new_goal']                                      = 'New Goal';
$lang['goal_lowercase']                                = 'goal';
$lang['goal_start_date']                               = 'Start Date';
$lang['goal_end_date']                                 = 'End Date';
$lang['goal_subject']                                  = 'Subject';
$lang['goal_description']                              = 'Description';
$lang['goal_type']                                     = 'Goal Type';
$lang['goal_achievement']                              = 'Achievement';
$lang['goal_contract_type']                            = 'Contract Type';
$lang['goal_notify_when_fail']                         = 'Notify staff members when goal failed to achieve';
$lang['goal_notify_when_achieve']                      = 'Notify staff members when goal achieve';
$lang['goal_progress']                                 = 'Progress';
$lang['goal_total']                                    = 'Total: %s';
$lang['goal_result_heading']                           = 'Goal Progress';
$lang['goal_income_shown_in_base_currency']            = 'Total income is shown in your base currency';
$lang['goal_notify_when_end_date_arrives']             = 'The staff members will be notified when the end date arrives (Requires CRON).';
$lang['goal_staff_members_notified_about_achievement'] = 'The staff members are notified about this goal achievement';
$lang['goal_staff_members_notified_about_failure']     = 'Staff member are notified about the failure';
$lang['goal_notify_staff_manualy']                     = 'Notify Staff Members Manualy';
$lang['goal_notify_staff_notified_manualy_success']    = 'The staff members are notified about this goal result';
$lang['goal_notify_staff_notified_manualy_fail']       = 'Failed to notify staff members about this goal result';

$lang['goal_achieved'] = 'Achieved';
$lang['goal_failed']   = 'Failed';
$lang['goal_close']    = 'Very Close';

$lang['goal_type_total_income']                                         = 'Achieve Total Income';
$lang['goal_type_convert_leads']                                        = 'Convert X Leads';
$lang['goal_type_increase_customers_without_leads_conversions']         = 'Increase Customer Number';
$lang['goal_type_increase_customers_without_leads_conversions_subtext'] = 'Leads Conversion is Excluded';

$lang['goal_type_increase_customers_with_leads_conversions']         = 'Increase Customer Number';
$lang['goal_type_increase_customers_with_leads_conversions_subtext'] = 'Leads Conversions is Included';
$lang['goal_type_make_contracts_by_type_calc_database']              = 'Make Contracts By Type';
$lang['goal_type_make_contracts_by_type_calc_database_subtext']      = 'Is calculated from the date added to database';
$lang['goal_type_make_contracts_by_type_calc_date']                  = 'Make Contracts By Type';
$lang['goal_type_make_contracts_by_type_calc_date_subtext']          = 'Is calculated from the contract start date';
$lang['goal_type_total_estimates_converted']                         = 'X Estimates Conversion ';
$lang['goal_type_total_estimates_converted_subtext']                 = 'Will be taken only estimates that will be converted to invoices';
$lang['goal_type_income_subtext']                                    = 'Income will be calculated in your base currency (not converted)';
# Payments
$lang['payment_transaction_id']                                      = 'Transaction ID';
# Settings Menu

$lang['acs_expenses']                                                = 'Expenses';
$lang['acs_expense_categories']                                      = 'Expenses Categories';
# Expeneses

$lang['acs_expenses']                                                = 'Expenses';
$lang['acs_expense_categories']                                      = 'Expenses Categories';
# Expeneses

$lang['acs_expenses']                                                = 'Stroški';
$lang['acs_expense_categories']                                      = 'Kategorija stroškov';
# Expeneses
$lang['expense_category']                                            = 'Kategorija stroškov';
$lang['expense_category_lowercase']                                  = 'Kategorija stroškov';

$lang['new_expense']                                                 = 'Zapis stroška';

$lang['new_expense']                                                 = 'Zapis stroška';

$lang['expense_add_edit_name']                                       = 'Ime kategorije';
$lang['expense_add_edit_description']                                = 'Opis kategorije';
$lang['expense_categories']                                          = 'Kategorije stroškov';
$lang['new_expense_category']                                        = 'Nova kategorija';
$lang['dt_expense_description']                                      = 'Opis';
$lang['expense']                                                     = 'Strošek';
$lang['expenses']                                                    = 'Stroški';
$lang['expense_lowercase']                                           = 'strošek';
$lang['expense_add_edit_tax']                                        = 'Davek';
$lang['expense_add_edit_customer']                                   = 'Stranka';
$lang['expense_add_edit_currency']                                   = 'Valuta';
$lang['expense_add_edit_note']                                       = 'Opomba';
$lang['expense_add_edit_date']                                       = 'Datum stroška';
$lang['expense_add_edit_amount']                                     = 'Količina';
$lang['expense_add_edit_billable']                                   = 'Plačljivo';
$lang['expense_add_edit_attach_receipt']                             = 'Pripni račun';
$lang['expense_add_edit_reference_no']                               = 'Referenca #';
$lang['expense_receipt']                                             = 'Strošek računa';
$lang['expense_receipt_lowercase']                                   = 'Strošek računa';
$lang['expense_dt_table_heading_category']                           = 'Kategorija';
$lang['expense_dt_table_heading_amount']                             = 'Količina';
$lang['expense_dt_table_heading_date']                               = 'Datum';
$lang['expense_dt_table_heading_reference_no']                       = 'Referenca #';
$lang['expense_dt_table_heading_customer']                           = 'Stranka';
$lang['expense_dt_table_heading_payment_mode']                       = 'Način plačila';
$lang['expense_converted_to_invoice']                                = 'Strošek uspešno pretvorjen v fakturo';
$lang['expense_converted_to_invoice_fail']                           = 'Neuspela pretvorba stroška v fakturo. Poglej dnevnik napak.';
$lang['expense_copy_success']                                        = 'Strošek je uspešno kopiran..';
$lang['expense_copy_fail']                                           = 'Kopiranje stroška ni uspelo. Izpolnite obvezna polja in poskusite ponovno.';
$lang['expenses_list_all']                                           = 'Vse';
$lang['expenses_list_billable']                                      = 'Plačljivo';
$lang['expenses_list_non_billable']                                  = 'Ne-plačljivo';
$lang['expenses_list_invoiced']                                      = 'Fakturirano';
$lang['expenses_list_unbilled']                                      = 'Nefakturirano';
$lang['expenses_list_recurring']                                     = 'Ponavljajoč';
$lang['expense_invoice_delete_not_allowed']                          = 'Ta strošek ne more biti izbrisan. Strošek je že fakturiran.';
$lang['expense_convert_to_invoice']                                  = 'Pretvori v fakturo.';
$lang['expense_edit']                                                = 'Uredi strošek';
$lang['expense_delete']                                              = 'Izbriši';
$lang['expense_copy']                                                = 'Kopiraj';
$lang['expense_invoice_not_created']                                 = 'Faktura ni ustvarjena';
$lang['expense_billed']                                              = 'Zaračunano.';
$lang['expense_not_billed']                                          = 'Faktura ni plačana.';
$lang['expense_customer']                                            = 'Stranka';
$lang['expense_note']                                                = 'Opomba:';
$lang['expense_date']                                                = 'Datum:';

$lang['acs_expenses']                                                = 'Expenses';
$lang['acs_expense_categories']                                      = 'Expenses Categories';
# Expeneses

$lang['acs_expenses']                                                = 'Expenses';
$lang['acs_expense_categories']                                      = 'Expenses Categories';
# Expeneses

$lang['expense_category']                                            = 'Expense Category';
$lang['expense_category_lowercase']                                  = 'expense category';
$lang['new_expense']                                                 = 'Record Expense';
$lang['expense_add_edit_name']                                       = 'Category Name';
$lang['expense_add_edit_description']                                = 'Category Description';
$lang['expense_categories']                                          = 'Expense Categories';
$lang['new_expense_category']                                        = 'New Category';
$lang['dt_expense_description']                                      = 'Description';
$lang['expense']                                                     = 'Expense';
$lang['expenses']                                                    = 'Expenses';
$lang['expense_lowercase']                                           = 'expense';
$lang['expense_add_edit_tax']                                        = 'Tax';
$lang['expense_add_edit_customer']                                   = 'Customer';
$lang['expense_add_edit_currency']                                   = 'Currency';
$lang['expense_add_edit_note']                                       = 'Note';
$lang['expense_add_edit_date']                                       = 'Expense Date';
$lang['expense_add_edit_amount']                                     = 'Amount';
$lang['expense_add_edit_billable']                                   = 'Billable';
$lang['expense_add_edit_attach_receipt']                             = 'Attach Receipt';
$lang['expense_add_edit_reference_no']                               = 'Reference #';
$lang['expense_receipt']                                             = 'Expense Receipt';
$lang['expense_receipt_lowercase']                                   = 'expense receipt';
$lang['expense_dt_table_heading_category']                           = 'Category';
$lang['expense_dt_table_heading_amount']                             = 'Amount';
$lang['expense_dt_table_heading_date']                               = 'Date';
$lang['expense_dt_table_heading_reference_no']                       = 'Reference #';
$lang['expense_dt_table_heading_customer']                           = 'Customer';
$lang['expense_dt_table_heading_payment_mode']                       = 'Payment Mode';
$lang['expense_converted_to_invoice']                                = 'Expense successfully converted to invoice';
$lang['expense_converted_to_invoice_fail']                           = 'Failed to convert this expense to invoice check error log.';
$lang['expense_copy_success']                                        = 'The expense is copied successfully.';
$lang['expense_copy_fail']                                           = 'Failed to copy expense. Please check the required fields and try again';
$lang['expenses_list_all']                                           = 'All';
$lang['expenses_list_billable']                                      = 'Billable';
$lang['expenses_list_non_billable']                                  = 'Non Billable';
$lang['expenses_list_invoiced']                                      = 'Invoiced';
$lang['expenses_list_unbilled']                                      = 'Not Invoiced';
$lang['expenses_list_recurring']                                     = 'Recurring';
$lang['expense_invoice_delete_not_allowed']                          = 'You cant delete this expense. The expense is already invoiced.';
$lang['expense_convert_to_invoice']                                  = 'Convert To Invoice';
$lang['expense_edit']                                                = 'Edit Expense';
$lang['expense_delete']                                              = 'Delete';
$lang['expense_copy']                                                = 'Copy';
$lang['expense_invoice_not_created']                                 = 'Invoice Not Created';
$lang['expense_billed']                                              = 'Billed';
$lang['expense_not_billed']                                          = 'Invoice Not Paid';
$lang['expense_customer']                                            = 'Customer';
$lang['expense_note']                                                = 'Note:';
$lang['expense_date']                                                = 'Date:';

$lang['expense_ref_noe']                                             = 'Ref #:';
$lang['expense_tax']                                                 = 'Davek:';
$lang['expense_amount']                                              = 'Količina:';
$lang['expense_recurring_indicator']                                 = 'Ponavljajoč';
$lang['expense_already_invoiced']                                    = 'Ta strošek je že fakturiran.';
$lang['expense_recurring_auto_create_invoice']                       = 'Samodejna izdelava fakture';
$lang['expense_recurring_send_custom_on_renew']                      = 'Pošlji fakturo na strankin email, ko se strošek ponovi.';
$lang['expense_recurring_autocreate_invoice_tooltip']                = 'Če je ta opcija izbrana bo faktura za stranko samodejno ustvarjena, ko bo strošek prenovljen.';
$lang['report_expenses_full']                                        = 'Popolno poročilo';
$lang['expenses_yearly_by_categories']                               = 'Letni stroški po kategorijah';
$lang['total_expenses_for']                                          = 'Popolni stroški za'; // leto
$lang['expenses_report_for']                                         = 'Stroški za'; // leto
# Custom fields
$lang['custom_field_required']                                       = 'Obvezno';
$lang['custom_field_show_on_pdf']                                    = 'Prikaži v PDF';
$lang['custom_field_leads']                                          = 'Zgledi';
$lang['custom_field_customers']                                      = 'Stranke';
$lang['custom_field_staff']                                          = 'Osebje';
$lang['custom_field_contracts']                                      = 'Pogodbe';
$lang['custom_field_tasks']                                          = 'Naloge';
$lang['custom_field_expenses']                                       = 'Stroški';
$lang['custom_field_invoice']                                        = 'Faktura';
$lang['custom_field_estimate']                                       = 'Ocena';
# Tickets
$lang['ticket_single_private_staff_notes']                           = 'Zasebni zapiski osebja';


# Business News
$lang['business_news'] = 'Poslovne novice';

# Navigation
$lang['nav_todo_items']               = 'Stvari za narediti';
# Clients
# Contracts
$lang['clients_contracts_type']       = 'Tip pogodbe';
# Version 1.0.5
# General
$lang['no_tax']                             = 'Ni davka';
$lang['numbers_not_formated_while_editing'] = 'Razmerje v vnosnem polju ni formatirano, ko uredi/dodaj predmet ni formatiran. Ne poskušajte jih rolno formatirati tu.';
# Contracts
$lang['contracts_view_expired']             = 'Poteklo';
$lang['contracts_view_without_dateend']     = 'Pogodbe brez končnega datuma';

# Email Templates
$lang['email_template_contracts_fields_heading'] = 'Pogodbe';
# Invoices General
$lang['invoice_estimate_general_options']        = 'Splošne možnosti';
$lang['invoice_table_item_description']          = 'Opis';
$lang['invoice_recurring_indicator']             = 'Ponavljajoče';

# Estimates
$lang['estimate_convert_to_invoice_successfuly'] = 'Ocena uspešno pretvorjena v fakturo.';
$lang['estimate_table_item_description']         = 'Opis';

# Version 1.0.6
# Invoices
# Currencies
$lang['cant_delete_base_currency'] = 'Ne morete izbrisati osnovne valute. Morate dodeliti novo osnovno valuto, da bi izbrisali to.';
$lang['invoice_copy']              = 'Kopiraj fakturo.';
$lang['invoice_copy_success']      = 'Faktura uspešno kopirana.';
$lang['invoice_copy_fail']         = 'Ni uspelo kopirati fakture.';
$lang['invoice_due_after_help']    = 'Nastavite ničlo, da se izognete izračunu.';

$lang['show_shipping_on_invoice'] = 'Prikaži podrobnosti pošiljanja v fakturi.';

# Estimates
$lang['show_shipping_on_estimate']         = 'Prikaži podrobnosti pošiljanja v oceni.';
$lang['is_invoiced_estimate_delete_error'] = 'Ta ocena je fakturirana. Ne morete izbrisati ocene.';

# Customers & Invoices / Estimates
$lang['ship_to']                  = 'Pošlji:';
$lang['customer_profile_details'] = 'Podrobnosti stranke';
$lang['billing_shipping']         = 'Plačilo&dostava';
$lang['billing_address']          = 'Naslov za plačilo';
$lang['shipping_address']         = 'Naslov za dostavo';

$lang['billing_street']  = 'Ulica';
$lang['billing_city']    = 'Mesto';
$lang['billing_state']   = 'Občina';
$lang['billing_zip']     = 'Poštna številka';
$lang['billing_country'] = 'Država';

$lang['shipping_street']                    = 'Ulica';
$lang['shipping_city']                      = 'Mesto';
$lang['shipping_state']                     = 'Občina';
$lang['shipping_zip']                       = 'Poštna številka';
$lang['shipping_country']                   = 'Država';
$lang['get_shipping_from_customer_profile'] = 'Dobi podatke pošiljanja s strankinega profila';

# Customer
$lang['customer_file_from']                                    = 'Kaže iz %';
$lang['customer_default_currency']                             = 'Osnovna enota';
$lang['customer_no_attachments_found']                         = 'Ni najdenih priponk';
$lang['customer_update_address_info_on_invoices']              = 'Posodobi podatke o dostavi in plačilu na vseh prejšnjih fakturah in ocenah.';
$lang['customer_update_address_info_on_invoices_help']         = 'Če obkljukate to polje, bodo informacije o plačilu in dostavi posodobljene pri vseh fakturah in ocenah. Opomba: Fakture s statusom:plačano ne bodo spremenjene.';
$lang['setup_google_api_key_customer_map']                     = 'Nastavite google api ključ, da lahko vidite mapo stranke.';
$lang['customer_attachments_file']                             = 'Datoteka';

$lang['client_send_set_password_email']                        = 'Pošlji mail za nastavitev gesla';

$lang['client_send_set_password_email']                        = 'Pošlji mail za nastavitev gesla';

$lang['customer_billing_same_as_profile']                      = 'Enako kot informacije';
$lang['customer_billing_copy']                                 = 'Kopiraj naslov za plačilo';
$lang['customer_map']                                          = 'Mapa';
$lang['set_password_email_sent_to_client']                     = 'Email za nastavitev gesla je uspešno poslan kontaktu.';
$lang['set_password_email_sent_to_client_and_profile_updated'] = 'Profil posodobljen in email za nastavitev gesla uspešno poslan kontaktu.';
$lang['customer_attachments']                                  = 'Datoteke';
$lang['customer_longitude']                                    = 'Zemljepisna dolžina (Google Maps)';
$lang['customer_latitude']                                     = 'Zemljepisna širina (Google Maps)';

# Authentication
$lang['admin_auth_set_password']          = 'Geslo';
$lang['admin_auth_set_password_repeat']   = 'Ponovite geslo';
$lang['admin_auth_set_password_heading']  = 'Nastavite geslo';
$lang['password_set_email_subject']       = 'Nastavite novo geslo na %';
# General
$lang['apply']                            = 'Uporabi';
$lang['department_calendar_id']           = 'Google Koledar ID';
$lang['kan_ban_string']                   = 'Kan Ban';
$lang['localization_default_language']    = 'Privzeti jezik';
$lang['system_default_string']            = 'Privzeti sistem';
$lang['advanced_options']                 = 'Napredne možnosti';
# Expenses
$lang['expense_list_invoice']             = 'Fakturirano';
$lang['expense_list_billed']              = 'Plačano';
$lang['expense_list_unbilled']            = 'Ni fakturirano';
# Leads
$lang['lead_merge_custom_field']          = 'Združi kot polje po meri';
$lang['lead_merge_custom_field_existing'] = 'Združi s poljem podatkovne baze';
$lang['lead_dont_merge_custom_field']     = 'Ne združi';
$lang['no_lead_notes_found']              = 'Ni najdenih zglednih opomb.';
$lang['leads_view_list']                  = 'Seznam';
$lang['lost_leads']                       = 'Izgubljeni zgledi';
$lang['junk_leads']                       = 'Neželeni zgledi';
$lang['lead_mark_as_lost']                = 'Označi kot izgubljeno';
$lang['lead_unmark_as_lost']              = 'Odznači zgled kot izgubljen';
$lang['lead_marked_as_lost']              = 'Zgled uspešno označen kot izgubljen.';
$lang['lead_unmarked_as_lost']            = 'Zgled uspešno odznačen kot izgubljen.';
$lang['leads_status_color']               = 'Barva';

$lang['lead_mark_as_junk']     = 'Označi zgled kot neželen.';
$lang['lead_unmark_as_junk']   = 'Odznači zgled kot neželen';
$lang['lead_marked_as_junk']   = 'Zgled uspešno označen kot neželen';
$lang['lead_unmarked_as_junk'] = 'Zgled uspešno odznačen kot neželen.';

$lang['lead_not_found']                                                      = 'Zgled ni najden.';
$lang['lead_lost']                                                           = 'Izgubljem.';
$lang['lead_junk']                                                           = 'Neželen';
$lang['leads_not_assigned']                                                  = 'Nedodeljeno';
# Contacts


$lang['contract_not_visible_to_client']                                      = 'Skrij od stranke';
$lang['contract_edit_overview']                                              = 'Pregled pogodbe';

$lang['contract_not_visible_to_client']                                      = 'Hide from customer';
$lang['contract_edit_overview']                                              = 'Contract Overview';

$lang['contract_not_visible_to_client']                                      = 'Skrij od stranke';
$lang['contract_edit_overview']                                              = 'Pregled pogodbe';

$lang['contract_not_visible_to_client']                                      = 'Hide from customer';
$lang['contract_edit_overview']                                              = 'Contract Overview';

$lang['contract_attachments']                                                = 'Priponke';
# Tasks
$lang['task_view_make_public']                                               = 'Naredi javno';
$lang['task_is_private']                                                     = 'Zasebna naloga';
$lang['task_finished']                                                       = 'Končano';
$lang['task_single_related']                                                 = 'Povezane';
$lang['task_unmark_as_complete']                                             = 'Odznači kot končano';
$lang['task_unmarked_as_complete']                                           = 'Naloga odznačena kot končana';
$lang['task_relation']                                                       = 'Povezane';
$lang['task_public']                                                         = 'Javno ';
$lang['task_public_help']                                                    = 'Če ste nalogo nastavili kot javno, bo vidno za vso osebje. Drugače bo vidno samo za osebje, ki so prevzemniki, sledilci in avtorji ali skrbniki';
# Settings
$lang['settings_general_favicon']                                            = 'Favicon';
$lang['settings_output_client_pdfs_from_admin_area_in_client_language']      = 'Izhodni PDF dokumenti stranke iz skrbnikovega območja v strankinim jeziku';
$lang['settings_output_client_pdfs_from_admin_area_in_client_language_help'] = 'Če je ta nastavljena na DA, in npr. je privzeti jezik sistema angleščina in ima stranka nastavljen jezik na francoščini, bodo PDF dokumenti poslani v strankinem jeziku ';
$lang['settings_cron_surveys']                                               = 'Ankete';
$lang['settings_default_tax']                                                = 'Privzeti davek';
$lang['setup_calendar_by_departments']                                       = 'Nastavi koledar po Oddelkih';
$lang['settings_calendar']                                                   = 'Koledar';
$lang['settings_sales_invoice_due_after']                                    = 'Račun zapade po (dneh)';
$lang['settings_google_api']                                                 = 'Google API ključ';
$lang['settings_gcal_main_calendar_id']                                      = 'Google koledar ID';
$lang['settings_gcal_main_calendar_id_help']                                 = 'To je glavni koledar podjetja. Vsi dogodki iz tega koledarja bodo prikazani. Če želite določiti koledar po oddelkih lahko dodate oddelek Google koledar ID.';

$lang['show_on_calendar']                  = 'Pokaži na koledarju';
$lang['show_invoices_on_calendar']         = 'Računi';
$lang['show_estimates_on_calendar']        = 'Ocene';
$lang['show_contracts_on_calendar']        = 'Pogodbe';
$lang['show_tasks_on_calendar']            = 'Naloge';
$lang['show_customer_reminders_on_calendar'] = 'Opomnik strank';

# Leads
$lang['copy_custom_fields_convert_to_customer']                      = 'Kopiraj po meri polja na uporabnikov profil';
$lang['copy_custom_fields_convert_to_customer_help']                 = 'Če katero od sledečih po meri polj ne obstaja za stranko, bodo avtomatsko kreirana s enakim imenom, drugače bo samo vrednost kopirana iz glavnega profila.';

$lang['lead_profile']                                                = 'Profile';
$lang['lead_is_client']                                              = 'Customer';
$lang['leads_kan_ban_notes_title']                                   = 'Notes';
$lang['leads_email_integration_folder_no_encryption']                = 'No Encryption';
$lang['leads_email_integration']                                     = 'Email Integration';
$lang['leads_email_active']                                          = 'Active';
$lang['leads_email_integration_imap']                                = 'IMAP Server';
$lang['leads_email_integration_email']                               = 'Email address (Login)';
$lang['leads_email_integration_password']                            = 'Password';
$lang['leads_email_integration_default_source']                      = 'Default Source';
$lang['leads_email_integration_check_every']                         = 'Check Every (minutes)';
$lang['leads_email_integration_default_assigned']                    = 'Responsibe for new lead';
$lang['leads_email_encryption']                                      = 'Encryption';
$lang['leads_email_integration_updated']                             = 'Email Integration Updated';
$lang['leads_email_integration_default_status']                      = 'Default Status';
$lang['leads_email_integration_folder']                              = 'Folder';
$lang['leads_email_integration_notify_when_lead_imported']           = 'Notify when lead imported';
$lang['leads_email_integration_only_check_unseen_emails']            = 'Only check non opened emails';
$lang['leads_email_integration_only_check_unseen_emails_help']       = 'The script will auto set the email to opened after check. This is used to prevent checking all the emails again and again. Its not recomended to uncheck this option if you have a lot emails and you have setup a lot forwarding to the email you setup for leads';
$lang['leads_email_integration_notify_when_lead_contact_more_times'] = 'Notify if lead send email multiple times';
$lang['leads_email_integration_test_connection']                     = 'Test IMAP Connection';
$lang['lead_email_connection_ok']                                    = 'IMAP Connection is good';
$lang['lead_email_connection_not_ok']                                = 'IMAP Connection is not okey';
$lang['lead_email_activity']                                         = 'Email Activity';
$lang['leads_email_integration_notify_roles']                        = 'Roles to Notify';
$lang['leads_email_integration_notify_staff']                        = 'Staff Members to Notify';
$lang['lead_public']                                                 = 'Public';
$lang['lead_profile']                                                = 'Profil';
$lang['lead_is_client']                                              = 'Stranka';
$lang['leads_kan_ban_notes_title']                                   = 'Zapiski';
$lang['leads_email_integration_folder_no_encryption']                = 'Brez šifriranja ';
$lang['leads_email_integration']                                     = 'E-pošta integracija';
$lang['leads_email_active']                                          = 'Aktiven';
$lang['leads_email_integration_imap']                                = 'IMAP strežnik';
$lang['leads_email_integration_email']                               = 'E-poštni naslov (Prijava)';
$lang['leads_email_integration_password']                            = 'Geslo';
$lang['leads_email_integration_default_source']                      = 'Privzeti vir';
$lang['leads_email_integration_check_every']                         = 'Preveri vsako (minuto)';
$lang['leads_email_integration_default_assigned']                    = 'Odgovorni za novi zgled';
$lang['leads_email_encryption']                                      = 'Šifriranje';
$lang['leads_email_integration_updated']                             = 'E-poštna integracija posodobljena';
$lang['leads_email_integration_default_status']                      = 'Privzeto stanje';
$lang['leads_email_integration_folder']                              = 'Mapa';
$lang['leads_email_integration_notify_when_lead_imported']           = 'Obvesti, ko je zgled uvožen';
$lang['leads_email_integration_only_check_unseen_emails']            = 'Preveri samo nepregledana e-sporočila';
$lang['leads_email_integration_only_check_unseen_emails_help']       = 'Skripta bo avtomatsko nastavila e-sporočilo na odprtu po pregledu. To je uporabljeno za preprečitev preverjanja e-sporočil znova in znova. Ni priporočeno, odznačiti to možnost, če imate veliko e- sporočil in ste nastavili veliko posredovanja za e-pošto, za vaše zglede';
$lang['leads_email_integration_notify_when_lead_contact_more_times'] = 'Obvesti, če je zgled poslal več e-sporočil';
$lang['leads_email_integration_test_connection']                     = 'Testiraj IMAP povezavo';
$lang['lead_email_connection_ok']                                    = 'IMAP povezava je vredu';
$lang['lead_email_connection_not_ok']                                = 'IMAP povezava ni vredu';
$lang['lead_email_activity']                                         = 'E-poštna aktivnost';
$lang['leads_email_integration_notify_roles']                        = 'Vloge za obvestila';
$lang['leads_email_integration_notify_staff']                        = 'Osebje za obvestiti';
$lang['lead_public']                                                 = 'Javno';
>>>>>>> e62936925c46152af995d3d5a41984d9e4a6ca4d
# Knowledge Base

$lang['kb_group_color']                = 'Barva';
$lang['kb_group_order']                = 'Ukaz';
# Utilities - BULK PDF Exporter
$lang['bulk_pdf_exporter']             = 'Bulk PDF izvoznik';
$lang['bulk_export_pdf_payments']      = 'Plačila';
$lang['bulk_export_pdf_estimates']     = 'Ocene';
$lang['bulk_export_pdf_invoices']      = 'Računi';
$lang['bulk_pdf_export_button']        = 'Izvoz';
$lang['bulk_pdf_export_select_type']   = 'Izberi tip';
$lang['no_data_found_bulk_pdf_export'] = 'Ni najdenega datuma za izvoz';
$lang['bulk_export_status_all']        = 'Vse';
$lang['bulk_export_status']            = 'Stanje';
$lang['bulk_export_zip_payment_modes'] = 'Izvedi plačila po ';
$lang['bulk_export_include_tag']       = 'Vključi oznake';
$lang['bulk_export_include_tag_help']  = 'Naprimer original ali kopija. Oznaka bo izdana v PDF-ju. Priporočljivo uporabiti le eno oznako.';
# Predefined replies
$lang['no_predefined_replies_found']   = 'Ni vnaprej določenih odgovorov';
## Clients area
$lang['clients_contract_attachments']  = 'Priponke';
# Backup
$lang['backup_type_full']              = 'Popolna varnostna kopija';
$lang['backup_type_db']                = 'Varnostna kopija podatkovne baze';

$lang['auto_backup_options_updated']     = 'Posodbljena avtomatska varnostna kopija';
$lang['auto_backup_every']               = 'Naredi varnostno kopijo vsakih X dni';
$lang['auto_backup_enabled']             = 'Omogočena (zahteva cron)';
$lang['auto_backup']                     = 'avtomatska varnostna kopija';
$lang['backup_delete']                   = 'Varnostna kopija izbrisana';
$lang['create_backup']                   = 'Ustvari varnostno kopijo';
$lang['backup_success']                  = 'Varnostna kopija je narejena uspešno';
$lang['utility_backup']                  = 'Varnostna kopija podatkovne baze';
$lang['utility_create_new_backup_db']    = 'Ustvari varnostno kopijo podatkovne baze';
$lang['utility_backup_table_backupname'] = 'Varnostna kopija';
$lang['utility_backup_table_backupsize'] = 'Velikost varnostne kopije';
$lang['utility_backup_table_backupdate'] = 'Datum';
$lang['utility_db_backup_note']          = 'Opomba: Zaradi omejenega odzivnega časa, in količine spomina v PHP-ju, varnostno kopiranje zelo velikih podatkovnih baz morda ni mogoče. Če je vaša podatkovna baza zelo velika, boste morda potrebovali narediti varnostno kopiji direktno iz vašega SQL strežnika preko komandne vrstice ali vam jo naredi skrbnik če nimate pravic.';

# Version 1.0.7
## Customers - portal
$lang['clients_nav_proposals'] = 'Zahteve';
$lang['clients_nav_support']   = 'Podpora';
# General
$lang['more']                  = 'Več';
$lang['add_item']              = 'Dodaj predmet';
$lang['goto_admin_area']       = 'Pojdi v skrbiški oddelek';
$lang['click_here_to_edit']    = 'Klikni tukaj za urejanje';
$lang['delete']                = 'Izbriši %s';
$lang['welcome_top']           = 'Dobrodošli %s';

# Customers
$lang['customer_permissions']         = 'Pravice';
$lang['customer_permission_invoice']  = 'Računi';
$lang['customer_permission_estimate'] = 'Ocena';
$lang['customer_permission_proposal'] = 'Zahteve';
$lang['customer_permission_contract'] = 'Pogodbe';
$lang['customer_permission_support']  = 'Podpora';


#Tasks
$lang['task_related_to'] = 'Navezujoč se';

# Send file
$lang['custom_file_fail_send']    = 'Ni uspelo poslati datoteke';
$lang['custom_file_success_send'] = 'Datoteka je bila uspešno poslana  %s';
$lang['send_file_subject']        = 'E-poštni predmet';
$lang['send_file_email']          = 'E-poštni naslov';
$lang['send_file_message']        = 'Sporočilo';
$lang['send_file']                = 'Pošlji datoteko';
$lang['add_checklist_item']       = 'Kontrolni element';
$lang['task_checklist_items']     = 'Kontrolni element';

# Import
$lang['default_pass_clients_import'] = 'Privzeto geslo za vse kontakte';
$lang['simulate_import']             = 'Simuliraj uvoz';
$lang['import_upload_failed']        = 'Nalaganje ni bilo uspešno';
$lang['import_total_imported']       = 'Skupno uvoženo: %s';
$lang['import_leads']                = 'Uvozi zglede';
$lang['import_customers']            = 'Uvozi stranke';
$lang['choose_csv_file']             = 'Izberi CSV datoteke';
$lang['import']                      = 'Uvozi';
$lang['lead_import_status']          = 'Stanje';
$lang['lead_import_source']          = 'Vir';

# Bulk PDF Export
$lang['bulk_export_pdf_proposals'] = 'Zahteve';

# Invoices
$lang['delete_invoice'] = 'Izbriši';

# Calendar
$lang['calendar_lead_reminder'] = 'Opomnik zgledov';

$lang['items']      = 'Predmeti';
$lang['support']    = 'Podpora';
$lang['new_ticket'] = 'Nov kupon';

# Reminders
$lang['client_edit_set_reminder_title'] = 'Dodaj opomnik strank';
$lang['lead_set_reminder_title']        = 'Dodaj opomnik zgledov';
$lang['set_reminder_tooltip']           = 'Ta možnost vam omogoča da nikoli ne pozabite nič o strankah.';
$lang['client_reminders_tab']           = 'Opomini';
$lang['leads_reminders_tab']            = 'Opomini';

# Tickets
$lang['delete_ticket_reply']  = 'Izbriši odgovor';
$lang['ticket_priority_edit'] = 'Uredi prioritete';
$lang['ticket_priority_add']  = 'Dodaj prioritete';
$lang['ticket_status_edit']   = 'Uredi status kupončka';
$lang['ticket_service_edit']  = 'Uredi servis kupončka';
$lang['edit_department']      = 'EUrejevalni oddelek';

# Expenses
$lang['edit_expense_category']                                    = 'Uredi kategorijo stroški';
# Settings
$lang['customer_default_country']                                 = 'Privzeta država ';
$lang['settings_sales_require_client_logged_in_to_view_estimate'] = 'Zahtevani uporabnik mora biti prijavljen za oceno';
$lang['set_reminder']                                             = 'Nastavi opomnik';
$lang['set_reminder_date']                                        = 'Datum opomina';
$lang['reminder_description']                                     = 'Nastavi opis';
$lang['reminder_notify_me_by_email']                              = 'Pošljio e-sporočilo za ta opomnik';
$lang['reminder_added_successfuly']                               = 'Opomnik dodan uspešno. Obveščeni boste ob času.';
$lang['reminder_description']                                     = 'Opis';
$lang['reminder_date']                                            = 'Datum';
$lang['reminder_staff']                                           = 'Opomni';
$lang['reminder_is_notified']                                     = 'Je opomnjen?';
$lang['reminder_is_notified_boolean_no']                          = 'Ne';
$lang['reminder_is_notified_boolean_yes']                         = 'Da';
$lang['reminder_set_to']                                          = 'Nastavi opomnik na';
$lang['reminder_deleted']                                         = 'Opomnik izbrisan uspešno';
$lang['reminder_failed_to_delete']                                = 'Neuspešno izbrisan opomnik';
$lang['show_invoice_estimate_status_on_pdf']                      = 'Pokaži račune/ocene v PDF-ju';
$lang['email_piping_default_priority']                            = 'Nastavi prioriteto na prenesene kupončke';
$lang['show_lead_reminders_on_calendar']                          = 'Opomnik zgledov';
$lang['tickets_piping']                                           = 'Prenesena e-sporočila';
$lang['email_piping_only_replies']                                = 'Dovoljeni odgovori samo preko e-pošte';
$lang['email_piping_only_registered']                             = 'Prenesi samo registrirane uporabnike';
$lang['email_piping_enabled']                                     = 'Omogoči';

# Estimates
$lang['view_estimate_as_client']         = 'View estimate as customer';
$lang['estimate_mark_as']                = 'Mark as %s';
$lang['estimate_status_changed_success'] = 'Estimate status changed';
$lang['estimate_status_changed_fail']    = 'Failed to change estimate status';
$lang['estimate_email_link_text']        = 'View Estimate';

# Proposals
$lang['proposal_to']                            = 'Company / Name';
$lang['proposal_date']                          = 'Date';
$lang['proposal_address']                       = 'Address';
$lang['proposal_phone']                         = 'Phone';
$lang['proposal_email']                         = 'Email';
$lang['proposal_date_created']                  = 'Date Created';
$lang['proposal_open_till']                     = 'Open Till';
$lang['proposal_status_open']                   = 'Open';
$lang['proposal_status_accepted']               = 'Accepted';
$lang['proposal_status_declined']               = 'Declined';
$lang['proposal_status_sent']                   = 'Sent';
$lang['proposal_expired']                       = 'Expired';
$lang['proposal_subject']                       = 'Subject';
$lang['proposal_total']                         = 'Total';
$lang['proposal_status']                        = 'Status';
$lang['proposals_list_all']                     = 'All';
$lang['proposals_leads_related']                = 'Leads Related';
$lang['proposals_customers_related']            = 'Customers Related';
$lang['proposal_related']                       = 'Related';
$lang['proposal_for_lead']                      = 'Lead';
$lang['proposal_for_customer']                  = 'Customer';
$lang['proposal']                               = 'Proposal';
$lang['proposal_lowercase']                     = 'proposal';
$lang['proposals']                              = 'Proposals';
$lang['proposals_lowercase']                    = 'proposals';
$lang['new_proposal']                           = 'New Proposal';
$lang['proposal_currency']                      = 'Currency';
$lang['proposal_allow_comments']                = 'Allow Comments';
$lang['proposal_allow_comments_help']           = 'If you check this options comments will be allowed when your clients view the proposal.';

$lang['proposal_edit']                          = 'Edit';
$lang['proposal_pdf']                           = 'PDF';
$lang['proposal_send_to_email']                 = 'Send to Email';
$lang['proposal_send_to_email_title']           = 'Send Proposal to Email';
$lang['proposal_attach_pdf']                    = 'Attach PDF';
$lang['proposal_preview_template']              = 'Preview Template';
$lang['proposal_view']                          = 'View Proposal';
$lang['proposal_copy']                          = 'Copy';
$lang['proposal_delete']                        = 'Delete';
$lang['proposal_to']                            = 'To';
$lang['proposal_add_comment']                   = 'Add Comment';
$lang['proposal_sent_to_email_success']         = 'Proposal sent to email successfully';
$lang['proposal_sent_to_email_fail']            = 'Failed to sent proposal to email';
$lang['proposal_copy_fail']                     = 'Failed to copy proposal';
$lang['proposal_copy_success']                  = 'Proposal copied successfully';
$lang['proposal_status_changed_success']        = 'Proposal status changed successfully';
$lang['proposal_status_changed_fail']           = 'Failed to change proposal status';
$lang['proposal_assigned']                      = 'Assigned';
$lang['proposal_comments']                      = 'Comments';
$lang['proposal_convert']                       = 'Convert';
$lang['proposal_convert_estimate']              = 'Estimate';
$lang['proposal_convert_invoice']               = 'Invoice';
$lang['proposal_convert_to_estimate']           = 'Convert to Estimate';
$lang['proposal_convert_to_invoice']            = 'Convert to Invoice';
$lang['proposal_convert_to_lead_disabled_help'] = 'You need to convert the lead to customer in order to create %s';
$lang['proposal_convert_not_related_help']      = 'The proposal needs to be related to customer in order to convert to %s';
$lang['proposal_converted_to_estimate_success'] = 'Proposal converted to estimate successfully';
$lang['proposal_converted_to_invoice_success']  = 'Proposal converted to invoice successfully';
$lang['proposal_converted_to_estimate_fail']    = 'Failed to convert proposal to estimate';
$lang['proposal_converted_to_invoice_fail']     = 'Failed to convert proposal to invoice';

# Proposals - view proposal template
$lang['proposal_total_info']   = 'Total %s';
$lang['proposal_accept_info']  = 'Accept';
$lang['proposal_decline_info'] = 'Decline';
$lang['proposal_pdf_info']     = 'PDF';

# Customers Portal
$lang['customer_reset_action']            = 'Reset';
$lang['customer_reset_password_heading']  = 'Reset your password';
$lang['customer_forgot_password_heading'] = 'Forgot Password';
$lang['customer_forgot_password']         = 'Forgot Password?';
$lang['customer_reset_password']          = 'Password';
$lang['customer_reset_password_repeat']   = 'Repeat Password';
$lang['customer_forgot_password_email']   = 'Email Address';
$lang['customer_forgot_password_submit']  = 'Submit';
$lang['customer_ticket_subject']          = 'Subject';

# Email templates
$lang['email_template_proposals_fields_heading'] = 'Proposals';

# Tasks
$lang['add_task_attachments']                 = 'Attachment';
$lang['task_view_attachments']                = 'Attachments';
$lang['task_view_description']                = 'Description';
$lang['task_table_is_finished_indicator']     = 'Yes';
$lang['task_table_is_not_finished_indicator'] = 'No';
$lang['tasks_dt_finished']                    = 'Finished';

# Customer Groups
$lang['customer_group_add_heading']  = 'Add New Customer Group';
$lang['customer_group_edit_heading'] = 'Edit Customer Group';
$lang['new_customer_group']          = 'New Customer Group';
$lang['customer_group_name']         = 'Name';
$lang['customer_groups']             = 'Groups';
$lang['customer_group']              = 'Customer Group';
$lang['customer_group_lowercase']    = 'customer group';

$lang['customer_have_invoices_by']       = 'Contains invoices by status %s';
$lang['customer_have_estimates_by']      = 'Contains estimates by status %s';
$lang['customer_have_contracts_by_type'] = 'Having contracts by type %s';

# Custom fields
$lang['custom_field_show_on_table']              = 'Show on table';
$lang['custom_field_show_on_client_portal']      = 'Show on client portal';
$lang['custom_field_show_on_client_portal_help'] = 'If this field is checked also will be shown in tables';
$lang['custom_field_visibility']                 = 'Visibility';

# Utilities # Menu Builder
$lang['utilities_menu_translate_name_help'] = 'You can add here also translate strings. So if staff/system have language other then the default the menu item names will be outputed in the staff language. Otherwise if the string dont exists in the translate file will be taken the string you enter here.';
$lang['utilities_menu_icon']                = 'Icon';
$lang['active_menu_items']                  = 'Active Menu Items';
$lang['inactive_menu_items']                = 'Inactive Menu Items';
$lang['utilities_menu_permission']          = 'Permission';
$lang['utilities_menu_url']                 = 'URL';
$lang['utilities_menu_name']                = 'Name';
$lang['utilities_menu_save']                = 'Save Menu';

# Knowledge Base
$lang['view_articles_list']     = 'View Articles';
$lang['view_articles_list_all'] = 'All Articles';
$lang['als_add_article']        = 'Add Article';
$lang['als_all_articles']       = 'All Articles';
$lang['als_kb_groups']          = 'Groups';

# Customizer Menu
$lang['menu_builder']            = 'Menu Setup';
$lang['main_menu']               = 'Main Menu';
$lang['setup_menu']              = 'Setup Menu';
$lang['utilities_menu_url_help'] = '%s is auto appended to the url';

# Spam Filter - Tickets
$lang['spam_filters']                 = 'Spam Filters';
$lang['spam_filter']                  = 'Spam Filter';
$lang['new_spam_filter']              = 'New Spam Filter';
$lang['spam_filter_blocked_senders']  = 'Blocked Senders';
$lang['spam_filter_blocked_subjects'] = 'Blocked Subjects';
$lang['spam_filter_blocked_phrases']  = 'Blocked Phrases';
$lang['spam_filter_content']          = 'Content';
$lang['spamfilter_edit_heading']      = 'Edit Spam Filter';
$lang['spamfilter_add_heading']       = 'Add Spam Filter';
$lang['spamfilter_type']              = 'Type';
$lang['spamfilter_type_subject']      = 'Subject';
$lang['spamfilter_type_sender']       = 'Sender';
$lang['spamfilter_type_phrase']       = 'Phrase';

# Tickets
$lang['block_sender']               = 'Block Sender';
$lang['sender_blocked']             = 'Sender Blocked';
$lang['sender_blocked_successfuly'] = 'Sender Blocked Successfully';
$lang['ticket_date_created']        = 'Date Created';

#KB
$lang['edit_kb_group']             = 'Edit group';
# Leads
$lang['edit_source']               = 'Edit Source';
$lang['edit_status']               = 'Edit Status';
# Contacts
$lang['contract_type_edit']        = 'Edit Contract Type';
# Reports
$lang['report_by_customer_groups'] = 'Total Value By Customer Groups';
#Utilities
$lang['ticket_pipe_log']           = 'Ticket Pipe Log';
$lang['ticket_pipe_name']          = 'From Name';
$lang['ticket_pipe_email_to']      = 'To';
$lang['ticket_pipe_email']         = 'From Email';
$lang['ticket_pipe_subject']       = 'Subject';
$lang['ticket_pipe_message']       = 'Message';
$lang['ticket_pipe_date']          = 'Date';
$lang['ticket_pipe_status']        = 'Status';

# Home
$lang['home_latest_activity']       = 'Latest Activity';
$lang['home_my_tasks']              = 'My Tasks';
$lang['home_latest_activity']       = 'Latest Activity';
$lang['home_my_todo_items']         = 'My Todo Items';
$lang['home_widget_view_all']       = 'View All';
$lang['home_stats_full_report']     = 'Full Report';

# Validation - Customer Portal

$lang['form_validation_required']    = 'The {field} field is required.';
$lang['form_validation_valid_email'] = 'The {field} field must contain a valid email address.';
$lang['form_validation_matches']     = 'The {field} field does not match the {param} field.';
$lang['form_validation_is_unique']   = 'The {field} field must contain a unique value.';

# Version 1.0.8
# Notifications & Leads/Estimates/Invoices Activity Log
$lang['not_event'] = 'Calendar event today - %s ...';
$lang['not_event_public'] = 'Public event start today - %s ...';
$lang['not_contract_expiry_reminder'] = 'Datum poteka pogodbe - %s ...';
$lang['not_recurring_expense_cron_activity_heading'] = 'Recurring Expenses Cron Job Activity';
$lang['not_recurring_invoices_cron_activity_heading'] = 'Recurring Invoices Cron Job Activity';
$lang['not_recurring_total_renewed'] = 'Total Renewed: %s';
$lang['not_recurring_expenses_action_taken_from'] = 'Action taken from recurring expense';
$lang['not_invoice_created'] = 'Invoice Created:';
$lang['not_invoice_renewed'] = 'Renewed Invoice:';
$lang['not_expense_renewed'] = 'Renewed Expense:';
$lang['not_invoice_sent_to_customer'] = 'Invoice Sent to Customer: %s';
$lang['not_invoice_sent_yes'] = 'Yes';
$lang['not_invoice_sent_not'] = 'No';
$lang['not_action_taken_from_recurring_invoice'] = 'Action taken from recurring invoice:';
$lang['not_new_reminder_for'] = 'New Reminder for %s';
$lang['not_received_one_or_more_messages_lead'] = 'Received one more email message from lead';
$lang['not_received_lead_imported_email_integration'] = 'Lead Imported From Email Integration';
$lang['not_lead_imported_attachment'] = 'Imported attachment from email';
$lang['not_estimate_status_change'] = 'Imported attachment from email';
$lang['not_estimate_status_updated'] = 'Estimate Status Updated: From: %s to %s';
$lang['not_goal_message_success'] = 'Congratulations! We achieved new goal.<br /> Goal Type: %s
<br />Goal Achievement: %s
<br />Total Achivement: %s
<br />Start Date: %s
<br />End Date: %s';
$lang['not_assigned_lead_to_you'] = '%s assigned lead %s to you';
$lang['not_lead_activity_assigned_to'] = '%s assigned to %s';
$lang['not_lead_activity_attachment_deleted'] = 'Deleted Attachment';
$lang['not_lead_activity_status_updated'] = '%s updated lead status from %s to %s';
$lang['not_lead_activity_contacted'] = '%s contacted this lead on %s';
$lang['not_lead_activity_created'] = '%s created lead';
$lang['not_lead_activity_marked_lost'] = 'Marked as lost';
$lang['not_lead_activity_unmarked_lost'] = 'Unmarked as lost';
$lang['not_lead_activity_marked_junk'] = 'Marked as junk';
$lang['not_lead_activity_unmarked_junk'] = 'Unmarked as junk';
$lang['not_lead_activity_added_attachment'] = 'Added attachment';
$lang['not_lead_activity_converted_email'] = 'Lead email changed. First lead email was: %s and added as customer with email %s';
$lang['not_lead_activity_converted'] = '%s Converted this lead to customer';
$lang['not_liked_your_post'] = '%s liked your post %s ...';
$lang['not_commented_your_post'] = '%s commented on your post %s ...';
$lang['not_liked_your_comment'] = '%s liked your comment %s ...';
$lang['not_proposal_assigned_to_you'] = 'Proposal assigned to you - %s ...';
$lang['not_proposal_comment_from_client'] = 'New comment from customer on proposal %s ...';
$lang['not_proposal_proposal_accepted'] = 'Proposal Accepted';
$lang['not_proposal_proposal_declined'] = 'Proposal Declined';
$lang['not_task_added_you_as_follower'] = 'added you as follower on task %s ...';
$lang['not_task_added_someone_as_follower'] = 'added %s as follower on task %s ...';
$lang['not_task_added_himself_as_follower'] = 'added himself as follower on task %s ...';
$lang['not_task_assigned_to_you'] = 'assigned a task to you %s ...';
$lang['not_task_assigned_someone'] = 'assigned %s to task %s ...';
$lang['not_task_will_do_user'] = 'will do task %s ...';
$lang['not_task_new_attachment'] = 'New Attachment Added';
$lang['not_task_marked_as_complete'] = 'marked task as complete %s';
$lang['not_task_unmarked_as_complete'] = 'unmarked task as complete %s';
$lang['not_ticket_assigned_to_you'] = 'Ticket assigned to you - %s ...';
$lang['not_ticket_reassigned_to_you'] = 'Ticket reassigned to you - %s ...';
$lang['not_estimate_customer_accepted'] = 'Congratulations! Client accepted estimate with number %s';
$lang['not_estimate_customer_declined'] = 'Client declined estimate with number %s';
$lang['estimate_activity_converted'] = 'converted this estimate to invoice.<br /> %s';
$lang['estimate_activity_created'] = 'Created the estimate';
$lang['invoice_estimate_activity_removed_item'] = 'removed item <b>%s</b>';
$lang['estimate_activity_number_changed'] = 'Estimate number changed from %s to %s';
$lang['invoice_activity_number_changed'] = 'Invoice number changed from %s to %s';
$lang['invoice_estimate_activity_updated_item_short_description'] = 'updated item short description from %s to %s';
$lang['invoice_estimate_activity_updated_item_long_description'] = 'updated item long description from <b>%s</b> to <b>%s</b>';
$lang['invoice_estimate_activity_updated_item_rate'] = 'updated item rate from %s to %s';
$lang['invoice_estimate_activity_updated_qty_item'] = 'updated quantity on item <b>%s</b> from %s to %s';
$lang['invoice_estimate_activity_added_item'] = 'added new item <b>%s</b>';
$lang['invoice_estimate_activity_sent_to_client'] = 'sent estimate to client';
$lang['estimate_activity_client_accepted_and_converted'] = 'Customer accepted this estimate. Estimate is converted to invoice with number %s';
$lang['estimate_activity_client_accepted'] = 'Customer accepted this estimate';
$lang['estimate_activity_client_declined'] = 'Client declined this estimate';
$lang['estimate_activity_marked'] = 'marked estimate as %s';
$lang['invoice_activity_status_updated'] = 'Invoice status updated from %s to %s';
$lang['invoice_activity_created'] = 'created the invoice';
$lang['invoice_activity_from_expense'] = 'converted to invoice from expense';
$lang['invoice_activity_recuring_created'] = '[Recurring] Invoice created by CRON';
$lang['invoice_activity_recuring_from_expense_created'] = '[Invoice From Expense] Invoice created by CRON';
$lang['invoice_activity_sent_to_client_cron'] = 'Invoice sent to customer by CRON';
$lang['invoice_activity_sent_to_client'] = 'sent invoice to customer';
$lang['invoice_activity_marked_as_sent'] = 'marked invoice as sent';
$lang['invoice_activity_payment_deleted'] = 'deleted payment for the invoice. Payment #%s, total amount %s';
$lang['invoice_activity_payment_made_by_client'] = 'Client made payment for the invoice from total <b>%s</b> - %s';
$lang['invoice_activity_payment_made_by_staff'] = 'recorded payment from total <b>%s</b> - %s';
$lang['invoice_activity_added_attachment'] = 'Added attachment';

# Navigation
$lang['top_search_placeholder'] = 'Search...';

# Staff
$lang['staff_profile_inactive_account'] = 'This staff member account is inactive';

# Estimates
$lang['copy_estimate'] = 'Copy Estimate';
$lang['estimate_copied_successfuly'] = 'Estimate copied successfully';
$lang['estimate_copied_fail'] = 'Failed to copy estimate';

# Tasks
$lang['tasks_view_assigned_to_user'] = 'Tasks assigned to me';
$lang['tasks_view_follower_by_user'] = 'Tasks i\'m following';
$lang['no_tasks_found'] = 'No Tasks Found';

# Leads
$lang['leads_dt_datecreated'] = 'Created';
$lang['leads_sort_by'] = 'Sort By';
$lang['leads_sort_by_datecreated'] = 'Date Created';
$lang['leads_sort_by_kanban_order'] = 'Kan Ban Order';

# Proposals
$lang['proposal_items_name'] = 'Item';
$lang['proposal_items_description'] = 'Description';
$lang['proposal_items_qty'] = 'Qty';
$lang['proposal_items_rate'] = 'Rate';
$lang['proposal_items_tax'] = 'Tax';
$lang['proposal_items_amount'] = 'Amount';

# Authentication
$lang['check_email_for_reseting_password'] = 'Check your email for further instructions resetting your password';
$lang['inactive_account'] = 'Inactive Account';
$lang['error_setting_new_password_key'] = 'Error setting new password';
$lang['password_reset_message'] = 'Your password has been reset. Please login now!';
$lang['password_reset_message_fail'] = 'Error resetting your password. Try again.';
$lang['password_reset_key_expired'] = 'Password key expired or invalid user';
$lang['admin_auth_reset_pass_repeat'] = 'Password Repeat';
$lang['auth_reset_pass_email_not_found'] = 'Email not found';
$lang['auth_reset_password_submit'] = 'Reset Password';

# Settings
$lang['settings_amount_to_words'] = 'Amount to words';
$lang['settings_amount_to_words_desc'] = 'Output total amount to words in invoice/estimate';
$lang['settings_amount_to_words_enabled'] = 'Enable';
$lang['settings_total_to_words_lowercase'] = 'Number words into lowercase';
$lang['settings_show_tax_per_item'] = 'Show TAX per item (Invoices/Estimates)';

# Reports
$lang['report_sales_months_three_months'] = 'Last 3 months';
$lang['report_invoice_number'] = 'Invoice #';
$lang['report_invoice_customer'] = 'Customer';
$lang['report_invoice_date'] = 'Date';
$lang['report_invoice_duedate'] = 'Due Date';
$lang['report_invoice_amount'] = 'Amount';
$lang['report_invoice_amount_with_tax'] = 'Amount with tax';
$lang['report_invoice_amount_open'] = 'Amount open';
$lang['report_invoice_status'] = 'Status';
$lang['report_invoice_total_amount_with_tax'] = 'Total amount with tax';
$lang['report_invoice_total_amount_without_tax'] = 'Total amount without tax';
$lang['report_invoice_total_taxes'] = 'Taxes';

#Version 1.0.9

# Home stats
$lang['home_stats_by_project_status'] = 'Statistics by project status';
$lang['home_invoice_overview'] = 'Invoice overview';
$lang['home_estimate_overview'] = 'Estimate overview';
$lang['home_proposal_overview'] = 'Proposal overview';
$lang['home_lead_overview'] = 'Leads overview';

$lang['home_my_projects'] = 'My Projects';
$lang['home_announcements'] = 'Announcements';

# Settings
$lang['settings_leads_kanban_limit'] = 'Limit leads kan ban rows per status';
$lang['settings_group_misc'] = 'Misc';
$lang['show_projects_on_calendar'] = 'Projects';
$lang['settings_media_max_file_size_upload'] = 'Max file size upload in Media (MB)';
$lang['settings_client_staff_add_edit_delete_task_comments_first_hour'] = 'Allow customer/staff to add/edit task comments only in the first hour (administrators not applied)';

# Email templates
$lang['email_template_only_domain_email'] = 'Only domain email';

# Announcements
$lang['dismiss_announcement'] = 'Dismiss announcement';
$lang['dismiss_announcement'] = 'Dismiss announcement';
$lang['announcement_from'] = 'From:';
$lang['announcement_date'] = 'Date posted: %s';
$lang['announcement_not_found'] = 'Announcement not found';
$lang['announcements_recents'] = 'Recent Announcements';

# General
$lang['zip_invoices'] = 'Zip Invoices';
$lang['zip_estimates'] = 'Zip Estimates';
$lang['zip_payments'] = 'Zip Payments';
$lang['setup_help'] = 'Help';
$lang['clients_list_company'] = 'Company';
$lang['dt_button_export'] = 'Export';

$lang['dt_entries'] = 'entries';
$lang['invoice_total_paid'] = 'Total Paid';
$lang['invoice_amount_due'] = 'Amount Due';
$lang['report_invoice_discount'] = 'Discounts';

# Calendar
$lang['calendar_project'] = 'Project';

# Leads
$lang['leads_import_assignee'] = 'Assignee';
$lang['customer_from_lead'] = 'Customer from %s';
$lang['lead_kan_ban_attachments'] = 'Attachments: %s';
$lang['leads_sort_by_lastcontact'] = 'Last Contact';

# Tasks
$lang['task_comment_added'] = 'Uspešno dodan komentar';
$lang['task_duedate'] = 'Datum zapadlosti';
$lang['task_view_comments'] = 'Komentarji';
$lang['task_comment_updated'] = 'Komentar posodobljen';
$lang['task_visible_to_client'] = 'Vidna stranka';
$lang['task_hourly_rate'] = 'Urna stopnja';
$lang['hours'] = 'Ure';
$lang['seconds'] = 'Sekunde';
$lang['minutes'] = 'Minute';
$lang['task_start_timer'] = 'Začni časovnik';
$lang['task_stop_timer'] = 'Ustavi časovnik';
$lang['task_billable_help'] = 'Če preverite plačljive naloge bodo prikazane kot točke';
$lang['task_billable'] = 'Plačljiva';
$lang['task_billable_yes'] = 'Plačljiva';
$lang['task_billable_no'] = 'Ne plačljiva';
$lang['task_billed'] = 'Zaračunavajo';
$lang['task_billed_yes'] = 'Zaračunavajo';
$lang['task_billed_no'] = 'Ne Zaračunavajo';
$lang['task_user_logged_time'] = 'Tvoj prijavljeni čas:';
$lang['task_total_logged_time'] = 'Skupni prijavljeni čas:';
$lang['task_is_billed'] = 'To nalogo se zaračuna s številko %s';
$lang['task_statistics'] = 'Statistica';
$lang['task_milestone'] = 'Mejnik';
$lang['task_comment_added'] = 'Comment successfully added';
$lang['task_duedate'] = 'Due Date';
$lang['task_view_comments'] = 'Comments';
$lang['task_comment_updated'] = 'Comment updated';
$lang['task_visible_to_client'] = 'Visible to customer';
$lang['task_hourly_rate'] = 'Hourly Rate';
$lang['hours'] = 'Hours';
$lang['seconds'] = 'Seconds';
$lang['minutes'] = 'Minutes';
$lang['task_start_timer'] = 'Start Timer';
$lang['task_stop_timer'] = 'Stop Timer';
$lang['task_billable_help'] = 'If you check billable the task will be shown when creating invoice as items';
$lang['task_billable'] = 'Billable';
$lang['task_billable_yes'] = 'Billable';
$lang['task_billable_no'] = 'Not Billable';
$lang['task_billed'] = 'Billed';
$lang['task_billed_yes'] = 'Billed';
$lang['task_billed_no'] = 'Not Billed';
$lang['task_user_logged_time'] = 'Your logged time:';
$lang['task_total_logged_time'] = 'Total logged time:';
$lang['task_is_billed'] = 'This task is billed on invoice with number %s';
$lang['task_statistics'] = 'Statistics';
$lang['task_milestone'] = 'Milestone';
# Tickets
$lang['ticket_message_updated_successfuly'] = 'Sporočilo uspešno posodobljeno';

# Invoices
$lang['invoice_task_item_project_tasks_not_included'] = 'Projekt ni vključen v to listo.';
$lang['show_quantity_as'] = 'Pokaži količino:';
$lang['quantity_as_qty'] = 'količina';
$lang['quantity_as_hours'] = 'Ure';
$lang['invoice_table_hours_heading'] = 'Ure';
$lang['bill_tasks'] = 'Obračun naloge';
$lang['invoice_estimate_sent_to_email'] = 'Pošlji na poštni naslov';

# Estimates
$lang['estimate_table_hours_heading'] = 'Ure';

# General
$lang['is_customer_indicator'] = 'Stranka';
$lang['print']            = 'Tiskanje';
$lang['customer_permission_projects']            = 'Projekti';
$lang['no_timers_found']            = 'Ni najdenih začetih časovnikov';
$lang['timers_started_confirm_logout']            = 'Najden četi časovnik naloge!<br /><br />Ste prepričani da se želite odjaviti brez preklica časovnika?';
$lang['confirm_logout']            = 'Odjava';
$lang['timer_top_started']            = 'Začeto ob %s';

# Projects
$lang['cant_change_billing_type_billed_tasks_found'] = 'Nemorete spremeniti način obračuna.';
$lang['project_customer_permission_warning'] = 'Sistem je pokazal, da nimajo kontaktnega dovoljenja do projekta, dodajte dovoljenje v profilu stikov';
$lang['project_invoice_timesheet_start_time'] = 'Začeti čas: %s';
$lang['project_invoice_timesheet_end_time'] = 'Končani čas: %s';
$lang['project_invoice_timesheet_total_logged_time'] = 'Prijavljeni čas: %s';
$lang['project_view_as_client'] = 'Pogled projekta kot stranka';
$lang['project_mark_all_tasks_as_completed'] = 'Označi vse naloge za opravljeno in ustavi vse časovnike(ni obvestil)';
$lang['project_not_started_status_tasks_timers_found'] = 'Najdena ura za nalogo je za ta projekt, priporočljivo je, da spremenite stanje projekta';
$lang['project_status'] = 'Stanje';
$lang['project_status_1'] = 'Ni še začeto';
$lang['project_status_2'] = 'V izdelavi';
$lang['project_status_3'] = 'Na pavzi';
$lang['project_status_4'] = 'Končano';

$lang['project_file_uploaded_by_customer'] = 'Stranka';
$lang['project_file_dateadded'] = 'Datum prenosa';
$lang['project_file_filename'] = 'Ime dadoteke';
$lang['project_file__filetype'] = 'Vrsta dadoteke';
$lang['project_file_visible_to_customer'] = 'Vidno stranki';
$lang['project_file_uploaded_by'] = 'Preneseno od';
$lang['edit_project'] = 'Spremeni projekt';
$lang['copy_project'] = 'Kopiraj projekt';
$lang['delete_project'] = 'Izbriši projekt';
$lang['project_task_assigned_to_user'] = 'Naloga ki je za vas';
$lang['seconds'] = 'Sekunde';
$lang['hours'] = 'Ure';
$lang['minutes'] = 'Minute';
$lang['project']                 = 'Projekt';
$lang['project_lowercase']       = 'projekt';
$lang['projects']                = 'Projekti';
$lang['projects_lowercase']      = 'projekti';
$lang['project_settings']      = 'Nastavitve projektov';
$lang['project_invoiced_successfuly']             = 'Projekt uspešno obračunan';
$lang['new_project']             = 'Nov projekt';
$lang['project_files']            = 'Dadoteke';
$lang['project_activity']            = 'Dejavnosti';
$lang['project_name']            = 'Ime projekta';
$lang['project_description']            = 'Opis Projekta';
$lang['project_customer']            = 'Stranka';
$lang['project_start_date']            = 'Začetni datum';
$lang['project_datecreated']            = 'Datum nastanka';
$lang['project_deadline']            = 'Rok';
$lang['project_billing_type']            = 'Vrsta obračuna';
$lang['project_billing_type_fixed_cost']            = 'Fiksni tečaj';
$lang['project_billing_type_project_hours']            = 'Projekt ure';
$lang['project_billing_type_project_task_hours']            = 'Naloga ure';
$lang['project_billing_type_project_task_hours_hourly_rate']            = 'Na podlagi urne postavke';
$lang['project_rate_per_hour']            = 'urna postavka';
$lang['project_total_cost']            = 'Skupna postavka';
$lang['project_members']            = 'Člani projekta';
$lang['project_member_removed']     = 'Člani projekta odstranjeni uspešno';
$lang['project_overview']           = 'Pregled projekta';
$lang['project_gant']            = 'Ganttov pogled';
$lang['project_milestones']            = 'Mejniki';
$lang['project_milestone_order']            = 'Naročilo';
$lang['project_milestone_duedate_passed']            = 'Datum zapadlosti';
$lang['record_timesheet']            = 'Snemaj Časovno rapredelnico';
$lang['new_milestone']            = 'Novi mejnik';
$lang['edit_milestone']            = 'Popravi mejnik';
$lang['milestone_name']            = 'Ime mejnika';
$lang['milestone_due_date']            = 'Datum zapadlosti';
$lang['project_milestone']            = 'Mejnik';
$lang['project_notes']            = 'Opombe';
$lang['project_timesheets']            = 'Časovne rapredelnice';
$lang['project_timesheet']            = 'Časovna rapredelnica';
$lang['milestone_total_logged_time']            = 'Prijavljen čas';
$lang['project_overview_total_logged_hours']            = 'Skupni prijavljen čas';
$lang['milestones_uncategorized']            = 'Nekategorizirano';
$lang['milestone_no_tasks_found']            = 'Ni najdene naloge';
$lang['copy_project_discussions_not_included']            = 'Priloge in komentarji niso vlkjučeni';
$lang['project_copied_successfuly']            = 'Podatki projekta uspešno kopirani';
$lang['failed_to_copy_project']            = 'Napaka pri kopiranju projekta';
$lang['copy_project_task_include_check_list_items']            = 'Kopiranje predmetov s seznama';
$lang['copy_project_task_include_assignees']            = 'Kopirajte enake pooblasščence';
$lang['copy_project_task_include_followers']            = 'Kopirajte enake sledilce';

$lang['project_days_left']            = 'Preostane toliko dni';
$lang['project_open_tasks']            = 'Odpri nalogo';
$lang['timesheet_stop_timer']            = 'Ustavi časovnik';
$lang['failed_to_add_project_timesheet_end_time_smaller']            = 'Napaka pri dodajanju časovne tabele, končni čas je manjši od začetega';
$lang['project_timesheet_user']            = 'Član';
$lang['project_timesheet_start_time']            = 'Začetni čas';
$lang['project_timesheet_end_time']            = 'Končni čas';
$lang['project_timesheet_time_spend']            = 'Porabljen čas';
$lang['project_timesheet_task']            = 'Naloge';
$lang['project_invoices']                = 'Računi';
$lang['total_logged_hours_by_staff']            = 'Skupni prijavljen čas';
$lang['invoice_project']            = 'Projekti računov';
$lang['invoice_project_info']            = 'Informacija projektov računa';
$lang['invoice_project_data_single_line']            = 'Enovrstični';
$lang['invoice_project_data_task_per_item']            = 'Naloga na predmet';
$lang['invoice_project_data_timesheets_individualy']            = 'Vse tabele posamično';
$lang['invoice_project_item_name_data']            = 'Ime predmeta';
$lang['invoice_project_description_data']            = 'Opis';
$lang['invoice_project_projectname_taskname']            = 'Ime projekta + ime naloge';
$lang['invoice_project_all_tasks_total_logged_time']            = 'Vse naloge + skupaj prijavljen čas na nalogo';
$lang['invoice_project_project_name_data']            = 'Ime projekta';
$lang['invoice_project_timesheet_indivudualy_data']            = 'Čas začetka tabele + končani čas + ves prijavljen čas';
$lang['invoice_project_total_logged_time_data']            = 'Skupani prijavljen čas';

$lang['project_allow_client_to'] = 'Dovoli stranki da %s';
$lang['project_setting_view_task_attachments'] = 'Preglej prilogo naloge';
$lang['project_setting_view_task_checklist_items'] = 'Preglej predmete s seznama';
$lang['project_setting_upload_files'] = 'Naloži dadoteke';
$lang['project_setting_view_task_comments'] = 'Preglej komentarje od naloge';
$lang['project_setting_upload_on_tasks'] = 'priloži prilogo ';
$lang['project_setting_view_task_total_logged_time'] = 'čas prijavljen v nalogo';
$lang['project_setting_open_discussions'] = 'Odpri pogovor';
$lang['project_setting_comment_on_tasks'] = 'Komentiraj na nalogo projekta';
$lang['project_setting_view_tasks'] = 'poglej naloge';
$lang['project_setting_view_milestones'] = 'Poglej miljnik';
$lang['project_setting_view_gantt'] = 'Poglej Gantt';
$lang['project_setting_view_timesheets'] = 'Poglej časovno tabelo';
$lang['project_setting_view_activity_log'] = 'Poglej statistiko aktivnosti';
$lang['project_setting_view_team_members'] = 'Poglej člane ekipe';

$lang['project_discussion_visible_to_customer_yes']                 = 'Vidno';
$lang['project_discussion_visible_to_customer_no']                 = 'Ni vidno';

$lang['project_discussion_posted_on']                 = 'Objavljeno ob %s';
$lang['project_discussion_posted_by']                 = 'Objavljeno od %s';
$lang['project_discussion_failed_to_delete']                 = 'Napaka pri brisanju razprave';
$lang['project_discussion_deleted']                 = 'Razprava upsešno izbrisana';
$lang['project_discussion_no_activity']                 = 'Brez aktivnosti';
$lang['project_discussion']                 = 'Razprava';
$lang['project_discussions']                 = 'Razprava';
$lang['edit_discussion'] = 'Ustvari razpravo';
$lang['new_project_discussion'] = 'Ustvari razpravo';
$lang['project_discussion_subject'] = 'Predmet';
$lang['project_discussion_description'] = 'Opis';
$lang['project_discussion_show_to_customer'] = 'Vidno stranki';
$lang['project_discussion_total_comments'] = 'Vsi komentarji';
$lang['project_discussion_last_activity'] = 'Zadnja aktivnost';
$lang['discussion_add_comment'] = 'Dodaj komentar';
$lang['discussion_newest'] = 'Najnovejše';
$lang['discussion_oldest'] = 'Najstarejše';
$lang['discussion_attachments'] = 'Priloga';
$lang['discussion_send'] = 'Pošlji';
$lang['discussion_reply'] = 'Odgovor';
$lang['discussion_edit'] = 'Spremeni';
$lang['discussion_edited'] = 'Spremenjen';
$lang['discussion_you'] = 'Ti';
$lang['discussion_save'] = 'Shrani';
$lang['discussion_delete'] = 'Zbriši';
$lang['discussion_view_all_replies'] = 'Prikaži odgovore';
$lang['discussion_hide_replies'] = 'Skrij odgovore';
$lang['discussion_no_comments'] = 'Ni komentarja';
$lang['discussion_no_attachments'] = 'Ni prilog';
$lang['discussion_attachments_drop'] = 'Povleci in spusti, da naložite datoteko';
$lang['project_note'] = 'Opomba';
$lang['project_note_private'] = 'Privatne opombe';
$lang['project_save_note'] = 'Shrani opombe';

# Project Activity
$lang['project_activity_created'] = 'Created the project';
$lang['project_activity_updated'] = 'Updated project';
$lang['project_activity_removed_team_member'] = 'Removed team member';
$lang['project_activity_added_team_member'] = 'Added new team member';
$lang['project_activity_marked_all_tasks_as_complete'] = 'Marked all tasks as complete';
$lang['project_activity_recorded_timesheet'] = 'Recorded timesheet';
$lang['project_activity_task_name'] = 'Task:';
$lang['project_activity_deleted_discussion'] = 'Deleted Discussion';
$lang['project_activity_created_discussion'] = 'Created discussion';
$lang['project_activity_updated_discussion'] = 'Updated discussion';
$lang['project_activity_commented_on_discussion'] = 'Commented on discussion';
$lang['project_activity_deleted_discussion_comment'] = 'Deleted discussion comment';
$lang['project_activity_deleted_milestone'] = 'Deleted milestone';
$lang['project_activity_updated_milestone'] = 'Updated milestone';
$lang['project_activity_created_milestone'] = 'Created new milestone';
$lang['project_activity_invoiced_project'] = 'Invoiced project';
$lang['project_activity_task_marked_complete'] = 'Task marked as complete';
$lang['project_activity_task_unmarked_complete'] = 'Task unmarked as complete';
$lang['project_activity_task_deleted'] = 'Task deleted';
$lang['project_activity_new_task_comment'] = 'Commented on task';
$lang['project_activity_new_task_attachment'] = 'Uploaded attachment on task';
$lang['project_activity_new_task_assignee'] = 'Added new task assignee';
$lang['project_activity_task_assignee_removed'] = 'Removed task assignee';
$lang['project_activity_task_timesheet_deleted'] = 'Removed timesheet';
$lang['project_activity_uploaded_file'] = 'Uploaded project file';
$lang['project_activity_status_updated'] = 'Updated project status';
$lang['project_activity_visible_to_customer'] = 'Visible to customer';
$lang['project_activity_project_file_removed'] = 'Removed project file';

# Notifications - DEPRECED - THESE notifications are depreced and will be removed in further released dont translate them
$lang['not_customer_uploaded_project_file'] = 'New file uploaded';
$lang['not_customer_created_new_project_discussion'] = 'New project discussion created';
$lang['not_customer_commented_on_project_discussion'] = 'New comment on project discussion';

# Customers area
$lang['clients_my_estimates'] = 'My Estimates';
$lang['client_no_reply'] = 'No Reply';
$lang['clients_nav_projects'] = 'Projects';
$lang['clients_my_projects'] = 'My Projects';
$lang['client_profile_image'] = 'Profile image';

/////
$lang['sales_report_cancelled_invoices_not_included'] = 'Cancelled invoices are excluded from the report';
$lang['invoices_merge_cancel_merged_invoices'] = 'Mark merged invoices as cancelled instead of deleting';
$lang['invoice_marked_as_cancelled_successfuly'] = 'Invoice marked as cancelled successfully';
$lang['invoice_unmarked_as_cancelled'] = 'Invoice unmarked as cancelled successfully';

$lang['tasks_reminder_notification_before'] = 'Task deadline reminder before (Days)';
$lang['not_task_deadline_reminder'] = 'Task deadline reminder';
$lang['dt_length_menu_all'] = 'All';
$lang['task_not_finished'] = 'Not Completed';
$lang['task_billed_cant_start_timer'] = 'Task billed. Timer cant be start';
$lang['invoice_task_billable_timers_found'] = 'Started timers found';
$lang['project_timesheet_not_updated'] = 'Timesheet not affected';
$lang['project_invoice_task_no_timers_found'] = 'No timers found for this task';
$lang['invoice_project_tasks_not_started'] = 'Not yet started | Start Date: %s';
$lang['invoice_project_see_billed_tasks'] = 'See tasks that will be billed on this invoice';
$lang['invoice_project_all_billable_tasks_marked_as_finished'] = 'All billed tasks will be marked as finished';
$lang['invoice_project_nothing_to_bill'] = 'No tasks to bill. Feel free to add whatever you want in the invoice items.';
$lang['invoice_project_start_date_tasks_not_passed'] = 'Tasks with future start date cannot be billed';
$lang['invoice_project_stop_all_timers'] = 'Stop all timers';
$lang['invoice_project_stop_billabe_timers_only'] = 'Stop only billable timers';
$lang['project_tasks_total_timers_stopped'] = 'Stopped total %s timers';
$lang['project_invoice_timers_started'] = 'Task timers found running on billable tasks, invoice cannot be created. Please stop task timers to create invoice.';
$lang['task_start_timer_only_assignee'] = 'You need to be asigned on this task to start timer!';
$lang['task_comments'] = 'Comments';
$lang['invoice_total_tax'] = 'Total Tax';
$lang['estimates_total_tax'] = 'Total Tax';
$lang['report_invoice_total_tax'] = 'Total Tax';
$lang['home_tickets'] = 'Tickets';
$lang['home_project_activity'] = 'Latest projects activity';
$lang['home_project_activity_not_found'] = 'No projects activity found';
$lang['view_tracking'] = 'Views Tracking';
$lang['view_date'] = 'Date';
$lang['view_ip'] = 'IP Address';
$lang['article_total_views'] = 'Total Views';
$lang['leads_source'] = 'Source';
$lang['invoices_available_for_merging'] = 'Invoices available for merging';
$lang['invoices_merge_discount'] = 'You will have to apply discount of total %s manually to this invoice';
$lang['invoice_merge_number_warning'] = 'Merging invoices will create gaps in invoice numbers. Please do not merge invoices if you want no gaps in your invoice history. You also have the option of manually adjusting invoice numbers if you want to fill the gaps.';
$lang['invoice_mark_as'] = 'Mark as %s';
$lang['invoice_unmark_as'] = 'Unmark as %s';
$lang['invoice_status_cancelled'] = 'Cancelled';
$lang['tasks_reminder_notification_before_help'] = 'Notify task assignees about deadline before X days. The notification/email is sent only to the assignees. If the difference between task start date and task duedate is smaller then the reminders day no notification will be sent.';

# Version 1.1.0
$lang['project_invoice_select_all_tasks'] = 'Select all tasks';
$lang['lead_company'] = 'Company';

# Version 1.1.1
$lang['admin_auth_forgot_password_button'] = 'Confirm';
$lang['task_assigned'] = 'Assigned to';
$lang['switch_to_pipeline'] = 'Switch to pipeline';
$lang['switch_to_list_view'] = 'Switch to list';
$lang['estimates_pipeline'] = 'Estimates Pipeline';
$lang['estimates_pipeline_sort'] = 'Sort By';
$lang['estimates_sort_expiry_date'] = 'Expiry Date';
$lang['estimates_sort_pipeline'] = 'Pipeline Order';
$lang['estimates_sort_datecreated'] = 'Date Created';
$lang['estimates_sort_estimate_date'] = 'Estimate Date';
$lang['estimate_set_reminder_title'] = 'Set Estimate Reminder';
$lang['invoice_set_reminder_title'] = 'Set Invoice Reminder';
$lang['estimate_reminders'] = 'Reminders';
$lang['invoice_reminders'] = 'Reminders';
$lang['estimate_notes'] = 'Notes';
$lang['estimate_add_note'] = 'Add Note';
$lang['dropdown_non_selected_tex'] = 'Nothing selected';
$lang['auto_close_ticket_after'] = 'Auto close ticket after (Hours)';
$lang['event_description'] = 'Description';
$lang['delete_event'] = 'Delete';
$lang['not_new_ticket_created'] = 'New ticket opened in your department - %s';
$lang['receive_notification_on_new_ticket'] = 'Receive notification on new ticket opened';
$lang['receive_notification_on_new_ticket_help'] = 'All staff members which belong to the ticket department will receive notification that new ticket is opened';
$lang['event_updated'] = 'Event updated successfully';
$lang['customer_contacts'] = 'Contacts';
$lang['new_contact'] = 'New Contact';
$lang['contact'] = 'Contact';
$lang['contact_lowercase'] = 'contact';
$lang['contact_primary'] = 'Primary contact';
$lang['contact_position'] = 'Position';
$lang['contact_active'] = 'Active';
$lang['client_company_info'] = 'Company details';
$lang['proposal_save'] = 'Save Proposal';
$lang['calendar'] = 'Calendar';
$lang['settings_pdf'] = 'PDF';
$lang['settings_pdf_font'] = 'PDF Font';
$lang['settings_pdf_table_heading_color'] = 'Items table heading color';
$lang['settings_pdf_table_heading_text_color'] = 'Items table heading text color';
$lang['settings_pdf_font_size'] = 'Default font size';
$lang['proposal_status_draft'] = 'Draft';
$lang['custom_field_contacts'] = 'Contacts';
$lang['company_primary_email'] = 'Primary email';
$lang['client_register_contact_info'] = 'Primary Contact Information';
$lang['client_register_company_info'] = 'Company Informations';
$lang['contact_permissions_info'] = 'Make sure to set appropriate permissions for this contact';
$lang['defaut_leads_kanban_sort'] = 'Default leads kan ban sort';
$lang['defaut_leads_kanban_sort_type'] = 'Sort';
$lang['order_ascending'] = 'Ascending';
$lang['order_descending'] = 'Descending';
$lang['calendar_expand'] = 'expand';
$lang['proposal_reminders'] = 'Reminders';
$lang['proposal_set_reminder_title'] = 'Set proposal reminder';
$lang['settings_allowed_upload_file_types'] = 'Allowed file types';
$lang['no_primary_contact'] = 'This customer dont have primary contact. You need to setup primary contact login as customer. Its recomended all customers to have primary contacts.';
$lang['leads_merge_customer'] = 'Customer fields merging';
$lang['leads_merge_contact'] = 'Contact fields merging';
$lang['leads_merge_as_contact_field'] = 'Merge as contact field';
$lang['lead_convert_to_client_phone'] = 'Phone';
$lang['invoice_status_report_all'] = 'All';
$lang['import_contact_field'] = 'Contact field';


$lang['file_uploaded_success'] = 'There is no error, the file uploaded with success';
$lang['file_exceds_max_filesize'] = 'The uploaded file exceeds the upload_max_filesize directive in php.ini';
$lang['file_exceds_maxfile_size_in_form'] = 'The uploaded file exceeds the MAX_FILE_SIZE directive that was specified in the HTML form';
$lang['file_uploaded_partially'] = 'The uploaded file was only partially uploaded';
$lang['file_not_uploaded'] = 'No file was uploaded';
$lang['file_missing_temporary_folder'] = 'Missing a temporary folder';
$lang['file_failed_to_write_to_disk'] = 'Failed to write file to disk.';
$lang['file_php_extension_blocked'] = 'A PHP extension stopped the file upload.';
$lang['calendar_expand'] = 'Expand';
$lang['view_pdf'] = 'View PDF';
$lang['expense_repeat_every'] = 'Repeat every';

# Version 1.1.2
$lang['leads_switch_to_kanban'] = 'Switch to kan ban';
$lang['survey_no_questions'] = 'This survey does not have questions added yet.';
$lang['survey_submit'] = 'Submit';
$lang['contract_content'] = 'Contract';
$lang['contract_save'] = 'Save Contract';
$lang['contract_send_to_email'] = 'Send to email';
$lang['contract_send_to_client_modal_heading'] = 'Send contract to email';
$lang['contract_send_to'] = 'Send to';
$lang['contract_send_to_client_attach_pdf'] = 'Attach PDF';
$lang['contract_send_to_client_preview_template'] = 'Preview Email Template';
$lang['include_attachments_to_email'] = 'Include attachments to email';
$lang['contract_sent_to_client_success'] = 'The contract is successfully sent to the customer';
$lang['contract_sent_to_client_fail'] = 'Failed to send contract';

# Version 1.1.3
$lang['client_invalid_username_or_password'] = 'Invalid username or password';
$lang['client_old_password_incorect']     = 'Your old password is incorrect';
$lang['client_password_changed']          = 'Your password has been changed';
$lang['check_for_new_version']          = 'Check for new version';

# Version 1.1.4
$lang['total_leads_deleted'] = 'Total leads deleted: %s';
$lang['total_clients_deleted'] = 'Total customers deleted: %s';
$lang['confirm_action_prompt'] = 'Are you sure you want to perform this action?';
$lang['mass_delete'] = 'Mass Delete';
$lang['email_protocol'] = 'Email Protocol';
$lang['add_edit_members'] = 'Add/Edit Members';
$lang['project_overview_logged_hours'] = 'Logged Hours:';
$lang['project_overview_billable_hours'] = 'Billable Hours:';
$lang['project_overview_billed_hours'] = 'Billed Hours:';
$lang['project_overview_unbilled_hours'] = 'Unbilled Hours:';
$lang['calendar_first_day'] = 'First Day';
$lang['dt_mass_delete_help'] = 'Use the checkboxes on the right side for mass delete.';
$lang['permission_view'] = 'View';
$lang['permission_edit'] = 'Edit';
$lang['permission_create'] = 'Create';
$lang['permission_delete'] = 'Delete';
$lang['permission'] = 'Permission';
$lang['permissions'] = 'Permissions';
$lang['proposals_pipeline'] = 'Proposals Pipeline';
$lang['proposals_pipeline_sort'] = 'Sort By';
$lang['proposals_sort_open_till'] = 'Open Till';
$lang['proposals_sort_pipeline'] = 'Pipeline Order';
$lang['proposals_sort_datecreated'] = 'Date Created';
$lang['proposals_sort_proposal_date'] = 'Proposal Date';
$lang['is_not_staff_member'] = 'Not staff member';
$lang['lead_created'] = 'Created';
$lang['access_tickets_to_none_staff_members'] = 'Allow access to tickets for non staff members';
$lang['project_expenses'] = 'Expenses';
$lang['expense_currency'] = 'Currency';
$lang['currency_valid_code_help'] = 'Make sure to enter valid currency code.';
$lang['week'] = 'Week';
$lang['weeks'] = 'Weeks';
$lang['month'] = 'Month';
$lang['months'] = 'Months';
$lang['year'] = 'Year';
$lang['years'] = 'Years';
$lang['expense_report_category'] = 'Category';
$lang['expense_paid_via'] = 'Paid Via %s';
$lang['item_as_expense'] = '[Expense]';
$lang['show_help_on_setup_menu'] = 'Show help menu item on setup menu';
$lang['customers_summary_total'] = 'Total Customers';
$lang['filter_by'] = 'Filter by';
$lang['re_captcha'] = 'reCAPTCHA';
$lang['recaptcha_site_key'] = 'Site key';
$lang['recaptcha_secret_key'] = 'Secret key';
$lang['recaptcha_error'] = 'The reCAPTCHA field is telling that you are a robot.';
$lang['smtp_username'] = 'SMTP Username';
$lang['smtp_username_help'] = 'Fill only if your email client use username for SMTP login.';
$lang['pinned_project']= 'Pinned Project';
$lang['pin_project']= 'Pin Project';
$lang['unpin_project']= 'Unpin Project';
$lang['smtp_encryption']= 'Email Encryption';
$lang['smtp_encryption_none']= 'None';
$lang['show_proposals_on_calendar']= 'Proposals';
$lang['invoice_project_see_billed_expenses']= 'See expenses that wil be billed on this invoice';
$lang['recaptcha_help_settings']= 'If fields are not filled reCAPTCHA will not be used.';
$lang['project_overview_expenses'] = 'Total Expenses';
$lang['project_overview_expenses_billable'] = 'Billable Expenses';
$lang['project_overview_expenses_billed'] = 'Billed Expenses';
$lang['project_overview_expenses_unbilled'] = 'Unbilled Expenses';
$lang['announcement_date_list'] = 'Date';
$lang['project_setting_view_finance_overview'] = 'view finance overview';
$lang['show_all_tasks_for_project_member'] = 'Allow all staff to see all tasks related to projects (includes non-staff)';
$lang['not_staff_added_as_project_member'] = 'Added you as project member';
$lang['report_expenses_base_currency_select_explanation'] = 'You need to select currency because the system found different currencies used for expenses.';

# Version 1.1.6
$lang['project_activity_recorded_expense'] = 'Recorded Expense';
$lang['save_customer_and_add_contact'] = 'Save and create contact';
$lang['tickets_chart_weekly_opening_stats'] = 'Weekly Stats';
$lang['related_knowledgebase_articles'] = 'Related Articles';
$lang['detailed_overview'] = 'Tasks Overview';
$lang['tasks_total_checklists_finished'] = 'Total checklist items marked as finished';
$lang['tasks_total_added_attachments'] = 'Total attachments added';
$lang['tasks_total_comments'] = 'Total comments';
$lang['task_finished_on_time'] = 'Finished on time?';
$lang['task_finished_on_time_indicator'] = 'Yes';
$lang['task_not_finished_on_time_indicator'] = 'No';
$lang['task_filter_fetch_month_by'] = 'Fetch month from';
$lang['filter'] = 'Filter';
$lang['task_filter_detailed_all_months'] = 'All Months';
$lang['task_filter_detailed_show_tasks'] = 'Show Tasks';
$lang['kb_article_slug'] = 'Slug';

# Version 1.1.7
$lang['email_template_ticket_warning'] = 'If ticket is imported with email piping and the contact does not exists in the CRM the fields wont be replaced.';
$lang['auto_stop_tasks_timers_on_new_timer'] = 'Stop all other started timers when starting new timer';
$lang['notification_when_customer_pay_invoice'] = 'Receive notification when customer pay invoice (built-in)';
$lang['not_invoice_payment_recored'] = 'New invoice payment - %s';
$lang['email_template_contact_warning'] = 'If contact is not logged while making action the contact merge fields wont be replaced.';
$lang['theme_style'] = 'Theme Style';
$lang['change_role_permission_warning'] = 'Changing role permissions wont affected current staff members permissions that are using this role.';
$lang['task_copied_successfuly'] = 'Task copied successfully';
$lang['failed_to_copy_task'] = 'Failed to copy task';
$lang['not_project_file_uploaded'] = 'New project file added';
$lang['settings_calendar_color'] = '%s Color';
$lang['settings_calendar_colors_heading'] = 'Styling';
$lang['reminder'] = 'Reminder';
$lang['back_to_tasks_list'] = 'Back to tasks list';
$lang['copy_task_confirm'] = 'Confirm';
$lang['changing_items_affect_warning'] = 'Changing item info wont affect on the created invoices/estimates.';
$lang['tax_is_used_in_expenses_warning'] = 'You cant update this tax because expenses transactions using this tax are found.';
$lang['note'] = 'Note';
$lang['leads_staff_report_converted'] = 'Total converted leads';
$lang['leads_staff_report_created'] = 'Total created leads';
$lang['leads_staff_report_lost'] = 'Total lost leads';
$lang['client_go_to_dashboard'] = 'Back to portal';
$lang['show_estimate_reminders_on_calendar'] = 'Estimate Reminders';
$lang['show_invoice_reminders_on_calendar'] = 'Invoice Reminders';
$lang['calendar_estimate_reminder'] = 'Estimate Reminder';
$lang['calendar_invoice_reminder'] = 'Invoice Reminder';
$lang['show_proposal_reminders_on_calendar'] = 'Proposal Reminders';
$lang['calendar_proposal_reminder'] = 'Proposal Reminder';
$lang['proposal_due_after']= 'Proposal Due After (days)';
$lang['project_progress']= 'Progress';
$lang['calculate_progress_through_tasks']= 'Calculate progress through tasks';
$lang['allow_customer_to_change_ticket_status']= 'Allow customer to change ticket status from customers area';
$lang['switch_to_general_report']= 'Switch to staff report';
$lang['switch_to_staff_report']= 'Switch to general report';
$lang['generate']= 'Generate';
$lang['from_date']= 'From date';
$lang['to_date']= 'To date';
$lang['not_results_found']= 'No results found';
$lang['lead_lock_after_convert_to_customer']= 'Dont allow editing the lead after converting to customer (admins not applied)';
$lang['default_pipeline_sort'] = 'Default pipeline sort';
$lang['not_goal_message_failed'] = 'We failed to achieve goal!<br /> Goal Type: %s
<br />Goal Achievement: %s
<br />Total Achivement: %s
<br />Start Date: %s
<br />End Date: %s';
$lang['toggle_full_view'] = 'Toggle full view';
$lang['not_estimate_invoice_deleted'] = 'deleted the created invoice';
$lang['not_task_new_comment'] = 'commented on task %s';

# Version 1.1.8
$lang['invoice_number_exists'] = 'This invoice number exists for the ongoing year.';
$lang['estimate_number_exists'] = 'This estimate number exists for the ongoing year.';
$lang['email_exists'] = 'Email already exists';
$lang['not_uploaded_project_file'] = 'New file uploaded';
$lang['not_created_new_project_discussion'] = 'New project discussion created';
$lang['not_commented_on_project_discussion'] = 'New comment on project discussion';
$lang['all_staff_members'] = 'All staff members';
$lang['help_project_permissions'] = 'VIEW allows staff member to see ALL projects. If you only want them to see projects they are assigned (added as members), do not give VIEW permissions.';
$lang['help_tasks_permissions'] = 'VIEW allows staff member to see ALL tasks. If you only want them to see tasks they are assigned to or following, do not give VIEW permissions.';
$lang['expense_recuring_days'] = 'Day(s)';
$lang['expense_recuring_weeks'] = 'Week(s)';
$lang['expense_recuring_months'] = 'Month(s)';
$lang['expense_recuring_years'] = 'Years(s)';
$lang['reset_to_default_color'] = 'Reset to default color';
$lang['pdf_logo_width'] = 'Logo Width (PX)';
$lang['drop_files_here_to_upload'] = 'Drop files here to upload';
$lang['browser_not_support_drag_and_drop'] = 'Your browser does not support drag\'n\'drop file uploads';
$lang['remove_file'] = 'Remove file';
$lang['you_can_not_upload_any_more_files'] = 'You can not upload any more files';
$lang['custom_field_only_admin'] = 'Restrict visibility for administrators only';
$lang['leads_default_source'] = 'Default source';
$lang['clear_activity_log'] = 'Clear log';
$lang['default_contact_permissions'] = 'Default contact permissions';
$lang['invoice_activity_marked_as_cancelled'] = 'marked invoice as cancelled';
$lang['invoice_activity_unmarked_as_cancelled'] = 'unmarked invoice as cancelled';
$lang['wait_text'] = 'Please wait...';
$lang['projects_summary'] = 'Projects summary';
$lang['dept_imap_host'] = 'IMAP Host';
$lang['dept_encryption'] = 'Encryption';
$lang['dept_email_password'] = 'Password';
$lang['dept_email_no_encryption'] = 'No Encryption';
$lang['failed_to_decrypt_password'] = 'Failed to decrypt password';
$lang['delete_mail_after_import'] = 'Delete mail after import?';
$lang['expiry_reminder_enabled'] = 'Send expiration reminder';
$lang['send_expiry_reminder_before'] = 'Send expiration reminder before (DAYS)';
$lang['not_expiry_reminder_sent'] = 'Expiry reminder sent';
$lang['send_expiry_reminder'] = 'Sent expiration reminder';
$lang['sent_expiry_reminder_success'] = 'Expiration reminder successfully sent';
$lang['sent_expiry_reminder_fail'] = 'Failed to send expiration reminder';
$lang['leads_default_status'] = 'Default status';
$lang['item_description_placeholder'] = 'Description';
$lang['item_long_description_placeholder'] = 'Long description';
$lang['item_quantity_placeholder'] = 'Quantity';
$lang['item_rate_placeholder'] = 'Rate';
$lang['tickets_summary'] = 'Tickets Summary';
$lang['tasks_list_priority'] = 'Priority';
$lang['ticket_status_db_2'] = 'In Progress';
$lang['ticket_status_db_1'] = 'Open';
$lang['ticket_status_db_3'] = 'Answered';
$lang['ticket_status_db_4'] = 'On Hold';
$lang['ticket_status_db_5'] = 'Closed';
$lang['ticket_priority_db_1'] = 'Low';
$lang['ticket_priority_db_2'] = 'Medium';
$lang['ticket_priority_db_3'] = 'High';
$lang['customer_have_projects_by'] = 'Contains projects by status %s';
$lang['customer_have_proposals_by'] = 'Contains proposals by status %s';
$lang['do_not_redirect_payment'] = 'Do not redirect me to the payment processor';
$lang['project_tickets'] = 'Tickets';
$lang['invoice_report'] = 'Invoice Report';
$lang['payment_modes_report'] = 'Payment Modes (Transactions)';
$lang['customer_admins'] = 'Customer Admins';
$lang['assign_admin'] = 'Assign admin';
$lang['customer_admin_date_assigned'] = 'Date Assigned';
$lang['customer_admin_login_as_client_message'] = 'Hello %s. You are added as admin to this customer.';
$lang['ticket_form_validation_file_size'] = 'File size must be less than %s';
$lang['has_transactions_currency_base_change'] = 'Changing the base currency is possible only if there are no transactions recorded in that currency. Delete the transactions to change the base currency';
$lang['customers_sort_all'] = 'All';

# Version 1.1.9
$lang['use_recaptcha_customers_area'] = 'Allow recaptcha on customers area (Login/Register)';
$lang['project_marked_as_finished'] = 'Project completed';
$lang['project_status_updated'] = 'Project status updated';
$lang['remove_decimals_on_zero'] = 'Remove decimals on numbers/money with zero decimals (2.00 will become 2, 2.25 will stay 2.25)';
$lang['remove_tax_name_from_item_table'] = 'Remove the tax name from item table row (Invoices/Estimates)';

# Version 1.2.0
$lang['not_billable_expenses_by_categories'] = 'Not billable expenses by categories';
$lang['billable_expenses_by_categories'] = 'Billable expenses by categories';
$lang['format_letter_size'] = 'A4 Landscape';
$lang['pdf_formats'] = 'Document formats';
$lang['swap_pdf_info'] = 'Swap Company/Customer Details (company details to right side, customer details to left side)';
$lang['invoice_estimate_pdf_text_color'] = 'Invoice/Estimate text color';
$lang['expenses_filter_by_categories'] = 'By Categories';
$lang['task_copy'] = 'Copy';
$lang['estimate_status'] = 'Status';
$lang['expenses_report_exclude_billable'] = 'Exclude Billable Expenses';
$lang['expenses_total'] = 'Total';
$lang['estimate_activity_added_attachment'] = 'Added attachment';
$lang['show_to_customer'] = 'Show to customer';
$lang['hide_from_customer'] = 'Hide from customer';
$lang['expenses_report_total'] = 'Total';
$lang['expenses_report'] = 'Expenses report';
$lang['expenses_report_tax'] = 'Tax';
$lang['expenses_report_total_tax'] = 'Total Tax';
$lang['expenses_detailed_report'] = 'Detailed Report';
$lang['expense_not_billable'] = 'Not Billable';
$lang['notification_settings'] = 'Notification settings';
$lang['staff_with_roles'] = 'Staff members with roles';
$lang['specific_staff_members'] = 'Specific Staff Members';
$lang['proposal_mark_as'] = 'Mark as %s';
$lang['kb_report_total_answers'] = 'Total';
$lang['ticket_message_edit'] = 'Edit';
$lang['invoice_files'] = 'Invoice Files';
$lang['estimate_files'] = 'Estimate Files';
$lang['proposal_files'] = 'Proposal Files';
$lang['invoices_awaiting_payment'] = 'Invoices Awaiting Payment';
$lang['tasks_not_finished'] = 'Tasks Not Finished';
$lang['outstanding_invoices'] = 'Outstanding Invoices';
$lang['past_due_invoices'] = 'Past Due Invoices';
$lang['paid_invoices'] = 'Paid Invoices';
$lang['invoice_estimate_year'] = 'Year';
$lang['no_results_text_search_dropdown'] = 'No Results Matched';
$lang['task_stats_logged_hours'] = 'Logged Hours';
$lang['leads_converted_to_client'] = 'Converted Leads';
$lang['current_version'] = 'Current Version: %s';
$lang['task_assigned_from'] = 'This task is assigned to you by %s';
$lang['auto_check_for_new_notifications'] = 'Auto check for new notifications (Seconds - Set 0 to disable)';
$lang['recurring_ends_on'] = 'Ends On (Leave blank for never)';
$lang['new_note'] = 'New Note';
$lang['my_tickets_assigned'] = 'Tickets assigned to me';
$lang['filter_by_assigned'] = 'By Assigned Member';
$lang['staff_stats_total_logged_time'] = 'Total Logged Time';
$lang['staff_stats_last_month_total_logged_time'] = 'Last Month Logged Time';
$lang['staff_stats_this_month_total_logged_time'] = 'This Month Logged Time';
$lang['staff_stats_last_week_total_logged_time'] = 'Last Week Logged Time';
$lang['staff_stats_this_week_total_logged_time'] = 'This Week Logged Time';
// Dont change this becuse are translated before for the projects timesheets and now are only used for readibility.
$lang['timesheet_user'] = $lang['project_timesheet_user'];
$lang['timesheet_start_time'] = $lang['project_timesheet_start_time'];
$lang['timesheet_end_time'] = $lang['project_timesheet_end_time'];
$lang['timesheet_time_spend'] = $lang['project_timesheet_time_spend'];
$lang['task_timesheets'] = $lang['project_timesheets'];
$lang['task_log_time_start'] = $lang['project_timesheet_start_time'];
$lang['task_log_time_end'] = $lang['project_timesheet_end_time'];
$lang['task_single_log_user'] = $lang['project_timesheet_user'];

# Version 1.2.2
$lang['milestone_description'] = 'Description';
$lang['description_visible_to_customer'] = 'Show description to customer';
$lang['upcoming_tasks'] = 'Upcoming Tasks';
$lang['paymentmethod_two_checkout_account_number'] = 'Account Number (Seller ID)';
$lang['paymentmethod_two_checkout_private_key'] = 'Private Key';
$lang['paymentmethod_two_checkout_publishable_key'] = 'Publishable Key';
$lang['payment_credit_card_number'] = 'Card Number';
$lang['payment_credit_card_expiration_date'] = 'Expiration Date';
$lang['payment_billing_email'] = 'Email';
$lang['payment_billing_name'] = 'Billing Name';
$lang['submit_payment'] = 'Submit Payment';
$lang['2checkout_notice_payment'] = 'Credit card details are processed via secure token provided from 2Checkout';
$lang['2checkout_usage_notice'] = 'SSL is required if you\'re using the 2Checkout payment API. It is required to safely call the tokenization and authorizations. The system will function without SSL, however, this will place you out of compliance, which risks deactivation of your API permissions.';
$lang['custom_field_disallow_customer_to_edit'] = 'Disalow customer to edit this field';
$lang['project_due_notice'] = 'This project is overdue by %s days';
$lang['not_lead_added_attachment'] = 'added new attachment to lead %s';
$lang['lead_note_date_added'] = 'Note added: %s';
$lang['recurring_custom'] = 'Custom';
// Dont translate these, only added for better readibility already translated for the expenses custom recurring feature.
$lang['invoice_recuring_months'] = $lang['expense_recuring_months'];
$lang['invoice_recuring_years'] = $lang['expense_recuring_years'];
$lang['invoice_recuring_days'] = $lang['expense_recuring_days'];
$lang['invoice_recuring_weeks'] = $lang['expense_recuring_weeks'];

# Version 1.2.4
$lang['document_direction'] = 'Direction';
$lang['notify_project_members_status_change'] = 'Notify project members that project status is changed';
$lang['not_project_status_updated'] = 'Project status updated from %s to %s';
$lang['ticket_not_found'] = 'Ticket not found';
$lang['project_not_found'] = 'Project not found';
$lang['export_project_data'] = 'Export project data';
$lang['total_project_members'] = 'Total Project Members';
$lang['total_project_files'] = 'Files attached';
$lang['total_project_discussions_created'] = 'Discussions created';
$lang['project_member'] = 'Member';
$lang['total_project_discussions_comments'] = 'Total discussion comments';
$lang['staff_total_task_assigned'] = 'Total tasks assigned';
$lang['staff_total_comments_on_tasks'] = 'Comments on tasks';
$lang['project_members_overview'] = 'Project members overview';
$lang['project_milestones_overview'] = 'Milestones overview';
$lang['total_tasks_in_milestones'] = 'Total tasks assigned';
$lang['total_task_members_assigned'] = 'Total members assigned';
$lang['total_task_members_followers'] = 'Total followers';
$lang['total_milestones'] = 'Total milestones';
$lang['total_project_worked_days'] = 'Total days worked';
$lang['finance_overview'] = 'Finance Overview';
$lang['project_custom_fields'] = 'Custom fields';
$lang['total_tickets_related_to_project'] = 'Total tickets linked to project';
$lang['projects_total_invoices_created'] = 'Total invoices created';
$lang['total_invoiced_amount'] = 'Total invoices created';
$lang['do_not_send_invoice_payment_email_template_contact'] = 'Dont send invoice payment recorded email to customer contacts';
$lang['no_preview_available_for_file'] = 'No preview available for this file.';
$lang['project_activity_deleted_file_discussion_comment'] = 'File discussion comment deleted';
$lang['file_not_found'] = 'File not found';
$lang['email_template_discussion_info'] = 'This template is used for both project discussion comments emails. (files discussions and regular discussions)';
$lang['format_a4_portrait_size'] = 'Portrait';
$lang['only_show_contact_tickets'] = 'In customer profile only show tickets related to the logged in contact (Primary contact not applied)';
$lang['cancel_overdue_reminders_invoice'] = 'Prevent sending overdue reminders for this invoice';
$lang['customer_shipping_address_notice'] = 'Dont fill shipping address informations if you wont use shipping address on customer invoices';
$lang['timesheets_overview'] = 'Timesheets overview';
$lang['invoice_status_draft'] = 'Draft';
$lang['save_as_draft'] = 'Save as Draft';
$lang['convert_and_save_as_draft'] = 'Convert and save as draft';
$lang['convert'] = 'Convert';
$lang['exclude_invoices_draft_from_client_area'] = 'Exclude invoices with draft status from customers area';
$lang['invoice_draft_status_info'] = 'This invoice is with status Draft, status will be auto changed when you send the invoice to the customer or mark as sent.';
$lang['task_info'] = 'Task info';
$lang['recurring_tasks'] = 'Recurring';
// Dont translate these, already translated
$lang['task_repeat_every'] = $lang['expense_repeat_every'];
$lang['task_recuring_months'] = $lang['expense_recuring_months'];
$lang['task_recuring_years'] = $lang['expense_recuring_years'];
$lang['task_recuring_days'] = $lang['expense_recuring_days'];
$lang['task_recuring_weeks'] = $lang['expense_recuring_weeks'];
$lang['todays_tasks'] = 'Today\'s tasks';
$lang['payment_mode_invoices_only'] = 'Invoices Only';
$lang['payment_mode_expenses_only'] = 'Expenses Only';
$lang['task_no_checklist_items_found'] = 'Checklist items not found for this task';
$lang['task_no_description'] = 'No description for this task';
$lang['expenses_reminders'] = 'Reminders';
$lang['expense_set_reminder_title'] = 'Set expense reminder';
$lang['calendar_expense_reminder'] = 'Expense Reminder';
$lang['recurring_task'] = 'Recurring Task';
$lang['disable_email_from_being_sent'] = 'Disable this email from being sent';
$lang['not_sent_indicator'] =  'Not Sent';
$lang['proposal_status_revised'] =  'Revised';
$lang['customer_currency_change_notice'] =  'If the customer use other currency then the base currency make sure you select the approprite currency for this customer. Changing the currency is not possible after transactions are recorded.';
$lang['click_to_add_content'] =  'Click here to add content';
$lang['related_to_project'] =  'This %s is related to %s: %s';
$lang['back_to_lead'] =  'Back to lead';
$lang['add_task_timer_started_warning'] =  'Stop current started timer for this task to be able to add new timer manualy.';
$lang['sending_email_contact_permissions_warning'] =  'Failed to auto select customer contacts. Please make sure that the customer have associated contacts with permission %s';
