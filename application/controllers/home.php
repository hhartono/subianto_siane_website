<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

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
			'title' => 'Subianto & Siane Architecture - Home',
			'homeactlink' => 'act-link',
			// 'loadfeaturedhome' => $this->modelproject->loadFeaturedHome()
			'loadcategorycount' => $this->modelcategory->loadCategoryCount()
		);
		$this->load->view('public/home', $data);
	}
	
	public function intro()
	{
		$data = array(
			'title' => 'Subianto & Siane Architecture - Home',
			'homeactlink' => 'act-link',
			// 'loadfeaturedhome' => $this->modelproject->loadFeaturedHome()
			'loadcategorycount' => $this->modelcategory->loadCategoryCount(),
			'hometoplayer' => 'hometoplayer'
		);
		$this->load->view('public/home', $data);
	}
}

/* End of file home.php */
/* Location: ./application/controllers/home.php */