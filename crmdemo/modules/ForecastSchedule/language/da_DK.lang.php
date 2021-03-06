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
  'ERR_FORECAST_AMOUNT' => 'Forpligt beløb er obligatorisk og skal være et tal.',
  'LBL_COMMIT_HEADER' => 'Foreløbig Forpligt',
  'LBL_COMMIT_MESSAGE' => 'Vil du forpligte disse beløb?',
  'LBL_COMMIT_NOTE' => 'Indtast beløb, som du vil forpligte i den valgte periode:',
  'LBL_CREATED_BY' => 'Oprettet af',
  'LBL_CURRENCY' => 'Valuta',
  'LBL_CURRENCY_RATE' => 'Valuta kurs',
  'LBL_DATE_COMMITTED' => 'Forpligtet den',
  'LBL_DATE_ENTERED' => 'Oprettet den',
  'LBL_DATE_MODIFIED' => 'Ændret den',
  'LBL_DELETED' => 'Slettet',
  'LBL_DV_FORECAST_OPPORTUNITY' => 'Foreløbige salgsmuligheder',
  'LBL_DV_FORECAST_PERIOD' => 'Foreløbig tidsperiode',
  'LBL_DV_FORECAST_ROLLUP' => 'Foreløbig Opløft',
  'LBL_DV_HEADER' => 'Prognose: Regneark',
  'LBL_DV_LAST_COMMIT_AMOUNT' => 'Seneste Forpligt beløb:',
  'LBL_DV_LAST_COMMIT_DATE' => 'Seneste Forpligt dato:',
  'LBL_DV_MY_FORECASTS' => 'Mine prognoser',
  'LBL_DV_MY_TEAM' => 'Mit teams prognoser',
  'LBL_DV_TIMEPERIOD' => 'Tidsperiode:',
  'LBL_DV_TIMEPERIODS' => 'Tidsperioder:',
  'LBL_DV_TIMPERIOD_DATES' => 'Datointerval:',
  'LBL_EDIT_LAYOUT' => 'Rediger layout',
  'LBL_EXPECTED_AMOUNT' => 'Forventet antal',
  'LBL_EXPECTED_BEST_CASE' => 'Forventet bedste tilbud',
  'LBL_EXPECTED_LIKELY_CASE' => 'Forventet mest sandsynlig tilbud',
  'LBL_EXPECTED_OPPORTUNITIES' => 'Forventede Opportunities',
  'LBL_EXPECTED_WORST_CASE' => 'Forventet værst tænkelige',
  'LBL_FC_START_DATE' => 'Startdato',
  'LBL_FC_USER' => 'Tidsplan for',
  'LBL_FDR_ADJ_AMOUNT' => 'Justeret beløb',
  'LBL_FDR_COMMIT' => 'Forpligtet beløb',
  'LBL_FDR_DATE_COMMIT' => 'Forpligt dato',
  'LBL_FDR_OPPORTUNITIES' => 'Salgsmuligheder i prognose:',
  'LBL_FDR_USER_NAME' => 'Direkte rapport',
  'LBL_FDR_WEIGH' => 'Vægtet beløb af salgsmuligheder:',
  'LBL_FORECAST_HISTORY' => 'Prognoser: Historik',
  'LBL_FORECAST_HISTORY_TITLE' => 'Prognoser: Historik',
  'LBL_FORECAST_ID' => 'Id',
  'LBL_FORECAST_OPP_COMMIT' => 'Sandsynlig',
  'LBL_FORECAST_OPP_COUNT' => 'Salgsmuligheder',
  'LBL_FORECAST_OPP_WEIGH' => 'Vægtet beløb',
  'LBL_FORECAST_TIME_ID' => 'Tidsperiode-id',
  'LBL_FORECAST_TYPE' => 'Foreløbig type',
  'LBL_FORECAST_USER' => 'Bruger',
  'LBL_FS_CASCADE' => 'Overlappet?',
  'LBL_FS_CREATED_BY' => 'Oprettet af',
  'LBL_FS_DATE_ENTERED' => 'Oprettet den',
  'LBL_FS_DATE_MODIFIED' => 'Ændret den',
  'LBL_FS_DELETED' => 'Slettet',
  'LBL_FS_END_DATE' => 'Slutdato',
  'LBL_FS_FORECAST_FOR' => 'Tidsplan for:',
  'LBL_FS_FORECAST_START_DATE' => 'Foreløbig startdato',
  'LBL_FS_MODULE_NAME' => 'Foreløbig tidsplan',
  'LBL_FS_START_DATE' => 'Startdato',
  'LBL_FS_STATUS' => 'Status',
  'LBL_FS_TIMEPERIOD' => 'Tidsperiode',
  'LBL_FS_TIMEPERIOD_ID' => 'Tidsperiode-id',
  'LBL_FS_USER_ID' => 'Bruger-id',
  'LBL_INCLUDE_EXPECTED' => 'Inkluderer det forventetede',
  'LBL_LIST_FORM_TITLE' => 'Forpligtede prognoser',
  'LBL_LV_COMMIT' => 'Forpligtet beløb',
  'LBL_LV_COMMIT_DATE' => 'Forpligtet den',
  'LBL_LV_OPPORTUNITIES' => 'Salgsmuligheder',
  'LBL_LV_TIMPERIOD' => 'Tidsperiode',
  'LBL_LV_TIMPERIOD_END_DATE' => 'Slutdato',
  'LBL_LV_TIMPERIOD_START_DATE' => 'Startdato',
  'LBL_LV_TYPE' => 'Foreløbig type',
  'LBL_LV_WEIGH' => 'Vægtet beløb',
  'LBL_MODULE_NAME' => 'Prognoser',
  'LBL_MODULE_NAME_SINGULAR' => 'Prognose',
  'LBL_MODULE_TITLE' => 'Prognoser',
  'LBL_NO_ACTIVE_TIMEPERIOD' => 'Ingen aktive perioder til prognoser.',
  'LBL_OW_ACCOUNTNAME' => 'Virksomhed',
  'LBL_OW_DESCRIPTION' => 'Beskrivelse',
  'LBL_OW_MODULE_TITLE' => 'Salgsmulighedsregneark',
  'LBL_OW_NEXT_STEP' => 'Næste trin',
  'LBL_OW_OPPORTUNITIES' => 'Salgsmulighed',
  'LBL_OW_PROBABILITY' => 'Sandsynlighed',
  'LBL_OW_REVENUE' => 'Beløb',
  'LBL_OW_TYPE' => 'Type',
  'LBL_OW_WEIGHTED' => 'Vægtet beløb',
  'LBL_QC_COMMIT_BUTTON' => 'Forpligt',
  'LBL_QC_COMMIT_VALUE' => 'Forpligt beløb:',
  'LBL_QC_DIRECT_FORECAST' => 'Min direkte prognose:',
  'LBL_QC_HEADER_DELIM' => 'Til',
  'LBL_QC_LAST_COMMIT_VALUE' => 'Seneste Forpligt beløb:',
  'LBL_QC_LAST_DATE_COMMITTED' => 'Seneste Forpligt dato:',
  'LBL_QC_OPPORTUNITY_COUNT' => 'Antal salgsmuligheder:',
  'LBL_QC_ROLLUP_FORECAST' => 'Min gruppeprognose:',
  'LBL_QC_ROLL_COMMIT_VALUE' => 'Opløft Forpligt beløb:',
  'LBL_QC_TIME_PERIOD' => 'Tidsperiode:',
  'LBL_QC_UPCOMING_FORECASTS' => 'Mine prognoser',
  'LBL_QC_WEIGHT_VALUE' => 'Vægtet beløb:',
  'LBL_QC_WORKSHEET_BUTTON' => 'Regneark',
  'LBL_REPORTS_TO_USER_NAME' => 'Rapporterer til',
  'LBL_RESET_CHECK' => 'Alle regnearksdata for den valgte periode og den bruger, der er logget på, fjernes. Vil du fortsætte?',
  'LBL_RESET_WOKSHEET' => 'Nulstil regneark',
  'LBL_SAVE_WOKSHEET' => 'Gem regneark',
  'LBL_SEARCH' => 'Vælg',
  'LBL_SEARCH_LABEL' => 'Vælg',
  'LBL_SVFS_CASCADE' => 'Vil du udbrede oplysningerne til rapporter?',
  'LBL_SVFS_FORECASTDATE' => 'Planlæg startdato',
  'LBL_SVFS_HEADER' => 'Foreløbig tidsplan:',
  'LBL_SVFS_STATUS' => 'Status',
  'LBL_SVFS_USER' => 'For',
  'LBL_TIMEPERIOD_NAME' => 'Tidsperiode',
  'LBL_USER_NAME' => 'Brugernavn',
  'LB_FS_KEY' => 'Id',
  'LNK_FORECAST_LIST' => 'Foreløbig historik',
  'LNK_NEW_OPPORTUNITY' => 'Opret salgsmulighed',
  'LNK_NEW_TIMEPERIOD' => 'Opret tidsperiode',
  'LNK_QUOTA' => 'Kvoter',
  'LNK_TIMEPERIOD_LIST' => 'Tidsperioder',
  'LNK_UPD_FORECAST' => 'Foreløbigt regneark',
);

