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
    'LBL_OPPORTUNITIES_LIST_DASHBOARD' => 'Fırsatlar Listesi Panosu',
    'LBL_OPPORTUNITIES_RECORD_DASHBOARD' => 'Fırsatlar Kaydı Panosu',

    'LBL_MODULE_NAME' => 'Fırsatlar',
    'LBL_MODULE_NAME_SINGULAR' => 'Fırsat',
    'LBL_MODULE_TITLE' => 'Fırsatlar: Ana Sayfa',
    'LBL_SEARCH_FORM_TITLE' => 'Fırsat Arama',
    'LBL_VIEW_FORM_TITLE' => 'Fırsat Görüntüleme',
    'LBL_LIST_FORM_TITLE' => 'Fırsat Listesi',
    'LBL_OPPORTUNITY_NAME' => 'Fırsat İsmi:',
    'LBL_OPPORTUNITY' => 'Fırsat:',
    'LBL_NAME' => 'Fırsat İsmi',
    'LBL_INVITEE' => 'Kontaklar',
    'LBL_CURRENCIES' => 'Para Birimleri',
    'LBL_LIST_OPPORTUNITY_NAME' => 'İsim',
    'LBL_LIST_ACCOUNT_NAME' => 'Müşteri İsmi',
    'LBL_LIST_DATE_CLOSED' => 'Kapat',
    'LBL_LIST_AMOUNT' => 'Muhtemel',
    'LBL_LIST_AMOUNT_USDOLLAR' => 'Tutar',
    'LBL_ACCOUNT_ID' => 'Müşteri ID',
    'LBL_CURRENCY_RATE' => 'Döviz Kuru',
    'LBL_CURRENCY_ID' => 'Para Birimi ID',
    'LBL_CURRENCY_NAME' => 'Para Birimi İsmi',
    'LBL_CURRENCY_SYMBOL' => 'Para Birimi Sembolü',
//DON'T CONVERT THESE THEY ARE MAPPINGS
    'db_sales_stage' => 'LBL_LIST_SALES_STAGE',
    'db_name' => 'LBL_NAME',
    'db_amount' => 'LBL_LIST_AMOUNT',
    'db_date_closed' => 'LBL_LIST_DATE_CLOSED',
//END DON'T CONVERT
    'UPDATE' => 'Fırsat - Para Birimi Güncelle',
    'UPDATE_DOLLARAMOUNTS' => 'ABD Doları Tutarını Güncelle',
    'UPDATE_VERIFY' => 'Tutarları Kontrol Et',
    'UPDATE_VERIFY_TXT' => 'Fırsatlardaki miktarların düzgün sayısal değerler olduğunu, yalnızca (0-9) arasında rakam içerdiğini ve (.) ayracını kontrol eder',
    'UPDATE_FIX' => 'Sabit Tutarlar',
    'UPDATE_FIX_TXT' => 'Hatalı miktarlar şu anki değerlerden sayısal değer üretilerek düzeltmeye çalışılıyor. Değiştirilen herhangi bir değer, amount_backup veritabanı alanında yedeklenecek. Eğer bu rutini çalıştırır ve hata ile karşılaşırsanız, bu alanı yedekten dönmeden tekrar çalıştırmayınız, çünkü tekrar çalıştırma yedeklenen değerin bozulmasına neden olacaktır.',
    'UPDATE_DOLLARAMOUNTS_TXT' => 'Şu anki döviz kurlarına göre fırsatların U.S. Dollar miktarlarını güncelle. Bu değer, Grafik ve Liste Görünümlerinde Para Birimi Miktarlarını hesaplamak için kullanılmaktadır.',
    'UPDATE_CREATE_CURRENCY' => 'Yeni Para Birimi Oluşturma:',
    'UPDATE_VERIFY_FAIL' => 'Hatalı Kontrol Kaydı:',
    'UPDATE_VERIFY_CURAMOUNT' => 'Şu Anki Tutar:',
    'UPDATE_VERIFY_FIX' => 'Düzeltmenin Çalıştırılmasının sonucu şu olacak:',
    'UPDATE_INCLUDE_CLOSE' => 'Kapanmış Kayıtları İçerir',
    'UPDATE_VERIFY_NEWAMOUNT' => 'Yeni Tutar:',
    'UPDATE_VERIFY_NEWCURRENCY' => 'Yeni Para Birimi:',
    'UPDATE_DONE' => 'Tamam',
    'UPDATE_BUG_COUNT' => 'Hatalar Bulundu ve Düzeltilmesi Denendi:',
    'UPDATE_BUGFOUND_COUNT' => 'Hatalar Bulundu:',
    'UPDATE_COUNT' => 'Güncellenen Kayıtlar:',
    'UPDATE_RESTORE_COUNT' => 'Yenilenen Kayıt Miktarları:',
    'UPDATE_RESTORE' => 'Yenilenen Tutarlar',
    'UPDATE_RESTORE_TXT' => 'Düzeltme işlemi sırasında oluşturulmuş yedeklerden tutar değerleri geri döndürür.',
    'UPDATE_FAIL' => 'Güncellenemiyor -',
    'UPDATE_NULL_VALUE' => 'Tutar değeri BOŞ, 0 olarak değiştiriliyor-',
    'UPDATE_MERGE' => 'Para Birimlerini Birleştir',
    'UPDATE_MERGE_TXT' => 'Birden fazla para birimini tek bir para birimine birleştir. Aynı para birimi için birden fazla para birimi kayıtları varsa, bunları beraber birleştirirsiniz. Bu işlem ayrıca bütün diğer modüller için para birimlerini de birleştirecektir.',
    'LBL_ACCOUNT_NAME' => 'Müşteri İsmi:',
    'LBL_CURRENCY' => 'Para Birimi:',
    'LBL_DATE_CLOSED' => 'Tahmini Kapanış Tarihi:',
    'LBL_DATE_CLOSED_TIMESTAMP' => 'Beklenen Kapanış Tarihi Zaman Damgası',
    'LBL_TYPE' => 'Tipi:',
    'LBL_CAMPAIGN' => 'Kampanya:',
    'LBL_NEXT_STEP' => 'Bir Sonraki Adım:',
    'LBL_LEAD_SOURCE' => 'Potansiyel Kaynağı:',
    'LBL_SALES_STAGE' => 'Satış Aşaması:',
    'LBL_SALES_STATUS' => 'Durum',
    'LBL_PROBABILITY' => 'Olasılık (%):',
    'LBL_DESCRIPTION' => 'Tanım:',
    'LBL_DUPLICATE' => 'Muhtemelen Tekrar Eden Fırsat',
    'MSG_DUPLICATE' => 'Şu anda oluşturmakta olduğunuz Fırsat kaydı, başka bir Fırsat kaydının aynısı olabilir. Aynı ismi içeren Fırsat kayıtları aşağıda listelenmektedir.<br>Kaydet butonuna basarak Fırsatı oluşturmaya devam edebilir, veya İptal butonuna basarak Fırsatı oluşturmadan modüle geri dönebilirsiniz.',
    'LBL_NEW_FORM_TITLE' => 'Fırsat Oluştur',
    'LNK_NEW_OPPORTUNITY' => 'Fırsat Oluştur',
    'LNK_CREATE' => 'Satış Oluştur',
    'LNK_OPPORTUNITY_LIST' => 'Fırsatları Görüntüle',
    'ERR_DELETE_RECORD' => 'Fırsatı silmek için kayıt numarası belirtilmelidir.',
    'LBL_TOP_OPPORTUNITIES' => 'En Önemli Fırsatlarım',
    'NTC_REMOVE_OPP_CONFIRMATION' => 'Bu kontağı fırsat listesinden silmek istediğinizden emin misiniz?',
    'OPPORTUNITY_REMOVE_PROJECT_CONFIRM' => 'Bu fırsatı projeden silmek istediğinizden emin misiniz?',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Fırsatlar',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Aktiviteler',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Tarihçe',
    'LBL_RAW_AMOUNT' => 'İşlenmemiş Miktar',
    'LBL_LEADS_SUBPANEL_TITLE' => 'Potansiyeller',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Kontaklar',
    'LBL_DOCUMENTS_SUBPANEL_TITLE' => 'Dokümanlar',
    'LBL_PROJECTS_SUBPANEL_TITLE' => 'Projeler',
    'LBL_ASSIGNED_TO_NAME' => 'Atanan Kişi:',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'Atanan Kullanıcı',
    'LBL_LIST_SALES_STAGE' => 'Satış Aşaması',
    'LBL_MY_CLOSED_OPPORTUNITIES' => 'Kapatılmış Fırsatlarım',
    'LBL_TOTAL_OPPORTUNITIES' => 'Toplam Fırsatlar',
    'LBL_CLOSED_WON_OPPORTUNITIES' => 'Kapatılan Kazanılmış Fırsatlar',
    'LBL_ASSIGNED_TO_ID' => 'Atanan Kullanıcı ID:',
    'LBL_CREATED_ID' => 'Oluşturan ID',
    'LBL_MODIFIED_ID' => 'Değiştiren ID',
    'LBL_MODIFIED_NAME' => 'Değiştiren Kullanıcı İsmi',
    'LBL_CREATED_USER' => 'Oluşturan Kullanıcı',
    'LBL_MODIFIED_USER' => 'Değiştiren Kullanıcı',
    'LBL_CAMPAIGN_OPPORTUNITY' => 'Kampanyalar',
    'LBL_PROJECT_SUBPANEL_TITLE' => 'Projeler',
    'LABEL_PANEL_ASSIGNMENT' => 'Atama',
    'LNK_IMPORT_OPPORTUNITIES' => 'Fırsat Verilerini Yükle',
    'LBL_EDITLAYOUT' => 'Yerleşimi Değiştir' /*for 508 compliance fix*/,
    //For export labels
    'LBL_EXPORT_CAMPAIGN_ID' => 'Kampanya ID',
    'LBL_OPPORTUNITY_TYPE' => 'Fırsat Tipi',
    'LBL_EXPORT_ASSIGNED_USER_NAME' => 'Atanmış Kullanıcı İsmi',
    'LBL_EXPORT_ASSIGNED_USER_ID' => 'Atanmış Kullanıcı ID',
    'LBL_EXPORT_MODIFIED_USER_ID' => 'Değiştiren ID',
    'LBL_EXPORT_CREATED_BY' => 'Oluşturan ID',
    'LBL_EXPORT_NAME' => 'İsim',
    // SNIP
    'LBL_CONTACT_HISTORY_SUBPANEL_TITLE' => 'İlişkilenmiş Kontakların E-Postaları',
    'LBL_FILENAME' => 'Ek',
    'LBL_PRIMARY_QUOTE_ID' => 'Birincil Teklif',
    'LBL_CONTRACTS' => 'Kontratlar',
    'LBL_CONTRACTS_SUBPANEL_TITLE' => 'Kontratlar',
    'LBL_PRODUCTS' => 'Ürünler',
    'LBL_RLI' => 'Gelir Kalemleri',
    'LNK_OPPORTUNITY_REPORTS' => 'Fırsat Raporlarını Görüntüle',
    'LBL_QUOTES_SUBPANEL_TITLE' => 'Teklifler',
    'LBL_TEAM_ID' => 'Takım ID',
    'LBL_TIMEPERIODS' => 'Zaman Aralıkları',
    'LBL_TIMEPERIOD_ID' => 'Zaman Aralık ID',
    'LBL_COMMITTED' => 'Uygulandı',
    'LBL_FORECAST' => 'Tahminde Dahil et',
    'LBL_COMMIT_STAGE' => 'Onay Aşaması',
    'LBL_COMMIT_STAGE_FORECAST' => 'Tahmin',
    'LBL_WORKSHEET' => 'Çalışma Sayfası',


    'LBL_QUOTE_SUBPANEL_TITLE' => 'Teklifler',

    // Config
    'LBL_OPPS_CONFIG_VIEW_BY_LABEL' => 'Fırsat Hiyerarşisi',
    'LBL_OPPS_CONFIG_VIEW_BY_DATE_ROLLUP' => 'Mevcut Gelir Kalemlerinin en erken veya en geç değerine göre, Fırsatlar için Beklenen Kapanma Tarihini belirle',

    //Dashlet
    'LBL_PIPELINE_TOTAL_IS' => 'Satış Olasılıkları toplamı:',

    'LBL_OPPORTUNITY_ROLE'=>'Fırsat Rolü',
    'LBL_NOTES_SUBPANEL_TITLE' => 'Notlar',

    // Help Text
    'LBL_OPPS_CONFIG_ALERT' => 'Onayla tuşuna basarak, BÜTÜN Satış Tahminlerini silecek ve Fırsatlar Görünümünü değiştireceksiniz. Eğer yapmak istediğiniz bu değilse, iptal tuşuna basın ve önceki ekrana dönün.',
    'LBL_OPPS_CONFIG_ALERT_TO_OPPS' =>
        'Onayla düğmesine tıklayarak TÜM Tahmin verilerini silecek ve Fırsat Görünümünü değiştireceksiniz. '
        .'Ayrıca Gelir Kalemleri hedef modülüne sahip TÜM İşlem Tanımları devre dışı bırakılacak. '
        .'İstediğiniz bu değilse önceki ayarlara geri dönmek için iptal düğmesine tıklayın.',
    'LBL_OPPS_CONFIG_SALES_STAGE_1a' => 'Eğer bütün gelir kalemleri kapandıysa ve en azından biri kazanıldıysa,',
    'LBL_OPPS_CONFIG_SALES_STAGE_1b' => 'Fırsat Satış Aşaması "Kazanılarak Kapatıldı" olarak işaretlendi.',
    'LBL_OPPS_CONFIG_SALES_STAGE_2a' => 'Eğer bütün gelir kalemleri "Kaybedilerek Kapandı" Satış Aşamasındaysa,',
    'LBL_OPPS_CONFIG_SALES_STAGE_2b' => 'Fırsat Satış Aşaması "Kaybedilerek Kapatıldı" olarak işaretlendi.',
    'LBL_OPPS_CONFIG_SALES_STAGE_3a' => 'Eğer hala bir gelir kalemi açıksa,',
    'LBL_OPPS_CONFIG_SALES_STAGE_3b' => 'Fırsat, en az ilerlemiş Satış Aşaması olarak işaretlenecek.',

// BEGIN PRO/CORP
    // List View Help Text
    'LBL_HELP_RECORDS' => '{{plural_module_name}} modülü, münferit satışları başından sonuna kadar takip etmenizi sağlar. Her {{module_name}} kaydı, ileriye yönelik bir satışı belirtir ve ilgili satış bilgilerini aynı zamanda {{quotes_module}}, {{contacts_module}} gibi ilgili diğer önemli bilgileri içerir. Bir {{module_name}} modülü, modülü genellikle "Başarıyla Kapandı" veya "Başarısızlıkla Kapandı" olarak işaretlenene kadar birçok Satış Aşaması boyunca ilerler. {{plural_module_name}} modülü, satış trendlerini anlamak ve tahmin etmek aynı zamanda satış kotalarına ulaşmak için çalışmaya odaklanmak için Sugar&#39;ın {{forecasts_singular_module}} modülü kullanılarak daha da fazla geliştirilebilir.',

    // Record View Help Text
    'LBL_HELP_RECORD' => '{{plural_module_name}} modülü, modülü, satışları ve bu satışlara ait kalemlerin satış sürecini başından sonuna kadar takip etmenizi sağlar. Her {{module_name}} kaydı, ileriye yönelik bir satışı belirtir ve ilgili satış bilgilerini aynı zamanda {{quotes_module}}, {{contacts_module}} gibi  ilgili diğer önemli bilgileri içerir.

- Kaydın alanlarını, herhangi bir alana veya Değiştir düğmesine tıklayarak değiştirin.
- Sol altta yer alan paneli "Veri Görünümü" olarak değiştirerek, diğer kayıtlar ile olan bağlantıları görün veya değiştirin.
- {activitystream_singular_module}} modülünde kullanıcı yorumları ve kayıt değişikliği geçmişini, sol alt bölmeyi "Aktivite Akışı" değerine değiştirerek yapın ve görüntüleyin.
- Kayıt adının sağ tarafında bulunan simgeleri kullanarak bu kaydı takip edin veya favoriler arasına alın.
-  Daha fazla aksiyon, Değiştir tuşunun sağındaki Aksiyonlar seçimli menüde yer almaktadır.',

    // Create View Help Text
    'LBL_HELP_CREATE' => '{{plural_module_name}} atışları ve bu satışlara ait kalemlerin satış sürecini başından sonuna kadar takip etmenizi sağlar. Her {{module_name}} kaydı, ileriye yönelik bir satışı belirtir ve ilgili satış bilgilerini aynı zamanda {{quotes_module}}, {{contacts_module}} gibi ilgili diğer önemli bilgileri içerir.

Bir {{module_name}} oluşturmak için:
1. Alanlar için istenen şekilde değerler girin.
 - "Zorunlu" olarak belirtilmiş alanların kaydetme öncesinde girilmesi gereklidir.
 - Gerek duyulursa ek alanları açmak için "Daha Fazlası"na tıklayın.
2.  "Kaydet" tuşuna basarak yeni kayıt oluşturma işlemini tamamlayın ve önceki sayfaya dönün.',

// END PRO/CORP

    //Marketo
    'LBL_MKTO_SYNC' => 'Marketo&reg; ile senkronize et',
    'LBL_MKTO_ID' => 'Marketo Potansyel ID',

    'LBL_DASHLET_TOP10_SALES_OPPORTUNITIES_NAME' => 'En üst 10 Satış Fırsatı',
    'LBL_TOP10_OPPORTUNITIES_CHART_DESC' => 'Balon grafiğinde en iyi on Gelir Kalemleri görüntülenir.',
    'LBL_TOP10_OPPORTUNITIES_MY_OPP' => 'Fırsatlarım',
    'LBL_TOP10_OPPORTUNITIES_MY_TEAMS_OPP' => "Takımımın Fırsatları",
);
