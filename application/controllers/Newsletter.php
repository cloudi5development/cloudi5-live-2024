<?php
if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}
class Newsletter extends CI_Controller
{
	public $access;
	
    public function __construct()
    {
        parent::__construct();
		$this->access	= $this->Privilege_model->privilleges('newsletter');
		$this->settings	= $this->Settings_model->getAll();
        $this->load->database();
        $this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate,
		post-check=0, pre-check=0');
        $this->output->set_header('Pragma: no-cache');
    }
    #Manage Newsletter
    public function index()
    {
		$data['access']				= $this->access;
		$this->page_data->show_data('Newsletter','newsletter/list',$data,'newsletter','view');
    }
	
    #Newsletter Table
    public function newsletter_list()
    {
        $list = $this->Newsletter_model->get_datatables($this->input->post(null, true));
        $data = array();
        $no = $_POST['start'];
        foreach ($list['rows'] as $newsletter) {
			$no++;
            $row = array();
            $row['sno'] 		= $no;
            $row['created_at']	= date('d-m-Y H:i a',strtotime($newsletter->created_at));
            $row['ip'] 			= $newsletter->ip;
            $row['email'] 		= $newsletter->email;
            $row['name'] 		= $newsletter->name;
            $data[] = $row;
        }
        $output = array(
            "draw" => $_POST['draw'],
            "recordsTotal" => $this->Newsletter_model->count_all(),
            "recordsFiltered" => $list['filtered_rows'],
            "data" => $data,
        );
        // output to json format
        echo json_encode($output);
    }	
}
