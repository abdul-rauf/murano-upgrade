<?php
// created: 2012-06-15 10:55:30
$dictionary["zr2_ReportParameterLink"]["fields"]["zr2_reportparameterlink_zr2_reporttemplate"] = array (
  'name' => 'zr2_reportparameterlink_zr2_reporttemplate',
  'type' => 'link',
  'relationship' => 'zr2_reportparameterlink_zr2_reporttemplate',
  'source' => 'non-db',
  'vname' => 'LBL_ZR2_REPORTPARAMETERLINK_ZR2_REPORTTEMPLATE_FROM_ZR2_REPORTTEMPLATE_TITLE',
  'id_name' => 'zr2_report313cemplate_ida',
);
$dictionary["zr2_ReportParameterLink"]["fields"]["zr2_reportparameterlink_zr2_reporttemplate_name"]=array (
  'name' => 'zr2_reportparameterlink_zr2_reporttemplate_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_ZR2_REPORTPARAMETERLINK_ZR2_REPORTTEMPLATE_FROM_ZR2_REPORTTEMPLATE_TITLE',
  'save' => true,
  'id_name' => 'zr2_report313cemplate_ida',
  'link' => 'zr2_reportparameterlink_zr2_reporttemplate',
  'table' => 'zr2_reporttemplate',
  'module' => 'zr2_ReportTemplate',
  'rname' => 'name',
);

$dictionary["zr2_ReportParameterLink"]["fields"]["zr2_report313cemplate_ida"]=array (
  'name' => 'zr2_report313cemplate_ida',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_ZR2_REPORTPARAMETERLINK_ZR2_REPORTTEMPLATE_FROM_ZR2_REPORTPARAMETERLINK_TITLE',
  'id_name' => 'zr2_report313cemplate_ida',
  'link' => 'zr2_reportparameterlink_zr2_reporttemplate',
  'table' => 'zr2_reporttemplate',
  'module' => 'zr2_ReportTemplate',
  'rname' => 'id',
  'reportable' => false,
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);
$dictionary["zr2_ReportParameterLink"]["fields"]["zr2_reportparameterlink_zr2_reporttemplate_right"]=array (
  'name' => 'zr2_reportparameterlink_zr2_reporttemplate_right',
  'type' => 'link',
  'relationship' => 'zr2_reportparameterlink_zr2_reporttemplate',
  'source' => 'non-db',
  'vname' => 'LBL_ZR2_REPORTPARAMETERLINK_ZR2_REPORTTEMPLATE_FROM_ZR2_REPORTPARAMETERLINK_TITLE',
  'id_name' => '_idb',
  'side' => 'right',
  'link-type' => 'many',
);

