<?php
// Do not store anything in this file that is not part of the array or the hook version.  This file will	
// be automatically rebuilt in the future. 
require_once 'include/utils.php';
 require_once 'modules/Leads/Lead.php';
 require_once 'modules/EmailTemplates/EmailTemplate.php';
class notification_form {
  
  
	function send_lead_notifications($to_id,$next_id,$tracker_id,$template_id,$module,$by_admin, $obj,$obj1)
    {
	
	global $attach,$current_user;
		//if($bean->fetched_row) return;

		$notify_user = new $module();
		$admin =new User;
		$admin->retrieve('1');
$lead_name ='';

if($by_admin){
$notify_user->retrieve_by_string_fields(array('id'=>$to_id));
}
else
{
$notify_user->retrieve_by_string_fields(array('id'=>$next_id));

$fromLeadAddress = $obj1->emailAddress->getPrimaryAddress($obj1);
$lead_name =$obj1->full_name;
}
		


        if($obj->module_dir =='mur_client_n_list'){
 $sendToEmail = $obj->email_address_c;
 }
 else{
            $sendToEmail = $notify_user->emailAddress->getPrimaryAddress($notify_user);
 }
  
            $sendEmail = TRUE;
            if(empty($sendToEmail)) {
                $GLOBALS['log']->warn("Notifications: no e-mail address set for user {$notify_user->user_name}, cancelling send");
                $sendEmail = FALSE;
            }

            $notify_mail = $this->create_lead_notification_email($notify_user,$template_id,$tracker_id,$obj,$lead_name,$obj1);
            $notify_mail->setMailer();
			$admin1 = new Administration();
			$admin1->retrieveSettings();

            //if(empty($admin->settings['notify_send_from_assigning_user'])) {


           $oe = new OutboundEmail();
            $oe = $oe->getUserMailerSettings($current_user);
			
            //only send if smtp server is defined
            if($sendEmail){
                $smtpVerified = false;

                //first check the user settings
                if(!empty($oe->mail_smtpserver)){
                    $smtpVerified = true;
                }

                //if still not verified, check against the system settings
                if (!$smtpVerified){
                    $oe = $oe->getSystemMailerSettings();
                    if(!empty($oe->mail_smtpserver)){
                        $smtpVerified = true;
                    }
                }
                //if smtp was not verified against user or system, then do not send out email
                if (!$smtpVerified){
                    $GLOBALS['log']->fatal("Notifications: error sending e-mail, smtp server was not found ");
                    //break out
                    return;
                }


			if($by_admin) {
                $notify_mail->From = $current_user->settings['notify_fromaddress'];
                $notify_mail->FromName = (empty($current_user->settings['notify_fromname'])) ? "" : $admin1->settings['notify_fromname'];
				if(!$notify_mail->Send()) {
                    $GLOBALS['log']->fatal("Notifications: error sending e-mail (method: {$notify_mail->Mailer}), (error: {$notify_mail->ErrorInfo})");
                }else{
                    $GLOBALS['log']->info("Notifications: e-mail successfully sent $sendToEmail");
                }
            } else {
                //Use the users full name is available otherwise default to system name
                $from_name = $notify_user->first_name." ".$notify_user->last_name;
				if(trim($from_name) ==''){
				$from_name = $notify_user->name;
				}

	//$body =base64_encode($notify_mail->Body);

   /* echo '<form method="POST">';
echo '<input type="hidden" name="subject" value="'.$notify_mail->Subject.'">';
echo '<input type="hidden" name="msg" value="'.$body.'">';
echo '<input type="hidden" name="action" value="send_email2">';
echo '<input type="hidden" name="to" value="'.$sendToEmail.'">';
echo '<input type="hidden" name="from" value="'.$fromLeadAddress.'">';
echo '<input type="hidden" name="from_name" value="'.$lead_name.'">';
echo '<input type="hidden" name="module" value="Leads">';
echo '</form>';
echo '<script>';
echo 'document.send_mail.submit();';
echo '</script>';
//die("Thanks a lot!");
*/
$this->send_email($fromLeadAddress,$sendToEmail,$notify_mail->Subject,$notify_mail->Body,$lead_name);
           }

              /*  if(!$notify_mail->Send()) {
                    $GLOBALS['log']->fatal("Notifications: error sending e-mail (method: {$notify_mail->Mailer}), (error: {$notify_mail->ErrorInfo})");
                }else{
                    $GLOBALS['log']->info("Notifications: e-mail successfully sent $sendToEmail");
                }*/
            }

   
}
    /**
    * This function handles create the email notifications email.
    * @param string $notify_user the user to send the notification email to
    */
    function create_lead_notification_email($notify_user,$template_id,$tracker_id,$obj,$lead_name='',$obj1) {
        global $sugar_version;
        global $sugar_config;
        global $app_list_strings;
        global $current_user;
        global $locale;
        global $beanList;
        $OBCharset = $locale->getPrecedentPreference('default_email_charset');

        require_once("include/SugarPHPMailer.php");
		require_once("modules/EmailTemplates/EmailTemplate.php");
		 $email_template = new EmailTemplate();
		 $email_template->retrieve_by_string_fields(array('id'=>$template_id));
		// $notify_address ='ashdwi1@gmail.com';
if($obj->module_dir !='mur_client_n_list'){
        $notify_address = $notify_user->emailAddress->getPrimaryAddress($notify_user);
}
else{
        $notify_address = $obj->email_address_c;
}
        $notify_name = $notify_user->full_name;
        $GLOBALS['log']->debug("Notifications: user has e-mail defined");

        $notify_mail = new SugarPHPMailer();
        $notify_mail->AddAddress($notify_address,$locale->translateCharsetMIME(trim($notify_name), 'UTF-8', $OBCharset));
	$notify_mail->IsHTML(true); 
        if(empty($_SESSION['authenticated_user_language'])) {
            $current_language = $sugar_config['default_language'];
        } else {
            $current_language = $_SESSION['authenticated_user_language'];
        }
       

        $this->current_notify_user = $notify_user;

        $port = '';

        if(isset($_SERVER['SERVER_PORT']) && $_SERVER['SERVER_PORT'] != 80 && $_SERVER['SERVER_PORT'] != 443) {
            $port = $_SERVER['SERVER_PORT'];
        }

        if (!isset($_SERVER['HTTP_HOST'])) {
            $_SERVER['HTTP_HOST'] = '';
        }

        $httpHost = $_SERVER['HTTP_HOST'];

        if($colon = strpos($httpHost, ':')) {
            $httpHost    = substr($httpHost, 0, $colon);
        }

        $parsedSiteUrl = parse_url($sugar_config['site_url']);
        $host = $parsedSiteUrl['host'];
        if(!isset($parsedSiteUrl['port'])) {
            $parsedSiteUrl['port'] = 80;
        }

        $port		= ($parsedSiteUrl['port'] != 80) ? ":".$parsedSiteUrl['port'] : '';
        $path		= !empty($parsedSiteUrl['path']) ? $parsedSiteUrl['path'] : "";
        $cleanUrl	= "{$parsedSiteUrl['scheme']}://{$host}{$port}{$path}";

       // $url = $cleanUrl."/index.php?module={$this->module_dir}&action=DetailView&record={$this->id}";
	

$macro_nv=array();
if($obj->module_dir =='mur_client_n_list'){
$body_html_array =$email_template->parse_email_template(array
('subject'=>$email_template->subject,'body_html'=>$email_template->body_html,'body'=>$email_template->body)
,$obj->module_dir, $obj,$macro_nv);
$body_html =$body_html_array['body_html'];

//$body_html =str_replace('$mur_client_n_list_track_record_c',$obj->track_record_c,$email_template->body);
$notify_address =$obj->email_address_c;
}
if($obj->module_dir =='Leads'){
$focus_name = 'Contacts';
$body_html_array =$email_template->parse_email_template(array
('subject'=>$email_template->subject,'body_html'=>$email_template->body_html,'body'=>$email_template->body)
,$obj1->module_dir, $obj1,$macro_nv);
$body_html =$body_html_array['body_html'];
$q = "SELECT * FROM notes WHERE parent_id = '".$template_id."' AND deleted = 0";
				$r = $obj->db->query($q);
			/*	$res_attach =$obj->db->fetchByAssoc($r);
 $filepath ='upload/'.$res_attach['id'];*/
 $this->notes_array = array();
                if (!class_exists('Note')){
                	require_once('modules/Notes/Note.php');
				}
				while($a = $obj->db->fetchByAssoc($r)) {
					$noteTemplate = new Note();
					$noteTemplate->retrieve($a['id']);
					$this->notes_array[] = $noteTemplate;
				}
			$file = file_get_contents($filepath);
    		//$notify_mail->attach= base64_encode($file);
$notify_mail->handleAttachments($this->notes_array);
$lead_name = $obj->full_name;
} 	

$template_html =str_replace('$from',$notify_address,$email_template->subject);
$body_html =str_replace('$id',$tracker_id,$body_html);
if(!empty($lead_name)){
$body_html =str_replace('$contact_first_name',$lead_name,$body_html);		
}
        $notify_mail->Body = from_html($body_html);
        $notify_mail->Subject = from_html($template_html);

        // cn: bug 8568 encode notify email in User's outbound email encoding
        $notify_mail->prepForOutbound();

        return $notify_mail;
    }

	function send_email($from_add,$address,$sub,$body,$from_name){	
		/*$from_add ='ashish22@gmail.com';
		//$address='ashdwi1@gmail.com';
		echo '<hr/>';
		echo $from_add;
		echo '<hr/>';
		echo $address;
		echo '<hr/>';
		*/
	
						ini_set('display_errors','1');
						error_reporting(E_ALL);
						/*$path = get_include_path() . PATH_SEPARATOR . '/usr/lib/php/PEAR';

						include("Mail.php");
						require_once "Mail/mime.php";
						$params['sendmail_path'] = '/usr/lib/sendmail';

							

						set_include_path($path);
						$recipients = $to;

						echo "<hr>hii";
						echo $from_add;
						echo "<hr>";
						echo $headers['From']    = $from_add;
						$headers['FromName'] =$from_name;
						$headers['To']      = $to;
						$headers['Subject'] = $sub;
						echo '<pre>';
						print_r($headers);
						$mail_object =& Mail::factory('smtp', $params);						
						$mime = new Mail_mime();
							$mime->setHTMLBody($body); 
							$body = $mime->get();
							$headers = $mime->headers($headers);
							echo '<pre>';
						print_r($headers);
							$mail_object->send($recipients, $headers, $body);
							echo "Email succesfully sent to :".$recipients;

						if (PEAR::isError($mail_object)) {
							echo 'hiii';
						echo $mail_object->getMessage();
						}
						*/
					//	require_once('phpmailer/class.phpmailer.php');
$mail             =  new SugarPHPMailer();// defaults to using php "mail()"
$mail->IsSmtp(); // telling the class to use SendMail transport
$mail->Host       = "localhost"; // SMTP server
$mail->SMTPDebug  = false;   
$mail->SetFrom($from_add, $from_name);
$mail->AddReplyTo($from_add, $from_name);
$mail->AddAddress($address, '');
$mail->Subject    = $sub;
//$mail->AltBody    = "To view the message, please use an HTML compatible email viewer!"; // optional, comment out and test
$mail->MsgHTML($body);

if(!$mail->Send()) {
echo "Mailer Error: " . $mail->ErrorInfo;
} else {
echo "Email Sent to ".$address;
}
					
   }

	
	

	}

?>