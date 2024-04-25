<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Root extends MX_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model(array('model'));
		$this->load->library('nativesession');
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

	public function index()
	{
		$shoes['shoes'] = $this->model->getShoes();
		$this->load->view('landing_page', $shoes);
	}

	public function login()
	{
		$this->load->view('login_page');
	}
	public function registration_form()
	{
		$this->load->view('registration');
	}

	public function registration_process()
	{
		$fname = $this->input->post('fname');
		$lname = $this->input->post('lname');
		$mi = $this->input->post('mi');
		$address = $this->input->post('address');
		$zipcode = $this->input->post('zcode');
		$country = $this->input->post('country');
		$email = $this->input->post('email');
		$phone = $this->input->post('phone');
		$password = $this->input->post('password');
		$re_password = $this->input->post('re_pass');

		if ($password == $re_password) {
			$account_info = [
				'role' => 1,
				'email' => $email,
				'password' => base64_encode(md5($password)),
			];
			$account_id = $this->model->insertData('user_account', $account_info);

			$user_info = [
				'account_id' => $account_id,
				'first_name' => $fname,
				'last_name' => $lname,
				'middle_name' => $mi,
				'address' => $address,
				'zipcode' => $zipcode,
				'country' => $country,
				'phone' => $phone
			];

			if ($this->model->insertData('user_info', $user_info)) {
				$this->nativesession->set('id', $account_id);
				redirect(base_url('root/shop'));
			} else {
			}
		} else {
			echo 'Passwords do not match';
		}
	}

	public function login_process()
	{
		$email = $this->input->post('email');
		$password = $this->input->post('password');

		$loginInfo =
			[
				'email' => $email,
				'password' => base64_encode(md5($password))
			];

		$row = $this->model->CheckData($loginInfo);

		if ($row != NULL) {
			$this->nativesession->set('id', $row->id);

			if ($row->role == 0) {
				redirect(base_url('admin/adminPanel'));
			} elseif ($row->role == 1) {
				redirect(base_url('root/products'));
			}
		} else {
			echo 'wrong password';
		}
	}

	public function test()
	{
		// $shoes['shoes'] = $this->model->getShoes();
		$this->load->view('index');
	}

	public function products()
	{
		$id = $this->nativesession->get('id');
		$data['cart'] = $this->model->countCart($id);
		$data['shoes'] = $this->model->getShoes();
		$this->load->view('products/product-page', $data);
	}


	public function order()
	{
		$this->checkAccountNotNull();
		$data = $this->nativesession->get('id');
		$data['shoes'] = $this->model->getShoes();
		$this->load->view('order', $data);
	}

	// handles add to cart method
	public function add_cart()
	{
		$data = $this->nativesession->get('id');
		$shoesId = $this->input->post('shoes_id');
		$add_cart = [
			'buyer_id' => $data,
			'shoes_id' => $shoesId,
			'product_qty' => 1,
		];
		$orders = $this->model->InsertData('cart', $add_cart);

		if ($orders) {
			// Return success response
			echo json_encode(['success' => true]);
		} else {
			// Return error response
			echo json_encode(['success' => false]);
		}
	}
	// end handling add to cart method

	// handles checkout methods
	public function checkout()
	{
		$id = $this->nativesession->get('id');
		$selectedOrders = $this->input->post('order');
		$quantities = $this->input->post('quantity');
		$payment_methods = $this->input->post('payment_method');
		$amount = $this->input->post('amount');
		$recipient = $this->input->post('recipient');
		$address = $this->input->post('recip_address');
		$province = $this->input->post('recip_province');
		$zipcode = $this->input->post('recip_zipcode');

		$data = [];
		for ($i = 0; $i < count($selectedOrders); $i++) {
			$order_id = date('Y-m-d') . '-1';

			while ($this->model->checkOrderIdExists($order_id)) {
				$order_id_parts = explode('-', $order_id);
				$order_id = $order_id_parts[0] . '-' . ($order_id_parts[1] + 1);
			}

			$data[] = array(
				'order_id' => $order_id,
				'buyer_id' => $id[0],
				'shoes_id' => $selectedOrders[$i],
				'order_qty' => $quantities[$i],
				'payment_method' => $payment_methods,
				'status' => 'place order',
				'amount' => $amount,
				'date' => date('Y-m-d')
			);
		}

		$this->model->insert_orders($data);

		foreach ($selectedOrders as $shoe_id) {
			$this->model->delete_cart_item($id[0], $shoe_id);
		}

		$recipientData = [
			'orders_id' =>  $order_id,
			'recipient' => $recipient,
			'recip_address' => $address,
			'recip_province' => $province,
			'recip_zipcode' => $zipcode,
		];

		$this->model->InsertData('recipients', $recipientData);

		redirect('root/products');
	}
	// end handling checkout method

	public function cart()
	{
		$id = $this->nativesession->get('id');
		$data['cart'] = $this->model->countCart($id);
		$data['on_cart'] = $this->model->getCart($id);
		$this->load->view('products/product-cart', $data);
	}

	public function placeOrders()
	{
		$data = $this->nativesession->get('id');
		$shoesId = $this->input->post('shoes_id');
		$amount = $this->input->post('amount');
		$orderQty = $this->input->post('order_qty');

		$orders = [
			'buyer_id' => $data,
			'shoes_id' => $shoesId,
			'shipping_fee' => 150,
			'amount' => $amount,
			'order_qty' => $orderQty,
			'payment_method' => "none"
		];
		$orders = $this->model->InsertData('orders', $orders);

		if ($orders) {
			redirect(base_url('root/checkout/'));
		} else {
			// Set error flag if insertion fails
			redirect(base_url('root/checkout/'));
		}
	}

	public function checkout_Orders()
	{
		$data = $this->nativesession->get('id');
		$payment_method = $this->input->post('cod');
		$total_amount = $this->input->post('total_amount');

		$orders = [
			'buyer_id' => $data,
			'total_amount' => $total_amount,
			'payment_method' => $payment_method,
			'order_date' => date('Y-m-d')
		];

		$checkout = $this->model->InsertData('checkout', $orders);

		if ($checkout) {
			redirect(base_url('root/shop/'));
		} else {
			// Set error flag if insertion fails
			redirect(base_url('root/checkout/'));
		}
	}
}
