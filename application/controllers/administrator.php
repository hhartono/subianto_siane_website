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
		$this->load->model('modelmessagecenter');
	}

	public function index()
	{
		$data = array(
				'title' => 'Project | Subianto & Siane Architecture',
				'username' => $this->tank_auth->get_username(),
				'projectactive' => 'active',
				'loadallproject' => $this->modelproject->loadAllProject(),
				'categoryall' => $this->modelproject->loadAllProjectCategory()
			);
		$this->load->view('admin/project', $data);
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
				'categoryactive' => 'active',
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
				'categoryaddactive' => 'active',
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
				'loadallproject' => $this->modelproject->loadAllProject(),
				'loadaddproject' => $this->modelproject->loadAddProject(),
				'categoryall' => $this->modelproject->loadAllProjectCategory()
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
			$projectstory = htmlentities($this->input->post('projectstory'));
			$date = $this->input->post('date');
			$client = $this->input->post('client');
			$status = $this->input->post('status');
			$location = $this->input->post('location');
			// $projecturi = $this->create_slug($title);
			$projecturi = $this->sluggify($title);
			$duplicate_check = $this->modelproject->get_project_by_title($this->input->post('title'));
			if(empty($duplicate_check)){
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
			}else{
				$output = json_encode(
						array(
							'type' => 'duplicate',
							'text' => ucwords($title).' gagal disimpan, project sudah ada dalam sistem',
						)
					);
				die($output);
			}
		}
	}

	public function create_slug($string)
	{
	   $slug = preg_replace('/[^A-Za-z0-9-]+/', '-', $string);
	   return $slug;
	}

	public function sluggify($url){
		# Prep string with some basic normalization
		$url = strtolower($url);
		$url = strip_tags($url);
		$url = stripslashes($url);
		$url = html_entity_decode($url);

		# Remove quotes (can't, etc.)
		$url = str_replace('\'', '', $url);

		# Replace non-alpha numeric with hyphens
		$match = '/[^a-z0-9]+/';
		$replace = '-';
		$url = preg_replace($match, $replace, $url);

		$url = trim($url, '-');

		return $url;
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

	public function about()
	{
		$data = array(
				'title' => 'Project About | Subianto & Siane Architecture',
				'aboutactive' => 'active',
				'username' => $this->tank_auth->get_username(),
				'projectabout' => $this->modelproject->loadAllProjectAbout()
		);
		$this->load->view('admin/project_photo_about', $data);
	}

	public function projectphotoaboutsubmit()
	{		
		$about = $this->input->post('about');
		if(!empty($about)){
			$about = $this->input->post('about');
			$this->modelproject->insertProjectAbout($about);
			$this->session->set_flashdata("message", "<div class=\"alert alert-success\" id=\"alert\"><i class=\"glyphicon glyphicon-ok\"></i> Project photo about berhasil ditambah</div>"); 
			redirect('administrator/about');	
		}else{
			$this->session->set_flashdata("message", "<div class=\"alert alert-danger\" id=\"alert\"><i class=\"glyphicon glyphicon-remove\"></i> Project photo about gagal dipasang. Photo harus dipilih.</div>"); 
			redirect('administrator/about');
		}
	}

	public function randomsidebar()
	{
		$data = array(
				'title' => 'Project Sidebar Random | Subianto & Siane Architecture',
				'randomactive' => 'active',
				'username' => $this->tank_auth->get_username(),
				'projectsidebar' => $this->modelproject->loadAllProjectSidebar()
		);
		$this->load->view('admin/project_photo_sidebar', $data);
	}

	public function projectphotosidebarsubmit()
	{		
		$sidebar = $this->input->post('sidebar');
		if(!empty($sidebar)){
			$sidebar = $this->input->post('sidebar');
			$this->modelproject->insertProjectSidebar($sidebar);
			$this->session->set_flashdata("message", "<div class=\"alert alert-success\" id=\"alert\"><i class=\"glyphicon glyphicon-ok\"></i> Project photo sidebar berhasil ditambah</div>"); 
			redirect('administrator/randomsidebar');	
		}else{
			$this->session->set_flashdata("message", "<div class=\"alert alert-danger\" id=\"alert\"><i class=\"glyphicon glyphicon-remove\"></i> Project photo sidebar gagal dipasang. Photo harus dipilih.</div>"); 
			redirect('administrator/randomsidebar');
		}
	}

	public function projectphotohome()
	{
		$data = array(
				'title' => 'Project Home | Subianto & Siane Architecture',
				'username' => $this->tank_auth->get_username(),
				'projecthome' => $this->modelproject->loadAllProjectHome()
		);
		$this->load->view('admin/project_photo_home', $data);
	}

	public function projectphotohomeview($id)
	{
		$data = array(
				'title' => 'Project Home | Subianto & Siane Architecture',
				'username' => $this->tank_auth->get_username(),
				'projecthome' => $this->modelproject->loadAllPhotoHome($id)
		);
		$this->load->view('admin/project_photo_home_view', $data);
	}

	public function projectphotohomesubmit()
	{		
		$home = $this->input->post('home');
		$title = $this->input->post('title');
		if(!empty($home)){
			$home = $this->input->post('home');
			$id = $this->input->post('id');
			$idproject = $this->input->post('idproject');
			$this->modelproject->insertProjectHome($home, $id, $idproject);
			$this->session->set_flashdata("message", "<div class=\"alert alert-success\" id=\"alert\"><i class=\"glyphicon glyphicon-ok\"></i> Feature home ". $title ." berhasil dipasang</div>"); 
			redirect('administrator/project');	
		}else{
			$this->session->set_flashdata("message", "<div class=\"alert alert-danger\" id=\"alert\"><i class=\"glyphicon glyphicon-remove\"></i> Feature home ". $title ." gagal dipasang. Photo harus dipilih.</div>");
			redirect('administrator/project');
		}
	}

	public function projectphotohomereset()
	{		
		$idproject = $this->input->post('idproject');
		if(!empty($idproject)){
			$idproject = $this->input->post('idproject');
			$title = $this->input->post('title');
			$this->modelproject->resetProjectHome($idproject);
			$this->session->set_flashdata("message", "<div class=\"alert alert-success\" id=\"alert\"><i class=\"glyphicon glyphicon-ok\"></i> Feature home ". $title ." berhasil direset</div>"); 
			redirect('administrator/project');	
		}else{
			echo "";
		}
	}

	public function projectupdate()
	{
		$uri3 = $this->uri->segment(3);
		if($uri3 == ''){
			redirect('administrator/project');
		}else{
			$data = array(
				'title' => 'Project Update | Subianto & Siane Architecture',
				'username' => $this->tank_auth->get_username(),
				'projectactive' => 'active',
				'idproject' => $uri3,
				'loadallproject' => $this->modelproject->loadAllProjectUpdate($uri3),
				'categoryall' => $this->modelproject->loadAllProjectCategory()
			);
		$this->load->view('admin/project_update', $data);
		}	
	}

	public function projectupdatesubmit()
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
			$ids = $this->input->post('id');
			$title = $this->input->post('title');
			$description = $this->input->post('description');
			$category = $this->input->post('category');
			$projectstory = $this->input->post('projectstory');
			$date = $this->input->post('date');
			$client = $this->input->post('client');
			$status = $this->input->post('status');
			$location = $this->input->post('location');
			// $projecturi = $this->create_slug($title);
			$projecturi = $this->sluggify($title);
			$this->modelproject->updateProject($ids, $title, $description, $category, $projectstory, $date, $client, $status, $location, $projecturi);
			//$id = mysql_insert_id();
			$this->session->set_flashdata("message", "<div class=\"alert alert-success\" id=\"alert\"><i class=\"glyphicon glyphicon-ok\"></i> Project ". $title ." berhasil diubah</div>"); 
			redirect('administrator/project');
		}
	}

	public function projectdelete($id)
	{
		$idproject = $id;
		$tableProject = $this->modelproject->loadProject('id', $idproject);
		if(!empty($tableProject)){
			$detailproject = $this->modelproject->loadPhotoDetail($id);
			if(isset($detailproject)){
				foreach($detailproject as $dp){
					if($dp->photo != "" || $dp->photo != NULL){
						if(file_exists('./uploads/project/' . $dp->photo)){
							$do = unlink('./uploads/project/' . $dp->photo);
						}
					}
				}
				$this->modelproject->deleteProjectDetail($id);
				$this->modelproject->deleteProject($id);
				$this->session->set_flashdata('message', '<div class="alert alert-success">'.ucwords($project).' telah berhasil dihapus!</div>');
				redirect('administrator/project');
			}else{
				$this->modelproject->deleteProject($id);
				$this->session->set_flashdata('message', '<div class="alert alert-success">'.ucwords($project).' telah berhasil dihapus!</div>');
				redirect('administrator/project');
			}
			
		}else{
			$this->session->set_flashdata('message', '<div class="alert alert-success">'.ucwords($project).' gagal dihapus!</div>');
			redirect('administrator/project');
		}
	}

	public function photoedit($id)
	{
		$uri3 = $this->uri->segment(3);
			$data = array(
				'title' => 'Project Edit Photo | Subianto & Siane Architecture',
				'username' => $this->tank_auth->get_username(),
				'projecthome' => $this->modelproject->loadAllPhotoHome($id),
				'idproject' => $uri3
			);
			$this->load->view('admin/photo_edit', $data);	
	}

	public function photodeletesubmit()
	{
		$photo = $this->input->post('photo');
		$id = $this->input->post('id');
			if(!empty($photo)){
				$detailproject = $this->modelproject->loadDeletePhoto($photo);
				foreach($detailproject as $dp){
					if($dp->photo != "" || $dp->photo != NULL){
						if(file_exists('./uploads/project/' . $dp->photo)){
							$do = unlink('./uploads/project/' . $dp->photo);
						}
					}
				}
				$this->modelproject->deletePhoto($photo);
				$this->session->set_flashdata('message', '<div class="alert alert-success">'.ucwords($project).' telah berhasil dihapus!</div>');
				redirect('administrator/project');
			}else{
				$this->session->set_flashdata('message', '<div class="alert alert-success">'.ucwords($project).' telah gagal dihapus!</div>');
				redirect('administrator/project');
			}
	}

	public function messagecenter()
	{
		$data = array(
				'title' => 'Message Center | Subianto & Siane Architecture',
				'username' => $this->tank_auth->get_username(),
				'messageactive' => 'active',
				'loadallmessage' => $this->modelmessagecenter->loadallmessage(),
			);
		$this->load->view('admin/messagecenter', $data);
	}

	public function messageupdateread($id)
	{
		$idcat = $id;
		$this->modelmessagecenter->updateStatusRead($idcat);
		redirect('administrator/messagecenter');
	}

	public function sendingmail()
	{
		/*$configsmtpgmail = array(
		 	'protocol' => 'smtp',
		 	'smtp_host' => 'ssl://smtp.googlemail.com',
		 	'smtp_port' => 465,
		 	'smtp_user' => 'willi.ilmukomputer@gmail.com',
		 	'smtp_pass' => '0s4pr1l!98g',
		 	'smtp_timeout' => 5,
		 	'wordwrap' => TRUE,
		 	'crlf' => '\r\n',
		 	'newline' => '\r\n'
		);
		$this->email->initialize($configsmtpgmail);*/
		
		$id = $this->input->post('id');
		$name = $this->input->post('recipient-name');
		$email = $this->input->post('recipient-email');
		$subject = $this->input->post('subject');
		$message = $this->input->post('message');
		$configsendmail = array(
			'useragent' => 'inerre website',
			'protocol' => 'sendmail',
		 	'mailpath' => '/usr/sbin/sendmail',
		 	'smtp_host' => 'localhost',
		 	'smtp_port' => 25,
		 	'charset' => 'utf-8',
		 	'wordwrap' => TRUE,
		 	'crlf' => '\r\n',
		 	'newline' => '\r\n'
		);
		$this->email->initialize($configsendmail);

		$this->email->from('info@inerre.com', 'INERRE Interior');
		$this->email->to($email);
		//$this->email->cc('');
		//$this->email->bcc('');
		$this->email->subject($subject);
		$this->email->message($message);
		$this->email->send();
		//if(! $this->email->send()){
		//	echo 'email not send';
		//}else{
		//echo $this->email->print_debugger();	
		//}
		$this->modelmessagecenter->updateStatusMessage($id);
		redirect('administrator/messagecenter');
	}

	public function photohome()
	{
		$data = array(
				'title' => 'Photo Feature Home | Subianto & Siane Architecture',
				'photohomeactive' => 'active',
				'username' => $this->tank_auth->get_username(),
				'projecthome' => $this->modelproject->loadFeaturedHome()
		);
		$this->load->view('admin/photo_featured_home', $data);
	}

	// public function tosha1()
	// {
	// 	echo sha1('subiantosiane');
	// }
}

/* End of file administrator.php */
/* Location: ./application/controllers/administrator.php */