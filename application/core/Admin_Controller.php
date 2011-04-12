<?php (defined('BASEPATH')) OR exit('No direct script access allowed');

class Admin_Controller extends MY_Controller
{
	
	function __construct() {
		parent::__construct();
		
        $this->lang->load('admin');
		// logic for template
	    $this->template->set_layout('default', 'admin');
		$this->template
			->set_partial('header', 'admin/partials/header')
			->set_partial('metadata', 'admin/partials/metadata')
			->set_partial('menu', 'admin/partials/menu')
			->set_partial('aside', 'admin/partials/aside')
			->set_partial('footer', 'admin/partials/footer');
	}
	
}
/* End of file Public_Controller.php */
/* Location: ./application/core/Public_Controller.php */
