<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Portfolio extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->model('modelportfolio');
	}

	public function index()
	{
		$data = array(
				'title' => 'Subianto & Siane Architecture - Project',
				'portfolioactlink' => 'act-link'
			);
		$this->load->view('public/portfolio', $data);
	}

	public function book($page){
		$requestPage = $page;
		$outputPage = $this->modelportfolio->loadBookPage($requestPage);
		$output;
		if(isset($outputPage)){
			$output = json_encode(array('message'=> 'page load', 'page_number'=> $outputPage->page_number, 'page_img'=> '<img src="assets/public/book/'.$outputPage->page_img.'"/>' ));
		}else{
			$output = json_encode(array('message'=> 'no page available' ));
		}
		die($output);
	}

}

/* End of file portfolio.php */
/* Location: ./application/controllers/portfolio.php */