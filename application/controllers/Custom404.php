<?php
if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}
class Custom404 extends CI_Controller
{
	public $access;
	
    public function __construct()
    {
        parent::__construct();
    }
    
    public function index() {
        $this->output->set_status_header(404);
        $this->load->view('custom_404');
    }
}
