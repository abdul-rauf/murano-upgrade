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
  'ERR_DELETE_RECORD' => 'Debe especificar un número de registro para eliminar el contacto.',
  'LBL_ACCOUNT_NAME' => 'Nombre de Cuenta',
  'LBL_ADDMORE_BUSINESSCARD' => 'Añadir otra tarjeta de visita',
  'LBL_ADDRESS_INFORMATION' => 'Información de Dirección',
  'LBL_ADD_BUSINESSCARD' => 'Introducir Tarjeta de Visita',
  'LBL_ALTERNATE_ADDRESS' => 'Dirección Alternativa:',
  'LBL_ALT_ADDRESS_CITY' => 'Ciudad Dirección Alternativa:',
  'LBL_ALT_ADDRESS_COUNTRY' => 'País Dirección Alternativa:',
  'LBL_ALT_ADDRESS_POSTALCODE' => 'CP Dirección Alternativa:',
  'LBL_ALT_ADDRESS_STATE' => 'Provincia/Estado Dirección Alternativa:',
  'LBL_ALT_ADDRESS_STREET' => 'Calle Dirección Alternativa:',
  'LBL_ANY_ADDRESS' => 'Dirección Alternativa:',
  'LBL_ANY_EMAIL' => 'Email cualquiera:',
  'LBL_ANY_PHONE' => 'Tel. Cualquiera:',
  'LBL_ASSIGNED_TO_ID' => 'Asignado a:',
  'LBL_ASSIGNED_TO_NAME' => 'Asignado a',
  'LBL_ASSISTANT' => 'Asistente:',
  'LBL_ASSISTANT_PHONE' => 'Tel. Asistente:',
  'LBL_BACKTO_PROSPECTS' => 'Volver a Público Objetivo',
  'LBL_BIRTHDATE' => 'Fecha de nacimiento:',
  'LBL_BUSINESSCARD' => 'Tarjeta de Visita',
  'LBL_CAMPAIGNS' => 'Campañas',
  'LBL_CAMPAIGNS_SUBPANEL_TITLE' => 'Campañas',
  'LBL_CAMPAIGN_ID' => 'ID Campaña',
  'LBL_CAMPAIGN_LIST_SUBPANEL_TITLE' => 'Registro de Campañas',
  'LBL_CITY' => 'Ciudad:',
  'LBL_CONVERTED_LEAD' => 'Cliente Potencial Convertido',
  'LBL_CONVERTPROSPECT' => 'Convertir Público Objetivo',
  'LBL_CONVERT_BUTTON_KEY' => 'V',
  'LBL_CONVERT_BUTTON_LABEL' => 'Convertir Público Objetivo',
  'LBL_CONVERT_BUTTON_TITLE' => 'Convertir Público Objetivo',
  'LBL_COUNTRY' => 'País:',
  'LBL_CREATED_ACCOUNT' => 'Nueva cuenta creada',
  'LBL_CREATED_CALL' => 'Nueva llamada creada',
  'LBL_CREATED_CONTACT' => 'Se ha creado un nuevo contacto',
  'LBL_CREATED_MEETING' => 'Nueva reunión creada',
  'LBL_CREATED_OPPORTUNITY' => 'Crear una nueva oportunidad',
  'LBL_CREATED_PROSPECT' => 'Nuevo contacto creado',
  'LBL_CREATED_USER' => 'Usuario Creado',
  'LBL_DEFAULT_SUBPANEL_TITLE' => 'Público Objetivo',
  'LBL_DEPARTMENT' => 'Departamento:',
  'LBL_DESCRIPTION' => 'Descripción:',
  'LBL_DESCRIPTION_INFORMATION' => 'Información de Descripción',
  'LBL_DNB_BAL_PREVIEW' => 'Vista Previa de Targets',
  'LBL_DNB_BAL_RSLT_CNT' => 'Targets',
  'LBL_DNB_BAL_RSLT_HEADER' => 'D&B: Información de Target',
  'LBL_DNB_PRINCIPAL_ID' => 'ID Principal de D&B',
  'LBL_DO_NOT_CALL' => 'No Llamar:',
  'LBL_DUPLICATE' => 'Posible Público Objetivo Duplicado',
  'LBL_EDIT_ACCOUNT_NAME' => 'Nombre de Cuenta:',
  'LBL_EMAIL_ADDRESS' => 'Correo electrónico:',
  'LBL_EMAIL_OPT_OUT' => 'Rehusar Email:',
  'LBL_EXISTING_ACCOUNT' => 'Usada una cuenta existente',
  'LBL_EXISTING_PROSPECT' => 'Usado un contacto existente',
  'LBL_EXPORT_ASSIGNED_USER_ID' => 'ID Usuario asignado',
  'LBL_EXPORT_ASSIGNED_USER_NAME' => 'Usuario asignado',
  'LBL_EXPORT_CREATED_BY' => 'Creado por ID',
  'LBL_EXPORT_EMAIL2' => 'Otra dirección de Email',
  'LBL_EXPORT_MODIFIED_USER_ID' => 'Modificado por ID',
  'LBL_FAX_PHONE' => 'Fax:',
  'LBL_FILTER_PROSPECTS_REPORTS' => 'Informes de Targets',
  'LBL_FIRST_NAME' => 'Nombre:',
  'LBL_FULL_NAME' => 'Nombre Completo:',
  'LBL_HELP_CREATE' => 'El módulo {{plural_module_name}} se compone de personas individuales que son clientes potenciales no cualificados de los que dispone alguna información sobre ellos, pero aún no están calificados {{leads_singular_module}}.

Para crear un {{module_name}}:
1. Proporcione valores para los campos que desee.
 * Los campos marcados "Obligatorio" se deben completar antes de guardar.
 * Haga clic en "Mostrar más" para ver los campos adicionales si es necesario.
2. Haga clic en "Guardar" para finalizar el nuevo registro y volver a la vista en lista de {{plural_module_name}} .
 * Seleccione la opción "Guardar y ver" para abrir el nuevo {{module_name}} como vista de registro.
 * Seleccione la opción "Guardar y crear nuevo" para un nuevo {{module_name}} inmediatamente.',
  'LBL_HELP_RECORD' => 'El módulo {{plural_module_name}} consiste en personas individuales que son prospectos no cualificados de las que dispones de cierta información, pero todavía no están cualificados como {{leads_singular_module}}.

- Edita el registro haciendo clic en el campo individual o el botón Editar. 
- Ver o modificar enlaces a otros registros en los subpanales yendo a la pestaña "Ver Datos".
- Comentar o ver otros comentarios de usuarios y ver el historial del registro en {{activitystream_singular_module}} yendo a "Actividades Recientes".
- Seguir o guardar como favorito el registro utilizando los iconos a la izquierda del nombre del registro. 
- Acciones adicionales están disponibles en el botón desplegable Acciones.',
  'LBL_HELP_RECORDS' => 'El módulo {{module_name}} se compone de personas individuales que son clientes potenciales no cualificados de las que se tiene cierta información, pero todavía no ha sido un {{lead_module}} cualificado. La información (ej. nombre, dirección de email) con respecto a estos {{plural_module_name}} normalmente se adquieren a partir de tarjetas de visita que recibe por la participación en eventos, conferencias, etc. {{plural_module_name}} en Sugar son registros independientes, ya que no tienen relación con {{contacts_module}}, {{leads_module}}, {{accounts_module}}, o {{opportunities_module}}. Hay varias maneras de crear {{plural_module_name}} en Sugar como por ejemplo a través del módulo {{plural_module_name}}, importando {{plural_module_name}}, etc. Cuando el registro {{module_name}} se ha creado, podrá ver y editar la información relacionada con el {{module_name}} vía {{plural_module_name}} Ver registro.',
  'LBL_HISTORY_SUBPANEL_TITLE' => 'Historial',
  'LBL_HOME_PHONE' => 'Casa:',
  'LBL_IMPORT_VCARD' => 'Importar vCard',
  'LBL_IMPORT_VCARDTEXT' => 'Crear un nuevo contacto automáticamente importando una vCard su sistema de ficheros.',
  'LBL_IMPORT_VCARD_SUCCESS' => 'Se ha creado de forma correcta el Públic Objetivo desde la vCard',
  'LBL_INVALID_EMAIL' => 'Email No Válido:',
  'LBL_INVITEE' => 'Informa Directamente',
  'LBL_LAST_NAME' => 'Apellido:',
  'LBL_LEAD_ID' => 'Id Cliente Potencial',
  'LBL_LIST_EMAIL_ADDRESS' => 'Email',
  'LBL_LIST_FIRST_NAME' => 'Nombre',
  'LBL_LIST_FORM_TITLE' => 'Lista de Público Objetivo',
  'LBL_LIST_LAST_NAME' => 'Apellido',
  'LBL_LIST_NAME' => 'Nombre',
  'LBL_LIST_OTHER_EMAIL_ADDRESS' => 'Email Alternativo',
  'LBL_LIST_PHONE' => 'Teléfono',
  'LBL_LIST_PROSPECT_NAME' => 'Nombre de Público Objetivo',
  'LBL_LIST_PROSPECT_ROLE' => 'Rol',
  'LBL_LIST_TITLE' => 'Título',
  'LBL_MOBILE_PHONE' => 'Móvil:',
  'LBL_MODIFIED_USER' => 'Usuario Modificado',
  'LBL_MODULE_ID' => 'Público Objetivo',
  'LBL_MODULE_NAME' => 'Público Objetivo',
  'LBL_MODULE_NAME_SINGULAR' => 'Público Objetivo',
  'LBL_MODULE_TITLE' => 'Público Objetivo: Inicio',
  'LBL_MORE_INFORMATION' => 'Más Información',
  'LBL_NAME' => 'Nombre:',
  'LBL_NEW_FORM_TITLE' => 'Nuevo Público Objetivo',
  'LBL_OFFICE_PHONE' => 'Tel. Oficina:',
  'LBL_OPP_NAME' => 'Nombre Oportunidad:',
  'LBL_OTHER_EMAIL_ADDRESS' => 'Email alternativo:',
  'LBL_OTHER_PHONE' => 'Tel. Alternativo:',
  'LBL_PHONE' => 'Teléfono:',
  'LBL_PHONE_FAX' => 'Fax oficina',
  'LBL_PHONE_HOME' => 'Teléfono de casa',
  'LBL_PHONE_MOBILE' => 'Móvil',
  'LBL_PHONE_OTHER' => 'Otro teléfono',
  'LBL_PHONE_WORK' => 'Teléfono del trabajo',
  'LBL_POSTAL_CODE' => 'CP:',
  'LBL_PRIMARY_ADDRESS' => 'Dirección Principal:',
  'LBL_PRIMARY_ADDRESS_CITY' => 'Ciudad Dirección Principal:',
  'LBL_PRIMARY_ADDRESS_COUNTRY' => 'País Dirección Principal:',
  'LBL_PRIMARY_ADDRESS_POSTALCODE' => 'CP Dirección Principal:',
  'LBL_PRIMARY_ADDRESS_STATE' => 'Provincia/Estado Dirección Principal:',
  'LBL_PRIMARY_ADDRESS_STREET' => 'Calle Dirección Principal:',
  'LBL_PROSPECT' => 'Público Objetivo:',
  'LBL_PROSPECT_INFORMATION' => 'Visión General',
  'LBL_PROSPECT_LIST' => 'Público Objetivo',
  'LBL_PROSPECT_NAME' => 'Nombre del Público Objetivo:',
  'LBL_PROSPECT_ROLE' => 'Rol:',
  'LBL_RECORD_SAVED_SUCCESS' => 'Ha creado de forma correcta el {{moduleSingularLower}} <a href="#{{buildRoute model=this}}">{{full_name}}</a>.',
  'LBL_SALUTATION' => 'Saludo',
  'LBL_SAVE_PROSPECT' => 'Guardar Público Objetivo',
  'LBL_SEARCH_FORM_TITLE' => 'Búsqueda de Público Objetivo',
  'LBL_SELECT_CHECKED_BUTTON_LABEL' => 'Seleccione Público Objetivo Marcado',
  'LBL_SELECT_CHECKED_BUTTON_TITLE' => 'Seleccione Público Objetivo Marcado',
  'LBL_STATE' => 'Provincia/Estado:',
  'LBL_STREET' => 'Calle',
  'LBL_TITLE' => 'Título:',
  'LBL_TRACKER_KEY' => 'Clave de Seguimiento',
  'LNK_CAMPAIGN_LIST' => 'Campañas',
  'LNK_IMPORT_PROSPECT' => 'Importar Público Objetivo',
  'LNK_IMPORT_PROSPECTS' => 'Importar Prospectos',
  'LNK_IMPORT_VCARD' => 'Crear desde vCard',
  'LNK_NEW_ACCOUNT' => 'Crear Cuenta',
  'LNK_NEW_APPOINTMENT' => 'Crear Cita',
  'LNK_NEW_CALL' => 'Registrar Llamada',
  'LNK_NEW_CAMPAIGN' => 'Crear Campaña',
  'LNK_NEW_CASE' => 'Crear Caso',
  'LNK_NEW_CONTACT' => 'Nuevo Contacto',
  'LNK_NEW_EMAIL' => 'Archivar Email',
  'LNK_NEW_MEETING' => 'Planificar Reunión',
  'LNK_NEW_NOTE' => 'Crear Nota or Adjunto',
  'LNK_NEW_OPPORTUNITY' => 'Crear Oportunidad',
  'LNK_NEW_PROSPECT' => 'Crear Público Objetivo',
  'LNK_NEW_PROSPECT_LIST' => 'Crear Lista de Público Objetivo',
  'LNK_NEW_TASK' => 'Crear Tarea',
  'LNK_PROSPECT_LIST' => 'Ver Público Objetivo',
  'LNK_PROSPECT_LIST_LIST' => 'Listas de Público Objetivo',
  'LNK_SELECT_ACCOUNT' => 'Seleccionar Cuenta',
  'MSG_DUPLICATE' => 'El registro para el prospecto que va a crear podría ser un duplicado de otro registro de prospecto existente. Los registros de prospectos con nombres y/o direcciones de correo similares se listan a continuación.<br>Haga clic en Guardar para continuar con la creación de este prospecto, o en Cancelar para volver al módulo sin crear el prospecto.',
  'MSG_SHOW_DUPLICATES' => 'El registro para el prospecto que va a crear podría ser un duplicado de otro registro de prospecto existente. Los registros de prospectos con nombres y/o direcciones de correo similares se listan a continuación.<br>Haga clic en Guardar para continuar con la creación de este prospecto, o en Cancelar para volver al módulo sin crear el prospecto.',
  'NTC_COPY_ALTERNATE_ADDRESS' => 'Copiar dirección alternativa a dirección principal',
  'NTC_COPY_PRIMARY_ADDRESS' => 'Copiar dirección principal a dirección alternativa',
  'NTC_DELETE_CONFIRMATION' => '¿Está seguro de que desea eliminar este registro?',
  'NTC_OPPORTUNITY_REQUIRES_ACCOUNT' => 'La creación de una oportunidad requiere una cuenta.\\n Por favor, cree una cuenta nueva o seleccione una existente.',
  'NTC_REMOVE_CONFIRMATION' => '¿Está seguro de que desea quitar este contacto del caso?',
  'NTC_REMOVE_DIRECT_REPORT_CONFIRMATION' => '¿Está seguro de que desea quitar este registro como un informador directo?',
  'TPL_BROWSER_SUGAR7_RECORDS_TITLE' => '{{module}} &raquo; {{appId}}',
  'TPL_BROWSER_SUGAR7_RECORD_TITLE' => '{{#if last_name}}{{#if first_name}}{{first_name}} {{/if}}{{last_name}} &raquo; {{/if}}{{module}} &raquo; {{appId}}',
  'db_email1' => 'LBL_LIST_EMAIL_ADDRESS',
  'db_email2' => 'LBL_LIST_OTHER_EMAIL_ADDRESS',
  'db_first_name' => 'LBL_LIST_FIRST_NAME',
  'db_last_name' => 'LBL_LIST_LAST_NAME',
  'db_title' => 'LBL_LIST_TITLE',
);

