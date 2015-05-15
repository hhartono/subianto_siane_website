<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class About extends CI_Controller {

	public function index()
	{
		$data = array(
				'title' => 'Subianto Siane Architecture - About',
				'aboutactlink' => 'act-link'
			);
		$this->load->view('public/about', $data);
	}

}

/* End of file about.php */
/* Location: ./application/controllers/about.php */