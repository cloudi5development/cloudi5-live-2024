<?php
if (!defined('BASEPATH')) {
	exit('No direct script access allowed');
}
class Teams extends CI_Controller
{
	public $access;

	public function __construct()
	{
		parent::__construct();
		$this->access = $this->Privilege_model->privilleges('teams');
		$this->load->database();
		$this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate,
		post-check=0, pre-check=0');
		$this->output->set_header('Pragma: no-cache');
	}
	#Manage blog
	public function index()
	{
		$data['access']				= $this->access;
		$this->page_data->show_data('Teams', 'teams/list', $data, 'teams', 'view');
	}

	#blog Table
	public function teams_list()
	{
		$list = $this->Teams_model->get_datatables($this->input->post(null, true));
		//print_r($list);
		$data = array();

		$no = $this->input->post('start', true) ?? 0;
		foreach ($list['rows'] as $teams) {
			$no++;
			$row = array();
			$row['sno']			= $no;
			$row['name']		= $teams->name;
			$row['department']	= $teams->department;
			$row['designation']	= $teams->designation;
			$row['priority']	= $teams->priority;

			if (!empty($teams->image)) {
				$row['image']		= '<img src="' . base_url() . $teams->image . '" width="50px" height="50px" alt="">';
			} else {
				$row['image']		= '<img src="' . base_url() . 'assets/images/avatar.jpg" width="50px" height="50px" alt="">';
			}
			if ($this->session->userdata('login_type') != 'Super Admin') {
				$actions = '';
				if (array_key_exists('edit', $this->access)) {
					$actions .= '<a  href=' . base_url() . 'teams/edit_teams/' . $teams->id . ' class="menu-icon"><i  class="icon-edit"></i></a>';
				}
				if (array_key_exists('delete', $this->access)) {
					$actions .= '<a href="javascript:void(0)" onclick="delete(' . $teams->id . ')"  class="menu-icon"><i  class="icon-remove"></i></a>';
				}
			} else {
				$actions = '<a  href=' . base_url() . 'teams/edit_teams/' . $teams->id . ' class="menu-icon"><i  class="icon-edit"></i></a>  <a href="javascript:void(0)" onclick="delete_blog(' . $teams->id . ')"  class="menu-icon"><i  class="icon-remove"></i></a>';
			}
			if ($teams->status == '1') {
				$row['status'] = '<a href=' . base_url() . 'teams/inactive/' . $teams->id . '><button title="Click to inactive" type="button" class="btn btn-success  btn-circle">Active</button></a>';
			} else {
				$row['status'] = '<a href=' . base_url() . 'teams/active/' . $teams->id . '><button title="Click to active" type="button" class="btn btn-danger  btn-circle">Inactive</button></a>';
			}
			$row['action'] = $actions;
			$data[] = $row;
		}
		$output = array(

			"recordsTotal" => $this->Teams_model->count_all(),
			"recordsFiltered" => $list['filtered_rows'],
			"data" => $data,

		);

		// output to json format
		echo json_encode($output);
	}
	#Add Blog
	public function add_teams()
	{

		$data['save_teams']		= base_url('teams/save_teams');
		$this->page_data->show_data('Add Teams', 'teams/add', $data, 'teams', 'add');
	}
	#Edit Blog
	public function edit_teams($id)
	{
		$data['update_teams']	= base_url('teams/update_teams/' . $id);
		$data['teams']			= $this->Teams_model->getById($id);
		$this->page_data->show_data('Edit Teams', 'teams/edit', $data, 'teams', 'edit');
	}

	#Save Blog
	public function save_teams()
	{
		$data['name']			= $this->input->post('name');
		$data['department']	= $this->input->post('department');
		$data['designation']		= $this->input->post('designation');
		$data['priority']	= $this->input->post('priority');
		$data['image_alt_tag']	= $this->input->post('image_alt_tag');
		$data['status']	= $this->input->post('status');

	
		if (!is_dir('uploads')) {mkdir('./uploads', 0777, true);}
		if (!is_dir('uploads/teams/')) {mkdir('./uploads/teams/', 0777, true);}
	
		$upload_folder				= "uploads/teams"."/";

		if (!empty($_FILES['image']['name']))
		{
			$data['image'] = $upload_folder . date('his') . '-'. str_replace(' ','-',$_FILES['image']['name']);
			move_uploaded_file($_FILES["image"]["tmp_name"], $data['image']);
		}

		$this->Teams_model->insert($data);
		$type = 'success';
		$message = 'Data Added Successfully';
		set_message($type, $message);
		redirect('Teams');
	}

	#Update Blog
	public function update_teams($id)
	{
		$teams					= $this->Teams_model->getById($id);
		$data['name']			= $this->input->post('name');
		$data['department']	= $this->input->post('department');
		$data['designation']		= $this->input->post('designation');
		$data['priority']	= $this->input->post('priority');
		$data['image_alt_tag']	= $this->input->post('image_alt_tag');
		$data['status']	= $this->input->post('status');

		//log_message('error', $this->input->post('description'));


		if (!is_dir('uploads')) {mkdir('./uploads', 0777, true);}
		if (!is_dir('uploads/teams/')) {mkdir('./uploads/teams/', 0777, true);}
	
		$upload_folder				= "uploads/teams"."/";

		if (!empty($_FILES['image']['name']))
		{
			if(!empty($teams->image)){ unlink($teams->image); }
			$data['image'] = $upload_folder . date('his') . '-'. str_replace(' ','-',$_FILES['image']['name']);
			move_uploaded_file($_FILES["image"]["tmp_name"], $data['image']);
			
		}
		$this->Teams_model->update($data, $id);;
		$type = 'success';
		$message = 'Data Updated Successfully';
		set_message($type, $message);
		redirect('teams');
	}


	public function delete_teams($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('teams');
		$message = 'Data Deleted Successfully';
		$type = 'error';
		set_message($type, $message);
		redirect('teams');
	}


	#Active Blog
	public function active($id)
	{
		$data['status'] = '1';
		$this->Teams_model->update($data, $id);
		$type = 'success';
		$message = 'Data Active Successfully';
		set_message($type, $message);
		redirect('teams');
	}

	#Inactive Blog
	public function inactive($id)
	{
		$data['status'] = '0';
		$this->Teams_model->update($data, $id);
		$type = 'error';
		$message = 'Data Inactive Successfully';
		set_message($type, $message);
		redirect('teams');
	}
}
