<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Modelproject extends CI_Model {

	public function loadAllProjectCategory()
	{
		$query = $this->db->query("
				SELECT pc.*
				FROM project_category pc
				ORDER BY pc.id ASC
			");
		if($query->num_rows() > 0){
			foreach ($query->result() as $row) {
				$data[] = $row;
			}
			return $data;
		}
	}

	public function insertProject($title, $description, $category, $projectstory, $date, $client, $status, $location, $projecturi)
	{
		$field = array(
				'title' => $title,
				'description' => $description,
				'project_story' => $projectstory,
				'id_category' => $category,
				'project_detail_date' => $date,
				'project_detail_client' => $client,
				'project_detail_status' => $status,
				'project_detail_location' => $location,
				'project_uri' => $projecturi
			);
		$this->db->insert('project', $field);
	}
	
}

/* End of file modelcontact.php */
/* Location: ./application/models/modelcontact.php */