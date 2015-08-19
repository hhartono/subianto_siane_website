<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Modelportfolio extends CI_Model {

	public function loadBookPage($requestPage)
	{
		$query = $this->db->query("
				SELECT bp.*
				FROM portfolio_book bp
				WHERE page_number = '$requestPage'
			");
		if($query->num_rows()>0){
			$data = $query->row();
			return $data;
		}
	}

}

/* End of file modelportfolio.php */
/* Location: ./application/models/modelportfolio.php */