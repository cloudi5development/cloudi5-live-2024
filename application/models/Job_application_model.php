<?php
class Job_application_model extends MY_Model{
    
	public $_table_name 	= 'job_application';
    public $_order_by 		= 'application_id';
    public $_primary_key	= 'application_id';
	
  	public function getById($id)
  	{ 
	   return $this->db->where([
  			$this->_primary_key => $id
  		])->get($this->_table_name)->row();
	}
	
  	public function getByJobPostId($id)
  	{ 
	   return $this->db->where([
  			'job_post_id' => $id
  		])->get($this->_table_name)->row();
	}
	
	var $column_order = array(Null,'a.created_at','b.job_id','b.title','a.name','a.email','a.mobile','a.resume','a.experience','a.message'); 
	var $column_search = array('a.created_at','b.job_id','b.title','a.name','a.email','a.mobile','a.resume','a.experience','a.message'); 
	var $order = array('a.application_id' => 'DESC'); 
	private function _get_datatables_query($filter = [])
	{
		$this->db->select('a.*,b.title,b.job_id');
		$this->db->from('job_application as a');
		$this->db->join('job_post as b','a.job_post_id=b.job_post_id');
		
		$i = 0;
		foreach ($this->column_search as $item) 
		{
			if(isset($filter['search']['value'])) 
			{
				if($i===0) 
				{
					$this->db->group_start(); 
					$this->db->like($item, $filter['search']['value']);
				}
				else
				{
					$this->db->or_like($item, $filter['search']['value']);
				}
				if(count($this->column_search) - 1 == $i) 
					$this->db->group_end(); 
			}
			$i++;
		}
		
		if(isset($filter['order'])) 
		{
			$this->db->order_by($this->column_order[$filter['order']['0']['column']], $filter['order']['0']['dir']);
		} 
		else if(isset($this->order))
		{
			$order = $this->order;
			$this->db->order_by(key($order), $order[key($order)]);
		}
	}

	function get_datatables($filters)
	{
		$this->_get_datatables_query($filters);
		$data['filtered_rows'] = $this->db->count_all_results();
		$this->_get_datatables_query($filters);
		$this->db->limit($filters['length'], $filters['start']);
		$query = $this->db->get();
		
		$data['rows'] = $query->result();;
		return $data;
	}
	public function count_all()
	{
		$this->_get_datatables_query();
		return $this->db->count_all_results();
	   
	}
	
}
?>