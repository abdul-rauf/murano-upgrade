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
$mod_strings = array(
	'DESC_MODULES_INSTALLED'					=> 'Els següents mòduls han estat instal·lats:',
	'DESC_MODULES_QUEUED'						=> 'Els següents mòduls són llestos per ser instal·lats:',

	'ERR_UW_CANNOT_DETERMINE_GROUP'				=> 'No s´ha pogut determinar el Grup',
	'ERR_UW_CANNOT_DETERMINE_USER'				=> 'No s´ha pogut determinar el Propietari',
	'ERR_UW_CONFIG_WRITE'						=> 'Error en actualitzar config.php amb la informació de la nova versió.',
	'ERR_UW_CONFIG'								=> 'Si us plau, de permisos d´escriptura per al seu arxiu config.php, i recarregui aquesta pàgina.',
	'ERR_UW_DIR_NOT_WRITABLE'					=> 'Directori no escribible',
	'ERR_UW_FILE_NOT_COPIED'					=> 'Arxiu no copiat',
	'ERR_UW_FILE_NOT_DELETED'					=> 'Problema en treure el paquet',
	'ERR_UW_FILE_NOT_READABLE'					=> 'L´arxiu no ha pogut ser llegit.',
	'ERR_UW_FILE_NOT_WRITABLE'					=> 'L´arxiu no ha pogut ser mogut o escrit',
	'ERR_UW_FLAVOR_2'							=> 'Edició de l´Actualització:',
	'ERR_UW_FLAVOR'								=> 'Edició del Sistema SugarCRM:',
	'ERR_UW_LOG_FILE_UNWRITABLE'				=> './upgradeWizard.log no ha pogut ser creat/escrit.  Si us plau, canviï els permisos en els directoris de SugarCRM.',
    'ERR_UW_MBSTRING_FUNC_OVERLOAD'				=> 'mbstring.func_overload està establert a un valor major que 1. <br/>Si us plau, canviï això en el seu arxiu php.ini i reiniciï el seu servidor web.',
	'ERR_UW_MYSQL_VERSION'						=> 'SugarCRM requereix MySQL versió 4.1.2 o major.  Trobada:',
	'ERR_UW_OCI8_VERSION'				        => 'La seva versió d&#39;Oracle no és compatible amb Sugar. Vostè haurà de instal·lar una versió que sigui compatible amb l&#39;aplicació de Sugar. Si us plau consulteu la taula de compatibilitat en les notes de llançament de les versions d&#39;Oracle. Versió actual:',
	'ERR_UW_NO_FILE_UPLOADED'					=> '¡Si us plau, especifiqui un arxiu i intenti-ho de nou!',
	'ERR_UW_NO_FILES'							=> 'Ha ocorregut un error, no s´han trobat arxius per comprovar.',
	'ERR_UW_NO_MANIFEST'						=> 'El fitxer zip no conté cap fitxer manifest.php. No es pot continuar.',
	'ERR_UW_NO_VIEW'							=> 'La vista especificada no és vàlida.',
	'ERR_UW_NO_VIEW2'							=> 'La vista no ha estat definida.  Si us plau, vagi a l´inici d´Administració per navegar a aquesta pàgina.',
	'ERR_UW_NOT_VALID_UPLOAD'					=> 'La càrrega no és vàlida.',
	'ERR_UW_NO_CREATE_TMP_DIR'					=> 'No ha pogut crear-se el directori temporal. Comprovi els permisos de fitxers.',
	'ERR_UW_ONLY_PATCHES'						=> 'Només pot pujar pegats en aquesta pàgina.',
    'ERR_UW_PREFLIGHT_ERRORS'					=> 'S´han trobat errors durant la comprovació prèvia',
	'ERR_UW_UPLOAD_ERR'							=> 'Ha ocorregut un error en pujar l´arxiu, si us plau ho intenti de nou!<br>n',
	'ERR_UW_VERSION'							=> 'Versió del Sistema SugarCRM:',
    'ERR_UW_WRONG_TYPE'							=> 'Aquesta pàgina no és per executar',
	'ERR_UW_PHP_FILE_ERRORS'					=> array(
													1 => 'L´arxiu pujat supera el límit definit per la directiva upload_max_filesize a php.ini.',
													2 => 'L´arxiu pujat supera el límit definit per la directiva MAX_FILE_SIZE especificada al formulari HTML.',
													3 => 'L´arxiu ha estat només parcialment pujat.',
													4 => 's´ha pujat cap arxiu.',
													5 => 'Error desconegut.',
													6 => 'Falta una carpeta temporal.',
													7 => 'Error al escriure l´arxiu.',
													8 => 'L´arxiu pujat ha estat blocat per la seva extensió.',
),

    'ERROR_HT_NO_WRITE'                         => 'No es pot escriure en el fitxer: %s.',
    'ERROR_MANIFEST_TYPE'                       => 'El fitxer del manifest ha d&#39;especificar el tipus de paquet.',
    'ERROR_PACKAGE_TYPE'                        => 'L´arxiu de manifest deu especificar un tipus de paquet no reconegut',
    'ERROR_VERSION_INCOMPATIBLE'                => 'L´arxiu pujat no és compatible amb aquesta versió de Sugar:',
    'ERROR_FLAVOR_INCOMPATIBLE'                 => 'L´arxiu pujat no és compatible amb aquesta edició (Community Edition, Professional, o Enterprise) de Sugar:',

    'ERROR_UW_CONFIG_DB'                        => 'Error guardant %s config var a la db (clau %s, valor %s).',
    'ERR_NOT_ADMIN'                             => "Accés no autoritzat a l´administració.",
    'ERR_NO_VIEW_ACCESS_REASON'                 => 'No teniu permís per accedir a aquesta pàgina.',

    'LBL_BUTTON_BACK'							=> 'Enrera',
	'LBL_BUTTON_CANCEL'							=> 'Cancel·la',
	'LBL_BUTTON_DELETE'							=> 'Esborrar Paquet',
	'LBL_BUTTON_DONE'							=> 'Fet',
	'LBL_BUTTON_EXIT'							=> 'Sortida',
	'LBL_BUTTON_INSTALL'						=> 'Inspecció per Actualització',
	'LBL_BUTTON_NEXT'							=> 'Següent',
	'LBL_BUTTON_RECHECK'						=> 'Comprovar de nou',
	'LBL_BUTTON_RESTART'						=> 'Reiniciar',

	'LBL_UPLOAD_UPGRADE'						=> 'Pujar una actualització:',
	'LBL_UPLOAD_FILE_NOT_FOUND'					=> 'Arxiu de pujada no trobat',
	'LBL_UW_BACKUP_FILES_EXIST_TITLE'			=> 'Copia de seguretat',
	'LBL_UW_BACKUP_FILES_EXIST'					=> 'La copia de seguretat dels arxius d´aquesta actualització pot trobar-se a',
	'LBL_UW_BACKUP'								=> 'Copia de seguretat',
	'LBL_UW_CANCEL_DESC'						=> 'L´Assistent d´Actualitzacions ha estat cancelat.  Tots els arxius temporals i l´arxiu zip pujat han estat eliminats.<br><br>Presione "Hecho" para iniciar de nuevo el Assistente de Actualizaciones.',
	'LBL_UW_CHARSET_SCHEMA_CHANGE'				=> 'Canvis de Joc de Caràcters en el Esquema',
	'LBL_UW_CHECK_ALL'							=> 'Marcar-ho tot',
	'LBL_UW_CHECKLIST'							=> 'Passos de l´Actualització',
	'LBL_UW_COMMIT_ADD_TASK_DESC_1'				=> "Les copies de seguretat de tots els arxius sobreescrits están en el següent directori:",
	'LBL_UW_COMMIT_ADD_TASK_DESC_2'				=> "Combinar manualment els següents arxius:",
	'LBL_UW_COMMIT_ADD_TASK_NAME'				=> 'Procés d´Actualizació: Combinar Manualment Arxius',
	'LBL_UW_COMMIT_ADD_TASK_OVERVIEW'			=> 'Si us plau, utilitzi qualsevol el mètode diff que li sigui més familiar per combinar aquests arxius.  Fins que no hagi completat aquest procés, la seva instal·lació de SugarCRM estarà en un estat incert, i l´actualització incompleta.',
	'LBL_UW_COMPLETE'							=> 'Completat',
	'LBL_UW_CONTINUE_CONFIRMATION'              => 'Aquesta versió de Sugar conté un nou acord de llicència. Desitja continuar?',
	'LBL_UW_COMPLIANCE_ALL_OK'					=> 'Tots els requeriments del sistema han estat satisfets',
	'LBL_UW_COMPLIANCE_CALLTIME'				=> 'Configuració de PHP: Pas per Referència en Temps de Trucada',
	'LBL_UW_COMPLIANCE_CURL'					=> 'Mòdul cURL',
	'LBL_UW_COMPLIANCE_IMAP'					=> 'Mòdul IMAP',
	'LBL_UW_COMPLIANCE_MBSTRING'				=> 'Mòdul MBStrings',
	'LBL_UW_COMPLIANCE_MBSTRING_FUNC_OVERLOAD'	=> 'Paràmetre mbstring.func_overload de MBStrings',
	'LBL_UW_COMPLIANCE_MEMORY'					=> 'Configuració de PHP: Límit de Memòria',
    'LBL_UW_COMPLIANCE_STREAM'                  => 'Paràmetre PHP: Stream',
	'LBL_UW_COMPLIANCE_MSSQL_MAGIC_QUOTES'		=> 'MS SQL Server i PHP Magic Quotes GPC',
	'LBL_UW_COMPLIANCE_MYSQL'					=> 'Versió Mínima de MySQL',
    'LBL_UW_COMPLIANCE_DB'                      => 'Versió de base de dades mínima',
	'LBL_UW_COMPLIANCE_PHP_INI'					=> 'Ruta de php.ini',
	'LBL_UW_COMPLIANCE_PHP_VERSION'				=> 'Versió Mínima de PHP',
	'LBL_UW_COMPLIANCE_SAFEMODE'				=> 'Configuració de PHP: Manera Segura',
	'LBL_UW_COMPLIANCE_TITLE'					=> 'Comprobació de Configuració del Servidor',
	'LBL_UW_COMPLIANCE_TITLE2'					=> 'Configuració Detectada',
	'LBL_UW_COMPLIANCE_XML'						=> 'Anàlisis XML',
    'LBL_UW_COMPLIANCE_ZIPARCHIVE'				=> 'Suport ZIP',

	'LBL_UW_COPIED_FILES_TITLE'					=> 'Arxius Copiats amb Èxit',
	'LBL_UW_CUSTOM_TABLE_SCHEMA_CHANGE'			=> 'Canvis al Esquema en Taules Personalitzats',

	'LBL_UW_DB_CHOICE1'							=> 'L´Assistent d´Actualitzacións executarà el SQL',
	'LBL_UW_DB_CHOICE2'							=> 'Consultes de SQL Llançades Manualment',
	'LBL_UW_DB_INSERT_FAILED'					=> 'Fallada en INSERT - els resultats comparats difereixen',
	'LBL_UW_DB_ISSUES_PERMS'					=> 'Privilegis de Base de dades',
	'LBL_UW_DB_ISSUES'							=> 'Problemes de Base de dades',
	'LBL_UW_DB_METHOD'							=> 'Mètode d´Actualització en Base de Dades',
	'LBL_UW_DB_NO_ADD_COLUMN'					=> 'ALTERAR TAULA [table] AFEGIR COLUMNA [column]',
	'LBL_UW_DB_NO_CHANGE_COLUMN'				=> 'ALTERAR TAULA [table] CANVIAR COLUMNA [column]',
	'LBL_UW_DB_NO_CREATE'						=> 'CREAR TAULA [table]',
	'LBL_UW_DB_NO_DELETE'						=> 'SUPRIMIR DE [table]',
	'LBL_UW_DB_NO_DROP_COLUMN'					=> 'ALTERAR TAULA [table] DEIXAR COLUMNA [column]',
	'LBL_UW_DB_NO_DROP_TABLE'					=> 'DEIXAR TAULA [table]',
	'LBL_UW_DB_NO_ERRORS'						=> 'Tots els Privilegis Disponibles',
	'LBL_UW_DB_NO_INSERT'						=> 'INSERTAR A [table]',
	'LBL_UW_DB_NO_SELECT'						=> 'SELECCIONAR [x] DE [table]',
	'LBL_UW_DB_NO_UPDATE'						=> 'ACTUALITZAR [table]',
	'LBL_UW_DB_PERMS'							=> 'Privilegi Necessari',

	'LBL_UW_DESC_MODULES_INSTALLED'				=> 'Les següents actualitzacions s´han instal·lat:',
	'LBL_UW_END_DESC'							=> 'Enhorabona, el seu sistema ha estat actualitzat.',
	'LBL_UW_END_DESC2'							=> 'Si ha escollit executar manualment qualsevol pas com les combinacions d´arxius o les consultes SQL, si us plau ho faci ara. El seu sistema estarà en un estat inestable fins que aquests passos s´hagin completat.',
	'LBL_UW_END_LOGOUT_PRE'						=> 'L&#39;actualització s&#39;ha completat.',
	'LBL_UW_END_LOGOUT_PRE2'					=> 'Feu clic per sortir de l&#39;Assistent per actualització.',
	'LBL_UW_END_LOGOUT'							=> 'Si us plau, tanqui la seva sessió si planeja realitzar més actualitzacions a més d´aquest pegat/nivell d´actualització.',
	'LBL_UW_END_LOGOUT2'						=> 'Tancar sessió',
	'LBL_UW_REPAIR_INDEX'						=> 'Per a millores en el rendiment de base de dades, si us plau executi el <a href="index.php?module=Administration&action=RepairIndex" target="_blank">script de Reparació d´Índexs</a>.',

	'LBL_UW_FILE_DELETED'						=> "ha estat eliminat.<br>",
	'LBL_UW_FILE_GROUP'							=> 'Grup',
	'LBL_UW_FILE_ISSUES_PERMS'					=> 'Permissos d´Arxiu',
	'LBL_UW_FILE_ISSUES'						=> 'Problemes amb Arxius',
	'LBL_UW_FILE_NEEDS_DIFF'					=> 'L´Arxiu Requereix un Diff Manual',
	'LBL_UW_FILE_NO_ERRORS'						=> '<b>Tots els Arxius son Escribibles</b>',
	'LBL_UW_FILE_OWNER'							=> 'Propietari',
	'LBL_UW_FILE_PERMS'							=> 'Permissos',
	'LBL_UW_FILE_UPLOADED'						=> 'ha estat pujat',
	'LBL_UW_FILE'								=> 'Nom d´Arxiu',
	'LBL_UW_FILES_QUEUED'						=> 'Les següents actualitzacions estàn llestes per ser instal·ladeses:',
	'LBL_UW_FILES_REMOVED'						=> "Els següents arxius seràn trets del sistema:<br>",
	'LBL_UW_NEXT_TO_UPLOAD'						=> "<b>Feu clic a Següent per carregar els paquets d&#39;actualització.</b>",
	'LBL_UW_FROZEN'								=> 'Ha de realitzar els següents passos abans de continuar.',
	'LBL_UW_HIDE_DETAILS'						=> 'Amagar Detalls',
	'LBL_UW_IN_PROGRESS'						=> 'En curs',
	'LBL_UW_INCLUDING'							=> 'Incloent',
	'LBL_UW_INCOMPLETE'							=> 'Incomplert',
	'LBL_UW_INSTALL'							=> 'INSTALACIÓ d´Arxiu',
	'LBL_UW_MANUAL_MERGE'						=> 'Combinació d´Arxius',
	'LBL_UW_MODULE_READY_UNINSTALL'				=> "El mòdul és llest per ser desinstal·lat.  Faci clic en \"Procedir\" per procedir amb la instal·lació.<br>",
	'LBL_UW_MODULE_READY'						=> "El mòdul és llest per ser instal·lat.  Faci clic en \"Proceder\" per procedir amb la instal·lació.",
	'LBL_UW_NO_INSTALLED_UPGRADES'				=> 'No s´han detectat Actualitzacions registrades.',
	'LBL_UW_NONE'								=> 'Cap',
	'LBL_UW_NOT_AVAILABLE'						=> 'No disponible',
	'LBL_UW_OVERWRITE_DESC'						=> "Tots els arxius canviats seran sobreescrits, incloent qualsevol personalització al codi font i canvis les plantilles que hagi pogut realitzar. Està segur que desitja procedir?",
	'LBL_UW_OVERWRITE_FILES_CHOICE1'			=> 'Sobreescriure Tots els Arxius',
	'LBL_UW_OVERWRITE_FILES_CHOICE2'			=> 'Combinació Manual - Preservar Tot',
	'LBL_UW_OVERWRITE_FILES'					=> 'Métode de Combinació',
	'LBL_UW_PATCH_READY'						=> 'El pegat està preparat per ser processat. Faci clic al botó "Procedir" per completar el procés d´actualització.',
	'LBL_UW_PATCH_READY2'						=> '<h2>﻿Avís: S´Han Trobat Dissenys Personalitzats</h2><br />Els següents arxius tenen camps nous o dissenys de pantalla modificats aplicats via l´Estudi. El pegat que instal·larà també conté canvis als arxius. Per <u>cada arxiu</u> pot:<br><ul><li>[<b>Per defecte</b>] Mantenir la seva versió deixant en blanc la casella. Les modificacions contingudes al pegat seran ignorades.</li>o<li>Acceptar els arxius actualitzats marcant la casella. Els seus dissenys necessitaran ser aplicat de nou via l´Estudi.</li></ul>',

	'LBL_UW_PREFLIGHT_ADD_TASK'					=> 'Crear Tasca per a Combinació Manual?',
	'LBL_UW_PREFLIGHT_COMPLETE'					=> 'Comprobacions Prèvies',
	'LBL_UW_PREFLIGHT_DIFF'						=> 'Diferenciats',
	'LBL_UW_PREFLIGHT_EMAIL_REMINDER'			=> 'Enviar-se a si mateix un Correu Recordatori per a la Combinació Manual?',
	'LBL_UW_PREFLIGHT_FILES_DESC'				=> 'Els següents arxius han estat modificats.  Desmarqui els elements que requereixen una combinació manual. <i>Els canvis de disseny detectats són desmarcats automàticament; marqui els que haurien de ser sobreescrits.',
	'LBL_UW_PREFLIGHT_NO_DIFFS'					=> 'No es Requereix Combinació Manual d´Arxius.',
	'LBL_UW_PREFLIGHT_NOT_NEEDED'				=> 'No es necessari.',
	'LBL_UW_PREFLIGHT_PRESERVE_FILES'			=> 'Arxius Auto-preservats:',
	'LBL_UW_PREFLIGHT_TESTS_PASSED'				=> 'Tots els tests d´inspecció prèvia han estat satisfactoris. Pressioni "Següent" per procedir amb aquests canvis.',
	'LBL_UW_PREFLIGHT_TESTS_PASSED2'			=> 'Feu clic a Següent per copiar els arxius actualitzats en el sistema.',
	'LBL_UW_PREFLIGHT_TESTS_PASSED3'			=> '<b>Note: </b> La resta del procés d&#39;actualització és obligatòria, i fer clic a Següent es requereixen per completar el procés. Si vostè no desitja continuar, feu clic al botó Cancel·la.',
	'LBL_UW_PREFLIGHT_TOGGLE_ALL'				=> 'Canviar Tots els Arxius',

	'LBL_UW_REBUILD_TITLE'						=> 'Reconstruir Resultat',
	'LBL_UW_SCHEMA_CHANGE'						=> 'Canvis en l´Esquema',

	'LBL_UW_SHOW_COMPLIANCE'					=> 'Mostrar Configuració Detectada',
	'LBL_UW_SHOW_DB_PERMS'						=> 'Mostrar Permisos de Base de Dades que Falten',
	'LBL_UW_SHOW_DETAILS'						=> 'Mostrar Detalls',
	'LBL_UW_SHOW_DIFFS'							=> 'Mostrar Arxius que Requereixen Combinanció Manual',
	'LBL_UW_SHOW_NW_FILES'						=> 'Mostrar Arxius amb Permisos Incorrectes',
	'LBL_UW_SHOW_SCHEMA'						=> 'Mostrar Script de Canvis al Esquema',
	'LBL_UW_SHOW_SQL_ERRORS'					=> 'Mostrar Consultes Errònies',
	'LBL_UW_SHOW'								=> 'Mostrar',

	'LBL_UW_SKIPPED_FILES_TITLE'				=> 'Arxius Omesos',
	'LBL_UW_SKIPPING_FILE_OVERWRITE'			=> 'Ometent Sobreescriptura d´Arxius - Combinació Seleccionada Manual.',
	'LBL_UW_SQL_RUN'							=> 'Comprovar quan s´hagi executat el SQL manualment',
	'LBL_UW_START_DESC'							=> 'Benvingut a l´Assistent d´Actualitzacions de SugarCRM. Aquest assistent està dissenyat per assistir als administradors en l´actualització de les seves instàncies de SugarCRM. Si us plau, segueixi amb atenció les instruccions.',
	'LBL_UW_START_DESC2'						=> 'Recomanem encaridament que realitzi l´actualització contra una instància clonada del seu servidor en producció. Si us plau, faci una còpia de la seva base de dades i dels seus arxius de sistema (tots els arxius de la seva carpeta de SugarCRM) abans de realitzar aquesta operació.',
	'LBL_UW_START_DESC3'						=> 'Feu clic a Següent per realitzar una comprovació del sistema per assegurar-se que el sistema està llest per a l&#39;actualització. La comprovació inclou els permisos d&#39;arxius, privilegis de base de dades i la configuració del servidor.',
	'LBL_UW_START_UPGRADED_UW_DESC'				=> 'El nou Assistent d´Actualitzacions continuarà amb el procés d´instal·lació. Si us plau, continui amb la seva actualització.',
	'LBL_UW_START_UPGRADED_UW_TITLE'			=> 'Benvingut al nou Assistent d´Actualitzacions',

	'LBL_UW_SYSTEM_CHECK_CHECKING'				=> 'Realitzant comprovacions. Esperi, si us plau. Això podria tardar uns 30 segons.',
	'LBL_UW_SYSTEM_CHECK_FILE_CHECK_START'		=> 'Buscant tots els arxius a comprovar.',
	'LBL_UW_SYSTEM_CHECK_FILES'					=> 'Arxius',
	'LBL_UW_SYSTEM_CHECK_FOUND'					=> 'Trobats',

	'LBL_UW_TITLE_CANCEL'						=> 'Cancel·la',
	'LBL_UW_TITLE_COMMIT'						=> 'Realitzar Actualització',
	'LBL_UW_TITLE_END'							=> 'Informe',
	'LBL_UW_TITLE_PREFLIGHT'					=> 'Comprovacions Prèvies',
	'LBL_UW_TITLE_START'						=> 'Iniciar',
	'LBL_UW_TITLE_SYSTEM_CHECK'					=> 'Comprovacions del Sistema',
	'LBL_UW_TITLE_UPLOAD'						=> 'Pujar Actualització',
	'LBL_UW_TITLE'								=> 'Assistent d´Actualitzacions',
	'LBL_UW_UNINSTALL'							=> 'Desinstal·lar',
	//500 upgrade labels
	'LBL_UW_ACCEPT_THE_LICENSE' 				=> 'Acceptar Llicència',
	'LBL_UW_CONVERT_THE_LICENSE' 				=> 'Convertir Llicència',
	'LBL_UW_CUSTOMIZED_OR_UPGRADED_MODULES'     => 'Mòduls Actualitzats/Personalitzats',
	'LBL_UW_FOLLOWING_MODULES_CUSTOMIZED'       => 'S´han detectat els següents mòduls personalitzats que seran preservats',
	'LBL_UW_FOLLOWING_MODULES_UPGRADED'         => 'S´han detectat els següents mòduls com personalitzats usant l´Estudi i seran actualitzats',

	'LBL_START_UPGRADE_IN_PROGRESS'             => 'Inici en progrés',
	'LBL_SYSTEM_CHECKS_IN_PROGRESS'             => 'Comprovacions del Sistema en progrés',
	'LBL_LICENSE_CHECK_IN_PROGRESS'             => 'Comprovació de Llicència en progrés',
	'LBL_PREFLIGHT_CHECK_IN_PROGRESS'           => 'Comprovacions Prèvies en progrés',
    'LBL_PREFLIGHT_FILE_COPYING_PROGRESS'       => 'Còpia d&#39;arxius en progrés',
	'LBL_COMMIT_UPGRADE_IN_PROGRESS'            => 'Realització de l´Actualizació en progrés',
    'LBL_UW_COMMIT_DESC'						=> 'Feu clic a Següent per executar seqüències d&#39;ordres addicionals d&#39;actualització.',
	'LBL_UPGRADE_SCRIPTS_IN_PROGRESS'			=> 'Scripts d&#39;actualització en curs',
	'LBL_UPGRADE_SUMMARY_IN_PROGRESS'			=> 'Resumen de l´Actualització en progrés',
	'LBL_UPGRADE_IN_PROGRESS'                   => 'en curs     ',
	'LBL_UPGRADE_TIME_ELAPSED'                  => 'Temps transcorregut',
	'LBL_UPGRADE_CANCEL_IN_PROGRESS'			=> 'Cancel·lació d´Actualització i Neteja en progrés',
    'LBL_UPGRADE_TAKES_TIME_HAVE_PATIENCE'      => 'L´actualització pot durar una estona',
    'LBL_UPLOADE_UPGRADE_IN_PROGRESS'           => 'Comprovacions de pujada en progrés',
	'LBL_UPLOADING_UPGRADE_PACKAGE'      		=> 'Pujant paquet d´actualització...',
    'LBL_UW_DORP_THE_OLD_SCHMEA' 				=> 'Desitja que Sugar elimini l´esquema obsolet de la versió 4.5.1?',
	'LBL_UW_DROP_SCHEMA_UPGRADE_WIZARD'			=> 'L´Assistent d´Actualitzacions Eliminarà l´antic esquema 4.5.1',
	'LBL_UW_DROP_SCHEMA_MANUAL'					=> 'Eliminació Manual de l´Esquema Postinstal·lació',
	'LBL_UW_DROP_SCHEMA_METHOD'					=> 'Mètode d´Eliminació d´Antic Esquema',
	'LBL_UW_SHOW_OLD_SCHEMA_TO_DROP'			=> 'Mostrar l´Antic Esquema que seria eliminat',
	'LBL_UW_SKIPPED_QUERIES_ALREADY_EXIST'      => 'Consultes Saltades',
	'LBL_INCOMPATIBLE_PHP_VERSION'              => 'Es requereix la versió de PHP 5 o superior.',
	'ERR_CHECKSYS_PHP_INVALID_VER'      => 'La seva versió de PHP no està soportada per Sugar. Necessitarà instalar una versió que sigui compatible amb l&#39;aplicació Sugar. Si us plau,consulti la Matriu de Compatibilitat de les Notes de Llançament per a informació sobre les Versions de PHP soportades. La seva versió és la',
	'LBL_BACKWARD_COMPATIBILITY_ON' 			=> 'La manera de compatibilitat cap a enrere de PHP està habilitada. Estableixi zend.ze1_compatibility_mode Off abans de continuar',
	//including some strings from moduleinstall that are used in Upgrade
	'LBL_ML_ACTION' => 'Acció',
    'LBL_ML_CANCEL'             => 'Cancel·la',
    'LBL_ML_COMMIT'=>'Procedir',
    'LBL_ML_DESCRIPTION' => 'Descripció',
    'LBL_ML_INSTALLED' => 'Data d&#39;instalació',
    'LBL_ML_NAME' => 'Nom',
    'LBL_ML_PUBLISHED' => 'Data de Publicació',
    'LBL_ML_TYPE' => 'Tipus',
    'LBL_ML_UNINSTALLABLE' => 'Desinstalable',
    'LBL_ML_VERSION' => 'Versió',
	'LBL_ML_INSTALL'=>'Instal·lar',
	//adding the string used in tracker. copying from homepage
	'LBL_HOME_PAGE_4_NAME' => 'Monitorització',
	'LBL_CURRENT_PHP_VERSION' => '(La seva versió actual de PHP és',
	'LBL_RECOMMENDED_PHP_VERSION' => 'La versió recomanada de PHP és 5.2.1 o superior)',
	'LBL_MODULE_NAME' => 'Assistent d&#39;actualitzacions',
	'LBL_MODULE_NAME_SINGULAR' => 'Assistent d&#39;actualitzacions',
	'LBL_UPLOAD_SUCCESS' => 'Actualització d&#39;un paquet carregat amb èxit. Feu clic a Següent per realitzar una comprovació final.',
	'LBL_UW_TITLE_LAYOUTS' => 'confirmar dissenys',
	'LBL_LAYOUT_MODULE_TITLE' => 'Dissenys',
	'LBL_LAYOUT_MERGE_DESC' => 'Hi ha nous camps disponibles que s&#39;han afegit com a part d&#39;aquesta actualització i pot ser automàtica en els dissenys del mòdul existent. Per obtenir més informació sobre els nous camps, si us plau referiu-vos a les notes de llançament per a la versió a la qual va a actualitzar<br><br>Si no voleu afegir els nous camps, si us plau, inhabiliteu el mòdul, i el seu dissenys personalitzats es mantindran sense canvis. Els camps estaran disponibles a Studio després de l&#39;actualització.<br><br>',
	'LBL_LAYOUT_MERGE_TITLE' => 'Feu clic a Següent per confirmar els canvis i per finalitzar l&#39;actualització.',
	'LBL_LAYOUT_MERGE_TITLE2' => 'Feu clic a Següent per completar l&#39;actualització.',
	'LBL_UW_CONFIRM_LAYOUTS' => 'Confirmar dissenys',
    'LBL_UW_CONFIRM_LAYOUT_RESULTS' => 'Confirmar els resultats de disseny',
    'LBL_UW_CONFIRM_LAYOUT_RESULTS_DESC' => 'Els següents dissenys es van fusionar amb èxit:',
	'LBL_SELECT_FILE' => 'Seleccioneu el fitxer:',
	'LBL_LANGPACKS' => 'Paquets d&#39;idioma' /*for 508 compliance fix*/,
	'LBL_MODULELOADER' => 'Carregador de Mòduls' /*for 508 compliance fix*/,
	'LBL_PATCHUPGRADES' => 'Les actualitzacions de patch' /*for 508 compliance fix*/,
	'LBL_THEMES' => 'Temes' /*for 508 compliance fix*/,
	'LBL_WORKFLOW' => 'Flux de treball' /*for 508 compliance fix*/,
	'LBL_UPGRADE' => 'Actualització' /*for 508 compliance fix*/,
	'LBL_PROCESSING' => 'En procés' /*for 508 compliance fix*/,
    'LBL_GLOBAL_TEAM_DESC'                      => 'Globalment Visible',
);
