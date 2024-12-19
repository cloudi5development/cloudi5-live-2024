<?php
if (!defined('BASEPATH')) {
	exit('No direct script access allowed');
}
class Clients extends CI_Controller
{
	public $access;

	public function __construct()
	{
		parent::__construct();
		$this->access = $this->Privilege_model->privilleges('clients');
		$this->load->database();
		$this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate,
		post-check=0, pre-check=0');
		$this->output->set_header('Pragma: no-cache');
	}

	public function index()
	{
		$data['access'] = $this->access;
		$this->page_data->show_data('Clients', 'clients/list', $data, 'clients', 'view');
	}


	public function clients_list()
	{
		$list = $this->Clients_model->get_datatables($this->input->post(null, true));
		//print_r($list);
		$data = array();

		$no = $this->input->post('start', true) ?? 0;
		foreach ($list['rows'] as $clients) {
			$no++;
			$row = array();
			$row['sno'] = $no;
			$row['name'] = $clients->name;

			$row['priority'] = $clients->priority;

			if (!empty($clients->image)) {
				$row['image'] = '<img src="' . base_url() . $clients->image . '" width="50px" height="50px" alt="">';
			} else {
				$row['image'] = '<img src="' . base_url() . 'assets/images/avatar.jpg" width="50px" height="50px" alt="">';
			}
			if ($this->session->userdata('login_type') != 'Super Admin') {
				$actions = '';
				if (array_key_exists('edit', $this->access)) {
					$actions .= '<a  href=' . base_url() . 'clients/edit_clients/' . $clients->id . ' class="menu-icon"><i  class="icon-edit"></i></a>';
				}
				if (array_key_exists('delete', $this->access)) {
					$actions .= '<a href="javascript:void(0)" onclick="delete(' . $clients->id . ')"  class="menu-icon"><i  class="icon-remove"></i></a>';
				}
			} else {
				$actions = '<a  href=' . base_url() . 'clients/edit_clients/' . $clients->id . ' class="menu-icon"><i  class="icon-edit"></i></a>  <a href="javascript:void(0)" onclick="delete_blog(' . $clients->id . ')"  class="menu-icon"><i  class="icon-remove"></i></a>';
			}
			if ($clients->status == '1') {
				$row['status'] = '<a href=' . base_url() . 'clients/inactive/' . $clients->id . '><button title="Click to inactive" type="button" class="btn btn-success  btn-circle">Active</button></a>';
			} else {
				$row['status'] = '<a href=' . base_url() . 'clients/active/' . $clients->id . '><button title="Click to active" type="button" class="btn btn-danger  btn-circle">Inactive</button></a>';
			}
			$row['action'] = $actions;
			$data[] = $row;
		}
		$output = array(

			"recordsTotal" => $this->Clients_model->count_all(),
			"recordsFiltered" => $list['filtered_rows'],
			"data" => $data,

		);

		// output to json format
		echo json_encode($output);
	}
	#Add Blog
	public function add_clients()
	{

		$data['save_clients'] = base_url('clients/save_teams');
		$this->page_data->show_data('Add Clients', 'clients/add', $data, 'clients', 'add');
	}
	#Edit Blog
	public function edit_clients($id)
	{
		$data['update_clients'] = base_url('clients/update_clients/' . $id);
		$data['clients'] = $this->Clients_model->getById($id);
		$this->page_data->show_data('Edit Clients', 'clients/edit', $data, 'clients', 'edit');
	}

	#Save Blog
	public function save_clients()
	{
		$data['name'] = $this->input->post('name');
		$data['priority'] = $this->input->post('priority');
		$data['image_alt_tag'] = $this->input->post('image_alt_tag');
		$data['is_show_in_home'] = $this->input->post('show_home')?:0;
		$data['status'] = $this->input->post('status');

	
		
		if (!is_dir('uploads')) {mkdir('./uploads', 0777, true);}
		if (!is_dir('uploads/clients/')) {mkdir('./uploads/clients/', 0777, true);}
	
		$upload_folder				= "uploads/clients"."/";

		if (!empty($_FILES['image']['name']))
		{
			
			$data['image'] = $upload_folder . date('his') . '-'. str_replace(' ','-',$_FILES['image']['name']);
			move_uploaded_file($_FILES["image"]["tmp_name"], $data['image']);
			
		}

		$this->Clients_model->insert($data);
		$type = 'success';
		$message = 'Data Added Successfully';
		set_message($type, $message);
		redirect('Clients');
	}

	#Update Blog
	public function update_clients($id)
	{
		$clients = $this->Clients_model->getById($id);
		$data['name'] = $this->input->post('name');
		$data['priority'] = $this->input->post('priority');
		$data['image_alt_tag'] = $this->input->post('image_alt_tag');
		$data['is_show_in_home'] = $this->input->post('show_home') ?:0;
		$data['status'] = $this->input->post('status');
		//log_message('error', $this->input->post('description'));
		
		if (!is_dir('uploads')) {mkdir('./uploads', 0777, true);}
		if (!is_dir('uploads/clients/')) {mkdir('./uploads/clients/', 0777, true);}
	
		$upload_folder				= "uploads/clients"."/";

		if (!empty($_FILES['image']['name']))
		{
			if(!empty($clients->image)){ unlink($clients->image); }
			$data['image'] = $upload_folder . date('his') . '-'. str_replace(' ','-',$_FILES['image']['name']);
			move_uploaded_file($_FILES["image"]["tmp_name"], $data['image']);
			
		}
		
		$this->Clients_model->update($data, $id);
		$type = 'success';
		$message = 'Data Updated Successfully';
		set_message($type, $message);
		redirect('Clients');
	}


	public function delete_clients($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('clients');
		$message = 'Data Deleted Successfully';
		$type = 'error';
		set_message($type, $message);
		redirect('Clients');
	}


	#Active Blog
	public function active($id)
	{
		$data['status'] = '1';
		$this->Clients_model->update($data, $id);
		$type = 'success';
		$message = 'Data Active Successfully';
		set_message($type, $message);
		redirect('Clients');
	}

	#Inactive Blog
	public function inactive($id)
	{
		$data['status'] = '0';
		$this->Clients_model->update($data, $id);
		$type = 'error';
		$message = 'Data Inactive Successfully';
		set_message($type, $message);
		redirect('Clients');
	}
}