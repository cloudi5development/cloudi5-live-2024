<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**************************
Project Name	: Cloudi5 Technologies | Blog
Created on		: 06 June, 2019
Last Modified 	: 06 June, 2019
Description		: Page Data library
***************************/
class Page_data {

  function show_data($title ="", $page ="" ,$data ="",$permission ="",$access ="")
  {
		$ci = get_instance();
		$ci->load->database();
		$users = $ci->Users_model->getById($ci->session->userdata('user_id'));
		$page_data['page_title'] = $title;
		$page_data['page_name'] = $page;
		if(empty($data))
		{
		    $data=array();
		}
		$page_data = array_merge($page_data, $data);
		if($ci->session->userdata('login_type') == 'Super Admin')
		{
			$ci->load->view('admin/index', $page_data);	
		}
	    elseif($ci->session->userdata('login_type') == 'Admin' || $ci->session->userdata('login_type') == 'Employee' || $ci->session->userdata('login_type') == 'User')
		{
			if(!empty($permission)){
				$query = $ci->Privilege_model->getPermission($permission,$users->id);
				$result = json_decode($query->$permission, TRUE);
				if($result){
					if (array_key_exists($access, $result))
					{
						$ci->load->view('admin/index', $page_data);	
					}
					else
					{
						$type = 'error';
						$message = 'Permission denied';
						set_message($type, $message);
						redirect(base_url('accesspanel/dashboard'), 'refresh');
					}
				}else{
					$type = 'error';
					$message = 'Permission denied';
					set_message($type, $message);
					redirect(base_url('accesspanel/dashboard'), 'refresh');
				}
			}
		}
		else
		{
			redirect(base_url('accesspanel'), 'refresh');
		}
  }
}
/* Location: ./application/libraries/Page_data.php */