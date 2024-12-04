<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Privilege extends CI_Controller
{
	public $access;
	
    public function __construct()
    {
        parent::__construct();
		$this->access = $this->Privilege_model->privilleges('privilege');
        $this->load->database();
        $this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate,
		post-check=0, pre-check=0');
        $this->output->set_header('Pragma: no-cache');
    }
	#Manage Privilege
    public function index()
    {
		$data['access']	= $this->access;
		$this->page_data->show_data('Manage User Privilege Details','privilege/manage_privilege',$data,'privilege','view');
    }
	#Privilege List
    public function privilege_list()
    {
        $list = $this->Privilege_model->get_datatables($this->input->post(null, true));
        $data = array();
        $no = $_POST['start'];
        foreach ($list['rows'] as $privilege) {
            $no++;
            $row = array();
            $row['sno'] 		= $no;
            $row['name'] 		= '<a href=' . base_url() . 'user/edit_user/' . $privilege->user_id . '>'. $privilege->name .'</a>';
            $row['email'] 		= $privilege->email;
            $row['mobile'] 		= $privilege->mobile;
            $row['user_type']	= $privilege->user_type;
			
			if($this->session->userdata('login_type') != 'Super Admin')
			{
				$actions ='';
				if (array_key_exists('edit' , $this->access))
				{
					$actions .= '<a  href=' . base_url() . 'privilege/edit_privilege/' . $privilege->user_privilege_id . '><i class="icon-edit"></i></a>';
				}
				if (array_key_exists('delete' , $this->access))
				{
					$actions .= '<a href="javascript:void(0)" onclick="delete_privilege(' . $privilege->user_privilege_id . ')"><i class="icon-remove"></i></a>';
				}
			}
			else
			{
				$actions = '<a  href=' . base_url() . 'privilege/edit_privilege/' . $privilege->user_privilege_id . ' class="menu-icon"><i class="icon-edit"></i></a>  <a href="javascript:void(0)" onclick="delete_privilege(' . $privilege->user_privilege_id . ')" class="menu-icon"><i class="icon-remove"></i></a>';
			}
			$row['actions'] = $actions;
            
            $data[] = $row;
        }
        $output = array(
            "draw" => $_POST['draw'],
            "recordsTotal" => $this->Privilege_model->count_all(),
            "recordsFiltered" => $list['filtered_rows'],
            "data" => $data,
        );
        //output to json format
        echo json_encode($output);
    }
	
	#Add Privilege
    public function add_privilege()
    {
		$data['users']	= $this->Users_model->getByUserType('User');
		$this->page_data->show_data('Add User Privilege Details','privilege/add_privilege',$data,'privilege','add');
    }
   
    /*** Manage Privilege ***/
    public function save_privilege()
    {
        $user_id 					= $this->input->post('user_id');
        for ($i = 0; $i < count($user_id); $i++) {
            $this->db->where(array('user_id' => $user_id[$i]));
            $count 					= $this->db->count_all_results('user_privilege');
			
            $data['user_id'] 		= $user_id[$i];
            $data['all_modules'] 	= $this->input->post('all_modules') != '' && $this->input->post('all_modules') ? $this->input->post('all_modules') : null;
            $privilege 				= $this->input->post('privilege');
			$data['dashboard'] 		= '{"view":"1"}';
			$data['profile'] 		= '{"view":"1"}';
			$data['settings']		= '{"view":"1"}';
			if(!empty($privilege['blog'])){
				$data['blog'] = json_encode($privilege['blog']);
			}else{
				$data['blog'] 		= '';
			}
			if(!empty($privilege['category'])){
				$data['category'] 	= json_encode($privilege['category']);
			}else{
				$data['category'] 	= '';
			}
			if(!empty($privilege['comments'])){
				$data['comments'] 	= json_encode($privilege['comments']);
			}else{
				$data['comments'] 	= '';
			}
			if(!empty($privilege['job_post'])){
				$data['job_post'] 	= json_encode($privilege['job_post']);
			}else{
				$data['job_post'] 	= '';
			}
			if(!empty($privilege['job_application'])){
				$data['job_application'] 	= json_encode($privilege['job_application']);
			}else{
				$data['job_application'] 	= '';
			}
			if(!empty($privilege['enquiries'])){
				$data['enquiries'] 	= json_encode($privilege['enquiries']);
			}else{
				$data['enquiries'] 	= '';
			}
			if(!empty($privilege['write_for_us_enquiries'])){
				$data['write_for_us_enquiries'] 	= json_encode($privilege['write_for_us_enquiries']);
			}else{
				$data['write_for_us_enquiries'] 	= '';
			}
			if(!empty($privilege['newsletter'])){
				$data['newsletter'] = json_encode($privilege['newsletter']);
			}else{
				$data['newsletter'] = '';
			}
			if(!empty($privilege['privilege'])){
				$data['privilege'] 	= json_encode($privilege['privilege']);
			}else{
				$data['privilege']	= '';
			}
			if(!empty($privilege['subscribe'])){
				$data['subscribe'] 	= json_encode($privilege['subscribe']);
			}else{
				$data['subscribe'] 	= '';
			}
			if(!empty($privilege['portfolio'])){
				$data['portfolio'] 	= json_encode($privilege['portfolio']);
			}else{
				$data['portfolio'] 	= '';
			}
			if(!empty($privilege['meta_pages'])){
				$data['meta_pages']	= json_encode($privilege['meta_pages']);
			}else{
				$data['meta_pages']	= '';
			}
			if(!empty($privilege['settings'])){
				$data['settings']	= json_encode($privilege['settings']);
			}else{
				$data['settings']	= '';
			}
			
            $getdata = array_filter($data);
            if ($count == 0) {
                $getdata['created_at'] = date('Y-m-d h:i:s');
                $this->db->insert('user_privilege', $getdata);
            } else {
                $getdata['updated_at'] = date('Y-m-d h:i:s');
                $this->db->where('user_id', $user_id[$i]);
                $this->db->update('user_privilege', $getdata);
            }
        }
        $type = 'success';
        $message = 'Data Added Successfully';
        set_message($type, $message);
        redirect(base_url() . 'privilege', 'refresh');
    }
	
    /*** Edit Privilege ***/
	public function edit_privilege($id)
    {
		$data['users']		= $this->Users_model->getByUserType('User');
		$data['edit_data'] 	= $this->db->select('*')->from('user_privilege')->where('user_privilege_id', $id)->get()->row();
		$this->page_data->show_data('Edit User Privilege Details','privilege/edit_privilege',$data,'privilege','edit');
    }
   
    public function update_privilege()
    {
        $user_privilege_id 		= $this->input->post('user_privilege_id');
        $user_id 				= $this->input->post('user_id');
        $data['user_id'] 		= $user_id;
		$data['all_modules'] 	= $this->input->post('all_modules') != '' && $this->input->post('all_modules') ? $this->input->post('all_modules') : null;
		$privilege 				= $this->input->post('privilege');
		$data['dashboard'] 		= '{"view":"1"}';
		$data['profile'] 		= '{"view":"1"}';
		$data['settings']		= '{"view":"1"}';
		if(!empty($privilege['blog'])){
			$data['blog'] = json_encode($privilege['blog']);
		}else{
			$data['blog'] 		= '';
		}
		if(!empty($privilege['category'])){
			$data['category'] 	= json_encode($privilege['category']);
		}else{
			$data['category'] 	= '';
		}
		if(!empty($privilege['comments'])){
			$data['comments'] 	= json_encode($privilege['comments']);
		}else{
			$data['comments'] 	= '';
		}
		if(!empty($privilege['job_post'])){
			$data['job_post'] 	= json_encode($privilege['job_post']);
		}else{
			$data['job_post'] 	= '';
		}
		if(!empty($privilege['job_application'])){
			$data['job_application'] 	= json_encode($privilege['job_application']);
		}else{
			$data['job_application'] 	= '';
		}
		if(!empty($privilege['enquiries'])){
			$data['enquiries'] 	= json_encode($privilege['enquiries']);
		}else{
			$data['enquiries'] 	= '';
		}
		if(!empty($privilege['write_for_us_enquiries'])){
			$data['write_for_us_enquiries'] 	= json_encode($privilege['write_for_us_enquiries']);
		}else{
			$data['write_for_us_enquiries'] 	= '';
		}
		if(!empty($privilege['newsletter'])){
			$data['newsletter'] = json_encode($privilege['newsletter']);
		}else{
			$data['newsletter'] = '';
		}
		if(!empty($privilege['privilege'])){
			$data['privilege'] 	= json_encode($privilege['privilege']);
		}else{
			$data['privilege']	= '';
		}
		if(!empty($privilege['subscribe'])){
			$data['subscribe'] 	= json_encode($privilege['subscribe']);
		}else{
			$data['subscribe'] 	= '';
		}
		if(!empty($privilege['portfolio'])){
			$data['portfolio'] 	= json_encode($privilege['portfolio']);
		}else{
			$data['portfolio'] 	= '';
		}
		if(!empty($privilege['meta_pages'])){
			$data['meta_pages']	= json_encode($privilege['meta_pages']);
		}else{
			$data['meta_pages']	= '';
		}
		if(!empty($privilege['settings'])){
			$data['settings']	= json_encode($privilege['settings']);
		}else{
			$data['settings']	= '';
		}
	
        $getdata = $data;
        $user_privilege_count = $this->db->where(array('user_privilege_id' => $user_privilege_id, 'user_id' => $user_id))->count_all_results('user_privilege');
        $count = $this->db->where(array('user_id' => $user_id))->count_all_results('user_privilege');
        if ($user_privilege_count == 0) {
            $this->db->where('user_privilege_id', $user_privilege_id);
            $this->db->delete('user_privilege');
        }
        if ($count == 0) {
            $getdata['created_at'] = date('Y-m-d H:i:s');
            $this->db->insert('user_privilege', $getdata);
        } else {
            $getdata['updated_at'] = date('Y-m-d H:i:s');
            $this->db->where('user_id', $user_id);
            $this->db->update('user_privilege', $getdata);
        }
        $type = 'success';
        $message = 'Data Updated Successfully';
        set_message($type, $message);
        redirect(base_url() . 'privilege', 'refresh');
    }
    public function delete_privilege($id)
    {
        $this->db->where('user_privilege_id', $id);
        $this->db->delete('user_privilege');
        $type = 'error';
        $message = 'Data Deleted Successfully';
        set_message($type, $message);
        redirect(base_url() . 'privilege', 'refresh');
    }
}
