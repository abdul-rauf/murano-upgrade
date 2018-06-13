<?php
/*
 * Your installation or use of this SugarCRM file is subject to the applicable
 * terms available at
 * http://support.sugarcrm.com/Resources/Master_Subscription_Agreements/.
 * If you do not agree to all of the applicable terms or do not have the
 * authority to bind the entity as an authorized representative, then do not
 * install or use this SugarCRM file.
 *
 * Copyright (C) SugarCRM Inc. All rights reserved.
 */
/*********************************************************************************

 * Description:  TODO: To be written.
 * Portions created by SugarCRM are Copyright (C) SugarCRM, Inc.
 * All Rights Reserved.
 * Contributor(s): ______________________________________..
 ********************************************************************************/

$mod_strings = array(

	'LBL_ASSIGN_TEAM'		=> 'Tilldela till team',

	'LBL_RE'					=> 'RE:',

	'ERR_BAD_LOGIN_PASSWORD'=> 'Felaktigt användarnamn eller lösenord',
	'ERR_BODY_TOO_LONG'		=> '\\rMeddelandetexten för lång för att kunna spara hela meddelandet.  Har trimmats',
	'ERR_INI_ZLIB'			=> 'Kunde inte stänga av Zlib kompressionen temporärt. "Testa inställningar" kan misslyckas.',
	'ERR_MAILBOX_FAIL'		=> 'Kunde inte hämta några emailkonton.',
	'ERR_NO_IMAP'			=> 'Inga IMAP-bibliotek hittades. Var god lös detta innan du fortsätter med inkommande email',
	'ERR_NO_OPTS_SAVED'		=> 'Inga optimum sparades med ditt inkommande mailkonto. Vänligen gå igenom inställningarna',
	'ERR_TEST_MAILBOX'		=> 'Var god kontrollera dina inställningar och försök igen.',
    'ERR_DELETE_FOLDER' => 'Det gick inte att ta bort mappen.',
    'ERR_UNSUBSCRIBE_FROM_FOLDER' => 'Det gick inte att avsluta prenumerationen på mappen innan radering.',

	'LBL_APPLY_OPTIMUMS'	=> 'Ange optimums',
	'LBL_ASSIGN_TO_USER'	=> 'Tilldela till användare',
	'LBL_AUTOREPLY_OPTIONS'	=> 'Auto-svar alternativ',
	'LBL_AUTOREPLY'			=> 'Auto-svar mall',
	'LBL_AUTOREPLY_HELP'	=> 'Välj ett automatiserat svar för att meddela avsändaren att deras svar mottagits.',
	'LBL_BASIC'				=> 'Enkla inställningar',
	'LBL_CASE_MACRO'		=> 'Ärende macro',
	'LBL_CASE_MACRO_DESC'	=> 'Välj makro för att länka importerade email till ärenden.',
	'LBL_CASE_MACRO_DESC2'	=> 'Sätt detta till ett värde, men bevara <b>"%1"</b>.',
	'LBL_CERT_DESC'			=> 'Tvingande validering av mail serverns Säkerhetscertifikat - använd inte self-signing.',
	'LBL_CERT'				=> 'Validera certifikat',
	'LBL_CLOSE_POPUP'		=> 'Stäng fönster',
	'LBL_CREATE_NEW_GROUP'	=> '--Skapa grupp vid spara--',
	'LBL_CREATE_TEMPLATE'	=> 'Skapa',
	'LBL_SUBSCRIBE_FOLDERS'	=> 'Subscribe-mappar',
	'LBL_DEFAULT_FROM_ADDR'	=> 'Standard:',
	'LBL_DEFAULT_FROM_NAME'	=> 'Standard:',
	'LBL_DELETE_SEEN'		=> 'Radera lästa email efter import',
	'LBL_EDIT_TEMPLATE'		=> 'Redigera',
	'LBL_EMAIL_OPTIONS'		=> 'Alternativ för emailhantering',
	'LBL_EMAIL_BOUNCE_OPTIONS' => 'Studs hanterings operationer',
	'LBL_FILTER_DOMAIN_DESC'=> 'Skicka inte auto-svar till den här domänen.',
	'LBL_ASSIGN_TO_GROUP_FOLDER_DESC'=> 'Tilldela ett mailkonto till gruppmappen aktiverar automatisk import av emails.',
	'LBL_POSSIBLE_ACTION_DESC'		=> 'För Skapa Case-valet, måste en gruppmapp vara vald',
	'LBL_FILTER_DOMAIN'		=> 'Inget auto-svar till domänen',
	'LBL_FIND_OPTIMUM_KEY'	=> 'f',
	'LBL_FIND_OPTIMUM_MSG'	=> '<br>Letar efter optimum connection variabler.',
	'LBL_FIND_OPTIMUM_TITLE'=> 'Hitta optimum konfiguration',
	'LBL_FIND_SSL_WARN'		=> '<br>Testning av SSL kan ta lång tid. Var god vänta.<br>',
	'LBL_FORCE_DESC'		=> 'Några IMAP/POP3 servrar kräver speciella switchar. Kontrollera för att tvinga en negativ switch vid uppkoppling (ex. /notis)',
	'LBL_FORCE'				=> 'Tvinga negativ',
	'LBL_FOUND_MAILBOXES'	=> 'Hittade följande användbara katalog.<br>Klicka för att välja en:',
	'LBL_FOUND_OPTIMUM_MSG'	=> '<br>Hittade optimala inställingar.  Klicka på knappen nedan för att använda dem på ditt mailkonto.',
	'LBL_FROM_ADDR'			=> '"Avsändar" adress',
    // as long as XTemplate doesn't support output escaping, transform
    // quotes to html-entities right here (bug #48913)
    'LBL_FROM_ADDR_DESC'    => "Den här Emailadressen kommer eventuellt inte synas i mailets &quot;Från&quot;-fält när det skickats på grund av restriktioner från mailleverantören. I såna fall kommer mailadressen från den utgående mailservern att användas.",
	'LBL_FROM_NAME_ADDR'	=> 'Avsändare/Mailadress',
	'LBL_FROM_NAME'			=> '"Avsändar" namn',
	'LBL_GROUP_QUEUE'		=> 'Tilldela till grupp',
    'LBL_HOME'              => 'Hem',
	'LBL_LIST_MAILBOX_TYPE'	=> 'Användning av mailkonto',
	'LBL_LIST_NAME'			=> 'Namn:',
	'LBL_LIST_GLOBAL_PERSONAL'			=> 'Grupp/Personlig',
	'LBL_LIST_SERVER_URL'	=> 'Mailserver',
	'LBL_LIST_STATUS'		=> 'Status:',
	'LBL_LOGIN'				=> 'Användarnamn',
	'LBL_MAILBOX_DEFAULT'	=> 'INKORG',
	'LBL_MAILBOX_SSL_DESC'	=> 'Använd SSL vid kommunikation. Om detta inte fungerar kontrollera din PHP installation inkluderad "--With-imap-ssl" i konfigurationen.',
	'LBL_MAILBOX_SSL'		=> 'Använd SSL',
	'LBL_MAILBOX_TYPE'		=> 'Möjliga åtgärder',
	'LBL_DISTRIBUTION_METHOD' => 'Distibutionsmetod',
	'LBL_CREATE_CASE_REPLY_TEMPLATE' => 'Skapa ett Case Svar Template',
	'LBL_CREATE_CASE_REPLY_TEMPLATE_HELP' => 'Välj ett automatsvar för att meddela avsändaren att ett ärende skapats. Mailet kommer att innehålla ärendenummer i ämnesraden som följer inställningen för ärendemakro. Svaret skickas bara för det första mailet som mottas.',
	'LBL_MAILBOX'			=> 'Övervakad katalog',
	'LBL_TRASH_FOLDER'		=> 'Papperskorgsmapp',
	'LBL_GET_TRASH_FOLDER'	=> 'Hämta Papperskorgsmapp',
	'LBL_SENT_FOLDER'		=> 'Skickatmapp',
	'LBL_GET_SENT_FOLDER'	=> 'Hämta Skickatmapp',
	'LBL_SELECT'				=> 'Merkera',
	'LBL_MARK_READ_DESC'	=> 'Markera meddelanden som lästa på mailservern vid import; radera inte.',
	'LBL_MARK_READ_NO'		=> 'Email markerade som raderade efter import',
	'LBL_MARK_READ_YES'		=> 'Email lämnade på server efter import',
	'LBL_MARK_READ'			=> 'Lämna meddelanden på servern',
	'LBL_MAX_AUTO_REPLIES'	=> 'Antal auto-svar',
	'LBL_MAX_AUTO_REPLIES_DESC'	=> 'Sätt maximalt antal auto-svar som skickas till en unik adress under en period om 24 timmar.',
	'LBL_PERSONAL_MODULE_NAME' => 'Personligt emailkonto',
	'LBL_PERSONAL_MODULE_NAME_SINGULAR' => 'Personligt emailkonto',
	'LBL_CREATE_CASE'      => 'Skapa ärende från email',
	'LBL_CREATE_CASE_HELP'  => 'Välj för att automatiskt skapa ärendeposter i Sugar från inkommande email.',
	'LBL_MODULE_NAME'		=> 'Inställningar för inkommande mail',
	'LBL_MODULE_NAME_SINGULAR' => 'Inkommande mail',
	'LBL_BOUNCE_MODULE_NAME' => 'Brevlåda för studsade mail',
	'LBL_MODULE_TITLE'		=> 'Inkommande mail',
	'LBL_NAME'				=> 'Namn',
    'LBL_NONE'              => 'Ingen',
	'LBL_NO_OPTIMUMS'		=> 'Kunde inte hitta optimums. Vänligen kontrollera dina inställningar och försök igen.',
	'LBL_ONLY_SINCE_DESC'	=> 'Om du använder POP3, så kan inte PHP filtrera efter Nya/Olästa meddelanden.  Den här flaggan gör det möjligt för förfrågan att kontrollera efter nya meddelanden sedan kontot senast tömdes. Det här kommer att öka prestandan avsevärt om din mailserver inte stödjer IMAP.',
	'LBL_ONLY_SINCE_NO'		=> 'Nej. kontrollera mot alla email på mailservern.',
	'LBL_ONLY_SINCE_YES'	=> 'Ja.',
	'LBL_ONLY_SINCE'		=> 'Importera endast sedan senaste kontrollen:',
	'LBL_OUTBOUND_SERVER'	=> 'Utgående mailserver',
	'LBL_PASSWORD_CHECK'	=> 'Lösenordskontroll',
	'LBL_PASSWORD'			=> 'Lösenord',
	'LBL_POP3_SUCCESS'		=> 'Lyckat test av POP3 uppkopplingen.',
	'LBL_POPUP_FAILURE'		=> 'Test av uppkopplingen misslyckades. Felmeddelandet visas nedan.',
	'LBL_POPUP_SUCCESS'		=> 'Test av uppkopplingen lyckades. Dina inställningar fungerar.',
	'LBL_POPUP_TITLE'		=> 'Testa inställningarna',
	'LBL_GETTING_FOLDERS_LIST' 		=> 'Hämta mapplista',
	'LBL_SELECT_SUBSCRIBED_FOLDERS' 		=> 'Välj Subscribedmapp(ar)',
	'LBL_SELECT_TRASH_FOLDERS' 		=> 'Välj papperskorgsmapp',
	'LBL_SELECT_SENT_FOLDERS' 		=> 'Välj skickatmapp',
	'LBL_DELETED_FOLDERS_LIST' 		=> 'Följande mapp(ar) %s antingen finns inte eller har blivit borttagna från servern',
	'LBL_PORT'				=> 'Port för mailserver',
	'LBL_QUEUE'				=> 'Kö för mailkonton',
	'LBL_REPLY_NAME_ADDR'	=> 'Svarsnamn/email',
	'LBL_REPLY_TO_NAME'		=> '"Svara-till" namn',
	'LBL_REPLY_TO_ADDR'		=> '"Svara-till" adress',
	'LBL_SAME_AS_ABOVE'		=> 'Använd Från namn/adress',
	'LBL_SAVE_RAW'			=> 'Visa källkod',
	'LBL_SAVE_RAW_DESC_1'	=> 'Välj "Ja" om du vill bevara källkoden för varje importerat mail.',
	'LBL_SAVE_RAW_DESC_2'	=> 'Stora bilagor kan orsaka problem med konservativt eller felaktigt konfigurerade databaser.',
	'LBL_SERVER_OPTIONS'	=> 'Avancerade inställningar',
	'LBL_SERVER_TYPE'		=> 'Protokoll för mailserver',
	'LBL_SERVER_URL'		=> 'Adress till mailserver',
	'LBL_SSL_DESC'			=> 'Om din mailserver stödjer &#39;secure socket connections&#39; kommer detta alternativ tvinga systemet att använda SSL vid import av email.',
	'LBL_ASSIGN_TO_TEAM_DESC' => 'Välj teamet som har tillgång till mailkontot. Om en gruppmapp är markerad, så tar det tillägnade teamet över det valda teamet.',
	'LBL_SSL'				=> 'Använd SSL',
	'LBL_STATUS'			=> 'Status',
	'LBL_SYSTEM_DEFAULT'	=> 'Systemstandard',
	'LBL_TEST_BUTTON_KEY'	=> 't',
	'LBL_TEST_BUTTON_TITLE'	=> 'Test [Alt+T]',
	'LBL_TEST_SETTINGS'		=> 'Testa inställningar',
	'LBL_TEST_SUCCESSFUL'	=> 'Uppkopplingen slutfördes korrekt.',
	'LBL_TEST_WAIT_MESSAGE'	=> 'Ett ögonblick...',
	'LBL_TLS_DESC'			=> 'Använd Transport Layer Security när du kommunicerar med mailservern - använd endast detta om din mailserver hanterar detta protokoll.',
	'LBL_TLS'				=> 'Använd TLS',
	'LBL_WARN_IMAP_TITLE'	=> 'Inkommande email inaktiverad',
	'LBL_WARN_IMAP'			=> 'Varningar:',
	'LBL_WARN_NO_IMAP'		=> 'Inkommande email fungerar <b>inte</b> utan IMAP c-client biblioteken aktiverade/kompilerade med PHP modulen. Var god kontakta din administratör för att lösa problemet.',

	'LNK_CREATE_GROUP'		=> 'Skapa ny grupp',
	'LNK_LIST_CREATE_NEW_GROUP'	 => 'Nytt gruppmail-konto',
	'LNK_LIST_CREATE_NEW_BOUNCE' => 'Nytt konto för studsade meddelanden',
	'LNK_LIST_MAILBOXES'	=> 'Alla mailkonton',
	'LNK_LIST_QUEUES'		=> 'Alla köer',
	'LNK_LIST_SCHEDULER'	=> 'Schemaläggare',
	'LNK_LIST_TEST_IMPORT'	=> 'Testa emailimport',
	'LNK_NEW_QUEUES'		=> 'Skapa ny kö',
	'LNK_SEED_QUEUES'		=> 'Skicka köer från team',
	'LBL_GROUPFOLDER_ID'	=> 'Gruppkatalog Id',
	'LBL_ASSIGN_TO_GROUP_FOLDER' => 'Tilldela till gruppkatalog',
    'LBL_ALLOW_OUTBOUND_GROUP_USAGE' => 'Låt användare skicka mail med avsändarnamnet och adressen som &#39;svara till&#39;-adress',
    'LBL_ALLOW_OUTBOUND_GROUP_USAGE_DESC' => 'Om detta alternativ är valt, kommer avsändaradresss och namn associerat med gruppen att synas som alternativ för avsändare om användare med tillgång till gruppmailkontot skriver ett mail.',
    'LBL_STATUS_ACTIVE'     => 'Aktiv',
    'LBL_STATUS_INACTIVE'   => 'Inaktiv',
    'LBL_IS_PERSONAL' => 'personlig',
    'LBL_IS_GROUP' => 'grupp',
    'LBL_ENABLE_AUTO_IMPORT' => 'Importera email automatiskt',
    'LBL_WARNING_CHANGING_AUTO_IMPORT' => 'Varning: Du har ändrat dina automatiska import inställningar vilket kan resultera i förlust av data.',
    'LBL_WARNING_CHANGING_AUTO_IMPORT_WITH_CREATE_CASE' => 'Varning: Automatisk import måste tillåtas om automatiska ärenden ska skapas.',
	'LBL_EDIT_LAYOUT' => 'Redigera layout' /*for 508 compliance fix*/,
);
?>
