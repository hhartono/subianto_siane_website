<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Portfolio extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->model('modelcategory');
		$this->load->model('modelproject');
	}

	public function index()
	{
		$data = array(
				'title' => 'Subianto & Siane Architecture - Project',
				'portfolioactlink' => 'act-link'
			);
		$this->load->view('public/portfolio', $data);
	}

}

/* End of file portfolio.php */
/* Location: ./application/controllers/portfolio.php */