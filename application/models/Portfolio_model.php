<?php
class Portfolio_model extends MY_Model{
    
	public $_table_name 	= 'portfolio';
    public $_order_by 		= 'id';
    public $_primary_key	= 'id';
	
	public function getAll($limit ='')
  	{
		$this->db->select('a.*,b.title as category,b.slug as category_slug')->from($this->_table_name . ' as a')->join('category as b','a.category_id=b.category_id')->where('a.status','Active');
		 if($limit){
			$this->db->limit($limit);
		 }
		 return $this->db->order_by('a.created_at', 'DESC')->get()->result();
	}
	
	public function getPortfolioCategory()
  	{
		$portfolio		= $this->db->select('category_id')->from('portfolio')->where('status','Active')->get()->result();
		$category_id	= array_map(function ($value) { return $value->category_id;}, $portfolio);
		return $this->db->select('*')->from('category')->where_in('category_id',$category_id)->order_by('sorting', 'ASC')->get()->result();
	  }
	  
	public function getHomePortfolio()
  	{
		return $this->db->select('a.*,b.title as category,b.slug as category_slug')->from($this->_table_name . ' as a')->join('category as b','a.category_id=b.category_id')->where('a.display_home_page','Yes')->where('a.status','Active')->order_by('a.created_at', 'DESC')->get()->result();
  	}
	
	public function info_by_slug_and_id($slug,$id)
  	{
		$portfolio = $this->db->select('a.*,b.title as category')->from($this->_table_name . ' as a')->join('category as b','a.category_id=b.category_id')->where(array('a.slug'=>$slug,'a.id'=>$id,'a.status'=>'Active'))->get()->row();
		if($portfolio){
			return $portfolio;
		}else{
			return false;
		}
  	}
	
  	public function getById($id)
  	{ 
	   return $this->db->where([
  			$this->_primary_key => $id
  		])->get($this->_table_name)->row();
	}
	
  	public function getByCategoryId($id)
  	{ 
	   return $this->db->where([
  			'category_id' => $id
  		])->get($this->_table_name)->row();
	}
	
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

	public function insertImage($data)
  	{
	   $this->db->insert('portfolio_image',$data);
	   $insert_id = $this->db->insert_id();
	   return  $insert_id;
	}
	
	public function updateImage($data,$id)
  	{
		$this->db->set($data);
		$this->db->where('portfolio_image_id', $id);
		$this->db->update('portfolio_image');
	}

	public function getImageById($id)
  	{ 
	   return $this->db->where([
  			'portfolio_image_id' => $id
  		])->get('portfolio_image')->row();
	}
	
	public function getImageAll($id)
  	{ 
	   return $this->db->where([
  			'portfolio_id' => $id
  		])->get('portfolio_image')->result();
	}
	
	var $column_order = array(Null,'a.created_at','a.title','b.title','a.status'); 
	var $column_search = array('a.created_at','a.title','b.title','a.status'); 
	var $order = array('a.created_at' => 'DESC'); 
	
	private function _get_datatables_query($filter = [])
	{
		$this->db->select('a.*,b.title as category');
		$this->db->from('portfolio as a');
		$this->db->join('category as b','a.category_id=b.category_id');
		
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