<?php
if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}
class Job_application extends CI_Controller
{
	public $access;
	
    public function __construct()
    {
        parent::__construct();
		$this->access = $this->Privilege_model->privilleges('job_application');
        $this->load->database();
        $this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate,
		post-check=0, pre-check=0');
        $this->output->set_header('Pragma: no-cache');
    }
    #Manage Job Application
    public function index()
    {
		$data['access']				= $this->access;
		$this->page_data->show_data('Job Application','job_application/list',$data,'job_application','view');
    }
	
    #Job Application Table
    public function job_application_list()
    {
        $list = $this->Job_application_model->get_datatables($this->input->post(null, true));
       
        $data = array();
        $no = $_POST['start'];
        foreach ($list['rows'] as $job) {
			$no++;
            $row = array();
            $row['sno']			    = $no;
			$row['job_apply_date']	= date('d-m-Y',strtotime($job->created_at));
			$row['job_id']	        = $job->job_id;
			$row['title']		    = $job->title;
			$row['name']            = $job->name;
			$row['email']           = $job->email;
			$row['mobile']          = $job->mobile;
			$row['experience']      = $job->experience;
			$row['resume']          = '<a href="'. base_url() . $job->resume .'" target="_blank" download>' . '<i class="icon-download"></i>'.'</a>' ;
			$row['message']         = $job->message;
            $data[] = $row;
        }
        $output = array(
            "draw" => $_POST['draw'],
            "recordsTotal" => $this->Job_application_model->count_all(),
            "recordsFiltered" => $list['filtered_rows'],
            "data" => $data,
        );
        // output to json format
        echo json_encode($output);
    }
}
