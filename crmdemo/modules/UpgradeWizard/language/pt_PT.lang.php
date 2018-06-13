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
	'DESC_MODULES_INSTALLED'					=> 'Os seguintes Módulos foram instalados:',
	'DESC_MODULES_QUEUED'						=> 'Os seguintes Módulos estão prontos para serem instalados:',

	'ERR_UW_CANNOT_DETERMINE_GROUP'				=> 'Não pode determinar o Grupo',
	'ERR_UW_CANNOT_DETERMINE_USER'				=> 'Não pode determinar o proprietário (Owner)',
	'ERR_UW_CONFIG_WRITE'						=> 'Erro ao atualizar o ficheiro config.php com a nova informação da versão.',
	'ERR_UW_CONFIG'								=> 'Por favor certifique-se que o seu ficheiro config.php pode ser escrito e recarregue esta página.',
	'ERR_UW_DIR_NOT_WRITABLE'					=> 'Diretório sem permissões de escrita',
	'ERR_UW_FILE_NOT_COPIED'					=> 'Ficheiro não foi copiado',
	'ERR_UW_FILE_NOT_DELETED'					=> 'Problema ao remover o pacote',
	'ERR_UW_FILE_NOT_READABLE'					=> 'Ficheiro não pode ser lido.',
	'ERR_UW_FILE_NOT_WRITABLE'					=> 'Arquivo não pode ser movido ou escrito para',
	'ERR_UW_FLAVOR_2'							=> 'Upgrade Flavor:',
	'ERR_UW_FLAVOR'								=> 'SugarCRM System Flavor:',
	'ERR_UW_LOG_FILE_UNWRITABLE'				=> './upgradeWizard.log não pode ser criado ou escrito. Por favor corrija as permissões do seu diretório do SugarCRM.',
    'ERR_UW_MBSTRING_FUNC_OVERLOAD'				=> 'mbstring.func_overload configurado para um valor maior que 1.<br/>Por favor modifique isto no seu php.ini e reinicie o servidor web.',
	'ERR_UW_MYSQL_VERSION'						=> 'SugarCRM precisa do MySQL 4.1.2 ou uma versão mais recente. Foi encontrada a versão:',
	'ERR_UW_OCI8_VERSION'				        => 'A sua versão do Oracle não é suportada pelo Sugar. Precisa de instalar uma versão que seja compatível com a aplicação Sugar. Por favor consulte a Matriz de Compatibilidade nas Notas de Lançamento para ver as versões de Oracle suportadas. Versão atual: ',
	'ERR_UW_NO_FILE_UPLOADED'					=> 'Por favor especifique um ficheiro e tente novamente!',
	'ERR_UW_NO_FILES'							=> 'Ocorreu um erro, nenhum ficheiro foi encontrado para a verificação.',
	'ERR_UW_NO_MANIFEST'						=> 'No ficheiro zip está em falta o ficheiro manifest.php. Não podemos prosseguir.',
	'ERR_UW_NO_VIEW'							=> 'Visualização especificada inválida.',
	'ERR_UW_NO_VIEW2'							=> 'Visualização não definida. Por favor aceda à página de administração para navegar até esta página.',
	'ERR_UW_NOT_VALID_UPLOAD'					=> 'Carregamento não valido',
	'ERR_UW_NO_CREATE_TMP_DIR'					=> 'Não pode criar o diretório temp. Verifique as permissões do ficheiro.',
	'ERR_UW_ONLY_PATCHES'						=> 'Apenas pode carregar patches nesta página.',
    'ERR_UW_PREFLIGHT_ERRORS'					=> 'Erros encontrados durante a verificação Preflight',
	'ERR_UW_UPLOAD_ERR'							=> 'Ocorreu um erro ao carregar o ficheiro, por favor tente novamente!<br>\\n',
	'ERR_UW_VERSION'							=> 'Versão do sistema SugarCRM',
    'ERR_UW_WRONG_TYPE'							=> 'Esta página não é para ser executada',
	'ERR_UW_PHP_FILE_ERRORS'					=> array(
													1 => 'O ficheiro carregado excede a directiva upload_max_filesize no php.ini',
													2 => 'O ficheiro carregado excede a directiva MAX_FILE_SIZE que foi especificada no formulário HTML.',
													3 => 'O ficheiro carregado foi apenas parcialmente carregado.',
													4 => 'Nenhum ficheiro foi carregado.',
													5 => 'Erro desconhecido.',
													6 => 'Pasta temporária em falta.',
													7 => 'Falha ao escrever o ficheiro para o disco.',
													8 => 'Carregamento do ficheiro interrompido por extensão.',
),

    'ERROR_HT_NO_WRITE'                         => 'Não é possível escrever para o ficheiro: %s',
    'ERROR_MANIFEST_TYPE'                       => 'Ficheiro manifesto deve especificar o tipo de pacote.',
    'ERROR_PACKAGE_TYPE'                        => 'Ficheiro manifesto especifica um tipo de pacote não reconhecido: %s',
    'ERROR_VERSION_INCOMPATIBLE'                => 'O ficheiro carregado não é compatível com esta versão do Sugar:',
    'ERROR_FLAVOR_INCOMPATIBLE'                 => 'O ficheiro carregado não é compatível com esta versão (edição Professional, Enterprise ou Ultimate) do Sugar: %s',

    'ERROR_UW_CONFIG_DB'                        => 'Erro ao gravar %s a variável de configuração para a base de dados (chave %s, valor%s).',
    'ERR_NOT_ADMIN'                             => "Acesso não autorizado para administração.",
    'ERR_NO_VIEW_ACCESS_REASON'                 => 'Não tem permissões para aceder a esta página.',

    'LBL_BUTTON_BACK'							=> 'Voltar',
	'LBL_BUTTON_CANCEL'							=> 'Cancelar',
	'LBL_BUTTON_DELETE'							=> 'Eliminar o Pacote',
	'LBL_BUTTON_DONE'							=> 'Concluído',
	'LBL_BUTTON_EXIT'							=> 'Sair',
	'LBL_BUTTON_INSTALL'						=> 'Actualização Preflight',
	'LBL_BUTTON_NEXT'							=> 'Próximo >',
	'LBL_BUTTON_RECHECK'						=> 'Verificar novamente',
	'LBL_BUTTON_RESTART'						=> 'Reiniciar',

	'LBL_UPLOAD_UPGRADE'						=> 'Carregar uma actualização:',
	'LBL_UPLOAD_FILE_NOT_FOUND'					=> 'Ficheiro de carregamento não encontrado',
	'LBL_UW_BACKUP_FILES_EXIST_TITLE'			=> 'Ficheiro de Backup',
	'LBL_UW_BACKUP_FILES_EXIST'					=> 'Ficheiros de Backup desta actualização não podem ser encontrados em',
	'LBL_UW_BACKUP'								=> 'Ficheiro de Backup',
	'LBL_UW_CANCEL_DESC'						=> 'A atualização foi cancelada. Todos os ficheiros temporários que foram copiados e todos os ficheiros de atualização que foram carregados foram eliminados.',
	'LBL_UW_CHARSET_SCHEMA_CHANGE'				=> 'Alterações de Character Set Schema',
	'LBL_UW_CHECK_ALL'							=> 'Verificar todos',
	'LBL_UW_CHECKLIST'							=> 'Passos da Actualização',
	'LBL_UW_COMMIT_ADD_TASK_DESC_1'				=> "Backups dos Ficheiros Sobrescritos estão no seguinte diretório: \n",
	'LBL_UW_COMMIT_ADD_TASK_DESC_2'				=> "Fundir manualmente os seguintes ficheiros:",
	'LBL_UW_COMMIT_ADD_TASK_NAME'				=> 'Processo de Actualização: Fundir Manualmente os Ficheiros',
	'LBL_UW_COMMIT_ADD_TASK_OVERVIEW'			=> 'Por favor utilize o seu método preferido de diff para juntar os ficheiros. Até então a sua instalação do SugarCRM estará incompleta.',
	'LBL_UW_COMPLETE'							=> 'Completo',
	'LBL_UW_CONTINUE_CONFIRMATION'              => 'Esta nova versão do Sugar contém um novo acordo de licença. Pretende continuar?',
	'LBL_UW_COMPLIANCE_ALL_OK'					=> 'Todos os Requisitos de Definições do Sistema foram Cumpridos',
	'LBL_UW_COMPLIANCE_CALLTIME'				=> 'Definições do PHP: Passagem de Tempo da chamada por Referência',
	'LBL_UW_COMPLIANCE_CURL'					=> 'Módulo de cURL',
	'LBL_UW_COMPLIANCE_IMAP'					=> 'Módulo IMAP',
	'LBL_UW_COMPLIANCE_MBSTRING'				=> 'Módulo MBStrings',
	'LBL_UW_COMPLIANCE_MBSTRING_FUNC_OVERLOAD'	=> 'Parâmetro MBStrings mbstring.func_overload',
	'LBL_UW_COMPLIANCE_MEMORY'					=> 'Definição PHP: Limite de Memória',
    'LBL_UW_COMPLIANCE_STREAM'                  => 'Definição PHP: Stream',
	'LBL_UW_COMPLIANCE_MSSQL_MAGIC_QUOTES'		=> 'MS SQL Server & PHP Magic Quotes GPC',
	'LBL_UW_COMPLIANCE_MYSQL'					=> 'Versão mínima do MySQL',
    'LBL_UW_COMPLIANCE_DB'                      => 'Versão mínima da base de dados',
	'LBL_UW_COMPLIANCE_PHP_INI'					=> 'Localização do php.ini',
    'LBL_UW_COMPLIANCE_PHP_VERSION'             => 'Versão PHP',
	'LBL_UW_COMPLIANCE_SAFEMODE'				=> 'Definições do PHP: Modo Seguro',
	'LBL_UW_COMPLIANCE_TITLE'					=> 'Verificar Definições do Servidor',
	'LBL_UW_COMPLIANCE_TITLE2'					=> 'Definições Detetadas',
	'LBL_UW_COMPLIANCE_XML'						=> 'Análise XML',
    'LBL_UW_COMPLIANCE_ZIPARCHIVE'				=> 'Suporta Zip',

	'LBL_UW_COPIED_FILES_TITLE'					=> 'Ficheiros copiados com sucesso',
	'LBL_UW_CUSTOM_TABLE_SCHEMA_CHANGE'			=> 'Alterações de esquema da tabela personalizada',

	'LBL_UW_DB_CHOICE1'							=> 'Assistente de Atualização Executa SQL',
	'LBL_UW_DB_CHOICE2'							=> 'Queries SQL Manuais',
	'LBL_UW_DB_INSERT_FAILED'					=> 'INSERT falhou - resultados comparados diferem',
	'LBL_UW_DB_ISSUES_PERMS'					=> 'Privilégios da base de dados',
	'LBL_UW_DB_ISSUES'							=> 'Edições da base de dados',
	'LBL_UW_DB_METHOD'							=> 'Método de Actualização da base de dados',
	'LBL_UW_DB_NO_ADD_COLUMN'					=> 'ALTER TABLE [table] ADD COLUMN [column]',
	'LBL_UW_DB_NO_CHANGE_COLUMN'				=> 'ALTER TABLE [table] CHANGE COLUMN [column]',
	'LBL_UW_DB_NO_CREATE'						=> 'CREATE TABLE [table]',
	'LBL_UW_DB_NO_DELETE'						=> 'DELETE FROM [table]',
	'LBL_UW_DB_NO_DROP_COLUMN'					=> 'ALTER TABLE [table] DROP COLUMN [column]',
	'LBL_UW_DB_NO_DROP_TABLE'					=> 'DROP TABLE [table]',
	'LBL_UW_DB_NO_ERRORS'						=> 'Todos os privilégios disponíveis',
	'LBL_UW_DB_NO_INSERT'						=> 'INSERT INTO [table]',
	'LBL_UW_DB_NO_SELECT'						=> 'SELECT [x] FROM [table]',
	'LBL_UW_DB_NO_UPDATE'						=> 'UPDATE [table]',
	'LBL_UW_DB_PERMS'							=> 'Privilégio necessário',

	'LBL_UW_DESC_MODULES_INSTALLED'				=> 'As seguintes actualizações foram instaladas:',
	'LBL_UW_END_DESC'							=> 'Parabéns, o seu sistema está agora actualizado.',
	'LBL_UW_END_DESC2'							=> 'Se escolheu executar manualmente qualquer passo tal como juntar um ficheiro ou SQL queries, por favor faça isso agora. O seu sistema não estará estável enquanto estes passos não forem concluídos.',
	'LBL_UW_END_LOGOUT_PRE'						=> 'A actualização está completa.',
	'LBL_UW_END_LOGOUT_PRE2'					=> 'Clique em "Concluído" para sair do Assistente de Atualização.',
	'LBL_UW_END_LOGOUT'							=> 'Por favor saia da sua conta se planeia uma actualização de nível superior ao desta correcção/actualização',
	'LBL_UW_END_LOGOUT2'						=> 'Sair',
	'LBL_UW_REPAIR_INDEX'						=> 'Para melhorar o desempenho da sua base de dados, execute o script <a href="index.php?module=Administration&action=RepairIndex" target="_blank">Reparar Índice</a>.',

	'LBL_UW_FILE_DELETED'						=> " foi removido.<br>",
	'LBL_UW_FILE_GROUP'							=> 'Grupo',
	'LBL_UW_FILE_ISSUES_PERMS'					=> 'Permissões do ficheiro',
	'LBL_UW_FILE_ISSUES'						=> 'Edições do ficheiro',
	'LBL_UW_FILE_NEEDS_DIFF'					=> 'Ficheiro requer manual Diff',
	'LBL_UW_FILE_NO_ERRORS'						=> '<b>Todos os ficheiros podem ser escritos</b>',
	'LBL_UW_FILE_OWNER'							=> 'Proprietário',
	'LBL_UW_FILE_PERMS'							=> 'Permissões',
	'LBL_UW_FILE_UPLOADED'						=> 'foi carregado',
	'LBL_UW_FILE'								=> 'Nome do ficheiro',
	'LBL_UW_FILES_QUEUED'						=> 'As seguintes actualizações estão prontas para serem instaladas:',
	'LBL_UW_FILES_REMOVED'						=> "Os seguintes ficheiros serão removidos do sistema:<br>\n",
	'LBL_UW_NEXT_TO_UPLOAD'						=> "<b>Clique em Seguinte para carregar pacotes de actualização.</b>",
	'LBL_UW_FROZEN'								=> 'As etapas requeridas devem ser terminadas antes de continuar.',
	'LBL_UW_HIDE_DETAILS'						=> 'Ocultar Detalhes',
	'LBL_UW_IN_PROGRESS'						=> 'Em Progresso',
	'LBL_UW_INCLUDING'							=> 'Incluindo',
	'LBL_UW_INCOMPLETE'							=> 'Incompleto',
	'LBL_UW_INSTALL'							=> 'Ficheiro INSTALL',
	'LBL_UW_MANUAL_MERGE'						=> 'Fundir Ficheiros',
	'LBL_UW_MODULE_READY_UNINSTALL'				=> "O Módulo está pronto para ser desinstalado. Clique em \"Confirmar\" para continuar a instalação.<br>\n",
	'LBL_UW_MODULE_READY'						=> "O Módulo está pronto para ser instalado. Clique em \"Commit\" para continuar com a instalação.",
	'LBL_UW_NO_INSTALLED_UPGRADES'				=> 'Nenhuma Actualização gravada detectada.',
	'LBL_UW_NONE'								=> 'Nenhum',
	'LBL_UW_NOT_AVAILABLE'						=> 'Não disponível',
	'LBL_UW_OVERWRITE_DESC'						=> "Todos os ficheiros alterados serão sobrescritos - incluindo qualquer codificação à medida e alterações feitas no modelo. Você tem certeza que deseja continuar?",
	'LBL_UW_OVERWRITE_FILES_CHOICE1'			=> 'Sobrescrever todos os ficheiros',
	'LBL_UW_OVERWRITE_FILES_CHOICE2'			=> 'Fundir Manualmente - Preservar todos',
	'LBL_UW_OVERWRITE_FILES'					=> 'Método de Fusão',
	'LBL_UW_PATCH_READY'						=> 'O patch está pronto para prosseguir. Clique no botão &quot;Instalar&quot; abaixo para completar o processo de actualização.',
	'LBL_UW_PATCH_READY2'						=> '<h2>Aviso: Layouts Personalizados Encontrados</h2><br />Os seguintes ficheiros têm novos campos ou layouts de ecrã modificados através do Studio. O patch que está a preparar para instalar também contém alterações nos ficheiros. Para <u>cada ficheiro</u> deverá:<br><ul><li>[<b>Default</b>] Reter sua versão deixando a caixa de seleção em branco. As modificações no patch serão ignoradas.</li>ou<li>Aceite os ficheiros atualizados selecionando a caixa de seleção. Os seus layouts deverão ser aplicados novamente através do Studio.</li></ul>',

	'LBL_UW_PREFLIGHT_ADD_TASK'					=> 'Criar um item da tarefa para fundir manualmente?',
	'LBL_UW_PREFLIGHT_COMPLETE'					=> 'Verificar Preflight',
	'LBL_UW_PREFLIGHT_DIFF'						=> 'Diferenciado',
	'LBL_UW_PREFLIGHT_EMAIL_REMINDER'			=> 'Deseja receber um e-mail de aviso sobre a Fusão Manual?',
	'LBL_UW_PREFLIGHT_FILES_DESC'				=> 'Os ficheiros listados abaixo foram modificados. Itens não marcados que exigem uma junção manual. <i>Qualquer mudança detectada no layout será automaticamente desmarcada; marque qualquer uma que possa ser sobrescrita.',
	'LBL_UW_PREFLIGHT_NO_DIFFS'					=> 'Não é necessário fundir ficheiros manualmente.',
	'LBL_UW_PREFLIGHT_NOT_NEEDED'				=> 'Sem necessidade.',
	'LBL_UW_PREFLIGHT_PRESERVE_FILES'			=> 'Ficheiros preservados automaticamente',
	'LBL_UW_PREFLIGHT_TESTS_PASSED'				=> 'Todos os testes Preflight aprovados.',
	'LBL_UW_PREFLIGHT_TESTS_PASSED2'			=> 'Clique em Avançar copiar os arquivos actualizados para o sistema.',
	'LBL_UW_PREFLIGHT_TESTS_PASSED3'			=> '<b>Nota: </b> O resto do processo de actualização é obrigatório, e se clicar em Seguinte, terá que concluir o processo. Se não deseja prosseguir, clique no botão Cancelar.',
	'LBL_UW_PREFLIGHT_TOGGLE_ALL'				=> 'Substituir todos os ficheiros',

	'LBL_UW_REBUILD_TITLE'						=> 'Resultado da reconstrução',
	'LBL_UW_SCHEMA_CHANGE'						=> 'Alterar Schema',

	'LBL_UW_SHOW_COMPLIANCE'					=> 'Mostrar Definições Detetadas',
	'LBL_UW_SHOW_DB_PERMS'						=> 'Mostrar permissões da Base de Dados em falta.',
	'LBL_UW_SHOW_DETAILS'						=> 'Mostrar Detalhes',
	'LBL_UW_SHOW_DIFFS'							=> 'Mostrar ficheiros que requerem fusão manual',
	'LBL_UW_SHOW_NW_FILES'						=> 'Mostrar ficheiros com Más Permissões',
	'LBL_UW_SHOW_SCHEMA'						=> 'Mostrar Schema Change Script',
	'LBL_UW_SHOW_SQL_ERRORS'					=> 'Mostrar Más Queries',
	'LBL_UW_SHOW'								=> 'Mostrar',

	'LBL_UW_SKIPPED_FILES_TITLE'				=> 'Ficheiros Ignorados',
	'LBL_UW_SKIPPING_FILE_OVERWRITE'			=> 'A ignorar ficheiros sobrescritos - Fundir manualmente os selecionados.',
	'LBL_UW_SQL_RUN'							=> 'Verificar quando o SQL foi executado manualmente',
	'LBL_UW_START_DESC'							=> 'Este assistente irá ajudá-lo na atualização desta instância do Sugar.',
	'LBL_UW_START_DESC2'						=> 'Nota: Recomendamos que efetue o backup da base de dados do Sugar e dos ficheiros do sistema (todos os ficheiros da pasta SugarCRM) antes de atualizar o sistema de produção. Recomendamos vivamente que efetue primeiro uma atualização de teste numa instância exata do sistema de produção.',
	'LBL_UW_START_DESC3'						=> 'Clique em Seguinte para executar uma verificação de sistema para certificar-se de que o sistema está pronto para a atualização. A verificação inclui permissões de ficheiros, privilégios de base de dados e definições do servidor.',
	'LBL_UW_START_UPGRADED_UW_DESC'				=> 'O novo Assistente de Atualização irá agora retomar o processo de atualização. Por favor continue a sua atualização.',
	'LBL_UW_START_UPGRADED_UW_TITLE'			=> 'Bem-vindo ao Novo Assistente de Atualização',

	'LBL_UW_SYSTEM_CHECK_CHECKING'				=> 'A verificar, por favor espere. Isto pode levar mais do que 30 segundos.',
	'LBL_UW_SYSTEM_CHECK_FILE_CHECK_START'		=> 'Procurando todos os arquivos pertinentes para a verificação',
	'LBL_UW_SYSTEM_CHECK_FILES'					=> 'Ficheiros',
	'LBL_UW_SYSTEM_CHECK_FOUND'					=> 'Encontrado',

	'LBL_UW_TITLE_CANCEL'						=> 'Cancelar',
	'LBL_UW_TITLE_COMMIT'						=> 'Consolidar atualização',
	'LBL_UW_TITLE_END'							=> 'Relatório',
	'LBL_UW_TITLE_PREFLIGHT'					=> 'Verificação Preflight',
	'LBL_UW_TITLE_START'						=> 'Bem-vindo',
	'LBL_UW_TITLE_SYSTEM_CHECK'					=> 'Verificações do Sistema',
	'LBL_UW_TITLE_UPLOAD'						=> 'Carregamento da Pacote',
	'LBL_UW_TITLE'								=> 'Assistente de Atualização',
	'LBL_UW_UNINSTALL'							=> 'Desinstalar',
	//500 upgrade labels
	'LBL_UW_ACCEPT_THE_LICENSE' 				=> 'Aceitar Licença',
	'LBL_UW_CONVERT_THE_LICENSE' 				=> 'Converter Licença',
	'LBL_UW_CUSTOMIZED_OR_UPGRADED_MODULES'     => 'Módulos Actualizados/Personalizados',
	'LBL_UW_FOLLOWING_MODULES_CUSTOMIZED'       => 'Os módulos seguintes estão detectados como personalizados e preservados',
	'LBL_UW_FOLLOWING_MODULES_UPGRADED'         => 'Os módulos seguintes estão detectados como personalizados em Studio e têm sido actualizados',

	'LBL_START_UPGRADE_IN_PROGRESS'             => 'Iniciar em progresso',
	'LBL_SYSTEM_CHECKS_IN_PROGRESS'             => 'Verificações de Sistema em progresso',
	'LBL_LICENSE_CHECK_IN_PROGRESS'             => 'Verificação de Licença em progresso',
	'LBL_PREFLIGHT_CHECK_IN_PROGRESS'           => 'Verificação Preflight em progresso',
    'LBL_PREFLIGHT_FILE_COPYING_PROGRESS'       => 'Cópia de ficheiros em andamento',
	'LBL_COMMIT_UPGRADE_IN_PROGRESS'            => 'Commit Upgrade em progresso',
    'LBL_UW_COMMIT_DESC'						=> 'Clique em Avançar para executar scripts de actualização adicionais.',
	'LBL_UPGRADE_SCRIPTS_IN_PROGRESS'			=> 'Actualização de Scripts em execução',
	'LBL_UPGRADE_SUMMARY_IN_PROGRESS'			=> 'Sumário de Actualização em progresso',
	'LBL_UPGRADE_IN_PROGRESS'                   => 'em progresso',
	'LBL_UPGRADE_TIME_ELAPSED'                  => 'Tempo decorrido',
	'LBL_UPGRADE_CANCEL_IN_PROGRESS'			=> 'Actualização de Cancelar e Limpar em progresso',
    'LBL_UPGRADE_TAKES_TIME_HAVE_PATIENCE'      => 'Actualização pode demorar algum tempo',
    'LBL_UPLOADE_UPGRADE_IN_PROGRESS'           => 'Verificações de carregamento em progresso',
	'LBL_UPLOADING_UPGRADE_PACKAGE'      		=> 'Carregando pacote de actualização...',
    'LBL_UW_DORP_THE_OLD_SCHMEA' 				=> 'Pretende que o Sugar remova o obsoleto 451 Schema?',
	'LBL_UW_DROP_SCHEMA_UPGRADE_WIZARD'			=> 'Assistente de Atualização Remove antigo 451 schema',
	'LBL_UW_DROP_SCHEMA_MANUAL'					=> 'Pós-atualização de Remoção Manual de Schema',
	'LBL_UW_DROP_SCHEMA_METHOD'					=> 'Método Antigo de Remoção de Schema',
	'LBL_UW_SHOW_OLD_SCHEMA_TO_DROP'			=> 'Mostrar Schema Antigo que pode ser removido',
	'LBL_UW_SKIPPED_QUERIES_ALREADY_EXIST'      => 'Queries Ignoradas',
	'ERR_CHECKSYS_PHP_INVALID_VER'      => 'A sua versão de PHP não é suportada pelo Sugar. Necessita de instalar uma versão que seja compatível com a aplicação Sugar. Por favor consulte a Matriz de Compatibilidade nas Notas de Lançamento para Versões de PHP suportadas. A sua versão é',
	'LBL_BACKWARD_COMPATIBILITY_ON' 			=> 'O modo de Compatibilidade Retroativa do PHP está ligado. Defina zend.ze1_compatibility_mode como Desligado para prosseguir',
	//including some strings from moduleinstall that are used in Upgrade
	'LBL_ML_ACTION' => 'Ação',
    'LBL_ML_CANCEL'             => 'Cancelar',
    'LBL_ML_COMMIT'=>'Submeter',
    'LBL_ML_DESCRIPTION' => 'Descrição',
    'LBL_ML_INSTALLED' => 'Data de Instalação',
    'LBL_ML_NAME' => 'Nome',
    'LBL_ML_PUBLISHED' => 'Data de Publicação',
    'LBL_ML_TYPE' => 'Tipo',
    'LBL_ML_UNINSTALLABLE' => 'Não-instalável',
    'LBL_ML_VERSION' => 'Versão',
	'LBL_ML_INSTALL'=>'Instalar',
	//adding the string used in tracker. copying from homepage
	'LBL_HOME_PAGE_4_NAME' => 'Tracker',
	'LBL_MODULE_NAME' => 'Assistente de Atualização',
	'LBL_MODULE_NAME_SINGULAR' => 'Assistente de Atualização',
	'LBL_UPLOAD_SUCCESS' => 'O pacote de actualização foi carregado com sucesso. Clique em Avançar para executar uma verificação final.',
	'LBL_UW_TITLE_LAYOUTS' => 'Confirme Layouts',
	'LBL_LAYOUT_MODULE_TITLE' => 'Layouts',
	'LBL_LAYOUT_MERGE_DESC' => 'Há novos campos disponíveis, que foram adicionados como parte desta actualização e podem ser adicionados automaticamente aos layouts dos módulos existentes. Para saber mais sobre os novos campos, consulte as Notas de Lançamento da versão para qual está a actualizar.<br><br>Se não pretende adicionar os novos campos, desmarque o módulo e os layouts personalizados não serão alterados. Os campos estarão disponíveis no Studio após a actualização. <br><br>',
	'LBL_LAYOUT_MERGE_TITLE' => 'Clique em Avançar para confirmar as alterações e finalizar a actualização.',
	'LBL_LAYOUT_MERGE_TITLE2' => 'Clique em Avançar para concluir a actualização.',
	'LBL_UW_CONFIRM_LAYOUTS' => 'Confirme Layouts',
    'LBL_UW_CONFIRM_LAYOUT_RESULTS' => 'Resultados da confirmação de Layouts',
    'LBL_UW_CONFIRM_LAYOUT_RESULTS_DESC' => 'Os layouts foram fundidos com êxito:',
	'LBL_SELECT_FILE' => 'Selecione um Ficheiro:',
	'LBL_LANGPACKS' => 'Pacotes de Idiomas' /*for 508 compliance fix*/,
	'LBL_MODULELOADER' => 'Carregador de Módulo' /*for 508 compliance fix*/,
	'LBL_PATCHUPGRADES' => 'Atualizações ao patch' /*for 508 compliance fix*/,
	'LBL_THEMES' => 'Temas' /*for 508 compliance fix*/,
	'LBL_WORKFLOW' => 'Workflow' /*for 508 compliance fix*/,
	'LBL_UPGRADE' => 'Actualização' /*for 508 compliance fix*/,
	'LBL_PROCESSING' => 'Processando' /*for 508 compliance fix*/,
    'LBL_GLOBAL_TEAM_DESC'                      => 'Globalmente visíveis',
);
