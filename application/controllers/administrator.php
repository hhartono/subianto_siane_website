<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Administrator extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->helper(array('email', 'url'));
		$this->load->library(array('form_validation','email', 'tank_auth', 'session'));
		$this->is_logged_in();
		$this->load->model(array());
	}

	public function index()
	{
		$data = array(
				'title' => 'Subianto Siane Architecture - Administrator',
				'username' => $this->tank_auth->get_username()
			);
		$this->load->view('admin/dashboard', $data);
	}

	/*
	 * check if user is logged in
	 */
	public function is_logged_in()
	{
		if(!$this->tank_auth->is_logged_in()){
			redirect('/auth/login');
		}
	}

	// public function tosha1()
	// {
	// 	echo sha1('subiantosiane');
	// }
}

/* End of file administrator.php */
/* Location: ./application/controllers/administrator.php */