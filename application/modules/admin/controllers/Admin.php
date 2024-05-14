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
        $data['order_count'] = $this->model->count_orders();
        $data['order_accounts'] = $this->model->count_accounts();
        $data['order_courier'] = $this->model->count_courier();
        $this->load->view('admin-panel/dashboard/admin-dashboard', $data);
    }

    //handles for products routes
    public function product()
    {
        $shoes['shoes'] = $this->model->getShoes();
        $this->load->view('admin-panel/products/product', $shoes);
    }
    public function productAdd()
    {
        $this->load->view('admin-panel/products/product-add');
    }
    public function productEdit($id)
    {
        $product['product'] = $this->model->productEdits($id);
        $this->load->view('admin-panel/products/product-edit', $product);
    }
    //end handling for products routes

    //handles orders routes
    public function orders()
    {
        $order['orders'] = $this->model->getOrders();
        $order['couriers'] = $this->model->getCourier();
        $this->load->view('admin-panel/orders/order', $order);
    }
    public function viewOrders($id)
    {
        $data['orders'] = $this->model->orderView($id); // Assuming you have an orderView method in your model
        $data['products'] = $this->model->filterOrders($id);
        $this->load->view('admin-panel/orders/view-order', $data);
    }
    // Controller method to handle form submission
    public function deliverOrder($order_id)
    {
        // Retrieve data from the form
        $courier_id = $this->input->post('courier');

        // Call a method in the model to update the order with the new courier_id and status
        $result = $this->model->deliverOrder($order_id, $courier_id);

        // Check if the update was successful
        if ($result) {
            redirect('admin/orders');
        } else {
            echo "Failed to update courier information.";
        }
    }

    //end hamdling for orders routes

    //handles courier routes
    public function courier()
    {
        $courier['couriers'] = $this->model->getCourier();
        $this->load->view('admin-panel/courier/courier', $courier);
    }
    public function courierAdd()
    {
        $this->load->view('admin-panel/courier/courier-add');
    }
    public function add_courier()
    {
        $fname = $this->input->post('courier_name');
        $lname = $this->input->post('courier_lname');
        $email = $this->input->post('courier_email');
        $phone = $this->input->post('courier_phone');
        $address = $this->input->post('courier_address');

        if ($_FILES['img']['name']) {
            $config['upload_path'] = './shoes/'; // set the directory path
            $config['allowed_types'] = 'gif|jpg|jpeg|png'; // allowed file types
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
                redirect('admin/courier');
            }
        } else {
            // No file is selected
            $image = '';
        }

        // Generate random unique ID
        $courier_id = $this->generateRandomString(7);

        $add_courier = [
            'role' => 2,
            'courier_name' => $fname,
            'courier_lname' => $lname,
            'email' => $email,
            'courier_phone' => $phone,
            'courier_address' => $address,
            'courier_id' => $courier_id,
            'date_added' => date('Y-m-d'),
            'password' => base64_encode(md5('walkinstyle123')),
            'img' => $image
        ];

        $add_shoes = $this->model->InsertData('courier', $add_courier);

        if ($add_shoes) {
            redirect(base_url('admin/courier?success=true&method=add'));
        } else {
            // Set error flag if insertion fails
            redirect(base_url('admin/courier?error=true'));
        }
    }

    // Function to generate random string
    private function generateRandomString($length = 10)
    {
        $characters = '0123456789';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }
    public function CourierEdit($id)
    {
        $couriers['courier'] = $this->model->courierEdits($id);
        $this->load->view('admin-panel/courier/courier-edit', $couriers);
    }
    public function update_courier($id)
    {
        $fname = $this->input->post('courier_name');
        $lname = $this->input->post('courier_lname');
        $email = $this->input->post('courier_email');
        $phone = $this->input->post('courier_phone');
        $address = $this->input->post('courier_address');
        $recent_img = $this->input->post('recent_img');


        if ($_FILES['img']['name']) {
            $config['upload_path'] = './shoes/'; // set the directory path
            $config['allowed_types'] = 'gif|jpg|jpeg|png'; // allowed file types
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
                redirect('admin/courier');
            }
        } else {
            // No file is selected
            $image = $recent_img;
        }

        $update_courier = [
            'courier_name' => $fname,
            'courier_lname' => $lname,
            'courier_email' => $email,
            'courier_phone' => $phone,
            'courier_address' => $address,
            'img' => $image
        ];

        $this->model->update('courier', $update_courier, array('id' => $id));

        redirect(base_url('admin/courier?success=true&method=update'));
    }
    public function delete_courier()
    {
        if ($this->input->is_ajax_request()) {
            $courier_id = $this->input->post('courier_id');
            $condition = array('id' => $courier_id);

            $this->model->deleteData('courier', $condition);

            $response = array('success' => true, 'message' => 'Product deleted successfully.');
            echo json_encode($response);
        } else {
            show_404();
        }
    }
    //hadnles client routes
    public function client()
    {
        $client['clients'] = $this->model->getClient();
        $this->load->view('admin-panel/clients/clients', $client);
    }

    public function add_product()
    {

        $shoes = $this->input->post('product_name');
        $brand = $this->input->post('product_brand');
        $category = $this->input->post('category');
        $color = $this->input->post('color');
        $description = $this->input->post('description');
        $price = $this->input->post('price');
        $qty = $this->input->post('qty');

        if ($_FILES['img']['name']) {
            $config['upload_path'] = './shoes/'; // set the directory path
            $config['allowed_types'] = 'gif|jpg|jpeg|png'; // allowed file types
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
        $product_name = $this->input->post('product_name');
        $product_brand = $this->input->post('product_brand');
        $category = $this->input->post('category');
        $color = $this->input->post('color');
        $description = $this->input->post('description');
        $price = $this->input->post('price');
        $qty = $this->input->post('qty');
        $recent_img = $this->input->post('recent_img');


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
            $image = $recent_img;
        }
        $update_product = [
            'shoes_name' => $product_name,
            'brand' => $product_brand,
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

            $response = array('success' => true, 'message' => 'Product deleted successfully.');
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

            $where1 =  array('account_id' => $client_id);
            $this->model->deleteData('user_info', $where1);

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
