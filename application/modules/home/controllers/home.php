<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends Public_Controller {

	
	function __construct(){
		parent::__construct();
	}
	
	/**
	 * @access public
	 * @param string $method The method to call
	 * @return void
	 */
	function index()
	{	

		$this->template->build('home');
	}
	
	
}

/* End of file Controller.php */
/* Location: ./application/modules/controller/Controller.php */