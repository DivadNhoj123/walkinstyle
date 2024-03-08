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

	public function index()
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
		$zipcode = $this->input->post('zipcode');
		$email = $this->input->post('email');
		$phone = $this->input->post('phone');
		$password = $this->input->post('password');
		$re_password = $this->input->post('re_password');

		if ($password == $re_password) {
			$account_info =
				[
					'role' => 0,
					'email' => $email,
					'password' => base64_encode(md5($password)),
				];
			$account_id = $this->model->insertData('user_account', $account_info);

			$user_info =
				[
					'account_id' => $account_id,
					'first_name' => $fname,
					'last_name' => $lname,
					'middle_name' => $mi,
					'address' => $address,
					'zipcode' => $zipcode,
					'phone' => $phone
				];


			if ($this->model->insertData('user_info', $user_info)) {
				echo 'inserted';
			} else {
			}
		} else {
			echo 'wrong';
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

		if($row != NULL)
		{
			$this->nativesession->set('id', $row->id);

			if($row->role == 0)
			{
				redirect(base_url('admin/adminPanel'));
			}
			elseif($row->role == 1)
			{
				echo 'user ni';
			}
		}
		else
		{
			echo 'wrong password';
		}
		
	}
}
