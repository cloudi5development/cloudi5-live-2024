<?php
/**
 * Description of Settings_Model
 */
class Settings_Model extends MY_Model{

    public $_table_name = 'settings';
    public $_order_by = '';
    public $_primary_key = 'settings_id';
	
	public function getAll()
  	{
		return $this->db->order_by('settings_id','ASC')->get($this->_table_name)->row();
  	}
  	
  	public function metaTags($page)
  	{
		return $this->db->select('*')->from('meta_tags')->where('page',$page)->get()->row();
  	}
	
  	public function getById($id)
  	{ 
	   return $this->db->where([
  			$this->_primary_key => $id
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
}
?>