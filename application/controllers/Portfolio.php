<?php
if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}
class Portfolio extends CI_Controller
{
	public $access;
	
    public function __construct()
    {
        parent::__construct();
		$this->access = $this->Privilege_model->privilleges('portfolio') ?: array();
    }
    #Manage portfolio
    public function lists()
    {
		$data['access']				= $this->access;
		$data['category']			= $this->Category_model->getAll();
		$this->page_data->show_data('Portfolio','portfolio/list',$data,'portfolio','view');
    }
	
    #portfolio Table
    public function portfolio_list()
    {
        $list = $this->Portfolio_model->get_datatables($this->input->post(null, true));
        $data = array();
        $no = $_POST['start'];
        foreach ($list['rows'] as $portfolio) {
			$no++;
            $row = array();
            $row['sno']			= $no;
			$row['title']		= $portfolio->title;
			$row['services']	= $portfolio->service_categories;
			$row['client']		= $portfolio->company_name;
			$row['category']	= $portfolio->category;
            
			if($this->session->userdata('login_type') != 'Super Admin')
			{
				$actions ='';
				if (array_key_exists('edit' , $this->access))
				{
					$actions .= '<a  href=' . base_url() . 'portfolio/edit_portfolio/' . $portfolio->id . ' class="menu-icon"><i  class="icon-edit"></i></a>';
				}
				if (array_key_exists('delete' , $this->access))
				{
					$actions .= '<a href="javascript:void(0)" onclick="deletePortfolio(' . $portfolio->id . ')"  class="menu-icon"><i  class="icon-remove"></i></a>';
				}
			}
			else
			{
				$actions = '<a  href=' . base_url() . 'portfolio/edit_portfolio/' . $portfolio->id . ' class="menu-icon"><i  class="icon-edit"></i></a>  <a href="javascript:void(0)" onclick="deletePortfolio(' . $portfolio->id . ')"  class="menu-icon"><i  class="icon-remove"></i></a>';
			}
			if ($portfolio->status == 'Active') {
                $row['status'] = '<a href=' . base_url() . 'portfolio/inactive/' . $portfolio->id . '><button title="Click to inactive" type="button" class="btn btn-success  btn-circle">Active</button></a>';
            } else{
                $row['status'] = '<a href=' . base_url() . 'portfolio/active/' . $portfolio->id . '><button title="Click to active" type="button" class="btn btn-danger  btn-circle">Inactive</button></a>';
            }
			$row['action'] = $actions;
            $data[] = $row;
        }
        $output = array(
            "draw" => $_POST['draw'],
            "recordsTotal" => $this->Portfolio_model->count_all(),
            "recordsFiltered" => $list['filtered_rows'],
            "data" => $data,
        );
        // output to json format
        echo json_encode($output);
    }
    #Add Portfolio
    public function add_portfolio()
    {
		$data['category']		= $this->Category_model->getAll();
		$data['save_portfolio']	= base_url('portfolio/save_portfolio');
		$this->page_data->show_data('Add Portfolio','portfolio/add',$data,'portfolio','add');
    }
    
    #Save Portfolio
    public function save_portfolio()
    {
		$data['category_id']		= $this->input->post('category_id');
        $data['title']				= $this->input->post('title');
        $data['slug']				= strtolower(preg_replace("/[^a-zA-Z0-9]+/", "-",$this->input->post('title')));
        $data['company_name']		= $this->input->post('company_name');
        $data['services']			= $this->input->post('services');
        $data['service_categories']	= $this->input->post('service_categories');
        $data['languages']			= $this->input->post('languages');
        $data['display_home_page']	= $this->input->post('display_home_page');
        $data['website_url']		= $this->input->post('website_url');
        $data['display_website_url']= $this->input->post('display_website_url');
        $data['overview']			= $this->input->post('overview');
        $data['meta_title']			= $this->input->post('meta_title');
        $data['meta_keyword']		= $this->input->post('meta_keyword');
		$data['meta_description']	= $this->input->post('meta_description');

		if (!is_dir('uploads')) {mkdir('./uploads', 0777, true);}
		if (!is_dir('uploads/portfolio/')) {mkdir('./uploads/portfolio/', 0777, true);}
		if (!is_dir('uploads/portfolio/'.$data['slug'])) {mkdir('./uploads/portfolio/'.$data['slug'], 0777, true);}
		$upload_folder				= "uploads/portfolio/". $data['slug'] ."/";

		if (!empty($_FILES['thumbnail']['name']))
		{
			$data['thumbnail'] = $upload_folder . date('his') . '-'. str_replace(' ','-',$_FILES['thumbnail']['name']);
			move_uploaded_file($_FILES["thumbnail"]["tmp_name"], $data['thumbnail']);
		}
		if (!empty($_FILES['thumbnail_popup']['name']))
		{
			$data['thumbnail_popup'] = $upload_folder . date('his') . '-'. str_replace(' ','-',$_FILES['thumbnail_popup']['name']);
			move_uploaded_file($_FILES["thumbnail_popup"]["tmp_name"], $data['thumbnail_popup']);
		}
		$portfolio_id				= $this->Portfolio_model->insert($data);

		$portfolio_image 			= $this->input->post('image_id');
		$image['portfolio_id']		= $portfolio_id;
		
		for($i=0; $i< count($portfolio_image); $i++) {
			if (!empty($_FILES['image']['name'][$i]))
			{
				$image['image']	= $upload_folder . date('his') . '-'. str_replace(' ','-',$_FILES['image']['name'][$i]);
				move_uploaded_file($_FILES["image"]["tmp_name"][$i], $image['image']);
			} 
			else
			{
				$image['image']	= '';
				
			}
			
			$this->Portfolio_model->insertImage($image);
		}
		
        $type = 'success';
        $message = 'Data Added Successfully';
        set_message($type, $message);
        redirect('portfolio/lists');
	}
	
	#Edit Portfolio
    public function edit_portfolio($id)
    {
		$data['category']			= $this->Category_model->getAll();
		$data['update_portfolio']	= base_url('portfolio/update_portfolio/'.$id);
		$data['portfolio']			= $this->Portfolio_model->getById($id);
		$data['images']				= $this->Portfolio_model->getImageAll($id);
		$this->page_data->show_data('Edit Portfolio','portfolio/edit',$data,'portfolio','edit');
    }
	
    #Update Portfolio
    public function update_portfolio($id)
    {
		$portfolio 					= $this->Portfolio_model->getById($id);
		
		$data['category_id']		= $this->input->post('category_id');
        $data['title']				= $this->input->post('title');
        $data['slug']				= strtolower(preg_replace("/[^a-zA-Z0-9]+/", "-",$this->input->post('title')));
        $data['company_name']		= $this->input->post('company_name');
        $data['services']			= $this->input->post('services');
        $data['service_categories']	= $this->input->post('service_categories');
        $data['languages']			= $this->input->post('languages');
        $data['display_home_page']	= $this->input->post('display_home_page');
        $data['website_url']		= $this->input->post('website_url');
        $data['display_website_url']= $this->input->post('display_website_url');
        $data['overview']			= $this->input->post('overview');
        $data['meta_title']			= $this->input->post('meta_title');
        $data['meta_keyword']		= $this->input->post('meta_keyword');
		$data['meta_description']	= $this->input->post('meta_description');

		if (!is_dir('uploads')) {mkdir('./uploads', 0777, true);}
		if (!is_dir('uploads/portfolio/')) {mkdir('./uploads/portfolio/', 0777, true);}
		if (!is_dir('uploads/portfolio/'.$data['slug'])) {mkdir('./uploads/portfolio/'.$data['slug'], 0777, true);}
		$upload_folder				= "uploads/portfolio/". $data['slug'] ."/";

		if (!empty($_FILES['thumbnail']['name']))
		{
			//if(!empty($portfolio->thumbnail)){ unlink($portfolio->thumbnail); }
			$data['thumbnail'] = $upload_folder . date('his') . '-'. str_replace(' ','-',$_FILES['thumbnail']['name']);
			move_uploaded_file($_FILES["thumbnail"]["tmp_name"], $data['thumbnail']);
		}
		if (!empty($_FILES['thumbnail_popup']['name']))
		{
			//if(!empty($portfolio->thumbnail_popup)){ unlink($portfolio->thumbnail_popup); }
			$data['thumbnail_popup'] = $upload_folder . date('his') . '-'. str_replace(' ','-',$_FILES['thumbnail_popup']['name']);
			move_uploaded_file($_FILES["thumbnail_popup"]["tmp_name"], $data['thumbnail_popup']);
		}
		
		$this->Portfolio_model->update($data, $id);

		$imageData['portfolio_id']	= $id;
		$image_id 					= $this->input->post('image_id');
		for($i=0; $i< count($image_id); $i++) {
			if ($image_id[$i] != '') {
				$image				= $this->Portfolio_model->getImageById($image_id[$i]);
				if (!empty($_FILES['image']['name'][$i]))
				{
					if(!empty($image->image)){ unlink($image->image); }
					$imageData['image'] = $upload_folder . date('his') . '-'. str_replace(' ','_',$_FILES['image']['name'][$i]);
					move_uploaded_file($_FILES["image"]["tmp_name"][$i], $imageData['image']);

					$this->Portfolio_model->updateImage($imageData, $image_id[$i]);
				}
			} else {
				$this->Portfolio_model->insertImage($imageData);
			}			
		}
        $type = 'success';
        $message = 'Data Updated Successfully';
        set_message($type, $message);
        redirect('portfolio/lists');
    }
	
    #Delete Portfolio
    public function deletePortfolio($id)
    {
		$type = 'error';
		$message = 'Data Deleted Successfully';
		$this->db->where('portfolio_id', $id);
		$this->db->delete('portfolio_image');
		$this->db->where('id', $id);
		$this->db->delete('portfolio');
		set_message($type, $message);
		redirect('portfolio/lists');
	}

	#Delete Gallery Image
    public function removeImage($id, $portfolio_id)
    {
		$gallery = $this->Portfolio_model->getImageById($id);
		if($gallery->image){ unlink($gallery->image);}
		$this->db->where('portfolio_image_id', $id)->delete('portfolio_image');
		$type = 'error';
		$message = 'Data Deleted Successfully';
		set_message($type, $message);
		redirect('portfolio/edit_portfolio/'. $portfolio_id);
	}
	
    #Active Portfolio
    public function active($id)
    {
		$data['status'] = 'Active';
		$this->Portfolio_model->update($data, $id);
		$type = 'success';
		$message = 'Data Active Successfully';
		set_message($type, $message);
		redirect('portfolio/lists');
    }
	
    #Inactive Portfolio
    public function inactive($id)
    {
		$data['status'] = 'Inactive';
		$this->Portfolio_model->update($data, $id);
		$type = 'error';
		$message = 'Data Inactive Successfully';
		set_message($type, $message);
		redirect('portfolio/lists');
    }
}
