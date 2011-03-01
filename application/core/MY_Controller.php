<?php (defined('BASEPATH')) OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller
{
	
	function __construct(){
		parent::__construct();
		
		//The Public_Controller and Admin_Controller will inherit this logic
		$this->template->title('MY project Template');
		
	}
	
}
/* End of file MY_Controller.php */
/* Location: ./application/core/MY_Controller.php */