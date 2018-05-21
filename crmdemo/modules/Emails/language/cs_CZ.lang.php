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
  'ERR_ARCHIVE_EMAIL' => 'Chyba: Vyberte emaily k archivaci.',
  'ERR_DATE_START' => 'Počáteční datum',
  'ERR_DELETE_RECORD' => 'Číselný záznam musí být specifikován před smazáním.',
  'ERR_INVALID_REQUIRED_FIELDS' => 'Neplatné povinné pole',
  'ERR_MISSING_CREDENTIALS' => 'chyba: chybějící ověření',
  'ERR_MISSING_REQUIRED_FIELDS' => 'Chybí povinné pole',
  'ERR_MSG_FAILED' => 'Zpráva č. : {0} selhalo. Důvod : Zpráva již byla importována',
  'ERR_NOT_ADDRESSED' => 'Email musí obsahovat adresu příjemce, v kopii nebo v přeposlat jinému adresátovi',
  'ERR_NO_IEID' => 'chyba: chybí ieID',
  'ERR_NO_UID' => 'chyba: chybí UID',
  'ERR_RCD_NUM_TO_DEL' => 'Ke smazání e-mailu musí být určeno číslo záznamu.',
  'ERR_TIME_SENT' => 'Čas odeslání',
  'ERR_TIME_START' => 'Počáteční čas',
  'LBL_ACCOUNTS_SUBPANEL_TITLE' => 'Společnosti',
  'LBL_ACTIVITIES_REPORTS' => 'Report aktivit',
  'LBL_ADDRESS_BOOK_SEARCH_HELP' => 'Zadejte e-mailovou adresu, jméno, příjmení nebo název společnosti k nalezení příjemce.',
  'LBL_ADD_ANOTHER_FILE' => 'Přidat další soubor',
  'LBL_ADD_BCC' => 'Vložit Bcc',
  'LBL_ADD_CC' => 'Vložit Cc',
  'LBL_ADD_CC_BCC_SEP' => '|',
  'LBL_ADD_DASHLETS' => 'Přidat budík',
  'LBL_ADD_DOCUMENT' => 'Přidat Sugar dokument',
  'LBL_ADD_ENTRIES' => 'Přidat příspěvky',
  'LBL_ADD_FILE' => 'Přidat soubor',
  'LBL_ADD_INBOUND_ACCOUNT' => 'Vložit',
  'LBL_ADD_OUTBOUND_ACCOUNT' => 'Vložit',
  'LBL_ADD_TO_ADDR' => 'Vložit To',
  'LBL_ALL' => 'Všechno',
  'LBL_ARCHIVED_EMAIL' => 'Archivované emaily',
  'LBL_ARCHIVED_EMAILS_CREATE' => 'Vytvořit',
  'LBL_ARCHIVED_MODULE_NAME' => 'Emaily archivovány',
  'LBL_ARCHIVED_MODULE_NAME_SINGULAR' => 'Vytvořena archivovaná zprava',
  'LBL_ASSIGNED_TO' => 'Přidělen:',
  'LBL_ASSIGNMNT_ACT_RESULT' => 'Výsledek přiřazení',
  'LBL_ASSIGN_SELECTED_RESULTS_TO' => 'Přiřadit vybrané záznamy:',
  'LBL_ASSIGN_WARN' => 'Ujistěte se, že všechny 3 možnosti jsou vybrány.',
  'LBL_ATTACHMENT' => 'Příloha',
  'LBL_ATTACHMENTS' => 'Přílohy:',
  'LBL_ATTACH_SUGAR_DOC' => 'Připojit Sugar dokument',
  'LBL_BACK_TO_GROUP' => 'Zpět do skupinového Inboxu',
  'LBL_BCC' => 'Skrytá kopie (bcc):',
  'LBL_BCC_BUTTON' => 'Skrytá kopie (bcc):',
  'LBL_BODY' => 'Tělo zprávy:',
  'LBL_BUGS_SUBPANEL_TITLE' => 'Chyby',
  'LBL_BUTTON_CHECK' => 'Zkontrolovat poštu',
  'LBL_BUTTON_CHECK_KEY' => 'c',
  'LBL_BUTTON_CHECK_TITLE' => 'Zkontrolovat novou poštu [Alt+C]',
  'LBL_BUTTON_CREATE' => 'Přidat',
  'LBL_BUTTON_DISTRIBUTE' => 'Přiřadit',
  'LBL_BUTTON_DISTRIBUTE_KEY' => 'a',
  'LBL_BUTTON_DISTRIBUTE_TITLE' => 'Přiřadit [Alt+A]',
  'LBL_BUTTON_EDIT' => 'Upravit',
  'LBL_BUTTON_FORWARD' => 'Přeposlat',
  'LBL_BUTTON_FORWARD_KEY' => 'f',
  'LBL_BUTTON_FORWARD_TITLE' => 'Přeposlat tento e-mail [Alt+F]',
  'LBL_BUTTON_GRAB' => 'Odebrat ze skupiny',
  'LBL_BUTTON_GRAB_KEY' => 't',
  'LBL_BUTTON_GRAB_TITLE' => 'Odebrat ze skupiny [Alt+T]',
  'LBL_BUTTON_RAW_KEY' => 'e',
  'LBL_BUTTON_RAW_LABEL' => 'Ukázat hrubé',
  'LBL_BUTTON_RAW_LABEL_HIDE' => 'Skrýt hrubé',
  'LBL_BUTTON_RAW_TITLE' => 'Ukázat hrubé zprávy [Alt+E]',
  'LBL_BUTTON_REPLY' => 'Odpovědět',
  'LBL_BUTTON_REPLY_ALL' => 'Odpovědět všem',
  'LBL_BUTTON_REPLY_KEY' => 'r',
  'LBL_BUTTON_REPLY_TITLE' => 'Odpovědět [Alt+R]',
  'LBL_CASES_SUBPANEL_TITLE' => 'Případy',
  'LBL_CC' => 'Kopie (cc):',
  'LBL_CC_BUTTON' => 'Kopie (cc):',
  'LBL_CHECKEMAIL' => 'Zkontroluj email',
  'LBL_CHECKING_ACCOUNT' => 'Kontrola účtu',
  'LBL_CHECK_ATTACHMENTS' => 'Zkontrolujte prosím přílohy!',
  'LBL_CHECK_INLINE' => 'Správně',
  'LBL_CHOOSE_EMAIL_PROVIDER' => 'Vyberte Vašeho e-mailového poskytovatele:',
  'LBL_CLOSE' => 'Zavřít',
  'LBL_COLON' => ':',
  'LBL_COMPOSEEMAIL' => 'Napsat email',
  'LBL_COMPOSE_ADDRESSBOOK' => 'Adresář',
  'LBL_COMPOSE_MODULE_NAME' => 'Nová zpráva',
  'LBL_COMPOSE_MODULE_NAME_SINGULAR' => 'Napsat email',
  'LBL_CONFIRM_DELETE' => 'Jste si jisti, že chcete smazat tuto složku?',
  'LBL_CONTACTS_SUBPANEL_TITLE' => 'Kontakty',
  'LBL_CONTACTS_SUBPANEL_TITLE_SNIP' => 'Email. kontakty',
  'LBL_CONTACT_FIRST_NAME' => 'Křestní jméno',
  'LBL_CONTACT_LAST_NAME' => 'Příjmení',
  'LBL_CONTACT_NAME' => 'Kontakt:',
  'LBL_CREATED_BY' => 'Vytvořil',
  'LBL_CREATE_BUG' => 'Vytvořit chybu',
  'LBL_CREATE_BUGS' => 'Vytvořit chyby',
  'LBL_CREATE_CASE' => 'Vytvořit případ',
  'LBL_CREATE_CASES' => 'Vytvořit případy',
  'LBL_CREATE_CONTACT' => 'Přidat kontakt',
  'LBL_CREATE_CONTACTS' => 'Vytvořit kontakty',
  'LBL_CREATE_LEAD' => 'Vytvořit příležitost',
  'LBL_CREATE_LEADS' => 'Vytvořit příležitosti',
  'LBL_CREATE_TASK' => 'Přidat úkol',
  'LBL_CREATE_TASKS' => 'Vytvořit úkoly',
  'LBL_DATE' => 'Datum odeslání:',
  'LBL_DATE_AND_TIME' => 'Datum & čas odeslání:',
  'LBL_DATE_CREATED' => 'Datum vytvoření',
  'LBL_DATE_MODIFIED' => 'Datum změny',
  'LBL_DATE_SENT' => 'Datum odeslání:',
  'LBL_DEFAULT_SIGNATURE_TITLE' => 'Výchozí podpis',
  'LBL_DELETE_FROM_SERVER' => 'Odstranit zprávu ze serveru',
  'LBL_DELETE_INLINE' => 'Vymazat',
  'LBL_DESCRIPTION' => 'Popis',
  'LBL_DIST_TITLE' => 'Přiřazení',
  'LBL_DRAFT_SAVED' => 'Koncept uložen',
  'LBL_DRAFT_SAVING' => 'Ukládání konceptu',
  'LBL_EDIT_ALT_TEXT' => 'Upravit prostý text',
  'LBL_EDIT_LAYOUT' => 'Úprava rozvržení',
  'LBL_EDIT_MY_SETTINGS' => 'Úprava vlastního nastavení',
  'LBL_EMAIL' => 'E-mail:',
  'LBL_EMAILSETTINGS' => 'Emailové nastavení',
  'LBL_EMAILS_ACCOUNTS_REL' => 'E-maily: Účty',
  'LBL_EMAILS_BUGS_REL' => 'E-maily: Chyby',
  'LBL_EMAILS_CASES_REL' => 'E-maily: Případy',
  'LBL_EMAILS_CONTACTS_REL' => 'E-maily: Kontakty',
  'LBL_EMAILS_LEADS_REL' => 'E-maily: Příležitosti',
  'LBL_EMAILS_MEETINGS_REL' => 'Emaily: Schůzky',
  'LBL_EMAILS_NOTES_REL' => 'E-maily: Poznámky',
  'LBL_EMAILS_NO_PRIMARY_TEAM_SPECIFIED' => 'Primární tým neuveden',
  'LBL_EMAILS_OPPORTUNITIES_REL' => 'E-maily: Obchodů',
  'LBL_EMAILS_PRODUCTS_REL' => 'E-maily: Produkty',
  'LBL_EMAILS_PROJECT_REL' => 'E-maily:Projekt',
  'LBL_EMAILS_PROJECT_TASK_REL' => 'E-maily:Projektový úkol',
  'LBL_EMAILS_PROSPECT_REL' => 'E-maily: Adresáti',
  'LBL_EMAILS_QUOTES_REL' => 'Emaily:Nabíkdy',
  'LBL_EMAILS_REVENUELINEITEMS_REL' => 'E-maily: Řádky obchodů',
  'LBL_EMAILS_TASKS_REL' => 'E-maily: Úkoly',
  'LBL_EMAILS_USERS_REL' => 'E-maily: Uživatelé',
  'LBL_EMAILTEMPLATE_MESSAGE_CLEAR_MSG' => 'Výběr "--None--/--Žádný--" vymaže všechen text v těle e-mailu. Přejete si pokračovat?',
  'LBL_EMAILTEMPLATE_MESSAGE_MULTIPLE_RECIPIENTS' => 'Pomocí e-mailové šablony obsahující kontaktní proměnné, např. jako je jméno kontaktní osoby, může mít odesílání e-mailů více příjemcům neočekávané výsledky. Pro hromadnou korespondenci se doporučuje využít e-mailovou kampaň.',
  'LBL_EMAILTEMPLATE_MESSAGE_SHOW_MSG' => 'Výběrem této šablony přepíšete text v těle e-mailu. Přejete si pokračovat?',
  'LBL_EMAILTEMPLATE_MESSAGE_SHOW_TITLE' => 'Zkontrolujte prosím!',
  'LBL_EMAILTEMPLATE_MESSAGE_WARNING_TITLE' => 'Varování',
  'LBL_EMAIL_ACCOUNTS_INBOUND' => 'Nastavení e-mailového účtu',
  'LBL_EMAIL_ARCHIVING' => 'Archivace e-mailu',
  'LBL_EMAIL_ATTACHMENT' => 'Příloha emailu',
  'LBL_EMAIL_DEFAULT_DESCRIPTION' => '(Změňte tento text.)',
  'LBL_EMAIL_DETAIL_VIEW_MORE' => 'více',
  'LBL_EMAIL_DETAIL_VIEW_SHOW' => 'ukázat',
  'LBL_EMAIL_EDITOR_OPTION' => 'Odeslat HTML email',
  'LBL_EMAIL_FLAGGED' => 'S příznakem:',
  'LBL_EMAIL_INBOUND_TYPE_HELP' => '<b>Osobní</b>: E-mailový účet přístupný pouze Vám. Pouze Vy můžete spravovat a importovat e-maily do tohoto účtu.<b>Skupina</b> E-mailový účet je přístupný všem členům uvedených týmu. Členové týmu mohou spravovat a importovat e-maily do tohoto účtu. <b>Skupina - Auto-import</b> E-mailový účet přístupný všem členům uvedených týmu. E-maily jsou automaticky importovány.',
  'LBL_EMAIL_INVALID_SYSTEM_CONFIGURATION' => 'Výchozí systémový SMTP server není nakonfigurován. Prosím kontaktujte vašeho systémového administrátora pro další asistenci.',
  'LBL_EMAIL_INVALID_USER_CONFIGURATION' => 'Vaše nastavení e-mailů není správně nakonfigurováno k odesílání e-mailů. SMTP server musí být nakonfigurován v <a href="#bwc/index.php?module=Users">Nastavení e-mailu v uživatelském profilu</a>.',
  'LBL_EMAIL_QUOTE_FOR' => 'Quote pro:',
  'LBL_EMAIL_RELATE' => 'Vztahující se k',
  'LBL_EMAIL_REPLY_TO_STATUS' => 'Odpovědět na stav:',
  'LBL_EMAIL_SELECTOR_CLEAR' => 'Vyčistit',
  'LBL_EMAIL_SELECTOR_SELECT' => 'Zvolit',
  'LBL_EMAIL_SENDING' => 'Odesílání e-mailu',
  'LBL_EMAIL_SENT' => 'E-mail odeslán',
  'LBL_EMAIL_SETTINGS_INBOUND' => 'Příchozí E-mail',
  'LBL_EMAIL_SETTINGS_INBOUND_ACCOUNTS' => 'E-mailové účty',
  'LBL_EMAIL_SETTINGS_OUTBOUND' => 'Odchozí Email',
  'LBL_EMAIL_SETTINGS_OUTBOUND_ACCOUNT' => 'Odchozí SMTP mail server',
  'LBL_EMAIL_SETTINGS_OUTBOUND_ACCOUNTS' => 'Odchozí SMTP mail servery',
  'LBL_EMPTY_EMAIL_BODY' => '<p><span style="color: #888888;"><em>Tato zpráva nemá žádný obsah</em></span></p>',
  'LBL_EMPTY_FOLDER' => 'Žádné e-maily pro zobrazení',
  'LBL_ENTER_FOLDER_NAME' => 'Prosím, zadejte název složky',
  'LBL_ERROR_SAVING_DRAFT' => 'Chyba při ukládání návrhu',
  'LBL_ERROR_SELECT_MODULE' => 'Prosím vyberte modul pro související pole',
  'LBL_ERROR_SELECT_MODULE_SELECT' => 'Prosím vyberte název kliknutím na tlačítko Select/Výběr vedlef souvisejícího pole',
  'LBL_ERROR_SELECT_REPORT' => 'Prosím vyberte report',
  'LBL_ERROR_SENDING_EMAIL' => 'Chyba při odesílání e-mailu',
  'LBL_EXCEPTION' => 'Nastala výjimka.',
  'LBL_EXCHANGE_LOGO' => 'Exchange',
  'LBL_EXCHANGE_SMTPPASS' => 'Exchange heslo:',
  'LBL_EXCHANGE_SMTPPORT' => 'Exchange port serveru:',
  'LBL_EXCHANGE_SMTPSERVER' => 'Exchange server:',
  'LBL_EXCHANGE_SMTPUSER' => 'Exchange uživatelské jméno:',
  'LBL_FAILED_TO_CONNECT' => 'Nebylo možné připojit se k e-mailovému serveru. Prosím ujistěte se, že konfigurace e-mailu byla provedena správně.',
  'LBL_FILTER_BY_RELATED_BEAN' => 'Zobrazit pouze související příjemce',
  'LBL_FORWARD_HEADER' => 'Začít přeposlanou zprávu:',
  'LBL_FROM' => 'Odesílatel:',
  'LBL_FROM_NAME' => 'Jméno odesílatele',
  'LBL_FW' => 'Přeposlat (fw):',
  'LBL_GMAIL_LOGO' => 'Gmail',
  'LBL_GMAIL_SMTPPASS' => 'Gmail heslo:',
  'LBL_GMAIL_SMTPUSER' => 'Gmail e-mailová adresa:',
  'LBL_HAS_ATTACHMENT' => 'Má přílohu?:',
  'LBL_HAS_ATTACHMENTS' => 'Tento e-mail již přílohu/y má. Přejete si přílohu/y ponechat?',
  'LBL_HELP' => 'Nápověda',
  'LBL_HELP_COMPOSE' => 'Napište e-mail vyplněním předmětu a těla zprávy. Klikněte na "Odeslat" k odeslání e-mailu nebo zvolte "Uložit koncept" z menu akcí k uložení e-mailu pro pozdější editaci z vaší složky konceptů v modulu E-maily. Můžete použít předdefinovanou šablonu pomocí tlačítka Šablona nebo připojte jeden z vašich podpisů pomocí tlačítka Podpis. Použijte tlačítko Nahrát novou k přidání přílohy do e-mailu.',
  'LBL_HELP_COMPOSE_TITLE' => 'Napsat e-mail',
  'LBL_HTML_BODY' => 'Tělo HTML',
  'LBL_ID_MISMATCH' => 'NOOP: nesouhlas ID',
  'LBL_IMPORT_STATUS_TITLE' => 'Stav',
  'LBL_INBOUND_TITLE' => 'Příchozí email',
  'LBL_INTENT' => 'Záměr',
  'LBL_INTERNAL_ERROR' => 'Interní chyba serveru. Prosím zkuste zopakovat akci.',
  'LBL_INVALID_ATTACHMENT' => 'Nebylo možné připojit vybraný soubor. Prosím zkuste to znovu.',
  'LBL_INVALID_CONFIGURATION' => 'E-mail nebyl korektně nastaven. Prosím proveďte správné nastavení.',
  'LBL_INVALID_EMAIL' => 'Prosím doplňte správné e-mailové adresy.',
  'LBL_INVALID_HEADER' => 'Prosím doplňte všechny požadované informace.',
  'LBL_INVALID_MAILAPI_STATUS' => 'Byl odeslán neplatný status e-mailu. Prosím doplňte platný status.',
  'LBL_INVALID_OPS' => 'Neplatná operace',
  'LBL_INVALID_TYPE' => 'NOOP: neplatný typ',
  'LBL_INVITEE' => 'Příjemci',
  'LBL_LEADS_SUBPANEL_TITLE' => 'Přiležitosti',
  'LBL_LESS_OPTIONS' => 'Méně',
  'LBL_LIST_ASSIGNED' => 'Přidělený',
  'LBL_LIST_ASSIGNED_TO_NAME' => 'Zodpovědný uživatel',
  'LBL_LIST_BUG' => 'Chyby',
  'LBL_LIST_CASE' => 'Případy',
  'LBL_LIST_CONTACT' => 'Kontakty',
  'LBL_LIST_CONTACT_NAME' => 'Název kontaktu',
  'LBL_LIST_CREATED' => 'Vytvořen',
  'LBL_LIST_DATE' => 'Datum odeslání',
  'LBL_LIST_DATE_SENT' => 'Datum odeslání',
  'LBL_LIST_FORM_DRAFTS_TITLE' => 'Návrh',
  'LBL_LIST_FORM_SENT_TITLE' => 'Seznam odeslaných e-mailů',
  'LBL_LIST_FORM_TITLE' => 'Seznam e-mailů',
  'LBL_LIST_FROM_ADDR' => 'Odesílatel',
  'LBL_LIST_LEAD' => 'Přiležitosti',
  'LBL_LIST_STATUS' => 'Stav',
  'LBL_LIST_SUBJECT' => 'Předmět',
  'LBL_LIST_TASK' => 'Úkoly',
  'LBL_LIST_TIME' => 'Čas odeslání',
  'LBL_LIST_TITLE_GROUP_INBOX' => 'Skupinová doručená pošta',
  'LBL_LIST_TITLE_MY_ARCHIVES' => 'Moje archivované emaily.',
  'LBL_LIST_TITLE_MY_DRAFTS' => 'Moje koncepty',
  'LBL_LIST_TITLE_MY_INBOX' => 'Moje doručená pošta',
  'LBL_LIST_TITLE_MY_SENT' => 'Moje odeslané emaily',
  'LBL_LIST_TO_ADDR' => 'Příjemce',
  'LBL_LIST_TYPE' => 'Typ',
  'LBL_LOCK_FAIL_DESC' => 'Vybrané položky jsou právě nepřípustupné.',
  'LBL_LOCK_FAIL_USER' => 'vzal vlastnictví.',
  'LBL_MAILAPI_INVALID_ARGUMENT_FIELD' => '{0} argument - neplatné nebo chybějící pole: {1}',
  'LBL_MAILAPI_INVALID_ARGUMENT_FORMAT' => '{0} argument - neplatný formát',
  'LBL_MAILAPI_INVALID_ARGUMENT_VALUE' => '{0} argument - neplatný nebo chybí',
  'LBL_MAILAPI_NO_RECIPIENTS' => 'Nebyli nastaveni adresáti',
  'LBL_MAILBOX_TYPE_GROUP' => 'Skupina',
  'LBL_MAILBOX_TYPE_GROUP_FOLDER' => 'Skupina - Auto-Import',
  'LBL_MAILBOX_TYPE_PERSONAL' => 'Osobní',
  'LBL_MAIL_SMTPAUTH_REQ' => 'Použít SMTP autentizaci?',
  'LBL_MAIL_SMTPPASS' => 'SMTP heslo:',
  'LBL_MAIL_SMTPPORT' => 'SMTP port:',
  'LBL_MAIL_SMTPSERVER' => 'SMTP server:',
  'LBL_MAIL_SMTPTYPE' => 'SMTP typ serveru:',
  'LBL_MAIL_SMTPUSER' => 'SMTP uživatelské jméno:',
  'LBL_MAIL_SMTP_SETTINGS' => 'SMTP specifikace serveru',
  'LBL_MASS_DELETE_ERROR' => 'Žádné vybrané položky nebyli předány ke smazání.',
  'LBL_MEMBER_OF' => 'Rodič',
  'LBL_MESSAGE_ID' => 'ID zprávy',
  'LBL_MESSAGE_SENT' => 'Zpráva byla odeslána',
  'LBL_MESSAGE_UID' => 'UID zprávy',
  'LBL_MISSING_CONFIGURATION' => 'Konfigurace e-mailu nebyla specifikována. Prosím doplňte platnou konfiguraci.',
  'LBL_MISSING_DEFAULT_OUTBOUND_SMTP_SETTINGS' => 'V účtu administrátora nebyl dosud nastaven odchozí účet. Nelze odeslat zkušební e-mail.',
  'LBL_MODIFIED_BY' => 'Upravil',
  'LBL_MODULE_NAME' => 'E-Maily',
  'LBL_MODULE_NAME_NEW' => 'Archivovat zprávu',
  'LBL_MODULE_NAME_SINGULAR' => 'E-mail',
  'LBL_MODULE_NAME_SINGULAR_NEW' => 'Archivovat e-mail',
  'LBL_MODULE_TITLE' => 'E-maily:',
  'LBL_MORE_OPTIONS' => 'Více',
  'LBL_MY_EMAILS' => 'Moje e-maily',
  'LBL_NEW' => 'Nový',
  'LBL_NEW_FORM_TITLE' => 'Archivovat zprávu',
  'LBL_NEXT_EMAIL' => 'Další volná položka',
  'LBL_NONE' => 'Žádný',
  'LBL_NOTES_SUBPANEL_TITLE' => 'Přílohy',
  'LBL_NOTE_SEMICOLON' => 'Poznámka: Používejte středník na oddělení více e-mailových adres.',
  'LBL_NOT_SENT' => 'Chyba při odesílání',
  'LBL_NOT_SUGAR_FOLDER' => 'NOOP - není složkou Sugar',
  'LBL_NO_BODY_SEND_ANYWAYS' => 'Tento e-mail nemá žádné tělo. Přesto odeslat/uložit?',
  'LBL_NO_FOLDER_TYPE' => 'NOOP: nedefinovaný typ složky',
  'LBL_NO_GRAB_DESC' => 'Nejsou žádné položky dostupné. Zkuste za chviličku.',
  'LBL_NO_SEARCH_CRITERIA' => 'NOOP: nenalezena kritéria vyhledávání',
  'LBL_NO_SUBJECT' => '(bez předmětu)',
  'LBL_NO_SUBJECT_NO_BODY_SEND_ANYWAYS' => 'Tento e-mail nemá žádný předmět ani tělo. Přesto odeslat/uložit?',
  'LBL_OF' => 'z',
  'LBL_OPPORTUNITY_SUBPANEL_TITLE' => 'Obchody',
  'LBL_PROJECT_SUBPANEL_TITLE' => 'Projekty',
  'LBL_PROJECT_TASK_SUBPANEL_TITLE' => 'Úkoly projektu',
  'LBL_QS_DISABLED' => '(QuickSearch není v tomto modulu přístupný. Použijte tlačítko Select/Výběr.)',
  'LBL_QUICK_CREATE' => 'Rychlé vytvoření',
  'LBL_QUICK_REPLY' => 'Odpovědět',
  'LBL_QUOTES_SUBPANEL_TITLE' => 'Nabídky',
  'LBL_QUOTE_LAYOUT_DOES_NOT_EXIST_ERROR' => 'soubor quote layout neexistuje: $layout',
  'LBL_QUOTE_LAYOUT_REGISTERED_ERROR' => 'quote layout není zapsán v modules/Quotes/Layouts.php',
  'LBL_RAW' => 'Hrubý e-mail',
  'LBL_RE' => 'Odpovědět (re):',
  'LBL_RECIPIENTS_HAVE_BEEN_ADDED' => 'Příjemci byli přidáni.',
  'LBL_REPLIED' => 'Odpovězeno',
  'LBL_REPLY_HEADER_1' => 'Dne',
  'LBL_REPLY_HEADER_2' => 'napsal:',
  'LBL_REPLY_TO' => 'Odpovědět:',
  'LBL_REPLY_TO_ADDRESS' => 'Odpovědní adresa',
  'LBL_REPLY_TO_NAME' => 'Odpovědní jméno',
  'LBL_SAVE_AS_DRAFT_BUTTON_KEY' => 'R',
  'LBL_SAVE_AS_DRAFT_BUTTON_LABEL' => 'Uložit návrh',
  'LBL_SAVE_AS_DRAFT_BUTTON_TITLE' => 'Uložit návrh [Alt+R]',
  'LBL_SEARCH_FOR' => 'Vyhledávání',
  'LBL_SEARCH_FORM_DRAFTS_TITLE' => 'Vyhledat návrhy',
  'LBL_SEARCH_FORM_SENT_TITLE' => 'Vyhledat odeslané e-mail',
  'LBL_SEARCH_FORM_TITLE' => 'Vyhledat e-mail',
  'LBL_SEARCH_IMPORTED_EMAIL' => 'Prohledat importovaný e-mail',
  'LBL_SEE_LOG' => 'NOOP: chyba viz log',
  'LBL_SELECTED_ADDR' => 'Vybrané',
  'LBL_SELECTED_RECIPIENTS' => 'Vybraní adresáti',
  'LBL_SELECT_FROM_SENDER' => 'Vyberte e-mailový účet',
  'LBL_SELECT_SIGNATURE_TITLE' => 'Vyberte podpis',
  'LBL_SELECT_TEAM' => 'Vyberte týmy',
  'LBL_SEND' => 'Odesláno',
  'LBL_SEND_ANYWAYS' => 'tento e-mail nemá předmět. Odeslat/uložit?',
  'LBL_SEND_BUTTON_KEY' => 'S',
  'LBL_SEND_BUTTON_LABEL' => 'Odeslat',
  'LBL_SEND_BUTTON_TITLE' => 'Odeslat [Alt+S]',
  'LBL_SEND_EMAIL_FAIL_TITLE' => 'Při odesílání e-mailu nastala chyba',
  'LBL_SEND_IN_PLAIN_TEXT' => 'Odeslat ve formátu prostého textu (Plain text)',
  'LBL_SENT_MODULE_NAME' => 'Seznam odeslaných e-mailů',
  'LBL_SENT_MODULE_NAME_SINGULAR' => 'Odeslán email',
  'LBL_SHOW_ALT_TEXT' => 'Zobrazit prostý text',
  'LBL_SHOW_MORE_RECIPIENTS' => 'Více adresátů...',
  'LBL_SHOW_MORE_SIGNATURES' => 'Více podpisů...',
  'LBL_SIGNATURE' => 'Podpis',
  'LBL_SIGNATURE_PREPEND' => 'Podpis nad odpovědí?',
  'LBL_SMTP_SERVER_HELP' => 'Tento SMTP server může být použit pro odchozí poštu.',
  'LBL_STATUS' => 'Stav e-malu:',
  'LBL_SUBJECT' => 'Předmět:',
  'LBL_TAKE_ONE_TITLE' => 'Reps',
  'LBL_TEST_EMAIL_BODY' => 'Tento e-mail byl zaslán, aby otestoval nastavení serveru odchozí pošty v aplikaci SugarCRM. Úspěšné přijetí tohoto e-mailu znamená, že server odchozí pošty je nastaven správně.',
  'LBL_TEST_EMAIL_SUBJECT' => 'Testovací e-mail z SugarCRM',
  'LBL_TEST_SETTINGS' => 'Test nastavení',
  'LBL_TEXT_BODY' => 'Tělo textu',
  'LBL_TIME' => 'Čas odeslání:',
  'LBL_TITLE_SEARCH_RESULTS' => 'Výsledky hledání',
  'LBL_TO' => 'Pro:',
  'LBL_TOGGLE_ALL' => 'Přepnout vše',
  'LBL_TO_ADDRS' => 'Příjemce',
  'LBL_TYPE' => 'Typ:',
  'LBL_UNKNOWN' => 'Neznámé',
  'LBL_UNREAD' => 'Nepřečteno',
  'LBL_UNREAD_HOME' => 'Nepřečtené emaily',
  'LBL_UPLOAD_ATTACHMENT' => 'Nahrát novou',
  'LBL_USE' => 'Přiřazeno:',
  'LBL_USERS' => 'Uživatelé',
  'LBL_USERS_SUBPANEL_TITLE' => 'Uživatelé',
  'LBL_USER_SELECT' => 'Vybrat uživatele',
  'LBL_USE_ALL' => 'Všchny výsledky hledání',
  'LBL_USE_CHECKED' => 'Jenom zaškrtnuté',
  'LBL_USE_MAILBOX_INFO' => 'Použij mailbox od: adresa',
  'LBL_USE_TEMPLATE' => 'Použít vzor:',
  'LBL_USING_RULES' => 'Používá pravidla:',
  'LBL_WAIT' => 'Čekat',
  'LBL_WARN_NO_DIST' => 'Žádná distribuční metoda nebyla vybrána',
  'LBL_WARN_NO_USERS' => 'Nejsou vybráni žádní uživatelé',
  'LBL_WARN_NO_USERS_OR_TEAM' => 'Prosím vyberte uživatele nebo tým pro přiřazení.',
  'LBL_YAHOOMAIL_SMTPPASS' => 'Yahoo! Mail heslo:',
  'LBL_YAHOOMAIL_SMTPUSER' => 'Yahoo! Mail ID:',
  'LBL_YAHOO_MAIL' => 'Yahoo',
  'LNK_ALL_EMAIL_LIST' => 'Seznam všech emailů',
  'LNK_ARCHIVED_EMAIL_LIST' => 'Seznam archivovaných emailů',
  'LNK_CALL_LIST' => 'Hovory',
  'LNK_CHECK_MY_INBOX' => 'Zkontrolovat moji poštu',
  'LNK_DATE_SENT' => 'Datum odeslání',
  'LNK_DRAFTS_EMAIL_LIST' => 'Vzor',
  'LNK_EMAIL_LIST' => 'Pošta',
  'LNK_EMAIL_TEMPLATE_LIST' => 'Šablony e-mailů',
  'LNK_GROUP_INBOX' => 'Skupinová doručená pošta',
  'LNK_MEETING_LIST' => 'Schůzky',
  'LNK_MY_ARCHIVED_LIST' => 'Moje archivy',
  'LNK_MY_DRAFTS' => 'Moje koncepty',
  'LNK_MY_INBOX' => 'Moje doručená pošta',
  'LNK_NEW_ARCHIVE_EMAIL' => 'Přidat nový email',
  'LNK_NEW_CALL' => 'Naplánovat hovor',
  'LNK_NEW_EMAIL' => 'Archivovat zprávu',
  'LNK_NEW_EMAIL_TEMPLATE' => 'Přidat vzor e-mailu',
  'LNK_NEW_MEETING' => 'Naplánovat schůzku',
  'LNK_NEW_NOTE' => 'Přidat poznámku nebo přílohu',
  'LNK_NEW_SEND_EMAIL' => 'Nová zpráva',
  'LNK_NEW_TASK' => 'Přidat úkol',
  'LNK_NOTE_LIST' => 'Poznámky',
  'LNK_QUICK_REPLY' => 'Odpovědět',
  'LNK_SENT_EMAIL_LIST' => 'Seznam odeslaných e-mailů',
  'LNK_TASK_LIST' => 'Úkoly',
  'LNK_VIEW_CALENDAR' => 'Dnes',
  'LNK_VIEW_MY_INBOX' => 'Zobrazit mé e-maily',
  'NTC_REMOVE_INVITEE' => 'Opravdu si přejete odstranit pozvánku z e-mailu?',
  'WARNING_NO_UPLOAD_DIR' => 'Přílohy mohou selhat: Hodnota /\\"upload_tmp_dir/\\" nebyla nalezena. Prosím opravte to v souboru php.ini.',
  'WARNING_SETTINGS_NOT_CONF' => 'Varování: vaše nastavení e-mailu není pro odeslání správně nastaveno.',
  'WARNING_UPLOAD_DIR_NOT_WRITABLE' => 'Přílohy mohou selhat: Byla zjištěna neplatná nebo nepoužitelná hodnota /\\"upload_tmp_dir/\\". Prosím opravte to v souboru php.ini.',
);
