<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class About extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->model('modelproject');
	}

	public function index()
	{
		$data = array(
				'title' => 'Subianto & Siane Architecture - About',
				'aboutactlink' => 'act-link',
				'loadphotoabout' => $this->modelproject->loadPhotoAbout(),
				'loadrandomphoto' => $this->modelproject->loadRandomPhoto()
			);
		$this->load->view('public/about', $data);
	}

}

/* End of file about.php */
/* Location: ./application/controllers/about.php */