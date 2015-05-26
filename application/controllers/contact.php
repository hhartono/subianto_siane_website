<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Contact extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->model('modelproject');
		$this->load->model('modelcontact');
	}
	
	public function index()
	{
		$data = array(
				'title' => 'Subianto & Siane Architecture - Contact',
				'contactactlink' => 'act-link',
				'loadphotoabout' => $this->modelproject->loadPhotoAbout(),
				'loadrandomphoto' => $this->modelproject->loadRandomPhoto()
			);
		$this->load->view('public/contact', $data);
	}

	// Email address verification, do not edit.
	function isEmail($email) {
		return(preg_match("/^[-_.[:alnum:]]+@((([[:alnum:]]|[[:alnum:]][[:alnum:]-]*[[:alnum:]])\.)+(ad|ae|aero|af|ag|ai|al|am|an|ao|aq|ar|arpa|as|at|au|aw|az|ba|bb|bd|be|bf|bg|bh|bi|biz|bj|bm|bn|bo|br|bs|bt|bv|bw|by|bz|ca|cc|cd|cf|cg|ch|ci|ck|cl|cm|cn|co|com|coop|cr|cs|cu|cv|cx|cy|cz|de|dj|dk|dm|do|dz|ec|edu|ee|eg|eh|er|es|et|eu|fi|fj|fk|fm|fo|fr|ga|gb|gd|ge|gf|gh|gi|gl|gm|gn|gov|gp|gq|gr|gs|gt|gu|gw|gy|hk|hm|hn|hr|ht|hu|id|ie|il|in|info|int|io|iq|ir|is|it|jm|jo|jp|ke|kg|kh|ki|km|kn|kp|kr|kw|ky|kz|la|lb|lc|li|lk|lr|ls|lt|lu|lv|ly|ma|mc|md|me|mg|mh|mil|mk|ml|mm|mn|mo|mp|mq|mr|ms|mt|mu|museum|mv|mw|mx|my|mz|na|name|nc|ne|net|nf|ng|ni|nl|no|np|nr|nt|nu|nz|om|org|pa|pe|pf|pg|ph|pk|pl|pm|pn|pr|pro|ps|pt|pw|py|qa|re|ro|ru|rw|sa|sb|sc|sd|se|sg|sh|si|sj|sk|sl|sm|sn|so|sr|st|su|sv|sy|sz|tc|td|tf|tg|th|tj|tk|tm|tn|to|tp|tr|tt|tv|tw|tz|ua|ug|uk|um|us|uy|uz|va|vc|ve|vg|vi|vn|vu|wf|ws|ye|yt|yu|za|zm|zw)$|(([0-9][0-9]?|[0-1][0-9][0-9]|[2][0-4][0-9]|[2][5][0-5])\.){3}([0-9][0-9]?|[0-1][0-9][0-9]|[2][0-4][0-9]|[2][5][0-5]))$/i",$email));
	}

	public function submitmessage()
	{
		$name = $this->input->post('name');
		$email = $this->input->post('email');
		$message = $this->input->post('comments');
		
		if($_POST)
		{
			/*
			$to_Email   	= "support@bestlooker.pro"; //Replace with recipient email address
			$subject        = 'Message from my website'; //Subject line for emails
			*/

			//check if its an ajax request, exit if not
		    if(!isset($_SERVER['HTTP_X_REQUESTED_WITH']) AND strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) != 'xmlhttprequest') {
			
				//exit script outputting json data
				$output = json_encode(
				array(
					'type'=>'error', 
					'text' => 'Request must come from Ajax'
				));
				
				die($output);
		    } 
			
			//check $_POST vars are set, exit if any missing
			//if(!isset($_POST["userName"]) || !isset($_POST["userEmail"]) || !isset($_POST["userMessage"]))
			if(!isset($name) || !isset($email) || !isset($message))
			{
				$output = json_encode(array('type'=>'error', 'text' => 'Input fields are empty!'));
				die($output);
			}

			//Sanitize input data using PHP filter_var().
			$user_Name        = filter_var($name, FILTER_SANITIZE_STRING);
			$user_Email       = filter_var($email, FILTER_SANITIZE_EMAIL);
			$user_Message     = filter_var($message, FILTER_SANITIZE_STRING);
			
			$user_Message = str_replace("\&#39;", "'", $user_Message);
			$user_Message = str_replace("&#39;", "'", $user_Message);
			
			//additional php validation
			if(strlen($user_Name)<4) // If length is less than 4 it will throw an HTTP error.
			{
				$output = json_encode(array('type'=>'error', 'text' => 'Name is too short or empty!'));
				die($output);
			}
			if(!filter_var($user_Email, FILTER_VALIDATE_EMAIL)) //email validation
			{
				$output = json_encode(array('type'=>'error', 'text' => 'Please enter a valid email!'));
				die($output);
			}
			if(strlen($user_Message)<5) //check emtpy message
			{
				$output = json_encode(array('type'=>'error', 'text' => 'Too short message! Please enter something.'));
				die($output);
			}
			
			if((strlen($user_Name)>=4) && (filter_var($user_Email, FILTER_VALIDATE_EMAIL)) && (strlen($user_Message)>=5)){

				$insertmessage = $this->modelcontact->insertContact($name, $email, $message);

				// sending notification
				/*$infoatinerre = 'info@inerre.com';
				$subject = "INERRE WEBSITE Notification - New Message from ".ucwords($name)." (".$email.")";
				$messagenotification = ucwords($name)." (".$email.") send a message from contact form <br> <blockquote>".$user_Message."</blockquote>";
				$configmail = array(
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
				$this->email->initialize($configmail);
				$this->email->from('info@inerre.com', 'INERRE Interior');
				$this->email->to($infoatinerre);
				$this->email->subject($subject);
				$this->email->message($messagenotification);
				$this->email->send();*/
				// end sending notification
				
				$output = json_encode(array('type'=>'message', 'text' => 'Hi '.$user_Name .'! Thank you for your email'));
				die($output);
			}
			
		}

	}

}

/* End of file contact.php */
/* Location: ./application/controllers/contact.php */