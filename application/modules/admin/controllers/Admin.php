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

    public function product()
    {
        $this->load->view('admin-panel/products/product');
    }

    public function logout() {
        $id = $this->nativesession->get('id'); // Retrieve session data
        $this->nativesession->delete('id'); // Delete session data
        
        // Send JSON response
        $response = array(
            'success' => true,
            'message' => 'Logged Out!'
        );
        echo json_encode($response);
    }
}
