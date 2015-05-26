<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Modelcontact extends CI_Model {

	public function insertContact($name, $email, $message)
	{
		$data = array(			
			'name' => $name,
			'email' => $email,
			'message' => $message,
			'date' => date("Y-m-d H:i:s"),
		);
		$this->db->insert('message_contact', $data);
	}
}