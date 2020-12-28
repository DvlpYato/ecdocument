<?php

class Department_model extends CI_Model
{

	public $d_id;
	public $d_name;

	public function __construct()
	{
		parent::__construct();
	}

	public function record_count($keyword)
	{
		$this->db->like('d_name',$keyword);
		$this->db->from('department');
		return $this->db->count_all_results();
	}

	public function fetch_department($limit, $start,$keryword)
	{
		$this->db->like('d_name',$keryword);
		$this->db->limit($limit, $start);
		$query = $this->db->get('department');
		if($query->num_rows() > 0)
		{
			foreach($query->result() as $row)
			{
				$data[] = $row;
			}
			return $data;
		}
		return FALSE;
	}

	public function entry_categorie($id)
	{
		$this->name = $this->input->post('name');
		$this->description = $this->input->post('description');
		if($id == NULL)
		{
			$this->db->insert('categories', $this);
		}
		else

		{
			$this->db->update('categories', $this, array('id'=> $id));
		}
	}
	public function read_categorie($id){
		$this->db->where('id',$id);
		$query = $this->db->get('categories');
		if($query->num_rows() > 0){
			$data = $query->row();
			return $data;
		}
		return FALSE;
	}
	public function remove_categorie($id){
		$this->db->delete('categories',array('id'=>$id));
	}

}
