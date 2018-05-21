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
  'ERR_FORECAST_AMOUNT' => 'Το Ποσό Δέσμευσης είναι υποχρεωτικό, και πρέπει να είναι ένας αριθμός.',
  'LBL_AMOUNT' => 'Ποσό',
  'LBL_BASE_RATE' => 'Βασικό Επιτόκιο',
  'LBL_COMMIT_HEADER' => 'Πρόβλεψη Δέσμευσης',
  'LBL_COMMIT_MESSAGE' => 'Θέλετε να δεσμεύσετε αυτά τα ποσά;',
  'LBL_COMMIT_NOTE' => 'Εισάγετε τα ποσά που θα θέλατε να δεσμευτούν για την επιλεγμένη Χρονική Περίοδο:',
  'LBL_COMMIT_STAGE' => 'Στάδιο Δέσμευσης',
  'LBL_CREATED_BY' => 'Δημιουργήθηκε από',
  'LBL_CURRENCY' => 'Νόμισμα',
  'LBL_CURRENCY_ID' => 'Ταυτότητα Νομίσματος',
  'LBL_CURRENCY_RATE' => 'Ισοτιμία Νομίσματος',
  'LBL_DATE_CLOSED' => 'Αναμενόμενη Ημερομηνία Κλεισίματος',
  'LBL_DATE_COMMITTED' => 'Ημερομηνία Δέσμευσης',
  'LBL_DATE_ENTERED' => 'Ημερομηνία Εισαγωγής',
  'LBL_DATE_MODIFIED' => 'Ημερομηνία Τροποποίησης',
  'LBL_DELETED' => 'Διαγράφηκε',
  'LBL_DV_FORECAST_OPPORTUNITY' => 'Πρόβλεψη Ευκαιριών',
  'LBL_DV_FORECAST_PERIOD' => 'Χρονική Περιόδος Πρόβλεψης:',
  'LBL_DV_FORECAST_ROLLUP' => 'Συνάθροιση Πρόβλεψης',
  'LBL_DV_HEADER' => 'Προβλέψεις: Φύλλο Εργασίας',
  'LBL_DV_LAST_COMMIT_AMOUNT' => 'Τελευταία Ποσά Δέσμευσης:',
  'LBL_DV_LAST_COMMIT_DATE' => 'Τελευταία Ημερομηνία Δέσμευσης:',
  'LBL_DV_MY_FORECASTS' => 'Προβλέψεις Μου',
  'LBL_DV_MY_TEAM' => 'Προβλέψεις Ομάδας μου',
  'LBL_DV_TIMEPERIOD' => 'Χρονική Περίοδος:',
  'LBL_DV_TIMEPERIODS' => 'Χρονικές Περίοδοι:',
  'LBL_DV_TIMPERIOD_DATES' => 'Χρονικό Διάστημα:',
  'LBL_EDITABLE_INVALID' => 'Ακυρη Τιμή για {{field_name}}',
  'LBL_EDITABLE_INVALID_RANGE' => 'Η Τιμή πρέπει να είναι ανάμεσα {{ελάχιστο}} και {{μέγιστο}}',
  'LBL_FC_START_DATE' => 'Ημερομηνία Έναρξης',
  'LBL_FC_USER' => 'Προγραμματισμός Για',
  'LBL_FDR_ADJ_AMOUNT' => 'Αποτιμημένο Ποσό',
  'LBL_FDR_COMMIT' => 'Δεσμευθέν Ποσό',
  'LBL_FDR_DATE_COMMIT' => 'Ημερομηνία Δέσμευσης',
  'LBL_FDR_OPPORTUNITIES' => 'Ευκαιρίες στην Πρόβλεψη:',
  'LBL_FDR_USER_NAME' => 'Άμεση Αναφορά',
  'LBL_FDR_WEIGH' => 'Σταθμισμένο Ποσό Ευκαιριών:',
  'LBL_FORECAST' => 'Πρόβλεψη',
  'LBL_FORECAST_HISTORY' => 'Προβλέψεις: Ιστορικό',
  'LBL_FORECAST_HISTORY_TITLE' => 'Ιστορικό',
  'LBL_FORECAST_ID' => 'Ταυτότητα Πρόβλεψης',
  'LBL_FORECAST_OPP_COUNT' => 'Σύνολο Μέτρησης Ευκαιρίας',
  'LBL_FORECAST_OPP_WEIGH' => 'Σταθμισμένο Ποσό',
  'LBL_FORECAST_PIPELINE_OPP_COUNT' => 'Αγωγός Μέτρησης Ευκαιρίας',
  'LBL_FORECAST_TIME_ID' => 'Ταυτότητα Χρονικής Περίοδου',
  'LBL_FORECAST_TYPE' => 'Τύπος Πρόβλεψης',
  'LBL_FORECAST_USER' => 'Χειριστής',
  'LBL_FS_CASCADE' => 'Αλληλένδετη;',
  'LBL_FS_CREATED_BY' => 'Δημιουργήθηκε από',
  'LBL_FS_DATE_ENTERED' => 'Ημερομηνία Εισαγωγής',
  'LBL_FS_DATE_MODIFIED' => 'Ημερομηνία Τροποποίησης',
  'LBL_FS_DELETED' => 'Διαγράφηκε',
  'LBL_FS_END_DATE' => 'Ημερομηνία Λήξης',
  'LBL_FS_FORECAST_FOR' => 'Προγραμματισμός Για:',
  'LBL_FS_FORECAST_START_DATE' => 'Ημερομηνία Έναρξης Πρόβλεψης',
  'LBL_FS_MODULE_NAME' => 'Προγραμματισμός Πρόβλεψης',
  'LBL_FS_START_DATE' => 'Ημερομηνία Έναρξης:',
  'LBL_FS_STATUS' => 'Κατάσταση',
  'LBL_FS_TIMEPERIOD' => 'Χρονική Περίοδος',
  'LBL_FS_TIMEPERIOD_ID' => 'Ταυτότητα Χρονικής Περίοδου',
  'LBL_FS_USER_ID' => 'Ταυτότητα Χειριστή',
  'LBL_HISTORY_LOG' => 'Τελευταία Δέσμευση',
  'LBL_LIST_FORM_TITLE' => 'Δεσμευμένες Προβλέψεις',
  'LBL_LOADING_COMMIT_HISTORY' => 'Φόρτωση Ιστορικού Δέσμευσης...',
  'LBL_LV_COMMIT' => 'Δεσµευθέν Ποσό',
  'LBL_LV_COMMIT_DATE' => 'Ημερομηνία Δέσμευσης',
  'LBL_LV_OPPORTUNITIES' => 'Ευκαιρίες',
  'LBL_LV_TIMPERIOD' => 'Χρονική περίοδος',
  'LBL_LV_TIMPERIOD_END_DATE' => 'Ημερομηνία Λήξης',
  'LBL_LV_TIMPERIOD_START_DATE' => 'Ημερομηνία Έναρξης:',
  'LBL_LV_TYPE' => 'Τύπος Πρόβλεψης',
  'LBL_LV_WEIGH' => 'Σταθμισμένο Ποσό',
  'LBL_MANGER_SAVED' => 'Αποθηκευμένος Διευθυντής',
  'LBL_MODIFIED_USER_ID' => 'Τροποποιήθηκε Από',
  'LBL_MODULE_NAME' => 'Πρόβλεψη Διευθυντή Φύλλου Εργασίας',
  'LBL_MODULE_NAME_SINGULAR' => 'Πρόβλεψη Διευθυντή Φύλλου Εργασίας',
  'LBL_MODULE_TITLE' => 'Πρόβλεψη Διευθυντή Φύλλου Εργασίας',
  'LBL_MY_MANAGER_LINE' => '{{full_name}} (me)',
  'LBL_NO_ACTIVE_TIMEPERIOD' => 'Καμία Ενεργή χρονική περίοδος για την Πρόβλεψη.',
  'LBL_NO_COMMIT' => 'Καμία Προηγούμενη Δέσμευση',
  'LBL_OW_ACCOUNTNAME' => 'Λογαριασμός',
  'LBL_OW_DESCRIPTION' => 'Σημείωση',
  'LBL_OW_MODULE_TITLE' => 'Ευκαιρία Φύλλου Εργασίας',
  'LBL_OW_NEXT_STEP' => 'Επόμενο Βήμα',
  'LBL_OW_OPPORTUNITIES' => 'Ευκαιρία',
  'LBL_OW_PROBABILITY' => 'Πιθανότητα',
  'LBL_OW_REVENUE' => 'Ποσό',
  'LBL_OW_TYPE' => 'Τύπος',
  'LBL_OW_WEIGHTED' => 'Σταθμισμένο Ποσό',
  'LBL_PERCENT' => 'Tοις εκατό',
  'LBL_PRODUCT_ID' => 'Ταυτότητα Προϊόντος:',
  'LBL_QC_COMMIT_BUTTON' => 'Δέσμευση',
  'LBL_QC_COMMIT_VALUE' => 'Ποσό Δέσμευσης:',
  'LBL_QC_DIRECT_FORECAST' => 'Άμεση Πρόβλεψη Μου:',
  'LBL_QC_HEADER_DELIM' => 'Προς',
  'LBL_QC_LAST_COMMIT_VALUE' => 'Τελευταίο Ποσό Δέσμευσης:',
  'LBL_QC_LAST_DATE_COMMITTED' => 'Τελευταία Ημερομηνία Δέσμευσης:',
  'LBL_QC_OPPORTUNITY_COUNT' => 'Μέτρηση Ευκαιρίας:',
  'LBL_QC_ROLLUP_FORECAST' => 'Πρόβλεψη Ομάδας Μου:',
  'LBL_QC_ROLL_COMMIT_VALUE' => 'Συνάθροιση Ποσού Δέσμευσης:',
  'LBL_QC_TIME_PERIOD' => 'Χρονική Περίοδος:',
  'LBL_QC_UPCOMING_FORECASTS' => 'Προβλέψεις Μου',
  'LBL_QC_WEIGHT_VALUE' => 'Σταθμισμένο Ποσό:',
  'LBL_QC_WORKSHEET_BUTTON' => 'Φύλλο Εργασίας',
  'LBL_QUOTA' => 'Ποσόστωση',
  'LBL_QUOTA_ADJUSTED' => 'Ποσόστωση (Αποτιμημένο)',
  'LBL_QUOTA_ID' => 'Ταυτότητα Ποσόστωσης',
  'LBL_REPORTS_TO_USER_NAME' => 'Αναφέρεται Σε',
  'LBL_RESET_CHECK' => 'Όλα τα στοιχεία φύλλων εργασίας για το επιλεγμένο χρονικό διάστημα και τον συνδεμένο χρήστη θα αφαιρεθούν. Συνέχεια;',
  'LBL_RESET_WOKSHEET' => 'Επαναφορά Φύλλου Εργασίας',
  'LBL_SALES_STAGE' => 'Στάδιο',
  'LBL_SAVE_WOKSHEET' => 'Αποθήκευση Φύλλου Εργασίας',
  'LBL_SEARCH' => 'Επιλογή',
  'LBL_SEARCH_LABEL' => 'Επιλογή',
  'LBL_SHOW_CHART' => 'Προβολή Γραφήματος',
  'LBL_SVFS_CASCADE' => 'Αλληλένδετη σε Αναφορές;',
  'LBL_SVFS_FORECASTDATE' => 'Ημερομηνία Έναρξης Προγραμματισμού',
  'LBL_SVFS_HEADER' => 'Προγραμματισμός Πρόβλεψης:',
  'LBL_SVFS_STATUS' => 'Κατάσταση',
  'LBL_SVFS_USER' => 'Για',
  'LBL_TIMEPERIOD_NAME' => 'Χρονική Περίοδος',
  'LBL_USER_NAME' => 'Όνομα Χειριστή',
  'LBL_VERSION' => 'Έκδοση',
  'LBL_WK_REVISION' => 'Αναθεώρηση',
  'LBL_WK_VERSION' => 'Έκδοση',
  'LB_FS_KEY' => 'Ταυτότητα',
  'LNK_FORECAST_LIST' => 'Προβολή Ιστορικού Προβλέψεων',
  'LNK_NEW_OPPORTUNITY' => 'Δημιουργία Ευκαιρίας',
  'LNK_NEW_TIMEPERIOD' => 'Δημιουργία Χρονικής Περιόδου',
  'LNK_QUOTA' => 'Προβολή Ποσοστόσεων',
  'LNK_TIMEPERIOD_LIST' => 'Προβολή Χρονικών Περιόδων',
  'LNK_UPD_FORECAST' => 'Πρόβλεψη Διευθυντή Φύλλου Εργασίας',
);
