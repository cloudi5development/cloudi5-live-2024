<?php
if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}
class Subscribe extends CI_Controller
{
	public $access;
	
    public function __construct()
    {
        parent::__construct();
		$this->access	= $this->Privilege_model->privilleges('subscribe');
		$this->settings	= $this->Settings_model->getAll();
        $this->load->database();
        $this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate,
		post-check=0, pre-check=0');
        $this->output->set_header('Pragma: no-cache');
    }
    #Manage Subscribe
    public function index()
    {
		$data['access']				= $this->access;
		$this->page_data->show_data('Subscribe','subscribe/list',$data,'subscribe','view');
    }
	#Manage Subscribe
    public function cloudi5()
    {
		$data['page']				= 'cloudi5';
		$data['access']				= $this->access;
		$this->page_data->show_data('Cloudi5 Subscribe','subscribe/list',$data,'subscribe','view');
    }
	#Manage Subscribe
    public function blog()
    {
		$data['page']				= 'cloudi5';
		$data['access']				= $this->access;
		$this->page_data->show_data('Blog Subscribe','subscribe/list',$data,'subscribe','view');
    }
	
    #Subscribe Table
    public function subscribe_list()
    {
        $list = $this->Subscribe_model->get_datatables($this->input->post(null, true));
        $data = array();
        $no = $_POST['start'];
        foreach ($list['rows'] as $subscribe) {
			$no++;
            $row = array();
            $row['sno'] 		= $no;
            $row['created_at']	= date('d-m-Y H:i a',strtotime($subscribe->created_at));
            $row['ip'] 			= $subscribe->ip;
            $row['email'] 		= $subscribe->email;
            $data[] = $row;
        }
        $output = array(
            "draw" => $_POST['draw'],
            "recordsTotal" => $this->Subscribe_model->count_all(),
            "recordsFiltered" => $list['filtered_rows'],
            "data" => $data,
        );
        // output to json format
        echo json_encode($output);
    }
	
	#Save Subscribe
    public function save_subscribe()
    {
	    $this->form_validation->set_rules('email', 'Email', 'trim|required');
        if ($this->form_validation->run() == TRUE)
        {
			$data['type']		= 'Blog';
			$data['email']		= $this->input->post('email');
			$data['ip']			= get_ip();
			$getByEmail 		= $this->Subscribe_model->getByEmail($data['email']);
			if(empty($getByEmail)){
                if ($this->input->post('website') == '') {
                    $this->Subscribe_model->insert($data);
                    $subject = 'Subscribe Request From '. $data['email'];
                    $email_content= $this->load->view('admin/emails/subscribe_mail', $data, true);
                    //$this->myemail->send_client_mail($this->settings->email_id_1, $email_content, $subject);
                }
				$type = 'success';
				$message = 'Thank you for subscribe us';
				set_message($type, $message);
				redirect($_SERVER['HTTP_REFERER']);
			}else{
				$type = 'error';
				$message = 'This email already subscribed';
				set_message($type, $message);
				redirect($_SERVER['HTTP_REFERER']);
			}
		}
		else{
			$type = 'error';
			$message = 'Enter Email ID';
			set_message($type, $message);
			redirect($_SERVER['HTTP_REFERER']);
		}
    }	
}
