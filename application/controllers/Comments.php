<?php
if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}
class Comments extends CI_Controller
{
	public $access;
	
    public function __construct()
    {
        parent::__construct();
		$this->access	= $this->Privilege_model->privilleges('comments');
		$this->settings	= $this->Settings_model->getAll();
        $this->load->database();
        $this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate,
		post-check=0, pre-check=0');
        $this->output->set_header('Pragma: no-cache');
    }
    #Manage Comments
    public function index()
    {
		$data['access']				= $this->access;
		$this->page_data->show_data('Comments','comments/list',$data,'comments','view');
    }
	
    #Comments Table
    public function comments_list()
    {
        $list = $this->Comments_model->get_datatables($this->input->post(null, true));
        $data = array();
        $no = $_POST['start'];
        foreach ($list['rows'] as $comments) {
			$no++;
            $row = array();
            $row['sno'] 		= $no;
            $row['created_at']	= $comments->created_at;
            $row['ip'] 			= $comments->ip;
            $row['blog_name'] 	= $comments->title;
            $row['name'] 		= $comments->name;
            $row['email'] 		= $comments->email;
            $row['mobile'] 		= $comments->mobile;
            $row['message'] 	= $comments->message;
			if ($comments->status == 'Active') {
                $row['status'] = '<a href=' . base_url() . 'comments/inactive/' . $comments->comment_id . '><button title="Click to inactive" type="button" class="btn btn-success  btn-circle">Active</button></a>';
            } else{
                $row['status'] = '<a href=' . base_url() . 'comments/active/' . $comments->comment_id . '><button title="Click to active" type="button" class="btn btn-danger  btn-circle">Inactive</button></a>';
            }
            $data[] = $row;
        }
        $output = array(
            "draw" => $_POST['draw'],
            "recordsTotal" => $this->Comments_model->count_all(),
            "recordsFiltered" => $list['filtered_rows'],
            "data" => $data,
        );
        // output to json format
        echo json_encode($output);
    }
	
	#Save Comments
    public function save_comments()
    {
		$this->form_validation->set_rules('name', 'Name', 'trim|required');
	    $this->form_validation->set_rules('email', 'Email', 'trim|required');
	    $this->form_validation->set_rules('message', 'Mobile', 'trim|required');
	    $this->form_validation->set_rules('g-recaptcha-response', 'recaptcha validation', 'required|callback_validate_captcha');
        $this->form_validation->set_message('validate_captcha', 'Please check the the captcha form');
        if ($this->form_validation->run() == TRUE)
		{
			$data['blog_id']	= $this->input->post('blog');
			$data['name']		= $this->input->post('name');
			$data['email']		= $this->input->post('email');
			$data['mobile']		= $this->input->post('mobile');
			//$data['subject']	= $this->input->post('subject');
			$data['message']	= strip_tags($this->input->post('message'));
            $data['ip']			= get_ip();
            if ($this->input->post('website') == '') {
                $this->Comments_model->insert($data);
                /* $subject = 'Blog Enquiry Form';
                $email_content= $this->load->view('admin/emails/contact_mail',$data,TRUE);
                $this->myemail->send_client_mail($this->settings->email_id_1, $email_content, $subject); */
            }
			$type = 'success';
			$message = 'Your Comments Posted Successfully';
			set_message($type, $message);
			redirect($_SERVER['HTTP_REFERER']);
		}else{
			$type = 'error';
			$message = 'Please enter all required fields and recaptcha.';
			set_message($type, $message);
			redirect($_SERVER['HTTP_REFERER']);
		}
    }
	#Active Comments
    public function active($id)
    {
		$data['status'] = 'Active';
		$this->Comments_model->update($data, $id);
		$type = 'success';
		$message = 'Data Active Successfully';
		set_message($type, $message);
		redirect('comments');
    }
	
    #Inactive Comments
    public function inactive($id)
    {
		$data['status'] = 'Inactive';
		$this->Comments_model->update($data, $id);
		$type = 'error';
		$message = 'Data Inactive Successfully';
		set_message($type, $message);
		redirect('comments');
    }
    //validate_captcha
    function validate_captcha() {
        $captcha    = $this->input->post('g-recaptcha-response');
        $response   = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=6Lf0WYUUAAAAAMNE6-Mty7kpq0LafsNkYVTiLp1a&response=" . $captcha . "&remoteip=" . $_SERVER['REMOTE_ADDR']);
        $response   = json_decode($response, true);

        if ($response['success']) {
            return true;
        } else {
            return false;
        }
    }
}
