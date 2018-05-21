<?php
// created: 2010-12-14 16:04:36
$dictionary["Lead"]["fields"]["leads_documents_1"] = array (
  'name' => 'leads_documents_1',
  'type' => 'link',
  'relationship' => 'leads_documents_1',
  'source' => 'non-db',
  'vname' => 'LBL_LEADS_DOCUMENTS_1_FROM_DOCUMENTS_TITLE',
);
$dictionary["Lead"]["fields"]["leads_documents_1_name"] = array (
  'name' => 'leads_documents_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_LEADS_DOCUMENTS_1_FROM_DOCUMENTS_TITLE',
  'save' => true,
  'id_name' => 'leads_docuec7bcuments_idb',
  'link' => 'leads_documents_1',
  'table' => 'documents',
  'module' => 'Documents',
  'rname' => 'document_name',
);
$dictionary["Lead"]["fields"]["leads_docuec7bcuments_idb"] = array (
  'name' => 'leads_docuec7bcuments_idb',
  'type' => 'link',
  'relationship' => 'leads_documents_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'left',
  'vname' => 'LBL_LEADS_DOCUMENTS_1_FROM_DOCUMENTS_TITLE',
);
