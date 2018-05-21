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
  'ERR_DELETE_RECORD' => 'Duhet përcaktuar numrin e regjistrimit për të fshirë llogarinë',
  'LBL_ACCOUNTS_SUBPANEL_TITLE' => 'llogaritë',
  'LBL_ACCOUNT_ID' => 'ID e Llogarisë',
  'LBL_ACCOUNT_NAME' => 'Emri i llogarisë:',
  'LBL_ACCOUNT_NAME_MOD' => 'Modi i emrit të llogarisë',
  'LBL_ACCOUNT_NAME_OWNER' => 'Pronari i emrit të llogarisë',
  'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Aktivitetet',
  'LBL_ASSIGNED_TO_NAME' => 'Drejtuar:',
  'LBL_ASSIGNED_USER_NAME_MOD' => 'Modi i emrit të përdoruesit të caktuar',
  'LBL_ASSIGNED_USER_NAME_OWNER' => 'përdorues i caktuar i pronarit të emrit',
  'LBL_ATTACH_NOTE' => 'shënimi i bashkëngjitjes',
  'LBL_BUGS_SUBPANEL_TITLE' => 'gabimet',
  'LBL_CASE' => 'rasti',
  'LBL_CASE_FROM_TWITTER_TITLE' => 'Tweet',
  'LBL_CASE_INFORMATION' => 'Pasqyra',
  'LBL_CASE_NUMBER' => 'numri i rastit',
  'LBL_CASE_SUBJECT' => 'subjekti i rastit',
  'LBL_CONTACTS_SUBPANEL_TITLE' => 'Kontaktet',
  'LBL_CONTACT_CASE_TITLE' => 'kontakt-rasti',
  'LBL_CONTACT_HISTORY_SUBPANEL_TITLE' => 'Emailet e kontakteve të lidhur',
  'LBL_CONTACT_NAME' => 'Emri i kontaktit',
  'LBL_CONTACT_ROLE' => 'roli',
  'LBL_CREATED_BY_NAME_MOD' => 'Krijuar nga modifikim i emrit',
  'LBL_CREATED_BY_NAME_OWNER' => 'Krijuar nga emri i pronarit',
  'LBL_CREATED_USER' => 'Përdorues i krijuar',
  'LBL_CREATE_KB_DOCUMENT' => 'krijo artikull',
  'LBL_DEFAULT_SUBPANEL_TITLE' => 'rastet',
  'LBL_DESCRIPTION' => 'Përshkrim',
  'LBL_DOCUMENTS_SUBPANEL_TITLE' => 'Dokumentacionet',
  'LBL_EXPORT_ASSIGNED_USER_ID' => 'ID e përdoruesit të caktuar',
  'LBL_EXPORT_ASSIGNED_USER_NAME' => 'Emri i përdoruesit të caktuar',
  'LBL_EXPORT_CREATED_BY' => 'Krijuar Nga ID',
  'LBL_EXPORT_CREATED_BY_NAME' => 'Krijuar Nga emri i përdoruesit',
  'LBL_EXPORT_MODIFIED_USER_ID' => 'Modifikuar nga ID',
  'LBL_EXPORT_TEAM_COUNT' => 'Numërim i grupit',
  'LBL_FILENANE_ATTACHMENT' => 'dokument i bashkëngjitur',
  'LBL_HELP_CREATE' => 'Moduli {{plural_module_name}} ju lejon juve të gjurmoni shitjet individuale dhe rrjeshtat të cilat u përkasin këtyre shitjeve nga fillimi deri në fund. Çdo regjistrim moduli {{module_name}} prezanton një titull për një grup të {{revenuelineitems_module}} si dhe lidhjen e tij me regjistrime tjera të rëndësishme si {{quotes_module}}, {{contacts_module}} etj. Për të krijuar {{module_name}}: 1. Jepni vlera për fushat sa dëshironi. -Fushat e shënuara me "Patjetër" duhet të kompletohen para se të ruhen. -Klikoni "Trego më shumë" për të paraqitur fushat shtesë nëse është e nevojshme. 2. Klikoni "Ruaj" për të finalizuar një regjistrim të ri dhe të ktheheni në faqen paraprake. -Zgjedhni "Ruaj dhe shiko" për të hapur {{module_name}} të ri në pamjen e regjistrimeve. -Zgjedhni "Ruaj dhe krijo të ri" që menjëherë të krijoni {{module_name}} të ri. 3. Mbasi ta ruani, përdorni subpanelin {{revenuelineitems_module}} për të shtuar rresht në linjat e {{module_name}}.',
  'LBL_HELP_RECORD' => 'Moduli {{plural_module_name}} konsiston në kompanitë që organizata juaj ka lidhje dhe që përgjithsisht është parë si qendër për menaxhim dhe analizim të interaksioneve të biznesit tuaj me çdo klient. -Editoni këtë fushë regjistrimi duke klikuar në fushën individuale ose butonin Edit. -Shikoni ose modifikoni linkqet e regjistrimeve tjera në subpanelet duke shtypur butonin në anën e majtë të "Shikoni të dhënat". -Bëj dhe shiko komentet e përdoruesve dhe regjistro ndryshimin e historisë në  {{activitystream_singular_module}} duke shtypur butonin e majtë "Aktivitet". -Ndiq ose bëj favorit këtë regjistrim duke përdorur ikonat në të djathtë  të emrit të regjistrimit. -Veprime shtesë janë në dispozicion në fundin e menus së veprimeve në të djathë të butonit Edit.',
  'LBL_HELP_RECORDS' => '{{plural_module_name}} është moduli i cili gjurmon dhe menaxhon produktin apo shërbimin të lidhur me problemet e raportuara të organizatës tuaj nga klientët. {{plural_module_name}} janë tipikisht të lidhur me regjstrimin e {{plural_module_name}} dhe shumësi i {{plural_module_name}} mund të asocohen me njëjësin e {{accounts_singular_module}}. Ka disa mënyra për të krijuar  {{plural_module_name}} në Sugar siç është nëpërmjet modulit {{plural_module_name}}, importimi i  {{plural_module_name}} ose konvertimi nga emaili. Një herë që {{module_name}} është krijuar, ju mund ta shikoni dhe editoni informacionin lidhur me {{module_name}} nëpërmjet shikimit të {{module_name}}. Çdo regjistrim {{module_name}} mund të lidhet me regjistrimet e Sugar si {{calls_module}}, {{contacts_module}}, {{bugs_module}} dhe shumë të tjera.',
  'LBL_HISTORY_SUBPANEL_TITLE' => 'Historia',
  'LBL_INVITEE' => 'Kontaktet',
  'LBL_KBDOCUMENTS_SUBPANEL_TITLE' => 'Baza e njohurisë',
  'LBL_LIST_ACCOUNT_NAME' => 'Emri i llogarisë:',
  'LBL_LIST_ASSIGNED' => 'Drejtuar deri te',
  'LBL_LIST_ASSIGNED_TO_NAME' => 'Përdorues i caktuar',
  'LBL_LIST_CLOSE' => 'Mbyll:',
  'LBL_LIST_DATE_CREATED' => 'Të dhëna të krijuara',
  'LBL_LIST_FORM_TITLE' => 'Lista e rasteve',
  'LBL_LIST_LAST_MODIFIED' => 'Ndryshimi i fundit',
  'LBL_LIST_MY_CASES' => 'rastet e mia të hapura',
  'LBL_LIST_NUMBER' => 'numri',
  'LBL_LIST_PRIORITY' => 'prioriteti',
  'LBL_LIST_STATUS' => 'Statusi',
  'LBL_LIST_SUBJECT' => 'subjekti',
  'LBL_MEMBER_OF' => 'Llogari',
  'LBL_MODIFIED_BY_NAME_MOD' => 'Modifikuar nga modifikim i emrit',
  'LBL_MODIFIED_BY_NAME_OWNER' => 'Modifikuar nga pronari i emrit',
  'LBL_MODIFIED_USER' => 'përdorues i modifikuar',
  'LBL_MODIFIED_USER_NAME' => 'Emri i modifikuari përdoruesit',
  'LBL_MODIFIED_USER_NAME_MOD' => 'modi i emrit të modifikuar të përdoruesit',
  'LBL_MODIFIED_USER_NAME_OWNER' => 'Pronari i emritt ë modifikuar të përdoruesit',
  'LBL_MODULE_NAME' => 'rastet',
  'LBL_MODULE_NAME_SINGULAR' => 'Rast',
  'LBL_MODULE_TITLE' => 'Rastet: Ballina',
  'LBL_NEW_FORM_TITLE' => 'rast i ri',
  'LBL_NOTES_SUBPANEL_TITLE' => 'Shënime',
  'LBL_NUMBER' => 'numri',
  'LBL_PORTAL_TOUR_RECORDS_CREATE' => 'Nëse ju keni një rast të ri të mbështetjes që ju do të donit ta paraqesni, ju mund të klikoni këtu për të paraqtur një rast të ri.',
  'LBL_PORTAL_TOUR_RECORDS_FILTER' => 'Ju mund të filtroni poshtë listën e rasteve duke dhënë një term kërkues.',
  'LBL_PORTAL_TOUR_RECORDS_FILTER_EXAMPLE' => 'Për shembull, ju mund të përdorni këtë për të gjetur një çështje e cila ka qenë paraprakisht e paraqitur.',
  'LBL_PORTAL_TOUR_RECORDS_INTRO' => 'Moduli i rasteve është për menaxhimin mbështetës të çështjeve që ndikojnë në llogarinë tuaj. Përdorni  shigjetat poshtë për të shkuar nëpërmjet një turne të shpejtë.',
  'LBL_PORTAL_TOUR_RECORDS_PAGE' => 'Kjo faqe tregon listën e ekzistimit të rasteve të lidhura me llogarinë tuaj.',
  'LBL_PORTAL_TOUR_RECORDS_RETURN' => 'Duke klikuar këtu ju do të ktheheni për ta parë në çdo kohë.',
  'LBL_PORTAL_VIEWABLE' => 'Portali i shikueshëm',
  'LBL_PRIORITY' => 'priorieti',
  'LBL_PROJECTS_SUBPANEL_TITLE' => 'Projektet',
  'LBL_PROJECT_SUBPANEL_TITLE' => 'Projektet',
  'LBL_RESOLUTION' => 'zgjidhja',
  'LBL_SEARCH_FORM_TITLE' => 'kërkimi i rastit',
  'LBL_SHOW_IN_PORTAL' => 'shfaq në portal',
  'LBL_SHOW_MORE' => 'Trego më shumë raste',
  'LBL_SOURCE' => 'Burimi',
  'LBL_STATUS' => 'Statusi',
  'LBL_SUBJECT' => 'Subjekti',
  'LBL_SYSTEM_ID' => 'ID e sistemit',
  'LBL_TEAM_COUNT_MOD' => 'Modi i numrimit të grupeve',
  'LBL_TEAM_COUNT_OWNER' => 'Pronari i numrimit të grupeve',
  'LBL_TEAM_NAME_MOD' => 'Modi i emrit të grupit',
  'LBL_TEAM_NAME_OWNER' => 'Pronari i emrit të grupit',
  'LBL_TYPE' => 'Lloji',
  'LBL_WORK_LOG' => 'identifikimi i punës',
  'LNK_CASE_LIST' => 'Shiko rastet',
  'LNK_CASE_REPORTS' => 'shiko raportet e rasteve',
  'LNK_CREATE' => 'Krijo rast',
  'LNK_CREATE_WHEN_EMPTY' => 'Krijo një rast tash.',
  'LNK_IMPORT_CASES' => 'transfero rastet',
  'LNK_NEW_CASE' => 'Krijo rast',
  'NTC_REMOVE_FROM_BUG_CONFIRMATION' => 'A jeni të sigurtë që dëshironi të largoni këtë rast nga gabimet',
  'NTC_REMOVE_INVITEE' => 'A jeni të sigurt që dëshironi të fshini këtë  kontakt nga rasti?',
);

