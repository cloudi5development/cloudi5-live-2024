<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**************************
Project Name	: Cloudi5 Technologies
Created on		: 21 May, 2019
Last Modified 	: 21 May, 2019
Description		: Common email library
***************************/

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Load Composer's autoloader
require APPPATH. 'third_party/PHPMailer/src/Exception.php';
require APPPATH. 'third_party/PHPMailer/src/PHPMailer.php';
require APPPATH. 'third_party/PHPMailer/src/SMTP.php';

class Myemail
{
protected $ci;

	public function __construct()
	{
		$this->ci =& get_instance();
		$this->ci->load->database();
	}
	
	/* this function used to send e-email */ 
	function send_client_mail($to_email, $message, $subject, $from_email_address='', $attachment=null)
	{
		$this->ci =  & get_instance();
		$settings = $this->ci->db->select('email_id_1,site_name,email_secure,email_host,email_port,email_user_name,email_password')->from('settings')->get()->row();
		//$config = parse_ini_file('/path/to/file/config.ini', true);
		$mail = new PHPMailer(true);

		try {
			//Server settings
			// $mail->SMTPDebug = SMTP::DEBUG_SERVER;                    // Enable verbose debug output
			$mail->isSMTP();                                            // Send using SMTP
			$mail->SMTPOptions = array(
                'ssl' => array(
                    'verify_peer' => false,
                    'verify_peer_name' => false,
                    'allow_self_signed' => true
                )
            );
			$mail->Host       = $settings->email_host;                     
			// Set the SMTP server to send through
			$mail->SMTPAuth   = true;                                   // Enable SMTP authentication
			$mail->Username   = $settings->email_user_name;             // SMTP username
			$mail->Password   = $settings->email_password;              // SMTP password
			$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` also accepted
			$mail->Port       = $settings->email_port;                  // TCP port to connect to

			//Recipients
			$mail->setFrom($settings->email_user_name, $settings->site_name);
            if($to_email == 'info@cloudi5.com') {
                $mail->addAddress($to_email);   
                $mail->addAddress('pavithrandbpro@gmail.com');  
            } else {
			    $mail->addAddress($to_email);      							// Add a recipient
            }
			if($from_email_address!=null)
			$mail->AddReplyTo($from_email_address, $settings->site_name);
			
			// Attachments
			if($attachment!=null)
			$mail->addAttachment($attachment);         					// Add attachments

			// Content
			$mail->isHTML(true);                                  		// Set email format to HTML
			$mail->CharSet  		= 'UTF-8';
			$mail->Subject 			= $subject;
			$mail->Body    			= $message;
			$mail->AltBody 			= 'This is the body in plain text for non-HTML mail clients';

			$mail->send();
			return 1;
			//echo 'Message has been sent';
		} catch (Exception $e) {
			return 0;
			//echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
		}
	}

	/* this function used to send e-email */ 
	function send_career_mail($to_email, $message, $subject, $from_email_address='', $attachment=null)
	{
		$this->ci =  & get_instance();
		$settings = $this->ci->db->select('email_id_1,site_name,email_secure,email_host,email_port,email_user_name,email_password')->from('settings')->get()->row();
		//$config = parse_ini_file('/path/to/file/config.ini', true);
		$mail = new PHPMailer(true);

		try {
			//Server settings
			//$mail->SMTPDebug = SMTP::DEBUG_SERVER;                    // Enable verbose debug output
			$mail->isSMTP();                                            // Send using SMTP
			$mail->SMTPOptions = array(
                'ssl' => array(
                    'verify_peer' => false,
                    'verify_peer_name' => false,
                    'allow_self_signed' => true
                )
            );
			$mail->Host       = $settings->email_host;                     
			// Set the SMTP server to send through
			$mail->SMTPAuth   = true;                                   // Enable SMTP authentication
			$mail->Username   = $settings->email_user_name;             // SMTP username
			$mail->Password   = $settings->email_password;              // SMTP password
			$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` also accepted
			$mail->Port       = $settings->email_port;                  // TCP port to connect to

			//Recipients
			$mail->setFrom($settings->email_user_name, $settings->site_name);
            if($to_email == 'info@cloudi5.com') {
                $mail->addAddress($to_email);   
                $mail->addAddress('pavithrandbpro@gmail.com');  
            } else {
			    $mail->addAddress($to_email);      							// Add a recipient
            }
			if($from_email_address!=null)
			$mail->AddReplyTo($from_email_address, $settings->site_name);
			
			// Attachments
			if($attachment!=null)
			$mail->addAttachment($attachment);         					// Add attachments

			// Content
			$mail->isHTML(true);                                  		// Set email format to HTML
			$mail->CharSet  		= 'UTF-8';
			$mail->Subject 			= $subject;
			$mail->Body    			= $message;
			$mail->AltBody 			= 'This is the body in plain text for non-HTML mail clients';

			$mail->send();
			return 1;
			//echo 'Message has been sent';
		} catch (Exception $e) {
			return 0;
			//echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
		}
	}
}
 
/* End of file Myemail.php */
/* Location: ./application/libraries/Myemail.php */