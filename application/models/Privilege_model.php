<?php
class Privilege_model extends MY_Model{
    
	public $_table_name = 'user_privilege';
    public $_order_by = 'user_privilege_id';
    public $_primary_key = 'user_privilege_id';
	
	public function insert($data)
  	{
	   $this->db->insert($this->_table_name,$data);
	   $insert_id = $this->db->insert_id();
	   return  $insert_id;
	}
	public function update($data,$id)
  	{
		$this->db->set($data);
		$this->db->where($this->_primary_key, $id);
		$this->db->update($this->_table_name);
	} 
	
	public function getById($id)
  	{ 
	   return $this->db->where([
  			$this->_primary_key => $id
  		])->get($this->_table_name)->row();
	}
	public function getByUserId($id)
  	{ 
	   return $this->db->where([
  			'user_id' => $id
  		])->get($this->_table_name)->row();
	}
	
	public function getPermission($permission,$user_id)
  	{ 
	   return $this->db->select($permission)->where([
  			'user_id' => $user_id
  		])->get($this->_table_name)->row();
	}
	
	#Get Privilege Access
	public function privilleges($access='')
  	{
		if($this->session->userdata('user_id')){
			$query = $this->db->select($access)->from('user_privilege')->where('user_id',$this->session->userdata('user_id'))->get()->row();
			return json_decode($query->$access, TRUE);
		}
  	}
	
	var $column_order = array(Null,'b.user_type','b.name','b.email','b.mobile'); 
	var $column_search = array('b.user_type','b.name','b.email','b.mobile'); 
	var $order = array('b.name' => 'ASC'); 
	
	private function _get_datatables_query($filter = [])
	{
		$this->db->select('a.*,b.id,b.name,b.email,b.user_type,b.mobile');
		$this->db->from('user_privilege as a');
		$this->db->join('users as b','a.user_id = b.id');
		$this->db->where('b.status','Active');
		$i = 0;
		//echo $this->db->last_query();
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