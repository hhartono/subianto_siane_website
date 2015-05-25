<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Contact extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->model('modelproject');
	}
	
	public function index()
	{
		$data = array(
				'title' => 'Subianto & Siane Architecture - Contact',
				'contactactlink' => 'act-link',
				'loadphotoabout' => $this->modelproject->loadPhotoAbout(),
				'loadrandomphoto' => $this->modelproject->loadRandomPhoto()
			);
		$this->load->view('public/contact', $data);
	}

}

/* End of file contact.php */
/* Location: ./application/controllers/contact.php */