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
  'LBL_BUCKET' => 'Bucket',
  'LBL_ERROR' => 'Erro',
  'LBL_FLAG' => 'Sinalizar',
  'LBL_LOGFILE' => 'Log do Arquivo',
  'LBL_LOGMETA' => 'Log de Meta',
  'LBL_MODULE_NAME' => 'Verificação',
  'LBL_MODULE_NAME_SINGULAR' => 'Verificação',
  'LBL_MODULE_TITLE' => 'Verificação',
  'LBL_SCAN_101_DESCR' => '',
  'LBL_SCAN_101_LOG' => '% tem histórico no Studio',
  'LBL_SCAN_101_TITLE' => '% tem histórico no Studio',
  'LBL_SCAN_102_DESCR' => '',
  'LBL_SCAN_102_LOG' => '% tem extensões: %s',
  'LBL_SCAN_102_TITLE' => '% tem extensões: %s',
  'LBL_SCAN_103_DESCR' => '',
  'LBL_SCAN_103_LOG' => '%s vardefs Customizados',
  'LBL_SCAN_103_TITLE' => '%s vardefs Customizados',
  'LBL_SCAN_104_DESCR' => '',
  'LBL_SCAN_104_LOG' => '%s tem layoutdefs Customizados',
  'LBL_SCAN_104_TITLE' => '%s tem layoutdefs Customizados',
  'LBL_SCAN_105_DESCR' => '',
  'LBL_SCAN_105_LOG' => '%s tem viewdefs customizados',
  'LBL_SCAN_105_TITLE' => '%s tem viewdefs customizados',
  'LBL_SCAN_201_DESCR' => '',
  'LBL_SCAN_201_LOG' => '%s não são módulos do banco',
  'LBL_SCAN_201_TITLE' => '%s não são módulos do banco',
  'LBL_SCAN_301_DESCR' => '',
  'LBL_SCAN_301_LOG' => '%s para ser rodados como BWC',
  'LBL_SCAN_301_TITLE' => '%s para ser rodados como BWC',
  'LBL_SCAN_302_DESCR' => '',
  'LBL_SCAN_302_LOG' => 'Visualizações de arquivos desconhecidos presente -% não está em módulo MB',
  'LBL_SCAN_302_TITLE' => 'Visualizações de arquivos desconhecidos presente -% não está em módulo MB',
  'LBL_SCAN_303_DESCR' => '',
  'LBL_SCAN_303_LOG' => 'Formulário não vazio & - % não está em módulo MB',
  'LBL_SCAN_303_TITLE' => 'Formulário não vazio & - % não está em módulo MB',
  'LBL_SCAN_304_DESCR' => '',
  'LBL_SCAN_304_LOG' => 'Arquivo desconhecido % - % não está em Módulo MB',
  'LBL_SCAN_304_TITLE' => 'Arquivo desconhecido % - % não está em Módulo MB',
  'LBL_SCAN_305_DESCR' => '',
  'LBL_SCAN_305_LOG' => 'Vardefs ruins - Chaves %, Nome %s',
  'LBL_SCAN_305_TITLE' => 'Vardefs ruins - Chaves %, Nome %s',
  'LBL_SCAN_306_DESCR' => '',
  'LBL_SCAN_306_LOG' => 'Vardefs ruins - Campo Relacionado % tem módulo vazio',
  'LBL_SCAN_306_TITLE' => 'Vardefs ruins - Campo Relacionado % tem módulo vazio',
  'LBL_SCAN_307_DESCR' => '',
  'LBL_SCAN_307_LOG' => 'Vardefs ruins - link %s referido a relacionamentos invalidos',
  'LBL_SCAN_307_TITLE' => 'Vardefs ruins - link %s referido a relacionamentos invalidos',
  'LBL_SCAN_308_DESCR' => '',
  'LBL_SCAN_308_LOG' => 'Vardef HTML função %s',
  'LBL_SCAN_308_TITLE' => 'Vardef HTML função %s',
  'LBL_SCAN_309_DESCR' => '',
  'LBL_SCAN_309_LOG' => 'Md5 ruim para %s',
  'LBL_SCAN_309_TITLE' => 'Md5 ruim para %s',
  'LBL_SCAN_310_DESCR' => '',
  'LBL_SCAN_310_LOG' => 'Arquivo Desconhecido %s/%s',
  'LBL_SCAN_310_TITLE' => 'Arquivo Desconhecido %s/%s',
  'LBL_SCAN_311_DESCR' => '',
  'LBL_SCAN_311_LOG' => 'Função Vardef HTML %s no $module para os campos %s',
  'LBL_SCAN_311_TITLE' => 'Função Vardef HTML %s no $module para os campos %s',
  'LBL_SCAN_312_DESCR' => '',
  'LBL_SCAN_312_LOG' => 'Vardefs ruins- O tipo de campo &#39;nome&#39; éinvalido &#39;%s&#39;, modulo - &#39;%s&#39;',
  'LBL_SCAN_312_TITLE' => 'Vardefs ruins- O tipo de campo &#39;nome&#39; éinvalido &#39;%s&#39;, modulo - &#39;%s&#39;',
  'LBL_SCAN_313_DESCR' => '',
  'LBL_SCAN_313_LOG' => 'Extensão dir %s detectado - %s não é Módulo MB',
  'LBL_SCAN_313_TITLE' => 'Extensão dir %s detectado - %s não é Módulo MB',
  'LBL_SCAN_401_DESCR' => '',
  'LBL_SCAN_401_LOG' => 'Arquivo Fornecedor de inclusão encontrado, para arquivos que foram movidos para fornecedor/:\\r\\n%s',
  'LBL_SCAN_401_TITLE' => 'Arquivo Fornecedor de inclusão encontrado, para arquivos que foram movidos para fornecedor/:\\r\\n%s',
  'LBL_SCAN_402_DESCR' => '',
  'LBL_SCAN_402_LOG' => 'Modulo Ruim %s - não está na beanList e não está no sistema de arquivos',
  'LBL_SCAN_402_TITLE' => 'Modulo Ruim %s - não está na beanList e não está no sistema de arquivos',
  'LBL_SCAN_403_DESCR' => '',
  'LBL_SCAN_403_LOG' => 'Logic hook after_ui_frame detectado',
  'LBL_SCAN_403_TITLE' => 'Logic hook after_ui_frame detectado',
  'LBL_SCAN_406_DESCR' => '',
  'LBL_SCAN_406_LOG' => '%s tem visualizações customizadas',
  'LBL_SCAN_406_TITLE' => '%s tem visualizações customizadas',
  'LBL_SCAN_407_DESCR' => '',
  'LBL_SCAN_407_LOG' => '%s tem visualizações customizadas dir',
  'LBL_SCAN_407_TITLE' => '%s tem visualizações customizadas dir',
  'LBL_SCAN_410_DESCR' => '',
  'LBL_SCAN_410_LOG' => 'Campos Max - Encontrados maiores que %s campos (%s) de %s',
  'LBL_SCAN_410_TITLE' => 'Campos Max - Encontrados maiores que %s campos (%s) de %s',
  'LBL_SCAN_412_DESCR' => '',
  'LBL_SCAN_412_LOG' => 'Subpanel ruim link %s in %s',
  'LBL_SCAN_412_TITLE' => 'Subpanel ruim link %s in %s',
  'LBL_SCAN_413_DESCR' => '',
  'LBL_SCAN_413_LOG' => 'Classe de widget desconhecida detectedo: %s para %s',
  'LBL_SCAN_413_TITLE' => 'Classe de widget desconhecida detectedo: %s para %s',
  'LBL_SCAN_414_DESCR' => '',
  'LBL_SCAN_414_LOG' => 'Campos manuseados desconhecidos por CRYS-36, mas não mais que os checados aqui.',
  'LBL_SCAN_414_TITLE' => 'Campos manuseados desconhecidos por CRYS-36, mas não mais que os checados aqui.',
  'LBL_SCAN_415_DESCR' => '',
  'LBL_SCAN_415_LOG' => 'Arquivo Hook ruim no %s: %s',
  'LBL_SCAN_415_TITLE' => 'Arquivo Hook ruim no %s: %s',
  'LBL_SCAN_417_DESCR' => '',
  'LBL_SCAN_417_LOG' => 'Incompatibilidade de Módulo %s',
  'LBL_SCAN_417_TITLE' => 'Incompatibilidade de Módulo %s',
  'LBL_SCAN_418_DESCR' => '',
  'LBL_SCAN_418_LOG' => 'Subpanel encontrado com link não existente no modulo: %s',
  'LBL_SCAN_418_TITLE' => 'Subpanel encontrado com link não existente no modulo: %s',
  'LBL_SCAN_419_DESCR' => '',
  'LBL_SCAN_419_LOG' => 'Vardefs ruins - Chaves %, Nome %s',
  'LBL_SCAN_419_TITLE' => 'Vardefs ruins - Chaves %, Nome %s',
  'LBL_SCAN_420_DESCR' => '',
  'LBL_SCAN_420_LOG' => 'Vardefs ruins - Campo Relacionado % tem módulo vazio',
  'LBL_SCAN_420_TITLE' => 'Vardefs ruins - Campo Relacionado % tem módulo vazio',
  'LBL_SCAN_421_DESCR' => '',
  'LBL_SCAN_421_LOG' => 'Vardefs ruins - link %s referido a relacionamentos invalidos',
  'LBL_SCAN_421_TITLE' => 'Vardefs ruins - link %s referido a relacionamentos invalidos',
  'LBL_SCAN_423_DESCR' => '',
  'LBL_SCAN_423_LOG' => 'Vardefs ruins - %s referentes para subfield %s',
  'LBL_SCAN_423_TITLE' => 'Vardefs ruins - %s referentes para subfield %s',
  'LBL_SCAN_424_DESCR' => '',
  'LBL_SCAN_424_LOG' => 'HTML encontrado em linha no %s on line %s',
  'LBL_SCAN_424_TITLE' => 'HTML encontrado em linha no %s on line %s',
  'LBL_SCAN_425_DESCR' => '',
  'LBL_SCAN_425_LOG' => 'Encontrado "echo" em %s linhas %s',
  'LBL_SCAN_425_TITLE' => '',
  'LBL_SCAN_426_DESCR' => '',
  'LBL_SCAN_426_LOG' => 'Encontrado "print" em %s linhas %s',
  'LBL_SCAN_426_TITLE' => '',
  'LBL_SCAN_427_DESCR' => '',
  'LBL_SCAN_427_LOG' => 'Encontrado "die/exit" em %s linhas %s',
  'LBL_SCAN_427_TITLE' => '',
  'LBL_SCAN_428_DESCR' => '',
  'LBL_SCAN_428_LOG' => 'Encontrado "print_r" em %s linhas %s',
  'LBL_SCAN_428_TITLE' => '',
  'LBL_SCAN_429_DESCR' => '',
  'LBL_SCAN_429_LOG' => 'Encontrado "var_dump" em %s linhas %s',
  'LBL_SCAN_429_TITLE' => '',
  'LBL_SCAN_430_DESCR' => '',
  'LBL_SCAN_430_LOG' => 'Encontrado o buffer de saída (%s) em %s na linha %s',
  'LBL_SCAN_430_TITLE' => '',
  'LBL_SCAN_432_DESCR' => '',
  'LBL_SCAN_432_LOG' => 'Vardefs ruins- O tipo de campo &#39;nome&#39; éinvalido &#39;%s&#39;, modulo - &#39;%s&#39;',
  'LBL_SCAN_432_TITLE' => 'Vardefs ruins- O tipo de campo &#39;nome&#39; éinvalido &#39;%s&#39;, modulo - &#39;%s&#39;',
  'LBL_SCAN_501_DESCR' => '',
  'LBL_SCAN_501_LOG' => 'Arquivo faltante: %s',
  'LBL_SCAN_501_TITLE' => 'Arquivo faltante: %s',
  'LBL_SCAN_502_DESCR' => '',
  'LBL_SCAN_502_LOG' => 'md5 mismatch para %s, esperado em %s',
  'LBL_SCAN_502_TITLE' => 'md5 mismatch for %s, esperados %s',
  'LBL_SCAN_503_DESCR' => '',
  'LBL_SCAN_503_LOG' => 'Modulo customizado com o mesmo nome no novo Sugar7 %s',
  'LBL_SCAN_503_TITLE' => '',
  'LBL_SCAN_504_DESCR' => '',
  'LBL_SCAN_504_LOG' => 'Tipo de campo faltante %s: %s',
  'LBL_SCAN_504_TITLE' => '',
  'LBL_SCAN_505_DESCR' => '',
  'LBL_SCAN_505_LOG' => 'Tipo de mudança no %s para campos %s: de %s para %s',
  'LBL_SCAN_505_TITLE' => '',
  'LBL_SCAN_506_DESCR' => '',
  'LBL_SCAN_506_LOG' => '$this uso em %s',
  'LBL_SCAN_506_TITLE' => '',
  'LBL_SCAN_507_DESCR' => '',
  'LBL_SCAN_507_LOG' => 'Vardefs ruins - %s referentes para subfield %s',
  'LBL_SCAN_507_TITLE' => 'Vardefs ruins - %s referentes para subfield %s',
  'LBL_SCAN_508_DESCR' => '',
  'LBL_SCAN_508_LOG' => 'HTML encontrado em linha no %s on line %s',
  'LBL_SCAN_508_TITLE' => 'HTML encontrado em linha no %s on line %s',
  'LBL_SCAN_509_DESCR' => '',
  'LBL_SCAN_509_LOG' => 'encontrado "echo" no %s na linha %s',
  'LBL_SCAN_509_TITLE' => '',
  'LBL_SCAN_510_DESCR' => '',
  'LBL_SCAN_510_LOG' => 'Encontrado "print" no %s linha %s',
  'LBL_SCAN_510_TITLE' => '',
  'LBL_SCAN_511_DESCR' => '',
  'LBL_SCAN_511_LOG' => 'Encontrado "die/exit" na %s linha %s',
  'LBL_SCAN_511_TITLE' => '',
  'LBL_SCAN_512_DESCR' => '',
  'LBL_SCAN_512_LOG' => 'Encontrado "print_r" na %s linha %s',
  'LBL_SCAN_512_TITLE' => '',
  'LBL_SCAN_513_DESCR' => '',
  'LBL_SCAN_513_LOG' => 'Encontrado "var_dump" na %s linha %s',
  'LBL_SCAN_513_TITLE' => '',
  'LBL_SCAN_514_DESCR' => '',
  'LBL_SCAN_514_LOG' => 'Encontrado o buffer de saída (%s) na %s linha %s',
  'LBL_SCAN_514_TITLE' => '',
  'LBL_SCAN_515_DESCR' => '',
  'LBL_SCAN_515_LOG' => 'Script falha: %s',
  'LBL_SCAN_515_TITLE' => '',
  'LBL_SCAN_901_DESCR' => '',
  'LBL_SCAN_901_LOG' => 'Instancia já atualizada para o Sugar7',
  'LBL_SCAN_901_TITLE' => '',
  'LBL_SCAN_999_DESCR' => '',
  'LBL_SCAN_999_LOG' => 'Falha desconhecida, consulte o suporte.',
  'LBL_SCAN_999_TITLE' => '',
);
