<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');
class Frontend extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->settings	= $this->Settings_model->getAll();
	}
				
	#Home
	public function index()
	{
		$data['category']	= $this->Portfolio_model->getPortfolioCategory();
		$data['portfolio']	= $this->Portfolio_model->getHomePortfolio();
		$data['meta']       = $this->db->select('*')->where('page', 'Home')->get('meta_tags')->row();
		$data['settings']	= $this->settings;
		$data['page_title'] = 'Home';
		$this->load->view('frontend/index',$data);
	}
	#About
	public function aboutus()
	{
		$data['settings']	= $this->settings;
		$data['meta']       = $this->db->select('*')->where('page', 'about_us')->get('meta_tags')->row();
		$data['page_title'] = 'About US';
		$this->load->view('frontend/aboutus',$data);
	}
	#Website Design
	public function website_design()
	{
		$data['category']	= $this->Portfolio_model->getPortfolioCategory();
		$data['portfolio']	= $this->Portfolio_model->getHomePortfolio();
		$data['settings']	= $this->settings;
		$data['meta']       = $this->db->select('*')->where('page', 'web_design')->get('meta_tags')->row();
		$data['page_title'] = 'Web Design';
		$this->load->view('frontend/website-design',$data);
	}
	#Website Design Company in CBE
	public function website_design_company_in_coimbatore()
	{
		$data['settings']	= $this->settings;
		$data['page_title'] = 'Web Design';
		$this->load->view('frontend/website-design-company-in-coimbatore',$data);
	}
	#Website Development
	public function web_development()
	{
		$data['settings']	= $this->settings;
		$data['meta']       = $this->db->select('*')->where('page', 'web_development')->get('meta_tags')->row();
		$data['page_title'] = 'Web Development';
		$this->load->view('frontend/web-development',$data);
	}
	#Mobile App
	public function mobile_application_development_android_app()
	{
		$data['settings']	= $this->settings;
		$data['meta']       = $this->db->select('*')->where('page', 'android')->get('meta_tags')->row();
		$data['page_title'] = 'Mobile App';
		$this->load->view('frontend/mobile-application-development-android-app',$data);
	}
	#Digital Marketing
	public function digital_marketing_service()
	{
		$data['settings']	= $this->settings;
		$data['meta']       = $this->db->select('*')->where('page',	
        'digital_marketing')->get('meta_tags')->row();
		$data['page_title'] = 'Digital Marketing';
		$this->load->view('frontend/digital-marketing-company-in-coimbatore',$data);
	}
	#School Management Software
	public function school_management_software()
	{
		$data['settings']	= $this->settings;
		$data['meta']       = $this->db->select('*')->where('page',	
        'school_software')->get('meta_tags')->row();
		$data['page_title'] = 'School Management Software';
		$this->load->view('frontend/school-management-software',$data);
	}

	#Job Post
	public function job_post()
	{
		$data['settings']	= $this->settings;
		$data['page_title'] = 'Job Post';
		$this->load->view('frontend/view-job',$data);
	}

	#Career
	public function careers()
	{
		$data['careers']	= $this->Job_post_model->getAll();
		$data['settings']	= $this->settings;
		$data['meta']       = $this->db->select('*')->where('page',	
        'careers')->get('meta_tags')->row();
		$data['page_title'] = 'Careers';
		$this->load->view('frontend/careers',$data);
	}
	#Ecommerce
	public function multi_vendor_ecommerce_website()
	{
		redirect('ecommerce-website-development');
	}
	#Ecommerce
	public function ecommerce_website_development()
	{
		$data['settings']	= $this->settings;
		$data['page_title'] = 'Multi-vendor ecommerce website';
		$this->load->view('frontend/ecommerce-website-development',$data);
	}
	#ecommerce coimbatore
	public function multi_vendor_ecommerce_website_in_coimbatore()
	{
		redirect('ecommerce-website-development');
	}
	#Food
	public function food()
	{
		$data['settings']	= $this->settings;
		$data['page_title'] = 'Food Delivery';
		$this->load->view('frontend/food',$data);
	}
	#SEO
	public function search_engine_optimization()
	{
		$data['settings']	= $this->settings;
		$data['page_title'] = 'Search Engine Optimization';
		$this->load->view('frontend/search-engine-optimization',$data);
	}
	#SEM
	public function search_engine_marketing()
	{
		$data['settings']	= $this->settings;
		$data['page_title'] = 'Search Engine Marketing';
		$this->load->view('frontend/search-engine-marketing',$data);
	}
	
	#SMO
	public function social_media_optimization()
	{
		$data['settings']	= $this->settings;
		$data['page_title'] = 'Search Engine Optimization';
		$this->load->view('frontend/social-media-optimization',$data);
	}
	#Jewellery
	public function jewellery()
	{
		$data['settings']	= $this->settings;
		$data['page_title'] = 'Jewellery Delivery';
		$this->load->view('frontend/jewellery',$data);
	}
	#Leads Management Software
	public function leads_management_software()
	{
		$data['settings']	= $this->settings;
		$data['page_title'] = 'Leads Management Software';
		$this->load->view('frontend/leads-management-software',$data);
	}
	#ERP Software Development
	public function erp_software_development()
	{
		$data['settings']	= $this->settings;
		$data['page_title'] = 'ERP Software Development';
		$this->load->view('frontend/erp-software-development',$data);
	}
	#CRM Development
	public function crm_development()
	{
		$data['settings']	= $this->settings;
		$data['page_title'] = 'CRM Development';
		$this->load->view('frontend/crm-development',$data);
	}
	#Ecommerce Enquiry Form
	public function ecommerce_enquiry_form()
	{
		$this->form_validation->set_rules('name', 'Name', 'required');
		$this->form_validation->set_rules('email', 'Email Address', 'required');
		$this->form_validation->set_rules('message', 'Message', 'required');
		$this->form_validation->set_rules('g-recaptcha-response', 'recaptcha validation', 'required|callback_validate_captcha');
        $this->form_validation->set_message('validate_captcha', 'Please check the the captcha form');
		if ($this->form_validation->run() == TRUE)
		{
			$data['name']			= $this->input->post('name');
			$data['email'] 			= $this->input->post('email');
			$data['phone'] 			= $this->input->post('phone');
			$data['message'] 		= strip_tags($this->input->post('message'));
			$data['ip'] 			= get_ip();
            if ($this->input->post('website') == '') {
                $this->db->insert('ecommerce_enquiry_form', $data);
                /** Email **/
                $data['setting']		= $this->settings;
                $admin_email			= $this->settings->email_id_1;
                $subject				= 'Ecommerce Enquiry From ' . ucwords($data['name']) .' | '. $this->settings->site_name;
                $email_content			= $this->load->view('admin/emails/ecommerce_mail', $data, true);
                //print_r($email_content);die;
                $this->myemail->send_client_mail($admin_email, $email_content, $subject);
                /*** Contact Ack Email **/
                if ($this->input->post('email') !='') {
                    $user_email			= $this->input->post('email');
                    $subject1			= 'Welcome to '. $this->settings->site_name .'! Your Enquiry has been submitted';
                    $email_content1		= $this->load->view('admin/emails/acknowldge_mail', $data, true);
                    $this->myemail->send_client_mail($user_email, $email_content1, $subject1, $admin_email);
                }
            }
			$this->session->set_userdata('success', '1');
			$type = 'success';
			$message = "Thank you for Enquiring us.";
			set_message($type, $message);
			redirect('thank-you');
		} else {
			set_message('error', "Please Fill All The Required Fields.");
			redirect('multi-vendor-ecommerce-website');
		}		
	}
	
	#privacy-policy
	public function privacy_policy()
	{
		$data['settings']	= $this->settings;
		$data['page_title'] = 'Privacy Policy';
		$this->load->view('frontend/privacy-policy',$data);
	}

	#terms&conditions
	public function terms()
	{
		$data['settings']	= $this->settings;
		$data['page_title'] = 'Terms and Conditions';
		$this->load->view('frontend/terms',$data);
	}

	#Cancellation Policy
	public function cancellation_policy()
	{
		$data['settings']	= $this->settings;
		$data['page_title'] = 'Cancellation Policy';
		$this->load->view('frontend/cancellation-policy',$data);
	}

	#Refund Policy
	public function refund_policy()
	{
		$data['settings']	= $this->settings;
		$data['page_title'] = 'Refund Policy';
		$this->load->view('frontend/refund-policy',$data);
	}

	#Portfolio
	public function portfolio()
	{
		$data['category']	= $this->Portfolio_model->getPortfolioCategory();
		$data['portfolio']	= $this->Portfolio_model->getAll();
		$data['meta']       = $this->db->select('*')->where('page',	
        'portfolio')->get('meta_tags')->row();
		$data['settings']	= $this->settings;
		$data['page_title'] = 'Portfolio';
		$this->load->view('frontend/portfolio',$data);
	}

	public function portfolio_by_slug_and_id($slug,$id)
	{
		$portfolio					= $this->Portfolio_model->info_by_slug_and_id($slug, $id);
        $page_data['settings']		= $this->settings;
		if($portfolio){
            $page_data['images']	= $this->Portfolio_model->getImageAll($id);
            $page_data['portfolio']	= $portfolio;
			$this->load->view('frontend/portfolio-details',$page_data);
		}else{
			// redirect(base_url('404'), 'refresh');
			$this->load->view('frontend/404',$page_data);
		}
		
	}
	
	#Portfolio Details
	public function portfolio_details()
	{
		$data['settings']	= $this->settings;
		$data['page_title'] = 'Portfolio Details';
		$this->load->view('frontend/portfolio-details',$data);
	}
	
	#Career Details
	public function careers_details($job_id,$slug)
	{
		$data['career_details']	= $this->Job_post_model->getBySlugId($job_id,$slug);
		if($data['career_details']) {
		    $data['settings']		= $this->settings;
    		$data['page_title']		= 'Careers';
    		$this->load->view('frontend/careers-details',$data);
		} else {
		    redirect('404');
		}
		
	}
	
	#Career Form
	public function careerform()
	{
		$job_id = $this->input->post('job_id');
		$slug 	= $this->input->post('slug');
		$this->form_validation->set_rules('name', 'Name', 'required');
		$this->form_validation->set_rules('email', 'Phone', 'required');
		$this->form_validation->set_rules('mobile', 'Mobile', 'required');
		$this->form_validation->set_rules('experience', 'Experience', 'required');
		if (empty($_FILES['resume']['name']))
		{
			$this->form_validation->set_rules('resume', 'Resume', 'required');
		}
    	$this->form_validation->set_rules('message', 'Cover Letter', 'required');
		if ($this->form_validation->run() == TRUE)
		{
			$data['job_post_id']	= $this->input->post('job_post_id');
			$data['name']			= $this->input->post('name');
			$data['email'] 			= $this->input->post('email');
			$data['mobile'] 		= $this->input->post('mobile');
			$data['experience'] 	= $this->input->post('experience');
			$data['message'] 		= strip_tags($this->input->post('message'));
			$data['ip'] 			= get_ip();
            if ($this->input->post('website') == '') {
                if (!is_dir('uploads')) {
                    mkdir('./uploads', 0777, true);
                }
                if (!is_dir('uploads/mail_attach/')) {
                    mkdir('./uploads/mail_attach/', 0777, true);
                }
                
                if (!empty($_FILES['resume']['tmp_name'])) {
                    $data['resume'] = "uploads/mail_attach/". date('d_m_y') .'_'. str_replace(' ', '_', $_FILES['resume']['name']);
                    move_uploaded_file($_FILES["resume"]["tmp_name"], $data['resume']);
                } else {
                    $data['resume'] = '';
                }
                $path = $_SERVER['DOCUMENT_ROOT'].'/'. $data['resume'];
            
                $this->db->insert('job_application', $data);
                /** Email **/
                $data['setting']		= $this->settings;
                $data['job_post']		= $this->Job_post_model->getById($data['job_post_id']);
                $admin_email			= 'careers@cloudi5.com';
                $subject				= 'Career Enquiry From ' . ucwords($data['name']) .' | '. $this->settings->site_name;
                $email_content			= $this->load->view('admin/emails/career_mail', $data, true);
                $this->myemail->send_career_mail($admin_email, $email_content, $subject, '', $path);
                /*** Career Ack Email **/
                if ($this->input->post('email') !='') {
                    $user_email			= $this->input->post('email');
                    $subject1			= 'Welcome to '. $this->settings->site_name .'! Your Job Application has been submitted';
                    $email_content1		= $this->load->view('admin/emails/acknowldge_mail', $data, true);
                    $this->myemail->send_career_mail($user_email, $email_content1, $subject1, $admin_email);
                }
            }
			$type = 'success';
			$message = "Thank you for taking the interest in applying for the required post.";
			set_message($type, $message);
			redirect(base_url() . 'careers-details/' . $job_id .'/'. $slug);
		} else {
			$data['career_details']	= $this->Job_post_model->getBySlugId($job_id,$slug);
			$data['settings']		= $this->settings;
			$data['page_title']		= 'Careers';
			$this->load->view('frontend/careers-details',$data);
		}		
	}
	
	#Contact Us
	public function contactus()
	{
		$data['settings']	= $this->settings;
		$data['meta']       = $this->db->select('*')->where('page', 'contact_us')->get('meta_tags')->row();
		$data['page_title'] = 'Contact US';
		$this->load->view('frontend/contactus',$data);
	}
	
	#Contact Form
	public function contactform()
	{
		$this->form_validation->set_rules('contactname', 'Name', 'required');
		$this->form_validation->set_rules('contactphone', 'Phone', 'required');
		$this->form_validation->set_rules('contactdescription', 'Message', 'required');
    	$this->form_validation->set_rules('g-recaptcha-response', 'recaptcha validation', 'required|callback_validate_captcha');
        $this->form_validation->set_message('validate_captcha', 'Please check the the captcha form');
		if ($this->form_validation->run() == TRUE)
		{
			$data['name']			= $this->input->post('contactname');
			$data['business_name']	= $this->input->post('businessname');
			$data['email'] 			= $this->input->post('contactemail');
			$data['phone'] 			= $this->input->post('contactphone');
			$data['skype_whatsapp'] = $this->input->post('contact_skype_whatsapp');
			$data['looking_for'] 	= $this->input->post('lookingfor');
			$data['started_on'] 	= $this->input->post('startedon');
			$data['comments'] 		= strip_tags($this->input->post('contactdescription'));
			$data['ip'] 			= get_ip();
            if ($this->input->post('website') == '') {
                $this->db->insert('contacts', $data);
                /** Email **/
                $data['setting']		= $this->settings;
                $admin_email			= $this->settings->email_id_1;
                $subject				= 'Contact Enquiry From ' . ucwords($data['name']) .' | '. $this->settings->site_name;
                $email_content			= $this->load->view('admin/emails/contact_mail', $data, true);
                $this->myemail->send_client_mail($admin_email, $email_content, $subject);
                /*** Contact Ack Email **/
                if ($this->input->post('contactemail') !='') {
                    $user_email			= $this->input->post('contactemail');
                    $subject1			= 'Welcome to '. $this->settings->site_name .'! Your Enquiry has been submitted';
                    $email_content1		= $this->load->view('admin/emails/acknowldge_mail', $data, true);
                    $this->myemail->send_client_mail($user_email, $email_content1, $subject1, $admin_email);
                }
            }
			$this->session->set_userdata('success', '1');
			$type = 'success';
			$message = "Thank you for Contacting us.";
			set_message($type, $message);
			redirect('thank-you');
		} else {
			$type = 'error';
			$message = "Please Fill All The Required Fields.";
			set_message($type, $message);
			$page_data['page_title'] = 'Contact Us';
			$this->load->view('frontend/contactus',$page_data);
		}		
	}
	
	function validate_captcha() {
        $captcha    = $this->input->post('g-recaptcha-response');
        $response   = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=6Lf0WYUUAAAAAMNE6-Mty7kpq0LafsNkYVTiLp1a&response=" . $captcha . "&remoteip=" . $_SERVER['REMOTE_ADDR']);
        $response   = json_decode($response, true);

        if ($response['success']) {
            return true;
        } else {
            return false;
        }
    }
    
	#Common Form
	public function commonform()
	{
		$this->form_validation->set_rules('your_name', 'Name', 'required');
		$this->form_validation->set_rules('your_email', 'Email', 'required');
		$this->form_validation->set_rules('message', 'Message', 'required');
		$this->form_validation->set_rules('g-recaptcha-response', 'recaptcha validation', 'required|callback_validate_captcha');
        $this->form_validation->set_message('validate_captcha', 'Please check the the captcha form');
        
		if ($this->form_validation->run() == TRUE)
		{
			$data['name']			= $this->input->post('your_name');
			$data['email']			= $this->input->post('your_email');
			$data['phone']			= $this->input->post('your_phone');
			$data['looking_for']	= $this->input->post('interested_in');
			$data['budget'] 		= $this->input->post('your_budget');
			$data['skype_whatsapp'] = $this->input->post('skype_whatsapp');
			$data['comments'] 		= strip_tags($this->input->post('message'));
			$data['ip'] 			= get_ip();
            if ($this->input->post('website') == '') {
                $this->db->insert('contacts', $data);
                /*** Email ***/
                $data['setting']		= $this->settings;
                $admin_email			= $this->settings->email_id_1;
                $subject = 'Contact Details Request From ' . ucwords($data['name']) . ' | '.$this->settings->site_name;
                $email_content= $this->load->view('admin/emails/common_mail', $data, true);
                $this->myemail->send_client_mail($admin_email, $email_content, $subject);
                /** Ack Email ** **/
                if ($this->input->post('your_email') !='') {
                    $user_email			= $this->input->post('your_email');
                    $subject1			= 'Welcome to '.$this->settings->site_name.'! Your Enquiry has been submitted';
                    $email_content1		= $this->load->view('admin/emails/acknowldge_mail', $data, true);
                    $this->myemail->send_client_mail($user_email, $email_content1, $subject1);
                }
            }			
			$this->session->set_userdata('success', '1');
			redirect('thank-you');
		}
		else
		{
			$type = 'error';
			$message = "Please Fill All The Required Fields.";
			set_message($type, $message);
			$page_data['page_title'] = 'Home';
			$this->load->view('frontend/index',$page_data);
		}
	}
	#Subscribe
	public function subscribeform()
	{
		$this->form_validation->set_rules('subscribeemail', 'Phone', 'required');
		if ($this->form_validation->run() == TRUE)
		{
			$data['type']			= 'Cloudi5';
			$data['email'] 			= $this->input->post('subscribeemail');
			$data['ip'] 			= get_ip();
			$subscribe 				= $this->db->select('*')->from('subscribe')->where('email',$data['email'])->where('type','Cloudi5')->get()->row();
			if($subscribe){
				$type 				= 'success';
				$message 			= "You have already subscribe our page";
				set_message($type, $message);
				redirect($_SERVER['HTTP_REFERER']);
			}
			else{
                if ($this->input->post('website') == '') {
                    /*** Email ****/
                    $this->db->insert('subscribe', $data);
                    $data1['setting']	= $this->settings;
                    $data1['name'] 		= $data['email'];
                    $admin_email		= $this->settings->email_id_1;
                    $subject 			= 'Subscription Request From '. $data1['name'] .' | '. $this->settings->site_name;
                    $email_content		= $this->load->view('admin/emails/subscribe_mail', $data1, true);
                    $this->myemail->send_client_mail($admin_email, $email_content, $subject);
                    /*** Ack Email ****/
                    $subject1 			= 'Welcome to '. $this->settings->site_name .'! Your Subscription has been submitted';
                    $email_content1		= $this->load->view('admin/emails/acknowldge_mail', $data1, true);
                    $this->myemail->send_client_mail($data['email'], $email_content1, $subject1);
                }
				$this->session->set_userdata('success', '1');
				redirect('thank-you');
			}
		}
		else
		{
			$type = 'error';
			$message = "Please Fill All The Required Fields.";
			set_message($type, $message);
			redirect($_SERVER['HTTP_REFERER']);
		}	
	}
	#Newsletter Form
	public function newsletterform()
	{
		$this->form_validation->set_rules('name', 'Name', 'required');
		$this->form_validation->set_rules('email', 'Phone', 'required');
		if ($this->form_validation->run() == TRUE)
		{
			$data['name']		= $this->input->post('name');
			$data['email']		= $this->input->post('email');
			$data['ip'] 		= get_ip();
			
			$newsletter 		= $this->db->select('*')->from('newsletter')->where('email',$data['email'])->get()->row();
			if($newsletter){
				$type = 'success';
				$message = "You have already subscribe our newsletter";
				set_message($type, $message);
				redirect($_SERVER['HTTP_REFERER']);
			}
			else{
                if ($this->input->post('website') == '') {
                    $this->db->insert('newsletter', $data);
                    /*** Email ****/
                    $data['setting']= $this->settings;
                    $admin_email	='info@cloudi5.com';
                    $subject 		= 'Newsletter Request From '. ucwords($data['name']) .' | '.$this->settings->email_id_1;
                    $email_content	= $this->load->view('admin/emails/newsletter_mail', $data, true);
                    $this->myemail->send_client_mail($admin_email, $email_content, $subject);
                    /*** Ack Email ****/
                    $subject1 		= 'Welcome to '. $this->settings->site_name .'! Your Newsletter has been submitted';
                    $email_content1	= $this->load->view('admin/emails/acknowldge_mail', $data, true);
                    $this->myemail->send_client_mail($data['email'], $email_content1, $subject1);
                }
				$this->session->set_userdata('success', '1');
				redirect('thank-you');
			}
		}
		else
		{
			$type = 'error';
			$message = "Please Fill All The Required Fields.";
			set_message($type, $message);
			$page_data['page_title'] = 'Digital Marketing';
			$this->load->view('frontend/digital-marketing-company-in-coimbatore',$page_data);
		}	
	}
	#Pages According to Location 
	#School Management Software in Avinashi
	public function school_management_software_in_avinashi()
	{
		$data['settings']	= $this->settings;
		$data['page_title'] = 'School Management Software';
		$this->load->view('frontend/school-management-software-in-avinashi',$data);
	}
	#School Management Software in erode
	public function school_management_software_in_erode()
	{
		$data['settings']	= $this->settings;
		$data['page_title'] = 'School Management Software';
		$this->load->view('frontend/school-management-software-in-erode',$data);
	}
	#School Management Software in madurai
	public function school_management_software_in_madurai()
	{
		$data['settings']	= $this->settings;
		$data['page_title'] = 'School Management Software';
		$this->load->view('frontend/school-management-software-in-madurai',$data);
	}
	#School Management Software in mettupalayam
	public function school_management_software_in_mettupalayam()
	{
		$data['settings']	= $this->settings;
		$data['page_title'] = 'School Management Software';
		$this->load->view('frontend/school-management-software-in-mettupalayam',$data);
	}
	#School Management Software in pollachi
	public function school_management_software_in_pollachi()
	{
		$data['settings']	= $this->settings;
		$data['page_title'] = 'School Management Software';
		$this->load->view('frontend/school-management-software-in-pollachi',$data);
	}
	#School Management Software in selam
	public function school_management_software_in_salem()
	{
		$data['settings']	= $this->settings;
		$data['page_title'] = 'School Management Software';
		$this->load->view('frontend/school-management-software-in-salem',$data);
	}
	#School Management Software in thoothukudi
	public function school_management_software_in_thoothukudi()
	{
		$data['settings']	= $this->settings;
		$data['page_title'] = 'School Management Software';
		$this->load->view('frontend/school-management-software-in-thoothukudi',$data);
	}
	#School Management Software in tiruchengode
	public function school_management_software_in_tiruchengode()
	{
		$data['settings']	= $this->settings;
		$data['page_title'] = 'School Management Software';
		$this->load->view('frontend/school-management-software-in-tiruchengode',$data);
	}
	#School Management Software in tirupur
	public function school_management_software_in_tirupur()
	{
		$data['settings']	= $this->settings;
		$data['page_title'] = 'School Management Software';
		$this->load->view('frontend/school-management-software-in-tirupur',$data);
	}
	#School Management Software in udumalaippettai
	public function school_management_software_in_udumalaippettai()
	{
		$data['settings']	= $this->settings;
		$data['page_title'] = 'School Management Software';
		$this->load->view('frontend/school-management-software-in-udumalaippettai',$data);
	}
	#School Management Software in namakkal
	public function school_management_software_in_namakkal()
	{
		$data['settings']	= $this->settings;
		$data['page_title'] = 'School Management Software';
		$this->load->view('frontend/school-management-software-in-namakkal',$data);
	}
	#School Management Software in ooty
	public function school_management_software_in_ooty()
	{
		$data['settings']	= $this->settings;
		$data['page_title'] = 'School Management Software';
		$this->load->view('frontend/school-management-software-in-ooty',$data);
	}
	#Website Design Company in Avinashi
	public function website_design_company_in_avinashi()
	{
		$data['category']	= $this->Portfolio_model->getPortfolioCategory();
		$data['portfolio']	= $this->Portfolio_model->getHomePortfolio();
		$data['settings']	= $this->settings;
		$data['page_title'] = 'Web Design';
		$this->load->view('frontend/website-design-company-in-avinashi',$data);
	}
	#Website Design Company in Erode
	public function website_design_company_in_erode()
	{
		$data['category']	= $this->Portfolio_model->getPortfolioCategory();
		$data['portfolio']	= $this->Portfolio_model->getHomePortfolio();
		$data['settings']	= $this->settings;
		$data['page_title'] = 'Web Design';
		$this->load->view('frontend/website-design-company-in-erode',$data);
	}
	#Website Design Company in Madurai
	public function website_design_company_in_madurai()
	{
		$data['category']	= $this->Portfolio_model->getPortfolioCategory();
		$data['portfolio']	= $this->Portfolio_model->getHomePortfolio();
		$data['settings']	= $this->settings;
		$data['page_title'] = 'Web Design';
		$this->load->view('frontend/website-design-company-in-madurai',$data);
	}	
	#Website Design Company in mettupalayam
	public function website_design_company_in_mettupalayam()
	{
		$data['category']	= $this->Portfolio_model->getPortfolioCategory();
		$data['portfolio']	= $this->Portfolio_model->getHomePortfolio();
		$data['settings']	= $this->settings;
		$data['page_title'] = 'Web Design';
		$this->load->view('frontend/website-design-company-in-mettupalayam',$data);
	}
	#Website Design Company in pollachi
	public function website_design_company_in_pollachi()
	{
		$data['category']	= $this->Portfolio_model->getPortfolioCategory();
		$data['portfolio']	= $this->Portfolio_model->getHomePortfolio();
		$data['settings']	= $this->settings;
		$data['page_title'] = 'Web Design';
		$this->load->view('frontend/website-design-company-in-pollachi',$data);
	}
	#Website Design Company in salem
	public function website_design_company_in_salem()
	{
		$data['category']	= $this->Portfolio_model->getPortfolioCategory();
		$data['portfolio']	= $this->Portfolio_model->getHomePortfolio();
		$data['settings']	= $this->settings;
		$data['page_title'] = 'Web Design';
		$this->load->view('frontend/website-design-company-in-salem',$data);
	}
	#Website Design Company in thoothukudi
	public function website_design_company_in_thoothukudi()
	{
		$data['category']	= $this->Portfolio_model->getPortfolioCategory();
		$data['portfolio']	= $this->Portfolio_model->getHomePortfolio();
		$data['settings']	= $this->settings;
		$data['page_title'] = 'Web Design';
		$this->load->view('frontend/website-design-company-in-thoothukudi',$data);
	}
	#Website Design Company in tiruchengode
	public function website_design_company_in_tiruchengode()
	{
		$data['category']	= $this->Portfolio_model->getPortfolioCategory();
		$data['portfolio']	= $this->Portfolio_model->getHomePortfolio();
		$data['settings']	= $this->settings;
		$data['page_title'] = 'Web Design';
		$this->load->view('frontend/website-design-company-in-tiruchengode',$data);
	}
	#Website Design Company in tirupur
	public function website_design_company_in_tirupur()
	{
		$data['category']	= $this->Portfolio_model->getPortfolioCategory();
		$data['portfolio']	= $this->Portfolio_model->getHomePortfolio();
		$data['settings']	= $this->settings;
		$data['page_title'] = 'Web Design';
		$this->load->view('frontend/website-design-company-in-tirupur',$data);
	}
	#Website Design Company in udumalaippettai
	public function website_design_company_in_udumalaippettai()
	{
		$data['category']	= $this->Portfolio_model->getPortfolioCategory();
		$data['portfolio']	= $this->Portfolio_model->getHomePortfolio();
		$data['settings']	= $this->settings;
		$data['page_title'] = 'Web Design';
		$this->load->view('frontend/website-design-company-in-udumalaippettai',$data);
	}
	#Website Design Company in namakkal
	public function website_design_company_in_namakkal()
	{
		$data['category']	= $this->Portfolio_model->getPortfolioCategory();
		$data['portfolio']	= $this->Portfolio_model->getHomePortfolio();
		$data['settings']	= $this->settings;
		$data['page_title'] = 'Web Design';
		$this->load->view('frontend/website-design-company-in-namakkal',$data);
	}
	#Website Design Company in ooty
	public function website_design_company_in_ooty()
	{
		$data['category']	= $this->Portfolio_model->getPortfolioCategory();
		$data['portfolio']	= $this->Portfolio_model->getHomePortfolio();
		$data['settings']	= $this->settings;
		$data['page_title'] = 'Web Design';
		$this->load->view('frontend/website-design-company-in-ooty',$data);
	}

	#Thank You Page
	public function success()
	{
		$data['settings']	= $this->settings;
		$this->load->view('frontend/success',$data);
	}
	
    #CRM Development
	public function crm()
	{
		$data['settings']	= $this->settings;
		$data['page_title'] = 'CRM Development';
		$this->load->view('frontend/crm',$data);
	}
	
	#Hire Developers
	public function hire_developers()
	{
		$data['settings']	= $this->settings;
		$data['meta']       = $this->db->select('*')->where('page', 'hire_developers')->get('meta_tags')->row();
		$data['page_title'] = 'Hire Developers';
		$this->load->view('frontend/hire-developers',$data);
	}

	#writeforus
	public function write_for_us()
	{
		$data['settings']	= $this->settings;
		$data['meta']       = $this->db->select('*')->where('page', 'write_for_us')->get('meta_tags')->row();
		$data['page_title'] = 'Write for Us';
		$this->load->view('frontend/write-for-us',$data);
	}

	#home-new
	public function home_new()
	{
		$data['settings']	= $this->settings;
		$data['meta']       = $this->db->select('*')->where('page', 'home_new')->get('meta_tags')->row();
		$data['page_title'] = 'Home new';
		$this->load->view('frontend/home-new',$data);
	}
	public function portfolio_new()
	{
		$data['settings']	= $this->settings;
		$data['meta']       = $this->db->select('*')->where('page', 'portfolio_new')->get('meta_tags')->row();
		$data['page_title'] = 'portfolio New';
		$this->load->view('frontend/portfolio-new',$data);
	}
}