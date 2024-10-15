<?php
if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}
class Job_post extends CI_Controller
{
	public $access;
	
    public function __construct()
    {
        parent::__construct();
		$this->access = $this->Privilege_model->privilleges('job_post');
        $this->load->database();
        $this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate,
		post-check=0, pre-check=0');
        $this->output->set_header('Pragma: no-cache');
    }
    #Manage Job Post
    public function index()
    {
		$data['access']				= $this->access;
		$this->page_data->show_data('Job Post','job_post/list',$data,'job_post','view');
    }
	
    #Job Post Table
    public function job_post_list()
    {
        $list = $this->Job_post_model->get_datatables($this->input->post(null, true));
       
        $data = array();
        $no = $_POST['start'];
        foreach ($list['rows'] as $job) {
			$no++;
            $row = array();
            $row['sno']			    = $no;
			$row['job_post_date']	= date('d-m-Y',strtotime($job->job_post_date));
			$row['job_id']	        = $job->job_id;
			$row['title']		    = $job->title;
			$row['no_of_vacancy']   = $job->no_of_vacancy;
            
			if($this->session->userdata('login_type') != 'Super Admin')
			{
				$actions ='';
				if (array_key_exists('edit' , $this->access))
				{
					$actions .= '<a  href=' . base_url() . 'job_post/edit_job_post/' . $job->job_post_id . ' class="menu-icon"><i  class="icon-edit"></i></a>';
				}
				if (array_key_exists('delete' , $this->access))
				{
					$actions .= '<a href="javascript:void(0)" onclick="delete_job_post(' . $job->job_post_id . ')"  class="menu-icon"><i  class="icon-remove"></i></a>';
				}
			}
			else
			{
				$actions = '<a  href=' . base_url() . 'job_post/edit_job_post/' . $job->job_post_id . ' class="menu-icon"><i  class="icon-edit"></i></a>  <a href="javascript:void(0)" onclick="delete_job_post(' . $job->job_post_id . ')"  class="menu-icon"><i  class="icon-remove"></i></a>';
			}
			if ($job->status == 'Active') {
                $row['status'] = '<a href=' . base_url() . 'job_post/inactive/' . $job->job_post_id . '><button title="Click to inactive" type="button" class="btn btn-success  btn-circle">Active</button></a>';
            } else{
                $row['status'] = '<a href=' . base_url() . 'job_post/active/' . $job->job_post_id . '><button title="Click to active" type="button" class="btn btn-danger  btn-circle">Inactive</button></a>';
            }
			$row['action'] = $actions;
            $data[] = $row;
        }
        $output = array(
            "draw" => $_POST['draw'],
            "recordsTotal" => $this->Job_post_model->count_all(),
            "recordsFiltered" => $list['filtered_rows'],
            "data" => $data,
        );
        // output to json format
        echo json_encode($output);
    }
    #AddJob Post
    public function add_job_post()
    {
        $data['jobId']		        = 'CI5J0'. (count($this->Job_post_model->getAll()) + 1);
		$data['save_job_post']		= base_url('job_post/save_job_post');
		$this->page_data->show_data('Add Job Post','job_post/add',$data,'blog','add');
    }
    #Edit Job Post
    public function edit_job_post($id)
    {
		$data['update_job_post']	= base_url('job_post/update_job_post/'.$id);
		$data['job_post']			= $this->Job_post_model->getById($id);
		$this->page_data->show_data('Edit Job Post','job_post/edit',$data,'blog','edit');
    }
	
    #Save Job Post
    public function save_job_post()
    {
		$data['job_id']	        = 'CI5J0'. (count($this->Job_post_model->getAll()) + 1);
        $data['title']			= $this->input->post('title');
        $data['slug']			= strtolower(preg_replace("/[^a-zA-Z0-9]+/", "-",$this->input->post('title')));
        $data['job_type']	    = $this->input->post('job_type');
        $data['qualification']  = $this->input->post('qualification')?$this->input->post('qualification'):null;
        $data['skills']	        = $this->input->post('skills');
        $data['experience']		= $this->input->post('experience');
        $data['location']	    = $this->input->post('location');
        $data['no_of_vacancy']  = $this->input->post('no_of_vacancy');
        $data['icon']           = $this->input->post('icon');
        $data['job_description']= $this->input->post('job_description');
		$data['job_post_date']  = date('Y-m-d',strtotime($this->input->post('job_post_date')));
        $data['sort']           = $this->input->post('sort')?$this->input->post('sort'):0;
        $data['status']         = $this->input->post('status');
        $data['meta_title']     = $this->input->post('meta_title');
        $data['meta_description']= $this->input->post('meta_description');
        $data['meta_keyword']   = $this->input->post('meta_keyword');
		$this->Job_post_model->insert($data);
        $type = 'success';
        $message = 'Data Added Successfully';
        set_message($type, $message);
        redirect('job_post');
    }
	
    #Update Job Post
    public function update_job_post($id)
    {
		$data['job_id']	        = $this->input->post('job_id');
        $data['title']			= $this->input->post('title');
        $data['slug']			= strtolower(preg_replace("/[^a-zA-Z0-9]+/", "-",$this->input->post('title')));
        $data['job_type']	    = $this->input->post('job_type');
        $data['qualification']  = $this->input->post('qualification')?$this->input->post('qualification'):null;
        $data['skills']	        = $this->input->post('skills');
        $data['experience']		= $this->input->post('experience');
        $data['location']	    = $this->input->post('location');
        $data['no_of_vacancy']  = $this->input->post('no_of_vacancy');
        $data['icon']           = $this->input->post('icon');
        $data['job_description']= $this->input->post('job_description');
		$data['job_post_date']  = date('Y-m-d',strtotime($this->input->post('job_post_date')));
        $data['sort']           = $this->input->post('sort')?$this->input->post('sort'):0;
        $data['status']         = $this->input->post('status');
        $data['meta_title']     = $this->input->post('meta_title');
        $data['meta_description']= $this->input->post('meta_description');
        $data['meta_keyword']   = $this->input->post('meta_keyword');
        
		$this->Job_post_model->update($data,$id);
        $type = 'success';
        $message = 'Data Updated Successfully';
        set_message($type, $message);
        redirect('job_post');
    }
	
    #Delete Job Post
    public function delete_job_post($id)
    {
		$job_application = $this->Job_application_model->getByJobPostId($id);
		if($job_application){
			$message = "You can't delete this record because it contains some Job Post informations.";
		}else{
			$message = 'Data Deleted Successfully';
			$this->db->where('job_post_id', $id);
			$this->db->delete('job_post');
		}
		$type = 'error';
		set_message($type, $message);
		redirect('job_post');
	}
	
    #Active Job Post
    public function active($id)
    {
		$data['status'] = 'Active';
		$this->Job_post_model->update($data, $id);
		$type = 'success';
		$message = 'Data Active Successfully';
		set_message($type, $message);
		redirect('job_post');
    }
	
    #Inactive Job Post
    public function inactive($id)
    {
		$data['status'] = 'Inactive';
		$this->Job_post_model->update($data, $id);
		$type = 'error';
		$message = 'Data Inactive Successfully';
		set_message($type, $message);
		redirect('job_post');
    }
}
