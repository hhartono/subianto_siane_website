<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Administrator extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->helper(array('email', 'url'));
		$this->load->library(array('form_validation','email', 'tank_auth', 'session'));
		$this->is_logged_in();
		$this->load->model('modelcategory');
		$this->load->model('modelproject');
	}

	public function index()
	{
		$data = array(
				'title' => 'Dashboard | Subianto & Siane Architecture',
				'username' => $this->tank_auth->get_username(),
				'dashboardactive' => 'active'
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

	/*
		category controller 
	*/
	public function category()
	{
		$data = array(
				'title' => 'Subianto & Siane Architecture - Category',
				'title_page' => 'Add Category',
				'username' => $this->tank_auth->get_username(),
				'loadAllCategory' => $this->modelcategory->loadAllCategory() 
			);
		$this->load->view('admin/category', $data);
	}

	public function categoryload()
	{
		$category = $this->modelcategory->loadAllCategory();
		$output = json_encode($category);
		die($output);
	}

	public function categoryadd()
	{
		$data = array(
			'title' => 'Subianto & Siane Architecture - Category',
			'title_page' => 'Add Category',
			'username' => $this->tank_auth->get_username(),
			'loadCategory' => $this->modelcategory->loadAllCategory()
		);
		$this->load->view('admin/category_add', $data);
	}

	public function categoryaddsubmit()
	{
		// configuration form validation
		$this->form_validation->set_rules('nama', 'Category Name', 'required');
		if($this->form_validation->run() == FALSE){
			$formerror = array(
				'nama' => form_error('nama'),
			);
			$output = json_encode(
						array(
							'type'=>'error', 
							'validation_errors' => validation_errors(), 
							'formerror' => $formerror
							)
						);
			die($output);
		}else{
			$nama = $this->input->post('nama');
			// insert product to database
			$this->modelcategory->insertCategory($nama);
			$output = json_encode(array('type'=> 'message', 'text' => ucwords($nama).'telah tersimpan'));
			die($output);
		}
	}

	public function categoryupdatesubmit()
	{
		// configuration form validation
		$this->form_validation->set_rules('nama', 'Category Name', 'required');
		if($this->form_validation->run() == FALSE){
			// form validation false
			$formerror = array(
				'nama' => form_error('nama'),
			);
			$output = json_encode(
							array(
								'type'=>'error', 
								'validation_errors' => validation_errors(),
								'formerror' => $formerror
								)
							);
			die($output);
		}else{
			$id = $this->input->post('id');
			$nama = $this->input->post('nama');
			
			$this->modelcategory->updateCategory($id, $nama);
			$output = json_encode(array('type'=> 'message', 'text' => ucwords($nama).'telah diubah dan tersimpan'));
			die($output);
		}
	}
	/*
	 * project controller
	 */
	public function project()
	{
		$data = array(
				'title' => 'Project | Subianto & Siane Architecture',
				'username' => $this->tank_auth->get_username(),
				'projectactive' => 'active'
			);
		$this->load->view('admin/project', $data);
	}

	/* 
	 * project add controller
	 */
	public function projectadd()
	{
		$data = array(
				'title' => 'Project Add | Subianto & Siane Architecture',
				'username' => $this->tank_auth->get_username(),
				'projectaddactive' => 'active',
				'categoryall' => $this->modelproject->categoryAllLoad()
			);
		$this->load->view('admin/projectadd', $data);
	}

	/*
	 * project add submit
	 */


	// public function tosha1()
	// {
	// 	echo sha1('subiantosiane');
	// }
}

/* End of file administrator.php */
/* Location: ./application/controllers/administrator.php */