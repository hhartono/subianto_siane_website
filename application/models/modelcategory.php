<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Modelcategory extends CI_Model {

	public function loadAllCategory()
	{
		$query = $this->db->query("
				SELECT *
				FROM project_category
				ORDER BY id ASC
			");
		if($query->num_rows()>0){
			foreach ($query->result() as $row) {
				$data[] = $row;
			}
			return $data;
		}
	}

	public function insertCategory($nama)
	{
		$data = array(			
			'category_name' => $nama
		);
		$this->db->insert('project_category', $data);
	}

	public function loadCategory($field, $condition)
	{
		$this->db->where($field, $condition);
		$query = $this->db->get('project_category');
		if($query->num_rows()>0){
			$data = $query->row();
			return $data;
		}
	}

	public function deleteCategory($id){
		return $this->db->delete('project_category', array('id'=>$id));
	}

	public function updateCategory($id, $nama)
	{
		$field = array(
			'category_name' => $nama
		);
		$this->db->where('id', $id);
		$this->db->update('project_category', $field);
	}
}