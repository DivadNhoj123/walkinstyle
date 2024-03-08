<?php defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends MX_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model(array('model'));
    }

    public function adminPanel()
    {
        $this->load->view('admin-panel/dashboard/admin-dashboard');
    }
}
