<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Project extends CI_Controller {

	public function index()
	{
		$data = array(
				'title' => 'Subianto Siane Architecture - Project',
				'projectactlink' => 'act-link'
			);
		$this->load->view('public/project', $data);
	}
/*
	public function detail(){

	}*/
}

/* End of file project.php */
/* Location: ./application/controllers/project.php */