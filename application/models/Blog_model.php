<?php
class Blog_model extends MY_Model{
    
	public $_table_name 	= 'blog';
    public $_order_by 		= 'blog_id';
    public $_primary_key	= 'blog_id';
	
	public function getAll($limit ='')
  	{
		$this->db->select('a.*,b.title as category,b.slug as category_slug')->from($this->_table_name . ' as a')->join('category as b','a.category_id=b.category_id')->where('a.status','Active')->order_by('a.blog_date','DESC');
		 if($limit){
			$this->db->limit($limit);
		 }
		 return $this->db->get()->result();
  	}
	
	public function getRecent($id='',$limit ='')
  	{
		return $this->db->select('a.*,b.title as category')->from($this->_table_name . ' as a')->join('category as b','a.category_id=b.category_id')->where('a.status','Active')->where('blog_id !=',$id)->order_by('a.blog_date','DESC')->limit($limit)->get()->result();
  	}
	
	public function info_by_slug_and_id($slug,$id)
  	{
		$blog = $this->db->select('a.*,b.title as category')->from($this->_table_name . ' as a')->join('category as b','a.category_id=b.category_id')->where(array('a.slug'=>$slug,'a.blog_id'=>$id,'a.status'=>'Active'))->get()->row();

		$category = $this->db->select('a.*,b.title as category')->from($this->_table_name . ' as a')->join('category as b','a.category_id=b.category_id')->where(array('a.slug'=>$slug,'a.blog_id'=>$id,'a.status'=>'Active'))->get()->row();
		if($blog){
			return $blog;
		}elseif($category){
			return $category;
		}else{
			redirect(base_url(), 'refresh');
		}
  	}
	
	public function getFeatured($limit='',$blog_id='')
  	{
		return $this->db->select('a.*,b.title as category')->from($this->_table_name . ' as a')->join('category as b','a.category_id=b.category_id')->where('a.status','Active')->where('a.blog_id !=',$blog_id)->order_by('a.blog_date','DESC')->limit($limit)->get()->result();
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
	
	var $column_order = array(Null,'a.blog_date','a.title','b.title','a.status'); 
	var $column_search = array('a.blog_date','a.title','b.title','a.status'); 
	var $order = array('a.blog_date' => 'DESC', 'a.blog_id' => 'DESC'); 
	
	private function _get_datatables_query($filter = [])
	{
		$this->db->select('a.*,b.title as category');
		$this->db->from('blog as a');
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
		
		if (isset($filter['order'])) {
            $this->db->order_by($this->column_order[$filter['order']['0']['column']], $filter['order']['0']['dir']);
        } elseif (isset($this->order)) {
            foreach($this->order as $orderKey=>$orderValue) {
                $this->db->order_by($orderKey, $orderValue);
            }
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