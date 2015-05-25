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
				ORDER BY p.id DESC
			");
		if($query->num_rows() > 0){
			foreach ($query->result() as $row) {
				$data[] = $row;
			}
			return $data;
		}
	}

	public function loadAllProjectAlbum($uri3)
	{
		$query = $this->db->query("
				SELECT *
				FROM project_album
				WHERE id_project = '$uri3' ORDER BY id ASC
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
                p.project_detail_date, p.project_detail_client, p.project_detail_status, p.project_detail_location,
                (SELECT pa.photo
                    FROM project_album pa
                    WHERE p.id = pa.id_project
                    AND pa.status_sidebar_project = 1) as sidebarphoto,
                (SELECT pa.status_sidebar_project
                    FROM project_album pa
                    WHERE p.id = pa.id_project
                    AND pa.status_sidebar_project = 1) as statussidebar
                FROM project p
                WHERE p.project_uri = '$projecturi' 
			");
		if($query->num_rows()>0){
			$data = $query->row();
			return $data;
		}
	}

	public function loadSidebarProject($projecturi)
	{
		$query = $this->db->query("
				SELECT pa.photo, pa.status_sidebar_project
				FROM project_album pa, project p
				WHERE p.project_uri = '$projecturi'
				AND pa.id_project = p.id
				LIMIT 0,1
			");
		if($query -> num_rows() > 0){
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
				ORDER BY pa.id ASC
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

	public function loadAllProjectAbout()
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

	public function insertProjectAbout($about)
	{
		$this->db->trans_begin();
		$field = array(
				'status_about' => '0',
			);
		$this->db->update('project_album', $field);

		$field = array(
				'status_about' => '1'
			);
		$this->db->where('id', $about);
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

	public function loadAllProjectSidebar()
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

	public function insertProjectSidebar($sidebar)
	{
		foreach($sidebar as $sb)
		{
			$field = array(
				'status_sidebar_random' => '1'
			);

		$this->db->where('id', $sb);
		$this->db->update('project_album', $field);
		}
	}

	public function loadAllProjectHome()
	{
		$query = $this->db->query("
				SELECT project_album.*,  project.title as title
				from project_album, project 
				where project.id = project_album.id_project 
				group by project_album.id_project
			");
		if($query->num_rows() > 0){
			foreach ($query->result() as $row) {
				$data[] = $row;
			}
			return $data;
		}
	}

	public function loadAllPhotoHome($id)
	{
		$query = $this->db->query("
				SELECT project_album.*,  project.title as title
				from project_album, project 
				where project.id = project_album.id_project AND project_album.id_project = '$id'
			");
		if($query->num_rows() > 0){
			foreach ($query->result() as $row) {
				$data[] = $row;
			}
			return $data;
		}
	}

	public function insertProjectHome($home, $id, $idproject)
	{
		$this->db->trans_begin();
		$field = array(
				'status_feature_home' => '0',
			);
		$this->db->where('id_project', $idproject);
		$this->db->update('project_album', $field);

		$field = array(
				'status_feature_home' => '1'
			);
		$this->db->where('id', $home);
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