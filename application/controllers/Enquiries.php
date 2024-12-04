<?php
if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}
class Enquiries extends CI_Controller
{
	public $access;
	
    public function __construct()
    {
        parent::__construct();
		$this->access	= $this->Privilege_model->privilleges('enquiries');
		$this->settings	= $this->Settings_model->getAll();
        $this->load->database();
        $this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate,
		post-check=0, pre-check=0');
        $this->output->set_header('Pragma: no-cache');
    }
    #Manage Enquiries
    public function index()
    {
		$data['access']				= $this->access;
        
		$this->page_data->show_data('Enquiries','enquiries/list',$data,'enquiries','view');
        
    }
	
	#View Enquiries
	function view()
	{
		$id 				= $this->input->post('enquiries_id');
		$data['enquiries']	= $this->Enquiries_model->getById($id);
		$this->load->view('admin/enquiries/view', $data);
	}
    #Enquiries Table
    public function enquiries_list()
    {
        $list = $this->Enquiries_model->get_datatables($this->input->post(null, true));
      
        $data = array();
        $no = $_POST['start'];
        foreach ($list['rows'] as $enquiries) {
			$no++;
            $row = array();
            $row['sno'] 		= $no;
            $row['created_at']	= date('d-m-Y',strtotime($enquiries->cteated_at));
            $row['ip'] 			= '<a href="#" title="Click to View Enquiries" data-toggle="modal" data-target="#ModalViewEnquiry" data-id="' . $enquiries->ci5_id . '" id="ViewEnquiry" class="success">'.$enquiries->ip.'</a>';
            $row['name'] 		= $enquiries->name;
            $row['email'] 		= $enquiries->email;
            $row['mobile'] 		= $enquiries->phone;
            $row['subject'] 	= $enquiries->subject;
            $row['message'] 	= $enquiries->comments;
            $row['action']	    = '<a href="javascript:void(0)" onclick="delete_enquiry(' . $enquiries->ci5_id . ')"  class="menu-icon"><i  class="icon-remove"></i></a>';
            $data[] = $row;
        }
        $output = array(
            "draw" => $_POST['draw'],
            "recordsTotal" => $this->Enquiries_model->count_all(),
            "recordsFiltered" => $list['filtered_rows'],
            "data" => $data,
        );
        // output to json format
        echo json_encode($output);
       
    }

    #Delete Blog
    public function delete_enquiry($id)
    {
        $this->db->where('ci5_id', $id);
        $this->db->delete('contacts');
		$type = 'error';
        $message = 'Data Deleted Successfully';
		set_message($type, $message);
		redirect('enquiries');
	}
}
