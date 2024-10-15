<?php
if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}
class Users extends CI_Controller
{
	public $access;
	
    public function __construct()
    {
        parent::__construct();
		$this->access = $this->Privilege_model->privilleges('users');
        $this->load->database();
        $this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate,
		post-check=0, pre-check=0');
        $this->output->set_header('Pragma: no-cache');
    }
    #Manage Users
    public function index()
    {
		$data['access']				= $this->access;
		$this->page_data->show_data('Users','users/list',$data,'users','view');
    }
	
    #Users Table
    public function users_list()
    {
        $list = $this->Users_model->get_datatables($this->input->post(null, true));
        $data = array();
        $no = $_POST['start'];
        foreach ($list['rows'] as $user) {
			$no++;
            $row = array();
            $row['sno']			= $no;
			$row['name']		= $user->name;
			$row['email']		= $user->email;
			$row['mobile']		= $user->mobile;
			if(!empty($user->image)){
				$row['image']		= '<img src="'. base_url() . $user->image .'" width="50px" height="50px" alt="">';
			}else{
				$row['image']		= '<img src="'. base_url() .'assets/images/avatar.jpg" width="50px" height="50px" alt="">';
			}
			
			$row['user_type']	= $user->user_type;
            
			if($this->session->userdata('login_type') != 'Super Admin')
			{
				$actions ='';
				if (array_key_exists('edit' , $this->access))
				{
					$actions .= '<a  href=' . base_url() . 'users/edit_user/' . $user->id . ' class="menu-icon"><i  class="icon-edit"></i></a>';
				}
				if (array_key_exists('delete' , $this->access))
				{
					$actions .= '<a href="javascript:void(0)" onclick="delete_user(' . $user->id . ')"  class="menu-icon"><i  class="icon-remove"></i></a>';
				}
			}
			else
			{
				$actions = '<a  href=' . base_url() . 'users/edit_user/' . $user->id . ' class="menu-icon"><i  class="icon-edit"></i></a>  <a href="javascript:void(0)" onclick="delete_user(' . $user->id . ')"  class="menu-icon"><i  class="icon-remove"></i></a>';
			}
			if ($user->status == 'Active') {
                $row['status'] = '<a href=' . base_url() . 'users/inactive/' . $user->id . '><button title="Click to inactive" type="button" class="btn btn-success  btn-circle">Active</button></a>';
            } else{
                $row['status'] = '<a href=' . base_url() . 'users/active/' . $user->id . '><button title="Click to active" type="button" class="btn btn-danger  btn-circle">Inactive</button></a>';
            }
			$row['action'] = $actions;
            $data[] = $row;
        }
        $output = array(
            "draw" => $_POST['draw'],
            "recordsTotal" => $this->Users_model->count_all(),
            "recordsFiltered" => $list['filtered_rows'],
            "data" => $data,
        );
        // output to json format
        echo json_encode($output);
    }
    #Add User
    public function add_user()
    {
		$data['save_user']		= base_url('users/save_user');
		$this->page_data->show_data('Add User','users/add',$data,'users','add');
    }
    #Edit User
    public function edit_user($id)
    {
		$data['update_user']	= base_url('users/update_user/'.$id);
		$data['user']			= $this->Users_model->getById($id);
		$this->page_data->show_data('Edit User','users/edit',$data,'users','edit');
    }
	
    #Save User
    public function save_user()
    {
        $data['name']			= $this->input->post('name');
        $data['email']			= $this->input->post('email');
        $data['mobile']			= $this->input->post('mobile');
        $data['password']		= hash('sha512', $this->config->item('encryption_key') . $this->input->post('password'));
        $data['status']			= 'Active';
		
		if (!is_dir('uploads')) {
			mkdir('./uploads', 0777, true);
		}
		if (!is_dir('uploads/users/')) {
			mkdir('./uploads/users/', 0777, true);
		}
		if (!empty($_FILES['image']['name'])) 
		{
			$data['image']="uploads/users/". date('jnygis') .'_'. $_FILES['image']['name'];
			move_uploaded_file($_FILES["image"]["tmp_name"], $data['image']);
		} 
		else
		{
			$data['image']		= '';
			 
		}
		
		$user_id				= $this->Users_model->insert($data);
		$Accessdata['dashboard']= '{"view":"1"}';
		$Accessdata['profile']	= '{"view":"1"}';
        $getdata = array_filter($Accessdata);
		$this->db->insert('user_privilege', $getdata);
		
        $type = 'success';
        $message = 'Data Added Successfully';
        set_message($type, $message);
        redirect('users');
    }
	
    #Update User
    public function update_user($id)
    {
		$user 					= $this->Users_model->getById($id);
        $data['name']			= $this->input->post('name');
        $data['email']			= $this->input->post('email');
        $data['mobile']			= $this->input->post('mobile');
		
		if (!is_dir('uploads')) {
			mkdir('./uploads', 0777, true);
		}
		if (!is_dir('uploads/users/')) {
			mkdir('./uploads/users/', 0777, true);
		}
		if (!empty($_FILES['image']['name'])) 
		{
			if(!empty($user->image)){ unlink($user->image);}
			$data['image']="uploads/users/". date('jnygis') .'_'. $_FILES['image']['name'];
			move_uploaded_file($_FILES["image"]["tmp_name"], $data['image']);
		} 
		
		$this->Users_model->update($data,$id);
		$Accessdata['user_id']	= $id;
		$Accessdata['dashboard']	= '{"view":"1"}';
		$Accessdata['profile']	= '{"view":"1"}';
		$getdata 				= array_filter($Accessdata);
		$priviledge = $this->Privilege_model->getByUserId($id);
		if($priviledge){
			$this->db->where('user_id', $id);
			$this->db->update('user_privilege', $getdata);
		}else{
			$this->db->insert('user_privilege', $getdata);
		}

        $type = 'success';
        $message = 'Data Updated Successfully';
        set_message($type, $message);
        redirect('users');
    }
	
    #Delete User
    public function delete_user($id)
    {
		$this->db->where('id', $id);
		$this->db->delete('users');
		
		$this->db->where('user_id', $id);
		$this->db->delete('user_privilege');
		$message = 'Data Deleted Successfully';
		$type = 'error';
		set_message($type, $message);
		redirect('users');
	}
	
    #Active User
    public function active($id)
    {
		$data['status'] = 'Active';
		$this->Users_model->update($data, $id);
		$type = 'success';
		$message = 'Data Active Successfully';
		set_message($type, $message);
		redirect('users');
    }
	
    #Inactive User
    public function inactive($id)
    {
		$data['status'] = 'Inactive';
		$this->Users_model->update($data, $id);
		$type = 'error';
		$message = 'Data Inactive Successfully';
		set_message($type, $message);
		redirect('users');
    }
}
