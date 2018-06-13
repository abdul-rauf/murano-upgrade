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

 * Description:    Defines the English language pack for the base application.
 * Portions created by SugarCRM are Copyright (C) SugarCRM, Inc.
 * All Rights Reserved.
 ********************************************************************************/
global $timedate;
 
$mod_strings = array (
    'LBL_GOOD_FILE' => 'קובץ ייבוא נקרא בהצלחה',
    'LBL_RECORD_CONTAIN_LOCK_FIELD' => 'הרשומה שיובאה משתתפת בתהליך ולא ניתן לערוך אותה מאחר שחלק מהשדות נעולים לעריכה על-ידי התהליך.',
    'LBL_RECORDS_SKIPPED_DUE_TO_ERROR' => 'records were not imported due to error.',
    'LBL_UPDATE_SUCCESSFULLY' => 'רישומים עודכנו בהצלחה',
    'LBL_SUCCESSFULLY_IMPORTED' => 'records created successfully',
    'LBL_STEP_4_TITLE' => 'Step 4: Import File',
    'LBL_STEP_5_TITLE' => 'Step 5: View Results',
    'LBL_CUSTOM_ENCLOSURE' => 'שדות אושרו על ידי:',
    'LBL_ERROR_UNABLE_TO_PUBLISH' => 'לא ניתן לפרסם. קיימת מפת ייבוא מפורסמת נוספת באותו שם.',
    'LBL_ERROR_UNABLE_TO_UNPUBLISH' => 'לא ניתן לבטל פרסום של מפה בבעלותו של משתמש אחר. בבעלותך מפת ייבוא באותו שם.',
    'LBL_ERROR_IMPORTS_NOT_SET_UP' => 'Imports aren&#39;t set up for this module type',
    'LBL_IMPORT_TYPE' => 'Import Action',
    'LBL_IMPORT_BUTTON' => 'Create Records',
    'LBL_UPDATE_BUTTON' => 'Create and Update Records',
    'LBL_CREATE_BUTTON_HELP' => 'השתמש באפשרות זו כדי ליצור רישומים חדשים. הערה: שורות בקובץ הייבוא שמכילות ערכים שתואמים למזהים של רישומים קיימים לא ייבואו במידה והערכים ממופים לשדה של המזהה.',
    'LBL_UPDATE_BUTTON_HELP' => 'השתמש באפשרת זו כדי לעדכן את הרישומים הקיימים. הנתונים בקובץ הייבוא יותאמו לרישומים הקיימים לפי מזהה הרישום שבקובץ הייבוא.',
    'LBL_NO_ID' => 'מזהה נדרש',
    'LBL_PRE_CHECK_SKIPPED' => 'דולג שלב בדיקת קדם',
    'LBL_NOLOCALE_NEEDED' => 'לא נדרשת המרת אזור מקומי',
    'LBL_FIELD_NAME' => 'Field Name',
    'LBL_VALUE' => 'ערך',
    'LBL_ROW_NUMBER' => 'מספר שורה',
    'LBL_NONE' => 'אין',
    'LBL_REQUIRED_VALUE' => 'חסר ערך נדרש',
    'LBL_ERROR_SYNC_USERS' => 'Invalid value to sync to Outlook:',
    'LBL_ID_EXISTS_ALREADY' => 'מזהה כבר קיים בטבלה זאת',
    'LBL_ASSIGNED_USER' => 'במידה והמשתמש לא קיים השתמש במשתמש הנוכחי',
    'LBL_SHOW_HIDDEN' => 'הצג שדות שבדרך כלל לא ניתן לייבא אותם',
    'LBL_UPDATE_RECORDS' => 'עדכן רישומים קיימים במקום ייבוא (אל תבטל)',
    'LBL_TEST'=> 'ייבוא בדיקה (אל תשמור או תשנה נתונים)',
    'LBL_TRUNCATE_TABLE' => 'רוקן טבלה לפני הייבוא (מחק את כל הרישומים)',
    'LBL_RELATED_ACCOUNTS' => 'אל תיצור חשבונות קשורים',
    'LBL_NO_DATECHECK' => 'דלג על בדיקת תאריך (מהיר יותר אך ייכשל במידה וכל תאריך שגוי)',
    'LBL_NO_WORKFLOW' => 'אל תריץ זרימת עבודה במהלך ייבוא זה',
    'LBL_NO_EMAILS' => 'אל תשלח התראות דוא"ל במהלך ייבוא זה',
    'LBL_NO_PRECHECK' => 'מצב תבנית טבעית',
    'LBL_STRICT_CHECKS' => 'השתמש בכללים נוקשים (בדוק כתובות דוא"ל וגם מספרי טלפון)',
    'LBL_ERROR_SELECTING_RECORD' => 'שגיאה בבחירת רישום:',
    'LBL_ERROR_DELETING_RECORD' => 'שגיאה במחיקת רישום:',
    'LBL_NOT_SET_UP' => 'ייבוא לא מוגדר עבור סוג מודול זה',
    'LBL_ARE_YOU_SURE' => 'האם אתה בטוח? זה ימחוק את כל הנתונים במודול זה.',
    'LBL_NO_RECORD' => 'אין רישום לעדכן עם מזהה זה',
    'LBL_NOT_SET_UP_FOR_IMPORTS' => 'ייבוא לא מוגדר עבור סוג מודול זה',
    'LBL_DEBUG_MODE' => 'הפעל מצב פתרון באגים',
    'LBL_ERROR_INVALID_ID' => 'המזהה שניתן ארוך מדי ולא נכנס בשדה (אורך מרבי הוא 36 תווים)',
    'LBL_ERROR_INVALID_PHONE' => 'מספר טלפון לא חוקי',
    'LBL_ERROR_INVALID_NAME' => 'המחרוזת ארוכה מדי ולא נכנסת בשדה',
    'LBL_ERROR_INVALID_VARCHAR' => 'המחרוזת ארוכה מדי ולא נכנסת בשדה',
    'LBL_ERROR_INVALID_DATETIME' => 'זמןתאריך לא חוקי',
    'LBL_ERROR_INVALID_DATETIMECOMBO' => 'זמןתאריך לא חוקי',
    'LBL_ERROR_INVALID_INT' => 'ערך מספר שלם וחיובי לא חוקי',
    'LBL_ERROR_INVALID_NUM' => 'ערך מספרי לא חוקי',
    'LBL_ERROR_INVALID_TIME' => 'זמן לא חוקי',
    'LBL_ERROR_INVALID_EMAIL'=>'כתובת דוא"ל לא חוקית',
    'LBL_ERROR_INVALID_BOOL'=>'ערך לא חוקי (צריך להיות 1 או 0)',
    'LBL_ERROR_INVALID_DATE'=>'מחרוזת תאריך לא חוקית',
    'LBL_ERROR_INVALID_USER'=>'שם משתמש או מזהה לא חוקי',
    'LBL_ERROR_INVALID_TEAM' => 'שם או מזהה צוות לא חוקי',
    'LBL_ERROR_INVALID_ACCOUNT' => 'שם או מזהה חשבון לא חוקי',
    'LBL_ERROR_INVALID_RELATE' => 'שדה קשר לא חוקי',
    'LBL_ERROR_INVALID_CURRENCY' => 'ערך מטבע לא חוקי',
    'LBL_ERROR_INVALID_FLOAT' => 'מספר נקודה צפה לא חוקי',
    'LBL_ERROR_NOT_IN_ENUM' => 'Value not in dropDown list. Allowed values are:',
    'LBL_ERROR_ENUM_EMPTY' => 'Value not in dropDown list. dropDown list is empty',
    'LBL_NOT_MULTIENUM' => 'לא MultiEnum',
    'LBL_IMPORT_MODULE_NO_TYPE' => 'ייבוא לא מוגדר עבור סוג מודול זה',
    'LBL_IMPORT_MODULE_NO_USERS' => 'אזהרה: לא הוגדר משתמשים במערכת שלך. אם תייבא מבלי להוסיף משתמשים קודם כל, כל רישומים יהיו בבעלותו של מנהל המערכת.',
    'LBL_IMPORT_MODULE_MAP_ERROR' => 'לא ניתן לפרסם. יש מפת ייבוא מפורסמת אחרת באותו שם.',
    'LBL_IMPORT_MODULE_MAP_ERROR2' => 'לא ניתן לבטל פרסום של מפה בבעלותו של משתמש אחר. בבעלותך מפת ייבוא באותו שם.',
    'LBL_IMPORT_MODULE_NO_DIRECTORY' => 'The directory',
    'LBL_IMPORT_MODULE_NO_DIRECTORY_END' => 'does not exist or is not writable',
    'LBL_IMPORT_MODULE_ERROR_NO_UPLOAD' => 'File was not uploaded successfully. It may be that the &#39;upload_max_filesize&#39; setting in your php.ini file is set to a small number',
    'LBL_IMPORT_MODULE_ERROR_LARGE_FILE' => 'הקובץ גדול מדי. מרבי:',
    'LBL_IMPORT_MODULE_ERROR_LARGE_FILE_END' => 'Bytes. Change $sugar_config[&#39;upload_maxsize&#39;] in config.php',
    'LBL_MODULE_NAME' => 'ייבוא',
    'LBL_MODULE_NAME_SINGULAR' => 'ייבוא',
    'LBL_TRY_AGAIN' => 'נסה שוב',
    'LBL_START_OVER' => 'התחל מחדש',
    'LBL_ERROR' => 'Error:',
    'LBL_IMPORT_ERROR_MAX_REC_LIMIT_REACHED' => 'קובץ הייבוא מכיל {0} שורות. מספר השורות המיטבי הוא {1}. עוד שורות עלולות להאט את תהליך הייבוא. לחץ על אישור כדי להמשיך בייבוא. לחץ על ביטול כדי לשנות ולהעלות מחדש את קובץ הייבוא.',
    'ERR_IMPORT_SYSTEM_ADMININSTRATOR'  => 'אתה לא יכול לייבא משתמש מנהל מערכת',
    'ERR_REPORT_LOOP' => 'המערכת זיהתה לולאת דיווח. משתמש לא יכול לדווח לעצמו, וגם המנהל שלו לא יכול לדווח לו.',
    'ERR_MULTIPLE' => 'עמודות רבות הוגדרו עם אותו שם שדה.',
    'ERR_MISSING_REQUIRED_FIELDS' => 'שדות חובה חסרים:',
    'ERR_MISSING_MAP_NAME' => 'חסר שם מיפוי מותאם אישית',
    'ERR_SELECT_FULL_NAME' => 'אתה לא יכול לבחור שם מלא כאשר שם פרטי ושם משפחה נבחרו.',
    'ERR_SELECT_FILE' => 'בחר קובץ להעלאה.',
    'LBL_SELECT_FILE' => 'בחר קובץ:',
    'LBL_CUSTOM' => 'Custom',
    'LBL_CUSTOM_CSV' => 'קובץ מותאם אישית מופרד בפסיקים',
    'LBL_CSV' => 'Comma delimited file',
    'LBL_EXTERNAL_SOURCE' => 'יישום או שירות חיצוני',
    'LBL_TAB' => 'קובץ מופרד בטאבים',
    'LBL_CUSTOM_DELIMITED' => 'קובץ מופרד מותאם אישית',
    'LBL_CUSTOM_DELIMITER' => 'שדות מופרדים לפי:',
    'LBL_FILE_OPTIONS' => 'אפשרויות קובץ',
    'LBL_CUSTOM_TAB' => 'קובץ מופרד בטאבים מותאם אישית',
    'LBL_DONT_MAP' => '-- אל תמפה שדה זה --',
    'LBL_STEP_MODULE' => 'לתוך איזה מודול תרצה לייבא נתונים?',
    'LBL_STEP_1_TITLE' => 'Step 1: Select Data Source and Import Action',
    'LBL_CONFIRM_TITLE' => 'שלב {0}: אשר ערכי קובץ ייבוא',
    'LBL_CONFIRM_EXT_TITLE' => 'שלבי {0}: אשר ערכי מקור חיצוני',
    'LBL_WHAT_IS' => 'What is the Data Source?',
    'LBL_MICROSOFT_OUTLOOK' => 'Microsoft Outlook',
    'LBL_MICROSOFT_OUTLOOK_HELP' => 'המיפויים בהתאמה אישית עבור Microsoft Outlook מסתמכים על כך שקובץ הייבוא מופרד באמצעות פסיק (.csv). במידה וקובץ הייבוא שלך מופרד באמצעות טאב, המיפויים לא יחולו כצפוי.',
    'LBL_ACT' => 'Act!',
    'LBL_SALESFORCE' => 'Salesforce.com',
    'LBL_MY_SAVED' => 'My Saved Mappings:',
    'LBL_PUBLISH' => 'Publish',
    'LBL_DELETE' => 'מחק',
    'LBL_PUBLISHED_SOURCES' => 'Published Mappings:',
    'LBL_UNPUBLISH' => 'Un-Publish',
    'LBL_NEXT' => 'Next >',
    'LBL_BACK' => '< Back',
    'LBL_STEP_2_TITLE' => 'Step 2: Upload Import File',
    'LBL_HAS_HEADER' => 'Has Header:',
    'LBL_NUM_1' => '1.',
    'LBL_NUM_2' => '2.',
    'LBL_NUM_3' => '3.',
    'LBL_NUM_4' => '4.',
    'LBL_NUM_5' => '5.',
    'LBL_NUM_6' => '6.',
    'LBL_NUM_7' => '7.',
    'LBL_NUM_8' => '8.',
    'LBL_NUM_9' => '9.',
    'LBL_NUM_10' => '10.',
    'LBL_NUM_11' => '11.',
    'LBL_NUM_12' => '12.',
    'LBL_NOTES' => 'הערות:',
    'LBL_NOW_CHOOSE' => 'כעת בחר קובץ זה לייבוא:',
    'LBL_IMPORT_OUTLOOK_TITLE' => 'Microsoft Outlook 98 ו-2000 יכולים לייצא נתונים בתבנית של <b>ערכים מופרדים באמצעות פסיק</b>, אשר ניתן להשתמש בה כדי לייבא נתונים לתוך המערכת. כדי לייצא את הנתונים שלך מ-Outlook, עקוב אחר הצעדים מטה:',
    'LBL_OUTLOOK_NUM_1' => 'הפעל את <b>Outlook</b>',
    'LBL_OUTLOOK_NUM_2' => 'בחר בתפריט <b>קובץ</b>, לאחר מכן באפשרות <b>ייבוא וייצוא ...</b>',
    'LBL_OUTLOOK_NUM_3' => 'בחר <b>ייצוא לקובץ</b> ולחץ על הבא',
    'LBL_OUTLOOK_NUM_4' => 'בחר <b>ערכים מופרדים באמצעות פסיק (Windows)</b> ולחץ על <b>הבא</b>.<br>הערה: ייתכן ותתבקש להתקין את רכיב הייצוא',
    'LBL_OUTLOOK_NUM_5' => 'בחר בתיקייה <b>אנשי קשר</b> ולחץ על <b>הבא</b>. תוכל לבחור תיקיות שונות של אנשי קשר במידה ואנשי הקשר שלך נשמרים בתיקיות רבות',
    'LBL_OUTLOOK_NUM_6' => 'בחר שם קובץ ולחץ על <b>הבא</b>',
    'LBL_OUTLOOK_NUM_7' => 'לחץ על <b>סיום</b>',
    'LBL_IMPORT_SF_TITLE' => 'Salesforce.com יכול לייצא נתונים בתבנית של <b>ערכים מופרדים באמצעות פסיק</b>, אשר ניתן להשתמש בה כדי לייבא נתונים לתוך המערכת. כדי לייצא את הנתונים שלך מ-Salesforce.com, עקוב אחר הצעדים מטה:',
    'LBL_SF_NUM_1' => 'פתח את הדפדפן שלך, עבור אל http://www.salesforce.com והתחבר עם כתובת הדוא"ל והסיסמה שלך',
    'LBL_SF_NUM_2' => 'לחץ על הלשונית <b>דו"חות</b> בתפריט העליון',
    'LBL_SF_NUM_3' => '<b>כדי לייצא חשבונות:</b> לחץ על <b>הקישור</b> חשבונות פעילים<br><b>כדי לייצא אנשי קשר:</b> לחץ על הקישור <b>רשימת דיוור</b>',
    'LBL_SF_NUM_4' => 'ב<b>צעד 1: בחר את סוג הדו"ח שלך</b>, בחר <b>דו"ח טבלאי</b> לחץ על <b>הבא</b>',
    'LBL_SF_NUM_5' => 'ב<b>צעד 2: בחר את עמודות הדו"ח</b>, בחר את העמודות שברצונך לייצא ולחץ על <b>הבא</b>',
    'LBL_SF_NUM_6' => 'ב<b>צעד 3: בחר את המידע לסיכום</b>, פשוט לחץ על <b>הבא</b>',
    'LBL_SF_NUM_7' => 'ב<b>צעד 4: סדר את עמודות הדו"ח</b>, פשוט לחץ על <b>הבא</b>',
    'LBL_SF_NUM_8' => 'ב<b>צעד 5: בחר את קריטריוני הדו"ח שלך</b> תחת <b>תאריך התחלה</b>, בחר תאריך רחוק מספיק בעבר כדי לכלול את כל החשבונות שלך. תוכל גם לייצא חבילת משנה של חשבונות בעזרת קריטריונים מתקדמים יותר. לאחר שסיימת, לחץ על <b>הרץ דו"ח</b>',
    'LBL_SF_NUM_9' => 'המערכת תחולל דו"ח, והדף יציג <b>מצב יצירת דו"ח: הסתיימה.</b> כעת לחץ על <b>ייצוא ל-Excel</b>',
    'LBL_SF_NUM_10' => 'ב<b>ייצוא דו"ח:</b>, עבור <b>תבנית קובץ ייצוא:</b>, בחר <b>.csv מופרד באמצעות פסיק</b>. לחץ על <b>ייצוא</b>.',
    'LBL_SF_NUM_11' => 'חלון שיחה יקפוץ ויבקש ממך לשמור את קובץ הייצוא במחשב שלך.',
    'LBL_IMPORT_ACT_TITLE' => 'Act! יכולה לייצא נתונים בתבנית של <b>ערכים מופרדים באמצעות פסיק</b>, אשר ניתן להשתמש בה כדי לייבא נתונים לתוך המערכת. כדי לייצא את הנתונים שלך מ-Act!, עקוב אחר הצעדים מטה:',
    'LBL_ACT_NUM_1' => 'שגר <b>ACT!</b>',
    'LBL_ACT_NUM_2' => 'בחר את התפריט <b>קובץ</b>, את אפשרות התפריט <b>החלפת נתונים</b>, ואז את אפשרות התפריט <b>ייצוא...</b>',
    'LBL_ACT_NUM_3' => 'בחר את סוג הקובץ <b>טקסט-מופרד</b>',
    'LBL_ACT_NUM_4' => 'בחר שם קובץ ומיקום עבור הנתונים לייצוא ולחץ על <b>הבא</b>',
    'LBL_ACT_NUM_5' => 'בחר <b>רישומים של אנשי קשר בלבד</b>',
    'LBL_ACT_NUM_6' => 'לחץ על הכפתור <b>אפשרויות...</b>',
    'LBL_ACT_NUM_7' => 'בחר <b>פסיק</b> בתור התו המפריד לשדה',
    'LBL_ACT_NUM_8' => 'סמן את תיבת הסימון <b>כן, ייצא שמות שדה</b> ולחץ על <b>אישור</b>',
    'LBL_ACT_NUM_9' => 'לחץ על <b>הבא</b>',
    'LBL_ACT_NUM_10' => 'בחר <b>כל הרישומים</b> ולאחר מכן לחץ על <b>סיום</b>',
    'LBL_IMPORT_CUSTOM_TITLE' => 'יישומים רבים מאפשרים לך לייצא נתונים לתוך <b>קובץ טקסט שמופרד באמצעות פסיק (.csv)</b> בהתאם לשלבים הכלליים האלו:',
    'LBL_CUSTOM_NUM_1' => 'פתח את היישום ופתח את קובץ הנתונים',
    'LBL_CUSTOM_NUM_2' => 'בחר את אפשרות התפריט <b>שמירה בתור...</b> או <b>ייצוא...</b>',
    'LBL_CUSTOM_NUM_3' => 'שמור את הקובץ בתבנית <b>CSV</b> או <b>ערכים מופרדים באמצעות פסיק</b>',
    'LBL_IMPORT_TAB_TITLE' => 'יישומים רבים מאפשרים לך לייצא נתונים לתוך <b>קובץ טקסט שמופרד באמצעות טאב (.tsv או .tab)</b> בהתאם לשלבים הכלליים האלו:',
    'LBL_TAB_NUM_1' => 'פתח את היישום ופתח את קובץ הנתונים',
    'LBL_TAB_NUM_2' => 'בחר את אפשרות התפריט <b>שמירה בתור...</b> או <b>ייצוא...</b>',
    'LBL_TAB_NUM_3' => 'שמור את הקובץ בתבנית <b>TSV</b> או <b>ערכים מופרדים באמצעות טאב</b>',
    'LBL_STEP_3_TITLE' => 'Step 3: Confirm Fields and Import',
    'LBL_STEP_DUP_TITLE' => 'צעד {0}: בדוק כפילויות אפשריות',
    'LBL_SELECT_FIELDS_TO_MAP' => 'In the list below, select the fields in the import file that should be imported into each field in the system. When you are finished, click <b>Import Now</b>:',
    'LBL_DATABASE_FIELD' => 'Database Field',
    'LBL_HEADER_ROW' => 'שורה עליונה',
    'LBL_HEADER_ROW_OPTION_HELP' => 'בחר במידה והשורה העליונה של קובץ הייבוא היא שורה עליונה המכילה תוויות שדה.',
    'LBL_ROW' => 'שורה',
    'LBL_SAVE_AS_CUSTOM' => 'שמור בתור מיפוי מותאם אישית:',
    'LBL_SAVE_AS_CUSTOM_NAME' => 'שם מיפוי מותאם אישית:',
    'LBL_CONTACTS_NOTE_1' => 'חובה למפות שם משפחה או שם מלא.',
    'LBL_CONTACTS_NOTE_2' => 'במידה והשם המלא ממופה, אזי שם ראשון ושם משפחה נזרקים.',
    'LBL_CONTACTS_NOTE_3' => 'במידה ושם מלא ממופה, אזי הנתונים בשם המלא יתפצלו לשם פרטי ושם משפחה כאשר הם מוכנסים למסד הנתונים.',
    'LBL_CONTACTS_NOTE_4' => 'שדות שמסתיימים בכתובת רחוב 2 וכתובת רחוב 3 ממוזגים ביד עם השדה כתובת רחוב עיקרית כאשר הם מוכנסים למסד הנתונים.',
    'LBL_ACCOUNTS_NOTE_1' => 'שדות שמסתיימים בכתובת רחוב 2 וכתובת רחוב 3 ממוזגים ביד עם השדה כתובת רחוב עיקרית כאשר הם מוכנסים למסד הנתונים.',
    'LBL_REQUIRED_NOTE' => 'Required Field(s):',
    'LBL_IMPORT_NOW' => 'ייבא עכשיו',
    'LBL_' => '',
    'LBL_CANNOT_OPEN' => 'לא ניתן לפתוח את הקובא שיובא לקריאה',
    'LBL_NOT_SAME_NUMBER' => 'לא היה אותו מספר של שדות לשורה בקובץ שלך',
    'LBL_NO_LINES' => 'There were no lines in your import file',
    'LBL_FILE_ALREADY_BEEN_OR' => 'שורת הקובץ עובדה כבר או לא קיימת',
    'LBL_SUCCESS' => 'הצלחה:',
	'LBL_FAILURE' => 'ייבוא נכשל:',
    'LBL_SUCCESSFULLY' => 'ייבוא הסתיים בהצלחה',
    'LBL_LAST_IMPORT_UNDONE' => 'Your last import was undone',
    'LBL_NO_IMPORT_TO_UNDO' => 'לא היה ייבוא לבטל.',
    'LBL_FAIL' => 'כישלון:',
    'LBL_RECORDS_SKIPPED' => 'רישומים דולגו בגלל שהם חסרים שדה חובה אחד ומעלה',
    'LBL_IDS_EXISTED_OR_LONGER' => 'Records skipped because the id&#39;s either existed or were longer than 36 characters',
    'LBL_RESULTS' => 'Results',
    'LBL_CREATED_TAB' => 'רישומים שנוצרו',
    'LBL_DUPLICATE_TAB' => 'כפילויות',
    'LBL_ERROR_TAB' => 'שגיאות',
    'LBL_IMPORT_MORE' => 'Import More',
    'LBL_FINISHED' => 'Return to',
    'LBL_UNDO_LAST_IMPORT' => 'Undo Last Import',
    'LBL_LAST_IMPORTED'=>'Last Created',
    'ERR_MULTIPLE_PARENTS' => 'יכול להיות מוגדר לך מזהה אב אחד בלבד',
    'LBL_DUPLICATES' => 'נמצאו כפילויות',
    'LNK_DUPLICATE_LIST' => 'הורד רשימה של כפילויות',
    'LNK_ERROR_LIST' => 'הורד רשימת שגיאות',
    'LNK_RECORDS_SKIPPED_DUE_TO_ERROR' => 'Download list of records that were not imported',
    'LBL_UNIQUE_INDEX' => 'בחר מפתח להשוואת כפילות',
    'LBL_VERIFY_DUPS' => 'Verify duplicate entries against selected indexes.',
    'LBL_INDEX_USED' => 'Index(es) used:',
    'LBL_INDEX_NOT_USED' => 'Index(es) not used:',
    'LBL_IMPORT_MODULE_ERROR_NO_MOVE' => 'הקובץ לא הועלה בהצלחה. בדוק את הרשאות הקובץ בספריית המטמון של ההתקנה של Sugar שברשותך.',
    'LBL_IMPORT_FIELDDEF_ID' => 'מספר מזהה ייחודי',
    'LBL_IMPORT_FIELDDEF_RELATE' => 'שם או מזהה',
    'LBL_IMPORT_FIELDDEF_PHONE' => 'מספר טלפון',
    'LBL_IMPORT_FIELDDEF_TEAM_LIST' => 'שם או מזהה צוות',
    'LBL_IMPORT_FIELDDEF_NAME' => 'כל טקסט',
    'LBL_IMPORT_FIELDDEF_VARCHAR' => 'כל טקסט',
    'LBL_IMPORT_FIELDDEF_TEXT' => 'כל טקסט',
    'LBL_IMPORT_FIELDDEF_TIME' => 'זמן',
    'LBL_IMPORT_FIELDDEF_DATE' => 'Date',
    'LBL_IMPORT_FIELDDEF_DATETIME' => 'Datetime',
    'LBL_IMPORT_FIELDDEF_ASSIGNED_USER_NAME' => 'שם משתמש או מזהה',
    'LBL_IMPORT_FIELDDEF_BOOL' => '&#39;0&#39; or &#39;1&#39;',
    'LBL_IMPORT_FIELDDEF_ENUM' => 'List',
    'LBL_IMPORT_FIELDDEF_EMAIL' => 'כתובת דוא"ל',
    'LBL_IMPORT_FIELDDEF_INT' => 'מספרי (לא עשרוני)',
    'LBL_IMPORT_FIELDDEF_DOUBLE' => 'מספרי (לא עשרוני)',
    'LBL_IMPORT_FIELDDEF_NUM' => 'מספרי (לא עשרוני)',
    'LBL_IMPORT_FIELDDEF_CURRENCY' => 'מספרי (עשרוני מותר)',
    'LBL_IMPORT_FIELDDEF_FLOAT' => 'מספרי (עשרוני מותר)',
    'LBL_DATE_FORMAT' => 'תבנית תאריך:',
    'LBL_TIME_FORMAT' => 'תבנית זמן:',
    'LBL_TIMEZONE' => 'אזור זמן:',
    'LBL_ADD_ROW' => 'Add Field',
    'LBL_REMOVE_ROW' => 'הסר שדה',
    'LBL_DEFAULT_VALUE' => 'Default Value',
    'LBL_SHOW_ADVANCED_OPTIONS' => 'Show Advanced Options',
    'LBL_HIDE_ADVANCED_OPTIONS' => 'Hide Advanced Options',
    'LBL_SHOW_NOTES' => 'View Notes',
    'LBL_HIDE_NOTES' => 'הסתר הערות',
    'LBL_SHOW_PREVIEW_COLUMNS' => 'הצג עמודות של תצוגה מקדימה',
    'LBL_HIDE_PREVIEW_COLUMNS' => 'הסתר עמודות של תצוגה מקדימה',
    'LBL_SAVE_MAPPING_AS' => 'Save Mapping As',
    'LBL_OPTION_ENCLOSURE_QUOTE' => 'Single Quote (&#39;)',
    'LBL_OPTION_ENCLOSURE_DOUBLEQUOTE' => 'ציטוט כפול (")',
    'LBL_OPTION_ENCLOSURE_NONE' => 'אין',
    'LBL_OPTION_ENCLOSURE_OTHER' => 'אחר:',
    'LBL_IMPORT_COMPLETE' => 'Import Complete',
    'LBL_IMPORT_COMPLETED' => 'ייבוא הסתיים',
    'LBL_IMPORT_ERROR' => 'קרו שגיאות ייבוא',
    'LBL_IMPORT_RECORDS' => 'מייבא רישומים',
    'LBL_IMPORT_RECORDS_OF' => 'of',
    'LBL_IMPORT_RECORDS_TO' => 'ל',
    'LBL_CURRENCY' => 'Currency',
    'LBL_SYSTEM_SIG_DIGITS' => 'ספרות משמעותיות במערכת',
    'LBL_NUMBER_GROUPING_SEP' => '1000s separator',
    'LBL_DECIMAL_SEP' => 'Decimal symbol',
    'LBL_LOCALE_DEFAULT_NAME_FORMAT' => 'תבנית תצוגת שם',
    'LBL_LOCALE_EXAMPLE_NAME_FORMAT' => 'דוגמה',
    'LBL_LOCALE_NAME_FORMAT_DESC' => '<i>"s" ברכות, "f" שם פרטי, "l" שם משפחה</i>',
    'LBL_CHARSET' => 'File Encoding',
    'LBL_MY_SAVED_HELP' => 'A saved mapping specifies a previously used combination of a specific data source and a set of database fields to map to the fields in the import file.<br>Click <b>Publish</b> to make the mapping available to other users.<br>Click <b>Un-Publish</b> to make the mapping unavailable to other users.',
    'LBL_MY_SAVED_ADMIN_HELP' => 'השתמש באפשרות זו כדי להחיל את הגדרות הייבוא המוגדרות מראש שלך, כולל ערכי ייבוא, מיפויים, וכל הגדרות בדיקה כפולות, לייבוא זה.<br><br>לחץ על <b>פרסם</b> כדי להפוך את המיפוי לזמין למשתמשים אחרים. <br>לחץ על<b>בטל פרסום</b> כדי להפוך את המיפוי ללא זמין למשתמשים אחרים.<br>לחץ על <b>מחיקה</b> כדי למחוק מיפוי עבור כל המשתמשים.',
    'LBL_MY_PUBLISHED_HELP' => 'A published mapping specifies a previously used combination of a specific data source and a set of database fields to map to the fields in the import file.',
    'LBL_ENCLOSURE_HELP' => '<p>ה<b>תו המאשר</b> נועד לעטוף את תוכן השדה המיועד, כולל כל תו שמשמש בתור תו מפריד. <br><br>לדוגמה: במידה והמפריד הוא פסיק (,) והמאשר הוא סימן ציטוט ("),<br><b>"קופרטינו, קליפורניה"</b> מיובא לתוך שדה אחד ביישום ומופיע בתור <b>קופרטינו, קליפורניה</b><br>אם אין תווים מאשרים, או במידה ותו שונה הוא המאשר, <br><b>"קופרטינו, קליפורניה"</b> מיובא לתוך שני שדות סמוכים בתור <b>"קופרטינו</b> ו<b>"קליפורניה"</b>.<br><br>הערה: קובץ הייבוא עלול לא להכיל תו מאשר. <br>תו המאשר ברירת המחדל עבור קבצים שמופרדים בפסיק ובטאב שנוצר ב-Excel הוא סימן ציטוט.</p>',
    'LBL_DELIMITER_COMMA_HELP' => 'Select this option if the character that separates the fields in the import file is a <b>comma</b>, or if the file extension is .csv.',
    'LBL_DELIMITER_TAB_HELP' => 'בחר באפשרות זו במידה והתו שמפריד את השדות בקובץ הייבוא הוא <b>TAB</b>, וסיומת הקובץ היא .txt.',
    'LBL_DELIMITER_CUSTOM_HELP' => 'בחר באפשרות זו אם התו שמפריד את השדות בקובץ הייבוא הוא לא פסיק ולא טאב, והקלד את התו בשדה הסמוך.',
    'LBL_DATABASE_FIELD_HELP' => 'Select a field from list of all fields existing in the database for the module.',
    'LBL_HEADER_ROW_HELP' => 'These are the field titles in the header row of the import file.',
    'LBL_DEFAULT_VALUE_HELP' => 'ציין ערך כדי להשתמש בו עבור השדה ברישום שנוצר או הועלה אם השדה שבקובץ הייבוא לא מכיל נתונים.',
    'LBL_ROW_HELP' => 'This is the data in the first non-header row of the import file.',
    'LBL_SAVE_MAPPING_HELP' => 'Enter a name for the set of database fields used above for mapping to the fields in the import file fields.<br>The set of fields, including the order of the fields and the data souce selected in Import Step 1, will be saved during the import attempt.<br>The saved mapping can then be selected in Import Step 1 to for another import.',
    'LBL_IMPORT_FILE_SETTINGS_HELP' => 'Specify the settings in the import file to ensure that the data is imported<br> correctly.  These settings will not override your preferences. The records<br> created or updated will contain the settings specified in your My Account page.',
    'LBL_VERIFY_DUPLCATES_HELP' => 'Select the fields in the import file to be used for the duplicate check.<br>If data in the selected fields matches data in fields in existing records, new records will not be created for the rows containing the duplicate field data.<br>The rows containing duplicate field data will be identified in the Import Results.',
    'LBL_IMPORT_STARTED' => 'ייבוא התחיל:',
    'LBL_IMPORT_FILE_SETTINGS' => 'הגדרות קובץ ייבוא',
    'LBL_RECORD_CANNOT_BE_UPDATED' => 'לא היה ניתן לעדכן את הרישום עקב בעיית הרשאות',
    'LBL_DELETE_MAP_CONFIRMATION' => 'Are you sure you want to delete this mapping?',
    'LBL_THIRD_PARTY_CSV_SOURCES' => 'במידה ונתוני קובץ הייבוא הם ייצוא מאחד המקורות הבאים, בחר את מקור הייצוא.',
    'LBL_THIRD_PARTY_CSV_SOURCES_HELP' => 'בחר את המקור כדי להחיל אוטומטית מיפויים בהתאמה אישית על מנת לפשט את תהליך המיפוי (השלב הבא).',
    'LBL_EXTERNAL_SOURCE_HELP' => 'השתמש באפשרות זו כדי לייבא נתונים ישירות מיישום או שירות חיצוני, כמו Gmail.',
    'LBL_EXAMPLE_FILE' => 'הורד תבנית של קובץ ייבוא',
    'LBL_CONFIRM_IMPORT' => 'בחרת לעדכן רישומים במהלך תהליך הייבוא. לא ניתן לבטל עדכונים שנעשו לרישומים קיימים. עם זאת, ניתן לבטל רישומים שנוצרו במהלך תהליך הייבוא (למחוק), במידת הרצון. לחץ על ביטול כדי לבחור ליצור רישומים חדשים בלבד, או לחץ על אישור כדי להמשיך.',
    'LBL_CONFIRM_MAP_OVERRIDE' => 'אזהרה: כבר בחרת מיפוי מותאם אישית עבור ייבוא זה, האם ברצונך להמשיך?',
    'LBL_EXTERNAL_FIELD' => 'שדה חיצוני',
    'LBL_SAMPLE_URL_HELP' => 'הורד קובץ ייבוא לדוגמה המכילה שורה עליונה של שדות המודול. הקובץ יכול לשמש בתור תבנית כדי ליצור קובץ ייבוא שמכיל את הנתונים שברצונך לייבא.',
    'LBL_AUTO_DETECT_ERROR' => 'לא ניתן לזהות את המפריד והמאשר של השדה. אנא אמת את ההגדרות בערכי קובץ הייבוא.',
    'LBL_MIME_TYPE_ERROR_1' => 'נראה כי הקובץ שנבחר לא מכיל רשימה מופרדת. אנא בדוק את סוג הקובץ. אנחנו ממליצים על קבצים שמופרדים באמצעות פסיק (.csv).',
    'LBL_MIME_TYPE_ERROR_2' => 'כדי להמשיך בייבוא הקובץ הנבחר, לחץ על אישור. כדי להעלות קובץ חדש, לחץ על נסה שוב',
    'LBL_FIELD_DELIMETED_HELP' => 'מפריד השדה מצין את התו שמשמש להפרדת עמודות השדה.',
    'LBL_FILE_UPLOAD_WIDGET_HELP' => 'בחר קובץ שמכיל נתונים אשר מופרד על ידי מפריד, כמו קובץ שמופרד באמצעות פסיק או טאב. מומלצים קבצים מסוג .csv.',
    'LBL_EXTERNAL_ERROR_NO_SOURCE' => 'לא ניתן לאחזר מתאם מקור, אנא נסה שוב מאוחר יותר.',
    'LBL_EXTERNAL_ERROR_FEED_CORRUPTED' => 'לא ניתן לאחזר הזנה חיצונית, אנא נסה שוב מאורח יותר.',
    'LBL_ERROR_IMPORT_CACHE_NOT_WRITABLE' => 'לא ניתן לכתוב בספריית מטמון ייבוא.',
    'LBL_ADD_FIELD_HELP' => 'השתמש באפשרות זו כדי להוסיף ערך לשדה בכל הרישומים שנוצרו ו/או עודכנו. בחר בשדה ולאחר מכן הזן או בחר ערך עבור שדה זה בעמודת ערך ברירת מחדל.',
    'LBL_MISSING_HEADER_ROW' => 'לא נמצאה שורה עליונה',
    'LBL_CANCEL' => 'בטל',
    'LBL_SELECT_DS_INSTRUCTION' => 'מוכן להתחיל בייבוא? בחר את מקור הנתונים שברצונך לייבא.',
    'LBL_SELECT_UPLOAD_INSTRUCTION' => 'בחר קובץ במחשב שלך שמכיל את הנתונים שברצונך לייבא, או הורד את התבנית כדי לזרז את יצירת קובץ הייבוא.',
    'LBL_SELECT_PROPERTY_INSTRUCTION' => 'כך ייראו השורות הראשונות בקובץ הייבוא עם ערכי הקובץ שזוהו. במידה ושורה עליונה זוהתה, היא תוצג בשורה העליונה של הטבלה. צפה בערכי קובץ הייבוא כדי לבצע שינויים בערכים שזוהו וכדי להגדיר ערכים נוספים. עדכון ההגדרות יעדכן את הנתונים שמופיעים בטבלה.',
    'LBL_SELECT_MAPPING_INSTRUCTION' => 'The table below contains all of the fields in the module that can be mapped to the data in the import file. If the file contains a header row, the columns in the file have been mapped to matching fields. Check the mappings to make sure that they are what you expect, and make changes, as necessary. To help you check the mappings, Row 1 displays the data in the file. Be sure to map to all of the required fields (noted by an asterisk).',
    'LBL_SELECT_DUPLICATE_INSTRUCTION' => 'כדי להימנע מכפילויות, בחר עבור אילו מהשדות הממופים תרצה לבצע בדיקות כפילות בזמן ייבוא הנתונים. ערכים בתוך רישומים שקיימים בשדות שנבחרו ייבדקו אל מול הנתונים בקובץ הייבוא. אם נמצאו נתונים תואמים, השורות בקובץ הייבוא שמכילות את הנתונים יופיעו לצד תוצאות הייבוא (דף הבא). לאחר מכן תוכל לבחור את השורות שברצונך להמשיך לייבא.',
    'LBL_EXT_SOURCE_SIGN_IN' => 'התחבר',
    'LBL_EXT_SOURCE_SIGN_OUT' => 'צא',
    'LBL_DUP_HELP' => 'להלן השורות בקובץ הייבוא שלא עברו בייבוא מכיוון שהן מכילות נתונים שתואמים לערכים ברישומים קיימים לפי בדיקת כפילות. הנתונים שתואמים מודגשים. כדי לייבא שורות אלה בשנית, הורד את הרשימה, בצע שינויים ולחץ על <b>ייבוא חוזר</b>.',
    'LBL_DESELECT' => 'בטל בחירה',
    'LBL_SUMMARY' => 'סיכום',
    'LBL_OK' => 'אישור',
    'LBL_ERROR_HELP' => 'הנה השורות בקובץ הייבוא שלא יובאו עקב שגיאות. כדי לייבא שוב שורות אלה, הורד את הרשימה, בצע שינויים ולחץ על <b>ייבוא חוזר</b>',
    'LBL_EXTERNAL_MAP_HELP' => 'הטבלה מטה מכילה את השדות במקור החיצוני ואת שדות המודול שאליו יתמפו. בדוק את המיפויים כדי לוודא שהם תואמים לציפיות שלך, ובצע שינויים, במידת הצורך. ודא כי אתה ממפה את כל שדות החובה (מסומנים בכוכבית).',
    'LBL_EXTERNAL_MAP_NOTE' => 'הייבוא ינוסה עבור אנשי קשר בתוך כל הקבוצות Google Contacts.',
    'LBL_EXTERNAL_MAP_NOTE_SUB' => 'שמות המשתמשים של המשתמשים החדשים שנוצרו יהיו השמות המלאים של ה-Google Contact כברירת מחדל. ניתן לשנות את שמות המשתמשים לאחר שרישומי המשתמשים נוצרו.',
    'LBL_EXTERNAL_MAP_SUB_HELP' => 'לחץ על <b>ייבא עכשיו</b> כדי להתחיל בייבוא. רישומים ייווצרו רק עבור רשומות שכוללות שמות משפחה. רישומים לא ייווצרו עבור נתונים שזוהו בתור כפילות המתבססת על שמות ו/או כתובות דוא"ל שתואמים לרישומים קיימים.',
    'LBL_EXTERNAL_FIELD_TOOLTIP' => 'עמודה זו מציגה את השדות במקור החיצוני שלא מכילים נתונים אשר ישמשו ליצירת רישומים חדשים.',
    'LBL_EXTERNAL_DEFAULT_TOOPLTIP' => 'ציין ערך לשימוש בשדה שבתוך הרישום שנוצר במידה והשדה במקור החיצוני לא מכיל נתונים.',
    'LBL_EXTERNAL_ASSIGNED_TOOLTIP' => 'כדי להקצות את הרישומים החדשים למשתמש אחר מלבדך, השתמש בעמוד ערך ברירת מחדל כדי לבחור משתמש אחר.',
    'LBL_EXTERNAL_TEAM_TOOLTIP' => 'כדי להקצות את הרישומים החדשים לצוותים שאינם הצוותים ברירת המחדל שלך, השתמש בעמוד ערך ברירת מחדל כדי לבחור צוותים אחרים.',
    'LBL_SIGN_IN_HELP' => 'כדי להפעיל שירות זה, אנא התחבר תחת לשונית החשבונות החיצוניים בתוך דף הגדרות המשתמש שלך.',
    'LBL_NO_EMAIL_DEFS_IN_MODULE' => "Trying to handle email addresses in a Bean that doesn&#39;t support it.",
);
