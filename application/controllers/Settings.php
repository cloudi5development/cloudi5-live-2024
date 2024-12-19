<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');
class Settings extends CI_Controller
{
	public $access;
	function __construct()
		{
		parent::__construct();
		$this->load->database();
		$this->access = $this->Privilege_model->privilleges('settings');
		$this->load->library('session');
		$this->load->library('form_validation');
	    $this->load->helper('array_helper');
	
		/*cache control*/
		$this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');
		$this->output->set_header('Pragma: no-cache');
		}
	
	#Setting Settings
    public function index()
    {
		$data['edit_data'] = $this->db->select('*')->from('settings')->get()->row();
		$this->page_data->show_data('Site Settings','settings/common_settings',$data,'settings','view');
    }
    
	public function save_common_settings()
    {
		$settings_id			= $this->input->post('settings_id');
		$data['site_name'] 		= $this->input->post('site_name');
		$data['email_id_1']		= $this->input->post('email_id_1');
		$data['email_id_2']		= $this->input->post('email_id_2');
		$data['mobile_1']		= $this->input->post('mobile_1');
		$data['mobile_2']		= $this->input->post('mobile_2');
		$data['landline_1']		= $this->input->post('landline_1');
		$data['extension_1']	= $this->input->post('extension_1');
		$data['landline_2']		= $this->input->post('landline_2');
		$data['extension_2']	= $this->input->post('extension_2');
		$data['address_1']		= $this->input->post('address_1');
		$data['address_2']		= $this->input->post('address_2');
		$data['address_3']		= $this->input->post('address_3');
		$data['city']			= $this->input->post('city');
		$data['state']			= $this->input->post('state');
		$data['pincode']		= $this->input->post('pincode');
		$data['google_plus']	= $this->input->post('google_plus');
		$data['facebook']		= $this->input->post('facebook');
		$data['instagram']		= $this->input->post('instagram');
		$data['whatsapp']		= $this->input->post('whatsapp');
		$data['linkedin']		= $this->input->post('linkedin');
		$data['youtube']		= $this->input->post('youtube');
		$data['twitter']		= $this->input->post('twitter');
		$data['pinterest']		= $this->input->post('pinterest');
		$data['blogspot']		= $this->input->post('blogspot');
		$data['email_host']		= $this->input->post('email_host');
		$data['email_secure']	= $this->input->post('email_secure');
		$data['email_port']		= $this->input->post('email_port');
		$data['email_user_name']= $this->input->post('email_user_name');
		$data['email_password'] = $this->input->post('email_password');
		$data['copyright'] 		= $this->input->post('copyright');
		//$data['developed_by']	= $this->input->post('developed_by');
		//$data['developed_by_url']= $this->input->post('developed_by_url');
		if (!is_dir('uploads')) {
			mkdir('./uploads', 0777, true);
		}
		if (!is_dir('uploads/background/')) {
			mkdir('./uploads/background/', 0777, true);
		}
		if (!empty($_FILES['background_image']['name'])) 
		{
			$extension = explode(".", $_FILES["background_image"]["name"]);
			$newfilename = 'background.' . end($extension);
			$data['background_image']="uploads/background/". $newfilename;
			move_uploaded_file($_FILES["background_image"]["tmp_name"], $data['background_image']);
		}
		if (!empty($_FILES['favicon']['name'])) 
		{
			$extension = explode(".", $_FILES["favicon"]["name"]);
			$newfilename = 'favicon.' . end($extension);
			$data['favicon']="uploads/background/". $newfilename;
			move_uploaded_file($_FILES["favicon"]["tmp_name"], $data['favicon']);
		}
		
		if(empty($settings_id)){
			$this->db->insert('settings', $data);
		}else{
			$this->db->where('settings_id', $settings_id);
			$this->db->update('settings', $data);
		}
		
		$type = 'success';
		$message = 'Data to be added successfully';
		set_message($type, $message);
		redirect('settings');
    }

        #Save Meta Tags
    public function store_meta()
    {
        $pages				= array('home','about_us','careers','web_design','web_development','android','digital_marketing','school_software','blog','contact_us', 'portfolio',
		'our_clientale','write_for_us','flutter_app_development','ios_app_development','search_engine_optimization','multi_vendor_ecommerce');
        
        foreach($pages as $page){
            $meta = $this->db->select('*')->from('meta_tags')->where('page',$page)->get()->row();
            $data['page']           = $page;
            $data['title']          = $this->input->post('title')[$page];
            $data['description']    = $this->input->post('description')[$page];
            $data['keyword']        = $this->input->post('keyword')[$page];
            if($meta){
                $this->db->where('meta_id',$meta->meta_id);
                $this->db->update('meta_tags',$data);
            }else{
                $this->db->insert('meta_tags',$data);
            }
        }
        $type = 'success';
        $message = 'Data Added Successfully';
        set_message($type, $message);
        redirect('meta_pages');
    }

	public function siteMapPage()
	{
		$this->page_data->show_data('Site Map','settings/site_map',[],'settings','view');
	}

	public function uploadSiteMap()
	{
		if (!empty($_FILES['sitemap']['name'])) {
			if(file_exists('sitemap.xml')) {
				unlink('sitemap.xml');
			}
			$data['sitemap']="sitemap.xml";
			$filestatus = move_uploaded_file($_FILES["sitemap"]["tmp_name"], $data['sitemap']);
			
			if ($filestatus) {
				set_message('success', 'Sitemap file uploaded successfully');
			} else {
				set_message('error', 'Sitemap file not uploaded.');
			}
		} else {
			set_message('error', 'Sitemap file is required');
		}
		redirect('settings/siteMapPage');
	}
}
