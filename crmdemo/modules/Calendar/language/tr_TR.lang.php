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
	'LBL_MODULE_NAME' => 'Takvim',
	'LBL_MODULE_NAME_SINGULAR' => 'Takvim',
	'LBL_MODULE_TITLE' => 'Takvim',
	'LNK_NEW_CALL' => 'Tel. Araması Planla',
	'LNK_NEW_MEETING' => 'Toplantı Planla',
	'LNK_NEW_APPOINTMENT' => 'Randevu Oluştur',
	'LNK_NEW_TASK' => 'Görev Oluştur',
	'LNK_CALL_LIST' => 'Aramalar',
	'LNK_MEETING_LIST' => 'Toplantılar',
	'LNK_TASK_LIST' => 'Görevler',
	'LNK_VIEW_CALENDAR' => 'Bugün',
	'LNK_IMPORT_CALLS' => 'Arama Verilerini Yükle',
	'LNK_IMPORT_MEETINGS' => 'Toplantı Verilerini Yükle',
	'LNK_IMPORT_TASKS' => 'Görev Verilerini Yükle',
	'LBL_MONTH' => 'Ay',
	'LBL_DAY' => 'Gün',
	'LBL_YEAR' => 'Yıl',
	'LBL_WEEK' => 'Hafta',
	'LBL_PREVIOUS_MONTH' => 'Önceki Ay',
	'LBL_PREVIOUS_DAY' => 'Önceki Gün',
	'LBL_PREVIOUS_YEAR' => 'Önceki Yıl',
	'LBL_PREVIOUS_WEEK' => 'Önceki Hafta',
	'LBL_NEXT_MONTH' => 'Gelecek Ay',
	'LBL_NEXT_DAY' => 'Sonraki Gün',
	'LBL_NEXT_YEAR' => 'Gelecek Yıl',
	'LBL_NEXT_WEEK' => 'Önümüzdeki Hafta',
	'LBL_AM' => 'ÖÖ',
	'LBL_PM' => 'ÖS',
	'LBL_SCHEDULED' => 'Planlanmış',
	'LBL_BUSY' => 'Meşgul',
	'LBL_CONFLICT' => 'Çakışma',
	'LBL_USER_CALENDARS' => 'Kullanıcı Takvimleri',
	'LBL_SHARED' => 'Ortak',
	'LBL_PREVIOUS_SHARED' => 'Önceki',
	'LBL_NEXT_SHARED' => 'Sonraki',
	'LBL_SHARED_CAL_TITLE' => 'Ortak Takvim',
	'LBL_USERS' => 'Kullanıcılar',
	'LBL_REFRESH' => 'Yenile',
	'LBL_EDIT_USERLIST' => 'Kullanıcı Listesi',
	'LBL_SELECT_USERS' => 'Takvim gösterimi için kullanıcıları seçin',
	'LBL_FILTER_BY_TEAM' => 'Kullanıcı listesini takıma göre filtrele:',
	'LBL_ASSIGNED_TO_NAME' => 'Atanan Kişi',
	'LBL_DATE' => 'Başlangıç Tarihi ve Saati',  
	'LBL_CREATE_MEETING' => 'Toplantı Planla',
	'LBL_CREATE_CALL' => 'Tel. Araması Planla',
	'LBL_HOURS_ABBREV' => 's',
	'LBL_MINS_ABBREV' => 'd',


	'LBL_YES' => 'Evet',
	'LBL_NO' => 'Hayır',
	'LBL_SETTINGS' => 'Ayarlar',
	'LBL_CREATE_NEW_RECORD' => 'Etkinlik Oluştur',
    'LBL_CREATE_NEW_CALL' => 'Çağrı Oluştur',
    'LBL_CREATING_NEW_ACTIVITY' => 'Yeni bir toplantı oluşturun. <a href="javascript:void(0);" data-action="create-task">Görev oluşturmak</a> veya <a href="javascript:void(0);" data-action="schedule-call">Çağrı planlamak istediniz mi</a>',
	'LBL_LOADING' => 'Yükleniyor...',
	'LBL_SAVING' => 'Kaydediliyor...',
	'LBL_SENDING_INVITES' => 'Davetiler Kaydediliyor ve Gönderiyor .....',
	'LBL_CONFIRM_REMOVE' => 'Kaydı silmek istediğinizden emin misiniz?',
	'LBL_CONFIRM_REMOVE_ALL_RECURRING' => 'Tüm tekrarlanan kayıtları silmek istediğinizden emin misiniz?',
	'LBL_EDIT_RECORD' => 'Etkinliği Düzenle',
    'LBL_EDIT_CALL' => 'Çağrı Düzenle',
	'LBL_ERROR_SAVING' => 'Kaydederken hata oluştu',
    'LBL_NO_ACCESS' => 'Erişiminiz yok',
	'LBL_ERROR_LOADING' => 'Yükleme sırasında hata oluştu',
	'LBL_GOTO_DATE' => 'Tarihe Git',
	'NOTICE_DURATION_TIME' => 'Süre 0 dan büyük olmalıdır',
	'LBL_STYLE_BASIC' => 'Temel',
	'LBL_STYLE_ADVANCED' => 'Gelişmiş',

	'LBL_INFO_TITLE' => 'Ek Detaylar',
	'LBL_INFO_DESC' => 'Tanım',
	'LBL_INFO_START_DT' => 'Başlangıç Tarihi',
	'LBL_INFO_DUE_DT' => 'Son Bitirme Tarihi',
	'LBL_INFO_DURATION' => 'Süre',
	'LBL_INFO_NAME' => 'Konu',
	'LBL_INFO_RELATED_TO' => 'İlişkili',

	'LBL_NO_USER' => 'Alan için eşleşme yok: Şuna atayın',
	'LBL_SUBJECT' => 'Konu',
	'LBL_DURATION' => 'Süre',
	'LBL_STATUS' => 'Durum',
	'LBL_DATE_TIME' => 'Tarih ve Saat',


	'LBL_SETTINGS_TITLE' => 'Ayarlar',
	'LBL_SETTINGS_DISPLAY_TIMESLOTS' => 'Gün ve Hafta görünümlerinde zaman dilimlerini göster:',
	'LBL_SETTINGS_TIME_STARTS'=>'Başlangıç zamanı:', 
	'LBL_SETTINGS_TIME_ENDS'=>'Bitiş zamanı:', 
	'LBL_SETTINGS_CALLS_SHOW' => 'Aramaları Göster:',
	'LBL_SETTINGS_TASKS_SHOW' => 'Görevleri Göster:', 

	'LBL_SAVE_BUTTON' => 'Kaydet',
	'LBL_DELETE_BUTTON' => 'Sil',
	'LBL_APPLY_BUTTON' => 'Uygula',
	'LBL_SEND_INVITES' => 'Kaydet & Davet Gönder',
	'LBL_CANCEL_BUTTON' => 'İptal',
	'LBL_CLOSE_BUTTON' => 'Kapat',

	'LBL_GENERAL_TAB' => 'Detaylar',
	'LBL_PARTICIPANTS_TAB' => 'Davetliler',
	'LBL_REPEAT_TAB' => 'Tekrar',	
	
	'LBL_REPEAT_TYPE' => 'Tekrar',
	'LBL_REPEAT_INTERVAL' => 'Her',
	'LBL_REPEAT_END' => 'Son',	
	'LBL_REPEAT_END_AFTER' => 'Sonra',
	'LBL_REPEAT_OCCURRENCES' => 'tekrar',
	'LBL_REPEAT_END_BY' => 'Son tarih',	
	'LBL_REPEAT_DOW' => 'Üzerinde',	
	'LBL_REPEAT_UNTIL' => 'Tekrar Limiti:',
	'LBL_REPEAT_COUNT' => 'Tekrarlama sayısı',
	'LBL_RECURRING_LIMIT_ERROR' => 'Tekrarlayan $moduleTitle planlanamaz, çünkü $limit izin verilen maksimum tekrarlama limitini aşıyor.',
	
	'LBL_EDIT_ALL_RECURRENCES' => 'Bütün Çift Kayıtları Değiştir',
	'LBL_REMOVE_ALL_RECURRENCES' => 'Bütün Tekrarları Sil',

	'LBL_DATE_END_ERROR' => 'Bitiş Tarihi, Başlangıç Tarihinden önce',
	'ERR_YEAR_BETWEEN' => 'Üzgünüz, takvim istediğiniz yılı kabul edemiyor<br>Yıl 1970 ile 2037 arasında olmalıdır',
	'ERR_NEIGHBOR_DATE' => 'get_neighbor_date_str: Bu ​​görünüm için tanımlanmamış',

    'LBL_CALENDAR_EVENT_LIMIT_EXCEEDED' => "Tekrarlayan {0} etkinlik sayısı limiti aştı",
    'LBL_CALENDAR_EVENT_NOT_A_RECURRING_EVENT' => "{0}, tekrarlanan bir etkilik değil",
    'LBL_CALENDAR_EVENT_NOT_A_PARENT_OCCURRENCE' => "{0}, esas yenileme değil",
    'LBL_CALENDAR_EVENT_RECURRENCE_MODULE_NOT_SUPPORTED' => "{0}, tekrarlanan etkinlik modülü olarak görülmemektedir",

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
