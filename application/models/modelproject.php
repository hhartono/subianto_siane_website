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

	public function uploadProjectPhoto($idproject, $file)
	{
		$field = array(
				'photo' => $file,
				'id_project' => $idproject
			);
		$this->db->insert('project_album', $field);
	}

	public function loadAllProject()
	{
		$query = $this->db->query("
				SELECT p.title, p.project_uri, p.description, p.project_story, pc.category_name, 
				    (SELECT pa.photo
				        FROM project_album pa 
				         WHERE p.id = pa.id_project AND pa.status_cover_project = 1 limit 0,1) as photo
				FROM project p, project_category pc
				WHERE p.id_category = pc.id
			");
		if($query->num_rows() > 0){
			foreach ($query->result() as $row) {
				$data[] = $row;
			}
			return $data;
		}
	}

	public function loadAllProjectAlbum()
	{
		$query = $this->db->query("
				SELECT *
				FROM project_album
				ORDER BY id ASC
			");
		if($query->num_rows() > 0){
			foreach ($query->result() as $row) {
				$data[] = $row;
			}
			return $data;
		}
	}

	public function loadOneProject($projecturi)
	{
		$query = $this->db->query("
				SELECT p.title, p.description, p.project_story, 
				p.project_detail_date, p.project_detail_client, p.project_detail_status, p.project_detail_location
				FROM project p
				WHERE p.project_uri = '$projecturi'
			");
		if($query->num_rows()>0){
			$data = $query->row();
			return $data;
		}
	}

	public function loadAllPhotosDetailProject($projecturi)
	{
		$query = $this->db->query("
				SELECT pa.photo
				FROM project_album pa, project p
				WHERE p.project_uri = '$projecturi'
				AND pa.id_project = p.id
			");
		if($query->num_rows() > 0){
			foreach($query->result() as $row){
				$data[] = $row;
			}
			return $data;
		}

	}

	public function insertProjectAlbum($idproject, $id, $cover, $sidebar)
	{
		$this->db->trans_begin();
		$field = array(
				'status_cover_project' => '0',
				'status_sidebar_project' => '0'
			);
		$this->db->where('id_project', $idproject);
		$this->db->update('project_album', $field);

		$field = array(
				'status_cover_project' => '1'
			);
		$this->db->where('id', $cover);
		$this->db->where('id_project', $idproject);
		$this->db->update('project_album', $field);

		$field = array(
				'status_sidebar_project' => '1'
			);
		$this->db->where('id', $sidebar);
		$this->db->where('id_project', $idproject);
		$this->db->update('project_album', $field);

		// complete database transaction
        $this->db->trans_complete();

        // return false if something went wrong
        if ($this->db->trans_status() === FALSE){
            return FALSE;
        }else{
            return TRUE;
        }
	}

	
}

/* End of file modelcontact.php */
/* Location: ./application/models/modelcontact.php */