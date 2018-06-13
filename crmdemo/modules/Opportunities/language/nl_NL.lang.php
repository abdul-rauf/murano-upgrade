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

$mod_strings = array(
    // Dashboard Names
    'LBL_OPPORTUNITIES_LIST_DASHBOARD' => 'Dashboard opportunitylijst',
    'LBL_OPPORTUNITIES_RECORD_DASHBOARD' => 'Dashboard opportunityrecord',

    'LBL_MODULE_NAME' => 'Opportunities',
    'LBL_MODULE_NAME_SINGULAR' => 'Opportunity',
    'LBL_MODULE_TITLE' => 'Opportunities: Start',
    'LBL_SEARCH_FORM_TITLE' => 'Opportunity zoeken',
    'LBL_VIEW_FORM_TITLE' => 'Opportunity overzicht',
    'LBL_LIST_FORM_TITLE' => 'Opportunities',
    'LBL_OPPORTUNITY_NAME' => 'Opportunitynaam:',
    'LBL_OPPORTUNITY' => 'Opportunity:',
    'LBL_NAME' => 'Opportunitynaam',
    'LBL_INVITEE' => 'Personen',
    'LBL_CURRENCIES' => 'Valutas',
    'LBL_LIST_OPPORTUNITY_NAME' => 'Opportunity',
    'LBL_LIST_ACCOUNT_NAME' => 'Organisatienaam',
    'LBL_LIST_DATE_CLOSED' => 'Verwachte sluitingsdatum',
    'LBL_LIST_AMOUNT' => 'Meest waarschijnlijk',
    'LBL_LIST_AMOUNT_USDOLLAR' => 'Totaal Bedrag',
    'LBL_ACCOUNT_ID' => 'Organisatie ID',
    'LBL_CURRENCY_RATE' => 'Valutakoers',
    'LBL_CURRENCY_ID' => 'Valuta ID',
    'LBL_CURRENCY_NAME' => 'Valutanaam',
    'LBL_CURRENCY_SYMBOL' => 'Valuta symbool',
//DON'T CONVERT THESE THEY ARE MAPPINGS
    'db_sales_stage' => 'LBL_LIST_SALES_STAGE',
    'db_name' => 'LBL_NAME',
    'db_amount' => 'LBL_LIST_AMOUNT',
    'db_date_closed' => 'LBL_LIST_DATE_CLOSED',
//END DON'T CONVERT
    'UPDATE' => 'Opportunity - Valuta update',
    'UPDATE_DOLLARAMOUNTS' => 'Update U.S. Dollar bedragen',
    'UPDATE_VERIFY' => 'Controleer bedragen',
    'UPDATE_VERIFY_TXT' => 'Controleert of de bedragen in Opportunities geldige numerieke waarden bevatten met slechts numerieke karakters (0-9) en decimalen (.).',
    'UPDATE_FIX' => 'Herstel bedragen',
    'UPDATE_FIX_TXT' => 'Probeert ongeldige waarden te herstellen door hiervan een decimale waarde te maken. De originele waarden worden gebackup-ed in het database veld "amount_backup". Wanneer u deze functie gebruikt en u stuit op fouten, start de actie dan pas opnieuw nadat u de backup terug hebt gezet. Anders zal de backup overschreven kunnen worden met nieuwe ongeldige data.',
    'UPDATE_DOLLARAMOUNTS_TXT' => 'Update de U.S. Dollar bedragen voor Opportunities gebaseerd op de huidige set van wisselkoersen. Deze waarde wordt gebruikt voor de berekening van grafieken en de weergave in de List View.',
    'UPDATE_CREATE_CURRENCY' => 'Nieuwe valuta aanmaken:',
    'UPDATE_VERIFY_FAIL' => 'Controle van record mislukt:',
    'UPDATE_VERIFY_CURAMOUNT' => 'Huidig bedrag:',
    'UPDATE_VERIFY_FIX' => 'Na herstel wordt dit',
    'UPDATE_INCLUDE_CLOSE' => 'Inclusief gesloten records',
    'UPDATE_VERIFY_NEWAMOUNT' => 'Nieuw bedrag:',
    'UPDATE_VERIFY_NEWCURRENCY' => 'Nieuwe Valuta:',
    'UPDATE_DONE' => 'Gereed',
    'UPDATE_BUG_COUNT' => 'Fouten gevonden en geprobeerd op te lossen:',
    'UPDATE_BUGFOUND_COUNT' => 'Gevonden fouten:',
    'UPDATE_COUNT' => 'Bijgewerkte records:',
    'UPDATE_RESTORE_COUNT' => 'Records waarvan bedragen zijn teruggezet:',
    'UPDATE_RESTORE' => 'Bedragen terugzetten',
    'UPDATE_RESTORE_TXT' => 'Zet bedragen terug uit de backup die is gemaakt gedurende het herstel.',
    'UPDATE_FAIL' => 'Kon niet bijwerken -',
    'UPDATE_NULL_VALUE' => 'Bedrag is NULL, bezig met instellen op 0 -',
    'UPDATE_MERGE' => 'Valuta samenvoegen',
    'UPDATE_MERGE_TXT' => 'Voeg meerdere valuta samen tot een enkele valuta. Als er meerdere valuta records zijn voor dezelfde valuta, kunt u deze samenvoegen. Dit zal ook de valuta voor andere modules samenvoegen.',
    'LBL_ACCOUNT_NAME' => 'Organisatienaam:',
    'LBL_CURRENCY' => 'Valuta:',
    'LBL_DATE_CLOSED' => 'Verwachte afsluitdatum:',
    'LBL_DATE_CLOSED_TIMESTAMP' => 'Verwachte sluitingsdatum',
    'LBL_TYPE' => 'Type:',
    'LBL_CAMPAIGN' => 'Campagne:',
    'LBL_NEXT_STEP' => 'Volgende stap:',
    'LBL_LEAD_SOURCE' => 'Bron voor lead:',
    'LBL_SALES_STAGE' => 'Verkoopstadium:',
    'LBL_SALES_STATUS' => 'Status',
    'LBL_PROBABILITY' => 'Waarschijnlijkheid (%):',
    'LBL_DESCRIPTION' => 'Beschrijving:',
    'LBL_DUPLICATE' => 'Mogelijk dubbele Opportunity',
    'MSG_DUPLICATE' => 'Het opportunity record dat u nu wilt aanmaken zou een duplicaat kunnen zijn van een reeds bestaande opportunity. Opportunities die dezelfde namen hebben worden hieronder getoond.<br>Klik op Opslaan om door te gaan met het aanmaken van deze nieuwe opportunity, of klik op annuleren om terug te gaan naar de module zonder de opportunity aan te maken.',
    'LBL_NEW_FORM_TITLE' => 'Nieuwe Opportunity',
    'LNK_NEW_OPPORTUNITY' => 'Nieuwe Opportunity',
    'LNK_CREATE' => 'Maak nieuwe Deal',
    'LNK_OPPORTUNITY_LIST' => 'Bekijk Opportunities',
    'ERR_DELETE_RECORD' => 'U dient een recordnummer op te geven om deze opportunity te verwijderen.',
    'LBL_TOP_OPPORTUNITIES' => 'Mijn openstaande top Opportunities',
    'NTC_REMOVE_OPP_CONFIRMATION' => 'Weet u zeker dat u deze persoon wilt verwijderen bij deze Opportunity?',
    'OPPORTUNITY_REMOVE_PROJECT_CONFIRM' => 'Weet je zeker dat je deze Opportunity uit het project wilt verwijderen?',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Opportunities',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Activiteiten',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Geschiedenis',
    'LBL_RAW_AMOUNT' => 'Ruw Bedrag',
    'LBL_LEADS_SUBPANEL_TITLE' => 'Leads',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Personen',
    'LBL_DOCUMENTS_SUBPANEL_TITLE' => 'Documenten',
    'LBL_PROJECTS_SUBPANEL_TITLE' => 'Projecten',
    'LBL_ASSIGNED_TO_NAME' => 'Toegewezen aan:',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'Toegewezen aan',
    'LBL_LIST_SALES_STAGE' => 'Verkoopstadium',
    'LBL_MY_CLOSED_OPPORTUNITIES' => 'Mijn gewonnen Opportunities',
    'LBL_TOTAL_OPPORTUNITIES' => 'Totaal Opportunities',
    'LBL_CLOSED_WON_OPPORTUNITIES' => 'Gewonnen Opportunities',
    'LBL_ASSIGNED_TO_ID' => 'Toegewezen aan ID',
    'LBL_CREATED_ID' => 'Aangemaakt door ID',
    'LBL_MODIFIED_ID' => 'Gewijzigd door ID',
    'LBL_MODIFIED_NAME' => 'Gewijzigd door Gebruikersnaam',
    'LBL_CREATED_USER' => 'Aangemaakt door Gebruiker',
    'LBL_MODIFIED_USER' => 'Gewijzigd door Gebruiker',
    'LBL_CAMPAIGN_OPPORTUNITY' => 'Campagnes',
    'LBL_PROJECT_SUBPANEL_TITLE' => 'Projecten',
    'LABEL_PANEL_ASSIGNMENT' => 'Toewijzing',
    'LNK_IMPORT_OPPORTUNITIES' => 'Importeer Opportunities',
    'LBL_EDITLAYOUT' => 'Wijzig Lay-out' /*for 508 compliance fix*/,
    //For export labels
    'LBL_EXPORT_CAMPAIGN_ID' => 'Campagne ID',
    'LBL_OPPORTUNITY_TYPE' => 'Type opportunity',
    'LBL_EXPORT_ASSIGNED_USER_NAME' => 'Toegewezen aan',
    'LBL_EXPORT_ASSIGNED_USER_ID' => 'Toegewezen aan ID',
    'LBL_EXPORT_MODIFIED_USER_ID' => 'Gewijzigd door ID',
    'LBL_EXPORT_CREATED_BY' => 'Gemaakt door ID',
    'LBL_EXPORT_NAME' => 'Naam',
    // SNIP
    'LBL_CONTACT_HISTORY_SUBPANEL_TITLE' => 'E-mails van gerelateerde contactpersonen',
    'LBL_FILENAME' => 'Bijlage',
    'LBL_PRIMARY_QUOTE_ID' => 'Primaire Offerte',
    'LBL_CONTRACTS' => 'Contracten',
    'LBL_CONTRACTS_SUBPANEL_TITLE' => 'Contracten',
    'LBL_PRODUCTS' => 'Producten',
    'LBL_RLI' => 'Opportunityregel',
    'LNK_OPPORTUNITY_REPORTS' => 'Opportunity Rapporten',
    'LBL_QUOTES_SUBPANEL_TITLE' => 'Offertes',
    'LBL_TEAM_ID' => 'Team-ID',
    'LBL_TIMEPERIODS' => 'Periodes',
    'LBL_TIMEPERIOD_ID' => 'TimePeriod ID',
    'LBL_COMMITTED' => 'Toegewezen',
    'LBL_FORECAST' => 'Meenemen in de forecast',
    'LBL_COMMIT_STAGE' => 'Commit stadium',
    'LBL_COMMIT_STAGE_FORECAST' => 'Forecast',
    'LBL_WORKSHEET' => 'Werkblad',


    'LBL_QUOTE_SUBPANEL_TITLE' => 'Offertes',

    // Config
    'LBL_OPPS_CONFIG_VIEW_BY_LABEL' => 'Opportunity Hiërarchie',
    'LBL_OPPS_CONFIG_VIEW_BY_DATE_ROLLUP' => 'Vul de Verwachte afsluitdatum van de bovenliggende Opportunities met de eerste of laatste afsluitdatum van de onderliggende Revenue Line Items<br /><br />Set the Expected Close Date field on the resulting Opportunity records to be the earliest or latest close dates of the existing Revenue Line Items',

    //Dashlet
    'LBL_PIPELINE_TOTAL_IS' => 'Totaal in de pijplijn is',

    'LBL_OPPORTUNITY_ROLE'=>'Opportunity Rol',
    'LBL_NOTES_SUBPANEL_TITLE' => 'Notities',

    // Help Text
    'LBL_OPPS_CONFIG_ALERT' => 'Door op Bevestigen te klikken wist u ALLE Voorspellingen en wijzigt u uw Mogelijkhedenweergave. Als dit niet is wat u wilde klikt u op Annuleren om terug te keren naar de eerdere instellingen.',
    'LBL_OPPS_CONFIG_ALERT_TO_OPPS' =>
        'Door op Bevestigen te klikken, wist u ALLE voorspellingen en wijzigt u uw Opportunities weergave.'
        .'Ook ALLE procesdefinities met een doelmodule of omzetregels worden uitgeschakeld.'
        .'Als dit niet uw bedoeling is, klikt u op annuleren om terug te keren naar de vorige instellingen.',
    'LBL_OPPS_CONFIG_SALES_STAGE_1a' => 'Wanneer alle Revenue Line Items gesloten zijn en tenminste één is Gewonnen,',
    'LBL_OPPS_CONFIG_SALES_STAGE_1b' => 'dan zal de Opportunity Verkoopstadium op "Gewonnen" worden gezet.',
    'LBL_OPPS_CONFIG_SALES_STAGE_2a' => 'Wanneer alle Revenue Line Items het Verkoopstadium &#39;Verloren&#39; hebben,',
    'LBL_OPPS_CONFIG_SALES_STAGE_2b' => 'dan zal de Opportunity Verkoopstadium op "Verloren" worden gezet.',
    'LBL_OPPS_CONFIG_SALES_STAGE_3a' => 'Wanneer enkele Revenue Line Items nog open zijn,',
    'LBL_OPPS_CONFIG_SALES_STAGE_3b' => 'dan zal de Opportunity Verkoopstadium de laagste overnemen.',

// BEGIN PRO/CORP
    // List View Help Text
    'LBL_HELP_RECORDS' => 'In de module {{plural_module_name}} kunt u de individuele verkoop van begin tot eind volgen. Elk {{module_name}} record vertegenwoordigt een mogelijke verkoop en bevat relevante verkoopgegevens en andere belangrijke records zoals {{quotes_module}}, {{contacts_module}}, etc. Een {{module_name}} doorloopt doorgaans verscheidene verkoopfases tot deze wordt gemarkeerd als "Gesloten, gewonnen"of "Gesloten, verloren". {{plural_module_name}} kan nog verder worden uitgebouwd met de module {{forecasts_singular_module}} van Sugar om verkooptrends te begrijpen en voorspellen, en om het werk zo in te richten dat verkoopquota&#39;s worden behaald.',

    // Record View Help Text
    'LBL_HELP_RECORD' => 'Met de module {{plural_module_name}} kunt u de individuele verkoop en de regelitems die bij deze verkoop horen van begin tot eind volgen. Elk {{module_name}} record vertegenwoordigt een mogelijke verkoop en bevat relevante verkoopgegevens, evenals andere belangrijke records zoals {{quotes_module}}, {{contacts_module}}, etc.

- De velden van dit record bewerken door op een individueel veld te klikken of de knop Bewerken.
- Links naar andere records in de subpanelen bekijken of wijzigen door het paneel links onderin op "Gegevensweergave" te zetten.
- Opmerkingen maken, opmerkingen van gebruikers bekijken en de veranderingsgeschiedenis bewaren in de {{activitystream_singular_module}} door het paneel links onderin op "Activity Stream" te zetten.
- Dit record volgen of favoriet maken met de pictogrammen rechts van de naam van het record.
- Aanvullende handelingen zijn beschikbaar in het vervolgkeuzemenu Acties rechts van de knop Bewerken.',

    // Create View Help Text
    'LBL_HELP_CREATE' => 'Met de module {{plural_module_name}} kunt u individuele verkopen en de regels die tot deze verkopen horen van begin tot eind volgen. Elk {{module_name}} record vertegenwoordigt een mogelijke verkoop en omvat relevante verkoopgegevens, evenals gegevens met betrekking tot andere belangrijke records, zoals {{quotes_module}}, {{contacts_module}}, etc.

Een {{module_name}} aanmaken:
1. Voer de gewenste waarden voor de velden in.
 - Velden gemarkeerd als "verplicht" moeten zijn ingevuld voordat u opslaat.
 - Klik op "Meer tonen" om indien nodig extra velden te openen.
2. Klik op "Opslaan" om het nieuwe record af te ronden en terug te keren naar de vorige pagina.',

// END PRO/CORP

    //Marketo
    'LBL_MKTO_SYNC' => 'Synchroniseren naar Markto&reg;',
    'LBL_MKTO_ID' => 'Marketo Lead ID',

    'LBL_DASHLET_TOP10_SALES_OPPORTUNITIES_NAME' => 'Top 10 opportunities',
    'LBL_TOP10_OPPORTUNITIES_CHART_DESC' => 'Toont de top 10 Revenue Line Items in een &#39;bubble&#39; diagram.',
    'LBL_TOP10_OPPORTUNITIES_MY_OPP' => 'Mijn Opportunities',
    'LBL_TOP10_OPPORTUNITIES_MY_TEAMS_OPP' => "Mijn Team Opportunities",
);
