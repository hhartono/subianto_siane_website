<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Modelmessagecenter extends CI_Model {
	public function loadAllMessage()
	{
		$query = $this->db->query("
				SELECT * 
				FROM message_contact
				ORDER BY id DESC
			");
		if($query->num_rows() > 0){
			foreach ($query->result() as $row) {
				$data[] = $row;
			}
			return $data;
		}
	}

	public function updateStatusRead($id){
		$data = array(
			'status' => 'read'
			);
		$this->db->where('id', $id);
		$this->db->update('message_contact', $data);
	}

	public function updateStatusMessage($id){
		$data = array(
			'status' => 'replied'
			);
		$this->db->where('id', $id);
		$this->db->update('message_contact', $data);
	}
}