<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');


/*
 * Your installation or use of this SugarCRM file is subject to the applicable
 * terms available at
 * http://support.sugarcrm.com/06_Customer_Center/10_Master_Subscription_Agreements/.
 * If you do not agree to all of the applicable terms or do not have the
 * authority to bind the entity as an authorized representative, then do not
 * install or use this SugarCRM file.
 *
 * Copyright (C) SugarCRM Inc. All rights reserved.
 */


$mod_strings = array (
  'ERR_DELETE_RECORD' => 'U dient een record te selecteren om de organisatie te verwijderen.',
  'LBL_ACCOUNTS_SUBPANEL_TITLE' => 'Organisaties',
  'LBL_ACCOUNT_ID' => 'Organisatie ID',
  'LBL_ACCOUNT_NAME' => 'Organisatienaam:',
  'LBL_ACCOUNT_NAME_MOD' => 'Accountnaam',
  'LBL_ACCOUNT_NAME_OWNER' => 'Accountnaam eigenaar',
  'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Activiteiten',
  'LBL_ASSIGNED_TO_NAME' => 'Toegewezen aan',
  'LBL_ASSIGNED_USER_NAME_MOD' => 'Toegewezen aan',
  'LBL_ASSIGNED_USER_NAME_OWNER' => 'Toegewezen aan',
  'LBL_ATTACH_NOTE' => 'Notitie toevoegen',
  'LBL_BUGS_SUBPANEL_TITLE' => 'Bugs',
  'LBL_CASE' => 'Case:',
  'LBL_CASE_FROM_TWITTER_TITLE' => 'Tweet',
  'LBL_CASE_INFORMATION' => 'Case overzicht',
  'LBL_CASE_NUMBER' => 'Casenummer:',
  'LBL_CASE_SUBJECT' => 'Onderwerp:',
  'LBL_CONTACTS_SUBPANEL_TITLE' => 'Personen',
  'LBL_CONTACT_CASE_TITLE' => 'Persoon-Case:',
  'LBL_CONTACT_HISTORY_SUBPANEL_TITLE' => 'Gerelateerde e-mails van contactpersonen',
  'LBL_CONTACT_NAME' => 'Contactpersoon:',
  'LBL_CONTACT_ROLE' => 'Rol:',
  'LBL_CREATED_BY_NAME_MOD' => 'Gemaakt door naam',
  'LBL_CREATED_BY_NAME_OWNER' => 'Gemaakt door naam eigenaar',
  'LBL_CREATED_USER' => 'Aangemaakt door',
  'LBL_CREATE_KB_DOCUMENT' => 'Maak Artikel aan',
  'LBL_DEFAULT_SUBPANEL_TITLE' => 'Cases',
  'LBL_DESCRIPTION' => 'Beschrijving:',
  'LBL_DOCUMENTS_SUBPANEL_TITLE' => 'Documenten',
  'LBL_EXPORT_ASSIGNED_USER_ID' => 'Toegewezen aan ID',
  'LBL_EXPORT_ASSIGNED_USER_NAME' => 'Toegewezen aan',
  'LBL_EXPORT_CREATED_BY' => 'Aangemaakt door ID:',
  'LBL_EXPORT_CREATED_BY_NAME' => 'Aangemaakt door',
  'LBL_EXPORT_MODIFIED_USER_ID' => 'Gewijzigd door ID',
  'LBL_EXPORT_TEAM_COUNT' => 'Team aantal',
  'LBL_FILENANE_ATTACHMENT' => 'Bijlage',
  'LBL_HELP_CREATE' => 'The {{plural_module_name}} module is used to track and manage product or service related problems reported to your organization by customers.

To create a {{module_name}}:
1. Provide values for the fields as desired.
 - Fields marked "Required" must be completed prior to saving.
 - Click "Show More" to expose additional fields if necessary.
2. Click "Save" to finalize the new record and return to the previous page.
 - Choose "Save and view" to open the new {{module_name}} in record view.
 - Choose "Save and create new" to immediately create another new {{module_name}}.',
  'LBL_HELP_RECORD' => 'The {{plural_module_name}} module is used to track and manage product or service related problems reported to your organization by customers.

- Edit this record&#39;s fields by clicking an individual field or the Edit button.
- View or modify links to other records in the subpanels by toggling the bottom left pane to "Data View".
- Make and view user comments and record change history in the {{activitystream_singular_module}} by toggling the bottom left pane to "Activity Stream".
- Follow or favorite this record using the icons to the right of the record name.
- Additional actions are available in the dropdown Actions menu to the right of the Edit button.',
  'LBL_HELP_RECORDS' => 'The {{plural_module_name}} module is used to track and manage product or service related problems reported to your organization by customers. {{plural_module_name}} are typically related to an {{accounts_singular_module}} record, and multiple {{plural_module_name}} may be associated to a single {{accounts_singular_module}}. There are various ways you can create {{plural_module_name}} in Sugar such as via the {{plural_module_name}} module, importing {{plural_module_name}}, or converted from email. Once the {{module_name}} is created, you can view and edit information pertaining to the {{module_name}} via the {{module_name}}&#39;s record view. Each {{module_name}} record may then relate to other Sugar records such as {{calls_module}}, {{contacts_module}}, {{bugs_module}}, and many others.',
  'LBL_HISTORY_SUBPANEL_TITLE' => 'Historie',
  'LBL_INVITEE' => 'Personen',
  'LBL_KBDOCUMENTS_SUBPANEL_TITLE' => 'Knowledge Base',
  'LBL_LIST_ACCOUNT_NAME' => 'Organisatienaam',
  'LBL_LIST_ASSIGNED' => 'Toegewezen aan',
  'LBL_LIST_ASSIGNED_TO_NAME' => 'Toegewezen aan',
  'LBL_LIST_CLOSE' => 'Sluiten',
  'LBL_LIST_DATE_CREATED' => 'Datum aangemaakt',
  'LBL_LIST_FORM_TITLE' => 'Caselijst',
  'LBL_LIST_LAST_MODIFIED' => 'Laatste wijziging',
  'LBL_LIST_MY_CASES' => 'Mijn openstaande cases',
  'LBL_LIST_NUMBER' => 'Nr.',
  'LBL_LIST_PRIORITY' => 'Prioriteit',
  'LBL_LIST_STATUS' => 'Status',
  'LBL_LIST_SUBJECT' => 'Onderwerp',
  'LBL_MEMBER_OF' => 'Organisatie',
  'LBL_MODIFIED_BY_NAME_MOD' => 'Gewijzigd door naam',
  'LBL_MODIFIED_BY_NAME_OWNER' => 'Gewijzigd door naam eigenaar',
  'LBL_MODIFIED_USER' => 'Gewijzigd door',
  'LBL_MODIFIED_USER_NAME' => 'Gewijzigd door',
  'LBL_MODIFIED_USER_NAME_MOD' => 'Gewijzigd door',
  'LBL_MODIFIED_USER_NAME_OWNER' => 'Gewijzigd door eigenaar',
  'LBL_MODULE_NAME' => 'Cases',
  'LBL_MODULE_NAME_SINGULAR' => 'Case',
  'LBL_MODULE_TITLE' => 'Cases: Home',
  'LBL_NEW_FORM_TITLE' => 'Nieuwe case',
  'LBL_NOTES_SUBPANEL_TITLE' => 'Notities',
  'LBL_NUMBER' => 'Nummer:',
  'LBL_PORTAL_TOUR_RECORDS_CREATE' => 'Wanneer u een nieuwe case heeft die u wilt melden, klik hier om een nieuwe case aan te maken.',
  'LBL_PORTAL_TOUR_RECORDS_FILTER' => 'U kunt de lijst met cases filteren door een zoekterm op te geven.',
  'LBL_PORTAL_TOUR_RECORDS_FILTER_EXAMPLE' => 'Bijvoorbeeld, u kunt dit gebruiken om een eerder gemeld probleem terug te vinden.',
  'LBL_PORTAL_TOUR_RECORDS_INTRO' => 'In de cases module kunt u cases beheren die van invloed zijn op uw organisatie. Gebruik de pijltjes om te navigeren door rondleiding.',
  'LBL_PORTAL_TOUR_RECORDS_PAGE' => 'Deze pagina toont de lijst met bestaande cases die bij uw organisatie horen.',
  'LBL_PORTAL_TOUR_RECORDS_RETURN' => 'Door hier te klikken, keert u terug naar deze weergave.',
  'LBL_PORTAL_VIEWABLE' => 'Zichtbaar in portal',
  'LBL_PRIORITY' => 'Prioriteit:',
  'LBL_PROJECTS_SUBPANEL_TITLE' => 'Projecten',
  'LBL_PROJECT_SUBPANEL_TITLE' => 'Projecten',
  'LBL_RESOLUTION' => 'Oplossing:',
  'LBL_SEARCH_FORM_TITLE' => 'Cases zoeken',
  'LBL_SHOW_IN_PORTAL' => 'Toon in portal',
  'LBL_SHOW_MORE' => 'Toon meer cases',
  'LBL_SOURCE' => 'Bron:',
  'LBL_STATUS' => 'Status:',
  'LBL_SUBJECT' => 'Onderwerp:',
  'LBL_SYSTEM_ID' => 'Systeem ID',
  'LBL_TEAM_COUNT_MOD' => 'Team aantal',
  'LBL_TEAM_COUNT_OWNER' => 'Team aantal eigenaar',
  'LBL_TEAM_NAME_MOD' => 'Teamnaam',
  'LBL_TEAM_NAME_OWNER' => 'Teamnaam eigenaar',
  'LBL_TYPE' => 'Type',
  'LBL_WORK_LOG' => 'Werk log',
  'LNK_CASE_LIST' => 'Cases',
  'LNK_CASE_REPORTS' => 'Case rapporten',
  'LNK_CREATE' => 'Nieuwe case',
  'LNK_CREATE_WHEN_EMPTY' => 'Maak nu een nieuwe case.',
  'LNK_IMPORT_CASES' => 'Importeer cases',
  'LNK_NEW_CASE' => 'Nieuwe case',
  'NTC_REMOVE_FROM_BUG_CONFIRMATION' => 'Weet u zeker dat u deze case van deze bug wilt verwijderen?',
  'NTC_REMOVE_INVITEE' => 'Weet u zeker dat u deze contactpersoon van deze case wilt verwijderen?',
);
