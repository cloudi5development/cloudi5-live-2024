<?php
if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}
class Blog_admin extends CI_Controller
{
	public $access;
	
    public function __construct()
    {
        parent::__construct();
		$this->access = $this->Privilege_model->privilleges('blog');
        $this->load->database();
        $this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate,
		post-check=0, pre-check=0');
        $this->output->set_header('Pragma: no-cache');
    }
    #Manage blog
    public function index()
    {
		$data['access']				= $this->access;
		$data['category']			= $this->Category_model->getAll();
		$this->page_data->show_data('Blog','blog_admin/list',$data,'blog','view');
    }
	
    #blog Table
    public function blog_list()
    {
        $list = $this->Blog_model->get_datatables($this->input->post(null, true));
        $data = array();
        $no = $_POST['start'];
        foreach ($list['rows'] as $blog) {
			$no++;
            $row = array();
            $row['sno']			= $no;
			$row['blog_date']	= date('d-m-Y',strtotime($blog->blog_date));
			$row['title']		= $blog->title;
			$row['category']	= $blog->category;
            
			if($this->session->userdata('login_type') != 'Super Admin')
			{
				$actions ='';
				if (array_key_exists('edit' , $this->access))
				{
					$actions .= '<a  href=' . base_url() . 'blog_admin/edit_blog/' . $blog->blog_id . ' class="menu-icon"><i  class="icon-edit"></i></a>';
				}
				if (array_key_exists('delete' , $this->access))
				{
					$actions .= '<a href="javascript:void(0)" onclick="delete_blog(' . $blog->blog_id . ')"  class="menu-icon"><i  class="icon-remove"></i></a>';
				}
			}
			else
			{
				$actions = '<a  href=' . base_url() . 'blog_admin/edit_blog/' . $blog->blog_id . ' class="menu-icon"><i  class="icon-edit"></i></a>  <a href="javascript:void(0)" onclick="delete_blog(' . $blog->blog_id . ')"  class="menu-icon"><i  class="icon-remove"></i></a>';
			}
			if ($blog->status == 'Active') {
                $row['status'] = '<a href=' . base_url() . 'blog_admin/inactive/' . $blog->blog_id . '><button title="Click to inactive" type="button" class="btn btn-success  btn-circle">Active</button></a>';
            } else{
                $row['status'] = '<a href=' . base_url() . 'blog_admin/active/' . $blog->blog_id . '><button title="Click to active" type="button" class="btn btn-danger  btn-circle">Inactive</button></a>';
            }
			$row['action'] = $actions;
            $data[] = $row;
        }
        $output = array(
            "draw" => $_POST['draw'],
            "recordsTotal" => $this->Blog_model->count_all(),
            "recordsFiltered" => $list['filtered_rows'],
            "data" => $data,
        );
        // output to json format
        echo json_encode($output);
    }
    #Add Blog
    public function add_blog()
    {
		$data['category']		= $this->Category_model->getAll();
		$data['save_blog']		= base_url('blog_admin/save_blog');
		$this->page_data->show_data('Add Blog','blog_admin/add',$data,'blog','add');
    }
    #Edit Blog
    public function edit_blog($id)
    {
		$data['category']		= $this->Category_model->getAll();
		$data['update_blog']	= base_url('blog_admin/update_blog/'.$id);
		$data['blog']			= $this->Blog_model->getById($id);
		$this->page_data->show_data('Edit Blog','blog_admin/edit',$data,'blog','edit');
    }
	
    #Save Blog
    public function save_blog()
    {
		$data['category_id']	= $this->input->post('category_id');
        $data['blog_date']		= date('Y-m-d',strtotime($this->input->post('blog_date')));
        $data['title']			= $this->input->post('title');
        $data['slug']			= strtolower(preg_replace("/[^a-zA-Z0-9]+/", "-",$this->input->post('title')));
        //$data['slug']			= strtolower(str_replace(' ','-',preg_replace('!\s+!', ' ', preg_replace("/[^ \w]+/", "", $this->input->post('title')))));
        $data['image_alt_tag']	= $this->input->post('image_alt_tag');
        $data['author_name']	= $this->input->post('author_name');
        $data['featured']		= $this->input->post('featured');
        $data['description']	= $this->input->post('description');
        $data['meta_title']		= $this->input->post('meta_title');
        $data['meta_keyword']	= $this->input->post('meta_keyword');
        $data['meta_description']= $this->input->post('meta_description');
		//log_message('error', serialize($_POST));
		if (!is_dir('uploads')) {
			mkdir('./uploads', 0777, true);
		}
		if (!is_dir('uploads/blog/')) {
			mkdir('./uploads/blog/', 0777, true);
		}
		if (!empty($_FILES['image']['name'])) 
		{
			
			$data['image']		= "uploads/blog/".date('dmyhis').'-blog-image.'. pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);
			move_uploaded_file($_FILES["image"]["tmp_name"], $data['image']);
		} 
		else
		{
			$data['image']		= '';
			 
		}
		if (!empty($_FILES['author_image']['name'])) 
		{
			
			$data['author_image']		= "uploads/blog/".date('dmyhis').'-author-image.'. pathinfo($_FILES['author_image']['name'], PATHINFO_EXTENSION);
			move_uploaded_file($_FILES["author_image"]["tmp_name"], $data['author_image']);
		} 
		else
		{
			$data['author_image']		= '';
			 
		}
		if (!empty($_FILES['ads_image']['name'])) 
		{
			
			$data['ads_image']		= "uploads/blog/".date('dmyhis').'-ads-image.'. pathinfo($_FILES['ads_image']['name'], PATHINFO_EXTENSION);
			move_uploaded_file($_FILES["ads_image"]["tmp_name"], $data['ads_image']);
		} 
		else
		{
			$data['ads_image']		= '';
			 
		}
		
		$this->Blog_model->insert($data);
        $type = 'success';
        $message = 'Data Added Successfully';
        set_message($type, $message);
        redirect('blog_admin');
    }
	
    #Update Blog
    public function update_blog($id)
    {
		$blog 					= $this->Blog_model->getById($id);
		$data['category_id']	= $this->input->post('category_id');
		$data['blog_date']		= date('Y-m-d',strtotime($this->input->post('blog_date')));
        $data['title']			= $this->input->post('title');
        $data['slug']			= strtolower(preg_replace("/[^a-zA-Z0-9]+/", "-",$this->input->post('title')));
		$data['image_alt_tag']	= $this->input->post('image_alt_tag');
        $data['author_name']	= $this->input->post('author_name');
        $data['featured']		= $this->input->post('featured');
		$data['description']	= $this->input->post('description');
		$data['meta_title']		= $this->input->post('meta_title');
        $data['meta_keyword']	= $this->input->post('meta_keyword');
        $data['meta_description']= $this->input->post('meta_description');
		//log_message('error', $this->input->post('description'));
	
		
		if (!is_dir('uploads')) {
			mkdir('./uploads', 0777, true);
		}
		if (!is_dir('uploads/blog/')) {
			mkdir('./uploads/blog/', 0777, true);
		}
		if (!empty($_FILES['image']['name'])) 
		{
			if(!empty($blog->image)){ unlink($blog->image);}
			$data['image']		= "uploads/blog/".date('dmyhis').'-blog-image.'. pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);
			move_uploaded_file($_FILES["image"]["tmp_name"], $data['image']);
		}
		if (!empty($_FILES['author_image']['name'])) 
		{
			if(!empty($blog->author_image)){ unlink($blog->author_image);}
			$data['author_image']		= "uploads/blog/".date('dmyhis').'-author-image.'. pathinfo($_FILES['author_image']['name'], PATHINFO_EXTENSION);
			move_uploaded_file($_FILES["author_image"]["tmp_name"], $data['author_image']);
		}
		if (!empty($_FILES['ads_image']['name'])) 
		{
			if(!empty($blog->ads_image)){ unlink($blog->ads_image);}
			$data['ads_image']		= "uploads/blog/".date('dmyhis').'-ads-image.'. pathinfo($_FILES['ads_image']['name'], PATHINFO_EXTENSION);
			move_uploaded_file($_FILES["ads_image"]["tmp_name"], $data['ads_image']);
		}
		
		
		$this->Blog_model->update($data,$id);
        $type = 'success';
        $message = 'Data Updated Successfully';
        set_message($type, $message);
        redirect('blog_admin');
    }
	
    #Delete Blog
    public function delete_blog($id)
    {
		$comments = $this->Comments_model->getByBlogId($id);
		if($comments){
			$message = "You can't delete this record because it contains some Blog informations.";
		}else{
			$message = 'Data Deleted Successfully';
			$this->db->where('blog_id', $id);
			$this->db->delete('blog');
		}
		$type = 'error';
		set_message($type, $message);
		redirect('blog_admin');
	}
	
    #Active Blog
    public function active($id)
    {
		$data['status'] = 'Active';
		$this->Blog_model->update($data, $id);
		$type = 'success';
		$message = 'Data Active Successfully';
		set_message($type, $message);
		redirect('blog_admin');
    }
	
    #Inactive Blog
    public function inactive($id)
    {
		$data['status'] = 'Inactive';
		$this->Blog_model->update($data, $id);
		$type = 'error';
		$message = 'Data Inactive Successfully';
		set_message($type, $message);
		redirect('blog_admin');
    }
}
