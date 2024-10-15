<?php
if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}
class Category extends CI_Controller
{
	public $access;
	
    public function __construct()
    {
        parent::__construct();
		$this->access = $this->Privilege_model->privilleges('category');
        $this->load->database();
        $this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate,
		post-check=0, pre-check=0');
        $this->output->set_header('Pragma: no-cache');
    }
    #Manage Category
    public function index()
    {
		$data['access']				= $this->access;
		$this->page_data->show_data('Category','category/list',$data,'category','view');
    }
	
    #Category Table
    public function category_list()
    {
        $list = $this->Category_model->get_datatables($this->input->post(null, true));
        $data = array();
        $no = $_POST['start'];
        foreach ($list['rows'] as $category) {
			$no++;
            $row = array();
            $row['sno'] = $no;
			$row['title'] = $category->title;
            
			if($this->session->userdata('login_type') != 'Super Admin')
			{
				$actions ='';
				if (array_key_exists('edit' , $this->access))
				{
					$actions .= '<a  href=' . base_url() . 'category/edit_category/' . $category->category_id . ' class="menu-icon"><i  class="icon-edit"></i></a>';
				}
				if (array_key_exists('delete' , $this->access))
				{
					$actions .= '<a href="javascript:void(0)" onclick="delete_category(' . $category->category_id . ')"  class="menu-icon"><i  class="icon-remove"></i></a>';
				}
			}
			else
			{
				$actions = '<a  href=' . base_url() . 'category/edit_category/' . $category->category_id . ' class="menu-icon"><i  class="icon-edit"></i></a>  <a href="javascript:void(0)" onclick="delete_category(' . $category->category_id . ')"  class="menu-icon"><i  class="icon-remove"></i></a>';
			}
			if ($category->status == 'Active') {
                $row['status'] = '<a href=' . base_url() . 'category/inactive/' . $category->category_id . '><button title="Click to inactive" type="button" class="btn btn-success  btn-circle">Active</button></a>';
            } else{
                $row['status'] = '<a href=' . base_url() . 'category/active/' . $category->category_id . '><button title="Click to active" type="button" class="btn btn-danger  btn-circle">Inactive</button></a>';
            }
			$row['action'] = $actions;
            $data[] = $row;
        }
        $output = array(
            "draw" => $_POST['draw'],
            "recordsTotal" => $this->Category_model->count_all(),
            "recordsFiltered" => $list['filtered_rows'],
            "data" => $data,
        );
        // output to json format
        echo json_encode($output);
    }
    #Add Category
    public function add_category()
    {
		$data['save_category']	= base_url('category/save_category');
		$this->page_data->show_data('Add Category','category/add',$data,'category','add');
    }
    #Edit Category
    public function edit_category($id)
    {
		$data['update_category']	= base_url('category/update_category/'.$id);
		$data['category']			= $this->Category_model->getById($id);
		$this->page_data->show_data('Edit Category','category/edit',$data,'category','edit');
    }
	
    #Save Category
    public function save_category()
    {
        $data['title']		        = $this->input->post('title');
        $data['slug']		        = strtolower(str_replace(' ','-',preg_replace('!\s+!', ' ', preg_replace("/[^ \w]+/", "", $this->input->post('title')))));
        $data['sorting']            = $this->input->post('sorting');
        $data['meta_title']		    = $this->input->post('meta_title');
        $data['meta_keyword']	    = $this->input->post('meta_keyword');
        $data['meta_description']   = $this->input->post('meta_description');
		
		$this->Category_model->insert($data);
        $type = 'success';
        $message = 'Data Added Successfully';
        set_message($type, $message);
        redirect('category');
    }
	
    #Update Category
    public function update_category($id)
    {
        $data['title']		        = $this->input->post('title');
        $data['slug']		        = strtolower(str_replace(' ','-',preg_replace('!\s+!', ' ', preg_replace("/[^ \w]+/", "", $this->input->post('title')))));
        $data['sorting']            = $this->input->post('sorting');
        $data['meta_title']		    = $this->input->post('meta_title');
        $data['meta_keyword']	    = $this->input->post('meta_keyword');
        $data['meta_description']   = $this->input->post('meta_description');
		
		$this->Category_model->update($data,$id);
        $type = 'success';
        $message = 'Data Updated Successfully';
        set_message($type, $message);
        redirect('category');
    }
	
    #Delete Category
    public function delete_category($id)
    {
		$category = $this->Blog_model->getByCategoryId($id);
		if($category){
			$message = "You can't delete this record because it contains some Blog informations.";
		}else{
			$message = 'Data Deleted Successfully';
			$this->db->where('category_id', $id);
			$this->db->delete('category');
		}
		$type = 'error';
		set_message($type, $message);
		redirect('category');
	}
	
    #Active Category
    public function active($id)
    {
		$data['status'] = 'Active';
		$this->Category_model->update($data, $id);
		$type = 'success';
		$message = 'Data Active Successfully';
		set_message($type, $message);
		redirect('category');
    }
	
    #Inactive Category
    public function inactive($id)
    {
		$data['status'] = 'Inactive';
		$this->Category_model->update($data, $id);
		$type = 'error';
		$message = 'Data Inactive Successfully';
		set_message($type, $message);
		redirect('category');
    }
}
