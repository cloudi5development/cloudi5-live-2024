<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');
class Blog extends CI_Controller
{
    function __construct() {
        parent::__construct();
        $this->load->database();
		$this->settings	= $this->Settings_model->getAll();
    }

    public function index() 
	{
        $page_data['slug']			    = '';
        $page_data['blog_id']			= '';
        $page_data['blog']				= $this->db->select('a.*,b.title as category,b.slug as category_slug')->from('blog as a')->join('category as b','a.category_id=b.category_id')->where('a.status','Active')->order_by('a.blog_date','DESC')->order_by('a.blog_id','DESC')->limit(6)->get()->result();
        $page_data['settings']			= $this->settings;
        $page_data['meta_tags']	        = $this->Settings_model->metaTags('blog');
        
        $page_data['allcount']			= count($this->Blog_model->getAll());
        $page_data['meta']              =$this->db->select('*')->where('page','blog')->get('meta_tags')->row();
		$this->load->view('blog/index',$page_data);
    }
	
	public function info_by_slug_and_id($slug,$id)
	{
		$page_data['featured']			= $this->Blog_model->getFeatured(2,$id);
		$page_data['BlogCmtcnt']		= $this->Comments_model->getByBlogCount($id);
		$page_data['comments']			= $this->Comments_model->getByBlogId($id,15);
        $page_data['recent']			= $this->Blog_model->getRecent($id,2);
        $page_data['category']			= $this->Category_model->getAll();
        $page_data['settings']			= $this->settings;
        $blog                           = $this->db->select('a.*,b.title as category,b.slug as category_slug')->from('blog as a')->join('category as b','a.category_id=b.category_id')->where(array('a.slug'=>$slug,'a.blog_id'=>$id,'a.status'=>'Active'))->get()->row();
		$category                       = $this->db->select('a.*,b.title as category,b.slug as category_slug')->from('blog as a')->join('category as b','a.category_id=b.category_id')->where(array('b.slug'=>$slug,'b.category_id'=>$id,'a.status'=>'Active'))->order_by('a.blog_date','DESC')->order_by('a.blog_id','DESC')->limit(6)->get()->result();
		$page_data['meta_category']     = $this->db->select('*')->from('category')->where('slug', $slug)->get()->row();
		if($blog){
            $page_data['blog']          = $blog;
			$this->load->view('blog/blog-read',$page_data);
		}elseif($category){
            $page_data['slug']			= $slug;
            $page_data['blog_id']	    = $id;
            $page_data['allcount']		= count($this->db->select('a.*,b.title as category,b.slug as category_slug')->from('blog as a')->join('category as b','a.category_id=b.category_id')->where(array('b.slug'=>$slug,'b.category_id'=>$id,'a.status'=>'Active'))->order_by('a.blog_date','DESC')->order_by('a.blog_id','DESC')->get()->result());
            $page_data['blog']          = $category;
            
            $this->load->view('blog/index',$page_data);
		}else{
			$this->output->set_status_header(404);
            $this->load->view('custom_404');
		}
		
    }
    
    public function getdata()
	{
        $slug                           = $this->input->get('slug');
        $blog_id                        = $this->input->get('blog_id');
        $row                            = $this->input->get('row');
                
        if($slug =='' && $blog_id ==''){
            $page_data['blog']			= $this->db->select('a.*,b.title as category,b.slug as category_slug')->from('blog as a')->join('category as b','a.category_id=b.category_id')->where('a.status','Active')->limit(3,$row)->order_by('a.blog_date','DESC')->order_by('a.blog_id','DESC')->get()->result();
            //echo $this->db->last_query();
        }else{
            $page_data['blog']          = $this->db->select('a.*,b.title as category,b.slug as category_slug')->from('blog as a')->join('category as b','a.category_id=b.category_id')->where(array('b.slug'=>$slug,'b.category_id'=>$blog_id,'a.status'=>'Active'))->order_by('a.blog_date','DESC')->order_by('a.blog_id','DESC')->limit(3,$row)->get()->result();
            //echo $this->db->last_query();
        }
        $this->load->view('blog/getdata',$page_data);
	}
}
