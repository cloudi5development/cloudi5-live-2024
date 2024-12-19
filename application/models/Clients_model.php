<?php
class Clients_model extends MY_Model
{

	public $_table_name 	= 'clients';
	public $_order_by 		= 'id';
	public $_primary_key	= 'id';

	public function getAll()
	{
		return $this->db->order_by('id', 'asc')->where('status', 'Active')->get($this->_table_name)->result();
	}


	public function getById($id)
	{
		return $this->db->where([
			$this->_primary_key => $id
		])->get($this->_table_name)->row();
	}
	public function getByTeamsId($id)
	{
		return $this->db->where([
			'id' => $id
		])->get($this->_table_name)->row();
	}


	public function insert($data)
	{
		$this->db->insert($this->_table_name, $data);
		$insert_id = $this->db->insert_id();
		return  $insert_id;
	}

	public function update($data, $id)
	{
		$this->db->set($data);
		$this->db->where($this->_primary_key, $id);
		$this->db->update($this->_table_name);
	}



	var $column_order = array(Null, 'name', 'priority', 'is_show_in_home', 'status');
	var $column_search = array('name', 'priority', 'is_show_in_home', 'status');
	var $order = array('id' => 'ASC');

	private function _get_datatables_query($filter = [])
	{
		$this->db->from('clients');

		$i = 0;
		foreach ($this->column_search as $item) {
			if (isset($filter['search']['value'])) {
				if ($i === 0) {
					$this->db->group_start();
					$this->db->like($item, $filter['search']['value']);
				} else {
					$this->db->or_like($item, $filter['search']['value']);
				}
				if (count($this->column_search) - 1 == $i)
					$this->db->group_end();
			}
			$i++;
		}

		if (isset($filter['order'])) {
			$this->db->order_by($this->column_order[$filter['order']['0']['column']], $filter['order']['0']['dir']);
		} else if (isset($this->order)) {
			$order = $this->order;
			$this->db->order_by(key($order), $order[key($order)]);
		}
	}

	function get_datatables($filters)
	{
		$filters['length'] = isset($filters['length']) ? $filters['length'] : 10; // Default to 10 rows per page
		$filters['start'] = isset($filters['start']) ? $filters['start'] : 0;
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
	public function getAllTeams()
  	{
	
		return $this->db->order_by('priority', 'asc')->where('status', '1')->get($this->_table_name)->result();
  	}
	  public function getLogo()
    {
		return $this->db
					->order_by('priority', 'asc')
					->where('is_show_in_home', '1')
					->where('status', '1')
					->get($this->_table_name)
					->result();
    }

}
