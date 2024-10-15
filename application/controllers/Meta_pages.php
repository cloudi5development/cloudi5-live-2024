<?php
if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}
class Meta_pages extends CI_Controller
{
	public $access;
	
    public function __construct()
    {
        parent::__construct();
		$this->access = $this->Privilege_model->privilleges('meta_pages');
        $this->load->database();
        $this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate,
		post-check=0, pre-check=0');
        $this->output->set_header('Pragma: no-cache');
    }
    #Manage Meta Pages
    public function index()
    {
        $data['save_meta_tags']	    = base_url('settings/store_meta');
		$data['pages']				= array('home','about_us','careers','web_design','web_development','android','digital_marketing','school_software','blog','contact_us', 'portfolio');
		$data['access']				= $this->access;
		$this->page_data->show_data('Meta Tags','meta_pages/list',$data,'meta_pages','view');
    }
}
