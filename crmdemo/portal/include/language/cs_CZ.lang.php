<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');


/*********************************************************************************
 * By installing or using this file, you are confirming on behalf of the entity
 * subscribed to the SugarCRM Inc. product ("Company") that Company is bound by
 * the SugarCRM Inc. Master Subscription Agreement (“MSA”), which is viewable at:
 * http://www.sugarcrm.com/master-subscription-agreement
 *
 * If Company is not bound by the MSA, then by installing or using this file
 * you are agreeing unconditionally that Company will be bound by the MSA and
 * certifying that you have authority to bind Company accordingly.
 *
 * Copyright (C) 2004-2013 SugarCRM Inc.  All rights reserved.
 ********************************************************************************/

	

$app_list_strings = array (
  'account_type_dom' => 
  array (
    '' => '',
    'Analyst' => 'Analytik',
    'Competitor' => 'Konkurent',
    'Customer' => 'Zákazník',
    'Integrator' => 'Integrátor',
    'Investor' => 'Investor',
    'Other' => 'Jiný',
    'Partner' => 'Partner',
    'Press' => 'Tisk',
    'Prospect' => 'Vyhlídka',
    'Reseller' => 'Prodejce',
  ),
  'activity_dom' => 
  array (
    'Call' => 'Hovor',
    'Email' => 'E-mail',
    'Meeting' => 'Schůzka',
    'Note' => 'Poznámka',
    'Task' => 'Úkol',
  ),
  'bopselect_type_dom' => 
  array (
    'Equals' => 'Se nerovná',
  ),
  'bselect_type_dom' => 
  array (
    'bool_false' => 'Ne',
    'bool_true' => 'Ano',
  ),
  'bug_priority_dom' => 
  array (
    'High' => 'Vzsoký',
    'Low' => 'Nízký',
    'Medium' => 'Střední',
    'Urgent' => 'Naléhavý',
  ),
  'bug_resolution_dom' => 
  array (
    '' => '',
    'Accepted' => 'Přijatý',
    'Duplicate' => 'Zdvojený',
    'Fixed' => 'Opravený',
    'Invalid' => 'Neplatný',
    'Later' => 'Později',
    'Out of Date' => 'Zastaralý',
  ),
  'bug_status_dom' => 
  array (
    'Assigned' => 'Přidelený',
    'Closed' => 'Uzavřený',
    'New' => 'Nový',
    'Pending' => 'Neskončený',
    'Rejected' => 'Zamítnutý',
  ),
  'bug_type_dom' => 
  array (
    'Defect' => 'Chyba',
    'Feature' => 'Vlastnost',
  ),
  'call_direction_dom' => 
  array (
    'Inbound' => 'Přichodzí',
    'Outbound' => 'Odchodzí',
  ),
  'call_status_dom' => 
  array (
    'Held' => 'Uskutočnený',
    'Not Held' => 'Neuskutočnený',
    'Planned' => 'Plánovaný',
  ),
  'campaign_status_dom' => 
  array (
    '' => '',
    'Active' => 'Aktivní',
    'Complete' => 'Kompletní',
    'In Queue' => 'V fronte',
    'Inactive' => 'Neaktivní',
    'Planning' => 'Plánovaná',
    'Sending' => 'Posílá',
  ),
  'campaign_type_dom' => 
  array (
    '' => '',
    'Email' => 'Elektronická pošta',
    'Mail' => 'Pošta',
    'Print' => 'Tlač',
    'Radio' => 'Radio',
    'Telesales' => 'telefonického prodeje',
    'Television' => 'Televisia',
    'Web' => 'Web',
  ),
  'campainglog_activity_type_dom' => 
  array (
    '' => '',
    'contact' => 'Vytvořené kontakty',
    'invalid email' => 'Vrátená zprava,Neplatný Email',
    'lead' => 'Vytvoření příležitosti',
    'link' => 'Click-thru odkaz',
    'removed' => 'Odhlásit',
    'send error' => 'Vrátená zprava,Jiné',
    'targeted' => 'Zpráva Odeslána',
    'viewed' => 'Zobrazena zpráva',
  ),
  'campainglog_target_type_dom' => 
  array (
    'Contacts' => 'Kontakty',
    'Leads' => 'Přiležitosti',
    'Prospects' => 'Prospekty',
    'Users' => 'Uživatelé',
  ),
  'case_priority_dom' => 
  array (
    'P1' => 'Vysoká',
    'P2' => 'Středná',
    'P3' => 'Nízká',
  ),
  'case_relationship_type_dom' => 
  array (
    '' => '',
    'Alternate Contact' => 'Vedlejší kontakt',
    'Primary Contact' => 'Hlavní kontakt',
  ),
  'case_status_dom' => 
  array (
    'Assigned' => 'Přidelený',
    'Closed' => 'Uzavřený',
    'Duplicate' => 'Zdvojený',
    'New' => 'Nový',
    'Pending Input' => 'Čeká na odpověď',
    'Rejected' => 'Zamitnutý',
  ),
  'checkbox_dom' => 
  array (
    '' => '',
    1 => 'Ano',
    2 => 'Ne',
  ),
  'contract_expiration_notice_dom' => 
  array (
    1 => '1 den',
    3 => '3 dny',
    5 => '5 dní',
    7 => '1 týden',
    14 => '2 týdny',
    21 => '3 týdny',
    31 => '1 měsíc',
  ),
  'contract_payment_frequency_dom' => 
  array (
    'halfyearly' => 'Pololetně',
    'monthly' => 'Měsíčně',
    'quarterly' => 'Čtvrtletně',
    'yearly' => 'Ročně',
  ),
  'contract_status_dom' => 
  array (
    'inprogress' => 'Probíhá',
    'notstarted' => 'Nezačal',
    'signed' => 'Podepsán',
  ),
  'cselect_type_dom' => 
  array (
    'Does not Equal' => 'Se nerovná',
    'Equals' => 'Se rovná',
  ),
  'document_category_dom' => 
  array (
    '' => '',
    'Knowledege Base' => 'Vědomostní základna',
    'Marketing' => 'Marketing',
    'Sales' => 'Prodeje',
  ),
  'document_status_dom' => 
  array (
    'Active' => 'Aktivní',
    'Draft' => 'Rozepsán',
    'Expired' => 'Vypršel',
    'FAQ' => 'FAQ',
    'Pending' => 'Zahájený',
    'Under Review' => 'Přezkoumáván',
  ),
  'document_subcategory_dom' => 
  array (
    '' => '',
    'FAQ' => 'FAQ',
    'Marketing Collateral' => 'Marketingové materiály',
    'Product Brochures' => 'Brožury',
  ),
  'document_template_type_dom' => 
  array (
    '' => '',
    'eula' => 'EULA',
    'license' => 'Licenční smlouva',
    'mailmerge' => 'Hromadná korespondence',
    'nda' => 'NDA',
  ),
  'dom_cal_month_long' => 
  array (
    0 => '',
    1 => 'Leden',
    2 => 'Únor',
    3 => 'Březen',
    4 => 'Duben',
    5 => 'Květen',
    6 => 'Červen',
    7 => 'Červenec',
    8 => 'Srpen',
    9 => 'Září',
    10 => 'Říjen',
    11 => 'Listopad',
    12 => 'Prosinec',
  ),
  'dom_email_bool' => 
  array (
    'bool_false' => 'Ne',
    'bool_true' => 'Ano',
  ),
  'dom_email_distribution' => 
  array (
    '' => '--Zádné--',
    'direct' => 'Příme přidelení',
    'leastBusy' => 'Nejmíň vytížený',
    'roundRobin' => 'Střidave pridelení',
  ),
  'dom_email_editor_option' => 
  array (
    '' => 'Výchozí formát Emailu',
    'html' => 'HTML e-mail',
    'plain' => 'Čistý text Email',
  ),
  'dom_email_errors' => 
  array (
    1 => 'Vyberte pouze jednoho uživatele když přimo přidelujete objekty.',
    2 => 'Můžete přidelit pouze zaškrtnuté objekty když přimo přidelujete objekty.',
  ),
  'dom_email_link_type' => 
  array (
    '' => 'Systémovo výchozí poštovní klient',
    'mailto' => 'Venkonvní poštovní klient',
    'sugar' => 'SugarCRM poštovní klient',
  ),
  'dom_email_server_type' => 
  array (
    '' => '--Žádný--',
    'imap' => 'IMAP',
    'pop3' => 'POP3',
  ),
  'dom_email_status' => 
  array (
    'archived' => 'Archivován',
    'closed' => 'Uzavřen',
    'draft' => 'Rozepsán',
    'read' => 'Prečtene',
    'replied' => 'Odpovězeno',
    'send_error' => 'Chyba pri zasílaní',
    'sent' => 'Zaslán',
    'unread' => 'Neprečtené',
  ),
  'dom_email_types' => 
  array (
    'archived' => 'Archivován',
    'draft' => 'Rozepsán',
    'inbound' => 'Prichodzí',
    'out' => 'Zaslán',
  ),
  'dom_int_bool' => 
  array (
    0 => 'Ne',
    1 => 'Ano',
  ),
  'dom_mailbox_type' => 
  array (
    'bounce' => 'Přeposílání',
    'bug' => 'Vytvořit Chybu',
    'contact' => 'Vytvořit Kontakt',
    'pick' => 'Vytvořit [jakýkoli]',
    'sales' => 'Vytvořit Příležitost',
    'support' => 'Vytvořit Případ',
    'task' => 'Vytvořit Úkol',
  ),
  'dom_meeting_accept_options' => 
  array (
    'accept' => 'Přijmout',
    'decline' => 'Zamítnout',
    'tentative' => 'Předběžne přijmout',
  ),
  'dom_meeting_accept_status' => 
  array (
    'accept' => 'Přijmout',
    'decline' => 'Zamítnout',
    'none' => 'Bez reakce',
    'tentative' => 'Předběžne přijmout',
  ),
  'dom_report_types' => 
  array (
    'detailed_summary' => 'Shrnutí s podrobnostmi',
    'summary' => 'Shrnutí',
    'tabular' => 'Řádky a sloupce',
  ),
  'dom_switch_bool' => 
  array (
    '' => 'Ne',
    'off' => 'Ne',
    'on' => 'Ano',
  ),
  'dom_timezones' => 
  array (
    -12 => '(GMT - 12) Mezinárodní datová čára západ',
    -11 => '(GMT - 11) Midway Island, Samoa',
    -10 => '(GMT - 10) Hawaii',
    -9 => '(GMT - 9) Alaska',
    -8 => '(GMT - 8) San Francisco',
    -7 => '(GMT - 7) Phoenix',
    -6 => '(GMT - 6) Saskatchewan',
    -5 => '(GMT - 5) New York',
    -4 => '(GMT - 4) Santiago',
    -3 => '(GMT - 3) Buenos Aires',
    -2 => '(GMT - 2) Mid-Atlantic',
    -1 => '(GMT - 1) Azores',
    0 => '(GMT)',
    1 => '(GMT + 1) Madrid',
    2 => '(GMT + 2) Athens',
    3 => '(GMT + 3) Moscow',
    4 => '(GMT + 4) Kabul',
    5 => '(GMT + 5) Ekaterinburg',
    6 => '(GMT + 6) Astana',
    7 => '(GMT + 7) Bangkok',
    8 => '(GMT + 8) Perth',
    9 => '(GMT + 9) Seol',
    10 => '(GMT + 10) Brisbane',
    11 => '(GMT + 11) Solomone Is.',
    12 => '(GMT + 12) Auckland',
  ),
  'dom_timezones_extra' => 
  array (
    -12 => '(GMT-12) Mezinárodní datová čára západ',
    -11 => '(GMT-11) Midway Island, Samoa',
    -10 => '(GMT-10) Hawaii',
    -9 => '(GMT-9) Alaska',
    -8 => '(GMT-8) (PST)',
    -7 => '(GMT-7) (MST)',
    -6 => '(GMT-6) (CST)',
    -5 => '(GMT-5) (EST)',
    -4 => '(GMT-4) Santiago',
    -3 => '(GMT-3) Buenos Aires',
    -2 => '(GMT-2) Mid-Atlantic',
    -1 => '(GMT-1) Azores',
    0 => '(GMT)',
    1 => '(GMT+1) Madrid',
    2 => '(GMT+2) Athens',
    3 => '(GMT+3) Moscow',
    4 => '(GMT+4) Kabul',
    5 => '(GMT+5) Ekaterinburg',
    6 => '(GMT+6) Astana',
    7 => '(GMT+7) Bangkok',
    8 => '(GMT+8) Perth',
    9 => '(GMT+9) Seol',
    10 => '(GMT+10) Brisbane',
    11 => '(GMT+11) Solomone Is.',
    12 => '(GMT+12) Auckland',
  ),
  'dselect_type_dom' => 
  array (
    'Does not Equal' => 'Se nerovná',
    'Equals' => 'Se rovná',
    'Less Than' => 'Méně než',
    'More Than' => 'Více než',
  ),
  'dtselect_type_dom' => 
  array (
    'Less Than' => 'je méně než',
    'More Than' => 'bylo více než',
  ),
  'duration_intervals' => 
  array (
    0 => '00',
    15 => '15',
    30 => '30',
    45 => '45',
  ),
  'email_marketing_status_dom' => 
  array (
    '' => '',
    'active' => 'Aktivní',
    'inactive' => 'Neaktivní',
  ),
  'employee_status_dom' => 
  array (
    'Active' => 'Aktivní',
    'Leave of Absence' => 'Volno',
    'Terminated' => 'Ukončený',
  ),
  'forecast_schedule_status_dom' => 
  array (
    'Active' => 'Aktivní',
    'Inactive' => 'neaktivní',
  ),
  'forecast_type_dom' => 
  array (
    'Direct' => 'Přímý',
    'Rollup' => 'Kumulativní',
  ),
  'industry_dom' => 
  array (
    '' => '',
    'Apparel' => 'Oblečení',
    'Banking' => 'Bankovnictví',
    'Biotechnology' => 'Biotechnologie',
    'Chemicals' => 'Chemikálie',
    'Communications' => 'Komunikace',
    'Construction' => 'Výstavba',
    'Consulting' => 'Poradenství',
    'Education' => 'Vzdělání',
    'Electronics' => 'Elektronika',
    'Energy' => 'Energie',
    'Engineering' => 'Inženýrství',
    'Entertainment' => 'Zábava',
    'Environmental' => 'Životní prostředí',
    'Finance' => 'Finance',
    'Government' => 'Vláda',
    'Healthcare' => 'Zdravotnictví',
    'Hospitality' => 'Pohostinství',
    'Insurance' => 'Pojištění',
    'Machinery' => 'Stroje',
    'Manufacturing' => 'Produkce',
    'Media' => 'Média',
    'Not For Profit' => 'Neziskový',
    'Other' => 'Jiný',
    'Recreation' => 'Rekreace',
    'Retail' => 'Maloobchod',
    'Shipping' => 'Doručení',
    'Technology' => 'Technologie',
    'Telecommunications' => 'Telekomunikace',
    'Transportation' => 'Doprava',
    'Utilities' => 'Utility',
  ),
  'language_pack_name' => 'Angličtina (US)',
  'layouts_dom' => 
  array (
    'Invoice' => 'Faktura',
    'Standard' => 'Návrh',
    'Terms' => 'Platební podmínky',
  ),
  'lead_source_dom' => 
  array (
    '' => '',
    'Cold Call' => 'Volání naslepo',
    'Conference' => 'Konference',
    'Direct Mail' => 'Přimá pošta',
    'Email' => 'E-mail',
    'Employee' => 'Zaměstnanec',
    'Existing Customer' => 'Existujíci zákazník',
    'Other' => 'Jiný',
    'Partner' => 'Partner',
    'Public Relations' => 'Verejné vztahy',
    'Self Generated' => 'Z vlastních zdrojů',
    'Trade Show' => 'Veletrh',
    'Web Site' => 'Webová stránka',
    'Word of mouth' => 'Z doslechu',
  ),
  'lead_status_dom' => 
  array (
    '' => '',
    'Assigned' => 'Přidělená',
    'Converted' => 'Zkonvertovaná',
    'Dead' => 'Mrtvá',
    'In Process' => 'Zpracuvávána',
    'New' => 'Nová',
    'Recycled' => 'Recyklovaná',
  ),
  'lead_status_noblank_dom' => 
  array (
    'Assigned' => 'Přidelená',
    'Converted' => 'Zkonvertovaná',
    'Dead' => 'Mrtvá',
    'In Process' => 'Zpracuvávána',
    'New' => 'Nová',
    'Recycled' => 'Recyklovaná',
  ),
  'meeting_status_dom' => 
  array (
    'Held' => 'Uskutočnená',
    'Not Held' => 'Neuskutočnená',
    'Planned' => 'Plánovaná',
  ),
  'messenger_type_dom' => 
  array (
    '' => '',
    'AOL' => 'AOL',
    'MSN' => 'MSN',
    'Yahoo!' => 'Yahoo!',
  ),
  'moduleList' => 
  array (
    'Bugs' => 'Sledování chyb',
    'Cases' => 'Případy',
    'FAQ' => 'FAQ',
    'Home' => 'Domů',
    'KBDocuments' => 'Vědomostni základna',
    'Newsletters' => 'Bulletin',
    'Notes' => 'Poznámky',
    'Teams' => 'Týmy',
    'Users' => 'Uživatelé',
  ),
  'moduleListSingular' => 
  array (
    'Bugs' => 'Chyby',
    'Cases' => 'Případ',
    'Home' => 'Domů',
    'Notes' => 'Poznámka',
    'Teams' => 'Tým',
    'Users' => 'Uživatel',
  ),
  'mselect_type_dom' => 
  array (
    'Equals' => 'Se rovná',
    'in' => 'Patři do',
  ),
  'notifymail_sendtype' => 
  array (
    'SMTP' => 'SMTP',
  ),
  'opportunity_relationship_type_dom' => 
  array (
    '' => '',
    'Business Decision Maker' => 'Obchodní vedoucí',
    'Business Evaluator' => 'Obchodní odhadce',
    'Executive Sponsor' => 'Výkonný sponzor',
    'Influencer' => 'Ovlivňovatel',
    'Other' => 'Jiný',
    'Primary Decision Maker' => 'Hlavní vedoucí',
    'Technical Decision Maker' => 'Technický vedoucí',
    'Technical Evaluator' => 'Technicky odhadce',
  ),
  'opportunity_type_dom' => 
  array (
    '' => '',
    'Existing Business' => 'Existujíci obchod',
    'New Business' => 'Nový obchod',
  ),
  'order_stage_dom' => 
  array (
    'Cancelled' => 'Zrušená',
    'Confirmed' => 'Potvrzena',
    'On Hold' => 'Pozdržena',
    'Pending' => 'Neskončená',
    'Shipped' => 'Odoslaná',
  ),
  'payment_terms' => 
  array (
    '' => '',
    'Net 15' => 'Do 15 dní',
    'Net 30' => 'Do 30 dní',
  ),
  'pricing_formula_dom' => 
  array (
    'Fixed' => 'Pevná cena',
    'IsList' => 'Stejné jako seznam',
    'PercentageDiscount' => 'Sleva',
    'PercentageMarkup' => 'Marže',
    'ProfitMargin' => 'Ziskové rozpětí',
  ),
  'product_category_dom' => 
  array (
    '' => '',
    'Accounts' => 'Společnosti',
    'Activities' => 'Aktivity',
    'Bugs' => 'Sledování chyb',
    'Calendar' => 'Kalendář',
    'Calls' => 'Hovory',
    'Campaigns' => 'Kampaně',
    'Cases' => 'Případy',
    'Contacts' => 'Kontakty',
    'Currencies' => 'Měny',
    'Dashboard' => 'Informační panel',
    'Documents' => 'Dokumenty',
    'Emails' => 'Emaily',
    'Feeds' => 'Feedy',
    'Forecasts' => 'Prognózy',
    'Help' => 'Nápověda',
    'Home' => 'Domů',
    'Leads' => 'Přiležitosti',
    'Meetings' => 'Schůzky',
    'Notes' => 'Poznámky',
    'Opportunities' => 'Obchody',
    'Outlook Plugin' => 'Plugin pro Outlook',
    'Product Catalog' => 'Katalog Produktů',
    'Products' => 'Produkty',
    'Projects' => 'Projekty',
    'Quotes' => 'Nabídky',
    'RSS' => 'RSS',
    'Releases' => 'Tiskové zprávy',
    'Studio' => 'Studio',
    'Upgrade' => 'Upgrade',
    'Users' => 'Uživatelé',
  ),
  'product_status_dom' => 
  array (
    'Orders' => 'Objednán',
    'Quotes' => 'Nabídnut',
    'Ship' => 'Odoslán',
  ),
  'product_status_quote_key' => 'Citace',
  'product_template_status_dom' => 
  array (
    'Available' => 'Na sklade',
    'Unavailable' => 'Vyprodán',
  ),
  'project_task_priority_options' => 
  array (
    'High' => 'Vysoká',
    'Low' => 'Nízká',
    'Medium' => 'Střední',
  ),
  'project_task_status_options' => 
  array (
    'Completed' => 'Ukončen',
    'Deferred' => 'Odložený',
    'In Progress' => 'Probíhá',
    'Not Started' => 'Nezahájen',
    'Pending Input' => 'Čeká na zadání',
  ),
  'project_task_utilization_options' => 
  array (
    0 => 'žádný',
    25 => '25',
    50 => '50',
    75 => '75',
    100 => '100',
  ),
  'prospect_list_type_dom' => 
  array (
    'default' => 'Standardní',
    'exempt' => 'Seznam zakázaných - Podle Id',
    'exempt_address' => 'Seznam zakázaných - Podle Emailove Addresy',
    'exempt_domain' => 'Seznam zakázaných - Podle Domény',
    'seed' => 'Seed',
    'test' => 'Test',
  ),
  'query_calc_oper_dom' => 
  array (
    '*' => '(X) Násobeno',
    '+' => '(+) Plus',
    '-' => '(-) Miínus',
    '/' => '(/) Děleno',
  ),
  'quote_relationship_type_dom' => 
  array (
    '' => '',
    'Business Decision Maker' => 'Obchodní vedoucí',
    'Business Evaluator' => 'Obchodní odhadce',
    'Executive Sponsor' => 'Výkonný sponzor',
    'Influencer' => 'Ovlivňovatel',
    'Other' => 'Jiný',
    'Primary Decision Maker' => 'Hlavní vedoucí',
    'Technical Decision Maker' => 'Technický vedoucí',
    'Technical Evaluator' => 'Technicky odhadce',
  ),
  'quote_stage_dom' => 
  array (
    'Closed Accepted' => 'Ukončená prijatá',
    'Closed Dead' => 'Ukončená mrtva',
    'Closed Lost' => 'Ukončená zamítnuta',
    'Confirmed' => 'Potvrzená',
    'Delivered' => 'Dodané',
    'Draft' => 'Návrh',
    'Negotiation' => 'Jednáni',
    'On Hold' => 'Pozdržena',
  ),
  'quote_type_dom' => 
  array (
    'Orders' => 'Objednávka',
    'Quotes' => 'Nabídka',
  ),
  'record_type_display' => 
  array (
    'Accounts' => 'Špolečnost',
    'Bugs' => 'Chyba',
    'Cases' => 'Případ',
    'Contacts' => 'Kontakty',
    'Leads' => 'Přiležitosti',
    'Opportunities' => 'Obchod',
    'ProductTemplates' => 'Produkt',
    'Project' => 'Projekt',
    'ProjectTask' => 'Projetový úkol',
    'Quotes' => 'Nabídka',
    'Tasks' => 'Úkol',
  ),
  'record_type_display_notes' => 
  array (
    'Accounts' => 'Společnost',
    'Bugs' => 'Chyba',
    'Calls' => 'Hovor',
    'Cases' => 'Případ',
    'Contacts' => 'Kontakt',
    'Contracts' => 'Smlouva',
    'Emails' => 'E-mail',
    'Leads' => 'Přiležitosti',
    'Meetings' => 'Schůzka',
    'Opportunities' => 'Obchod',
    'ProductTemplates' => 'Produkt',
    'Products' => 'Produkt',
    'Project' => 'Projekt',
    'ProjectTask' => 'Projetový úkol',
    'Quotes' => 'Nabídka',
  ),
  'reminder_max_time' => '3600',
  'reminder_time_options' => 
  array (
    60 => '1 minutu před',
    300 => '5 minut před',
    600 => '10 minut před',
    900 => '15 minut před',
    1800 => '30 minut před',
    3600 => '1 minutu před',
  ),
  'sales_probability_dom' => 
  array (
    'Closed Lost' => '',
    'Closed Won' => '100',
    'Id. Decision Makers' => '40',
    'Needs Analysis' => '25',
    'Negotiation/Review' => '80',
    'Perception Analysis' => '50',
    'Proposal/Price Quote' => '65',
    'Prospecting' => '10',
    'Qualification' => '20',
    'Value Proposition' => '30',
  ),
  'sales_stage_dom' => 
  array (
    'Closed Lost' => 'Ukončený Ztracený',
    'Closed Won' => 'Ukončený Získaný',
    'Id. Decision Makers' => 'Čekáni na rozhodnutí',
    'Needs Analysis' => 'Potřebná analýza',
    'Negotiation/Review' => 'Jednání/Přezkoumání',
    'Perception Analysis' => 'Analýza přijatí',
    'Proposal/Price Quote' => 'Návrh/Cenová nabídka',
    'Prospecting' => 'Průzkum',
    'Qualification' => 'Kvalifikace',
    'Value Proposition' => 'Návrh ceny',
  ),
  'salutation_dom' => 
  array (
    '' => '',
    'Dr.' => 'Doktor',
    'Mr.' => 'Pan',
    'Mrs.' => 'Pani',
    'Ms.' => 'Slečna',
    'Prof.' => 'Profesor',
  ),
  'schedulers_times_dom' => 
  array (
    'completed' => 'Ukončen',
    'failed' => 'Zlyhal',
    'in progress' => 'Probíha',
    'no curl' => 'Nespouštěn: CURL není k dispozici',
    'not run' => 'Zameškán, Neproběh',
    'ready' => 'Připraven',
  ),
  'source_dom' => 
  array (
    '' => '',
    'Forum' => 'Forum',
    'InboundEmail' => 'E-mail',
    'Internal' => 'Vnitrný',
    'Web' => 'Web',
  ),
  'support_term_dom' => 
  array (
    '+1 year' => 'Jeden rok',
    '+2 years' => 'Dva roky',
    '+6 months' => 'Šest měsíců',
  ),
  'task_priority_dom' => 
  array (
    'High' => 'Vysoká',
    'Low' => 'Nízká',
    'Medium' => 'Střední',
  ),
  'task_status_dom' => 
  array (
    'Completed' => 'Ukončen',
    'Deferred' => 'Odložený',
    'In Progress' => 'Probíhá',
    'Not Started' => 'Nezahájen',
    'Pending Input' => 'Čeká na zadání',
  ),
  'tax_class_dom' => 
  array (
    'Non-Taxable' => 'Nezdanitelný',
    'Taxable' => 'Zdanitelný',
  ),
  'tselect_type_dom' => 
  array (
    0 => '0 hodin',
    14440 => '4 hodiny',
    28800 => '8 hodiny',
    43200 => '12 hodiny',
    86400 => '1 den',
    172800 => '2 dny',
    259200 => '3 dny',
    345600 => '4 dny',
    432000 => '5 dní',
    604800 => '1 týden',
    1209600 => '2 týdny',
    1814400 => '3 týdny',
    2592000 => '30 dní',
    5184000 => '60 dní',
    7776000 => '90 dní',
    10368000 => '120 dní',
    12960000 => '150 dní',
    15552000 => '180 dní',
  ),
  'user_status_dom' => 
  array (
    'Active' => 'Aktivní',
    'Inactive' => 'Neaktivní',
  ),
  'wflow_action_datetime_type_dom' => 
  array (
    'Existing Value' => 'Stávající hodnota',
    'Triggered Date' => 'Datum spuštění',
  ),
  'wflow_action_type_dom' => 
  array (
    'new' => 'Nový záznam',
    'update' => 'Upravit záznam',
    'update_rel' => 'Update týkající se záznam',
  ),
  'wflow_address_type_dom' => 
  array (
    'bcc' => 'Skrytá kopie(bcc):',
    'cc' => 'Kopie(cc):',
    'to' => 'Komu:',
  ),
  'wflow_address_type_invite_dom' => 
  array (
    'bcc' => 'Skrytá kopie(bcc):',
    'cc' => 'Kopie(cc):',
    'invite_only' => '(Pouze pro pozvané)',
    'to' => 'Komu:',
  ),
  'wflow_address_type_to_only_dom' => 
  array (
    'to' => 'Komu:',
  ),
  'wflow_adv_enum_type_dom' => 
  array (
    'advance' => 'Posunout rozbalovací seznam dopředu o',
    'retreat' => 'Posunout rozbalovací seznam dozadu o',
  ),
  'wflow_adv_team_type_dom' => 
  array (
    'current_team' => 'Současný tým přihlášeného uživatele',
    'team_id' => 'Současný tým spuštěného záznamu',
  ),
  'wflow_adv_user_type_dom' => 
  array (
    'assigned_user_id' => 'Uživatel přidělený k spuštěnému záznamu',
    'created_by' => 'Uživatel, který vytvořil spuštěný záznam',
    'current_user' => 'Přihlášený uživatel',
    'modified_user_id' => 'Uživatel, který naposledy upravil spuštěný záznam',
  ),
  'wflow_alert_type_dom' => 
  array (
    'Email' => 'E-mail',
    'Invite' => 'Pozvat',
  ),
  'wflow_array_type_dom' => 
  array (
    'future' => 'Nová hodnota',
    'past' => 'Stará hodnota',
  ),
  'wflow_fire_order_dom' => 
  array (
    'actions_alerts' => 'Akce pak Upozornění',
    'alerts_actions' => 'Upozornění pak Akce',
  ),
  'wflow_record_type_dom' => 
  array (
    'All' => 'Nové a existující záznamy',
    'New' => 'Jenom nové záznamy',
    'Update' => 'Jenom existující záznamy',
  ),
  'wflow_rel_type_dom' => 
  array (
    'all' => 'Všechny související',
    'filter' => 'Filtrovat související',
  ),
  'wflow_relate_type_dom' => 
  array (
    'Manager' => 'Správce uživatele',
    'Self' => 'Uživatel',
  ),
  'wflow_relfilter_type_dom' => 
  array (
    'all' => 'všechny související',
    'any' => 'veškeré související',
  ),
  'wflow_set_type_dom' => 
  array (
    'Advanced' => 'Pokročilé možnosti',
    'Basic' => 'Základní možnosti',
  ),
  'wflow_source_type_dom' => 
  array (
    'Custom Template' => 'Vlastní šablona',
    'Normal Message' => 'Normální správa',
    'System Default' => 'Systémovo vychodzí',
  ),
  'wflow_type_dom' => 
  array (
    'Normal' => 'Pokud je záznam uložen',
    'Time' => 'Po uplynutí času',
  ),
  'wflow_user_type_dom' => 
  array (
    'current_user' => 'Aktuální uživatelé',
    'rel_user' => 'Související uživatelé',
    'rel_user_custom' => 'Související vlastní uživatelé',
    'specific_role' => 'Specifická role',
    'specific_team' => 'Specifický tým',
    'specific_user' => 'Specifický uživatel',
  ),
);

$app_strings = array (
  'ERROR_FULLY_EXPIRED' => 'Licence vaší společnosti pro SugarCRM uplynula před více než 30 dní a musí být aktualizována. Pouze administrátoři se mohou přihlásit.',
  'ERROR_LICENSE_EXPIRED' => 'Licence vaší společnosti pro SugarCRM potřebuje být obnovena. Only admins may login',
  'ERROR_NO_RECORD' => 'Chyba při načítání záznamu. Tento je zrušen nebo nemáte práva pro jeho zobrazení.',
  'ERR_CREATING_FIELDS' => 'Chyba vyplnění dalších podrobnostních polí:',
  'ERR_CREATING_TABLE' => 'Chyba při vytváření tabulky:',
  'ERR_DELETE_RECORD' => 'Číslo záznamu musí být zadano k  odstranění kontaktu.',
  'ERR_EXPORT_DISABLED' => 'Exporty jsou vypnuty.',
  'ERR_EXPORT_TYPE' => 'Chyba pri exportování',
  'ERR_INVALID_AMOUNT' => 'Zadejte prosím platnou částku.',
  'ERR_INVALID_DATE' => 'Zadejte prosím platné datum.',
  'ERR_INVALID_DATE_FORMAT' => 'Formát data musí být:',
  'ERR_INVALID_DAY' => 'Zadejte prosím platný den.',
  'ERR_INVALID_EMAIL_ADDRESS' => 'není platnou e-mailovou adresou.',
  'ERR_INVALID_HOUR' => 'Zadejte prosím platnou hodinu.',
  'ERR_INVALID_MONTH' => 'Zadejte prosím platný měsíc.',
  'ERR_INVALID_REQUIRED_FIELDS' => 'Neplatné povinné pole:',
  'ERR_INVALID_TIME' => 'Zadejte prosím platný čas.',
  'ERR_INVALID_VALUE' => 'Neplatná hodnota:',
  'ERR_INVALID_YEAR' => 'Zadejte prosím platný 4 místný rok.',
  'ERR_MISSING_REQUIRED_FIELDS' => 'Chybí povinné pole:',
  'ERR_NEED_ACTIVE_SESSION' => 'Aktivní relace je nutná při exportu obsahu.',
  'ERR_NOTHING_SELECTED' => 'Proveďte zvolte něco před pokračováním.',
  'ERR_OPPORTUNITY_NAME_DUPE' => 'Obchod s názvem %s již existuje. Prosím, zadejte jiné jméno níže.',
  'ERR_OPPORTUNITY_NAME_MISSING' => 'Jméno obchodu nebylo zadáno. Zadejte prosím název Obchodu níže.',
  'ERR_PORTAL_LOGIN_FAILED' => 'Nelze vytvořit přihlášení k portálu. Prosím, kontaktujte správce.',
  'ERR_RESOURCE_MANAGEMENT_INFO' => 'Návrat <a href="index.php">Domů</a>',
  'ERR_SELF_REPORTING' => 'Uživatel nemůže být podřízeny sam sobě.',
  'ERR_SQS_NO_MATCH' => 'Žádná shoda',
  'ERR_SQS_NO_MATCH_FIELD' => 'Žádná shoda pro pole:',
  'LBL_ACCOUNT' => 'Společnost',
  'LBL_ACCOUNTS' => 'Společnosti',
  'LBL_ACCUMULATED_HISTORY_BUTTON_KEY' => 'H',
  'LBL_ACCUMULATED_HISTORY_BUTTON_LABEL' => 'Zobrazit Shrnutí',
  'LBL_ACCUMULATED_HISTORY_BUTTON_TITLE' => 'Zobrazit Shrnutí [Alt+H]',
  'LBL_ADDITIONAL_DETAILS' => 'Další podrobnosti',
  'LBL_ADDITIONAL_DETAILS_CLOSE' => 'Zavřít',
  'LBL_ADDITIONAL_DETAILS_CLOSE_TITLE' => 'Klikněte k zavřetí',
  'LBL_ADD_BUTTON' => 'Přidat',
  'LBL_ADD_BUTTON_KEY' => 'A',
  'LBL_ADD_BUTTON_TITLE' => 'Přidat [Alt+A]',
  'LBL_ADD_DOCUMENT' => 'Přidat Dokument',
  'LBL_ADD_TO_PROSPECT_LIST_BUTTON_KEY' => 'L',
  'LBL_ADD_TO_PROSPECT_LIST_BUTTON_LABEL' => 'Přidat k seznamu cílů',
  'LBL_ADD_TO_PROSPECT_LIST_BUTTON_TITLE' => 'Přidat k seznamu cílů',
  'LBL_ADMIN' => 'Admin',
  'LBL_ALT_HOT_KEY' => 'Alt+',
  'LBL_ARCHIVE' => 'Archiv',
  'LBL_ASSIGNED_TO' => 'Přideleno k:',
  'LBL_ASSIGNED_TO_USER' => 'Přiděleno k uživateli',
  'LBL_BACK' => 'Zpátky',
  'LBL_BILL_TO_ACCOUNT' => 'Účtovat k Společnosti',
  'LBL_BILL_TO_CONTACT' => 'Účtovat k Kontaktu',
  'LBL_BROWSER_TITLE' => 'SugarCRM - Komerční Open Source CRM',
  'LBL_BUGS' => 'Chyby',
  'LBL_BY' => 'podle',
  'LBL_CALLS' => 'Hovory',
  'LBL_CAMPAIGNS_SEND_QUEUED' => 'Poslat naplánované Kampaňové Emaily',
  'LBL_CANCEL_BUTTON_KEY' => 'X',
  'LBL_CANCEL_BUTTON_LABEL' => 'Zrušit',
  'LBL_CANCEL_BUTTON_TITLE' => 'Zrušit [Alt+X]',
  'LBL_CASE' => 'Případ',
  'LBL_CASES' => 'Případy',
  'LBL_CHANGE_BUTTON_KEY' => 'G',
  'LBL_CHANGE_BUTTON_LABEL' => 'Změnit',
  'LBL_CHANGE_BUTTON_TITLE' => 'Změnit [Alt+G]',
  'LBL_CHANGE_PASSWORD' => 'Změnte heslo',
  'LBL_CHARSET' => 'UTF-8',
  'LBL_CHECKALL' => 'Zaskrtnout všechno',
  'LBL_CLEARALL' => 'Vymazat všechno',
  'LBL_CLEAR_BUTTON_KEY' => 'C',
  'LBL_CLEAR_BUTTON_LABEL' => 'Vymazat',
  'LBL_CLEAR_BUTTON_TITLE' => 'Vymazat [Alt+C]',
  'LBL_CLOSEALL_BUTTON_KEY' => 'Q',
  'LBL_CLOSEALL_BUTTON_LABEL' => 'Zavřít všechno',
  'LBL_CLOSEALL_BUTTON_TITLE' => 'Zavřít všechno [Alt+I]',
  'LBL_CLOSE_WINDOW' => 'Zavřít okno',
  'LBL_COMPOSE_EMAIL_BUTTON_KEY' => 'L',
  'LBL_COMPOSE_EMAIL_BUTTON_LABEL' => 'Napsat e-mail',
  'LBL_COMPOSE_EMAIL_BUTTON_TITLE' => 'Napsat e-mail [Alt+L]',
  'LBL_CONTACT' => 'Kontakt',
  'LBL_CONTACTS' => 'Kontakty',
  'LBL_CONTACT_LIST' => 'Seznam Kontaktů',
  'LBL_CREATED' => 'Vytvořeno',
  'LBL_CREATED_BY_USER' => 'Vytvořeno uživatelem',
  'LBL_CREATE_BUTTON_LABEL' => 'Vytvořit',
  'LBL_CURRENT_USER_FILTER' => 'Jen moje položeky:',
  'LBL_DATE_ENTERED' => 'Datum vytvoření:',
  'LBL_DATE_MODIFIED' => 'Datum poslední úpravy:',
  'LBL_DELETE' => 'Vymazat',
  'LBL_DELETED' => 'Vymazaný',
  'LBL_DELETE_BUTTON' => 'Vymazat',
  'LBL_DELETE_BUTTON_KEY' => 'D',
  'LBL_DELETE_BUTTON_LABEL' => 'Vymazat',
  'LBL_DELETE_BUTTON_TITLE' => 'Vymazat [Alt+D]',
  'LBL_DIRECT_REPORTS' => 'Přímé Reporty',
  'LBL_DISPLAY_COLUMNS' => 'Zobrazit sloupce',
  'LBL_DONE_BUTTON_KEY' => 'X',
  'LBL_DONE_BUTTON_LABEL' => 'Hotovo',
  'LBL_DONE_BUTTON_TITLE' => 'Hotovo [Alt+X]',
  'LBL_DST_NEEDS_FIXIN' => 'Aplikace vyžaduje aby byl opraven letní čas.  Prosím navštivte odkaz <a href="index.php?module=Administration&amp;action=DstFix">Oprava</a> v Admin konzoli a použite opravu letního času.',
  'LBL_DUPLICATE_BUTTON' => 'Zdvojit',
  'LBL_DUPLICATE_BUTTON_KEY' => 'U',
  'LBL_DUPLICATE_BUTTON_LABEL' => 'Zdvojit',
  'LBL_DUPLICATE_BUTTON_TITLE' => 'Zdvojit [Alt+U]',
  'LBL_DUP_MERGE' => 'Najít duplicity',
  'LBL_EDIT_BUTTON' => 'Upravit',
  'LBL_EDIT_BUTTON_KEY' => 'E',
  'LBL_EDIT_BUTTON_LABEL' => 'Upravit',
  'LBL_EDIT_BUTTON_TITLE' => 'Upravit [Alt+E]',
  'LBL_EMAILS' => 'Emaily',
  'LBL_EMAIL_PDF_BUTTON_KEY' => 'M',
  'LBL_EMAIL_PDF_BUTTON_LABEL' => 'Email jako PDF',
  'LBL_EMAIL_PDF_BUTTON_TITLE' => 'Email jako PDF [Alt+M]',
  'LBL_EMPLOYEES' => 'Zaměstnanci',
  'LBL_ENTER_DATE' => 'Zadejte datum',
  'LBL_EXPORT' => 'Export',
  'LBL_EXPORT_ALL' => 'Export všech',
  'LBL_FULL_FORM_BUTTON_KEY' => 'F',
  'LBL_FULL_FORM_BUTTON_LABEL' => 'Celý formulář',
  'LBL_FULL_FORM_BUTTON_TITLE' => 'Celý formulář [Alt+F]',
  'LBL_HIDE' => 'Skrýt',
  'LBL_HIDE_COLUMNS' => 'Skrýt sloupce',
  'LBL_ID' => 'ID',
  'LBL_IMPORT' => 'Import',
  'LBL_IMPORT_PROSPECTS' => 'Import Cíle',
  'LBL_LAST_VIEWED' => 'Naposledy Prohlíženo',
  'LBL_LEADS' => 'Přiležitosti',
  'LBL_LISTVIEW_MASS_UPDATE_CONFIRM' => 'Jste si jisti, že chcete aktualizovat celý seznam?',
  'LBL_LISTVIEW_NO_SELECTED' => 'Prosím, vyberte alespoň 1 záznam.',
  'LBL_LISTVIEW_OPTION_CURRENT' => 'Aktuální stránka',
  'LBL_LISTVIEW_OPTION_ENTIRE' => 'Celý seznam',
  'LBL_LISTVIEW_OPTION_SELECTED' => 'Vybrané záznamy',
  'LBL_LISTVIEW_SELECTED_OBJECTS' => 'Vybrané:',
  'LBL_LIST_ACCOUNT_NAME' => 'Název účtu',
  'LBL_LIST_ASSIGNED_USER' => 'Uživatel',
  'LBL_LIST_CONTACT_NAME' => 'Jméno Kontatku',
  'LBL_LIST_CONTACT_ROLE' => 'Role Kontaktu',
  'LBL_LIST_EMAIL' => 'Email',
  'LBL_LIST_NAME' => 'Jméno',
  'LBL_LIST_OF' => 'z',
  'LBL_LIST_PHONE' => 'Telefon',
  'LBL_LIST_TEAM' => 'Tým',
  'LBL_LIST_USER_NAME' => 'Uživatelské jméno',
  'LBL_LOADING' => 'Nahrávání ...',
  'LBL_LOCALE_NAME_EXAMPLE_FIRST' => 'Jan',
  'LBL_LOCALE_NAME_EXAMPLE_LAST' => 'Novák',
  'LBL_LOCALE_NAME_EXAMPLE_SALUTATION' => 'Pán',
  'LBL_LOGIN_SESSION_EXCEEDED' => 'Server je příliš zaneprázdněn. Zkuste to prosím později.',
  'LBL_LOGIN_TO_ACCESS' => 'Prosím přihlašte se pro přístup.',
  'LBL_LOGOUT' => 'Odhlásit se',
  'LBL_MAILMERGE' => 'Hromadná korespondence',
  'LBL_MAILMERGE_KEY' => 'M',
  'LBL_MASS_UPDATE' => 'Hromadná úprava',
  'LBL_MEETINGS' => 'Schůze',
  'LBL_MEMBERS' => 'Členové',
  'LBL_MODIFIED' => 'Změněno',
  'LBL_MODIFIED_BY_USER' => 'Změněno uživatelem',
  'LBL_MY_ACCOUNT' => 'Můj účet',
  'LBL_NAME' => 'Jméno',
  'LBL_NEW_BUTTON_KEY' => 'N',
  'LBL_NEW_BUTTON_LABEL' => 'Vytvořit',
  'LBL_NEW_BUTTON_TITLE' => 'Vytvořit [Alt+N]',
  'LBL_NEXT_BUTTON_LABEL' => 'Další',
  'LBL_NONE' => '--Nic--',
  'LBL_NOTES' => 'Poznámky',
  'LBL_NO_RECORDS_FOUND' => '- 0 nalezených záznamů -',
  'LBL_OPENALL_BUTTON_KEY' => 'O',
  'LBL_OPENALL_BUTTON_LABEL' => 'Otevřít všechny',
  'LBL_OPENALL_BUTTON_TITLE' => 'Otevřít všechny [Alt+O]',
  'LBL_OPENTO_BUTTON_KEY' => 'T',
  'LBL_OPENTO_BUTTON_LABEL' => 'Otevřít:',
  'LBL_OPENTO_BUTTON_TITLE' => 'Otevřít: [Alt+T]',
  'LBL_OPPORTUNITIES' => 'Obchody',
  'LBL_OPPORTUNITY' => 'Obchod',
  'LBL_OPPORTUNITY_NAME' => 'Jméno Obchodu',
  'LBL_OR' => 'Nebo',
  'LBL_PERCENTAGE_SYMBOL' => '%',
  'LBL_PRODUCTS' => 'Produkty',
  'LBL_PRODUCT_BUNDLES' => 'Sbírka produktů',
  'LBL_PROJECTS' => 'Projekty',
  'LBL_PROJECT_TASKS' => 'Projektové úkoly',
  'LBL_QUOTES' => 'Nabídky',
  'LBL_QUOTES_SHIP_TO' => 'Odeslat Nabídky na',
  'LBL_QUOTE_TO_OPPORTUNITY_KEY' => 'O',
  'LBL_QUOTE_TO_OPPORTUNITY_LABEL' => 'Vytvořit Obchod z Nabídky',
  'LBL_QUOTE_TO_OPPORTUNITY_TITLE' => 'Vytvořit Obchod z Nabídky [Alt+O]',
  'LBL_RELATED_RECORDS' => 'Související záznamy',
  'LBL_REMOVE' => 'Odstranit',
  'LBL_REQUIRED_SYMBOL' => '*',
  'LBL_SAVED' => 'Uloženo',
  'LBL_SAVED_LAYOUT' => 'Rozvržení bylo uloženo.',
  'LBL_SAVED_VIEWS' => 'Uložené Náhledy',
  'LBL_SAVE_BUTTON_KEY' => 'S',
  'LBL_SAVE_BUTTON_LABEL' => 'Uložit',
  'LBL_SAVE_BUTTON_TITLE' => 'Uložit [Alt+S]',
  'LBL_SAVE_NEW_BUTTON_KEY' => 'V',
  'LBL_SAVE_NEW_BUTTON_LABEL' => 'Uložit &amp; Vytvořit nový',
  'LBL_SAVE_NEW_BUTTON_TITLE' => 'Uložit &amp; Vytvořit nový [Alt+V]',
  'LBL_SAVING' => 'Ukladání',
  'LBL_SAVING_LAYOUT' => 'Ukladání rozvržení ...',
  'LBL_SEARCH' => 'Vyhledat',
  'LBL_SEARCH_BUTTON_KEY' => 'Q',
  'LBL_SEARCH_BUTTON_LABEL' => 'Vyhledat',
  'LBL_SEARCH_BUTTON_TITLE' => 'Vyhledat [Alt+Q]',
  'LBL_SEARCH_CRITERIA' => 'Kritéria vyhledávání',
  'LBL_SELECT_BUTTON_KEY' => 'T',
  'LBL_SELECT_BUTTON_LABEL' => 'Vybrat',
  'LBL_SELECT_BUTTON_TITLE' => 'Vybrat [Alt+T]',
  'LBL_SELECT_CONTACT_BUTTON_KEY' => 'T',
  'LBL_SELECT_CONTACT_BUTTON_LABEL' => 'Vybrat Kontakt',
  'LBL_SELECT_CONTACT_BUTTON_TITLE' => 'Vybrat Kontakt [Alt+T]',
  'LBL_SELECT_REPORTS_BUTTON_LABEL' => 'Vybrat z Reportů',
  'LBL_SELECT_REPORTS_BUTTON_TITLE' => 'Vybrat Reporty',
  'LBL_SELECT_USER_BUTTON_KEY' => 'U',
  'LBL_SELECT_USER_BUTTON_LABEL' => 'Vybrat uživatele',
  'LBL_SELECT_USER_BUTTON_TITLE' => 'Vybrat uživatele [Alt+U]',
  'LBL_SERVER_RESPONSE_RESOURCES' => 'Prostředky vynaložené na výstavbu této stránky (dotazy, soubory)',
  'LBL_SERVER_RESPONSE_TIME' => 'Doba odezvy serveru:',
  'LBL_SERVER_RESPONSE_TIME_SECONDS' => 'sekund.',
  'LBL_SHIP_TO_ACCOUNT' => 'Odeslat k Společnosti',
  'LBL_SHIP_TO_CONTACT' => 'Odeslat k Kontaktu',
  'LBL_SHORTCUTS' => 'Zkratky',
  'LBL_SHOW' => 'Ukázat',
  'LBL_SQS_INDICATOR' => '',
  'LBL_STATUS' => 'Stav:',
  'LBL_STATUS_UPDATED' => 'Váš status na tuto akci byl aktualizován!',
  'LBL_SUBJECT' => 'Předmět',
  'LBL_SYNC' => 'Sync',
  'LBL_TASKS' => 'Úkoly',
  'LBL_TEAM' => 'Tým:',
  'LBL_TEAMS_LINK' => 'Tým',
  'LBL_TEAM_ID' => 'ID týmu:',
  'LBL_THOUSANDS_SYMBOL' => 'K',
  'LBL_TRACK_EMAIL_BUTTON_KEY' => 'K',
  'LBL_TRACK_EMAIL_BUTTON_LABEL' => 'Archivovat Email',
  'LBL_TRACK_EMAIL_BUTTON_TITLE' => 'Archivovat Email [Alt+K]',
  'LBL_UNAUTH_ADMIN' => 'Neoprávněný přístup ke správě',
  'LBL_UNDELETE' => 'Obnovit',
  'LBL_UNDELETE_BUTTON' => 'Obnovit',
  'LBL_UNDELETE_BUTTON_LABEL' => 'Obnovit',
  'LBL_UNDELETE_BUTTON_TITLE' => 'Obnovit [Alt+D]',
  'LBL_UNSYNC' => 'Nesynchronizovat',
  'LBL_UPDATE' => 'Aktualizovat',
  'LBL_USERS' => 'Uživatelé',
  'LBL_USERS_SYNC' => 'Uživatelé Sync',
  'LBL_USER_LIST' => 'Seznam uživatelů',
  'LBL_VIEW_BUTTON' => 'Prohlížet',
  'LBL_VIEW_BUTTON_KEY' => 'V',
  'LBL_VIEW_BUTTON_LABEL' => 'Prohlížet',
  'LBL_VIEW_BUTTON_TITLE' => 'Prohlížet [Alt+V]',
  'LBL_VIEW_PDF_BUTTON_KEY' => 'P',
  'LBL_VIEW_PDF_BUTTON_LABEL' => 'Tisknout jako PDF',
  'LBL_VIEW_PDF_BUTTON_TITLE' => 'Tisknout jako [Alt+P]',
  'LNK_ABOUT' => 'O aplikaci',
  'LNK_ADVANCED_SEARCH' => 'Pokročilý',
  'LNK_BASIC_SEARCH' => 'Základní',
  'LNK_DELETE' => 'smazat',
  'LNK_DELETE_ALL' => 'vymazat všechny',
  'LNK_EDIT' => 'upravit',
  'LNK_GET_LATEST' => 'Získat nejnovější',
  'LNK_GET_LATEST_TOOLTIP' => 'Nahradit s nejnovější verzí',
  'LNK_HELP' => 'Nápověda',
  'LNK_LIST_END' => 'Konec',
  'LNK_LIST_NEXT' => 'Další',
  'LNK_LIST_PREVIOUS' => 'Předchádzející',
  'LNK_LIST_RETURN' => 'Návrat k seznamu',
  'LNK_LIST_START' => 'Start',
  'LNK_LOAD_SIGNED' => 'Podepsat',
  'LNK_LOAD_SIGNED_TOOLTIP' => 'Nahradit za podepsaný dokument',
  'LNK_PRINT' => 'Vytisknout',
  'LNK_REMOVE' => 'smazat',
  'LNK_RESUME' => 'Pokračovat',
  'LNK_VIEW_CHANGE_LOG' => 'Zobrazit seznam změn',
  'LOGIN_LOGO_ERROR' => 'Prosím vyměňte SugarCRM loga.',
  'NTC_CLICK_BACK' => 'Prosím, klikněte v prohlížeči na tlačítko Zpět a opravte chybu.',
  'NTC_DATE_FORMAT' => '(rrrr-mm-dd)',
  'NTC_DATE_TIME_FORMAT' => '(rrrr-mm-dd 24:00)',
  'NTC_DELETE_CONFIRMATION' => 'Jste si jisti, že chcete smazat tento záznam?',
  'NTC_DELETE_CONFIRMATION_MULTIPLE' => 'Jste si jisti, že chcete smazat vybrané záznamy',
  'NTC_LOGIN_MESSAGE' => 'Prosím, zadejte své uživatelské jméno a heslo:',
  'NTC_NO_ITEMS_DISPLAY' => 'žádný',
  'NTC_REMOVE_CONFIRMATION' => 'Jste si jisti, že chcete odebrat tento vztah?',
  'NTC_REQUIRED' => 'Označuje povinné pole',
  'NTC_SUPPORT_SUGARCRM' => 'Podpořte SugarCRM open-source projekt  projekt s darováním přes PayPal - je to rychlé, svobodné a bezpečné!',
  'NTC_TIME_FORMAT' => '(24:00)',
  'NTC_WELCOME' => 'Vítejte',
  'NTC_YEAR_FORMAT' => '(rrrr)',
);

