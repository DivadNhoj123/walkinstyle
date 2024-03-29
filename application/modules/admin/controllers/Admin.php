<?php defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends MX_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model(array('model'));
        $this->load->library('upload');
    }
    function checkAccountNotNull()
    {
        $id = $this->nativesession->get('id');
        if ($id == NULL) {
            // $message = base64_encode("errorr~You must login first before you can acces the page.");
            // redirect(base_url('?m='.$message));
            redirect(base_url('/'));
        }
    }
    public function adminPanel()
    {
        $this->checkAccountNotNull();
        $id = $this->nativesession->get('id');
        $this->load->view('admin-panel/dashboard/admin-dashboard', $id);
    }

    public function product()
    {
        $shoes['shoes'] = $this->model->getShoes();
        $this->load->view('admin-panel/products/product', $shoes);
        // include('admin-panel/products/modals/add-modal');
    }

    public function add_product()
    {

        $shoes = $this->input->post('shoes');
        $brand = $this->input->post('brand');
        $category = $this->input->post('category');
        $color = $this->input->post('color');
        $description = $this->input->post('description');
        $price = $this->input->post('price');
        $qty = $this->input->post('qty');

        if ($_FILES['img']['name']) {
            $config['upload_path'] = './shoes/'; // set the directory path
            $config['allowed_types'] = 'gif|jpg|jpeg|png|GIF|JPG|PNG|JPEG'; // allowed file types
            $config['max_size'] = 2048; // max file size in KB

            // Load upload library and initialize
            $this->load->library('upload', $config);
            $this->upload->initialize($config);

            // Check if file is uploaded successfully
            if ($this->upload->do_upload('img')) {
                $fileData = $this->upload->data();
                $image = $fileData['file_name'];
            } else {
                // Error in uploading file
                $error = array('error' => $this->upload->display_errors());
                $this->session->set_flashdata('error', $error['error']);
                redirect('admin/product');
            }
        } else {
            // No file is selected
            $image = '';
        }
        $add_shoes = [

            'shoes_name' => $shoes,
            'brand' => $brand,
            'category' => $category,
            'color' => $color,
            'description' => $description,
            'price' => $price,
            'stock' => $qty,
            'img' => $image
        ];

        $add_shoes = $this->model->InsertData('shoes', $add_shoes);

        redirect(base_url('admin/product'));
    }
    public function update_product()
    {
        $id = $this->input->get('id');
        $shoes = $this->input->post('shoes');
        $brand = $this->input->post('brand');
        $category = $this->input->post('category');
        $color = $this->input->post('color');
        $description = $this->input->post('description');
        $price = $this->input->post('price');
        $qty = $this->input->post('qty');
        $default = $this->input->post('default');

        // Check if a file is uploaded
       // Check if a file is uploaded
if (isset($_FILES['img']['name']) && $_FILES['img']['name'] !== '') {
    // File upload handling
    $config['upload_path'] = './shoes/'; // set the directory path
    $config['allowed_types'] = 'gif|jpg|jpeg|png|GIF|JPG|PNG|JPEG'; // allowed file types
    $config['max_size'] = 2048; // max file size in KB

    // Load upload library and initialize
    $this->load->library('upload', $config);
    $this->upload->initialize($config);

    // Check if file is uploaded successfully
    if ($this->upload->do_upload('img')) {
        $fileData = $this->upload->data();
        $image = $fileData['file_name'];
    } else {
        // Error in uploading file
        $error = array('error' => $this->upload->display_errors());
        $this->session->set_flashdata('error', $error['error']);
        redirect('admin/product');
    }
} else {
    // No file is selected
    $image = '';
}

        // Prepare updated product data
        $update_product = [
            'shoes_name' => $shoes,
            'brand' => $brand,
            'category' => $category,
            'color' => $color,
            'description' => $description,
            'price' => $price,
            'stock' => $qty,
            'img' => $image
        ];

        var_dump($update_product);exit;
        $this->model->Update('shoes', $update_product, array('id' => $id));

        redirect(base_url('admin/product'));
    }

    public function logout()
    {
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
