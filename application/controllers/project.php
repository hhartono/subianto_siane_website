<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Project extends CI_Controller {

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
				'projectactlink' => 'act-link',
				'loadcategorycount' => $this->modelcategory->loadCategoryCount(),
				'loadallproject' => $this->modelproject->loadAllProject()
			);
		$this->load->view('public/project', $data);
	}

	public function detail()
	{
		$projecturi = $this->uri->segment(3);
		if($projecturi == ''){
			redirect('project/');
		}else{
			$data = array(
				'title' => 'Subianto & Siane Architecture - Project Detail',
				'projectactlink' => 'act-link',
				'loadoneproject' => $this->modelproject->loadOneProject($projecturi),
				'loadallphotosdetailproject' => $this->modelproject->loadAllPhotosDetailProject($projecturi)
			);
			$this->load->view('public/project_detail', $data);	
		}
		
	}
}

/* End of file project.php */
/* Location: ./application/controllers/project.php */