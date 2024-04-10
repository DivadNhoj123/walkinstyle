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
    }

    public function orders()
    {
        $order['orders'] = $this->model->getOrders();
        $this->load->view('admin-panel/orders/order', $order);
    }

    public function client()
    {
        $client['clients'] = $this->model->getClient();
        $this->load->view('admin-panel/clients/clients', $client);
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

        if ($add_shoes) {
            redirect(base_url('admin/product?success=true&method=add'));
        } else {
            // Set error flag if insertion fails
            redirect(base_url('admin/product?error=true'));
        }


        redirect(base_url('admin/product'));
    }

    public function update_product($id)
    {
        $shoes = $this->input->post('shoes');
        $brand = $this->input->post('brand');
        $category = $this->input->post('category');
        $color = $this->input->post('color');
        $description = $this->input->post('description');
        $price = $this->input->post('price');
        $qty = $this->input->post('qty');
        $default = $this->input->post('default');


        if ($_FILES['img']['name'][0]) {
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
            $image = $default;
        }
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

        $this->model->update('shoes', $update_product, array('id' => $id));

        redirect(base_url('admin/product?success=true&method=update'));
    }


    public function delete_product()
    {
        if ($this->input->is_ajax_request()) {
            $shoes_id = $this->input->post('shoes_id');
            $condition = array('id' => $shoes_id);

            $this->model->deleteData('shoes', $condition);

            $response = array('success' => true, 'message' => 'Candidate deleted successfully.');
            echo json_encode($response);
        } else {
            show_404();
        }
    }

    public function delete_client()
    {
        if ($this->input->is_ajax_request()) {
            $client_id = $this->input->post('client_id');
    
            $where = array('id' => $client_id);

            $this->model->deleteData('user_account', $where);
    
            $this->model->deleteData('user_info', $where);
    
            $response = array('success' => true, 'message' => 'Client deleted successfully.');
            echo json_encode($response);
        } else {
            show_404();
        }
    }

    public function logout()
    {
        $this->nativesession->delete('id');
        redirect(base_url());
    }
}
