<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Cron extends CI_Controller {

    function __construct() 
    {
        parent::__construct();
       // $this->load->model('');
        $this->load->database();
        $this->load->library('session');
		$this->load->library('form_validation');
		$this->load->library('encrypt');
		$this->load->helper('string');
		$this->load->model('Sms_model');
        /* cache control */
        $this->output->set_header('Last-Modified: ' . gmdate("D, d M Y H:i:s") . ' GMT');
        $this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');
        $this->output->set_header('Pragma: no-cache');
        $this->output->set_header("Expires: Mon, 26 Jul 2010 05:00:00 GMT");
    }

    public function index() 
	{
		
    }
	
}
