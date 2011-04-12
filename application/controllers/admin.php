<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
/**
 *
 * Main admin controller
 *
 * @author        Steve Montambeault
 * @license        Apache License v2.0
 */
class Admin extends Admin_Controller {

    function __construct() {
        parent::__construct();
    }
    
    public function index()
    {
        $this->template->title(lang('cp_admin_title'))
            ->build('admin/dashboard');
    }
}
/* end of file: admin.php*/
/* Location: ./application/controllers/admin.php */

