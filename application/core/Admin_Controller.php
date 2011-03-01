<?php (defined('BASEPATH')) OR exit('No direct script access allowed');

class Admin_Controller extends MY_Controller
{
	
	function __construct(){
		parent::__construct();
		
		// logic for template
		$this->template->set_theme('default')
			->set_layout('default')
			->set_partial('metadata','metadata')
			->set_partial('header','header')
			->set_partial('footer','footer');
			
		//set the theme for asset
		$this->asset->set_theme('default');
		
		//admin logic go here
	}
	
}
/* End of file Public_Controller.php */
/* Location: ./application/core/Public_Controller.php */