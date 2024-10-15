<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');
class Accesspanel extends CI_Controller
{
	public $access;
    function __construct() {
        parent::__construct();
        $this->access 	= $this->Privilege_model->privilleges('dashboard');
		$this->user_id	= $this->session->userdata('user_id');
		$this->users	= $this->Users_model->getById($this->user_id);
		$this->settings	= $this->Settings_model->getAll();
    }
	
    public function index() 
	{
		$page_data['settings'] 		= $this->settings;
        $page_data['page_title']	= 'Login';
		$this->load->view('admin/login',$page_data);
    }
	
	/***DASHBOARD***/
    function dashboard()
	{
		$page_data['users'] 		= $this->Users_model->getAll();
		$page_data['category'] 		= $this->Category_model->getAll();
        $page_data['blog']			= $this->Blog_model->getAll();
        $page_data['comments']		= $this->Comments_model->getAll();
        $page_data['enquiries']		= $this->Enquiries_model->getAll();
        $page_data['newsletter']	= $this->Newsletter_model->getAll();
        $page_data['subscribe']		= $this->Subscribe_model->getAll();
		$page_data['settings'] 		= $this->settings;
		$this->page_data->show_data('Dashboard','dashboard',$page_data,'dashboard','view');
	}
	public function checkuser() 
	{
	    $this->form_validation->set_rules('username', 'User Name', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');
        if ($this->form_validation->run() == TRUE)
        {
		    $data['username'] = $this->input->post("username");
		    $data['password'] = hash('sha512', $this->config->item('encryption_key') . $this->input->post('password'));

			$query = $this->Users_model->checkuser($data['username'],$data['password']);

			if ($query)
			{
				$this->session->set_userdata('login_type', $query->user_type);
				$this->session->set_userdata('user_name', $query->name);
				$this->session->set_userdata('user_id', $query->id);
				redirect('accesspanel/dashboard');	
			}
			else
			{
				$type = 'error';
				$message = 'Username/Password is Incorrect';
				set_message($type, $message);
				$page_data['settings']		= $this->settings;
				$page_data['page_title']	= 'Login';
				$this->load->view('admin/login',$page_data);
			}
		}
		else
		{
			$type = 'error';
		    $message = 'Username/Password is Incorrect';
		    set_message($type, $message);
			$page_data['settings'] = $this->settings;
			$page_data['page_title'] = 'Login';
			$this->load->view('admin/login',$page_data);
		}		
	}
	
	public function profile() 
	{
		$page_data['settings']		= $this->settings;
		$page_data['edit_profile']	= $this->Users_model->getById($this->user_id);
		$page_data['page_title']	= 'Profile Update';
		$this->load->view('admin/profile',$page_data);
    }
	
	public function profile_update($id) 
	{	   
	    $this->form_validation->set_rules('name', 'Name', 'trim|required');
	    $this->form_validation->set_rules('email', 'Email', 'trim|required');
	    $this->form_validation->set_rules('mobile', 'Mobile', 'trim|required');
        if ($this->form_validation->run() == TRUE)
        {
			$data['name'] = $this->input->post("name");
			$data['email'] = $this->input->post("email");
			$data['mobile'] = $this->input->post("mobile");
			if (!empty($_FILES['image']['name'])) 
			{
				if (!is_dir('uploads')) {
					mkdir('./uploads', 0777, true);
				}
				if (!is_dir('uploads/users/')) {
					mkdir('./uploads/users/', 0777, true);
				}
				if(!empty($this->users->image)){
					unlink($this->users->image);
				}
				$data['image']="uploads/users/". str_replace(' ','_',$this->users->user_type) .'_'. $_FILES['image']['name'];
				move_uploaded_file($_FILES["image"]["tmp_name"], $data['image']);
			}
			$this->Users_model->update($data,$id);
			$type = 'success';
			$message = 'Profile Update Successfully';
			set_message($type, $message);
			redirect('accesspanel/profile/'.$id);
        }
		else
		{
			set_message('success', 'Required field mising');
			$page_data['settings']		= $this->settings;
			$page_data['edit_profile']	= $this->users;
			$page_data['page_title']	= 'Profile Update';
			$this->load->view('admin/profile',$page_data);
		}		
	}
	
	public function password_update() 
	{
		$this->form_validation->set_rules('current_password', 'Current Password', 'trim|required|callback_oldpassword_check');
		$this->form_validation->set_rules('new_password','New Password', 'trim|required');
        $this->form_validation->set_rules('conform_password', 'Confirm Password', 'trim|required|matches[new_password]');
        if ($this->form_validation->run() == TRUE)
        {
			$data['password'] = hash('sha512', $this->config->item('encryption_key') . $this->input->post('new_password')); 
			$this->Users_model->update($data , $this->user_id);
			/******************** Email Notification ********************/
			$email_data = array('name' =>$this->users->name,'email' =>$this->users->email,'setting' => $this->settings);
			$subject = 'Password change for your '. $this->settings->site_name;
			$email_content= $this->load->view('admin/emails/change_password',$email_data,TRUE);
			
			$this->myemail->send_client_mail($this->users->email, $email_content, $subject);
			/************************************************************/
			$type = 'success';
			$message = 'Password Update Successfully';
			set_message($type, $message);
			redirect('accesspanel/profile/'.$this->users->user_id); 
        }
		else
		{
			$page_data['settings']		= $this->settings;
			$page_data['edit_profile']	= $this->users;
			$page_data['page_title']	= 'Profile Update';
			$this->load->view('admin/profile',$page_data);
		}		
	}
	
	public function oldpassword_check() 
	{
		if(hash('sha512', $this->config->item('encryption_key') . $this->input->post('current_password')) != $this->users->password)
		{			   
			$this->form_validation->set_message('oldpassword_check', 'Current Password not match');
			return FALSE;
		}
		return TRUE;
	}
    
	public function forgot_password() 
	{
		$this->form_validation->set_rules('email', 'E-Mail ID', 'trim|required'); 
		if ($this->form_validation->run() == TRUE)
		{
			$email=$this->input->post('email');
			$login = $this->db->select('*')->from('users')->where('email', $email)->where('status', 'Active')->get()->row(); 
				
			/******************** Email Notification ********************/
			date_default_timezone_set('Asia/Kolkata');
			$currentDatee			= date("Y-m-d H:i:s");
			$currentDate			= date("Y-m-d H:i:s", strtotime($currentDatee));
			$token					= base64_encode($currentDate);
			$data['email']			= $email;
			$data['token']			= $token;
			$data['token_status']	= 0; 
			$subject				= 'Reset Password Link';
			/************************************************************/
			if ($login)
			{
				$this->db->where('email', $email);
				$this->db->update('users',$data);
				$data['setting'] = $this->settings;
				$email_content= $this->load->view('admin/emails/reset_password',$data,TRUE);
				$this->myemail->send_client_mail($email, $email_content, $subject);
				$type = 'success';
				$message1 = 'Reset Link Successfully send please check your email';
				set_message($type, $message1);
				redirect('accesspanel');
			}
			else {
				$type = 'error';
				$message2 = 'Could not find your Account';
				set_message($type, $message2);
			}
		}
		
		$page_data['settings'] = $this->settings;
        $page_data['page_title'] = 'Forgot Password';
		$this->load->view('admin/forgot_password',$page_data);
    }
	public function reset_password($token='') 
	{
		$page_data['settings'] = $this->settings;
		$token	=$this->uri->segment(3);
		$login	= $this->db->select('token_status')->from('users')->where('token', $token)->where('status', 'Active')->get()->row(); 
		
		if($login)
		{
		    if($login->token_status == 1)
			{
				$type = 'error';
				$message2 = "Your Link Expired ";
				set_message($type, $message2);
				redirect('accesspanel'); 
			}
		    else
			{
				$page_data['page_title'] = 'Reset Your Password';
				$page_data['token'] = $token;
				$this->load->view('admin/reset_password',$page_data);
			}
		}
		else
		{
			$type = 'error';
			$message2 = 'Your Link Not Valid';
			set_message($type, $message2);
			redirect('accesspanel'); 
		}
	}
	public function reset_password_submit() 
	{
		$page_data['settings'] = $this->settings;
		$token = $this->input->post('token');
		$login = $this->db->select('*')->from('users')->where('token', $token)->get()->row(); 
		$this->form_validation->set_rules('new_password','New Password', 'trim|required');
		$this->form_validation->set_rules('conform_password', 'Conform Password', 'trim|required|matches[new_password]');
		if ( $this->form_validation->run() == TRUE )
		{
			$data['password'] = hash('sha512', $this->config->item('encryption_key') . $this->input->post('new_password')); 
			$data['token_status'] = 1; 
			if($login)
			{
				$this->db->where('token', $token);
				$this->db->update('users',$data);	
				$email=$login->email;
				$email_data = array('name' =>$login->name,'email' =>$login->email,'setting' => $this->settings);
				/******************** Email Notification ********************/
				$subject = 'Password change for your '. $this->settings->site_name;
				$email_content= $this->load->view('admin/emails/change_password',$email_data,TRUE);
				
				$this->myemail->send_client_mail($email, $email_content, $subject);
				/************************************************************/
				$type = 'success';
				$message1 = 'Password Successfully Changed';
				set_message($type, $message1);
				redirect('accesspanel');
			}else{
				$type = 'error';
				$message1 = 'Your Link Expired';
				set_message($type, $message1);
				redirect('accesspanel');
			}
		}
		else
		{
			$page_data['page_title']	= 'Reset Your Password';
			$page_data['token']			= $token;
			$this->load->view('admin/reset_password',$page_data);
		}
	}
	public function create_password($token ='') 
	{
		$page_data['setting'] = $this->settings;
		$token=$this->uri->segment(3);
		$login = $this->db->select('*')->from('users')->where('token', $token)->where('status', 'Active')->get()->row(); 
	
		if(count($login) >0)
		{
			if($login->token_status == 0)
			{
				$page_data['page_title']	= 'Create Your Password | '. $this->settings->site_name;
				$page_data['token']			= $token;
				$this->load->view('admin/create_password',$page_data);
			}
			else
			{
				$type = 'error';
				$message2 = 'Your Link Expired';
				set_message($type, $message2);
				redirect(base_url('accesspanel'), 'refresh');
			}
		}
		
		else
		{
			$type = 'error';
			$message2 = 'Your Link Not Valid';
			set_message($type, $message2);
			redirect(base_url('accesspanel'), 'refresh');
		}
	}
	public function create_password_submit() 
	{
		$page_data['setting'] = $this->settings;
		$token = $this->input->post('token');
		//Merchant Admin Login 
		$login = $this->db->select('*')->from('users')->where('token', $token)->where('status', 'Active')->get()->row();
		$this->form_validation->set_rules('new_password','New Password', 'trim|required');
		$this->form_validation->set_rules('conform_password', 'Confirm Password', 'trim|required|matches[new_password]');
		if ( $this->form_validation->run() == TRUE )
		{
			$data['password'] = hash('sha512', $this->config->item('encryption_key') . $this->input->post('new_password')); 
			$data['token_status'] = 1; 
			$data['is_email_verified'] = 1;
			if($login)
			{
				$this->db->where('token', $token);
				$this->db->update('users',$data);
				$email=$login->email;
				$email_data = array('name' =>$login->name,'email' =>$login->email,'verify' =>'Email','setting' => $this->settings);
				/******************** Email Notification ********************/
				$subject = 'Welcome to '.$this->settings->site_name;
				$email_content= $this->load->view('admin/emails/welcome',$email_data,TRUE);
				$this->myemail->send_client_mail($email, $email_content, $subject);
				/************************************************************/
				$type = 'success';
				$message1 = 'Password Successfully Created';
				set_message($type, $message1);
				redirect(base_url('accesspanel'), 'refresh');
			}else{
				$type = 'error';
				$message1 = "You Can't Create Password";
				set_message($type, $message1);
				redirect(base_url('accesspanel'), 'refresh');
			}
		}
		else
		{
			$page_data['page_title'] = 'Create Your Password | '. $this->settings->site_name;
			$page_data['token'] = $token;
			$this->load->view('admin/create_password',$page_data);
		}
	}
	public function logout() 
	{
        $this->session->sess_destroy();
		$type = 'success';
		$message = 'Logout Successfully';
		set_message($type, $message);
        redirect(base_url() . 'accesspanel', 'refresh');
    }
}
