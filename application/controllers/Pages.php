<?php
if (!defined('BASEPATH')) {
	exit('No direct script access allowed');
}
class Pages extends CI_Controller
{
	public $access;

	public function __construct()
	{
		parent::__construct();
		$this->access = $this->Privilege_model->privilleges('pages');
		$this->load->database();
		$this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate,
		post-check=0, pre-check=0');
		$this->output->set_header('Pragma: no-cache');
	}

	public function index()
	{
		$data['access'] = $this->access;
		$this->page_data->show_data('Pages', 'pages/list', $data, 'pages', 'view');
	}


	public function pages_list()
	{
		$list = $this->Pages_model->get_datatables($this->input->post(null, true));
		//print_r($list);
		$data = array();

		$no = $this->input->post('start', true) ?? 0;
		foreach ($list['rows'] as $pages) {
			$no++;
			$row = array();
			$row['sno'] = $no;
			$row['title'] = $pages->title;

			$row['priority'] = $pages->priority;

			
			if ($this->session->userdata('login_type') != 'Super Admin') {
				$actions = '';
				if (array_key_exists('edit', $this->access)) {
					$actions .= '<a  href=' . base_url() . 'pages/edit_pages/' . $pages->id . ' class="menu-icon"><i  class="icon-edit"></i></a>';
				}
				if (array_key_exists('delete', $this->access)) {
					$actions .= '<a href="javascript:void(0)" onclick="delete(' . $pages->id . ')"  class="menu-icon"><i  class="icon-remove"></i></a>';
				}
			} else {
				$actions = '<a  href=' . base_url() . 'pages/edit_pages/' . $pages->id . ' class="menu-icon"><i  class="icon-edit"></i></a>  <a href="javascript:void(0)" onclick="delete_pages(' . $pages->id . ')"  class="menu-icon"><i  class="icon-remove"></i></a>';
			}
			if ($pages->is_active == '1') {
				$row['is_active'] = '<a href=' . base_url() . 'pages/inactive/' . $pages->id . '><button title="Click to inactive" type="button" class="btn btn-success  btn-circle">Active</button></a>';
			} else {
				$row['is_active'] = '<a href=' . base_url() . 'pages/active/' . $pages->id . '><button title="Click to active" type="button" class="btn btn-danger  btn-circle">Inactive</button></a>';
			}
			$row['action'] = $actions;
			$data[] = $row;
		}
		$output = array(

			"recordsTotal" => $this->Pages_model->count_all(),
			"recordsFiltered" => $list['filtered_rows'],
			"data" => $data,

		);
       // print_r($output);



		// output to json format
		echo json_encode($output);
	}
	#Add Blog
	public function add_pages()
	{

		$data['save_pages'] = base_url('pages/save_pages');
		$this->page_data->show_data('Add Pages', 'pages/add', $data, 'pages', 'add');
	}
	#Edit Blog
	public function edit_pages($id)
	{
		$data['update_pages'] = base_url('pages/update_pages/' . $id);
		$data['pages'] = $this->Pages_model->getById($id);
		$this->page_data->show_data('Edit Pages', 'pages/edit', $data, 'pages', 'edit');
	}

	#Save Blog
	public function save_pages()
	{
		$data['title'] = $this->input->post('title');
	
		$data['slug'] = strtolower(preg_replace("/[^a-zA-Z0-9]+/", "-",$this->input->post('title')));
		$data['priority'] = $this->input->post('priority');
        $data['content'] = $this->input->post('content');
		$data['show_in_footer'] = $this->input->post('show_in_footer')?:0;
        $data['meta_title']			= $this->input->post('meta_title');
        $data['meta_keyword']		= $this->input->post('meta_keyword');
		$data['meta_desc']	= $this->input->post('meta_description');
		$data['is_active'] = $this->input->post('is_active');
		$this->Pages_model->insert($data);
		$type = 'success';
		$message = 'Data Added Successfully';
		set_message($type, $message);
		redirect('Pages');
	}

	#Update Blog
	public function update_pages($id)
	{
		$clients = $this->Pages_model->getById($id);
        $data['title'] = $this->input->post('title');
		$data['slug']  = strtolower(preg_replace("/[^a-zA-Z0-9]+/", "-",$this->input->post('title')));
		$data['priority'] = $this->input->post('priority');
        $data['content'] = $this->input->post('content');
        $data['meta_title']			= $this->input->post('meta_title');
        $data['meta_keyword']		= $this->input->post('meta_keyword');
		$data['meta_desc']	= $this->input->post('meta_description');
		$data['show_in_footer'] = $this->input->post('show_in_footer')?:0;
		$data['is_active'] = $this->input->post('is_active');
        
		//log_message('error', $this->input->post('description'));
	
		
		$this->Pages_model->update($data, $id);
		$type = 'success';
		$message = 'Data Updated Successfully';
		set_message($type, $message);
		redirect('Pages');

	}


	public function delete_pages($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('pages');
		$message = 'Data Deleted Successfully';
		$type = 'error';
		set_message($type, $message);
		redirect('Pages');
	}


	#Active Blog
	public function active($id)
	{
		$data['is_active'] = '1';
		$this->Pages_model->update($data, $id);
		$type = 'success';
		$message = 'Data Active Successfully';
		set_message($type, $message);
		redirect('Pages');
	}

	#Inactive Blog
	public function inactive($id)
	{
		$data['is_active'] = '0';
		$this->Pages_model->update($data, $id);
		$type = 'error';
		$message = 'Data Inactive Successfully';
		set_message($type, $message);
		redirect('Pages');
	}
}