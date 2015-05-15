<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Contact extends CI_Controller {

	public function index()
	{
		$data = array(
				'title' => 'Subianto Siane Architecture - Contact',
				'contactactlink' => 'act-link'
			);
		$this->load->view('public/contact', $data);
	}

}

/* End of file contact.php */
/* Location: ./application/controllers/contact.php */