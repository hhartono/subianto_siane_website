<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Administrator extends CI_Controller{

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

	public function categorydelete($id)
	{
		$idcat = $id;
		$tableCategory = $this->modelcategory->loadCategory('id', $idcat);
		$category = $tableCategory->category_name;
		$this->modelcategory->deleteCategory($idcat);
		$this->session->set_flashdata('message', '<div class="alert alert-success">'.ucwords($category).' telah berhasil dihapus!</div>');
		redirect('administrator/category');
	}

	public function categoryupdatesubmit()
	{
		// configuration form validation
		$this->form_validation->set_rules('category', 'Category Name', 'required');
		if($this->form_validation->run() == FALSE){
			// form validation false
			$formerror = array(
				'category' => form_error('category'),
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
			$nama = $this->input->post('category');
			
			$this->modelcategory->updateCategory($id, $nama);
			$output = json_encode(array('type'=> 'message', 'text' => ucwords($nama).' telah diubah dan tersimpan'));
			die($output);
		}
	}
	/*
		end of category
	*/

	/*
	 * project controller
	 */
	public function project()
	{
		$data = array(
				'title' => 'Project | Subianto & Siane Architecture',
				'username' => $this->tank_auth->get_username(),
				'projectactive' => 'active',
				'loadallproject' => $this->modelproject->loadAllProject()
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
				'categoryall' => $this->modelproject->loadAllProjectCategory()
			);
		$this->load->view('admin/project_add', $data);
	}

	/*
	 * project add submit
	 */
	public function projectaddsubmit()
	{
		$this->form_validation->set_rules('title','Project Title','required');
		$this->form_validation->set_rules('description','Project description','required');
		$this->form_validation->set_rules('category','Project Category','required');
		$this->form_validation->set_rules('date','Date','required');
		//$this->form_validation->set_rules('client','Client','required');
		$this->form_validation->set_rules('location','Location','required');

		if($this->form_validation->run() == FALSE){
			$formerror = array(
				'title' => form_error('title'),
				'description' => form_error('description'),
				'category' => form_error('category'),
				'date' => form_error('date'),
				//'client' => form_error('client'),
				'location' => form_error('location')
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
			$title = $this->input->post('title');
			$description = $this->input->post('description');
			$category = $this->input->post('category');
			$projectstory = $this->input->post('projectstory');
			$date = $this->input->post('date');
			$client = $this->input->post('client');
			$status = $this->input->post('status');
			$location = $this->input->post('location');
			$projecturi = $this->create_slug($title);
			$this->modelproject->insertProject($title, $description, $category, $projectstory, $date, $client, $status, $location, $projecturi);
			$id = mysql_insert_id();
			$output = json_encode(
					array(
						'type' => 'message',
						'text' => ucwords($title).' telah disimpan',
						'lastid' => $id
					)
				);
			die($output);
		}
	}

	public function create_slug($string)
	{
	   $slug = preg_replace('/[^A-Za-z0-9-]+/', '-', $string);
	   return $slug;
	}

	public function projectphotoupload()
	{
		$uri3 = $this->uri->segment(3);
		if($uri3 == ''){
			redirect('administrator/projectadd');
		}else{
			$data = array(
				'title' => 'Project Photo Upload | Subianto & Siane Architecture',
				'username' => $this->tank_auth->get_username(),
				'projectaddactive' => 'active',
				'idproject' => $uri3
			);
			$this->load->view('admin/project_photo_upload', $data);	
		}
	}

	public function projectphotouploadsubmit()
	{
		$config = array(
				'upload_path' => 'uploads/project/',
				'allowed_types' => 'gif|jpg|jpeg|png',
				'max_size' => '1024',
				'max_width' => '1920',
				'max_height' => '1920'
			);
		$this->load->library('upload', $config);
		$idproject = $this->input->post('idproject');
		$file = $this->input->post('file');
		if(!$this->upload->do_upload('file')){
			$output = json_encode(array('error' => $this->upload->display_errors(), 'file'=> $file));
		}else{
			$filename = $this->upload->data();
			$this->modelproject->uploadProjectPhoto($idproject, $filename['file_name']);
			$output = json_encode(array('upload_data' => $this->upload->data()));
		}
		die($output);
	}

	public function projectphotofinish()
	{
		$uri3 = $this->uri->segment(3);
		if($uri3 == ''){
			redirect('administrator/projectadd');
		}else{
			$data = array(
					'title' => 'Project Finish | Subianto & Siane Architecture',
					'username' => $this->tank_auth->get_username(),
					'projectaddactive' => 'active',
					'idproject' => $uri3,
					'projectalbum' => $this->modelproject->loadAllProjectAlbum($uri3)
			);
			$this->load->view('admin/project_photo_finish', $data);
		}
	}

	public function projectphotofinishsubmit()
	{	
		$cov = $this->input->post('cover');
		$side = $this->input->post('sidebar');
		if(!empty($cov) && !empty($side))
		// if(!empty($this->input->post('cover')) && !empty($this->input->post('sidebar')))
		{
			$idproject = $this->input->post('idproject');
			$id = $this->input->post('id');
			$cover = $this->input->post('cover');
			$sidebar = $this->input->post('sidebar');
			$this->modelproject->insertProjectAlbum($idproject, $id, $cover, $sidebar);
			redirect('administrator/project');	
		}
	}

	public function projectphotoabout()
	{
		$data = array(
				'title' => 'Project Home | Subianto & Siane Architecture',
				'username' => $this->tank_auth->get_username(),
				'projectabout' => $this->modelproject->loadAllProjectAbout()
		);
		$this->load->view('admin/project_photo_about', $data);
	}

	public function projectphotoaboutsubmit()
	{		
		if(!empty($this->input->post('about'))){
			$about = $this->input->post('about');
			$this->modelproject->insertProjectAbout($about);
			$this->session->set_flashdata("message", "<div class=\"alert alert-success\" id=\"alert\"><i class=\"glyphicon glyphicon-ok\"></i> Data berhasil diupdate</div>"); 
			redirect('administrator/projectphotoabout');	
		}else{
			echo "";
		}
	}

	// public function tosha1()
	// {
	// 	echo sha1('subiantosiane');
	// }
}

/* End of file administrator.php */
/* Location: ./application/controllers/administrator.php */