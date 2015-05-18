<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$data = array(
				'title' => 'Subianto & Siane Architecture - Home',
				'homeactlink' => 'act-link'
			);
		$this->load->view('public/home', $data);
	}
}

/* End of file home.php */
/* Location: ./application/controllers/home.php */