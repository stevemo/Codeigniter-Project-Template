<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
/**
 *
 * Admin controller for the home modules
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
        echo 'admin module in home';
    }
}
/* end of file: admin.php*/
/* Location: /Users/stevemo/Sites/project-template/codeigniter-project-template/application/modules/home/controllers/admin.php */

