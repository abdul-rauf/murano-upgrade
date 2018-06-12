<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
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
 
$mod_strings = array (
	'LBL_MODULE_NAME' => 'Kalender',
	'LBL_MODULE_NAME_SINGULAR' => 'Kalender',
	'LBL_MODULE_TITLE' => 'Kalender',
	'LNK_NEW_CALL' => 'Schemalägg telefonsamtal',
	'LNK_NEW_MEETING' => 'Schemalägg möte',
	'LNK_NEW_APPOINTMENT' => 'Skapa aktivitet',
	'LNK_NEW_TASK' => 'Skapa uppgift',
	'LNK_CALL_LIST' => 'Telefonsamtal',
	'LNK_MEETING_LIST' => 'Möten',
	'LNK_TASK_LIST' => 'Uppgifter',
	'LNK_VIEW_CALENDAR' => 'Idag',
	'LNK_IMPORT_CALLS' => 'Importera telefonsamtal',
	'LNK_IMPORT_MEETINGS' => 'Importera möten',
	'LNK_IMPORT_TASKS' => 'Importera uppgifter',
	'LBL_MONTH' => 'Månad',
	'LBL_DAY' => 'Dag',
	'LBL_YEAR' => 'År',
	'LBL_WEEK' => 'Vecka',
	'LBL_PREVIOUS_MONTH' => 'Föregående månad',
	'LBL_PREVIOUS_DAY' => 'Föregående dag',
	'LBL_PREVIOUS_YEAR' => 'Föregående år',
	'LBL_PREVIOUS_WEEK' => 'Föregående vecka',
	'LBL_NEXT_MONTH' => 'Nästa månad',
	'LBL_NEXT_DAY' => 'Nästa dag',
	'LBL_NEXT_YEAR' => 'Nästa år',
	'LBL_NEXT_WEEK' => 'Nästa vecka',
	'LBL_AM' => 'AM',
	'LBL_PM' => 'PM',
	'LBL_SCHEDULED' => 'Schemalagd',
	'LBL_BUSY' => 'Upptagen',
	'LBL_CONFLICT' => 'Konflikt',
	'LBL_USER_CALENDARS' => 'Användar kalendrar',
	'LBL_SHARED' => 'Delad',
	'LBL_PREVIOUS_SHARED' => 'Föregående',
	'LBL_NEXT_SHARED' => 'Nästa',
	'LBL_SHARED_CAL_TITLE' => 'Delade kalendrar',
	'LBL_USERS' => 'Användare',
	'LBL_REFRESH' => 'Uppdatera',
	'LBL_EDIT_USERLIST' => 'Användarlista',
	'LBL_SELECT_USERS' => 'Välj använder för att visa i kalendern',
	'LBL_FILTER_BY_TEAM' => 'Filtrera användarlistan efter team:',
	'LBL_ASSIGNED_TO_NAME' => 'Tilldelad till',
	'LBL_DATE' => 'Startdatum & tid',  
	'LBL_CREATE_MEETING' => 'Schemalägg möte',
	'LBL_CREATE_CALL' => 'Schemalägg telefonsamtal',
	'LBL_HOURS_ABBREV' => 'h',
	'LBL_MINS_ABBREV' => 'm',


	'LBL_YES' => 'Ja',
	'LBL_NO' => 'Nej',
	'LBL_SETTINGS' => 'Inställningar',
	'LBL_CREATE_NEW_RECORD' => 'Skapa aktivitet',
    'LBL_CREATE_NEW_CALL' => 'Skapa samtal',
    'LBL_CREATING_NEW_ACTIVITY' => 'Du skapar ett nytt möte. Ville du <a href="javascript:void(0);" data-action="create-task">Skapa en Uppgift</a> eller <a href="javascript:void(0);" data-action="schedule-call">Schemalägga samtal</a>',
	'LBL_LOADING' => 'Laddar...',
	'LBL_SAVING' => 'Sparar ...',
	'LBL_SENDING_INVITES' => 'Sparar & Skickar Inbjudningar ...',
	'LBL_CONFIRM_REMOVE' => 'Är du säker på att du vill radera protokollet?',
	'LBL_CONFIRM_REMOVE_ALL_RECURRING' => 'Är du säker på att du vill radera alla upprepade protokoll?',
	'LBL_EDIT_RECORD' => 'Redigera Aktivitet',
    'LBL_EDIT_CALL' => 'Redigera Samtal',
	'LBL_ERROR_SAVING' => 'Fel under sparning',
    'LBL_NO_ACCESS' => 'Du har inte tillgång',
	'LBL_ERROR_LOADING' => 'Fel under laddning',
	'LBL_GOTO_DATE' => 'Gå till Datum',
	'NOTICE_DURATION_TIME' => 'Varaktighetstiden måste vara större än 0',
	'LBL_STYLE_BASIC' => 'Grundläggande',
	'LBL_STYLE_ADVANCED' => 'Avancerad',

	'LBL_INFO_TITLE' => 'Ytterligare detaljer',
	'LBL_INFO_DESC' => 'Beskrivning',
	'LBL_INFO_START_DT' => 'Startdatum:',
	'LBL_INFO_DUE_DT' => 'Genomförandedatum',
	'LBL_INFO_DURATION' => 'Varaktighet',
	'LBL_INFO_NAME' => 'Ämne',
	'LBL_INFO_RELATED_TO' => 'Relaterad till',

	'LBL_NO_USER' => 'Ingen träff för fält: Tilldelad till',
	'LBL_SUBJECT' => 'Ämne',
	'LBL_DURATION' => 'Varaktighet',
	'LBL_STATUS' => 'Status',
	'LBL_DATE_TIME' => 'Startdatum & tid',


	'LBL_SETTINGS_TITLE' => 'Inställningar',
	'LBL_SETTINGS_DISPLAY_TIMESLOTS' => 'Visa tidfält i Dag och Vecko vyer:',
	'LBL_SETTINGS_TIME_STARTS'=>'Starttid:', 
	'LBL_SETTINGS_TIME_ENDS'=>'Sluttid:', 
	'LBL_SETTINGS_CALLS_SHOW' => 'Visa Samtal:',
	'LBL_SETTINGS_TASKS_SHOW' => 'Visa Arbetsuppgifter:', 

	'LBL_SAVE_BUTTON' => 'Spara',
	'LBL_DELETE_BUTTON' => 'Radera',
	'LBL_APPLY_BUTTON' => 'Lägg till',
	'LBL_SEND_INVITES' => 'Spara & Skicka inbjudningar',
	'LBL_CANCEL_BUTTON' => 'Avbryt',
	'LBL_CLOSE_BUTTON' => 'Stäng',

	'LBL_GENERAL_TAB' => 'Detaljer',
	'LBL_PARTICIPANTS_TAB' => 'Inbjudna',
	'LBL_REPEAT_TAB' => 'Upprepning',	
	
	'LBL_REPEAT_TYPE' => 'Repetera',
	'LBL_REPEAT_INTERVAL' => 'Varje',
	'LBL_REPEAT_END' => 'Slut',	
	'LBL_REPEAT_END_AFTER' => 'Efter',
	'LBL_REPEAT_OCCURRENCES' => 'upprepning',
	'LBL_REPEAT_END_BY' => 'Av',	
	'LBL_REPEAT_DOW' => 'På',	
	'LBL_REPEAT_UNTIL' => 'Repetera Ända Till',
	'LBL_REPEAT_COUNT' => 'Antal upprepningar',
	'LBL_RECURRING_LIMIT_ERROR' => 'Det här upprepade mötet $moduleTitle kan inte schemaläggas för det överskirder maximalt antal tillåtna upprepningar av $limit.',
	
	'LBL_EDIT_ALL_RECURRENCES' => 'Redigera Alla Upprepningar',
	'LBL_REMOVE_ALL_RECURRENCES' => 'Radera Alla Upprepningar',

	'LBL_DATE_END_ERROR' => 'Slutdatum är före startdatum',
	'ERR_YEAR_BETWEEN' => 'Tyvärr, kalender kan inte hantera det år du begärde<br />År måste vara mellan 1970 och 2037',
	'ERR_NEIGHBOR_DATE' => 'få_granne_datum_str: har inte angetts för den här vyn',

    'LBL_CALENDAR_EVENT_LIMIT_EXCEEDED' => "Återkommande {0} händelse har överskridit gränsen",
    'LBL_CALENDAR_EVENT_NOT_A_RECURRING_EVENT' => "{0} är inte ett återkommande event",
    'LBL_CALENDAR_EVENT_NOT_A_PARENT_OCCURRENCE' => "{0} är inte en föräldrahändelse",
    'LBL_CALENDAR_EVENT_RECURRENCE_MODULE_NOT_SUPPORTED' => "{0} känns inte igen som en återkommande händelsemodul",

);

$mod_list_strings = array(
	'dom_cal_weekdays'=>
		array(
			"Sun",
			"Mon",
			"Tue",
			"Wed",
			"Thu",
			"Fri",
			"Sat",
		),
	'dom_cal_weekdays_long'=>
		array(
			"Sunday",
			"Monday",
			"Tuesday",
			"Wednesday",
			"Thursday",
			"Friday",
			"Saturday",
		),
	'dom_cal_month'=>
		array(
			"",
			"Jan",
			"Feb",
			"Mar",
			"Apr",
			"May",
			"Jun",
			"Jul",
			"Aug",
			"Sep",
			"Oct",
			"Nov",
			"Dec",
		),
	'dom_cal_month_long'=>
		array(
			"",
			"January",
			"February",
			"March",
			"April",
			"May",
			"June",
			"July",
			"August",
			"September",
			"October",
			"November",
			"December",
		),
);
