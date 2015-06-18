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
		$id = $this->input->post('id');
		$subject = $this->input->post('subject');
		$message = $this->input->post('message');

		$this->db->trans_start();
		$data = array(
			'status' => 'replied'
			);
		$this->db->where('id', $id);
		$this->db->update('message_contact', $data);

		$data = array(
			'subject' => $subject,
			'message' => $message,
			'id_message' => $id
			);
		$this->db->insert('message_reply', $data);
		$this->db->trans_complete();

        // return false if something went wrong
        if ($this->db->trans_status() === FALSE){
            return FALSE;
        }else{
            return TRUE;
        }
	}
}