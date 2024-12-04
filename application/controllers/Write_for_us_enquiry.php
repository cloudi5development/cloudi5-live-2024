<?php
if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class Write_for_us_enquiry extends CI_Controller
{
    public $access;
    public $settings;

    public function __construct()
    {
        parent::__construct();
        $this->access = $this->Privilege_model->privilleges('write_for_us_enquiries');
        $this->settings = $this->Settings_model->getAll();
        $this->load->database();

        $this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');
        $this->output->set_header('Pragma: no-cache');
    }

    // Manage Enquiries
    public function index()
    {
        $data['access'] = $this->access;
        $this->page_data->show_data('Write For Us Enquiry', 'write_for_us_enquiry/list', $data, 'write_for_us_enquiries', 'view');
    }

    // View Enquiry Details
    public function view()
    {
        $id = $this->input->post('enquiries_id');
        $data['write_for_us_enquiries'] = $this->Write_for_us_enquiry_model->getById($id);
        $this->load->view('admin/write_for_us_enquiry/view', $data);
    }

    // Fetch Enquiries List
    public function enquiries_list()
    {
        $list = $this->Write_for_us_enquiry_model->get_datatables($this->input->post(null, true));
        $data = [];
     
        $no = $_POST['start'];

        foreach ($list['rows'] as $write_for_us_enquiries) {
            $no++;
            
            $row = [
                'sno'	=> $no,
                'created_at'	=> date('d-m-Y',strtotime($write_for_us_enquiries->created_at)),
                'ip' => '<a href="#" title="Click to View Enquiries" data-toggle="modal" data-target="#ModalViewEnquiry" data-id="' . $write_for_us_enquiries->id . '" id="ViewEnquiry" class="success">' . $write_for_us_enquiries->ip . '</a>',
                'first_name' => $write_for_us_enquiries->first_name,
                'email' => $write_for_us_enquiries->email,
                'mobile' => $write_for_us_enquiries->phone_number,
                'post_title' => $write_for_us_enquiries->post_title,
                'post_type' => $write_for_us_enquiries->post_type,
                'post_summary' => $write_for_us_enquiries->post_summary,
                'status' => '<a href="javascript:void(0)" onclick="delete_enquiry(' . $write_for_us_enquiries->id . ')" class="menu-icon"><i class="icon-remove"></i></a>'
            ];
            $data[] = $row;
        }

        $output = [
            "draw" => $_POST['draw'],
            "recordsTotal" => $this->Write_for_us_enquiry_model->count_all(),
            "recordsFiltered" => $list['filtered_rows'],
            "data" => $data,
        ];

        echo json_encode($output);
    }

    // Delete Enquiry
    public function delete_enquiry($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('write_for_us');

        set_message('error', 'Data Deleted Successfully');
        redirect('write_for_us_enquiry');
    }
}
