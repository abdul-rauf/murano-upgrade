<?php

class generateWPDFApi extends SugarApi {

    public function registerApiRest() {
        return array(
            'generateWPDF' => array(
                'reqType' => 'GET',
                'path' => array('Leads', 'generateWPDF', '?', '?'),
                'pathVars' => array('module', '', 'record', 'pdf_template_id'),
                'method' => 'generateWPDF',
                'shortHelp' => 'CustomWR: Generate PDF file from PdfManager template with specified ID',
                'longHelp' => '',
            ),
        );
    }

    public function generateWPDF($api, $args) {
        
require_once('include/Sugarpdf/SugarpdfFactory.php');
        require_once 'include/Sugarpdf/SugarpdfHelper.php'; //needed by PdfManagerHelper
        require_once 'modules/PdfManager/PdfManagerHelper.php';
        global $sugar_config;
        $this->requireArgs($args, array('module', 'record', 'pdf_template_id'));
        $this->_initSmartyInstance();
        // settings for disable smarty php tags
        $this->ss->security_settings['PHP_TAGS'] = false;
        $this->ss->security = true;
        if (defined('SUGAR_SHADOW_PATH')) {
            $this->ss->secure_dir[] = SUGAR_SHADOW_PATH;
        }

        $sugarQuery = new SugarQuery();
        $bean = BeanFactory::newBean('PdfManager');

        $sql = new SugarQuery();
        $sql->select('id');
        $sql->from($bean);
        $sql->Where()->equals('name', $args['pdf_template_id']);

        $result = $sql->execute();
        $args['pdf_template_id'] = $result[0]['id'];

        $pdfTemplate = BeanFactory::retrieveBean('PdfManager', $args['pdf_template_id']);
        $this->bean = BeanFactory::retrieveBean($args['module'], $args['record']);
        $this->pdfFilename = $pdfTemplate->name . '_' . $this->bean->name;
        $this->templateLocation = $this->buildTemplateFile($pdfTemplate);
        $this->sugarpdfBean = SugarpdfFactory::loadSugarpdf('pdfmanager', 'Leads', $this->bean);
        $this->bean = $this->sugarpdfBean->bean;
        $new = htmlspecialchars($this->bean, ENT_QUOTES);// added against Reportboard_bug_fixes
        $fields = PdfManagerHelper::parseBeanFields($this->bean, true);
        
        //assign values to merge fields
        require_once('vendor/tcpdf/tcpdf.php');
        $pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, false, 'ISO-8859-15', false);

          $pdf->SetCreator(PDF_CREATOR);
        $pdf->SetAuthor(PDF_AUTHOR);
        $pdf->SetTitle(PDF_TITLE);
        $pdf->SetSubject(PDF_SUBJECT);
        $pdf->SetKeywords(PDF_KEYWORDS);

        $compression=false;
        if(PDF_COMPRESSION == "on"){
            $compression=true;
        }
        $pdf->SetCompression($compression);
        $protection=array();
        if(PDF_PROTECTION != ""){
            $protection=explode(",",PDF_PROTECTION);
        }

        $pdf->SetProtection($protection,blowfishDecode(blowfishGetKey('sugarpdf_pdf_user_password'), PDF_USER_PASSWORD),blowfishDecode(blowfishGetKey('sugarpdf_pdf_owner_password'), PDF_OWNER_PASSWORD));

        
        $pdf->setCellHeightRatio(K_CELL_HEIGHT_RATIO);
        $pdf->setJPEGQuality(intval(PDF_JPEG_QUALITY));
        $pdf->setPDFVersion(PDF_PDF_VERSION);
        
         
//        // set default header data
//        $pdf->setHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE, PDF_HEADER_STRING);
//
//        // set header and footer fonts
        $pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
        $pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));
        $pdf->setPrintHeader(false);
//        //set margins
        $pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
        $pdf->setHeaderMargin(PDF_MARGIN_HEADER);
        $pdf->setFooterMargin(PDF_MARGIN_FOOTER);
//
//        //set auto page breaks
        $pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

        //set image scale factor
        $pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);
//$pdf->AddPage();
        $pdf->SetFont(PDF_FONT_NAME_MAIN,'',8);
  		$pdf->AddPage();
        
        $document = BeanFactory::newBean('Documents');
        $document->name = $this->bean->account_name;
        $document->revision = 1;
        $document->save();
        
        $docRevision = new DocumentRevision();
        $docRevision->revision = 1;
        $docRevision->document_id = $document->id;
        $docRevision->file_mime_type = "application/pdf";
        $docRevision->filename = 'Murano Investor Report - '.$document->name.'.pdf';
        $docRevision->file_ext = 'pdf';
        $docRevision->save();

        $this->ss->assign('fields', $fields);
        $html = $this->ss->fetch($this->templateLocation);
        $pdf->writeHTML($html, true, false, false, false, '');
        ob_clean();
        $pdf->Output(getcwd() . '/upload/' . $docRevision->id, 'F');
        return $document->id;
    }

    private function buildTemplateFile($pdfTemplate, $previewMode = FALSE) {
        if (!empty($pdfTemplate)) {
            if (!file_exists(sugar_cached('modules/PdfManager/tpls'))) {
                mkdir_recursive(sugar_cached('modules/PdfManager/tpls'));
            }
            $tpl_filename = sugar_cached('modules/PdfManager/tpls/' . $pdfTemplate->id . '.tpl');
            $pdfTemplate->body_html = from_html($pdfTemplate->body_html);
            sugar_file_put_contents($tpl_filename, $pdfTemplate->body_html);
            return $tpl_filename;
        }
        return '';
    }

    /**
     * Init the Sugar_Smarty object.
     */
    private function _initSmartyInstance() {
        if (!($this->ss instanceof Sugar_Smarty)) {
            $this->ss = new Sugar_Smarty();
            $this->ss->security = true;
            if (defined('SUGAR_SHADOW_PATH')) {
                $this->ss->secure_dir[] = SUGAR_SHADOW_PATH;
            }
            $this->ss->assign('MOD', $GLOBALS['mod_strings']);
            $this->ss->assign('APP', $GLOBALS['app_strings']);
        }
    }
         
//    public function Header() {
  		

}
